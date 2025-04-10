<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('/images/ana_ou_mehdi.jpeg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h6">YASSINE EL KHAROUAI</h1>
            <h1 class="h6">MEHDI ABOUELMOUAHIB</h1>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{ url('admin/dashboard') }}"> <i class="icon-home"></i>Home </a></li>
                <li>
                    <a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category 
                </a>
                </li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>products </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">add products</a></li>
                    <li><a href="{{url('view_product')}}">view products</a></li>
                    
                  </ul>
                </li>
               
        </ul>
      </nav>