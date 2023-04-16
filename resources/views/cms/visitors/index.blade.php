@extends('cms.master')
@section('title', 'الزوار')

@section('tittle_1', ' عرض الزوار ')
@section('tittle_2', ' عرض الزوار ')


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
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col">
                    <h5 class="mb-0">قائمة الزوار</h5>
                </div>
                <div class="col text-end">
                    <a class="btn btn-dark" href="{{ route('visitors/export', request()->query()) }}"> تصدير اكسل </a>
                </div>
            </div>
            <form action="" method="get" class="m-3">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="input-icon col-md-3 col-12">
                        <input type="date" class="form-control" placeholder="ابحث من خلال تاريخ الانشاء "
                            name='created_at' id="created_at"
                            @if (request()->created_at) value={{ request()->created_at }} @endif />
                    </div>

                    <div class="gap-2 mt-4 col d-flex align-items-center justify-content-end">
                        <button class="btn btn-danger btn-md submit" type="submit">Filter</button>
                        <a href="{{ route('visitors.index') }}" type="button" class="btn btn-info">إنهاء
                            البحث </a>
                    </div>
                </div>
            </form>
        </div>
        <table class="table datatable-basic" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ip</th>
                    <th>تاريخ الزيارة</th>
                    @php
                        $status = $oquestions->where('content', 'الحالة الاجتماعية')->first();
                        $old = $oquestions->where('content', 'العمر')->first();
                        $mosa3dat = $oquestions->where('content', 'هل استفدت مسبقا من المساعدات')->first();
                        $family = $iquestions->where('content', 'عدد افراد الاسرة')->first();
                        $name = $iquestions->where('content', 'الاسم رباعي')->first();
                        $country = $iquestions->where('content', 'الدولة')->first();
                        $mobile = $iquestions->where('content', 'رقم الهاتف')->first();
                    @endphp
                    <th>{{ $status->content ?? 'عذرا لا يوجد بيانات' }}</th>
                    <th>{{ $old->content ?? 'عذرا لا يوجد بيانات' }}</th>
                    <th>{{ $mosa3dat->content ?? 'عذرا لا يوجد بيانات' }}</th>
                    <th>{{ $family->content ?? 'عذرا لا يوجد بيانات' }}</th>
                    <th>{{ $name->content ?? 'عذرا لا يوجد بيانات' }}</th>
                    <th>{{ $country->content ?? 'عذرا لا يوجد بيانات' }}</th>
                    <th>{{ $mobile->content ?? 'عذرا لا يوجد بيانات' }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visitors as $visitor)
                    <tr>
                        <td>{{ $visitor->id ?? 'عذرا لا يوجد بيانات' }}</td>
                        <td>{{ $visitor->ip_address ?? 'عذرا لا يوجد بيانات' }}</td>
                        <td>{{ $visitor->created_at ?? 'عذرا لا يوجد بيانات' }}</td>
                        @php
                            $satusAns = $visitor->answers
                                ->where('question_type', 'App\Models\Oquestion')
                                ->where('question_id', '1')
                                ->first();
                            $statusAnsContent = $options->where('id', $satusAns->content)->first();
                            $oldAns = $visitor->answers
                                ->where('question_type', 'App\Models\Oquestion')
                                ->where('question_id', '2')
                                ->first();
                            $oldAnsContent = $options->where('id', $oldAns->content)->first();
                            $mosa3datAns = $visitor->answers
                                ->where('question_type', 'App\Models\Oquestion')
                                ->where('question_id', '3')
                                ->first();
                            $mosa3datAnsContent = $options->where('id', $mosa3datAns->content)->first();
                            $familyAns = $visitor->answers
                                ->where('question_type', 'App\Models\Iquestion')
                                ->where('question_id', '1')
                                ->first();
                            $nameAns = $visitor->answers
                                ->where('question_type', 'App\Models\Iquestion')
                                ->where('question_id', '2')
                                ->first();
                            $countryAns = $visitor->answers
                                ->where('question_type', 'App\Models\Iquestion')
                                ->where('question_id', '3')
                                ->first();
                            $countryCode = $countries->where('name', $countryAns->content)->first();
                            $mobileAns = $visitor->answers
                                ->where('question_type', 'App\Models\Iquestion')
                                ->where('question_id', '4')
                                ->first();
                        @endphp
                        <td> {{ $statusAnsContent->content }} </td>
                        <td> {{ $oldAnsContent->content }} </td>
                        <td> {{ $mosa3datAnsContent->content }} </td>
                        <td> {{ $familyAns->content }} </td>
                        <td> {{ $nameAns->content }} </td>
                        <td> {{ $countryAns->content }} </td>
                        <td> <a href="https://wa.me/{{ $countryCode->dialCode . $mobileAns->content }}"
                                class="gap-1 text-white btn d-flex fw-bold" style="background-color: #25d366;"><i
                                    class="fab fa-whatsapp "></i>
                                {{ $countryCode->dialCode . $mobileAns->content }} </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- /basic datatable -->

@endsection






@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js"></script>

    <!-- pdfmake -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>

    <!-- DataTables Buttons -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script>
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
                    pagingType: "simple",
                    lengthMenu: [10, 100, 1000, 10000],
                    language: {
                        paginate: {
                            'next': document.dir == "rtl" ? 'Next &larr;' : 'Next &rarr;',
                            'previous': document.dir == "rtl" ? '&rarr; Prev' : '&larr; Prev'
                        }
                    },
                    columnDefs: [{
                        orderable: false,
                        width: 100,
                        targets: [1]
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
                    lengthMenu: [10, 25, 50, 1000],
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
