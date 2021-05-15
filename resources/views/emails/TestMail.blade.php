<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestMail</title>
</head>
<body>
    {{dd($details)}}
        <h1>{{$details['title']}}</h1>
        @foreach($details['body']['prod'] as $prod)
        <h2>Здраствуйте</h2>
        <p>{{$prod['name_product']}}</p>
            <p>{{$prod['count']}}</p>
            <p>{{$prod['price']}}</p>
        @endforeach
</body>
</html>
