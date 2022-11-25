<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Products</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="antialiased">
    <div class="container">
        <div class="card">
            <div class="card-body col-sm-12">
                <a href="{{ url('products') }}" class="btn btn-primary mb-3">Back</a>
                <form action="{{ url('update-products') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <select class="custom-select" name="brand">

                            @foreach($brands as $brand)

                                <option value="{{ $brand->id }}" @if($brand->id == $products->brand) selected @endif
                                    >{{ $brand->name }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$products->name}}">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="number" class="form-control" name="price" value="{{$products->price}}">
                    </div>
                       <input value="{{$products->id}}" type='hidden' name="id"/>
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            </div>

        </div>

    </div>


</body>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
</script>

</html>
