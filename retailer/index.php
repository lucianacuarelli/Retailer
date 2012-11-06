<?php

	//phpinfo();

//Configura endreco html do projeto
defined('BASE_URL')         || define('BASE_URL', 'http://localhost/retailer');
//defined('BASE_URL')         || define('BASE_URL', 'http://beta.devdoo.com/retailer');
//defined('BASE_URL')         || define('BASE_URL', 'http://www.parceirolg.com.br');

//Configura caminho absoluto
defined('PUBLIC_ROOT')      || define('PUBLIC_ROOT', getcwd());

//Sobe um nivel de diretorio para seguranca
//Necessario para manter os arquivos de classe protegidos
//Recupera o diretorio root
//chdir('../');
$baseRoot = getcwd();

//Recupera o diretorio das bibliotecas que deve estar um ou mais niveis acima.
chdir('../../');
//chdir('../');
$libraryPath = getcwd();


//Configura caminhos de diretorios defaults
defined('BASE_ROOT')        || define('BASE_ROOT', $baseRoot);
defined('APPLICATION_PATH') || define('APPLICATION_PATH', $baseRoot . '/application');
defined('LIBRARY_PATH')     || define('LIBRARY_PATH', $libraryPath. '/library');

//Configura caminhos de diretorios defaults
defined('CONFIG_PATH') 		|| define('CONFIG_PATH', APPLICATION_PATH . '/default/configs/application.ini');

//Adicione o caminho das bibliotecas no include_path
set_include_path(implode(PATH_SEPARATOR, 
        array( LIBRARY_PATH,
    get_include_path(),
)));

date_default_timezone_set("America/Sao_paulo");

/**
 * Inicializa as bibliotecas UseZF
 */
//Inclua o arquivo de configuracao da biblioteca UseZF 
require_once 'UseZF/Application.php';
/**
 *  Inicializa configuracoes do front controler, roteadores e plugin de erro,
 *  retornando um objeto Zend_Controller_Front para configuaroes adicionais
 */  
UseZF_Application::start('development'); //production - hide error || development - show error