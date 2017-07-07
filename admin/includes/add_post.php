<?php add_post(); ?>

<form class="form-horizontal form-label-left" action="" id="add-post-admin" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="title">Title <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="title" class="form-control col-md-7 col-xs-12"
                   name="title" placeholder="e.g Some title" type="text" required>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="category">Category <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="category" required>
                <option value="">Choose Category</option>

                <?php add_post_category(); ?>

            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="author">Author <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="author" name="author" class="form-control col-md-7
            col-xs-12" placeholder="Author Name" required>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="status">Status
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="status">
                <option value="draft">Select Status</option>
                <option value="publish">Publish</option>
                <option value="draft">Draft</option>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="image">Image
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="file" id="image" name="image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="tags">Tags <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="tags" name="tags" class="form-control col-md-7
            col-xs-12" placeholder="Tags" required>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <textarea name="content" id="content" cols="30" rows="6" class="form-control col-md-7 col-xs-12" placeholder="Content" required></textarea>
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-2">
            <button class="btn btn-primary" type="reset">Reset</button>
            <button id="post-submit" name="create_post" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>