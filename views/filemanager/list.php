<div class="overflow-x-auto">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">File Manager</h1>

    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-200 text-gray-600 uppercase text-sm border border-gray-300">
            <tr>
                <th class="py-3 px-6 text-left border-l border-gray-300">Name</th>
                <th class="py-3 px-6 text-left border-l border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-700 text-sm">
            <?php foreach ($list as $item) :
                if ($item !== '.' && $item !== '..') : ?>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-6 border-l border-gray-300"><?= $item; ?></td>
                        <td class="py-3 px-6 border-l border-gray-300">
                            <a href="/filemanager/delete/<?= $item; ?>" class="text-red-500 hover:text-red-700 transition duration-300">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
