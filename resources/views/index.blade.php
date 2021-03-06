@extends('layouts.user')
@section('content')
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url({{ asset('coffee/images/bg_3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
                <span class="subheading">Welcome</span>
              <h1 class="mb-4">The Best Coffee Testing Experience</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url({{ asset('coffee/images/bg_2.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
                <span class="subheading">Welcome</span>
              <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url({{ asset('coffee/images/bg_1.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
                <span class="subheading">Welcome</span>
              <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('coffee/images/about.jpg') }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">Discover</span>
              <h2 class="mb-4">Our Story</h2>
            </div>
            <div>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{ asset('coffee/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon"><i class="fas fa-coffee"></i></div>
                        <strong class="number" data-number="{{ $categories->count() }}">0</strong>
                        <span>Categories</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon"><i class="far fa-newspaper"></i></div>
                        <strong class="number" data-number="{{ $products->count() }}">0</strong>
                        <span>Products</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon"><i class="fas fa-users"></i></div>
                        <strong class="number" data-number="10567">0</strong>
                        <span>Customers</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon"><i class="fas fa-user-tie"></i></div>
                        <strong class="number" data-number="900">0</strong>
                        <span>Staff</span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="ftco-menu">
        <div class="container">
            <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">

                            @foreach($categories as $category)
                            <h3>{{ $category->category_name }}</h3>
                            <div class="row">

                                @forelse($category->product as $product)
                                <div class="col-md-3 text-center">
                                    <div class="menu-wrap">
                                        <a href="#" class="menu-img img mb-2" style="background-image: url({{ url('/') }}/images/{{ $product->product_image }});"></a>
                                        <div class="text">
                                            <h3><a href="#">{{ $product->product_name }}</a></h3>
                                            <p>{{ $product->category_name }}</p>
                                            <p class="price"><span>$ {{ $product->product_price }}</span></p>
                                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-md-12 text-center btn btn-danger disabled">
                                    <!-- <div class="menu-wrap"> -->
                                        <div class="text">
                                            <h4><a href="#">No Product</a></h4>
                                        </div>
                                    <!-- </div> -->
                                </div>
                                @endforelse
                            </div>
                            @endforeach
                          </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection