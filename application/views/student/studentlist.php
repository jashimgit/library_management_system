<h2>Student List</h2>
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
        foreach ($result as $row) : ?>
            <tr>
                <td><?php $i; ?></td>
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

        <?php $i++;   endforeach;  ?>
    </tbody>
</table>