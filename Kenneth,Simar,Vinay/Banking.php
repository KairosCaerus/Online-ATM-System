<HTML>
    <HEAD>
    <TITLE> Balance</TITLE>
    <link rel="stylesheet" href="style.css" />
    <STYLE>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
        }
        th {
          text-align: left;
        }
    </STYLE>
    </HEAD>
    <BODY>
      <?php
        session_start();
        $_SESSION['banking'] = 327.10;
        $_SESSION['savings'] = 530.45;
        $_SESSION['creditcard'] = 0.00;
        $banking = 327.10;
        $savings = 530.45;
        $creditcard = 0.00;

      ?>
        <h1 class ="custom">Balance and Statement</h1>
        <h4> Hello, User: </h4>
        <p2> Personal Accounts</p2> <br>
    <table style="width:60%">
        <tbody><tr>
          <th>Adv Plus Banking - 2356</th>
          <td>$<?php echo $_SESSION['banking']?></td>
        </tr>
        <tr>
          <th>Advantage Savings - 2366</th>
          <td>$<?php echo $_SESSION['savings']?></td>
        </tr>
        <tr>
            <th>Cash Rewards World Mastercard Card - 3348</th>
            <td>$<?php echo $_SESSION['creditcard']?></td>
        </tr>
      </tbody></table>
      <br>
      <button onclick="account()">Open Up New Account</button>
      <button onclick="billpay()">Pay Bills</button>
      <br>
      <button onclick="support()">Help & Support</button>
      <script src="Script.js"></script>
      <button id="myButton" >Transfer To Another Account</button>
      <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/transfer.php";
      };
    </script>
    </BODY>
    </HTML>
