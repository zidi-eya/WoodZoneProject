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

    <!-- Contact Area Start -->
    <div class="contact-area pt-100px pb-100px">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <span class="sub-title">Get In Touch</span>
                            <h4 class="heading">Visit One Of Our Socials
                                Contact Us Now</h4>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <i class="pe-7s-call"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Phone:</h5>
                                    <p><a href="tel:0123456789">23 892 260</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <i class="pe-7s-mail"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Email:</h5>
                                    <p><a href="mailto:woodzone.crafts@gmail.com">woodzone.crafts@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="single-contact">
                                <div class="icon-box">
                                    <i class="pe-7s-map-marker"></i>
                                </div>
                                <div class="info-box">
                                    <h5 class="title">Address:</h5>
                                    <p>Tunisia</p>
                                </div>
                            </div>
                            <ul class="social">
                                <li class="m-0">
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100089927228240&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/woodzone__/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR3BEqGxUHUjpu0CwfsCzRlmGd1HNwOdAhBIvzrlqpVu1ymFHTRlA3CGf3k"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.pinterest.com/woodzonee/?invite_code=36ad17fc2eb241a7ae695009effe834d&sender=607493574644243261"><i class="fa fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.etsy.com/shop/woodzonee/?etsrc=sdt&fbclid=IwAR1s_WHXd8k1SHzJgyYd2ymI9jm-b8Iw6qH8Z-7LRsx7hV0yzgd7R1mB460"><i class="fa fa-etsy"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCHwZEIiAELO9xCIqz8XIvkQ"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <div class="contact-title mb-30">
                                <h2 class="title" data-aos="fade-up" data-aos-delay="200">Leave us a Message</h2>
                                <p> We will contact you within one business day. </p>
                            </div>
                            <form class="contact-form-style" id="contact-form"
                                action="assets/php/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <input name="name" placeholder="Name*" type="text" />
                                    </div>
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <input name="email" placeholder="Email*" type="email" />
                                    </div>
                                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                        <input name="subject" placeholder="Subject*" type="text" />
                                    </div>
                                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                        <textarea name="message" placeholder="Your Message*"></textarea>
                                        <button class="btn btn-primary mt-4" data-aos="fade-up" data-aos-delay="200"
                                            type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    <!-- map Area Start 

    <div class="contact-map">
        <div id="mapid">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas"
                        src="https://www.google.com/maps/@36.8017534,10.137577,11.49z"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                </div>
            </div>
        </div>
    </div>
     map Area End -->

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