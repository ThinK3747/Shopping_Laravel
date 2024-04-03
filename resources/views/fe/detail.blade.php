@extends('fe.index')

@section('main')

<main>
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="rounded-4 mb-3 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
                            href="#">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                src="{{asset('storage/images')}}/{{$product->image}}" />
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        @foreach ($product->imgProduct as $item )
                            <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            href="#"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2"
                                src="{{ asset('storage/images')}}/{{($item->image)}}" />
                            </a>
                        @endforeach



                    </div>
                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->name }}
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">
                                    4.5
                                </span>
                            </div>
                            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                            <span class="text-success ms-2">In stock</span>
                        </div>

                        <div class="mb-3">
                            <span class="h5">  {{number_format($product->sale_price)}} đ /</span>
                            <span class="text-decoration-line-through">{{number_format($product->price)}} đ</span>
                        </div>

                        <p>
                            Modern look and quality demo item is a streetwear-inspired collection that continues to
                            break away from the conventions of mainstream fashion. Made in Italy, these black and brown
                            clothing low-top shirts for
                            men.
                        </p>

                        <div class="row">
                            <dt class="col-3">Type:</dt>
                            <dd class="col-9">Regular</dd>

                            <dt class="col-3">Color</dt>
                            <dd class="col-9">Brown</dd>

                            <dt class="col-3">Material</dt>
                            <dd class="col-9">Cotton, Jeans</dd>

                            <dt class="col-3">Brand</dt>
                            <dd class="col-9">Reebook</dd>
                        </div>

                        <hr />
                        <form action="{{route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2">Size</label>
                                <select class="form-select border border-secondary" style="height: 35px;">
                                    <option>Small</option>
                                    <option>Medium</option>
                                    <option>Large</option>
                                </select>
                            </div>
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <button class="btn btn-white border border-secondary px-3" type="button"
                                        id="button-addon1" data-mdb-ripple-color="dark">
                                        <i class="bi bi-dash"></i>
                                    </button>
                                    <input type="text" name="quantity" class="form-control text-center border border-secondary"
                                        placeholder="1" aria-label="Example text with button addon"
                                        aria-describedby="button-addon1" value="1" />
                                    <button class="btn btn-white border border-secondary px-3" type="button"
                                        id="button-addon2" data-mdb-ripple-color="dark">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                         <!-- col.// -->
                       <!--  <a href="#" class="btn btn-warning shadow-0"> Buy now </a>-->
                        <button class="btn btn-primary shadow-0" type="submit"> <i class="me-1 fa fa-shopping-basket"></i> Add to
                            cart </button>
                         <!-- <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i
                                class="me-1 fa fa-heart fa-lg"></i> Save </a>-->
                        </form>

                    </div>
                </main>
            </div>
        </div>
    </section>



    <section class="bg-light border-top py-4">
        <div class="container">
            <div class="row gx-4">
                <div class="col-lg-8 mb-4">
                    <div class="border rounded-2 px-3 py-2 bg-white">
                        <!-- Pills navs -->
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item d-flex" role="presentation">
                                <a class="nav-link d-flex align-items-center justify-content-center w-100 active"
                                    id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab"
                                    aria-controls="ex1-pills-1" aria-selected="true">Thông tin</a>
                            </li>
                            <li class="nav-item d-flex" role="presentation">
                                <a class="nav-link d-flex align-items-center justify-content-center w-100"
                                    id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab"
                                    aria-controls="ex1-pills-2" aria-selected="false">Warranty info</a>
                            </li>
                            <li class="nav-item d-flex" role="presentation">
                                <a class="nav-link d-flex align-items-center justify-content-center w-100"
                                    id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab"
                                    aria-controls="ex1-pills-3" aria-selected="false">Shipping info</a>
                            </li>
                            <li class="nav-item d-flex" role="presentation">
                                <a class="nav-link d-flex align-items-center justify-content-center w-100"
                                    id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab"
                                    aria-controls="ex1-pills-4" aria-selected="false">Seller profile</a>
                            </li>
                        </ul>
                        <!-- Pills navs -->

                        <!-- Pills content -->
                        <div class="tab-content" id="ex1-content">
                            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel"
                                aria-labelledby="ex1-tab-1">
                                <p>
                                    {!!$product->description!!}
                                </p>

                            </div>
                            <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel"
                                aria-labelledby="ex1-tab-2">
                                Tab content or sample information now <br />
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            </div>
                            <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel"
                                aria-labelledby="ex1-tab-3">
                                Another tab content or sample information now <br />
                                Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt
                                mollit anim id est laborum.
                            </div>
                            <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel"
                                aria-labelledby="ex1-tab-4">
                                Some other tab content or sample information now <br />
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="px-0 border rounded-2 shadow-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Similar items</h5>
                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{asset('storage/images')}}/{{$product->image}}"
                                            style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="#" class="nav-link mb-1">
                                            Rucksack Backpack Large <br />
                                            Line Mounts
                                        </a>
                                        <strong class="text-dark"> $38.90</strong>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{asset('storage/images')}}/{{$product->image}}"
                                            style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="#" class="nav-link mb-1">
                                            Summer New Men's Denim <br />
                                            Jeans Shorts
                                        </a>
                                        <strong class="text-dark"> $29.50</strong>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <a href="#" class="me-3">
                                        <img src="{{asset('storage/images')}}/{{$product->image}}"
                                            style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="#" class="nav-link mb-1"> T-shirts with multiple colors, for men and
                                            lady </a>
                                        <strong class="text-dark"> $120.00</strong>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <a href="#" class="me-3">
                                        <img src="{{asset('storage/images')}}/{{$product->image}}"
                                            style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                    </a>
                                    <div class="info">
                                        <a href="#" class="nav-link mb-1"> Blazer Suit Dress Jacket for Men, Blue color
                                        </a>
                                        <strong class="text-dark"> $339.90</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
