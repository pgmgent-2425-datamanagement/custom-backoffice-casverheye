<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($title ?? '') . ' ' . $_ENV['SITE_NAME'] ?></title>
    <link rel="stylesheet" href="/css/output.css?v=<?php if( $_ENV['DEV_MODE'] == "true" ) { echo time(); }; ?>">
</head>
<body>
    <div class="max-w-6xl mx-auto py-10 px-4">
        <header class="flex justify-between items-center">
            <a href="/" class="text-3xl font-bold text-gray-800">RentaCar</a>

            <nav class="flex gap-6">
                <a href="/" class="text-3xl font-bold text-gray-800">Home</a>
                <a href="/vehicles" class="text-3xl font-bold text-gray-800">Vehicles</a>
                <a href="/filemanager" class="text-3xl font-bold text-gray-800">Filemanager</a>
            </nav>
        </header>
    </div>

    <main>
        <div class="max-w-6xl mx-auto px-4">
            <?= $content; ?>
        </div>
    </main>
    
    <footer>
        <div class="max-w-6xl mx-auto py-10 px-4">
            &copy; <?= date('Y'); ?> - RentaCar
        </div>
    </footer>
    <script src="/js/modal.js"></script>
    <script src="/js/searchbar.js"></script>
</body>
</html>
