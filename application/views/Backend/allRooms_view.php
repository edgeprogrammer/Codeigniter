
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
                <h3 class="card-title">All Properties</h3>

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
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Propery Price</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <?php  
                    foreach ($Rooms as $row) { 
                      ?>

                    <tr>
                      <td><?php echo $row->id; ?></td>
                      <td><img src="<?php 
              echo  base_url('asserts/Rooms/'); 
               foreach($images as $img)
               {
                if($img->id == $row->main_image_id)
                {
                  echo $img->image;
                }
               }
               ?>" style="max-height: 100px;max-width: 100px;"></td>
                      <td><?php echo $row->title; ?></td>
                      <td><?php echo $row->price; ?></td>
                     
                      <td><a href="<?php echo base_url('Backend/editRoom/edit/'); echo $row->id;  ?>"> <button  class="btn btn-primary " >Edit</button></a></td>
                      <td><a href="<?php echo base_url('Backend/allRooms/delete_room/'); echo $row->id;  ?>"><button href="#" class="btn btn-danger"  >Delete</button></a></td>
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