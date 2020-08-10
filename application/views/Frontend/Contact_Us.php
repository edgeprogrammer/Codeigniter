 <!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Contact us</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="nav-path">
                <div class="container"> 
                    <div class="row">
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <!-- Start map section -->
        <section class="map-section sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="our-location">
                            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7101.497518526298!2d88.28139830374208!3d27.13272226566358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e4284cc73e6d6b%3A0x4716819788fba927!2sSalghari%2C%20Sikkim%20737121!5e0!3m2!1sen!2sin!4v1580932032978!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                            <div class="get-directions">  
                                <form action="http://maps.google.com/maps" method="get" target="_blank">
                                    <input type="text" name="saddr" placeholder="Enter Your Place to find distance" />
                                    <input type="hidden" name="daddr" value="Salghari Sikkim 737121" />
                                    <input type="submit" value="Get directions" class="direction-btn" />
                                </form>
                            </div> 
                        </div>

                    </div>
                </div>
            </div>
            <!-- End main content -->
        </section>
        <!-- End map section -->

        <section class="contact-us bg-color sec-padding">
            <div class="container">

                <div class="rox">
                    <div class="col-md-7">

                        <div class="main-title">
                            <h3>We'd Love to Hear From You</h3>
                            <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis ultricies dui, ut rhoncus libero augue. </p>
                        </div>

                        <div class="form">
                            <div class="row">
                                <p class="success" id="success"></p>
                                <p class="error" id="error"></p>
                                <form  id="contact_form" method="post" action="<?php echo base_url('Frontend/Mail/ContactUs'); ?>" >
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="Your full name" name="name" id="contact_name" class="input"></div>
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="E-mail Address" name="email" id="contact_email" class="input"></div>
                                    <div class="col-md-4"><input type="text" data-delay="300" placeholder="Subject" name="subject" id="contact_subject" class="input"></div>
                                     <div class="col-md-12"><input type="text" data-delay="300" placeholder="Phone" name="phonenumber" id="contact_subject" class="input"></div>
                                 	<div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea></div>
                                    <div class="col-md-3"><input name=" " type="submit" value="submit" onClick="validateContact();"></div>
                                </form>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-5">

                        <div class="contact-get">
                            <div class="main-title">
                                <h3><span>GET IN</span> Touch</h3>
                                <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis ultricies.</p>
                            </div>

                            <div class="get-in-touch">
                                <div class="detail">
                                    <span><b>Phone:</b> +91 8016548526</span>
                                    <span><b>Email:</b> <a href="#.">support@bisheshomestay.com/</a></span>
                                    <span><b>Web:</b> <a href="#.">http://bisheshomestay.com/</a></span>
                                    <span><b>Address:</b> Lower Dorop salghari
south sikkim, India</span>
                                </div>

                                <div class="social-icons">
                                    <a href="#." class="fb"><i class="icon-euro"></i></a>
                                    <a href="#." class="tw"><i class="icon-yen"></i></a>
                                    <a href="#." class="gp"><i class="icon-google-plus"></i></a>
                                    <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Start welcome section -->
