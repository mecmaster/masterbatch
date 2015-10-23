<?php
/* Здесь мы проверяем существуют ли переменные, которые передала форма обратной связи. Если не существуют, то мы их создаем */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['company'])) {$company = $_POST['company'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['detail'])) {$detail = $_POST['detail'];}

/* Здесь необходимо вписать ваш e-mail адрес */
$address = "san_nitro@mail.ru";

/* Здесь вписуете тему, которая будет отображаться в теме письма */
$sub = "Это сообщение с моего сайта masterbatch";

/* А здесь прописываете сам текст сообщения, который будет Вам отправлен. Если Вам необходимо начать новую строку необходимо поставить \n */
$mes = "Автор указал такое имя: $name \n Оставил такой E-mail: $email \n Компания: $company \n Телефон: $phone \n Содержание письма: \n $detail";

/* А это функция, как раз занимается отправкой письма на указанный выше адрес */
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");
if ($send == 'true')
{
echo "Сообщение отправлено!";
}
else 
{
echo "Сообщение не отправлено!";
}
?>