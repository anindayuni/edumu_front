<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><i class="glyphicon glyphicon-globe"></i>&nbsp; Sekolah</h3>
        <div class="breadcrumb">
          <a href="<?= base_url('mastercms'); ?>">Home</a> /
          <a href="#" class="curpage">Blog</a>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <?php echo $this->session->flashdata('msg'); ?>
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-list"></i>&nbsp; Daftar Sekolah</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>Logo</th>
                  <th>Sekolah</th>
                  <th>Telp.</th>
                  <th>Email</th>
                  <th width="80px;">Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                  <tr>
                    <td></td>
                    <td class="text-center"><img src="" style="width: 50px;"></td>
                    <td>
                      <!-- <?= substr(strip_tags($value['blog_title']), 0,80) ?><br/>
                      <span style="color: red;">-- <?= $value['category_name']; ?></span> -->
                    </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td align="right">
                      <a href="#" type="button" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
                      <a href="#" type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                      <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target=".delblog-0"><i class="fa fa-trash-o"></i></button>
                    </td>
                  </tr>
                  <!-- modal start -->
                  <div class="modal fade delblog-0" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content text-center">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2"><i class="glyphicon glyphicon-alert"></i>&nbsp; Hapus Sekolah !</h4>
                        </div>
                        <div class="modal-body">
                          <h5>Yakin ingin menghapus <b>""</b> ?</h5>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Tidak</button>
                          <a href="" type="button" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp; Ya</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal start -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>            
  </div>
</div>

<!-- modal addsekolah -->
<div class="modal fade" id="addsekolah" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2"><i class="glyphicon glyphicon-plus"></i>&nbsp; Tambah Sekolah</h4>
      </div>
      <div class="modal-body">
        <form name="tambah" class="form" method="post" enctype="multipart/form-data">
          <div class="form-group col-md-12">
            <label>Nama Sekolah * </label>
            <input type="text" class="form-control" minlength="10" id="sekolah_nama" placeholder="" required />
          </div>
          <div class="form-group col-md-6">
            <label>Email * </label>
            <input type="email" class="form-control" minlength="10" id="sekolah_email" placeholder="" required />
          </div>
          <div class="form-group col-md-6">
            <label>Telp. * </label>
            <input type="number" class="form-control col-md-6" minlength="10" id="sekolah_telp" placeholder="" required />
          </div>
          <div class="form-group col-md-12">
            <label>Alamat * </label>
            <input type="text" class="form-control" minlength="10" id="sekolah_alamat" placeholder="" required />
          </div>
          <div class="form-group col-md-12">
            <label>Gambar Sekolah * </label>
            <input type="file" class="form-control" id="sekolah_image" required />
          </div>
          <div class="pull-right">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
            <button class="btn btn-success" onclick="add()" type="button"><i class="fa fa-check"></i>&nbsp; Simpan</button>
          </div>
        </form>
      </div>
      <div class="modal-footer"> </div>
    </div>
  </div>
</div>

<script>
  
    function add() {
        var sekolah_nama = $("#sekolah_nama").val();
        var sekolah_email = $("#sekolah_email").val();
        var sekolah_telp = $("#sekolah_telp").val();
        var sekolah_alamat = $("#sekolah_alamat").val();
        var sekolah_image = $("#sekolah_image").val();
      
        $.ajax({
            url:"<?php echo base_url() ?>mastercms/sekolah/addsekolah",
            data:"sekolah_nama="+sekolah_nama+"&sekolah_email="+sekolah_email+"&sekolah_telp="+sekolah_telp+"&sekolah_alamat="+sekolah_alamat+"&sekolah_image="+sekolah_image,
            success: function (html) {
           alert('sukses');
          
       }
   })


}


</script>