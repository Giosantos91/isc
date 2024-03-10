<body>
    <div class="main-wrapper">
        
        
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Menu</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url('administrator')?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Menu</li>
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
                            </ul>
                        </div>
                        <div class="col-auto text-right float-right ml-auto">
                            <a href="#" class="btn btn-outline-primary ml-2"><i class="fas fa-download"></i>
                                Download</a>
                            <a href="<?= base_url('menu/aumentamn') ?>" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                <tr>
                                    <th>Nu</th>
                                    <th>Menu</th>
                                    <th>Aksaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($menu as $mn) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $mn->menu ?></td>
                                        <td>
                                            <a href="<?= base_url('menu/hadiamn/' . $mn->id_menu) ?>" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
                                            <a href="<?= base_url('menu/hamosmn/' . $mn->id_menu) ?>" class="btn btn-danger btn-sm tombol-hapus"> <i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

