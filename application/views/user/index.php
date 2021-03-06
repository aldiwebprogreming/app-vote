<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
        <!-- Nav Bar End -->


        <!-- Hero Start -->
          <!-- Hero Start -->
        <div class="hero" style="height: 300px;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12">
                        <div class="text-center mt-4">
                            <h1 style="text-align: center; ">Kontes produk cake</h1>
                            <p>
                                Ayoo vote produk caka terbaik anda
                            </p>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Class Start -->
        <div class="class" id="vote" style="margin-top: 20px;">
            <div class="container">
                
                <div class="row mb-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                         <div class="input-group">
                              <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" style="width: 100px;" placeholder="Cari cake berdasarkan nama toko" name="cari" id="cari">
                              <div class="input-group-append">
                                <span class="input-group-text"><button class="btn btn-dark btn-sm" id="klik"><li class="fas fa-search"></li></button></span>
                              
                              </div>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                


               <div id="search">

             
                <div class="row class-container" >
                       <?php foreach ($produk as $data) { ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-6 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">

                        <div class="portfolio-wrap card" style="border-radius:20px; border-width: 6px; border-color: pink; ">
                            <a href="<?= base_url("produk/") ?><?= $data['gambar_produk'] ?>" data-lightbox="portfolio">
                                <img class="card-img-top" src="<?= base_url("produk/") ?><?= $data['gambar_produk'] ?>" alt="Card image cap">
                            </a>
                          <div class="card-body">



                         <h5 id="judul_produk" class="card-title text-center"><?= strtoupper($data['judul_produk']) ?></h5> 

                           



                           <!--  card mobile -->
                        <div id="keterangan">
                            <p class="card-text text-center"><?= $data['keterangan'] ?>.</p>
                             <p class="card-text text-center" style="font-weight: bold;"><i class="fas fa-store" style="color: #6495ED"></i> <?= $data['nama_toko'] ?></p>

                            <?php  

                                $kodeP = $data['kode_peserta'];
                               
                                
                                $regis = $this->db->query("SELECT * FROM tbl_registrasi_peserta WHERE kode_peserta='$kodeP'")->row_array();
                                $kab = $regis['kab'];

                                $kabupaten = $this->db->get_where('tbl_kabupaten',array('id' => $kab))->row_array();

                              

                              ?>

                             <p class="kab" style="text-align: center;"><i class="fas fa-map-marker-alt"></i> <?php   echo $kabupaten['name']; ?></p>
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
                                  </div>

                                <p class="text-center"><i class="fas fa-heart" style="color: red;"> <?= $vote2 ?></i> </p>

                                <?php if ($vote2 == 0) { ?>

                                <?php } else{ ?>
                               

                               <?php } ?>

                               
                                <center>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?= $data['id']  ?>"><i class="fas fa-heart"></i></button>
                                 <a class="btn btn-primary" href="<?= base_url("produk/detail/") ?><?= $data['kode_produk'] ?>"><i class="fas fa-eye"></i></a>
                                

                            </center>
                   

                         <!--  card mobile -->

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

           
             

                <?php echo $pagination; ?>
                    
                </div>
            </div>
        </div>

          </div>

        


        <!-- Class End -->
        
        
        <!-- Discount Start -->
        <!-- <div class="discount wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Awesome Discount</p>
                    <h2>Get <span>30%</span> Discount for all Classes</h2>
                </div>
                <div class="container discount-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. 
                    </p>
                    <a class="btn">Join Now</a>
                </div>
            </div>
        </div> -->
        <!-- Discount End -->
        
        
        <!-- Price Start -->
        <!-- <div class="price">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Yoga Package</p>
                    <h2>Yoga Pricing Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Basic</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>49<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-status">
                                    <span>Popular</span>
                                </div>
                                <div class="price-title">
                                    <h2>Standard</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>99<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Premium</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>149<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Personal Trainer</li>
                                        <li>Special Class</li>
                                        <li>Free Tutorials</li>
                                        <li>Group Training</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Price End -->
        
        
        <!-- Testimonial Start -->
       <!--  <div class="testimonial wow fadeInUp" data-wow-delay="0.1s"> -->
         <!--    <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>Our Client Say!</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                
            </div>
        </div>




    








        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


        <!-- JavaScript Libraries -->
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/easing/easing.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/wow/wow.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?= base_url('assets/') ?>lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="<?= base_url('assets/') ?>mail/jqBootstrapValidation.min.js"></script>
        <script src="<?= base_url('assets/') ?>mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?= base_url('assets/') ?>js/main.js"></script>
        <script src="<?= base_url('assets/') ?>alert.js"></script>
        <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
         <script>
          $(document).ready(function() {
              $('#example').DataTable();
              } );
        </script>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.paginate.js"></script>
<script type="text/javascript">
$(document).ready(function()    {
    $('#example1').paginate({itemsPerPage: 2});
    $('#example4').paginate({itemsPerPage: 3});
    $('#example2').paginate({itemsPerPage: 3});
    $('#example3').paginate({itemsPerPage: 10});

    
});
</script>



<script>
    $(document).ready(function(){
        $("#klik").click(function(){
            var cari = $("#cari").val();
            var a = slugify(cari);
           var url = "<?= base_url('ebunga/cari') ?>/"+a;
            $("#search").load(url);
           
        })


        function slugify(text) {
        return text.toString().toLowerCase().replace(/\s+/g, '-') // Ganti spasi dengan -
        .replace(/[^\w\-]+/g, '') // Hapus semua karakter non-word
        .replace(/\-\-+/g, '-') // Ganti multiple - atau single -
        .replace(/^-+/, '') 
        .replace(/-+$/, '');
} 
        
    })
</script>

<style>
    @media (max-width: 577px) {
        .kab{
            font-size: 8px;
        }
        .like{
            font-size: 8px;
        }

        #keterangan{
            display: none;
        }
        #judul_produk{
            font-size: 12px;
            font-weight: bold;
        }


    }
</style>
    </body>
</html>





       
        