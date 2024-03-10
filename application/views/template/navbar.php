
<div class="header">
            <div class="header-left">
               <a href="<?=base_url('administrator')?>" class="logo">
               <img src="<?=base_url('assets/')?>img/logo.png" alt="Logo">
               </a>
               <a href="<?=base_url('administrator')?>" class="logo logo-small">
               <img src="<?=base_url('assets/')?>img/logo-small.png" alt="Logo" width="30" height="30">
               </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
            </a>
            <div class="top-nav-search">
               <form>
                  <input type="text" class="form-control" placeholder="Search here">
                  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
               </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
              
               <li class="nav-item dropdown has-arrow">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <span class="user-img"><img class="rounded-circle" src="<?= base_url('assets/') ?>img/profiles/avatar-01.jpg" width="31" alt="<?= $user['naran_kompletu'] ?>"></span>
                  </a>
                  <div class="dropdown-menu">
                     <div class="user-header">
                        <div class="avatar avatar-sm">
                           <img src="<?= base_url('assets/') ?>img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                           <h6><?= $user['naran_kompletu'] ?></h6>
                           <p class="text-muted mb-0">Administrator</p>
                        </div>
                     </div>
                     <a class="dropdown-item" href="profile.html">My Profile</a>
                     <a class="dropdown-item" href="inbox.html">Inbox</a>
                     <a class="dropdown-item" href="<?=base_url('auth/logout')?>">Logout</a>
                  </div>
               </li>
            </ul>
         </div>