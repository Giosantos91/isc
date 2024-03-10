<body>
    <div class="main-wrapper">

        <div class="card-header py-3">

        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th class="" width="22">Fakuldade / Programa</th>
                                                    <td class="" width="8">:</td>
                                                    <td>
                                                        <?= $detail->fakuldade ?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th class="" width="22">Departamento</th>
                                                    <td class="" width="8">:</td>
                                                    <td>
                                                        <?= $detail->departamentu ?>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- <a href="<?= base_url('administrator/aumentafk') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Aumenta Orario</a> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-default"> <i class="fa fa-plus"></i>
                                Aumenta Orario
                            </button>
                            <a href="<?= base_url('administrator/orario') ?>" class="btn btn-primary"><i
                                    class="fas fa-arrow-left"></i> Fila</a>
                            <br><br>
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
                                                    <th>Diciplina</th>
                                                    <th>Semester</th>
                                                    <th>SKS</th>
                                                    <th>Dosente</th>
                                                    <th>Oras</th>
                                                    <th>Sala</th>
                                                    <th>Aksaun</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                foreach ($dis as $d) { ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $d->disiplina ?></td>
                                                    <td><?= $d->id_semester ?></td>
                                                    <td><?= $d->sks ?></td>
                                                    <td><?= $d->naran_dosente ?></td>
                                                    <td><?= $d->oras ?></td>
                                                    <td><?= $d->sala ?></td>
                                                    <td>
                                                        <a href="<?= base_url('administrator/hadiaorario/' . $d->id_orario) ?>"
                                                            class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
                                                        <a href="<?= base_url('administrator/hamosorario/' . $d->id_orario) ?>"
                                                            class="btn btn-danger btn-sm hamos"> <i
                                                                class="fa fa-trash"></i>
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
                                        action="<?= base_url('administrator/hareorario/' . $detail->id_departamentu) ?>"
                                        method="post">
                                        <div class="box-body">
                                            <div class="col-md-12">
                                                <label> Disiplina *</label>
                                                <select name="id_dis" id="id_dis" class="form-control">

                                                    <option value="">Hili Disiplina</option>
                                                    <?php
                                                        foreach ($depdis as $d) { ?>

                                                    <option value="<?= $d->id_dis ?>"><?= $d->disiplina ?>
                                                    </option>

                                                    <?php } ?>
                                                </select>
                                                <?= form_error('id_dis', ' <small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Dosente</label>
                                                    <select name="id_dosente" id="id_dosente" class="form-control">
                                                        <option value="">Hili Dosente</option>
                                                        <?php foreach ($dosente as $dos) { ?>
                                                        <option value="<?= $dos->id_dosente ?>">
                                                            <?= $dos->naran_dosente ?>
                                                        </option>
                                                        <?php } ?>
                                                    </select>
                                                    <?= form_error('id_dosente', ' <small class="text-danger pl-3">', '</small>'); ?>

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Loron</label>
                                                    <select name="loron" class="form-control">
                                                        <option value="">Hili Loron</option>
                                                        <option>Segunda Feira</option>
                                                        <option>Tersa Feira</option>
                                                        <option>Quarta Feira</option>
                                                        <option>Quinta Feira</option>
                                                        <option>Sexta Feira</option>
                                                        <option>Sabado</option>
                                                        <option>Domingo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Oras</label>
                                                    <input type="text" name="oras" class="form-control"
                                                        value="<?= set_value('oras') ?>" placeholder="Oras"
                                                        autocomplete="off">
                                                    <?= form_error('oras', ' <small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Sala Aula</label>
                                                    <input type="text" name="sala" class="form-control"
                                                        value="<?= set_value('sala') ?>" placeholder="Sala de Aula"
                                                        autocomplete="off">
                                                    <?= form_error('sala', ' <small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tinan Akademik</label>
                                                <select name="id_tn_akad" class="form-control">
                                                    <option value="">Hili Tinan Akademiku</option>
                                                    <?php foreach ($ta as $t) { ?>
                                                    <option value="<?= $t->id_tn_akad ?>"><?= $t->tn_akad ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div> -->
                                        </div>
                                        <!-- /.box-body -->
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left"
                                    data-dismiss="modal">Taka</button>
                                <button type="submit" class="btn btn-primary">Rai Dadus</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>