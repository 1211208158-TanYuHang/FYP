<!DOCTYPE html>
<html>
<head>
    <title>Login - Task Manager</title>
    <style>
        body { font-family: Arial; background: #f0f2f5; text-align: center; padding-top: 100px; }
        .box { background: white; width: 300px; margin: auto; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 10px; background: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Task Manager</h2>
        <p>Login to your account</p>
        <form action="dashboard.php" method="POST">
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
//1
