<?php $this->load->view('template/header'); 
      if ($this->session->userdata('data') != "masuk") {
        redirect(base_url());
        }?>
<!-- sidebar: style can be found in sidebar.less -->
<aside class="main-sidebar">
<section class="sidebar">
 <!-- search form -->
 <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><b class="pull-right">MENU</b></li>
        <li>
          <a href="<?= base_url() ?>index.php/Perpustakaan_ci/Beranda">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
        </li>
        <li>
        <a href="<?= base_url() ?>index.php/Perpustakaan_ci/Pustaka">
            <i class="fa fa-file-text"></i> <span>Daftar Buku</span>
          </a>
        </li>
        <li>
        <a href="<?= base_url() ?>index.php/Perpustakaan_ci/User">
            <i class="fa fa-users"></i> <span>Daftar User</span>
          </a>
        </li>
      </ul>
    </section>