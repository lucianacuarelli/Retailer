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
class PrepareHtml extends UseZF_Class{

    //----------------------------------
    //  countResources
    //----------------------------------
    /**
     * Prepara visualizacao da quantidade de conteudos
     *
     * @return void
     */
    public function countResources($title, $resourceType, $useResultCount) 
    {
    	foreach ($useResultCount as $item) {
    		//Verifica se o tipo de recurso e igual ao item ativo
			if($item->resource_type == $resourceType){
				$title = $title . ' ('. $item->total .')';
			}
		}
    	return $title;
	}

    //----------------------------------
    //  countResourcesTotal
    //----------------------------------
    /**
     * Retorna o total de conteudos
     *
     * @return void
     */
    public function countResourcesTotal($title, $resourceType, $useResultCount) 
    {
    	$total = 0;
		
    	foreach ($useResultCount as $item) {
    		//Verifica se o tipo de recurso e igual ao item ativo
			if($item->resource_type == $resourceType){
				$total = $item->total;
			}
		}
    	return $total;
	}
	
    //----------------------------------
    //  htmlMessage
    //----------------------------------
    /**
     * Prepara o html das mensagens que deve ser mostradas na pagina
     *
     * @return void
     */
    public function htmlMessage($text) 
    {
    	return '<div class="UiMessageAlert">'.$text.'</div>';
	}	
	
	//----------------------------------
    //  slideShow
    //----------------------------------
    /**
     * Prepara o html do componente de slide show
     *
     * @param $params
     */		
	public function slideShow($slideshow, $baseUrl)
    {
    	$html = '<div id="main">
					<div id="gallery">
						<div id="slides">';
							foreach($slideshow as $itemSlideShow)
							{
								$html .= '<a style="text-decoration:none;" href="'. $baseUrl .'/contentshow/'. $itemSlideShow->source_id .'/img">
											<div class="slide">
											<!-- imagens dos recurso -->
												<div class="UiDetailItem" style="background:#FFFFFF url(\''. $baseUrl . $itemSlideShow->folderpath .'/display/'. $itemSlideShow->filename .'\') no-repeat center center; width:980px; height:400px">
													<div class="UiInfo">
														<!-- identificador do recurso -->
														<table class="UiHomeInfo" width="100%" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td>
																<div class="UiTitle">
																	'. UseZF_Util::useTruncate($itemSlideShow->USE_LG_PRODUCTS_title,30) .'
																</div>
																<div class="UiSubTitle">
																	'. UseZF_Util::useTruncate($itemSlideShow->title,30) .'
																</div>
																<div>
																	<table border="0" cellspacing="0" cellpadding="0">
																		<tr>';
																			if(!empty($itemSlideShow->total_rating_votes))
																			{
																				$html .= '<td>
																							<a title="Total de ranking" style="text-decoration:none;" href="'. $baseUrl .'/contentshow/'. $itemSlideShow->source_id .'/img">
																								<span class="iconHomeStar">&nbsp;</span>
																								<span class="iconText">'. round($itemSlideShow->total_rating/$itemSlideShow->total_rating_votes) .'</span>
																							</a>
																						  </td>';
																			}else{
																				$html .= '<td><a title="Total de ranking" style="text-decoration:none;" href="'. $baseUrl .'/contentshow/'. $itemSlideShow->source_id .'/img"> <span class="iconHomeStar">&nbsp;</span> <span class="iconText">0</span> </a></td>';
																			}
																			
																			$html .= '<td><a title="Total de downloads" style="text-decoration:none;" href="'. $baseUrl .'/contentshow/'. $itemSlideShow->source_id .'/img"> <span class="iconHomeDownload">&nbsp;</span> <span class="iconText">'. $itemSlideShow->total_download .'</span> </a></td>
																					  <td><a title="Total de Visualização" style="text-decoration:none;" href="'. $baseUrl .'/contentshow/'. $itemSlideShow->source_id .'/img"> <span class="iconHomeView">&nbsp;</span> <span class="iconText">'. $itemSlideShow->total_view .'</span> </a></td>
																					</tr>
																				</table>
																			</div>
																		</td>
																		<td valign="top"  class="UiHomeDetail">
																		<div class="UiFormat">
																			'. $itemSlideShow->format .'
																		</div>
																		<div class="useClear"></div>
																		<div class="UiText">
																			'. UseZF_Util::useFileSize($itemSlideShow->filesize) .'
																		</div>
																	</td>
																</tr>
															</table>
														</div>
													</div>
												</div>
											</a>';
										}
										
										$html .= '</div>
													<div id="menu">
														<ul>';
															foreach($slideshow as $itemSlideShow)
															{
																$html .= '<li class="menuItem"><a href="#"><img alt="" src="'. $baseUrl . $itemSlideShow->folderpath .'/mini/'. $itemSlideShow->filename .'" /></a></li>';
															}
											$html .= '</ul>
													</div>
												</div>
											</div>';
		return $html;
	}
	
	//----------------------------------
    //  htmlContent
    //----------------------------------
    /**
     * Prepara o html do conteudo de produtos.
     *
     * @param $params
     */		
	public function htmlContent($productId, $useResult, $useResultCount, $useResultImages)
    {
    	$html = '<div class="UiProductDetail">
					<div class="UiProductDetailInfo">
						<div class="UiProductDate">
							Adicionado em '. $useResult->changed_in .'
						</div>
						<div class="UiProductTitle">
							'. $useResult->title .'
						</div>
						<div class="UiProductText">
							'. $useResult->code .'
							<br /> 
							<br /> 
							'. $useResult->promotional_description .' 
						</div>
					</div>
					<div class="UiProductDetailImage">
						<a id="UiImage" class="UiGalleryProduct UiImage UiLoading" href="" title="'. $useResult->title .'"></a>
					</div>
					<div class="UiProductList">
						
					<!-- Image show mini -->	
						<div class="UiProductMiniList">
								<div class="VScrollbar">
									<div class="scrollbar">
										<div class="track">
											<div class="thumb">
												<div class="end"></div>
											</div>
										</div>
									</div>
									<div class="viewport">
										<div class="overview">
											<ul>';
											foreach ($useResultImages as $key => $value)
											{
												$html .= '<li>
															<div class="useImage">
																<img id="img-'. $key .'" class="UiGaleryMini" width="50px" src="'. $baseUrl . $value->folderpath .'/show/'. $value->filename .'">
															</div>
														</li>';
											}
																					
											$html .= '</ul>
										</div>
									</div>
								</div>
							</div>
							</div>
				<div class="useClear"></div>
				<div style="display:none;">'; 
				foreach ($useResultImages as $key => $value)
				{
					$html .= '<a class="UiGalleryProduct" href="'. $baseUrl . $value->folderpath .'/show/'. $value->filename .'" title="'. $useResult->title .'"><img id="img-'. $key .'" class="UiGaleryMini" width="50px" src="'. $baseUrl . $value->folderpath .'/show/'. $value->filename .'"></a>>';
				}
				
				$html .= '</div>
				<div class="useClear"></div>
				<div class="UiProductInfo">';
				
				$html .= '</div>
				<div class="UiProductMenu">
					<span class="UiTitle">Conteúdo Disponível</span>
						<div class="useMenuPage">
							<ul>';
				//Verifica se tem alguma especificacao tecnica
				/*
				if($this->countResourcesTotal('Especificação Ténica', 'EPT', $useResultCount) > 0)			
					$html .= '<li><a class="useMenuEspecificacao" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/especificacoes">' . $this->countResources('Esp. Téc.', 'EPT', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="useMenuEspecificacao">Especificação Ténica</div></li>';
				*/
					
				//Verifica se tem algum em videos
				if($this->countResourcesTotal('Vídeos', 'VDO', $useResultCount) > 0)			
					$html .= '<li><a class="useMenuVideos" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/vdo">' . $this->countResources('Vídeos', 'VDO', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="UiMenuVideos">Vídeos</div></li>';
				
				//Verifica se tem algum em imagens
				if($this->countResourcesTotal('Imagens', 'IMG', $useResultCount) > 0)	
					$html .= '<li><a class="useMenuImages" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/img">' . $this->countResources('Imagens', 'IMG', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="UiMenuImages">Imagens</div></li>';
				
				//Verifica se tem algum em logos
				if($this->countResourcesTotal('Logos', 'LGO', $useResultCount) > 0)		
					$html .= '<li><a class="useMenuLogos" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/lgo">' . $this->countResources('Logos', 'LGO', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="UiMenuLogos">Logos</div></li>';
				
				//Verifica se tem algum em features
				if($this->countResourcesTotal('Features', 'FTE', $useResultCount) > 0)
					$html .= '<li><a class="useMenuFeatures" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/fte">' . $this->countResources('Features', 'FTE', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="UiMenuFeatures">Features</div></li>';
				
				//Verifica se tem algum em flashes
				if($this->countResourcesTotal('Flash', 'FLA', $useResultCount) > 0)
					$html .= '<li><a class="useMenuFlash" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/fla">' . $this->countResources('Flash', 'FLA', $useResultCount) .'</a></li>';
				else	
					$html .= '<li><div class="UiMenuFlash">Flash</div></li>';
				
				//Verifica se tem algum em html	
				if($this->countResourcesTotal('HTML', 'HTM', $useResultCount) > 0)	
					$html .= '<li><a class="useMenuHTML" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/htm">' . $this->countResources('HTML', 'HTM', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="UiMenuHTML">HTML</div></li>';
					
				//Verifica se tem algum em psd	
				if($this->countResourcesTotal('PSD', 'PSD', $useResultCount) > 0)	
					$html .= '<li><a class="useMenuPSD" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/psd">' . $this->countResources('PSD', 'PSD', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="UiMenuPSD">PSD</div></li>';
				
				//Verifica se tem algum em pdf
				if($this->countResourcesTotal('PDF', 'PDF', $useResultCount) > 0)
					$html .= '<li><a class="useMenuPDF" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/pdf">' . $this->countResources('PDF', 'PDF', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="UiMenuPDF">PDF</div></li>';
				
				//Verifica se tem algum em outros
				if($this->countResourcesTotal('Outros', 'OUT', $useResultCount) > 0)
					$html .= '<li><a class="useMenuOther" title="" href="'. $this->baseUrl .'/contentshow/'. $productId .'/out">' . $this->countResources('Outros', 'OUT', $useResultCount) .'</a></li>';
				else
					$html .= '<li><div class="UiMenuOther">Outros</div></li>';
				
				$html .= '</ul>
							<div class="useClear"></div>
						</div>
				</div>';
		return $html;
	}

	//----------------------------------
    //  menuDock
    //----------------------------------
    /**
     * Prepara o html do menu dock.
     *
     * @param $params
     */		
	public function menuDock($arCategory, $userInfo, $useDefault)
    {
    	//Configura os titulos das categorias
    	$arGroupsTitle = array();
		
		//Recupera os titulos das categorias que o usuário tem permissão
		foreach ($userInfo->register_has_register_groups as $itemGroup) 
		{
			$arGroupsTitle[$itemGroup->title] = $itemGroup;
		}
		
		//Estrutura inicial do html
		$html = '<table style="margin:auto;" border="0" cellspacing="15" cellpadding="0">
			<tr>
			<td>
				<a id="menuInstitucional" href="'. $useDefault->baseUrl .'/lg" title="Saiba mais sobre o Portal Parceiros LG."><img alt="" width="100" src="'. $useDefault->images .'/menudock/btInstitucional.gif"/></a>
			</td>'."\n";
		
		//Monta a estrutura html do menu
		foreach ($arCategory as $item) 
		{
			switch ($item) 
			{
			    case 'Informática':
					//Verifica se o usuario tem permissao
					if(isset($arGroupsTitle[$item]))
					{
						/*
						//Realiza consulta na tabela de produtos de acordo com o termo informado
				    	$useResultRecentResources = $this->useDB('SELECT')
							                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
							            		      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
							            		      ->fields(array('total' => 'count(*)'))
													  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id')
											  		  ->where("USE_LG_RESOURCES.is_active = ? ", "1")
											  		  ->where("USE_LG_PRODUCTS.category_id = ? ", $arGroupsTitle[$item]->register_groups_id)
											  		  ->where("USE_LG_RESOURCES.changed_in > ?", $userInfo->last_login)
							            		      ->fetch('Row');
						
						if(!empty($useResultRecentResources) && $useResultRecentResources->total > 0)
						{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/informatica/recent" title="Informática"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btInformatica.gif"/><div style="float:right;">('. $useResultRecentResources->total .')</div></a>
								      </td>'."\n";
						}
						else{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/informatica" title="Informática"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btInformatica.gif"/></a>
									  </td>'."\n";
						}
						*/
						
						$html .= '<td>
									<a href="'. $useDefault->baseUrl .'/content/informatica" title="Informática"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btInformatica.gif"/></a>
								  </td>'."\n";
					}
					else{
						$html .= '<td>
									<a style="cursor: default" href="#" title="Informática"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btInformaticaOff.gif"/></a>
								  </td>'."\n";
					}
		       	break;
					
			    case 'Celular':
					//Verifica se o usuario tem permissao
					if(isset($arGroupsTitle[$item]))
					{
						/*
						//Realiza consulta na tabela de produtos de acordo com o termo informado
				    	$useResultRecentResources = $this->useDB('SELECT')
							                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
							            		      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
							            		      ->fields(array('total' => 'count(*)'))
													  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id')
											  		  ->where("USE_LG_RESOURCES.is_active = ? ", "1")
											  		  ->where("USE_LG_PRODUCTS.category_id = ? ", $arGroupsTitle[$item]->register_groups_id)
											  		  ->where("USE_LG_RESOURCES.changed_in > ?", $userInfo->last_login)
							            		      ->fetch('Row');
						
						if(!empty($useResultRecentResources) && $useResultRecentResources->total > 0)
						{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/celular/recent" title="Celulares"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btCelulares.gif"/><div style="float:right;">('. $useResultRecentResources->total .')</div></a>
								      </td>'."\n";
						}
						else{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/celular" title="Celulares"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btCelulares.gif"/></a>
									  </td>'."\n";
						}
						*/

						$html .= '<td>
									<a href="'. $useDefault->baseUrl .'/content/celular" title="Celulares"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btCelulares.gif"/></a>
								  </td>'."\n";
						
					}
					else{
						$html .= '<td>
									<a style="cursor: default" href="#" title="Celulares"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btCelularesOff.gif"/></a>
								  </td>'."\n";
					}
		       	break;
				
			    case 'Áudio e Vídeo':
					
					//Verifica se o usuario tem permissao
					if(isset($arGroupsTitle[$item]))
					{
						/*
						//Realiza consulta na tabela de produtos de acordo com o termo informado
				    	$useResultRecentResources = $this->useDB('SELECT')
							                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
							            		      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
							            		      ->fields(array('total' => 'count(*)'))
													  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id')
											  		  ->where("USE_LG_RESOURCES.is_active = ? ", "1")
											  		  ->where("USE_LG_PRODUCTS.category_id = ? ", $arGroupsTitle[$item]->register_groups_id)
											  		  ->where("USE_LG_RESOURCES.changed_in > ?", $userInfo->last_login)
							            		      ->fetch('Row');
						
						if(!empty($useResultRecentResources) && $useResultRecentResources->total > 0)
						{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/audio-e-video/recent" title="Áudio e Vídeos"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btAudioEVideo.gif"/><div style="float:right;">('. $useResultRecentResources->total .')</div></a>
								      </td>'."\n";
						}
						else{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/audio-e-video" title="Áudio e Vídeos"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btAudioEVideo.gif"/></a>
									  </td>'."\n";
						}
						*/

						$html .= '<td>
									<a href="'. $useDefault->baseUrl .'/content/audio-e-video" title="Áudio e Vídeos"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btAudioEVideo.gif"/></a>
								  </td>'."\n";

					}
					else{
						$html .= '<td>
									<a style="cursor: default" href="#" title="Áudio e Vídeos"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btAudioEVideoOff.gif"/></a>
								  </td>'."\n";
					}
		       	break;

			    case 'Ar Condicionado':
					
					//Verifica se o usuario tem permissao
					if(isset($arGroupsTitle[$item]))
					{
						/*
						//Realiza consulta na tabela de produtos de acordo com o termo informado
				    	$useResultRecentResources = $this->useDB('SELECT')
							                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
							            		      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
							            		      ->fields(array('total' => 'count(*)'))
													  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id')
											  		  ->where("USE_LG_RESOURCES.is_active = ? ", "1")
											  		  ->where("USE_LG_PRODUCTS.category_id = ? ", $arGroupsTitle[$item]->register_groups_id)
											  		  ->where("USE_LG_RESOURCES.changed_in > ?", $userInfo->last_login)
							            		      ->fetch('Row');
						
						if(!empty($useResultRecentResources) && $useResultRecentResources->total > 0)
						{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/ar-condicionado/recent" title="Condicionadores de Ar"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btCondicionadoresDeAr.gif"/><div style="float:right;">('. $useResultRecentResources->total .')</div></a>
								      </td>'."\n";
						}
						else{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/ar-condicionado" title="Condicionadores de Ar"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btCondicionadoresDeAr.gif"/></a>
									  </td>'."\n";
						}
						*/

						$html .= '<td>
									<a href="'. $useDefault->baseUrl .'/content/ar-condicionado" title="Condicionadores de Ar"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btCondicionadoresDeAr.gif"/></a>
								  </td>'."\n";
						
					}
					else{
						$html .= '<td>
									<a style="cursor: default" href="#" title="Condicionadores de Ar"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btCondicionadoresDeArOff.gif"/></a>
								  </td>'."\n";
					}
					
		       	break;

			    case 'Eletrodoméstico':
					
					//Verifica se o usuario tem permissao
					if(isset($arGroupsTitle[$item]))
					{
						/*
						//Realiza consulta na tabela de produtos de acordo com o termo informado
				    	$useResultRecentResources = $this->useDB('SELECT')
							                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
							            		      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
							            		      ->fields(array('total' => 'count(*)'))
													  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id')
											  		  ->where("USE_LG_RESOURCES.is_active = ? ", "1")
											  		  ->where("USE_LG_PRODUCTS.category_id = ? ", $arGroupsTitle[$item]->register_groups_id)
											  		  ->where("USE_LG_RESOURCES.changed_in > ?", $userInfo->last_login)
							            		      ->fetch('Row');
								  
						if(!empty($useResultRecentResources) && $useResultRecentResources->total > 0)
						{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/eletrodomestico/recent" title="Eletrodomésticos"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btEletrodomesticos.gif"/><div style="float:right;">('. $useResultRecentResources->total .')</div></a>
								      </td>'."\n";
						}
						else{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/eletrodomestico" title="Eletrodomésticos"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btEletrodomesticos.gif"/></a>
									  </td>'."\n";
						}
						*/

						$html .= '<td>
									<a href="'. $useDefault->baseUrl .'/content/eletrodomestico" title="Eletrodomésticos"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btEletrodomesticos.gif"/></a>
								  </td>'."\n";
					}
					else{
						$html .= '<td>
									<a style="cursor: default" href="#" title="Eletrodomésticos"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btEletrodomesticosOff.gif"/></a>
								  </td>'."\n";
					}
					
		       	break;

				case 'Televisor':
					
					//Verifica se o usuario tem permissao
					if(isset($arGroupsTitle[$item]))
					{
						/*	
						//Realiza consulta na tabela de produtos de acordo com o termo informado
				    	$useResultRecentResources = $this->useDB('SELECT')
							                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
							            		      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
							            		      ->fields(array('total' => 'count(*)'))
													  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id')
											  		  ->where("USE_LG_RESOURCES.is_active = ? ", "1")
											  		  ->where("USE_LG_PRODUCTS.category_id = ? ", $arGroupsTitle[$item]->register_groups_id)
											  		  ->where("USE_LG_RESOURCES.changed_in > ?", $userInfo->last_login)
							            		      ->fetch('Row');

						if(!empty($useResultRecentResources) && $useResultRecentResources->total > 0)
						{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/televisor/recent" title="Televisores"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btTelevisores.gif"/><div style="float:right;">('. $useResultRecentResources->total .')</div></a>
								      </td>'."\n";
						}
						else{
							$html .= '<td>
										<a href="'. $useDefault->baseUrl .'/content/televisor" title="Televisores"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btTelevisores.gif"/></a>
									  </td>'."\n";
						}
						*/
						
						$html .= '<td>
									<a href="'. $useDefault->baseUrl .'/content/televisor" title="Televisores"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btTelevisores.gif"/></a>
								  </td>'."\n";
					}
					else{
						$html .= '<td>
									<a style="cursor: default" href="#" title="Televisores"><img alt="" width="100" src="'. $useDefault->images .'/menudock/btTelevisoresOff.gif"/></a>
								  </td>'."\n";
					}

		       	break;
			}
		}

		$html .= '</tr>
				  </table>'."\n";

		return $html;
	}

	//----------------------------------
    //  showLastContent
    //----------------------------------
    /**
     * Prepara o html dos ultimos conteudos visualizados
     *
     * @param $params
     */		
	public function showLastContent($showLastContent, $useDefault)
    {
    	//Verifica se recebeu algum item para ser mostrado
    	if(empty($showLastContent)) return;
		
		$html = '<div class="usePageTitle">
					<h3>Últimos visualizados</h3>';
		
		//Prepara tabela
    	$html .= '<table border="0" cellspacing="10" cellpadding="0" style="margin-top:10px;">
					<tr>';
		
		foreach($showLastContent as $itemLastContent)
		{
			switch ($itemLastContent->resource_type) {
				case 'IMG':
					$image = $useDefault->baseUrl . $itemLastContent->folderpath .'/mini/'. $itemLastContent->filename;
					break;
					
				case 'EST':
					$image = $useDefault->images .'/icons50/iconesEspTecnicas50x50.png';
					break;

				case 'MNL':
					$image = $useDefault->images .'/icons50/iconesManualInst50x50.png';
					break;

				case 'LGO':
					$image = $useDefault->images .'/icons50/iconesLogos50x50.png';
					break;
					
				case 'VDO':
					$image = $useDefault->images .'/icons50/iconesVideos50x50.png';
					break;

				case 'FTE':
					$image = $useDefault->images .'/icons50/iconesFeatures50x50.png';
					break;

				case 'FLA':
					$image = $useDefault->images .'/icons50/iconesFlash50x50.png';
					break;
					
				case 'HTM':
					$image = $useDefault->images .'/icons50/iconesHTML50x50.png';
					break;
					
				case 'PSD':
					$image = $useDefault->images .'/icons50/iconesPSD50x50.png';
					break;
					
				case 'PDF':
					$image = $useDefault->images .'/icons50/iconesPDF50x50.png';
					break;
					
				case 'OUT':
					$image = $useDefault->images .'/icons50/iconesOutros50x50.png';
					break;
			}
			
			$html .= '<td align="center" valign="middle" style="border:1px solid #CCC; background:#FFFFFF; width:60px; height:60px">
						<a title="'. $itemLastContent->title .'" href="'. $useDefault->baseUrl .'/contentshow/'. $itemLastContent->lg_products_id .'/'. $itemLastContent->lg_resources_id .'/'. strtolower($itemLastContent->resource_type) .'">
							<img alt="" src="'. $image .'"/>
						</a>
					  </td>';
		}
		
		$html .= '</tr>
				  </table></div>';
				  
		return $html;		  
	}
	
	//----------------------------------
    //  searchProduct
    //----------------------------------
    /**
     * Prepara o html da busca do produto.
     *
     * @param $params
     */		
	public function searchProduct($useResultProducts, $baseUrl, $params, $totalItens)
    {
    	$html = '<div class="UiDownload">
					<table style="width:100%; padding: 0px; border: none;">
						<tr>
							<td>
								<h2>Produtos</h2>
							</td>';
				  $html .= '<td>Total encontrados: '. $totalItens .'</td>';
				  $html .= '<td><span class="UiDisable">Produtos</span> | <a href="'.$baseUrl.'/procurar/?por='. $params->por .'">Conteúdos</a></td>';
		
			  $html .= '</tr></table>';
					
		foreach ($useResultProducts as $keyProducts => $itemProducts) 
		{
			//Realiza consulta na tabela de produtos de acordo com o termo informado
	    	$useResultProductsResources = $this->useDB('SELECT')
					                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
					            		       ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
					            		       ->fields(array('total' => 'count(*)', 'resource_type'))
										       ->where("USE_LG_RESOURCES.source_id = ?", $itemProducts->id)
									  		   ->where("USE_LG_RESOURCES.is_active = 1")
						   		   	  		   ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
											   ->group("USE_LG_RESOURCES.resource_type")
					            		       ->fetch('All');
			
			//Verifica se o produto possue conteudo
			if(empty($useResultProductsResources)) continue;
			 
			//Define os totais dos conteudos para zero
			$totalImage = 0;
			$totalEspecificacoesTecnicas = 0;
			$totalManualInstrucoes = 0;
			$totalLogo = 0;
			$totalVideo = 0;
			$totalFeatures = 0;
			$totalFlash = 0;
			$totalHtml = 0;
			$totalPsd = 0;
			$totalPdf = 0;
			$totalOuthers = 0;
			
			//Configura os totais dos conteudos
			foreach ($useResultProductsResources as $itemProductsResources) 
			{
				switch ($itemProductsResources->resource_type) 
				{
					case 'IMG':
						$totalImage = $itemProductsResources->total;
						break;

					case 'EST':
						$totalEspecificacoesTecnicas = $itemProductsResources->total;
						break;

					case 'MNL':
						$totalManualInstrucoes = $itemProductsResources->total;
						break;

					case 'LGO':
						$totalLogo = $itemProductsResources->total;
						break;
						
					case 'VDO':
						$totalVideo = $itemProductsResources->total;
						break;

					case 'FTE':
						$totalFeatures = $itemProductsResources->total;
						break;

					case 'FLA':
						$totalFlash = $itemProductsResources->total;
						break;
						
					case 'HTM':
						$totalHtml = $itemProductsResources->total;
						break;
						
					case 'PSD':
						$totalPsd = $itemProductsResources->total;
						break;
						
					case 'PDF':
						$totalPdf = $itemProductsResources->total;
						break;
						
					case 'OUT':
						$totalOuthers = $itemProductsResources->total;
						break;
				}
			}
			
			//Verifica se o indice é multiplo de 2 para mostra 
			//a listagem do tipo zebra
			if($keyProducts % 2 == 0)
			{
				$class 		= ' class="useColor"';
				$useColor 	= 'useColor';
			}
			else
			{
				$class 		= '';
				$useColor 	= '';
			}
			
			//Recupera o identificador da categoria
			$categoryId = $itemProducts->category_id;
			
			//Recupera o titulo da categoria
			switch ($categoryId) 
	    	{
				case '1':
						$categoryTitle 	= 'Televisor';
						$categoryPath 	= 'televisor';
					break;
					
				case '2':
						$categoryTitle = 'Aúdio e Vídeo';
						$categoryPath 	= 'audio-e-video';
					break;
					
				case '3':
						$categoryTitle = 'Celular';
						$categoryPath 	= 'celular';
					break;
					
				case '4':
						$categoryTitle = 'Informática';
						$categoryPath 	= 'informatica';
					break;
					
				case '5':
						$categoryTitle = 'Eletrodoméstico';
						$categoryPath 	= 'eletrodomestico';
					break;
					
				case '6':
						$categoryTitle = 'Ar-Condicionado';
						$categoryPath 	= 'ar-condicionado';
					break;
			}
			
			//Define a imagem default a ser mostrada
			$imageProduct = $baseUrl .'/public/resources/default/images/icons50/iconesImagem50x50.png';
			
			//Verifica se o produto tem imagem e então define a
			//imagem a ser mosgrada
			if(!empty($itemProducts->filename)) $imageProduct = $baseUrl . $itemProducts->folderpath . '/mini/'. $itemProducts->filename;
			
			//Prepara o html
			$html .= '<div class="'. $useColor .'">
						<table width="100%" border="0" cellspacing="5" cellpadding="0">
  								<tr>
    								<td style="padding:5px; background:#FFFFFF;">
    									<img width="50" alt="" src="'. $imageProduct .'"/>
    								</td>
    								<td>
    									<div class="UiTitle" style="padding-left:5px; width:200px; padding-bottom: 12px;">
											<span style="font-size: 11px;">
							    				<a title="" href="'. $baseUrl .'/content/'. $categoryPath .'">'. $categoryTitle .'</a>
							    			</span>
										</div>
    									<div class="UiTitle" style="padding-left:5px; width:250px;">
											<span style="font-size: 13px; font-weight: bold;">'. $itemProducts->title .'</span>
										</div>
    									<div class="UiTitle" style="padding-left:5px; width:250px;">
											<span class="UiCode">'. $itemProducts->code .'</span>
										</div>
									</td>
     								<td style="width:700px">';
	 
			$html .=	'<ul>';
						
						if($totalImage > 0)
							$html .= '<li'. $class .'>
								<a class="iframeDownload useMenuImages" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/img">
									Imagens ('. $totalImage .')
								</a>
							</li>';

						if($totalEspecificacoesTecnicas > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuImages" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/est">Esp. Tec. ('. $totalImage .')</a></li>';

						if($totalManualInstrucoes > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuImages" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/mnl">Manual ('. $totalImage .')</a></li>';
						
						if($totalLogo > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuLogos" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/lgo">Logos ('. $totalLogo .')</a></li>';
						
						if($totalVideo > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuVideos" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/vdo">Vídeos ('. $totalVideo .')</a></li>';

						if($totalFeatures > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuFeatures" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/fte">Features ('. $totalFeatures .')</a></li>';

						if($totalFlash > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuFlash" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/fla">Flash ('. $totalFlash .')</a></li>';

						if($totalHtml > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuHTML" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/htm">HTML ('. $totalHtml .')</a></li>';

						if($totalPsd > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuPSD" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/psd">PSD ('. $totalPsd .')</a></li>';

						if($totalPdf > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuPDF" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/pdf">PDF ('. $totalPdf .')</a></li>';

						if($totalOuthers > 0)
							$html .= '<li'. $class .'><a class="iframeDownload useMenuOther" title="" href="'. $baseUrl .'/contentlistsearch/'. $itemProducts->id .'/out">Outros ('. $totalOuthers .')</a></li>';
						
			$html .= '</ul>
									</td>
	  							</tr>
							</table>
					<div class="useClear"></div>
			</div>';
		}

		$html .= '</div>';

		return $html;
	}

	//----------------------------------
    //  searchResource
    //----------------------------------
    /**
     * Prepara o html da busca do produto.
     *
     * @param $params
     */		
	public function searchResource($useResultResources, $useDefault, $params, $totalItens)
    {
    	$html = '<div class="UiDownload">
					<table style="width:100%; padding: 0px; border: none;">
						<tr>
							<td>
								<h2>Conteúdos</h2>
							</td>';
				  $html .= '<td>Total encontrados: '. $totalItens .'</td>';
				  $html .= '<td><a href="'.$useDefault->baseUrl.'/procurar/?por='. $params->por .'&amp;type=product">Produtos</a> | <span class="UiDisable">Conteúdos</span></td>';
			  $html .= '</tr></table>';
						
		foreach ($useResultResources as $keyResources => $itemResources) 
		{
			if($keyResources % 2 == 0)
			{
				$class 		= ' class="useColor"';
				$useColor 	= 'useColor';
			}
			else
			{
				$class 		= '';
				$useColor 	= '';
			}
				    
			$html .= '<div class="'. $useColor .'">
						<table width="100%" border="0" cellspacing="5" cellpadding="0">
							<tr>
								<td valign="middle" align="center" style="background:#FFF; width:65px; height:65px; border:1px solid #ccc;">
									<a href="'. $useDefault->baseUrl .'/contentshow/'. $itemResources->source_id .'/'. $itemResources->id .'/img">';

				//Verifica se o tipo de recurso e mostra a imagem correspondente
				switch ($itemResources->resource_type) {
					case 'IMG':
						$html .= '<img alt="" src="'. $useDefault->baseUrl . $itemResources->folderpath .'/mini/'. $itemResources->filename .'"/>';
						break;

					case 'EST':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesEspTecnicas50x50.png"/>';
						break;

					case 'MNL':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesManualInst50x50.png"/>';
						break;
					
					case 'LGO':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesLogos50x50.png"/>';
						break;
						
					case 'VDO':
						//Verifica se tem imagem do video
						if(!empty($itemResources->image_video))
							$html .= '<img alt="" src="'. $itemResources->image_video .'"/>';
						else
							$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesVideos50x50.png"/>';
					break;

					case 'FTE':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesFeatures50x50.png"/>';
						break;

					case 'FLA':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesFlash50x50.png"/>';
						break;
						
					case 'HTM':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesHTML50x50.png"/>';
						break;
						
					case 'PSD':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesPSD50x50.png"/>';
						break;
						
					case 'PDF':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesPDF50x50.png"/>';
						break;
						
					case 'OUT':
						$html .= '<img alt="" src="'. $useDefault->images .'/icons50/iconesOutros50x50.png"/>';
						break;
				}


			
			//Recupera o identificador da categoria
			$categoryId = $itemResources->category_id;
			
			//Recupera o titulo da categoria
			switch ($categoryId) 
	    	{
				case '1':
						$categoryTitle 	= 'Televisor';
						$categoryPath 	= 'televisor';
					break;
					
				case '2':
						$categoryTitle = 'Aúdio e Vídeo';
						$categoryPath 	= 'audio-e-video';
					break;
					
				case '3':
						$categoryTitle = 'Celular';
						$categoryPath 	= 'celular';
					break;
					
				case '4':
						$categoryTitle = 'Informática';
						$categoryPath 	= 'informatica';
					break;
					
				case '5':
						$categoryTitle = 'Eletrodoméstico';
						$categoryPath 	= 'eletrodomestico';
					break;
					
				case '6':
						$categoryTitle = 'Ar-Condicionado';
						$categoryPath 	= 'ar-condicionado';
					break;
			}	

			//Pepara titulo do conteudo							
			$html .= '</a>
					  </td>
				      <td valign="top" style="width:300px; padding:5px;">
						<div class="UiTitle" style="padding-left:5px; width:200px; padding-bottom: 12px;">
							<span style="font-size: 11px;">
			    				<a title="" href="'. $useDefault->baseUrl .'/content/'. $categoryPath .'">'. $categoryTitle .'</a>
			    			</span>
						</div>
						<div class="UiTitle" style="padding-left:5px; width:200px;">
							<span style="font-size: 16px; font-weight: bold;">'. UseZF_Util::useTruncate($itemResources->title, 30) .'</span>
						</div>
				    	<div class="UiTitle" style="padding-left:5px; width:200px;">
							<span class="UiCode">'. $itemResources->code .'</span>
						</div>
			    	  </td>
					  <td valign="middle" style="width:400px; padding:5px;">';

						//Verifica se o resurco tem nome do arquivo
						if(!empty($itemResources->filename)){							
							$html .= '<div class="UiText">'. UseZF_Util::useTruncate($itemResources->filename, 30) .'</div>';
						}
			
						//Verifica se o resurco tem descrição
						if(!empty($itemResources->description)){							
							$html .= '<div class="UiText">'. $itemResources->description .'</div>';
						}

						$html .= '<div class="UiText">'. UseZF_Util::useFileSize($itemResources->filesize) .'</div>';
						
			
			$html .= '</td>
					  <td>
					  	<div class="UiText">
							<a href="'. $useDefault->baseUrl .'/contentshow/'. $itemResources->source_id .'/'. $itemResources->id .'/img">
								<img style="cursor:pointer;" alt="" src="'. $useDefault->images .'/bt/btVerDetalhes.png" />
							</a>
					    </div>
					  </td>
					  </tr></table></div>';
		}

		$html .= '</div>';
		
		return $html;
	}

	//----------------------------------
    //  listDownload
    //----------------------------------
    /**
     * Prepara o html da lista de downloads.
     *
     * @param $params
     */		
	public function listDownload($listDownload, $view)
    {
		$html = '<div id="UiContentList">
			<table  cellspacing="10" cellpadding="0" width="100%" border="0">';
			
			foreach ($listDownload as $itemDownload)
			{
				$html .='<tr>
							<td style="width: 100px;">
							<div class="UiItem">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
								  <tr>
								  	<!-- adiciona imagem -->
								    <td class="UiTableLeftColumn">
								    	<div class="UiImage">
										    <a href="'. $view->baseUrl .'/contentshow/'. $itemDownload->source_id .'/'. $itemDownload->id .'/'. strtolower($itemDownload->resource_type) .'">';
											
												switch ($itemDownload->resource_type) 
												{
													case 'IMG':
														$html .= '<img alt="" src="'. $view->baseUrl . $itemDownload->folderpath .'/thumb/'. $itemDownload->filename .'" />';	
													break;
													
													case 'VDO':
														if(!empty($itemDownload->image_video))
															$html .= '<img alt="" width="100" src="'. $itemDownload->image_video .'" />';
														else
															$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesVideos100x80.png" />';
													break;
													case 'EST':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesEspTecnicas100x80.png" />';
														break;
				
													case 'MNL':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesManualInst100x80.png" />';
														break;
													
													case 'LGO':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesLogos100x80.png" />';
														break;
														
													case 'FTE':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesFeatures100x80.png" />';
														break;
								
													case 'FLA':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesFlash100x80.png" />';
														break;
														
													case 'HTM':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesHTML100x80.png" />';
														break;
														
													case 'PSD':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesPSD100x80.png" />';
														break;
														
													case 'PDF':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesPDF100x80.png" />';
														break;
														
													case 'OUT':
														$html .= '<img alt="" width="100" src="'. $view->useDefault->images .'/icons100/iconesOutros100x80.png" />';
														break;
												}
									$html .= '</a>
										</div>
								    </td>
								     <td valign="top" class="UiTableRightColumn">
								     	<div class="UiHomeDetail UiAccordionItem">
									    	<div class="UiFormatAccordion">'. $itemDownload->format .'</div>
									    	<div class="useClear"></div>
											<div class="UiText">'. UseZF_Util::useFileSize($itemDownload->filesize) .'</div>
								     	</div>
								    </td>
								  </tr>
								  <tr>
								    <td colspan="2">
										<div class="UiResourceTitle">
											<a href="'. $view->baseUrl .'/contentshow/'. $itemDownload->source_id .'/'. $itemDownload->id .'/'. strtolower($itemDownload->resource_type) .'">
												'. UseZF_Util::useTruncate($itemDownload->title, 40) .'
											</a>	
										</div>	
								    </td>
								  </tr>
								  <tr>
								    <td colspan="2">
										<table border="0" cellspacing="0" cellpadding="0">
											<tr>';
												
												if(!empty($itemDownload->total_rating_votes))
												{
													$html .= '<td>
																<a href="'. $view->baseUrl .'/contentshow/'. $itemDownload->source_id .'/'. $itemDownload->id .'/'. strtolower($itemDownload->resource_type) .'">
																	<span class="iconHomeStar">&nbsp;</span>
																	<span class="iconText">'. round($itemDownload->total_rating/$itemDownload->total_rating_votes) .'</span>
																</a>
															</td>';
												}else{
													$html .= '<td>
																<a href="'. $view->baseUrl .'/contentshow/'. $itemDownload->source_id .'/'. $itemDownload->id .'/'. strtolower($itemDownload->resource_type) .'">
																	<span class="iconHomeStar">&nbsp;</span>
																	<span class="iconText">0</span>
																</a>
															</td>';
												}
												
												$html .= '<td>
															<a href="'. $view->baseUrl .'/contentshow/'. $itemDownload->source_id .'/'. $itemDownload->id .'/'. strtolower($itemDownload->resource_type) .'">
																<span class="iconHomeDownload">&nbsp;</span>
																<span class="iconText">'. $itemDownload->total_download .'</span>
															</a>
														</td>
														<td>
															<a href="'. $view->baseUrl .'/contentshow/'. $itemDownload->source_id .'/'. $itemDownload->id .'/'. strtolower($itemDownload->resource_type) .'">
																<span class="iconHomeView">&nbsp;</span>
																<span class="iconText">
																	'. $itemDownload->total_view .'
																</span>
															</a>																
														</td>
													</tr>
												</table> 	
										    </td>
										  </tr>
										</table>
									</div>
								</td>
								<td valign="top">
									<span style="color: #57585b; font-weight: bold;">Download realizado por:</span>';
										foreach ($itemDownload->listDownloadRegister as $itemDownloadRegister)
										{
											$html .= '<div class="useTitle">'. $itemDownloadRegister->name .'</div>';					
										}
										
									$html .='</td>
											<td valign="bottom" style="width: 340px;">
												<img style="cursor:pointer;" alt="" src="'. $view->useDefault->images .'/bt/btRemover.png" onclick="removeDownload(\''. $itemDownload->download_id .'\');"/>
												<img style="cursor:pointer;" alt="" src="'. $view->useDefault->images .'/bt/btBaixarAgora.png" onclick="downloadFile(\''. $itemDownload->folderpath .'\', \''. $itemDownload->filename .'\', \''. $itemDownload->download_id .'\', \''. $itemDownload->has_image_high .'\');"/>
												<a href="'. $view->baseUrl .'/contentshow/'. $itemDownload->source_id .'/'. $itemDownload->id .'/'. strtolower($itemDownload->resource_type) .'">
													<img style="cursor:pointer;" alt="" src="'. $view->useDefault->images .'/bt/btVerDetalhes.png" />
												</a>
											</td>
										</tr>
										<tr>
											<td valign="top" colspan="3">
												<img alt="" src="'. $view->useDefault->images .'/divider/linhaDivisaoSubTitle.png" />
											</td>
										</tr>';
					}

					$html .='</table>
									<div class="useClear"></div>
								</div>
								<div class="useClear"></div>';
		return $html;
	}
} 
?>