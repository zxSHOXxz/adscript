<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title> سجل ألان للحصول لتحصل علي فرصة في برنامج المساعدات المالية الخاصة بمنطقتكم,, رابط التسجيل </title>
    <meta name="keywords" content="سجل الآن لتحصل علي فرصة  في برنامج المساعدات المالية الخاصة بمنطقتكم ">
    <meta name="description" content=" سجل الآن لتحصل علي فرصة  في برنامج المساعدات المالية الخاصة بمنطقتكم ">
    <meta name="author" content="بيان">
    {{-- <meta property="image" content="https://i.imgur.com/EatZyc1.jpg"> --}}
    <meta property="type" content="article">
    <meta property="og:title" content="سجل الآن لتحصل علي فرصة  في برنامج المساعدات المالية الخاصة بمنطقتكم">
    <meta property="og:keywords" content="سجل الآن لتحصل علي فرصة  في برنامج المساعدات المالية الخاصة بمنطقتكم">
    <meta property="og:description" content="سجل الآن لتحصل علي فرصة  في برنامج المساعدات المالية الخاصة بمنطقتكم">
    {{-- <meta property="og:image" content="https://i.imgur.com/i0yGkZL.png"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" href="https://i.imgur.com/i0yGkZL.png"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('cms/assets/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
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
            direction: ltr !important;
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
    </style>

</head>

<body>
    @php
        $navBarBackGround = $divs->where('name', 'navbar')->first();
        $noteBackGround = $divs->where('name', 'note')->first();
        $optionBackGround = $divs->where('name', 'options')->first();
        $confirmBtn = $divs->where('name', 'confirmBtn')->first();
    @endphp
    <header style="background-color: {{ $navBarBackGround->color->color_number }}">
        <div class="container-fluid">
            <nav style="" class="nav align-items-center py-2 px-5">
                <div class="logo">
                    <a href="{{ route('index.index') }}">
                        @php
                            $logoHref = $divs->where('name', 'logo')->first();
                        @endphp
                        <img src="{{ asset('/storage/images/logo/') }}/{{ $logoHref->image }}" alt="logo">
                    </a>
                </div>
                <div class="nav-links w-75">
                    <ul class="nav-link d-flex flex-md-row flex-sm-column flex-wrap gap-1 m-0">
                        @foreach ($items as $item)
                            <li class="nav-item bg-light p-2 rounded-2 text-wrap"
                                style="background-color: {{ $item->background }} !important">
                                <a href="{{ $item->href }}" style="color: {{ $item->color }};">فرصة
                                    ذهبية للحصول على مكافأة
                                    مالية</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <div class="ads-1 p-2 d-flex justify-content-center align-items-center">

    </div>
    <div class="ads-manual-1 p-2 d-flex justify-content-center align-items-center">
        <div class="img">
            <a href="https://i.imgur.com/di86pvc.jpeg">
                <img src="{{ asset('cms/assets/images/backgrounds/boxed_bg.png') }}" alt="">
            </a>
        </div>
    </div>
    {{-- content  --}}
    <div class="wrapper_02">
        <div class="container-fluid">
            <div class="row justify-content-center">
                {{-- اول نص --}}
                <div class="row">
                    <div class="col justify-content-center p-4">
                        <div class="row">
                            @php
                                $text1 = $texts->where('id', '1')->first();
                                $text2 = $texts->where('id', '2')->first();
                                $text3 = $texts->where('id', '3')->first();
                                $text4 = $texts->where('id', '4')->first();
                                $text5 = $texts->where('id', '5')->first();
                            @endphp
                            <p class="text-center pt-2 fw-bolder"> {{ $text1->content }} </p>
                        </div>
                        <div class="row">
                            <p class="text-center pt-2"> {{ $text2->content }} </p>
                            <p class="text-center pt-2"> {{ $text3->content }} </p>
                        </div>
                    </div>
                </div>
                {{-- صفحات الفيس  --}}
                <div class="row">
                    <div class="row d-flex justify-content-center p-5">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v11.0"
                            nonce="KUAoRfrT"></script>
                        <div class="col-md-1 col-sm-6 d-flex justify-content-center">
                            <div class="fb-like" data-href="https://www.facebook.com/mos3dat3ajel/?ref=page_internal"
                                data-width="75" data-layout="box_count" data-action="like" data-size="large"
                                data-share="true" data-colorscheme="light"></div>
                        </div>
                        <div class="col-md-1 col-sm-6 d-flex justify-content-center">
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
                            <div class="gutschein"
                                style="background-color: {{ $noteBackGround->color->color_number }}">
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
                        <div id="aufforderung" class="d-flex justify-content-center align-items-center p-2">
                            <p class="text-center fw-bolder">

                            </p>
                        </div>
                    </div>
                </div>
                {{-- اعلان ثاني  --}}
                <div class="container">
                    <div class="row">
                        <div class="ads-2 p-2 d-flex justify-content-center align-items-center">

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
                                                        <div class="input-group p-2">
                                                            <span
                                                                class="input-group-text">{{ $iquestion->content }}</span>
                                                            <input type="text"
                                                                placeholder="{{ $iquestion->content }}"
                                                                aria-label="{{ $iquestion->content }}"
                                                                class="form-control"
                                                                id="iquestion{{ $iquestion->id }}"
                                                                name="iquestion{{ $iquestion->id }}" required>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        {{-- نهاية الفورم --}}
                                    </div>
                                    <div class="row py-5 submit">
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
                                <p class="text-center py-5">
                                    {{ $rulesMessage->content }}
                                </p>
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col d-flex justify-content-center">
                                        <a class="btn btn-dark"
                                            href="https://www.facebook.com/sharer/sharer.php?u={{ $facebookMessage->href }}&quote={{ $facebookMessage->content }}"
                                            target="_blank" rel="noopener noreferrer">مشاركة عبر الفيسبوك</a>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <a class="btn btn-dark"
                                            href="https://telegram.me/share/url?url={{ $telegramMessage->href }}&text={{ $telegramMessage->content }}"
                                            target="_blank" rel="noopener noreferrer">مشاركة عبر تيلجرام</a>
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <a class="btn btn-dark"
                                            href="https://api.whatsapp.com/send?text={{ $whatsappMessage->content }}{{ $whatsappMessage->href }}"
                                            target="_blank" rel="noopener noreferrer">مشاركة عبر الواتساب</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b text-center py-5">
                            <button class="btn btn-dark"
                                style="background-color: {{ $confirmBtn->color->color_number }}"
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
                        <div class="col-md-8 col-sm-12 p-5">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous"
                                src="https://connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v16.0&appId=168488442265796&autoLogAppEvents=1"
                                nonce="5e6pYZhX"></script>
                            <div class="fb-comments" data-href="https://gazatodaycom.com" data-width="100%"
                                data-numposts="70"></div>
                        </div>
                    </div>
                </div>

                {{-- نهاية التعليقات  --}}

                <div class="container">
                    <div class="row">
                        <div class="ads-3 p-2 d-flex justify-content-center align-items-center">

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
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
                let question = document.querySelectorAll('.question input[type="text"]')
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
                    if (count === 5) {
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
