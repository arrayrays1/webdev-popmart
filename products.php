<?php 
  $activePage = 'products';
  include 'includes/header.php';
  include 'includes/modals.php';
?>
<!-- ================= PRODUCTS SECTION ================= -->
  <section class="py-5 custom-products">
    <div class="container">
      <h1 class="text-center mb-4 custom-h1-products">PRODUCTS</h1>

      <div class="row justify-content-center">

        <!-- product 1 -->
        <div class="col-md-4">
          <div class="custom-card">
            <img src="img/products-img-banner/smiski.png" alt="Product 1" class="custom-card-img">
            <div class="custom-card-details">
              <p class="text-title">SMISKI</p>
            </div>
            <button class="custom-card-button" onclick="window.location.href='products-tab/products-smiski.php'">View</button>
          </div>
        </div>

        <!-- product 2 -->
        <div class="col-md-4">
          <div class="custom-card">
            <img src="img/products-img-banner/mofusand.png" alt="Product 2" class="custom-card-img">
            <div class="custom-card-details">
              <p class="text-title">MOFUSAND</p>
            </div>
            <button class="custom-card-button" onclick="window.location.href='products-tab/products-mofusand.php'">View</button>
          </div>
        </div>

        <!-- product 3 -->
        <div class="col-md-4">
          <div class="custom-card">
            <img src="img/products-img-banner/sonny-angel.png" alt="Product 3" class="custom-card-img">
            <div class="custom-card-details">
              <p class="text-title">SONNY ANGEL</p>
            </div>
            <button class="custom-card-button" onclick="window.location.href='products-tab/products-sAngel.php'">View</button>
          </div>
        </div>

        <!-- product 4 -->
        <div class="col-md-4">
          <div class="custom-card">
            <img src="img/products-img-banner/miffy.png" alt="Product 4" class="custom-card-img">
            <div class="custom-card-details">
              <p class="text-title">MIFFY</p>
            </div>
            <button class="custom-card-button" onclick="window.location.href='products-tab/products-miffy.php'">View</button>
          </div>
        </div>

        <!-- product 5 -->
        <div class="col-md-4">
          <div class="custom-card">
            <img src="img/products-img-banner/hirono.png" alt="Product 5" class="custom-card-img">
            <div class="custom-card-details">
              <p class="text-title">HIRONO</p>
            </div>
            <button class="custom-card-button" onclick="window.location.href='products-tab/products-hirono.php'">View</button>
          </div>
        </div>

        <!-- product 6 -->
        <div class="col-md-4">
          <div class="custom-card">
            <img src="img/products-img-banner/crybaby.png" alt="Product 6" class="custom-card-img">
            <div class="custom-card-details">
              <p class="text-title">CRYBABY</p>
            </div>
            <button class="custom-card-button" onclick="window.location.href='products-tab/products-crybaby.php'">View</button>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>