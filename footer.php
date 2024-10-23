<?php wp_footer(); ?>
<footer class="pet-store-footer">
  <div class="footer-bottom">
    <p>&copy; 2024 Pet Store. All rights reserved.</p>
  </div>
</footer>

<style>
/* Footer Styling */
.pet-store-footer {
  background-color: #f9f9f9;
  color: #1a1a1a;
  font-family: 'Arial', sans-serif; /* Font styling */
}

.footer-container {
  max-width: 1200px; /* Maximum width for content */
  margin: 0 auto; /* Center the container */
  padding: 0 20px; /* Horizontal padding */
  display: flex; /* Flexbox for layout */
  justify-content: space-between; /* Space between sections */
  flex-wrap: wrap; /* Wrap sections on small screens */
}

.footer-section {
  flex-basis: 30%; /* Each section takes up 30% */
  margin-bottom: 20px; /* Bottom margin for spacing */
}

.footer-section h3 {
  font-size: 1.5rem; /* Heading size */
  margin-bottom: 10px; /* Space below heading */
  color: #ffcc00; /* Accent color for headings */
  font-weight: bold; /* Bold font for headings */
}

.footer-section p, .footer-section ul {
  font-size: 1rem; /* Font size for text */
  line-height: 1.6; /* Line height for readability */
}

.footer-section ul {
  list-style: none; /* Remove bullet points */
  padding: 0; /* Remove padding */
}

.footer-section ul li {
  margin-bottom: 10px; /* Space between list items */
}

.footer-section ul li a {
  color: #f9f9f9; /* Link color */
  text-decoration: none; /* Remove underline */
  transition: color 0.3s ease; /* Smooth transition on hover */
}

.footer-section ul li a:hover {
  color: #ffcc00; /* Change color on hover */
}

.social-icons {
  display: flex; /* Flexbox for social icons */
  flex-wrap: wrap; /* Allow wrapping */
}

.social-icons li {
  margin-right: 15px; /* Space between icons */
}

.social-icons li a {
  display: flex; /* Flexbox for icon and text */
  align-items: center; /* Center items vertically */
}

.social-icons li i {
  margin-right: 5px; /* Space between icon and text */
}

.footer-bottom {
  background-color: #222; /* Darker background for footer bottom */
  padding: 15px 0; /* Padding for spacing */
  text-align: center; /* Center text */
}

.footer-bottom p {
  font-size: 0.9rem; /* Smaller font for copyright */
  margin: 0; /* Remove default margin */
}

</style>
</body>
</html>
