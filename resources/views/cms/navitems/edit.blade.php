@extends('cms.master')
@section('title', 'عناصر الناف بار')

@section('tittle_1', ' تعديل عناصر الناف بار ')
@section('tittle_2', ' تعديل عناصر الناف بار ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">تعديل عناصر الناف بار</h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> تعديل عناصر الناف بار </h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label">اللينك</label>
                                <input type="text" name="href" id="href" value="{{ $item->href }}"
                                    class="form-control" placeholder="الرابط">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">المحتوى</label>
                                <input type="text" name="content" id="content" value="{{ $item->content }}"
                                    class="form-control" placeholder="المحتوى">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">اللون</label>
                                <input type="color" id="color" value="{{ $item->color }}"
                                    class="form-control form-control-color" name="color">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">الخلفية</label>
                                <input type="color" id="background" value="{{ $item->background }}"
                                    class="form-control form-control-color" name="background">
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="reset" class="btn btn-light">الغاء</button>
                                <button type="button" onclick="performUpdate({{ $item->id }})"
                                    class="btn btn-primary ms-3">
                                    تعديل
                                    <i class="ph-paper-plane-tilt ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /right aligned buttons -->

            </div>
        </div>



    </div>
    <!-- /basic datatable -->

@endsection






@section('scripts')

@section('scripts')
    <script>
        function performUpdate(id) {
            let formData = new FormData();
            formData.append('background', document.getElementById('background').value);
            formData.append('color', document.getElementById('color').value);
            formData.append('content', document.getElementById('content').value);
            formData.append('href', document.getElementById('href').value);
            storeRoute('/cms/admin/navitems_update/' + id, formData);
        }
    </script>

@endsection
