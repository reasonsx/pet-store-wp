<?php wp_footer(); ?>
<footer class="pet-store-footer">
  <div class="footer-container">
    <div class="footer-section about-us">
      <h3>About Us</h3>
      <p>Your trusted online pet store, offering the best products and care tips for your furry friends.</p>
    </div>
    <div class="footer-section quick-links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Shipping & Returns</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="footer-section social-media">
      <h3>Follow Us</h3>
      <ul class="social-icons">
        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Pet Store. All rights reserved.</p>
  </div>
</footer>
<style>
    /* Footer Styling */
.pet-store-footer {
  background-color: #333;
  color: #fff;
  padding: 40px 0;
  font-family: Arial, sans-serif;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-section {
  flex-basis: 30%;
}

.footer-section h3 {
  font-size: 18px;
  margin-bottom: 15px;
  color: #ffcc00; /* Accent color */
}

.footer-section p, .footer-section ul {
  font-size: 14px;
  line-height: 1.6;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer-section ul li a:hover {
  color: #ffcc00; /* Hover color */
}

.social-icons {
  display: flex;
}

.social-icons li {
  margin-right: 10px;
}

.social-icons li a {
  display: flex;
  align-items: center;
}

.social-icons li i {
  margin-right: 5px;
}

.footer-bottom {
  background-color: #222;
  padding: 15px 0;
  text-align: center;
}

.footer-bottom p {
  font-size: 13px;
  margin: 0;
}

</style>
</body>
</html>
