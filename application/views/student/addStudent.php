<H2><?php echo $title; ?></h2>
<hr />

<div class="panel-body" style="width:600px;">


    <form action="student/store" method="POST">


        <div class="form-group">
            <label>Student Name</label>
            <input type="text" class="form-control span12" name="s_name" value="<?php echo set_value('s_name') ?>">
            <?php echo form_error('s_name'); ?>
        </div>

        <div class="form-group">
            <label>Department</label>
            <select name="dep_id" id="dep_name" class="form-control span12">
                <option value=""> Select Department </option>
                <?php foreach ($result as $row) : ?>
                    <option value="<?php echo $row->dep_id; ?>"><?php echo $row->dep_name; ?></option>
                <?php endforeach; ?>
                <?php echo form_error('dep_id'); ?>
            </select>

        </div>

        <div class="form-group">
            <label>Roll No.</label>
            <input type="text" class="form-control span12" name="s_roll" value="<?php echo set_value('s_roll') ?>">
            <?php echo form_error('s_roll'); ?>
        </div>
        <div class="form-group">
            <label>Reg. No.</label>
            <input type="text" class="form-control span12" name="s_reg" value="<?php echo set_value('s_reg') ?>">
            <?php echo form_error('s_reg'); ?>
        </div>
        <div class="form-group">
            <label>Session</label>
            <input type="text" class="form-control span12" name="s_session" value="<?php echo set_value('s_session') ?>">
            <?php echo form_error('s_session'); ?>
        </div>
        <div class="form-group">
            <label>Batch</label>
            <input type="text" class="form-control span12" name="s_batch" value="<?php echo set_value('s_batch') ?>">
            <?php echo form_error('s_batch'); ?>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>

    </form>
</div>