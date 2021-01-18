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
                                <th>Email</th>
                                <th>Amount</th>
                                <th>Btc Sent</th>
                                <th class="text-center">request date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center">#<?= $value['id'] ?></td>
                                    <td><?= $value['bank'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['amount'] ?></td>
                                    <td><?= $value['bitsend'] ?></td>
                                    <td class="text-center"><?= vd($value['cat']) ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('twilio/goold/').$value['id'] ?>" class="btn btn-success btn-mini" onclick="return confirm('Are you sure?')" title="Done">
                                            Move To OLD
                                        </a>
                                        <a href="<?= base_url('twilio/delete/').$value['id'] ?>/active" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure?')" title="Delete">
                                            Delete
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