<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Investment Analysis Tool</title>
<link rel="stylesheet" href="assets/css/paperr.css">
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  .container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    text-align: center;
    color: #333;
  }
  label {
    font-weight: bold;
  }
  input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  button:hover {
    background-color: #45a049;
  }
  #result {
    margin-top: 20px;
    padding: 10px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
</style>
</head>
<body>
<?php include "sidebar.php"; ?>
<main>
    <div class="container">
        <h1>Investment Analysis Tool</h1>
        <label for="initialInvestment">Initial Investment:</label>
        <input type="number" id="initialInvestment" placeholder="Enter initial investment amount">
        <label for="annualReturn">Annual Return (%):</label>
        <input type="number" id="annualReturn" placeholder="Enter annual return rate">
        <label for="years">Investment Period (years):</label>
        <input type="number" id="years" placeholder="Enter investment period">
        <button onclick="calculateInvestment()">Calculate</button>
        <div id="result"></div>
    </div>
</main>
    
<script>
  function calculateInvestment() {
    var initialInvestment = parseFloat(document.getElementById('initialInvestment').value);
    var annualReturn = parseFloat(document.getElementById('annualReturn').value);
    var years = parseFloat(document.getElementById('years').value);
    
    var futureValue = initialInvestment * Math.pow(1 + (annualReturn / 100), years);
    
    var resultElement = document.getElementById('result');
    resultElement.innerHTML = 'Future Value: $' + futureValue.toFixed(2);
  }
</script>
<script src="assets/js/script.js"></script>
</body>
</html>
