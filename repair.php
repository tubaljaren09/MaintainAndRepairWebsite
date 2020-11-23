<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair</title>
    <link rel="stylesheet" href="./styles/repair.css">
</head>
<body>
    <div class="main-container">
        <div class="navbar">
            <ul>
                <li><img src="./images/mainlogo.png"></li>
                <li><a class="nav" href="index.php">HOME</a></li>
                <li><a class="nav active" href="repair.php">REPAIR</a></li>
                <li><a class="nav" href="maintain.php">CLEAN & MAINTAIN</a></li>
            </ul>
        </div>
        <div class="greetings">
            <h3>Trust the Appliance Repair Experts</h3>
            <p>We’re in your neighborhood and we’ll fix it, no</p>
            <p>matter where you bought it.</p>
            <button id="schedule">Schedule now</button>
        </div>
    </div>
    <div class="bg-modal">
        <div class="modal-content">
            <div class="row">
                <div class="column left" style="background-color:#aaa;">
                    <h2>Select a product</h2>
                    <div class="reficon">
                        <img src="./images/reficon.png">
                        <p>Refrigerator</p>
                    </div>
                    <div class="washingicon">
                        <img src="./images/washingicon.png">
                        <p>Washing Machine</p>
                    </div>
                    <div class="airconicon">
                        <img src="./images/airconicon.png">
                        <p>Aircon</p>
                    </div>
                </div>
                <div class="column right" style="background-color:#bbb;">
                    <button id="close">CLOSE</button>
                    <h2>Information</h2>
                    <p>Some text..</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./scripts/repair.js"></script>
</body>
</html>