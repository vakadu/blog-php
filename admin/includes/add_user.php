<?php add_user(); ?>

<form class="form-horizontal form-label-left" action="" id="add-user-admin" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input id="firstName" class="form-control col-md-7 col-xs-12"
                   name="first_name" placeholder="e.g Vinod" type="text" required>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input id="lastName" class="form-control col-md-7 col-xs-12"
                   name="last_name" placeholder="e.g Kumar" type="text" required>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="text" id="username" name="username" class="form-control col-md-7
            col-xs-12" placeholder="e.g vakadu" required>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="file" id="image" name="user_image" class="form-control col-md-7
            col-xs-12" required>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <select class="form-control" name="role" required>
                <option value="subscriber">Select Status</option>
                <option value="admin">Admin</option>
                <option value="subscriber">Subscriber</option>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="email" id="email" name="user_email" class="form-control col-md-7
            col-xs-12" placeholder="e.g vakadu10@gmail.com" required>
        </div>
    </div>

    <div class="item form-group">
        <div class="col-md-10 col-sm-12 col-xs-12 marginLeft">
            <input type="password" id="user_password" name="user_password"
                   class="form-control col-md-7 col-xs-12" placeholder="e.g abc123" required>
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-1">
            <button class="btn btn-primary" type="reset">Reset</button>
            <button id="post-submit" name="create_user" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>