<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>試験サイト</title>
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Yu Gothic' rel='stylesheet'>
</head>


<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <header>

        <a class="top_logo" href="{{route('welcome_page')}}">
            <img src="{{asset('img/menu/top_logo.png')}}" alt="top_logo-image">
        </a>

        <div class="menubar">
            <a href="{{route('guide.about_site')}}" class="menu-links">このサイトについて</a>
            <a href="{{route('search.area')}}" class="menu-links">試験エリア一覧</a>
            <a href="{{route('guide.method')}}" class="menu-links">試験内容と受験方法</a>
            <a href="{{route('guide.site_policy')}}" class="menu-links">サイトポリシー</a>
            <a href="{{route('guide.privacy')}}" class="menu-links">プライバシーポリシー</a>
        </div>

        <div class="top_btns">

        @if(Auth::check())
            <a class="squre-btns logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{asset('img/menu/ico_logout.png')}}" alt="logout-icon"></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{route('my_page')}}" class="squre-btns mypage">
                <img src="{{asset('img/menu/ico_mypage.png')}}" alt="mypage-icon">
            </a>
        @else
            <a href="{{route('_login')}}" class="squre-btns login">
                <img src="{{asset('img/menu/ico_login.png')}}" alt="login-icon">
            </a>
            <a href="{{route('_verifyMailSend')}}" class="squre-btns register">
                <img src="{{asset('img/menu/ico_register.png')}}" alt="register-icon">
            </a>
        @endif
        
        @if(Auth::check())
        @if(Auth::user()->user_role == 1)

            <a href="{{route('guide.question')}}" class="squre-btns to_admin-page">
                <img src="{{asset('img/menu/ico_admin.png')}}" alt="admin-icon">
            </a>
        @endif

        @else
            <a href="{{route('guide.question')}}" class="squre-btns question">
                <img src="{{asset('img/menu/ico_question.png')}}" alt="question-icon">
            </a>

        @endif
            <div class="hamburger">
                <div id="menuToggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>

                    <ul id="menu">
                        <div class="menu-list">
                            <div class="menu_items customer">
                                {{-- <img src="{{asset('img/top/mainvisual/header/sp_user_icon.png')}}" alt=""> --}}
                                <a href="{{route('my_page')}}">マイページ</a>
                            </div>
                            <div class="menu_items">
                                <img src="{{asset('img/top/mainvisual/header/top_go_icon.png')}}" alt="">
                                <a href="{{route('guide.question')}}">お問合せ</a></div>
                            <div class="menu_items">
                                <img src="{{asset('img/top/mainvisual/header/top_go_icon.png')}}" alt="">
                                <a href="">Q&A</a></div>
                            <div class="menu_items">
                                <img src="{{asset('img/top/mainvisual/header/top_go_icon.png')}}" alt="">
                                <a href="{{route('guide.notice')}}">サイトからのお知らせ</a></div>
                            <div class="menu_items">
                                <img src="{{asset('img/top/mainvisual/header/top_go_icon.png')}}" alt="">
                                <a href="{{route('guide.about_site')}}">このサイトについて</a></div>
                            <div class="menu_items">
                                <a href="{{route('guide.site_policy')}}">サイトポリシー</a></div>
                            <div class="menu_items">
                                <a href="{{ route('logout') }}">プライバシーポリシー</a></div>
                            <div class="top_buttons spbtn">
                        </div>
                    </ul>
                </div>
                <p>メニュー</p>
            </div>
        </div>
    </header>

    <a id="back-to-top"></a>

    @yield('main-content')

    <footer>
        <a class="footer_logo">
            <img src="{{asset('img/menu/top_logo.png')}}" alt="">
        </a>
        <div class="footer_detail">
            <a class="footer_links"><i class="fa fa-user" aria-hidden="true" style="font-siza:20px;"></i>お問合せ</a>
            <a class="footer_links"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-siza:20px;"></i>サイトからのお知らせ</a>
            <ul><a class="footer_links"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-siza:20px;"></i>このサイトについて</a>
                <li><a class="footer_links">サイトポリシー</a></li>
                <li><a class="footer_links">プライバシーポリシー</a></li></ul>
        </div>
        <div class="copylight">
            <p>© <script>document.write(new Date().getFullYear())</script> All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/top_scroll_tool.js')}}"></script>
    <script src="{{asset('js/toastr.js')}}"></script>
    <script src="{{asset('js/toastr_sr.js')}}"></script>
    @if(session()->has('message'))
    <script>
        toastr.success("{{ session()->get('message') }}");
    </script>
    @endif
</body>
</html>