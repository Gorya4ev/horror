<?php
	header("Content-Type: text/html; charset= utf-8");
	require_once 'includes/temps/header.php';
?>
<a href="<?php echo $this -> base -> url; ?>">Вернуться к списке</a>
<?php foreach($posts as $post): ?>
<h3>Сообщение №<?php echo htmlspecialchars($post['id']); ?></h3>
<?php echo htmlspecialchars($post['content']); ?>
<hr>
<?php endforeach; ?>
<?php require_once 'includes/temps/footer.php'; ?>