<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ads - @yield('title')</title>
    <!-- Global stylesheets -->
    <link href="{{ asset('cms/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cms/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cms/assets/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">

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

            <div class="navbar-brand flex-1 flex-lg-0">
                <a href="index.html" class="d-inline-flex align-items-center">
                    <img src="{{ asset('cms/assets/images/logo_icon.svg') }}" alt="">
                    <img src="{{ asset('cms/assets/images/logo_text_light.svg') }}"
                        class="d-none d-sm-inline-block h-16px ms-3" alt="">
                </a>
            </div>

            <ul class="nav flex-row">
                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ph-chats"></i>
                        <span
                            class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
                    </a>

                    <div class="dropdown-menu wmin-lg-400 p-0">
                        <div class="d-flex align-items-center p-3">
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

                        <div class="dropdown-menu-scrollable pb-2">
                            <a href="#" class="dropdown-item align-items-start text-wrap py-2">
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

                            <a href="#" class="dropdown-item align-items-start text-wrap py-2">
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

                            <a href="#" class="dropdown-item align-items-start text-wrap py-2">
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

                            <a href="#" class="dropdown-item align-items-start text-wrap py-2">
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

                            <a href="#" class="dropdown-item align-items-start text-wrap py-2">
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

                        <div class="d-flex border-top py-2 px-3">
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
            </ul>

            <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse"
                id="navbar_search">
                <div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
                    <div class="form-control-feedback form-control-feedback-start flex-grow-1"
                        data-color-theme="dark">
                        <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search"
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

                                <div class="dropdown-item cursor-pointer">
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

                                <div class="dropdown-item cursor-pointer">
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

                                <div class="dropdown-item cursor-pointer">
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

                                <div class="dropdown-item cursor-pointer">
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

                                <div class="dropdown-item cursor-pointer">
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
                        class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ph-faders-horizontal"></i>
                    </a>

                    <div class="dropdown-menu w-100 p-3">
                        <div class="d-flex align-items-center mb-3">
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
                                <select class="form-select w-auto flex-grow-0">
                                    <option value="1" selected>has</option>
                                    <option value="2">has not</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Enter the word(s)">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="input-group">
                                <select class="form-select w-auto flex-grow-0">
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
            </div>

            <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                <li class="nav-item ms-lg-2">
                    <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill"
                        data-bs-toggle="offcanvas" data-bs-target="#notifications">
                        <i class="ph-bell"></i>
                        <span
                            class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                    </a>
                </li>

                <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                    <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1"
                        data-bs-toggle="dropdown">
                        <div class="status-indicator-container">
                            <img src="{{ asset('cms/assets/images/demo/users/face11.jpg') }}"
                                class="w-32px h-32px rounded-pill" alt="">
                            <span class="status-indicator bg-success"></span>
                        </div>
                        <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">
                            <i class="ph-user-circle me-2"></i>
                            My profile
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-currency-circle-dollar me-2"></i>
                            My subscription
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-shopping-cart me-2"></i>
                            My orders
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-envelope-open me-2"></i>
                            My inbox
                            <span class="badge bg-primary rounded-pill ms-auto">26</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="ph-gear me-2"></i>
                            Account settings
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-sign-out me-2"></i>
                            Logout
                        </a>
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
                        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                        <div>
                            <button type="button"
                                class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button"
                                class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
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
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">اساسي</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link active">
                                <i class="ph-house"></i>
                                <span>
                                    لوحة التحكم
                                    <span class="d-block fw-normal opacity-50">الرئيسية</span>
                                </span>
                            </a>
                        </li>
                        <!-- Page kits -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">عناصر التحكم</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>النصوص</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('texts.index') }}" class="nav-link">عرض النصوص</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('texts.create') }}" class="nav-link">اضافة نص</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>الالوان</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('color.index') }}" class="nav-link">عرض الالوان</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('color.create') }}" class="nav-link">اضافة لون</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>الاعلانات</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('ads.index') }}" class="nav-link">عرض الاعلانات</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('ads.create') }}" class="nav-link">اضافة اعلان</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>الاسئلة الاختيارية</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('oquestions.index') }}" class="nav-link">عرض الاسئلة
                                        الاختيارية</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('oquestions.create') }}" class="nav-link">اضافة خيار</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('options.index') }}" class="nav-link">عرض الخيارات</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('options.create') }}" class="nav-link">اضافة خيار</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>اسئلة الادخال</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('iquestions.index') }}" class="nav-link">عرض الاسئلة</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('iquestions.create') }}" class="nav-link">اضافة سؤال</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>الزوار</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('visitors.index') }}" class="nav-link">عرض الزوار</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>Dive</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('divs.index') }}" class="nav-link">عرض ال Divs</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('divs.create') }}" class="nav-link">اضافة Div</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>عناصر الناف بار</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item">
                                    <a href="{{ route('navitems.index') }}" class="nav-link">عرض العناصر</a>
                                </li>
                                <li class="nav-item nav-item">
                                    <a href="{{ route('navitems.create') }}" class="nav-link">اضافة عنصر</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-circles-four"></i>
                                <span>التحكم في الفرونت</span>
                            </a>
                            <ul class="nav-group-sub collapse">
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Task manager</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="task_manager_grid.html" class="nav-link">Task
                                                grid</a></li>
                                        <li class="nav-item"><a href="task_manager_list.html" class="nav-link">Task
                                                list</a></li>
                                        <li class="nav-item"><a href="task_manager_detailed.html"
                                                class="nav-link">Task detailed</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Inbox</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="mail_list.html" class="nav-link">Mail list</a>
                                        </li>
                                        <li class="nav-item"><a href="mail_list_detached.html" class="nav-link">Mail
                                                list (detached)</a></li>
                                        <li class="nav-item"><a href="mail_read.html" class="nav-link">Read mail</a>
                                        </li>
                                        <li class="nav-item"><a href="mail_write.html" class="nav-link">Write
                                                mail</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="chat_layouts.html" class="nav-link">Chat
                                                layouts</a></li>
                                        <li class="nav-item"><a href="chat_options.html" class="nav-link">Chat
                                                options</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Search</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="search_basic.html" class="nav-link">Basic
                                                search results</a></li>
                                        <li class="nav-item"><a href="search_users.html" class="nav-link">User search
                                                results</a></li>
                                        <li class="nav-item"><a href="search_images.html" class="nav-link">Image
                                                search results</a></li>
                                        <li class="nav-item"><a href="search_videos.html" class="nav-link">Video
                                                search results</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Job search</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="job_list_cards.html" class="nav-link">Cards
                                                view</a></li>
                                        <li class="nav-item"><a href="job_list_list.html" class="nav-link">List
                                                view</a></li>
                                        <li class="nav-item"><a href="job_detailed.html" class="nav-link">Job
                                                detailed</a></li>
                                        <li class="nav-item"><a href="job_apply.html" class="nav-link">Apply</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Learning</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="learning_list.html" class="nav-link">List
                                                view</a></li>
                                        <li class="nav-item"><a href="learning_grid.html" class="nav-link">Grid
                                                view</a></li>
                                        <li class="nav-item"><a href="learning_detailed.html"
                                                class="nav-link">Detailed course</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Ecommerce set</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="ecommerce_product_list.html"
                                                class="nav-link">Product list</a></li>
                                        <li class="nav-item"><a href="ecommerce_product_grid.html"
                                                class="nav-link">Product grid</a></li>
                                        <li class="nav-item"><a href="ecommerce_orders_history.html"
                                                class="nav-link">Orders history</a></li>
                                        <li class="nav-item"><a href="ecommerce_customers.html"
                                                class="nav-link">Customers</a></li>
                                        <li class="nav-item"><a href="ecommerce_pricing.html"
                                                class="nav-link">Pricing tables</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

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
                <div class="page-header page-header-light shadow">
                    <div class="page-header-content d-lg-flex">
                        <div class="d-flex">
                            <h4 class="page-title mb-0">
                                لوحة التحكم - <span class="fw-normal"> @yield('tittle_1') </span>
                            </h4>

                            <a href="#page_header"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>

                    <div class="page-header-content d-lg-flex border-top">
                        <div class="d-flex">
                            <div class="breadcrumb py-2">
                                <a href="#" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="#" class="breadcrumb-item">لوحة التحكم</a>
                                <span class="breadcrumb-item active">@yield('tittle_2')</span>
                            </div>

                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
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


    <!-- Notifications -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
        <div class="offcanvas-header py-0">
            <h5 class="offcanvas-title py-3">Activity</h5>
            <button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill"
                data-bs-dismiss="offcanvas">
                <i class="ph-x"></i>
            </button>
        </div>

        <div class="offcanvas-body p-0">
            <div class="bg-light fw-medium py-2 px-3">New notifications</div>
            <div class="p-3">
                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face1.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">James</a> has completed the task <a
                            href="#">Submit documents</a> from <a href="#">Onboarding</a> list

                        <div class="bg-light rounded p-2 my-2">
                            <label class="form-check ms-1">
                                <input type="checkbox" class="form-check-input" checked disabled>
                                <del class="form-check-label">Submit personal documents</del>
                            </label>
                        </div>

                        <div class="fs-sm text-muted mt-1">2 hours ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face3.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-warning"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Margo</a> has added 4 users to <span
                            class="fw-semibold">Customer enablement</span> channel

                        <div class="d-flex my-2">
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
                                class="btn btn-light btn-icon d-inline-flex align-items-center justify-content-center w-32px h-32px rounded-pill p-0">
                                <i class="ph-plus ph-sm"></i>
                            </button>
                        </div>

                        <div class="fs-sm text-muted mt-1">3 hours ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <div class="me-3">
                        <div class="bg-warning bg-opacity-10 text-warning rounded-pill">
                            <i class="ph-warning p-2"></i>
                        </div>
                    </div>
                    <div class="flex-1">
                        Subscription <a href="#">#466573</a> from 10.12.2021 has been cancelled. Refund case <a
                            href="#">#4492</a> created
                        <div class="fs-sm text-muted mt-1">4 hours ago</div>
                    </div>
                </div>
            </div>

            <div class="bg-light fw-medium py-2 px-3">Older notifications</div>
            <div class="p-3">
                <div class="d-flex align-items-start mb-3">
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

                        <div class="fs-sm text-muted mt-1">3 days ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face24.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-grey"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Mike</a> added 1 new file(s) to <a
                            href="#">Product management</a> project

                        <div class="bg-light rounded p-2 my-2">
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
                                        class="btn btn-flat-dark text-body btn-icon btn-sm border-transparent rounded-pill">
                                        <i class="ph-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="fs-sm text-muted mt-1">1 day ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <div class="bg-success bg-opacity-10 text-success rounded-pill">
                            <i class="ph-calendar-plus p-2"></i>
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

                        <div class="fs-sm text-muted mt-1">2 days ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <a href="#" class="status-indicator-container me-3">
                        <img src="{{ asset('cms/assets/images/demo/users/face4.jpg') }}"
                            class="w-40px h-40px rounded-pill" alt="">
                        <span class="status-indicator bg-danger"></span>
                    </a>
                    <div class="flex-fill">
                        <a href="#" class="fw-semibold">Christine</a> commented on your community <a
                            href="#">post</a> from 10.12.2021

                        <div class="fs-sm text-muted mt-1">2 days ago</div>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-pill">
                            <i class="ph-users-four p-2"></i>
                        </div>
                    </div>
                    <div class="flex-fill">
                        <span class="fw-semibold">HR department</span> requested you to complete internal survey by
                        Friday

                        <div class="fs-sm text-muted mt-1">3 days ago</div>
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
    <!-- /notifications -->


    <!-- Demo config -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
        <div class="position-absolute top-50 end-100 visible">
            <button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0"
                data-bs-toggle="offcanvas" data-bs-target="#demo_config">
                <i class="ph-gear"></i>
            </button>
        </div>

        <div class="offcanvas-header border-bottom py-0">
            <h5 class="offcanvas-title py-3">Demo configuration</h5>
            <button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill"
                data-bs-dismiss="offcanvas">
                <i class="ph-x"></i>
            </button>
        </div>

        <div class="offcanvas-body">
            <div class="fw-semibold mb-2">Color mode</div>
            <div class="list-group mb-3">
                <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
                    <div class="d-flex flex-fill my-1">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-sun ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">Light theme</span>
                                <div class="fs-sm text-muted">Set light theme or reset to default</div>
                            </div>
                        </div>
                        <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme"
                            value="light" checked>
                    </div>
                </label>

                <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
                    <div class="d-flex flex-fill my-1">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-moon ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">Dark theme</span>
                                <div class="fs-sm text-muted">Switch to dark theme</div>
                            </div>
                        </div>
                        <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme"
                            value="dark">
                    </div>
                </label>

                <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
                    <div class="d-flex flex-fill my-1">
                        <div class="form-check-label d-flex me-2">
                            <i class="ph-translate ph-lg me-3"></i>
                            <div>
                                <span class="fw-bold">Auto theme</span>
                                <div class="fs-sm text-muted">Set theme based on system mode</div>
                            </div>
                        </div>
                        <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme"
                            value="auto">
                    </div>
                </label>
            </div>
        </div>
        <!-- /demo config -->
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

        <script src="{{ asset('cms/assets/js/jquery/jquery.min.js') }}"></script>
        <!-- Load plugin -->
        <script src="{{ asset('cms/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>

        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/streamgraph.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/sparklines.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/lines.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/areas.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/donuts.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/bars.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/progress.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/heatmaps.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/pies.js') }}"></script>
        <script src="{{ asset('cms/assets/demo/charts/pages/dashboard/bullets.js') }}"></script>
        <!-- /theme JS files -->
        @yield('scripts')
</body>

</html>
