    <?php
    session_id('mySessionID');
    session_start();?>
<!DOCTYPE html>
<!--Najmus Seemab-->
<html >
<head>
  <meta charset="UTF-8">
  <title>VVCE FEESE MANAGEMENT</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800);
* {
  box-sizing: border-box;
}
.container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color:#D3D3D3;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color:#808080;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    
        table {
        border-collapse: collapse;
       width:100%;

     }

    .one-third{
      width:33.33%;
      float: left;
    }
    .one-half{
      width:40%;
      float: left;
      margin-right: 10%;
        color: black;
    }
     th, td {
        text-align: left;
        padding: 8px;
          border-bottom: 1px solid #ddd;
     }
     tr:hover {background-color:#c05a88;
     }

     th {
        background-color: #4CAF50;
        color: white;
     }
     h2{
     text-align: center;
     background-color: #0074D9;
     color:#ffffff;
     }

             .submit
    {
        width:100%;
        background:#ff5722;
        border-color:transparent;
        color:#fff;
        font-size:20px;
        font-weight:bold;
        letter-spacing:2px;
        height:50px;
        margin-top:10px;
        font-size:18px;
        margin-bottom:16px;
        border:none;
        outline:none;
        border-bottom:1px solid gray;
    }

    .submit:hover
    {
        background-color:#f44336;
        cursor:pointer;
    }

          header{
	background-color:#6991AC;
	width:100%;
	height: 86px;
	
}
#header-inner{
	max-width:1200px;
	margin:0 auto;
}
#logo{
	animation: yourAnimation1 2s forwards 0s linear;
	margin:20px;
	float: left;
	width: 200px;
	height: 60px;
	background:url(img/VNH.png) no-repeat center;
}

@keyframes yourAnimation1{
    0%{
        transform: translateX(-20%);
        opacity: 0.2;
        }
    50%{
        transform: translateX(-10%);
        opacity: 0.4;
        }
    100%{
        transform: rotate(xx) translateX(0);
        opacity: 1;
        }
}

/*---Start Navigation--*/
nav {
	float: right;
	padding:25px 20px 0 0;
}

 #menu-icon{
	display: hidden;
	width:40px;
	height:40px;
	background:url(img/nav.png) center;
	}
	a:hover#menu-icon{
		border-radius: 4px 4px 0 0;
	}
ul{
	list-style-type:none;
	font-weight:bold;
	font-family:Comic Sans MS;
}
nav ul li{
	font-family:Comic Sans MS;
	font-size:150%;
	display: inline-block;
	float: left;
	padding: 10px;
	font-weight:bold;
}
nav ul li a{
	color:#f5f5f5;
	font-weight:bold;
	text-decoration:none;
}
nav ul li a:hover{
	color: #C3D7DF;
}
.current{
	color: #C3D7DF;
}
/*---End Navigation--*/
@media screen and (max-width: 768px){
              
              header{
		 position:relative;
         
	 }
     .one-third{
       width:100%;
       }
       .one-half{
              width:100%;
          }
	 #logo{
		 margin:15px 0 20px -25px;
		 background:url(img/VNH-mobile.png) no-repeat center;
	 }
	 #menu-icon{
		 display:inline-block;
	 }
	 nav ul,nav:active ul{
		 display:none;
		 z-index:1000;
		 position:absolute;
		 padding:20px;
		 background:#6991AC;
		 right: 20px;
		 top:60px;
		 border:2px solid #fff;
		 border-radius: 2px 0 2px 2px;
         width:50%; 
		  }
	 nav:hover ul{
		 display:block;
	 }
	 nav li{
		 text-align:center;
		 width:100%;
		 padding:10px 0 ;
	 }
          }

html,
body{
  overflow-x: hidden;
  font-family: "Open Sans", sans-serif;
  font-weight: bold;
  color: #fff;
  background: #efefef;
    margin: 1px;
}
              input{width: 100%;}



.row {
  max-width: 1080px;
  margin: 0 auto;
  padding: 60px 30px;
  background: #032429;
  position: relative;
  z-index: 1;
  text-align: center;
}
.row:before {
  position: absolute;
  content: "";
  display: block;
  top: 0;
  left: -5000px;
  height: 100%;
  width: 15000px;
  z-index: -1;
  background: inherit;
}
.row:first-child {
  padding: 40px 30px;
}
.row:nth-child(2), .row:nth-child(8), .row:nth-child(10) {
  background: #134A46;
}
.row:nth-child(3), .row:nth-child(7) {
  background: #377D6A;
}
.row:nth-child(4), .row:nth-child(6) {
  background: #7AB893;
}
.row:nth-child(5) {
  background: #B2E3AF;
}
.row span {
  position: relative;
  display: inline-block;
  margin: 30px 10px;
}


.gate {
  display: inline-block;
  width: 315px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 65px;
  transition: all .3s ease-in-out;
}
.gate::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.gate + label {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 15px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  background: #7AB893;
  transition: all .4s ease-in-out;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  transform-origin: left bottom;
  z-index: 99;
}
.gate + label:before, .gate + label:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: 3px;
  background: #377D6A;
  transform-origin: left bottom;
  transition: all .4s ease-in-out;
  pointer-events: none;
  z-index: -1;
}
.gate + label:before {
  background: rgba(3, 36, 41, 0.2);
  z-index: -2;
  right: 20%;
}

span:nth-child(2) .gate {
  text-indent: 85px;
}

span:nth-child(2) .gate:focus,
span:nth-child(2) .gate:active {
  text-indent: 0;
}

.gate:focus,
.gate:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.gate:focus::-webkit-input-placeholder,
.gate:active::-webkit-input-placeholder {
  color: #aaa;
}
.gate:focus + label,
.gate:active + label {
  transform: rotate(-66deg);
  border-radius: 3px;
}
.gate:focus + label:before,
.gate:active + label:before {
  transform: rotate(10deg);
}


.swing {
  display: inline-block;
  width: 315px;
  padding: 10px 0 10px 15px;
  font-family: "Open Sans", sans;
  font-weight: 400;
  color: #377D6A;
  background: #efefef;
  border: 0;
  border-radius: 3px;
  outline: 0;
  text-indent: 60px;
  transition: all .3s ease-in-out;
}
.swing::-webkit-input-placeholder {
  color: #efefef;
  text-indent: 0;
  font-weight: 300;
}
.swing + label {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 15px;
  text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
  background: #7AB893;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  transform-origin: 2px 2px;
  transform: rotate(0);
  animation: swing-back .4s 1 ease-in-out;
}

@keyframes swing {
  0% {
    transform: rotate(0);
  }
  20% {
    transform: rotate(116deg);
  }
  40% {
    transform: rotate(60deg);
  }
  60% {
    transform: rotate(98deg);
  }
  80% {
    transform: rotate(76deg);
  }
  100% {
    transform: rotate(82deg);
  }
}
@keyframes swing-back {
  0% {
    transform: rotate(82deg);
  }
  100% {
    transform: rotate(0);
  }
}
.swing:focus,
.swing:active {
  color: #377D6A;
  text-indent: 0;
  background: #fff;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.swing:focus::-webkit-input-placeholder,
.swing:active::-webkit-input-placeholder {
  color: #aaa;
}
.swing:focus + label,
.swing:active + label {
  animation: swing 1.4s 1 ease-in-out;
  transform: rotate(82deg);
}


    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
    <header>
    <div id="header-inner">
	   <a href="index.html" id="logo"></a>
	   <nav>
	     <a href="#" id="menu-icon"></a>
	<ul>
	     <li><a href="#" class="current">HOME</a></li>
		 <li><a href="about.html" >ABOUT</a></li>
		 <li><a href="contact.html" >CONTACT</a></li>
		 <li><a href="formpage.html">FEEDBACK</a></li>
	     <li><a href="updates.html">UPDATES</a></li>
	</ul>
	  </nav>
	</div>
</header>
          <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "new1";
                $usn= $_POST["usn"];
                $dob= $_POST["dob"];
               // $sem= $_POST["sem"];
               // $branch= $_POST["branch"];

    
                // Create connection
                $conn = mysqli_connect($servername, $username,$password,$dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
   
         $result = mysqli_query($conn, "select * from subdb,studentdetails where subdb.sem=studentdetails.sem And subdb.branch=studentdetails.branch
         and studentdetails.usn='$usn' and studentdetails.dob='$dob'") or die("Query fail :" .mysqli_error());
    ?>
     

        <?php
                     while($rowval = mysqli_fetch_array($result))
                 {
                $sem= $rowval['sem'];
                $branch= $rowval['branch'];
                $sub1= $rowval['sub1'];
                $sub1c= $rowval['sub1c'];
                $sub2= $rowval['sub2'];
                $sub2c= $rowval['sub2c'];
                $sub3= $rowval['sub3'];
                $sub3c= $rowval['sub3c'];
                $sub4= $rowval['sub4'];
                $sub4c= $rowval['sub4c'];
                $sub5= $rowval['sub5'];
                $sub5c= $rowval['sub5c'];
                $sub6= $rowval['sub6'];
                $sub6c= $rowval['sub6c'];
                $sub7= $rowval['sub7'];
                $sub7c= $rowval['sub7c'];
                $sub8= $rowval['sub8'];
                $sub8c= $rowval['sub8c'];
                $sub9= $rowval['sub9'];
                $sub9c= $rowval['sub9c'];
                $sub10= $rowval['sub10'];
                $sub10c= $rowval['sub10c'];
                $sub11= $rowval['sub11'];
                $sub11c= $rowval['sub11c'];
                $sub12= $rowval['sub12'];
                $sub12c= $rowval['sub12c'];
                $sub13= $rowval['sub13'];
                $sub13c= $rowval['sub13c'];
                $sub14= $rowval['sub14'];
                $sub14c= $rowval['sub14c'];
                $sub15= $rowval['sub15'];
                $sub15c= $rowval['sub15c'];
                $sub16= $rowval['sub16'];
                $sub16c= $rowval['sub16c'];
                $usn= $rowval['usn'];
                $name= $rowval['name'];
                $dob= $rowval['dob'];
                $email= $rowval['email'];
                }
                $conn->close();
      ?>

<form>
<!---End Header--->
   <div class="row">
              <span>
                <input class="gate" id="usn" type="text" placeholder="USN!" value='<?php echo  $usn; ?>'  Readonly /><label for="USN">USN</label>
              </span>
                  <span>
                <input class="gate" id="branch" type="text" placeholder="Branch" value='<?php echo  $branch; ?>' Readonly /><label for="Branch">Branch</label>
              </span>
              <span>
                <input class="gate" id="name" type="text" placeholder="Name" value='<?php echo  $name; ?>' Readonly /><label for="Name">Name</label>
              </span>

    </div>

    <div class="row">
              <span>
                <input class="swing" id="sem" type="text" placeholder="Sem" value='<?php echo  $sem; ?>'  Readonly /><label for="Sem" >Sem</label>
              </span>
              <span>
                <input class="swing" id="email" type="text" placeholder="email" value='<?php echo $email; ?>' Readonly /><label for="Email"  >Email</label>
              </span>
              <span>
                <input class="swing" id="fid" type="text" placeholder="FacultyId" /><label for="Faculty Id">F.Id</label>
              </span>
    </div>
    
<div class="one-half">
        <h2>Regular Subjects</h2>
            <table>
             <tr><th width="70%"> Subjects </th> <th> Sub Code </th></tr>
    <!--1st -------------------------------------------------------------------->
            <tr>
                <td >
                    <input class="sub" name="sub1" id="sub1" type="text" value='<?php echo  $sub1; ?>' /></td>
                <td>
                    <input class="subc" name="sub1c" id="sub1c" type="text" value='<?php echo  $sub1c; ?>' /></td>
                    </tr>
    <!---2nd -------------------------------------------------------------------->
            <tr>
                <td>
                   <input class="sub" name="sub2" id="sub2" type="text" value='<?php echo $sub2;?>' /></td>
                <td>
                    <input class="subc" name="sub2c" id="sub2c" type="text" value='<?php echo  $sub2c; ?>' ></td>
            </tr>
    <!---3rd -------------------------------------------------------------------->
            <tr>
                <td>
                    <input class="sub" name="sub3" id="sub3" type="text" value='<?php echo  $sub3; ?>'/></td>
                <td>
                    <input class="subc" name="sub3c" id="sub3c" type="text" value='<?php echo  $sub3c; ?>' /></td>
            </tr>
    <!---4th-------------------------------------------------------------------->
            <tr>
                <td>
                    <input class="sub" name="sub4" id="sub4" type="text"  value='<?php echo  $sub4; ?>'/></td>
                <td>
                    <input class="subc" name="sub4c" id="sub4c" type="text" value='<?php echo  $sub4c; ?>'/></td>
            </tr>
    <!---5th-------------------------------------------------------------------->
            <tr>
                <td>
                    <input class="sub" name="sub5" id="sub5" type="text" value='<?php echo  $sub5; ?>'/></td>
                <td>
                    <input class="subc" name="sub5c" id="sub5c" type="text" value='<?php echo  $sub5c; ?>'/></td>
            </tr>
    <!---6th -------------------------------------------------------------------->
            <tr>
                <td>
                    <input class="sub" name="sub6" id="sub6" type="text" value='<?php echo  $sub6; ?>' /></td>
                    <td>
                    <input class="subc" name="sub6c" id="sub6c" type="text" value='<?php echo  $sub6c; ?>'/></td>
                    </tr>
    <!---7th -------------------------------------------------------------------->
            <tr>
                <td >
                    <input class="sub" name="sub7" id="sub7" type="text" value='<?php echo  $sub7; ?>' /></td>
                    <td>
                 <input class="subc" name="sub7c" id="sub7c" type="text" value='<?php echo  $sub7c; ?>'/></td>
              </tr>
    <!---8th -------------------------------------------------------------------->
              <tr>
                <td>
                    <input class="sub"name=" sub8" id="sub8" type="text" value='<?php echo  $sub8; ?>' /></td>
                    <td>
                    <input class="subc" name="sub8c" id="sub8c" type="text" value='<?php echo  $sub8c; ?>'/></td>
                    </tr>
            </table>
    </div>
    <!---elective subjects------------------------------>

    <div class="one-half" id="cb">
    <h2>ELECTIVE/EXTRA SUBJECTS</h2>
    <label class="container">
    <!--1st elective subject--------------------------------------------------->    
    <input type="Checkbox"  class="cb" id="sub9"  value='<?php echo  $sub9; ?> <?php echo  $sub9c; ?>' />  <?php echo  $sub9;  ?>&nbsp;&nbsp;&nbsp;<?php echo     $sub9c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--2nd elective subject--------------------------------------------------->         
    <input type="Checkbox"  class="cb" id="sub10" value='<?php echo  $sub10; ?> <?php echo  $sub10c; ?>'/> <?php echo  $sub10; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub10c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--3rd elective subject--------------------------------------------------->     
    <input type="Checkbox"  id="sub11" class="cb" value='<?php echo  $sub11; ?> <?php echo  $sub11c; ?>'/> <?php echo  $sub11; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub11c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--4th elective subject--------------------------------------------------->     
    <input type="Checkbox"  id="sub12" class="cb" value='<?php echo  $sub12; ?> <?php echo  $sub12c; ?>'/> <?php echo  $sub12; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub12c; ?>
    <span class="checkmark"></span></label><label class="container">
     <!--5th elective subject--------------------------------------------------->    
    <input type="Checkbox" class="cb" id="sub13" value='<?php echo  $sub13; ?> <?php echo  $sub13c; ?>'/> <?php echo  $sub13; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub13c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--6th elective subject--------------------------------------------------->     
    <input type="Checkbox"  class="cb" id="sub14" value='<?php echo  $sub14; ?><?php echo  $sub14c; ?>'/> <?php echo  $sub14; ?>&nbsp;&nbsp;&nbsp;<?php echo   $sub14c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--7th elective subject--------------------------------------------------->     
    <input type="Checkbox" class="cb" id="sub15" value='<?php echo  $sub15; ?><?php echo  $sub15c; ?>'/> <?php echo  $sub15; ?>&nbsp;&nbsp;&nbsp;<?php echo   $sub15c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--8th elective subject--------------------------------------------------->     
    <input type="Checkbox" id="sub16" class="cb" value='<?php echo  $sub16; ?> <?php echo  $sub16c; ?>'/> <?php echo  $sub16; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub16c; ?>
    <span class="checkmark"></span></label><br><br><br>

    </div>

    <!---BACK-LOGS--------------------------------------------->
    <div class="one-half">
    <table >
    <h2>BACK-LOGS</h2>
    <tr><th>Subjects</th> <th>Sub Code</th> <th>sem</th></tr>

    <tr><td width="60%"> <input type="text" class="sub" id="sub17" name="sub17" /></td>
    <td width="20%"><input type="text" class="subc" id="sub17c" name="sub17c" /></td>
     <td width="20%"><input type="text" class="subc" id="sem1" name="sem1" /></td></tr>

    <tr><td> <input type="text" class="sub"  id="sub18" name="sub18" /></td>
     <td><input type="text" class="subc" id="sub18c" name="sub18c" /></td>
     <td><input type="text" class="subc" id="sem2" name="sem2" /></td>  </tr>

    <tr><td> <input type="text" class="sub"  id="sub19" name="sub19" /></td>
    <td><input type="text" class="subc" id="sub19c" name="sub19c" /></td>
     <td><input type="text" class="subc" id="sem3" name="sem3" /> </td> </tr>

    <tr><td> <input type="text" class="sub"  id="sub20" name="sub20" /></td>
     <td><input type="text" class="subc" id="sub20c" name="sub20c" /></td>
     <td><input type="text" class="subc" id="sem4" name="sem4" /></td>  </tr>

    <tr><td> <input type="text" class="sub"  id="sub21" name="sub21" /></td>
    <td><input type="text" class="subc" id="sub21c" name="sub21c" /></td>
     <td><input type="text" class="subc" id="sem5" name="sem5" /></td> </tr>

    <tr><td> <input type="text" class="sub" id="sub22" name="sub22" /></td>
    <td><input type="text" class="subc" id="sub22c" name="sub22c" /></td>
     <td><input type="text" class="subc" id="sem6" name="sem6" /></td>  </tr>

    <tr><td> <input type="text" class="sub"  id="sub23" name="sub23" /></td>
     <td><input type="text" class="subc" id="sub23c" name="sub23c" /></td>
     <td><input type="text" class="subc" id="sem7" name="sem7" /></td> </tr>

    <tr><td> <input type="text" class="sub"  id="sub24" name="sub24" /></td>
     <td><input type="text" class="subc" id="sub24c" name="sub24c" /></td>
     <td><input type="text" class="subc" id="sem8" name="sem8" /></td>  </tr>
    </table>
    </div>
    <input type="submit"  class="submit"  value="Submit"/>

    <script type='text/javascript'>
        /* attach a submit handler to the form */
        $("#formid").submit(function(event) {

          /* stop form from submitting normally */
          event.preventDefault();

          /* get the action attribute from the <form action=""> element */
          var $form = $( this ),
              url = $form.attr( 'action' );


          var op = document.querySelectorAll('.cb')
          var myArray = [];
          for(var i=0;i<op.length;i++)
            {
                if(op[i].checked==true)
                    {
                        myArray.push(op[i].value) //selected output store in my array
                    }
            }

            data=JSON.stringify(myArray); //array encode
            console.log(data);

          /* Send the data using post with element id name and name2*/


          var posting = $.post( url, { name: $('#usn').val(),
                                        name2: $('#sem').val(), 
                                        name3: $('#branch').val(),
                                       name4: $('#fname').val(),
                                      name5: $('#sec').val(),
                                      name6: $('#sid').val(), 
                                      name7: $('#sub1').val(), 
                                      name8: $('#sub1c').val(),
                                       name9: $('#sub2').val(), 
                                      name10: $('#sub2c').val(), 
                                      name11: $('#sub3').val(), 
                                      name12: $('#sub3c').val(), 
                                      name13: $('#sub4').val(),	 
                                      name14: $('#sub4c').val(), 
                                      name15: $('#sub5').val(), 
                                      name16: $('#sub5c').val(), 
                                      name17: $('#sub6').val(), 
                                      name18: $('#sub6c').val(),
                                      name19: $('#sub7').val(), 
                                      name20: $('#sub7c').val(), 
                                      name21: $('#sub8').val(),
                                      name22: $('#sub8c').val(),
                                      name23 : data,
                                      name31: $('#sub17').val(),
                                      name32: $('#sub17c').val(),
                                      name33: $('#sem1').val(), 
                                      name34: $('#sub18').val(),
                                      name35: $('#sub18c').val(),
                                      name36: $('#sem2').val(),
                                      name37: $('#sub19').val(),
                                      name38: $('#sub19c').val(),
                                      name39: $('#sem3').val(),
                                      name40: $('#sub20').val(),
                                      name41: $('#sub20c').val(),
                                      name42: $('#sem4').val(),
                                      name43: $('#sub21').val(),
                                      name44: $('#sub21c').val(),
                                      name45: $('#sem5').val(), 
                                      name46: $('#sub22').val(),
                                      name47: $('#sub22c').val(),
                                      name48: $('#sem6').val(),
                                      name49: $('#sub23').val(),
                                      name50: $('#sub23c').val(),
                                      name51: $('#sem7').val(),
                                      name52: $('#sub24').val(),
                                      name53: $('#sub24c').val(),
                                      name54: $('#sem8').val(),
                                      name55: $('#recived').val(),
                                      name56: $('#uploaded').val()} );



          /* Alerts the results */
          posting.done(function(data){
            alert("Successfull");
          });
        });
    </script>


    </form>

</body>
</html>
