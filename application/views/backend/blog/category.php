<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><i class="glyphicon glyphicon-tag"></i>&nbsp; Kategori</h3>
        <div class="breadcrumb">
          <a href="<?= base_url('mastercms'); ?>">Home</a> /
          <a href="#" class="curpage">Kategori</a>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-8">
        <?php echo $this->session->flashdata('msg'); ?>
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-list"></i>&nbsp; Kategori </h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="15px">No</th>
                  <th>Kategori Blog</th>
                  <th width="15%" align="right">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $data = json_decode($category, true); ?>
                <?php foreach ($data as $key => $value): ?>
                  <tr>
                    <th scope="row"><?= $key+1; ?></th>
                    <td><?= $value['category_name']; ?></td>
                    <td align="right">
                      <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#editCat-<?= $value['category_id']; ?>"><i class="fa fa-pencil-square-o"></i></button>
                      <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#delCat-<?= $value['category_id']; ?>"><i class="fa fa-trash-o"></i></button>
                    </td>
                  </tr>
                  <!-- modal edit -->
                  <div class="modal fade bs-example-modal-sm" id="editCat-<?= $value['category_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <form name="editCat" method="post" data-parsley-validate>
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-pencil"></i>&nbsp; Edit Kategori</h4>
                          </div>
                          <div class="modal-body">
                            <input type="text" id="fullname" class="form-control" name="category_name" placeholder="Kategori" value="<?= $value['category_name']; ?>" required />
                            <br/>
                            <div class="form-group">
                              <input type="radio" class="flat" name="category_status" value="<?= $value['category_status'] ?>" <?php if($value['category_status']=='1') echo "checked"; ?> required />&nbsp; Aktif &nbsp;&nbsp;
                              <input type="radio" class="flat" name="category_status" <?php if($value['category_status']=='0') echo "checked"; ?> value="<?= $value['category_status'] ?>" />&nbsp; Non Aktif
                            </div>
                            <br/>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
                            <button name="category_id" value="<?= $value['category_id']; ?>" type="submit" class="btn btn-success"><i class="fa fa-check"></i>&nbsp; Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete -->
                  <div class="modal fade" id="delCat-<?= $value['category_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content text-center">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2"><i class="glyphicon glyphicon-alert"></i>&nbsp; Hapus Kategori !</h4>
                        </div>
                        <div class="modal-body">
                          <h5>Yakin ingin menghapus <b>"<?= $value['category_name']; ?>"</b> ?</h5>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Tidak</button>
                          <a href="<?= base_url('mastercms/blog/delCat/').$value['category_id']; ?>" type="button" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp; Ya</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-plus"></i>&nbsp; Tambah Kategori</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form-horizontal form-label-left">
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input type="text" class="form-control" placeholder="Nama Kategori" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input type="radio" class="flat" name="gender" checked="" value="1" required /> Aktif &nbsp;&nbsp;
                  <input type="radio" class="flat" name="gender" value="0" /> Non Aktif 
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>

    </div>            
  </div>
</div>