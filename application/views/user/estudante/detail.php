<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Details Estudante</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('user/estudante')?>">Estudante</a></li>
                        <li class="breadcrumb-item active">Details Estudante </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-info">
                            <h4>Konaba <span><?= $estudante->naran_estudante; ?></span></h4>
                            <div class="media mt-3">
                                <img src="<?=base_url('assets/')?>img/user.jpg" class="mr-3" alt="...">
                                <div class="media-body">
                                    <ul>
                                        <li>
                                            <span class="title-span">NRE : </span>
                                            <span class="info-span"><?= $estudante->nre; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Naran  : </span>
                                            <span class="info-span"><?= $estudante->naran_estudante; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Fatin Moris : </span>
                                            <span class="info-span"><?= $estudante->fatin; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Data Moris : </span>
                                            <span class="info-span"><?= $estudante->data_moris; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Sexu : </span>
                                            <span class="info-span"><?= $estudante->sexo; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Fakuldade : </span>
                                            <span class="info-span"><?= $estudante->fakuldade; ?></span>
                                        </li>

                                        <li>
                                            <span class="title-span">Departamento : </span>
                                            <span class="info-span"><?= $estudante->departamentu; ?></span>
                                        </li>

                                        <li>
                                            <span class="title-span">Hela Fatin : </span>
                                            <span class="info-span"><?= $estudante->hela_fatin; ?></span>
                                        </li>

                                        <li>
                                            <span class="title-span">Nu Telf : </span>
                                            <span class="info-span"><?= $estudante->nu_telf; ?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Email : </span>
                                            <span class="info-span"><?= $estudante->email; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                         
                        
                           
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>


    