<?php
session_start();
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Check if username already exists
    $check_sql = "SELECT * FROM users WHERE username = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Username already taken!";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into database
        $insert_sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("ss", $username, $hashed_password);

        if ($insert_stmt->execute()) {
            header("Location: login.php?msg=Registration successful! Please login.");
            exit();
        } else {
            $error = "Error registering user: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-l from-green-400 via-blue-800 to-yellow-500 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-lg w-96">
        <h2 class="text-xl font-bold mb-4 text-center">Register</h2>

        <?php if (isset($error)) { ?>
            <p class="text-red-500 text-sm text-center"><?= $error ?></p>
        <?php } ?>

        <form method="POST" class="space-y-4">
            <label class="block">
                <span class="text-gray-700">Username</span>
                <input type="text" name="username" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded">
            </label>

            <label class="block">
                <span class="text-gray-700">Password</span>
                <input type="password" name="password" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded">
            </label>

            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded hover:bg-green-600">Register</button>
        </form>

        <p class="text-sm text-center mt-4">
            Already have an account? <a href="login.php" class="text-blue-500 hover:underline">Login here</a>.
        </p>
    </div>
</body>
</html>