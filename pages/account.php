<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1>My Account Page</h1>
            <form action="" method="post" enctype="multipart/form-data" class="m-5">
                <!-- -->
                <input type="hidden" name="form_name" value="upload">
                <input type="hidden" name="csrf_token" value="<?php echo myAppCSRFToken("upload"); ?>">
                <!-- -->
                <div>
                    <label for="formFileLg" class="form-label">Upload</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>

                <div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Public
                    </label>
                </div>
                <div class="form-check my-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Private
                    </label>
                </div>
                <button class="btn btn-primary text-center mt-2" type="submit">
                    Upload
                </button>
            </form>
        </div>
    </div>
</div>