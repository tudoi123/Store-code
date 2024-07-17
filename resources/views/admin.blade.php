<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .sidebar ul li a:hover {
            background-color: #555;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .content h1 {
            color: #333;
        }

        .content p {
            color: #666;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #007bff;
            color: #fff;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Management</h2>
        <ul>
            <li><a href="http://127.0.0.1:8000/product">Book Management</a></li>
            <li><a href="http://127.0.0.1:8000/contactadmin">Contact Management</a></li>
            <!-- <li><a href="#">Quản lí người dùng</a></li> -->
            <!-- Thêm các liên kết khác cần thiết -->
        </ul>
    </div>

    <div class="content">
        <h1>Book Management</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($product->count() > 0)
                    @foreach($product as $rs)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rs->title }}</td>
                            <td>{{ $rs->price }}</td>
                            <td>{{ $rs->product_code }}</td>
                            <td>{{ $rs->description }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('product.show', $rs->id) }}" class="btn btn-secondary">Detail</a>
                                    <br>
                                    <br>
                                    <a href="{{ route('product.edit', $rs->id)}}" class="btn btn-warning">Edit</a>
                                    <br>
                                    
                                    <form action="{{ route('product.destroy', $rs->id) }}" method="POST" class="p-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">Book not found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>
