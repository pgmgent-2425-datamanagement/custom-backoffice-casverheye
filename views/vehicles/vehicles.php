<div class="overflow-x-auto">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Vehicle Management</h1>

    <div class="mb-4">
        <button id="openModal" class="bg-green-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-green-600 transition duration-200">Add New Vehicle</button>
    </div>

    <div class="flex gap-4">
        <div class="mb-4 flex items-center">
            <input type="text" id="searchBar" class="max-w-xs border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500" placeholder="Search by Make or Model...">
            <button id="searchButton" class="bg-blue-500 text-white font-semibold p-2 rounded-md hover:bg-blue-600 transition duration-200">Search</button>
        </div>

        <div class="mb-4 flex items-center">
            <input type="text" id="licensePlateSearchBar" class="max-w-xs border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500" placeholder="Search by License Plate...">
            <button id="licensePlateSearchButton" class="bg-blue-500 text-white font-semibold p-2 rounded-md hover:bg-blue-600 transition duration-200">Search</button>
        </div>
    </div>


    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-200 text-gray-600 uppercase text-sm border border-gray-300">
            <tr>
                <th class="py-3 px-6 text-left border-l border-gray-300">Make</th>
                <th class="py-3 px-6 text-left border-l border-gray-300">Model</th>
                <th class="py-3 px-6 text-left border-l border-gray-300">Year</th>
                <th class="py-3 px-6 text-left border-l border-gray-300">License Plate</th>
                <th class="py-3 px-6 text-left border-l border-gray-300">Image</th>
                <th class="py-3 px-6 text-left border-l border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody id="vehicleTableBody" class="text-gray-700 text-sm ">
            <?php foreach ($vehicles as $vehicle): ?>
                <?php include 'partials/vehicle.php'; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div id="vehicleModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-md max-w-2xl w-full px-12 py-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-700 text-center">Add New Vehicle</h2>
        <form action="/vehicles" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="make" class="block text-gray-600 font-medium mb-1">Make:</label>
                <input type="text" name="make" required class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500" placeholder="e.g. Toyota">
            </div>
            <div class="mb-4">
                <label for="model" class="block text-gray-600 font-medium mb-1">Model:</label>
                <input type="text" name="model" required class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500" placeholder="e.g. Prius">
            </div>
            <div class="mb-4">
                <label for="year" class="block text-gray-600 font-medium mb-1">Year:</label>
                <input type="number" name="year" required class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500" placeholder="e.g. 2020">
            </div>
            <div class="mb-4">
                <label for="license_plate" class="block text-gray-600 font-medium mb-1">License Plate:</label>
                <input type="text" name="license_plate" required class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500" placeholder="e.g. ABC123">
            </div>
            <div class="mb-4">
                <label for="vehicle_type" class="block text-gray-600 font-medium mb-1">Vehicle Type:</label>
                <select name="vehicle_type_id" required class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                    <option value="">Select a vehicle type</option>
                    <option value="1">Car</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="image_path" class="block text-gray-600 font-medium mb-1">Image:</label>
                <input type="file" name="image_path" accept="image/*" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex justify-between">
                <button type="submit" class="bg-green-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-green-600 transition duration-200">Add Vehicle</button>
                <button type="button" id="closeModal" class="text-red-500 hover:underline">Cancel</button>
            </div>
        </form>
    </div>
</div>