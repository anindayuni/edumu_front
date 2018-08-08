<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><i class="glyphicon glyphicon-globe"></i>&nbsp; Artikel</h3>
        <div class="breadcrumb">
          <a href="<?= base_url('mastercms'); ?>">Home</a> /
          <a href="<?= base_url('mastercms/blog/show') ?>">Blog</a> / 
          <a href="#" class="curpage">Detail Artikel</a>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-8">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-eye"></i>&nbsp; Detail Artikel</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="">
              <h3><?= $detail['blog_title'] ?></h3>
              <?php if (!empty($detail['blog_image'])): ?>
                <img src="<?= base_url('/assets/img/article/').$detail['blog_image']; ?>" style="width: 70%;" class="text-center">
              <?php endif ?>
              <br />
              <br />
              <p><?= $detail['blog_content']; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-info-circle"></i>&nbsp; Informasi</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="text-center mtop20">
              <button type="button" onclick="goBack()" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Arsip</button>
              <a href="<?= base_url('mastercms/blog/edit/').$detail['blog_id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".delblog"><i class="fa fa-trash-o"></i> Hapus</button>
            </div>
            <section class="panel" style="margin-top: 10px;">
              <table class="table table-hover pull-left">
                <thead></thead>
                <tbody>
                  <tr>
                    <td style="width: 40%;"><i class="fa fa-list">&nbsp;</i> Kategori</td>
                    <td style="color: blue;"><?= $detail['category_name']; ?></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><i class="fa fa-calendar">&nbsp;</i> Tgl. Upload</td>
                    <td style="color: blue;"><?= date('d M Y h:i:s', strtotime($detail['publish_date'])); ?></td>
                  </tr>
                  <tr>
                    <td style="width: 40%;"><i class="fa fa-certificate">&nbsp;</i> Status</td>
                    <td>
                      <?php if ($detail['blog_status']=='publish'): ?>
                        <span class="btn btn-success btn-xs">publish</span>
                      <?php else: ?>
                        <span class="btn btn-warning btn-xs">draf</span>
                      <?php endif ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </div>

    </div>            
  </div>
</div>

<div class="modal fade delblog" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2"><i class="glyphicon glyphicon-alert"></i>&nbsp; Hapus Artikel !</h4>
      </div>
      <div class="modal-body">
        <h5>Yakin ingin menghapus <b>"<?= $detail['blog_title']; ?>"</b> ?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Tidak</button>
        <a href="<?= base_url('mastercms/blog/delblog/').$detail['blog_id']; ?>" type="button" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp; Ya</a>
      </div>

    </div>
  </div>
</div>