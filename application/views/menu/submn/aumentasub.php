<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Add Students</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                        <li class="breadcrumb-item active">Add Students</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('menu/aumentasub') ?>" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="id_menu" id="id_menu" class="form-control">
                                            <option value="">Hili Menu</option>
                                            <?php foreach ($menu as $mn) { ?>
                                            <option value="<?= $mn->id_menu ?>"><?= $mn->menu ?></option>
                                            <?php } ?>
                                        </select>

                                        <?= form_error('id_menu', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Titlu</label>
                                        <div>
                                            <input type="text" class="form-control" name="titlu" id="titlu"
                                                placeholder="Titlu" value="<?= set_value('titlu') ?>">
                                            <?= form_error('titlu', ' <small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>URL</label>
                                        <input type="text" class="form-control" name="url" id="url" placeholder="URL"
                                            value="<?= set_value('url') ?>">
                                        <?= form_error('url', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <select name="icon" id="icon" class="form-control">
                                            <option value="">Hili Menu</option>
                                            <option value='fa fa-tachometer-alt'> Dashboard</option>
                                    <option value='fa fa-th'>  th </option>
                                    <option value='fa fa-table'>  table </option>
                                    <option value='fa fa-envelope'> Envelope </option>
                                    <option value='fa fa-clone'>Clone </option>
                                    <option value='fa fa-bar-chart'>Chart </option>
                                    <option value='fa fa-bars'>Bars </option>
                                    <option value='fa fa-briefcase'>Briefcase </option>
                                    <option value='fa fa-building'> Building </option>
                                    <option value='fa fa-user'>Profile </option>
                                    <option value='fa fa-book'> Book </option>
                                    <option value='fa fa-database'>Database </option>
                                    <option value='fa fa-server'>Server </option>
                                    <option value='fa fa-address-card'>Card</option>
                                    <option value='fa fa-check'>Check</option>
                                    <option value='fa fa-times'>Times</option>
                                    <option value='fa fa-map-pin'>Point</option>

                                        </select>
                                        <?= form_error('icon', ' <small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="minimal" value="1" name="aktif"
                                                id="aktif">
                                            Aktive
                                        </label>

                                        <label>
                                            <input type="checkbox" class="minimal" value="0" name="aktif"
                                                id="aktif">
                                            NonAktive
                                        </label>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Rai Dadus</button>
                                    <a href="<?= base_url('menu/submenu') ?>" class="btn btn-primary"><i
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