<div class="loaded-block">
    <?php if (isset($ajax)) { ?>

    <!-- Modal -->
    <div class="modal fade " id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?=$_->l('Параметр')?></h4>
                </div>
                <div class="modal-body">
                    <?php } ?>
                    <form <?= (isset($ajax) ? 'class="ajax-form"' : '') ?>
                        action='<?= $_->link('admin/vps-params/edit?id_param=' . ($param->id ? $param->id : '')) ?>'
                        method="POST">

                        <div class="control-group">
                            <!-- Username -->
                            <label class="control-label" for="username"><?=$_->l('Название')?></label>

                            <div class="controls">
                                <input type="text" id="name" name="name" value="<?= $param->name ?>" placeholder=""
                                       class="input-xlarge form-control">
                            </div>
                        </div>
                        <?php if (!isset($ajax)) { ?>
                            <button type="submit" class="btn btn-success"><?=$_->l('Сохранить')?></button>
                        <?php } else { ?>
                            <input type="hidden" name="ajax" value="1">
                        <?php } ?>

                    </form>
                    <?php if (isset($ajax)) { ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?=$_->l('Закрыть')?></button>
                    <button type="button" onclick="$('.ajax-form').submit();" class="btn btn-success"><span
                            class="glyphicon glyphicon-floppy-disk"></span> <?=$_->l('Сохранить')?>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>
