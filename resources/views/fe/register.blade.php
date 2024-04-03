@extends('fe.index')

@section('main')
<main>
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">
      <section class="h-100 py-5">
        <div class="row d-flex justify-content-center h-100">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <h2>Resiter New User</h2>
              <p>Alreaddy have an account? click to <a href="{{route('login')}}">Login</a></p>
              <hr>
              <form name="form" action=""  method="POST">
                @csrf
                <div class="mb-3">
                  <label for="inputEmail" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                  <label for="inputFullName" class="form-label">Full Name</label>
                  <input type="tel" class="form-control" id="inputMobile" aria-describedby="mobileHelp" name="name">
                </div>
                <div class="mb-3">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
                <button type="submit" class="btn btn-success">Register</button>
                <div class="mb-3">
                  <p>Registerd user, Didn't rember your password? click to <a href="../pages/forgotPassword.html">Recover</a>
                  </p>
                </div>
              </form>
            </div>
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
            <p>&copy; 2023 MyoOlineShop, Inc. All rights reserved.</p>
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
