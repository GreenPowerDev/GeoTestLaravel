<!DOCTYPE html>
<html>
<head>
<title>test_login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('css/main_style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->

<!-- //web font -->
</head>
<body>
    <div class="m-container">
	<!-- main -->
        <div class="main-w3layouts wrapper">
            <h1>ログーイン</h1>
            <div class="main-agileinfo">
                
                <div class="agileits-top">
                    <a href="{{route('my_page')}}" class="cross-home">&cross;</a>
                    <form method="POST" action="{{ route('signin') }}">
                        <!-- ==if time is right -->
                        @csrf
                        <input id="test_pass_id" type="number" class="text _pass_id" name="_pass_id" placeholder="テストID" value="{{ old('test_pass_id') }}" required autocomplete="test_pass_id">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <input id="test_pass_pwd" type="test_pass_pwd" class="text" name="test_pass_pwd" placeholder="パスワード" required autocomplete="current-test_pass_pwd">
                        @error('test_pass_pwd')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="wthree-text">
                            <label class="anim">
                                <input type="checkbox" class="checkbox" required="">
                                <span>利用規約に同意します</span>
                            </label>
                            <div class="clear"> </div>
                        </div>
                        <input type="submit" value="試験開始">
                    </form>
                </div>
            </div>
        </div>
	<!-- //main -->
    </div>
</body>
</html>
