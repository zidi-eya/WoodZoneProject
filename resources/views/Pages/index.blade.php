<!DOCTYPE html>
<html lang="zxx">

@include('Shared.head')

<body>


    <!-- Header Area Start -->
    @include('Shared.header')
    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    @include('Shared.OffCanvasWishlist')
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    @include('Shared.OffCanvasCart')
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    @include('Shared.OffCanvasMenu')
    <!-- OffCanvas Menu End -->

    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item 1 -->
                <div class="hero-slide-item slider-height swiper-slide d-flex bg-color1"
                    data-bg-image="assets/images/slider-image/slider-bg-1.png">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <h2 class="title-1">Best Handmade <br class="d-sm-none"> Goods</h2>
                                    <span class="price">
                                        <span class="old"> <del>$35.00</del></span>
                                        <span class="new">- $20.00</span>
                                    </span>
                                    <a href="/shopCategories" class="btn btn-primary m-auto text-uppercase">View
                                        Collection</a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/slider-image/slider-1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item 2 -->
                <div class="hero-slide-item slider-height swiper-slide d-flex bg-color1"
                    data-bg-image="assets/images/slider-image/slider-bg-1.png">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content slider-animated-1">
                                    <h2 class="title-1">The Ultimate <br class="d-sm-none"> Kitchen Utensils</h2>
                                    <span class="price">
                                        <span class="old"> <del>$25.00</del></span>
                                        <span class="new">- $18.00</span>
                                    </span>
                                    <a href="/shopCategories" class="btn btn-primary m-auto text-uppercase">View
                                        Collection</a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="assets/images/slider-image/slider-3.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Hero/Intro Slider End -->
 <!-- Feature Area Srart HANDMADE-->
    <div class="feature-area pt-100px">
        <div class="container">
            <div class="feature-wrapper">
                <div class="single-feture-col">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Hand Made</h4>
                            <span class="sub-title">Our products are meticulously crafted 
                                by hand with minimal use of machinery, ensuring a production
                                 system that is both ethical and environmentally sustainable. </span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col ">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Raw Material</h4>
                            <span class="sub-title">We specialize in crafting handmade products made 
                                from organic and eco-friendly Tunisian raw materials, ensuring that 
                                all of our products are 100% environmentally sustainable.</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title"> High Quality</h4>
                            <span class="sub-title">Our production process involves using wood from Tunisian 
                                Olive Trees. This wood is incredibly tough and long-lasting, that make
                                 it perfect for everyday use and safe for food-related products.</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->


    <!-- Banner Area Start BEST SELLERS -->
    <div class="banner-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="single-col">
                    <div class="single-banner">
                        <img src="assets/images/banner/1.jpg" alt="">
                        <div class="banner-content">
                            
                            <a href="/shopCategories" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="single-col center-col">
                    <div class="single-banner">
                        <img src="assets/images/banner/2.jpg" alt="">
                        <div class="banner-content">
                              <a href="/shopCategories" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="single-col">
                    <div class="single-banner">
                        <img src="assets/images/banner/3.jpg" alt="">
                        <div class="banner-content">
                            
                            <a href="/shopCategories" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    
   

    <!-- Bestseller Items Area Start -->
    <div class="product-area">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Bestseller Items</h2>
                    </div>
                    <!-- Tab Start -->
                    <div class="tab-slider nav-center">
                        <ul class="product-tab-nav nav justify-content-center align-items-center">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-fabric-2"><span>Jars</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                    href="#tab-wooden-2"><span>Utensils</span></a>
                            </li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-pottery-2"><span>Coasters</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-jewelry-2"><span>Bowls</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab End -->
                </div>
                <!-- Section Title End -->

            </div>
            <!-- Section Title & Tab End -->

            <div class="row">
                <div class="col">
                    <div class="tab-content mt-60px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade " id="tab-fabric-2">
                            <div class="new-product-slider swiper-container slider-nav-style-1 pb-100px">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/9.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/9.1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                  
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Hand-Made Garlic Mortar
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/10.1.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/10.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                   
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Handmade Ceramic Pottery
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$45.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/11.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/11.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">Sale</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                   
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Hand Painted Bowls
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/13.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/12.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-5%</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                   
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Antique Wooden Farm
                                                        Large
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$40.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/6.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/6.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                             
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Handmade Jute Basket
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/7.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                   
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Knitting yarn & crochet
                                                        hook
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 2nd tab start -->
                        <div class="tab-pane fade show active" id="tab-wooden-2">
                            <div class="new-product-slider swiper-container slider-nav-style-1 pb-100px">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/17.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/17.1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                             
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Hand-Made Garlic Mortar
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/18.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/18.1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                              
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Handmade Ceramic Pottery
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$45.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/19.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/19.1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">Sale</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                 
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Hand Painted Bowls
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/20.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/20.1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-5%</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Antique Wooden Farm
                                                        Large
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$40.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/6.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/6.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Handmade Jute Basket
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/7.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Knitting yarn & crochet
                                                        hook
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd tab end -->
                        <!-- 3rd tab start -->
                        <div class="tab-pane fade" id="tab-pottery-2">
                            <div class="new-product-slider swiper-container slider-nav-style-1 pb-100px">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/21.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/21.1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Hand-Made Garlic Mortar
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/22.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/22.1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Handmade Ceramic Pottery
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$45.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/23.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/23.1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">Sale</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Hand Painted Bowls
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/12.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-5%</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Antique Wooden Farm
                                                        Large
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$40.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/6.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/6.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Handmade Jute Basket
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/7.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Knitting yarn & crochet
                                                        hook
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd tab end -->
                        <!-- 4th tab start -->
                        <div class="tab-pane fade" id="tab-jewelry-2">
                            <div class="new-product-slider swiper-container slider-nav-style-1 pb-100px">
                                <div class="new-product-wrapper swiper-wrapper">
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/9.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/9.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Hand-Made Garlic Mortar
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/10.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/10.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-10%</span>
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Handmade Ceramic Pottery
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$45.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/11.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/11.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">Sale</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Hand Painted Bowls
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/12.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/1.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="sale">-5%</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Antique Wooden Farm
                                                        Large
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                    <span class="old">$40.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/6.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/6.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                          
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Handmade Jute Basket
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/produitDetails" class="image">
                                                    <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                    <img class="hover-image" src="assets/images/product-image/7.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="/wishlist" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                   
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/produitDetails">Knitting yarn & crochet
                                                        hook
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                        </div>
                                        <!-- Single Prodect -->
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 4th tab end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestseller Items Area End -->


    <!-- Deal Area Start -->
    <div class="deal-area pb-100px pt-100px">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="deal-inner deal-bg position-relative ptb-80px"
                        data-bg-image="assets/images/deal-img/deal-bg.jpg">
                        <div class="deal-wrapper">
                            <h3 class="title">Handmade Pen Holder <br>
                                & Offer Sale -20% </h3>
                            <span class="price">
                                <span class="old"> <del>$25.00</del></span>
                                <span class="new">- $18.00</span>
                            </span>
                            <a href="/cart" class="btn btn-lg btn-primary">Add To Cart</a>
                        </div>
                        <div class="deal-image">
                            <img class="img-fluid" src="assets/images/deal-img/woman.png" alt="">
                            <div class="discount">
                                <h3>-20%</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Area End -->



    <!-- best area Area Start -->
    <div class="banner-area-2">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-6 p-0">
                    <div class="single-banner nth-child-1">
                        <img src="assets/images/banner/4.jpg" alt="">
                        <div class="banner-content nth-child-4">
                        <!--span class="category">Best Seller</span-->
                            <span class="title">Handmade Pot <br>
                                & Pen Holder</span>
                            <a href="/shopCategories" class="shop-link btn btn-primary text-uppercase">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 ">
                    <div class="single-banner nth-child-2 mb-lm-30px mt-lm-30px">
                        <img src="assets/images/banner/5.jpg" alt="">
                        <div class="banner-content nth-child-1">
                          <!--span class="category">Best Seller</span-->
                            <span class="title">Wool Silk Pod <br>
                                -20% Off</span>
                            <a href="/shopCategories" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                    <div class="single-banner nth-child-3">
                        <img src="assets/images/banner/6.jpg" alt="">
                        <div class="banner-content nth-child-1">
                            <!--span class="category">Best Seller</span-->
                            <span class="title">Handmade Plate <br>
                                -40 Off</span>
                            <a href="/shopCategories" class="shop-link btn btn-primary text-uppercase">Shop
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  best area Area End -->


    <!--  Blog area Start -->
    <div class="main-blog-area pb-100px pt-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30px0px">
                        <h2 class="title">Latest Blogs</h2>
                        <p class="sub-title">We’ve organized these recipes every way we could think 
                            of so you don't have to! No matter how you browse, 
                            we’re sure you’ll find just what you were looking for.
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="/SingleBlog1"><img src="assets/images/blog-image/1.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <span> By,<a class="blog-author cercle-shape" href="/about"> WoodZone Team</a></span>
                                <span class="blog-date">04 Mars, 2023</span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="/SingleBlog1">Strawberry White Chocolate Cookies</a></h5>

                            <a href="/SingleBlog1" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px">
                    <div class="single-blog ">
                        <div class="blog-image">
                            <a href="/SingleBlog2"><img src="assets/images/blog-image/2.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <span> By,<a class="blog-author cercle-shape" href="/about"> WoodZone Team</a></span>
                                <span class="blog-date">25 February, 2023</span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="/SingleBlog2">Simple Green Salad
                                </a></h5>

                            <a href="/SingleBlog2" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="/SingleBlog3"><img src="assets/images/blog-image/3.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <span> By,<a class="blog-author cercle-shape" href="/about"> WoodZone Team</a></span>
                                <span class="blog-date">17 January, 2023</span>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="/SingleBlog3">The Best Detox Smoothie Bowl
                                </a></h5>


                            <a href="/SingleBlog3" class="btn btn-primary blog-btn"> Read More</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
        </div>
    </div>
    <!--  Blog area End -->

    

    <!-- Footer Area Start -->
    @include('Shared.footer')
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    @include('Shared.SearchModal')
    <!-- Search Modal End -->

     

    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Hand-Made Garlic Mortar</h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
                                        <li class="old-price"><del>$30.90</del></li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                                </div>
                                <div class="stock mt-30px">
                                    <span class="avallabillty">Availability: <span class="in-stock"><i
                                                class="fa fa-check"></i>In Stock</span></span>
                                </div>
                                <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni
                                    nostrud exercitation ullamco laboris </p>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="/wishlist"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Handmade, </a>
                                        </li>
                                        <li>
                                            <a href="#">Wooden, </a>
                                        </li>
                                        <li>
                                            <a href="#">Decor</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-social-info pro-details-same-style d-flex">
                                    <span>Share: </span>
                                    <ul class="d-flex">
                                    <li class="m-0">
                                    <a href="https://www.facebook.com/profile.php?id=100089927228240&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/woodzone__/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR3BEqGxUHUjpu0CwfsCzRlmGd1HNwOdAhBIvzrlqpVu1ymFHTRlA3CGf3k"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/woodzonee/?invite_code=36ad17fc2eb241a7ae695009effe834d&sender=607493574644243261"><i class="fa fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.etsy.com/shop/woodzonee/?etsrc=sdt&fbclid=IwAR1s_WHXd8k1SHzJgyYd2ymI9jm-b8Iw6qH8Z-7LRsx7hV0yzgd7R1mB460"><i class="fa fa-etsy"></i></a>
                                </li>
                                <li>
                                    <a href="youtube.com/channel/UCHwZEIiAELO9xCIqz8XIvkQ"><i class="fa fa-youtube"></i></a>
                                </li>
                                       
                                    </ul>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="assets/images//icons/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Js -->
    <script src="assets/js/main.js"></script>
</body>

</html>