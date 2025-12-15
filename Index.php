<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel = "stylesheet" href ="assest/style.css">
</head>
<body>
  <div id="parent-container">
    <div id= "child-container">
      <h1 class ="header">Leanding System</h1>
      <input class = "input" type = "number" min = "500" max = "50000" step =1 placeholder="Please Input Value of Leading Money(500-50000)" require>
      <select  class ="input"require>
        <option value="1">1 month</option>
        <option value="3">3 month</option>
        <option value="6">6 month</option>
        <option value="9">9 month</option>
        <option value="12">12 month</option>  
        <option value="24">24 month</option>
      </select>
      <button class = "btnlend">Lend Money</button>
    </div>
    <div class = resultbox>
      <p><><strong>Monthly Interest ₱</strong></p>
      <p><strong>Total Interest</strong></p>
      <p><strong>Total Amount To Pay</strong></p>
      <p><strong>Month</strong></p>
    </div>
  </div>
</body>
</html>