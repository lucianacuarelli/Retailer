<?php
class AjaxController extends UseZF_Controller_Action
{
	public function init()
    {
        $ajaxContext = $this->_helper->getHelper('AjaxContext');
        $ajaxContext->addActionContext('listdownload', 'json')
        			->addActionContext('downloadfile', 'html')
        			->addActionContext('adddownload', 'html')
                    ->addActionContext('checkreadmessage', 'html')
                    ->addActionContext('removemessage', 'html')
                    ->addActionContext('savecomment', 'html')
                    ->addActionContext('savemessage', 'html')
                    ->addActionContext('savenickname', 'html')
                    ->addActionContext('savepassword', 'html')
                    ->addActionContext('saverating', 'html')
                    ->addActionContext('showcomment', 'html')
                    ->addActionContext('showimages', 'html')
                    ->addActionContext('showcontent', 'html')
                    ->addActionContext('showmessage', 'html')
                    ->addActionContext('showmessagelist', 'html')
                    ->addActionContext('sendmailfriend', 'html')
                    ->addActionContext('evaluatemessage', 'html')
                    ->addActionContext('verificationemail', 'html')
                    ->initContext();
					
    	//Recebe os parametros
        $params = $this->useParams();
		
    	$this->startModuleAjax();
		
		$this->useDefault->saveAnalytics(strtoupper($params->action));
    }
	
	//----------------------------------
    //  listdownload
    //----------------------------------
    /**
     *  Realiza consulta para buscar pelos arquivos adicionados a lista de download
     */
	public function listdownloadAction()
    {
    	//Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		$this->useView()->setNoRender();
		
        //Consulta na base de dados e retorna registro 
        $listDownload = $this->useDefault->listDownload();
		
		echo Zend_Json::encode($listDownload);
    }
	
	//----------------------------------
    //  downloadfile
    //----------------------------------
    /**
     *  Realiza download do arquivo informado
     */
	public function downloadfileAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
		//Consulta na base de dados e retorna registro 
        $this->useDefault->downloadClick($params);
    }

	//----------------------------------
    //  removedownload
    //----------------------------------
    /**
     *  Realiza download do arquivo informado
     */
	public function removedownloadAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
		//Consulta na base de dados e retorna registro 
        $this->useDefault->removeDownload($params);
    }
	
    public function savecommentAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->saveComment($params);
    }

    public function saveratingAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->saveRating($params);
    }

    public function savepasswordAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->savePassword($params);
    }

    public function savenicknameAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->saveNickname($params);
    }

    public function savemessageAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->saveMessage($params);
    }

    public function showcontentAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->showContent($params);
    }
	
    public function showmessageAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->showMessage($params);
    }

    public function showmessagelistAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->showMessageList($params);
    }
	
    public function showcommentAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->showComment($params);
    }

    public function showimagesAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
        //Consulta na base de dados e retorna registro 
	    $this->useDefault->showImages($params);
    }
	
	public function adddownloadAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao de Zend Layout
        $this->useLayout()->disableLayout();
		
		//Consulta na base de dados e retorna registro 
        $useResult = $this->useDefault->addDownload($params);
    }
	//Marca uma mensagem como lida
	public function checkreadmessageAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao da view e do Zend Layout
        $this->useLayout()->disableLayout();
		
		//Marca uma mensagem como lida 
        $useResult = $this->useDefault->checkReadMessage($params);
    }

	//Marca uma mensagem como lida
	public function removemessageAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao da view e do Zend Layout
        $this->useLayout()->disableLayout();
		
		//Marca uma mensagem como lida 
        $useResult = $this->useDefault->removeMessage($params);
    }

	//Marca uma mensagem como lida
	public function sendmailfriendAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao da view e do Zend Layout
        $this->useLayout()->disableLayout();
		
		//Marca uma mensagem como lida 
        $useResult = $this->useDefault->sendMailFriend($params);
    }

	//Avalia o fechamento da mensagem
	public function evaluatemessageAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao da view e do Zend Layout
        $this->useLayout()->disableLayout();
		
		//Avalia o fechamento da mensagem 
        $useResult = $this->useDefault->evaluateMessage($params);
    }
	
	//Avalia o fechamento da mensagem
	public function verificationemailAction()
    {
    	//Recebe os parametros
        $params = $this->useParams();
		
        //Desabilita renderizacao da view e do Zend Layout
        $this->useLayout()->disableLayout();
		
		//Avalia o fechamento da mensagem 
        $useResult = $this->useDefault->verificationEmail($params);
    }
	
}