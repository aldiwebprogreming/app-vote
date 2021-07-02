

        <!-- Nav Bar End -->

  <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Edit produk</h2>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="<?= base_url('dashboard/') ?>">Home</a>
                        <a href="<?= base_url('upload/') ?>">upload</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


   


        <!-- About Start -->
        <div id="app">
          <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <div class="card-body">

                  <div  v-if="preview">
                    <img :src="preview" alt="..." class="img-thumbnail">
                    
                  </div>

                  <div v-else>
                       <img src="<?= base_url('produk/') ?><?= $data['gambar_produk'] ?>" alt="..." class="img-thumbnail">
                  </div>

               </div>
            </div>
            </div>

            <div class="col-sm-8">
              <div class="card">
                <div class="card-body">
                  <h4>Edit Produk</h4>
                  <hr>

                  <form method="post" action="<?= base_url('peserta/edit_produk_act') ?>" enctype="multipart/form-data">
                  <div class="form-group">

                    <input type="hidden" name="kode_produk" value="<?= $data['kode_produk'] ?>">

                    <label for="exampleInputEmail1">Judul Produk</label>
                    <input type="text" class="form-control" name="judul_produk" value="<?= $data['judul_produk']?>">
                     <?= form_error('judul_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                
                  </div>

                  <div class="form-group">
                    <label>Keterangan Produk</label>
                    <textarea class="form-control" name="keterangan"><?= $data['keterangan'] ?></textarea>
                     <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    
                  </div>

                  <div class="form-group">
                    <label>Gambar Cake</label>
                    <input type="file" v-on:change="upload($event)" name="gambar_cake"  class="form-control" required="">
                  
                  </div>


                   <div class="form-group">
                    <label>Gambar Cake Sisi 1</label>
                    <input type="file" v-on:change="upload2($event)" name="gambar_cake2"  class="form-control" required="">
                  </div>


                    <div v-if="preview2">
                      <img :src="preview2" alt="..." class="img-thumbnail" style="height: 100px;">
                    </div>

                 <div class="form-group">
                  <label>Gambar Cake Sisi 2</label>
                  <input type="file" v-on:change="upload3($event)" name="gambar_cake3"  class="form-control" required="">
                </div>

                  <div v-if="preview3">
                    <img :src="preview3" alt="..." class="img-thumbnail" style="height: 100px;">
                  </div>
                 
                  <button type="submit" class="btn btn-primary">Edit Produk</button>
                </form>
                
               </div>
            </div>
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

