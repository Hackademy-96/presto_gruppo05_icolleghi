<!-- Footer -->

<footer class="text-center rounded-4 shadow m-4 text-lg-start text-white mt-5 " style="background-color: rgb(35, 46, 62)">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Collegati a noi tramite i nostri Social</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-facebook"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>iColleghi®
            </h6>
            <p>
              Azienda sul campo dal 2019 con oltre 1.200 clienti in UE, autorizzati alla vendita di prodotti in tutto il mondo tramite IQOSS., Import ed Export.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Prodotti
            </h6>
            @foreach ($categories as $category)
            <p>
              <a href="{{route('categoryShow', compact('category'))}}" class="text-reset">{{$category->name}}</a>
            </p>
            @endforeach
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Link Utili
            </h6>
            <p>
              <a href="#!" class="text-reset">Privacy Policy</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Therms of Condition</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders Fullfilment</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Refound Policy</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contattaci</h6>
            <p><i class="fas fa-home me-3"></i> Italia | Puglia | Sicilia</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              icolleghi@info.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2019 Copyright:
      <a class="text-reset fw-bold" href="https://skycreators.it">SkyCreators Feat i Colleghi Aulab Hackacademy-96</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->