 <!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>News</h3>
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
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <!--Blog section Start-->
        <section class="blog-page-section sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         <?php  
                                 foreach ($Blogs as $row) { 
                                  ?>

                        <div class="col-md-4" style="padding: 10px;">
                            <div class="left-box">
                           
                                <div class="single-blog-post">
                                    <div class="img-holder"><img src="<?php echo base_url('asserts/Blogs/'); echo $row->image;?>" alt="Awesome Image" style="height: 220px;width: 100%;">
                                    </div>
                                    <a href="#"> <h4><?php echo $row->title; ?></h4></a>
                                    <ul class="meta list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> Posted By :  Michale John</a></li>
                                        <li><a href="#"><i class="fa fa-tag"></i> investiment, taxes</a></li>
                                    </ul>
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, </p>
                                    <a href="<?php echo base_url('Frontend/Single_blog/index/'); echo $row->id; ?>" class="read-more thm-btn" style="margin-top: 0px;">Read More</a>
                                </div>
                             
                                
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Sidebar Page Container-->
                   
                </div>
                <!-- End row -->
            </div>
        </section>
        <!--End of Blog section-->