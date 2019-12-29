<H2><?php echo $title; ?></h2>
<hr />

<div class="panel-body" style="width:600px;">
    <form action="student/store" method="POST">
        <div class="form-group">
            <label>Student Name</label>
            <input type="text" class="form-control span12" name="s_name">
        </div>
        <div class="form-group">
            <label>Department</label>
            <select name="dep_name" id="dep_name" class="form-control span12">
                <?php foreach ($result as $row) : ?>
                    <option value="<?php $row->dep_id; ?>"><?php echo $row->dep_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Roll No.</label>
            <input type="text" class="form-control span12" name="s_roll">
        </div>
        <div class="form-group">
            <label>Reg. No.</label>
            <input type="text" class="form-control span12" name="s_reg">
        </div>
        <div class="form-group">
            <label>Session</label>
            <input type="text" class="form-control span12" name="s_session">
        </div>
        <div class="form-group">
            <label>Batch</label>
            <input type="password" class="form-control span12" name="s_batch">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>

    </form>
</div>