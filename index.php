<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Photos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <nav>
            <h1>Change Photos</h1>
        </nav>
    </header>
    <form method="post" action="handler.php" enctype="multipart/form-data">
        <div class="file-chooser">
            <label for="photo"><h3>Choose File to change to pdf</h3></label>
            <input type="file" name="photo" id="photo" class="photo" accept="image/*" required>

            <div class="qual">
                <label for="quality">Quality(%)</label>
                <input type="number" id="quality" value=100 max="100" min="0" class="quality" name="quality">
            </div>
            <div class="size">
                <label for="width">Width:</label>
                <input type="number" min=10 name="width" id="width" required>
                <label for="height">Height:</label>
                <input type="number" min=10 name="height" id="height" required>
                <label for="keep">Keep Aspect Ratio</label>
                <input type="checkbox" name="keep" id="keep" checked>
            </div>
            <div>
                <label for="ret-type">Return Type</label>
                <select name="ret-type" id="ret-type" required>
                    <option value="jpg">JPG</option>
                    <option value="jpeg">JPEG</option>
                    <option value="png">PNG</option>
                    <option value="pdf">PDF</option>
                </select>
            </div>
            <div class="btns">
                <button type="submit" class="submit" name="submit">Submit</button>
                <button type="reset" class="reset">Reset</button>
            </div>
        </div>
    </form>
    <p class="warning"></p>
</body>
<script src="script.js"></script>
</html>