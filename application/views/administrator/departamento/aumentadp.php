<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Aumenta Departamentu</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('administrator/departamento')?>">Departamentu</a></li>
                        <li class="breadcrumb-item active">Aumenta Departamentu</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('administrator/aumentadp') ?>" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Fakuldade</label>
                                        <select name="id_fakuldade" class="form-control">
                                            <option>Hili Fakuldade</option>
                                            <?php foreach ($fakuldade as $fak) { ?>

                                            <option value="<?= $fak->id_fakuldade ?>"><?= $fak->fakuldade ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Departamento</label>
                                        <input type="hidden" name="id_departamentu" value="">
                                        <input type="text" name="departamentu" value="<?= set_value('departamentu') ?>"
                                            class="form-control" id="departamentu" placeholder="Departamento" autocomplete="off">
                                        <?= form_error('departamentu', ' <small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                </div>

                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Nivel Estudu</label>
                                        <select name="grau" class="form-control">
                                            <option value="">Hili Grau</option>
                                            <option value="Bacharelato">Bacharelato (D3)</option>
                                            <option value="Licenciatura">Licenciatura (S1)</option>
                                            <option value="Mestrado">Mestrado (S2)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Rai Dadus</button>
                                <a href="<?=base_url('administrator/departamento')?>" class="btn btn-warning"> <i
                                            class="fas fa-arrow-left"></i> Fila</a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>