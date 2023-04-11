<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>

    <div class="container">

        <h1 class="text-center text-white fs-1">
            Boolflix && Chill
        </h1>

        <ul class="grid-dis mt-3">
    
            @foreach ($movies as $movie)
        
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"> {{ $movie->title }} </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"> {{ $movie->original_title }} </h6>
                        <p class="card-text mt-auto"> {{ $movie->nationality }} </p>
                        <div class="info-wrapper">
                            <span class="card-info"> {{ $movie->date }} </span> //
                            <span class="card-info vote"> {{ $movie->vote }} </span>
                        </div>
                    </div>
                </div>
                
            @endforeach
    
        </ul>

    </div>
    


</body>
</html>