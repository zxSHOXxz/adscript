@extends('cms.master')
@section('title', 'الأدوار الوظيفية')

@section('tittle_1', ' اضافة دور وظيفي ')
@section('tittle_2', ' اضافة دور وظيفي ')


@section('styles')

@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">الأدوار</h5>
        </div>

        <div class="card-body">

            <div class="col-lg-12">

                <!-- Right aligned buttons -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"> اضافة دور </h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> المسمى الوظيفي </th>
                                    <th> الصلاحيات</th>
                                    <th> الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        {{-- <span class="tag tag-success">Approved</span>s --}}
                                        <td>{{ $permission->id }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->guard_name }}</td>
                                        <td>
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="permission_{{ $permission->id }}"
                                                    onchange="storeRolePermission({{ $roleId }},{{ $permission->id }})"
                                                    @if ($permission->active) checked @endif>
                                                <label for="permission_{{ $permission->id }}">
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
        function storeRolePermission(roleId, permissionId) {
            let data = {
                permission_id: permissionId,
            };
            store('/cms/admin/roles/' + roleId + '/permissions', data);
        }
    </script>
@endsection
