<h1 class="text-3xl font-bold mb-6 text-gray-800">Total Vehicles: <?= $totalVehicles; ?></h1>

<div class="mb-6">
    <canvas id="totalVehiclesChart" class="w-full h-64"></canvas>
</div>

<h2 class="text-3xl font-bold mb-6 text-gray-800">Recently Added Vehicles</h2>

<table class="min-w-full bg-white border border-gray-200">
    <thead class="bg-gray-200 text-gray-600 uppercase text-sm border border-gray-300">
        <tr>
            <th class="py-3 px-6 border-l border-gray-300">Make</th>
            <th class="py-3 px-6 border-l border-gray-300">Model</th>
            <th class="py-3 px-6 border-l border-gray-300">Year</th>
            <th class="py-3 px-6 border-l border-gray-300">Image</th>
        </tr>
    </thead>
    <tbody class="text-gray-700 text-sm">
        <?php if (!empty($recentVehicles)): ?>
            <?php foreach ($recentVehicles as $vehicle): ?>
                <tr class="border-b border-gray-200">
                    <td class="py-3 px-6 border-l border-gray-300 make"><?= $vehicle['make']; ?></td>
                    <td class="py-3 px-6 border-l border-gray-300 model"><?= $vehicle['model']; ?></td>
                    <td class="py-3 px-6 border-l border-gray-300 year"><?= $vehicle['year']; ?></td>
                    <td class="py-3 px-6 border-l border-gray-300 image_path">
                        <?php if (!empty($vehicle['image_path'])): ?>
                            <img src="<?= $vehicle['image_path']; ?>" alt="Vehicle Image" class="max-w-24 max-h-24">
                        <?php else: ?>
                            <span>No image uploaded</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center py-3 px-6">No recent vehicles found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<div class="mt-6">
    <a href="/vehicles" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">
        View All Vehicles
    </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('totalVehiclesChart').getContext('2d');
    
    const totalVehicles = <?= json_encode($totalVehicles); ?>;

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Vehicles'],
            datasets: [{
                label: 'Vehicle Count',
                data: [totalVehicles],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>