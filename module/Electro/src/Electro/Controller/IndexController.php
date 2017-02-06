<?php

namespace Electro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        if ($_POST){
            $price = $_POST['price'];
            $power = $_POST['power'];
            $vat = 20;
            $tax = 5;

            $result['rate'] = 0.0;
            $result['price'] = $price;
            $result['vat'] = $price / 100 * $vat;
            $result['duty'] = 0;
            $result['excise'] = 0;
            $result['tax'] = $price / 100 * $tax;
            $result['certific'] = 130;
            $result['cost'] = $result['vat'] + $result['duty'] + $result['excise'] + $result['tax'] + $result['certific'];
            $result['amount'] = $price + $result['cost'];

            //Проверка массивов
//            echo "<pre>";
//            print_r($result);
//            print_r($_POST);
//            echo "</pre>";

            return $result;
        }
    }
}
