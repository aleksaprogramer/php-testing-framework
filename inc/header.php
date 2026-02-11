<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././public/css/style.css">
    <title>PHP Testing</title>
</head>
<body>
    <div class="testing-framework">
        <header>
            <div class="container">
                <h2 class="logo">PHP Testing</h2>
                <h4 id="tests-num">Number of tests: <?php echo $_SESSION['tests']; ?></h4>
                <h4 id="failures-num">Failures: <?php echo $_SESSION['failures']; ?></h4>
            </div>
        </header>
    </div>