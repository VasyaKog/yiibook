<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 24.05.2017
 * Time: 16:53
 */

namespace app\controllers;


use app\models\costumer\Customer;
use yii\web\Controller;

class CostumersController extends Controller
{
    public function actionIndex()
    {
        $records = $this->findRecordByQuery();
        return $this->render('index', compact('records'));
    }

    private function store(Customer $customer){
        $c
    }
}