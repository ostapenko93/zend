<?php

namespace Moto\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        if ($_POST) {
            $price = $_POST['price'];
            $engine = $_POST['engine'];
            $vat = 20;
            $duty = 10;
            $tax = 5;

            if ($engine < 500) {
                $result['rate'] = 0.066;
            } else {
                $result['rate'] = 0.475;
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
