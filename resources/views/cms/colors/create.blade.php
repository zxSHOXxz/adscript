@extends('cms.master')
@section('title', 'الالوان')

@section('tittle_1', ' اضافة لون ')
@section('tittle_2', ' اضافة لون ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">اضافة لون</h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> اضافة لون </h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label"> رقم اللون </label>
                                <input type="color" id="color_number" class="form-control form-control-color"
                                    name="color_number">
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('color.index') }}" class="btn btn-light">الغاء</a>
                                <button type="button" onclick="performStore()" class="btn btn-primary ms-3"> اضافة <i
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
    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('color_number', document.getElementById('color_number').value);
            store('/cms/admin/color', formData);
        }
    </script>
@endsection
