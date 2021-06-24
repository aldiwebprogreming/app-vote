  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 >Data peserta</h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">

              <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-bottom: 20px;">
                  Tambah Kwitansi
              </button> -->
              

          
            
              <!--   <a href="<?= base_url() ?>operator/add_operator" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Operator</a> -->
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode peserta</th>
                  <th>Nama peserta</th>
                  <th>No.telp</th>
                  <th>Status</th>
                  <th>Opsi</th>
                
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; ?>
                 <?php foreach ($peserta as $data) { ?>
                <tr> 
                    <td><?= $no++; ?></td>
                    <td><?= $data['kode_peserta'] ?></td>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['no_telp'] ?></td>
                    <td>
                     
                        <?php 

                          if ($data['is_active'] == 1) {
                         ?>


                                               <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?= $data['id'] ?>">
                       Aktif
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <h5>Apakah kamu ingin nonaktifkanya ?</h5>
                              <form method="post" action="<?= base_url('admin/edit') ?>">
                                <input type="hidden" name="valaktif" id="valaktif" value="<?= $data['id'] ?>">

                                 <input type="hidden" name="email" id="valaktif" value="<?= $data['email'] ?>">
                                
                            </div>
                            <div class="modal-footer">

                              <div id="load1" class="spinner-border float-left" role="status" style="display: none;">
                                <span class="sr-only">Loading...</span>
                              </div>

                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" id="submitaktif">Submit</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                       


                      <?php } else { ?>
                         <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal2<?= $data['id'] ?>">
                       Tidak aktif
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal2<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <h5>Apakah kamu ingin mengaktifkanya ?</h5>
                              <form method="post" action="<?= base_url('admin/edit2') ?>">
                                <input type="hidden" name="non" value="<?= $data['id'] ?>">
                                 <input type="hidden" name="email" id="valaktif" value="<?= $data['email'] ?>">                                
                            </div>
                            <div class="modal-footer">
                              <div id="load2" class="spinner-border float-left" role="status" style="display: none;">
                                <span class="sr-only">Loading...</span>
                              </div>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" id="submit2">Submit</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                        
                        <?php } ?>
                      </td>
                    
                    <td>
                      
              

                     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaldet<?= $data['id'] ?>" style="">
                    Detail
                     </button>


                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalhps<?= $data['id'] ?>">
                       Hapus
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalhps<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <h4>Apakah anda ingin menghapus peserta ini ?</h4>
                            <form method="post" action="<?= base_url() ?>admin/hapus_peserta">
                                
                                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">OK</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      
                      <!-- <a href="<?= base_url() ?>kwitansi/cetak_kwitansi" class="btn btn-primary" target="_blank">Cetak</a> -->
                    </td>
                    
                   
                </tr>


       



        <!--   Modal Detail -->
            <div class="modal fade" id="modaldet<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>Detail peserta</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                
                  <style>
                    hr{
                      background-color: orange;
                    }
                  </style>

                  <label>Email : </label>
                  <p> <?= $data['email'] ?> </p>
                  <hr>

                  <label>Nama toko : </label>
                  <p> <?= $data['name_store'] ?> </p>
                  <hr>

                  <label>Provinsi : </label>
                  <p> <?= $data['prov'] ?>  </p>
                    <hr>

                   <label>Kabupaten : </label>
                  <p> <?= $data['kab'] ?>  </p>
                    <hr>


                   <label>Kecamatan : </label>
                  <p> <?= $data['kec'] ?>  </p>
                    <hr>


                   <label>Kalurahan : </label>
                  <p> <?= $data['kel'] ?>  </p>
                    <hr>

                  

                  <label>Waktu pendaftaran : </label>
                  <p> <?= $data['date_registrasi'] ?>  </p>
                  
                             
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>

                  </form>
              </div>
            </div>
          </div>

        <!-- Modal -->
            

              <?php } ?>

                    
                </tbody>
                <tfoot>
                <tr>
                 <th>No</th>
                  <th>Kode peserta</th>
                  <th>Nama peserta</th>
                  <th>No.telp</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
          </div>         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.conte
      <td><</td>nt -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<script src="<?php echo base_url() ?>assets_admin/alert.js"></script>



<script>
    
    $(document).ready(function(){
      $("#submitaktif").click(function(){
     
        $("#load1").show();
       
      })

       $("#submit2").click(function(){
     
        $("#load2").show();
       
      })


    })

</script>
  <!-- <script>

   // function tambah(){
   //  $("#tambah").click(function(){

   //    swal("Maaf!", " promo tidak dapat ditambah", "error");
   //  })
   // }
  </script> -->
