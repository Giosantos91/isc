<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Dosente</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url('administrator')?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dosente</li>
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
                                </div>
                            </ul>
                        </div>
                        <div class="col-auto text-right float-right ml-auto">
                            <a href="<?= base_url('administrator/aumentadst') ?>" class="btn btn-primary"><i
                                    class="fas fa-plus"></i></a>
                        </div>
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
                                                <th scope="col">Nu</th>
                                                <th scope="col">NRE</th>
                                                <th scope="col">Naran Dosente</th>
                                                <th scope="col">Fatin no Data Moris</th>
                                                <th scope="col">Sexu</th>
                                                <th scope="col">Hela Fatin</th>
                                                <th scope="col">Naturalidade</th>
                                                <th scope="col">Aksaun</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($dosente as $ds) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>

                                                <td><a href="<?=base_url('administrator/detail_dosente/'.$ds->id_dosente)?>"
                                                        class="btn btn-primary"> <i class="fa fa-eye"></i>
                                                        <?= $ds->nrd; ?></a> </td>
                                                <td><?= $ds->naran_dosente; ?></td>
                                                <td><?= $ds->fatin; ?>,<?= $ds->data_moris; ?></td>
                                                <td><?= $ds->sexo; ?></td>
                                                <td><?= $ds->hela_fatin; ?></td>
                                                <td><?= $ds->naturalidade; ?></td>
                                                <td>
                                                    <a href="<?=base_url('administrator/hadiadosente/'.$ds->id_dosente)?>"
                                                        class="btn btn-circle badge-success"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="<?=base_url('administrator/hamosdosente/'.$ds->id_dosente)?>"
                                                        class="btn btn-circle badge-danger hamos"> <i
                                                            class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>