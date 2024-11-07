
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Kata Sandi</title>
</head>
<body>
    <h1>Reset Kata Sandi</h1>
    <form action="password_reset_request.php?token=<?php echo htmlspecialchars($_GET['token']); ?>" method="POST">
        <label for="new_password">Kata Sandi Baru:</label>
        <input type="password" id="new_password" name="new_password" required>
        <br>
        <input type="submit" value="Reset Kata Sandi">
    </form>
</body>
</html>