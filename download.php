<?php
function downloadFile($url, $destination) {
    $fileContent = file_get_contents($url);

    if ($fileContent !== false) {
        $result = file_put_contents($destination, $fileContent);

        if ($result !== false) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $downloadUrl = $_POST['download_link'];

    $destinationPath = 'C:\xampp\htdocs\Downloads';

    $fileExtension = pathinfo($downloadUrl, PATHINFO_EXTENSION);

    $randomFilename = uniqid() . '.' . $fileExtension;

    $destinationFilePath = $destinationPath . DIRECTORY_SEPARATOR . $randomFilename;

    $downloadResult = downloadFile($downloadUrl, $destinationFilePath);

    if ($downloadResult) {
        echo '<script>';
        echo 'alert("File downloaded successfully");';
        echo 'window.location="index.php";';
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Failed to download the file");';
        echo 'window.location="index.php";';
        echo '</script>';
    }
}
?>
