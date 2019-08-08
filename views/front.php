<?php
/**
 *  Front page main view
 */


 if(!isset($_SESSION['logged_in'])){

     $_SESSION['logged_in']=0;
 }

?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- buttons grouped for better mobile display, use of css -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">AllOnCampus</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling and display -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a> <!--Make the logo the home button  -->
                </li>
                <li>
                    <a class="page-scroll" href="#sports">Sports</a>
                </li>

                <li>
                    <a class="page-scroll" href="#latest-news">Night Life</a>
                </li>
                <li>
                    <a class="page-scroll" href="#testimonial">Societies</a>
                </li>
                <li>
                    <a class="page-scroll" href="#service">Squares</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                <?php 

                if(isset($_SESSION['logged_in'])){
                    if(($_SESSION['logged_in']==1)){
                        ?>
                        <li>
                    <a href="#admin"><?php echo $_SESSION["logger"];  ?></a>
                </li>

                        <?php
                    }
                    else{
                         ?>
                        <li>
                    <a href="#admin">Login</a>
                </li>

                        <?php

                    }
                }


                 ?>
                

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


<!-- Start Home Page Slider -->
<section id="page-top">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="images/football.jpg" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h1 class="animated3">
                            <span><strong>All On Campus</strong>Has everything all in one place</span>
                        </h1>
                        <p class="animated2">At the unviersity of essex, a lot goes on beyond the lectures in this
                            diverse institution<br> whereby the sporting and social aspects are held to a high standard
                        </p>
                        <a href="https://www.essexstudent.com/colchester/"
                           class="page-scroll btn btn-primary animated1">Read More</a>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->

            <div class="item">
                <img class="img-responsive" src="images/header-back.png" alt="slider">

                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h1 class="animated1">
                            <span>Welcome to <strong>All On Campus</strong></span>
                        </h1>
                        <p class="animated2">Keep an eye out on everything happening at UoE colchester campus<br> from
                            here. 7 days a week, 365 days a year.</p>
                        <a href="#feature" class="page-scroll btn btn-primary animated3">Read More</a>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->

            <div class="item">
                <img class="img-responsive" src="images/basketball.jpg" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h1 class="animated2">
                            <span>The way of <strong>of life</strong></span>
                        </h1>
                        <p class="animated1">All on campus will bring you up to date with everything sports <br> from
                            campus to your browser!</p>
                        <a class="animated3 slider btn btn-primary btn-min-block"
                           href="https://www.bucs.org.uk/BucsCore/InstitutionProfile.aspx?id=75">BUCs League</a><a
                                class="animated3 slider btn btn-default btn-min-block"
                                href="https://www.bucs.org.uk/BucsCore/Results.aspx?id=75&ResultType=institution">Latest
                            Results</a>

                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <!-- /carousel -->
</section>
<!-- End Home Page Slider -->


<!-- Start statement of fact Section -->
<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>This is a priliminary stage of work</br> and this product is being developed by me now</br>please
                    have a look at my page</h1>
                <a href="http://privatewww.essex.ac.uk/~mguhad/" class="page-scroll btn btn-primary animated1">View
                    profile</a>
            </div>
        </div>
    </div>
</section>
<!-- End Call to Action Section -->


<!-- Start Sports Section -->
<section id="sports" class="portfolio-section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>The sports clubs</h3>
                    <p>ESSEX BLADES</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Start Portfolio items -->
                <ul id="portfolio-list">
                    <?php
                    /** @var Article $sport */
                    foreach ($sports as $sport): ?>

                        <li>
                            <div class="portfolio-item">
                                <a href="#modal<?php echo $sport->id; ?>" data-toggle="modal">
                                    <img src="<?php echo $sport->image; ?>" class="img-responsive" alt=""/>
                                    <div class="portfolio-caption">
                                        <h4><?php echo $sport->title; ?></h4>
                                    </div>
                                </a>
                            </div>
                        </li>

                    <?php
                    endforeach;
                    ?>
                </ul>
                <!-- End Portfolio items -->
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->

<!-- Start Modal Section whereby there is a sub-page, football first-->
<?php
/** @var Article $sport */
foreach ($sports as $sport):
    ?>
    <div class="section-modal modal fade" id="modal<?php echo $sport->id; ?>" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>

            <div class="container">
                <?php echo $sport->content; ?>
            </div>
        </div>
    </div>
<?php
endforeach;
?>
<!-- End Portfolio sub_page Modal Section -->


<!-- Start Latest News nightlife Section -->
<section id="latest-news" class="latest-news-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Nightlife Latest News</h3>
                    <p>All that is happening on campus after sunset:</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="latest-news">
                <?php
                /** @var Article $night */
                foreach ($nights as $night):
                    ?>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="<?php echo $night->image ?>" class="img-responsive" alt="">
                            <h4><?php echo $night->title; ?></h4>
                            <div class="post-details">
                                <span class="date"><strong><?php echo date('d', $night->onDate); ?></strong> <br><?php echo date('M, Y', $night->onDate); ?></span>
                            </div>
                            <p><?php echo $night->content; ?></p>
                            <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Latest News nightlife Section -->


<!-- Start Societies Section -->
<div id="testimonial" class="testimonial-section">
    <div class="container">
        <!-- Start Testimonial society Carousel -->
        <div id="testimonial-carousel" class="testimonials-carousel">
            <?php
            /** @var Article $society */
            foreach ($societies as $society):
                ?>
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="<?php echo $society->image; ?>" alt="">
                        <div class="testimonial-author">
                            <div class="author"><?php echo $society->title; ?></div>
                            <div class="designation"><?php echo $society->subtitle; ?></div>
                        </div>
                        <p><?php echo $society->content; ?></p>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <!-- End Society Carousel can add more if needed, but first see wha supervisor says -->
    </div>
</div>
<!-- End Society Section -->


<!--Start sqaures section  -->
<section id="service" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>SQUARES</h3>
                    <p>There are 5 sqaures, each with a unique set of features:</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div>
                <?php
                /** @var Article $square */
                foreach ($squares as $square):
                    ?>
                    <div class="feature-2" style="display:inline-block; width: 360px;">
                        <div class="media">
                            <div class="pull-left">
                                <img class="img-responsive img-rounded" src="<?php echo $square->image; ?>">
                                <div class="border"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $square->title; ?></h4>
                                <p><?php echo $square->content; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
<!-- End Sqaures Section -->


<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>Contact With Us</h3>
                    <p class="white-text">Please do not hesistate to us with any complaint/compliment. Thanks,
                        AllOnCampus team.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required
                                       data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required
                                       data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required
                                       data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required
                                          data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="footer-contact-info">
                    <h4>Contact info</h4>
                    <ul>
                        <li><strong>E-mail :</strong> iammusa18@gmail.com</li>
                        <li><strong>Phone :</strong> 07971941266</li>
                        <li><strong>Mobile :</strong> 07971941266</li>
                        <li><strong>Web :</strong> http://privatewww.essex.ac.uk/~mguhad/</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="footer-contact-info">
                    <h4>Working Hours</h4>
                    <ul>
                        <li><strong>Mon-Wed :</strong> 9 am to 10 pm</li>
                        <li><strong>Thurs-Fri :</strong> 9 to 11 pm</li>
                        <li><strong>Sat :</strong> 9 am to 3 am</li>
                        <li><strong>Sunday :</strong> Closed</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer class="style-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <span class="copyright">Copyright &copy; <a
                                href="http://privatewww.essex.ac.uk/~mguhad/">Musa Guhad</a> 2017</span>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="footer-social text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/Sleazymusa"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="footer-link">
                        <ul class="pull-right">
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>


<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>