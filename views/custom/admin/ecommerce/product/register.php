<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0">Create Product</h5>
            </div>
        </div>
    </div>
</div>
<div class="card cover-image mb-3"><img class="card-img-top" src="../../assets/img/generic/13.jpg" alt="" />
    <input class="d-none" id="upload-cover-image" type="file" />
    <label class="cover-image-file-input" for="upload-cover-image"><span class="fas fa-camera me-2"></span><span>Change cover photo</span></label>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Product Details</h5>
            </div>
            <div class="card-body bg-light">
                <form>
                    <div class="row gx-2">
                        <div class="col-12 mb-3">
                            <label class="form-label" for="event-name">Product Title</label>
                            <input class="form-control" id="event-name" type="text" placeholder="Product Title" />
                        </div>
                        <div class="col-12">
                            <div class="border-dashed-bottom my-3"></div>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label class="form-label" for="event-venue">Units</label>
                            <input class="form-control" id="event-venue" type="text" placeholder="Units" />
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label class="form-label" for="event-address">Price</label>
                            <input class="form-control" id="event-address" type="text" placeholder="Price" />
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label class="form-label" for="event-city">Shipping Cost</label>
                            <input class="form-control" id="event-city" type="text" placeholder="Shipping Cost" />
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="event-description">Description</label>
                            <textarea class="form-control" id="event-description" rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="event-description">Specifications</label>
                            <textarea class="form-control" id="event-description" rows="6"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Upload Photos</h5>
            </div>
            <div class="card-body bg-light">
                <form class="dropzone dropzone-multiple p-0" id="my-awesome-dropzone" data-dropzone="data-dropzone" action="#!">
                    <div class="fallback">
                        <input name="file" type="file" multiple="multiple" />
                    </div>
                    <div class="dz-message" data-dz-message="data-dz-message"> <img class="me-2" src="../../assets/img/icons/cloud-upload.svg" width="25" alt="" />Drop your files here</div>
                    <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                        <div class="d-flex media align-items-center mb-3 pb-3 border-bottom btn-reveal-trigger"><img class="dz-image" src="../../assets/img/generic/image-file-2.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                            <div class="flex-1 d-flex flex-between-center">
                                <div>
                                    <h6 data-dz-name="data-dz-name"></h6>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs--1 text-400 lh-1" data-dz-size="data-dz-size"></p>
                                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                    </div>
                                </div>
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end border py-2"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-lg-4 ps-lg-2">
        <div class="sticky-sidebar">
            <div class="card mb-lg-0">
                <div class="card-header">
                    <h5 class="mb-0">Other Info</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="mb-3">
                        <div class="d-flex flex-between-center">
                            <label class="form-label" for="sponsors">Brand</label>
                            <button class="btn btn-link btn-sm pe-0" type="button">Add New</button>
                        </div>
                        <select class="form-select js-choice" id="sponsors" multiple="multiple" size="1" name="sponsors" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select Brand...</option>
                            <option>Isuzu</option>
                            <option>Toyota</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex flex-between-center">
                            <label class="form-label" for="sponsors">Chassis No</label>
                            <button class="btn btn-link btn-sm pe-0" type="button">Add New</button>
                        </div>
                        <select class="form-select js-choice" id="sponsors" multiple="multiple" size="1" name="sponsors" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select Chassis...</option>
                            <option>A001</option>
                            <option>A002</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex flex-between-center">
                            <label class="form-label" for="sponsors">Model Name</label>
                            <button class="btn btn-link btn-sm pe-0" type="button">Add New</button>
                        </div>
                        <select class="form-select js-choice" id="sponsors" multiple="multiple" size="1" name="sponsors" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select Model Name...</option>
                            <option>A001</option>
                            <option>A002</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex flex-between-center">
                            <label class="form-label" for="organizer">Tags</label>
                            <button class="btn btn-link btn-sm pe-0" type="button">Add New</button>
                        </div>
                        <select class="form-select js-choice" id="organizer" multiple="multiple" size="1" name="organizer" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select tags...</option>
                            <option>Engine Oil</option>
                            <option>Gear Box</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <button class="btn btn-falcon-default btn-sm me-2">Save Product</button>
            </div>
        </div>
    </div>
</div>