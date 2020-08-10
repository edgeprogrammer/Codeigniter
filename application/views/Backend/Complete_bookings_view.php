
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">               
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Places</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                     
                  </thead>
                  <tbody>
                   
                    <?php  
                    foreach ($bookings as $row) { 
                      ?>

                    <tr>
					<td>
					
					<div class="row" style="padding:10px;">
						<div class="col-md-4">
						 <p><strong>Booking_id:</strong> <?php echo $row->id; ?> </p>
						</div>
						<div class="col-md-4">
						 <p><strong>Name:</strong> <?php echo $row->name; ?> </p>
						</div>
						<div class="col-md-4">
						 <p><strong>Email:</strong> <?php echo $row->email; ?> </p>
						</div>
							<div class="col-md-4">
						 <p><strong>Phone no:</strong> <?php echo $row->phone; ?> </p>
						</div>
						<div class="col-md-4">
						 <p><strong>Arival Date:</strong> <?php echo $row->arrival_date; ?> </p>
						</div>
						<div class="col-md-4">
						 <p><strong>Room Name:</strong> <?php echo $row->departure_date; ?> </p>
						</div>
						
                      </div>
                    <td>

                    </tr>
                  <?php } ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>

   