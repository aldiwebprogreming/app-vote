<div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <a href="index.html" class="footer-logo">ebunga</a>
                        <h3>www.ebunga.com</h3>
                        <div class="footer-menu">
                            <p>+62821 67 </p>
                            <p>info@example.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <!-- <div class="col-md-6">
                            <p>&copy; <a href="#">Ebunga</a>.com</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


        <!-- JavaScript Libraries -->
      <!--   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
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
    </body>
</html>
