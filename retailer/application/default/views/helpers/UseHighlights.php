<?php
////////////////////////////////////////////////////////////////////////////////
//
//  WEBMASTERCLUB.COM.BR
//  Copyright (c) 2009-2014 Israel Agoeiro
//  All Rights Reserved.
//  Todos os direitos reservados.
//
//  NOTICE: Israel Agoeiro permits you to use, modify, and distribute this file
//  in accordance with the terms of the license agreement accompanying it.
//
//  AVISO: Israel Agoeiro lhe permite utilizar, modificar e distribuir este
//  arquivo de acordo com os termos da licenca que o acompanha.
//
//  copyright	Copyright (c) 2009-2014 Israel Agoeiro (http://www.agoeiro.com)
//  license		http://www.agoeiro.com/license
//
////////////////////////////////////////////////////////////////////////////////

//----------------------------------
//  example
//----------------------------------
/**

 Config:

 $this->useHighlights("id-1")
 ->value("x"); //middle|left|right|top|bottom

 render:
 echo $this->useHighlights('HomeId');

 */

//------------------------------------------------------------------------------
//
//  Class
//
//------------------------------------------------------------------------------
class Zend_View_Helper_UseHighlights extends UseZF_Helper_Abstract {
	//--------------------------------------------------------------------------
	//
	//  Constructor
	//
	//--------------------------------------------------------------------------

	//----------------------------------
	//  useHighlights
	//----------------------------------
	/**
	 * Inicia uma nova instancia do plugin
	 *
	 * @param id Recebe um identificador
	 * @return UseExtra_useHighlights
	 */
	public function useHighlights($id) 
	{
		$this->init();

		$this->_id = strtolower($id);

		if (!$this->isRegistered($this->_id)) 
		{
			//Cria objeto de configuracao
			$helperConfig = (object)null;

			$helperConfig->params = (object)null;
			$helperConfig->params->id = $this->_id;

			$this->helperRegistry($this->_id, $helperConfig);
		}
		return $this;
	}

	/**
	 * Nome do objeto swf
	 *
	 * @return UseExtra_useHighlights
	 *
	 * @param String $value
	 */
	public function limit($value) 
	{
		$this->useHelper()->params->limit = $value;
		return $this;
	}

	/**
	 * Renderiza o Helper
	 *
	 * @return Html
	 */
	public function render() 
	{
		//Consulta a base de dados
		$useResult = $this->consultDataBase();
		
		if(!empty($useResult->data))
		{
			//Guarda o html do helper para renderizacao posterior
			$this->useHelper()->useRender = $this->createHtml($useResult);
		}
		else{
			$this->useHelper()->useRender = "";
		}

		//retorna o html do helper para uso combinado
		return $this->useHelper()->useRender;
	}

	/**
	 * Consulta a base de dados
	 *
	 * @return array
	 */
	private function consultDataBase() 
	{
		$useResult = (object)null;
		
		//Verifica se recebeu identificador
		if (!empty($this->_id)) {
			
			//Realiza consulta para buscar por banners do tipo campanha
			$this->_useResultHighlightsIdentify = $this->useDB('SELECT')
													   ->setFetchMode(Zend_Db::FETCH_OBJ)
													   ->from(array('USE_HIGHLIGHTS_IDENTIFY' => 'highlights_identify'))
													   ->fields(array('id', 'foldertype'))
													   ->where("USE_HIGHLIGHTS_IDENTIFY.popup = ?", "Campanhas")
													   ->where("USE_HIGHLIGHTS_MANAGER.is_active = ?", "1")
													   ->join(array('USE_HIGHLIGHTS_MANAGER' => 'highlights_manager'), "USE_HIGHLIGHTS_IDENTIFY.id = USE_HIGHLIGHTS_MANAGER.highlights_identify_id")
													   ->group("USE_HIGHLIGHTS_IDENTIFY.id")
													   ->fetch('Row');
			
			//Verifica se retornou banner do tipo campanha 
			if(empty($this->_useResultHighlightsIdentify))
			{
				//Realiza consulta para buscar por banner do tipo produto
				$this->_useResultHighlightsIdentify = $this->useDB('SELECT')
														   ->setFetchMode(Zend_Db::FETCH_OBJ)
														   ->from(array('USE_HIGHLIGHTS_IDENTIFY' => 'highlights_identify'))
														   ->fields(array('id', 'foldertype'))
														   ->where("USE_HIGHLIGHTS_IDENTIFY.popup = ?", "Produtos")
														   ->where("USE_HIGHLIGHTS_MANAGER.is_active = ?", "1")
														   ->join(array('USE_HIGHLIGHTS_MANAGER' => 'highlights_manager'), "USE_HIGHLIGHTS_IDENTIFY.id = USE_HIGHLIGHTS_MANAGER.highlights_identify_id")
														   ->group("USE_HIGHLIGHTS_IDENTIFY.id")
														   ->fetch('Row');
				
			}
			
			//Verifica se encontrou o registro do identificador
			if (!empty($this->_useResultHighlightsIdentify)) {
				
				$this->_useResultHighlightsManager = $this->useDB('SELECT')
												    ->setFetchMode(Zend_Db::FETCH_OBJ)
												    ->from(array('USE_HIGHLIGHTS_MANAGER' => 'highlights_manager'))
												    ->fields(array('*'))
												    ->where("USE_HIGHLIGHTS_MANAGER.highlights_identify_id = ?", $this->_useResultHighlightsIdentify->id)
													->order("RAND()")
													->limit($this->useHelper()->params->limit)
												    ->fetch('All');
													
				$useResult->data = $this->_useResultHighlightsManager;
			}
		}
		
		return $useResult;
	}

	/**
	 * Cria a estrutura html
	 *
	 * @return array
	 */
	private function createHtml($useResult) 
	{
		$htmlContent = '<div id="UiBanner" align="center">';
		
		//Monta a estrutura html
		foreach ($useResult->data as $item) 
    	{
			//Verifica se o banner tem link
			if($item->link_type == "NOT")
			{
				$htmlContent .= '<img src="'. $this->baseUrl . $item->folderpath .'/'. $this->_useResultHighlightsIdentify->foldertype . '/'. $item->filename .'" alt=""/>';
			}
			else{
				$htmlContent .= '<a target="'. $item->target .'" href="'. $item->link_href .'"><img src="'. $this->baseUrl . $item->folderpath .'/'. $this->_useResultHighlightsIdentify->foldertype . '/'. $item->filename .'"/></a>';
			}
		}
		
		$htmlContent .= '</div>';
		
		return $htmlContent;
	}

}
