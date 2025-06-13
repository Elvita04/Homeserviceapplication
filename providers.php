<?php
$host = 'localhost';
$user = 'root';
$password = 'Elsql_04';
$database = 'homeserviceapp';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT providers.name AS provider_name, providers.phone, providers.email, services.name AS service_name
        FROM providers
        JOIN services ON providers.service_id = services.id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Our Service Providers</title>
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

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 30px;
        }

        .provider-card {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 18px;
            margin-bottom: 30px;
            padding: 30px;
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.25);
            transition: 0.3s ease;
            color: #333;
        }

        .provider-card:hover {
            transform: translateY(-5px);
        }

        .provider-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-right: 40px;
            object-fit: cover;
            border: 4px solid #2980b9;
        }

        .provider-info h3 {
            margin: 0 0 10px;
            font-size: 24px;
            color: #2980b9;
        }

        .provider-info p {
            margin: 6px 0;
            font-size: 16px;
        }

        .description-section {
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 40px;
            border-radius: 20px;
            margin: 50px auto;
            max-width: 1000px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .description-section h2 {
            font-size: 30px;
            color: #2980b9;
        }

        .description-section p {
            font-size: 18px;
            line-height: 1.8;
            margin-top: 20px;
        }

        .feedback-form {
            background-color: rgba(255, 255, 255, 0.92);
            color: #333;
            padding: 40px;
            margin: 50px auto;
            border-radius: 20px;
            max-width: 700px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .feedback-form h2 {
            color: #2980b9;
            margin-bottom: 20px;
        }

        .feedback-form input, .feedback-form textarea {
            width: 100%;
            padding: 15px;
            margin: 10px 0 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .feedback-form button {
            background-color: #2980b9;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
        }

        .feedback-form button:hover {
            background-color: #2980b9;
        }

        footer {
            text-align: center;
            padding: 40px 20px;
            color: #ccc;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .provider-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .provider-image {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
<div class="overlay">
    <header>
        <h1>Meet Our Trusted Service Providers</h1>
        <p>Professionals who make your life easier 🛠️🧼💡</p>
    </header>

    <div class="container">
        <?php
        $images = [
            "https://randomuser.me/api/portraits/men/31.jpg",
            "https://randomuser.me/api/portraits/women/45.jpg",
            "https://randomuser.me/api/portraits/men/56.jpg",
            "https://randomuser.me/api/portraits/women/12.jpg",
            "https://randomuser.me/api/portraits/men/90.jpg"
        ];
        $i = 0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $img = $images[$i % count($images)];
                echo "<div class='provider-card'>";
                echo "<img class='provider-image' src='$img' alt='Provider'>";
                echo "<div class='provider-info'>";
                echo "<h3>" . htmlspecialchars($row['provider_name']) . "</h3>";
                echo "<p><strong>Service:</strong> " . htmlspecialchars($row['service_name']) . "</p>";
                echo "<p><strong>Phone:</strong> " . htmlspecialchars($row['phone']) . "</p>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
                echo "</div></div>";
                $i++;
            }
        } else {
            echo "<p style='text-align:center;'>No providers found.</p>";
        }

        $conn->close();
        ?>
    </div>

    <!-- Description section -->
    <div class="description-section">
        <h2>Why Choose HomeService App?</h2>
        <p>
            At HomeService App, we bring you handpicked, verified professionals right to your doorstep.
            Whether you're dealing with a leaky faucet, messy apartment, or a flickering light – we've got someone for everything.
            Our mission is to make quality home services fast, reliable, and stress-free.
            Every provider listed on our platform has gone through background checks and service validation.
        </p>
    </div>

    <!-- Feedback Form -->
    <div class="feedback-form">
        <h2>Send Us Your Feedback</h2>
        <form action="#" method="POST" onsubmit="submitFeedback(event)">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="contact" placeholder="Phone or Email" required>
            <textarea name="feedback" rows="4" placeholder="Your Feedback or Query..." required></textarea>
            <button type="submit">Submit</button>
        </form>
        <p id="thankyou" style="margin-top: 20px; color: green; font-weight: bold;"></p>
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
</script>
</body>
</html>
