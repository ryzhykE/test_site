<?php

namespace App\Controllers;

use App\AController;
use App\Exceptions\BaseException;
use App\Exceptions\Main;
use App\Model\General;

class Index
    extends AController
{
    public function actionIndex()
    {
        $general = General::findAll();
        $this->view->title = 'Главная';
        $this->view->general = $general;

        $this->view->displayTwig('main.php');
    }
    public function actionOne (int $id)
    {
    $member = General::findByid($id);
    if ($member == false) {
    throw new BaseException('Ошибка 404 - не найдено');
    }
    $generaler = General::findAll();
    $this->view->generaler = $generaler;
    $this->view->title = 'Генерал';
    $this->view->page = (int)$id;
    $this->view->single = $member;
    $this->view->displayTwig('general.php');
    }
}