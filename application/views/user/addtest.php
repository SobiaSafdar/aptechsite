<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php //echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                  <?php   
                  $attributes = array(
                    'class' => 'email',
                    'id' => 'myform',
                    'role'=>'form');

                 echo form_open_multipart('', $attributes);

                  ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">username</label>
                
                <?php 
                  $attributes_ = array(
                    'class' => 'form-control',
                    'id' => 'exampleInputUsername',
                    'placeholder'=>'Enter Username',
                   
                  );

                echo form_input("username",set_value('username'),$attributes_);
                echo form_error("username","","");
                ?>            
                
                </div>
               
                <div class="form-group">
                  <label for="exampleInputPassword1">CNIC</label>
                  <?php 
                  $attributes_email = array(
                    'class' => 'form-control',
                   
                    'placeholder'=>'Enter cnic',
                   
                  );

                echo form_input("cnic",set_value('cnic'),$attributes_email);
                echo form_error("cnic","","");
                ?>
                </div>

               
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="userfile" id="exampleInputFile">
                  </div>
<!-- 
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            
            <?php echo form_close();?>
          </div>
          <!-- /.box -->

       

        </div>
        <!--/.col (left) -->
</div>
</div>