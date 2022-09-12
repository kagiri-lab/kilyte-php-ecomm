<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0">Import Products</h5>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Select File</h5>
            </div>
            <div class="card-body bg-light">

                <form class="dropzone dropzone-single p-0" data-dropzone="data-dropzone" data-options='{"url":"http://localhost:8090/admin/import/products","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}' action="products" method="post" enctype="multipart/form-data">
                    <div class="fallback"><input name="file" type="file" multiple="multiple" /></div>
                    
                    <div class="row justify-content-between align-items-center mt-2">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-falcon-default btn-sm me-2">Upload Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>