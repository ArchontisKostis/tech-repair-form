<?php include 'backend/sendMail.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archo | Tech Repair Form</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="">
    </header>
    <main>
        <form action="" method="post">
            <div id="form-container">
                <h1> ΑΝΑΦΟΡΑ ΕΠΙΣΚΕΥΗΣ </h1>

                <label for="name">Όνομα: <i>*</i></label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email: <i>*</i></label>
                <input type="email" name="email" id="email" required>

                <label for="phoneNumber">Τηλέφωνο: </label>
                <input type="tel" name="phone-num" id="phoneNumber" required>

                <div id="device-details">
                    <div class="select-input">
                        <label for="device">Τύπος Συσκευής: <i>*</i></label>
                        <select name="device" id="device" required>
                            <option selected="true" disabled="disabled" value="0">ΠΑΡΑΚΑΛΩ ΕΠΙΛΕΞΤΕ</option> 
                            <option value="Smartphone">Smartphone</option>
                            <option value="Desktop">Σταθερός Η/Υ</option>
                            <option value="Laptop">Laptop</option>
                        </select>
                    </div>

                    <div class="select-input">
                        <label for="problem">Τύπος Προβλήματος: <i>*</i></label>
                        <select name="problem" id="problem" required>
                            <option selected="true" disabled="disabled">ΠΑΡΑΚΑΛΩ ΕΠΙΛΕΞΤΕ</option> 
                            <option value="broken-screen">Σπασμένη Οθόνη</option>
                            <option value="speed">Ταχύτητα</option>
                            <option value="upgrade">Αναβάθμιση</option>
                            <option value="high-temp">Θερμοκρασία</option>
                            <option value="other">Άλλο (Γράψτε στα σχόλια)</option>
                        </select>
                    </div>
                </div>

                <label for="comments">Σχόλια:</label>
                <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
            </div>
            
            <button type="submit" name="submit" action="sendMail.php">ΑΠΟΣΤΟΛΗ</button>
        </form>
    </main>
    <footer>
        <h2>A Web Form by Archontis Kostis</h2>
        <h2>Copyright 2022 | Everything is reserved so you can't sit here :P</h2>
    </footer>
</body>
</html>