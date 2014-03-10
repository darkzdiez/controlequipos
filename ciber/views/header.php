<!doctype html>
<html>
<head>
	<title>Control de Equipos</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />	
	<script type="text/javascript">
		URL="<?php print URL; ?>";
	</script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
	
	<?php
	if (isset($this->js)) 
	{
		foreach ($this->js as $js)
		{
			echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
		}
	}
	?>
</head>
<body>

<?php Session::init(); ?>
	
<div id="header">

		<a href="<?php echo URL; ?>">Control</a>
		<a href="<?php echo URL; ?>equipos">Equipos</a>
</div>
	
<div id="content">