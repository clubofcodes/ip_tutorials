<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
     <title>4th-IT Tutorials</title>
     <link rel = "icon"  href="/ip_tutorials/18SOEIT11009/icon.png" type="image/x-icon">
	  <link href="/ip_tutorials/18SOEIT11009/css/bootstrap.css" rel='stylesheet' type='text/css' />
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <style type="text/css">
        .head{
            background-color : white;
            margin-top: 20px;
            margin-bottom: 30px;
            box-shadow: 0px 0px 15px 5px red;
            border-radius: 8px;
            border-color: transparent;
        }
     </style>
   </head>
   <body style="background-color:#000" class="text-white">
      <h2 align="center"><a onClick="history.go(-1);"><font color="tomato">TUTORIALS LIST</font></a></h2>
      <div class="container">
      <div>
         <table class="table head table-hover table-responsive-sm" border="2" >
         <thead>
                <tr>
                    <th style="text-align: left">Tutorial</th>
                    <th>Discription</th>
                </tr>
         </thead>   
         <tr>
               <td>
                  <a href="tutorial01/index.php" target="_blank">Tutorial-01</a>
               </td>
               <td>
                  <p>Develop a login.html and registration.html with bootstrap design.<br/>
                     ~Login page must have username and password field.<br/>
                     ~Registration page must have name, username(email), password, re-password, age,<br/> birthdate, country, state, city, profile picture, note. (Use appropriate html form elements)<br/>
                     ~Also add registration link for registration.html in login.html page.<br/>
                     ~Apply your design concept with CSS. ~Design must be responsive. 
                  </p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="tutorial02/index.php">Tutorial-02</a>
               </td>
               <td>
                  <p>Design a table to display above form data. Also put Add, Delete and Edit button. Apply jQuery<br/> animation on deletion of record. </p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="tutorial03/index.php" target="_blank">Tutorial-03</a>
               </td>
               <td>
                  <p>Apply jQuery validation in form to validate user input of registration.html page. </p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="tutorial04/index.php" target="_blank">Tutorial-04</a>
               </td>
               <td>
                  <p>Create PHP script to calculate interest from 3 values (P, R, N) entered by user in textbox<br/> using function. </p>
               </td>
            </tr>
            <tr>
               <td>
               <a href="tutorial05/index.php" target="_blank">Tutorial-05</a>
               </td>
               <td>
                  <p>Create HTML form having select box of 1 to 12 number. On submit form should post data to<br/> second PHP file which display respective Month name preselected in select box. </p>
               </td>
            </tr>
            <tr>
               <td>
               <a href="tutorial06/index.php" target="_blank">Tutorial-06</a>
               </td>
               <td>
                  <p>Create a Login & Logout app using state management. </p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="tutorial07/index.php" target="_blank">Tutorial-07</a>
               </td>
               <td>
                  <p>Apply Ã¢â‚¬Å“Remember MeÃ¢â‚¬Â functionality using Cookie.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="tutorial08/index.php" target="_blank">Tutorial-08</a>
               </td>
               <td>
                  <p>	Create PHP script to upload image file.  </p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="tutorial09/index.php" target="_blank">Tutorial-09</a>
               </td>
               <td>
                  <p>Write a PHP script to connect with MySQL database. </p>
               </td>
            </tr>
            <tr>
               <td>                  
                  <a href="tutorial10/index.php" target="_blank">Tutorial 10</a>
               </td>
               <td>
                  <p> Write a PHP script to display data from MySQL table.</p>
               </td>
            </tr>
            <tr>
               <td>                  
                  <a href="tutorial11/index.php" target="_blank">Tutorial 11</a>
               </td>
               <td>
                  <p>Write a PHP script to insert & delete data to MySQL table from HTML form. </p>
               </td>
            </tr>
            <tr>
               <td>                  
                  <a href="tutorial12/index.php" target="_blank">Tutorial 12</a>
               </td>
               <td>
                  <p>Write a PHP script to edit form data.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="/ip_tutorials/cibw" target="_blank" >Tutorial 13</a>
               </td>
               <td>
                  <p> Create a complete CURD application.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="tutorial14/index.php" target="_blank">Tutorial 14</a>
               </td>
               <td>
                  <p>Write a PHP script to search data from table. </p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="tutorial15/index.php" target="_blank">Tutorial 15</a>
               </td>
               <td>
                  <p>Write a PHP script to display data from two table using JOIN query.</p>
               </td>
            </tr>
            <tr>
               <td>
                  <a href="/ip_tutorials/cip" target="_blank"> Tutorial 16</a>
               </td>
               <td>
                  <p> Develop a mini project definition using Codeignitor framework.</p>
               </td>
            </tr>
         </table>
      </div>
   </body>
</html>