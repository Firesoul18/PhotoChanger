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
            <input type="file" name="photo" id="photo" required>
            <div>
                <label for="quality">Quality:</label>
                <select id="quality" name="quality" class="quality" required>
                    <option value="manual" class="manual">
                        manual
                    </option>
                    <option value="10">
                        10%
                    </option>
                    <option value="20">
                        20%
                    </option>
                    <option value="30">
                        30%
                    </option>
                    <option value="40">
                        40%
                    </option>
                    <option value="50">
                        50%
                    </option>
                    <option value="60">
                        60%
                    </option>
                    <option value="70">
                        70%
                    </option>
                    <option value="80">
                        80%
                    </option>
                    <option value="90">
                        90%
                    </option>
                    <option value="100" selected>
                        100%
                    </option>
                </select>
            </div>

            <div class="manual-entry">
                <label for="manual-data">Value</label>
                <input type="number" id="manual-data" value=100 max="100" min="0" class="manual-data" name="manual-data">
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

    <script src="script.js"></script>

</body>

</html>