@extends('fe.index')

@section('main')

<main>
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">
      <section class="h-100 py-5">

          <!-- If there is no product incart -->
          <!-- <img src="../assets/images/empty-shopping-cart.png" class="img-fluid rounded mx-auto d-block"
            alt="image name">
          <div class="text-center mb-5 mt-5">
            <h3>Your shopping cart bag is empty! Let’s add some item to your bag? </h3>
            <a href="../pages/product.html" class="btn btn-info btn-lg mt-4">Go to product page</a>
          </div> -->

          <!-- If product in cart -->
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-10 col-12">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-normal mb-0 text-black">Shopping Cart Details</h3>
                <h5>Cart Subtotal ({{$cart->getTotalQuantity()}}) : {{number_format($cart->getTotalPrice())}}</h5>
              </div>
              <div class="card rounded-3 mb-4">
                @foreach ($cart->list() as $key => $value )
                    <div class="card-body p-4">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img src="{{ asset('storage/images')}}/{{$value['image']}}"
                        class="img-fluid rounded-3" alt="image name">
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4">
                      <p class="lead fw-normal mb-2">{{$value['name']}}</p>

                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <input id="form1" min="0" name="quantity" value="{{$value['quantity']}}" type="number"
                        class="form-control form-control-lg" />
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h5 class="mb-0">{{number_format($value['price'] * $value['quantity'])}}</h5>
                    </div>
                    <!-- -->
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a class="text-danger"><i class="bi bi-trash3-fill"></i></a>
                    </div>
                  </div>
                </div>
                @endforeach


              </div>


              <div class="card mb-4">
                <div class="card-body p-4 d-flex flex-row">
                  <div class="form-outline flex-fill">
                    <input type="text" id="form1" class="form-control form-control-lg" />
                    <label class="form-label" for="form1">Discound code</label>
                  </div>
                  <button type="button" class="btn btn-primary btn-lg ms-3">Apply</button>
                </div>
              </div>
              <a href="../pages/address.html" class="w-100 btn btn-primary btn-lg">Proceed to Checkout</a>
            </div>
          </div>
      </section>


    </div>
    <!-- FOOTER -->
    <div class="footer-customize">
      <hr class="mb-5" />
      <div class="container">
        <footer>
          <div class="row">
            <div class="col-6 col-md-2 mb-2">
              <h5>Company</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="../pages/aboutUs.html" class="nav-link p-0 text-body-secondary">
                    About Us
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a href="../pages/pageNotFound.html" class="nav-link p-0 text-body-secondary">
                    Careers
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a href="../pages/pageNotFound.html" class="nav-link p-0 text-body-secondary">
                    Blog
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-2">
              <h5>Need Help</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="../pages/faq.html" class="nav-link p-0 text-body-secondary">
                    FAQs
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a href="../pages/contact.html" class="nav-link p-0 text-body-secondary">
                    Talk with us
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a href="../pages/contact.html" class="nav-link p-0 text-body-secondary">
                    Write to us
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-2">
              <h5>Policy Info</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="../pages/policy.html" class="nav-link p-0 text-body-secondary">
                    Privacy Policy
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a href="../pages/policy.html" class="nav-link p-0 text-body-secondary">
                    Support Policy
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a href="../pages/policy.html" class="nav-link p-0 text-body-secondary">
                    Return Policy
                  </a>
                </li>
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
            <p>&copy; 2023 MyOlineShop, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3">
                <a class="link-body-emphasis" href="https://twitter.com/SrikrushnaPal" target="_blank">
                  <svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter" />
                  </svg>
                </a>
              </li>
              <li class="ms-3">
                <a class="link-body-emphasis" href="https://www.instagram.com/palsrikrushna6/" target="_blank">
                  <svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram" />
                  </svg>
                </a>
              </li>
              <li class="ms-3">
                <a class="link-body-emphasis" href="https://www.facebook.com/srikrushna.pal/" target="_blank">
                  <svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </footer>
      </div>
    </div>
  </main>


@endsection
