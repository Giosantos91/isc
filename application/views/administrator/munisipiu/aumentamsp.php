<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Aumenta Munisipiu</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('administrator/aumentamsp')?>">Munisipiu</a></li>
                        <li class="breadcrumb-item active">Aumenta Munisipiu</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('administrator/aumentamsp') ?>" method="post">
                            <div class="row">

                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Munisipiu</label>
                                        <input type="text" name="munisipiu" placeholder="munisipiu" autocomplete="off" autofocus
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?=base_url('administrator/munisipiu')?>" class="btn btn-warning"> <i class="fa fa-undo"></i> Fila </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

