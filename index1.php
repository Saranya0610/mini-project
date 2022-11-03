<!DOCTYPE html>
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
    <!-- External css -->
    <style>
        .form_bg {
            background: linear-gradient(to bottom, #0063f8, #00cbfe);
            width: 100%;
            height: 100vh;
            display: inline-block;
        
        }

        h1 {
            text-align: center;
            font-family: monospace;


        }

        .form_horizontal .btn {
            color: #fff;
            background-color: rgb(0, 238, 255);
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 1px;
            width: 24%;
            padding: 15px 45px;
            margin: 5px 16px 5px -53px;
            border: none;
            border-radius: 25px;
            text-transform: uppercase;
            align-items: center;
        }

        .btn a {
            color: black;
            align-items: center;
        }
        .form_horizontal{
             margin: 76px 0 4px 65px;
        }
        .form_horizontal img {
            width: 130px;
            height: 130px;
            border-radius: 100px;
            opacity: 1;
            border: 2px solid rgba(255, 255, 255, 0);
        }

        .form_horizontal .image {
            position: relative;
            display: inline-flex;
            vertical-align: middle;
            flex-shrink: 0;
        }

        /* header */
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
            font-size: 24px;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <?php
    echo '<script>alert("something went wrong")</script>';
    ?>
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
            <div class="form_horizontal">
               
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABR1BMVEWj1eD///8zcYD0s4IqNjPio3nz+v8kLSt3OiOf098gLStuOCTYk2Sl1+IXHRzloXNwMhy8mS/ChF34/v8haXnfpXn2sn8SJijM5+284Oiw2+TV6/CvkC8aIBuDby0XJisXZXbt3dTj8vXq9fggKCMiMjMAAADX5OcdJCO/ysPxtIXksI6aytQtOjczQkCKtL24zdVkkZ1RhJF6oavIoi+ZXT+DRi11LxDmupWq0tlHgY9bdnp4nKJOZmiSv8duj5Q+UFBIXl9nhos8QTMSFhRZdHkFAACTnJyMh4WabCmFcmx/Vkd4Lwefr690Lg2OXCfZv6S2zs3Qw7C9wrrTsJShvMXs4NmWtL7qzLpwpbLw7ewAEhttXytaVTJCQCiWfjCNeDFSTzJoXjKheiyGTiWmaknGnUDCj1CdmpWdYULHiWFgHQbhybtJm7lhAAARA0lEQVR4nM2d6V/bRhrHxzIYlEbYRIoX2yQ4NmACJr4CDd6E3OndJG0ppU16bbPbZvv/v94ZSbZ1zIxm5nmG7O9N+DhGmi/PPZYlUrIuv9tptTYajSaV5xHPYz80GhutVqfr2z89sXhsirbRaHpuKJJV9LLXbGzYBbVF2O1EbDmwvCLOTtfSSmwQ+q2GIlwas9GyYUtsQr+z4WnCJTG9jQ42JSohNR4xxptBEmRTIhJ2KB6Ibk5JGh28ZWERdhtA42Ug3QZW5kEh9FtNVL6IsYnjrQiEPs0tyHgxpLeBwAgmRHbPDCOCswIJu017eDFkE8gIIqT2s8wXMsLsCCC8HD4wozGhv3FZfCGjec4xJWwhVXdlRNK6VEL7CYbDaJhyjAiNC4QXyRDRbVwSYcfMQRlZfzC5Pxn0iSGlSwz6VW1C3yiDUqT+5J93bmwz3bjzz0nfDNJtaGccXcKOQYdGYU7vPzjcXlmaaWX78MH9UxNI19M1oyahdolgYXf68NFKAm8GufLo4alBVLobFgl9zRRKl+8Onhze2F7ia/vG4ZOBqwvpNrU8VYewo4vXnzw/3L4iwIt0ZfvwuX5Q6niqBqGOh4ah9/gw55s80aB8rBmUOp6qTqicQ8PQe/JoWwlvBrn96IlOUGqURlVC1RBkvjmgZUGdbk5Ji8hA2V/Vg1GRsKt03jD0HtzRMF7WlHceKAelp9jEqREqtDFRWXi8ZIw3g1x6rFZEVBscJcJWER9b0ODJHWFZ0BNtep4MFDo7V2ncUCEsADQPPbHUglIJUYFQCsjwWEcmr3omusI6uwJIFcRiQnEZFHZkMuOs6Ly5sLNTKIyFhCLAqCPTDL2VNSatXwmDUtzZFSMWEfJdNOrI9MvCWqStHa3fokVE3NkVOmoBoQCwr9qRcQl/evN2Z0cXknZ2fSNEOaEA8KFOR5ZaaEj48/rd9V/eLmlDbj80QZQSdgQWvGGEFy+U/m123t7cpJC/P9U05Q2BFaWlX0bY5R2OET7bA9Y+SvYbg9x887M65MreMz4hIbIGTkLoizYsvMe7z9YQIJ++YZA3f95SgFzZW3u2+1iUUD1JGy4hbPIPxxAHz3d2d8GWXNrZWvr9FxqUvxYEJbXe7u7O84G4+DdNCGXzYNSG7r6gkFBTbh2+/SUKSn4NWaF4L3ajRlW8IMm8KCQsmuijfmYXxV+XfvuVQb7JQYa+uRv1NfLliCu/iJCfRnOQ7v0Hz148w8g8T2nmubv5JpFeqfHosR/cV9uqEiZUAaFffMgZJA3KQ5ygpJln/e7mzd9ivN3dQxp66jsbgmwjIBRnGR4lDcpHL9bW4EG585Rlnptbe2trLx4VhF5OgmzDJ9Td+GV96rM91q+A/XVre/PmT2t7a/rb/oJQ5BKqBGGO8QYdjKCQ4QE2b27RQ5ns+HNDkUfom3xmEhKCIONf3YsJTdbAC0UeodmnSzEhg9wLV6pDOf+dlZUr5oTcqsghNPDRNOEMUtWUM+NFvwog5Poph9Dk0FlCdX+dvW0uCCHh4eD4KI9QATKHByXk+GmOsGv6ET2PUOavad/EsqGbG6RyhKZXWYgI+ZAiPDhhru5nCQu3tw0IF/66lyLmC0aY39PIEKr2o9qEc7A1ofFwCHP9aYbQ/FKuYsKIck9Gh0GYbd7ShKZpRplQQVtQG2aSTZqwYXxY4q1d0dQ/8qKvbv2+vrl05cq2OSFpiAkBJiTeJ7WPtHR8PS/2+vr6+r8++vgTAGHaiClCgAkp4derGqq9K3N0rbb6ByXcrH0NIUwbMUkIMSHxPv1YHa92VOUBlsvHq6uU8LPax59CCFNGTBLqDPZ5ws9rOQ6Bjt8t8/nK5avMiJu11drnEMLUuJ8gBJmQeF9kAa/x9V5gvkhHtc319Zerq1+ACJNGTBBCopASZl3xqgxEqHcvqZeuU3cAESYjcUHowy779b5MGfBYaimxrm0ywperX8IIXZ9DCL0yPUlYOzLjK5ffh4Sf1b6ELSbR2MwJjTZnEuonCPmlQEnL6zFhH7acxZbNnNB4qIiPeLYgrF0zBlwQngHdtJUjBJUKSvjVouCb5ZhI1Zjw66+APtXMEsJKRbKlMc0xsWaEoKaGJArGjBD6DZ854TGID5GwkSGEfkPE+yRu2v7CIQS13hFimtBsj5RDCEijoeoh4SYGYSdFCOtnkoSAPMr075Dw7ks44ayviQjNt2ewCev/+Yzq5SoCYbxhQzCKYZLwPYyw/J4OH/Q4CIRxSSQ4TjofD2uQYsh0NRrCYANipMaCEO6kxPszJhSOfoqq4hFGbkpQMilxvT//ODqmi6vB6n1MeHx09Cf8K/BRNiUYYwVxb99jq/uLEgIBy2VKGE4m926DV7UxJwSXnm/qdbaoazUUwigf1+vfgIv0jBA4+xJyUo8W957+/cGEi3xcfw1cVzgHE4RaQU0YLWm5Bm5L2XbbLB/XX0EX1ooJobXC3S8jEh4t8vE+1LkaMSE4L88Iy0iEsx/3T4AL8yJC6GhITuarOzbfoJnrr9oilqGEbEgkCNUQm3DuB/BU0wkJwbe3WBAe1aDjYbn8LvFXAtuwERICd2hIIg7fQcfD8BiLvxKUkO3WEPA2YiKX0pKPQTg/xj50ZWxTkcATDXEPMAmvLUZMcLVgqYZgtN2v4opffv9f4AAcHmM2YtbvYTTfBN52L3qachU6WTAtzw4C7mnC5psgTL/ut3Xpkk0Fb71ZV0MQUil5bYkQWg4JS6YE3rNRI1oihK+M9m0EPDpRufesEMJTKRugCLxYJJMpphASDSsXBF4sbKWa+rcYS+sQ+FYpWQz5uITgno2wIRiHkNzDR6zfw1gYJUS5sdyi5iMSIlRDVvIJvOAznRSvWFsYTkpLPhIhfjZFyaSEESK0NKH2cRHr8MkpUhON8OSgXq/vFy9dQfvsSDg+iklIu9Pbr1F8tf6KHgltVZiENBpRWvD6a8zbTjYJQuO9kItQFxHm3qQ8ZMLbCITgz5xSQuUjyU0pY2FMFCnhMkqNWOX8lDchRr+dELKXio1YnWn+0yWZ0EPNpURkxCpXXBPiRiF2tWDipVM+II8ROZESG4TcbamrfHFMiFfqY1kg5DbhVQ4fx0ux2u2EmkizRUq8ZJNH5IUhVrudENb0lBK/d6sW8lnwUUZo4ebxoom/OoMUlAqcqT6zlg2kfZqMjNpTnI2ZjNB2ojI6MZiH8UbCpCghxn5pXgbbiyibhzm5HZQ9b86BtYcM9GYmXkgX5XML3pE1ES0Bss8tMD574h5aa97HnesT8nA+P+RKB9EaYPj5oYWSH8l9XVZjrJetAYafAdt7Xox7olQX6/dO7C1hA+VaDMkJFD7PsNHJLBbQQbmeRnaG24WElpJofP4uyjVR0lMUbBJbmJeSCq+JspZMQ7nfVmXfT1iuIm88ZdTEuTZRqtfV5WURI/2fqoWBaaH42kSbqYZ2qMuh+HxUVrrRmeLrS62mGkKuLy9zIGcvXrd67vgaYVt9W3ySg+WFov2N/cQrB3YTDdK1+lK53y3L9J1VwgbS9y2k+pCE8+9bWBqg4rO8qkoAq1bL4fw7M1YD0f1GSmizZVt878li8/1BbZj47prV5vvDxWHi+4cI3yEVn+ZASmi1Wiy+Q2qtXrhU16WE113d58yrK/E9YEv1wm30er3bUsDl5dv0PXY649R3ua24qduodHu9v2WJhqaav3u9bsUOYvL7+Dbc1N3wK5VeT55oaKrp9SoVK4/eTd1TwUY2bVFAakR5GNJApCakiC3082fuiwG+t0lK7F7cnUqoAidlbhq9sUP07sBeqMy9TXDG4NnDcN3T02607sqtQsJb8Tu7p6cu6Gm6aeXuTwO+xxCT2z+9uBhNnfa448frrsjLIS2Iszf6nXHbmY4uBv0+QeDM3WMIslvDltM/HVyMp04QOI4TTCpzQL/AiNVbi7dWJuFvB850TDldGGXuPlGmJTGkG1C7OWx1odqT+aLZugt6mtR7J+3ZQejRphcDc0rOvb4MNhXDpzRfjCPDzRWclSpJfS/tvL9Pvbd0lj5U4IwMnwDNuV+b7oAR2y5Nx1Y19FOLlhvxIPvmYe54QWxLrdXx7rmnNQczPGY8J69eZs1SI2ZMyBB7nGMGzphB6hDy7puo3tfQpHkx5eIF0zygLJ0e5N/s96bcI1NIjYLJvfelYsGgZzkd5XwzXsaoywEUGzFvQobYHQmO7oxOVZ80y79/qUrBCM3HXwDVhLNgmRE5Jgw1EZ0gmA6ULhcV3INWwYgeueB6Z6xRhWdCYU1M1MLU2ysj8Slo3ilmFN5HuCgSPU/KR0+f6GVSa+YbMZtI4zd3xvKTOIMiXxXeC1puRM87FfvnXLxMI4hEbhTyk2nWjvJ4lNzPW2ZEzxUkABVErhG5JlQAZIxSV5Xck11iRGpAlVNzKn4oTiTOh4oUYK7iC84yFT0KseC++uInxw7UzkzVPuMh5o3IS6T+Wbv4BDHjqeLTZdWeb+FdKANSxPM8Yj6d8hKpf64MSBFFj0OUP9+CP2JoWDA8N68uZo3IM+FE7zRcxKJnlHCfM+P1dU7Mzj3O9TZZI+ZN6HflVYIjTiwWP2eGl2w8xSSTQJzmCmMmneYSqd9RqEUZTTmExc8Kyu/YeKfap3Y4VSNlxFwiVasSGeWzjcrznvLP7PLGBid3nFzVSBoxG4X+0Ogc45wROTj5lzJ7p55rdPJc1UhGYjYKNapEWm4aUfG5axk/NXNSh1M1DkQm1KoSSWXcVPXZeZktG61amD7/omr4vl/xf5gZsfqDH74yk16VSJ7hIr1U1ecfpv3UMAzDBYTjFGMZTmhY/ji34Y808CbDiJIOS6aAmUBUf4ZlqnkzDcMIkVaNbu981A6CKTNiDMhMOA2C9ui81zWpEgklAlHnOaTJcd84DCNNR047PECbGTFy0yozYRh5QdsZaRfbpJKBqPUs2UR/ah6GGY2p4V6FhK/oT+aun1YiEPWeB7wIRUAYphXMjBiaEOnPtghE3Wc6L0LRQ1oKXUwlikQahRWsP5vjeNIglBHGVdHrY/21IyPGiRTvoFH3bfJs9TjbaA5OUoWRWMWMwvkIJcgyBYQ+u2e4d4G2mDidzhMpjliqcbmlvpiw1MVMNEysJt5itRDxmGGqyY1MioQsoeIlGme2S4UYhUyeOI0WE5Zaru54L9c4bEMx3YIO+rl9Cx3CUgsx0TiREZFNGAzkgEWEJdPBTaAxugnbZwUERYQl09GNr2BYwjVh+7wIoJCwdI66oilqInWCQkAFQlzEwHja5R6tGFCFEDsW8VQYg6qEJcweBFHtocrilQiRswOSAiVARcKSyX6tbfXUlq5IWILtpuArmEpbNQPCkg/YEcNXMJJME4aE2IURJJUqYUD4/5NvFHOMPmGp4DqQS1IwVg1BfULsLtVIxZ0oiLA0lF8zZF2Bo+OhJoSl7uRDmrE9kW1Y4BCyhPOhzBhopRhzwpKPOh9oAE6UiyCQkDZxHyCpBmPFNg2FkE5Ul+yqQaAyKWESXnLGMcgwYELqqpfWqQYjMweFEjLGy7BjG8IHJGQpxzZj2zDBYBGGvmrPWQOQfyIRUsaJpU4ucCZgPhRCmlfPpm1syKA9PTPOn0mhEJaYIVGdNQgwzBcKi5D2csMRkrcGzmho0p/xhUdI1R3StAOjpL8/GqJ450yohFSV4cQxjsmg7UyGFeQVYRMy9c5Gjq4t2ftHZ1ixl5QNQqbecDJWxGTvGk+GNuiYbBEydXvDc8rZbgc8VPZiu03Zzoc91MDLyCZhJN/vDYdn55PReDqNPjuk/45Hk/Oz4bDn4+VMkf4HB1ioADd41YcAAAAASUVORK5CYII="
                        class="image">
                    <button type="login" class="btn signin1"><a href="student-dtails.php">Student Login</a></button>
               
              
                    <img src="data:image/jpeg;base64,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"
                        class="image">
                    <button type="login" class="btn signin2"><a href="admin-details.php">Admin Login</a></button>
              
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEzUXI9fIdyW0JvQBahC5cW-Gf443uHKEQAQ&usqp=CAU"
                        class="image">
                    <button type="login" class="btn signin3"><a href="stafflogin.php">Staff Login</a></button>
               
    </div>
    </div>
     
</body>

</html>