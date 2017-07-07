<?php add_user(); ?>

<form class="form-horizontal form-label-left" action="" id="add-user-admin" method="post"
      enctype="multipart/form-data">
    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="first_name">First Name <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="firstName" class="form-control col-md-7 col-xs-12"
                   name="first_name" placeholder="e.g Vinod" type="text" required>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="last_name">Last Name <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input id="lastName" class="form-control col-md-7 col-xs-12"
                   name="last_name" placeholder="e.g Kumar" type="text" required>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="username">Username <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="text" id="username" name="username" class="form-control col-md-7
            col-xs-12" placeholder="e.g vakadu" required>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="user_image">Image <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="file" id="image" name="user_image" class="form-control col-md-7
            col-xs-12" required>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="role">Role <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="role" required>
                <option value="Subscriber">Select Status</option>
                <option value="Admin">Admin</option>
                <option value="Subscriber">Subscriber</option>
            </select>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="user_email">Email <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="email" id="email" name="user_email" class="form-control col-md-7
            col-xs-12" placeholder="e.g vakadu10@gmail.com" required>
        </div>
    </div>

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-12 col-xs-12" for="user_password">Password <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-12 col-xs-12">
            <input type="password" id="user_password" name="user_password"
                   class="form-control col-md-7 col-xs-12" placeholder="e.g abc123" required>
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-2">
            <button class="btn btn-primary" type="reset">Reset</button>
            <button id="post-submit" name="create_user" type="submit" class="btn
            btn-success">Submit</button>
        </div>
    </div>
</form>