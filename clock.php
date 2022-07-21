<html>
    <head>
        <meta http-equiv="refresh" content="1"/>
        <style>
            body{
                background-color: powderblue;
            }
            p{
                font-size:90px;
                position :absolute;
                left:30%;
                top:30%;
            }
            </style>
        <p><?php
            date_default_timezone_set('Asia/Kolkata');
            echo date(" h: i: s A");
        ?></p>
</head>
</html>