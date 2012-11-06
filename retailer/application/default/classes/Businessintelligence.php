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
	/*public function dashboard($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> categoryReport = $this -> topCategory($params);
		return $dataResult;
	}*/

	//----------------------------------
	//  dashboardTotalDownloadPerUser
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de download de recursos.
	 *
	 * @param $params
	 */
	public function dashboardTotalDownloadPerUser($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDateDownload($params);
		$dataResult -> minDate = $this -> minDateDownload($params);
		$dataResult -> downloadPerUserReport = $this -> totalDownloadPerUser($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalDownloadUser
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de download de recursos.
	 *
	 * @param $params
	 */
	public function dashboardTotalDownloadUser($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDateDownload($params);
		$dataResult -> minDate = $this -> minDateDownload($params);
		$dataResult -> downloadUserReport = $this -> totalDownloadUser($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalDownload
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de download de recursos.
	 *
	 * @param $params
	 */
	public function dashboardTotalDownloadByUser($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDateDownload($params);
		$dataResult -> minDate = $this -> minDateDownload($params);
		$dataResult -> downloadByUserReport = $this -> totalDownloadByUser($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalDownload
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de download de recursos.
	 *
	 * @param $params
	 */
	public function dashboardTotalDownloadBy($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDateDownload($params);
		$dataResult -> minDate = $this -> minDateDownload($params);
		$dataResult -> downloadByReport = $this -> totalDownloadBy($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalAccess
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de acesso a páginas.
	 *
	 * @param $params
	 */
	public function dashboardTotalAccess($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> pageRetailerReport = $this -> totalPageRetailer($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalAccess
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de acesso a páginas.
	 *
	 * @param $params
	 */
	public function dashboardTotalUserAccess($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> pageUserReport = $this -> totalPageUser($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalInteractionMonth
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de interações realizadas em um determinado período
	 * (Mês, dia do mês, semana).
	 *
	 * @param $params
	 */
	public function dashboardTotalInteractionMonth($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> monthReport = $this -> topMonth($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalInteractionMonthDay
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de interações realizadas em um determinado período
	 * (Mês, dia do mês, semana).
	 *
	 * @param $params
	 */
	public function dashboardTotalInteractionMonthDay($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> monthDayReport = $this -> topMonthDay($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalInteractionWeekDay
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de interações realizadas em um determinado período
	 * (Mês, dia do mês, semana).
	 *
	 * @param $params
	 */
	public function dashboardTotalInteractionWeekDay($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> weekDayReport = $this -> topWeekDay($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTotalInteractionPeriod
	//----------------------------------
	/**
	 * Realiza consultas referentes ao total de interações realizadas em um determinado período
	 * (Mês, dia do mês, semana).
	 *
	 * @param $params
	 */
	public function dashboardTotalInteractionPeriod($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> periodReport = $this -> topPeriod($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTopResource
	//----------------------------------
	/**
	 * Realiza consultas referentes ao recurso (e seu tipo) que mais teve interações.
	 *
	 * @param $params
	 */
	public function dashboardTopResource($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDateDownload($params);
		$dataResult -> minDate = $this -> minDateDownload($params);
		$dataResult -> resourceReport = $this -> topResource($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTopResourceType
	//----------------------------------
	/**
	 * Realiza consultas referentes ao recurso (e seu tipo) que mais teve interações.
	 *
	 * @param $params
	 */
	public function dashboardTopResourceType($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDateDownload($params);
		$dataResult -> minDate = $this -> minDateDownload($params);
		$dataResult -> resourceTypeReport = $this -> topResourceType($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardTopResourceDownload
	//----------------------------------
	/**
	 * Realiza consultas referentes ao recurso (e seu tipo) que mais teve interações.
	 *
	 * @param $params
	 */
	public function dashboardTopResourceDownload($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDateDownload($params);
		$dataResult -> minDate = $this -> minDateDownload($params);
		$dataResult -> downloadReport = $this -> totalDownload($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardUser
	//----------------------------------
	/**
	 * Realiza consultas referentes ao usuário.
	 *
	 * @param $params
	 */
	public function dashboardUser($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDateRegister($params);
		$dataResult -> minDate = $this -> minDateRegister($params);
		//$dataResult -> topUsersReport = $this -> topUsers($params);
		$dataResult -> userReport = $this -> totalUsers($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardUserInteraction
	//----------------------------------
	/**
	 * Realiza consultas referentes ao usuário.
	 *
	 * @param $params
	 */
	public function dashboardUserInteraction($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		//$dataResult -> topUsersReport = $this -> topUsers($params);
		$dataResult -> interactionsReport = $this -> totalInteractions($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardPage
	//----------------------------------
	/**
	 * Realiza consultas referentes a páginas.
	 *
	 * @param $params
	 */
	public function dashboardTopPage($params) {
		$dataResult = useObject();
		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> pageReport = $this -> topPage($params);
		return $dataResult;
	}

	//----------------------------------
	//  dashboardPage
	//----------------------------------
	/**
	 * Realiza consultas referentes a páginas.
	 *
	 * @param $params
	 */
	public function dashboardTotalTime($params) {
		$dataResult = useObject();

		$this -> useDB('UPDATE') -> exec("UPDATE lg_analytcs SET difference = TIMEDIFF(url_active_created_in, url_referer_created_in)");

		$dataResult -> maxDate = $this -> maxDate($params);
		$dataResult -> minDate = $this -> minDate($params);
		$dataResult -> timeReport = $this -> totalTime($params);
		return $dataResult;
	}

	//----------------------------------
	//  topCategory
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	/*private function topCategory($params) {
		pe('oioioi');
		//Remove todas as folgas do promotor no mês
		$categoryProduct = $this -> useDB('CATEGORY_PRODUCT') -> queryString("SELECT register_groups.title, COUNT(lg_products.id) AS total_product FROM lg_products INNER JOIN register_groups ON lg_products.category_id = register_groups.id GROUP BY lg_products.category_id ORDER BY total_product DESC");
		$categoryResource = $this -> useDB('CATEGORY_RESOURCE') -> queryString("SELECT register_groups.title, COUNT(lg_resources.id) AS total_resource FROM lg_resources INNER JOIN lg_products ON lg_resources.source_id = lg_products.id INNER JOIN register_groups ON lg_products.category_id = register_groups.id GROUP BY lg_products.category_id ORDER BY total_resource DESC");
		$categoryDownload = $this -> useDB('CATEGORY_DOWNLOAD') -> queryString("SELECT lg_products.category_id, register_groups.title, COUNT(*) AS total_download FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id INNER JOIN register_groups ON lg_products.category_id = register_groups.id GROUP BY lg_products.category_id ORDER BY total_download DESC");

		$category = array_merge($categoryProduct, $categoryResource, $categoryDownload);

		$arProduct = $categoryProduct;
		$arResource = $categoryResource;
		$arDownload = $categoryDownload;
		$arCategory = array();

		//Recupera os nomes das categorias
		foreach ($arResource as $item) {
			$arCategory[]['title'] = $item['title'];
		}

		//Adiciona os totais de produtos, recursos e download
		for ($i = 0; $i < count($arCategory); $i++) {
			//Adiciona os totais de produtos
			foreach ($arProduct as $itemProduct) {
				if ($arCategory[$i]['title'] == $itemProduct['title'])
					$arCategory[$i]['total_product'] = $itemProduct['total_product'];
			}

			//Adiciona os totais de recursos
			foreach ($arResource as $itemResource) {
				if ($arCategory[$i]['title'] == $itemResource['title'])
					$arCategory[$i]['total_resource'] = $itemResource['total_resource'];
			}

			//Adiciona os totais de downloads
			foreach ($arDownload as $itemDownload) {
				if ($arCategory[$i]['title'] == $itemDownload['title'])
					$arCategory[$i]['total_download'] = $itemDownload['total_download'];
			}
		}

		return $arCategory;
	}*/

	//----------------------------------
	//  topPeriod
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function topPeriod($params) {
		//Remove todas as folgas do promotor no mês
		return $this -> useDB('TOP_PERIOD') -> queryString("SELECT session_period, COUNT(*) AS total FROM lg_analytcs GROUP BY session_period");
	}

	//----------------------------------
	//  topMonth
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function topMonth($params) {
		//Remove todas as folgas do promotor no mês
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			$monthInteraction = $this -> useDB('MONTH_INTERACTION') -> queryString("SELECT session_monthday AS month, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY session_monthday ORDER BY total_interaction DESC");
			$monthDownload = $this -> useDB('MONTH_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%m') AS month, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY month");
		} elseif ($params -> dateStart) {
			$monthInteraction = $this -> useDB('MONTH_INTERACTION') -> queryString("SELECT session_monthday AS month, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY session_monthday ORDER BY total_interaction DESC");
			$monthDownload = $this -> useDB('MONTH_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%m') AS month, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.created_in >= '" . $params -> dateStart . "' GROUP BY month");
		} elseif ($params -> dateFinish) {
			$monthInteraction = $this -> useDB('MONTH_INTERACTION') -> queryString("SELECT session_monthday AS month, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY session_monthday ORDER BY total_interaction DESC");
			$monthDownload = $this -> useDB('MONTH_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%m') AS month, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.created_in >= '" . $params -> dateFinish . "' GROUP BY month");
		} else {
			$monthInteraction = $this -> useDB('MONTH_INTERACTION') -> queryString("SELECT session_monthday AS month, COUNT(*) AS total_interaction FROM lg_analytcs GROUP BY session_monthday ORDER BY total_interaction DESC");
			$monthDownload = $this -> useDB('MONTH_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%m') AS month, COUNT(*) AS total_download FROM lg_downloads_complete GROUP BY month");
		}

		$arInteraction = $monthInteraction;
		$arDownload = array();
		//Adiciona os totais de produtos
		foreach ($monthDownload as $item) {
			$item['month'] = intval($item['month']);
			$arDownload[] = $item;
		}
		$month = array_merge_recursive($monthInteraction, $arDownload);
		$arMonth = array( array('month' => 1, 'total_download' => 0), array('month' => 2, 'total_download' => 0), array('month' => 3, 'total_download' => 0), array('month' => 4, 'total_download' => 0), array('month' => 5, 'total_download' => 0), array('month' => 6, 'total_download' => 0), array('month' => 7, 'total_download' => 0), array('month' => 8, 'total_download' => 0), array('month' => 9, 'total_download' => 0), array('month' => 10, 'total_download' => 0), array('month' => 11, 'total_download' => 0), array('month' => 12, 'total_download' => 0));

		$arMonthTemp = array();
		//Adiciona os totais de produtos, recursos e download
		for ($i = 0; $i < count($arMonth); $i++) {
			//Adiciona o total de download
			foreach ($arDownload as $itemDownload) {
				if ($arMonth[$i]['month'] == $itemDownload['month']) {
					$arMonth[$i]['total_download'] = $itemDownload['total_download'];
					break;
				}
			}

			//Adiciona o total de interação
			foreach ($arInteraction as $itemInteraction) {
				if ($arMonth[$i]['month'] == $itemInteraction['month']) {
					$arMonth[$i]['total_interaction'] = $itemInteraction['total_interaction'];
					$arMonthTemp[] = $arMonth[$i];
					break;
				}
			}
		}
		return $arMonthTemp;
	}

	//----------------------------------
	//  topMonthDay
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function topMonthDay($params) {
		//Remove todas as folgas do promotor no mês
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			$monthDayInteraction = $this -> useDB('DAY_INTERACTION') -> queryString("SELECT session_month AS day, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY session_month ORDER BY total_interaction DESC");
			$monthDayDownload = $this -> useDB('DAY_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%d') AS day, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY day");
		} elseif ($params -> dateStart) {
			$monthDayInteraction = $this -> useDB('DAY_INTERACTION') -> queryString("SELECT session_month AS day, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY session_month ORDER BY total_interaction DESC");
			$monthDayDownload = $this -> useDB('DAY_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%d') AS day, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.created_in >= '" . $params -> dateStart . "' GROUP BY day");
		} elseif ($params -> dateFinish) {
			$monthDayInteraction = $this -> useDB('DAY_INTERACTION') -> queryString("SELECT session_month AS day, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY session_month ORDER BY total_interaction DESC");
			$monthDayDownload = $this -> useDB('DAY_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%d') AS day, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.created_in <= '" . $params -> dateFinish . "' GROUP BY day");
		} else {
			$monthDayInteraction = $this -> useDB('DAY_INTERACTION') -> queryString("SELECT session_month AS day, COUNT(*) AS total_interaction FROM lg_analytcs GROUP BY session_month ORDER BY total_interaction DESC");
			$monthDayDownload = $this -> useDB('DAY_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%d') AS day, COUNT(*) AS total_download FROM lg_downloads_complete GROUP BY day");
		}

		$arInteraction = $monthDayInteraction;
		$arDownload = array();
		//Adiciona os totais de produtos
		foreach ($monthDayDownload as $item) {
			$item['day'] = intval($item['day']);
			$arDownload[] = $item;
		}
		$month = array_merge($arInteraction, $arDownload);
		$arDay = array( array('day' => 1, 'total_download' => 0), array('day' => 2, 'total_download' => 0), array('day' => 3, 'total_download' => 0), array('day' => 4, 'total_download' => 0), array('day' => 5, 'total_download' => 0), array('day' => 6, 'total_download' => 0), array('day' => 7, 'total_download' => 0), array('day' => 8, 'total_download' => 0), array('day' => 9, 'total_download' => 0), array('day' => 10, 'total_download' => 0), array('day' => 11, 'total_download' => 0), array('day' => 12, 'total_download' => 0), array('day' => 13, 'total_download' => 0), array('day' => 14, 'total_download' => 0), array('day' => 15, 'total_download' => 0), array('day' => 16, 'total_download' => 0), array('day' => 17, 'total_download' => 0), array('day' => 18, 'total_download' => 0), array('day' => 19, 'total_download' => 0), array('day' => 20, 'total_download' => 0), array('day' => 21, 'total_download' => 0), array('day' => 22, 'total_download' => 0), array('day' => 23, 'total_download' => 0), array('day' => 24, 'total_download' => 0), array('day' => 25, 'total_download' => 0), array('day' => 26, 'total_download' => 0), array('day' => 27, 'total_download' => 0), array('day' => 28, 'total_download' => 0), array('day' => 29, 'total_download' => 0), array('day' => 30, 'total_download' => 0), array('day' => 31, 'total_download' => 0));

		$arDayTemp = array();
		//Adiciona os totais de produtos, recursos e download
		for ($i = 0; $i < count($arDay); $i++) {
			//Adiciona o total de download
			foreach ($arDownload as $itemDownload) {
				if ($arDay[$i]['day'] == $itemDownload['day']) {
					$arDay[$i]['total_download'] = $itemDownload['total_download'];
					break;
				}
			}

			//Adiciona o total de interação
			foreach ($arInteraction as $itemInteraction) {
				if ($arDay[$i]['day'] == $itemInteraction['day']) {
					$arDay[$i]['total_interaction'] = $itemInteraction['total_interaction'];
					$arDayTemp[] = $arDay[$i];
					break;
				}
			}
		}
		return $arDayTemp;
	}

	//----------------------------------
	//  topWeekDay
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function topWeekDay($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			$weekDayInteraction = $this -> useDB('WEEK_INTERACTION') -> queryString("SELECT session_weekday AS week_day, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY session_weekday ORDER BY total_interaction DESC");
			$weekDayDownload = $this -> useDB('WEEK_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%w') AS week_day, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY week_day");
		} elseif ($params -> dateStart) {
			$weekDayInteraction = $this -> useDB('WEEK_INTERACTION') -> queryString("SELECT session_weekday AS week_day, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY session_weekday ORDER BY total_interaction DESC");
			$weekDayDownload = $this -> useDB('WEEK_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%w') AS week_day, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.lg_downloads_complete >= '" . $params -> dateStart . "' GROUP BY week_day");
		} elseif ($params -> dateFinish) {
			$weekDayInteraction = $this -> useDB('WEEK_INTERACTION') -> queryString("SELECT session_weekday AS week_day, COUNT(*) AS total_interaction FROM lg_analytcs WHERE lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY session_weekday ORDER BY total_interaction DESC");
			$weekDayDownload = $this -> useDB('WEEK_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%w') AS week_day, COUNT(*) AS total_download FROM lg_downloads_complete WHERE lg_downloads_complete.lg_downloads_complete <= '" . $params -> lg_downloads_complete . "' GROUP BY week_day");
		} else {
			$weekDayInteraction = $this -> useDB('WEEK_INTERACTION') -> queryString("SELECT session_weekday AS week_day, COUNT(*) AS total_interaction FROM lg_analytcs GROUP BY session_weekday ORDER BY total_interaction DESC");
			$weekDayDownload = $this -> useDB('WEEK_DOWNLOAD') -> queryString("SELECT DATE_FORMAT(created_in, '%w') AS week_day, COUNT(*) AS total_download FROM lg_downloads_complete GROUP BY week_day");
		}

		$arInteraction = $weekDayInteraction;
		$arDownload = array();
		//Adiciona os totais de produtos
		foreach ($weekDayDownload as $item) {
			$item['week_day'] = intval($item['week_day']);
			$arDownload[] = $item;
		}
		$month = array_merge($arInteraction, $arDownload);
		$arWeekDay = array( array('week_day' => 0, 'total_download' => 0, 'total_download' => 0), array('week_day' => 1, 'total_download' => 0), array('week_day' => 2, 'total_download' => 0), array('week_day' => 3, 'total_download' => 0), array('week_day' => 4, 'total_download' => 0), array('week_day' => 5, 'total_download' => 0), array('week_day' => 6, 'total_download' => 0));
		$arWeekDayTemp = array();

		//Adiciona os totais de produtos, recursos e download
		for ($i = 0; $i < count($arWeekDay); $i++) {
			//Adiciona o total de download
			foreach ($arDownload as $itemDownload) {
				if ($arWeekDay[$i]['week_day'] == $itemDownload['week_day']) {
					$arWeekDay[$i]['total_download'] = $itemDownload['total_download'];
					break;
				}
			}

			//Adiciona o total de interação
			foreach ($arInteraction as $itemInteraction) {
				if ($arWeekDay[$i]['week_day'] == $itemInteraction['week_day']) {
					$arWeekDay[$i]['total_interaction'] = $itemInteraction['total_interaction'];
					$arWeekDayTemp[] = $arWeekDay[$i];
					break;
				}
			}
		}
		return $arWeekDayTemp;
	}

	//----------------------------------
	//  maxDate
	//----------------------------------
	/**
	 *	Máxima data encontrada.
	 *
	 * @param $params
	 */
	private function maxDate($params) {
		return $this -> useDB('TOP_USERS') -> queryString("SELECT DATE_FORMAT(max(url_active_created_in),\"%d/%m/%Y\") as 'date' FROM lg_analytcs");
	}

	//----------------------------------
	//  minDate
	//----------------------------------
	/**
	 *	Mínima data encontrada.
	 *
	 * @param $params
	 */
	private function minDate($params) {
		return $this -> useDB('TOP_USERS') -> queryString("SELECT DATE_FORMAT(min(url_active_created_in),\"%d/%m/%Y\") as 'date' FROM lg_analytcs");
	}

	//----------------------------------
	//  maxDateDownload
	//----------------------------------
	/**
	 *	Máxima data de download encontrada.
	 *
	 * @param $params
	 */
	private function maxDateDownload($params) {
		return $this -> useDB('TOP_USERS') -> queryString("SELECT max(created_in) as 'date' FROM lg_downloads_complete");
	}

	//----------------------------------
	//  maxDateDownload
	//----------------------------------
	/**
	 *	Mínima data de download encontrada.
	 *
	 * @param $params
	 */
	private function minDateDownload($params) {
		return $this -> useDB('TOP_USERS') -> queryString("SELECT min(created_in) as 'date' FROM `lg_downloads_complete`");
	}

	//----------------------------------
	//  maxDateRegister
	//----------------------------------
	/**
	 *	Máxima data encontrada.
	 *
	 * @param $params
	 */
	private function maxDateRegister($params) {
		return $this -> useDB('TOP_USERS') -> queryString("SELECT max(created_in) as 'date' FROM register");
	}

	//----------------------------------
	//  minDateRegister
	//----------------------------------
	/**
	 *	Mínima data encontrada.
	 *
	 * @param $params
	 */
	private function minDateRegister($params) {
		return $this -> useDB('TOP_USERS') -> queryString("SELECT min(created_in) as 'date' FROM register");
	}

	//----------------------------------
	//  topUsers
	//----------------------------------
	/**
	 *	Total de pessoas que fizeram interacao com o site
	 *
	 * @param $params
	 */
	private function topUsers($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('TOP_USERS') -> queryString("SELECT lg_analytcs.register_id, CONCAT( register_personal.name, ' ', register_personal.lastname ) AS name , COUNT( lg_analytcs.register_id ) AS total FROM lg_analytcs INNER JOIN register_personal ON lg_analytcs.register_id = register_personal.register_id WHERE lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('TOP_USERS') -> queryString("SELECT lg_analytcs.register_id, CONCAT( register_personal.name, ' ', register_personal.lastname ) AS name , COUNT( lg_analytcs.register_id ) AS total FROM lg_analytcs INNER JOIN register_personal ON lg_analytcs.register_id = register_personal.register_id WHERE lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('TOP_USERS') -> queryString("SELECT lg_analytcs.register_id, CONCAT( register_personal.name, ' ', register_personal.lastname ) AS name , COUNT( lg_analytcs.register_id ) AS total FROM lg_analytcs INNER JOIN register_personal ON lg_analytcs.register_id = register_personal.register_id WHERE lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} else {
			return $this -> useDB('TOP_USERS') -> queryString("SELECT lg_analytcs.register_id, CONCAT( register_personal.name, ' ', register_personal.lastname ) AS name , COUNT( lg_analytcs.register_id ) AS total FROM lg_analytcs INNER JOIN register_personal ON lg_analytcs.register_id = register_personal.register_id GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  topPage
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function topPage($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('TOP_PAGE') -> queryString("SELECT lg_analytcs.url_active, lg_products.title AS product_name, COUNT(*) AS total FROM lg_analytcs INNER JOIN lg_resources ON lg_analytcs.lg_resources_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id WHERE lg_analytcs.url_active REGEXP \"/*http://www.parceirolg.com.br/contentdetail*/\" AND lg_analytcs.url_active_created_in BETWEEN  '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY lg_analytcs.lg_resources_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('TOP_PAGE') -> queryString("SELECT lg_analytcs.url_active, lg_products.title AS product_name, COUNT(*) AS total FROM lg_analytcs INNER JOIN lg_resources ON lg_analytcs.lg_resources_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id WHERE lg_analytcs.url_active REGEXP \"/*http://www.parceirolg.com.br/contentdetail*/\" AND lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY lg_analytcs.lg_resources_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('TOP_PAGE') -> queryString("SELECT lg_analytcs.url_active, lg_products.title AS product_name, COUNT(*) AS total FROM lg_analytcs INNER JOIN lg_resources ON lg_analytcs.lg_resources_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id WHERE lg_analytcs.url_active REGEXP \"/*http://www.parceirolg.com.br/contentdetail*/\" AND lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY lg_analytcs.lg_resources_id ORDER BY total DESC");
		} else {
			return $this -> useDB('TOP_PAGE') -> queryString("SELECT lg_analytcs.url_active, lg_products.title AS product_name, COUNT(*) AS total FROM lg_analytcs INNER JOIN lg_resources ON lg_analytcs.lg_resources_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id WHERE lg_analytcs.url_active REGEXP \"/*http://www.parceirolg.com.br/contentdetail*/\" GROUP BY lg_analytcs.lg_resources_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  topResource
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function topResource($params) {
		//WHERE lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "'
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('TOP_RESOURCE') -> queryString("SELECT lg_downloads_complete.resource_id, lg_resources.title, lg_products.title, lg_products.category_id, register_groups.title, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id INNER JOIN register_groups ON lg_products.category_id = register_groups.id WHERE lg_downloads_complete.created_in BETWEEN '" . strtotime($params -> dateStart) . "' AND '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.resource_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('TOP_RESOURCE') -> queryString("SELECT lg_downloads_complete.resource_id, lg_resources.title, lg_products.title, lg_products.category_id, register_groups.title, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id INNER JOIN register_groups ON lg_products.category_id = register_groups.id WHERE lg_downloads_complete.created_in >= '" . strtotime($params -> dateStart) . "' GROUP BY lg_downloads_complete.resource_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('TOP_RESOURCE') -> queryString("SELECT lg_downloads_complete.resource_id, lg_resources.title, lg_products.title, lg_products.category_id, register_groups.title, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id INNER JOIN register_groups ON lg_products.category_id = register_groups.id WHERE lg_downloads_complete.created_in <= '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.resource_id ORDER BY total DESC");
		} else {
			return $this -> useDB('TOP_RESOURCE') -> queryString("SELECT lg_downloads_complete.resource_id, lg_resources.title, lg_products.title, lg_products.category_id, register_groups.title, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id INNER JOIN lg_products ON lg_resources.source_id = lg_products.id INNER JOIN register_groups ON lg_products.category_id = register_groups.id GROUP BY lg_downloads_complete.resource_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  topResourceType
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function topResourceType($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('TOP_RESOURCE_TYPE') -> queryString("SELECT lg_downloads_complete.resource_id, lg_resources.resource_type, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id WHERE lg_downloads_complete.created_in BETWEEN '" . strtotime($params -> dateStart) . "' AND '" . strtotime($params -> dateFinish) . "' GROUP BY lg_resources.resource_type ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('TOP_RESOURCE_TYPE') -> queryString("SELECT lg_downloads_complete.resource_id, lg_resources.resource_type, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id WHERE lg_downloads_complete.created_in >= '" . strtotime($params -> dateStart) . "' GROUP BY lg_resources.resource_type ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('TOP_RESOURCE_TYPE') -> queryString("SELECT lg_downloads_complete.resource_id, lg_resources.resource_type, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id WHERE lg_downloads_complete.created_in <= '" . strtotime($params -> dateFinish) . "' GROUP BY lg_resources.resource_type ORDER BY total DESC");
		} else {
			return $this -> useDB('TOP_RESOURCE_TYPE') -> queryString("SELECT lg_downloads_complete.resource_id, lg_resources.resource_type, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_resources ON lg_downloads_complete.resource_id = lg_resources.id GROUP BY lg_resources.resource_type ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalDownload
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function totalDownload($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('TOTAL_DOWNLOAD') -> queryString("SELECT resource_id,url_active, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_analytcs ON lg_downloads_complete.resource_id =  lg_analytcs.lg_resources_id WHERE lg_analytcs.url_active_created_in BETWEEN '" . strtotime($params -> dateStart) . "' AND '" . strtotime($params -> dateFinish) . "' GROUP BY resource_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('TOTAL_DOWNLOAD') -> queryString("SELECT resource_id,url_active, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_analytcs ON lg_downloads_complete.resource_id =  lg_analytcs.lg_resources_id WHERE lg_analytcs.url_active_created_in >= '" . strtotime($params -> dateStart) . "' GROUP BY resource_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('TOTAL_DOWNLOAD') -> queryString("SELECT resource_id,url_active, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_analytcs ON lg_downloads_complete.resource_id =  lg_analytcs.lg_resources_id WHERE lg_analytcs.url_active_created_in <= '" . strtotime($params -> dateFinish) . "' GROUP BY resource_id ORDER BY total DESC");
		} else {
			return $this -> useDB('TOTAL_DOWNLOAD') -> queryString("SELECT resource_id,url_active, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN lg_analytcs ON lg_downloads_complete.resource_id =  lg_analytcs.lg_resources_id GROUP BY resource_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalDownloadPerUser
	//----------------------------------
	/**
	 * TOTAL DE DOWNLOADS DE RECURSOS POR USUÁRIO (NOME DA LOJA)
	 *
	 * @param $params
	 */
	private function totalDownloadPerUser($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('DOWNLOAD_PER_USERS') -> queryString("SELECT lg_downloads_complete.register_id, register_corporate.fancy_name, COUNT(DISTINCT resource_id) AS total FROM lg_downloads_complete INNER JOIN register ON lg_downloads_complete.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_downloads_complete.created_in BETWEEN '" . strtotime($params -> dateStart) . "' AND '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('DOWNLOAD_PER_USERS') -> queryString("SELECT lg_downloads_complete.register_id, register_corporate.fancy_name, COUNT(DISTINCT resource_id) AS total FROM lg_downloads_complete INNER JOIN register ON lg_downloads_complete.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_downloads_complete.created_in >= '" . strtotime($params -> dateStart) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('DOWNLOAD_PER_USERS') -> queryString("SELECT lg_downloads_complete.register_id, register_corporate.fancy_name, COUNT(DISTINCT resource_id) AS total FROM lg_downloads_complete INNER JOIN register ON lg_downloads_complete.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_downloads_complete.created_in <= '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} else {
			return $this -> useDB('DOWNLOAD_PER_USERS') -> queryString("SELECT lg_downloads_complete.register_id, register_corporate.fancy_name, COUNT(DISTINCT resource_id) AS total FROM lg_downloads_complete INNER JOIN register ON lg_downloads_complete.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalDownloadUser
	//----------------------------------
	/**
	 * TOTAL DE DOWNLOADS DE RECURSOS POR USUÁRIO (NOME DO USUÁRIO)
	 *
	 * @param $params
	 */
	private function totalDownloadUser($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('DOWNLOAD_USERS') -> queryString("SELECT lg_downloads_complete.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(DISTINCT resource_id) AS total FROM lg_downloads_complete INNER JOIN register_personal ON lg_downloads_complete.register_id = register_personal.register_id WHERE lg_downloads_complete.created_in BETWEEN '" . strtotime($params -> dateStart) . "' AND '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('DOWNLOAD_USERS') -> queryString("SELECT lg_downloads_complete.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(DISTINCT resource_id) AS total FROM lg_downloads_complete INNER JOIN register_personal ON lg_downloads_complete.register_id = register_personal.register_id WHERE lg_downloads_complete.created_in >= '" . strtotime($params -> dateStart) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('DOWNLOAD_USERS') -> queryString("SELECT lg_downloads_complete.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(DISTINCT resource_id) AS total FROM lg_downloads_complete INNER JOIN register_personal ON lg_downloads_complete.register_id = register_personal.register_id WHERE lg_downloads_complete.created_in <= '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} else {
			return $this -> useDB('DOWNLOAD_USERS') -> queryString("SELECT lg_downloads_complete.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(DISTINCT resource_id) AS total FROM lg_downloads_complete INNER JOIN register_personal ON lg_downloads_complete.register_id = register_personal.register_id GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalDownloadByUser
	//----------------------------------
	/**
	 * TOTAL DE DOWNLOADS POR USUÁRIO (NOME DA LOJA)
	 *
	 * @param $params
	 */
	private function totalDownloadByUser($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('DOWNLOAD_BY_USER') -> queryString("SELECT lg_downloads_complete.register_id, register_corporate.fancy_name, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN register ON lg_downloads_complete.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_downloads_complete.created_in BETWEEN '" . strtotime($params -> dateStart) . "' AND '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('DOWNLOAD_BY_USER') -> queryString("SELECT lg_downloads_complete.register_id, register_corporate.fancy_name, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN register ON lg_downloads_complete.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_downloads_complete.created_in >= '" . strtotime($params -> dateStart) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('DOWNLOAD_BY_USER') -> queryString("SELECT lg_downloads_complete.register_id, register_corporate.fancy_name, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN register ON lg_downloads_complete.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_downloads_complete.created_in <= '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} else {
			return $this -> useDB('DOWNLOAD_BY_USER') -> queryString("SELECT lg_downloads_complete.register_id, register_corporate.fancy_name, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN register ON lg_downloads_complete.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalDownloadBy
	//----------------------------------
	/**
	 * TOTAL DE DOWNLOADS POR USUÁRIO (NOME DO USUÁRIO)
	 *
	 * @param $params
	 */
	private function totalDownloadBy($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('DOWNLOAD_BY') -> queryString("SELECT lg_downloads_complete.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN register_personal ON lg_downloads_complete.register_id = register_personal.register_id WHERE lg_downloads_complete.created_in BETWEEN '" . strtotime($params -> dateStart) . "' AND '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('DOWNLOAD_BY') -> queryString("SELECT lg_downloads_complete.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN register_personal ON lg_downloads_complete.register_id = register_personal.register_id WHERE lg_downloads_complete.created_in >= '" . strtotime($params -> dateStart) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('DOWNLOAD_BY') -> queryString("SELECT lg_downloads_complete.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN register_personal ON lg_downloads_complete.register_id = register_personal.register_id WHERE lg_downloads_complete.created_in <= '" . strtotime($params -> dateFinish) . "' GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		} else {
			return $this -> useDB('DOWNLOAD_BY') -> queryString("SELECT lg_downloads_complete.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(*) AS total FROM lg_downloads_complete INNER JOIN register_personal ON lg_downloads_complete.register_id = register_personal.register_id GROUP BY lg_downloads_complete.register_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalDownloadByUser
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function totalPageRetailer($params) {
		//NOTFINAL
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('PAGE_RETAILER') -> queryString("SELECT lg_analytcs.register_id, register_corporate.fancy_name, COUNT(DISTINCT lg_analytcs.page_uid) AS total FROM lg_analytcs INNER JOIN register ON lg_analytcs.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('PAGE_RETAILER') -> queryString("SELECT lg_analytcs.register_id, register_corporate.fancy_name, COUNT(DISTINCT lg_analytcs.page_uid) AS total FROM lg_analytcs INNER JOIN register ON lg_analytcs.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('PAGE_RETAILER') -> queryString("SELECT lg_analytcs.register_id, register_corporate.fancy_name, COUNT(DISTINCT lg_analytcs.page_uid) AS total FROM lg_analytcs INNER JOIN register ON lg_analytcs.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} else {
			return $this -> useDB('PAGE_RETAILER') -> queryString("SELECT lg_analytcs.register_id, register_corporate.fancy_name, COUNT(DISTINCT lg_analytcs.page_uid) AS total FROM lg_analytcs INNER JOIN register ON lg_analytcs.register_id = register.id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalPageUser
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function totalPageUser($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('PAGE_USER') -> queryString("SELECT lg_analytcs.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(DISTINCT lg_analytcs.page_uid) AS total FROM lg_analytcs INNER JOIN register_personal ON lg_analytcs.register_id = register_personal.register_id WHERE lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('PAGE_USER') -> queryString("SELECT lg_analytcs.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(DISTINCT lg_analytcs.page_uid) AS total FROM lg_analytcs INNER JOIN register_personal ON lg_analytcs.register_id = register_personal.register_id WHERE lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('PAGE_USER') -> queryString("SELECT lg_analytcs.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(DISTINCT lg_analytcs.page_uid) AS total FROM lg_analytcs INNER JOIN register_personal ON lg_analytcs.register_id = register_personal.register_id WHERE lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} else {
			return $this -> useDB('PAGE_USER') -> queryString("SELECT lg_analytcs.register_id, CONCAT(register_personal.name,' ',register_personal.lastname) AS name, COUNT(DISTINCT lg_analytcs.page_uid) AS total FROM lg_analytcs INNER JOIN register_personal ON lg_analytcs.register_id = register_personal.register_id GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalUsers
	//----------------------------------
	/**
	 * NOTDOC
	 *
	 * @param $params
	 */
	private function totalUsers($params) {
		//pe("SELECT register_type, COUNT(*) AS total FROM register WHERE created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY register_type");
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('TOTAL_USER') -> queryString("SELECT register_type, COUNT(*) AS total FROM register WHERE created_in BETWEEN '" . strtotime($params -> dateStart) . "' AND '" . strtotime($params -> dateFinish) . "' GROUP BY register_type");
		} elseif ($params -> dateStart) {
			return $this -> useDB('TOTAL_USER') -> queryString("SELECT register_type, COUNT(*) AS total FROM register WHERE created_in >= '" . strtotime($params -> dateStart) . "' GROUP BY register_type");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('TOTAL_USER') -> queryString("SELECT register_type, COUNT(*) AS total FROM register WHERE created_in <= '" . strtotime($params -> dateFinish) . "' GROUP BY register_type");
		} else {
			return $this -> useDB('TOTAL_USER') -> queryString("SELECT register_type, COUNT(*) AS total FROM register GROUP BY register_type");
		}

	}

	//----------------------------------
	//  totalInteractions
	//----------------------------------
	/**
	 * Consulta o total de interacoes de usuarios logados mais ativos (Exibir nome da Loja)
	 *
	 * @param $params
	 */
	private function totalInteractions($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			return $this -> useDB('TOTAL_INTERACTION') -> queryString("SELECT lg_analytcs.register_id, register_personal.name ,register_corporate.fancy_name, COUNT(*) AS total FROM lg_analytcs INNER JOIN register ON lg_analytcs.register_id = register.id INNER JOIN register_personal ON register.id = register_personal.register_id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} elseif ($params -> dateStart) {
			return $this -> useDB('TOTAL_INTERACTION') -> queryString("SELECT lg_analytcs.register_id, register_personal.name ,register_corporate.fancy_name, COUNT(*) AS total FROM lg_analytcs INNER JOIN register ON lg_analytcs.register_id = register.id INNER JOIN register_personal ON register.id = register_personal.register_id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} elseif ($params -> dateFinish) {
			return $this -> useDB('TOTAL_INTERACTION') -> queryString("SELECT lg_analytcs.register_id, register_personal.name ,register_corporate.fancy_name, COUNT(*) AS total FROM lg_analytcs INNER JOIN register ON lg_analytcs.register_id = register.id INNER JOIN register_personal ON register.id = register_personal.register_id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id WHERE lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		} else {
			return $this -> useDB('TOTAL_INTERACTION') -> queryString("SELECT lg_analytcs.register_id, register_personal.name ,register_corporate.fancy_name, COUNT(*) AS total FROM lg_analytcs INNER JOIN register ON lg_analytcs.register_id = register.id INNER JOIN register_personal ON register.id = register_personal.register_id INNER JOIN register_corporate ON register.parent_id = register_corporate.register_id GROUP BY lg_analytcs.register_id ORDER BY total DESC");
		}
	}

	//----------------------------------
	//  totalTime
	//----------------------------------
	/**
	 * Media de tempo de visualizacao por pagina.
	 *
	 * @param $params
	 */
	private function totalTime($params) {
		if ($params -> dateFinish != null && $params -> dateStart != null) {
			$useResult = $this -> useDB('TOTAL_TIME') -> queryString("SELECT url_active, TIME_FORMAT(SUM(difference), '%H:%i:%s') AS difference, TIME_FORMAT(AVG(difference), '%H:%i:%s') AS media, COUNT(*) AS total FROM lg_analytcs WHERE url_active REGEXP \"/*http://www.parceirolg.com.br/contentdetail*/\" AND lg_analytcs.url_active_created_in BETWEEN '" . $params -> dateStart . "' AND '" . $params -> dateFinish . "' GROUP BY url_active ORDER BY media DESC");
		} elseif ($params -> dateStart) {
			$useResult = $this -> useDB('TOTAL_TIME') -> queryString("SELECT url_active, TIME_FORMAT(SUM(difference), '%H:%i:%s') AS difference, TIME_FORMAT(AVG(difference), '%H:%i:%s') AS media, COUNT(*) AS total FROM lg_analytcs WHERE url_active REGEXP \"/*http://www.parceirolg.com.br/contentdetail*/\" AND lg_analytcs.url_active_created_in >= '" . $params -> dateStart . "' GROUP BY url_active ORDER BY media DESC");
		} elseif ($params -> dateFinish) {
			$useResult = $this -> useDB('TOTAL_TIME') -> queryString("SELECT url_active, TIME_FORMAT(SUM(difference), '%H:%i:%s') AS difference, TIME_FORMAT(AVG(difference), '%H:%i:%s') AS media, COUNT(*) AS total FROM lg_analytcs WHERE url_active REGEXP \"/*http://www.parceirolg.com.br/contentdetail*/\" AND lg_analytcs.url_active_created_in <= '" . $params -> dateFinish . "' GROUP BY url_active ORDER BY media DESC");
		} else {
			$useResult = $this -> useDB('TOTAL_TIME') -> queryString("SELECT url_active, TIME_FORMAT(SUM(difference), '%H:%i:%s') AS difference, TIME_FORMAT(AVG(difference), '%H:%i:%s') AS media, COUNT(*) AS total FROM lg_analytcs WHERE url_active REGEXP \"/*http://www.parceirolg.com.br/contentdetail*/\" GROUP BY url_active ORDER BY media DESC");
		}

		$useResultTemp = array();
		foreach ($useResult as $item) {
			if ($item['difference'])
				array_push($useResultTemp, $item);
		}

		return $useResultTemp;
	}

}
?>