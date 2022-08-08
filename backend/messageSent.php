<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archo | Tech Repair Form</title>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <img src="../img/logo.png" alt="Logo Image">
    </header>
    <main class="message-prompt">
        <?php
            if($_SESSION["sent"]){
                echo "<img src='../img/messageIcon.png' alt='Message Received Icon' class='message-icon'>";
            }
            else {
                echo "<img src='../img/error-img.png' alt='Message Failed Icon' class='message-icon'>";
            }
        ?>
        
        <h1 class="message-info-header">
            <?php 
                if($_SESSION["sent"]){
                    echo "Το μύνημα σας βρίσκεται καθ'οδόν!";
                }
                else {
                    echo "Ουπς! Κάτι πήγε στραβά!!";
                }
            ?>  
            
        </h1>
        <p class="message-info-details">

            <?php 
                if($_SESSION["sent"]){
                    echo "
                        Λάβαμε το μύνημα σας για την επισκευή<br>
                        της συσκευής σας και θα επικοινωνήσουμε<br>
                        μαζι σας το συντομότερο δυνατόν!
                        <br><br><br>
                        Αν χρειάζεστε οτιδήποτε άλλο μήν<br>
                        διστάσετε να επικοινωνήσετε μαζί μάς στο:<br>
                        <i>697 099 0987</i>";
                }
                else {
                    echo "
                    Δυστυχώς δεν μπορέσαμε να λάβουμε το<br>
                    μύνημα σας. Παρακαλούμε ελέγξτε τα<br>
                    στοιχεία που υποβάλατε στην φόρμα<br>
                    και προσπαθήστε ξανά.
                    <br><br><br>
                    Εναλλακτικά επικοινωνήστε μαζί μας  στην διεύθυνση:<br>
                    <i>archontisfreelance@gmail.com</i><br>
                    ή τηλεφωνικά στο:<br>
                    <i>697 099 0987</i>
                    ";
                }
            ?>  
             
            
        </p>

        <div class="banner">
            <img src="../img/screen.png" alt="Banner Image" id="banner-img">
            <div class="terminal">
                <h2 class="terminal-text">> Επισκευές Η/Υ </h2>
            </div>
        </div>
    </main>
    <footer>
        <h2>A Web Form by Archontis Kostis</h2>
        <h2>Copyright 2022 | Everything is reserved so you can't sit here :P</h2>
    </footer>

    <script>
         const instance = new Typewriter('.terminal-text', {
      strings: ['> Επισκευές Η/Υ<br>> Αναβαθμίσεις Η/Υ<br>> Επισκευές Smartphone'],
      autoStart: true,
      loop: true,
    });
    </script>
</body>
</html>

