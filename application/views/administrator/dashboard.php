<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Bem Vindo Admin</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-one w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="db-info">
                                <h3><?=$estudante?></h3>
                                <h6>Estudante</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-two w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="db-info">
                                <h3><?=$dosente?></h3>
                                <h6>Dosente</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-three w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="db-info">
                                <h3><?=$tfakuldade?></h3>
                                <h6>Fakuldade</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-four w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="db-info">
                                <h3><?=$tdepartamentu?></h3>
                                <h6>Departamento</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Fakuldade / Programa Mestrado</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-center mb-1">
                                <thead>
                                    <tr>
                                        <th>Fakuldade</th>
                                        <th>Total Departamento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($totaldep as $ttd) {
                                           
                                           ?>
                                    <tr>
                                        <td><?=$ttd->fakuldade?></td>
                                        <td>
                                            <a href="<?= base_url('administrator/data_fakuldade/' . $ttd->id_fakuldade) ?>"
                                                class="btn btn-info btn-sm"> <?=$ttd->total?> </a>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header card-primary">
                        <h5 class="card-title">Departamento</h5>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-bordered table-center mb-1">
                                <thead>
                                    <tr>
                                        <th>Departamento</th>
                                        <th>Total Estudante</th>
                                        <th>Hare Lista</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($depestu as $dep) {
                                           
                                        ?>
                                    <tr>
                                        <td><?=$dep->departamentu?></td>
                                        <td><?=$dep->total?></td>
                                        <td>
                                            <a title="Lista Estudante <?=$dep->departamentu?>"
                                                href="<?= base_url('administrator/data_estudante/' . $dep->id_departamentu) ?>"
                                                class="btn btn-info btn-sm"> <i class="fa fa-list"></i> </a>
                                        </td>
                                        <?php } ?>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>