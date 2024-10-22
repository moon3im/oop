<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('conn.php');
require_once '../../private/functions.php';
require_once '../../private/classes/Bicycle.php';
use App\Bicycle;

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
        $bicycle::update($args);
}   
?>
<body class="bg-orange-50">
    <header class="bg-yellow-600 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Bicycle Details</h1>
        </div>
    </header>

<main class="container bg-white mx-auto my-10 p-6 shadow-lg rounded-lg">
        <h1 class="text-4xl font-bold mb-6 mt-6 ml-2 text-left">Bicycle Record Update</h1>
        <div class="flex mb-8">
            <div class="text-left grow">
                <table class="min-w-full mx-2 bg-orange-50 border text-center">
                    <thead class="text-center">
                        <tr class="text-center">
                            <th class="py-3 px-6 text-left text-2xl font-bold text-center text-yellow-600">Field</th>
                            <th class="py-3 px-6 text-left text-2xl font-bold text-center text-yellow-600">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Id</td>
                            <td class="py-3 px-6 border-b font-bold "><?php echo $bicycle->id; ?></td> <!-- Example record value -->
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Brand</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->brand; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Model</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->model; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Year</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->year; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Color</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->color; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Gender</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->gender; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Weight</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->weight_kg . "kg"; ?> </td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Price</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo '$' . $bicycle->price; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Description</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->description; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Condition</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->condition_id; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
            <div class="overflow-x-auto text-left grow">
                <form class="min-w-100 mx-16 " action="details.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $bicycle->id; ?>"> <!-- Replace with dynamic id value -->
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="brand" class="block text-gray-700 font-semibold mb-2">Brand</label>
                            <input type="text" name="brand" id="brand" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->brand; ?>">
                        </div>
        
                        <div>
                            <label for="model" class="block text-gray-700 font-semibold mb-2">Model</label>
                            <input type="text" name="model" id="model" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->model; ?>">
                        </div>
        
                        <div>
                            <label for="year" class="block text-gray-700 font-semibold mb-2">Year</label>
                            <input type="number" name="year" id="year" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->year; ?>">
                        </div>
        
                        <div>
                            <label for="color" class="block text-gray-700 font-semibold mb-2">Color</label>
                            <input type="text" name="color" id="color" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->color; ?>">
                        </div>
        
                        <div>
                            <label for="gender" class="block text-gray-700 font-semibold mb-2">Gender</label>
                            <select name="gender" id="gender" class="w-full bg-gray-50 border-gray-400 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
                                <option value="Unisex">Unisex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
        
                        <div>
                            <label for="weight" class="block text-gray-700 font-semibold mb-2">Weight</label>
                            <input type="text" name="weight_kg" id="weight_kg" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->weight_kg . "kg"; ?>">
                        </div>
        
                        <div>
                            <label for="price" class="block text-gray-700 font-semibold mb-2">Price</label>
                            <input type="text" name="price" id="price" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo '$' . $bicycle->price; ?>">
                        </div>

                        <div>
                            <label for="condition_id" class="block text-gray-700 font-semibold mb-2">Condition</label>
                            <select name="condition_id" id="condition_id" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200"> 
                                <option value="1">1 : Bad</option>
                                <option value="2">2 : Fair</option>
                                <option value="3">3 : Good</option>
                                <option value="4">4 : Very Good</option>
                                <option value="5">5 : Excelent</option>
                            </select>
                        </div>
        
                        <div>
                            <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                            <textarea name="description" id="description" class="w-full bg-gray-50   border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200"><?php echo $bicycle->description; ?></textarea>
                        </div>
                    </div>
        
                    <div class="relative">
                        <div class="absolute top-0 right-0 mt-5 inline-flex gap-6">
                            <a href="inventory.php" class="bg-yellow-600 text-white py-2 px-6 font-bold rounded-lg shadow-md hover:bg-orange-200 transition duration-200">
                                Cancel
                            </a>
                            <button type="submit" class="bg-yellow-600 text-white py-2 px-6 font-bold rounded-lg shadow-md hover:bg-orange-200 transition duration-200">
                                Update Bicycle
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    

    </main>


</body>
</html>
