    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{route('front.index')}}"><img src="{{asset('/front/img/logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: {{ $contact->address }}</li>
                            <li>Phone: {{ $contact->phone }}</li>
                            <li>Email: {{ $contact->email }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            @if($contact->fb_link !== null)
                            <a href="{{ $contact->fb_link }}"><i class="fa fa-facebook"></i></a>
                            @endif
                            @if($contact->insta_link !== null)
                            <a href="{{ $contact->insta_link }}"><i class="fa fa-instagram"></i></a>
                            @endif
                            @if($contact->wp_link !== null)
                            <a href="{{ $contact->wp_link }}"><i class="fa fa-whatsapp"></i></a>
                            @endif
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('/front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/front/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/front/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/front/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('/front/js/mixitup.min.js')}}"></script>
    <script src="{{asset('/front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/front/js/main.js')}}"></script>



</body>

</html>