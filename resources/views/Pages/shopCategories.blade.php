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

    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <div class="sidebar-widget-image">
                        <a href="#" class="single-banner">
                            <img src="assets/images/banner/12.jpg" alt="">
                        </a>
                    </div>
                    <!-- Shop Top Area Start -->
                    <div class="desktop-tab">
                        <div class="shop-top-bar d-flex">
                            <!-- Left Side End -->
                            <div class="shop-tab nav">
                                <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </a>
                                <a href="#shop-list" data-bs-toggle="tab">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Sort By:</p>
                                </div>
                                <div class="shop-select">
                                    <select class="shop-sort">
                                        <option data-display="Default">Default</option>
                                        <option value="1"> Name, A to Z</option>
                                        <option value="2"> Name, Z to A</option>
                                        <option value="3"> Price, low to high</option>
                                        <option value="4"> Price, high to low</option>
                                    </select>

                                </div>
                            </div>
                            <!-- Right Side End -->
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Show:</p>
                                </div>
                                <div class="shop-select show">
                                    <select class="shop-sort">
                                        <option data-display="12">12</option>
                                        <option value="1"> 12</option>
                                        <option value="2"> 10</option>
                                        <option value="3"> 25</option>
                                        <option value="4"> 20</option>
                                    </select>

                                </div>
                            </div>
                            <!-- Right Side End -->
                            <!-- Left Side start -->
                           
                        </div>
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Mobile shop bar -->
                    <div class="shop-top-bar mobile-tab">
                        <!-- Left Side End -->
                        <div class="shop-tab nav d-flex justify-content-between">
                            <div class="shop-tab nav">
                                <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </a>
                                <a href="#shop-list" data-bs-toggle="tab">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </a>
                            </div>
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Sort By:</p>
                                </div>
                                <div class="shop-select">
                                    <select class="shop-sort">
                                        <option data-display="Default">Default</option>
                                        <option value="1"> Name, A to Z</option>
                                        <option value="2"> Name, Z to A</option>
                                        <option value="3"> Price, low to high</option>
                                        <option value="4"> Price, high to low</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <!-- Right Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center justify-content-between">
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Show:</p>
                                </div>
                                <div class="shop-select show">
                                    <select class="shop-sort">
                                        <option data-display="12">12</option>
                                        <option value="1"> 12</option>
                                        <option value="2"> 10</option>
                                        <option value="3"> 25</option>
                                        <option value="4"> 20</option>
                                    </select>

                                </div>
                            </div>
                            <!-- Right Side End -->
                            <!-- Left Side start -->
                        
                        </div>
                    </div>
                    <!-- Mobile shop bar -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade " id="shop-grid">
                                        <div class="row mb-n-30px">
                                           @foreach($products as $product) <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
        
                                                
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="/produitDetails" class="image">
                                                            <img src="{{ asset('storage/'.$product->image) }}"
                                                                alt="cc" />
                                                            <img class="hover-image"
                                                                src="{{ asset('storage/'.$product->image) }}" alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="actions">
                                                            <a href="/wishlist      " class="action wishlist"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></a>
                                                                   
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="/produitDetails">{{ $product->title }}
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">{{ $product->price }}</span>
                                                        </span>
                                                    </div>
                                                    <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                                </div>
                                                

                                            </div>
                                            @endforeach
                                         
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="shop-list">
                                        <div class="shop-list-wrapper">
                                        @foreach($products as $product) 
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="/produitDetails" class="image">
                                                                <img src="{{ asset('storage/'.$product->image) }}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{ asset('storage/'.$product->image) }}"
                                                                    alt="Product" />
                                                            </a>
                                                            <span class="badges">
                                                                <span class="new">New</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num d-none">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="/produitDetails">{{ $product->title }}
                                                            </a></h5>
                                                            <p>{{ $product->description }} </p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">{{ $product->price }}</span>
                                                            </span>
                                                            <div class="actions">
                                                                <a href="/wishlist" class="action wishlist"
                                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                                <a href="#" class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="pe-7s-search"></i></a>
                                                                      
                                                            </div>
                                                            <a href="/cart" class=" add-to-cart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>                                            <br>

                                            @endforeach
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->

                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                            <div class="pages">
                                <ul>
                                    <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="li"><a class="page-link" href="#">1</a></li>
                                    <li class="li"><a class="page-link active" href="#">2</a></li>
                                    <li class="li"><a class="page-link" href="#">3</a></li>
                                    <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Categories</h4>
                            <div class="sidebar-widget-category">
                                <ul>
                                <li><a href="#" class="selected m-0"><i class="fa fa-angle-right"></i> All
                                            <span>(65)</span> </a></li> 
                                @foreach($categories as $categorie)
                                    
                                            <li><a href="#" class="selected m-0"><i class="fa fa-angle-right"></i> {{ $categorie->nameCategorie }}
                                            <span>(65)</span> </a></li> 
                                            @endforeach
                                   
                                    
                                   
                                    
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="sidebar-widget">
                            <h4 class="sidebar-title">Size</h4>
                            <div class="sidebar-widget-size">
                                <ul>
                                    <li><a href="#" class="selected m-0"><i class="fa fa-angle-right"></i> All
                                            <span>(6)</span> </a></li>
                                    <li><a href="#" class=""><i class="fa fa-angle-right"></i> S <span>(12)</span> </a>
                                    </li>
                                    <li><a href="#" class=""><i class="fa fa-angle-right"></i> M <span>(21)</span> </a>
                                    </li>
                                    <li><a href="#" class=""><i class="fa fa-angle-right"></i> L <span>(16)</span> </a>
                                    </li>
                                    <li><a href="#" class=""><i class="fa fa-angle-right"></i> XL <span>(22)</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- Sidebar single item -->
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-8">
                            <h4 class="sidebar-title">Price Filter</h4>
                            <div class="price-filter">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" class="p-0 h-auto lh-1" name="price"
                                        placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget-image ">
                            <a href="#" class="single-banner">
                                <img src="assets/images/banner/1.jpg" alt="">
                            </a>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget tag m-0">
                            <h4 class="sidebar-title">Tags</h4>
                            <div class="sidebar-widget-tag">
                                <ul>
                                    <li><a href="#">Wooden</a></li>
                                    <li><a href="#">Organic</a></li>
                                    <li><a href="#">Hand Made</a></li>
                                    <li><a href="#">Rustic</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->


    <!-- Footer Area Start -->
    @include('Shared.footer')
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    @include('Shared.SearchModal')
    <!-- Search Modal End -->

     

    <!-- Modal -->
    @include('Shared.modal')
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