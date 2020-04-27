<?php require ('partials/header.php'); ?>

<?php require ('partials/menu.php'); ?>

<h2>ici la liste complète des artistes : </h2>

<?php foreach($artists as $artist): ?>
	<p><?=  $artist['name'] ?></p>
<?php endforeach; ?>

