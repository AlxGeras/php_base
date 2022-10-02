<a href="/">Главная</a>
<a href="/?controller=security">Войти</a>
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="?action=logout">[Выход]</a></p>
<?php else : ?>
    <form method="post">
        <input type="text" name="username" placeholder="Введите ваше имя"/>
        <input type="submit" value="Отправить"/>
    </form>
<?php endif ?><br>