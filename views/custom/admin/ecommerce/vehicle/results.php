<?php



$this->title = "$registration - {{site-name}}";


?>
<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0"><?= ucwords($registration) ?> | Details</h5>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <?php

            if (empty($vehicle)) {
            ?>
                <div class="card-body bg-light">
                    <h3>Request is pending...</h3>
                </div>
            <?php
            } else { ?>
                <div class="card-body bg-light">
                    <h5 class="mb-0">Date Of Registration</h5>
                    <p><?= $vehicle->dateofregistration ?></p>

                    <h5 class="mb-0">Date Of Manufacture</h5>
                    <p><?= $vehicle->dateofmanufacture ?></p>

                    <h5 class="mb-0">Make</h5>
                    <p><?= $vehicle->make ?></p>

                    <h5 class="mb-0">Model</h5>
                    <p><?= $vehicle->vehiclemodel ?></p>

                    <h5 class="mb-0">Chassis No</h5>
                    <p><?= $vehicle->chassisframenumber ?></p>

                    <h5 class="mb-0">Engine No</h5>
                    <p><?= $vehicle->enginenumber ?></p>

                    <h5 class="mb-0">Fuel Type</h5>
                    <p><?= $vehicle->fueltype ?></p>

                    <h5 class="mb-0">Body Type</h5>
                    <p><?= $vehicle->bodytype ?></p>


                </div>
            <?php } ?>
        </div>

    </div>

    <div class="col-lg-4 ps-lg-2">
        <div class="sticky-sidebar">
            <div class="card mb-lg-0">
                <div class="card-header">
                    <h5 class="mb-0">Query Vehicle Details</h5>
                </div>
                <div class="card-body bg-light">
                    <form method="post" action="/admin/query/vehicle/list">
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