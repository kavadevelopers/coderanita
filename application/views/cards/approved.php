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
                                <th class="text-center">Card Type</th>
                                <th class="text-right">Topup amount</th>
                                <th>Address/Email</th>
                                <th>BTC SEND</th>
                                <th>BTC hash</th>
                                <th class="text-center">request date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center">#<?= $value['id'] ?></td>
                                    <td><?= $value['bank'] ?></td>
                                    <td class="text-center"><?= $value['ctype'] ?></td>
                                    <td class="text-right">USD <?= pretyAmount($value['amount']) ?></td>
                                    <td><?= $value['address'] ?></td>
                                    <td><?= $value['bitsend'] ?> btc</td>
                                    <td><?= $value['hash'] ?></td>
                                    <td class="text-center"><?= vd($value['created_at']) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
	</div>
</div>