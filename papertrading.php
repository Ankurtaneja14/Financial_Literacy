<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Trading Dashboard</title>
    <link rel="stylesheet" href="assets/css/paperr.css">
</head>
<body>
    <?php include "sidebar.php"; ?>
    <main>
  <!-- Main content -->
<div class="container">
    <p>Account Balance: <?php echo $balance; ?></p>
    
    <!-- Stock selection dropdown -->
    <label for="stock">Select a Stock:</label>
    <select name="stock" id="stock" required>
        <option value="">Select Stock</option>
        <option value="AAPL">Apple Inc. (AAPL)</option>
        <option value="GOOGL">Alphabet Inc. (GOOGL)</option>
        <!-- Add more options for other stocks as needed -->
    </select>
    
    <!-- Container for displaying real-time stock price and order form -->
    <div id="stockInfoContainer" style="display: none;">
        <!-- Display real-time stock price -->
        <p id="stockPrice">Real-time Stock Price:</p>
        
        <!-- Form for submitting buy/sell orders -->
        <form id="orderForm" action="dashboard.php" method="post">
            <label for="orderType">Order Type:</label>
            <select name="orderType" id="orderType">
                <option value="buy">Buy</option>
                <option value="sell">Sell</option>
            </select>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
            <label for="entryPrice">Entry Price:</label>
            <input type="number" id="entryPrice" name="entryPrice" step="0.01" required>
            <label for="stopLoss">Stop Loss:</label>
            <input type="number" id="stopLoss" name="stopLoss" step="0.01" required>
            <label for="target">Target:</label>
            <input type="number" id="target" name="target" step="0.01" required>
            <button type="submit">Submit Order</button>
        </form>
    </div>
</div>

</main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    // Get references to elements
    var stockSelect = document.getElementById("stock");
    var stockInfoContainer = document.getElementById("stockInfoContainer");

    // Add event listener to the stock select dropdown
    stockSelect.addEventListener("change", function() {
        // Show the stock info container when a stock is selected
        stockInfoContainer.style.display = "block";
        
        // Fetch real-time stock price based on the selected stock (you can implement this part)
        // For example, if you have a function to fetch the price called fetchStockPrice(stockSymbol)
        // You would call it like this:
        // fetchStockPrice(this.value);
    });
});

    </script>
    <script src="assets/js/script.js"></script>
</body>
</html>
