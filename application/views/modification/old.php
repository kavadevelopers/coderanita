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
                                <th>Type</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th class="text-center">request date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center">#<?= $value['id'] ?></td>
                                    <td><?= $value['bank'] ?></td>
                                    <td><?= $value['request_type'] ?><br><b>$<?= $value['budget'] ?></b></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['subject'] ?></td>
                                    <td><?= $value['message'] ?></td>
                                    <td class="text-center"><?= vd($value['cat']) ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('modification_req/delete/').$value['id'] ?>/old" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure?')" title="Delete">
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