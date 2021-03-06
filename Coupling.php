<!DOCTYPE html>
<html>
<title>Code</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif
  }
</style>

<body class="w3-light-grey w3-content" style="max-width:1600px">

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove"></i>
      </a>
      <img src="2.png" style="width:45%;" class="w3-round"><br><br>
      <h4><b>DASHBOARD</b></h4>

    </div>
    <div class="w3-bar-block">
      <a href="method_d.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>SIZE</a>
      <a href="method_new.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>VARIABLE</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>METHODS</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>INHERITANCE</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>COUPLING</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>CONTROL STRUCTURES</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>TOTAL FACTORS</a>


    </div>
    <div class="w3-panel w3-large">

    </div>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px">

    <!-- Header -->
    <header id="portfolio">
      <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
      <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
      <div class="w3-container">

        <div class="w3-section w3-bottombar w3-padding-16">
          <form action="?" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" name="upload" value="Upload file">
          </form>


          <hr>
          <button class="w3-button w3-black" style="background-color: #f44336">CALCULATE</button>
          <!--<button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>-->
        </div>
      </div>
    </header>

    <!-- First Photo Grid-->


    <!-- Pagination -->


    <!-- Footer -->

    <body class="w3-container w3-padding-8 w3-dark-grey">
      <div class="w3-row-padding">
        <div class="w3-third">
          <h4>Complexity of a program due to size</h4>
          <style>
            #customers {
              font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 300%;
            }

            #customers td,
            #customers th {
              border: 1px solid #ddd;
              padding: 8px;
            }

            #customers tr:nth-child(even) {
              background-color: #f2f2f2;
            }

            #customers tr:hover {
              background-color: #ddd;
            }

            #customers th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #4CAF50;
              color: white;
            }

            #inneriframe {



              height: 615px;
              font-family: Calibri;
            }
          </style>

          <script>
            function resizeIFrameToFitContent(iFrame) {

              iFrame.width = iFrame.contentWindow.document.body.scrollWidth;
              iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
            }

            window.addEventListener('DOMContentLoaded', function(e) {

              var iFrame = document.getElementById('inneriframe');
              resizeIFrameToFitContent(iFrame);

              // or, to resize all iframes:
              var iframes = document.querySelectorAll("inneriframe");
              for (var i = 0; i < iframes.length; i++) {
                resizeIFrameToFitContent(iframes[i]);
              }
            });
          </script>

          <?php
          if (isset($_POST['upload'])) {
            $file_name =  $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_size =  $_FILES['file']['size'];
            $file_tem_loc =  $_FILES['file']['tmp_name'];
            $file_store = "upload/" . $file_name;

            //$lines = COUNT(FILE($file_store));  


            // $f = fopen($file_store, "r") or exit("Unable to open file!");
            // read file line by line until the end of file (feof)

            $l = file($file_store);


            $pr_data_type = array("int", "double", "float", "boolean", "char", "long", "void", "String");

            $operations = array("(");

            $acc_modi = array("public", "protected", "private", "default");

            $openbrackt = "{";

            $closebrackt = "}";

            $semicoln = ";";

            $methodNamesArr = array();

            $openBr = "(";
            $closeBr = ")";
            $inFunction = [];
            $insideFunctionMethods = [];
            $recursiveFuncs = [];






            echo "<table width='1000'>";
            echo "<tr>
      <th>Line Number</th>
      <th>Program Statment</th>
      <th>Nr</th>
      <th>Nmcms</th>
      <th>Nmcmd</th>
      <th>Nmcrms</th>
      <th>Nmcrmd</th>
      <th>Nrmcrms</th>
      <th>Nrmcrmd</th>
      <th>Nrmcms</th>
      <th>Nrmcmd</th>
      <th>Nmrgvs</th>
      <th>Nmrgvd</th>
      <th>Nrmrgvs</th>
      <th>Nrmrgvd</th>
    </tr>";

            function get_string_between_method($string, $start, $end)
            {
              $string = ' ' . $string;
              $ini = strpos($string, $start);
              if ($ini == 0) return '';
              $ini += strlen($start);
              $len = strpos($string, $end, $ini) - $ini;
              return substr($string, $ini, $len);
            }

            $Nr = 0;
            $Nmcms = 0;
            $Nmcrms = 0;
            $Nrmcrms = 0;
            $Nrmcms = 0;
            $Nmrgvs = 0;
            $Nrmrgvs = 0;

            $match = [];
            $gVariables = [];

            foreach ($l as $line_num => $line) {
              //find functions inside a function
              if (sizeof($inFunction) > 0) {
                if (stripos($line, $openBr) && stripos($line, $closeBr) && preg_match('/[.\s=(](.*?)[(]/', $line, $match1)) {

                  preg_match_all('/(?<=([.\s=(+]))([a-zA-Z0-9]+)(?=[(])/', $line, $match);

                  //find if line has same method name(recursive)
                  foreach ($match[0] as $word) {
                    if (stripos($methodNamesArr[sizeof($methodNamesArr) - 1], $word)) {
                      array_push($recursiveFuncs, trim(end($methodNamesArr)));
                    }
                  }
                }
              }
              //global variable
              if (sizeof($inFunction) == 0 && !stripos($line, "class")) {
                preg_match_all('/(?<=[a-zA-Z0-9,]\s)([a-zA-Z0-9]+)(?=[;,])\b/', $line, $match);

                foreach ($match[0] as $variable) {
                  array_push($gVariables, trim($variable));
                }
              }
              if (sizeof($inFunction) > 0 && stripos($line, $openbrackt)) {
                array_push($inFunction, $openbrackt);
              }

              //finding a function
              foreach ($pr_data_type as $returnType) {
                if (stripos($line, $returnType) && stripos($line, $openBr) && stripos($line, $closeBr) && stripos($line, $openbrackt) && !stripos($line, "class") && get_string_between_method($line, $returnType, $openBr) != null) {
                  $methName = get_string_between_method($line, $returnType, $openBr);

                  array_push($methodNamesArr, $methName);
                  array_push($inFunction, $openbrackt);
                }
              }

              if (sizeof($inFunction) > 0 && stripos($line, $closebrackt) !== false) {
                array_pop($inFunction);
              }
            }

            //--------------------------------------------------------------------------------------------------------------------------------
            $methodNamesArr = array();
            foreach ($l as $line_num => $line) {
              $Nr = 0;
              $Nmcms = 0;
              $Nmcrms = 0;
              $Nrmcrms = 0;
              $Nrmcms = 0;
              $Nmrgvs = 0;
              $Nrmrgvs = 0;

              //find functions inside a function
              if (sizeof($inFunction) > 0) {
                if (stripos($line, $openBr) && stripos($line, $closeBr) && preg_match('/[.\s=(](.*?)[(]/', $line, $match1)) {


                  // preg_match_all('/[\s.=(].*?\(/', $line, $match);
                  preg_match_all('/(?<=([.\s=(+]))([a-zA-Z0-9]+)(?=[(])/', $line, $match);
                  $methName = $match[1];

                  array_push($insideFunctionMethods, $methName);
                  //find if line has if 
                  foreach ($match[0] as $word) {
                    if (stripos($word, "if")) {
                      array_pop($match[0]);
                    }
                  }
                  $Nmcms = sizeof($match[0]);

                  //Regular to recursive
                  if (sizeof($recursiveFuncs) > 0) {
                    if (!in_array(end($methodNamesArr),$recursiveFuncs) && $match[0]!=null) {
                      if (in_array($match[0][0],$recursiveFuncs) && end($methodNamesArr) !=$match[0][0]) {
                        $Nmcrms++;
                      }
                      if(sizeof($match[0])>1){
                      for ($i = 0; $i < sizeof($match[0]) - 1; $i++) {
                        if ($i - 1 > 0) {
                            if (in_array($match[0][$i - 1],$recursiveFuncs) && in_array($match[0][$i],$recursiveFuncs)  && end($methodNamesArr) !=$match[0][0]) {
                              $Nrmcrms++;
                            }
                          
                        }
                      }
                    }
                  }
                  }
                  //recursive to recursive
                  if (sizeof($recursiveFuncs) > 0) {
                      if (in_array(end($methodNamesArr),$recursiveFuncs)) {
                          if (in_array($match[0][0],$recursiveFuncs) && end($methodNamesArr) !=$match[0][0]) {
                            $Nrmcrms++;
                          }
                          if(sizeof($match[0])>1){
                          for ($i = 0; $i < sizeof($match[0]) - 1; $i++) {
                            if ($i - 1 > 0) {
                                if (in_array($match[0][$i - 1],$recursiveFuncs) && in_array($match[0][$i],$recursiveFuncs)  && end($methodNamesArr) !=$match[0][0]) {
                                  $Nrmcrms++;
                                }
                              
                            }
                          }
                        }
                        
                      }
                    
                  }
                  //recursive to regular
                  if (sizeof($recursiveFuncs) > 0) {
                      if (in_array(end($methodNamesArr),$recursiveFuncs) ) {
                        if (!in_array($match[0][0],$recursiveFuncs)) {
                          $Nrmcms++;
                        }
                        if(sizeof($match[0])>1){
                        for ($i = 0; $i < sizeof($match[0]) - 1; $i++) {
                          if ($i - 1 > 0) {
                            foreach ($recursiveFuncs as $item1) {
                              if (stripos($item1, $match[0][$i - 1]) && !stripos($item1, $match[0][$i])  && !stripos(end($methodNamesArr), $match[0][0])) {
                                $Nrmcms++;
                              }
                            }
                          }
                        }
                      }
                      }
                  }
                }
              }

            
              
              echo "<script>console.log('" . json_encode($recursiveFuncs) . "');</script>";
            //finding the variables inside function---------------------------------------------
              //finding global variables in normal function
              if (sizeof($inFunction) > 0) {
                if (!in_array(end($methodNamesArr), $recursiveFuncs)) {

                  preg_match_all('/(?<=[\s,.(=])([a-zA-Z0-9]+)(?=[\s,.;+%])/', $line, $match); //Somewhat wrong

                  foreach ($gVariables as $singleVariable) {
                    foreach ($match[0] as $singleMatch) {
                      if ($singleMatch == $singleVariable) {
                        $Nmrgvs++;
                      }
                    }
                  }
                }
              }
              //finding global variables in recursive function
              if (sizeof($inFunction) > 0) {
                if (in_array(end($methodNamesArr), $recursiveFuncs)) {

                  preg_match_all('/(?<=[\s,.(=])([a-zA-Z0-9]+)(?=[\s,.;+%])/', $line, $match);

                  foreach ($gVariables as $singleVariable) {
                    foreach ($match[0] as $singleMatch) {
                      if ($singleMatch == $singleVariable) {

                        $Nrmrgvs++;
                      }
                    }
                  }
                }
              }


              //adding open brackets to find still in the function
              if (sizeof($inFunction) > 0 && stripos($line, $openbrackt)) {
                array_push($inFunction, $openbrackt);
              }
              //find a function
              foreach ($pr_data_type as $returnType) {
                if (stripos($line, $returnType) && stripos($line, $openBr) && stripos($line, $closeBr) && stripos($line, $openbrackt) && !stripos($line, "class") && get_string_between_method($line, $returnType, $openBr) != null) {
                  $methName = get_string_between_method($line, $returnType, $openBr);
                  array_push($methodNamesArr, trim($methName));
                  array_push($inFunction, $openbrackt);
                }
              }


              echo "<tr>
            <td width='100' bgcolor=' #ffffe6' > $line_num</td>
            <td width='1200' bgcolor=' #ffffe6'>";
              echo $line . "</td>  
            <td width='400' bgcolor=' #ffffe6'>";
              echo /*$op_count.*/  "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo $Nmcms . "</td> 
            <td width='400' bgcolor=' #ffffe6'>";
              echo /*$op_count.*/ "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo $Nmcrms . "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo /*$str_count.*/ "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo  $Nrmcrms . "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo /*$i_count.*/ "</td> 
            <td width='400' bgcolor=' #ffffe6'>";
              echo $Nrmcms . "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo /*$n_count.*/ "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo $Nmrgvs . "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo /*$str_count.*/ "</td>
            <td width='400' bgcolor=' #ffffe6'>";
              echo $Nrmrgvs . "</td>";
              echo "</td></tr>";

              //Removing open brackets to find still in the function
              if (sizeof($inFunction) > 0 && stripos($line, $closebrackt) !== false) {
                array_pop($inFunction);
              }
            }

            // Test if string contains the word 
            if (move_uploaded_file($file_tem_loc, $file_store)) {

              echo "<iframe src='$file_store' width=1200 height = id='inneriframe' frameborder='0' name='frm' allowtransparency='true' style='background-color: Snow;'' src='http://zingaya.com/widget/9d043c064dc241068881f045f9d8c151' />";
            }
          }

          ?>

          <hr>
    </body>

    <!-- End page content -->
  </div>

  <script>
    // Script to open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>

</body>

</html>