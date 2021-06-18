

        <!-- Nav Bar End -->

<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Profile Product</h2>
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
                        <img src="<?= base_url('produk/') ?><?= $cake['gambar_produk'] ?>" alt="..." class="img-thumbnail">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-8 mt-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">PROFILE </h5>
                        
                              <table class="table table-striped">
                                <thead>
                                  
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Name</th>
                                    <td>:</td>
                                    <td><?= $data['name'] ?></td>
                                   </tr>

                                   <tr>
                                    <th scope="row">Email</th>
                                    <td>:</td>
                                    <td><?= $data['email'] ?></td>
                                   </tr>

                                  <tr>
                                    <th scope="row">No.telp</th>
                                    <td>:</td>
                                    
                                    <td><?= $data['no_telp'] ?></td>
                              
                                   </tr>

                                   <tr>
                                    <th scope="row">Provinsi</th>
                                    <td>:</td>
                                    <td><?= $prov['name'] ?></td>
                                   </tr>

                                    <tr>
                                    <th scope="row">Kabupaten</th>
                                    <td>:</td>
                                    <td><?= $kab['name'] ?></td>
                                   </tr>

                                    <tr>
                                    <th scope="row">Kecamatan</th>
                                    <td>:</td>
                                    <td><?= $kec['name'] ?></td>
                                   </tr>

                                    <tr>
                                    <th scope="row">Kelurahan</th>
                                    <td>:</td>
                                    <td><?= $kel['name'] ?></td>
                                   </tr>
                                </tbody>
                              </table>   

                            

                      </div>
                    </div>
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

