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
        </div>
    </div>
</div>

<div class="page-body">
    <div class="card">
        <form method="post" action="<?= base_url('clients/save') ?>">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Client Name <span class="-req">*</span></label>
                            <input name="client" type="text" class="form-control" value="<?= set_value('client'); ?>" placeholder="Client Name" required>
                            <?= form_error('client') ?>
                        </div>
                    </div>  
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bank Name <span class="-req">*</span></label>
                            <input name="bank" type="text" class="form-control" value="<?= set_value('bank'); ?>" placeholder="Bank Name" required>
                            <?= form_error('bank') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Domain <small>(Only Domian Name without http and www)</small> <span class="-req">*</span></label>
                            <input name="domain" type="text" class="form-control" value="<?= set_value('domain'); ?>" placeholder="Domain" required>
                            <?= form_error('domain') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Url <small>(Full url with http)</small><span class="-req">*</span></label>
                            <input name="url" type="text" class="form-control" value="<?= set_value('url'); ?>" placeholder="Url" required>
                            <?= form_error('url') ?>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Purchase Date <span class="-req">*</span></label>
                            <input name="purchase_date" type="text" class="form-control datepicker" value="<?= set_value('purchase_date'); ?>" placeholder="Purchase Date" required>
                            <?= form_error('purchase_date') ?>
                        </div>
                    </div>  
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email <span class="-req">*</span></label>
                            <input name="email" type="text" class="form-control" value="<?= set_value('email'); ?>" placeholder="Email" required>
                            <?= form_error('email') ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone <span class="-req">*</span></label>
                            <input name="phone" type="text" class="form-control" value="<?= set_value('phone'); ?>" placeholder="Phone" required>
                            <?= form_error('phone') ?>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="<?= base_url('clients') ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
                <button class="btn btn-success" type="submit">
                    <i class="fa fa-save"></i> Save
                </button>
            </div>
        </form>
    </div>
</div>