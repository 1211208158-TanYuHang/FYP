<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Task Manager</title>
    <style>
        body { font-family: Arial; background: #f0f2f5; margin: 0; }
        .nav { background: #2c3e50; color: white; padding: 15px 30px; display: flex; justify-content: space-between; }
        .nav a { color: white; text-decoration: none; margin-left: 15px; }
        .container { padding: 30px; }
        .cards { display: flex; gap: 20px; margin-bottom: 30px; }
        .card { background: white; padding: 20px; border-radius: 8px; flex: 1; text-align: center; }
        .card h3 { margin: 0; color: #7f8c8d; font-size: 14px; }
        .card p { font-size: 24px; margin: 10px 0 0 0; font-weight: bold; color: #999; }
        .section { background: white; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #eee; font-size: 14px; }
        th { background: #f8f9fa; color: #7f8c8d; }
    </style>
</head>
<body>
    <div class="nav">
        <h2>Task Manager</h2>
        <div>
            <a href="dashboard.html">Dashboard</a>
            <a href="add_task.html">Add Task</a>
            <a href="index.html">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="cards">
            <div class="card"><h3>Total Tasks</h3><p>0</p></div>
            <div class="card"><h3>Completed</h3><p>0</p></div>
            <div class="card"><h3>Overdue</h3><p>0</p></div>
        </div>
        <div class="section">
            <h3>Today's Priority Tasks (Rule-based Suggestion)</h3>
            <table>
                <tr><th>Title</th><th>Category</th><th>Priority</th><th>Due Date</th></tr>
                <tr><td colspan="4" style="text-align: center; color: #999; padding: 20px;">No tasks available</td></tr>
            </table>
        </div>
    </div>
</body>
</html>
