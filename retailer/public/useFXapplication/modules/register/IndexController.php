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
//  @category   Index 
//  @package    IndexController 
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
class IndexController extends UseZF_Controller_Action
{
	public function init()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
    	$this->startModule();
    	$this->useTranslate('application-language');
		
		if(!$this->useSecurity()->isLogin() 
		&& $params->action != 'login' 
		&& $params->action != 'forgotpassword' 
		&& $params->action != 'contentpublic' 
		&& $params->action != 'register'
		&& $params->action != 'authentication')
		{
			//Cria sessao para recuperar a url de retorno apos o login
			$redirectReturn = new Zend_Session_Namespace('redirectReturn');
			$redirectReturn->url = 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$this->_redirect('login');
		}
		else{
			//Verifica se a informacao do usuario nao existe
			if(!empty($this->useSecurity()->userInfo()->info))
			{
				$this->view->userInfo = $this->useSecurity()->userInfo()->info;
				
				//Conifigura o menu dock
				$this->useDefault->menuDock();
			}
		}
		
		//Verifica se o action e diferente de CONTENTDETAIL, entao executa o save analytic
		if(strtoupper($params->action) != "CONTENTDETAIL") $this->useDefault->saveAnalytics(strtoupper($params->action));
	}
	
	//----------------------------------
    //  index
    //----------------------------------
    /**
     * Configura a visualizacao da tela principal do projeto - home
     */
	public function indexAction()
    {
		/*
		$directoryToZip = BASE_ROOT . '/usejs';
		// This will zip all the file(s) in this present working directory
		
    	//Caminho de saida
    	//$outputDir = BASE_ROOT . '/zip';
		$outputDir = "/";
		
		//Replace "/" with the name of the desired output directory.
		$zipName = "test.zip";
		
		$useZipFile = new UseZF_ZipFile();
		
		//Code toZip a directory and all its files/subdirectories
		$useZipFile -> zipDirectory($directoryToZip, $outputDir);
		
		
		$rand = md5(microtime() . rand(0, 999999));
		$zipName = BASE_ROOT . "/zip/" . $rand . "_" . $zipName;
		$fd = fopen($zipName, "wb");
		$out = fwrite($fd, $useZipFile -> getZippedfile());
		fclose($fd);
		
		pe($useZipFile);
		
		*/
		
		//Recebe os parametros
        $params = $this->useParams();
        
		if(!$this->useSecurity()->isLogin())
		{
			$this->_redirect('login');	
		}else{
	        //Consulta na base de dados e retorna registro 
	        $this->useDefault->showBanner();
		}
        
        //Renderiza layout
        $this->useDefaultLayout("layout-default", false)->render();
	}
	
	//----------------------------------
    //  login
    //----------------------------------
    /**
     * Configura a visualizacao da tela principal do projeto - home
     */
	public function loginAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
  		if($params->isPost)
		{
	    	$login = $this->useDefault->login($this->useParams());
			
			if($login)
			{
				//Cria sessao para recuperar a url de retorno apos o login
				$redirectReturn = new Zend_Session_Namespace('redirectReturn');
				
				if(!empty($redirectReturn->url))
				{
					//Redireciona para a url de retorno
					$this->_redirect($redirectReturn->url);
					//Apaga a url da sessao
					unset($redirectReturn->url);
				}
				else
				{
					$this->_redirect('/');
				}
          	}
		}
		
		$this->view->messages = $this->_helper->flashMessenger->getMessages();
		
        //Renderiza layout
        $this->useDefaultLayout("layout-login", false)->render();
	}

	//----------------------------------
    //  forgotpassword
    //----------------------------------
    /**
     * Recupera a senha do usuario
     */
	public function forgotpasswordAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
  		if($params->isPost)
		{
	    	$this->useDefault->forgotPassword($this->useParams());
		}
		
		//Renderiza layout
        $this->useDefaultLayout("layout-login", false)->render();
	}

	//----------------------------------
    //  account
    //----------------------------------
    /**
     * Configura a visualizacao da tela minha conta
     */
	public function accountAction()
    {
		//Recebe os parametros
        $params = $this->useParams();
        
        //Consulta na base de dados e retorna registro 
        $this->useDefault->account($params);
        
        //Renderiza layout
        $this->useDefaultLayout("layout-default", false)->render();
	}

	//----------------------------------
    //  institutional
    //----------------------------------
    /**
     * Exibe o conteudo da pagina institucional
     */
	 public function institutionalAction()
	 {
	     //Consulta na base de dados e retorna registro 
	     $this->useDefault->institutional();
	  
	     //Renderiza layout
	  	 $this->useDefaultLayout("layout-default", false)->render();
	 }

	//----------------------------------
    //  content
    //----------------------------------
    /**
     * Configura a visualizacao da tela downloads
     */
	public function contentAction()
    {
		//Recebe os parametros
        $params = $this->useParams();
        
        //Consulta na base de dados e retorna registro 
        $this->useDefault->content($params);
        
        //Renderiza layout
        $this->useDefaultLayout("layout-default", false)->render();
	}
	
	//----------------------------------
    //  contentshow
    //----------------------------------
    /**
     * Configura a visualizacao da tela downloads
     */
	public function contentshowAction()
    {
		//Recebe os parametros
        $params = $this->useParams();
        
        //Consulta na base de dados e retorna registro 
        $this->useDefault->contentShow($params);
        
        //Renderiza layout
        $this->useDefaultLayout("layout-default", false)->render();
	}

	//----------------------------------
    //  contentshowresource
    //----------------------------------
    /**
     *  Mostra a lista de conteudos do produto e já abre o detalhe do recurso
	 *  selecionado
     */
	public function contentshowresourceAction()
    {
		//Recebe os parametros
        $params = $this->useParams();
        
        //Consulta na base de dados e retorna registro 
        $this->useDefault->contentShow($params);
        
        //Renderiza layout
        $this->useDefaultLayout("layout-default", false)->render('contentshow');
	}
	
	//----------------------------------
    //  contentList
    //----------------------------------
    /**
     * Configura a visualizacao da tela downloads
     */
	public function contentlistAction()
    {
		//Recebe os parametros
        $params = $this->useParams();
        
        //Consulta na base de dados e retorna registro 
        $this->useDefault->contentList($params);
        
		//Renderiza layout
        $this->useDefaultLayout("layout-list", false)->render();
	}

	//----------------------------------
    //  contentListSearch
    //----------------------------------
    /**
     * Mostra a lista de recurso de um tipo do produto selecionado
     */
	public function contentlistsearchAction()
    {
		//Recebe os parametros
        $params = $this->useParams();
        
        //Consulta na base de dados e retorna registro 
        $this->useDefault->contentListSearch($params);
        
		//Renderiza layout
        $this->useDefaultLayout("layout-list", false)->render();
	}
	
	//----------------------------------
    //  contentDetail
    //----------------------------------
    /**
     * Configura a visualizacao da tela downloads
     */
	public function contentdetailAction()
    {
		//Recebe os parametros
        $params = $this->useParams();
        
        //Consulta na base de dados e retorna registro 
        $this->useDefault->contentDetail($params);
        
        //Renderiza layout
        $this->useDefaultLayout("layout-detail", false)->render();
	}

	//----------------------------------
    //  downloads
    //----------------------------------
    /**
     * Configura a visualizacao da tela downloads
     */
	public function downloadsAction()
    {
		//Recebe os parametros
        $params = $this->useParams();
        
        //Consulta na base de dados e retorna registro 
        $this->useDefault->showDownloads($params);
        
        //Renderiza layout
		$this->useDefaultLayout("layout-default", false)->render();
	}
	
	//----------------------------------
    //  download
    //----------------------------------
    /**
     *  Realiza download do arquivo informado
     */
	public function downloadAction()
    {
    	$this->useView()->setNoRender();
		
    	//Renderiza layout
        $this->useDefaultLayout("layout-download", false)->render();	
    }	
	
	//----------------------------------
    //  reflect
    //----------------------------------
    /**
     * Prepara reflexo da imagem utilizada no coverflow da pagina principal
     */
	public function reflectAction()
    {
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
	}
	
	//----------------------------------
    //  talk
    //----------------------------------
    /**
     * Configura a visualizacao da tela fale com a LG
     */
	public function talkAction()
    {
    	//Consulta na base de dados e retorna registro 
        $this->useDefault->talk();
		
        //Renderiza layout
		$this->useDefaultLayout("layout-default", false)->render();
	}

	//----------------------------------
    //  talkmessage
    //----------------------------------
    /**
     * Configura a visualizacao da tela fale com a LG
     */
	public function talkmessageAction()
    {
        //Renderiza layout
		$this->useDefaultLayout("layout-default", false)->render();
	}

	//----------------------------------
    //  search
    //----------------------------------
    /**
     * Realiza busca de acordo com o termo informado
     */
	public function searchAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
		//Realiza busca de acordo com o termo informado 
        $search = $this->useDefault->search($params);
		
		//Verifica se nao encontrou nenhum recurso, entao tenta procurar por produto
		//if($search == '<div class="UiMessageAlert">Nenhum recurso encontrado.</div>') $this->_redirect('/procurar/?por='. $params->por .'&type=product');
		
        //Renderiza layout
		$this->useDefaultLayout("layout-default", false)->render();
	}

	//----------------------------------
    //  preview
    //----------------------------------
    /**
     *  Visualiza o documento selecionado utilizando google docs
     */
	public function previewAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
		//Realiza consulta para buscar o endereco do documento informado
        $this->useDefault->preview($params);
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
	}

	//----------------------------------
    //  contentpublic
    //----------------------------------
    /**
     *  Visualiza o documento selecionado utilizando google docs
     */
	public function contentpublicAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
		//Realiza consulta para buscar o endereco do documento informado
        $contentPublic = $this->useDefault->contentPublic($params);
		
		//Verifica se nao encontrou o produto, entao envia para a view a mensagem de aviso
		if(!$contentPublic) $this->_helper->flashMessenger->addMessage('Produto não encontrado!');
		
		$this->view->messages = $this->_helper->flashMessenger->getMessages();
		
        //Renderiza layout
        $this->useDefaultLayout("layout-register", false)->render();
	}

	//----------------------------------
    //  register
    //----------------------------------
    /**
     *  Formulario de registro de colaborador
     */
	public function registerAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
		//Verifica se o formulari foi submetido
		if($params->isPost)
		{
			//Salva o novo cadastro na base de dados
	        $this->useDefault->saveRegister($params);
			
			//Retorna mensagem de sucesso para a view
			$this->_helper->flashMessenger->addMessage('Registro realizado com sucesso, acesse seu e-mail para validar seu cadastro!');
			$this->_helper->redirector('login');
		}
		else{
			//Realiza consulta para buscar o endereco do documento informado
	        $this->useDefault->populateRegister();
		}
		
        //Renderiza layout
        $this->useDefaultLayout("layout-register", false)->render();
	}

	//----------------------------------
    //  editregister
    //----------------------------------
    /**
     *  Formulario de registro de colaborador
     */
	public function editregisterAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
		//Verifica se o formulari foi submetido
		if($params->isPost)
		{
			//Salva o novo cadastro na base de dados
	        $this->useDefault->editRegister($params);
		}
		else{
			//Realiza consulta para buscar o endereco do documento informado
	        $this->useDefault->populateEditRegister();
		}
		
        //Renderiza layout
        $this->useDefaultLayout("layout-default", false)->render();
	}

	//----------------------------------
    //  authentication
    //----------------------------------
    /**
     *  Faz a autenticacao do registro do usuario
     */
	public function authenticationAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
		//Verifica se recebeu uid
		if(!empty($params->uid))
		{
			//Salva o novo cadastro na base de dados
	        $message = $this->useDefault->authentication($params);
			
			//Retorna mensagem de aviso a view
			$this->view->message = $message;
		}
		else{
			//Retorna mensagem de aviso a view
			$this->view->message = 'Nenhum identificador foi informado';
		}
		
        //Renderiza layout
        $this->useDefaultLayout("layout-register", false)->render();
	}

	//----------------------------------
    //  logout
    //----------------------------------
    /**
     *  Limpa a sessao e redireciona para o login
     */
	public function logoutAction()
    {
    	$this->useSecurity()->userWebLogout();
		
		$this->_redirect('/');
	}

	//----------------------------------
    //  logoguide
    //----------------------------------
    /**
     *  Limpa a sessao e redireciona para o login
     */
	public function logoguideAction()
    {
		$archiveName = BASE_ROOT .'/public/lg/logoguide/LG_gl_our_logo_091209.pdf';
		
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false);
		header("Content-Type: application/zip");
		header("Content-Disposition: attachment; filename=".basename($archiveName).";" );
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: ".filesize($archiveName));
		readfile("$archiveName");
		
		//Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		$this->useView()->setNoRender();
	}
	
	//----------------------------------
    //  listdownload
    //----------------------------------
    /**
     *  Realiza consulta para buscar pelos arquivos adicionados a lista de download
     */
	public function listdownloadAction()
    {
    	$this->useDefault->showLastContent();
    	
		//Renderiza layout
        $this->useDefaultLayout("layout-default", false)->render();	
    }	
	
	//----------------------------------
    //  dbAction
    //----------------------------------
    /**
     * Configura a visualizacao da tela principal do projeto - home
     */
	public function dbAction()
    {
    	//Consulta na base de dados e retorna registro 
	    $this->useDefault->dbUpdate();
    	pe('db');
    }
}