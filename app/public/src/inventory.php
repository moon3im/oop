<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycle Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../private/functions.php';
require_once('conn.php');
require_once '../../private/classes/Bicycle.php';
use App\Bicycle;
use Classes\ElectricalBicycle;
use function App\private\dd;

// $bicycles= new Bicycle(['brand' => 'Speedster' , 'model' => 'VTT' , 'year' => 2022 ,'color' => 'Red', 'weight' => 85.26 , 'price' => '150.00' ,'description' => 'A lightweight hybrid bike for city','condition' => 'good']);

    
$file = fopen("../../private/data.csv","r");
$data = fgetcsv($file, 1000, ",", '"', "\\");

$bicycles=Bicycle::find_all();

// $bicycles = [];
// while($bicycle = fgetcsv($file, 1000, ",", '"', "\\")){ 
//     array_push($bicycles,Bicycle::intstantiate_object_from_csv($bicycle));
// }
?>
<body class="bg-yellow-50">  
    <header class="bg-yellow-600 text-white py-4 px-12 flex">
        <div class="container mx-auto text-left">
            <h1 class="text-3xl font-bold">Bicycles Details</h1>
        </div>
        <a href="home.php" class="text-white font-bold bg-transparent mr-12 py-2 px-4 rounded-lg transition duration-200" 
               style="background-color: transparent;" 
               onmouseover="this.style.backgroundColor='rgba(233, 181, 130, 0.7)'" 
               onmouseout="this.style.backgroundColor='transparent'">
                Home
        </a>
    </header>
    
    <!-- Main Content -->
    <main class="container mx-auto mt-8 ">
    <div class="flex justify-between items-center mb-4">
    <h1 class="text-3xl font-bold">All Available Bikes</h1>
    <a href="add_bicycle.php" class="bg-yellow-600 text-white py-2 px-4 rounded-lg text-xl font-semibold shadow-md hover:bg-green-600 transition duration-200">
        Add Bicycle
    </a>
    </div>

        <table class="bg-white border border-gray-300 w-full mb-8">
         <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
        <th class="py-3 px-6 text-left">Id</th>
            <th class="py-3 px-6 text-left">Brand</th>
            <th class="py-3 px-6 text-left">Model</th>
            <th class="py-3 px-6 text-left">Year</th>
            <th class="py-3 px-6 text-left">Color</th>
            <th class="py-3 px-6 text-left">Gender</th>
            <th class="py-3 px-6 text-left">Weight</th>
            <th class="py-3 px-6 text-left">Category</th>
            <th class="py-3 px-6 text-left">Price</th>
            <th class="py-3 px-6 text-left">Description</th>
            <th class="py-3 px-6 text-left">Condition</th>
            <th class="py-3 px-6 text-left">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
    <?php if (!empty($bicycles)): ?>
                <?php foreach ($bicycles as $bicycle): ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6"><?php echo $bicycle->id; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->brand; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->model; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->year; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->color; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->gender; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->weight_kg; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->category; ?></td>
                        <td class="py-3 px-6"><?php echo '$' . $bicycle->price; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->description; ?></td>
                        <td class="py-3 px-6"><?php echo $bicycle->condition_id; ?></td>
                        <td class="py-3 px-6 text-left">
                        <div class="flex space-x-2">
                         
                                   
                            <a href="details.php?id=<?php echo $bicycle->id ; ?>" class="bg-green-500 text-white p-2 rounded-lg hover:bg-green-700 transition duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                    <path d="M5 12v2a1 1 0 001 1h2l6.586-6.586-3-3L5 12z"/>
                                </svg>
                            </a>

           
                            <a href="delete_bicycle.php?id=<?php echo $bicycle->id; ?>" 
                            class="bg-red-500 text-white p-2 rounded-lg hover:bg-red-700 transition duration-300 ease-in-out" 
                            onclick="return confirm('Are you sure you want to delete this record?');">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 4a1 1 0 00-1 1v11a2 2 0 002 2h6a2 2 0 002-2V5a1 1 0 00-1-1H6zm8 0a2 2 0 011.95 1.516L16 6h-2v9H6V6H4l.05-.484A2 2 0 016 4h8zm-3 6a1 1 0 10-2 0v5a1 1 0 102 0v-5z" clip-rule="evenodd"/>
                                </svg>
                            </a>

                        </div>
                    </td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" class="py-3 px-6 text-center">No records found.</td>
                </tr>
            <?php endif; ?>
            <?php 
            // if(isset($_GET)){
            //     $bicycle::delete($_GET['id']);
            // }
            ?>
    </tbody>
</table>



    </main>

   
  
</body>
</html>
