<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile Estudante</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('estudante')?>">Estudante</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">
                            <a href="#">
                                <img class="rounded-circle" alt="<?=$estudante['naran_estudante']?>"
                                    src="<?=base_url('assets/img/estudante/'). $estudante['photo'];?>">
                            </a>
                        </div>
                        <div class="col ml-md-n2 profile-user-info">
                            <h4 class="user-name mb-0"><?=$estudante['naran_estudante']?></h4>
                            <h6 class="text-muted"><?=$estudante['sexo']?></h6>
                            <div class="user-Location"><i class="fas fa-map-marker-alt"></i>
                                <?=$estudante['hela_fatin']?></div>

                        </div>
                        <div class="col-auto profile-btn">
                            <a href="<?=base_url('estudante/troka_foto')?>" class="btn btn-primary">
                                <i class="far fa-edit mr-1"></i> Hadia
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#per_details_tab">Konaba Hau</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">
                    <div class="tab-pane fade show active" id="per_details_tab">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Detail Estudante</span>
                                            <a class="edit-link" href="<?=base_url('estudante/hadia_dadus')?>"><i
                                                    class="far fa-edit mr-1"></i>Hadia</a>
                                        </h5>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">NRE Estudante
                                            </p>
                                            <p class="col-sm-9"><?=$estudante['nre']?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Naran Estudante
                                            </p>
                                            <p class="col-sm-9"><?=$estudante['naran_estudante']?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Data Moris</p>
                                            <p class="col-sm-9"><?=$estudante['data_moris']?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                            <p class="col-sm-9"><a href="mailto:<?=$estudante['email']?>"
                                                    targe="_blank"><?=$estudante['email']?></a></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Numeru telefone
                                            </p>
                                            <p class="col-sm-9"><?=$estudante['nu_telf']?></p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-muted text-sm-right mb-0">Hela Fatin Aktual</p>
                                            <p class="col-sm-9 mb-0"><?=$estudante['hela_fatin']?><br>

                                            </p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Status Akun</span>
                                        </h5>
                                        <?php if ($estudante['status'] > "Aktivu") {
                                                    echo ' <button class="btn btn-success" type="button">' .$estudante['status'] . '</button>';
                                                } elseif ($estudante['status'] < "La Aktivo") {
                                                    echo '<button class="btn btn-warning" type="button">' .$estudante['status'] . '</button>';
                                                }
                                                ?>


                                      
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="password_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Password</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form>
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>