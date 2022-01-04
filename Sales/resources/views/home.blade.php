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
            <h2 >Welcome to Laravel sale.</h2>
        </header>
        <section>
            <div class="container">
                <div class="row">
                <p>Laravel Sale Project</p>
                <h4>{{$pname}}</h4>
                <p>Product Code {{$pcode}} : {{$count}}</p>
                @if($pcode=='001')
                <h5>Code is 001</h5>
                @else
                <h5>Code is not 001</h5>
                @endif
                </div>

                <div class="row">
                @for($i=0;$i<$count;$i++)
                <p>No. of product {{$i}}</p>
                @endfor
                </div>

                
                <h4>Number of Products : {{count($products)}} </h4>
                <table class="table table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                            <td>Product Name</td>
                            <td>Product Price</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td> Product Name : {{$product['name']}} </td>
                            <td> Product Price : {{$product['price']}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                           
            </div>
        </section>
    </body>
</html>