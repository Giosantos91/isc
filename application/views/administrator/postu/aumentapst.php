<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Aumenta Postu</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('administrator/Postu')?>">Postu</a></li>
                        <li class="breadcrumb-item active">Aumenta Postu</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('administrator/aumentapst') ?>" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Postu</span></h5>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Munisipiu</label>
                                        <select name="id_munisipiu" class="form-control">
                                            <option>Hili Munisipiu</option>
                                            <?php foreach ($munisipiu as $msp) { ?>

                                            <option value="<?= $msp->id_munisipiu ?>"><?= $msp->munisipiu ?></option>
                                            <?php } ?>
                                            <?= form_error('id_munisipiu', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Postu</label>
                                        <input type="hidden" name="id_postu" value="">
                                        <input type="text" name="postu" value="<?= set_value('postu') ?>"
                                            class="form-control" id="postu" placeholder="Postu" autocomplete="off">
                                        <?= form_error('postu', ' <small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                </div>

                                
                            </div>



                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Rai Dadus</button>
                                <a href="<?= base_url('administrator/postu') ?>" class="btn btn-primary"><i
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