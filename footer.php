<footer class="footer">
<div>
  <!-- Footer -->
  <footer
          class="text-white"
          style="background-color: #3e4551"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <h4 class="text-uppercase">Taniti</h4>
        <div class="row d-flex justify-content-between">
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">   
            <h5>Visit Paradise</h5>
            <p>
            Taniti is a small, tropical island in the Pacific. While the island has an area of less than 500 square miles, the terrain is varied and includes both sandy and rocky beaches, a small but safe harbor, lush tropical rainforests, and a mountainous interior that includes a small, active volcano. 
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4 mb-md-0 footer-links">
            <nav class="list-unstyled mb-0">
            <?php wp_nav_menu( array('theme_location' =>  'footer_menu') ); ?>
            </nav>

                       <!-- Section: Social media -->
      <section class="ml-0 d-flex justify-content-start footer-socials">
          <h5 class="me-2">Follow Us</h5>
        <!-- Facebook -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-facebook-f"></i
          ></a>

        <!-- Twitter -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-twitter"></i
          ></a>

        <!-- Instagram -->
        <a
           class="btn btn-outline-light btn-floating m-1"
           href="#!"
           role="button"
           ><i class="fab fa-instagram"></i
          ></a>
      </section>
      <!-- Section: Social media -->

    
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
      

      <hr class="mb-4" />

      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-outline-light btn-rounded">
            Book a trip
          </button>
        </p>
      </section>
      <!-- Section: CTA -->

      <hr class="mb-4" />

    </div>
    <!-- Grid container -->

  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>