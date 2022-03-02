<?php
    echo "<link rel='stylesheet' href='style.css'>";

    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "most.tsvet@yandex.ru";
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg=" /n
    Имя: $name
    Фамилия: $surname
    Телефон: $phone
    Почта: $email
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p class="text">Форма успешно отправлена!</p>

