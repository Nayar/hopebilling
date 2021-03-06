<div class="loaded-block">
    <?= $_->JS('validator.js') ?>
    <script>
        $(function () {
            $('form').validate({messages: validate_messages});

        })
    </script>
    <?php if (isset($ajax)) { ?>

    <!-- Modal -->
    <div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?if(!$user->id){?><?=$_->l('Создание клиента')?>
                        <?} else{?><?=$_->l('Редактирование клиента')?><?}?></h4>
                </div>
                <div class="modal-body">

                    <?php } ?>
                    <form action="<?= $_->link($request) ?>" <?= (isset($ajax) ? 'class="ajax-form"' : '') ?>
                          method="post">
                        <?php if (isset($ajax)) { ?>
                            <input type="hidden" name="ajax" value="1">
                        <?php } ?>
                        <div class="form-group">
                            <label for="username"><?=$_->l('Имя пользователя')?></label>
                            <input type="text" class="form-control" name="username" data-validate="username|ajax"
                                   data-validate-def="<?= $user->username ?>"
                                   value="<?= $user->username ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><?=$_->l('Пароль')?></label>
                            <input type="password" class="form-control" name="pass" data-validate="pass"
                                   value="<?= ($user->password ? '________' : '') ?>" placeholder="*****">
                        </div>
                        <div class="form-group">
                            <label for="name"><?=$_->l('ФИО')?></label>
                            <input type="text" class="form-control" name="name" data-validate="fio"
                                   value="<?= $user->name ?>">
                        </div>
                        <div class="form-group">
                            <label for="email"><?=$_->l('EMAIL')?></label>
                            <input type="text" class="form-control" name="email" data-validate="email|ajax"
                                   data-validate-def="<?= $user->email ?>" value="<?= $user->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone"><?=$_->l('Телефон')?></label>
                            <input type="text" class="form-control" name="phone" data-validate="phone|ajax"
                                   data-validate-def="<?= $user->phone ?>" value="<?= $user->phone ?>">
                        </div>
                        <div class="form-group">
                            <label for="comment"><?=$_->l('Комментарий')?></label>
                            <textarea class="form-control" name="comment"><?= $user->comment ?></textarea>
                        </div>


                        <div class="form-group">


                            <div class="checkbox">
                                <label>
                                    <input name="api_enabled" value="1" type="checkbox" <?= $user->api_enabled ?  'checked="checked"' : '' ?>> <?=$_->l('Включить доступ к API')?>
                                </label>
                            </div>
                        </div>
                        <?php if (!isset($ajax)) { ?>
                            <button type="submit" class="btn btn-success"><span
                                    class="glyphicon glyphicon-floppy-disk"></span> <?=$_->l('Сохранить')?>
                            </button><?php } ?>
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