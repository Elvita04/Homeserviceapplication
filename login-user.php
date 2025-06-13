<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain text password user entered

    // Prepare and execute query to find user by email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Check password
        if ($password === $user['password']) {  // plain text comparison (not secure but matches your db)
            echo "Login successful!";
        } else {
            echo "Login failed: Incorrect password.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request method.";
}
?>
