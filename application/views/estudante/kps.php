<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Kartau Planu Estudu</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Kartau Planu Estudu Estudante</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="fa fa-plus"></i>
                    Prinse Disiplina
                </button>
                <a href="<?= base_url('estudante/printkpe/' . $std['id_estudante']) ?>" class="btn btn-warning"
                    target="_blank"> <i class="fa fa-print"></i> Print KPE</a>
                <br><br>
                <div class="col-sm-12">

                    <div class="table-resposive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Disciplina</th>
                                    <th>Disciplina</th>
                                    <th>Semester</th>
                                    <th>SKS</th>
                                    <th>Loron no Oras</th>
                                    <th>Aksaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                    foreach ($viewkps as $key) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $key->kode_disiplina ?></td>
                                    <td><?= $key->disiplina ?></td>
                                    <td><?= $key->id_semester ?></td>
                                    <td><?= $key->sks ?></td>
                                    <td><?= $key->loron ?>,<?= $key->oras ?></td>
                                    <td>
                                        <a href="<?= base_url('estudante/hamoskps/' . $key->id_kps) ?>"
                                            class="btn btn-danger btn-sm "> <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php 
                                } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


        </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="box box-primary">
                        <form role="form" action="" method="post">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th>No</th>
                                                <th>Aksaun</th>
                                                <th>Kode</th>
                                                <th>Disiplina</th>
                                                <th>Semester</th>
                                                <th>SKS</th>
                                            </tr>
                                            <?php
                                    $no = 1;
                                    foreach ($kps as $k) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><a href="<?= base_url('estudante/addkps/' . $k->id_orario) ?>"
                                                        class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
                                                </td>
                                                <td><?= $k->kode_disiplina ?></td>
                                                <td><?= $k->disiplina ?></td>
                                                <td><?= $k->id_semester ?></td>
                                                <td><?= $k->sks ?></td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        