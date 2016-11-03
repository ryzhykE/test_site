<?php

namespace App\Controllers;

use App\AController;
use App\Exceptions\BaseException;
use App\Model\General;

class Index
    extends AController
{
    /**
     * All fields
     * sort
     */
    public function actionIndex()

    {
        if ($_POST['named']) {
            $general = General::findBySort('name DESC');
        }
        else if ($_POST['namea']){
            $general = General::findBySort('name ASC');
        }
        else if ($_POST['surnamed']){
            $general = General::findBySort('surname DESC');
        }
        else if ($_POST['surnamea']){
            $general = General::findBySort('surname ASC');
        }
        else if ($_POST['dated']){
            $general = General::findBySort('date DESC');
        }
        else if ($_POST['datea']){
            $general = General::findBySort('date ASC');
        } else {
            $general = General::findAll();
        }

        $this->view->title = 'Главная';
        $this->view->general = $general;

        $this->view->displayTwig('main.php');
    }

    /**
     * @param int $id
     * @throws BaseException
     * One field
     */
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