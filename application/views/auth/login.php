
      <div class="main-wrapper login-body">
         <div class="login-wrapper">
            <div class="container">
               <div class="loginbox">
                  <div class="login-left">
                     <img class="img-fluid" src="<?=base_url('assets/');?>img/logo-white.png" alt="Logo">
                  </div>
                  <div class="login-right">
                     <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Asessu ba dashboard</p>
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('auth') ?>" method="post">
                           <div class="form-group">
                              <input class="form-control" type="text" name="email" id="email" placeholder="Email" autocomplete="off" autofocus>
                              <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                              <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                           </div>
                           <div class="form-group">
                              <button class="btn btn-primary btn-block" type="submit">Login</button>
                           </div>
                        </form>
                        
                        <div class="text-center forgotpass"><a href="<?= base_url('auth/haluha_password')?>">haluha password?</a></div>
                        <div class="login-or">
                           <span class="or-line"></span>
                           <span class="span-or">ou</span>
                        </div>
           
                        <div class="text-center dont-have">Seidauk iha akun? <a href="<?= base_url('auth/registu')?>">Registu</a></div>
                       
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     