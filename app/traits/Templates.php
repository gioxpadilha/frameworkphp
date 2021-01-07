<?php
namespace app\traits;
use Slim\Views\Twig;
use Exception;

trait Templates {
    public function getTwig () 
    {
        try{
            return Twig:: create(DIR_VIEWS); 
        }catch(Exception $e){
            var_dump($e->getMessage()); 
        }
        
    }

    public function setView ($name) // nome do template 
    {
         return $name.EXT_VIEWS; 
    }
}

?>