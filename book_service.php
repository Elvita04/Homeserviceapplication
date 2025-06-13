<?php
$form_submitted = false;

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // You can add validation & sanitization here later
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');

    if ($name && $email && $phone && $service) {
        // TODO: Save to DB or send email
        $form_submitted = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Book a Service</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       background-color: #94B4C1;
            background-size: cover;
      color: #2c3e50;
      padding: 40px 20px;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      color: #2980b9;
      margin-bottom: 30px;
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
    }
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 12px 10px;
      margin-bottom: 20px;
      border: 2px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    select:focus {
      border-color: #2980b9;
      outline: none;
    }
    button {
      background: #2980b9;
      color: white;
      border: none;
      padding: 14px 0;
      width: 100%;
      font-size: 1.2rem;
      font-weight: 700;
      border-radius: 50px;
      cursor: pointer;
      box-shadow: 0 6px 15px rgba(26,188,156,0.4);
      transition: background 0.3s ease;
    }
    button:hover {
      background: #2980b9;
    }
    .success-message {
      background: #2980b9;
      color: white;
      padding: 15px 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      font-weight: 700;
      text-align: center;
      box-shadow: 0 4px 15px rgba(46,204,113,0.4);
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Book a Service</h1>

    <?php if ($form_submitted): ?>
      <div class="success-message">🎉 Form submitted successfully! We will contact you soon.</div>
    <?php endif; ?>

    <form method="POST" action="">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" placeholder="Your full name" required />

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="your@email.com" required />

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" placeholder="+1 234 567 890" required />

      <label for="service">Select Service</label>
      <select id="service" name="service" required>
        <option value="" disabled selected>Select a service</option>
        <option value="Plumbing">Plumbing</option>
        <option value="Cleaning">Cleaning</option>
        <option value="Electrical Work">Electrical Work</option>
        <option value="AC Repair">AC Repair</option>
        <option value="Pest control">Pest control</option>
        <option value="Carpentry">Carpentry</option>
      </select>

      <button type="submit">Submit Booking</button>
    </form>
  </div>

</body>
</html>