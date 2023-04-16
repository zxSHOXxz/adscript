<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    @php
        $logoHref = $divs->where('name', 'logo')->first();
        $imageMeta = $divs->where('name', 'imageMeta')->first();
        $ogImage = $divs->where('name', 'ogImage')->first();
        $typeMeta = $divs->where('name', 'typeMeta')->first();
        $ogKeywords = $divs->where('name', 'ogKeywords')->first();
        $ogTitle = $divs->where('name', 'og:title')->first();
        $ogUrl = $divs->where('name', 'og:url')->first();
        $ogType = $divs->where('name', 'og:type')->first();
        $fbApp_id = $divs->where('name', 'fb:app_id')->first();
        $ogDescription = $divs->where('name', 'og:description')->first();
        $metaKeywords = $divs->where('name', 'meta:keywords')->first();
        $metaDescription = $divs->where('name', 'meta:description')->first();
        $metaAuthor = $divs->where('name', 'meta:author')->first();
        $metaTitle = $divs->where('name', 'meta:title')->first();
    @endphp
    <title>{{ $metaTitle->content }}</title>
    <meta name="keywords" content="{{ $metaKeywords->content }}">
    <meta name="description" content="{{ $metaDescription->content }}">
    <meta name="author" content="{{ $metaAuthor->content }}">
    <meta property="image" content="{{ asset('/storage/images/logo/') }}/{{ $imageMeta->image }}">
    <meta property="type" content="{{ $typeMeta->content }}">
    <meta property="og:title" content="{{ $ogTitle->content }}">
    <meta property="og:keywords" content="{{ $ogKeywords->content }}">
    <meta property="og:description" content="{{ $ogDescription->content }}">
    <meta property="og:image" content="{{ asset('/storage/images/logo/') }}/{{ $ogImage->image }}">
    <meta property="og:url" content="{{ $ogUrl->href }}" />
    <meta property="og:type" content="{{ $ogType->content }}" />
    <meta property="fb:app_id" content="{{ $fbApp_id->content }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('/storage/images/logo/') }}/{{ $logoHref->image }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css">

    <style>
        * {
            margin: 0px;
            padding: 0px;
            outline: none;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        .image-cropper-container.img {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            object-fit: contain;
        }

        .image-cropper-container.img img {
            object-fit: contain;
            height: 100%;
            width: 100%;
        }

        .image-cropper-container {
            overflow: hidden !important;
            max-height: 15vh;
        }

        a {
            display: inline-block;
            text-decoration: none;
        }

        ol,
        ul {
            list-style: none;
        }

        body {
            overflow-y: auto !important;
            padding: 0 !important;

        }

        body,
        a,
        p,
        div,
        span,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        strong {
            font-family: 'DroidArabicKufiRegular';
            font-weight: normal;
            font-style: normal;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #a9a9a9;
            border-radius: 10px;
            border: 3px solid #fff;
        }

        ::-webkit-scrollbar-track {
            background-color: #f5f5f5;
        }

        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #a9a9a9;
            border-radius: 10px;
        }

        p {
            margin-bottom: 0px !important;
        }

        .com-txt {
            font-family: tahoma;
            font-size: 13px;
        }

        .name {
            font-family: tahoma;
            font-size: 13px;
        }

        .fblike {
            font-family: tahoma;
            font-size: 13px;
        }

        .time {
            font-family: tahoma;
            font-size: 13px;
        }

        .radio label {
            display: inline-block;
            margin: 0 -1px 10px 0 !important;
            width: 100%;
            font-weight: bold;
            border-radius: 4px;
            background-color: #a32459;
            color: #fff;
            font-size: 1.2em;
            font-weight: bold;
            text-align: center;
            padding: 10px;
            cursor: pointer;
            transition: 0.4s ease-in-out;
            box-shadow: -2px 2px 8px 3px rgb(0 0 0 / 75%);
            -webkit-box-shadow: -2px 2px 8px 3px rgb(0 0 0 / 75%);
            -moz-box-shadow: -2px 2px 8px 3px rgb(0 0 0 / 75%);
        }
    </style>

</head>

<body>
    @php
        $navBarBackGround = $divs->where('name', 'navbar')->first();
        $noteBackGround = $divs->where('name', 'note')->first();
        $optionBackGround = $divs->where('name', 'options')->first();
        $confirmBtn = $divs->where('name', 'confirmBtn')->first();
    @endphp
    <header class=""
        style="background-color: {{ $navBarBackGround->color->color_number }};         display: flex;
    align-items: center;">
        <div class="container-fluid">
            <nav style="" class="nav d-flex align-items-center">
                <div class="logo">
                    <a href="{{ route('index.index') }}">
                        <img src="{{ asset('/storage/images/logo/') }}/{{ $logoHref->image }}" alt="logo">
                    </a>
                </div>
                <div class="nav-links w-75">
                    <ul class="flex-wrap gap-1 m-0 nav-link d-flex flex-md-row flex-sm-column align-items-center">
                        @foreach ($items as $item)
                            <li class="p-2 nav-item bg-light rounded-2 text-wrap"
                                style="background-color: {{ $item->background }} !important">
                                <a href="{{ $item->href }}"
                                    style="color: {{ $item->color }};">{{ $item->content }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    @php
        $ads1 = $ads->where('place', 'header')->first();
        $ads2 = $ads->where('place', 'center')->first();
        $ads3 = $ads->where('place', 'footer')->first();
        $manualAd = $divs->where('name', 'manualAd')->first();
    @endphp
    <div class="p-2 ads-1 d-flex justify-content-center align-items-center">
        @if ($ads1->content == '#')
            <div class="container">
                <div class="img image-cropper-container">
                    <img src="{{ asset('/storage/images/logo/') }}/{{ $ads1->image }}" alt="logo">
                </div>
            </div>
        @else
            <div class="container">
                <div class="row text-wrap">
                    {!! $ads1->content !!}

                </div>
            </div>
        @endif
    </div>
    <div class="p-2 ads-manual-1 d-flex justify-content-center align-items-center">
        <div class="img d-flex justify-content-center align-items-center" style="width: 400px; height: 300px;">
            <img src="{{ asset('/storage/images/logo/') }}/{{ $manualAd->image }}"
                style="width: 300px; height: 100%; object-fit: contain;" alt="">
        </div>
    </div>
    {{-- content  --}}
    <div class="wrapper_02">
        <div class="container-fluid">
            {{-- اول نص --}}
            <div class="row">
                <div class="p-4 col justify-content-center">
                    <div class="row">
                        @php
                            $text1 = $texts->where('id', '1')->first();
                            $text2 = $texts->where('id', '2')->first();
                            $text3 = $texts->where('id', '3')->first();
                            $text4 = $texts->where('id', '4')->first();
                            $text5 = $texts->where('id', '5')->first();
                        @endphp
                        <p class="pt-2 text-center fw-bolder"> {{ $text1->content }} </p>
                    </div>
                    <div class="row">
                        <p class="pt-2 text-center"> {{ $text2->content }} </p>
                        <p class="pt-2 text-center"> {{ $text3->content }} </p>
                    </div>
                </div>
            </div>
            {{-- صفحات الفيس  --}}
            <div class="row">
                <div class="p-5 row d-flex justify-content-center">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v11.0"
                        nonce="KUAoRfrT"></script>
                    <div class="col d-flex justify-content-end">
                        <div class="fb-like" data-href="https://www.facebook.com/mos3dat3ajel/?ref=page_internal"
                            data-width="75" data-layout="box_count" data-action="like" data-size="large"
                            data-share="true" data-colorscheme="light"></div>
                    </div>
                    <div class="col d-flex justify-content-start">
                        <div class="fb-like" data-href="https://www.facebook.com/d3m.faker" data-width="75"
                            data-layout="box_count" data-action="like" data-size="large" data-share="true"
                            data-colorscheme="dark"></div>
                    </div>
                </div>
            </div>
            {{-- ثاني نص --}}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-sm-10 tt">
                        <div class="gutschein" style="background-color: {{ $noteBackGround->color->color_number }}">
                            <p>
                                {{ $text4->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ثالث نص  --}}
            <div class="container">
                <div class="row">
                    <div id="aufforderung" class="p-2 d-flex justify-content-center align-items-center">
                        <p class="text-center fw-bolder">

                        </p>
                    </div>
                </div>
            </div>
            {{-- اعلان ثاني  --}}
            <div class="container">
                <div class="row">
                    <div class="p-2 text-center ads-2 d-flex justify-content-center align-items-center">
                        @if ($ads2->content == '#')
                            <div class="container">
                                <div class="img image-cropper-container">
                                    <img src="{{ asset('/storage/images/logo/') }}/{{ $ads2->image }}"
                                        alt="logo">
                                </div>
                            </div>
                        @else
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center text-wrap">
                                    {!! $ads2->content !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            {{-- الاسئلة --}}
            <form action="" method="post">
                <div class="q">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-10">
                            <div class="container">
                                <div id="questionnaire">
                                    {{-- السؤال الاول  --}}
                                    @foreach ($oquestions as $oquestion)
                                        <div class="row justify-content-center">
                                            <div class="col-md-8 col-sm-12">
                                                <div class="question">
                                                    <h3 class="text-center">{{ $oquestion->content }}</h3>
                                                    @foreach ($oquestion->options as $option)
                                                        <div class="radio">
                                                            <input type="radio" id="{{ $option->id }}"
                                                                name="{{ $option->id }}"
                                                                value="{{ $option->id }}"
                                                                data-q="{{ $oquestion->id }}">
                                                            <label for="{{ $option->id }}"
                                                                style="background-color: {{ $optionBackGround->color->color_number }}">{{ $option->content }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- نهاية السؤال الاول  --}}
                                    {{-- الفورم --}}
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="question">
                                                <h3 class="text-center"> {{ $text5->content }}</h3>
                                                @foreach ($iquestions as $iquestion)
                                                    @if ($iquestion->id == '3')
                                                        <div class="p-2 input-group">
                                                            <span
                                                                class="input-group-text">{{ $iquestion->content }}</span>
                                                            <select style="direction: ltr" class="iquestion"
                                                                name="iquestion3" id="iquestion3">
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->name }}">
                                                                        {{ $country->name }}
                                                                        ({{ $country->dialCode }})</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    @elseif ($iquestion->id == '4')
                                                        <div class="p-2 input-group">
                                                            <span
                                                                class="input-group-text">{{ $iquestion->content }}</span>
                                                            <input type="number"
                                                                placeholder="{{ $iquestion->content }}"
                                                                aria-label="{{ $iquestion->content }}"
                                                                class="form-control iquestion" id="iquestion4"
                                                                name="iquestion4" required>
                                                        </div>
                                                    @else
                                                        <div class="p-2 input-group">
                                                            <span
                                                                class="input-group-text">{{ $iquestion->content }}</span>
                                                            <input type="text"
                                                                placeholder="{{ $iquestion->content }}"
                                                                aria-label="{{ $iquestion->content }}"
                                                                class="form-control iquestion"
                                                                id="iquestion{{ $iquestion->id }}"
                                                                name="iquestion{{ $iquestion->id }}" required>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    {{-- نهاية الفورم --}}
                                </div>
                                <div class="py-5 row submit">
                                    <div class="col d-flex justify-content-center">
                                        @php
                                            $btn = $divs->where('name', 'submetBtn')->first();
                                        @endphp
                                        <button type="submit" class="btn btn-success"
                                            style="background-color: {{ $btn->color->color_number }} !important"
                                            disabled>
                                            {{ $btn->content }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @php
                $rulesMessage = $divs->where('name', 'rulesMessage')->first();
                $facebookMessage = $divs->where('name', 'facebookMessage')->first();
                $whatsappMessage = $divs->where('name', 'whatsappMessage')->first();
                $telegramMessage = $divs->where('name', 'telegramMessage')->first();
                $confirmBtn = $divs->where('name', 'confirmBtn')->first();
                $faceBookComment = $divs->where('name', 'faceBookComment')->first();
            @endphp
            <div class="share d-none">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-10 tt">
                            <p class="py-5 text-center">
                                {{ $rulesMessage->content }}
                            </p>
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <a class="gap-2 btn d-flex justify-content-center align-items-center"
                                        href="https://www.facebook.com/sharer/sharer.php?u={{ $facebookMessage->href }}&quote={{ $facebookMessage->content }}"
                                        target="_blank" rel="noopener noreferrer">مشاركة عبر الفيسبوك
                                        <i class="fa-2x fa-brands fa-facebook" style="color: #3b5998 ;"></i>
                                    </a>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">
                                    <a class="gap-2 btn d-flex justify-content-center align-items-center"
                                        href="https://telegram.me/share/url?url={{ $telegramMessage->href }}&text={{ $telegramMessage->content }}"
                                        target="_blank" rel="noopener noreferrer">مشاركة على تليجرام
                                        <i class="fa-2x fa-brands fa-telegram" style="color: #0088cc ;"></i>
                                    </a>
                                </div>
                                <div class="col d-flex justify-content-center align-items-center">
                                    <a class="gap-2 btn d-flex justify-content-center align-items-center"
                                        href="https://api.whatsapp.com/send?text={{ $whatsappMessage->content }}%0A{{ $whatsappMessage->href }}"
                                        target="_blank" rel="noopener noreferrer">مشاركة على الواتس اب
                                        <i class="fa-2x fa-brands fa-whatsapp" style="color: #25D366;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 text-center b">
                        <button class="btn btn-dark" style="background-color: {{ $confirmBtn->color->color_number }}"
                            data-hh="{{ route('front.final') }}">
                            {{ $confirmBtn->content }}
                        </button>
                    </div>
                </div>
            </div>
            {{-- الاسئلة --}}

            {{-- التعليقات --}}
            <div class="container p-5">
                <div class="row justify-content-center">
                    <div class="p-5 col-md-8 col-sm-12">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v16.0&appId=168488442265796&autoLogAppEvents=1"
                            nonce="5e6pYZhX"></script>
                        <div class="fb-comments" data-href="https://gazatodaycom.com" data-width="100%"
                            data-numposts="10"></div>
                    </div>
                </div>
            </div>

            {{-- نهاية التعليقات  --}}

            <div class="row">
                <div class="container">
                    <div class="p-2 ads-3 d-flex justify-content-center align-items-center">
                        @if ($ads3->content == '#')
                            <div class="container">
                                <div class="img image-cropper-container">
                                    <img src="{{ asset('/storage/images/logo/') }}/{{ $ads3->image }}"
                                        alt="logo">
                                </div>
                            </div>
                        @else
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center text-wrap">
                                    {!! $ads3->content !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
        @php
            $google = $divs->where('name', 'google analytics')->first();
            $his = $divs->where('name', 'his')->first();
            $privace = $divs->where('name', 'الحقوق')->first();
            $footer = $divs->where('name', 'الفوتر')->first();
        @endphp

    </div>
    <footer style="background-color: {{ $footer->color->color_number }}; height: auto !important;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">

                <div class="text-center col d-flex justify-content-center align-items-center">
                    <!-- العمود الأول -->
                    {!! $google->content !!}
                    <!-- تعبئة العمود الأول هنا -->
                </div>
                <div class="text-center col" style="color: {{ $privace->color->color_number }}">
                    <!-- العمود الثاني -->
                    {{ $privace->content }}
                    <!-- تعبئة العمود الثاني هنا -->
                </div>
                <div class="text-center col d-flex justify-content-center align-items-center">
                    <!-- العمود الثالث -->
                    {!! $his->content !!}
                    <!-- تعبئة العمود الثالث هنا -->
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"
        integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('front/js/custom.js') }}"></script>

    <script src="{{ asset('cms/assets/js/crud.js') }}"></script>

    <script src="{{ asset('cms/assets/js/vendor/notifications/sweet_alert.min.js') }}"></script>

    <script>
        const form = document.querySelector('form');
        const share = document.querySelector('.share');
        const confirmBtn = document.querySelector('.share button')
        const inputs = form.querySelectorAll('input');
        const submit = document.querySelector('.submit button')
        let isAllFilled = true;

        inputs.forEach(element => {
            element.addEventListener('input', _ => {
                check(isAllFilled)
            })
        });

        function check(isAllFilled) {
            inputs.forEach(function(input) {
                if (input.value.trim() === '') {
                    isAllFilled = false;
                }
            });
            if (isAllFilled == true) {
                submit.removeAttribute('disabled')
            } else {
                submit.setAttribute('disabled', 'true')
            }
        }
        // عند تقديم النموذج
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // إلغاء تحميل الصفحة الافتراضي

            // احصل على الإجابات
            const answers = {};
            const inputs = form.querySelectorAll('input[type="radio"]:checked');
            inputs.forEach(input => {
                const name = 'oquestion' + input.dataset.q;
                const value = input.value;
                answers[name] = value;
            });

            // اعرض الإجابات
            let formData = new FormData();
            for (const key in answers) {
                formData.append(key, answers[key]);
            }
            let question = document.querySelectorAll('.question .iquestion')
            question.forEach(element => {
                formData.append(element.name, element.value);
            });

            function storee(url, data) {
                axios.post(url, data)
                    .then(function(response) {
                        showMessage(response.data);
                        form.classList.add('d-none');
                        share.classList.remove('d-none');
                        clearForm();
                        clearAndHideErrors();

                    })
                    .catch(function(error) {

                        if (error.response.data.errors !== undefined) {
                            showErrorMessages(error.response.data.errors);
                        } else {

                            showMessage(error.response.data);
                        }
                    });

            }
            let count = localStorage.getItem('count');
            if (!count) {
                // إذا لم يكن العدد موجوداً، يتم تعيينه على 0
                count = 0;
            } else {
                // إذا كان العدد موجوداً، يتم تحويله إلى رقم
                count = parseInt(count);
            }

            // تحديث العدد بناء على الزر الذي تم الضغط عليه
            function updateCount(buttonNumber) {
                count++;
                localStorage.setItem('count', count);
            }
            confirmBtn.addEventListener('click', _ => {
                if (count >= 5) {
                    // إذا كان العدد يساوي 5، يتم التحويل إلى الصفحة المطلوبة
                    window.location.href = confirmBtn.dataset.hh;
                } else {
                    // إذا لم يصل العدد إلى 5، يتم إظهار رسالة باستخدام SweetAlert2
                    const remaining = 5 - count;
                    Swal.fire({
                        icon: 'warninig',
                        title: 'لم تقم بمشاركات كافية',
                        text: `متبقي ${remaining} مشاركة`,
                    });
                }
            })

            // تعيين الدالة `updateCount` كحدث للزر عند الضغط عليه
            const btns = document.querySelectorAll('.share a');
            btns.forEach(element => {
                element.addEventListener('click', function() {
                    updateCount(1);
                });
            });
            storee('/index', formData);
        });
    </script>

    <!-- Load plugin -->
</body>

</html>
