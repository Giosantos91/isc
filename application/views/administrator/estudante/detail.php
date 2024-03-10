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
                                            <span class="info-span"> <a href="https://wa.me/<?= $estudante->nu_telf; ?>?text=Halo,saya tertarik untuk membeli mobil Anda" target="_blank"><?= $estudante->nu_telf; ?></a></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Email : </span>
                                            <span class="info-span"> <a href="mailto:<?= $estudante->email; ?>" target="_blank"><?= $estudante->email; ?></a> </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-center mb-1 datatable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NRE</th>
                                        <th>Naran Estudante</th>
                                        <th>F.Data Moris</th>
                                        <th>Sexo</th>
                                        <th>Departamento</th>
                                        <th>Semester</th>
                                        <th>Estatus</th>
                                        <th>Aksaun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        <tr>
                                            <td></td>

                                            <td> </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td></td>
                                            <td></td>
                                          


                                            </td>
                                        </tr>
                                   
                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                           
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>


    