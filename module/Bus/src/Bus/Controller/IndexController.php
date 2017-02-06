<?php

namespace Bus\Controller;

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

            if ($fuel === 'bensin') {
                if ($engine <= 2800) {
                    if ($age == 0) {
                        $result['rate'] = 0.003;
                    } elseif ($age < 8) {
                        $result['rate'] = 0.007;
                    } else {
                        $result['rate'] = 0.374;
                    }
                } else {
                    if ($age == 0) {
                        $result['rate'] = 0.004;
                    } elseif ($age < 8) {
                        $result['rate'] = 0.008;
                    } else {
                        $result['rate'] = 0.384;
                    }
                }
            } elseif ($fuel == 'diesel') {
                if ($engine <= 2500) {
                    if ($age == 0) {
                        $result['rate'] = 0.003;
                    } elseif ($age < 8) {
                        $result['rate'] = 0.007;
                    } else {
                        $result['rate'] = 0.374;
                    }
                } elseif ($engine <= 5000) {
                    if ($age == 0) {
                        $result['rate'] = 0.003;
                    } elseif ($age < 8) {
                        $result['rate'] = 0.003;
                    } else {
                        $result['rate'] = 0.16;
                    }
                } else {
                    if ($age == 0) {
                        $result['rate'] = 0.003;
                    } elseif ($age < 8) {
                        $result['rate'] = 0.007;
                    } else {
                        $result['rate'] = 0.374;
                    }
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
