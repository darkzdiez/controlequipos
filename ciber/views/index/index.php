<style type="text/css">
	.container{
		text-align: center;
	}
	.yellow{
		background-color: yellow;
	}
	.white{
		background-color: white;
	}
	.red{
		background-color: red;
	}
	table{
		border: 2px solid #000;
		width: 50%;
		margin: auto;
		border-collapse: collapse;
	}
	td, th{
		border: 0;
		padding: 0;
	}
	thead tr{
	}
</style>
<div class="container">
	<table>
		<thead>
			<tr>
				<th>PC</th>
				<th>Accion</th>
				<th>Duracion</th>
			</tr>
		</thead>
		<tbody>
			<?php
			print $this->tbody;
			?>
		</tbody>
	</table>
</div>