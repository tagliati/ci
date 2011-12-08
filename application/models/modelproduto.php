<?php

/**
 * Pagina Class
 */
class ModelProduto extends DataMapper {
	var $table = "produto";
	var $has_one = array("fornecedor");
}

