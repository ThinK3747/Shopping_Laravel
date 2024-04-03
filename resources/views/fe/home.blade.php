@extends('fe.index')

@section('main')
<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">

          <div class="imgSlide imgSlideOne"></div>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Books are the destination and journey.</h1>
              <p>
                The long wait is over ! We are uploading E-Books and as well as the new published authorised books by
                top authors and journals of various writers.

              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="pages/pageNotFound.html">Sign up today</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">

          <div class="imgSlide imgSlideTwo"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1>Plan, Implement, Revise, Update and Build on Change.</h1>
              <p>
                We are updating ourselves with regular change of educational system . The key is to prioritize What's on
                your Schedule.

              </p>
              <p><a class="btn btn-lg btn-primary" href="pages/pageNotFound.html">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">

          <div class="imgSlide imgSlideThree"></div>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Surrender your fear , Take a Leap.</h1>
              <p>
                With the internet boom in this era,a lot of E-Notes were written by
                various lectures and professors from different top colleges in Odisha.
              </p>
              <p>
                <a class="btn btn-lg btn-primary" href="pages/pageNotFound.html">Browse gallery</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <dic class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pick up where you left off</h5>
              <div>
                <div class="row ">
                  <div class="col-md-6 col-6 mb-2">
                    <div class="card h-100">
                      <!-- Product image-->
                      <a href="pages/productDetails.html">
                        <img class="card-img-top card-multi-product"
                          src="https://images-eu.ssl-images-amazon.com/images/I/51u8ZRDCVoL._SY264_BO1,204,203,200_QL40_FMwebp_.jpg"
                          alt="" />
                      </a>
                      <!-- Product details-->
                      <div class="card-body">
                        <p class="col-12 text-truncate">Rich dad and poor dad New edition</p>
                        <div class="d-grid">
                          <button class="btn btn-outline-primary me-2" type="button">&#8377; 300</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-6 mb-2">
                    <div class="card h-100">
                      <!-- Product image-->
                      <a href="pages/productDetails.html">
                        <img class="card-img-top card-multi-product"
                          src="https://images-eu.ssl-images-amazon.com/images/I/41r6F2LRf8L._SY264_BO1,204,203,200_QL40_FMwebp_.jpg"
                          alt="" />
                      </a>
                      <!-- Product details-->
                      <div class="card-body">
                        <p class="col-12 text-truncate">The Psychology of Money</p>
                        <div class="d-grid">
                          <button class="btn btn-outline-primary me-2" type="button">&#8377; 400</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </dic>
        <dic class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Most attract product</h5>
              <div>
                <div class="row ">
                  <div class="col-md-6 col-6 mb-2">
                    <div class="card h-100">
                      <!-- Product image-->
                      <a href="pages/productDetails.html">
                        <img class="card-img-top card-multi-product"
                          src="https://m.media-amazon.com/images/I/61y2VVWcGBL._AC_UL480_FMwebp_QL65_.jpg" alt="" />
                      </a>
                      <!-- Product details-->
                      <div class="card-body">
                        <p class="col-12 text-truncate">Fire-Boltt Phoenix Smart Watch</p>
                        <div class="d-grid">
                          <button class="btn btn-outline-primary me-2" type="button">&#8377; 1999</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-6 mb-2">
                    <div class="card h-100">
                      <!-- Product image-->
                      <a href="pages/productDetails.html">
                        <img class="card-img-top card-multi-product"
                          src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
                      </a>
                      <!-- Product details-->
                      <div class="card-body">
                        <p class="col-12 text-truncate">Dell 15 New Inspiron 3511 Laptop (2021) 15.6 Inches</p>
                        <div class="d-grid">
                          <button class="btn btn-outline-primary me-2" type="button">&#8377; 59999</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </dic>
        <dic class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Become a partner</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Your presence on our website will make both richer and
                popular</h6>
              <p class="card-text">Sell on our website with 50% off on Selling fee</p>
              <a href="pages/registerUser.html" class="card-link">Register to sell</a>
            </div>
          </div>
          <div class="card mt-2">
            <div class="card-body">
              <a href="pages/pageNotFound.html">
                <img class="card-img-top sponcer-add-img"
                  src="https://m.media-amazon.com/images/G/31/img22/Laptops/Asus_Apr20/Category_1400x800._CB592100135_.jpg"
                  alt="" />
              </a>
            </div>
          </div>
        </dic>
      </div>
      <!-- /.row -->

      <!-- First Catrgory Start -->
      <div class="mt-5 mb-5">
        <h2 class="pb-2 border-bottom">Top Products</h2>
        <!-- START PRODUCT DISPLAY -->
        <div class="row">
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /END PRODUCT DISPLAY -->
      </div>
      <!-- First Catrgory End -->
      <!-- Second Catrgory Start -->
      <div class="mt-5 mb-5">
        <h2 class="pb-2 border-bottom">Newly added product in Mobile category</h2>
        <!-- START PRODUCT DISPLAY -->
        <div class="row">
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /END PRODUCT DISPLAY -->
      </div>
      <!-- Second Catrgory End -->
      <!-- Third Catrgory Start -->
      <div class="mt-5 mb-5">
        <h2 class="pb-2 border-bottom">New Products</h2>
        <!-- START PRODUCT DISPLAY -->
        <div class="row">
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-3 col-6 mb-2">
            <div class="card h-100">
              <!-- Product image-->
              <a href="pages/productDetails.html">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/612whSmr1ML._SL1000_.jpg" alt="" />
              </a>
              <!-- Product details-->
              <div class="card-body p-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Test product</h5>
                  <!-- Product price-->
                  &#8377; 500
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="d-grid">
                  <button class="btn btn-info me-2" type="button">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /END PRODUCT DISPLAY -->
      </div>
      </div>
      <!-- Third Catrgory End -->
      <!-- /.container -->

      <!-- FOOTER -->

      <div class="footer-customize">
        <hr class="mb-5" />
        <div class="container">
          <footer>
            <div class="row">
              <div class="col-6 col-md-2 mb-2">
                <h5>Company</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="pages/aboutUs.html" class="nav-link p-0 text-body-secondary">About Us</a></li>
                  <li class="nav-item mb-2"><a href="pages/pageNotFound.html" class="nav-link p-0 text-body-secondary">Careers</a></li>
                  <li class="nav-item mb-2"><a href="pages/pageNotFound.html" class="nav-link p-0 text-body-secondary">Blog</a></li>
                </ul>
              </div>

              <div class="col-6 col-md-2 mb-2">
                <h5>Need Help</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="pages/faq.html" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                  <li class="nav-item mb-2"><a href="pages/contact.html" class="nav-link p-0 text-body-secondary">Talk with us</a></li>
                  <li class="nav-item mb-2"><a href="pages/contact.html" class="nav-link p-0 text-body-secondary">Write to us</a></li>
                </ul>
              </div>

              <div class="col-6 col-md-2 mb-2">
                <h5>Policy Info</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="pages/policy.html" class="nav-link p-0 text-body-secondary">Privacy Policy</a></li>
                  <li class="nav-item mb-2"><a href="pages/policy.html" class="nav-link p-0 text-body-secondary">Support Policy</a></li>
                  <li class="nav-item mb-2"><a href="pages/policy.html" class="nav-link p-0 text-body-secondary">Return Policy</a></li>
                </ul>
              </div>

              <div class="col-md-5 offset-md-1">
                <form>
                  <h5>Subscribe to our newsletter</h5>
                  <p>Monthly digest of what's new and exciting from us.</p>
                  <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-primary" type="button">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-2 border-top">
              <p>&copy; 2023 MyoOlineShop, Inc. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="https://twitter.com/SrikrushnaPal" target="_blank"><svg class="bi" width="24" height="24">
                      <use xlink:href="#twitter" />
                    </svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/palsrikrushna6/" target="_blank"><svg class="bi" width="24" height="24">
                      <use xlink:href="#instagram" />
                    </svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/srikrushna.pal/" target="_blank"><svg class="bi" width="24" height="24">
                      <use xlink:href="#facebook" />
                    </svg></a></li>
              </ul>
            </div>
          </footer>
        </div>
      </div>
  </main>
@endsection
