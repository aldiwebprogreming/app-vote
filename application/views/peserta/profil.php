

        <!-- Nav Bar End -->

<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Profil Produk</h2>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="<?= base_url('dashboard/') ?>">Home</a>
                        <a href="<?= base_url('upload/') ?>">upload</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


      <?php foreach ($profil as $data) {
      
      } ?>


        <!-- About Start -->
        <div id="app">
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                  <div class="col-sm-4 mt-3">
                    <div class="card">
                      <div class="card-body">
                       <div>

                        <?php if ($cek == 0) { ?>
                          
                          <img src="<?= base_url('assets/img/noimage.jpg') ?>" alt="..." class="img-thumbnail">
                        
                      <?php } else { ?>
                        <img src="<?= base_url('produk/') ?><?= $cake['gambar_produk'] ?>" alt="..." class="img-thumbnail">
                          <?php 

                              if ($cake['status'] == 0) {
                                echo '<div class="alert alert-warning mt-3" role="alert"><b>Produk cake anda saat ini masih dalam proses persetujuan.</b></div>';
                              } else  { 
                            
                                $toko = $cake['slug_toko'];

                               ?>

                                <center>
                                  <a href="<?= base_url("") ?>ebunga/sertifikat/<?= $toko ?>" target="_blank" class="mt-3 btn btn-info btn-block"><i class="fas fa-download"></i> Download sertifikat</a>
                                </center>
                              

                           
                    <?php } } ?>  


                    <?php 

                      if ($data['reword'] == 1) {
                   ?>
                         <center>
                            <a href="<?= base_url("") ?>ebunga/sertifikat/<?= $toko ?>" target="_blank" class="mt-3 btn btn-warning btn-block"><i class="fas fa-download"></i> Download Sertifikat Pemenang</a>
                          </center>

                       <?php } ?>


                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-8 mt-3"> 
                    <div class="card">
                      <div class="card-body">
                          <div id="share-sossial-buttons">

                            <?php 

                              if ($cek == 0) { 

                                echo '<div class="alert alert-warning" role="alert">
                         Cake anda belum tersedia, <b>segera upload cake anda.</b>
                              </div>';

                                echo "<hr>";
                                
                              } else {

                             ?>

                             <?php if ($cake['status'] == 0) {

                              
                             }else { ?>
    
                                Link produk anda :<br><br>

 
                               <!--  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60cc55383e9275e2"></script>
                                
                                <div class="addthis_inline_share_toolbox_bbi3"></div> -->


 
    <!-- Untuk Facebook -->
   <!--  <a href="http://www.facebook.com/sharer.php?u=https://www.kerincicreative.com/shop-single.php?id=13" target="_blank">
        <img src="<?= base_url("assets/img/fb.png") ?>" alt="Facebook" style="height: 40px;">
    </a> -->

   
    
    <!-- Untuk Google+ -->
   <!--  <a href="whatsapp://send?text=https://masrud.com/post/membuat-tombol-share-dan-chat-whatsapp" target="_blank">
        <img src="<?= base_url("assets/img/ig.png") ?>" alt="Google" style="height: 60px;" />
    </a>
     -->
    <!-- Untuk Twitter -->
    <!-- <a href="https://twitter.com/share?url=https://dumetschool.com&text=Simple%20Share%20Buttons&hashtags=simplesharebuttons" target="_blank">
        <img src="<?= base_url("assets/img/twiter1.png") ?>" alt="Twitter" style="height: 60px;" />
    </a> -->


    

                    </div>
                        
                       

                         <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" value="http://localhost/app-vote/produk/detail/<?= $cake['kode_produk'] ?>" id="myInput">
                               <div class="input-group-append">
                                <button class="btn btn-primary" onclick="myFunction()"><i class="fas fa-copy"></i></button>
                            </div>
                          </div>

                           <?php  } } ?>

                        <h5 class="card-title">PROFIL </h5>
                        
                              <table class="table">


                                <thead>

                                  
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Name</th>
                                    
                                    <td><small><?= $data['name'] ?></small></td>
                                   </tr>

                                   <tr>
                                    <th scope="row">Email</th>
                                    
                                    <td><small><?= $data['email'] ?></small></td>
                                   </tr>

                                  <tr>
                                    <th scope="row">No.telp</th>
                                    
                                    
                                    <td><small><?= $data['no_telp'] ?></small></td>
                              
                                   </tr>

                                   <tr>
                                    <th scope="row">Provinsi</th>
                                    
                                    <td><small><?= $prov['name'] ?></small></td>
                                   </tr>

                                    <tr>
                                    <th scope="row">Kabupaten</th>
                                    
                                    <td><small><?= $kab['name'] ?></small></td>
                                   </tr>

                                    <tr>
                                    <th scope="row">Kecamatan</small></th>
                                    
                                    <td><small><?= $kec['name'] ?></small></td>
                                   </tr>

                                    <tr>
                                    <th scope="row">Kelurahan</small></th>
                                    
                                    <td><small><?= $kel['name'] ?></small></td>
                                   </tr>


                                    <tr>
                                    <th scope="row">Nama Toko</small></th>
                                    
                                    <td><small><?= $produk['nama_toko'] ?></small></td>
                                   </tr>


                                    <tr>
                                    <th scope="row">Judul Cake</small></th>
                                    
                                    <td><small><?= $produk['judul_produk'] ?></small></td>
                                   </tr>

                                   <tr>
                                    <th scope="row">Keterangan</small></th>
                                    
                                    <td><small><?= $produk['keterangan'] ?></small></td>
                                   </tr>

                                    <tr>
                                    <th scope="row">Gambar Sisi 2</small></th>
                                    
                                    <td><img class="img-thumbnail" src="<?= base_url('produk/') ?><?= $produk['gambar_produk2'] ?>" style="height: 100px;"></td>
                                   </tr>

                                   <tr>
                                    <th scope="row">Gambar Sisi 2</small></th>
                                    
                                    <td><img class="img-thumbnail" src="<?= base_url('produk/') ?><?= $produk['gambar_produk3'] ?>" style="height: 100px;"></td>
                                   </tr>
                                </tbody>
                              </table>   


                              <a href="<?= base_url('ebunga/edit/') ?><?= $produk['kode_produk'] ?>" class="btn btn-primary btn-block">Edit produk anda</a>
                            

                      </div>
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Start -->
       
        <!-- Hero End --


   

        <!-- Class Start -->
       

                
             
                <div class="row class-container">
                       
                    <div class="col-lg-3 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">

                       <!--  cart 1 -->

                    </div>

                    
                    
                    
                </div>
            </div>
        </div>
        

        <!-- Team Start -->
        <div class="team">
            <div class="container">
                
            </div>
        </div>
        

        <script src="<?= base_url('assets/') ?>alert.js"></script>
        <?php echo "<script>".$this->session->flashdata('message')."</script>"?>

         <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
         <script>
             const vm = new Vue({
    el: "#app",
    data: function(){
      return{
        gambar: '',
        preview: '',

        gambar2: '',
        preview2: '',


        gambar3: '',
        preview3: '',
        

      }
    },

    methods: {
      upload: function(event){
        // console.log(event.target.files[0].name)
        var namagambar = event.target.files[0].name
        this.gambar = namagambar
        this.preview = URL.createObjectURL(event.target.files[0])
      },

      deleteimg: function(){
        this.preview = ''
        $("#gambar1").val('')
      },

      upload2: function(event){
        // console.log(event.target.files[0].name)
        var namagambar2 = event.target.files[0].name
        this.gambar2 = namagambar2
        this.preview2 = URL.createObjectURL(event.target.files[0])
      },

      deleteimg2: function(){
        this.preview2 = ''
        $("#gambar2").val('')
      },

      upload3: function(event){
        // console.log(event.target.files[0].name)
        var namagambar3 = event.target.files[0].name
        this.gambar3 = namagambar3
        this.preview3 = URL.createObjectURL(event.target.files[0])
      },

      deleteimg3: function(){
        this.preview3 = ''
        $("#gambar3").val('')
      },


    
     

     

    }
  })
         </script>


         <script>
           function myFunction() {
  /* Get the text field */
      var copyText = document.getElementById("myInput");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      
    }
         </script>

