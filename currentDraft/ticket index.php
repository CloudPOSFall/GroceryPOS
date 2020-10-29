<html>
<head>
  <title>Ticket System Document</title>
</head>
<body>
            <h3> Ticket System </h3>
            <form action="ticketinsert.php" method="post">
              <input type="date" placeholder=" Date " name="date">
              <input type="text" placeholder=" Time " name="time">
              <input type="number" placeholder=" Subtotal " name="sub" step="0.01">
              <input type="number" placeholder=" Total " name="total" step="0.01">
              <input type="number" placeholder=" Tax " name="tax" step="0.01">
              <input type="number" placeholder=" Tax Rate " name="rate" step="0.01">
              <input type="number" placeholder=" Employee ID " name="eid" step="1">
              <input type="number" placeholder=" Inventory Sales ID " name="isid" step="1">
              <button name="submit">Submit</button>
            </form>
</body>
</html>
