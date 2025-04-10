<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style type="text/css">
        body {
            background-color: #1a1a1a;
            color: #e0e0e0;
        }
        
        .page-content {
            background-color: #222222;
            min-height: calc(100vh - 70px);
            padding: 30px;
        }
        
        .search-container {
            display: flex;
            justify-content: center;
            margin: 30px 0 50px;
        }
        
        input[type='search'] {
            width: 500px;
            height: 50px;
            background-color: #333333;
            border: 1px solid #444;
            border-radius: 5px;
            padding: 0 20px;
            color: #fff;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        input[type='search']:focus {
            outline: none;
            border-color: #ff4d4d;
            box-shadow: 0 0 0 2px rgba(255, 77, 77, 0.2);
        }
        
        .btn-secondary {
            background-color: #444;
            border-color: #444;
            height: 50px;
            padding: 0 25px;
            margin-left: 15px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-secondary:hover {
            background-color: #555;
            border-color: #555;
            transform: translateY(-2px);
        }
        
        .table-container {
            overflow-x: auto;
        }
        
        .table_deg {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            background-color: #2a2a2a;
            margin: 0 auto;
        }
        
        th {
            background-color: #ff4d4d;
            padding: 18px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            position: sticky;
            top: 0;
        }
        
        th:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: rgba(255, 255, 255, 0.1);
        }
        
        td {
            padding: 15px;
            border-bottom: 1px solid #383838;
            color: #e0e0e0;
            font-size: 15px;
            text-align: center;
            transition: all 0.2s;
        }
        
        tr:hover td {
            background-color: #333333;
        }
        
        .product-image {
            height: 80px;
            width: 80px;
            object-fit: cover;
            border-radius: 5px;
            border: 2px solid #444;
        }
        
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            padding: 8px 15px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-success:hover {
            background-color: #218838;
            border-color: #218838;
            transform: scale(1.05);
        }
        
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            padding: 8px 15px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
            transform: scale(1.05);
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .search-container {
                flex-direction: column;
                align-items: center;
            }
            
            input[type='search'] {
                width: 100%;
                margin-bottom: 15px;
            }
            
            .btn-secondary {
                margin-left: 0;
                width: 100%;
            }
            
            .table_deg {
                display: block;
            }
            
            th, td {
                padding: 12px 8px;
                font-size: 14px;
            }
            
            .product-image {
                height: 60px;
                width: 60px;
            }
        }
        
        @media (max-width: 768px) {
            th, td {
                padding: 10px 5px;
                font-size: 13px;
            }
            
            .btn-success, .btn-danger {
                padding: 6px 10px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="search-container">
                    <form action="{{url('product_search')}}" method="get" class="w-100">
                        @csrf
                        <input type="search" name="search" placeholder="Search products...">
                        <input type="submit" class="btn btn-secondary" value="Search">
                    </form>
                </div>
                
                <div class="table-container">
                    <table class="table_deg">
                        <thead>
                            <tr>
                                <th>Product Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $products)
                            <tr>
                                <td>{{$products->title}}</td>
                                <td>{{ Str::limit($products->description, 50) }}</td>
                                <td>{{$products->category}}</td>
                                <td>${{ number_format($products->price, 2) }}</td>
                                <td>{{$products->quantity}}</td>
                                <td>
                                    <img class="product-image" src="products/{{$products->image}}" alt="{{$products->title}}">
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{url('delete_product',$products->id)}}" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
    
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
</body>
</html>