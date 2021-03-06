  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
<div class="preloader" style="display: none">
      <div class="loading">
        <img src="<?= base_url() ?>loading/loadbaru.gif" width="400">
        
      </div>
    </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero" style="height: 300px;">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12">
                        <div class="text-center mt-4">
                            <h1 style="text-align: center;">Pendaftaran Peserta</h1>
                            <p>
                                Daftarkan data diri anda sebagai peserta dan upload desain cake anda
                            </p>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Hero End -->


   

        <!-- Class Start -->
       

                
             
                <div class="row class-container">
                       
                    <div class="col-lg-3 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">

                       <!--  cart 1 -->

                    </div>

                  


                    <div class="col-lg-6 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="card">
                      <div class="card-body">
                        <h4 style="font-family: 'Jomhuria', cursive; font-size: 30px;"><i class="fas fa-user"></i> Form Daftar Peserta</h4>
                      </div>
                    </div>
                          <br>
                        <div class="card" style="border-width: 5px; border-color: pink; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                          <div class="card-body">
                                <form method="post" action="<?= base_url("ebunga/registrasi") ?>">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                    <input placeholder="Masukan nama lengkap anda" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="name" value="<?= set_value('name'); ?>" >
                                     <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input placeholder="Masukan email anda" type="text" class="form-control" id="exampleInputPassword1"name="email" value="<?= set_value('email'); ?>">
                                     <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                                  
                                    
                                <div class="">
                                      <label>No.telp</label>
                                     <div class="input-group">

                                    <div class="input-group-prepend">
                                      <div class="input-group-text">+62</div>
                                    </div>
                                    <input placeholder="Masukan nomor telepon anda" type="number" class="form-control" id="inlineFormInputGroupUsername"  name="notelp" value="<?= set_value('notelp'); ?>">
                                  </div>
                                   <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <br>

                                 <div class="form-group">
                                    <label for="">Nama Toko</label>
                                    <input placeholder="Masukan nama toko anda" type="text" class="form-control" name="name_store" value="<?= set_value('name_store'); ?>">
                                     <?= form_error('name_store', '<small class="text-danger pl-3">', '</small>'); ?>
                                  </div>
                                
                                <br>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="provinsi">Provinsi</label>
                                        <select class="form-control" id="prov" name="prov">
                                            <option>-- Pilih Provinsi --</option>
                                            <?php foreach ($prov as $data) {?>
                                            <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="kabupaten">Kabupaten</label>
                                      <select class="form-control" id="kabupaten" name="kab">
                                           
                                        </select>
                                        <?= form_error('kab', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                     
                                  </div>
                                  

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="kecamatan">Kecamatan</label>
                                     <select class="form-control" id="kecamatan" name="kec">
                                            
                                        </select>
                                        <?= form_error('kec', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                     
                                    <div class="form-group col-md-6">
                                      <label for="kelurahan">Kelurahan</label>
                                        <select class="form-control" id="kelurahan" name="kel">
                                            
                                        </select>
                                        <?= form_error('kel', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    
                                  </div>
                                   

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="kecamatan">Password</label>
                                        <input placeholder="Masukan password anda" type="password" name="pass1" class="form-control" value="<?= set_value('pass1'); ?>">
                                         <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                      <label for="kelurahan">Ulangi Password</label>
                                        <input placeholder="ulangi password" type="password" name="pass2" class="form-control" >
                                    </div>
                                  </div>

                                  <button id="register" type="submit" class="btn btn-dark btn-lg btn-block">Daftar</button>
                                </form>
                            
                          </div>
                        </div>



                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">

                        <!-- cart 3 -->


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
        <!-- Team End -->


        <!-- Blog Start -->
       <!--  <div class="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>From Blog</p>
                    <h2>Latest Yoga Articles</h2>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-4.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-5.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-6.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->


        <!-- Footer Start -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){

                $("#prov").change(function(){
                    var id_prov = $(this).val();
                    var url = "<?= base_url('ebunga/kab') ?>/"+id_prov;
                    $("#kabupaten").load(url);
                })
            })


            $(document).ready(function(){

                $("#kabupaten").change(function(){
                    var id_kab = $(this).val();
                    var url = "<?= base_url('ebunga/kec') ?>/"+id_kab;
                    $("#kecamatan").load(url);
                })
            })


            $(document).ready(function(){

                $("#kecamatan").change(function(){
                    var id_kec = $(this).val();
                    var url = "<?= base_url('ebunga/kel') ?>/"+id_kec;
                    $("#kelurahan").load(url);
                })
            })


             $(document).ready(function(){

                $("#register").click(function(){
                    $(".preloader").show();
                })
            })
        </script>