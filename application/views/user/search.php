      <?php 

        if ($cari ==  null) {
       ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Hello.</strong> Cake yang anda cari tidak tersedia.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php }else{ ?>


          <div class="row class-container" >
                       <?php foreach ($cari as $data) { ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-6 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">

                        <div class="card" style="border-radius:20px; border-width: 6px; border-color: pink; ">
                           <a href="<?= base_url("produk/") ?><?= $data['gambar_produk'] ?>" data-lightbox="portfolio">
                             <img class="card-img-top" src="<?= base_url("produk/") ?><?= $data['gambar_produk'] ?>" alt="Card image cap">
                           </a>
                          <div class="card-body">

                            <h5 id="judul_produk" class="card-title text-center"><?= strtoupper($data['judul_produk']) ?></h5>

                            <div id="mobile">

                            <p class="card-text text-center"><?= $data['keterangan'] ?>.</p>
                             <p class="card-text text-center" style="font-weight: bold;"><i class="fas fa-store" style="color: #6495ED"></i> <?= $data['nama_toko'] ?></p>

                            <?php  

                                $kodeP = $data['kode_peserta'];
                               
                                
                                $regis = $this->db->query("SELECT * FROM tbl_registrasi_peserta WHERE kode_peserta='$kodeP'")->row_array();
                                $kab = $regis['kab'];

                                $kabupaten = $this->db->get_where('tbl_kabupaten',array('id' => $kab))->row_array();

                              

                              ?>

                             <p style="text-align: center;"><i class="fas fa-map-marker-alt"></i> <?php   echo $kabupaten['name']; ?></p>
                             <center>

                              <?php 
                                    date_default_timezone_set('Asia/Jakarta');
                                    $kp = $data['kode_produk'];
                                    $vote2 = $this->db->get_where('tbl_vote', array('kode_produk' => $kp))->num_rows();

                                    $time = $this->db->query("SELECT * FROM tbl_vote WHERE kode_produk='$kp' ORDER BY id DESC LIMIT 1")->row_array();



                                        $selisih = time() - strtotime($time['date_vote']) ;
                                        $detik = $selisih ;
                                        $menit = round($selisih / 60 );
                                        $jam = round($selisih / 3600 );
                                        $hari = round($selisih / 86400 );
                                        $minggu = round($selisih / 604800 );
                                        $bulan = round($selisih / 2419200 );
                                        $tahun = round($selisih / 29030400 );
                                        if ($detik <= 60) {
                                            $waktu = $detik.' detik yang lalu';
                                        } else if ($menit <= 60) {
                                            $waktu = $menit.' menit yang lalu';
                                        } else if ($jam <= 24) {
                                            $waktu = $jam.' jam yang lalu';
                                        } else if ($hari <= 7) {
                                            $waktu = $hari.' hari yang lalu';
                                        } else if ($minggu <= 4) {
                                            $waktu = $minggu.' minggu yang lalu';
                                        } else if ($bulan <= 12) {
                                            $waktu = $bulan.' bulan yang lalu';
                                        } else {
                                            $waktu = $tahun.' tahun yang lalu';
                                        }
                                         $waktu;
                                 

                                  
 


                                 ?>

                                <?php 

                                    $kp = $data['kode_produk'];
                                    $vote2 = $this->db->get_where('tbl_vote', array('kode_produk' => $kp))->num_rows();

                                 ?>

                                <p><i class="fas fa-heart" style="color: red;"> <?= $vote2 ?></i></p>

                                 <?php if ($vote2 == 0) { ?>

                                <?php } else{ ?>
                                <p class="like"><i class="fas fa-thumbs-up" style="color: blue;"></i> <b>Disukuai</b> <?= $waktu ?></p>
                               <?php } ?>
                             
                           </div>
                               
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?= $data['id']  ?>"><i class="fas fa-heart"></i></button>
                                 <a class="btn btn-primary" href="<?= base_url("produk/detail/") ?><?= $data['kode_produk'] ?>"><i class="fas fa-eye"></i></a>
                                

                            </center>

                            <div class="modal fade" id="exampleModalCenter<?= $data['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Form Vote</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div> 
                                  <div class="modal-body">
                                    <form method="post" action="<?= base_url("ebunga/vote") ?>">

                                        <input type="hidden" name="kode_produk" value="<?= $data['kode_produk'] ?>">
                                         <input type="hidden" name="kode_peserta" value="<?= $data['kode_peserta'] ?>">


                                    <div class="form-group">
                                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required="">
                                      </div>

                                      <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="">
                                      </div>

                                      <div class="form-group">
                                        <input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter No telp" name="notlp" required=""> 
                                      </div>
                                    
                                    
                                  
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Vote</button>
                                  </div>
                                 </form>
                                </div>
                              </div>
                            </div>



                          </div>
                        </div>
                        
                    </div>
                    
                <?php } ?>
                
                </div>


                <?php } ?>


<style>
    @media (max-width: 577px) {
        

        #mobile{
            display: none;
        }
        #judul_produk{
            font-size: 12px;
            font-weight: bold;
        }


    }
</style>