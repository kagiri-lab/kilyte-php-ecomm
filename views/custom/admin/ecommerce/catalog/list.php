<?php

$this->title = "Parts Catalog";

?>

<div id="tableExample2" data-list='{"valueNames":["category","category_two","oe_number","description"],"page":15,"pagination":true}'>
    <div class="table-responsive scrollbar">
        <table class="table table-bordered table-striped fs--1 mb-0">
            <thead class="bg-200 text-900">
                <tr>
                    <th class="sort" data-sort="category">Category</th>
                    <th class="sort" data-sort="category_two">Category Two</th>
                    <th class="sort" data-sort="oe_number">OE Number</th>
                    <th class="sort" data-sort="description">Description</th>
                </tr>
            </thead>
            <tbody class="list">
                <?php
                foreach ($parts as $pts => $pt) {
                ?>
                    <tr>
                        <td class="category"><?= $pt['category'] ?></td>
                        <td class="category_two"><?= $pt['category_two'] ?></td>
                        <td class="oe_number"><?= $pt['oe_number'] ?></td>
                        <td class="description"><?= $pt['description'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
        <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
    </div>
</div>