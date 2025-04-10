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
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0 50px;
        }
        
        input[type='text'] {
            width: 400px;
            height: 50px;
            background-color: #333333;
            border: 1px solid #444;
            border-radius: 5px;
            padding: 0 15px;
            color: #fff;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        input[type='text']:focus {
            outline: none;
            border-color: #ff4d4d;
            box-shadow: 0 0 0 2px rgba(255, 77, 77, 0.2);
        }
        
        .btn-primary {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
            height: 50px;
            padding: 0 25px;
            margin-left: 15px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #ff3333;
            border-color: #ff3333;
            transform: translateY(-2px);
        }
        
        .table_deg {
            width: 80%;
            margin: 50px auto;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            background-color: #2a2a2a;
        }
        
        th {
            background-color: #ff4d4d;
            padding: 18px;
            font-size: 18px;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            position: relative;
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
            padding: 15px 20px;
            border-bottom: 1px solid #383838;
            color: #e0e0e0;
            font-size: 16px;
            text-align: center;
            transition: all 0.2s;
        }
        
        tr:hover td {
            background-color: #333333;
        }
        
        .btn-danger {
            background-color: #d9534f;
            border-color: #d9534f;
            padding: 8px 20px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-danger:hover {
            background-color: #c9302c;
            border-color: #c9302c;
            transform: scale(1.05);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            input[type='text'] {
                width: 100%;
                margin-bottom: 15px;
            }
            
            .div_deg {
                flex-direction: column;
            }
            
            .btn-primary {
                margin-left: 0;
                width: 100%;
            }
            
            .table_deg {
                width: 100%;
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
                <h1>Manage Categories</h1>

                <!-- Add Category Form -->
                <div class="div_deg">
                    <form action="{{url('add_category')}}" method="post">
                        @csrf
                        <div class="d-flex align-items-center">
                            <input type="text" name="category" placeholder="Enter category name" required>
                            <input class="btn btn-primary" type="submit" value="Add Category">
                        </div>
                    </form>
                </div>

                <!-- Categories Table -->
                <div class="table-responsive">
                    <table class="table_deg">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <td>{{$data->category_name}}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{url('delete_category',$data->id)}}" 
                                        onclick="return confirm('Are you sure you want to delete this category?')">
                                        Delete
                                    </a>
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