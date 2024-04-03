@extends('fe.index')

@section('main')

<main>


    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container">

        <div class="row mt-4 mb-5">
            <div class="col-md-3 mt-5">
                <div class="card">
                    <h2 class="pb-2 border-bottom card-header mt-2">Category</h2>
                    <ul class="nav nav-pills flex-column ">
                        <li class="nav-item mt-4">
                            @foreach ($categories as $item)
                                <a href="../pages/product.html" class="nav-link" aria-current="page">{{$item->name}}</a>
                                <hr>
                            @endforeach



                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-9">
                <!-- <h2 class="pb-2 border-bottom">Top Products</h2> -->
                <!-- START PRODUCT DISPLAY -->
                <div class="row mt-5">

                    @foreach ( $products as $item )
                        <div class="col col-md-3 col-6 mb-2">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="{{ route('product.detail',$item->slug)}}">

                                <img class="card-img-top"
                                    src="{{ asset('storage/images')}}/{{$item->image}}" alt="IMG" />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$item->name}}</h5>
                                    <!-- Product price-->
                                    {{number_format($item->price)}} đ
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-grid">
                                    <a href="../pages/cart.html" class="btn btn-info me-2" type="button">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <!-- /END PRODUCT DISPLAY -->
            </div>
        </div>

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
                            <a class="link-body-emphasis" href="https://www.instagram.com/palsrikrushna6/"
                                target="_blank">
                                <svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram" />
                                </svg>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="https://www.facebook.com/srikrushna.pal/"
                                target="_blank">
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
