<?php

namespace Freight\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        if ($_POST) {
            $price = $_POST['price'];
            $engine = $_POST['engine'];
            $fuel = $_POST['fuel'];
            $age = $_POST['age'];
            $weight = $_POST['weight'];
            $vat = 20;
            $duty = 10;
            $tax = 5;

            if($age == 0){
                if($weight < 5){
                    $result['rate'] = 0.01;
                }elseif ($weight < 20){
                    $result['rate'] = 0.013;
                }else{
                    $result['rate'] = 0.017;
                }
            }elseif ($age < 5){
                if($weight < 5){
                    $result['rate'] = 0.021;
                }elseif ($weight < 20){
                    $result['rate'] = 0.027;
                }else{
                    $result['rate'] = 0.035;
                }
            }elseif ($age < 8){
                if($weight < 5){
                    $result['rate'] = 0.857;
                }elseif ($weight < 20){
                    $result['rate'] = 1.114;
                }else{
                    $result['rate'] = 1.414;
                }
            }else{
                if($weight < 5){
                    $result['rate'] = 1.071;
                }elseif ($weight < 20){
                    $result['rate'] = 1.392;
                }else{
                    $result['rate'] = 1.767;
                }
            }

            $result['price'] = $price;
            $result['vat'] = $price / 100 * $vat;
            $result['duty'] = $price / 100 * $duty;
            $result['excise'] = $engine * $result['rate'];
            $result['tax'] = $price / 100 * $tax;
            $result['certific'] = 130;
            $result['cost'] = $result['vat'] + $result['duty'] + $result['excise'] + $result['tax'] + $result['certific'];
            $result['amount'] = $price + $result['cost'];

            return $result;
        }
    }
}
