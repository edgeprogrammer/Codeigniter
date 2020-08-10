

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
                <h3 class="card-title">Edit Blog</h3>
              </div>
              <!-- /.card-header -->

              <?php  
                    foreach ($blog as $row) { 
                      ?>
              <!-- form start -->
              <form role="form" action="<?php echo base_url('Backend/editblog/form_submit/'); echo $row->id; ?>" method="Post" enctype='multipart/form-data' >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Title *</label>
                                <input type="text" class="form-control" id="title" placeholder="Perfect House for Sale" value="<?php echo $row->title; ?>"  name="title">
                            </div>
                        </div>
                         
                            <div class="col-md-10">
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="form-control custom-file-input" name="upload_File"/>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                  </div>
                                </div><!-- .form-group -->
                            </div><!-- .col -->
                             <div class="col-md-2">
                                <img src="<?php echo base_url('/asserts/Blogs/'); echo $row->image ?>" style="max-width: 100px;max-height: 100px;">
                            </div><!-- .col -->
                           
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Textarea</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter Property Description ..." name="Description"><?php echo $row->description; ?></textarea>
                                    </div>
                                </div>
                  
                </div>
             

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            <?php } ?>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>




