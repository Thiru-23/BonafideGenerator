<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bona-Fide Certificate Request</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h2>Bona-Fide Certificate Request</h2>
        <form action="at.php" method="post">
            <label for="reg_number">Registered Number:</label>
            <input type="text" name="reg_number" id="txt" required>

            <label for="reason">Reason for Certificate:</label>
            <textarea name="reason" rows="4" id="txtp" required></textarea>

            <button type="submit" class="bt inactivecolor" id="bt">Submit Request</button>
        </form>
    </div>
    <script src="js/jquery.js"></script>
        <script src="js/login.js"></script>
</body>
</html>
