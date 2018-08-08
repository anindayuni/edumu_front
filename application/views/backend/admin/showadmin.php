<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><i class="glyphicon glyphicon-globe"></i>&nbsp; Administrator</h3>
        <div class="breadcrumb">
          <a href="<?= base_url('mastercms'); ?>">Home</a> /
          <a href="#" class="curpage">Administrator</a>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <?php echo $this->session->flashdata('msg'); ?>
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-list"></i>&nbsp; Daftar Administrator</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>Logo</th>
                  <th>Administrator</th>
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
                    <td>
                      <!-- <?php if($value['blog_status']=='publish') echo "<span class='btn btn-success btn-xs'>publish</span>"; 
                      elseif($value['blog_status']=='draf') echo "<span class='btn btn-warning btn-xs'>draf</span>"; ?> -->
                    </td>
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
                          <h4 class="modal-title" id="myModalLabel2"><i class="glyphicon glyphicon-alert"></i>&nbsp; Hapus Administrator !</h4>
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