<div class="page-header">
    <div class="align-items-end">
        <div class="row">
            <div class="col-md-6">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4><?= $_title ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right">
                 <a href="<?= base_url('clients/add') ?>" class="btn btn-mini btn-primary"><i class="fa fa-plus"></i> Add Client</a>
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
                                <th>Client Details</th>
                                <th>Url</th>
                                <th class="text-center">Purchased On</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center"><?= $value['id'] ?></td>
                                    <td>
                                        <b>Bank : </b><?= $value['bank'] ?><br>
                                        <?= $value['client'] ?><br>
                                        <?= $value['phone'] ?><br>
                                        <?= $value['email'] ?>
                                    </td>
                                    <td><?= $value['url'] ?></td>
                                    <td class="text-center"><?= getPretyDate($value['purchase_date']) ?></td>
                                    <td class="text-center">
                                        <?php if($value['block'] == "yes"){ ?>
                                            <a href="<?= base_url('clients/block/').$value['id'] ?>" class="btn btn-mini btn-danger btn-status">Blocked</a>
                                        <?php }else{ ?>
                                            <a href="<?= base_url('clients/block/').$value['id'] ?>/yes" class="btn btn-mini btn-success btn-status">Active</a>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('clients/edit/').$value['id'] ?>" class="btn btn-primary btn-mini" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="<?= base_url('clients/delete/').$value['id'] ?>" class="btn btn-danger btn-mini btn-delete" title="Delete">
                                            <i class="fa fa-trash"></i>
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


