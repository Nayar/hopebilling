{s}<?=$_->l('Новый заказ хостинга')?>{/s}

<h2><?=$_->l('Новый хостинг аккаунт создан')?></h2>
<br>
<?=$_->l('Детальная информация о заказе:')?> <br>
<br>
<?=$_->l('Клиент:')?> <?= $client->name ?> <br>
<?=$_->l('Сервер:')?> <?= $server->name ?> <br>
<br>
------------------------------------------------
<br>

<?=$_->l('Логин:')?> <?= $order->login ?> <br>
<?=$_->l('Пароль:')?> ******** <br> <br>
