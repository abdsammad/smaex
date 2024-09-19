<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="src/output.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Animation for mobile menu */
        .menu-open .line-1 {
            transform: rotate(45deg) translate(5px, 5px);
        }
        .menu-open .line-2 {
            opacity: 0;
        }
        .menu-open .line-3 {
            transform: rotate(-45deg) translate(5px, -5px);
        }
    </style>

    <title>Document</title>
</head>
<body class="bg-gray-200 ">
    <?php include 'include/nav.php'?>
    <?php include 'include/form.php'?>


    <script>
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        let menuOpen = false;

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuOpen = !menuOpen;
            menuButton.classList.toggle('menu-open', menuOpen);
        });
    </script>

</body>
</html>