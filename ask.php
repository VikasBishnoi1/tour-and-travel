<?php
session_start();
include "database.php"; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'] ?? 'Guest'; // Use session username or 'Guest' if not logged in
    $question = trim($_POST['question']);

    if (!empty($question)) {
        $insert_sql = "INSERT INTO questions (username, question) VALUES (?, ?)";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("ss", $username, $question);

        if ($stmt->execute()) {
            $success = "Your question has been submitted successfully!";
        } else {
            $error = "Error submitting your question: " . $conn->error;
        }
    } else {
        $error = "Please enter a question.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask a Question</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-lg w-96">
        <h2 class="text-xl font-bold mb-4 text-center">Give Review</h2>

        <?php if (isset($success)) { ?>
            <p class="text-green-500 text-sm text-center"><?= $success ?></p>
        <?php } ?>

        <?php if (isset($error)) { ?>
            <p class="text-red-500 text-sm text-center"><?= $error ?></p>
        <?php } ?>

        <form method="POST" class="space-y-4">
            <label class="block">
                <span class="text-gray-700">Your Review</span>
                <textarea name="question" rows="4" required class="w-full mt-1 px-3 py-2 border border-gray-300 rounded"></textarea>
            </label>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Submit</button>
        </form>

        <p class="text-sm text-center mt-4">
            <a href="home.php" class="text-blue-500 hover:underline">Back to Home</a>
        </p>
    </div>
</body>
</html>