<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Dashboard </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="<?=base_url('estudante')?>">Estudante</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-info">
                            <div class="media mt-4">
                                <img src="<?=base_url('assets/img/estudante/'). $estudante['photo'];?>" class="mr-3"
                                    alt="<?=$estudante['photo'];?>">
                                <div class="media-body">
                                    <ul>
                                        <li>
                                            <span class="title-span">Full Name : </span>
                                            <span class="info-span"><?=$std['naran_estudante'];?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Department : </span>
                                            <span class="info-span"><?=$std['departamentu'];?></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Nu.Telefone : </span>
                                            <span class="info-span"><a
                                                    href="https://wa.me/<?=$std['nu_telf'];?>?text=Halo,nee husi instituto atu fahe informasaun ba ita"
                                                    target="_blank"><?=$std['nu_telf'];?></a></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Email : </span>
                                            <span class="info-span"> <a href="mailto:<?=$std['email'];?>"
                                                    target="_blank"><?=$std['email'];?> </a></span>
                                        </li>
                                        <li>
                                            <span class="title-span">Sexo : </span>
                                            <span class="info-span"><?=$std['sexo'];?></span>

                                        </li>
                                        <li>
                                            <span class="title-span">Data Moris : </span>
                                            <span class="info-span"><?=$std['data_moris'];?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12">
                                    <div class="card card-table">
                                        <div class="card-body">
                                            <a href="<?= base_url('estudante/printkre/' . $std['id_estudante']) ?>"
                                                class="btn btn-warning" target="_blank"> <i class="fa fa-print"></i>
                                                Print KRE</a>
                                            <br><br>
                                            <div class="table-responsive">
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode Disciplina</th>
                                                            <th>Disciplina</th>
                                                            <th>Crédito</th>
                                                            <th>Valor</th>
                                                            <th>Predikadu</th>
                                                            <th>Total</th>
                                                            <th>IPC</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                   $no = 1;
                                   $sks = 0;
                                   $grand_total = 0;
                                   $total_predikado=0;
                                   $rata=0;
                                    foreach ($viewkpslaaktivu as $key) {
                                        $sks = $sks + $key->sks;
                                    ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $key->kode_disiplina ?></td>
                                                            <td><?= $key->disiplina ?></td>
                                                            <td><?= $key->sks ?></td>
                                                            <td><?= $key->valor ?></td>
                                                            <td>
                                                                <?php if ($key->valor == 'A') {
                                                echo $predikadu = 4;
                                            } elseif ($key->valor == 'B') {
                                                echo $predikadu = 3;
                                            } elseif ($key->valor == 'C') {
                                                echo $predikadu = 2;
                                            } elseif ($key->valor == 'D') {
                                                echo $predikadu = 1;
                                            } else {
                                                echo $predikadu = 0;
                                            }
                                            $total_predikadu = $predikadu * $key->sks;
                                            $grand_total = $grand_total + $total_predikadu;
                                            $rata=($grand_total!=0)?($grand_total/$sks) * 100:0;
                                            ?>

                                                            </td>
                                                            <td><?=$total_predikadu?></td>
                                                            <td><?=number_format($grand_total / $sks)?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <ul>
                                                    <li>
                                                        <span class="title-span">Grand Total : </span>
                                                        <span class="info-span"><?=$grand_total;?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">Total Crédito : </span>
                                                        <span class="info-span"><?=$sks;?></span>
                                                    </li>
                                                    <li>
                                                        <span class="title-span">IPC: </span>
                                                        <span class="info-span"><?=number_format($grand_total / $sks, 2);?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>