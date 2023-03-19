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

                    <div class="col mt-4 d-flex gap-2 align-items-center justify-content-end">
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
                    @foreach ($oquestions as $oqusetion)
                        <th>{{ $oqusetion->content ?? 'عذرا لا يوجد بيانات' }}</th>
                    @endforeach
                    @foreach ($iquestions as $iqusetion)
                        <th>{{ $iqusetion->content ?? 'عذرا لا يوجد بيانات' }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($visitors as $visitor)
                    <tr>
                        <td>{{ $visitor->id ?? 'عذرا لا يوجد بيانات' }}</td>
                        <td>{{ $visitor->ip_address ?? 'عذرا لا يوجد بيانات' }}</td>
                        <td>{{ $visitor->created_at ?? 'عذرا لا يوجد بيانات' }}</td>

                        @php
                            $dif = 0;
                            $oquestions_answers = $visitor->answers->where('question_type', 'App\Models\Oquestion')->all();
                            $iquestions_answers = $visitor->answers->where('question_type', 'App\Models\Iquestion')->all();
                            if (count($visitor->answers) !== count($oquestions) + count($iquestions)) {
                                $dif = count($oquestions) + count($iquestions) - count($visitor->answers);
                            }
                        @endphp

                        @foreach ($oquestions_answers as $answer)
                            <td>
                                @php
                                    $content = $options->where('id', $answer->content)->first();
                                @endphp
                                {{ $content->content ?? 'عذرا لا يوجد بيانات' }}
                            </td>
                        @endforeach

                        @foreach ($iquestions_answers as $answer)
                            <td>{{ $answer->content ?? 'عذرا لا يوجد بيانات' }}</td>
                        @endforeach
                        @if ($dif > 0)
                            @for ($i = 0; $i < $dif; $i++)
                                <td>عذرا لا يوجد بيانات</td>
                            @endfor
                        @endif
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
                        search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
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
