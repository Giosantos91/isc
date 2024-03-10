<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="<?=base_url('assets/')?>img/logo-white.png" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Registu akun Foun</h1>
                        <p class="account-subtitle">Asessu ba dashboard</p>

                        <form action="<?= base_url('auth/registu') ?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="naran_kompletu" id="naran_kompleto" autofocus
                                    class="form-control" autocomplete="off" placeholder="Naran Kompletu">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" value="<?= set_value('email') ?>"
                                    class="form-control" autocomplete="off" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password1" name="password1"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password2" name="password2"
                                    placeholder="Repete Password">
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                        </form>

                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">ou</span>
                        </div>


                        <div class="text-center dont-have">Iha ona Akun ? <a href="<?= base_url('') ?>">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>