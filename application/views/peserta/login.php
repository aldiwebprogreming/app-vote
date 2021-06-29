

        <!-- Nav Bar End -->

<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Login Peserta</h2>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="<?= base_url('/') ?>">Home</a>
                        <a href="<?= base_url('registrasi/') ?>">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6"> 
                        
                          <?= $this->session->flashdata('alert'); ?>

                       <div class="card" style="border-width: 5px; border-color: pink; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 20px;">
						  <div class="card-body">
						    <form method="post" action="<?= base_url('ebunga/login') ?>">
								  <div class="form-group">
								    <label for="exampleInputEmail1">Alamat Email</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
								    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1">Password</label>
								    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
								      <?= form_error('pass', '<small class="text-danger pl-3">', '</small>'); ?>
								  </div>

                                 <p><a href="<?= base_url('registrasi/') ?>" class="float-right">Daftar akun ?</a></p>
								  
								  <button type="submit" class="btn btn-dark">Login</button>
								</form>
						  </div>
						</div>
                    </div>
                    <div class="col-lg-7 col-md-6 mt-5">
                        <div class="section-header text-left">
                          
                            <h2>Login untuk upload produk</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                            </p>
                         <!--    <a class="btn" href="">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Start -->
       
        <!-- Hero End -->


   

        <!-- Class Start -->
       

                
             
                <div class="row class-container">
                       
                    <div class="col-lg-3 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">

                       <!--  cart 1 -->

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
         <script src="<?= base_url('assets/') ?>alert.js"></script>
        <?php echo "<script>".$this->session->flashdata('message')."</script>"?>