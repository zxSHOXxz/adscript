@extends('cms.master')
@section('title', 'الاسئلة')

@section('tittle_1', ' اضافة سؤال ')
@section('tittle_2', ' اضافة سؤال ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">اضافة سؤال</h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> اضافة سؤال </h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label fw-bold"> محتوى السؤال </label>
                                <textarea rows="3" cols="3" class="form-control elastic" id="content" name="content"
                                    placeholder="Textarea" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 84px;">{{ $oquestion->content }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">الترتيب</label>
                                <input type="text" name="order" id="order" class="form-control"
                                    placeholder="الترتيب">
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('oquestions.index') }}" class="btn btn-light">الغاء</a>
                                <button type="button" onclick="performUpdate({{ $oquestion->id }})"
                                    class="btn btn-primary ms-3"> اضافة <i class="ph-paper-plane-tilt ms-2"></i></button>
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
            formData.append('content', document.getElementById('content').value);
            formData.append('order', document.getElementById('order').value);
            storeRoute('/cms/admin/oquestions_update/' + id, formData);
        }
    </script>
@endsection
