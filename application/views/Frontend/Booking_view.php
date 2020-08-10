 
 
 <script>
  $( function() {
    var dateFormat = "mm/dd/yy",
    array = [],
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2,
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
        numberOfMonths: 2,
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
 <!-- Start breadcumb section -->
        <section class="page-breadcrumb">
            <div class="page-section">
                <div class="breadcumb-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb text-center">
                                <div class="section-titleBar white-headline text-center">
                                    <h3>Booking us</h3>
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
<style>
.ui-datepicker-month{
	color:black;
}
</style>
      

        <section class="contact-us bg-color sec-padding">
            <div class="container">

                <div class="rox">
                    <div class="col-md-7">


                        <div class="form">
                            <div class="row">
                                <p class="success" id="success"></p>
                                <p class="error" id="error"></p>
                                <form  id="contact_form" method="post" action="<?php echo base_url('Frontend/Booking_cnt/booking_form'); ?>"  >
                                    <div class="col-md-6 form-group"><input type="text" data-delay="300" placeholder="Your full name" name="name" id="contact_name" class=" form-control input"></div>
                                    <div class="col-md-6 form-group"><input type="text" data-delay="300" placeholder="E-mail Address" name="email" id="contact_email" class="form-control input"></div>
                                    <div class="col-md-6 form-group"><label for="from">From</label><input type="text" id="from" class="form-control" name="from"></div>
									<div class="col-md-6 form-group"><label for="to">to</label><input type="text" id="to" class="form-control" name="to"></div>
									<div class="col-md-12 form-group"><input type="text" data-delay="300" placreholder="Phone" Placeholder="Enter your Phone no" name="phone" id="contact_subject" class="form-control input"></div>
									<div class="col-md-12 form-group"><select class="form-control" style="height:48px;" name="room">
																	<?php foreach($Rooms as $row)
																	{
									                                      echo "<option value='".$row->id."'>".$row->title."</option>";
																	}
																	?>
																		</select>
																		</div>
                                 	 <div class="col-md-3 form-group"><input name=" " type="submit" value="Book Now" onClick="validateContact();"></div>
                                </form>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-5">

                        
                       
						   <div class="main-title">
                            <img src="<?php echo base_url('asserts/img/gallery/g17.jpeg'); ?>" class="mb-15-xs" alt="map" style="margin-top: 30px;">
						  </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Start welcome section -->
