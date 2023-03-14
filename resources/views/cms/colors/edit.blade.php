@extends('cms.master')
@section('title', 'الالوان')

@section('tittle_1', ' تعديل لون ')
@section('tittle_2', ' تعديل لون ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">تعديل اللون</h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> تعديل لون </h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label"> رقم اللون </label>
                                <input type="color" id="color_number" value="{{ $color->color_number }}"
                                    class="form-control form-control-color" name="color_number">
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <button type="reset" class="btn btn-light">الغاء</button>
                                <button type="button" onclick="performUpdate({{ $color->id }})"
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
            formData.append('color_number', document.getElementById('color_number').value);
            storeRoute('/cms/admin/colors_update/' + id, formData);
        }
    </script>

@endsection
