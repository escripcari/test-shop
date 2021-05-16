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
        <h1>{{$details['title']}}</h1>

        <h2>Здраствуйте!</h2>
        <h3>Я зделал заказ на вашем сайте</h3>
        <p>Вот мои данные:</p>
        <ul>
            <li>
                <p>{{$details['body']['custom_info']['name']}}</p>
            </li>
            <li>
                <p>{{$details['body']['custom_info']['phone']}}</p>
            </li>
        </ul>


</body>
</html>
