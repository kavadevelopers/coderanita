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
    <div class="card">
        <form method="post" action="<?= base_url('setting/save') ?>">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Company Name <span class="-req">*</span></label>
                            <input name="company" type="text" class="form-control" value="<?= set_value('company',get_setting()['name']); ?>" >
                            <?= form_error('company') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bitcoin Wallet Id<span class="-req">*</span></label>
                            <input name="bitwallet" type="text" class="form-control" value="<?= set_value('bitwallet',get_setting()['bitwallet']); ?>" >
                            <?= form_error('bitwallet') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Comission Percentage<span class="-req">*</span></label>
                            <input name="comission" type="text" class="form-control decimal-num" value="<?= set_value('comission',get_setting()['comission']); ?>" >
                            <?= form_error('comission') ?>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-success" type="submit">
                    <i class="fa fa-save"></i> Save
                </button>
            </div>
        </form>
    </div>
</div>