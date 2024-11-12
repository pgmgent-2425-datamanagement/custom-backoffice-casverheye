<h1 class="text-3xl font-bold mb-6 text-gray-800">Vehicle Details</h1>

<div class="mb-4">
    <a href="/vehicles" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">Go Back</a>
</div>

<form action="/vehicles/<?= $vehicle->id; ?>/edit/" method="POST" enctype="multipart/form-data">
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
        <tbody class="text-gray-700 text-sm">
            <tr class="border-b border-gray-200">
                <td class="py-3 px-6 border-l border-gray-300">
                    <input type="text" name="make" value="<?= $vehicle->make; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter vehicle make">
                </td>
                <td class="py-3 px-6 border-l border-gray-300">
                    <input type="text" name="model" value="<?= $vehicle->model; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter vehicle model">
                </td>
                <td class="py-3 px-6 border-l border-gray-300">
                    <input type="text" name="year" value="<?= $vehicle->year; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter year">
                </td>
                <td class="py-3 px-6 border-l border-gray-300">
                    <input type="text" name="license_plate" value="<?= $vehicle->license_plate; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter license plate">
                </td>
                <td class="py-3 px-6 border-l border-gray-300">
                    <input type="file" name="image_path" accept="image/*" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
                </td>
                <td class="py-3 px-6 border-l border-gray-300 text-center">
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition duration-300 focus:outline-none focus:ring-2 focus:ring-green-500">
                        Update
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<?php if (!empty($vehicle->image_path)): ?>
    <img src="/<?= $vehicle->image_path; ?>" alt="Vehicle Image" class="max-w-xl mt-4">
<?php else: ?>
    <span>No image uploaded</span>
<?php endif; ?>