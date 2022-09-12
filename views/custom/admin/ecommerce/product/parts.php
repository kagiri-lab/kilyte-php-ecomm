<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-sm-auto mb-2 mb-sm-0">
                <h6 class="mb-0">Showing 1-24 of 205 Products</h6>
            </div>
            <div class="col-sm-auto">
                <div class="row gx-2 align-items-center">
                    <div class="col-auto">
                        <form class="row gx-2">
                            <div class="col-auto"><small>Sort by: </small></div>
                            <div class="col-auto">
                                <select class="form-select form-select-sm" aria-label="Bulk actions">
                                    <option selected="">Best Match</option>
                                    <option value="Refund">Newest</option>
                                    <option value="Delete">Price</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-auto pe-0"><a class="text-600 px-1" href="../../../app/e-commerce/product/product-grid.html" data-bs-toggle="tooltip" title="Product Grid"><span class="fas fa-th"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body p-0 overflow-hidden">
        <div class="row g-0">
            <?php

            foreach ($parts as $pts) {
            ?>
                <div class="col-12 p-card">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100"><a class="d-block h-100" href="/admin/product/get/1"><img class="img-fluid fit-cover w-sm-100 h-sm-100 rounded-1 absolute-sm-centered" src="<?= $pts["picture"] ?>" alt="..." /></a>
                                <div class="badge rounded-pill bg-success position-absolute top-0 end-0 me-2 mt-2 fs--2 z-index-2">New</div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1" href="/admin/product/get/1">
                                            <?= $pts['description'] ?>
                                        </a></h5>
                                    <p class="fs--1 mb-2 mb-md-3">
                                        <?= $pts['application'] ?>
                                    </p>
                                    <ul class="list-unstyled d-none d-lg-block">
                                        <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span>
                                            <span>Part No - <?= $pts['partNo'] ?></span>
                                        </li>
                                        <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span>
                                            <span>Origin - <?= $pts['origin'] ?></span>
                                        </li>
                                        <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span>
                                            <span>Dimension - <?= $pts['dimension'] ?></span>
                                        </li>
                                        <li><span class="fas fa-circle" data-fa-transform="shrink-12"></span>
                                            <span>Model - <?= $pts['model'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between flex-column">
                                    <div>
                                        <h4 class="fs-1 fs-md-2 text-warning mb-0">
                                            Ksh. <?= $pts['price_one'] ?>
                                        </h4>
                                        <div class="d-none d-lg-block">
                                            <p class="fs--1 mb-1">Shipping Cost: <strong>Ksh. 250</strong></p>
                                            <p class="fs--1 mb-1">Stock: <strong class="text-success">Available</strong>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-2"><a class="btn btn-sm btn-outline-secondary border-300 d-lg-block me-2 me-lg-0" href="#!"><span class="far fa-heart"></span><span class="ms-2 d-none d-md-inline-block">Favourite</span></a><a class="btn btn-sm btn-primary d-lg-block mt-lg-2" href="#!"><span class="fas fa-cart-plus"> </span><span class="ms-2 d-none d-md-inline-block">Add to Cart</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>