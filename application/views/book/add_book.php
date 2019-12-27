<H2>Add Book</h2>
<hr />

<div class="panel-body" style="width:600px;">
    <form action="book/store" method="POST">

        <?php

        if (!empty($this->session->flashdata('success'))) {
            echo $success;
        }
        ?>

        <div class="form-group">
            <label>Book Name</label>
            <input type="text" class="form-control span12" name="book_name">
        </div>
        <div class="form-group">
            <label>Department</label>
            <select id="dept_id" class="form-control" name="dept_id">
                <option value="">Select Department</option>
                <?php foreach ($department as $dept) : ?>
                    <option value="<?php echo $dept->dep_id; ?>"><?php echo $dept->dep_name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Author</label>
            <select id="author_id" class="form-control" name="author_id">
                <option value="">Select Author</option>
                <?php foreach ($author as $row) : ?>
                    <option value="<?php echo $row->author_id; ?>"><?php echo $row->author_name; ?></option>
                <?php endforeach; ?>
            </select>

        </div>
        <div class="form-group">
            <label>Book Description</label>
            <textarea type="text" class="form-control span12" name="book_des" cols="15" rows="6"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>

    </form>
</div>