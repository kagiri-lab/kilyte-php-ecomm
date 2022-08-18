<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0">Vehicle Queries</h5>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Vehicles</h5>
            </div>
            <div class="card-body bg-light">
                <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                    <div class="table-responsive scrollbar">
                        <table class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort" data-sort="registration">Registration</th>
                                    <th class="sort" data-sort="date">Submited On</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php

                                foreach ($vehicles as $vehs => $veh) {

                                ?>
                                    <tr>
                                        <td class="name"><a href="/admin/query/task/<?= $veh['registration'] ?>/<?= $veh['task'] ?>"><?= $veh['registration'] ?></a></td>
                                        <td class="email"><?= $veh['created_at'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <div class="col-lg-4 ps-lg-2">
        <div class="sticky-sidebar">
            <div class="card mb-lg-0">
                <div class="card-header">
                    <h5 class="mb-0">Query Vehicle Details</h5>
                </div>
                <div class="card-body bg-light">
                    <form method="post" action="">
                        <div class="row gx-2">
                            <div class="col-12 mb-3">
                                <label class="form-label" for="event-name">Vehicle Registration</label>
                                <input class="form-control" name="vehicle" id="event-name" type="text" placeholder="Vehicle Registration" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>