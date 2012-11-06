<?php
////////////////////////////////////////////////////////////////////////////////
//
//  DEVDOO.COM
//  Copyright (c) 2010
//  All Rights Reserved.
//  Todos os direitos reservados.
//
//  NOTICE: Israel Agoeiro permits you to use, modify, and distribute this file
//  in accordance with the terms of the license agreement accompanying it.
//
//  AVISO: Israel Agoeiro lhe permite utilizar, modificar e distribuir este
//  arquivo de acordo com os termos da licenca que o acompanha.
//
//  @category   Community
//  @package    Community_Module
//  @copyright 	Copyright (c) 2006-2014 Israel Agoeiro (http://www.agoeiro.com)
//  @license 	http://www.devdoo.com/soocialize/license 
//  @author 	Israel Agoeiro
//  @version 	1.0
//
////////////////////////////////////////////////////////////////////////////////
//------------------------------------------------------------------------------
//
//  Class
//
//------------------------------------------------------------------------------
class Default_Classes_Businessintelligence extends UseZF_Class {

	//----------------------------------
    //  dashboard
    //----------------------------------
    /**
     * NOTDOC
     *
     * @param $params
     */		
	public function dashboard($params)
    {
		//Remove todas as folgas do promotor no mês
		$categoryProduct = $this->useDB('CATEGORY_PRODUCT')->queryString("SELECT register_groups.title, COUNT(lg_products.id) AS total_product FROM lg_products INNER JOIN register_groups ON lg_products.category_id = register_groups.id GROUP BY lg_products.category_id ORDER BY total_product DESC");
		$categoryResource = $this->useDB('CATEGORY_RESOURCE')->queryString("SELECT register_groups.title, COUNT(lg_resources.id) AS total_resource FROM lg_resources INNER JOIN lg_products ON lg_resources.source_id = lg_products.id INNER JOIN register_groups ON lg_products.category_id = register_groups.id GROUP BY lg_products.category_id ORDER BY total_resource DESC");
		$categoryDownload = $this->useDB('CATEGORY_DOWNLOAD')->queryString("SELECT lg_products.category_id, register_groups.title, COUNT(*) AS total_download FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id INNER JOIN register_groups ON lg_products.category_id = register_groups.id GROUP BY lg_products.category_id ORDER BY total_download DESC");
		
		$category = array_merge($categoryProduct, $categoryResource, $categoryDownload);
		
		$arProduct = $categoryProduct;
		$arResource = $categoryResource;
		$arDownload = $categoryDownload;
		$arCategory = array();
		
		//Recupera os nomes das categorias
		foreach ($arResource as $item) 
		{
			$arCategory[]['title'] = $item['title'];
		}
		
		//Adiciona os totais de produtos, recursos e download
		for ($i = 0; $i < count($arCategory); $i++) 
		{
			//Adiciona os totais de produtos
			foreach ($arProduct as $itemProduct) 
			{
				if($arCategory[$i]['title'] == $itemProduct['title'])
					$arCategory[$i]['total_product'] = $itemProduct['total_product'];
			}

			//Adiciona os totais de recursos
			foreach ($arResource as $itemResource) 
			{
				if($arCategory[$i]['title'] == $itemResource['title'])
					$arCategory[$i]['total_resource'] = $itemResource['total_resource'];
			}

			//Adiciona os totais de downloads
			foreach ($arDownload as $itemDownload) 
			{
				if($arCategory[$i]['title'] == $itemDownload['title'])
					$arCategory[$i]['total_download'] = $itemDownload['total_download'];
			}
		}
		
		$dataResult = useObject();
		$dataResult->categoryReport = $arCategory;
		return $dataResult;
    }		
} 
?>