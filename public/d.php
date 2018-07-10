<?php
require "./includes/head.php";
$file = $_GET["f"];
$url = "/download.php?f=" . $file;
$filepath = "./download/" . $file;
$isValid = isset($file) && file_exists($filepath);
?>
<body>
<main class="download">
    <h1 class="title"><?php
        if ($isValid) {
            echo "> " . $file;
        } else {
            echo "Datei wurde nicht gefunden";
        }
        ?></h1>
    <?php if ($isValid): ?>
        <a href="<?php echo $url ?>" class="download-link" target="_blank">Download</a>
    <?php endif ?>
</main>
</body>