<!DOCTYPE html>
<html>
<head>
  @include('home.css')
  <style type="text/css">
    .cart-container {
      padding: 40px 0;
      min-height: 60vh;
    }
    .deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 30px 0;
    }
    table {
      width: 90%;
      max-width: 1000px;
      border-collapse: separate;
      border-spacing: 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      border-radius: 10px;
      overflow: hidden;
    }
    th {
      background-color: #2a9d8f;
      color: white;
      font-size: 18px;
      font-weight: 600;
      padding: 15px;
      text-align: center;
    }
    td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #e0e0e0;
      background-color: white;
    }
    tr:hover td {
      background-color: #f8f8f8;
    }
    .product-image {
      width: 120px;
      height: 120px;
      object-fit: contain;
      border-radius: 5px;
      border: 1px solid #eee;
    }
    .action-btn {
      padding: 8px 15px;
      border-radius: 5px;
      font-weight: 500;
      transition: all 0.3s;
    }
    .btn-delete {
      background-color: #e63946;
      color: white;
      border: none;
    }
    .btn-delete:hover {
      background-color: #c1121f;
      transform: translateY(-2px);
    }
    .cart-value {
      text-align: center;
      margin: 40px 0;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 10px;
      max-width: 500px;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .cart-value h3 {
      font-size: 22px;
      color: #333;
      margin-bottom: 0;
    }
    .checkout-btn {
      text-align: center;
      margin: 40px 0;
    }
    .btn-checkout {
      background-color: #2a9d8f;
      color: white;
      padding: 12px 30px;
      font-size: 18px;
      font-weight: 600;
      border-radius: 30px;
      border: none;
      transition: all 0.3s;
      box-shadow: 0 4px 8px rgba(42, 157, 143, 0.3);
    }
    .btn-checkout:hover {
      background-color: #21867a;
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(42, 157, 143, 0.4);
    }
    .empty-cart {
      text-align: center;
      padding: 60px 0;
    }
    .empty-cart img {
      max-width: 300px;
      opacity: 0.7;
      margin-bottom: 30px;
    }
    @media (max-width: 768px) {
      table {
        width: 100%;
      }
      .product-image {
        width: 80px;
        height: 80px;
      }
      th, td {
        padding: 10px 5px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="hero_area">
    @include('home.header')
  </div>
  
  <div class="cart-container">
    @if(count($cart) > 0)
    <div class="deg">
      <table>
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $value = 0; ?>
          @foreach($cart as $cartItem)
          <tr>
            <td>{{$cartItem->product->title}}</td>
            <td>${{number_format($cartItem->product->price, 2)}}</td>
            <td>
              <img class="product-image" src="/products/{{$cartItem->product->image}}" alt="{{$cartItem->product->title}}">
            </td>
            <td>
              <form action="{{url('remove_cart', $cartItem->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="action-btn btn-delete">Remove</button>
              </form>
            </td>
          </tr>
          <?php $value += $cartItem->product->price; ?>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="cart-value">
      <h3>Total: ${{number_format($value, 2)}}</h3>
    </div>

    <div class="checkout-btn">
      <form action="{{ route('payment.form') }}" method="get">
        @csrf
        <button type="submit" class="btn-checkout">Proceed to Checkout</button>
      </form>
    </div>
    @else
    <div class="empty-cart">
      <img src="{{ asset('images/empty-cart.png') }}" alt="Empty Cart">
      <h3>Your cart is empty</h3>
      <p>Browse our products and add some items to your cart</p>
      <a href="{{url('/')}}" class="btn btn-primary">Continue Shopping</a>
    </div>
    @endif
  </div>

  @include('home.footer')
</body>
</html>