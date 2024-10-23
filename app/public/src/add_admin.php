<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Add Bicycle</title>
</head>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('conn.php');
require_once '../../private/functions.php';
require_once '../../private/classes/Admin.php';


use App\Admin;
use function App\private\dd;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$args=[
    'first_name'=> $_POST['first_name']  ,
    'last_name' => $_POST['last_name'] ,
    'email' =>  $_POST['email'] ,
    'username' => $_POST['username'],
    'hashed_password'=> $_POST['hashed_password'],
];
    $admins = Admin::create_admin($args);
}
?>
<body class="bg-yellow-50">
    <header class="bg-yellow-600 text-white py-4">
        <div class="container mx-auto text-center">
        </div>
    </header>
    <div class="container bg-white mx-auto mt-16 py-12 mb-12 shadow-lg rounded-lg ">
        <h1 class="text-3xl font-bold mx-24 mb-4">Add a New Admin</h1>
        <div class="text-left grow">
                <form class="min-w-100 mx-16 mb-12" action="add_admin.php" method="POST">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-gray-700 font-semibold mb-2">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->brand ?? null;  ?>" required>
                        </div>
            
                        <div>
                            <label for="last_name" class="block text-gray-700 font-semibold mb-2">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->model ?? null; ?>"required>
                        </div>
        
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" name="email" id="email" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->year ?? null; ?>"required>
                        </div>
        
                        <div>
                            <label for="username" class="block text-gray-700 font-semibold mb-2">User name</label>
                            <input type="text" name="username" id="username" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->color ?? null; ?>"required>
                        </div>
        
                        <div>
                            <label for="hashed_password" class="block text-gray-700 font-semibold mb-2">Password</label>
                            <input type="password" name="hashed_password" id="hashed_password" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->color ?? null; ?>"required>
                        </div>
        
                      
        
                    <div class="relative">
                        <div class="absolute top-0 right-0 mt-5 inline-flex gap-6">
                            <a href="index_admins.php" class="bg-yellow-600 text-white py-2 px-6 font-bold rounded-lg shadow-md hover:bg-orange-200 transition duration-200">
                                Cancel
                            </a>
                            <button type="submit" class="bg-yellow-600 text-white py-2 px-6 font-bold rounded-lg shadow-md hover:bg-orange-200 transition duration-200">
                                Add Bicycle
                            </button>
                        </div>
                    </div>

                </form>
        </div>
    </div>
    <?php

    ?>
</body>
</html>
