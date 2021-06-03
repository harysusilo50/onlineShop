<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body style="font-family:poppins;">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow-lg" style="background-color: black;">
<div class="container">
  <a class="navbar-brand" href="<?= base_url('homepage')?>"><img src="https://static-assets.profiles.hallyulife.com/izone-logo-fix.png" width="100px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mx-2">
        <a class="nav-link" href="<?= base_url('dashboard')?>">Home </a>
      </li>
      <li class="nav-item dropdown mx-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item my-2" href="<?= base_url('kategori/album')?>"><i class="fas fa-compact-disc mr-1"></i>Album</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item my-2" href="<?= base_url('kategori/idol')?>"><i class="fas fa-child mr-1"></i> Idol</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item my-2" href="<?= base_url('kategori/perlengkapan_konser')?>"><i class="fas fa-archive"></i> Perlengkapan Konser</a>
        </div>
      </li>
      <form class="form-inline mx-2">
      <input class="form-control mr-sm-2 " type="search" placeholder="Cari" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    	</form>
    </ul>
    
    <ul class="navbar-nav">
        <li class="nav-item m-3">
            <?= anchor('dashboard/detail_keranjang','<i class="fas fa-shopping-cart text-white"><span class="badge badge-pill badge-danger">'.$this->cart->total_items().'<span></i>'); ?>
        </li>

        <li class="nav-item m-2">
          <?php if($this->session->userdata('username')) {?>
          <li class="m-3 text-white">Welcome! <?php echo $this->session->userdata('username') ?></li>
         <?php echo anchor('auth/logout',' <li class="nav-link btn btn-danger btn-sm text-white m-2" style="text-decoration: none;">Keluar</li>')?> 
          <?php } else {?>
            <a class="nav-link btn btn-outline-secondary btn-sm text-white" style="font-weight:500" href="<?php echo base_url('auth/login');?>"> Masuk </a>
        </li>
        <li class="nav-item m-2">
            <a class="nav-link btn btn-light btn-sm text-dark" style="font-weight:600" href="<?= base_url('registrasi/index')?>"> Daftar </a> </li>
				<?php }?>
    </ul>
  </div>
	</div>
</nav>
