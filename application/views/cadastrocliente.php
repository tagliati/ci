<div id="page-heading"><h1>Cadastrar Cliente</h1></div>


<form action="<?php echo site_url("cliente/salvar");?>" method="post">
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
			<th valign="top">Tipo Cliente:</th>
			<td>	
				<select  class="styledselect_form_1">
					<option value="">Selecione</option>
					<option value="f" <?php ($cliente->tipo) == "f"?"selected='selected'":""?>>Pessoa Física</option>
					<option value="j" <?php ($cliente->tipo) == "j"?"selected='selected'":""?>>Pessoa Jurídica</option>
				</select>
			</td>
		</tr>
		<tr>
			<th valign="top">Razão Social:</th>
			<td><input type="text" class="inp-form" name="razao_social" value="<?php echo $cliente->razao_social?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">CNPJ:</th>
			<td><input type="text" class="inp-form-error" name="cnpj" value="<?php echo $cliente->cnpj?>"/></td>
			<td>
			<div class="error-left"></div>
			<div class="error-inner">Campo obrigatório.</div>
			</td>
		</tr>
		
		<tr>
			<th valign="top">Endereço:</th>
			<td><input type="text" class="inp-form" name="endereco"  value="<?php echo $cliente->endereco?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Telefone:</th>
			<td><input type="text" class="inp-form" name="telefone" value="<?php echo $cliente->telefone?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Celular:</th>
			<td><input type="text" class="inp-form" name="celular" value="<?php echo $cliente->celular?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">E-mail:</th>
			<td><input type="text" class="inp-form" name="email" value="<?php echo $cliente->email?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th>Enviar arquivo:</th>
			<td><input type="file" class="file_1" /></td>
			<td>
				<div class="bubble-left"></div>
				<div class="bubble-inner">JPEG, GIF ou DOC</div>
				<div class="bubble-right"></div>
			</td>
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









 




