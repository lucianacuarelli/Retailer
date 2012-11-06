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
class Module extends UseZF_Module_Abstract {

	//----------------------------------
    //  dbUpdate
    //----------------------------------
    /**
     * Recupera a identificação do usuário que esta se logando
     *
     * @return void
     */
    public function dbUpdate() 
    {
    	//----------------------------------------------------------------------------
    	//
    	// REGISTER
    	//
    	//----------------------------------------------------------------------------
    	//----------------------------------------------------------------------------
    	// register
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER' => 'register'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$item->changed_in = strtotime($item->changed_in);
				$item->authentication = strtotime($item->authentication);
				$item->last_login = strtotime($item->last_login);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register');
			}*/
		
		//----------------------------------------------------------------------------
    	// register_actions
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	               	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_ACTIONS' => 'register_actions'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_actions');
			}*/
		//----------------------------------------------------------------------------
    	// register_address
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_ADDRESS' => 'register_address'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_address');
			}*/
		//----------------------------------------------------------------------------
    	// register_corporate
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_CORPORATE' => 'register_corporate'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_corporate');
			}*/
		//----------------------------------------------------------------------------
    	// register_email
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_ADDRESS_EMAIL' => 'register_email'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_email');
			}*/
		//----------------------------------------------------------------------------
    	// register_groups
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_GROUPS' => 'register_groups'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_groups');
			}*/
		//----------------------------------------------------------------------------
    	// register_group_area
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_GROUP_AREA' => 'register_group_area'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_group_area');
			}*/
		//----------------------------------------------------------------------------
    	// register_has_register_groups
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_HAS_REGISTER_GROUPS' => 'register_has_register_groups'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_has_register_groups');
			}*/
		//----------------------------------------------------------------------------
    	// register_historical
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_HISTORICAL' => 'register_historical'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_historical');
			}*/
		//----------------------------------------------------------------------------
		// register_human_resources
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_HUMAN_RESOURCES' => 'register_human_resources'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->hiring_date = strtotime($item->hiring_date);
				$item->date_dispensing = strtotime($item->date_dispensing);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_human_resources');
			}*/
		//----------------------------------------------------------------------------
		// register_messages
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_MESSAGES' => 'register_messages'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_messages');
			}*/
		//----------------------------------------------------------------------------
		// register_notifications
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_NOTIFICATIONS' => 'register_notifications'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$item->reported_in = strtotime($item->reported_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_notifications');
			}*/
    	//----------------------------------------------------------------------------
		// register_personal
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_PERSONAL' => 'register_personal'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->fullname = $item->name.' '.$item->lastname;
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_personal');
			}*/
		//----------------------------------------------------------------------------
		// register_phone
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_PHONE' => 'register_phone'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_phone');
			}*/
		//----------------------------------------------------------------------------
		// register_profile
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_PROFILE' => 'register_profile'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->role = stripcslashes($item->role);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_profile');
			}*/
		//----------------------------------------------------------------------------
		// register_properties
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_PROPERTIES' => 'register_properties'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_properties');
			}*/
		//----------------------------------------------------------------------------
		// register_social_media
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_SOCIAL_MEDIA' => 'register_social_media'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_social_media');
			}*/
    	//----------------------------------------------------------------------------
		// register_log
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_CHANGE_LOG' => 'change_log'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_log');
			}*/
		//----------------------------------------------------------------------------
		// register_preference
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_PREFERENCE' => 'preference'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('register_preference');
			}*/
		//----------------------------------------------------------------------------
    	//
    	// LG
    	//
    	//----------------------------------------------------------------------------
		//----------------------------------------------------------------------------
		// lg_campaign
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_CAMPAIGN' => 'lg_campaign'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->data_in = strtotime($item->data_in);
				$item->data_out = strtotime($item->data_out);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_campaign');
			}*/
		//----------------------------------------------------------------------------
		// lg_category
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_CATEGORY' => 'lg_category'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_category');
			}*/
		//----------------------------------------------------------------------------
		// lg_comments
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_lg_comments' => 'lg_comments'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_comments');
			}*/
		//---------------------------------------------------------------------------
		// lg_downloads
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_DOWNLOADS' => 'lg_downloads'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$item->session_created_in = strtotime($item->session_created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_downloads');
			}*/
		//----------------------------------------------------------------------------
		// lg_downloads_complete
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_DOWNLOADS_COMPLETE' => 'lg_downloads_complete'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$item->session_created_in = strtotime($item->session_created_in);
				$item->created_in_download = strtotime($item->created_in_download);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_downloads_complete');
			}*/
		//----------------------------------------------------------------------------
		// lg_downloads_trash
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	              	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_DOWNLOADS_COMPLETE' => 'lg_downloads_trash'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$item->session_created_in = strtotime($item->session_created_in);
				$item->created_in_download = strtotime($item->created_in_download);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_downloads_trash');
			}*/
		//----------------------------------------------------------------------------
		// lg_log
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_LOG' => 'lg_log'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_log');
			}*/
		//----------------------------------------------------------------------------
		// lg_messages
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	               	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_MESSAGES' => 'lg_messages'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_messages');
			}*/
		//-------------------------------------------------------------------------
		// lg_products
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->highlight_date_out = strtotime($item->highlight_date_out);
				$item->status_new_date_out = strtotime($item->status_new_date_out);
				$item->date_in = strtotime($item->date_in);
				$item->date_out = strtotime($item->date_out);
				$item->created_in = strtotime($item->created_in);
				$item->changed_in = strtotime($item->changed_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_products');
			}*/
		//----------------------------------------------------------------------------
		// lg_resources
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->status_new_date_out = strtotime($item->status_new_date_out);
				$item->created_in = strtotime($item->created_in);
				$item->changed_in = strtotime($item->changed_in);
				$item->upload_time = strtotime($item->upload_time);
				$item->date_in = strtotime($item->date_in);
				$item->date_out = strtotime($item->date_out);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_resources');
			}*/
		//----------------------------------------------------------------------------
		// lg_products_retailers
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_PRODUCTS_RETAILERS' => 'lg_products_retailers'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_products_retailers');
			}*/
		//---------------------------------------------------------------------------
		// lg_register_retailer_has_register_trademarketing
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_LG_REGISTER_RETAILER_HAS_REGISTER_TRADEMARKETING' => 'lg_register_retailer_has_register_trademarketing'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_register_retailer_has_register_trademarketing');
			}*/
		//----------------------------------------------------------------------------
		// lg_register_trademarketing_has_register_collaborators
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('LG_REGISTER_TRADEMARKETING_HAS_REGISTER_COLLABORATORS' => 'lg_register_trademarketing_has_register_collaborators'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_register_trademarketing_has_register_collaborators');
			}*/
		//----------------------------------------------------------------------------
		// lg_resources_retailers
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('LG_RESOURCES_RETAILERS' => 'lg_resources_retailers'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('lg_resources_retailers');
			}*/
		//----------------------------------------------------------------------------
		//  highlights_identify
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('HIGHLIGHTS_IDENTIFY' => 'highlights_identify'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$item->changed_in = strtotime($item->changed_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('highlights_identify');
			}*/
		//----------------------------------------------------------------------------
		//  highlights_manager
    	//----------------------------------------------------------------------------
			/*$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('HIGHLIGHTS_MANAGER' => 'highlights_manager'))
			                	      ->fields(array('*'))
									  ->fetch('All');
				
			foreach ($useResultPersonal as $item) {
				$item->created_in = strtotime($item->created_in);
				$item->changed_in = strtotime($item->changed_in);
				$register_id = $this->useDB('SAVE_REGISTER','parceiro')->data($item)->insert('highlights_manager');
			}*/
	}

	//----------------------------------
    //  login
    //----------------------------------
    /**
     * Recupera a identificação do usuário que esta se logando
     *
     * @return void
     */
    public function login($params) 
    {
   		$useLogin = new UseZF_Remotes_Login();
		
		$login = $useLogin->loginWeb(strtolower($params->user_email), strtolower($params->user_password));
		
		//Verifica se o login retornou sucesso
		if($login->status == 'success')
		{
			//Atualiza o ultimo acesso do usuario
    		$this->useDB('UPDATE_LAST_LOGIN')
    			->data(array('last_login' => $this->useDate()->get(Zend_Date::TIMESTAMP)))
    			->update('register', 'id = '. $login->info->id);
			
			//Realiza consulta para recuperar os dados pessoais do usuario
			$useResultPersonal = $this->useDB('SELECT')
	                	   			  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	      ->from(array('USE_REGISTER_PERSONAL' => 'register_personal'))
			                	      ->fields(array('treatment','name','middle_name','lastname','cpf','rg','birth_day','birth_month','birth_year','sex'))
								      ->where('USE_REGISTER_PERSONAL.register_id = ?', $login->info->id)
									  ->fetch('Row');
			
			//Agrupa os dados pessoais com os dados do usuario
			$login->info = (object) array_merge( (array) $login->info, (array) $useResultPersonal);
			
			//Realiza consulta para recuperar os dados do endereco do usuario
			$useResultAddress = $this->useDB('SELECT')
	                	   			 ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	     ->from(array('USE_REGISTER_ADDRESS' => 'register_address'))
			                	     ->fields(array('zipcode','address','number','complement','neighborhood','city','state','region','international','country','address_reference','address_type','address_identifty','latitude','longitude'))
								     ->where('USE_REGISTER_ADDRESS.register_id = ?', $login->info->id)
									 ->fetch('Row');
			
			//Agrupa os dados de endereço com os dados do usuario
			$login->info = (object) array_merge( (array) $login->info, (array) $useResultAddress);
			
			//Verifica se o usuario tem alguma loja associada
			if(!empty($login->info->parent_id))
			{
				//Realiza consulta para recuperar os dados da loja do usuario
				$useResultCorporate = $this->useDB('SELECT')
		                	   			   ->setFetchMode(Zend_Db::FETCH_OBJ)
				                	       ->from(array('USE_REGISTER_CORPORATE' => 'register_corporate'))
				                	       ->fields(array('fancy_name','corporate_name','cnpj','ie','ie_exemption','network'))
										   ->join(array('USE_REGISTER' => 'register'), 'USE_REGISTER_CORPORATE.register_id = USE_REGISTER.id', array('image_path_corporate' => 'image_path', 'image_file_corporate' => 'image_file'))
									       ->where('USE_REGISTER_CORPORATE.register_id = ?', $login->info->parent_id)
									       ->where('USE_REGISTER.is_active = ?', '1')
										   ->fetch('Row');
				
				//Verifica se o usuario esta associado a alguma loja
				if(!empty($useResultCorporate))
				{
					//Agrupa os dados da loja com os dados do usuario
					$login->info = (object) array_merge( (array) $login->info, (array) $useResultCorporate);
	
					//Recupera a lista de categorias do usuário logado
			    	$useResultGroups = $this->useDB('SELECT')
			                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
					                	    ->from(array('USE_REGISTER_HAS_REGISTER_GROUPS' => 'register_has_register_groups'))
					                	    ->fields(array('*'))
											->join(array('USE_REGISTER_GROUPS' => 'register_groups'), 'USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = USE_REGISTER_GROUPS.id', array('title'))
										    ->where('USE_REGISTER_HAS_REGISTER_GROUPS.register_id = ?', $login->info->id)
											->fetch('All');
					
					//Verifica se o usuario esta associado a algum grupo
					if(!empty($useResultGroups))
					{
						//Configura os grupos associados ao usuario
						$login->info->register_has_register_groups = $useResultGroups;
					}
					else{
						//Recupera a lista de categorias do usuário logado
				    	$useResultGroupsCorporate = $this->useDB('SELECT')
						                	   			 ->setFetchMode(Zend_Db::FETCH_OBJ)
								                	     ->from(array('USE_REGISTER_HAS_REGISTER_GROUPS' => 'register_has_register_groups'))
								                	     ->fields(array('*'))
														 ->join(array('USE_REGISTER_GROUPS' => 'register_groups'), 'USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = USE_REGISTER_GROUPS.id', array('title'))
													     ->where('USE_REGISTER_HAS_REGISTER_GROUPS.register_id = ?', $login->info->parent_id)
														 ->fetch('All');
						
						//Configura os grupos associados a loja	para o usuario							 
						$login->info->register_has_register_groups = $useResultGroupsCorporate;
					}
					
					//Verifica se o usuario nao tem grupo associado				
					if(empty($login->info->register_has_register_groups)) $login->status = 'status-groups-fail';		
				}
				else {
					$login->status = 'status-retailer-fail';	
				}
			}
			else {
				$login->status = 'status-retailer-fail';	
			}
		}
		
		$status = false;
		
		//Configura as mensagens de error
		switch ($login->status) {
			case 'success':
				$status = true;
				break;
				
			case 'fail':
				$this->view->errorMessage = 'Usuário e/ou senha inválido!';
				break;

			case 'status-fail':
				$this->view->errorMessage = 'Usuário inativo!';
				break;

			case 'status-acl-fail':
				$this->view->errorMessage = 'Usuário sem controle de acesso!';
				break;

			case 'status-retailer-fail':
				$this->view->errorMessage = 'Usuário sem nenhuma loja associada!';
				break;

			case 'status-groups-fail':
				$this->view->errorMessage = 'Usuário sem nenhum grupo associado!';
				break;
		}
		
		return $status;
	}

	//----------------------------------
    //  forgotPassword
    //----------------------------------
    /**
     * Recupera a identificação do usuário que esta se logando
     *
     * @return void
     */
    public function forgotPassword($params) 
    {
		//Verifica se recebeu endereço de e-mail
		if(!empty($params->user_email))
		{
			//Consulta a base de dados e recupera dados compatives com parametros solicitados
			$useResult = $this->useDB('LOGIN')
							  ->setFetchMode(Zend_Db::FETCH_OBJ) //Modo de retorno dos dados, default Array
							  ->from(array('USE_REGISTER' => 'register'))
				  			  ->fields(array('*'))
				  			  ->where('USE_REGISTER.user_email = ?', strtolower($params->user_email))
							  ->fetch('Row');
			
			//Verifica se encontrou o usuario na base de dados
			if(!empty($useResult))
			{
				//Configura a mensagem
				$messageMail = '<p>Sua senha de acesso: '. $useResult->user_password .'</p>';
				
				//Configura os dados da conta de envio		
				$smtp     = "mail.email.alog.com.br";
				$conta    = "portal@parceirolg.com.br";
				$senha    = "123qwe@";
				$de       = "portal@parceirolg.com.br";
				 
				//Define os parametros de autenticação
				$config = array (
			                'auth' => 'login',
		   	                'username' => $conta,
		   	                'password' => $senha,
		   	                );
			
				//Configura os parametros de autenticação
		   	    $mailTransport = new Zend_Mail_Transport_Smtp($smtp, $config);
		        
				//Configura os paramentros e envia o e-mail
		   	    $mail = new Zend_Mail();
		   	    $mail->setFrom($de);
		   	    $mail->addTo($params->user_email);
		   	    $mail->setBodyHtml($messageMail);
		   	    $mail->setSubject(utf8_decode('Portal de Conteúdos LG - Esqueci minha senha'));
		   	    $mail->send($mailTransport);
				
				
				$message = 'Senha enviada para o e-mail: '. $params->user_email;
			}
			else{
				$message = 'E-mail não encontrado na base de dados!';
			}
			
		}
		else{
			$message = 'Nenhum endereço de e-mail foi informado!';
		}
		
		$this->view->message = $message;
	}

	//----------------------------------
    //  authentication
    //----------------------------------
    /**
     * Valida o cadastro do usuario
     *
     * @return void
     */
    public function authentication($params) 
    {
		//Consulta a base de dados e recupera dados compatives com parametros solicitados
		$useResult = $this->useDB('LOGIN')
						  ->setFetchMode(Zend_Db::FETCH_OBJ) //Modo de retorno dos dados, default Array
						  ->from(array('USE_REGISTER' => 'register'))
			  			  ->fields(array('*'))
			  			  ->where('USE_REGISTER.uid = ?', $params->uid)
						  ->fetch('Row');
			
		//Verifica se encontrou o usuario na base de dados
		if(!empty($useResult))
		{
			//Salva os dados na tabela de registro
    		//$register_id = $this->useDB('SAVE_AUTHENTICATION')->data(array('authentication' => date('Y-m-d H:i:s')))->update('register', 'id = '. $useResult->id);
			$register_id = $this->useDB('SAVE_AUTHENTICATION')
								->data(array('authentication' => $this->useDate()->get(Zend_Date::TIMESTAMP)))
								->update('register', 'id = '. $useResult->id);
			
			//Retorna mensagem de aviso a view
			$message = 'Seu cadastro foi validado, aguarde a liberação de sua conta para acessar o portal!';
		}
		else{
			//Retorna mensagem de aviso a view
			$message = 'Usuário não encontrado na base de dados.';
		}
		
		return $message;
	}

    //----------------------------------
    //  populateRegister
    //----------------------------------
    /**
     * Realiza consulta para popular os compontes do formulario de cadastro
     *
     * @return void
     */
    public function populateRegister() 
    {
    	//Realiza consulta para buscar pelas as redes
    	$useResultRetailer = $this->useDB('SELECT')
		                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		  ->from(array('USE_REGISTER' => 'register'))
		                		  ->fields(array('id'))
								  ->join(array('USE_REGISTER_CORPORATE' => 'register_corporate'), 'USE_REGISTER_CORPORATE.register_id = USE_REGISTER.id', array('fancy_name'))
								  ->where('USE_REGISTER.register_type = ?', 'C')
								  ->where('USE_REGISTER.register_profile_id = 5')
								  ->order('USE_REGISTER_CORPORATE.fancy_name ASC')
		                		  ->fetch('All');

		//Realiza consulta para buscar pelos grupos
    	$useResultGroups = $this->useDB('SELECT')
		                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		  ->from(array('USE_REGISTER_GROUPS' => 'register_groups'))
		                		  ->fields(array('id', 'title'))
								  ->where('USE_REGISTER_GROUPS.register_group_area_id = ?', '1')
								  ->order('USE_REGISTER_GROUPS.title ASC')
		                		  ->fetch('All');
		
		$this->view->listRetailer = $useResultRetailer;
		$this->view->listGroups = $useResultGroups;
	}

    //----------------------------------
    //  populateEditRegister
    //----------------------------------
    /**
     * Realiza consulta para popular os compontes do formulario de cadastro
	 * Busca pelos dados do usuario para popular os campos
     *
     * @return void
     */
    public function populateEditRegister() 
    {
    	//recupera o identificador do usuário logado
    	$registerId	= $this->view->userInfo->id;
		
    	//Realiza consulta para buscar pelas as redes
    	$useResultRetailer = $this->useDB('SELECT')
		                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		  ->from(array('USE_REGISTER' => 'register'))
		                		  ->fields(array('id'))
								  ->join(array('USE_REGISTER_CORPORATE' => 'register_corporate'), 'USE_REGISTER_CORPORATE.register_id = USE_REGISTER.id', array('fancy_name'))
								  ->where('USE_REGISTER.register_type = ?', 'C')
		                		  ->fetch('All');

		//Realiza consulta para buscar pelos grupos
    	$useResultGroups = $this->useDB('SELECT')
		                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		  ->from(array('USE_REGISTER_GROUPS' => 'register_groups'))
		                		  ->fields(array('id', 'title'))
								  ->where('USE_REGISTER_GROUPS.register_group_area_id = ?', '1')
								  ->order('USE_REGISTER_GROUPS.title ASC')
		                		  ->fetch('All');
		
		//Realiza consulta para buscar pelos dados do usuario
    	$useResultRegister = $this->useDB('SELECT')
		                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		  ->from(array('USE_REGISTER' => 'register'))
		                		  ->fields(array('register_id' => 'id', 'nickname', 'user_email', 'web_page'))
								  ->join(array('USE_REGISTER_PERSONAL' => 'register_personal'), 'USE_REGISTER_PERSONAL.register_id = USE_REGISTER.id', array('register_personal_id' => 'id', 'name', 'lastname', 'cpf', 'rg', 'birth_day', 'birth_month', 'birth_year', 'sex'))
								  ->joinLeft(array('USE_REGISTER_ADDRESS' => 'register_address'), 'USE_REGISTER_ADDRESS.register_id = USE_REGISTER.id', array('register_address_id' => 'id', 'zipcode', 'address', 'number', 'complement', 'neighborhood', 'city', 'state'))
								  ->joinLeft(array('USE_REGISTER_PHONE' => 'register_phone'), 'USE_REGISTER_PHONE.register_id = USE_REGISTER.id', array('register_phone_id' => 'id', 'ddd', 'phone'))
								  ->where('USE_REGISTER.id = ?', $registerId)
		                		  ->fetch('Row');
		
		$this->view->listRetailer = $useResultRetailer;
		$this->view->listGroups = $useResultGroups;
		$this->view->register = $useResultRegister;
	}
	
    //----------------------------------
    //  showBanner
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function showBanner() 
    {
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
                		  ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
                		  ->fields(array('*'))
						  //->where('USE_LG_PRODUCTS.highlight_date_out >= ?', date('Y-m-d'))
						  ->where('USE_LG_PRODUCTS.banner_filename IS NOT NULL')
						  ->order(new Zend_Db_Expr('RAND()'))
                		  ->fetch('Row');
		
		$this->view->banner = $useResult;
	}
	
    //----------------------------------
    //  showImages
    //----------------------------------
    /**
     * Realiza consulta pata mostra as imagens na página inicial, de acordo com a ordenação
     *
     * @return void
     */
    public function showImages($params) 
    {
    	$prepareHtml = $this->useClass('PrepareHtml');
		
		$userInfo = $this->useSecurity()->userInfo();
		
    	//recupera o identificador do usuário logado
    	$registerId	= $userInfo->info->id;
		
		//Recupera a lista de categorias do usuário logado
    	$useResultResources = $this->useDB('SELECT')
                	   			   ->setFetchMode(Zend_Db::FETCH_OBJ)
		                	       ->from(array('USE_LG_RESOURCES_RETAILERS' => 'lg_resources_retailers'))
		                	       ->fields(array('lg_resources_id'))
								   ->group('USE_LG_RESOURCES_RETAILERS.lg_resources_id')
							       ->where('USE_LG_RESOURCES_RETAILERS.retailer_id != ?', $userInfo->info->parent_id)
								   ->fetch('Col');
		
		//Monta a lista	de recursos que deve ser mostrado							
		$resourcesIds = implode(",", $useResultResources);
		
		//Configura a condição com a lista de recursos do usuário
		$whereResources = "USE_LG_RESOURCES.id NOT IN (". $resourcesIds .")";
		
    	//Recupera a lista de categorias do usuário logado
    	$useResultGroups = $this->useDB('SELECT')
                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
		                	    ->from(array('USE_REGISTER_HAS_REGISTER_GROUPS' => 'register_has_register_groups'))
		                	    ->fields(array('register_groups_id'))
								->join(array('USE_REGISTER_GROUPS' => 'register_groups'), 'USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = USE_REGISTER_GROUPS.id')
							    ->where('USE_REGISTER_HAS_REGISTER_GROUPS.register_id = ?', $registerId)
								->fetch('Col');

		//Monta a lista de categorias do usuário								
		$groupsIds = implode(",", $useResultGroups);
		
		//Configura a condição com a lista de categorias do usuário
		$whereGroups = "USE_LG_PRODUCTS.category_id IN (". $groupsIds .")";
		
		//recupar o tipo de ordenação								
    	//$area = str_replace("/", "", $params->pathInfo);
		
		//Verifica qual o tipo de ordenação para poder montar a condição
		switch ($params->area) {
			case 'acessados':
				$where = "USE_LG_RESOURCES.total_view >= 0";
				$order = "USE_LG_RESOURCES.total_view DESC";
				break;
			case 'baixados':
				$where = "USE_LG_RESOURCES.total_download >= 0";
				$order = "USE_LG_RESOURCES.total_download DESC";
				break;
			case 'ranking':
				$where = "USE_LG_RESOURCES.total_rating >= 0";
				$order = "USE_LG_RESOURCES.total_rating DESC";
				break;
			default:
				$where = "USE_LG_PRODUCTS.highlight_date_out >=". date('Y-m-d');
				$order = "USE_LG_RESOURCES.order_position ASC";
				break;
		}
		
		//Realiza consulta para buscar as imagens da página inicial de acordo com a condição informada
    	$this->useDB('SELECT')
    		 ->setFetchMode(Zend_Db::FETCH_OBJ)
    		 ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
    		 ->fields(array('*'))
			 ->join(array('USE_LG_PRODUCTS' => 'lg_products'), "USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id", array('highlight_date_out', 'USE_LG_PRODUCTS_title'=>'title', 'USE_LG_PRODUCTS_code'=>'code'))
			 ->where("USE_LG_RESOURCES.is_active = 1")
			 ->where("USE_LG_RESOURCES.resource_type = 'IMG'")
			 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
			 ->where("USE_LG_PRODUCTS.is_active = 1")
			 ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
			 ->where($where);
						   
			//Verifica se o usuário logado tem alguma categoria
			if(!empty($groupsIds)) $this->useDB('SELECT')->where($whereGroups);
			
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT')->where($whereResources);
			
		$useResult = $this->useDB('SELECT')
						  ->limit('5')
						  ->order($order)
						  ->group('USE_LG_RESOURCES.source_id')
                		  ->fetch('All');
		
		//Retorna para a view a lista de imagens retornadas
		$this->view->content = $prepareHtml->slideShow($useResult, $this->view->baseUrl);
	}

    //----------------------------------
    //  account
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function account($params) 
    {
    	$registerId	= $this->view->userInfo->id;
    	$params->parent_id 		= $this->view->userInfo->parent_id;
		
		//Verifica se o usuario está vinculado a alguma loja
		if(!empty($params->parent_id))
		{
	    	$useResultCorporate = $this->useDB('SELECT')
			                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
			                		   ->from(array('USE_REGISTER_CORPORATE' => 'register_corporate'))
			                		   ->fields(array('*'))
									   ->where('USE_REGISTER_CORPORATE.register_id = ?', $params->parent_id)
			                		   ->fetch('Row');
			
			$this->view->corporate = $useResultCorporate;
			
	    	$useResultCorporateAddress = $this->useDB('SELECT')
					                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
					                		  ->from(array('USE_REGISTER_ADDRESS' => 'register_address'))
					                		  ->fields(array('*'))
											  ->where('USE_REGISTER_ADDRESS.register_id = ?', $useResultCorporate->register_id)
					                		  ->fetch('Row');
	
			$this->view->corporateAddress = $useResultCorporateAddress;
	
	    	$useResultCorporatePhone = $this->useDB('SELECT')
			                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
					                	    ->from(array('USE_REGISTER_PHONE' => 'register_phone'))
					                	    ->fields(array('*'))
										    ->where('USE_REGISTER_PHONE.register_id = ?', $useResultCorporate->register_id)
					                	    ->fetch('Row');
	
			$this->view->corporatePhone = $useResultCorporatePhone;
	
	    	$useResultCorporateEmail = $this->useDB('SELECT')
			                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
					                	    ->from(array('USE_REGISTER_EMAIL' => 'register_email'))
					                	    ->fields(array('*'))
										    ->where('USE_REGISTER_EMAIL.register_id = ?', $useResultCorporate->register_id)
					                	    ->fetch('Row');
											
			$this->view->corporateEmail = $useResultCorporateEmail;
		}
		

    	$useResultGroups = $this->useDB('SELECT')
                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
		                	    ->from(array('USE_REGISTER_HAS_REGISTER_GROUPS' => 'register_has_register_groups'))
		                	    ->fields(array('*'))
								->join(array('USE_REGISTER_GROUPS' => 'register_groups'), 'USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = USE_REGISTER_GROUPS.id', array('title'))
							    ->where('USE_REGISTER_HAS_REGISTER_GROUPS.register_id = ?', $registerId)
								->fetch('All');
		
		$this->view->groups = $useResultGroups;

    	$useResultAddress = $this->useDB('SELECT')
                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
		                	    ->from(array('USE_REGISTER_ADDRESS' => 'register_address'))
		                	    ->fields(array('region'))
							    ->where('USE_REGISTER_ADDRESS.register_id = ?', $registerId)
								->fetch('Row');
		
		$this->view->address = $useResultAddress;

    	$useResultPhone = $this->useDB('SELECT')
                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
		                	    ->from(array('USE_REGISTER_PHONE' => 'register_phone'))
		                	    ->fields(array('*'))
							    ->where('USE_REGISTER_PHONE.register_id = ?', $registerId)
								->fetch('All');
		
		$this->view->phone = $useResultPhone;
						   
	}

    //----------------------------------
    //  showContent
    //----------------------------------
    /**
     * Realiza consulta na base de dados para recuperar informacoes detalhadas 
	 * de um conteudo, recebendo como parametros duas formas de identificador de
	 * conteudo.
	 * Na primeria opcao deve ser passado como parametro o identificador da area 
	 * onde o conteudo pertence, e com isso obter o identificador da categoria. 
     *
     * @return void
     */
    public function showContent($params) 
    {
    	$prepareHtml = $this->useClass('PrepareHtml');
		
    	//Verifica se recebeu identifcador de categoria
    	if(empty($params->category_id))
		{
	    	switch ($params->id) 
	    	{
				case 'televisor':
						$categoryId = 1;
					break;
					
				case 'audio-e-video':
						$categoryId = 2;
					break;
					
				case 'celular':
						$categoryId = 3;
					break;
					
				case 'informatica':
						$categoryId = 4;
					break;
					
				case 'eletrodomestico':
						$categoryId = 5;
					break;
					
				case 'ar-condicionado':
						$categoryId = 6;
					break;
			}
		}
		//Caso contrario recupera o identificador da categoria 
		else{
			$categoryId = $params->category_id;
		}

		//Recupera o identificador do usuario
		$useSecurity = new UseZF_Security();
		$registerId = $useSecurity->userInfo()->info->id;
		
    	//Recupera a lista de categorias do usuario logado
    	$useResultGroups = $this->useDB('SELECT')
                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
		                	    ->from(array('USE_REGISTER_HAS_REGISTER_GROUPS' => 'register_has_register_groups'))
		                	    ->fields(array('register_groups_id'))
								->join(array('USE_REGISTER_GROUPS' => 'register_groups'), 'USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = USE_REGISTER_GROUPS.id')
							    ->where('USE_REGISTER_HAS_REGISTER_GROUPS.register_id = ?', $registerId)
								->fetch('Col');
		
		//Converte a lista de categorias do usuario em lista string						
		$groupsIds = implode(",", $useResultGroups);
		$whereGroups = "USE_LG_PRODUCTS.category_id IN (". $groupsIds .")";
		
		//Verifica se o usuario cadastrado tem categorias associados a ele
		if(!empty($groupsIds))
		{
			//Verifica se existe um parametro de identificador de produto
			//Se nao existir recupera o primeiro produto da categoria 
			if(empty($params->product_id))
			{
				//Realiza consulta na base de dados para recuperar o produto que deve ser mostrado como principal
		    	$useResultProduct = $this->useDB('SELECT')
			                		     ->setFetchMode(Zend_Db::FETCH_OBJ)
			                		     ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
			                		     ->fields(array('*'))
									     ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('filename', 'folderpath', 'resource_type'))
									     ->where('USE_LG_PRODUCTS.category_id = ?', $categoryId)
									     ->where('USE_LG_RESOURCES.resource_type = ?', 'IMG')
									     ->where($whereGroups)
										 ->group('USE_LG_RESOURCES.source_id')
			                		     ->fetch('Row');
										 
				//Configura o dentificador do produto encontrado pelo identificador de categoria
				$productId = $useResultProduct->id;
			}
			//Caso contrario se existir um identificador de produto configura a variavel de identificador
			else{
				//Configura o identificador do produto recebido como parametro
				$productId = $params->product_id;	
			}
	
			//Verifica se existe um identificador de produto configurado de uma das formas anteriores
			if(!empty($productId))
			{
				//Recupera a lista de produtos
		    	$useResult = $this->useDB('SELECT')
		                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		   ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
		                		   ->fields(array('*', 'changed_in' => 'DATE_FORMAT(changed_in, "%d/%m/%Y")'))
								   ->where('USE_LG_PRODUCTS.id = ?', $productId)
								   ->where($whereGroups)
		                		   ->fetch('Row');
								   
				//Conta o total de conteudos relacionados ao produto				   
		    	$useResultCount = $this->useDB('SELECT')
		                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		   ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
		                		   ->fields(array('id','resource_type','total'=>'COUNT("resource_type")'))
								   ->where('USE_LG_RESOURCES.source_id = ?', $productId)
								   ->group('USE_LG_RESOURCES.resource_type')
		                		   ->fetch('All');
				if(!empty($useResult))
				{
					//Recupera a lista de imagens do produto
			    	$useResultImages = $this->useDB('SELECT')
				                		    ->setFetchMode(Zend_Db::FETCH_OBJ)
				                		    ->from(array('USE_IMAGES_PROPERTY' => 'images_property'))
				                		    ->fields(array('*'))
										    ->where('USE_IMAGES_PROPERTY.source_id = ?', $productId)
				                		    ->fetch('All');

					//Prepara html do conteudo prncipal
					$html = $prepareHtml->htmlContent($productId, $useResult, $useResultCount, $useResultImages);
				}
				else{
					$html = $prepareHtml->htmlMessage('Nenhum produto foi encontrado.');
				}
			}
			//Caso não exista identificador de produto configurado informa que não tem produto disponivel para este usuario 
			else{
				$html = $prepareHtml->htmlMessage('Nenhum produto foi encontrado.');
			}
		}
		//Informa que não tem produto disponivel para este usuario que nao possuiu grupo de categorias relacionado a ele
		else{
			$html = $prepareHtml->htmlMessage('Nenhum produto foi encontrado.');
		}
		
		$this->view->content = $html;
	}

    //----------------------------------
    //  content
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function content($params) 
    {
		$userInfo = $this->useSecurity()->userInfo();
		
    	switch ($params->id) 
    	{
			case 'televisor':
					$categoryId = 1;
					$this->view->category = 'Televisor';
				break;
				
			case 'audio-e-video':
					$categoryId = 2;
					$this->view->category = 'Aúdio e Vídeo';
				break;
				
			case 'celular':
					$categoryId = 3;
					$this->view->category = 'Celular';
				break;
				
			case 'informatica':
					$categoryId = 4;
					$this->view->category = 'Informática';
				break;
				
			case 'eletrodomestico':
					$categoryId = 5;
					$this->view->category = 'Eletrodoméstico';
				break;
				
			case 'ar-condicionado':
					$categoryId = 6;
					$this->view->category = 'Ar-Condicionado';
				break;
		}
		
		$registerId	= $userInfo->info->id;
		
		//Recupera a lista de recursos do usuário logado
    	$useResultResources = $this->useDB('SELECT')
                	   			   ->setFetchMode(Zend_Db::FETCH_OBJ)
		                	       ->from(array('USE_LG_RESOURCES_RETAILERS' => 'lg_resources_retailers'))
		                	       ->fields(array('lg_resources_id'))
								   ->group('USE_LG_RESOURCES_RETAILERS.lg_resources_id')
							       ->where('USE_LG_RESOURCES_RETAILERS.retailer_id != ?', $userInfo->info->parent_id)
								   ->fetch('Col');
		
		//Monta a lista	de recursos que deve ser mostrado							
		$resourcesIds = implode(",", $useResultResources);
		
		//Configura a condição com a lista de recursos do usuário
		$whereResources = "USE_LG_RESOURCES.id NOT IN (". $resourcesIds .")";
		
		//Realiza consulta na tabela de produtos de acordo com o termo informado
    	/*
    	$this->useDB('SELECT')
		  	 ->setFetchMode(Zend_Db::FETCH_OBJ)
		     ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
		     ->fields(array('*'))
			 ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id', array('product_title' => 'title', 'image_url', 'image_filename'))
	  		 ->where("USE_LG_RESOURCES.is_active = ? ", "1")
			 ->where("USE_LG_PRODUCTS.is_active = ? ", "1")
	  		 ->where("USE_LG_PRODUCTS.category_id = ? ", $categoryId)
	  		 ->where("USE_LG_RESOURCES.changed_in > ?", $userInfo->info->last_login)
			 ->group("USE_LG_PRODUCTS.id");
										 
		//Verifica os recursos disponivel para o usuario
		if(!empty($resourcesIds)) $this->useDB('SELECT')->where($whereResources);
										 
		$useResultRecentResources = $this->useDB('SELECT')
										 ->order("USE_LG_RESOURCES.order_position ASC")
				            		     ->fetch('All');
		
		$totalItens = count($useResultRecentResources);
		$this->view->recentResources = $totalItens;
		*/ 
		
		//Verifica se recebeu subcategoria
		if(!empty($params->subcategory_id))
		{
			/*
			switch ($params->subcategory_id) {
				case 'recent':
					$this->view->totalItens = $totalItens;
		
					if(isset($params->pagina))
						$pagina = $params->pagina;
					else
						$pagina = 1;
			
			        $paginator = Zend_Paginator::factory($useResultRecentResources);
			        // Seta a quantidade de registros por página
			        $paginator->setItemCountPerPage(20);
			        // numero de paginas que serão exibidas
			        $paginator->setPageRange(10);
			        // Seta a página atual
			        $paginator->setCurrentPageNumber($pagina);
			        // Passa o paginator para a view
			        $this->view->paginator = $paginator;
			
					$useResultRecentResources = $paginator;
			
					$this->view->listResources = $useResultRecentResources;
					
					break;
				
				case 'new':
					//Realiza consulta na tabela de produtos de acordo com o termo informado
			    	$this->useDB('SELECT')
            		  	 ->setFetchMode(Zend_Db::FETCH_OBJ)
            		     ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
            		     ->fields(array('*'))
						 ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id', array('product_title' => 'title', 'image_url', 'image_filename'))
				  		 ->where("USE_LG_RESOURCES.is_active = ? ", "1")
						 ->where("USE_LG_PRODUCTS.is_active = ? ", "1")
				  		 ->where("USE_LG_PRODUCTS.category_id = ? ", $categoryId)
				  		 ->where("USE_LG_RESOURCES.status_new_date_out >= ?", date('Y-m-d'))
						 ->order("USE_LG_RESOURCES.order_position ASC")
						 ->group("USE_LG_PRODUCTS.id");
													 
					//Verifica os recursos disponivel para o usuario
					if(!empty($resourcesIds)) $this->useDB('SELECT')->where($whereResources);
													 
					$useResultNewResources = $this->useDB('SELECT')->fetch('All');
					
					$totalItens = count($useResultNewResources);
					$this->view->totalItens = $totalItens;
					
					if(isset($params->pagina))
						$pagina = $params->pagina;
					else
						$pagina = 1;
			
			        $paginator = Zend_Paginator::factory($useResultNewResources);
			        // Seta a quantidade de registros por página
			        $paginator->setItemCountPerPage(20);
			        // numero de paginas que serão exibidas
			        $paginator->setPageRange(10);
			        // Seta a página atual
			        $paginator->setCurrentPageNumber($pagina);
			        // Passa o paginator para a view
			        $this->view->paginator = $paginator;
			
					$useResultNewResources = $paginator;
		
					$this->view->listResources = $useResultNewResources;
					
					break;
						
				default:
					
					$this->useDB('SELECT_PRODUCTS')
            		     ->setFetchMode(Zend_Db::FETCH_OBJ)
            		     ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
            		     ->fields(array('*'))
						 ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id', array('product_title' => 'title', 'image_url', 'image_filename'))
					     ->where('USE_LG_PRODUCTS.category_id = ?', $categoryId)
					     ->where("USE_LG_PRODUCTS.is_active = 1")
			   		   	 ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
						 ->where("USE_LG_RESOURCES.is_active = 1")
			   		   	 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
					     ->where('USE_LG_RESOURCES.resource_type = ?', 'IMG')
						 ->where('USE_LG_PRODUCTS.subcategory_id = ?', $params->subcategory_id)
						 ->order("USE_LG_RESOURCES.order_position ASC")
						 ->group("USE_LG_PRODUCTS.id");
											  
					//Verifica os recursos disponivel para o usuario
					if(!empty($resourcesIds)) $this->useDB('SELECT_PRODUCTS')->where($whereResources);
					
					$useResultProducts = $this->useDB('SELECT_PRODUCTS')						  
											  ->group('USE_LG_RESOURCES.source_id')
				                		      ->fetch('All');
					
					$totalItens = count($useResultProducts);
					$this->view->totalItens = $totalItens;
					
					if(isset($params->pagina))
						$pagina = $params->pagina;
					else
						$pagina = 1;
			
			        $paginator = Zend_Paginator::factory($useResultProducts);
			        // Seta a quantidade de registros por página
			        $paginator->setItemCountPerPage(20);
			        // numero de paginas que serão exibidas
			        $paginator->setPageRange(10);
			        // Seta a página atual
			        $paginator->setCurrentPageNumber($pagina);
			        // Passa o paginator para a view
			        $this->view->paginator = $paginator;
			
					$useResultProducts = $paginator;
		
					$this->view->listProducts = $useResultProducts;
					
					break;
			}
			*/
			
			$this->useDB('SELECT_PRODUCTS')
    		     ->setFetchMode(Zend_Db::FETCH_OBJ)
    		     ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
    		     ->fields(array('*'))
				 ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id', array('product_title' => 'title', 'image_url', 'image_filename', 'status_new_date_out'))
			     ->where('USE_LG_PRODUCTS.category_id = ?', $categoryId)
			     ->where("USE_LG_PRODUCTS.is_active = 1")
	   		   	 ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
				 ->where("USE_LG_RESOURCES.is_active = 1")
	   		   	 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
			     //->where('USE_LG_RESOURCES.resource_type = ?', 'IMG')
				 ->where('USE_LG_PRODUCTS.subcategory_id = ?', $params->subcategory_id)
				 ->order("USE_LG_RESOURCES.order_position ASC")
				 ->group("USE_LG_PRODUCTS.id");
									  
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_PRODUCTS')->where($whereResources);
			
			$useResultProducts = $this->useDB('SELECT_PRODUCTS')						  
									  ->group('USE_LG_RESOURCES.source_id')
		                		      ->fetch('All');
			
			$totalItens = count($useResultProducts);
			$this->view->totalItens = $totalItens;
			
			if(isset($params->pagina))
				$pagina = $params->pagina;
			else
				$pagina = 1;
	
	        $paginator = Zend_Paginator::factory($useResultProducts);
	        // Seta a quantidade de registros por página
	        $paginator->setItemCountPerPage(20);
	        // numero de paginas que serão exibidas
	        $paginator->setPageRange(10);
	        // Seta a página atual
	        $paginator->setCurrentPageNumber($pagina);
	        // Passa o paginator para a view
	        $this->view->paginator = $paginator;
	
			$useResultProducts = $paginator;

			$this->view->listProducts = $useResultProducts;
		}
		else {
			
			$this->useDB('SELECT_PRODUCTS')
    		     ->setFetchMode(Zend_Db::FETCH_OBJ)
    		     ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
    		     ->fields(array('*'))
				 ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id', array('product_title' => 'title', 'image_url', 'image_filename', 'status_new_date_out'))
			     ->where('USE_LG_PRODUCTS.category_id = ?', $categoryId)
				 ->where("USE_LG_PRODUCTS.is_active = 1")
	   		   	 ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
				 ->where("USE_LG_RESOURCES.is_active = 1")
	   		   	 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
			     //->where('USE_LG_RESOURCES.resource_type = ?', 'IMG')
				 ->order("USE_LG_RESOURCES.order_position ASC")
				 ->group("USE_LG_PRODUCTS.id");
									  
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_PRODUCTS')->where($whereResources);
									  
			$useResultProducts = $this->useDB('SELECT_PRODUCTS')
									  ->group('USE_LG_RESOURCES.source_id')
		                		      ->fetch('All');
			
			$totalItens = count($useResultProducts);
			$this->view->totalItens = $totalItens;
			
			if(isset($params->pagina))
				$pagina = $params->pagina;
			else
				$pagina = 1;
	
	        $paginator = Zend_Paginator::factory($useResultProducts);
	        // Seta a quantidade de registros por página
	        $paginator->setItemCountPerPage(20);
	        // numero de paginas que serão exibidas
	        $paginator->setPageRange(10);
	        // Seta a página atual
	        $paginator->setCurrentPageNumber($pagina);
	        // Passa o paginator para a view
	        $this->view->paginator = $paginator;
	
			$useResultProducts = $paginator;

			$this->view->listProducts = $useResultProducts;
		}
		
    	//Recupera a lista de categorias do usuário logado
    	$useResultSubcategory = $this->useDB('SELECT')
	                	   		  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	  ->from(array('USE_REGISTER_GROUPS' => 'register_groups'))
			                	  ->fields(array('id', 'title'))
								  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), 'USE_REGISTER_GROUPS.id = USE_LG_PRODUCTS.subcategory_id')
								  ->where('USE_REGISTER_GROUPS.parent_id = ?', $categoryId)
								  ->where("USE_LG_PRODUCTS.is_active = ? ", "1")
								  ->group('USE_REGISTER_GROUPS.id')
								  ->fetch('All');

		$this->view->listSubcategory = $useResultSubcategory;
		
		//Recupera a lista de arquivos acessados recentemente pelo usuario
    	$this->showLastContent();
	}

	 //----------------------------------
    //  contentDetail
    //----------------------------------
    /**
     * Mostra os detalhes do recurso selecionado
     *
     * @return void
     */
    public function contentDetail($params) 
    {
    	//Recupera o identificador do usuário logado
		$registerId	= $this->view->userInfo->id;
		
		//Verifica se recebeu identificador
		if(!empty($params->id))
		{
			//Recupera os dados do recurso informado
	    	$useResult = $this->useDB('SELECT')
		                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		   ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
		                		   ->fields(array('*'))
		                		   ->join(array('USE_LG_PRODUCTS' => 'lg_products'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('product_id' => 'id', 'category_id'))
		                		   ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
								   ->where('USE_LG_RESOURCES.id = ?', $params->id)
								   ->where("USE_LG_PRODUCTS.is_active = 1")
							   	   ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
		                		   ->fetch('Row');
			
			//Verifica se encontrou o recurso
			if(!empty($useResult))
			{
				//Recupera a lista de conteudos do produto, relacionado ao recurso informado
				$useResultResources = $this->useDB('SELECT')
			                		   	   ->setFetchMode(Zend_Db::FETCH_OBJ)
			                		   	   ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
			                		   	   ->fields(array('*'))
									   	   ->where('USE_LG_RESOURCES.source_id = ?', $useResult->source_id)
									   	   ->where('USE_LG_RESOURCES.resource_type = ?', $useResult->resource_type)
									   	   ->where('USE_LG_RESOURCES.id != ?', $useResult->id)
										   ->where("USE_LG_RESOURCES.is_active = 1")
								   		   ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
			                		   	   ->fetch('All');
				
				//Recupera os dados do produto relacionado ao recurso informado
				$useResultProduct = $this->useDB('SELECT')
				                		 ->setFetchMode(Zend_Db::FETCH_OBJ)
				                		 ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
				                		 ->fields(array('*', 'changed_in' => 'DATE_FORMAT(changed_in, "%d/%m/%Y")'))
										 ->where('USE_LG_PRODUCTS.id < ?', $useResult->source_id)
										 ->where("USE_LG_PRODUCTS.is_active = 1")
								   		 ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
				                		 ->fetch('Row');
		
				//Recupera o identificador do recurso anterior
				$useResultPrevResource = $this->useDB('SELECT')
				                		 ->setFetchMode(Zend_Db::FETCH_OBJ)
				                		 ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
				                		 ->fields(array('id'))
										 ->where('USE_LG_RESOURCES.id = (SELECT MAX( id ) FROM lg_resources WHERE id < '.$params->id.' AND source_id = '.$useResult->source_id.' AND resource_type = "'.$useResult->resource_type.'")')
										 ->where("USE_LG_RESOURCES.is_active = 1")
								   		 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
										 ->order('USE_LG_RESOURCES.order_position DESC')
				                		 ->fetch('Row');
		
				//Recupera o identificador do proximo recurso
				$useResultNextResource = $this->useDB('SELECT')
				                		 ->setFetchMode(Zend_Db::FETCH_OBJ)
				                		 ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
				                		 ->fields(array('id'))
										 ->where('USE_LG_RESOURCES.source_id = ?', $useResult->source_id)
										 ->where('USE_LG_RESOURCES.resource_type = ?', $useResult->resource_type)
										 ->where('USE_LG_RESOURCES.id > ?', $params->id)
									     ->where("USE_LG_RESOURCES.is_active = 1")
								   		 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
										 ->order('USE_LG_RESOURCES.order_position ASC')
				                		 ->fetch('Row');
		
				switch ($useResult->resource_type) 
				{
					case 'VDO':
							if(!empty($useResult->image_video))
								$imageVideo = $useResult->image_video;
							else
								$imageVideo = $this->view->baseUrl .'/public/images/icons/iconFilm.png';
							
							$preview = '<video height="337" src="'. $this->view->baseUrl . $useResult->folderpath .'/'. $useResult->filename .'" type="video/flv" id="player1" poster="'. $imageVideo .'" controls="controls" preload="none"></video>';
						break;
						
					case 'IMG':
							$preview = '<img alt="" height="337" src="'. $this->view->baseUrl . $useResult->folderpath .'/show/'. $useResult->filename .'" />';
						break;
						
					default:
							$preview = $this->previewGoogleDocs($useResult);
						break;
				}
										 
				//Retorna para a view a imagem ou videw de preview
				$this->view->preview = $preview;								 
										 
				//Verifica se o total de pontos é maior que zero
				//Define a média de votos do recurso
				if($useResult->total_rating > 0)
					$useResult->rating_average = ($useResult->total_rating / $useResult->total_rating_votes);
				else
					$useResult->rating_average = 0;
		
				//Retorna para a view os detalhes do recurso							   							   
				$this->view->contentDetail = $useResult;
				
				//Retorna para a view os conteudos relacionados ao produto do recurso informado
				$this->view->listResources = $useResultResources;
				
				//Configura os dados para salvar o total de visualizações do recurso
				$data = useObject();
				$data->id = $useResult->id;
				$data->total_view = ($useResult->total_view + 1);
				
				//Atualiza o total de visualizações do recurso selecionado
				$this->saveTotalView($data);
				
				//Retorna para a view os dados do produto
				$this->view->product = $useResultProduct;
				
				//Verifica se tem recurso anterior, e então retorna para a view
				if(!empty($useResultPrevResource)) $this->view->prevResource = $useResultPrevResource->id;
		
				//Verifica se tem recurso anterior, e então retorna para a view
				if(!empty($useResultNextResource)) $this->view->nextResource = $useResultNextResource->id;
				
				$this->saveAnalytics(strtoupper($params->action));
			}
		}
	}

	 //----------------------------------
    //  contentPublic
    //----------------------------------
    /**
     * Mostra os detalhes do recurso selecionado
     *
     * @return void
     */
    public function contentPublic($params) 
    {
		//Recupera os dados do recurso informado
    	$useResult = $this->useDB('SELECT')
	                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
	                		   ->from(array('USE_LG_ANALYTCS_EMAIL_FRIEND' => 'lg_analytcs_email_friend'))
	                		   ->fields(array('*'))
							   ->where('USE_LG_ANALYTCS_EMAIL_FRIEND.email_uid = ?', $params->uid)
							   ->where('USE_LG_ANALYTCS_EMAIL_FRIEND.email_date >= ?', date('Y-m-d'))
	                		   ->fetch('Row');
		
		//Verifica se encontrou o produto acessado
		if(!empty($useResult))
		{
			//Recupera a lista de conteudos do produto, relacionado ao recurso informado
			$useResultResources = $this->useDB('SELECT')
		                		   	   ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		   	   ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
		                		   	   ->fields(array('*'))
								   	   ->where('USE_LG_RESOURCES.id = ?', $useResult->lg_resources_id)
		                		   	   ->fetch('Row');
			
			//Recupera os dados do produto relacionado ao recurso informado
			$useResultProduct = $this->useDB('SELECT')
			                		 ->setFetchMode(Zend_Db::FETCH_OBJ)
			                		 ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
			                		 ->fields(array('*', 'changed_in' => 'DATE_FORMAT(changed_in, "%d/%m/%Y")'))
									 ->where('USE_LG_PRODUCTS.id = ?', $useResultResources->source_id)
			                		 ->fetch('Row');
	
	
			switch ($useResultResources->resource_type) 
			{
				case 'VDO':
						if(!empty($useResultResources->image_video))
							$imageVideo = $useResultResources->image_video;
						else
							$imageVideo = $this->view->baseUrl .'/public/images/icons/iconFilm.png';
						
						$preview = '<video height="337" src="'. $this->view->baseUrl . $useResultResources->folderpath .'/'. $useResultResources->filename .'" type="video/flv" id="player1" poster="'. $imageVideo .'" controls="controls" preload="none"></video>';
					break;
					
				case 'IMG':
						$preview = '<img alt="" height="337" src="'. $this->view->baseUrl . $useResultResources->folderpath .'/show/'. $useResultResources->filename .'" />';
					break;
					
				default:
						$preview = $this->previewGoogleDocs($useResultResources);
					break;
			}
									 
			//Retorna para a view a imagem ou videw de preview
			$this->view->preview = $preview;								 
	
			//Retorna para a view os detalhes do recurso							   							   
			$this->view->contentDetail = $useResultResources;
			
			//Retorna para a view os dados do produto
			$this->view->product = $useResultProduct;
			
			return true;
		}
		else{
			return false;			
		}
	}
	
	//----------------------------------
    //  previewGoogleDocs
    //----------------------------------
    /**
     * Verifica se o formato do arquivo pode ser visualizado no google docs e 
	 * retorna o link do mesmo
     *
     * @return void
     */
    public function previewGoogleDocs($data) 
    {
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
            		      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
            		      ->fields(array('*'))
					      ->where("USE_LG_RESOURCES.id  = ?", $data->id)
            		      ->fetch('Row');
						  
    	switch ($data->format) {
			case 'psd':
				$preview = '<a target="_blank" href="http://docs.google.com/viewer?url='. $this->view->baseUrl . $useResult->folderpath .'/'. $useResult->filename .'&embedded=true"><img alt="" height="340" src="'. $this->view->useDefault->images .'/preview/iconesDetalhesPreviewPsd.png" /></a>';
				break;
			case 'pdf':
				$preview = '<a target="_blank" href="http://docs.google.com/viewer?url='. $this->view->baseUrl . $useResult->folderpath .'/'. $useResult->filename .'&embedded=true"><img alt="" height="340" src="'. $this->view->useDefault->images .'/preview/iconesDetalhesPreviewPdf.png" /></a>';
				break;
			
			default:
				
				//Lista de formatos permitidos visualizar pelo google docs
				$arFormats = array('doc', 'docx','xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'pages', 'ai', 'psd', 'tiff', 'dxf', 'svg', 'eps', 'ps', 'ttf', 'xps', 'zip', 'rar');
				
				//Verifica se o formato e permitido visualizar pelo google docs
				//Entao adiciona o link
				if(in_array($data->format, $arFormats))
				{
					$preview = '<a target="_blank" href="http://docs.google.com/viewer?url='. $this->view->baseUrl . $useResult->folderpath .'/'. $useResult->filename .'&embedded=true"><img alt="" height="340" src="'. $this->view->useDefault->images .'/preview/iconesDetalhesPreviewOutros.png" /></a>';
				}
				else{
					$preview = '<img alt="" height="340" src="'. $this->view->useDefault->images .'/preview/iconesDetalhesOutros.png" />';
				}				
				
				break;
		}
		
		return $preview;
	}
	//----------------------------------
    //  contentShow
    //----------------------------------
    /**
     * Realiza consulta na base de dados e recupera informacoes dos conteudos 
	 * para popular o accordion principal
     *
     * @return void
     */
    public function contentShow($params) 
    {
    	$listResources = array();
		
		//Recupera o identificador do usuario
    	$registerId = $this->useSecurity()->userInfo()->info->id;
    	
		$userInfo = $this->useSecurity()->userInfo();
		
		//Recupera a lista de recursos do usuário logado
    	$useResultResources = $this->useDB('SELECT')
                	   			   ->setFetchMode(Zend_Db::FETCH_OBJ)
		                	       ->from(array('USE_LG_RESOURCES_RETAILERS' => 'lg_resources_retailers'))
		                	       ->fields(array('lg_resources_id'))
								   ->group('USE_LG_RESOURCES_RETAILERS.lg_resources_id')
							       ->where('USE_LG_RESOURCES_RETAILERS.retailer_id != ?', $userInfo->info->parent_id)
								   ->fetch('Col');
		
		//Monta a lista	de recursos que deve ser mostrado							
		//$resourcesIds = implode(",", $useResultResources);
		$resourcesIds = "";
		
		//Configura a condição com a lista de recursos do usuário
		//$whereResources = "USE_LG_RESOURCES.id NOT IN (". $resourcesIds .")";
		$whereResources = "";
		
		//Recupera o produto principal
    	$useResult = $this->useDB('SELECT')
                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
                		   ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
                		   ->fields(array('*', 'changed_in' => 'DATE_FORMAT(changed_in, "%d/%m/%Y")'))
						   ->where('USE_LG_PRODUCTS.id = ?', $params->id)
						   ->where("USE_LG_PRODUCTS.is_active = 1")
						   ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
                		   ->fetch('Row');
						   
		//Verifica se o produto foi encontrado
		if(!empty($useResult))
		{
			//Recupera a lista de recurso de logo e guia
	    	$useResultLogoGuide = $this->useDB('SELECT')
		                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
	                		       ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
	                		       ->fields(array('*', 'lg_resources_id' => 'id', 'resource_title' => 'title'))
								   ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
							       ->where('USE_LG_RESOURCES.id = ?', 1)
	                		       ->fetch('Row');
	
			//Recupera a lista de conteudos images
	    	$this->useDB('SELECT_IMG')
    		     ->setFetchMode(Zend_Db::FETCH_OBJ)
		         ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
		         ->fields(array('*'))
		         ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
			     ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
		         ->where('USE_LG_PRODUCTS.id = ?', $params->id)
			     ->where("USE_LG_RESOURCES.is_active = 1")
	   		     ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
		         ->where('USE_LG_RESOURCES.resource_type = ?', 'IMG');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_IMG')->where($whereResources);
								   
	  		$useResultImage = $this->useDB('SELECT_IMG')->group('USE_LG_RESOURCES.id')
								   ->order('USE_LG_RESOURCES.order_position ASC')
	                		       ->fetch('All');
								   
			$listResources['IMG'] = array('id' => 'IMG', 'title' => 'Imagens', 'icon' => 'icImagens.gif', 'iconImage' => 'iconesImagens100x80.gif', 'list' => $useResultImage, 'total' => count($useResultImage));
			
			//Recupera a lista de arquivos especificacoes tecnicas
	    	$this->useDB('SELECT_EST')
    		     ->setFetchMode(Zend_Db::FETCH_OBJ)
		         ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
		         ->fields(array('*'))
		         ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
			     ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
		         ->where('USE_LG_PRODUCTS.id = ?', $params->id)
			     ->where("USE_LG_RESOURCES.is_active = 1")
	   		     ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
		         ->where('USE_LG_RESOURCES.resource_type = ?', 'EST');
			
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_EST')->where($whereResources);
								   
	  		$useResultTechnicalSpecifications = $this->useDB('SELECT_EST')->group('USE_LG_RESOURCES.id')
								   										  ->order('USE_LG_RESOURCES.order_position ASC')
	                		       										  ->fetch('All');
								   
			$listResources['EST'] = array('id' => 'EST', 'title' => 'Especificações Técnicas', 'icon' => 'icEspecificacoesTecnicas.gif', 'iconImage' => 'iconesEspTecnicas100x80.gif', 'list' => $useResultTechnicalSpecifications, 'total' => count($useResultTechnicalSpecifications));
	
			//Recupera a lista de arquivos manual de instrucoes
	    	$this->useDB('SELECT_MNL')
    		     ->setFetchMode(Zend_Db::FETCH_OBJ)
		         ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
		         ->fields(array('*'))
		         ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
			     ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
		         ->where('USE_LG_PRODUCTS.id = ?', $params->id)
			     ->where("USE_LG_RESOURCES.is_active = 1")
	   		     ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
		         ->where('USE_LG_RESOURCES.resource_type = ?', 'MNL');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_MNL')->where($whereResources);
								   
	  		$useResultInstructionManual = $this->useDB('SELECT_MNL')->group('USE_LG_RESOURCES.id')
								   			   ->order('USE_LG_RESOURCES.order_position ASC')
	                		       			   ->fetch('All');
								   
			$listResources['MNL'] = array('id' => 'MNL', 'title' => 'Manual de Instruções', 'icon' => 'icManualInstrucoes.gif', 'iconImage' => 'iconesManualInst100x80.gif', 'list' => $useResultInstructionManual, 'total' => count($useResultInstructionManual));
			
			//Recupera a lista de conteudos logos e guide lg
	    	$this->useDB('SELECT_LGO')
    		     ->setFetchMode(Zend_Db::FETCH_OBJ)
		         ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
		         ->fields(array('*'))
		         ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
			     ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
		         ->where('USE_LG_PRODUCTS.id = ?', $params->id)
			     ->where("USE_LG_RESOURCES.is_active = 1")
	   		     ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
		         ->where('USE_LG_RESOURCES.resource_type = ?', 'LGO');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_LGO')->where($whereResources);
								   
	  		$useResultLogo = $this->useDB('SELECT_LGO')->group('USE_LG_RESOURCES.id')
								  ->order('USE_LG_RESOURCES.order_position ASC')
	                		      ->fetch('All');
								   
			//Adiciona na lista de logo e guia o logo e a guia
			array_unshift($useResultLogo, $useResultLogoGuide);
			
			$listResources['LGO'] = array('id' => 'LGO', 'title' => 'Logo e Guide LG', 'icon' => 'icGuideLG.gif', 'iconImage' => 'iconesLogos100x80.gif', 'list' => $useResultLogo, 'total' => count($useResultLogo));
			
			//Recupera a lista de conteudos videos 						   
	    	$this->useDB('SELECT_VDO')
		      	 ->setFetchMode(Zend_Db::FETCH_OBJ)
	             ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
	             ->fields(array('*'))
		         ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
		         ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
		         ->where('USE_LG_PRODUCTS.id = ?', $params->id)
			     ->where("USE_LG_RESOURCES.is_active = 1")
	   		     ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
		         ->where('USE_LG_RESOURCES.resource_type = ?', 'VDO');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_VDO')->where($whereResources);
								   
	  		$useResultVideo = $this->useDB('SELECT_VDO')->group('USE_LG_RESOURCES.id')
								   ->order('USE_LG_RESOURCES.order_position ASC')
	                		       ->fetch('All');
			
			$listResources['VDO'] = array('id' => 'VDO', 'title' => 'Videos', 'icon' => 'icVideos.gif', 'iconImage' => 'iconesVideos100x80.gif', 'list' => $useResultVideo, 'total' => count($useResultVideo));
	
	
			//Recupera a lista de conteudos features
	    	$this->useDB('SELECT_FTE')
		         ->setFetchMode(Zend_Db::FETCH_OBJ)
	             ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
	             ->fields(array('*'))
				 ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
				 ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
				 ->where('USE_LG_PRODUCTS.id = ?', $params->id)
				 ->where("USE_LG_RESOURCES.is_active = 1")
				 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
				 ->where('USE_LG_RESOURCES.resource_type = ?', 'FTE');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_FTE')->where($whereResources);
								   
	  		$useResultFeature = $this->useDB('SELECT_FTE')->group('USE_LG_RESOURCES.id')
								     ->order('USE_LG_RESOURCES.order_position ASC')
	                		         ->fetch('All');
			
			$listResources['FTE'] = array('id' => 'FTE', 'title' => 'Features', 'icon' => 'icFeatures.gif', 'iconImage' => 'iconesFeatures100x80.gif', 'list' => $useResultFeature, 'total' => count($useResultFeature));
	
			//Recupera a lista de arquivos flashes
	    	$this->useDB('SELECT_FLA')
		         ->setFetchMode(Zend_Db::FETCH_OBJ)
	             ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
	             ->fields(array('*'))
				 ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
				 ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
				 ->where('USE_LG_PRODUCTS.id = ?', $params->id)
				 ->where("USE_LG_RESOURCES.is_active = 1")
				 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
				 ->where('USE_LG_RESOURCES.resource_type = ?', 'FLA');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_FLA')->where($whereResources);
								   
	  		$useResultFlashes = $this->useDB('SELECT_FLA')->group('USE_LG_RESOURCES.id')
								     ->order('USE_LG_RESOURCES.order_position ASC')
	                		         ->fetch('All');
			
			$listResources['FLA'] = array('id' => 'FLA', 'title' => 'Flashes', 'icon' => 'icFlash.gif', 'iconImage' => 'iconesFlash100x80.gif', 'list' => $useResultFlashes, 'total' => count($useResultFlashes));
	
			//Recupera a lista de arquivos html
	    	$this->useDB('SELECT_HTM')
		    	 ->setFetchMode(Zend_Db::FETCH_OBJ)
	             ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
	             ->fields(array('*'))
				 ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
				 ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
				 ->where('USE_LG_PRODUCTS.id = ?', $params->id)
				 ->where("USE_LG_RESOURCES.is_active = 1")
				 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
				 ->where('USE_LG_RESOURCES.resource_type = ?', 'HTM');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_HTM')->where($whereResources);
								   
	  		$useResultHtml = $this->useDB('SELECT_HTM')->group('USE_LG_RESOURCES.id')
								  ->order('USE_LG_RESOURCES.order_position ASC')
	                		      ->fetch('All');
			
			$listResources['HTM'] = array('id' => 'HTM', 'title' => 'HTML', 'icon' => 'icHtmls.gif', 'iconImage' => 'iconesHTML100x80.gif', 'list' => $useResultHtml, 'total' => count($useResultHtml));
	
			//Recupera a lista de arquivos photoshop
	    	$this->useDB('SELECT_PSD')
    		   	 ->setFetchMode(Zend_Db::FETCH_OBJ)
		       	 ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
		       	 ->fields(array('*'))
		       	 ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
			   	 ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
		       	 ->where('USE_LG_PRODUCTS.id = ?', $params->id)
			   	 ->where("USE_LG_RESOURCES.is_active = 1")
	   		   	 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
		       	 ->where('USE_LG_RESOURCES.resource_type = ?', 'PSD');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_PSD')->where($whereResources);
								   
	  		$useResultPsd = $this->useDB('SELECT_PSD')->group('USE_LG_RESOURCES.id')
								   ->order('USE_LG_RESOURCES.order_position ASC')
	                		       ->fetch('All');
			
			$listResources['PSD'] = array('id' => 'PSD', 'title' => 'PSD', 'icon' => 'icPsds.gif', 'iconImage' => 'iconesPSD100x80.gif', 'list' => $useResultPsd, 'total' => count($useResultPsd));
	
			//Recupera a lista de arquivos pdf
	    	$this->useDB('SELECT_PDF')
        		 ->setFetchMode(Zend_Db::FETCH_OBJ)
    		     ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
    		     ->fields(array('*'))
			     ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
				 ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
			     ->where('USE_LG_PRODUCTS.id = ?', $params->id)
				 ->where("USE_LG_RESOURCES.is_active = 1")
		   		 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
			     ->where('USE_LG_RESOURCES.resource_type = ?', 'PDF');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_PDF')->where($whereResources);
								   
	  		$useResultPdf = $this->useDB('SELECT_PDF')->group('USE_LG_RESOURCES.id')
								 ->order('USE_LG_RESOURCES.order_position ASC')
	                		     ->fetch('All');
			
			$listResources['PDF'] = array('id' => 'PDF', 'title' => 'PDF', 'icon' => 'icPdfs.gif', 'iconImage' => 'iconesPDF100x80.gif', 'list' => $useResultPdf, 'total' => count($useResultPdf));
			
			//Recupera a lista de arquivos outros
	    	$this->useDB('SELECT_OUT')
        		 ->setFetchMode(Zend_Db::FETCH_OBJ)
    		     ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
    		     ->fields(array('*'))
			     ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('lg_resources_id' => 'id', 'resource_title'=>'title', 'filename', 'format', 'folderpath', 'resource_type', 'height', 'width', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments', 'filesize'))
				 ->joinLeft(array('USE_LG_DOWNLOADS' => 'lg_downloads'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id AND USE_LG_DOWNLOADS.register_id = ". $registerId, array('download_id' => 'id', 'register_id'))
			     ->where('USE_LG_PRODUCTS.id = ?', $params->id)
				 ->where("USE_LG_RESOURCES.is_active = 1")
		   		 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
			     ->where('USE_LG_RESOURCES.resource_type = ?', 'OUT');
								   
			//Verifica os recursos disponivel para o usuario
			if(!empty($resourcesIds)) $this->useDB('SELECT_OUT')->where($whereResources);
								   
	  		$useResultOuthers = $this->useDB('SELECT_OUT')->group('USE_LG_RESOURCES.id')
								   	 ->order('USE_LG_RESOURCES.order_position ASC')
	                		       	 ->fetch('All');
			
			$listResources['OUT'] = array('id' => 'OUT', 'title' => 'Outros', 'icon' => 'icOutros.gif', 'iconImage' => 'iconesOutros100x80.gif', 'list' => $useResultOuthers, 'total' => count($useResultOuthers));
		}

		//Configura o produto principal
		$this->view->product = $useResult;
		
		//Configura a lista de conteudos	
		$this->view->listResources = $listResources;
		
		//Recupera a lista de arquivos acessados recentemente pelo usuario
    	$this->showLastContent();
	}
    
	//----------------------------------
    //  contentList
    //----------------------------------
    /**
     * Mostra a lista de conteudos já baixa de um determinado produto e um 
	 * determinado tipo de recurso
     *
     * @return void
     */
    public function contentList($params) 
    {
    	//Recupera o identificador do usuário logado
    	$registerId = $this->useSecurity()->userInfo()->info->id;

    	//Recupera o retailer do usuário logado
    	$parentId = $this->useSecurity()->userInfo()->info->parent_id;
		
		//Recupera as informacões do produto
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
                		  ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
                		  ->fields(array('*', 'changed_in' => 'DATE_FORMAT(changed_in, "%d/%m/%Y")'))
						  ->where('USE_LG_PRODUCTS.id = ?', $params->id)
                		  ->fetch('Row');
		
		//Retorna para a view as informações do produto				   
		$this->view->product = $useResult;
						                   		   
		//Recupera a lista de conteudos baixados, de um determinado usuário, 
		//produto e tipo de recurso						   
		$useResultDownload = $this->useDB('SELECT')
	                		   	  ->setFetchMode(Zend_Db::FETCH_OBJ)
                		       	  ->from(array('USE_LG_DOWNLOADS_COMPLETE' => 'lg_downloads_complete'))
                		       	  ->fields(array('*'))
								  ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_DOWNLOADS_COMPLETE.resource_id = USE_LG_RESOURCES.id", array('lg_resources_id' => 'id', 'source_id', 'filename', 'filesize', 'folderpath', 'image_video', 'title', 'description', 'resource_type', 'format', 'total_rating', 'total_rating_votes', 'total_download', 'total_view', 'total_comments'))
						          ->where('USE_LG_DOWNLOADS_COMPLETE.register_id = ?', $registerId)
						          ->where('USE_LG_RESOURCES.source_id = ?', $params->id)
						          ->where('USE_LG_RESOURCES.resource_type = ?', $params->resource_type)
						          ->group('USE_LG_DOWNLOADS_COMPLETE.resource_id')
                		       	  ->fetch('All');
		
		//Realiza consulta para verficar quem ja baixou o recurso
		foreach ($useResultDownload as $key => $value) 
		{
			$useResultDownloadRegister = $this->useDB('SELECT')
				                		   	  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                		       	  ->from(array('USE_LG_DOWNLOADS_COMPLETE' => 'lg_downloads_complete'))
			                		       	  ->fields(array('id'))
											  ->join(array('USE_REGISTER' => 'register'), "USE_LG_DOWNLOADS_COMPLETE.register_id = USE_REGISTER.id", array('parent_id'))
											  ->join(array('USE_REGISTER_PERSONAL' => 'register_personal'), "USE_LG_DOWNLOADS_COMPLETE.register_id = USE_REGISTER_PERSONAL.register_id", array('name' => 'CONCAT_WS(" ", name, middle_name, lastname)'))
									          ->where('USE_LG_DOWNLOADS_COMPLETE.resource_id = ?', $value->lg_resources_id)
									          ->where('USE_REGISTER.parent_id = ?', $parentId)
											  ->group('USE_LG_DOWNLOADS_COMPLETE.register_id')
			                		       	  ->fetch('All');
			
			//Atualiza a lista de conteudos com a lista de usuários que ja baixaram o mesmo recurso								  
			$useResultDownload[$key]->listDownloadRegister	= $useResultDownloadRegister;											  
		}								  

		//Retorna para a view a lista de conteudos
		$this->view->listDownload = $useResultDownload;
	}

	//----------------------------------
    //  contentListSearch
    //----------------------------------
    /**
     * Mostra a lista de arquivos de um determinado tipo, do produto selecionado
     *
     * @return void
     */
    public function contentListSearch($params) 
    {
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
                		  ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
                		  ->fields(array('*', 'changed_in' => 'DATE_FORMAT(changed_in, "%d/%m/%Y")'))
						  ->where('USE_LG_PRODUCTS.id = ?', $params->source_id)
						  ->where("USE_LG_PRODUCTS.is_active = 1")
						  ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
                		  ->fetch('Row');
						   
		$this->view->product = $useResult;
		
    	$useResultResources = $this->useDB('SELECT')
		                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
		                		   ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
		                		   ->fields(array('*'))
								   ->where('USE_LG_RESOURCES.source_id = ?', $params->source_id)
								   ->where('USE_LG_RESOURCES.resource_type = ?', strtoupper($params->resource_type))
								   ->where("USE_LG_RESOURCES.is_active = 1")
						   		   ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
		                		   ->fetch('All');
						   
		$this->view->listResource = $useResultResources;
	}
	
	//----------------------------------
    //  editRegister
    //----------------------------------
    /**
     * Edita os dados do registro do usuario
     *
     * @return void
     */
    public function editRegister($params) 
    {
    	//Configura os dados para gravar na tabela de registro
		$dataRegister = array();
		$dataRegister['id'] = $params->register_id;
		//$dataRegister['nickname'] = $params->nickname;
		$dataRegister['user_email'] = strtolower($params->user_email);
		$dataRegister['web_page'] = $params->web_page;

		//Salva os dados na tabela de registro
    	$this->useDB('SAVE_REGISTER')->data($dataRegister)->update('register', 'id = '. $params->register_id);
		
		//Configura os dados para gravar na tabela de registro de pessoa
		$dataRegisterPersonal = array();
		$dataRegisterPersonal['id'] = $params->register_personal_id;
		$dataRegisterPersonal['name'] = $params->name;
		$dataRegisterPersonal['lastname'] = $params->lastname;
		$dataRegisterPersonal['rg'] = $params->rg;
		$dataRegisterPersonal['cpf'] = $params->cpf;
		$dataRegisterPersonal['birth_day'] = $params->birth_day;
		$dataRegisterPersonal['birth_month'] = $params->birth_month;
		$dataRegisterPersonal['birth_year'] = $params->birth_year;
		$dataRegisterPersonal['sex'] = $params->sex;
		
		//Salva os dados na tabela de registro de pessoa
    	$this->useDB('SAVE_REGISTER_PERSONAL')->data($dataRegisterPersonal)->update('register_personal', 'id = '. $params->register_personal_id);
		
		//Configura os dados para gravar na tabela de registro de endereco
		$dataRegisterAddress = array();
		$dataRegisterAddress['id'] = $params->register_address_id;
		$dataRegisterAddress['zipcode'] = $params->zipcode;
		$dataRegisterAddress['address'] = $params->address;
		$dataRegisterAddress['number'] = $params->number;
		$dataRegisterAddress['complement'] = $params->complement;
		$dataRegisterAddress['neighborhood'] = $params->neighborhood;
		$dataRegisterAddress['city'] = $params->city;
		$dataRegisterAddress['state'] = $params->state;

		//Salva os dados na tabela de registro de endereco
    	$this->useDB('SAVE_REGISTER_ADDRESS')->data($dataRegisterAddress)->update('register_address', 'id = '. $params->register_address_id);

		//Configura os dados para gravar na tabela de registro de telefone
		$dataRegisterPhone = array();
		$dataRegisterPhone['id'] = $params->register_phone_id;
		$dataRegisterPhone['ddd'] = $params->ddd;
		$dataRegisterPhone['phone'] = $params->phone;
		
		//Salva os dados na tabela de registro de endereco
    	$this->useDB('SAVE_REGISTER_PHONE')->data($dataRegisterPhone)->update('register_phone', 'id = '. $params->register_phone_id);
		
		//Retorna mensagem de sucesso para a view
		$this->view->messageSuccess = 'Dados alterados com sucesso!';
	}

	//----------------------------------
    //  saveRegister
    //----------------------------------
    /**
     * Salva os dados do registro do novo usuario
     *
     * @return void
     */
    public function saveRegister($params) 
    {
    	//Configura os dados para gravar na tabela de registro
		$dataRegister = array();
		$dataRegister['uid'] = md5(strtotime('now'));
		$dataRegister['register_profile_id'] = 6;
		$dataRegister['parent_id'] = $params->parent_id;
		$dataRegister['nickname'] = $params->nickname;
		$dataRegister['user_email'] = strtolower($params->user_email);
		$dataRegister['user_password'] = strtolower($params->user_password);
		$dataRegister['web_page'] = $params->web_page;
		$dataRegister['register_type'] = 'P';
		$dataRegister['is_active'] = 0;

		//Salva os dados na tabela de registro
    	$register_id = $this->useDB('SAVE_REGISTER')->data($dataRegister)->insert('register');
		
		//Configura os dados para gravar na tabela de registro de pessoa
		$dataRegisterPersonal = array();
		$dataRegisterPersonal['register_id'] = $register_id;
		$dataRegisterPersonal['name'] = $params->name;
		$dataRegisterPersonal['lastname'] = $params->lastname;
		$dataRegisterPersonal['rg'] = $params->rg;
		$dataRegisterPersonal['cpf'] = $params->cpf;
		$dataRegisterPersonal['birth_day'] = $params->birth_day;
		$dataRegisterPersonal['birth_month'] = $params->birth_month;
		$dataRegisterPersonal['birth_year'] = $params->birth_year;
		$dataRegisterPersonal['sex'] = $params->sex;
		
		//Salva os dados na tabela de registro de pessoa
    	$this->useDB('SAVE_REGISTER_PERSONAL')->data($dataRegisterPersonal)->insert('register_personal');
		
		//Configura os dados para gravar na tabela de registro de endereco
		$dataRegisterAddress = array();
		$dataRegisterAddress['register_id'] = $register_id;
		$dataRegisterAddress['zipcode'] = $params->zipcode;
		$dataRegisterAddress['address'] = $params->address;
		$dataRegisterAddress['number'] = $params->number;
		$dataRegisterAddress['complement'] = $params->complement;
		$dataRegisterAddress['neighborhood'] = $params->neighborhood;
		$dataRegisterAddress['city'] = $params->city;
		$dataRegisterAddress['state'] = $params->state;
		$dataRegisterAddress['country'] = 'BR';
		$dataRegisterAddress['address_type'] = 'RES';

		//Salva os dados na tabela de registro de endereco
    	$this->useDB('SAVE_REGISTER_ADDRESS')->data($dataRegisterAddress)->insert('register_address');

		//Configura os dados para gravar na tabela de registro de telefone
		$dataRegisterPhone = array();
		$dataRegisterPhone['register_id'] = $register_id;
		$dataRegisterPhone['ddi'] = '55';
		$dataRegisterPhone['ddd'] = $params->ddd;
		$dataRegisterPhone['phone'] = $params->phone;
		$dataRegisterPhone['phone_type'] = 'OUT';
		
		//Salva os dados na tabela de registro de endereco
    	$this->useDB('SAVE_REGISTER_PHONE')->data($dataRegisterPhone)->insert('register_phone');
		
		//Configura e grava os dados dos grupos na base de dados
		foreach ($params->groups as $item)
		{
			//Configura os dados para gravar na tabela de registro de grupos
			$dataRegisterGroups = array();
			$dataRegisterGroups['register_id'] = $register_id;
			$dataRegisterGroups['register_groups_id'] = $item;
			
			//Salva os dados na tabela de registro de endereco
    		$this->useDB('SAVE_REGISTER_HAS_REGISTER_GROUPS')->data($dataRegisterGroups)->insert('register_has_register_groups');
		}

		//Verifica se o colaborar informou um retailer nao cadastrado
		if($params->parent_id == 'OUT')
		{
			//Configura os dados para gravar na tabela de registro de historico
			$dataRegisterHistorical = array();
			$dataRegisterHistorical['register_id'] = $register_id;
			$dataRegisterHistorical['message'] = 'Coloborador sem rede cadastrada! Rede indicada: '. $params->retailer_name;
			
			//Salva os dados na tabela de registro de endereco
    		$this->useDB('SAVE_REGISTER_HISTORICAL')->data($dataRegisterHistorical)->insert('register_historical');
		}
		
		//Configura a mensagem
		$message = '<p>Seu registro foi realizado com sucesso no <strong>Portal de Conteúdos LG</strong>, para validar o seu cadastro acesso o link abaixo:</p>';
		$message .= '<p><a href="'. $this->view->baseUrl .'/authentication/'. $dataRegister['uid'] .'">'. $this->view->baseUrl .'/authentication/'. $dataRegister['uid'] .'</a></p>';
		
		//Configura os dados da conta de envio		
		$smtp     = "mail.email.alog.com.br";
		$conta    = "portal@parceirolg.com.br";
		$senha    = "123qwe@";
		$de       = "portal@parceirolg.com.br";
		 
		//Define os parametros de autenticação
		$config = array (
	                'auth' => 'login',
   	                'username' => $conta,
   	                'password' => $senha,
   	                );
	
		//Configura os parametros de autenticação
   	    $mailTransport = new Zend_Mail_Transport_Smtp($smtp, $config);
        
		//Configura os paramentros e envia o e-mail
   	    $mail = new Zend_Mail();
   	    $mail->setFrom($de);
   	    $mail->addTo($params->user_email);
   	    $mail->setBodyHtml(utf8_decode($message));
   	    $mail->setSubject(utf8_decode("Portal de Conteúdos LG - Cadastro"));
   	    $mail->send($mailTransport);
	}
	
	//----------------------------------
    //  saveComment
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function saveComment($params) 
    {
    	$useResult = $this->useDB('SELECT')
                		   ->setFetchMode(Zend_Db::FETCH_OBJ)
                		   ->from(array('USE_LG_COMMENTS' => 'lg_comments'))
                		   ->fields(array('total' => 'count(*)'))
						  //NOTFINAL - USE_LG_COMMENTS.lg_resouRces_id'
						   ->where('USE_LG_COMMENTS.lg_resouces_id = ?', $params->lg_resources_id)
                		   ->fetch('Row');
		
    	$registerId = $this->useSecurity()->userInfo()->info->id;
    	$params->register_nick = $this->useSecurity()->userInfo()->info->nickname;
    	$params->is_approved = 1;
		
    	$save = $this->useDB('SAVE_COMMENT')->data($params)->insert('lg_comments');
		
		$this->useDB('SAVE_TOTAL_COMMENT')->data(array('total_comments' => ($useResult->total + 1)))->update('lg_resources', 'id = '. $params->lg_resources_id);
		
		if($save)
			$this->view->content = "Comentário enviado com sucesso!";
		else {
			$this->view->content = "Erro ao enviar comentário!";
		}
	}

	//----------------------------------
    //  saveRating
    //----------------------------------
    /**
     * Realiza consulta para buscar o total de votos recebidos pelo recurso
	 * Atualiza o total de rating e o total de votos do recurso
	 * Retorna a média de votos que o recurso recebeu
     *
     * @return void
     */
    public function saveRating($params) 
    {
    	//Atualiza o total de rating e o total de votos do recurso
		$useResult = $this->useDB('SELECT')
            		   	  ->setFetchMode(Zend_Db::FETCH_OBJ)
        		       	  ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
        		       	  ->fields(array('total_rating_votes', 'total_rating'))
				          ->where('USE_LG_RESOURCES.id = ?', $params->id)
        		       	  ->fetch('Row');
		
		//Atualiza o total de rating e o total de votos do recurso
		$params->total_rating = ($useResult->total_rating + $params->total_rating);
		$params->total_rating_votes = ($useResult->total_rating_votes + 1);
		
    	$save = $this->useDB('SAVE_RATING')->data($params)->update('lg_resources', 'id = '. $params->id);
		
		//Retorna a média de votos que o recurso recebeu
		$this->view->content = ($params->total_rating / $params->total_rating_votes);
	}

	//----------------------------------
    //  saveTotalView
    //----------------------------------
    /**
     * Atualiza o total de visualizações de um recurso
     *
     * @return void
     */
    public function saveTotalView($data) 
    {
    	$this->useDB('SAVE_TOTAL_VIEW')->data($data)->update('lg_resources', 'id = '. $data->id);
	}
	
	//----------------------------------
    //  saveTotalDownload
    //----------------------------------
    /**
     * Atualiza o total de downloads de um recurso
     *
     * @return void
     */
    public function saveTotalDownload($resource_id) 
    {
    	//Atualiza o total de rating e o total de votos do recurso
		$useResult = $this->useDB('SELECT')
            		   	  ->setFetchMode(Zend_Db::FETCH_OBJ)
        		       	  ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
        		       	  ->fields(array('total_download'))
				          ->where('USE_LG_RESOURCES.id = ?', $resource_id)
        		       	  ->fetch('Row');
		
		//Configura os dados para salvar o total de visualizações do recurso
		$data = useObject();
		$data->total_download = ($useResult->total_download + 1);
		
    	$this->useDB('SAVE_TOTAL_DOWNLOAD')->data($data)->update('lg_resources', 'id = '. $resource_id);
	}

	//----------------------------------
    //  savePassword
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function savePassword($params) 
    {
    	$params->id = $this->useSecurity()->userInfo()->info->id;
		
		if(!empty($params->user_password) || !empty($params->user_password_confirm))
		{
			if($params->user_password == $params->user_password_confirm)
			{
				$this->useDB('SAVE_PASSWORD')->data($params)->update('register', 'id = '. $params->id);
				
				return null;
			}
			else{
				$this->view->content = "As senhas não são iguais!";
			}
		}
		else{
			$this->view->content = "As senhas estão vázias!";
		}
		
	}

	//----------------------------------
    //  saveNickname
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function saveNickname($params) 
    {
    	$params->id = $this->useSecurity()->userInfo()->info->id;
		
		if(!empty($params->nickname))
		{
			$this->useSecurity()->userInfo()->info->nickname = $params->nickname;
			
			$this->useDB('SAVE_NICKNAME')->data($params)->update('register', 'id = '. $params->id);
			$this->view->content = null;
		}
		else{
			$this->view->content = "Nickname está vázio!";
		}
	}

	//----------------------------------
    //  saveMessage
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function saveMessage($params) 
    {
    	$params->register_from_id = $this->useSecurity()->userInfo()->info->id;
		
		if(!empty($params->message))
		{
			$this->useSecurity()->userInfo()->info->nickname = $params->nickname;
			
			if(!empty($params->parent_id))
			{
				$this->useDB('SAVE_MESSAGE')->data(array('is_read'=>$params->is_read, 'message_status'=>$params->message_status))->update('register_messages', 'id = '. $params->parent_id);
			}
			
			$this->useDB('SAVE_MESSAGE')->data($params)->insert('register_messages');
	
			$this->view->content = "Mensagem enviada com sucesso!";
		}
		else{
			$this->view->content = "A mensagem está vázia!";
		}
	}

	//----------------------------------
    //  showComment
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function showComment($params) 
    {
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
            		      ->from(array('USE_LG_COMMENTS' => 'lg_comments'))
            		      ->fields(array('*'))
					      ->where('USE_LG_COMMENTS.is_approved = ?', 1)
						  //NOTFINAL - USE_LG_COMMENTS.lg_resouRces_id'
					      ->where('USE_LG_COMMENTS.lg_resouces_id = ?', $params->lg_resources_id)
						  ->order('USE_LG_COMMENTS.created_in DESC')
            		      ->fetch('All');
		
		$month = array();
		$month['01'] = 'Janeiro';
		$month['02'] = 'Fevereiro';
		$month['03'] = 'Março';
		$month['04'] = 'Abril';
		$month['05'] = 'Maio';
		$month['06'] = 'Junho';
		$month['07'] = 'Julho';
		$month['08'] = 'Agosto';
		$month['09'] = 'Setembro';
		$month['10'] = 'Outubro';
		$month['11'] = 'Novembro';
		$month['12'] = 'Dezembro';
		
		$html = '<ul>';
						  
		foreach ($useResult as $key => $value) 
		{
			$createdIn = explode(" ", $value->created_in);
			$date = $createdIn[0];
			$date = explode("-", $date);
			
			$hour = $createdIn[1];
			$hour = explode(":", $hour);
			$hour = $hour[0] .":". $hour[1];
			
			$dateFull = $date[2] .' de '. $month[$date[1]] .' às '. $hour;
			
			if($key % 2 == 0)
				$class = ' class="useColor"';
			else
				$class = '';
				
			$html .= '<li'. $class .'>
						<div class="useComment">
							<span class="UiTitle">'. $value->register_nick .'&nbsp;</span> <span class="UiTextComments">'. $value->message .'</span>
						</div>
						<div class="UiWrap">
							<div class="UiDetail">
								'. $dateFull .'
							</div>
						</div>
						<div class="useClear"></div>
					  </li>';
		}
		
		$html .= '</ul>';
		
		//Verifica se tem comentario, e então retorna o mesmo pra view
		if(!empty($useResult)) $this->view->content = $html;						  
	}

	//----------------------------------
    //  talk
    //----------------------------------
    /**
     * Envia para a view os dados dos grupos do usuario
     *
     * @return void
     */
    public function talk() 
    {
    	$userInfo = $this->useSecurity()->userInfo();
		
		$arCategory = array();


		foreach ($userInfo->info->register_has_register_groups as $value) 
		{
			$arCategory[] = $value->title;
		}
		
		$this->view->listCategory = $arCategory;
	}

	//----------------------------------
    //  showMessage
    //----------------------------------
    /**
     * Realiza busca pelas mensagens do usuario logado
     *
     * @return void
     */
    public function showMessage($params) 
    {
    	$userInfo = $this->useSecurity()->userInfo();
		
    	$registerId = $userInfo->info->id;
		
		//Realiza busca pelas mensagens do usuário logado
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
            			  ->from(array('USE_REGISTER_MESSAGES' => 'register_messages'))
            			  ->fields(array('*'))
						  ->joinLeft(array('USE_REGISTER_MESSAGES_CHILD' => 'register_messages'), "USE_REGISTER_MESSAGES_CHILD.parent_id = USE_REGISTER_MESSAGES.id")
						  //Exibe mensagens enviadas ou destinadas ao usuário logado
						  ->where('USE_REGISTER_MESSAGES.register_to_id = '. $registerId .' OR USE_REGISTER_MESSAGES.register_from_id = '. $registerId)
						  //Ou exibe mensagens que não possuem mensagem pai
						  ->where('USE_REGISTER_MESSAGES.parent_id IS NULL');
						  
		//Verifica se tem dados de busca
		if(!empty($params->search))
			$this->useDB('SELECT')
				 ->where("USE_REGISTER_MESSAGES.message LIKE '%". $params->search ."%'");
		
		//Realiza consulta para buscar pelas mensagens do usuário
		$useResult = $this->useDB('SELECT')
						  ->order('USE_REGISTER_MESSAGES.created_in DESC')
						  ->order('USE_REGISTER_MESSAGES_CHILD.created_in DESC')
						  ->group('USE_REGISTER_MESSAGES.id')
						  ->fetch('All');
		
		$month = array();
		$month['01'] = 'Janeiro';
		$month['02'] = 'Fevereiro';
		$month['03'] = 'Março';
		$month['04'] = 'Abril';
		$month['05'] = 'Maio';
		$month['06'] = 'Junho';
		$month['07'] = 'Julho';
		$month['08'] = 'Agosto';
		$month['09'] = 'Setembro';
		$month['10'] = 'Outubro';
		$month['11'] = 'Novembro';
		$month['12'] = 'Dezembro';
		
		$html = '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
						  
		foreach ($useResult as $key => $value) 
		{
			//Realiza busca pelas mensagens do usuário logado
	    	$useRegisterMessagesFirst = $this->useDB('SELECT')
					            		     ->setFetchMode(Zend_Db::FETCH_OBJ)
					        		         ->from(array('USE_REGISTER_MESSAGES' => 'register_messages'))
					        		         ->fields(array('*'))
					        		         ->joinLeft(array('USE_REGISTER' => 'register'), "USE_REGISTER_MESSAGES.register_to_id = USE_REGISTER.id", array('register_profile_id'))
					        		         ->joinLeft(array('USE_REGISTER_PERSONAL' => 'register_personal'), "USE_REGISTER_MESSAGES.register_to_id = USE_REGISTER_PERSONAL.register_id", array('name' => 'CONCAT_WS(" ", name, middle_name, lastname)'))
					        		         ->joinLeft(array('USE_REGISTER_PROFILE' => 'register_profile'), "USE_REGISTER.register_profile_id = USE_REGISTER_PROFILE.id", array('title'))
									         ->where('USE_REGISTER_MESSAGES.id =?', $value->id)
					        		         ->fetch('Row');
			
			//NOTFINAL- RETORNOU NADA
			//Realiza busca pelas mensagens do usuário logado
	    	$useRegisterMessagesLast = $this->useDB('SELECT')
					            		    ->setFetchMode(Zend_Db::FETCH_OBJ)
					        		        ->from(array('USE_REGISTER_MESSAGES' => 'register_messages'))
					        		        ->fields(array('*'))
									        ->where('USE_REGISTER_MESSAGES.parent_id =?', $value->id)
										    ->order('USE_REGISTER_MESSAGES.created_in DESC')
					        		        ->fetch('Row');
			
			//Consulta o total de interações
	    	$useRegisterMessagesTotal = $this->useDB('SELECT')
					            		     ->setFetchMode(Zend_Db::FETCH_OBJ)
					        		         ->from(array('USE_REGISTER_MESSAGES' => 'register_messages'))
					        		         ->fields(array('total' => 'count(*)'))
									         ->where('USE_REGISTER_MESSAGES.parent_id = ?', $value->id)
					        		         ->fetch('Row');
			
			switch ($value->message_status) {
				case "OPN":
				{
					$status = '<span style="color:#25c300;font-weight:bold;">Aberta</span>';
					break;
				}
					
				case "AEI":
				{
					$status = '<span style="color:#00c6ff;font-weight:bold;">Aguardando interação</span>';
					break;
				}
					
				case "AEV":
				{
					$status = '<span style="color:#25c300;font-weight:bold;">Aguardando avaliação</span>';
					break;
				}
					
				case "CLS":
				{
					$status = '<span style="color:#ff3600;font-weight:bold;">Fechada</span>';
					break;
				}
			}
			
			$useRegisterMessagesTotal->total = ($useRegisterMessagesTotal->total + 1);
			
			//Verifica se teve alguma interacao
			if($useRegisterMessagesTotal->total == 1)
			{
				$register_to_name = $area = "Aguardando interação"; 
			}
			else{
				$register_to_name = $useRegisterMessagesFirst->name;
				$area = $useRegisterMessagesFirst->title;
			}
			
			//Configura a data de abertura
			$dateOpen = new Zend_Date($value->created_in);
			$dateOpen->toString('DD/MM/YYYY');
			
			//Configura a data da ultima interacao
			if(!empty($useRegisterMessagesLast))
			{
				$dateOpenLast = new Zend_Date($useRegisterMessagesLast->created_in);
				$dateOpenLast->toString('DD/MM/YYYY');
			}
			else {
				$dateOpenLast = $dateOpen;	
			}
			
			//Verifica se o indice e par para colocar efeito de zebra na lista
			if($key % 2 == 0)
				$class = ' class="useColor"';
			else
				$class = '';
			
			$html .= '<tr'. $class .'>
					    <td><strong>Número:</strong> <a href="'. $this->view->baseUrl .'/talk/message/'. $value->id .'"> '. $value->id .'</a></td>
					    <td><strong>Data de abertura:</strong> '. $dateOpen .' </td>
					    <td><strong>Interações:  </strong> '. $useRegisterMessagesTotal->total .' </td>
					  </tr>
					  <tr'. $class .'>
					    <td><strong>Assunto:</strong><a href="'. $this->view->baseUrl .'/talk/message/'. $value->id .'"> '. $value->subject .' </a>	</td>
					    <td><strong>Tipo:</strong> '. $value->message_type .'</td>
					    <td><strong>Última Interação: </strong> '. $dateOpenLast .'</td>
					  </tr>
					  <tr'. $class .'>
					    <td colspan="2"><strong>Descrição:</strong> '. UseZF_Util::useTruncate($value->message,95) .'</td>
					    <td><strong>Área:  </strong> '. $area .'</td>
					  </tr>
					  <tr'. $class .'>
					    <td><strong>Responsável:</strong> '. $register_to_name .'</td>
					    <td><strong> Aberto por:</strong> '. $userInfo->info->name .' </td>
					    <td><strong>Status:  </strong> <a href="'. $this->view->baseUrl .'/talk/message/'. $value->id .'">'. $status .'</a></td>
					  </tr>
					  <tr><td colspan="4" style="height:5px;"></td></tr>';
		}
		
		$html .= '</table>';
		
		$this->view->content = $html;						  
	}

	//----------------------------------
    //  populatePersonal
    //----------------------------------
    /**
     *  Realiza consulta para buscar pelos usuários do tipo pessoa física
     *
     * @return void
     */
    public function populatePersonal() 
    {
    	//Configura a consulta, para buscar pelos usuários do tipo pessoa física
    	$useResult = $this->useDB('SELECT')
	                	  ->setFetchMode(Zend_Db::FETCH_OBJ)
	            		  ->from(array('USE_REGISTER_PERSONAL' => 'register_personal'))
	            		  ->fields(array('*'))
						  ->join(array('USE_REGISTER' => 'register'), "USE_REGISTER_MESSAGES.register_to_id = USE_REGISTER.id", array('register_profile_id'))
						  ->fetch('All');
	}
	
	//----------------------------------
    //  showMessageList
    //----------------------------------
    /**
     * Realiza busca pelas mensagens do usuario logado
     *
     * @return void
     */
    public function showMessageList($params) 
    {
    	$registerId = $this->useSecurity()->userInfo()->info->id;
		
		//Realiza busca por todas as mensagens
    	$message = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
            		      ->from(array('USE_REGISTER_MESSAGES' => 'register_messages'))
            		      ->fields(array('*'))
					      ->where('USE_REGISTER_MESSAGES.id = '. $params->parent_id)
            		      ->fetch('Row');
						  
		//Realiza busca pelas mensagens do usuário logado
    	$messageList = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
            		      ->from(array('USE_REGISTER_MESSAGES' => 'register_messages'))
            		      ->fields(array('*'))
					      ->where('USE_REGISTER_MESSAGES.id = '. $params->parent_id .' OR USE_REGISTER_MESSAGES.parent_id = '. $params->parent_id)
						  ->joinLeft(array('USE_REGISTER_PERSONAL' => 'register_personal'), "USE_REGISTER_MESSAGES.register_from_id = USE_REGISTER_PERSONAL.register_id", array('fullname'))
						  ->order('USE_REGISTER_MESSAGES.created_in DESC')
            		      ->fetch('All');
		
		$month = array();
		$month['01'] = 'Janeiro';
		$month['02'] = 'Fevereiro';
		$month['03'] = 'Março';
		$month['04'] = 'Abril';
		$month['05'] = 'Maio';
		$month['06'] = 'Junho';
		$month['07'] = 'Julho';
		$month['08'] = 'Agosto';
		$month['09'] = 'Setembro';
		$month['10'] = 'Outubro';
		$month['11'] = 'Novembro';
		$month['12'] = 'Dezembro';
		
		$html = '<div class="UiMessage">
					<div class="usePageTitle">
						<h3>'. $message->subject .'</h3>
					</div>
					<div class="usePageContent">';
				
		//Verifica se a mensagem esta fechada
		if($message->is_close == 1)
		{
			//Verifica se o fechamento da mensagem recebeu nota
			if($message->close_note <= 0)
			{
				$html .= '<table width="100%" border="0">
							<tr>
								<td>
									<strong>Dê sua nota:</strong> <input type="radio" name="close_note" value="5">Ótimo&nbsp;&nbsp;<input type="radio" name="close_note" value="4">Bom&nbsp;&nbsp;<input type="radio" name="close_note" value="3">Regular&nbsp;&nbsp;<input type="radio" name="close_note" value="2">Ruim&nbsp;&nbsp;<input type="radio" name="close_note" value="1">Péssimo
						  		</td>
						  	</tr>
						  	<tr>
						  		<td>
						  			<textarea id="close_observation" style="width: 960px; border:1px solid #949597; padding:10px;"></textarea>
						  		</td>
						  	</tr>
						  </table>
						  <br />
						  <div style="padding: 10px 5px 10px 0px; text-align: right;">
							<input id="evaluateMessage" type="image" src="'. $this->view->useDefault->images .'/bt/btEnviar.png" onclick="evaluateMessage();" />
						  </div>
						  <br />';
			}
		}
		else{
			$html .= '<form id="formMessage" action="#" onsubmit="return false;">
						<textarea id="message" style="width: 960px; border:1px solid #949597; padding:10px;"></textarea>
						<div style="padding: 10px 5px 10px 0px; text-align: right;">
							<input id="cancelMessage" type="image" src="'. $this->view->useDefault->images .'/bt/btCancelar.png" value="Cancelar"/>
							<input id="saveMessage" type="image" src="'. $this->view->useDefault->images .'/bt/btEnviar.png" />
						</div>
					  </form>';
		}

		$html .= '<table width="100%" border="0">';
		
		foreach ($messageList as $key => $value) 
		{
			//Recupera a data decorrida formatada
			$dateFull = UseZF_Util::useDateElapsed($value->created_in, strtotime(date('Y-m-d H:i:s')));
			
			//Verifica se o indice e par para colocar efeito de zebra na lista
			if($key % 2 == 0)
				$class = ' class="useColor"';
			else
				$class = '';
			
			if($this->useSecurity()->userInfo()->info->id == $value->register_from_id){
				$send = $this->useSecurity()->userInfo()->info->name.''.$this->useSecurity()->info->lastname;
			}else{
				//$send = 'Gerente de Digital Marketing';
				$send = $value->fullname;
			}

			$html .= '<tr'. $class .'>
					<td>
						<img src="'. $this->view->useDefault->images .'/thumbUsuario.gif" align="left" style="margin-right: 10px;"/>
						<h2>'.$send.'</h2>
						<div>'. nl2br($value->message) .'</div>
					</td>
					<td width="230" valign="top">
						'. $dateFull .'
					</td>
				</tr>';
					
					/*
					 * ANTIGO
					 * pe( $this->useSecurity()->userInfo());
					
					   [name] => demo
            [middle_name] => 
            [lastname] => demo
					
			$html .= '<tr'. $class .'>
						<td>
							<img src="'. $this->view->useDefault->images .'/thumbUsuario.gif" align="left" style="margin-right: 10px;"/>
							<h2>Você e Gerente de Digital Marketing</h2>
							<div>'. $value->message .'</div>
						</td>
						<td width="230">
							'. $dateFull .'
						</td>
					</tr>';*/
		}
		
		$html .= '</table>';
		
		$html .= '<div class="useClear"></div>
				  </div>
				  <div class="useClear"></div>
				  </div>';
		
		$this->view->content = $html;						  
	}

	//----------------------------------
    //  checkReadMessage
    //----------------------------------
    /**
     * Marcar uma mensagem como lida
     *
     * @return void
     */
    public function checkReadMessage($params) 
    {
    	$save = $this->useDB('SAVE_CHECK_READ_MESSAGE')->data(array('is_read' => 1))->update('register_messages', 'id = '. $params->id);
		
		$this->view->content = $save;
	}

	//----------------------------------
    //  evaluateMessage
    //----------------------------------
    /**
     * Marcar uma mensagem como lida
     *
     * @return void
     */
    public function evaluateMessage($params) 
    {
    	$save = $this->useDB('EVALUATE_MESSAGE')->data($params)->update('register_messages', 'id = '. $params->id);
	}

	//----------------------------------
    //  removeMessage
    //----------------------------------
    /**
     * Remove uma mensagem
     *
     * @return void
     */
    public function removeMessage($params) 
    {
    	$save = $this->useDB('REMOVE_MESSAGE')->remove('register_messages', 'id = '. $params->id);
		
		$this->view->content = $save;
	}	
	
	//----------------------------------
    //  preview
    //----------------------------------
    /**
     * Realiza consulta para buscar o endereço do documento informado
     *
     * @return void
     */
    public function preview($params) 
    {
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
            		      ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
            		      ->fields(array('*'))
					      ->where("USE_LG_RESOURCES.id  = ?", $params->id)
            		      ->fetch('Row');
						  
		$this->view->preview = $useResult;
	}
	
	//----------------------------------
    //  search
    //----------------------------------
    /**
     * Realiza busca de acordo com o termo informado
     *
     * @return void
     */
    public function search($params) 
    {
    	//Instancia a classe de montagem da estrutura html
    	$prepareHtml = $this->useClass('PrepareHtml');
		
    	//Verifica se existe 
    	if(!isset($params->type)) $params->type = null;
		
		//Verifica se recebeu parametro de busca
		if(empty($params->por)){
			$html = '<div align="center">
							<table border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td><img alt="" src="'. $this->view->useDefault->images .'/icons/iconAlertMenor.png" /></td>
							    <td style="width: 300px; font-weight: bold; font-size: 14px; color: #404040;">Nenhum termo foi digitado!</td>
							  </tr>
							</table>
						</div>';
		} 
		else {
			$procurarPor = $params->por;
			
			$userInfo = $this->useSecurity()->userInfo();
			
			//Recupera o identificador do usuario
	    	$registerId	= $userInfo->info->id;
			
			//Recupera a lista de produtos do usuario logado
	    	$useResultProducts = $this->useDB('SELECT')
	                	   			   ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	       ->from(array('USE_LG_PRODUCTS_RETAILERS' => 'lg_products_retailers'))
			                	       ->fields(array('lg_products_id'))
									   ->group('USE_LG_PRODUCTS_RETAILERS.lg_products_id')
								       ->where('USE_LG_PRODUCTS_RETAILERS.retailer_id != ?', $userInfo->info->parent_id)
									   ->fetch('Col');
			
			//Monta a lista	de produtos que deve ser mostrado							
			$productsIds = implode(",", $useResultProducts);
			
			//Configura a condicao com a lista de produtos do usuario
			$whereProducts = "USE_LG_PRODUCTS.id NOT IN (". $productsIds .")";

			//Recupera a lista de recursos do usuário logado
	    	$useResultResources = $this->useDB('SELECT')
	                	   			   ->setFetchMode(Zend_Db::FETCH_OBJ)
			                	       ->from(array('USE_LG_RESOURCES_RETAILERS' => 'lg_resources_retailers'))
			                	       ->fields(array('lg_resources_id'))
									   ->group('USE_LG_RESOURCES_RETAILERS.lg_resources_id')
								       ->where('USE_LG_RESOURCES_RETAILERS.retailer_id != ?', $userInfo->info->parent_id)
									   ->fetch('Col');
			
			//Monta a lista	de recursos que deve ser mostrado							
			$resourcesIds = implode(",", $useResultResources);
			
			//Configura a condição com a lista de recursos do usuário
			$whereResources = "USE_LG_RESOURCES.id NOT IN (". $resourcesIds .")";
			
	    	//Recupera a lista de categorias do usuário logado
	    	$useResultGroups = $this->useDB('SELECT')
	                	   			->setFetchMode(Zend_Db::FETCH_OBJ)
			                	    ->from(array('USE_REGISTER_HAS_REGISTER_GROUPS' => 'register_has_register_groups'))
			                	    ->fields(array('register_groups_id'))
									->join(array('USE_REGISTER_GROUPS' => 'register_groups'), 'USE_REGISTER_HAS_REGISTER_GROUPS.register_groups_id = USE_REGISTER_GROUPS.id')
								    ->where('USE_REGISTER_HAS_REGISTER_GROUPS.register_id = ?', $registerId)
									->fetch('Col');
									
			//Prepara lista de ids de areas de atuazao do usuario						
			$groupsIds = implode(",", $useResultGroups);
			$whereGroups = "USE_LG_PRODUCTS.category_id IN (". $groupsIds .")";
			
			
			//Verifica se o usuario tem area de atuazao definida
			if(!empty($groupsIds))
			{
				//Verifica se o tipo de consulta e retailer
				if ($params->type == 'product'){

					//Realiza consulta na tabela de produtos de acordo com o termo informado
			    	$this->useDB('SELECT')
                		 ->setFetchMode(Zend_Db::FETCH_OBJ)
            		     ->from(array('USE_LG_PRODUCTS' => 'lg_products'))
            		     ->fields(array('*'))
						 ->joinLeft(array('USE_IMAGES_PROPERTY' => 'images_property'), "USE_LG_PRODUCTS.id = USE_IMAGES_PROPERTY.source_id", array('folderpath', 'filename'))
					     ->where("USE_LG_PRODUCTS.title LIKE '%". $procurarPor ."%' OR USE_LG_PRODUCTS.code LIKE '%". $procurarPor ."%' OR USE_LG_PRODUCTS.promotional_title LIKE '%". $procurarPor ."%' OR USE_LG_PRODUCTS.promotional_sub_title LIKE '%". $procurarPor ."%' OR USE_LG_PRODUCTS.promotional_description LIKE '%". $procurarPor ."%' OR USE_LG_PRODUCTS.observation_status LIKE '%". $procurarPor ."%'")
						 ->where("USE_LG_PRODUCTS.is_active = 1")
	   		   	  		 ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
						 ->where($whereGroups);
											  
					//Verifica os recursos disponivel para o usuario
					if(!empty($productsIds)) $this->useDB('SELECT')->where($whereProducts);
					
					$useResultProducts = $this->useDB('SELECT')
											  ->group("USE_LG_PRODUCTS.id")
					            		      ->fetch('All');
					
					$totalItens = count($useResultProducts);
					$this->view->totalItens = $totalItens;
					
					//Verifica se encontrou algum produto
					if(!empty($useResultProducts))
					{
						if(isset($params->pagina))
							$pagina = $params->pagina;
						else
							$pagina = 1;
				
				        $paginator = Zend_Paginator::factory($useResultProducts);
				        // Seta a quantidade de registros por página
				        $paginator->setItemCountPerPage(20);
				        // numero de paginas que serão exibidas
				        $paginator->setPageRange(10);
				        // Seta a página atual
				        $paginator->setCurrentPageNumber($pagina);
				        // Passa o paginator para a view
				        $this->view->paginator = $paginator;
				
						$useResultProducts = $paginator;
						
						$html = $prepareHtml->searchProduct($useResultProducts, $this->view->baseUrl, $params, $totalItens);
					}
					else {
						$html = '<div align="center">
									<table border="0" cellspacing="0" cellpadding="0">
									  <tr>
									    <td><img alt="" src="'. $this->view->useDefault->images .'/icons/iconAlertMenor.png" /></td>
									    <td style="width: 300px; font-weight: bold; font-size: 14px; color: #404040;">Nenhum produto encontrado.</td>
									  </tr>
									</table>
								</div>';
					}													  
					
				}
				else{
					//Realiza consulta na tabela de conteudos de acordo com o termo informado
			    	$this->useDB('SELECT')
                		 ->setFetchMode(Zend_Db::FETCH_OBJ)
            		     ->from(array('USE_LG_RESOURCES' => 'lg_resources'))
            		     ->fields(array('*'))
						 ->join(array('USE_LG_PRODUCTS' => 'lg_products'), "USE_LG_PRODUCTS.id = USE_LG_RESOURCES.source_id", array('product_title' => 'title', 'code', 'category_id'))
					     ->where("USE_LG_RESOURCES.filename LIKE '%". $procurarPor ."%' OR USE_LG_RESOURCES.title LIKE '%". $procurarPor ."%' OR USE_LG_RESOURCES.description LIKE '%". $procurarPor ."%' OR USE_LG_RESOURCES.format LIKE '%". $procurarPor ."%'")
						 ->where("USE_LG_PRODUCTS.is_active = 1")
	   		   	  		 ->where("USE_LG_PRODUCTS.date_out >= '". date('Y-m-d') ."'")
				  		 ->where("USE_LG_RESOURCES.is_active = 1")
	   		   	  		 ->where("USE_LG_RESOURCES.date_out >= '". date('Y-m-d') ."'")
						 ->where($whereGroups);
											   
					//Verifica os recursos disponivel para o usuario
					if(!empty($resourcesIds)) $this->useDB('SELECT')->where($whereResources);
					
					$useResultResources = $this->useDB('SELECT')						   
					            		       ->fetch('All');
					
					$totalItens = count($useResultResources);
					$this->view->totalItens = $totalItens;
					
					//Verifica se encontrou algum recurso
					if(!empty($useResultResources))
					{
						if(isset($params->pagina))
							$pagina = $params->pagina;
						else
							$pagina = 1;
				
				        $paginator = Zend_Paginator::factory($useResultResources);
				        // Seta a quantidade de registros por página
				        $paginator->setItemCountPerPage(20);
				        // numero de paginas que serão exibidas
				        $paginator->setPageRange(10);
				        // Seta a página atual
				        $paginator->setCurrentPageNumber($pagina);
				        // Passa o paginator para a view
				        $this->view->paginator = $paginator;
				
						$useResultResources = $paginator;
						
						$html = $prepareHtml->searchResource($useResultResources, $this->view->useDefault, $params, $totalItens);
					}
					else {
						$html = '<div align="center">
									<table border="0" cellspacing="0" cellpadding="0">
									  <tr>
									    <td><img alt="" src="'. $this->view->useDefault->images .'/icons/iconAlertMenor.png" /></td>
									    <td style="width: 500px; font-weight: bold; font-size: 14px; color: #404040;">Nenhum recurso encontrado. Deseja procurar por <a class="UiLinkBlue" href="'. $this->view->baseUrl .'/procurar/?por='. $params->por .'&type=product">produto?</a></td>
									  </tr>
									</table>
								</div>';
					}
				}
			}
			else{
				$html = '<div align="center">
							<table border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td><img alt="" src="'. $this->view->useDefault->images .'/icons/iconAlertMenor.png" /></td>
							    <td style="width: 400px; font-weight: bold; font-size: 14px; color: #404040;">Nenhum produto ou recurso foi encontrado.</td>
							  </tr>
							</table>
						</div>';
			}
		}

		$this->view->showSearch = $html;
		
		//Recupera a lista de arquivos acessados recentemente pelo usuario
    	$this->showLastContent();		
		
		return $html;
	}
	
	//----------------------------------
    //  addDownload
    //----------------------------------
    /**
     * Adiciona registro na tabela download
     *
     * @return void
     */
    public function addDownload($params) 
    {
    	//Cria objeto de identificacao de analytcs
		$userAnalytcs = new Zend_Session_Namespace('userAnalytcs');
		
		//Recupera o identificador do usuário
    	$params->register_id = $this->useSecurity()->userInfo()->info->id;
		
		//Recupera o identificador da sessao
		$params->session_id = $userAnalytcs->info->session_id;
		
		//Recupera a data e hora da sessao
		$params->session_created_in = $userAnalytcs->info->session_created_in;
		
		//recupera o numero de pagina 
		$params->page_number = $userAnalytcs->info->page_number;
		
		//Verifica se deve contar o total de download
		if(!empty($params->total_download))
		{
			//Atualiza o total de downloads do recurso selecionado
			$this->saveTotalDownload($params->resource_id);
			
			//cria data do click
			$params->download_click = date('Y-m-d H:i:s');
		}
		
		//Adciona registro na tabela download
    	$save = $this->useDB('ADD_DOWNLOD')->data($params)->insert('lg_downloads');
		
		//Verifica se salvou registro
		if($save)
			//Configura mensagens
			$this->view->content = "Arquivo adicionado a download!";
		else {
			$this->view->content = "Erro ao adicionar arquivo!";
		}
	}

	//----------------------------------
    //  downloadClick
    //----------------------------------
    /**
     * Remove o download da lista de download e grava o mesmo na lista de dowload
	 * completo com a flag de click
     *
     * @return void
     */
    public function downloadClick($params) 
    {
    	//Recupera as informacões do download
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
                		  ->from(array('USE_LG_DOWNLOADS' => 'lg_downloads'))
                		  ->fields(array('resource_id', 'register_id', 'created_in', 'session_id', 'session_created_in', 'page_number'))
						  ->where('USE_LG_DOWNLOADS.id = ?', $params->download_id)
                		  ->fetch('Row');
    	
		//Configura da data que o download foi a adicionado a lista
		$useResult->created_in_download = $useResult->created_in;
		
		//Configura o tipo de download
		$useResult->download_type = 'WEB';
		
		//Remove a data de criação da lista de download
		unset($useResult->created_in);
		
		//Remove o download selecionado
    	$this->useDB('REMOVE_DOWNLOD')->remove('lg_downloads', 'id = '. $params->download_id);
		
		//Insere o download selecionada na lista de download completo
    	$this->useDB('SAVE_DOWNLOD_COMPLETE')->data($useResult)->insert('lg_downloads_complete');
		
		if($params->has_image_high)
		{
			//Monta a url do arquivo
			$filename = BASE_ROOT . $params->folderpath .'/alta/'. $params->filename;
		}
		else{
			//Monta a url do arquivo
			$filename = BASE_ROOT . $params->folderpath .'/'. $params->filename;
		}
		
		$this->view->content = $this->view->baseUrl .'/download.php?url='. $filename;
	}	

	//----------------------------------
    //  removeDownload
    //----------------------------------
    /**
     * Remove o download da lista de download
     *
     * @return void
     */
    public function removeDownload($params) 
    {
		//Remove o download selecionado
    	$this->useDB('REMOVE_DOWNLOD')->remove('lg_downloads', 'id = '. $params->download_id);
	}
	
	//----------------------------------
    //  showDownloads
    //----------------------------------
    /**
     * Recupera a lista de arquivos ja baixados pelo usuario ou pelo grupo de usuarios
     *
     * @return void
     */
    public function showDownloads($params) 
    {
    	$type = null;
		$html = "";
		
		//Verifica se foi selecionado um tipo de consulta
		if(!empty($params->type)){
			//Verifica se o tipo de consulta e retailer
			if($params->type == 'retailer') $type = 'retailer';
		}
		
    	//Recupera o identificador do usuario logado
    	$registerId = $this->useSecurity()->userInfo()->info->id;
		
		//Recupera o identificador do retailer
    	$parentId = $this->useSecurity()->userInfo()->info->parent_id;
		
		//Realiza consulta para recuperar o total de itens disponivel para download 	
		$useResultResourcesDownload = $this->useDB('SELECT')
		            		  			   ->setFetchMode(Zend_Db::FETCH_OBJ)
		        		      			   ->from(array('USE_LG_DOWNLOADS' => 'lg_downloads'))
				            		       ->fields(array('total' => 'count(*)'))
										   ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id", array('resource_type'))
										   ->join(array('USE_LG_PRODUCTS' => 'lg_products'), "USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id", array('title', 'code', 'category_id'))
										   ->where('USE_LG_DOWNLOADS.register_id = ?', $registerId)
										   ->group('USE_LG_RESOURCES.resource_type')
				            		       ->fetch('All');	
		
		//Reseta o total de downloads 						   
		$total = 0;
		
		//Realiza uma contagem na lista de conteudos obtidas da base de dados							   
		foreach ($useResultResourcesDownload as $keyDownload => $itemDownload) 
		{
			//Adiciona o total de conteudos encontrados
			$total += $itemDownload->total;
		}
		//Configura a view o total de downloads
		$this->view->totalDownload = $total;								   							  

		//Recupera a lista de download completados
		$this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
            		      ->from(array('USE_LG_DOWNLOADS_COMPLETE' => 'lg_downloads_complete'))
            		      ->fields(array('*'))
						  ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_DOWNLOADS_COMPLETE.resource_id = USE_LG_RESOURCES.id", array('source_id'))
						  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), "USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id", array('product_id' => 'id', 'category_id', 'title', 'code', 'image_url', 'image_filename'))
						  ->join(array('USE_REGISTER' => 'register'), "USE_LG_DOWNLOADS_COMPLETE.register_id = USE_REGISTER.id", array('parent_id'));
						  
						  //Verifica se o tipo de consulta e retailer
						  if ($type == 'retailer'){
						  	//Identificador do retailer
						  	$this->useDB('SELECT')->where('USE_REGISTER.parent_id = ?', $parentId);
						  }
						  else{
						  	//Identificador do usuario logado
						  	$this->useDB('SELECT')->where('USE_LG_DOWNLOADS_COMPLETE.register_id = ?', $registerId);
						  }
						  
		$useResultDownloadComplet = $this->useDB('SELECT')
										 ->group('USE_LG_RESOURCES.source_id')
	            		       			 ->fetch('All');						  
	
		$totalItens = count($useResultDownloadComplet);
		$this->view->totalItens = $totalItens;
		
		if(isset($params->pagina))
			$pagina = $params->pagina;
		else
			$pagina = 1;

        $paginator = Zend_Paginator::factory($useResultDownloadComplet);
        // Seta a quantidade de registros por página
        $paginator->setItemCountPerPage(10);
        // numero de paginas que serão exibidas
        $paginator->setPageRange(10);
        // Seta a página atual
        $paginator->setCurrentPageNumber($pagina);
        // Passa o paginator para a view
        $this->view->paginator = $paginator;

		$useResultDownloadComplet = $paginator;

		//Verifica a total de conteudos baixados
		foreach ($useResultDownloadComplet as $keyDownloadComplet => $itemDownloadComplet) 
		{
			$useResultResourcesDownloadComplet = $this->useDB('SELECT')
				                		  			   ->setFetchMode(Zend_Db::FETCH_OBJ)
				            		      			   ->from(array('USE_LG_DOWNLOADS_COMPLETE' => 'lg_downloads_complete'))
							            		       ->fields(array('total' => 'count(*)'))
													   ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_DOWNLOADS_COMPLETE.resource_id = USE_LG_RESOURCES.id", array('resource_type'))
													   ->join(array('USE_LG_PRODUCTS' => 'lg_products'), "USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id", array('title', 'code'))
													   ->where('USE_LG_DOWNLOADS_COMPLETE.register_id = ?', $registerId)
													   ->where('USE_LG_PRODUCTS.id = ?', $itemDownloadComplet->source_id)
													   ->group('USE_LG_RESOURCES.resource_type')
													   ->group('USE_LG_DOWNLOADS_COMPLETE.resource_id')
							            		       ->fetch('All');
			
			//Define como zero o total de cada tipo de recurso
			$totalImageDownloadComplet = 0;
			$totalEspecificacoesTecnicasDownloadComplet = 0;
			$totalManualInstrucoesDownloadComplet = 0;
			$totalLogoDownloadComplet = 0;
			$totalVideoDownloadComplet = 0;
			$totalFeaturesDownloadComplet = 0;
			$totalFlashDownloadComplet = 0;
			$totalHtmlDownloadComplet = 0;
			$totalPsdDownloadComplet = 0;
			$totalPdfDownloadComplet = 0;
			$totalOuthersDownloadComplet = 0;
			
			//Configura o total de cada tipo de recurso de acordo com o resultado da consulta
			foreach ($useResultResourcesDownloadComplet as $itemResourcesDownloadComplet) 
			{
				switch ($itemResourcesDownloadComplet->resource_type) 
				{
					case 'IMG':
						$totalImageDownloadComplet++;
						break;

					case 'EST':
						$totalEspecificacoesTecnicasDownloadComplet++;
						break;

					case 'MNL':
						$totalManualInstrucoesDownloadComplet++;
						break;

					case 'LGO':
						$totalLogoDownloadComplet++;
						break;
						
					case 'VDO':
						$totalVideoDownloadComplet++;
						break;

					case 'FTE':
						$totalFeaturesDownloadComplet++;
						break;

					case 'FLA':
						$totalFlashDownloadComplet++;
						break;
						
					case 'HTM':
						$totalHtmlDownloadComplet++;
						break;
						
					case 'PSD':
						$totalPsdDownloadComplet++;
						break;
						
					case 'PDF':
						$totalPdfDownloadComplet++;
						break;
						
					case 'OUT':
						$totalOuthersDownloadComplet++;
						break;
				}
			}
			
			//Recupera o titulo da categoria
			switch ($itemDownloadComplet->category_id) 
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
			
			//Verifica se o indice é multiplo de 2 para mostra a lista no formato de zebra
			if($keyDownloadComplet % 2 == 0)
			{
				$class 		= ' class="useColor"';
				$useColor 	= 'useColor';
			}
			else
			{
				$class 		= '';
				$useColor 	= '';
			}
			
			//Define a image default para o produto
			$imageProduct = $this->view->useDefault->images .'/icons50/iconesImagem50x50.png';
			
			//Verifica se o produto tem imagem cadastrada, senão configura a imagem default
			if(!empty($itemDownloadComplet->image_filename))
			{
				$imageProduct = $this->view->baseUrl . $itemDownloadComplet->image_url . '/mini/'. $itemDownloadComplet->image_filename;
			}
			
			//Prepara o html
			$html .= '<div class="'. $useColor .'">
				<table width="100%" border="0" cellspacing="5" cellpadding="0">
				  <tr>
				    <td valign="middle" align="center" style="background:#FFF; width:65px; height:65px; border:1px solid #ccc;">
				    	<img alt="" src="'. $imageProduct .'"/>
				    </td>
				    <td style="width:200px;">
				    	<div class="UiTitle" style="padding-left:5px; width:200px; padding-bottom: 12px;">
							<span style="font-size: 11px;">
								<a title="" href="'. $this->view->baseUrl .'/content/'. $categoryPath .'">'. $categoryTitle .'</a>
							</span>
						</div>
				    	<div class="UiTitle" style="padding-left:5px; width:200px;">
							<span style="font-size: 16px; font-weight: bold;">'. $itemDownloadComplet->title .'</span>
						</div>
				    	<div class="UiTitle" style="padding-left:5px; width:200px;">
							<span class="UiCode">'. $itemDownloadComplet->code .'</span>
						</div>
					</td>
				     <td>';
					 
							//Monta a lista de conteudos com os totais de cada um
							$html .=	'<ul>';
										
										if($totalImageDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuImages" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/img">Imagens ('. $totalImageDownloadComplet .')</a></li>';
				
										if($totalEspecificacoesTecnicasDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuEspecificacoesTecnicas" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/est">Esp. Tec. ('. $totalEspecificacoesTecnicasDownloadComplet .')</a></li>';
											
										if($totalManualInstrucoesDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuManualInstrucoes" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/mnl">Manual ('. $totalManualInstrucoesDownloadComplet .')</a></li>';
										
										if($totalLogoDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuLogos" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/lgo">Logos ('. $totalLogoDownloadComplet .')</a></li>';

										if($totalVideoDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuVideos" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/vdo">Vídeos ('. $totalVideoDownloadComplet .')</a></li>';
				
										if($totalFeaturesDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuFeatures" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/fte">Features ('. $totalFeaturesDownloadComplet .')</a></li>';
				
										if($totalFlashDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuFlash" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/fla">Flash ('. $totalFlashDownloadComplet .')</a></li>';
				
										if($totalHtmlDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuHTML" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/htm">HTML ('. $totalHtmlDownloadComplet .')</a></li>';
				
										if($totalPsdDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuPSD" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/psd">PSD ('. $totalPsdDownloadComplet .')</a></li>';
				
										if($totalPdfDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuPDF" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/pdf">PDF ('. $totalPdfDownloadComplet .')</a></li>';
				
										if($totalOuthersDownloadComplet > 0)
											$html .= '<li'. $class .'><a class="iframeDownload useMenuOther" title="" href="'. $this->view->baseUrl .'/contentlist/'. $itemDownloadComplet->source_id .'/out">Outros ('. $totalOuthersDownloadComplet .')</a></li>';
							$html .= '</ul>
						</td>
					  </tr>
					</table>
				<div class="useClear"></div>
			</div>';	
		}

		//Recupera a lista de arquivos acessados recentemente pelo usuario
    	$this->showLastContent();

		//Retorna o html para a view
		$this->view->showDownloads = $html;				  
	}

	//----------------------------------
    //  sendMailFriend
    //----------------------------------
    /**
     * Envia e-mail com o link do recurso para um amigo
     *
     * @return void
     */
    public function sendMailFriend($params) 
    {
    	//Verifica se tem caminho de origem
    	if(!empty($_SERVER['HTTP_REFERER'])) 
    		$HTTP_REFERER = $_SERVER['HTTP_REFERER']; 
    	else 
    		$HTTP_REFERER = $this->view->baseUrl; 
    	
    	if(empty($_SESSION['first_url_referer'])) $_SESSION['first_url_referer'] = $HTTP_REFERER;
    	if(empty($_SESSION['session_created_in'])) $_SESSION['session_created_in'] = date('Y-m-d H:i:s');
    	
    	//Cria objeto de identificacao de analytcs
		$userAnalytcs = new Zend_Session_Namespace('userAnalytcs');
		
		switch (date('H', strtotime('now'))) 
		{
			case '01':
			case '02':
			case '03':
			case '04':
			case '05':
			case '06':
				$period = "MDG";

			case '07':
			case '08':
			case '09':
			case '10':
			case '11':
			case '12':
				$period = "MHA";
				break;

			case '13':
			case '14':
			case '15':
			case '16':
			case '17':
			case '18':
				$period = "TRD";
				break;

			case '19':
			case '20':
			case '21':
			case '22':
			case '23':
			case '00':
				$period = "NTO";
				break;
		}
		
		$date = strtotime("+5 day");
		$email_date = date('Y-m-d', $date);
		
		//Configura os dados a serem gravados
		$dataAnalytcs = useObject();
		$dataAnalytcs->register_id 				= $this->useSecurity()->userInfo()->info->id;
		$dataAnalytcs->lg_category_id			= $params->lg_category_id;
		$dataAnalytcs->lg_products_id			= $params->lg_product_id;
		$dataAnalytcs->lg_resources_id			= $params->lg_resources_id;
		$dataAnalytcs->email_friend				= $params->mail;
		$dataAnalytcs->email_subject			= $params->subject;
		$dataAnalytcs->email_message			= $params->message;
		$dataAnalytcs->email_date				= $email_date;
		$dataAnalytcs->email_uid				= md5($dataAnalytcs->register_id.'-'.$dataAnalytcs->email_friend.'-'.$dataAnalytcs->lg_resources_id.'-'.$dataAnalytcs->email_date);
		$dataAnalytcs->url_active 				= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$dataAnalytcs->url_active_created_in 	= date('Y-m-d H:i:s');
		$dataAnalytcs->url_referer_created_in 	= $userAnalytcs->info->url_active_created_in;
		$dataAnalytcs->session_id 				= session_id();
		$dataAnalytcs->session_created_in 		= $_SESSION['session_created_in'];
		$dataAnalytcs->session_date 			= date('Y-m-d', strtotime('now'));
		$dataAnalytcs->session_time 			= date('H:i:s', strtotime('now'));
		$dataAnalytcs->session_weekday 			= date('w', strtotime('now'));
		$dataAnalytcs->session_month 			= date('d', strtotime('now'));
		$dataAnalytcs->session_monthday 		= date('m', strtotime('now'));
		$dataAnalytcs->session_year 			= date('Y', strtotime('now'));
		$dataAnalytcs->session_period 			= $period;
		$dataAnalytcs->page_type 				= 'CONTENTDETAIL';
		$dataAnalytcs->page_uid 				= md5('http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
		$dataAnalytcs->page_number 				= ($userAnalytcs->info->page_number + 1);
		$dataAnalytcs->url_referer 				= $HTTP_REFERER;
		
		$save = $this->useDB('SAVE_ANALYTCS_EMAIL_FRIEND')->data($dataAnalytcs)->insert('lg_analytcs_email_friend');
		
    	//Configura a mensagem
		$message = '<p>Você foi indicado para acesso o conteúdo: '. $this->view->baseUrl .'/conteudo/'. $dataAnalytcs->email_uid .'</p>';
		$message .= $params->message;
		
		//Configura os dados da conta de envio		
		$smtp     = "mail.email.alog.com.br";
		$conta    = "portal@parceirolg.com.br";
		$senha    = "123qwe@";
		$de       = "portal@parceirolg.com.br";
		 
		//Define os parametros de autenticação
		$config = array (
	                'auth' => 'login',
   	                'username' => $conta,
   	                'password' => $senha,
   	                );
	
		//Configura os parametros de autenticação
   	    $mailTransport = new Zend_Mail_Transport_Smtp($smtp, $config);
        
		//Configura os paramentros e envia o e-mail
   	    $mail = new Zend_Mail();
   	    $mail->setFrom($de);
   	    $mail->addTo($params->mail);
   	    $mail->setBodyHtml(utf8_decode($message));
   	    $mail->setSubject(utf8_decode($params->subject));
   	    $mail->send($mailTransport);
		
		//Configura mensagens de retorno
		$this->view->content = "E-mail enviado com sucesso!";
	}
	
	//----------------------------------
    //  saveAnalytics
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function verificationEmail($params) 
    {
    	//Verifica se o usuário digitou algum email
    	if(!empty($params->user_email)){
	    	//Verifica no banco de dados, se o email ja foi cadastrado.
			$useResult = $this->useDB('SELECT')
							  ->setFetchMode(Zend_Db::FETCH_OBJ) //Modo de retorno dos dados, default Array
							  ->from(array('USE_REGISTER' => 'register'))
				  			  ->fields(array('*'))
				  			  ->where('USE_REGISTER.user_email = ?', $params->user_email)
							  ->fetch('Row');
			
			//Verifica se encontrou o usuario na base de dados
			if(!empty($useResult))
				$this->view->content = "Esse e-mail já foi cadastrado!";
		}
    }
	
	//----------------------------------
    //  menuDock
    //----------------------------------
    /**
     * Configura o menu dock, habilitando apenas as categorias que o usuario tem permissão
     *
     * @return void
     */
    public function menuDock() 
    {
    	//Instancia a classe de montagem da estrutura html
    	$prepareHtml = $this->useClass('PrepareHtml');
		
		//Configura a lista de categorias
    	$arCategory = array('Informática', 'Celular', 'Áudio e Vídeo', 'Ar Condicionado', 'Eletrodoméstico', 'Televisor');
		
		//Monsta a estruta html do menu
		$html = $prepareHtml->menuDock($arCategory, $this->view->userInfo, $this->view->useDefault);
		
		//Retorna para a view a estrutura html do menu
		$this->view->menuDock = $html;
    }
	
	//----------------------------------
    //  showLastContent
    //----------------------------------
    /**
     * Realiza consulta na base de dados para recuperar a lista dos ulimos conteudos acessados pelo usuario
     *
     * @return void
     */
    public function showLastContent() 
    {
    	//Instancia a classe de montagem da estrutura html
    	$prepareHtml = $this->useClass('PrepareHtml');
		
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
                		  ->from(array('USE_LG_ANALYTCS' => 'lg_analytcs'))
                		  ->fields(array('lg_category_id', 'lg_products_id', 'lg_resources_id', 'url_active'))
						  ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_RESOURCES.id = USE_LG_ANALYTCS.lg_resources_id", array('id', 'folderpath', 'filename', 'resource_type'))
						  ->join(array('USE_LG_PRODUCTS' => 'lg_products'), "USE_LG_RESOURCES.source_id = USE_LG_PRODUCTS.id", array('title'))
						  ->where('USE_LG_PRODUCTS.is_active = ?', 1)
						  ->where('USE_LG_RESOURCES.is_active = ?', 1)
						  ->where('USE_LG_ANALYTCS.page_type = ?', 'CONTENTDETAIL')
						  ->where('USE_LG_ANALYTCS.register_id = ?', $this->view->userInfo->id)
						  ->order('USE_LG_ANALYTCS.url_active_created_in DESC')
						  ->group('USE_LG_ANALYTCS.lg_resources_id')
						  ->limit(10)
                		  ->fetch('All');    	
		
		//Retorna para a view a a lista dos ultimos conteudos vistos
		$this->view->showLastContent = $prepareHtml->showLastContent($useResult, $this->view->useDefault);
    }
    
	//----------------------------------
    //  saveAnalytics
    //----------------------------------
    /**
     * NOTDOC
     *
     * @return void
     */
    public function saveAnalytics($page_type) 
    {
    	//Verifica se tem caminho de origem
    	if(!empty($_SERVER['HTTP_REFERER'])) 
    		$HTTP_REFERER = $_SERVER['HTTP_REFERER']; 
    	else 
    		$HTTP_REFERER = $this->view->baseUrl; 
    	
    	
    	if(empty($_SESSION['first_url_referer'])) $_SESSION['first_url_referer'] = $HTTP_REFERER;
    	if(empty($_SESSION['session_created_in'])) $_SESSION['session_created_in'] = date('Y-m-d H:i:s');
    	
    	//Cria objeto de identificacao de analytcs
		$userAnalytcs = new Zend_Session_Namespace('userAnalytcs');
		$userAnalytcs->info->session_created_in = null;
		
		switch (date('H', strtotime('now'))) 
		{
			case '01':
			case '02':
			case '03':
			case '04':
			case '05':
			case '06':
				$period = "MDG";

			case '07':
			case '08':
			case '09':
			case '10':
			case '11':
			case '12':
				$period = "MHA";
				break;

			case '13':
			case '14':
			case '15':
			case '16':
			case '17':
			case '18':
				$period = "TRD";
				break;

			case '19':
			case '20':
			case '21':
			case '22':
			case '23':
			case '00':
				$period = "NTO";
				break;
		}
		
		$dataAnalytcs = useObject();
		if(isset($this->useSecurity()->userInfo()->info->id)){
			$dataAnalytcs->register_id 				= $this->useSecurity()->userInfo()->info->id;
		}
		else {
			$dataAnalytcs->register_id 				= null;
		}
		
		if(isset($userAnalytcs->info->url_active_created_in)){
			$dataAnalytcs->url_referer_created_in 	= $userAnalytcs->info->url_active_created_in;
		}
		else {
			$dataAnalytcs->url_referer_created_in	= null;
		}
		
		//Verifica se o tipo de pagina e igual a CONTENTDETAIL
		if($page_type == "CONTENTDETAIL")
		{
			$dataAnalytcs->lg_category_id	= $this->view->contentDetail->category_id;
			$dataAnalytcs->lg_products_id	= $this->view->contentDetail->product_id;
			$dataAnalytcs->lg_resources_id	= $this->view->contentDetail->id;
		}
		
		$dataAnalytcs->url_active 				= 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$dataAnalytcs->url_active_created_in 	= date('Y-m-d H:i:s');
		$dataAnalytcs->session_id 				= session_id();
		$dataAnalytcs->session_created_in 		= $_SESSION['session_created_in'];
		$dataAnalytcs->session_date 			= date('Y-m-d', strtotime('now'));
		$dataAnalytcs->session_time 			= date('H:i:s', strtotime('now'));
		$dataAnalytcs->session_weekday 			= date('w', strtotime('now'));
		$dataAnalytcs->session_month 			= date('d', strtotime('now'));
		$dataAnalytcs->session_monthday 		= date('m', strtotime('now'));
		$dataAnalytcs->session_year 			= date('Y', strtotime('now'));
		$dataAnalytcs->session_period 			= $period;
		$dataAnalytcs->page_type 				= $page_type;
		$dataAnalytcs->page_uid 				= md5('http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
		
		if(!empty($dataAnalytcs->register_id))
		{
			//Verifica se a variavel existe
			if(!isset($userAnalytcs->info->page_number)) $userAnalytcs->info->page_number = 0;
			$dataAnalytcs->page_number 			= ($userAnalytcs->info->page_number + 1);
			
			if($dataAnalytcs->page_number == 1)
			{
				$dataAnalytcs->url_referer 				= $_SESSION['first_url_referer'];
			}else{
				$dataAnalytcs->url_referer 				= $HTTP_REFERER;
			}
			
			$save = $this->useDB('SAVE_ANALYTCS')->data($dataAnalytcs)->insert('lg_analytcs');
		}
		
		$userAnalytcs->info = $dataAnalytcs;
	}

	//----------------------------------
    //  listDownload
    //----------------------------------
    /**
     * Realiza consulta para buscar pelos arquivos adicionados a lista de download
     *
     * @return void
     */
    public function listDownload() 
    {
    	//Instancia a classe de montagem da estrutura html
    	$prepareHtml = $this->useClass('PrepareHtml');
		
    	//Recupera o identificador do usuário logado
    	$registerId = $this->useSecurity()->userInfo()->info->id;

    	//Recupera o retailer do usuário logado
    	$parentId = $this->useSecurity()->userInfo()->info->parent_id;
		
		//Recupera as informacões do produto
    	$useResult = $this->useDB('SELECT')
                		  ->setFetchMode(Zend_Db::FETCH_OBJ)
                		  ->from(array('USE_LG_DOWNLOADS' => 'lg_downloads'))
                		  ->fields(array('download_id' => 'id'))
						  ->join(array('USE_LG_RESOURCES' => 'lg_resources'), "USE_LG_DOWNLOADS.resource_id = USE_LG_RESOURCES.id", array('*'))
						  ->where('USE_LG_DOWNLOADS.register_id = ?', $registerId)
                		  ->fetch('All');
		
		//Realiza consulta para verficar quem ja baixou o recurso
		foreach ($useResult as $key => $value) 
		{
			$useResultDownloadRegister = $this->useDB('SELECT')
				                		   	  ->setFetchMode(Zend_Db::FETCH_OBJ)
			                		       	  ->from(array('USE_LG_DOWNLOADS_COMPLETE' => 'lg_downloads_complete'))
			                		       	  ->fields(array('id'))
											  ->join(array('USE_REGISTER' => 'register'), "USE_LG_DOWNLOADS_COMPLETE.register_id = USE_REGISTER.id", array('parent_id'))
											  ->join(array('USE_REGISTER_PERSONAL' => 'register_personal'), "USE_LG_DOWNLOADS_COMPLETE.register_id = USE_REGISTER_PERSONAL.register_id", array('name' => 'CONCAT_WS(" ", name, middle_name, lastname)'))
									          ->where('USE_LG_DOWNLOADS_COMPLETE.resource_id = ?', $value->id)
									          ->where('USE_REGISTER.parent_id = ?', $parentId)
											  ->group('USE_LG_DOWNLOADS_COMPLETE.register_id')
			                		       	  ->fetch('All');
			
			//Atualiza a lista de conteudos com a lista de usuários que ja baixaram o mesmo recurso								  
			$useResult[$key]->listDownloadRegister	= $useResultDownloadRegister;											  
		}								  
		
		$totalItens = count($useResult);
		$this->view->totalItens = $totalItens;
		
		if(isset($params->pagina))
			$pagina = $params->pagina;
		else
			$pagina = 1;

        $paginator = Zend_Paginator::factory($useResult);
        // Seta a quantidade de registros por página
        $paginator->setItemCountPerPage(5);
        // numero de paginas que serão exibidas
        $paginator->setPageRange(10);
        // Seta a página atual
        $paginator->setCurrentPageNumber($pagina);
        // Passa o paginator para a view
        $this->view->paginator = $paginator;

		$useResult = $paginator;
		
		$dataResult = array();
		$dataResult['total']	= $totalItens;
		$dataResult['html']		= $prepareHtml->listDownload($useResult, $this->view);
		
		return $dataResult;
	}
	//----------------------------------
    //  institutional
    //----------------------------------
    /**
     * Lista todas as campanhas do site
     *
     * @return void
     */
    public function institutional() 
    {
	     $listCampain = $this->useDB('SELECT')
	          	->setFetchMode(Zend_Db::FETCH_OBJ)
	          	->from(array('USE_LG_PRODUCTS' => 'lg_products'))
	          	->fields(array('*'))
	       		->join(array('USE_REGISTER_HAS_REGISTER_GROUPS_CATEGORY' => 'register_has_register_groups'), "USE_LG_PRODUCTS.id = USE_REGISTER_HAS_REGISTER_GROUPS_CATEGORY.register_id AND USE_LG_PRODUCTS.category_id = USE_REGISTER_HAS_REGISTER_GROUPS_CATEGORY.register_groups_id", array('register_groups_id'))
	       		->join(array('USE_REGISTER_GROUPS_CATEGORY' => 'register_groups'), "USE_REGISTER_HAS_REGISTER_GROUPS_CATEGORY.register_groups_id = USE_REGISTER_GROUPS_CATEGORY.id", array('category_title' => 'title'))
	       	   	->where("USE_LG_PRODUCTS.product_type = ?", "CPN")
	          	->where("USE_LG_PRODUCTS.is_active = ?", 1)
	          	->where("USE_LG_PRODUCTS.image_filename != ?", "")
	          	->fetch('All');
	  
	  	$this->view->listCampain = $listCampain;
 	}
}