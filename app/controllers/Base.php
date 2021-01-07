<?php 

    namespace app\controllers; 
    use Exception; 
    use Slim\Views\Twig; 
    use app\traits\Templates;

    abstract class Base {
       use Templates;
    } 
?>