<!DOCTYPE html>
<html>
<head>
  @include('home.css')
  <style>
    /* Custom Category Styling */
    .product_section {
      padding: 60px 0;
      background-color: #f8f9fa;
    }

    .heading_container h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      position: relative;
      display: inline-block;
    }

    .heading_container h2 span {
      color: #2a9d8f;
      font-weight: 700;
    }

    .heading_container h2:after {
      content: '';
      position: absolute;
      width: 60%;
      height: 3px;
      background: linear-gradient(90deg, #2a9d8f, transparent);
      bottom: -10px;
      left: 0;
    }

    .category-box {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
      height: 100%;
      margin-bottom: 30px;
      position: relative;
      padding: 30px 20px;
      text-align: center;
      border: 1px solid rgba(0,0,0,0.05);
      animation: fadeInUp 0.5s ease forwards;
      opacity: 0;
    }

    .category-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    .category-box::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, #2a9d8f, #e63946);
    }

    .category-box .detail-box {
      padding: 20px 0;
    }

    .category-box h5 {
      font-size: 1.4rem;
      font-weight: 600;
      color: #333;
      margin-bottom: 20px;
      position: relative;
      padding-bottom: 15px;
    }

    .category-box h5::after {
      content: '';
      position: absolute;
      width: 50px;
      height: 2px;
      background: #2a9d8f;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
    }

    .btn-primary {
      background-color: #2a9d8f;
      border-color: #2a9d8f;
      padding: 10px 25px;
      font-size: 1rem;
      font-weight: 500;
      border-radius: 30px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .btn-primary:hover {
      background-color: #21867a;
      border-color: #21867a;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(42, 157, 143, 0.3);
    }

    /* Grid Layout */
    .category-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 30px;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
      .category-grid {
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 25px;
      }

      .heading_container h2 {
        font-size: 2.2rem;
      }
    }

    @media (max-width: 768px) {
      .category-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
      }

      .heading_container h2 {
        font-size: 2rem;
      }

      .category-box {
        padding: 25px 15px;
      }

      .category-box h5 {
        font-size: 1.3rem;
      }
    }

    @media (max-width: 576px) {
      .category-grid {
        grid-template-columns: 1fr;
        gap: 15px;
      }

      .product_section {
        padding: 40px 0;
      }
    }

    /* Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .category-box:nth-child(1) { animation-delay: 0.1s; }
    .category-box:nth-child(2) { animation-delay: 0.2s; }
    .category-box:nth-child(3) { animation-delay: 0.3s; }
    .category-box:nth-child(4) { animation-delay: 0.4s; }
    .category-box:nth-child(5) { animation-delay: 0.5s; }
    .category-box:nth-child(6) { animation-delay: 0.6s; }
  </style>
</head>
<body>
  <div class="hero_area">
    @include('home.header')

    <section class="product_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Our <span>Categories</span>
          </h2>
        </div>

        <div class="category-grid">
          @foreach($categories as $category)
            <div class="category-box">
              <div class="detail-box">
                <h5>{{ $category->category_name }}</h5>
                <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary">View Products</a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    @include('home.footer')
  </div>
</body>
</html>
