<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html{
            display:flex;
        }
        .card{
            max-width:600px;
            border-radius:15px;
            margin:15px;

        }
        .card-header{
            background-color:crimson;
            color:#fff;
            padding:15px;
        }
        .card-img-top{
            margin-bottom:-10px;
        }
        .card-img-top img{
            width:100%;
            margin-bottom:0;
        }
        .card-body{
            margin-top:0;
            padding:15px;
            border:2px solid rgb(230, 230, 230);
            border-top:none;
        }
    </style>
</head>
<body>
@foreach($user_posts as $post)
    <div class="card">
        <div class="card-header">
            {{ $post['media_type'] }}
        </div>
        <div class="card-img-top">
            <img src="{{ $post['media_url'] }}" alt="">
        </div>
        <div class="card-body">
            {{  $post['caption'] }}
        </div>
    </div>
@endforeach
</body>
</html>
