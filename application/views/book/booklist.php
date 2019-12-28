 <h2><?php echo $title; ?></h2>
 <hr />
 <table class="display table table-striped" id="myTable">
     <thead>
         <tr>
             <th>#</th>
             <th>Book Name</th>
             <th>Author Name</th>
             <th>Department name</th>
             <th width="30%">Book details</th>
             <th>Action</th>

         </tr>
     </thead>
     <tbody>
         <?php
            $i = 0;

            foreach ($results as $row) : $i++; ?>
             <tr>
                 <td><?php echo $i; ?></td>
                 <td><?php echo $row->book_name; ?></td>
                 <td><?php echo $row->author_name; ?></td>
                 <td><?php echo $row->dep_name; ?></td>
                 <td><?php echo $row->book_des; ?></td>

                 <td>
                     <a href="user.html" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                     <a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                 </td>
             </tr>
         <?php endforeach; ?>

     </tbody>
 </table>


 <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h3 id="myModalLabel">Delete Confirmation</h3>
             </div>
             <div class="modal-body">
                 <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete This?<br>This cannot be undone.</p>
             </div>
             <div class="modal-footer">
                 <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                 <button class="btn btn-danger" data-dismiss="modal">Delete</button>
             </div>
         </div>
     </div>
 </div>