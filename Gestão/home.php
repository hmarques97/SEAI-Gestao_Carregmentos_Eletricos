<?php
include "load_colors.php";


if (isset($_SESSION['id']) && isset($_SESSION['username'])) {


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>

    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="javascript_states.js"></script>

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  </head>
  <body >
    <div class="bar">
      <div class="logo">
        <img src="logo_seai.png" alt="">
      </div>
      <div class="user">
        <h1 class="greets">Bem vindo, <?php echo ($_SESSION['username']) ; ?></h1>
        <a class="logout"href="logout.php">LOGOUT</a>
      </div>

    </div>
<div class="container">
  <div class="options">
    <div class="nav-bar">
      <ul>
        <a href="home.php"><li class="active">Home</li></a>
        <a href="statistics.php"><li>Statistics</li></a>
        <a href="alerts.php"><li>Alerts</li></a>
      </ul>
    </div>
    <div class="other_stuff">

      <h6>Active Chargers -  <i class="fas fa-plug"><span id="active_chargers"></span> </i></h6>
      <a href="interruption_all.php"><i class="fas fa-exclamation-triangle"></i><span class="warning">Force all chargers to turn off</span> </a>
      <div class="emergency">
        <h4>Emergency Alert :</h4>
        <div id="emergency1" class="emergency2"></div>
        <h5>Check <a class="alerts" href="alerts.php">Alerts</a> for more info</h5>

      <h6 id="id_emer"></h6>



      </div>




    </div>


  </div>
  <div class="nothing">

  </div>
  <div class="chargers">
      <div class="charger1">
        <div id="state1">
          <div class="value1">
            <p class="teste"></p>
          </div>
        </div>
        <img class="charger_img" src="charger.png" alt="">
        <span class="info_charger">Charger<span id="chargerid1"></span></span>
        <a href="interruption.php?id=<?php echo $chargerid1; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
      </div>
      <div class="info1">
        <p>Voltage Inst. = <span id="voltage_inst1"></span> </p>
        <p>Curr Inst. = <span id="current_inst1"></span></p>
        <p>Curr max = <span id="max_curr1"></span> </p>
        <p>Charging id =<span id="charging_id1"></span> </p>
        <p>Charging type =<span id="charging_type1"></span></p>
        <a href="data_charger.php?id=<?php echo $chargerid1; ?>">+ info</a>
      </div>
      <div class="charger2">
        <div id="state2">
          <div class="value2">
            <p></p>
          </div>
        </div>
        <img class="charger_img" src="charger.png" alt="">
        <span class="info_charger">Charger<span id="chargerid2"></span></span>
        <a href="interruption.php?id=<?php echo $chargerid2; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
      </div>
      <div class="info1">
        <p>Voltage Inst. = <span id="voltage_inst2"></span> </p>
        <p>Curr Inst. = <span id="current_inst2"></span></p>
        <p>Curr max = <span id="max_curr2"></span> </p>
        <p>Charging id = <span id="charging_id2"></span> </p>
        <p>Charging type =<span id="charging_type2"></span></p>
        <a href="data_charger.php?id=<?php echo $chargerid2; ?>">+ info</a>
      </div>
      <div class="charger3">
        <div id="state3">
          <div class="value3">
            <p></p>
          </div>
        </div>
        <img class="charger_img" src="charger.png" alt="">
        <span class="info_charger">Charger<span id="chargerid3"></span></span>
        <a href="interruption.php?id=<?php echo $chargerid3; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
      </div>
      <div class="info1">
        <p>Voltage Inst. = <span id="voltage_inst3"></span> </p>
        <p>Curr Inst. = <span id="current_inst3"></span></p>
        <p>Curr max = <span id="max_curr3"></span> </p>
        <p>Charging id = <span id="charging_id3"></span> </p>
        <p>Charging type =<span id="charging_type3"></span></p>
        <a href="data_charger.php?id=<?php echo $chargerid3; ?>">+ info</a>
      </div>
      <div class="charger4">
        <div id="state4">
          <div class="value4">
            <p></p>
          </div>
        </div>
        <img class="charger_img" src="charger.png" alt="">
        <span class="info_charger">Charger<span id="chargerid4"></span></span>
        <a href="interruption.php?id=<?php echo $chargerid4; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
      </div>
      <div class="info1">
        <p>Voltage Inst. = <span id="voltage_inst4"></span> </p>
        <p>Curr Inst. = <span id="current_inst4"></span></p>
        <p>Curr max = <span id="max_curr4"></span> </p>
        <p>Charging id = <span id="charging_id4"></span> </p>
        <p>Charging type =<span id="charging_type4"></span></p>
        <a href="data_charger.php?id=<?php echo $chargerid4; ?>">+ info</a>
      </div>
      <div class="charger5">
        <div id="state5">
          <div class="value5">
            <p></p>
          </div>
        </div>
        <img class="charger_img" src="charger.png" alt="">
        <span class="info_charger">Charger<span id="chargerid5"></span></span>
        <a href="interruption.php?id=<?php echo $chargerid5; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
      </div>
      <div class="info1_">
        <p>Voltage Inst. = <span id="voltage_inst5"></span> </p>
        <p>Curr Inst. = <span id="current_inst5"></span></p>
        <p>Curr max = <span id="max_curr5"></span> </p>
        <p>Charging id = <span id="charging_id5"></span> </p>
        <p>Charging type =<span id="charging_type5"></span></p>
        <a href="data_charger.php?id=<?php echo $chargerid5; ?>">+ info</a>
      </div>


      </div>



<div class="line_2">
  <div class="charger6">
    <div id="state6">
      <div class="value6">
        <p></p>
      </div>
    </div>
    <img class="charger_img" src="charger.png" alt="">
    <span class="info_charger">Charger<span id="chargerid6"></span></span>
    <a href="interruption.php?id=<?php echo $chargerid6; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
  </div>
  <div class="info1_line2">
    <p>Voltage Inst. = <span id="voltage_inst6"></span> </p>
    <p>Curr Inst. = <span id="current_inst6"></span></p>
    <p>Curr max = <span id="max_curr6"></span> </p>
    <p>Charging id = <span id="charging_id6"></span> </p>
    <p>Charging type =<span id="charging_type6"></span></p>
    <a href="data_charger.php?id=<?php echo $chargerid6; ?>">+ info</a>
  </div>
  <div class="charger7">
    <div id="state7">
      <div class="value7">
        <p></p>
      </div>
    </div>
    <img class="charger_img" src="charger.png" alt="">
    <span class="info_charger">Charger<span id="chargerid7"></span></span>
    <a href="interruption.php?id=<?php echo $chargerid7; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
  </div>
  <div class="info1_line2">
    <p>Voltage Inst. = <span id="voltage_inst7"></span> </p>
    <p>Curr Inst. = <span id="current_inst7"></span></p>
    <p>Curr max = <span id="max_curr7"></span> </p>
    <p>Charging id = <span id="charging_id7"></span> </p>
    <p>Charging type =<span id="charging_type7"></span></p>
    <a href="data_charger.php?id=<?php echo $chargerid7; ?>">+ info</a>
  </div>
  <div class="charger8">
    <div id="state8">
      <div class="value8">
        <p></p>
      </div>
    </div>
    <img class="charger_img" src="charger.png" alt="">
    <span class="info_charger">Charger<span id="chargerid8"></span></span>
    <a href="interruption.php?id=<?php echo $chargerid8; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
  </div>
  <div class="info1_line2">
    <p>Voltage Inst. = <span id="voltage_inst8"></span> </p>
    <p>Curr Inst. = <span id="current_inst8"></span></p>
    <p>Curr max = <span id="max_curr8"></span> </p>
    <p>Charging id = <span id="charging_id8"></span> </p>
    <p>Charging type =<span id="charging_type8"></span></p>
    <a href="data_charger.php?id=<?php echo $chargerid8; ?>">+ info</a>
  </div>
  <div class="charger9">
    <div id="state9">
      <div class="value9">
        <p></p>
      </div>
    </div>
    <img class="charger_img" src="charger.png" alt="">
    <span class="info_charger">Charger<span id="chargerid9"></span></span>
    <a href="interruption.php?id=<?php echo $chargerid9; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
  </div>
  <div class="info1_line2">
    <p>Voltage Inst. = <span id="voltage_inst9"></span> </p>
    <p>Curr Inst. = <span id="current_inst9"></span></p>
    <p>Curr max = <span id="max_curr9"></span> </p>
    <p>Charging id = <span id="charging_id9"></span> </p>
    <p>Charging type =<span id="charging_type9"></span></p>
    <a href="data_charger.php?id=<?php echo $chargerid9; ?>">+ info</a>
  </div>
  <div class="charger10">
    <div id="state10">
      <div class="value10">
        <p></p>
      </div>
    </div>
    <img class="charger_img" src="charger.png" alt="">
    <span class="info_charger">Charger<span id="chargerid10"></span></span>
    <a href="interruption.php?id=<?php echo $chargerid10; ?>"><img class="turn_off"src="turn_off.png" alt=""></a>
  </div>
  <div class="info1_line2_">
    <p>Voltage Inst. = <span id="voltage_inst10"></span> </p>
    <p>Curr Inst. = <span id="current_inst10"></span></p>
    <p>Curr max = <span id="max_curr10"></span> </p>
    <p>Charging id = <span id="charging_id10"></span> </p>
    <p>Charging type =<span id="charging_type10"></span></p>
    <a href="data_charger.php?id=<?php echo $chargerid10; ?>">+ info</a>
  </div>
</div>



  </div>







  </body>
</html>
<?php
}else {
  header("Location: index.php");
  exit();
}
 ?>
