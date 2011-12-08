
<div id="page-heading"><h1>Cadastrar Preposto</h1></div>

<form action="<?php echo site_url("preposto/salvar");?>" method="post">
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="<?php echo base_url();?>static/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="<?php echo base_url();?>static/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Código:</th>
			<td>
				<input type="text" class="inp-form"  name="codigo" value="<?php echo $preposto->codigo?>"/>
				<?php if(isset($preposto->id)):?>			
				<input type="hidden" class="inp-form"  name="id" value="<?php echo $preposto->id?>"/>
				<?php endif;?>
			</td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Razão Social:</th>
			<td><input type="text" class="inp-form-error"  name="razao_social"  name="id" value="<?php echo $preposto->razao_social?>"/></td>
			<td>
			<div class="error-left"></div>
			<div class="error-inner">Campo obrigatório.</div>
			</td>
		</tr>
		<tr>
			<th valign="top">Endereço:</th>
			<td><input type="text" class="inp-form"  name="endereco"  name="id" value="<?php echo $preposto->endereco?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Telefone:</th>
			<td><input type="text" class="inp-form"  name="telefone"  name="id" value="<?php echo $preposto->telefone?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Celular:</th>
			<td><input type="text" class="inp-form"  name="celular"  name="id" value="<?php echo $preposto->celular?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">E-mail:</th>
			<td><input type="text" class="inp-form"  name="email"  name="id" value="<?php echo $preposto->email?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Comissão(%):</th>
			<td><input type="text" class="inp-form"  name="comissao"  name="id" value="<?php echo $preposto->comissao?>"/></td>
			<td></td>
		</tr>
	
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	<!-- end id-form  -->

	</td>
	<td>
</td>
</tr>
<tr>
<td><img src="<?php echo base_url();?>static/images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
</form>
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>

