<html>
    <head>
        <title>系上資源簡介</title>
        <meta content="text/html" charset="utf-8" http-equiv="content-type" />
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/lightbox-2.6.min.js"></script>
        <link href="css/lightbox.css" rel="stylesheet" />
        <script src="js/jquery-2.0.3.min.js" ></script>
        <style>

        </style>
        <script>
            function clickIE4(){
                if (event.button==2){
                    return false;
                }
            }
            function clickNS4(e){
                if (document.layers||document.getElementById&&!document.all){
                    if (e.which==2||e.which==3){
                        return false;
                    }
                }
            }
            function OnDeny(){
                if(event.ctrlKey || event.keyCode==78 && event.ctrlKey || event.altKey || event.altKey && event.keyCode==115){
                    return false;
                }
            }
            if (document.layers){
                document.captureEvents(Event.MOUSEDOWN);
                document.onmousedown=clickNS4;
                document.onkeydown=OnDeny();
            }else if (document.all&&!document.getElementById){
            document.onmousedown=clickIE4;
            document.onkeydown=OnDeny();
            }
            document.oncontextmenu=new Function("return false");
            $(document).ready(function() {
                             $("#mainFrame").click(function() {
                               });
            });
        </script>
    </head>
    <body onselectstart="return false">
        <center><a href="#" onclick='$("#mainFrame").load("./509.php")'>實驗室</a>&nbsp;&nbsp;
          <a onclick='$("#mainFrame").load("./401.php")' href="#">401</a>&nbsp;&nbsp;
          <a href="#" onclick = '$("#mainFrame").load("./206.php")'>206</a>&nbsp;&nbsp;
          <a href="#" onclick = '$("#mainFrame").load("./003c.php")'>003c</a></center>
        <div id="mainFrame"></div>
    </body>
</html>
