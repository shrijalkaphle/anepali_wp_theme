<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aNepali | Blogs</title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/favicon.png' ?>" type="image/png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/tailwind.css' ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        html {
            font-family: 'Inter', sans-serif;
        }
    </style>

    <?php wp_head(); ?>
</head>
<body>
    <!-- navbar -->
     <div class="navbar h-20 border-b">
        <div class="container flex items-center h-full py-5 justify-between">
            <a href="/">
            <img src="<?php echo get_template_directory_uri() . '/assets/logo.svg' ?>" alt="aNepali" class="h-10">
            </a>
        </div>
     </div>    