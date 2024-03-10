<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Tinan Akademiku</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url('administrator')?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Tinan Akademiku</li>
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
                                </div>
                            </ul>
                        </div>
                        <div class="col-auto text-right float-right ml-auto">

                            <a href="<?= base_url('administrator/aumentatinan') ?>" class="btn btn-primary"><i
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
                                                <th>No</th>
                                                <th>Tinan</th>
                                                <th>Status</th>
                                                <th>Aksaun</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($tinan as $tnn) {
                                                ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $tnn->tn_akad ?></td>
                                                <td><?= $tnn->status ?></td>
                                                <td>
                                                    <a href="<?= base_url('administrator/hadisemester/' . $tnn->id_tn_akad) ?>"
                                                        class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
                                                    <a href="<?= base_url('administrator/hamoshamos/'. $tnn->id_tn_akad) ?>"
                                                        class="btn btn-danger btn-sm hamos"> <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>