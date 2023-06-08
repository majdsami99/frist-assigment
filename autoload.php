<?php 
function  load_class($class_name){
    echo $class_name ; 
    include __DIR__.'/'.$class_name. 'php';

}
spl_autoload_register('load_class');