 
 <style>
   .custom_button{
        float: right;
    width: 150px;
    text-align: center;
    height: 50px;
    line-height: 50px;
    background: #1d1d56;
    color: white;
    font-weight: 700;
    text-transform: capitalize;
    margin: 5px;
    font-size: initial;
   }
   .custom_price{
    font-size: larger;
    
    margin: 5px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    color: #00c700;
   }
 </style>
 <!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Rooms</h3>
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
                            <li>Our Roooms</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->

        <!-- Start welcome section -->
        <section class="room-section sec-padding">
            <div class="container">
                <div class="row">


                    <?php  
                    foreach ($Rooms as $row) { 
                      ?>

                   <div class="col-lg-4 col-md-4 col-xs-12">
                       <div class="single-room-wrapper">
                        <div class="media">

                              <a href="<?php echo base_url('Frontend/single_room/index/'); echo $row->id;  ?>" >
                                 <img src="<?php 
              echo  base_url('asserts/Rooms/'); 
               foreach($images as $img)
               {
                if($img->id == $row->main_image_id)
                {
                  echo $img->image;
                }
               }
               ?>" alt="room">
                              </a>
                            <div class="text-wrapper">
                                <div class="text-body">
                                    <h4 ><?php echo $row->title; ?></h4>
                                    </div>
                                </div>
                                    <span class="custom_price">RS: <?php echo $row->price; ?>/(night)</span>
                                    <a href="<?php echo base_url('Frontend/single_room/index/'); echo $row->id;  ?>" class="custom_button">room detail</a>
                            </div>
                        </div>
                       </div>

                     <?php } ?>
                       
                        
                   </div>
                </div>
            </div>
            <!-- End main content -->
        </section>
        <!-- End welcome section -->

