<nav class="bg-gray-900 text-white fixed top-0 left-0 w-full px-6 py-4 shadow-md z-50">
    <div class="flex justify-between items-center max-w-6xl mx-auto">
        <!-- Logo / Brand Name -->
        <a href="../pages/dashboard.php" class="text-2xl font-bold tracking-wide">Production Planner</a>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-6">
            <a href="../pages/dashboard.php" class="hover:text-yellow-400 transition font-medium">Dashboard</a>
            <a href="../auth/login.php" class="hover:text-yellow-400 transition font-medium">Login</a>
            <a href="../auth/register.php" class="hover:text-yellow-400 transition font-medium">Signup</a>
        </div>

        <!-- User Profile / Logout -->
        <div class="flex items-center space-x-4">
            <a href="../auth/logout.php"
                class="bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 transition font-medium">
                Logout
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800 text-white text-center py-4 space-y-2">
        <a href="home.php" class="block hover:text-yellow-400 transition">Home</a>
        <a href="packages.php" class="block hover:text-yellow-400 transition">Dashboard</a>
        <a href="about.php" class="block hover:text-yellow-400 transition">Tasks</a>
        <a href="book.php" class="block hover:text-yellow-400 transition">Schedule</a>
        <a href="logout.php" class="block bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 transition inline-block">
            Logout
        </a>
    </div>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</nav>