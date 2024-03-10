<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Aumenta Fakuldade</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('administrator/fakuldade')?>">Fakuldade</a></li>
                        <li class="breadcrumb-item active">Aumenta Fakuldade</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('administrator/aumentasemester') ?>" method="post">
                            <div class="row">

                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="text" name="semester" placeholder="semester" autocomplete="off" autofocus
                                            class="form-control">
                                            <?= form_error('semester', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Rai Dadus</button>
                                    <a href="<?=base_url('administrator/semester')?>" class="btn btn-warning"> <i class="fa fa-undo"></i> Fila </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

