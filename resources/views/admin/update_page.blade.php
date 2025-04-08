<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .div_deg label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .div_deg input,
        .div_deg textarea,
        .div_deg select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .div_deg input[type="file"] {
            border: none;
        }

        .div_deg input:focus,
        .div_deg textarea:focus,
        .div_deg select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .div_deg textarea {
            resize: vertical;
            min-height: 100px;
        }

        .div_deg select {
            cursor: pointer;
        }

        .div_deg input[type="submit"] {
            background: #007bff;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .div_deg input[type="submit"]:hover {
            background: #0056b3;
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
        <div class="page-header">
          <div class="container-fluid">
            <h2>Update product</h2>

            <div class="div_deg">
                <form action="{{url('edit_product',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{$data->title}}">
                    </div>
                    <div>
                        <label for="">description</label>
                        <textarea name="description" >{{$data->description}}</textarea>
                        
                        
                    </div>
                    <div>
                        <label for="">price</label>
                        <input type="number" name="price" value="{{$data->price}}">
                    </div>
                    <div>
                        <label for="">quantity</label>
                        <input type="number" name="quantity" value="{{$data->quantity}}">
                    </div>
                    <div>
                        <label for="">category</label>
                        <select name="category" id="">
                            <option value="{{$data->category}}">{{$data->category}}</option>
                            @foreach($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label for="">current image</label>
                        <img width="150" src="/products/{{$data->image}}" alt="">
                    </div>
                    <div>
                        <label for="">new Image</label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <input class="btn btn-success" type="submit" value="update product">
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