 
 <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
    array = [],
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
          minDate: new Date(),
          beforeShowDay: function (date) {
          var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
           return [array.indexOf(dateString) == -1];
           }
             
        })
        .on( "change", function() {
          to.datepicker("option", "minDate", getDate( this ));
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
		beforeShowDay: function (date) {
          var dateString = jQuery.datepicker.formatDate('yy-mm-dd', date);
           return [array.indexOf(dateString) == -1];
           }
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script> 
  <style>
.ui-datepicker-month{
	color:black;
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
                                    <h3>Single Room</h3>
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
                            <li>Single Room</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcumb section -->
           <?php  
                    foreach ($Rooms as $row) { 
                      ?>

        <!-- Start welcome section -->
        <section class="single-room-section sec-padding">
            <div class="container">

                <div class="row">
                 <div class="col-md-8">
                     <div class="left-view ">
                         <div class="about-carousel">
                               <?php 
                                    foreach($images as $img)
                       {
                        if($img->room_id == $row->id)
                         { ?>
                                     <!-- single-awesome-project start -->
                                     <div class="single-about-project">
                                         <div class="awesome-img">
                                             <a href="#">
                                                 <img style="max-height: 370px;" src="<?php echo  base_url('asserts/Rooms/'); echo $img->image; ?>" alt="" />
                                             </a>
                                         </div>
                                     </div>
                                     <?php  
                                }
                               }
                               ?>
                                 </div>
                         <div class="what-in-room">
                             <div class="included">
                                 <img src="<?php echo base_url('asserts/'); ?>img/services/icon-ac.png" alt="icon">
                                 <span>Coll AC</span>
                             </div>
                             <div class="included">
                                 <img src="<?php echo base_url('asserts/'); ?>img/services/icon-car.png" alt="icon">
                                 <span>free parking</span>
                             </div>
                             <div class="included">
                                 <img src="<?php echo base_url('asserts/'); ?>img/services/icon-cup.png" alt="icon">
                                 <span>breakfast</span>
                             </div>
                             <div class="included">
                                 <img src="<?php echo base_url('asserts/'); ?>img/services/icon-wifi.png" alt="icon">
                                 <span>wifi service</span>
                             </div>
                             <div class="included">
                                 <img src="<?php echo base_url('asserts/'); ?>img/services/icon-led.png" alt="icon">
                                 <span>tv</span>
                             </div>
                         </div>
                         <div class="room-description">

                                 <h3><?php echo $row->title; ?></h3>
                                 <p><?php echo $row->description; ?></p>

                         </div>
                         <div class="room-overview">
                             <div class="table-responsive">
                                 <table class="table table-striped">
                                     <colgroup>
                                         <col class="col-xs-1">
                                         <col class="col-xs-7">
                                     </colgroup>
                                     <tbody>
                                     <tr>
                                         <th scope="row"><code>Occupancy</code></th>
                                         <td>Max <?php echo $row->occupancy; ?> Persons</td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><code>View</code></th>
                                         <td><?php echo $row->view; ?></td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><code>Address</code></th>
                                         <td><?php echo $row->address; ?></td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><code>Beds</code></th>
                                         <td><?php echo $row->beds; ?></td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><code>Bathroom</code></th>
                                         <td><?php echo $row->bathroom; ?></td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><code>Children</code></th>
                                         <td><?php echo $row->children; ?> </td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><code>Adult</code></th>
                                         <td><?php echo $row->adult; ?></td>
                                     </tr>
                                   
                                     </tbody>
                                 </table>
                                      <ul style="margin: 15px 0 0 0;width: 100%;float: left;list-style: none;padding: 0;">

                                            <li style="float: left;width: 49%;margin: 0 0 18px 0;list-style-type: none;font-size: 17px;"><i style="color: #4db7fe;margin-right: 5px;"class="fa fa-check-circle-o"></i><?php echo $row->lawn; ?> </li>

                                            <li style="float: left;width: 49%;margin: 0 0 18px 0;list-style-type: none;font-size: 17px;"><i style="color: #4db7fe;margin-right: 5px;"class="fa fa-check-circle-o"></i><?php echo $row->microwave; ?></li>

                                            <li style="float: left;width: 49%;margin: 0 0 18px 0;list-style-type: none;font-size: 17px;"><i style="color: #4db7fe;margin-right: 5px;"class="fa fa-check-circle-o"></i><?php echo $row->gym; ?></li>

                                            <li style="float: left;width: 49%;margin: 0 0 18px 0;list-style-type: none;font-size: 17px;"><i style="color: #4db7fe;margin-right: 5px;"class="fa fa-check-circle-o"></i><?php echo $row->barbecue; ?></li>

                                            <li style="float: left;width: 49%;margin: 0 0 18px 0;list-style-type: none;font-size: 17px;"><i style="color: #4db7fe;margin-right: 5px;"class="fa fa-check-circle-o"></i><?php echo $row->roomService; ?></li>

                                            <li style="float: left;width: 49%;margin: 0 0 18px 0;list-style-type: none;font-size: 17px;"><i style="color: #4db7fe;margin-right: 5px;"class="fa fa-check-circle-o"></i><?php echo $row->tvCable; ?></li>
                                       
                                       </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                    <div class="col-md-4">
                        <div class="booking-form">
                            <form action="<?php echo base_url('Frontend/Booking_cnt/booking_form2/'); echo $row->id; ?>" method="Post" class="listing-search__form" autocomplete="off">
                                <div class="price">
                                    <p>Room From Per Night</p>
                                    <span><?php echo $row->price; ?></span>
                                </div>
                                <hr>
								 <div class="item">
                                    <label class="listing-search__label">Name</label>
                                    <input type="text" class="form-control input-field"   placeholder="Your full name" name="name" id="contact_name"   >
                                </div>
								 <div class="item">
                                    <label class="listing-search__label">Email</label>
                                    <input type="text" class="form-control input-field"   placeholder="Your full name" name="email" id="contact_email"   >
                                </div>
								 <div class="item">
                                    <label class="listing-search__label">Phone</label>
                                    <input type="text" data-delay="300" placreholder="Phone" Placeholder="Enter your Phone no" name="phone" id="contact_subject" class="form-control input"
                                </div>
								 <div class="item">
                                    <label class="listing-search__label">Arrival Date</label>
                                    <input type="text" id="from" class="form-control" name="from">
                                </div>
                                <div class="item">
                                    <label class="listing-search__label">Departure Date</label>
                                   <input type="text" id="to" class="form-control" name="to">
                                </div>
                               
                                
                                <div class="item thm-button">
                                    <label class="listing-search__label listing-search__label--hidden">Book Now</label>
                                    <input type="submit" value="Book Now" class="listing-search__btn">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End main content -->
        </section>
        <!-- End welcome section -->
    <?php } ?>
