<?php echo $this->Html->docType(); ?>
<html>
	<head>
	<?= $this->Html->css(['style','kube.min']); ?>
	<style>
	html{
		background-image: url("<?= $this->request->webroot; ?>img/wallpaper.jpg");
	}
	body{
		background-color: transparent;
	}
	</style>

	<?= $this->fetch('css'); ?>

	</head>

	<body>
		<nav class="navbar">
			<ul>
				<li><?= $this->Html->link('Home',['controller'=>'Systems','action'=>'index']); ?></li>
				<li><?= $this->Html->link('Contact webmaster','mailto:mfrancaviglia@indracompany.com'); ?></li>
				<li><?= $this->Html->Link('Systems',['controller'=>'Systems','action'=>'index']) ?></li>
			</ul>
		</nav>

		<?= $this->fetch('content'); ?>
		<?= $this->Html->script(['jquery-3.1.1.min','kube.min']); ?>
		<?= $this->fetch('script'); ?>
	</body>
</html>