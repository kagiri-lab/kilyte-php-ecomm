<?php

namespace app\controllers\admin;

use app\models\PartCatalog;
use kilyte\Controller;
use kilyte\Http\Request;
use kilyte\http\Response;

class PartCatalogController extends Controller
{
    public function import(Request $request, Response $response)
    {
        $parts = file_get_contents(__DIR__ . "/docs/PartsCatalog.json");
        $parts = json_decode($parts);
        if (isset($parts->catalog)) {
            $parts = $parts->catalog;
            foreach ($parts as $pts => $pt) {
                $category = (isset($pt->Category)) ? $pt->Category : '';
                $category2 = (isset($pt->Category2)) ? $pt->Category2 : '';
                $OE_Number = (isset($pt->OE_Number)) ? $pt->OE_Number : '';
                $description = (isset($pt->Description)) ? $pt->Description : '';
                $description2 = (isset($pt->Description2)) ? $pt->Description2 : '';
                if (!PartCatalog::findOne(['oe_number' => $OE_Number])) {
                    $partcatalog = new PartCatalog;
                    $partcatalog->category = $category;
                    $partcatalog->category_two = $category2;
                    $partcatalog->oe_number = $OE_Number;
                    $partcatalog->description = $description;
                    $partcatalog->description_two = $description2;
                    if ($partcatalog->validate() && $partcatalog->save());
                }
            }
        }

        return $response->redirect('/admin/catalog/list');
    }

    public function partCatalog(Request $request, Response $response)
    {
        $parts = PartCatalog::getAll();
        $this->setLayout('admin.main');
        return $this->render([
            'parts' => $parts
        ], 'admin.ecommerce.catalog.list');
    }
}
