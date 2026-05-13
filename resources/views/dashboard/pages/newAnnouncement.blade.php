@extends('layouts.dashboard')

@section('title', 'News - Dashboard')

@section('content')
    <style>
        #uploadModal {
            border: 1px solid #999999;
            background: #ffffff;
            position: fixed;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            width: 950px;
            height: 570px;
        }

        .cropit-preview {
            background-color: #f8f8f8;
            background-size: cover;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin: 20px auto 0 auto;
            width: 850px;
            height: 470px;
        }
        .avatar-upload {
            position: relative;
            margin: 0px auto 2px;
        }

        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }

        .avatar-edit span {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
            padding: 6px
        }


        .avatar-upload .avatar-preview {
            width: 300px;
            height: 150px;
            position: relative;
            border-radius: 2%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload .avatar-preview>div {
            width: 100%;
            height: 100%;
            border-radius: 2%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap');

        button:focus,
        input:focus {
            outline: none;
            box-shadow: none;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        .file-upload-contain {
            position: relative;
            margin-bottom: 40px;
        }

        .file-upload-contain .file-input,
        .file-upload-contain .file-preview {
            position: initial;
        }

        .file-upload-contain .file-drop-zone {
            border: 2px dashed #1e80e8;
            transition: 0.3s;
            margin: 0;
            padding: 0;
            border-radius: 20px;
            background-color: #f1f8fe;
            min-height: auto;
        }

        .file-upload-contain .file-drop-zone.clickable:hover,
        .file-upload-contain .file-drop-zone.clickable:focus,
        .file-upload-contain .file-highlighted {
            border: 2px dashed #1e80e8 !important;
            background-color: #dfedfc;
        }

        .upload-area i {
            color: #1e80e8;
            font-size: 50px;
        }

        .upload-area p {
            margin-bottom: 30px;
            margin-top: 30px;
            font-size: 20px;
            font-weight: 600;
            color: #2580e8;
        }

        .upload-area p b {
            color: #1e80e8;
        }

        .upload-area button {
            padding: 8px 16px;
            min-width: 150px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            background-color: #1e80e8;
            border: 2px solid #1e80e8;
            border-radius: 50px;
            transition: 0.3s;
        }

        .upload-area button:hover {
            background-color: #1e80e8;
            box-shadow: 0px 4px 8px rgb(37 128 232 / 48%);
        }

        .file-preview {
            padding: 0;
            border: none;
            margin-bottom: 30px;
        }

        .file-preview .fileinput-remove {
            display: none;
        }

        .file-drop-zone-title {
            padding: 55px 10px;
        }

        .file-drop-zone .file-preview-thumbnails {
            cursor: pointer;
        }

        .file-preview-frame {
            cursor: default;
            display: flex;
            align-items: center;
            border: none;
            background-color: #b1b1b1;
            box-shadow: none;
            border-radius: 8px;
            width: 100%;
            padding: 15px;
            margin: 8px 0px;
        }

        .file-preview-frame:not(.file-preview-error):hover {
            border: none;
            box-shadow: 0 0 10px 0 rgb(0 0 0 / 20%);
        }

        .file-preview-frame .kv-file-content {
            min-width: 45px;
            min-height: 45px;
            width: 45px;
            height: 45px;
            border-radius: 4px;
            margin-right: 10px;
            background-color: #fff;
            padding: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .file-preview-image {
            border-radius: 4px;
        }

        .file-preview-frame .file-footer-caption {
            padding-top: 0;
        }

        .file-preview-frame .file-footer-caption {
            text-align: left;
            margin-bottom: 0;
        }

        .file-detail {
            font-size: 14px;
            height: auto;
            width: 100%;
            line-height: initial;
        }

        .file-detail .file-caption-name {
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .file-detail .file-size {
            color: #f1f8fe;
            font-size: 12px;
        }

        .kv-zoom-cache {
            display: none;
        }

        .file-preview-frame .file-thumbnail-footer {
            height: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .file-preview-frame .file-drag-handle,
        .file-preview-frame .file-upload-indicator {
            float: none;
        }

        .file-preview-frame .file-footer-buttons {
            float: none;
            display: flex;
            align-items: center;
        }

        .file-preview-status.text-center {
            display: none;
        }

        .kv-file-remove.file-remove {
            border: none;
            background-color: #ef2f2f;
            color: #fff;
            width: 25px;
            height: 25px;
            font-size: 12px;
            border-radius: 4px;
            margin: 0px 4px;
        }

        .file-drag-handle.file-drag {
            border: none;
            background-color: #fff;
            color: #2580e8;
            width: 25px;
            height: 25px;
            font-size: 12px;
            border-radius: 4px;
            margin: 0px 4px;
        }

        .kv-file-upload.file-upload {
            border: none;
            background-color: #48bd22;
            color: #fff;
            width: 25px;
            height: 25px;
            font-size: 12px;
            border-radius: 4px;
            margin: 0px 4px;
        }

        .file-thumb-loading {
            background: none !important;
        }

        .file-preview-frame.sortable-chosen {
            background-color: #64a5ef;
            border-color: #64a5ef;
            box-shadow: none !important;
        }
    </style>
    <div class="image-editor-first">
        <div class="fullscreenOverlay hidden" id="dropzone">
            <div class="dropzoneOverlay">
                <span id="filePhoto_span"><input type="file" id="filePhoto" class="cropit-image-input"></span>
                <img src="https://s3-eu-west-1.amazonaws.com/fiveola-site/static-assets/rebuild-images/dropzone-icons-large.png"
                    alt="Dropzone" />
                <h3>Drop to upload an Image</h3>
                <p><strong>Acceptable Image Formats:</strong> JPEG, JPG & PNG</p>
                <p><strong>Acceptable Image Size:</strong> 480px X 400px</p>
                <p class="last"><strong>Max File Size:</strong> 1MB</p>
            </div>
        </div>

        <div class="fullscreenOverlay hidden" id="cropzone">
            <div id="uploadModal">
                <div class="image-editor">
                    <div class="cropit-preview"></div>
                    <div class="controls-wrapper">
                        <div class="rotation-btns">
                            <i class="fa fa-undo rotate-ccw" aria-hidden="true"></i>
                            <i class="fa fa-repeat rotate-cw" aria-hidden="true"></i>
                        </div>
                        <div class="slider-wrapper">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <input type="range" class="cropit-image-zoom-input" min="0" max="1"
                                step="0.01">
                            <i class="fa fa-picture-o large" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="buttons-wrapper">
                        <button class="btn cancel_ppu" style="background: #E72039"><i class="fa fa-remove"
                                aria-hidden="true"></i> Cancel Image Upload</button>
                        <button class="btn upload" onclick="document.getElementById('filePhoto').click();return false;"
                            style="background: #4A90E2" data-cf-modified-04019ca68d82bdedbb3e2867-=""><i
                                class="fa fa-picture-o" aria-hidden="true"></i> Upload a New Picture</button>
                        <button class="btn export export_ppu" style="background: #13204A"><i class="fa fa-check"
                                aria-hidden="true"></i> Use Image</button>
                    </div>

                </div>

            </div>
        </div>
        <input type="hidden" name="image-data" class="hidden-image-data" />
    </div>
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">New Announcement</h1>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Information</h5>
                        </div>
                        <div class="card-body">

                            <form data-action="{{ route('post.dashboard.announcement') }}" id="event-form" data-ajaxify="true"
                                data-method="POST" class="js-validation" novalidate>
                                <input type="hidden" name="image" id="image" />
                                <div class="mb-4">
                                    <label class="form-label">Event Title</label>
                                    <input type="text" name="title" required
                                        class="form-control form-control-lg form-control-solid">
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Short Description</label>
                                    <textarea name="short_description" class="form-control form-control-lg form-control-solid " rows="6"
                                        placeholder="Textarea"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Content</label>
                                    <textarea name="content" class="form-control form-control-lg form-control-solid editor" rows="18"
                                        placeholder="Textarea"></textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Tags</label>
                                    <input type="text" name="tags" required
                                        class="form-control form-control-lg form-control-solid">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Meta tags</label>
                                    <textarea name="seo_tags" class="form-control form-control-lg form-control-solid " rows="12"
                                        placeholder="Textarea" rows="8"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Sort Order</label>
                                    <input type="number" name="sort_order"
                                        class="form-control form-control-lg form-control-solid">
                                </div>


                                <button type="submit" id="save-btn" class="btn form-btn  btn-lg btn-primary">Save
                                    Information</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Featured Image</h5>
                        </div>
                        <div class="card-body">

                            <div class="avatar-upload">
                                <div class="avatar-edit"
                                    onclick="document.getElementById('filePhoto').click();return false;">
                                    <span><i class="dd" data-feather="edit-2"></i></span>
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview"
                                        style="background-image: url(https://placehold.jp/400x200.png);">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <form data-action="{{ route('post.dashboard.uploadImage') }}" id="image-upload-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="imageData" id="imageDataInput" />
        <input type="hidden" name="width" value="850" />
    </form>
    <form data-action="{{ route('post.dashboard.uploadDocument') }}" id="document-upload-form" data-ajaxify="true"
        data-method="POST" class="js-validation" novalidate>
        <input type="hidden" name="fileData" id="fileDataInput" />
    </form>
    @push('scripts')
        <script>
            $(function() {

                var formHasChanged = false;
                var picArray = [];
                $('.image-editor-first').cropit({
                    allowDragNDrop: false,
                    onFileChange: function() {
                        initcroping(this);
                    }
                });

                $('.rotate-cw').click(function() {
                    $('.image-editor-first').cropit('rotateCW');
                });

                $('.rotate-ccw').click(function() {
                    $('.image-editor-first').cropit('rotateCCW');
                });

                $(".cancel_ppu").click(function() {
                    $('.fullscreenOverlay').addClass("hidden");
                    document.querySelector("#filePhoto_span input[type=file]").value = null;
                    return false;
                });


                $('.export_ppu').click(function() {

                    var imageData = $('.image-editor-first').cropit('export');
                    $('.hidden-image-data').val(imageData);
                    document.getElementById("imagePreview").style.backgroundImage = `url('${imageData}')`;

                    $('.fullscreenOverlay').addClass("hidden");
                    $("#imageDataInput").val(imageData);
                    document.getElementById('save-btn').disabled = true;
                    $("#image-upload-form").submit();

                    return false;
                });

                function initcroping(obj) {
                    var minWidth = 850,
                        minHeight = 470,
                        name, validExtensions = 'png jpeg PNG JPEG jpg JPG',
                        width, height;
                    formHasChanged = true;
                    var weburl = window.URL || window.webkitURL;
                    var file = document.getElementById("filePhoto").files[0];
                    fileExtension = file.name.replace(/^.*\./, '');
                    img = new Image();
                    img.src = weburl.createObjectURL(file);
                    img.onload = function() {
                        width = this.width;
                        height = this.height;
                    }
                    $('.fullscreenOverlay').addClass("hidden");
                    $("#uploadprocess_pg").removeClass("hidden");
                    $(".upload_status").removeClass("hidden");
                    var bar = $("#progressbar_mze");
                    bar.animate({
                        width: "100%"
                    }, 1000);
                    setTimeout(function() {
                        if (validExtensions.indexOf(fileExtension) == -1) {
                            alert("Please use an image that's in jpeg,jpg or png format.");
                            $(".upload_status,#dropzone,#uploadprocess_pg").addClass("hidden");
                        } else
                        if (width < minWidth || height < minHeight) {
                            alert("Please use an image that's at least " + minWidth +
                                "px in width and " + minHeight + "px in height.");
                            $(".upload_status,#dropzone,#uploadprocess_pg").addClass("hidden");
                        } else {
                            $(".upload_status").addClass("hidden");
                            $('.fullscreenOverlay').removeClass("hidden");
                            $("#dropzone,#uploadprocess_pg").addClass("hidden");
                        }
                    }, 20);

                }


            });

            function inPageMethod(response) {
                document.getElementById('image').value = response.message;
                document.getElementById('save-btn').disabled = false;
            }

            var textareas = document.querySelectorAll('.editor');
            textareas.forEach(function(textarea) {
                sceditor.create(textarea, {
                    format: 'xhtml',
                    icons: 'monocons',
                    style: 'minified/themes/content/default.min.css'
                });
            });
        </script>
    @endpush
@endsection
