<body>
    <div class="main-wrapper">


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Sub Menu</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url('administrator')?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">SubMenu</li>
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">
                                </div>
                            </ul>
                        </div>
                        <div class="col-auto text-right float-right ml-auto">
                          
                            <a href="<?= base_url('menu/aumentasub') ?>" class="btn btn-primary"><i
                                    class="fas fa-plus"></i></a>
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
                                                <th>Titlu</th>
                                                <th>Menu</th>
                                                <th>URL</th>
                                                <th>Icon</th>
                                                <th>Aktivu</th>
                                                <th>Aksaun</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                $no = 1;
                                foreach ($submenu as $smn) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $smn->titlu ?></td>
                                                <td><?= $smn->menu ?></td>
                                                <td><?= $smn->url ?></td>
                                                <td><i class="fa <?= $smn->icon ?>"></i></td>
                                                <td>
                                                    <?php if ($smn->aktif == "1") {
                                                echo ' <i class="fa fa-check text-success">Aktivu</i> ';
                                            } else {
                                                echo '<i class="fa fa-times text-danger">La Aktivu</i>';
                                            }
                                            ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('menu/hadiasub/' . $smn->id_sub_menu) ?>"
                                                        class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
                                                    <a href="<?= base_url('menu/hamossub/' . $smn->id_sub_menu) ?>"
                                                        class="btn btn-danger btn-sm tombol-hapus"> <i
                                                            class="fa fa-trash"></i> </a>
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