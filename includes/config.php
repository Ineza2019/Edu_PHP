<?php

// Создаем переменную с настройками нашего веб-сайта title - название настроек
$config= array(
    'title' => 'БЛОГ IT_Минималиста', 
        'db' => array(
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'name' => 'test_blog'
    ),

);

?>
























<!-- // РАБОТА С ФОРМАМИ -->

<form method="POST" action= '/hendal.php'>
<input type='text' placeholder='Ваш логин ' name='login'> 
<input type='text' placeholder='Ваш пароль ' name='password'  >  
<hr>
<input type='submit' valua='Отправить'> 
 

</form>
