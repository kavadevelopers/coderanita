<div class="page-body">
    <div class="row">

        <div class="col-md-4" style="cursor: pointer;" onclick="window.location ='<?= base_url("deposit/new") ?>'">
		    <div class="card bg-c-yellow text-white">
		        <div class="card-block">
		            <div class="row align-items-center">
		                <div class="col">
		                    <p class="m-b-5">New Deposit</p>
		                    <h4 class="m-b-0"><?= newDepo() ?></h4>
		                </div>
		                <div class="col col-auto text-right">
		                    <i class="fa fa-plus f-50 text-c-yellow"></i>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="col-md-4" style="cursor: pointer;" onclick="window.location ='<?= base_url("deposit/approved") ?>'">
		    <div class="card bg-c-green text-white">
		        <div class="card-block">
		            <div class="row align-items-center">
		                <div class="col">
		                    <p class="m-b-5">Approved Deposit</p>
		                    <h4 class="m-b-0"><?= approvedDepo() ?></h4>
		                </div>
		                <div class="col col-auto text-right">
		                    <i class="fa fa-check f-50 text-c-green"></i>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="col-md-4" style="cursor: pointer;" onclick="window.location ='<?= base_url("deposit/rejected") ?>'">
		    <div class="card bg-c-blue text-white">
		        <div class="card-block">
		            <div class="row align-items-center">
		                <div class="col">
		                    <p class="m-b-5">Rejected Deposit</p>
		                    <h4 class="m-b-0"><?= rejectedDepo() ?></h4>
		                </div>
		                <div class="col col-auto text-right">
		                    <i class="fa fa-times f-50 text-c-blue"></i>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

    </div>
    <div class="row">

        <div class="col-md-4" style="cursor: pointer;" onclick="window.location ='<?= base_url("withdraw/new") ?>'">
		    <div class="card bg-c-yellow text-white">
		        <div class="card-block">
		            <div class="row align-items-center">
		                <div class="col">
		                    <p class="m-b-5">New Withdraw</p>
		                    <h4 class="m-b-0"><?= newWith() ?></h4>
		                </div>
		                <div class="col col-auto text-right">
		                    <i class="fa fa-plus f-50 text-c-yellow"></i>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="col-md-4" style="cursor: pointer;" onclick="window.location ='<?= base_url("withdraw/approved") ?>'">
		    <div class="card bg-c-green text-white">
		        <div class="card-block">
		            <div class="row align-items-center">
		                <div class="col">
		                    <p class="m-b-5">Approved Withdraw</p>
		                    <h4 class="m-b-0"><?= approvedWith() ?></h4>
		                </div>
		                <div class="col col-auto text-right">
		                    <i class="fa fa-check f-50 text-c-green"></i>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="col-md-4" style="cursor: pointer;" onclick="window.location ='<?= base_url("withdraw/rejected") ?>'">
		    <div class="card bg-c-blue text-white">
		        <div class="card-block">
		            <div class="row align-items-center">
		                <div class="col">
		                    <p class="m-b-5">Rejected Withdraw</p>
		                    <h4 class="m-b-0"><?= rejectedWith() ?></h4>
		                </div>
		                <div class="col col-auto text-right">
		                    <i class="fa fa-times f-50 text-c-blue"></i>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

    </div>
</div>