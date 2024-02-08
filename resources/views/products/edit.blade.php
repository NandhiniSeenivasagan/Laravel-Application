<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: inline-block;
            margin: 10px;
            padding: 80px;
            background-color: #f9f9f9;
            border: 2px solid #ccc;
            border-radius: 15px;
            width: 400px; 
            height: 300px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        ul {
            color: red;
            padding: 0;
            margin: 0;
        }
        li {
            list-style-type: none;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <center>
    <div class="form-container">
        <h1>Edit a Product</h1>
        <div class="error-list">
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form method="post" action="{{route('product.update', ['product' => $product])}}">
            @csrf 
            @method('put')
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}" />
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" />
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}" />
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}" /><br>
            <input type="submit" value="Update" />
        </form>
    </div>
    </center>
</body>
</html>