<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Aumenta Tinan Akademiku</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('administrator')?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tinan Akademiku</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('administrator/aumentatinan') ?>" method="post">
                            <div class="row">
                               

                                <div class="col-12 col-sm-6">
                                <div class="form-group">
                                        <label>Departamento</label>
                                        <input type="hidden" name="id_departamentu" value="">
                                        <input type="text" name="tn_akad" value="<?= set_value('tn_akad') ?>"
                                            class="form-control" id="tn_akad" placeholder="Tinan Akademiku" autocomplete="off">
                                        <?= form_error('tn_akad', ' <small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="Aktivu">Aktivu</option>
                                            <option value="La Aktivu">La Aktivu</option>
                                        </select>
                                        <?= form_error('status', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>



                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Rai Dadus</button>
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