<body>
    <div class="main-wrapper">
        
        
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Valor</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=base_url('administrator')?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Valor</li>
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
                            </ul>
                        </div>
                       
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

                                    <th>Departamento</th>
                                    <th>Grau</th>
                                    <th>Aksaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($departamento as $dep) {


                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>

                                        <td><?= $dep->departamentu ?></td>
                                        <td><?= $dep->grau ?></td>
                                        <td>
                                            <a title="Lista Disciplina" href="<?= base_url('administrator/getDis/' . $dep->id_departamentu) ?>" class="btn btn-info btn-sm"> <i class="fa fa-list"></i> </a>

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

