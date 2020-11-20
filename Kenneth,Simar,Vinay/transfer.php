<?php
$money=$transfer="";
if (empty($_POST["transfer"])) {
  $transfer = "";
} else {
  $transfer = ($_POST["transfer"]);
}

if (empty($_POST["money"])) {
  $money = "";
} else {
  $money = ($_POST["money"]);
}

?>
<HTML>
    <HEAD>
    <TITLE> Transfer</TITLE>
    </HEAD>
    <BODY>
        <h1 class ="custom">Transfer Sheet</h1>
        <p>Where Would You Like To Transfer:</p>
        <form method="post">
          <input type="radio" name="money" <?php if (isset($money) && $money=="banking") echo "checked";?> value="banking">
          Banking<br>
          <input type="radio" name="money" <?php if (isset($money) && $money=="savings") echo "checked";?> value="savings">
          Savings<br>
          <input type="radio" name="money" <?php if (isset($money) && $money=="creditcard") echo "checked";?> value="creditcard">
          Credit Card<br>
          <p>How Much Would You Like To Transfer:</p>
          Transfer: <input type="number" id="transfer" name="transfer">
          <input type="submit" name="sumbit" value="Submit">
        </form>
        <button id="myButton" class="float-left submit-button" >HomePage</button>

        <script type="text/javascript">
          document.getElementById("myButton").onclick = function () {
          location.href = "http://localhost/Banking.php";
        };
        </script>
    </BODY>
</HTML>

<html>
<body>
  <?php
    session_start();
    if (isset($money) && $money=="banking") {
    $_SESSION['banking'] = $_SESSION['banking'] + $_POST["transfer"];
    echo "Total: ", $_SESSION['banking'];
  }
  if (isset($money) && $money=="savings") {
    $_SESSION['savings'] = $_SESSION['savings'] + $_POST["transfer"];
    echo "Total: ", $_SESSION['savings'];
  }
  if (isset($money) && $money=="creditcard") {
    $_SESSION['creditcard'] = $_SESSION['creditcard'] + $_POST["transfer"];
    echo "Total: ", $_SESSION['creditcard'];
  }
  ?>
</body>
</html>
