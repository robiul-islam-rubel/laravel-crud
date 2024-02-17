<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Edit Product </h1>
    <div>
        @if($errors->any())

        @foreach($errors->all() as $error)
           <li>{{$error}}</li>  
        @endforeach

        @endif
    </div>
    <form method="post" action="{{route('product.update',['product'=>$product])}}">
@csrf 
@method('put')
        <div>
            <label>Name</label>
            <input type="name" name="name" placeholder="name" value="{{$product->name}}"> 
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="quantity" value="{{$product->qty}}"> 
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}"> 
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}"> 
        </div>

        <div>
            <input type="submit" value="Update the product">
        </div>


    </form>
</body>
</html>