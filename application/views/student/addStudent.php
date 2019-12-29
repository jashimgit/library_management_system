<H2><?php echo $title; ?></h2>
<hr />

<div class="panel-body" style="width:600px;">

    <?php
    if (isset($success_message)) { ?>
        <div class="alert aleart-success">
            <?php echo $success_message; ?>
        </div>
    <?php
    }

    echo validation_errors();
    ?>
    <form action="store" method="POST">


        <div class="form-group">
            <label>Student Name</label>
            <input type="text" class="form-control span12" name="s_name" value="<?php echo set_value('s_name') ?>">
        </div>

        <div class="form-group">
            <label>Department</label>
            <select name="dep_id" id="dep_name" class="form-control span12">

                <option value=""> Select Department </option>
                <?php foreach ($result as $row) : ?>
                    <option value="<?php echo $row->dep_id; ?>"><?php echo $row->dep_name; ?></option>
                <?php endforeach; ?>

            </select>

        </div>

        <div class="form-group">
            <label>Roll No.</label>
            <input type="text" class="form-control span12" name="s_roll" value="<?php echo set_value('s_name') ?>">
        </div>
        <div class="form-group">
            <label>Reg. No.</label>
            <input type="text" class="form-control span12" name="s_reg" value="<?php echo set_value('s_reg') ?>">
        </div>
        <div class="form-group">
            <label>Session</label>
            <input type="text" class="form-control span12" name="s_session" value="<?php echo set_value('s_session') ?>">
        </div>
        <div class="form-group">
            <label>Batch</label>
            <input type="text" class="form-control span12" name="s_batch" value="<?php echo set_value('s_batch') ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>

    </form>
</div>