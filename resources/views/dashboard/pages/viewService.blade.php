@extends('layouts.dashboard')

@section('title', 'Service - Dashboard')

@section('content')


        @if(!$isEdit)
         <style>
        input {
            background-color: #FFF!important;
            pointer-events: none;
            outline: none !important;
            border: none !important;
            border-width: 0 !important;
        }
        .dnone {
            display: none !important;
        }
        div.sceditor-toolbar {
            display: none !important;
        }
        </style>
        @endif


    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Vew Service</strong></h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    @if(!$isEdit)
                    <a href="{{ route('get.dashboard.viewService', ['id' => $service->id, 'isEdit' => 'true']) }}" class="btn btn-primary">Edit Details</a>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Information</h5>
                        </div>
                        <div class="card-body">

                            <form data-action="{{ route('update.dashboard.service') }}" id="faculty-form" data-ajaxify="true"
                                data-method="POST" class="js-validation" novalidate>
                                <input type="hidden" value="{{ $service->id }}" name="id" id="id" />

                                <div class="mb-4">
                                    <label class="form-label">Service Name</label>
                                    <input type="text" value="{{ $service->name }}" name="name" required
                                        class="form-control form-control-lg form-control-solid">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Service Title</label>
                                    <input type="text" value="{{ $service->title }}" name="title" required
                                        class="form-control form-control-lg form-control-solid">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Short Description</label>
                                    <textarea name="short_description" class="form-control form-control-lg form-control-solid" rows="6"
                                        placeholder="Textarea" rows="1">{{ old('content', $service->short_description) }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Content</label>
                                    <textarea name="content" class="form-control form-control-lg form-control-solid editor" rows="20"
                                        placeholder="Textarea" rows="1">{!! $service->content !!}</textarea>
                                </div>
                                 <div class="mb-4">
                                    <label class="form-label">Meta Tags</label>
                                    <textarea name="seo_tags" class="form-control form-control-lg form-control-solid " rows="12"
                                        placeholder="Textarea" rows="1">{!! $service->seo_tags !!}</textarea>
                                </div>

                                <button type="submit" id="save-btn" class="btn form-btn  btn-lg btn-primary dnone">Save
                                    Information</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
    @push('scripts')
            <script src="https://cdn.tiny.cloud/1/0vjkzlsq9jqtmnb3zr0asm4nc4vo7crdn12j2f679it4ynlc/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

            <script>
              tinymce.init({
                selector: '.editor',
                plugins: [

                  'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',

                  'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
                ],
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',

                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
              });

              document.getElementById('save-btn').addEventListener('click', function(e) {
                tinymce.triggerSave();

                });
            </script>
    @endpush
@endsection
