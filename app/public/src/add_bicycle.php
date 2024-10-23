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
require_once '../../private/classes/Bicycle.php';
use App\Bicycle;
use Classes\ElectricalBicycle;
use function App\private\dd;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$args=[
    'brand'=> $_POST['brand'] ?? null ,
    'model' => $_POST['model'] ?? null,
    'year' =>  $_POST['year'] ?? "2024",
    'category' => $_POST['category']?? null,
    'gender'=> $_POST['gender']?? null,
    'color' => $_POST['color'] ?? null,
    'price' => $_POST['price'] ?? '0',
    'weight_kg' => $_POST['weight_kg'] ?? '0',
    'condition_id' => $_POST['condition_id'] ?? '3',
    'description' => $_POST['description'] ?? null
];
    $bicycle = new Bicycle($args);
    $bicycle::create($args);
}
?>
<body class="bg-yellow-50">
    <header class="bg-yellow-600 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Bicycle Details</h1>
        </div>
    </header>
    <div class="container bg-white mx-auto mt-16 py-12 mb-12 shadow-lg rounded-lg ">
        <h1 class="text-3xl font-bold mx-24 mb-4">Add a New Bicycle</h1>
        <div class="text-left grow">
                <form class="min-w-100 mx-16 mb-12" action="add_bicycle.php" method="POST">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="brand" class="block text-gray-700 font-semibold mb-2">Brand</label>
                            <input type="text" name="brand" id="brand" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->brand ?? null;  ?>" required>
                        </div>
            
                        <div>
                            <label for="model" class="block text-gray-700 font-semibold mb-2">Model</label>
                            <input type="text" name="model" id="model" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->model ?? null; ?>"required>
                        </div>
        
                        <div>
                            <label for="year" class="block text-gray-700 font-semibold mb-2">Year</label>
                            <input type="number" name="year" id="year" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->year ?? null; ?>"required>
                        </div>
        
                        <div>
                            <label for="color" class="block text-gray-700 font-semibold mb-2">Color</label>
                            <input type="text" name="color" id="color" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->color ?? null; ?>"required>
                        </div>
        
                        <div>
                            <label for="gender" class="block text-gray-700 font-semibold mb-2">Gender</label>
                            <select name="gender" id="gender" class="w-full bg-gray-50 border-gray-400 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" required>
                                <option value="Unisex" selected><?php echo $bicycle->gender ?? null; ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
        
                        <div>
                            <label for="weight" class="block text-gray-700 font-semibold mb-2">Weight</label>
                            <input type="text" name="weight_kg" id="weight" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->weight_kg ?? null; ?>"required>
                        </div>
        
                        <div>
                            <label for="price" class="block text-gray-700 font-semibold mb-2">Price</label>
                            <input type="text" name="price" id="price" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->price ?? null; ?>"required>
                        </div>
                     
                        <div>
                            <label for="category" class="block text-gray-700 font-semibold mb-2">Category</label>
                            <select name="category" id="category" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" required> 
                                <option value="city">City</option>
                                <option value="mountains">Mountains</option>
                                <option value="hybrid">Hybrid</option>
                            </select>
                        </div>
                        <div>
                            <label for="condition" class="block text-gray-700 font-semibold mb-2">Condition</label>
                            <select name="condition_id" id="condition_id" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" required> 
                                <option value="1">1 : Bad</option>
                                <option value="2">2 : Fair</option>
                                <option value="3">3 : Good</option>
                                <option value="4">4 : Very Good</option>
                                <option value="5">5 : Excelent</option>
                            </select>
                        </div>
        
                        <div>
                            <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                            <textarea name="description" id="description" class="w-full bg-gray-50   border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" required><?php echo $bicycle->description ?? null; ?></textarea>
                        </div>
                    </div>
        
                    <div class="relative">
                        <div class="absolute top-0 right-0 mt-5 inline-flex gap-6">
                            <a href="inventory.php" class="bg-yellow-600 text-white py-2 px-6 font-bold rounded-lg shadow-md hover:bg-orange-200 transition duration-200">
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
