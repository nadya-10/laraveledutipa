<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            :root {
                font-family: 'Figtree', sans-serif;
                line-height: 1.5;
                font-weight: 400;
                color-scheme: light dark;
                background-color: #f8fafc;
                color: #0f172a;
            }
            body {
                margin: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }
            .welcome {
                text-align: center;
            }
            .welcome h1 {
                font-size: 3rem;
                margin-bottom: 1rem;
                color: #6366f1;
            }
            .welcome p {
                color: #475569;
            }
            a {
                color: #6366f1;
                text-decoration: none;
                font-weight: 600;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="welcome">
            <h1>Welcome to Laravel</h1>
            <p>
                You’re seeing the default Laravel welcome page.<br>
                Go to <a href="{{ url('/home') }}">Home</a> to see your main page.
            </p>
        </div>
    </body>
</html>
