<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><i class="glyphicon glyphicon-globe"></i>&nbsp; Artikel</h3>
        <div class="breadcrumb">
          <a href="<?= base_url('mastercms'); ?>">Home</a> /
          <a href="<?= base_url('mastercms/blog/show') ?>">Blog</a> / 
          <a href="#" class="curpage">Tambah Artikel</a>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-plus"></i>&nbsp; Tambah Artikel</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form" method="post" enctype="multipart/form-data">
              <div class="">
                <label for="fullname">Judul Artikel * </label>
                <input type="text" class="form-control" minlength="10" name="blog_title" required />
              </div>
              <div>
                <label class="control-label">Kategori Artikel * </label>
                <select class="form-control" name="category_id" required="required">
                  <option value="">Pilih Kategori</option>
                  <?php foreach ($showcategory as $key => $cat) : ?>
                    <option value="<?= $cat['category_id']; ?>">-- <?= $cat['category_name']; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div>
                <label for="fullname">Gambar Artikel * </label>
                <input type="file" class="form-control" name="blog_image" required />
              </div>
              <div>
                <label class="control-label">Isi Artikel * </label>
                <textarea class="ckeditor" id="ckeditor" name="blog_content"></textarea>
              </div>
              <br />
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input type="radio" class="flat" name="blog_status" value="publish" checked="" required /> Aktif &nbsp;&nbsp;
                  <input type="radio" class="flat" name="blog_status" value="draf" /> Non Aktif 
                </div>
              </div>

              <br/> 
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