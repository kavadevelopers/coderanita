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
                                <th>BTC hash</th>
                                <th class="text-center">Deposit Type</th>
                                <th class="text-center">Deposit request Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center">#<?= $value['id'] ?></td>
                                    <td><?= $value['bank'] ?></td>
                                    <td class="text-right">USD <?= $value['amount'] ?></td>
                                    <td><?= $value['remarks'] ?></td>
                                    <td class="text-center"><?= $value['deptype'] ?></td>
                                    <td class="text-center"><?= vd($value['depo_date']) ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-mini btnDetail" title="View" data-bank="<?= $value['bank'] ?>" data-amount="<?= $value['amount'] ?>" data-comission="<?= $value['comission'] ?>" data-btc_val="<?= $value['btc_val'] ?>" data-remarks="<?= $value['remarks'] ?>" data-date="<?= vd($value['depo_date']) ?>" data-file="<?= $value['file'] ?>" data-url="<?= $value['url'] ?>" data-type="<?= $value['deptype'] ?>">
                                            <i class="fa fa-eye"></i>
                                        </button>
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


<div class="modal fade" id="modalDepositDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="post" action="">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deposit Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="m-b-10 f-w-600">Bank</p>
                            <h6 id="bankName" class="text-muted f-w-400"></h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="m-b-10 f-w-600">Bank URL</p>
                            <h6 id="bankUrl" class="text-muted f-w-400"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="m-b-10 f-w-600">Total Deposit (BTC)</p>
                            <h6 id="totalBTC" class="text-muted f-w-400"></h6>
                        </div>
                        <div class="col-sm-4">
                            <p class="m-b-10 f-w-600">Comission (BTC)</p>
                            <h6 id="comissionBtc" class="text-muted f-w-400"></h6>
                        </div>
                        <div class="col-sm-4">
                            <p class="m-b-10 f-w-600">Amount (BTC)</p>
                            <h6 id="amountBtc" class="text-muted f-w-400"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="m-b-10 f-w-600">Deposit Type</p>
                            <h6 id="depositType" class="text-muted f-w-400"></h6>
                        </div>
                        <div class="col-sm-4">
                            <p class="m-b-10 f-w-600">Deposit request Date</p>
                            <h6 id="depoRequestDate" class="text-muted f-w-400"></h6>
                        </div>
                        <div class="col-sm-4">
                            <p class="m-b-10 f-w-600">File</p>
                            <a href="" id="depositFile" download>Download</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="m-b-10 f-w-600">BTC Hash</p>
                            <h6 id="btcHash" class="text-muted f-w-400"></h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function(){
        $('.btnDetail').click(function(event) {
            _this = $(this);
            $('#bankName').html(_this.data('bank'));
            $('#bankUrl').html(_this.data('url'));
            $('#depositType').html(_this.data('type'));
            $('#depoRequestDate').html(_this.data('date'));
            $('#btcHash').html(_this.data('remarks'));

            if(_this.data('file') != ""){
                $('#depositFile').attr('href',_this.data('file'));
                $('#depositFile').show();
            }else{
                $('#depositFile').hide();
            }

            amount      = parseFloat(_this.data('amount'));
            comission   = parseFloat(_this.data('comission'));
            btc_val     = parseFloat(_this.data('btc_val'));

            $('#totalBTC').html(((amount + comission) * btc_val).toFixed(6));
            $('#amountBtc').html((amount * btc_val).toFixed(6));
            $('#comissionBtc').html((comission * btc_val).toFixed(6));  
            $('#modalDepositDetails').modal('show');
        });
    })
</script>