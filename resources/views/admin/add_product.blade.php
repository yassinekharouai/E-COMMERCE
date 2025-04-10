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
        
        h1 {
            color: #ff4d4d;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
            font-size: 2.2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .div_deg {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background-color: #2a2a2a;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border-top: 3px solid #ff4d4d;
        }
        
        .div_deg label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #e0e0e0;
            font-size: 16px;
        }
        
        .div_deg input[type="text"],
        .div_deg input[type="number"],
        .div_deg select,
        .div_deg textarea {
            width: 100%;
            padding: 12px 15px;
            background-color: #333333;
            border: 1px solid #444;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        
        .div_deg input[type="text"]:focus,
        .div_deg input[type="number"]:focus,
        .div_deg select:focus,
        .div_deg textarea:focus {
            outline: none;
            border-color: #ff4d4d;
            box-shadow: 0 0 0 2px rgba(255, 77, 77, 0.2);
        }
        
        .div_deg textarea {
            height: 150px;
            resize: vertical;
        }
        
        .div_deg input[type="file"] {
            width: 100%;
            padding: 10px;
            background-color: #333;
            border: 1px dashed #555;
            border-radius: 5px;
            color: #e0e0e0;
            margin-bottom: 20px;
        }
        
        .div_deg input[type="file"]:focus {
            border-color: #ff4d4d;
        }
        
        .btn-success {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
            padding: 12px 30px;
            font-weight: 500;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            width: 100%;
            margin-top: 10px;
        }
        
        .btn-success:hover {
            background-color: #ff3333;
            border-color: #ff3333;
            transform: translateY(-2px);
        }
        
        select option {
            background-color: #333;
            color: #fff;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .div_deg {
                padding: 20px;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .div_deg input[type="text"],
            .div_deg input[type="number"],
            .div_deg select,
            .div_deg textarea {
                padding: 10px 12px;
                font-size: 14px;
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
                <h1>Add New Product</h1>
                
                <div class="div_deg">
                    <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Product Title</label>
                            <input type="text" name="title" placeholder="Enter product name" required>
                        </div>

                        <div>
                            <label>Description</label>
                            <textarea name="description" placeholder="Enter product description" required></textarea>
                        </div>

                        <div>
                            <label>Price</label>
                            <input type="text" name="price" placeholder="0.00" required>
                        </div>

                        <div>
                            <label>Quantity</label>
                            <input type="number" name="quantity" placeholder="Enter available quantity" required>
                        </div>

                        <div>
                            <label>Product Category</label>
                            <select name="category" required>
                                <option value="" disabled selected>Select a category</option>
                                @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <label>Product Image</label>
                            <input type="file" name="image" accept="image/*" required>
                        </div>

                        <div>
                            <input class="btn btn-success" type="submit" value="Add Product">
                        </div>
                    </form>
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