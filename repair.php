<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair</title>
    <link rel="stylesheet" href="./styles/repair.css">
    <script src="./scripts/repair.js"></script>
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
            <button id="schedule" onclick="scheduleClick()">Schedule now</button>
        </div>
    </div>
    <div class="bg-modal">
        <div class="modal-content">
            <div class="left">
                <h3>Select a product</h3>
                <div class="products">
                    <div class="reficon">
                        <img id="reficon" src="./images/reficon.png" onclick="refClick()"> 
                        <p>Refrigerator</p>
                    </div>
                    <div class="airconicon">
                        <img id="airconicon" src="./images/airconicon.png" onclick="airconClick()">
                        <p>Aircon</p>
                    </div>
                    <div class="washingicon">
                        <img id="washingicon" src="./images/washingicon.png" onclick="washingClick()">
                        <p>Washing Machine</p>
                    </div>
                </div>
                <div class="selectbrands">
                    <h3>Select the brand</h3>
                    <div class="conduraicon">
                        <div class="conduraicon">
                        <img src="./images/conduralogo.png">
                    </div>
                    <div class="lgicon">
                        <img src="./images/lglogo.png">
                    </div>
                    <div class="panasonicicon">
                        <img src="./images/panasoniclogo.png">
                    </div>
                    <div class="toshibaicon">
                        <img src="./images/toshibalogo.png">
                    </div>
                </div>
            </div>
            <div class="right">
            <form class="info" action="/maintainandrepair/repair.php" method="post">
                <label>Product:</label>
                <label class="productlabel" id="productlabel"></label>
                <input class="product" type="hidden" name="product" id="product">
                <label>Brand:</label>
                <label class="productbrand" id="productbrand"></label>
                <input class="brand" type="hidden" name="brand" id="brand">
            </form>
            <button id="close" onclick="closeClick()">CLOSE</button>
            </div>
        </div>
    </div>
</body>
</html>