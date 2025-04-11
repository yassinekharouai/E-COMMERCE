<!DOCTYPE html>
<html>
<head>
  @include('home.css')
  <style>
    /* Custom styles for larger product display */
    .product_section {
      padding: 60px 0;
      background-color: #f8f9fa;
    }
    
    .box {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      margin-bottom: 30px;
    }
    
    .box:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 24px rgba(0,0,0,0.15);
    }
    
    .img-box {
      height: 280px; /* Increased height for larger images */
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      background: #f5f5f5;
      border-bottom: 1px solid #eee;
    }
    
    .img-box img {
      max-height: 100%;
      max-width: 100%;
      width: auto;
      height: auto;
      object-fit: contain;
      transition: transform 0.3s ease;
    }
    
    .box:hover .img-box img {
      transform: scale(1.05);
    }
    
    .detail-box {
      padding: 25px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
    
    .detail-box h5 {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 12px;
      color: #333;
      line-height: 1.3;
    }
    
    .detail-box h6 {
      font-size: 18px;
      color: #e63946;
      font-weight: 700;
      margin-bottom: 20px;
    }
    
    .btn-primary {
      background-color: #2a9d8f;
      border-color: #2a9d8f;
      margin-top: auto;
      width: 100%;
      padding: 12px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 6px;
    }
    
    .btn-primary:hover {
      background-color: #21867a;
      border-color: #21867a;
    }
    
    /* Grid layout with larger items */
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
      .product-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 25px;
      }
      
      .img-box {
        height: 240px;
      }
    }
    
    @media (max-width: 768px) {
      .product-grid {
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 20px;
      }
      
      .img-box {
        height: 200px;
        padding: 15px;
      }
      
      .detail-box {
        padding: 20px;
      }
      
      .detail-box h5 {
        font-size: 18px;
      }
      
      .detail-box h6 {
        font-size: 16px;
      }
    }
    
    /* Empty state styling */
    .empty-products {
      text-align: center;
      padding: 60px 0;
    }
    
    .empty-products img {
      max-width: 300px;
      margin-bottom: 30px;
      opacity: 0.7;
    }
  </style>
</head>
<body>
  <div class="hero_area">
    @include('home.header')
    
    <section class="product_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Products in <span>{{ $category->category_name }}</span>
          </h2>
        </div>
        
        @if($products->count() > 0)
        <div class="product-grid">
          @foreach($products as $product)
          <div class="product-item">
            <div class="box">
              <div class="img-box">
                @if($product->image && file_exists(public_path('products/'.$product->image)))
                  <img src="{{ asset('products/'.$product->image) }}" alt="{{$product->title}}">
                @else
                  <img src="{{ asset('images/default-product.png') }}" alt="Default product image">
                @endif
              </div>
              <div class="detail-box">
                <h5>{{$product->title}}</h5>
                <h6>${{ number_format($product->price, 2) }}</h6>
                <a href="" class="btn btn-primary">Add To Cart</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @else
        <div class="empty-products">
          <img src="{{ asset('images/no-products.svg') }}" alt="No products found">
          <h3>No products available in this category</h3>
          <p>Check back later or browse our other categories</p>
        </div>
        @endif
      </div>
    </section>
    
    @include('home.footer')
  </div>
</body>
</html>