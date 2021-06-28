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
                  <h3 >Data produk</h3>
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
                  <th>Kode produk</th>
                  <th>Nama toko</th>
                  <th>Judul produk</th>
                  <th>Jumlah Vote</th>
                  <th>Gambar</th>
                  <th>Status</th>
                  <th>Opsi</th>
                
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; ?>
                 <?php foreach ($produk as $data) { ?>
                <tr> 
                    <td><?= $no++; ?></td>
                    <td><?= $data['kode_produk'] ?></td>
                    <td><?= $data['nama_toko'] ?></td>
                    <td><?= $data['judul_produk'] ?></td>
                    
                     <td>
                        <?php 

                            $jml = $this->db->get_where('tbl_vote',  array('kode_produk' => $data['kode_produk']))->num_rows();

                            echo $jml;

                         ?>

                    </td>
                      <td>
                     <img src="<?= base_url('produk/') ?><?= $data['gambar_produk'] ?>" alt="..." class="img-thumbnail" style="height: 70px;">
                       
                      </td>

                      <td>
                        <?php 

                          if ($data['status'] == 0) { ?>

                                <!-- Button trigger modal -->
                                  <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModalLongstatus<?= $data['id'] ?>">
                                    Belum aktif
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalLongstatus<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Pesan</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <h4>Apakah anda ingin mengaktifkan cake ini ?</h4>
                                          <form method="post" action="<?= base_url('admin/aktifProduk') ?>">
                                            
                                            <input type="hidden" name="id_produk" value="<?= $data['id'] ?>">

                                            <?php 
                                                $email = $this->db->get_where('tbl_registrasi_peserta', array('kode_peserta' => $data['kode_peserta']))->row_array();
                                               ?>

                                            <input type="hidden" name="email" value="<?= $email['email'] ?>">
                                          
                                        </div>
                                        <div class="modal-footer">
                                          <div id="load2" class="spinner-border float-left" role="status" style="display: none;">
                                          <span class="sr-only">Loading...</span>
                                        </div>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                            <?php }else { ?>

                               <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalLongstatus1<?= $data['id'] ?>">
                                    Sudah aktif
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalLongstatus1<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Pesan</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <h4>Apakah anda ingin menonaktifkan cake ini ?</h4>
                                          <form method="post" action="<?= base_url('admin/nonaktifProduk') ?>">
                                            <?php 
                                                $name = $this->db->get_where('tbl_registrasi_peserta', array('kode_peserta' => $data['kode_peserta']))->row_array();
                                               ?>
                                            
                                            <input type="hidden" name="id_produk" value="<?= $data['id'] ?>"
                                            >
                                             <input type="hidden" name="email" value="<?= $name['email'] ?>"
                                            >
                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Submit</button>
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


                    <!-- Button trigger modal -->
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?= $data['id'] ?>">
                       Hapus
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
                            <h4>Apakah anda ingin menghapus produk ini ?</h4>
                            <form method="post" action="<?= base_url() ?>admin/hapus_produk">
                                
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
                  <h5 class="modal-title" id="exampleModalLabel"><b>Detail produk</b></h5>
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

                  <label>Kode peserta : </label>
                  <p> <?= $data['kode_peserta'] ?> </p>
                  <hr>

                  <label>Nama peseta : </label>
                  <?php 
                    $name = $this->db->get_where('tbl_registrasi_peserta', array('kode_peserta' => $data['kode_peserta']))->row_array();
                   ?>
                  <p> <?= $name['name'] ?> </p>
                  <hr>

                  <label>No.telp</label>
                  <p> <?= $name['no_telp'] ?>  </p>
                  <hr>

                   <label>Email</label>
                  <p> <?= $name['email'] ?>  </p>
                  <hr>

                  <label>Keterangan</label>
                  <p> <?= $data['keterangan'] ?>  </p>
                  <hr>

                   <label>Gambar 1 : </label>
                  <p>  <img src="<?= base_url('produk/') ?><?= $data['gambar_produk'] ?>" alt="..." class="img-thumbnail" style="height: 70px;"></p>
                    <hr>

                  <label>Gambar 2 : </label>
                  <p>  <img src="<?= base_url('produk/') ?><?= $data['gambar_produk2'] ?>" alt="..." class="img-thumbnail" style="height: 70px;"></p>
                  <hr>


                  <label>Gambar 3 :</label>
                  <p>  <img src="<?= base_url('produk/') ?><?= $data['gambar_produk3'] ?>" alt="..." class="img-thumbnail" style="height: 70px;"></p>
                  <hr>


                  <label>Tanggal upload : </label>
                  <p> <?= $data['date_upload'] ?>  </p>
                    <hr>

                
                             
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
                  <th>Kode produk</th>
                  <th>Nama toko</th>
                  <th>Judul produk</th>
                  <th>Jumlah Vote</th>
                  <th>Gambar</th>
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
    

       $("#submit").click(function(){
     
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
