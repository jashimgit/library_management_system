<h2>Student List</h2>
<?php
$success_msg = $this->session->flashdata('success');
if (isset($success_msg)) { ?>

    <div class="alert alert-success">
        <?php echo $success_msg; ?>
    </div>

<?php } ?>

<hr />
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Student Name</th>
            <th>Department</th>
            <th>Roll</th>
            <th>Reg. No</th>
            <th>Session</th>
            <th style="width: 3.5em;">action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($result as $row) : $i++ ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row->s_name ?></td>
                <td><?php echo $row->dep_name ?></td>
                <td><?php echo $row->s_roll ?></td>
                <td><?php echo $row->s_reg ?></td>
                <td><?php echo $row->s_session ?></td>
                <td>
                    <a href="user.html"><i class="fa fa-pencil"></i></a>
                    <a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>

        <?php endforeach;  ?>
    </tbody>
</table>