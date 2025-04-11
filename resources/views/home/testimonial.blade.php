<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          What Our Customers Say
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <!-- Car Purchase Testimonial -->
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    YASSINE EL KHAROUAI
                  </h5>
                  <h6>
                    Luxury Car Buyer
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "I couldn't be happier with my new BMW purchase! The team went above and beyond to find me the perfect model with all the features I wanted. Their financing options made it affordable, and the after-sales service has been exceptional. I've already recommended them to three friends!"
              </p>
              <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
            </div>
          </div>
  
          <!-- Earphones Testimonial -->
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    MEHDI ABOUELMOUAHIB
                  </h5>
                  <h6>
                    Audio Enthusiast
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "The noise-canceling headphones I bought here are incredible! The sound quality surpasses all my expectations, and the battery life lasts through my longest flights. What impressed me most was the expert advice I received - they helped me choose the perfect pair for my needs rather than just pushing the most expensive option."
              </p>
              <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
            </div>
          </div>
  
          <!-- Clothing Testimonial -->
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    ABDERAHMANE CHIRAGE
                  </h5>
                  <h6>
                    Fashion Shopper
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "I ordered a complete wardrobe refresh and every piece exceeded my expectations! The fabrics are high quality, the fits are perfect, and the styles are exactly what I wanted. Their personal styling advice was spot-on, and the delivery was faster than promised. This has become my go-to store for all my clothing needs."
              </p>
              <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  @include('home.footer')

</body>

</html>