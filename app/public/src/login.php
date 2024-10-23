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
<header class="text-white py-4">
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
            <a href="home.php" class="text-white font-bold py-2 px-8 rounded-lg transition duration-200" 
               style="background-color: #e9b582;" 
               onmouseover="this.style.backgroundColor='#e9b582'" 
               onmouseout="this.style.backgroundColor='#e9b582'">
                Home
            </a>
        </div>
    </div>
</header>


    <!-- Main Content -->
<main class="flex items-top pt-24 pb-80 justify-center min-h-screen">
                <div class="w-full bg-yellow-100 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700" style="opacity: 0.8;">
                     <div class="p-6 space-y-4 md:space-y-4 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Login to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="authentication.php" method="post">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="hashed_password" id="hashed_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                    </div>
                                </div>
                                <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                            </div>
                            <button type="submit" class="w-full text-white bg-yellow-500 hover:bg-yellow-700 font-medium rounded-lg px-5 py-2.5">Log in</button>

                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                            </p>
                        </form>
                    </div>
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
