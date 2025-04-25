<?php
session_start();
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login |Traveller</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[url('../phppro/images/logimage.jpg')] max-width-screen bg-cover bg-no-repeat bg-center flex flex-col h-screen">

    <!-- Navbar -->

    <!-- Centered Login Form -->
    <div class="flex flex-1 items-center justify-center">
        <div class="bg-gray-200 bg-opacity-90 backdrop-blur-md shadow-lg rounded-xl p-8 max-w-sm w-full">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Login</h2>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "SELECT id, username, password FROM users WHERE username = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result = $stmt->get_result();
                $user = $result->fetch_assoc();

                if ($user && password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    header("Location: home.php");
                    exit();
                } else {
                    echo "<p class='text-red-500 text-center font-semibold mb-4'>Invalid Credentials!</p>";
                }
            }
            ?>

            <form method="POST" class="space-y-4">
                <input type="text" name="username" placeholder="Username" required
                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700 bg-gray-50 shadow-sm">
                <input type="password" name="password" placeholder="Password" required
                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-700 bg-gray-50 shadow-sm">
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-300 shadow-md">
                    Login
                </button>
            </form>
            
            <p class="text-gray-700 text-sm text-center mt-4">
                Don't have an account? <a href="register.php" class="text-blue-600 font-semibold hover:underline">Sign up</a>
            </p>
        </div>
    </div>
</body>

</html>