<?php
/* ����� �� ��������� ���������� �� ����������, ������� �������� ����� �������� �����. ���� �� ����������, �� �� �� ������� */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['company'])) {$company = $_POST['company'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['detail'])) {$detail = $_POST['detail'];}

/* ����� ���������� ������� ��� e-mail ����� */
$address = "san_nitro@mail.ru";

/* ����� �������� ����, ������� ����� ������������ � ���� ������ */
$sub = "��� ��������� � ����� ����� masterbatch";

/* � ����� ������������ ��� ����� ���������, ������� ����� ��� ���������. ���� ��� ���������� ������ ����� ������ ���������� ��������� \n */
$mes = "����� ������ ����� ���: $name \n ������� ����� E-mail: $email \n ��������: $company \n �������: $phone \n ���������� ������: \n $detail";

/* � ��� �������, ��� ��� ���������� ��������� ������ �� ��������� ���� ����� */
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");
if ($send == 'true')
{
echo "��������� ����������!";
}
else 
{
echo "��������� �� ����������!";
}
?>