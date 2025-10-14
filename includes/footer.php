<!-- ================= FOOTER ================= -->
<footer class="custom-footer text-center py-3">
  <p class="mb-0">© 2025 POPMART | Designed for demo purposes</p>
</footer>

<!-- jquery and javascript -->
<script src="/website-popmart/dist/jquery.min.js"></script>
<script src="/website-popmart/dist/bootstrap.bundle.min.js"></script>

<!-- jquery validation for online -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script> -->

<!-- jquery validations locally -->
<script src="/website-popmart/dist/jquery.validate.min.js"></script>
<script src="/website-popmart/dist/additional-methods.min.js"></script>

<script src="/website-popmart/js/validation.js"></script>
<script src="/website-popmart/js/animation.js"></script>

  <script>
    // breadcrumb
    const params = new URLSearchParams(window.location.search);
    const productName = params.get("name") || "Product";

    document.getElementById("breadcrumb-product").textContent = productName;
    document.getElementById("product-title").textContent = productName;
    document.getElementById("product-card-title").textContent = productName;
  </script>

</body>
</html>