<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Aumenta Disiplina</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('administrator/disiplina')?>">Disiplina</a></li>
                        <li class="breadcrumb-item active">Aumenta Disiplina</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('administrator/aumentadis') ?>" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Aumenta Disiplina</span></h5>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Fakuldade</label>
                                        <select name="id_fakuldade" id="id_fakuldade" class="form-control">
                                            <option value="">Hili Fakuldade</option>
                                            <?php foreach ($fakuldade as $fak) { ?>
                                            <option value="<?= $fak->id_fakuldade ?>"><?= $fak->fakuldade ?>
                                            </option>

                                            <?php } ?>
                                        </select>
                                        <?= form_error('id_fakuldade', ' <small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Departamento</label>
                                        <select name="id_departamentu" id="id_departamentu"
                                            class="id_departamentu form-control">
                                            <option value="">Hili Departamento</option>

                                        </select>
                                        <?= form_error('id_departamentu', ' <small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Kode Disciplina</label>
                                        <input type="text" name="kode_disiplina" class="form-control"
                                            value="<?= set_value('kode_disiplina') ?>" placeholder="Kode Disiplina"
                                            autocomplete="off" onkeyup="this.value=this.value.toUpperCase()">
                                        <?= form_error('kode_disiplina', ' <small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Disiplina</label>
                                        <input type="text" name="disiplina" class="form-control"
                                            value="<?= set_value('disiplina') ?>" placeholder="Disiplina"
                                            autocomplete="off">
                                        <?= form_error('disiplina', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>SKS</label>
                                        <select name="sks" class="form-control">
                                            <option value="">Hili SKS</option>
                                           
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                        </select>
                                        <?= form_error('sks', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                    <label>Semester</label>
                            <select name="id_semester" class="form-control">
                                <option value="">Hili Semester</option>
                                
                                <?php foreach ($semester as $sm) { ?>
                                <option value="<?= $sm->id_semester ?>"><?= $sm->semester ?>
                                </option>

                                <?php } ?>

                            </select>
                            <?= form_error('id_semester', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Rai Dadus</button>
                                <a href="<?=base_url('administrator/disiplina')?>" class="btn btn-warning"> <i
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