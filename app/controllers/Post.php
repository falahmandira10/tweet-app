<?php

class Post extends Controller
{
  public function index()
  {
    if (!isset($_SESSION['email'])) {
      header('Location: ' . BASEURL . '/authentication/login');
      exit;
    }

    $data['title'] = 'Post'; // tab title
    $data['styles'] = ['theme.css'];
    $data['scripts'] = ['search_user.js'];

    $data['user'] = $this->model('User_model')->getUser($_SESSION['email']);

    $this->view('templates/header', $data);
    $this->view('post/index', $data);
    $this->view('templates/footer', $data);
  }

  public function new()
  {
    if ($this->model('Post_model')->addPost($_POST) > 0) {
      header('Location: ' . BASEURL . '/home');
      exit;
    }
  }
}
