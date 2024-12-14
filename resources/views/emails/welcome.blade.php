<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: darkblue;
        }

        .welcome {
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            color: darkblue;

            .greeting {
                font-size: 20px;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="welcome">
        <p class="greeting">Добрый день, {{$user->name}}, спасибо за регистрацию</p>
    </div>
</body>

</html>