<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>

    <style type="text/css">
			body, *
            {

            }
            body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td
            {
                margin: 0;
                padding: 0;
            }

            fieldset,img
            {
                border: 0;
            }


            /* Settin up the page */

            html, body, #main
            {
                overflow: hidden; /* */
            }

            body
            {
                color: white;

                font-size: 20px;
                line-height: 24px;
            }
            body, html, #main
            {
                background: transparent !important;
            }

            h1
            {
                font-size: 70px;
                line-height: 70px;
                margin-bottom: 28px;
                margin-top:10px;
                color: #00d04a;
                text-shadow:0px -2px 0px black;
                text-transform: uppercase;
                text-align: center;
            }
            h2
            {
                width: 180px;
                margin: 0px auto;
                padding-top: 20px;
                font-size: 20px;
                line-height: 18px;
                color: #7e7e7e;
                text-transform: uppercase;
                text-align: center;
            }


    </style>

    <title></title>
</head>

<body>
    <h2>BTC Price</h2>

    <h1 id='btcprice'>$</h1><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js">
</script><script type="text/javascript">

    function getSummary()
    {

    $.ajax({

     type: "GET",
     url: 'https://api.bitcoinaverage.com/ticker/global/USD/last',
     //url: 'http://google.com',
     //url: 'currentprice.json',
     success: function(data) {
           // data is ur summary
          //var jsonData = $.parseJSON(data);
          console.log(data);
          $('#btcprice').html('$' + data);
     }

    });

    }

    $(document).ready(function() { 

        getSummary();

        window.setInterval(function(){
            getSummary();
            }, 50000);

    });

    </script>
</body>
</html>
