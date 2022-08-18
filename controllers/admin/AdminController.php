<?php

namespace app\controllers\admin;

use kilyte\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.index');
    }


}
