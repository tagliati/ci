<div id="page-heading"><h1>Preposto</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="">
<?php foreach($prepostos as $f):?>
	<tr>
		<td><?php echo $f->codigo;?></td>
		<td><?php echo $f->razao_social;?></td>
		<td><?php echo $f->endereco;?></td>
		<td><?php echo $f->celular;?></td>
		<td><?php echo $f->telefone;?></td>
		<td><?php echo $f->email;?></td>
		<td><?php echo $f->comissao;?></td>
		<td><a href="<?php echo site_url("preposto/editar/".$f->id);?>">Editar</a></td>
		<td><a href="<?php echo site_url("preposto/excluir/".$f->id);?>">Excluir</a></td>
	</tr>
<?php endforeach;?>
</table>
