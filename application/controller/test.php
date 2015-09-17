<?php

/**
 * Created by PhpStorm.
 * User: Charan
 * Date: 9/15/2015
 * Time: 12:45 AM
 */
class Test extends Controller
{
    public function index()
    {
        $testRecords = $this->model->getRowsFromTest();

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/test/index.php';
        require APP . 'view/_templates/footer.php';
    }
}