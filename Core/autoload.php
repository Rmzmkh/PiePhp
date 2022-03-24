<?php

spl_autoload_register(function($class){
    $path= str_replace('\\', '/', $class);
    $sources=array(
        $path.'.php',
        'src/Controller/'.$path.'.php',
        'src/Model/'.$path.'.php'
    );

    foreach($sources as $sources){
        if(file_exists($sources)){
            echo $sources.'<br/>';
            include $sources;
        }
    }

});