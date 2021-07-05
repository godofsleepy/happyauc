<div style="margin-top: 8rem; margin-bottom: 10rem;" class="row">
    <div class="col-sm">

    </div>

    <div class="col-sm text-center mt-5">
        <p class="h3">Login</p>
        <br>
        <form action="<?php echo site_url('login/actionlogin') ?>" method="POST">
            <div class="form-group text-center">
                <di class="d-flex justify-content-center row">
                    <div class="col-md-12">
                        <label for="exampleInsputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </di>

                <br>
                <div class="d-flex justify-content-center row">
                    <div class="col-md-12">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <br>
                <p>Don't have account ? <a href="<?php echo site_url('register/') ?>">Sign up</a></p>
            </div>
            <button type=" submit" class="btn btn-success">Sign In</button>
        </form>
    </div>

    <div class="col-sm">

    </div>
</div>