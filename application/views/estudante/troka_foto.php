<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Troka Foto</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('estudante')?>">Dashboard Estudante</a></li>
                        <li class="breadcrumb-item active"><a href="<?=base_url('estudante/troka_foto')?>">Troka
                                Foto</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <?= form_open_multipart('estudante/troka_foto'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">NRE Estudante</label>
                                    <input type="text" class="form-control" id="nre" name="nre"
                                        value="<?= $estudante['nre']; ?>" readonly>
                                    <?= form_error('nre', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Naran Estudante</label>
                                <p>
                                    <input type="text" class="form-control" id="naran_estudante" name="naran_estudante"
                                        value="<?= $estudante['naran_estudante']; ?>" readonly>
                                    <?= form_error('naran_estudante', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>

                            <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="<?= $estudante['email']; ?>" readonly>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="custom-file-input" id="photo" name="photo">
                                    <img src="<?= base_url('assets/img/estudante/') . $estudante['photo']; ?>"
                                        class="img-thumbnail" width="100">
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="<?=base_url('administrator/fakuldade')?>" class="btn btn-warning"> <i
                                        class="fa fa-undo"></i> Fila </a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>