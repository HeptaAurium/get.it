  <!-- Site footer -->
  <footer class="site-footer px-5">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12 col-md-6">
                  <h6>About</h6>
                  <p class="text-justify">{{ config('app.name') }} is an online store based in Kenya, dealing with a
                      wide range of products from footwear, carpets, household items e.t.c. We are committed to
                      providing our clients with great quality products all at an affordable price.
                  </p>
              </div>

              <div class="col-xs-6 col-md-3">
                  <h6>Categories</h6>
                  <ul class="footer-links">
                      <li><a href="/categories/footwear">Shoes (footwear)</a></li>
                      <li><a href="/categories/headwear">Hats, fedoras (headwear)</a></li>
                      <li><a href="/categories/interior-decor">Interior Decor</a></li>
                  </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                  <h6>Quick Links</h6>
                  <ul class="footer-links">
                      <li><a href="/about/">About Us</a></li>
                      <li><a href="/contact/">Contact Us</a></li>
                      <li><a href="/privacy-policy/">Privacy Policy</a></li>
                      <li><a href="/product-shipping/">Product Shipping</a></li>
                  </ul>
              </div>
          </div>
          <hr>
      </div>
      <div class="container-fluid mb-3">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; <?php echo Date('Y'); ?> All
                      Rights Reserved by
                      <a href="/">{{ config('app.name') }}</a>.
                  </p>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                      <li><a class="phone" href="tel: +254-796613491"><i class="fa fa-phone"></i></a></li>
                      <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                      <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                      <li><a class="whatsapp" href="https://wa.me/message/AQUB7GZH4T4AO1" target="_blank"><i
                                  class="fab fa-whatsapp"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="container-fluid" style="padding:30px auto 10px">
          <div class="text-center">
              <p class="lead">Site powered by <a href="http://ichaelinc.co.ke" target="_blank"
                      rel="noopener noreferrer"> iChael inc</a>.</p>
          </div>
      </div>
  </footer>
