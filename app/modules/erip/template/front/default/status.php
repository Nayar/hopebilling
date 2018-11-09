<?php if ($status == 'pending') { ?>
    <h3 style="text-align: center;">
        <?= $_->l('Счет %bill ожидает оплату.', array('bill' => '<span style="color: rgb(54, 178, 13);">№ '.$bill->id.'</span>')) ?>
        <?php if ($instruction) { ?>
            <br><?= $_->l('Для оплаты в системе "Расчет" в дереве услуг выберите:')?>
            <br><?= $instruction ?>
            <br><?= $_->l('Номер счёта: ') . $bill->id ?>
        <?php } ?>
    </h3>
<?php } else { ?>
    <h3 style="text-align: center;">
        <?= $_->l('К сожалению, счет %bill не был оплачен.', array('bill' => '<span style="color: red;">№ '.$bill->id .'</span>')) ?>
        <br><?= $_->l('Возникла ошибка связи с платежной системой. Повторите попытку через несколько минут.') ?>
    </h3>
<?php } ?>