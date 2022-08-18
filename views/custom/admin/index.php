<?php

$this->title = "{{site-name}}"

?>

<div class="row g-3 mb-3">

    <div class="col-xxl-12 col-xl-12">
        <div class="card py-3 mb-3">
            <div class="card-body py-3">
                <div class="row g-0">
                    <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                        <h6 class="pb-1 text-700">Orders </h6>
                        <p class="font-sans-serif lh-1 mb-1 fs-2">15,450 </p>
                        <div class="d-flex align-items-center">
                            <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                            <h6 class="fs--2 ps-3 mb-0 text-primary"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-end pb-4 ps-3">
                        <h6 class="pb-1 text-700">Items sold </h6>
                        <p class="font-sans-serif lh-1 mb-1 fs-2">1,054 </p>
                        <div class="d-flex align-items-center">
                            <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                            <h6 class="fs--2 ps-3 mb-0 text-warning"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-bottom border-end border-md-end-0 pb-4 pt-4 pt-md-0 ps-md-3">
                        <h6 class="pb-1 text-700">Refunds </h6>
                        <p class="font-sans-serif lh-1 mb-1 fs-2">$145.65 </p>
                        <div class="d-flex align-items-center">
                            <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                            <h6 class="fs--2 ps-3 mb-0 text-success"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-bottom-0 border-md-end pt-4 pb-md-0 ps-3 ps-md-0">
                        <h6 class="pb-1 text-700">Gross sale </h6>
                        <p class="font-sans-serif lh-1 mb-1 fs-2">$100.26 </p>
                        <div class="d-flex align-items-center">
                            <h6 class="fs--1 text-500 mb-0">$109.65 </h6>
                            <h6 class="fs--2 ps-3 mb-0 text-danger"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 border-200 border-md-bottom-0 border-end pt-4 pb-md-0 ps-md-3">
                        <h6 class="pb-1 text-700">Shipping </h6>
                        <p class="font-sans-serif lh-1 mb-1 fs-2">$365.53 </p>
                        <div class="d-flex align-items-center">
                            <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                            <h6 class="fs--2 ps-3 mb-0 text-success"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
                        <h6 class="pb-1 text-700">Processing </h6>
                        <p class="font-sans-serif lh-1 mb-1 fs-2">861 </p>
                        <div class="d-flex align-items-center">
                            <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                            <h6 class="fs--2 ps-3 mb-0 text-info"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row g-3 mb-3">

    <div class="col-xxl-12 col-md-12">
        <div class="card z-index-1" id="recentPurchaseTable" data-list='{"valueNames":["name","email","product","payment","amount"],"page":7,"pagination":true}'>
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Recent Purchases </h5>
                    </div>
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        <div class="d-none" id="table-purchases-actions">
                            <div class="d-flex">
                                <select class="form-select form-select-sm" aria-label="Bulk actions">
                                    <option selected="">Bulk actions</option>
                                    <option value="Refund">Refund</option>
                                    <option value="Delete">Delete</option>
                                    <option value="Archive">Archive</option>
                                </select>
                                <button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button>
                            </div>
                        </div>
                        <div id="table-purchases-replace-element">
                            <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">New</span></button>
                            <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Filter</span></button>
                            <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Export</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 py-0">
                <div class="table-responsive scrollbar">
                    <table class="table table-sm fs--1 mb-0 overflow-hidden">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="white-space-nowrap">
                                    <div class="form-check mb-0 d-flex align-items-center">
                                        <input class="form-check-input" id="checkbox-bulk-purchases-select" type="checkbox" data-bulk-select='{"body":"table-purchase-body","actions":"table-purchases-actions","replacedElement":"table-purchases-replace-element"}' />
                                    </div>
                                </th>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Customer</th>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                                <th class="sort pe-1 align-middle white-space-nowrap" data-sort="product">Product</th>
                                <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="payment">Payment</th>
                                <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="amount">Amount</th>
                                <th class="no-sort pe-1 align-middle data-table-row-action"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="table-purchase-body">
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Sylvia Plath</a></th>
                                <td class="align-middle white-space-nowrap email">john@gmail.com</td>
                                <td class="align-middle white-space-nowrap product">Slick - Drag &amp; Drop Bootstrap Generator</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$99</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-1" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Homer</a></th>
                                <td class="align-middle white-space-nowrap email">sylvia@mail.ru</td>
                                <td class="align-middle white-space-nowrap product">Bose SoundSport Wireless Headphones</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$634</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-2" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Edgar Allan Poe</a></th>
                                <td class="align-middle white-space-nowrap email">edgar@yahoo.com</td>
                                <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$199</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown2" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-3" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">William Butler Yeats</a></th>
                                <td class="align-middle white-space-nowrap email">william@gmail.com</td>
                                <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$798</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown3" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-4" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Rabindranath Tagore</a></th>
                                <td class="align-middle white-space-nowrap email">tagore@twitter.com</td>
                                <td class="align-middle white-space-nowrap product">ASUS Chromebook C202SA-YS02 11.6&quot;</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$318</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown4" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-5" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Emily Dickinson</a></th>
                                <td class="align-middle white-space-nowrap email">emily@gmail.com</td>
                                <td class="align-middle white-space-nowrap product">Mirari OK to Wake! Alarm Clock &amp; Night-Light</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$11</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown5" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown5"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-6" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Giovanni Boccaccio</a></th>
                                <td class="align-middle white-space-nowrap email">giovanni@outlook.com</td>
                                <td class="align-middle white-space-nowrap product">Summer Infant Contoured Changing Pad</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$31</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown6" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown6"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-7" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Oscar Wilde</a></th>
                                <td class="align-middle white-space-nowrap email">oscar@hotmail.com</td>
                                <td class="align-middle white-space-nowrap product">Munchkin 6 Piece Fork and Spoon Set</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$43</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown7" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown7"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-8" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">John Doe</a></th>
                                <td class="align-middle white-space-nowrap email">doe@gmail.com</td>
                                <td class="align-middle white-space-nowrap product">Falcon - Responsive Dashboard Template</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$57</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown8" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown8"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-9" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Emma Watson</a></th>
                                <td class="align-middle white-space-nowrap email">emma@gmail.com</td>
                                <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$999</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown9" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown9"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-10" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Sylvia Plath</a></th>
                                <td class="align-middle white-space-nowrap email">plath@yahoo.com</td>
                                <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$199</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown10" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown10"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-11" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Rabindranath Tagore</a></th>
                                <td class="align-middle white-space-nowrap email">Rabindra@gmail.com</td>
                                <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$999</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown11" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown11"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-12" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Anila Wilde</a></th>
                                <td class="align-middle white-space-nowrap email">anila@yahoo.com</td>
                                <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$199</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown12" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown12"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td class="align-middle" style="width: 28px;">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-purchase-13" data-bulk-select-row="data-bulk-select-row" />
                                    </div>
                                </td>
                                <th class="align-middle white-space-nowrap name"><a href="/admin/customer/get/1">Jack Watson </a></th>
                                <td class="align-middle white-space-nowrap email">Jack@gmail.com</td>
                                <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                                <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                                </td>
                                <td class="align-middle text-end amount">$999</td>
                                <td class="align-middle white-space-nowrap text-end">
                                    <div class="dropstart font-sans-serif position-static d-inline-block">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown13" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown13"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="pagination d-none"></div>
                    <div class="col">
                        <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"> </span>
                        </p>
                    </div>
                    <div class="col-auto d-flex">
                        <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button>
                        <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>