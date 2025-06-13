<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Book Carpentry Service - EliteHomeCare</title>
  <style>
    /* (Use the same CSS from previous pages, or paste your existing <style> block here) */
     * {
      box-sizing: border-box;
      margin: 0; padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #94B4C1;
      background-size: cover;
      color: #fff;
      min-height: 100vh;
      padding: 40px 20px;
    }
    h1, h2 {
      color: #2980b9;
      text-align: center;
      margin-bottom: 25px;
      text-shadow: 1px 1px 3px #000;
    }
    .cards {
      display: grid;
      grid-template-columns: repeat(3,1fr);
      gap: 25px;
      max-width: 1100px;
      margin: 0 auto 40px;
    }
    .card {
      background: #ecf0f1;
      color: #34495e;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }
    .card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .card h3 {
      margin-bottom: 12px;
      font-size: 1.25rem;
    }
    .card p {
      font-size: 1rem;
      margin-bottom: 12px;
      color: #7f8c8d;
    }
    .btn {
      background: #2980b9;
      color: #fff;
      padding: 12px 28px;
      border-radius: 50px;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
      box-shadow: 0 6px 15px rgba(41,128,185,0.4);
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }
    .btn:hover {
      background: #2471a3;
      box-shadow: 0 8px 20px rgba(36,113,163,0.7);
    }
    /* Booking form */
    #bookingForm {
      background: rgba(255,255,255,0.95);
      color: #34495e;
      max-width: 400px;
      margin: 0 auto;
      border-radius: 12px;
      padding: 30px 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }
    #bookingForm h2 {
      color: #2980b9;
      text-align: center;
      border-bottom: 3px solid #2980b9;
      padding-bottom: 8px;
      margin-bottom: 20px;
      max-width: 260px;
      margin-left: auto;
      margin-right: auto;
    }
    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 1rem;
      outline: none;
      transition: border-color 0.3s ease;
    }
    input:focus, textarea:focus {
      border-color: #2980b9;
    }
    #confirmationMessage {
      text-align: center;
      color: #2980b9;
      font-size: 1.2rem;
      font-weight: 700;
      margin-top: 20px;
      display: none;
    }
    /* Responsive */
    @media(max-width: 992px) {
      .cards { grid-template-columns: repeat(2,1fr); max-width: 700px; }
    }
    @media(max-width:600px) {
      .cards { grid-template-columns: 1fr; max-width: 350px; }
    }
  </style>
</head>
<body>

  <h1>Book Your Carpentry Service</h1>

  <div class="cards" id="serviceCards">
    <div class="card" data-service="Door Repair & Installation" data-price="$80">
      <img src="https://images.unsplash.com/photo-1717923798154-01727a32aa24?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8RG9vciUyMFJlcGFpciUyMCUyNiUyMEluc3RhbGxhdGlvbnxlbnwwfHwwfHx8MA%3D%3D" alt="Door Repair">
      <h3>Door Repair & Installation</h3>
      <p>Expert repair and fitting for wooden doors and handles.</p>
      <p><strong>Price: $80</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Furniture Assembly" data-price="$60">
      <img src="https://media.istockphoto.com/id/490077888/photo/assembling-furniture.webp?a=1&b=1&s=612x612&w=0&k=20&c=DxTd7irRPeaRaKJbdloVQlhoLBZFq5x6XYDnMkma9OQ=" alt="Furniture Assembly">
      <h3>Furniture Assembly</h3>
      <p>Quick assembly of all flat-pack and modular furniture.</p>
      <p><strong>Price: $60</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Wardrobe Repair" data-price="$75">
      <img src="https://media.istockphoto.com/id/1987701498/photo/man-assembling-a-closet.webp?a=1&b=1&s=612x612&w=0&k=20&c=1AKik_8PQFD0pDq3ysowefeYqD_2X8iAKKxVC-juDaw=" alt="Wardrobe Repair">
      <h3>Wardrobe Repair</h3>
      <p>Repair for sliding doors, hinges, or broken sections.</p>
      <p><strong>Price: $75</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Custom Shelving" data-price="$100">
      <img src="https://media.istockphoto.com/id/1218369818/photo/interior-view-of-a-custom-made-closet-with-open-doors-built-into-a-master-bedroom-with-a.webp?a=1&b=1&s=612x612&w=0&k=20&c=uXNcfw7qyz1IViqFIJk5eFLQvtzqeyG2-Tito-qEGxc=" alt="Custom Shelving">
      <h3>Custom Shelving</h3>
      <p>Design and installation of shelves tailored to your space.</p>
      <p><strong>Price: $100</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Window Frame Repair" data-price="$70">
      <img src="https://media.istockphoto.com/id/1387453354/photo/professional-workers-installing-the-window-frame.webp?a=1&b=1&s=612x612&w=0&k=20&c=z2N5rodk_CAkoOkV6uLK2FAUvev1tD9cIASbGTEt1_g=" alt="Window Frame Repair">
      <h3>Window Frame Repair</h3>
      <p>Fix damaged or broken wooden window frames.</p>
      <p><strong>Price: $70</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="TV Unit Installation" data-price="$90">
      <img src="https://media.istockphoto.com/id/646751314/photo/handyman-installing-a-tv-wall-mount.webp?a=1&b=1&s=612x612&w=0&k=20&c=Rzw2EqPrKvYZ9mLXgGLLeYOvHf5qKCo15NflUudExds=" alt="TV Unit Installation">
      <h3>TV Unit Installation</h3>
      <p>Wall-mount and cabinet setup for entertainment units.</p>
      <p><strong>Price: $90</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
  </div>

   <!-- Booking form (hidden initially) -->
<div id="bookingForm" style="display:none;">
  <h2>Book: <span id="selectedService"></span> (<span id="selectedPrice"></span>)</h2>
  
  <form id="form">
    <!-- Your Name -->
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" required />

    <!-- Email -->
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required />

    <!-- Phone -->
    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,15}" placeholder="Digits only" />

    <!-- Date Slot (Styled Like Other Fields) -->
    <label for="service-date">Choose a Date</label>
    <input type="date" id="service-date" name="service-date" required />

    <!-- Time Slot (Styled Like Other Fields) -->
    <label for="time-slot">Choose a Time Slot</label>
    <select id="time-slot" name="time-slot" required>
      <option value="">-- Select Time --</option>
      <option>09:00 AM – 10:00 AM</option>
      <option>10:00 AM – 11:00 AM</option>
      <option>11:00 AM – 12:00 PM</option>
      <option>12:00 PM – 01:00 PM</option>
      <option>02:00 PM – 03:00 PM</option>
      <option>03:00 PM – 04:00 PM</option>
      <option>04:00 PM – 05:00 PM</option>
    </select>
<br>
    <!-- Confirm Button -->
    <button type="submit" class="btn" style="margin-top: 20px;">Confirm Booking</button>
  </form>

  <div id="confirmationMessage" style="margin-top: 15px;">THANKS FOR BOOKING 😊! We will contact you soon.</div>
</div>

  <script>
    const bookButtons = document.querySelectorAll('.bookBtn');
    const serviceCards = document.getElementById('serviceCards');
    const bookingForm = document.getElementById('bookingForm');
    const selectedServiceSpan = document.getElementById('selectedService');
    const selectedPriceSpan = document.getElementById('selectedPrice');
    const confirmationMessage = document.getElementById('confirmationMessage');
    const form = document.getElementById('form');

    bookButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        const card = btn.closest('.card');
        selectedServiceSpan.textContent = card.dataset.service;
        selectedPriceSpan.textContent = card.dataset.price;

        serviceCards.style.display = 'none';
        bookingForm.style.display = 'block';
        confirmationMessage.style.display = 'none';
        form.reset();
      });
    });

    form.addEventListener('submit', e => {
      e.preventDefault();
      form.style.display = 'none';
      confirmationMessage.style.display = 'block';
    });
  </script>
<script>
function showDateSlot() {
  document.getElementById("dateSlotContainer").style.display = "block";
}

function showTimeSlot() {
  document.getElementById("timeSlotContainer").style.display = "block";
}
</script>
</body>
</html>
