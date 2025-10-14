<?php 
  $activePage = 'home';
  include 'includes/header.php';
  include 'includes/modals.php';
?>

<!-- ================= HERO CAROUSEL ================= -->
<header>
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

    <!-- indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- carousel items -->
    <div class="carousel-inner">
      <!-- slide 1 -->
      <div class="carousel-item active" style="background:url('img/banner-1.png') center/cover no-repeat; height: 600px;">
        <div class="carousel-caption d-none d-md-block">
          <h1>Welcome to Popmart!</h1>
          <p>Discover collectibles</p>
        </div>
      </div>

      <!-- slide 2 -->
      <div class="carousel-item" style="background:url('img/banner-2.png') center/cover no-repeat; height: 600px;">
        <div class="carousel-caption d-none d-md-block">
          <h1>New Arrivals</h1>
          <p>Check out the latest collection</p>
        </div>
      </div>

      <!-- slide 3 -->
      <div class="carousel-item" style="background:url('img/banner-3.png') center/cover no-repeat; height: 600px;">
        <div class="carousel-caption d-none d-md-block">
          <h1>Exclusive Deals</h1>
          <p>Don’t miss our special offers</p>
        </div>
      </div>
    </div>

    <!-- carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</header>

<!-- ================= NEW ARRIVALS ================= -->
<section class="py-5 new-arrivals">
  <div class="container">
    <h1 class="text-center mb-4 custom-h1">【NEW ARRIVALS】</h1>

    <div class="row g-4 justify-content-center">
      <!-- product 1 -->
      <div class="col-md-3">
        <div class="custom-card">
          <img src="img/new-arrival-1.png" alt="Product 1" class="custom-card-img">
          <div class="custom-card-details">
            <p class="text-title">SMISKI Birthday Series</p>
          </div>
          <button class="custom-card-button" onclick="window.location.href='products-tab/products-smiski.php'">View</button>
        </div>
      </div>

      <!-- product 2 -->
      <div class="col-md-3">
        <div class="custom-card">
          <img src="img/new-arrival-2.png" alt="Product 2" class="custom-card-img">
          <div class="custom-card-details">
            <p class="text-title">HIRONO The Pianist Figure</p>
          </div>
          <button class="custom-card-button" onclick="window.location.href='products-tab/products-hirono.php'">View</button>
        </div>
      </div>

      <!-- product 3 -->
      <div class="col-md-3">
        <div class="custom-card">
          <img src="img/new-arrival-3.png" alt="Product 3" class="custom-card-img">
          <div class="custom-card-details">
            <p class="text-title">POP BEAN Coffee Factory Series</p>
          </div>
          <button class="custom-card-button" onclick="window.location.href='products-tab/products-crybaby.php'">View</button>
        </div>
      </div>

      <!-- product 4 -->
      <div class="col-md-3">
        <div class="custom-card">
          <img src="img/new-arrival-4.png" alt="Product 4" class="custom-card-img">
          <div class="custom-card-details">
            <p class="text-title">SMISKI Touch Light Lamp</p>
          </div>
          <button class="custom-card-button" onclick="window.location.href='products-tab/products-smiski.php'">View</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= BEST SELLERS ================= -->
<section class="py-5">
  <div class="container">
    <h1 class="text-center mb-4 custom-h1">【BEST SELLERS】</h1>

    <div class="row g-4">
      <!-- best seller 1 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="img/best-seller-1.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title-best-seller">SMISKI Museum Series</h5>
            <p class="card-text">Php 300.00</p>
            <a href="cart.php" class="btn btn-primary w-100">Add to Cart</a>
          </div>
        </div>
      </div>

      <!-- best seller 2 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="img/best-seller-2.png" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title-best-seller">HIRONO Little Mischief</h5>
            <p class="card-text">Php 500.00</p>
            <a href="cart.php" class="btn btn-primary w-100">Add to Cart</a>
          </div>
        </div>
      </div>

      <!-- best seller 3 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="img/best-seller-3.png" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title-best-seller">MOFUSAND Dessert Series</h5>
            <p class="card-text">Php 300.00</p>
            <a href="cart.php" class="btn btn-primary w-100">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>