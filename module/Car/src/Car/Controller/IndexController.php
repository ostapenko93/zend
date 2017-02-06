<?php

namespace Car\Controller;

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
            $vat = 20;
            $duty = 10;
            $tax = 5;

            if ($fuel === 'bensin') {
                if ($engine <= 1500) {
                    $result['rate'] = 0.067;
                } elseif ($engine <= 2200) {
                    $result['rate'] = 0.286;
                } elseif ($engine <= 3000) {
                    $result['rate'] = 0.296;
                } else {
                    $result['rate'] = 2.372;
                }
            } elseif ($fuel == 'diesel') {
                if ($engine <= 1500) {
                    $result['rate'] = 0.110;
                } elseif ($engine <= 2500) {
                    $result['rate'] = 0.351;
                } else {
                    $result['rate'] = 2.372;
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
