<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>لوحة التحكم - @yield('title')</title>
    <!-- Global stylesheets -->
    <link href="{{ asset('cms/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cms/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cms/assets/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <!-- /global stylesheets -->
    @yield('styles')
</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
        <div class="container-fluid">
            <div class="d-flex d-lg-none me-2">
                <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                    <i class="ph-list"></i>
                </button>
            </div>

            <div class="flex-1 navbar-brand flex-lg-0">
                <a href="index.html" class="d-inline-flex align-items-center">
                    <img src="{{ asset('cms/assets/images/logo_icon.svg') }}" alt="">
                    <img src="{{ asset('cms/assets/images/logo_text_light.svg') }}"
                        class="d-none d-sm-inline-block h-16px ms-3" alt="">
                </a>
            </div>

            {{-- <ul class="flex-row nav">
                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ph-chats"></i>
                        <span
                            class="top-0 mt-1 text-black badge bg-yellow position-absolute end-0 translate-middle-top zindex-1 rounded-pill me-1">8</span>
                    </a>

                    <div class="p-0 dropdown-menu wmin-lg-400">
                        <div class="p-3 d-flex align-items-center">
                            <h6 class="mb-0">Messages</h6>
                            <div class="ms-auto">
                                <a href="#" class="text-body">
                                    <i class="ph-plus-circle"></i>
                                </a>
                                <a href="#search_messages" class="collapsed text-body ms-2" data-bs-toggle="collapse">
                                    <i class="ph-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>

                        <div class="collapse" id="search_messages">
                            <div class="px-3 mb-2">
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="text" class="form-control" placeholder="Search messages">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pb-2 dropdown-menu-scrollable">
                            <a href="#" class="py-2 dropdown-item align-items-start text-wrap">
                                <div class="status-indicator-container me-3">
                                    <img src="{{ asset('cms/assets/images/demo/users/face10.jpg') }}"
                                        class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-warning"></span>
                                </div>

                                <div class="flex-1">
                                    <span class="fw-semibold">James Alexander</span>
                                    <span class="text-muted float-end fs-sm">04:58</span>
                                    <div class="text-muted">who knows, maybe that would be the best thing for me...
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="py-2 dropdown-item align-items-start text-wrap">
                                <div class="status-indicator-container me-3">
                                    <img src="{{ asset('cms/assets/images/demo/users/face3.jpg') }}"
                                        class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </div>

                                <div class="flex-1">
                                    <span class="fw-semibold">Margo Baker</span>
                                    <span class="text-muted float-end fs-sm">12:16</span>
                                    <div class="text-muted">That was something he was unable to do because...</div>
                                </div>
                            </a>

                            <a href="#" class="py-2 dropdown-item align-items-start text-wrap">
                                <div class="status-indicator-container me-3">
                                    <img src="{{ asset('cms/assets/images/demo/users/face24.jpg') }}"
                                        class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </div>
                                <div class="flex-1">
                                    <span class="fw-semibold">Jeremy Victorino</span>
                                    <span class="text-muted float-end fs-sm">22:48</span>
                                    <div class="text-muted">But that would be extremely strained and suspicious...</div>
                                </div>
                            </a>

                            <a href="#" class="py-2 dropdown-item align-items-start text-wrap">
                                <div class="status-indicator-container me-3">
                                    <img src="{{ asset('cms/assets/images/demo/users/face4.jpg') }}"
                                        class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-grey"></span>
                                </div>
                                <div class="flex-1">
                                    <span class="fw-semibold">Beatrix Diaz</span>
                                    <span class="text-muted float-end fs-sm">Tue</span>
                                    <div class="text-muted">What a strenuous career it is that I've chosen...</div>
                                </div>
                            </a>

                            <a href="#" class="py-2 dropdown-item align-items-start text-wrap">
                                <div class="status-indicator-container me-3">
                                    <img src="{{ asset('cms/assets/images/demo/users/face25.jpg') }}"
                                        class="w-40px h-40px rounded-pill" alt="">
                                    <span class="status-indicator bg-danger"></span>
                                </div>
                                <div class="flex-1">
                                    <span class="fw-semibold">Richard Vango</span>
                                    <span class="text-muted float-end fs-sm">Mon</span>
                                    <div class="text-muted">Other travelling salesmen live a life of luxury...</div>
                                </div>
                            </a>
                        </div>

                        <div class="px-3 py-2 d-flex border-top">
                            <a href="#" class="text-body">
                                <i class="ph-checks me-1"></i>
                                Dismiss all
                            </a>
                            <a href="#" class="text-body ms-auto">
                                View all
                                <i class="ph-arrow-circle-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </li>
            </ul> --}}

            {{-- <div class="order-2 navbar-collapse justify-content-center flex-lg-1 order-lg-1 collapse"
                id="navbar_search">
                <div class="mt-2 navbar-search flex-fill position-relative mt-lg-0 mx-lg-3">
                    <div class="form-control-feedback form-control-feedback-start flex-grow-1"
                        data-color-theme="dark">
                        <input type="text" class="bg-transparent form-control rounded-pill" placeholder="Search"
                            data-bs-toggle="dropdown">
                        <div class="form-control-feedback-icon">
                            <i class="ph-magnifying-glass"></i>
                        </div>
                        <div class="dropdown-menu w-100" data-color-theme="light">
                            <button type="button" class="dropdown-item">
                                <div class="text-center w-32px me-3">
                                    <i class="ph-magnifying-glass"></i>
                                </div>
                                <span>Search <span class="fw-bold">"in"</span> everywhere</span>
                            </button>

                            <div class="dropdown-divider"></div>

                            <div class="dropdown-menu-scrollable-lg">
                                <div class="dropdown-header">
                                    Contacts
                                    <a href="#" class="float-end">
                                        See all
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>

                                <div class="cursor-pointer dropdown-item">
                                    <div class="me-3">
                                        <img src="{{ asset('cms/assets/images/demo/users/face3.jpg') }}"
                                            class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold">Christ<mark>in</mark>e Johnson</div>
                                        <span class="fs-sm text-muted">c.johnson@awesomecorp.com</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-user-circle"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="cursor-pointer dropdown-item">
                                    <div class="me-3">
                                        <img src="{{ asset('cms/assets/images/demo/users/face24.jpg') }}"
                                            class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold">Cl<mark>in</mark>ton Sparks</div>
                                        <span class="fs-sm text-muted">c.sparks@awesomecorp.com</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-user-circle"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <div class="dropdown-header">
                                    Clients
                                    <a href="#" class="float-end">
                                        See all
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>

                                <div class="cursor-pointer dropdown-item">
                                    <div class="me-3">
                                        <img src="{{ asset('cms/assets/images/brands/adobe.svg') }}"
                                            class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold">Adobe <mark>In</mark>c.</div>
                                        <span class="fs-sm text-muted">Enterprise license</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-briefcase"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="cursor-pointer dropdown-item">
                                    <div class="me-3">
                                        <img src="{{ asset('cms/assets/images/brands/holiday-inn.svg') }}"
                                            class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold">Holiday-<mark>In</mark>n</div>
                                        <span class="fs-sm text-muted">On-premise license</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-briefcase"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="cursor-pointer dropdown-item">
                                    <div class="me-3">
                                        <img src="{{ asset('cms/assets/images/brands/ing.svg') }}"
                                            class="w-32px h-32px rounded-pill" alt="">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="fw-semibold"><mark>IN</mark>G Group</div>
                                        <span class="fs-sm text-muted">Perpetual license</span>
                                    </div>

                                    <div class="d-inline-flex">
                                        <a href="#" class="text-body ms-2">
                                            <i class="ph-briefcase"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="p-0 navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y me-1"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ph-faders-horizontal"></i>
                    </a>

                    <div class="p-3 dropdown-menu w-100">
                        <div class="mb-3 d-flex align-items-center">
                            <h6 class="mb-0">Search options</h6>
                            <a href="#" class="text-body rounded-pill ms-auto">
                                <i class="ph-clock-counter-clockwise"></i>
                            </a>
                        </div>

                        <div class="mb-3">
                            <label class="d-block form-label">Category</label>
                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="form-check-label">Invoices</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label">Files</span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input">
                                <span class="form-check-label">Users</span>
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Addition</label>
                            <div class="input-group">
                                <select class="flex-grow-0 w-auto form-select">
                                    <option value="1" selected>has</option>
                                    <option value="2">has not</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Enter the word(s)">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="input-group">
                                <select class="flex-grow-0 w-auto form-select">
                                    <option value="1" selected>is</option>
                                    <option value="2">is not</option>
                                </select>
                                <select class="form-select">
                                    <option value="1" selected>Active</option>
                                    <option value="2">Inactive</option>
                                    <option value="3">New</option>
                                    <option value="4">Expired</option>
                                    <option value="5">Pending</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex">
                            <button type="button" class="btn btn-light">Reset</button>

                            <div class="ms-auto">
                                <button type="button" class="btn btn-light">Cancel</button>
                                <button type="button" class="btn btn-primary ms-2">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <ul class="flex-row order-1 nav justify-content-end order-lg-2">
                {{-- <li class="nav-item ms-lg-2">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill"
                        data-bs-toggle="offcanvas" data-bs-target="#notifications">
                        <i class="ph-bell"></i>
                        <span
                            class="top-0 mt-1 text-black badge bg-yellow position-absolute end-0 translate-middle-top zindex-1 rounded-pill me-1">2</span>
                    </a>
                </li> --}}

                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                    <a href="#" class="p-1 navbar-nav-link align-items-center rounded-pill"
                        data-bs-toggle="dropdown">
                        <div class="status-indicator-container">
                            <img src="{{ asset('cms/assets/images/demo/users/face11.jpg') }}"
                                class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                        <span
                            class="d-none d-lg-inline-block mx-lg-2">{{ Auth::check() ? Auth::user()->name : null }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="ph-sign-out me-2"></i>تسجيل
                                الخروج</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Sidebar header -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body d-flex justify-content-center">
                        <h5 class="my-auto sidebar-resize-hide flex-grow-1">الشريط الجانبي</h5>

                        <div>
                            <button type="button"
                                class="border-transparent btn btn-flat-white btn-icon btn-sm rounded-pill sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button"
                                class="border-transparent btn btn-flat-white btn-icon btn-sm rounded-pill sidebar-mobile-main-toggle d-lg-none">
                                <i class="ph-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /sidebar header -->


                <!-- Main navigation -->
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="pt-0 nav-item-header">
                            <div class="opacity-50 text-uppercase fs-sm lh-sm sidebar-resize-hide">اساسي</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('main') }}" class="nav-link active">
                                <i class="ph-house"></i>
                                <span>
                                    لوحة التحكم
                                    <span class="opacity-50 d-block fw-normal">الرئيسية</span>
                                </span>
                            </a>
                        </li>
                        <!-- Page kits -->
                        <li class="nav-item-header">
                            <div class="opacity-50 text-uppercase fs-sm lh-sm sidebar-resize-hide">عناصر التحكم</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>المستخدمين</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link">عرض المشرفين</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('users.create') }}" class="nav-link">اضافة مشرف</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>التحكم في الفرونت</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item">
                                    @canany(['index-permission', 'create-permission', 'update-permission',
                                        'delete-permission'])
                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">
                                            <i class="ph-circles-four"></i>
                                            <span>الصلاحيات</span>
                                        </a>
                                        <ul class="nav-group-sub collapse">
                                            @can('index-permission')
                                                <li class="nav-item">
                                                    <a href="{{ route('permissions.index') }}" class="nav-link">عرض
                                                        الصلاحيات</a>
                                                </li>
                                            @endcan
                                            @can('create-permission')
                                                <li class="nav-item">
                                                    <a href="{{ route('permissions.create') }}" class="nav-link">اضافة
                                                        صلاحية</a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endcanany
                        </li>
                        <li class="nav-item">
                            @canany(['index-role', 'create-role', 'update-role', 'delete-role'])
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">
                                    <i class="ph-circles-four"></i>
                                    <span>الادوار</span>
                                </a>
                                <ul class="nav-group-sub collapse">
                                    @can('create-role')
                                        <li class="nav-item">
                                            <a href="{{ route('roles.index') }}" class="nav-link">عرض الادور</a>
                                        </li>
                                    @endcan
                                    @can('create-role')
                                        <li class="nav-item">
                                            <a href="{{ route('roles.create') }}" class="nav-link">اضافة دور</a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        </li>
                        <li class="nav-item">
                            @canany(['index-texts', 'create-texts', 'update-texts', 'delete-texts'])
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">
                                    <i class="ph-circles-four"></i>
                                    <span>النصوص</span>
                                </a>
                                <ul class="nav-group-sub collapse">
                                    @can('index-texts')
                                        <li class="nav-item">
                                            <a href="{{ route('texts.index') }}" class="nav-link">عرض النصوص</a>
                                        </li>
                                    @endcan
                                    @can('create-texts')
                                        <li class="nav-item">
                                            <a href="{{ route('texts.create') }}" class="nav-link">اضافة نص</a>
                                        </li>
                                    @endcan

                                </ul>
                            </li>
                        @endcanany
                        </li>

                        <li class="nav-item">
                            @canany(['index-colors', 'create-colors', 'update-colors', 'delete-colors'])
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">
                                    <i class="ph-circles-four"></i>
                                    <span>الالوان</span>
                                </a>
                                <ul class="nav-group-sub collapse">
                                    @can('index-colors')
                                        <li class="nav-item">
                                            <a href="{{ route('color.index') }}" class="nav-link">عرض الالوان</a>
                                        </li>
                                    @endcan
                                    @can('create-colors')
                                        <li class="nav-item">
                                            <a href="{{ route('color.create') }}" class="nav-link">اضافة لون</a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        </li>

                        <li class="nav-item">
                            @canany(['index-ads', 'create-ads', 'update-ads', 'delete-ads'])
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">
                                    <i class="ph-circles-four"></i>
                                    <span>الاعلانات</span>
                                </a>

                                <ul class="nav-group-sub collapse">
                                    @can('index-ads')
                                        <li class="nav-item">
                                            <a href="{{ route('ads.index') }}" class="nav-link">عرض الاعلانات</a>
                                        </li>
                                    @endcan
                                    @can('create-ads')
                                        <li class="nav-item">
                                            <a href="{{ route('ads.create') }}" class="nav-link">اضافة اعلان</a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        </li>

                        <li class="nav-item">
                            @canany(['create-oquestions'])
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">
                                    <i class="ph-circles-four"></i>
                                    <span>الاسئلة الاختيارية</span>
                                </a>
                                <ul class="nav-group-sub collapse">
                                    <li class="nav-item">
                                        <a href="{{ route('oquestions.index') }}" class="nav-link">عرض الاسئلة
                                            الاختيارية</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('oquestions.create') }}" class="nav-link">اضافة
                                            سؤال</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('options.index') }}" class="nav-link">عرض الخيارات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('options.create') }}" class="nav-link">اضافة خيار</a>
                                    </li>
                                </ul>
                            </li>
                        @endcanany
                        </li>

                        <li class="nav-item">
                            @canany(['index-iquestions', 'create-iquestions', 'update-iquestions', 'delete-iquestions'])
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">
                                    <i class="ph-circles-four"></i>
                                    <span>اسئلة الادخال</span>
                                </a>
                                <ul class="nav-group-sub collapse">
                                    @can('index-iquestions')
                                        <li class="nav-item">
                                            <a href="{{ route('iquestions.index') }}" class="nav-link">عرض
                                                الاسئلة</a>
                                        </li>
                                    @endcan
                                    @can('create-iquestions')
                                        <li class="nav-item">
                                            <a href="{{ route('iquestions.create') }}" class="nav-link">اضافة
                                                سؤال</a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        </li>

                        <li class="nav-item">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>الزوار</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item">
                                    <a href="{{ route('visitors.index') }}" class="nav-link">عرض الزوار</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                        <li class="nav-item">
                            @canany(['index-divs', 'create-divs', 'update-divs', 'delete-divs'])
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">
                                    <i class="ph-circles-four"></i>
                                    <span>Div</span>
                                </a>
                                <ul class="nav-group-sub collapse">
                                    @can('index-divs')
                                        <li class="nav-item">
                                            <a href="{{ route('divs.index') }}" class="nav-link">عرض ال Divs</a>
                                        </li>
                                    @endcan
                                    @can('create-divs')
                                        <li class="nav-item">
                                            <a href="{{ route('divs.create') }}" class="nav-link">اضافة Div</a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        </li>
                        <li class="nav-item">
                            @canany(['create-nav-items', 'index-nav-items', 'edit-nav-items', 'delete-nav-items'])
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">
                                    <i class="ph-circles-four"></i>
                                    <span>عناصر الناف بار</span>
                                </a>
                                <ul class="nav-group-sub collapse">
                                    @can('index-nav-items')
                                        <li class="nav-item">
                                            <a href="{{ route('navitems.index') }}" class="nav-link">عرض العناصر</a>
                                        </li>
                                    @endcan
                                    @can('create-nav-items')
                                        <li class="nav-item">
                                            <a href="{{ route('navitems.create') }}" class="nav-link">اضافة عنصر</a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        </li>
                    </ul>
                    </li>
                    </ul>
                    <!-- /page kits -->
                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                <div class="shadow page-header page-header-light">
                    <div class="page-header-content d-lg-flex justify-content-between">
                        <div class="d-flex">
                            <h4 class="mb-0 page-title">
                                لوحة التحكم - <span class="fw-normal"> @yield('tittle_1') </span>
                            </h4>
                            
                            <a href="#page_header"
                                class="p-0 border-transparent btn btn-light align-self-center collapsed d-lg-none rounded-pill ms-auto"
                                data-bs-toggle="collapse">
                                <i class="m-1 ph-caret-down collapsible-indicator ph-sm"></i>
                            </a>
                        </div>
                        <a target="blank" href="{{ route('index.index') }}" class="d-flex gap-1 justify-content-between align-items-center">
                            <span> عرض الموقع </span>
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </li>
                    </div>

                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex">
                            <div class="py-2 breadcrumb">
                                <a href="#" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="#" class="breadcrumb-item">لوحة التحكم</a>
                                <span class="breadcrumb-item active">@yield('tittle_2')</span>
                            </div>

                            <a href="#breadcrumb_elements"
                                class="p-0 border-transparent btn btn-light align-self-center collapsed d-lg-none rounded-pill ms-auto"
                                data-bs-toggle="collapse">
                                <i class="m-1 ph-caret-down collapsible-indicator ph-sm"></i>
                            </a>
                        </div>


                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Dashboard content -->
                    @yield('content')
                    <!-- /dashboard content -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    {{-- <!-- Notifications -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
        <div class="py-0 offcanvas-header">
            <h5 class="py-3 offcanvas-title">Activity</h5>
            <button type="button" class="border-transparent btn btn-light btn-sm btn-icon rounded-pill"
                data-bs-dismiss="offcanvas">
                <i class="ph-x"></i>
            </button>
        </div>

        <div class="p-0 offcanvas-body">
            <div class="px-3 py-2 bg-light fw-medium">New notifications</div>
            <div class="p-3">
                <div class="mb-3 d-flex align-items-start">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face1.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">James</a> has completed the task <a
                            href="#">Submit documents</a> from <a href="#">Onboarding</a> list

                        <div class="p-2 my-2 rounded bg-light">
                            <label class="form-check ms-1">
                                <input type="checkbox" class="form-check-input" checked disabled>
                                <del class="form-check-label">Submit personal documents</del>
                            </label>
                        </div>

                        <div class="mt-1 fs-sm text-muted">2 hours ago</div>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-start">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face3.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-warning"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Margo</a> has added 4 users to <span
                            class="fw-semibold">Customer enablement</span> channel

                        <div class="my-2 d-flex">
                            <a href="#" class="status-indicator-container me-1">
                                <img src="{{ asset('cms/assets/images/demo/users/face10.jpg') }}"
                                    class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-danger"></span>
                            </a>
                            <a href="#" class="status-indicator-container me-1">
                                <img src="{{ asset('cms/assets/images/demo/users/face11.jpg') }}"
                                    class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>
                            <a href="#" class="status-indicator-container me-1">
                                <img src="{{ asset('cms/assets/images/demo/users/face12.jpg') }}"
                                    class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>
                            <a href="#" class="status-indicator-container me-1">
                                <img src="{{ asset('cms/assets/images/demo/users/face13.jpg') }}"
                                    class="w-32px h-32px rounded-pill" alt="">
                                <span class="status-indicator bg-success"></span>
                            </a>
                            <button type="button"
                                class="p-0 btn btn-light btn-icon d-inline-flex align-items-center justify-content-center w-32px h-32px rounded-pill">
                                <i class="ph-plus ph-sm"></i>
                            </button>
                        </div>

                        <div class="mt-1 fs-sm text-muted">3 hours ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <div class="me-3">
                        <div class="bg-warning bg-opacity-10 text-warning rounded-pill">
                            <i class="p-2 ph-warning"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        Subscription <a href="#">#466573</a> from 10.12.2021 has been cancelled. Refund case <a
                            href="#">#4492</a> created
                        <div class="mt-1 fs-sm text-muted">4 hours ago</div>
                    </div>
                </div>
            </div>

            <div class="px-3 py-2 bg-light fw-medium">Older notifications</div>
            <div class="p-3">
                <div class="mb-3 d-flex align-items-start">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face25.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Nick</a> requested your feedback and approval in support
                        request <a href="#">#458</a>

                        <div class="my-2">
                            <a href="#" class="btn btn-success btn-sm me-1">
                                <i class="ph-checks ph-sm me-1"></i>
                                Approve
                            </a>
                            <a href="#" class="btn btn-light btn-sm">
                                Review
                            </a>
                        </div>

                        <div class="mt-1 fs-sm text-muted">3 days ago</div>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-start">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face24.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-grey"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Mike</a> added 1 new file(s) to <a
                            href="#">Product management</a> project

                        <div class="p-2 my-2 rounded bg-light">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="{{ asset('cms/assets/images/icons/pdf.svg') }}" width="34"
                                        height="34" alt="">
                                </div>
                                <div class="flex-fill">
                                    new_contract.pdf
                                    <div class="fs-sm text-muted">112KB</div>
                                </div>
                                <div class="ms-2">
                                    <button type="button"
                                        class="border-transparent btn btn-flat-dark text-body btn-icon btn-sm rounded-pill">
                                        <i class="ph-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-1 fs-sm text-muted">1 day ago</div>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-start">
                    <div class="me-3">
                        <div class="bg-success bg-opacity-10 text-success rounded-pill">
                            <i class="p-2 ph-calendar-plus"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        All hands meeting will take place coming Thursday at 13:45.

                        <div class="my-2">
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="ph-calendar-plus ph-sm me-1"></i>
                                Add to calendar
                            </a>
                        </div>

                        <div class="mt-1 fs-sm text-muted">2 days ago</div>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-start">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face4.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-danger"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Christine</a> commented on your community <a
                            href="#">post</a> from 10.12.2021

                        <div class="mt-1 fs-sm text-muted">2 days ago</div>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-start">
                    <div class="me-3">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-pill">
                            <i class="p-2 ph-users-four"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        <span class="fw-semibold">HR department</span> requested you to complete internal survey by
                        Friday

                        <div class="mt-1 fs-sm text-muted">3 days ago</div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /notifications --> --}}


    <!-- Demo config -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
        <div class="visible position-absolute top-50 end-100">
            <button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0"
                data-bs-toggle="offcanvas" data-bs-target="#demo_config">
                <i class="ph-gear"></i>
            </button>
        </div>

        <div class="py-0 offcanvas-header border-bottom">
            <h5 class="py-3 offcanvas-title">المظهر</h5>
            <button type="button" class="border-transparent btn btn-light btn-sm btn-icon rounded-pill"
                data-bs-dismiss="offcanvas">
                <i class="ph-x"></i>
            </button>
        </div>

        <div class="offcanvas-body">
            <div class="mb-2 fw-semibold">الالوان</div>
            <div class="mb-3 list-group">
                <label class="mb-2 rounded list-group-item list-group-item-action form-check border-width-1">
                    <div class="my-1 d-flex flex-fill">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-sun ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">مظهر فاتج</span>
                            </div>
                        </div>
                        <input type="radio" class="cursor-pointer form-check-input ms-auto" name="main-theme"
                            value="light" checked>
                    </div>
                </label>

                <label class="mb-2 rounded list-group-item list-group-item-action form-check border-width-1">
                    <div class="my-1 d-flex flex-fill">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-moon ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">Dark theme</span>
                            </div>
                        </div>
                        <input type="radio" class="cursor-pointer form-check-input ms-auto" name="main-theme"
                            value="dark">
                    </div>
                </label>

                {{-- <label class="mb-0 rounded list-group-item list-group-item-action form-check border-width-1">
                    <div class="my-1 d-flex flex-fill">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-translate ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">Auto theme</span>
                                <div class="fs-sm text-muted">Set theme based on system mode</div>
                            </div>
                        </div>
                        <input type="radio" class="cursor-pointer form-check-input ms-auto" name="main-theme"
                            value="auto">
                    </div>
                </label> --}}
            </div>
        </div>
        <!-- /demo config -->

        <script src="{{ asset('cms/assets/js/jquery/jquery.min.js') }}"></script>
        <!-- Load plugin -->
        <script src="{{ asset('cms/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"
            integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Load plugin -->
        <script src="{{ asset('cms/assets/js/vendor/notifications/sweet_alert.min.js') }}"></script>
        <script src="{{ asset('cms/assets/js/crud.js') }}"></script>
        <script src="{{ asset('cms/assets/js/app.js') }}"></script>
        <script src="{{ asset('cms/assets/js/custom.js') }}"></script>
        <!-- Core JS files -->
        <script src="{{ asset('cms/assets/demo/demo_configurator.js') }}"></script>

        <script src="{{ asset('cms/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- /core JS files -->
        <!-- Theme JS files -->
        <script src="{{ asset('cms/assets/demo/pages/dashboard.js') }}"></script>
        <!-- /theme JS files -->
        <script type="text/javascript" src="{{ asset('cms/assets/js/vendor/pickers/color/spectrum.js') }}"></script>

        @yield('scripts')
</body>

</html>
