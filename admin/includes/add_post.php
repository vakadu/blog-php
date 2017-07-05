<?php add_post(); ?>

<form class="form-horizontal form-label-left" action="" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input id="title" class="form-control col-md-7 col-xs-12"
                   name="title" placeholder="e.g Some title" type="text">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <select class="form-control" name="category">
                <option value="">Choose Category</option>

                <?php add_post_category(); ?>

            </select>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="text" id="author" name="author" class="form-control col-md-7
            col-xs-12" placeholder="Author Name">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <select class="form-control" name="status">
                <option value="draft">Select Status</option>
                <option value="publish">Publish</option>
                <option value="draft">Draft</option>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="file" id="image" name="image" class="form-control col-md-7
            col-xs-12">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="text" id="tags" name="tags" class="form-control col-md-7
            col-xs-12" placeholder="Tags">
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <textarea name="content" id="content" cols="30" rows="6" class="form-control col-md-7 col-xs-12" placeholder="Content"></textarea>
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-1">
            <button class="btn btn-primary" type="reset">Reset</button>
            <button id="post-submit" name="create_post" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>