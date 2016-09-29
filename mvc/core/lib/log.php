<?php
namespace core\lib;
class log
{
    static $class;
    static function init()
    {
        $drive= conf::get('DRIVE','log');
        $class='\core\lib\drive\log\\'.$drive;

        self::$class =new $class;



    }

    static public function log($name,$file='log')
    {
        self::$class->log($name,$file);
    }


}