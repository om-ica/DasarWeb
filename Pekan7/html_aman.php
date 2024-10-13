<html>
<head>
    <title>Html Aman</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Masukkan Inputan:</label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Masukkan email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" id="submit">
    </form>
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["input"]) && isset($_POST["email"])) {
                $input = htmlspecialchars($_POST["input"], ENT_QUOTES, 'UTF-8');
                $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "Input yang disanitasi: " . $input . "<br>";
                    echo "Email yang disanitasi dan valid: " . $email;
                } else {
                    echo "Email tidak valid.";
                }
            } else {
                echo "Input atau email belum diisi dengan benar.";
            }
        }
    ?>
</body>
</html>