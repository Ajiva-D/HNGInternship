<html>
    <head>
    <meta charset="utf-8">
    <title>HNG TASK 1</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .page-section {
            width: 100%;
            height: 100%;
            max-height: 100%;
            margin: 0;
            padding: 0;
            background-image: url('hourglass.png');
            background-size:100% 100%;

            background-repeat: no-repeat;
        }

        .nav {
            list-style-type: none;
            margin: 0;
            float: right;
            padding: 20px;
        }

        li, a {
            display: inline;
            color: #FFFCE8;
            margin: 3px;
            padding: 
            
        }
        .frame {
            text-align: center;
            padding: 300px;
        }

        .dateframe {
           font-size: 300%;
           color: #FFFFFF; 
        }

        .timeframe {
            font-size: 150%;
            color: #EDAE49;
        }
    </style>
</head>
<body>
    <div class="page-section">
        <ul class="nav">
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
        <div class="frame">
            <div class="dateframe">
                <?php
                    echo date("D, m Y");
                ?>
            </div>
            <div class="timeframe">
                <?php 
                    echo date("h:i:sA");
                ?>
            </div>
        </div>
</body>
</html>
