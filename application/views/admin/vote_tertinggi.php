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
                  <h3 >Data peserta vote tertinggi</h3>
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
                  <th>Jumlah vote</th>
                  <th>Opsi</th>
                
                </tr>
                </thead>
                <tbody>

                  <?php $no = 1; ?>


                <tr> 
                    <td><?= $no++; ?></td>
                    <td><?= $peserta['kode_peserta'] ?></td>
                    <td><?= $peserta['name'] ?></td>
                    <td><?=$peserta['no_telp'] ?></td>
                    <td><?= $vote['jml'] ?></td>
                    <td>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaldet<?= $peserta['id'] ?>" style="">
                      Detail
                       </button>

                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalrw<?= $peserta['id'] ?>" style="">
                       Reword
                       </button>

                    </td>
                    
                  
                      
           
            <div class="modal fade" id="modaldet<?= $peserta['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <p> <?= $peserta['email'] ?> </p>
                  <hr>

                  <label>Nama toko : </label>
                  <p> <?= $peserta['name_store'] ?> </p>
                  <hr>

                  <label>Provinsi : </label>
                  <p> <?= $prov['name'] ?>  </p>
                    <hr>

                   <label>Kabupaten : </label>
                  <p> <?= $kab['name'] ?>  </p>
                    <hr>


                   <label>Kecamatan : </label>
                  <p> <?= $kec['name'] ?>  </p>
                    <hr>


                   <label>Kalurahan : </label>
                  <p> <?= $kel['name'] ?>  </p>
                    <hr>

                  

                  <label>Waktu pendaftaran : </label>
                  <p> <?= $peserta['date_registrasi'] ?>  </p>
                  
                             
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>

                  </form>
              </div>
            </div>
          </div>


           <div class="modal fade" id="modalrw<?= $peserta['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>Pesan</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <h4>Apakah anda ingin memberikan reword kepada peserta ini ?</h4>
                  
                  <form method="post" action="<?= base_url('admin/reword') ?>">

                    <input type="hidden" name="kode_peserta" name="kd_peserta" value="<?= $peserta['kode_peserta'] ?>">
                     <input type="hidden" name="email" value="alldii1956@gmail.com">

                     <!--  <input type="text" name="name" value="<?= $peserta['name'] ?>"> -->


                    <div class="modal-footer">

                     <div id="load2" class="spinner-border float-left" role="status" style="display: none;">
                                <span class="sr-only">Loading...</span>
                      </div>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <input id="submit2" type="submit" name="kirim" class="btn btn-primary" value="OK">
                  
                </div>
                  </form>
                
              </div>
            </div>
          </div>


                   
                   
                </tr>


       



        

        <!-- Modal -->
            

             

                    
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
