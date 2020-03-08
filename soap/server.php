<?php
class StockServise {
    function getStock ($num) {
        $stock = array(
            '1'=>100,
            '2'=>200,
            '3'=>300,
            '4'=>400,
            '5'=>500);
        if (array_key_exists($num,$stock))
            return $stock[$num];
        else
            return 0;
    }
}


    ini_set('soap.wsdl_cache_enabled','0');
    $server = new SoapServer('http://localhost:8888/soap/stock.wsdl');
//  $arr = array_key_exists("foo1","foo2");
//	$server->addFunction('getStock');
    $server->setClass("StockServise");
	$server->handle();
