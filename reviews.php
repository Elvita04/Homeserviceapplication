<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Customer Reviews – Elite HomeCare</title>
  <style>
    /* Reset & basics */
    * {
      box-sizing: border-box;
      margin: 0; padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background-color: #94B4C1;
      background-size: cover;
      color: #2c3e50;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      padding: 40px 0;
    }
    .overlay {
      background: rgba(255,255,255,0.95);
      border-radius: 15px;
      width: 90%;
      max-width: 1100px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.25);
      padding: 30px 40px;
    }
    header {
      text-align: center;
      margin-bottom: 40px;
    }
    header h1 {
      font-size: 2.8rem;
      color: #2980b9;
      margin-bottom: 10px;
    }
    header p {
      font-size: 1.1rem;
      color: #555;
    }
    .reviews {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px,1fr));
      gap: 25px;
    }
    .review-card {
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .review-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }
    .stars {
      color: #f1c40f;
      margin-bottom: 12px;
      font-size: 1.2rem;
    }
    .review-card h3 {
      margin-bottom: 8px;
      font-size: 1.2rem;
      color: #34495e;
    }
    .review-card p {
      font-size: 1rem;
      color: #555;
      line-height: 1.5;
    }
    .btn {
      display: inline-block;
      background: #2980b9;
      color: white;
      padding: 12px 28px;
      font-weight: 600;
      border-radius: 50px;
      box-shadow: 0 6px 15px rgba(26,188,156,0.4);
      transition: background 0.3s ease, box-shadow 0.3s ease;
      text-decoration: none;
      margin-top: 30px;
    }
    .btn:hover {
      background: #2980b9;
      box-shadow: 0 8px 20px rgba(22,160,133,0.7);
    }
    footer {
      text-align: center;
      margin-top: 40px;
      font-size: 0.9rem;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="overlay">
    <header>
      <h1>What Our Customers Say</h1>
      <p>Real feedback from real homeowners—powered by Elite HomeCare.</p>
    </header>

    <div class="reviews">
      <div class="review-card">
        <div class="stars">★★★★★</div>
        <h3>Sarah K.</h3>
        <p>"Booked plumbing service last week, and the technician was punctual, polite, and fixed my leaky pipe in no time. Highly recommend!"</p>
      </div>

      <div class="review-card">
        <div class="stars">★★★★☆</div>
        <h3>David L.</h3>
        <p>"Deep cleaning team did an amazing job—my home has never looked better. Very professional and thorough." </p>
      </div>

      <div class="review-card">
        <div class="stars">★★★★★</div>
        <h3>Priya S.</h3>
        <p>"Fast, friendly, and efficient! The electrician sorted out my wiring safely. Will definitely use Elite HomeCare again."</p>
      </div>

      <div class="review-card">
        <div class="stars">★★★★★</div>
        <h3>Michael T.</h3>
        <p>"AC repair was seamless and stress-free. Great communication from booking to completion. Five stars!"</p>
      </div>
      <div class="review-card">
    <div class="stars">★★★★☆</div>
    <h3>Rina D.</h3>
    <p>"Booked a last-minute deep clean before guests arrived—so impressed with the speed and sparkle! Will book again soon."</p>
  </div>

  <div class="review-card">
    <div class="stars">★★★★★</div>
    <h3>Amir H.</h3>
    <p>"Used Elite for pest control and it actually worked! Super polite team and excellent follow-up. Worth every penny."</p>
  </div>
    </div>

    <div style="text-align:center;">
      <a href="index.html" class="btn">Back to Home</a>
    </div>

    <footer>
      &copy; 2025 Elite HomeCare. All rights reserved.
    </footer>
  </div>
</body>
</html>
