<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body style="font-family:poppins; background-color: #fff6de">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark shadow-lg">
<div class="container">
  <a class="navbar-brand" href="<?= base_url('admin/dashboard_admin')?>"><img src="https://static-assets.profiles.hallyulife.com/izone-logo-fix.png" width="100px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item  mx-2">
        <a class="nav-link" href="<?= base_url(); ?>admin/data_barang"><i class="fas fa-boxes mr-1"></i> Data Barang </a>
      </li>
      <li class="nav-item  mx-2">
        <a class="nav-link" href="<?= base_url(); ?>admin/invoice"><i class="fas fa-money-bill-wave mr-1"></i> Invoice </a>
      </li>
    </ul>
    
    <ul class="navbar-nav">
        <li class="nav-item m-2">
						<a class="nav-link" style="font-weight:600" href="#">Admin </a>
				</li>
				<?php echo anchor('auth/logout',' <li class="nav-link btn btn-danger btn-sm text-white m-2" style="text-decoration: none;">Keluar</li>')?> 
    </ul>
  </div>
  </div>
</nav>
