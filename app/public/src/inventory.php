<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycle Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../private/functions.php';
require_once '../../private/classes/Bicycle.php';
use App\Bicycle;
use Classes\ElectricalBicycle;
use function App\private\dd;

// $bicycles= new Bicycle(['brand' => 'Speedster' , 'model' => 'VTT' , 'year' => 2022 ,'color' => 'Red', 'weight' => 85.26 , 'price' => '150.00' ,'description' => 'A lightweight hybrid bike for city','condition' => 'good']);

    
$file = fopen("../../private/data.csv","r");
$data = fgetcsv($file, 1000, ",", '"', "\\");

$bicycles = [];
while($bicycle = fgetcsv($file, 1000, ",", '"', "\\")){ 
    array_push($bicycles,Bicycle::intstantiate_object_from_csv($bicycle));
}
?>
<body class="bg-gray-100">  
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Bicycle Inventory</h1>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="container mx-auto mt-8 ">
    <div class="flex justify-between items-center mb-4">
    <h1 class="text-3xl font-bold">All Available Bikes</h1>
    <a href="add_bicycle.php" class="bg-green-500 text-white py-2 px-4 rounded-lg text-xl font-semibold shadow-md hover:bg-green-600 transition duration-200">
        Add Bicycle
    </a>
</div>

        <table class="bg-white border border-gray-300 w-full mb-8">
         <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">Brand</th>
            <th class="py-3 px-6 text-left">Model</th>
            <th class="py-3 px-6 text-left">Year</th>
            <th class="py-3 px-6 text-left">Color</th>
            <th class="py-3 px-6 text-left">Weight</th>
            <th class="py-3 px-6 text-left">Price</th>
            <th class="py-3 px-6 text-left">Description</th>
            <th class="py-3 px-6 text-left">Condition</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
    <?php if (!empty($bicycles)): ?>
                <?php foreach ($bicycles as $bicycle): ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6"><?php echo $bicycle->brand; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->model; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->year; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->color; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->weight; ?></td>
                        <td class="py-3 px-6"><?php echo '$' . $bicycle->price; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->description; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->condition; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" class="py-3 px-6 text-center">No records found.</td>
                </tr>
            <?php endif; ?>
    </tbody>
</table>

    </main>

   
  
</body>
</html>
