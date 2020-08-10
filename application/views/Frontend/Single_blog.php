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
                    <div class="col-md-8">
                        <div class="left-box">
						<?php foreach($Blog as $row){
							?>
						
                            <div class="single-blog-post">
                                <div class="img-holder"><img src="<?php echo base_url('asserts/Blogs/'); echo $row->image;?>" alt="Awesome Image">
                                </div>
                                <a href="#"> <h4><?php echo $row->title; ?></h4></a>
                                <ul class="meta list-inline">
                                    <li><a href="#"><i class="fa fa-user"></i> Posted By : Admin</a></li>
                                </ul>
                                <p><?php echo $row->description; ?></p>
                                <a href="#" class="read-more thm-btn">Read More</a>
                            </div>
						<?php }  ?>
                             
                        </div>
                    </div>
                    <!-- Sidebar Page Container-->
                    <div class="col-md-4">
                        <!-- Sidebar Page Container-->
                        <div class="right-box">
                           
                            <div class="single-sidebar-widget">
                                <!-- Post widget-->
                                <div class="post-widget">
                                    <div class="title">
                                        <h4>Latest News</h4>
                                        <div class="decor-line"></div>
                                    </div>
                                    <ul>
                                         
                                        <?php foreach($Allblogs as $row)
										{
											?>
                                        <li>
                                            <div class="icon-box"><img src="<?php echo base_url('asserts/Blogs/'); echo $row->image;?>" alt="Awesome Image"></div>
                                            <div class="text-box">
                                                <h5><a href="#"><?php  echo $row->title;?></a></h5><span></span>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <!-- Post widget Ends-->
                            </div>
                        </div>
                        <!-- Sidebar Page Container ends-->
                    </div>
                </div>
                <!-- End row -->
            </div>
        </section>
        <!--End of Blog section-->