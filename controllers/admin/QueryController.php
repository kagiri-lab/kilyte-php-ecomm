<?php

namespace app\controllers\admin;

use app\models\TaskQuery;
use kilyte\Controller;
use kilyte\Http\Request;
use kilyte\http\Response;
use kilyte\lucen\SDK\Lucen;

class QueryController extends Controller
{

    public function listQueries(Request $request, Response $response)
    {

        if ($request->isPost()) {
            $vehicle = $request->get('vehicle');
            if (!empty($vehicle)) {
                if (!TaskQuery::findOne(['registration' => $vehicle])) {
                    $lucen = new Lucen($_ENV['LUCEN_URL'], $_ENV['LUCEN_USERNAME'], $_ENV['LUCEN_APIKEY']);
                    $data = [
                        ['query' => $vehicle, 'type' => 'vehicle']
                    ];
                    $task = $lucen->submit_task($data);
                    $status = $task->status;
                    if ($status === "success") {
                        $data = $task->data;
                        foreach ($data as $dts => $dt) {
                            if (is_array($dt)) {
                                foreach ($dt as $ds => $d) {
                                    $qr = $d->query;
                                    $task_id = $d->task_id;
                                    $task = new TaskQuery;
                                    $task->registration = $qr;
                                    $task->task = $task_id;
                                    if ($task->validate() && $task->save())
                                        continue;
                                }
                            }
                        }
                    }
                }
            }
        }

        $vehicles = TaskQuery::getAll();
        $this->setLayout('admin.main');
        return $this->render([
            'vehicles' => $vehicles
        ], 'admin.ecommerce.vehicle.query');
    }


    public function queryTask(Request $request, Response $response)
    {
        $vehicle = $request->getRouteParam('vehicle');
        $task = $request->getRouteParam('task');
        $query = TaskQuery::findOne(['task' => $task, 'registration' => $vehicle]);
        if ($query) {

            $lucen = new Lucen($_ENV['LUCEN_URL'], $_ENV['LUCEN_USERNAME'], $_ENV['LUCEN_APIKEY']);
            $task = $lucen->get_task([
                ['query' => $vehicle, 'task' => $task]
            ]);

            if ($task->status === "success") {
                $data = $task->data;
                if (isset($data->vehicle))
                    $details = $task->data->vehicle[0]->particulars[0];
                else
                    $details = [];
                $this->setLayout('admin.main');
                return $this->render(
                    [
                        'vehicle' => $details,
                        'registration' => ucwords($vehicle)
                    ],
                    'admin.ecommerce.vehicle.results'
                );
            }
        }
        $response->redirect('/admin/query/vehicle/list');
        return;
    }
}
