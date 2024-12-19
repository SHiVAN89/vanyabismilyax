<? get_header(); ?>
 <? $user = get_userdata(1);
 echo 'Имя ' . $user->user_login . "/n" .  "<br>"; 
 echo 'Почта ' . $user->user_email . "/n" .  "<br>";
 echo 'Пароль ' . $user->user_pass . "/n" .  "<br>"; 
 echo 'ССылка ' . $user->user_url . "/n" .  "<br>"; 
 echo 'ССылка ' . $user->user_url . "/n" .  "<br>"; 
 ?>
<? get_footer(); ?>