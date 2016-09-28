<?php echo $this->Html->docType(); ?>
<html>
	<head>
	<?= $this->Html->css('style'); ?>
	<style>
	html{
		background-image: url("<?= $this->request->webroot; ?>img/wallpaper.jpg");
	}
	</style>

	<?= $this->fetch('css'); ?>

	</head>

	<body>
		<nav>
			<?= $this->Html->link('Home',['controller'=>'Pages','action'=>'display','home']); ?>
			<?= $this->Html->link('Contact webmaster','mailto:mfrancaviglia@indracompany.com'); ?>
			<?= $this->Html->Link('Systems',['controller'=>'Systems','action'=>'index']) ?>
		</nav>

	<?= $this->fetch('content'); ?>

	<?= $this->fetch('script'); ?>
	</body>
</html>