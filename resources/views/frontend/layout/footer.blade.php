<footer class="footer_widgets">
    <div class="main_footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_footer_inner d-flex">
                        <div class="footer_widget_list">
                            <div class="footer_logo">
                                <a href="#"><img aria-label="logo" max-width="256px" max-height="256px"
                                        src="{{asset('frontend')}}/assets/img/logo/logo2.png" alt=""></a>
                            </div>
                            <div class="footer_contact_desc">
                                <p> {!! $slider['subtitle'] !!}</p>
                            </div>
                            <div class="footer_social">
                                <ul class="d-flex">
                                    <li><a aria-label="facebook" class="facebook"
                                            href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li><a aria-label="dribble" class="dribbble" href="https://dribbble.com/"><i
                                                class="icofont-dribbble"></i></a></li>
                                    <li><a aria-label="twitter" class="twitter" href="https://www.youtube.com/"><i
                                                class="icofont-youtube-play"></i></a></li>
                                    <li><a aria-label="youtube" class="youtube" href="https://twitter.com/"><i
                                                class="icofont-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_widget_list contact">
                            <h3>Contact</h3>
                            <div class="footer_contact_info">
                                <div class="footer_contact_info_list">
                                    <span>Location:</span>
                                    {!! $contact['address'] !!}
                                </div>
                                <div class="footer_contact_info_list">
                                    <span>Email:</span>
                                    <p><a href="#mailto: {!! $contact['email'] !!}"> {!! $contact['email'] !!}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="footer_widget_list">
                            <h3>Phone</h3>
                            <div class="footer_winners_gallery">
                                <div class="footer_winners_list d-flex">
                                    {!! $contact['phone'] !!}
                                </div>
                                
                            </div>
                        </div>
                        <div class="footer_widget_list footer_list_menu">
                            <h3>Content</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html"> Copywriting</a></li>
                                    <li><a href="about.html">Social Media</a></li>
                                    <li><a href="about.html">Interactive Media</a></li>
                                    <li><a href="about.html">Motion Design</a></li>
                                    <li><a href="about.html">Illustration</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_bottom_inner d-flex justify-content-between">
                        <div class="copyright_right">
                            <p> © 2023 Connect With Dr.Atiq <i class="icofont-heart"></i> by <a
                                    href="https://lab-ar.com/">Lab AR</a></p>
                        </div>
                        <div class="footer_bottom_link_menu">
                            <ul class="d-flex">
                                <li><a href="about.html">Terms & Condition </a></li>
                                <li><a href="about.html">Privacy Policy </a></li>
                            </ul>
                        </div>

                        <div class="scroll__top_icon">
                            <a id="scroll-top" href="#"><img aria-label="scroll-top" width="46" height="40"
                                    src="{{asset('frontend')}}/assets/img/icon/scroll-top.webp" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>