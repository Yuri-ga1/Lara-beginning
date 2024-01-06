<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel project v1.0</title>
        <style>
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .form-style{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .form-style label, button{
                margin-top: 10px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>