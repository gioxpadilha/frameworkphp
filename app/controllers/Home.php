<?php
namespace app\controllers;

class Home extends Base
 {
    public function index($request, $response)
    {
        
        return $this-> getTwig()->render($response, $this->setView('site/home'), [
            'name'=>'química'
        ]);
        // trabalhando com as funções getTwig e setView
    }
}
?>