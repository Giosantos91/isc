<body>
    <div class="main-wrapper">

        <div class="card-header py-3">

        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                   
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                            <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Fakuldade / Programa</th>
                                                    <td>:</td>
                                                    <td>
                                                        <?= $detail->fakuldade ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Departamento</th>
                                                    <td>:</td>
                                                    <td>
                                                        <?= $detail->departamentu ?>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Disciplina</th>
                                                <th>Disciplina</th>

                                                <th>SKS</th>
                                                <th>Dosente</th>
                                                <th>Semester</th>
                                                <th>Aksaun</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                foreach ($dis as $d) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $d->kode_disiplina ?></td>
                                                <td><?= $d->disiplina ?></td>

                                                <td><?= $d->sks ?></td>
                                                <td><?= $d->naran_dosente ?></td>
                                                <td><?=$d->id_semester?></td>

                                                <td>
                                                    <a title="Prinxe Valor"
                                                        href="<?= base_url('administrator/prinxevalor/' . $d->id_dis) ?>"
                                                        class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>

                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <br>
                                    </table>
                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           