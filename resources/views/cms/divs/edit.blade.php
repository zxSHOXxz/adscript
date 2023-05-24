@extends('cms.master')
@section('title', 'Divs')

@section('tittle_1', ' تعديل Div ')
@section('tittle_2', ' تعديل Div ')


@section('styles')
    <style>
        .color {
            color: #fff;
            margin-inline: 15px;
            width: 35px;
        }
    </style>
@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">اضافة Div</h5>
        </div>

        <div class="card-body">
            <!-- Right aligned buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0"> اضافة Div </h6>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">اسم الdiv</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="اسم الdiv"
                                value="{{ $div->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">المحتوى</label>
                            <input type="text" name="content" id="content" class="form-control" placeholder="المحتوى"
                                value="{{ $div->content }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">اللينك</label>
                            <input type="text" name="href" id="href" class="form-control" placeholder="اللينك"
                                value="{{ $div->href }}">
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3">صورة</label>
                            <div class="col-lg-9">
                                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                                <div class="form-text">ادخل صورة</div>
                                <div class="progress-bar">
                                    <div class="progress"></div>
                                    <div class="progress-text">0%</div>
                                </div>
                                <img id="previewImage" style="display: none;" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label class="col-form-label col-lg-3">الخلفية</label>
                                <div class="col-lg-9">
                                    <select class="form-control select" id="color_id" name="color_id">
                                        <option value="{{ $div->color->id }}" selected>{{ $div->color->color_number }}
                                        </option>
                                        @foreach ($colors as $color)
                                            @if ($div->color->id == $color->id)
                                                @continue
                                            @else
                                                <option value="{{ $color->id }}">{{ $color->color_number }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('divs.index') }}" class="btn btn-light">الغاء</a>
                            <button type="button" onclick="performUpdate({{ $div->id }})"
                                class="btn btn-primary ms-3"> اضافة <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /right aligned buttons -->

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="col-lg-12">
                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>رقم اللون</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colors as $color)
                            <tr>
                                <td>{{ $color->id }}</td>
                                <td class="d-flex justify-content-start">{{ $color->color_number }}
                                    <div class="color" style="background-color: {{ $color->color_number }}">

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <a></a>
    </div>
    <!-- /basic datatable -->

@endsection






@section('scripts')
    <script src="{{ asset('cms/assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('cms/assets/demo/pages/form_select2.js') }}"></script>
    <script>
        function performUpdate(id) {
            let formData = new FormData();
            formData.append('color_id', document.getElementById('color_id').value);
            formData.append('content', document.getElementById('content').value);
            formData.append('href', document.getElementById('href').value);
            formData.append('image', document.getElementById('image').files[0]);

            storeRoute('/cms/admin/divs_update/' + id, formData);
        }
        /* ------------------------------------------------------------------------------
         *
         *  # Basic datatables
         *
         *  Demo JS code for datatable_basic.html page
         *
         * ---------------------------------------------------------------------------- */


        // Setup module
        // ------------------------------

        const DatatableBasic = function() {


            //
            // Setup module components
            //

            // Basic Datatable examples
            const _componentDatatableBasic = function() {
                if (!$().DataTable) {
                    console.warn('Warning - datatables.min.js is not loaded.');
                    return;
                }

                // Setting datatable defaults
                $.extend($.fn.dataTable.defaults, {
                    autoWidth: false,
                    columnDefs: [{
                        orderable: false,
                        width: 100,
                        targets: [2]
                    }],
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    language: {
                        search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="opacity-50 ph-magnifying-glass"></i></div></div>',
                        searchPlaceholder: 'Type to filter...',
                        lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                        paginate: {
                            'first': 'First',
                            'last': 'Last',
                            'next': document.dir == "rtl" ? '&larr;' : '&rarr;',
                            'previous': document.dir == "rtl" ? '&rarr;' : '&larr;'
                        }
                    }
                });

                // Basic datatable
                $('.datatable-basic').DataTable();

                // Alternative pagination
                $('.datatable-pagination').DataTable({
                    pagingType: "simple",
                    language: {
                        paginate: {
                            'next': document.dir == "rtl" ? 'Next &larr;' : 'Next &rarr;',
                            'previous': document.dir == "rtl" ? '&rarr; Prev' : '&larr; Prev'
                        }
                    }
                });

                // Datatable with saving state
                $('.datatable-save-state').DataTable({
                    stateSave: true
                });

                // Scrollable datatable
                const table = $('.datatable-scroll-y').DataTable({
                    autoWidth: true,
                    scrollY: 300
                });

                // Resize scrollable table when sidebar width changes
                $('.sidebar-control').on('click', function() {
                    table.columns.adjust().draw();
                });
            };


            //
            // Return objects assigned to module
            //

            return {
                init: function() {
                    _componentDatatableBasic();
                }
            }
        }();


        // Initialize module
        // ------------------------------

        document.addEventListener('DOMContentLoaded', function() {
            DatatableBasic.init();
        });
    </script>
@endsection
