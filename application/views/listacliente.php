<div id="page-heading"><h1>Clientes</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="">
<?php foreach($clientes as $f):?>
	<tr>
		<td><?php echo $f->codigo;?></td>

		<td><a href="<?php echo site_url("cliente/editar/".$f->id);?>">Editar</a></td>
		<td><a href="<?php echo site_url("cliente/excluir/".$f->id);?>">Excluir</a></td>
	</tr>
<?php endforeach;?>
</table>
