<tr class="border-b border-gray-200">
    <td class="py-3 px-6 border-l border-gray-300 make"><?= $vehicle->make; ?></td>
    <td class="py-3 px-6 border-l border-gray-300 model"><?= $vehicle->model; ?></td>
    <td class="py-3 px-6 border-l border-gray-300 year"><?= $vehicle->year; ?></td>
    <td class="py-3 px-6 border-l border-gray-300 license_plate"><?= $vehicle->license_plate; ?></td>
    <td class="py-3 px-6 border-l border-gray-300 image_path">
        <?php if (!empty($vehicle->image_path)): ?>
            <img src="<?= $vehicle->image_path; ?>" alt="Vehicle Image" class="max-w-16 max-h-16">
        <?php else: ?>
            <span>No image uploaded</span>
        <?php endif; ?>
    </td>
    <td class="py-3 px-2 border-l border-gray-300 max-w-[100px]">
        <div class="flex items-center space-x-1.5">
            <a href="/vehicles/<?= $vehicle->id; ?>/edit" class="inline-block bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600 transition duration-200">
                Edit
            </a>
            <form action="/vehicles/<?= $vehicle->id; ?>/delete" method="POST" class="inline-block m-0 p-0">
                <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 transition duration-200">
                    Delete
                </button>
            </form>
        </div>
    </td>
</tr>
