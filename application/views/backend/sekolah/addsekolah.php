<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><i class="glyphicon glyphicon-globe"></i>&nbsp; Sekolah</h3>
        <div class="breadcrumb">
          <a href="<?= base_url('mastercms'); ?>">Home</a> /
          <a href="<?= base_url('mastercms/blog/show') ?>">Sekolah</a> / 
          <a href="#" class="curpage">Tambah Sekolah</a>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-plus"></i>&nbsp; Tambah Sekolah</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form" method="post" enctype="multipart/form-data">
              <div class="form-group col-md-12">
                <label>Nama Sekolah * </label>
                <input type="text" class="form-control" minlength="10" name="blog_title" placeholder="" required />
              </div>
              <div class="form-group col-md-6">
                <label>Telp. * </label>
                <input type="text" class="form-control" minlength="10" name="blog_title" placeholder="" required />
              </div>
              <div class="form-group col-md-6">
                <label>Telp. * </label>
                <input type="text" class="form-control col-md-6" minlength="10" name="blog_title" placeholder="" required />
              </div>
              <div class="form-group col-md-12">
                <label>Alamat * </label>
                <input type="text" class="form-control" minlength="10" name="blog_title" placeholder="" required />
              </div>
              <div class="form-group col-md-12">
                <label for="fullname">Gambar Sekolah * </label>
                <input type="file" class="form-control" name="blog_image" required />
              </div>
              <div class="pull-right">
                <button onclick="goBack()" class="btn btn-danger"><i class="fa fa-close"></i>&nbsp; Batal</button>
                <button class="btn btn-success" type="submit"><i class="fa fa-check"></i>&nbsp; Simpan</button>
              </div>

            </form> 
          </div>
        </div>
      </div>
    </div>            
  </div>
</div>