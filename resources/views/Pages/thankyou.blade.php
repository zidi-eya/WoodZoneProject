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

 

    <!-- Thank You area start -->
    <div class="thank-you-area pt-100px ">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="inner_complated">
                        <div class="img_cmpted"><img src="assets/images/icons/cmpted_logo.png" alt=""></div>
                        <p class="dsc_cmpted">Thank you for ordering in our store. You will receive a confirmation
                            email shortly.</p>
                        <div class="btn_cmpted">
                            <a href="/shop" class="shop-btn" title="Go To Shop">Continue Shopping </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quick_order ">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <div class="main_quickorder text-align-center">
                        <h3 class="title">We will Call you within 24 hours to confirm your Order</h3>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Thank You area end -->

 

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