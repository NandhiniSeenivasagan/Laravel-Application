<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <center>
    
    <h1>Product List</h1><br>
    <br>
    <br>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}"><h1>Create a Product</h1></a>
        </div>
        <br>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</center>
<script src="script.js"></script>
</body>

</html>
<style>
   body {
    background-image: linear-gradient(to bottom, #add8e6, #fff);
    height: 100vh;
    margin: 0;
}
center {
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

table {
  border-collapse: collapse;
  width: 50%;
  margin: 0 auto;
}

th,
td {
    padding: 1rem;
    border: 1px solid back;
}

th {
    background-color:#f2f2ff;
}

a {
    text-decoration: none;
    color: #007bff;
    margin-right: 1rem;
}

a:hover {
    text-decoration: underline;
}

form {
    display: inline;
}

input[type="submit"] {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #bd2130;
}
    </style>