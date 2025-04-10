<header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('/')}}">
          <img height="150" width="150" src="/images/logo.jpg" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.html">
                Why Us<div class="hero-banner" style="
                background: linear-gradient(135deg, #1a1a1a 0%, #ff4d4d 100%);
                padding: 80px 20px;
                text-align: center;
                border-radius: 10px;
                position: relative;
                overflow: hidden;
            ">
                <div style="
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" opacity=\"0.05\"><path fill=\"white\" d=\"M30,15L15,30v40l15,15h40l15-15V30L70,15H30z M50,65c-8.3,0-15-6.7-15-15s6.7-15,15-15s15,6.7,15,15S58.3,65,50,65z\"/></svg>');
                    background-size: 100px;
                "></div>
                <h1 style="
                    color: white;
                    font-size: 3rem;
                    margin-bottom: 20px;
                    position: relative;
                    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
                ">Tech Revolution</h1>
                <p style="
                    color: rgba(255,255,255,0.9);
                    font-size: 1.2rem;
                    max-width: 700px;
                    margin: 0 auto 30px;
                    position: relative;
                ">Discover cutting-edge gadgets at unbeatable prices</p>
                <a href="/shop" style="
                    background: white;
                    color: #ff4d4d;
                    padding: 12px 30px;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: bold;
                    display: inline-block;
                    transition: all 0.3s ease;
                ">Shop Now</a>
            </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.html">
                Testimonial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            @if (Route::has('login'))


             @auth

             <a href="{{url('mycart')}}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              [{{$count}}]
             </a>

             <form style="padding:10px" method="POST" action="{{ route('logout') }}">
              @csrf
              <input class="btn btn-success" type="submit" value="logout">

             </form>
             @else
            <a href="{{ route('login') }}">


              

              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Login</span>
            </a>

            <a href="{{url('/register')}}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>
                Register
              </span>
            </a>

            @endauth
            @endif

            
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>