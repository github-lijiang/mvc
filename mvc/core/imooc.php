<?php
namespace core;
class imooc{
    public  static  $classMap=array();
    public $assign;
    static  function run(){
        //p('ok');
        \core\lib\log::init();


        $route = new \core\lib\route();
        //p($route);die;

        $ctrlClass=$route->ctrl;
        //p($ctrlClass);
        $action=$route->action;
        //p($action);die;

        $ctrlfile=app.'/ctrl/'.$ctrlClass.'Ctrl.php'        ;
        //p($ctrlfile);die;

        $cltrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';

        //p($cltrlClass);die;
        if(is_file($ctrlfile))
        {

                include $ctrlfile;

                $ctrl = new $cltrlClass();

                $ctrl->$action();

                \core\lib\log::log('ctrl:'.$ctrlClass.'       '.'action:'.$action);
        }
        else
        {
                throw new \Exception('找不到控制器'.$ctrlClass);
        }

    }
     static public function load($class)
     {

       if(isset($classMap[$class]))
        {
            return true;
        }
       else
       {
           $class=str_replace('\\','/',$class);

           $file=mvc.'/'.$class.'.php';

           if(is_file($file))
           {
               include $file;
               self::$classMap['class']=$class;
           }
           else
           {
               return false;
           }
       }


    }

    public function assign($name,$value)
    {
       $this->assign[$name]=$value;
    }
    public function  display($file)
    {
         $file=app.'/views/'.$file;
         if(is_file($file))
         {
             //extract($this->assign);
             //include $file;
             \Twig_Autoloader::register();

             $loader = new \Twig_Loader_Filesystem(app.'/views');
             $twig = new \Twig_Environment($loader, array(
                 'cache' => mvc.'/log/twig',
                 'debug'=>debug
             ));
             $template = $twig->loadTemplate('index.html');
             $template->display($this->assign?$this->assign:'');

         }
    }




}





?>