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

               <div id="list"></div>

                <?php $data = json_decode($category, true); ?>
                <?php foreach ($data as $key => $value): ?>
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
                            <input type="text" id="category_id_update" value="<?= $value['category_id']; ?>" required />
                            <input type="text" class="form-control" id="category_name_update" placeholder="Kategori" value="<?= $value['category_name']; ?>" required />
                            <br/>
                            <div class="form-group">
                              <input type="radio" class="flat" id="category_status_update<?= $value['category_id'] ?>" name="<?= $value['category_id'] ?>" value="1" <?php if($value['category_status']=='1') echo "checked"; ?> required />&nbsp; Aktif &nbsp;&nbsp;
                              <input type="radio" name="<?= $value['category_id'] ?>" class="flat" id="category_status_update<?= $value['category_id'] ?>" <?php if($value['category_status']=='0') echo "checked"; ?> value="0" />&nbsp; Non Aktif
                            </div>
                            <br/>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Batal</button>
                            <button name="category_id" value="" type="button" onClick="updateData<?= $value['category_id'] ?>()" class="btn btn-success"><i class="fa fa-check"></i>&nbsp; Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

<script type="text/javascript">
  
      function updateData<?= $value['category_id'] ?>()
    {
        var category_name = $("#category_name_update").val();
        var category_status = $("#category_status_update<?= $value['category_id'] ?>").val(); 
        var category_id = $("#category_id_update").val();

            $.ajax({
            url:"<?php echo base_url() ?>mastercms/blog/updateCat",
            data:"category_name="+category_name+"&category_status="+category_status+"&category_id="+category_id,
            success: function (html) {
           // $("#list").html(html);
           // alert('sukses');
           load();
       }
   })
    }

</script>

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
                  <input type="text" id="category_name" class="form-control" placeholder="Nama Kategori" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <input type="radio" class="flat" id="category_status" checked="" value="1" required /> Aktif &nbsp;&nbsp;
                  <input type="radio" class="flat" id="category_status" value="0" /> Non Aktif 
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="button" onclick="add()" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>

    </div>            
  </div>
</div>
<script type="text/javascript">


    function add() {
        var category_name = $("#category_name").val();
        var category_status = $("#category_status").val();

        $.ajax({
            url:"<?php echo base_url() ?>mastercms/blog/addCat",
            data:"category_name="+category_name+"&category_status="+category_status,
            success: function (html) {
           // $("#list").html(html);
           // alert('sukses');
           load();
       }
   })
      }

      function load () {
        $.ajax({
            url:"<?php echo base_url() ?>mastercms/blog/loadData",
        success: function (html) {
         $("#list").html(html);
     }
 })
       
    }


  
</script>
<body onload="load()">