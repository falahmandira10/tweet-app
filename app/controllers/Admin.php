<?php

class Admin extends Controller
{
  public function index()
  {
    // if (!isset($_SESSION['email'])) {
    //   header('Location: ' . BASEURL . '/authentication/login');
    //   exit;
    // }

    $data['title'] = 'homepage admin'; // title tab
    $data['styles'] = ['theme.css', 'like.css'];
    $data['scripts'] = ['search_user.js', 'like.js'];

    $data['user'] = $this->model('User_model')->getAllUser();

    $this->view('templates/header', $data);
    $this->view('templates/navbar_admin', $data);
    $this->view('admin/index', $data);
    $this->view('templates/footer', $data);
  }

  public function edit($userId)
  {
    // if (!isset($_SESSION['email'])) {
    //   header('Location: ' . BASEURL . '/authentication/login');
    //   exit;
    // }

    $data['title'] = 'homepage admin'; // title tab
    $data['styles'] = ['theme.css', 'like.css'];
    $data['scripts'] = ['search_user.js', 'like.js'];

    $data['user_current'] = $this->model('User_model')->getUserById($userId);

    $this->view('templates/header', $data);
    $this->view('templates/navbar_admin', $data);
    $this->view('admin/edit_user', $data);
    $this->view('templates/footer', $data);
  }

  public function updateUser()
  {
    if (isset($_POST["edit_user"])) {
      if ($this->model('User_model')->updateUser($_POST) > 0) {
        header('Location: ' . BASEURL . '/admin');
        exit;
      }
    } else {
      // if (!isset($_SESSION['email'])) {
      //   header('Location: ' . BASEURL . '/authentication/login');
      //   exit;
      // }

      $data['title'] = 'Edit Data for Admin'; // tab title
      $data['styles'] = ['theme.css'];
      $data['scripts'] = ['search_user.js'];

      $data['user'] = $this->model('User_model')->getAllUser();

      $this->view('templates/header', $data);
      $this->view('templates/navbar_admin', $data);
      $this->view('admin/index', $data);
      $this->view('templates/footer', $data);
    }
  }

  public function deleteUser()
  {
    if (isset($_POST["del_btn"])) {
      if ($this->model('User_model')->deleteUser($_POST) > 0) {
        header('Location: ' . BASEURL . '/admin');
        exit;
      }
    } else {
      // if (!isset($_SESSION['email'])) {
      //   header('Location: ' . BASEURL . '/authentication/login');
      //   exit;
      // }

      $data['title'] = 'Edit Data for Admin'; // tab title
      $data['styles'] = ['theme.css'];
      $data['scripts'] = ['search_user.js'];

      $data['user'] = $this->model('User_model')->getAllUser();

      $this->view('templates/header', $data);
      $this->view('templates/navbar_admin', $data);
      $this->view('admin/index', $data);
      $this->view('templates/footer', $data);
    }
  }
}
