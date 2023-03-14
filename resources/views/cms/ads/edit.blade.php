@extends('cms.master')
@section('title', 'الاعلانات')

@section('tittle_1', ' اضافة اعلان ')
@section('tittle_2', ' اضافة اعلان ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">اضافة اعلان</h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> اضافة اعلان </h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label fw-bold"> محتوى الاعلان </label>
                                <textarea rows="3" cols="3" class="form-control elastic" id="content" name="content"
                                    placeholder="Textarea" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 84px;">{{ $ad->content }}</textarea>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label class="col-form-label col-lg-3">المكان</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" id="place" name="place">
                                            <option value="header" {{ $ad->place == 'header' ? 'selected' : null }} >الهيدر</option>
                                            <option value="footer" {{ $ad->place == 'footer' ? 'selected' : null }}>الفوتر</option>
                                            <option value="center" {{ $ad->place == 'center' ? 'selected' : null }}>سنتر</option>
                                            <option value="sidebar" {{ $ad->place == 'sidebar' ? 'selected' : null }}>سايدبار</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('ads.index') }}" class="btn btn-light">الغاء</a>
                                <button type="button" onclick="performUpdate({{ $ad->id }})" class="btn btn-primary ms-3"> اضافة <i
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
            formData.append('place', document.getElementById('place').value);
            formData.append('content', document.getElementById('content').value);
            storeRoute('/cms/admin/ads_update/' + id, formData);
        }
    </script>
@endsection
