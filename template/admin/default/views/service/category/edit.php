<div class="loaded-block">
    <?= $_->JS('validator.js') ?>
    <script>
        $(function () {
            $('.validate-form').validate({messages: validate_messages});
        })
    </script>
    <?php if (isset($ajax)) { ?>

    <!-- Modal -->
    <div class="modal fade " id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?=$_->l('Категория')?></h4>
                </div>
                <div class="modal-body">

                    <?php } ?>
                    <form action="<?= $_->link('admin/service-categories/edit?id_category=' . ($category->id ? $category->id : '')) ?>"
                          method="POST" class="<?= (isset($ajax) ? 'ajax-form' : '') ?> validate-form">


                        <div class="form-group">
                            <label for="username"><?=$_->l('Название')?></label>
                            <input type="text" name="name" value="<?= $category->name ?>" placeholder=""
                                   class="form-control" data-validate="required">
                        </div>

                        <?$_->js('fontawesome-iconpicker.min.js')?>
                        <?$_->css('fontawesome-iconpicker.min.css')?>

                        <div class="form-group">
                            <label for="username"><?=$_->l('Пиктограма')?></label>
                            <input type="text" name="icon" value="<?= $category->icon ?>" placeholder=""
                                   class="form-control" data-validate="required">
                        </div>
                        <script>
                            $('input[name=icon]').iconpicker({


                            }).on('iconpickerSelected', function(){
                                $('input[name=icon]').trigger('blur');
                            });
                        </script>

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
                    <button type="button" onclick="$('.ajax-form').submit();" class="btn btn-primary"><?=$_->l('Сохранить')?></button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>
