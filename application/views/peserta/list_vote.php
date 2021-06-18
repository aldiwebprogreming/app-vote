

        <!-- Nav Bar End -->

<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>List Vote</h2>
                    </div>
                    <center>
                     
                       <!-- <h5 style=> <i class="fas fa-heart" style="color: red"></i> <?= $jml ?> </h5> -->
                    
                     </center>
                    <div class="col-12 mt-3">
                           <h2 style="color: red;"> <i class="fas fa-heart" style="color: red"></i> <?= $jml ?></h2>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


    <!--   <?php foreach ($profil as $data) {
      
      } ?>
 -->

        <!-- About Start -->
        <div id="app">
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                  <div class="col-sm-12 mt-3">
                   
                    <div class="card">

                      <div class="card-body">

                        <table class="table table-striped" id="example">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Date Vote</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                            <?php 

                            $no = 1;

                            foreach ($list as $data) { ?>
                            <tr>
                              <th scope="row"><?= $no++ ?></th>
                              <td><?= $data['name_vote'] ?></td>
                              <td><?= $data['date_vote'] ?></td>
                              
                            </tr>

                          <?php } ?>
                            
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
            
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

          <script>
              $(document).ready(function() {
        $('#example').DataTable();
    } );
        </script>
