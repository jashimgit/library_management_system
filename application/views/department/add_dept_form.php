 <H2><?php echo $title; ?></h2>
 <hr />

 <div class="panel-body" style="width:600px;">

     <?php

        if (isset($sucess)) { ?>
         <div class="alert alert-success">
             <?php echo $sucess; ?>
         </div>

     <?php } elseif (isset($error)) { ?>
         <div class="alert alert-danger">
             <?php echo $error; ?>
         </div>
     <?php } ?>

     <form action="<?php echo base_url('department/store'); ?>" method="POST">

         <div class="form-group">
             <label>Department Name</label>
             <input type="text" class="form-control span12" name="dep_name">
         </div>

         <div class="form-group">
             <input type="submit" class="btn btn-primary" value="Save Department">
         </div>

     </form>
 </div>