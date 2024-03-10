<body>
    <div class="main-wrapper">

        <div class="card-header py-3">

        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="col">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            <i class="fa fa-plus"></i>
                            Aumenta Departamento
                        </button>
                        <a href="<?= base_url('administrator') ?>" class="btn btn-primary"><i
                                class="fas fa-arrow-left"></i> Fila</a>
                    </div>
                    <br>


                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td width="15">Fakuldade / Programa</td>
                                            <td width="15">:</td>
                                            <td>
                                                <?= $detail->fakuldade ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Departamento</th>
                                            <th>Grau</th>
                                            <th>Aksaun</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                foreach ($disdep as $d) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $d->departamentu ?></td>
                                            <td><?= $d->grau ?></td>

                                            <td><a href="<?= base_url('administrator/hamosdata_fakuldade/' . $d->id_departamentu) ?>"
                                                    class="btn btn-danger btn-sm "> <i class="fa fa-trash"></i> </a>
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

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="box box-primary">

                                <form role="form"
                                    action="<?= base_url('administrator/data_fakuldade/' . $detail->id_fakuldade) ?>"
                                    method="post">
                                    <div class="box-body">
                                        <div class="col-md-12">
                                            <label> Departamentu *</label>
                                            <input type="text" name="departamentu" class="form-control"
                                                value="<?= set_value('departamentu') ?>" placeholder="Departamentu"
                                                autocomplete="off">

                                            <?= form_error('departamentu', ' <small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-12">
                                            <label id="grau"> Grau *</label>
                                            <select id="grau" name="grau" class="form-control"
                                                value="<?= set_value('grau') ?>">
                                                <option value="">Hili Grau</option>
                                                <option value="Bacharelato">Bacharelato (D3)</option>
                                                <option value="Licenciatura">Licenciatura (S1)</option>
                                                <option value="Mestrado">Mestrado (S2)</option>
                                            </select>
                                            <?= form_error('grau', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Taka</button>
                            <button type="submit" class="btn btn-primary">Rai Dadus</button>
                        </div>
                        </form>
                    </div>
                </div>
               
            </div>