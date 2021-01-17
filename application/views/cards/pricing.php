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
                 
            </div>
        </div>
    </div>
</div>


<div class="page-body">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <?php if($type == 0){ ?>
                    <form method="post" action="<?= base_url('cards/save_pricing') ?>">
                        <div class="card-block">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name <span class="-req">*</span></label>
                                    <input name="name" type="text" class="form-control" value="<?= set_value('name'); ?>" placeholder="Name" required>
                                    <?= form_error('name') ?>
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Price <span class="-req">*</span></label>
                                    <input name="price" type="text" class="form-control decimal-num" value="<?= set_value('price'); ?>" placeholder="Price" required>
                                    <?= form_error('price') ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-plus"></i> Add
                            </button>
                        </div>
                    </form>
                <?php } ?>
                <?php if($type == 1){ ?>
                    <form method="post" action="<?= base_url('cards/update_pricing') ?>">
                        <div class="card-block">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name <span class="-req">*</span></label>
                                    <input name="name" type="text" class="form-control" value="<?= set_value('name',$single['name']); ?>" placeholder="Name" required>
                                    <?= form_error('name') ?>
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Price <span class="-req">*</span></label>
                                    <input name="price" type="text" class="form-control decimal-num" value="<?= set_value('price',$single['price']); ?>" placeholder="Price" required>
                                    <?= form_error('price') ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="id" value="<?= $single['id'] ?>">
                            <button class="btn btn-success" type="submit">
                                <i class="fa fa-save"></i> Update
                            </button>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    	<div class="col-md-8">
            <div class="card">
                <div class="card-block table-responsive">
                    <table class="table table-striped table-bordered table-mini table-dt">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $key => $value) { ?>
                                <tr>
                                    <td class="text-center">#<?= $value['id'] ?></td>
                                    <td><?= $value['name'] ?></td>
                                    <td>$ <?= $value['price'] ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('cards/edit_pricing/').$value['id'] ?>" class="btn btn-success btn-mini" title="Approve">
                                            Edit
                                        </a>
                                        <a href="<?= base_url('cards/delete_pricing/').$value['id'] ?>" class="btn btn-danger btn-mini" onclick="return confirm('Are you sure?')" title="Delete">
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