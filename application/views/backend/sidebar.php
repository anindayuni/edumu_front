<?php 
$hal = $this->uri->segment('2');
?>
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?= base_url('mastercms'); ?>" class="site_title"><i class="glyphicon glyphicon-education"></i> <span>Edumu CMS</span></a>
    </div>

    <div class="clearfix"></div>
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="<?= base_url('mastercms/home') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
          <li <?php if($hal == 'blog')echo "active"; ?>><a><i class="fa fa-edit"></i> Blog <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?= base_url('mastercms/blog/category') ?>">Kategori</a></li>
              <li><a href="<?= base_url('mastercms/blog/show') ?>">Arsip</a></li>
              <li><a href="<?= base_url('mastercms/blog/addblog') ?>">Tambah Artikel</a></li>
            </ul>
          </li>
          <li <?php if($hal == 'users') echo "active"; ?>><a><i class="fa fa-users"></i>  Pengguna <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?= base_url('mastercms/sekolah') ?>">Daftar Sekolah</a></li>
              <li><a href="#">Tambah Sekolah</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('mastercms/admin') ?>"><i class="fa fa-user"></i> Administrator</a></li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer">
      <a href="#keluar" data-placement="top" title="Logout" data-toggle="modal"> <span class="glyphicon glyphicon-off" aria-hidden="true"> Keluar</span> </a>      
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
<div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2"><i class="glyphicon glyphicon-alert"></i>&nbsp; Keluar !</h4>
      </div>
      <div class="modal-body">
        <h5>Yakin ingin keluar dari aplikasi ini ?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Tidak</button>
        <a href="<?= base_url('mastercms/logout'); ?>" type="button" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp; Ya</a>
      </div>
    </div>
  </div>
</div>
