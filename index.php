<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikZ Gallery</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h1><a href="index.php">TikZ Gallery</a></h1>
        <a href="https://github.com/gerauber"><img src="tikz/ge_coupling.svg" alt="Ge logo"></a>
    </header>

    <main>
        <?php
            // Check if 'page' is passed in the URL
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                // Display content based on the value of 'page'
                if ($page == 'tikz') {
                    include('tikz.php');
                } elseif ($page == 'feynman') {
                    include('feynman.php');
                } else {
                    // Default case: if the 'page' value is unknown
                    echo "<p>Error 404.</p>";
                    echo "<h1>Page not found</h1>";
                }
            } else {
                include('home.php');
            }
        ?>

    </main>
</body>
<footer>
    <div class="footer-quote">
        <p>"Crafting ideas into visuals, one node at a time."</p>
    </div>
    <div class="footer-contact">
        <p>Contact: <a href="mailto:g.raeuber@syntaxerror.ch">g.raeuber@syntaxerror.ch</a></p>
    </div>
    <div class="footer-copyright">
        <p>&copy; 2024 TikZ Gallery. All rights reserved.</p>
    </div>
</footer>


</html>
