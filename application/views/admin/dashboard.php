  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.print.css' rel='stylesheet' media='print' />


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
    <!--   <?= $this->session->flashdata('hello'); ?> -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="nof"><?= $jml_peserta ?></h3>

                <p>Jumlah Peserta</p>
              </div>
              <div class="icon">
                <i class="ion ion-user"></i>
              </div>
              <a href="<?= base_url('admin/data-peserta') ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jml_visitor ?><!-- <?= $kwitansiHariIni ?> --></h3>

                <p>Jumlah Pengunjung</p>
              </div>
              <div class="icon">
              
              </div>
              <a href="<?= base_url() ?>admin/data-visitor" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jml_produk ?><!-- <?= $kwitansiAnda ?> --></h3>

                <p>Jumlah Produk</p>
              </div>
              <div class="icon">
               
              </div>
              <a href="<?= base_url('admin/data-produk') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <!-- <?= $kwitansiAnda ?> --></h3>
                <?php 

                  $vote = $this->db->get_where('tbl_registrasi_peserta',  array('kode_peserta' => $jml_vote['kode_peserta']))->row_array();


                 ?>
                 <h4>Vote tertinggi</h4>

                <p><?= $vote['name_store'] ?> </p>
                <h5>Vote : <?= $jml_vote['jml'] ?></h5>
              </div>
              <div class="icon">
               
              </div>
               <a href="<?= base_url('admin/vote_tertinggi/') ?><?= $vote['kode_peserta'] ?>" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
            
            </div>
          </div>

         
          <!-- card pengunjung hari ini -->
           <div class="col-lg-6 col-6" id="pengunjunghariini">
              

                <div class="container">
                  
                  <div class="calendar-wrapper" style="margin-bottom: 40px; background-color: silver;"></div>
                </div>
           
           </div>

           <!-- end card -->

          <!-- card jumlah pengunjung-->
          <div class="col-lg-6 col-6" id="jumlahpengunjung">
              
          </div>
          <!-- end card -->

          <!-- card visitor online -->
          <div class="col-lg-6 col-6" id="online">
            
            
          </div>


          <!-- end card -->




            <!-- /.card -->

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <script src="http://momentjs.com/downloads/moment.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!-- kalender -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
