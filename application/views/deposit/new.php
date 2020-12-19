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
                                <th class="text-right">Amount</th>
                                <th>Remarks</th>
                                <th class="text-center">Deposit Type</th>
                                <th class="text-center">Deposit Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center">#<?= $value['id'] ?></td>
                                    <td><?= $value['bank'] ?></td>
                                    <td class="text-right"><?= $value['amount'] ?></td>
                                    <td><?= $value['remarks'] ?></td>
                                    <td class="text-center"><?= $value['deptype'] ?></td>
                                    <td class="text-center"><?= vd($value['depo_date']) ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('deposit/approve/').$value['id'] ?>" class="btn btn-success btn-mini" title="Approve">
                                            Approve
                                        </a>
                                        <a href="<?= base_url('deposit/reject/').$value['id'] ?>" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure?')" title="Reject">
                                            Reject
                                        </a>
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