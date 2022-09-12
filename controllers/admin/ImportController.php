<?php

namespace app\controllers\admin;

use app\models\Stock;
use kilyte\Controller;
use kilyte\Http\Request;
use kilyte\http\Response;

class ImportController extends Controller
{

    public function importCsv(Request $request, Response $response)
    {
        if ($request->isPost()) {
        }
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.product.import');
    }

    public function readCsv(Request $request, Response $response)
    {
        $stocks = file_get_contents(__DIR__ . "/docs/stock.json");
        $stocks = json_decode($stocks);
        foreach ($stocks as $stks) {
            $automan = "Automan Item ID";
            $stock_code = "Stock Code";
            $partNo = "Part Number";
            $partNo_two = "Part Number2";
            $short_description = "Short Description";

            if (!Stock::findOne(['automanItemID' => $stks->$automan, 'stock_code' => $stks->$stock_code, 'partNo' => $stks->$partNo])) {
                $stock = new Stock;
                $stock->automanItemID = $stks->$automan;
                $stock->stock_code = $stks->$stock_code;
                $stock->partNo = $stks->$partNo;
                $stock->description = $stks->Description;
                $stock->application = $stks->Application;
                $stock->brand = $stks->Brand;
                $stock->price_one = $stks->Price2;
                $stock->price_two = $stks->Price3;
                $stock->price_three = $stks->Price4;
                $stock->stk = $stks->Stk;
                $stock->partNo_two = $stks->$partNo_two;
                $stock->model = $stks->Model;
                $stock->engine = $stks->Engine;
                $stock->dimension = $stks->Dimension;
                $stock->dimension_two = $stks->Dimension2;
                $stock->short_description = $stks->$short_description;
                $stock->origin = $stks->Origin;
                $stock->picture = $stks->Picture;
                if ($stock->validate() && $stock->save());
            }
        }
        $response->redirect("/admin/product/list");
    }
}
