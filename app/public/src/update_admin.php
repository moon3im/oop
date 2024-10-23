
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
require_once '../../private/classes/Admin.php';
use App\Admin;

use function App\private\dd;
use function App\private\handle_404;

if(isset($_GET['id']) && !empty($_GET['id'])){
    $bicycle = Admin::find_admin_by_id($_GET['id']);
}else {
    handle_404();
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
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">First name</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->first_name; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Lase name</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->last_name; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Email</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->email; ?></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6 border-b font-bold text-yellow-600">Username</td>
                            <td class="py-3 px-6 border-b font-bold"><?php echo $bicycle->username; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
            <div class="overflow-x-auto text-left grow">
                <form class="min-w-100 mx-16 " action="admin_update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $bicycle->id; ?>"> 
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-gray-700 font-semibold mb-2">First name</label>
                            <input type="text" name="first_name" id="first_name" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->first_name; ?>">
                        </div>
        
                        <div>   
                            <label for="last_name" class="block text-gray-700 font-semibold mb-2">Last name</label>
                            <input type="text" name="last_name" id="last_name" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->last_name; ?>">
                        </div>
        
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" name="email" id="email" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->email; ?>">
                        </div>
        
                        <div>
                            <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                            <input type="text" name="username" id="color" class="w-full bg-gray-50 border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring focus:ring-blue-200" value="<?php echo $bicycle->username; ?>">
                        </div>
                     
                        <div class="relative">
                            <div class="absolute top-0 right-0 mt-16 inline-flex gap-6">
                                <a href="index_admins.php" class="bg-yellow-600 text-white py-2 px-6 font-bold rounded-lg shadow-md hover:bg-orange-200 transition duration-200">
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
