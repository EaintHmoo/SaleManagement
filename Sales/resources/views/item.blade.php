<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Sale Project</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="text-center bg-warning p-3">
            <h2 >Welcome to Item Page</h2>
        </header>
        <section>
            <div class="container">
                <div class="row">
                @foreach($items as $item)
                <div class="card m-3 bg-dark text-white" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">Code : {{$item['code']}}</p>
                    <p class="card-text">Name : {{$item['name']}}</p>
                    <p class="card-text">Type : {{$item['type']}}</p>
                </div>
                </div>
                @endforeach
                </div>
            </div>
        </section>
    </body>
</html>