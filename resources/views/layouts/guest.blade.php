<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('homepage')}}">Home</a>
                    <a href="{{ route('trains')}}">Trains</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        
    </main>
</body>
</html>