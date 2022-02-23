<?php 
include( '../control/registrationcheckLearner.php');

?>
<!DOCTYPE html>
<html>
   <head>
      <title>Page Title</title>
      <center>
         <link rel="stylesheet" href="../css/mycss.css">
   </head>
   <body>
      <div class="box">
         <h1>Registration Form</h1>
         <p id="error"></p>
         <form class="frm" action="" method="post" onsubmit="return validateForm()">
            <script type="text/javascript" src="../js/myjs.js"></script>
            <table>
               <tr>
                  <td class="inp" > First Name: </td>
                  <td>
                    <input  class="txt-box" type="text" name="fname" id=fname placeholder="Enter Your First Name">
                  </td>
               </tr>
               <tr>
                  <td class="inp">Last Name:</td>
                  <td>
                    <input class="txt-box" type="text" name="lname" id="lname" placeholder="Enter Your Last Name">
                  </td>
               </tr>
               <tr>
                  <td class="inp">Username: </td>
                  <td>
                    <input  class="txt-box" type="text" name="username" id="username" placeholder="Enter Your Username">
                  </td>
               </tr>
               <tr>
                  <td class="inp">Age: </td>
                  <td>
                    <input class="txt-box"  type="number" name="age" id="age" placeholder="Enter Your Age">
                  </td>
               </tr>
               <tr>
                  <td align="top" class="inp td1">Purpose of using <br>this website:<br> </td>
                  <td>

                  <ul type=none>
                     <br>
                     <li><input type="radio" name="designation" id="designation1" value="Learn"> Learn </li>
                     <li><input type="radio" name="designation" id="designation2" value="Job seeking">Job seeking</li>
                     <li><input type="radio" name="designation" id="designation3" value="Gather experience">Gather experience</li>
                  </ul>                                                        
                   <br>
                  </td>
               </tr>
               <tr>
                  <td class="inp td1" > Field of interest? </td>
                  <td>
                     <br>
                     <ul type=none>
                        <li><input type="checkbox" name="language1" id="language1" value="IT related"> IT related </li>
                        <li><input type="checkbox" name="language2" id="language2" value="Creativity echancement"> Creativity echancement </li>
                        <li><input type="checkbox" name="language3" id="language3" value="Others"> Others </li>
                     </ul>              
                     <br>
                  </td>
               </tr>
               <tr>
                  <td class="inp">Email:</td>
                  <td>
                     <input class="txt-box" type="email" name="email" id="email" placeholder="Enter Your email">
                  </td>
               </tr>
               <tr>
                  <td class="inp">Password:</td>
                  <td>
                     <input class="txt-box" type="Password" name="password" id="password" placeholder="Enter Your Password">
                  </td>
               </tr>
               <tr>
                    <td class="inp">  
                    please choose a file: 
                    </td>
                  <td>
                     <input type="file" name="file" id="file">
                  </td>
               </tr>
               <br>
            </table>
            <input class="btn" name="submit" type="submit" value="Registration">
            <input class="btn" type="reset" name="reset">
         </form>
      </div>
      <p id="a"></p>
      <p id="b"></p>
      <p id="c"></p>
      <p id="d"></p>
      <p id="e"></p>
      <p id="f"></p>
      </hr> <?php echo $error  ?> </center>
   </body>
</html>