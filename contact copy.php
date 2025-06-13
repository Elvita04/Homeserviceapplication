<!DOCTYPE html>
<html>
<head>
  <title>HomeService App</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #94B4C1;
      background-size: cover;
      color: #fff;
    }

    .overlay {
      
      min-height: 100vh;
      padding: 0;
    }

    header {
      text-align: center;
      padding: 70px 20px 40px;
    }

    header h1 {
      font-size: 50px;
      margin-bottom: 15px;
    }

    .form-section {
      background-color: rgba(255, 255, 255, 0.92);
      color: #333;
      padding: 40px;
      margin: 50px auto;
      border-radius: 20px;
      max-width: 700px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .form-section h2 {
      color: #2980b9;
      margin-bottom: 20px;
    }

    .form-section input,
    .form-section textarea {
      width: 100%;
      padding: 15px;
      margin: 10px 0 20px;
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    .form-section button {
      background-color: #2980b9;
      color: #fff;
      padding: 12px 30px;
      border: none;
      border-radius: 10px;
      font-size: 18px;
      cursor: pointer;
    }

    .form-section button:hover {
      background-color: #3E5879;
    }

    .stars {
      display: flex;
      justify-content: center;
      margin: 20px 0;
    }

    .star {
      font-size: 40px;
      color: #ccc;
      cursor: pointer;
      transition: color 0.3s;
      margin: 0 5px;
    }

    .star.selected {
      color: gold;
    }

    footer {
      text-align: center;
      padding: 40px 20px;
      color: #ccc;
      font-size: 14px;
    }

    #rating-message {
      color: lightgreen;
      font-weight: bold;
      font-size: 18px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
<div class="overlay">
  <header>
    <h1>Contact & Feedback</h1>
    <p>We’d love to hear from you! 💬✨</p>
  </header>

  <!-- Contact Us Form -->
  <div class="form-section">
    <h2>Contact Us</h2>
    <form>
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="4" placeholder="Type your message here..." required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

  <!-- Feedback Form -->
  <div class="form-section">
    <h2>Send Us Your Feedback</h2>
    <form onsubmit="submitFeedback(event)">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="text" name="contact" placeholder="Phone or Email" required>
      <textarea name="feedback" rows="4" placeholder="Your Feedback or Query..." required></textarea>
      <button type="submit">Submit</button>
    </form>
    <p id="thankyou" style="margin-top: 20px; color: green; font-weight: bold;"></p>
  </div>

  <!-- Rate Us -->
  <div class="form-section">
    <h2>Rate Us ⭐</h2>
    <div class="stars" id="starRating">
      <span class="star" onclick="rateUs(1)">★</span>
      <span class="star" onclick="rateUs(2)">★</span>
      <span class="star" onclick="rateUs(3)">★</span>
      <span class="star" onclick="rateUs(4)">★</span>
      <span class="star" onclick="rateUs(5)">★</span>
    </div>
    <p id="rating-message"></p>
  </div>

  <footer>
    &copy; <?php echo date("Y"); ?> HomeService App. Crafted with 💙 for your comfort.
  </footer>
</div>

<script>
  function submitFeedback(e) {
    e.preventDefault();
    document.getElementById("thankyou").innerText = "Thank you for your feedback!";
  }

  function rateUs(rating) {
    const stars = document.querySelectorAll('.star');
    stars.forEach((star, index) => {
      if (index < rating) {
        star.classList.add('selected');
      } else {
        star.classList.remove('selected');
      }
    });
    document.getElementById("rating-message").innerText = "Thank you for rating us! 😊";
;
  }
</script>
</body>
</html>
