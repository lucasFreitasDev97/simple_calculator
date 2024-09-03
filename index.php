<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
</head>
<body>
    <div class="main">
        <div class="main-title">
            <h1>Simple Calculator</h1>
        </div>
        <div class="form-container">
            <form method="POST" action="index.php">
                <div class="input-container">
                    <div class="text-input">
                        <label for="number01">Number 01</label>
                        <input type="text" id="number01" name="number01" value="<?php echo isset($_POST['number01']) ? htmlspecialchars($_POST['number01']) : ''; ?>">
                    </div>
                    <br>
                    <div class="text-input">
                        <label for="number02">Number 02</label>
                        <input type="text" id="number02" name="number02" value="<?php echo isset($_POST['number02']) ? htmlspecialchars($_POST['number02']) : ''; ?>">
                    </div>
                </div>
                <br>
                <div>
                    <input type="submit" name="operator" value="+" />
                    <input type="submit" name="operator" value="-" />
                    <input type="submit" name="operator" value="x" />
                    <input type="submit" name="operator" value="÷" />
                </div>
            </form>
            <br>
            <?php include 'simple-calculator.php'; ?>
        </div>
    </div>
</body>
</html>
