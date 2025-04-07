<!DOCTYPE html>
<html>
  <head> 
    <style>
        /* General Styling for the form container */
        .div_deg {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .div_deg h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
        }

        /* Form fields styling */
        .div_deg form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .div_deg label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .div_deg input[type="text"],
        .div_deg input[type="number"],
        .div_deg select,
        .div_deg textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
            background-color: #fff;
            width: 100%;
        }

        .div_deg input[type="text"]:focus,
        .div_deg input[type="number"]:focus,
        .div_deg select:focus,
        .div_deg textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        .div_deg input[type="file"] {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
        }

        /* Textarea styling */
        .div_deg textarea {
            height: 150px;
            resize: vertical;
        }

        /* Button styling */
        .div_deg button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .div_deg button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .div_deg {
                padding: 15px;
            }
            
            .div_deg form {
                gap: 15px;
            }

            .div_deg h2 {
                font-size: 20px;
            }
            
            .div_deg input[type="text"],
            .div_deg input[type="number"],
            .div_deg select,
            .div_deg textarea {
                font-size: 14px;
            }

            .div_deg button {
                padding: 10px 18px;
            }
        }
        h1{
            color: #ddd;
            align-content: center;
            align-items: center;
            text-align: center;
        }

    </style>
    @include('admin.css')
  </head>
  <body>
     @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Add product</h1>
            <div class="div_deg">
                <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>product Title</label>
                        <input type="text" name="title">
                    </div>

                    <div>
                        <label>description</label>
                        <textarea name="description" required></textarea>
                    </div>

                    <div>
                        <label>price</label>
                        <input type="text" name="price">
                    </div>

                    <div>
                        <label>quantity</label>
                        <input type="number" name="quantity">
                    </div>

                    <div>
                        <label>product category</label>
                        <select name="category" required>
                            <option>Select an option</option>
                            @foreach ($category as $category)
                                
                            

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>


                            @endforeach



                        </select>
                    </div>
                    <div>
                        <label>product image</label>
                        <input type="file" name="image">
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
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>