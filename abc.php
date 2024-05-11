<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Calculator</title>
    <link rel="stylesheet" href="a.css">
    <link rel="stylesheet" href="assets/css/paperr.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <main>
    <div class="container">
        <h1>Budget Calculator</h1>
        <div class="input-container">
            <label for="income">Income:</label>
            <input type="number" id="income" placeholder="Enter your income">
        </div>
        <div id="expenseCategories">
            <div class="input-container">
                <label for="category1">Category 1:</label>
                <input type="text" id="category1" placeholder="Expense category">
                <input type="number" id="amount1" placeholder="Amount">
                <button onclick="removeCategory(this)">Remove</button> <!-- Add Remove button -->
            </div>
            
        </div>
        <button onclick="addExpenseCategory()">Add Category</button>
        
        <button onclick="calculateBudget()">Calculate</button>
        <div id="result"></div>
    </div>
    </main>
    <script src="a.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
