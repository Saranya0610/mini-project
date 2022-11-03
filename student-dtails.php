<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form_bg {
            background: linear-gradient(to bottom, #0063f8, #00cbfe);
            height: 80vh;
            display: flex;
            align-items: center;
        }

        .form_horizontal {
            font-family: 'lato', sans-serif;
            text-align: center;
        }

        .form_horizontal .form-group {
            margin: 0 397px 0 219px;
            position: relative;
        }

        .form_horizontal label {
            font-size: 22px;
            color: #333;
            height: 36px;
            width: 205px;
            margin-top: 0px;
            margin-left: 11px;
            text-align: left;
            clear: both;
   
        }

        .form_horizontal input {
            height: 30px;
            width: 305px;
            border: 1px solid #000;
            margin-top: 0px;
            float: right;
        }
        /* header */
        .header-bar{
        max-width: calc(1300px - 100px);
        margin: 9px auto;
        }
        .branding  a {
            padding: 28px 5px 18px 7px;
         }
         .branding a {
           display: block;
        }
       .branding a img, .branding img {
         max-width: 100%;
         height: auto;
        }
        .header-bar .branding .mini-widgets {
          padding: 0px 0px 0px 0px;
          }
          .header-bar:not(.logo-center) .branding .mini-widgets{
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
.header-bar{
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
.topaction span{
    font-size: 24;
    font-weight: bold;
}
    </style>
</head>

<body>
    <header>
        <div class="header-bar">
            <div class="branding">
                <a class href="">
                    <img class="preload-me" src="https://amcas.in/wp-content/uploads/2019/10/logo.png" width="250"
                        height="80" sizes="450px" alt="AMCAS">
                </a>
                <div class="mini-widgets"></div>
                <div class="top-right">
                    <div class="helpline topaction">
                        <span>Admission Helpline</span>
                        <a href="tel:+9176316656">+91 91763 16656</a>
                    </div>
                    <a href="tel:+9176316656">
                        <div class="yearslogo topaction"><img src="https://amcas.in/wp-content/themes/dt-the7/images/yearslogo.png"></div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="form_bg">
        <div class="container">
            
            <form class="form_horizontal" action="process.php" method="post">

                <div class="form-group">

                    <label>Name</label>
                    <input class="form-control" type="text" name="Name" placeholder="Enter Value">

                    <label>RollNO</label>
                    <input class="form-control" type="number" name="RollNo" placeholder="Enter Value">
                    <label>Department</label>
                    <input class="form-control" type="text" name="Department" placeholder="Enter Value">
                    <label>BookName</label>
                    <input class="form-control" type="text" name="BookName" placeholder="Enter Value">
                    <label>InitialDate</label>
                    <input class="form-control" type="date" name="InitialDate" placeholder="Enter Value">
                    <label>renewalDate</label>
                    <input class="form-control" type="date" name="renewalDate" placeholder="Enter Value">
                </div>
                <button class="btn signin" onclick="myFunction()">Save</button>
                <button class="btn signin"><a href="index.php">Go back</a></button>
            </form>
        </div>
    </div>

    </div>
    <script>
function myFunction() {
  alert("your record was saved!!!");
}
</script>

</body>

</html>