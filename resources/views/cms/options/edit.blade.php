@extends('cms.master')
@section('title', 'الخيارات')

@section('tittle_1', ' تعديل الخيار ')
@section('tittle_2', ' تعديل الخيار ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">تعديل الخيار</h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> تعديل الخيار </h6>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-3">
                                <label class="form-label fw-bold"> محتوى الاعلان </label>
                                <textarea rows="3" cols="3" class="form-control elastic" id="content" name="content"
                                    placeholder="Textarea" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 84px;">{{ $option->content }}</textarea>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label class="col-form-label col-lg-3">الخلفية</label>
                                    <div class="col-lg-9">
                                        <select class="form-control select" id="oquestion_id" name="oquestion_id">
                                            <option value="{{ $option->oquestion->id }}" selected>{{ $option->oquestion->content }}</option>
                                            @foreach ($oquestions as $oquestion)
                                                @if ($option->oquestion->id == $oquestion->id)
                                                    @continue
                                                @else
                                                    <option value="{{ $oquestion->id }}">{{ $oquestion->content }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('oquestions.index') }}" class="btn btn-light">الغاء</a>
                                <button type="button" onclick="performUpdate({{ $option->id }})"
                                    class="btn btn-primary ms-3">تعديل<i class="ph-paper-plane-tilt ms-2"></i></button>
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
            formData.append('oquestion_id', document.getElementById('oquestion_id').value);
            storeRoute('/cms/admin/options_update/' + id, formData);
        }
    </script>
@endsection
