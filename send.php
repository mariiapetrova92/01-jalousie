 <?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
$question=$_POST['question'];


//Тут указываем на какой ящик посылать письмо
$to = "mashap310@gmail.com";
//Далее идет тема и само сообщение
$subject = "Заявка с сайта";
$message = "Письмо отправлено из моей формы<br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone)."<br />
Вопрос: ".htmlspecialchars($question);
$headers = "From: petrovka.ru\r\n
			Content-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
//header('Location: thanx.html');
echo "Thank you, you message has been sent!";
exit();
?>
