@extends('cms.master')
@section('title', 'الخيارات')

@section('tittle_1', ' اضافة خيار ')
@section('tittle_2', ' اضافة خيار ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">اضافة خيار</h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> اضافة خيار </h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label fw-bold"> محتوى الخيار </label>
                                <textarea rows="3" cols="3" class="form-control elastic" id="content" name="content"
                                    placeholder="Textarea" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 84px;"></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label class="col-form-label col-lg-3">الخيار</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" id="oquestion_id" name="oquestion_id">
                                            @foreach ($oquestions as $oquestion)
                                                <option value="{{ $oquestion->id }}">{{ $oquestion->content }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('options.index') }}" class="btn btn-light">الغاء</a>
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
            formData.append('oquestion_id', document.getElementById('oquestion_id').value);
            formData.append('content', document.getElementById('content').value);
            store('/cms/admin/options', formData);
        }
    </script>
@endsection
