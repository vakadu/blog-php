<?php include "login_header.php"; ?>

<div class="container">
    <div class="row" id="login-section">
        <div class="col-md-6 col-md-offset-4">

            <?php login_user();?>

            <section class="login-content">
                <h1>Login</h1>
                <form class="clearfix" role="form" method="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="input animated slideInLeft">
                                <input class="input_fields" placeholder="Username" type="text"
                                       name="username">
                                <label class="input_label">
                                    <i class="fa fa-fw fa-user icon"></i>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input animated slideInRight">
                                <input class="input_fields" placeholder="Password" type="password" name="password">
                                <label class="input_label">
                                    <i class="fa fa-fw fa-lock icon"></i>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="button-bg">
                                <button class="button button-custom animated
                                slideInUp" type="submit" name="login_submit">login</button>
                            </div>
                        </div>

                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<?php include "login_footer.php"; ?>