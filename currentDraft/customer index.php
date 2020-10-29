<!DOCTYPE html>
<html>
<head>
  <title>Customer Document</title>
</head>
<body>
            <h3> Customer Registration Form </h3>
            <form action="customerinsert.php" method="post">
              <input type="email" placeholder=" Email " name="email">
              <input type="password" placeholder=" Password " name="password">
              <input type="text" placeholder=" First Name " name="fname">
              <input type="text" placeholder=" Middle Initial " name="mi">
              <input type="text" placeholder=" Last Name " name="lname">
              <input type="number" placeholder=" Phone Number " name="number">
              <input type="number" placeholder=" Rewards " name="rewards" step="1">
              <button name="submit">Submit</button>
            </form>
</body>
</html>
