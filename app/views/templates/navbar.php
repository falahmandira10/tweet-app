<?php
// var_dump(explode('/',  $_GET['url']));
?>
<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <img class="me-2" src="<?= BASEURL; ?>/img/tweet-logo.png" width="50" alt="tweet logo">
    <a class="navbar-brand" href="<?= BASEURL; ?>/home">TweetApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php if (!isset($_GET['url'])) { ?>
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
          <?php } else if (explode('/',  $_GET['url'])[0] == 'home') { ?>
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
          <?php } else { ?>
            <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
          <?php } ?>
        </li>
        <li class="nav-item">
          <?php if (!isset($_GET['url'])) { ?>
            <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/friends/<?= $data['cur_user']['username']; ?>/mutual">Friends</a>
          <?php } else if (explode('/',  $_GET['url'])[0] == 'friends') { ?>
            <a class="nav-link active" href="<?= BASEURL; ?>/friends/<?= $data['cur_user']['username']; ?>/mutual">Friends</a>
          <?php } else { ?>
            <a class="nav-link" href="<?= BASEURL; ?>/friends/<?= $data['cur_user']['username']; ?>/mutual">Friends</a>
          <?php } ?>
        </li>
        <li class="nav-item">
          <?php if (!isset($_GET['url'])) { ?>
            <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/post">Post</a>
          <?php } else if (!isset($_GET['url']) || explode('/',  $_GET['url'])[0] == 'post') { ?>
            <a class="nav-link active" href="<?= BASEURL; ?>/post">Post</a>
          <?php } else { ?>
            <a class="nav-link" href="<?= BASEURL; ?>/post">Post</a>
          <?php } ?>
        </li>
      </ul>
      <ul class="navbar-nav w-100 justify-content-center">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" data-bs-toggle="modal" data-bs-target="#searchUserModal">
        </form>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= $data['cur_user']['picture']; ?>" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong><?= $data['cur_user']['fullname'] ?? $data['cur_user']['username']; ?></strong>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASEURL; ?>/profile">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?= BASEURL; ?>/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
