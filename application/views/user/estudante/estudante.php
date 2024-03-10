<div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Students</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                        <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card card-table">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0 datatable">
                                 <thead>
                                    <tr>
                                    <th>No</th>
                                        <th>NRE</th>
                                        <th>Naran Estudante</th>
                                        <th>F.Data Moris</th>
                                        <th>Sexo</th>

                                        <th>Departamento</th>
                                        <th>Semester</th>
                                        <th>Estatus</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php $no = 1;
                                    foreach ($estudante as $std) {


                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>

                                            <td> <a href="<?= base_url('user/detail/' . $std->id_estudante) ?>" class="btn btn-info btn-sm"> <?= $std->nre ?> </a></td>
                                            <td><?= $std->naran_estudante ?></td>
                                            <td><?= $std->fatin ?>, <?= $std->data_moris ?></td>
                                            <td><?= $std->sexo ?></td>

                                            <td><?= $std->departamentu ?></td>
                                            <td><?= $std->semester ?></td>
                                            <td><i class="fa fa-check text-success"></i> <?= $std->status ?> </td>
                                            <!-- <td>

                                                <a href="<?= base_url('administrator/hadiastd/' . $std->id_estudante) ?>" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </a>
                                                <a href="<?= base_url('administrator/hamosstd/' . $std->id_estudante) ?>" class="btn btn-danger btn-sm "> <i class="fa fa-trash"></i> </a>

                                            </td> -->
                                        </tr>
                                    <?php 
                                } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>