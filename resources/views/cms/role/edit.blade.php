@extends('cms.master')
@section('title', 'تعديل الادوار ')

@section('tittle_1', ' تعديل الدور ')
@section('tittle_2', ' تعديل الدور ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">تعديل الدور </h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> تعديل الدور </h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label">اسم الدور</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $roles->name }}" placeholder="أدخل اسم الدور الوظيفي">
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('roles.index') }}" class="btn btn-light">الغاء</a>
                                <button type="button" onclick="performUpdate(id)" class="btn btn-primary ms-3"> اضافة <i
                                        class="ph-paper-plane-tilt ms-2"></i></button>
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
    <script src="{{ asset('cms/assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('cms/assets/demo/pages/form_select2.js') }}"></script>
    <script>
        function performUpdate(id) {
            let formData = new FormData();
            formData.append('name', document.getElementById('name').value);
            storeRoute('/cms/admin/roles_update/' + id, formData);
        }
    </script>
@endsection
