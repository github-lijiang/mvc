<?php
define('mvc',realpath('./'));

define('core',mvc.'/core');

define('app',mvc.'/app');

define('MODULE','app');


define('debug',true);

include "vendor/autoload.php";

if(debug)
{
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_error','On');
}
else
{
    ini_set('display_error','Off');
}
//dump($_SERVER);
include core.'/common/function.php';
include core.'/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();
