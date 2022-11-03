<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    <!-- bootstrap Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         .form_bg {
            background: linear-gradient(to bottom, #0063f8, #00cbfe);
            width: 100%;
            height: 100vh;

        }
            .header-bar {
            max-width: calc(1300px - 100px);
            margin: -4px auto;
        }

        .branding a {
            padding: 28px 5px 18px 7px;
        }

        .branding a {
            display: block;
        }

        .branding a img,
        .branding img {
            max-width: 100%;
            height: auto;
        }

        .header-bar .branding .mini-widgets {
            padding: 0px 0px 0px 0px;
        }

        .header-bar:not(.logo-center) .branding .mini-widgets {
            flex-grow: 1;
        }

        .header-bar.widgets .branding .mini-widgets {
            text-align: center;
            display: flex;
        }

        .top-right {
            position: absolute;
            top: -28px;
            right: 49px;
            display: table;
        }

        .helpline {
            padding-right: 10px;
            line-height: 35px;
        }

        .topaction {
            display: table-cell;
            vertical-align: middle;
        }

        .helpline a {
            font-size: 24px;
            font-weight: bold;
        }

        .helpline a {
            color: #333333;
            text-decoration: none;
            background: url(images/phone.png) no-repeat left top;
            display: block;
            padding: 0px 0px 0px 0px;
            background-size: 35px;
        }

        .header-bar {
            font: normal 15px / 28px "Poppins", Helvetica, Arial, Verdana, sans-serif;
            word-spacing: normal;
        }

        .yearslogo {
            width: 100px;
            display: flex;
        }

        .topaction {

            vertical-align: middle;
        }

        .topaction span {
            font-size: 24;
            font-weight: bold;
        }
        .btn{
    color: #fff;
    background-color: #222;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1px;
    width: 34%;
    padding: 10px 20px;
    margin:0 59px 20px 762px;
    border: none;
    border-radius: 20px;
    text-transform: uppercase;
}
.table{
    margin: 48px 0 21px 0;
    background-color:white;
}
.btn a{
    color:white;
}
        </style>
</head>

<body>
<header>
        <div class="header-bar">
            <div class="branding">
                <a class href="">
                    <img class="preload-me" src="https://amcas.in/wp-content/uploads/2019/10/logo.png" width="343px"
                        height="80px" sizes="450px" alt="AMCAS">
                </a>
                <div class="mini-widgets"></div>
                <div class="top-right">
                    <div class="helpline topaction">
                        <span>Admission Helpline</span>
                        <a href="tel:+9176316656">+91 91763 16656</a>
                    </div>
                    <a href="tel:+9176316656">
                        <div class="yearslogo topaction"><img
                                src="https://amcas.in/wp-content/themes/dt-the7/images/yearslogo.png"></div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    
<div class="form_bg">
<div class="container">
            

   <table  class="table" border="2"  cellpadding="0">
   <tr style="font-weight:bold;">
            <th><h2>Name</h2></th>
            <th><h2>RollNO</h2></th>
            <th><h2>Department</h2></th>
            <th><h2>BookName</h2></th>
            <th><h2>InitialDate</h2></th>
            <th><h2>renewalDate</h2></th>
            <th><h2>Status</h2></th>
            
             
        </tr>
        <?php
        $str="Not Submited";
     $str = stripcslashes($str);
        $conn = mysqli_connect("localhost","root","","test");
        if($conn -> connect_error){
            die("connection failed:" . $conn->  connect_error );
        
        }
        $sql=mysqli_query($conn," UPDATE std_details ". "SET Status='Submited' ". " WHERE Status='$str' ");
       
          $sql = "SELECT Name, RollNo, Department,  BookName, InitialDate,renewalDate,Status from std_details" ;
    $result = $conn-> query($sql);
        
        if($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>".$row["Name"]."</td><td>". $row["RollNo"]. "</td><td>".$row["Department"]."</td><td>". $row["BookName"]. "</td><td>".$row["InitialDate"] . "</td><td>".$row["renewalDate"] . "</td><td>".$row["Status"]."</td></tr>";
            }

            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
      
        
           
       </table>
       <button type="submit"  class="btn btn-primary"><a href="index.php">Log Out</a></button>
    </div>
    </div>
    </body>
</html>