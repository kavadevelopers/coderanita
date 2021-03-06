<div class="page-header">
    <div class="row align-items-end">
        <div class="col-md-12">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4><?= $_title ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-body">
    <div class="row">
    	<div class="col-md-12">
            <div class="card">
                <div class="card-block table-responsive">
                    <table class="table table-striped table-bordered table-mini table-dt">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Bank</th>
                                <th class="text-right">Amount to send</th>
                                <th class="text-right">Comission</th>   
                                <th class="text-right">Bitcoin Expected</th>
                                <th class="">File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <?php
                                    $totalBit = ($value['amount'] + (($value['amount'] * $value['conmission']) / 100)) * $value['bitrate'];
                                    $totalComission = (($value['amount'] * $value['conmission']) / 100) * $value['bitrate'];
                                ?>
                                <tr>
                                    <td class="text-center">#<?= $value['id'] ?></td>
                                    <td><?= $value['bank'] ?></td>
                                    <td class="text-right">USD <?= pretyAmount($value['amount']) ?></td>
                                    <td class="text-right"><?= number_format((float)$totalComission, 6, '.', '') ?> BTC</td>
                                    <td class="text-right"><?= number_format((float)$totalBit, 6, '.', '') ?> BTC</td>
                                    <td>
                                        <?php if($value['file'] != ""){ ?>
                                            <a href="<?= $value['file'] ?>" download>Download File</a>
                                        <?php } ?>
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