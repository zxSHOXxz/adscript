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
                                    placeholder="Textarea" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 84px;"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">اللينك</label>
                                <input type="text" name="href" id="href" class="form-control"
                                    placeholder="الرابط">
                            </div>
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3">صورة</label>
                                <div class="col-lg-9">
                                    <input type="file" id="image" name="image" class="form-control"
                                        accept="image/*">
                                    <div class="form-text">ادخل صورة</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label class="col-form-label col-lg-3">المكان</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" id="place" name="place">
                                            <option value="header">الهيدر</option>
                                            <option value="footer">الفوتر</option>
                                            <option value="center">سنتر</option>
                                            <option value="sidebarRight">السايدبار الايمن</option>
                                            <option value="sidebarLeft">السايدبار الايسر</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('ads.index') }}" class="btn btn-light">الغاء</a>
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
    <script src="{{ asset('cms/assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('cms/assets/demo/pages/form_select2.js') }}"></script>
    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('place', document.getElementById('place').value);
            formData.append('content', document.getElementById('content').value);
            formData.append('href', document.getElementById('href').value);
            formData.append('image', document.getElementById('image').files[0]);
            store('/cms/admin/ads', formData);
        }
    </script>
@endsection
