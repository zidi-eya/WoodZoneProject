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

   

    <!-- checkout area start -->
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Order Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>First Name</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Last Name</label>
                                    <input type="text" />
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="billing-select mb-4">
                                    <label>Country</label>
                                    <select>
                                        <option>Select a country</option>
                                        <option>Tunisia</option>
                                        <option>France</option>
                                        <option>Belgium</option>
                                        <option>America</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Street Address</label>
                                    <input class="billing-address" placeholder="House number and street name"
                                        type="text" />
                                    <input placeholder="Apartment, suite, unit etc." type="text" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Town / City</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>State / County</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Phone</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Email Address</label>
                                    <input type="text" />
                                </div>
                            </div>
                        </div>
                       
                       
                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <div class="additional-info">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. "
                                    name="message"></textarea>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <li><span class="order-middle-left">Product Name X 1</span> <span
                                                class="order-price">$100 </span></li>
                                        <li><span class="order-middle-left">Product Name X 1</span> <span
                                                class="order-price">$100 </span></li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li> shipping fees</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>$100</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div id="faq" class="panel-group">
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                        href="#my-account-1" class="collapsed"
                                                        aria-expanded="true">Direct bank transfer</a>
                                                </h4>
                                            </div>
                                            <div id="my-account-1" class="panel-collapse collapse show"
                                                data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                        href="#my-account-3">Cash on delivery</a></h4>
                                            </div>
                                            <div id="my-account-3" class="panel-collapse collapse"
                                                data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Please pay the delivery man when he brings you order in cash.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <a class="btn-hover" href="thankyou">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout area end -->

 
   <!-- Footer Area Start -->
   @include('Shared.footer')
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    @include('Shared.SearchModal')
    <!-- Search Modal End -->

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