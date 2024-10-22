<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycle Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 bg-cover bg-center z-0" style="background-image: url('../assets/back.png');">

    <!-- Header -->
    <header class="text-white py-4" ">
    <div class="container mx-auto text-left flex justify-between items-center">
        <p class="text-3xl font-bold">Bicycle Store</p>
        <div class="space-x-4">
            <a href="explore.php" class="text-white font-bold bg-transparent py-2 px-4 rounded-lg transition duration-200" 
               style="background-color: transparent;" 
               onmouseover="this.style.backgroundColor='rgba(233, 181, 130, 0.7)'" 
               onmouseout="this.style.backgroundColor='transparent'">
                Explore
            </a>
            <a href="subscribe.php" class="text-white font-bold bg-transparent py-2 px-4 rounded-lg transition duration-200" 
               style="background-color: transparent;" 
               onmouseover="this.style.backgroundColor='rgba(233, 181, 130, 0.7)'" 
               onmouseout="this.style.backgroundColor='transparent'">
                Subscribe
            </a>
            <a href="login.php" class="text-white font-bold py-2 px-8 rounded-lg transition duration-200" 
               style="background-color: #e9b582;" 
               onmouseover="this.style.backgroundColor='#e9b582'" 
               onmouseout="this.style.backgroundColor='#e9b582'">
                Login
            </a>
        </div>
    </div>
</header>






    <!-- Main Content -->
    <main class="flex items-top py-56 justify-center min-h-screen">
        <div class="text-center">
        <h1 class="mb-24 text-8xl font-bold" style="color: #fff;">Find Your Perfect Ride!</h1>
        <a href="inventory.php" class="text-white py-3 px-8 rounded-lg text-xl font-bold shadow-md transition duration-200 mr-4" style="background-color: #e9b582;" onmouseover="this.style.backgroundColor='#a5745d'" onmouseout="this.style.backgroundColor='#e9b582';">
        Shop Bikes
            </a>
            <a href="about_us.php" class="text-white py-3 px-8 rounded-lg text-xl font-bold shadow-md transition duration-200 mr-4" style="background-color: #dec763;" onmouseover="this.style.backgroundColor='#7b7d3f'" onmouseout="this.style.backgroundColor='#dec763';">
            Services
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-grey-100 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Bicycle Store. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
