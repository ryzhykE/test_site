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
    $article = General::findByid($id);
    if ($article == false) {
    throw new BaseException('Ошибка 404 - не найдено');
    }
    $this->view->title = 'Генерал';
    $this->view->single = $article;
    $this->view->displayTwig('general.php');
    }
}