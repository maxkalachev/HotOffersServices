<?php
    $autoload=function($class){
        $path=explode('\\',$class);

        $filename=array_pop($path);

        require_once __DIR__.'/'.implode('/',$path).'/'.$filename.'.php';
    };

    spl_autoload_register($autoload);
?>
