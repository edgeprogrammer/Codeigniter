

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



 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Room</h3>
              </div>
              <!-- /.card-header -->


              <?php  
                    foreach ($Rooms as $row) { 
                      ?>
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>Backend/editRoom/form_submit/<?php echo $row->id; ?>" method="Post" enctype='multipart/form-data' >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Title *</label>
                                <input type="text" class="form-control" id="title" value="<?php echo $row->title; ?>" placeholder="Perfect House for Sale"  name="title">
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Price *</label>
                                <input type="text" class="form-control" value="<?php echo $row->price; ?>" name="Price" >
                                
                            </div><!-- .form-group -->
                        </div><!-- .col -->

                    <div class="col-md-4">
                            <div class="form-group">
                                <label >View *</label>
                                <input type="text" value="<?php echo $row->view; ?>" class="form-control" name="View" >
                                
                            </div><!-- .form-group -->
                        </div><!-- .col -->

                            <div class="col-md-12">
                                <div class="input-group">
                                  <div class="custom-file">
                                   
                                    <input type="file" class="form-control custom-file-input" name="upload_Files[]" multiple/>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                  </div>
                                </div><!-- .form-group -->
                            </div><!-- .col -->
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="property-address" class="submit-property__label">Address</label>
                                    <input type="text" class="form-control" id="property-address" value="<?php echo $row->address; ?>" name="Address">
                                </div>
                            </div>
                           

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="property-bedrooms" class="submit-property__label">Beds *</label>
                                        <select id="property-bedrooms" class="form-control" name="Beds">
                                            <option value="1" <?php if($row->beds == '1'){echo "selected"; } ?> >1</option>
                                            <option value="2" <?php if($row->beds == '2'){echo "selected"; } ?>>2</option>
                                            <option value="3" <?php if($row->beds == '3'){echo "selected"; } ?>>3</option>
                                            <option value="4" <?php if($row->beds == '4'){echo "selected"; } ?>>4</option>
                                            <option value="5" <?php if($row->beds == '5'){echo "selected"; } ?>>5</option>
                                        </select>
                                    </div><!-- .form-group -->
                                </div><!-- .col -->

                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="property-room" class="submit-property__label">Bathroom *</label>
                                        <select class="form-control"  name="Bathroom" >
                                            <option value="1" <?php if($row->bathroom == '1'){echo "selected"; } ?>>1</option>
                                            <option value="2" <?php if($row->bathroom == '2'){echo "selected"; } ?>>2</option>
                                            <option value="3" <?php if($row->bathroom == '3'){echo "selected"; } ?>>3</option>
                                            <option value="4" <?php if($row->bathroom == '4'){echo "selected"; } ?>>4</option>
                                            <option value="5" <?php if($row->bathroom == '5'){echo "selected"; } ?>>5</option>
                                            <option value="more" <?php if($row->bathroom == 'more'){echo "selected"; } ?>>More than 5</option>
                                        </select>
                                    </div><!-- .form-group -->
                                </div><!-- .col -->
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="property-room" class="submit-property__label">OCCUPANCY *</label>
                                        <select class="form-control"  name="occupancy" >
                                            <option value="1" <?php if($row->occupancy == '1'){echo "selected"; } ?> >1</option>
                                            <option value="2" <?php if($row->occupancy == '2'){echo "selected"; } ?> >2</option>
                                            <option value="3" <?php if($row->occupancy == '3'){echo "selected"; } ?> >3</option>
                                            <option value="4" <?php if($row->occupancy == '4'){echo "selected"; } ?> >4</option>
                                            <option value="5" <?php if($row->occupancy == '5'){echo "selected"; } ?> >5</option>
                                            <option value="more" <?php if($row->occupancy == 'more'){echo "selected"; } ?> >More than 5</option>
                                        </select>
                                    </div><!-- .form-group -->
                                </div><!-- .col -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="property-room" class="submit-property__label">children *</label>
                                        <select class="form-control"  name="children" >
                                            <option value="1"  <?php if($row->children == '1'){echo "selected"; } ?> >1</option>
                                            <option value="2"  <?php if($row->children == '2'){echo "selected"; } ?> >2</option>
                                            <option value="3"  <?php if($row->children == '3'){echo "selected"; } ?> >3</option>
                                            <option value="4"  <?php if($row->children == '4'){echo "selected"; } ?> >4</option>
                                            <option value="5"  <?php if($row->children == '5'){echo "selected"; } ?> >5</option>
                                            <option value="more"  <?php if($row->children == 'more'){echo "selected"; } ?> >More than 5</option>
                                        </select>
                                    </div><!-- .form-group -->
                                </div><!-- .col -->

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="property-room" class="submit-property__label">Adult *</label>
                                        <select class="form-control"  name="Adult" >
                                            <option value="1" <?php if($row->adult == '1'){echo "selected"; } ?>>1</option>
                                            <option value="2"  <?php if($row->adult == '2'){echo "selected"; } ?>>2</option>
                                            <option value="3"  <?php if($row->adult == '3'){echo "selected"; } ?>>3</option>
                                            <option value="4"  <?php if($row->adult == '4'){echo "selected"; } ?>>4</option>
                                            <option value="5"  <?php if($row->adult == '5'){echo "selected"; } ?>>5</option>
                                            <option value="more"  <?php if($row->adult == 'more'){echo "selected"; } ?>>More than 5</option>
                                        </select>
                                    </div><!-- .form-group -->
                                </div><!-- .col -->
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                   
                                    <div class="form-check">
                                        <input type="checkbox" name="lawn"  class="form-check-input" <?php if($row->lawn == 'Lawn'){echo "checked"; } ?> value="Lawn">
                                        <label class="form-check-label" >Lawn</label>
                                    </div>
                                     <div class="form-check">
                                            <input type="checkbox" name="Microwave" id="microwave" class="form-check-input" value="Microwave" <?php if($row->microwave == 'Microwave'){echo "checked"; } ?> >
                                            <label class="form-check-label"   >Microwave</label>
                                        </div>

                                    
                                </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                        <div class="form-check">
                                            <input type="checkbox" name="Gym" id="gym" class="form-check-input" value="Basic Fitness Gym" <?php if($row->gym == 'Basic Fitness Gym'){echo "checked"; } ?> >
                                            <label class="form-check-label">Gym</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="Barbecue" id="barbecue" class="form-check-input" value="Barbecue" <?php if($row->barbecue == 'Barbecue'){echo "checked"; } ?> >
                                            <label class="form-check-label"  >Barbecue</label>
                                        </div>
                                    
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" name="RoomService" id="tv-cable" class="form-check-input" value="Room Service" <?php if($row->roomService == 'Room Service'){echo "checked"; } ?>>
                                            <label class="form-check-label">ROOM SERVICE</label>
                                        </div>
        
                                        <div class="form-check">
                                            <input type="checkbox" name="TVCable" id="tv-cable" class="form-check-input" value="TV Cable" <?php if($row->tvCable == 'TV Cable'){echo "checked"; } ?>>
                                            <label class="form-check-label">TV Cable</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Textarea</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter Property Description ..." name="Description"><?php echo $row->description ?></textarea>
                                    </div>
                                </div>
                        </div>
             

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php } ?>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>




