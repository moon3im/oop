<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycle Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Add animations */
        .fade-in {
            opacity: 0;
            transform: translateY(-10px);
            animation: fadeIn 1s ease-in-out forwards;
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-up {
            opacity: 0;
            transform: translateY(100px);
            animation: slideUp 1s ease-in-out forwards;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Button hover effect */
        .hover-grow {
            transition: transform 0.3s ease-in-out, background-color 0.3s;
        }

        .hover-grow:hover {
            transform: scale(1.05);
        }

        /* Scrollable card panel */
        .scroll-panel {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
            padding-bottom: 1rem;
        }

        .scroll-panel::-webkit-scrollbar {
            display: none; /* Hide the scrollbar */
        }

        .card {
            display: inline-block;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-right: 1rem;
            width: 250px;
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
            color: gray;
        }

        /* Bike Image Animation */
  
        .bike-container {
        position: absolute;
        margin-top: 60px;
        width: 650px;
        height: 760px; /* Full screen height */
        display: flex;
        justify-content: flex-end; /* Aligns the bike to the right */
        align-items: center;
        right: 0% ;
        border-radius: 10px; /* Optional: Rounds the corners */
}



        @keyframes slideIn {
            to {
                left: 0; /* Slide in to the left */
            }
        }
    </style>
</head>
<body class="bg-gray-100 bg-cover bg-center" style="background-image: url('../assets/back.png');">
        <div class="bike-container">
            <img src="../assets/o_bg-remover-gen_2nqNrJliPSofQUg.png" alt="Bike with Plants" class="bike-image">

        </div>

    <!-- Header -->
    <header class="text-white py-4 bg-opacity-80 bg-gray-900 shadow-lg">
        <div class="container mx-auto flex justify-between items-center fade-in">
            <p class="text-3xl font-bold">Bicycle Store</p>
            <div class="space-x-6 flex items-center">
                <!-- Explore Icon -->
                <a href="explore.php" class="text-white font-bold bg-transparent py-2 px-4 rounded-lg transition hover:bg-yellow-600 hover-grow">
                    <i class="fas fa-search fa-lg"></i>
                </a>

                <!-- Subscribe Icon -->
                <a href="subscribe.php" class="text-white font-bold bg-transparent py-2 px-4 rounded-lg transition hover:bg-yellow-600 hover-grow">
                    <i class="fas fa-envelope fa-lg"></i>
                </a>

                <!-- Services Icon -->
                <a href="about_us.php" class="text-white font-bold py-2 px-4 rounded-lg transition hover:bg-yellow-600 hover-grow">
                    <i class="fas fa-tools fa-lg"></i>
                </a>

                <!-- Login Icon -->
                <a href="login.php" class="text-white font-bold py-2 px-8 rounded-lg transition duration-300 hover:bg-yellow-600 hover-grow" style="background-color: #e9b582;">
                    <i class="fas fa-sign-in-alt fa-lg"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-48 items-center py-12">
        <!-- Left Section -->
        <div class="w-1/2 text-left">
            <h1 class="text-8xl mt-0 font-bold text-white mb-12 fade-in">Find Your Perfect Ride!</h1>
            <p class="text-lg text-gray-100 mb-8 fade-in">Explore our wide range of bicycles, designed for every rider. Whether you're looking for a mountain bike, a road bike, or a casual ride, we’ve got you covered.</p>
            <a href="inventory.php" class="text-white py-3 px-8 rounded-lg text-xl font-bold shadow-md transition duration-200 hover-grow" 
               style="background-color: #e9b582;" 
               onmouseover="this.style.backgroundColor='#a5745d'" 
               onmouseout="this.style.backgroundColor='#e9b582';">
                Start
            </a>
        </div>

        <!-- Right Section (Cards) -->
  
    </main>

    <!-- Footer -->
    <footer class="absolute inset-x-0 bottom-0 text-white py-6 mt-20">
        <div class="container mx-auto text-center">
            <div class="flex justify-center space-x-6">
                <a href="#" class="hover:text-yellow-500 transition">
                    <i class="fab fa-facebook-f fa-1x"></i>
                </a>
                <a href="#" class="hover:text-yellow-500 transition">
                    <i class="fab fa-twitter fa-1x"></i>
                </a>
                <a href="#" class="hover:text-yellow-500 transition">
                    <i class="fab fa-instagram fa-1x"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
