<?php
namespace PSR\Controllers;

use PSR\Models\User;

class HomeController
{
    public function actionIndex()
    {
        return (new User)->list();
    }
}