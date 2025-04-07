<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        input[type='text']
        {
            width: 400px;
            height: 50px;
        }
        .div_deg
        {
            display:flex;
            justify-content:center;
            align-items:center;
            margin:30px;
        }
        .table_deg
        {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #1e3c72, #2a5298);
        }
        
        th {
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            padding: 20px;
            font-size: 22px;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        td {
            padding: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
            font-size: 18px;
            text-align: center;
        }
        tr:hover {
            background: rgba(255, 255, 255, 0.2);
            transition: 0.3s ease-in-out;
        }
        td:first-child {
            border-left: 3px solid #ff758c;
        }

        td:last-child {
            border-right: 3px solid #ff758c;
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


          <h1 style="color:white;">Add Category</h1>


            <div class="div_deg">


                

             


            <form action="{{url('add_category')}}" method="post">
                @csrf
                <div>
                    <input type="text" name="category">
               
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </div>
            </form>
            </div>

            <div>
                <table class="table_deg">
                    <tr>
                        <th>Category name</th>

                        <th></th>

                    </tr>

                    @foreach($data as $data)

                    <tr>
                        <td>
                            {{$data->category_name}}
                        </td>
                    </tr>

                    @endforeach
                </table>
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