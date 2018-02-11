<?php
	header("Content-Type: text/html; charset= utf-8");
	require_once 'includes/temps/header.php';
?>
<?php if(!empty($error)): ?>
<div><?php echo $error; ?></div>
<?php endif; ?>
<hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<h3>Вход в админ-панель</h3>
<div><label for="inputEmail">Имя пользователя</label>
<div><input type="text" name="username" id="inputEmail" placeholder="Имя пользователя"></div></div>
<div><label for="inputPassword">Пароль</label>
<div><input type="password" name="password" id="inputPassword" placeholder="Пароль"></div></div>
<div><div><button type="submit">Войти</button></div></div>
</form>
<?php require_once 'includes/temps/footer.php'; ?>