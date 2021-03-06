<style type="text/css">
    body {
        text-align: center;
    }

    h3 {
        font-size: 32px;

    }

    h3 span {
        color: rgb(255, 116, 0);
    }

    h4 {
        font-size: 20px;
        margin-bottom: 20px;
        color: #5C5C5C;
    }

    form {
        display: inline-block;
        margin: 0 5px 10px;
    }

    .btn .glyphicon {
        margin-right: 10px;
    }

    .payment_button {
        width: 200px;
        height: 100px;
        border: 1px solid #333;
        background-color: transparent;
        outline: none;
        box-shadow: 0 0 7px #000;
        display: inline-block;
        vertical-align: top;
        transition: box-shadow 0.3s, transform 0.3s;
        background-size: 80% !important;
        position: relative;
    }

    .payment_button:hover {
        box-shadow: 0 0 10px #fff;
        transform: translateY(-10px);
    }

    .payment_button2:before {
        content: "Внутренний счет";
        position: absolute;
        top: -40px;
        right: -40px;
        opacity: 0;
        border-radius: 5px;
        border: 1px solid #333;
        background-color: #333;
        color: #fff;
        padding: 5px;
        transition: opacity 0.4s;
    }

    .payment_button2:hover:before {
        opacity: 1;
    }
</style>

<?php if (!$error) { ?>

    <?php if (isset($bills)) { ?>
        <h3><?= $_->l('Оплата счетов') ?> <span>№<?= implode(', ', $bills) ?></span></h3>

    <?php } else { ?>
        <h3><?= $_->l('Оплата счета') ?> <span>№<?= $bill->id ?></span></h3>
    <?php } ?>
    <?= $_->l('Общая сумма:') ?> <b><?= $currency->displayPrice($bill->total) ?></b>

    <h4><?= $_->l('Выберите метод оплаты:') ?></h4>


    <?php /*Include Modules*/ ?>
    <?= isset($displayPaymentMethods) ? $displayPaymentMethods : '' ?>
    <?php /*End Include Modules*/ ?>



<?php } elseif ($error == 'bill_is_paid') { ?>
    <div class="alert alert-danger" role="alert">
        <?php if (isset($bills)) { ?>
            <span class="glyphicon glyphicon-warning-sign"></span> <b><?= $_->l('Внимание!') ?></b>
            <br> <?= $_->l('Один или более выбранных счетов уже оплачены или отменены.') ?><br>
            <?= $_->l('Если у Вас возникли трудности при оплате счетов, обратитесь в службу поддержки клиентов.') ?>

        <?php } else { ?>
            <span class="glyphicon glyphicon-warning-sign"></span> <b><?= $_->l('Внимание!') ?></b>
            <br> <?= $_->l('Cчет №%id уже был оплачен или отменен.', array('id' => $bill->id)) ?>
            <br>
            <?= $_->l('Если у Вас возникли трудности при оплате счетов, обратитесь в службу поддержки клиентов.') ?>

        <?php } ?>

    </div>
<?php } ?>