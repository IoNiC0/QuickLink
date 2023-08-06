<!DOCTYPE html>
<html>
<head>
    <title>File Downloader</title>
    <style>
        h1{
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            margin: 0;
        }
        .form-container {
            width: 25%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container label {
            display: block;
            margin-bottom: 10px;
        }
        .form-container input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
    <h1>File Download</h1>
    <br>   
    <form method="post" action="download.php" >
            <label for="download_link">Enter the download link:</label>
            <input type="text" name="download_link" id="download_link" required autocomplete="off">
            <button type="submit">Download</button>
        </form>
    </div>
</body>
</html>
