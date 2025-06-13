<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Book Pest Control Service - EliteHomeCare</title>
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
      color: #1abc9c;
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
      color: #27ae60;
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

  <h1>Book Your Pest Control Service</h1>

  <div class="cards" id="serviceCards">
    <div class="card" data-service="General Pest Control" data-price="$60">
      <img src="https://media.istockphoto.com/id/1195698889/photo/farmer-is-spraying-weed-medicine-in-their-wheat-fields.webp?a=1&b=1&s=612x612&w=0&k=20&c=Wz9olYziQYb8mDRs3oit4-FDy7e5Oa7zvBzFnFw6mDo=" alt="General Pest Control">
      <h3>General Pest Control</h3>
      <p>Effective treatment for ants, cockroaches, and general pests.</p>
      <p><strong>Price: $60</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Termite Treatment" data-price="$120">
      <img src="https://plus.unsplash.com/premium_photo-1664303927592-5dc4f9e33eb8?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D" alt="Termite Treatment">
      <h3>Termite Treatment</h3>
      <p>Long-term solution to eliminate termite infestations.</p>
      <p><strong>Price: $120</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Rodent Control" data-price="$90">
      <img src="https://images.unsplash.com/photo-1723847186337-92e4c4c0e54a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Um9kZW50JTIwQ29udHJvbHxlbnwwfHwwfHx8MA%3D%3D" alt="Rodent Control">
      <h3>Rodent Control</h3>
      <p>Professional removal and sealing to keep rodents out.</p>
      <p><strong>Price: $90</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Mosquito Control" data-price="$70">
      <img src="https://plus.unsplash.com/premium_photo-1723107368162-58b152cb1f32?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8TW9zcXVpdG8lMjBDb250cm9sfGVufDB8fDB8fHww" alt="Mosquito Control">
      <h3>Mosquito Control</h3>
      <p>Targeted spraying to prevent mosquito breeding and bites.</p>
      <p><strong>Price: $70</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Bed Bug Treatment" data-price="$110">
      <img src="https://images.unsplash.com/photo-1669047057325-18b868cf50cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Bed Bug Treatment">
      <h3>Bed Bug Treatment</h3>
      <p>Complete removal of bed bugs from your home.</p>
      <p><strong>Price: $110</strong></p>
      <button class="btn bookBtn">Book Now</button>
    </div>
    <div class="card" data-service="Cockroach Gel Treatment" data-price="$65">
      <img src="https://media.istockphoto.com/id/1390351401/photo/cockroach-infestation-inside-a-kitchen-dirty-fridge-and-unhygienic-kitchen-insect-or-pest.webp?a=1&b=1&s=612x612&w=0&k=20&c=6unR17BCKVdnb-BK3qrM0_PAi_axxJNuTXcfumqzdZM=" alt="Cockroach Gel">
      <h3>Cockroach Gel Treatment</h3>
      <p>Odorless gel treatment for long-lasting cockroach control.</p>
      <p><strong>Price: $65</strong></p>
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
