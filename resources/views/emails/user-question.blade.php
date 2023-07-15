<!DOCTYPE html>
<html lang="en-US">
        
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <p>
            {{$user_name}}からお問い合わせが来ています。
        </p>
        <p>
            氏名：{{$user_name}}
        </p>
        <p>
            電話番号：{{$user_phone}}
        </p>
        <p>
            件名：{{$user_contitle}}
        </p>
        <p>
            お問合せ内容：{{$user_context}}
        </p>

        
        

        <p>
            よろしくお願いします、 
            
            {{ config('app.name')}}
        </p>

        
    </body>

</html>