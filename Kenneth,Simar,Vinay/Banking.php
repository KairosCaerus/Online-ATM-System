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
      <center>
      <img src="BOR_Logo.png"
       width="300" height="100"/>
       <br>
       The Bank of Rona has proudly been serving customers since 2020.
      </center>
        <body style="background-color:rgb(244, 226, 198)">

        <h1> Your Account</h1>
        <script>
        alert("Welcome to Bank of Rona. Check out your account")
        </script>
      <?php
        session_start();
        $_SESSION['banking'] = 1000.00;
        $_SESSION['savings'] = 1000.00;
        $_SESSION['creditcard'] = 0.00;
        $banking = 1000.00;
        $savings = 1000.00;
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
