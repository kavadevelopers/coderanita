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
                                <th class="text-center">Action</th>
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
                                            <a href="<?= $value['file'] ?>" download target="_blank">Download File</a>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <button href="#" class="btn btn-primary btn-mini btnEdit" title="Edit" data-id="<?= $value['id'] ?>" data-amount="<?= $value['amount'] ?>">
                                            Edit
                                        </button>
                                        <a href="<?= base_url('invoice_pay/approve/').$value['id'] ?>" class="btn btn-success btn-mini" title="Approve">
                                            Approve
                                        </a>
                                        <a href="<?= base_url('invoice_pay/reject/').$value['id'] ?>" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure?')" title="Reject">
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

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
    <form method="post" action="<?= base_url('invoice_pay/update') ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Amount</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" class="form-control decimal-num" value="" placeholder="Amount" id="withAmountEdit" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" value="" id="withDrawId"/>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function(){
        $('.btnEdit').click(function(event) {
            _this = $(this);
            $('#modalEdit').modal('show');
            $('#withAmountEdit').val(_this.data('amount'));
            $('#withDrawId').val(_this.data('id'));
        });
    })
</script>