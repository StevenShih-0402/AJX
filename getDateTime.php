<?php
    header("Content-Type: text/xml");   /*指定輸出為XML文件 */
    $name = (isset($_POST["name"])) ? $_POST["name"] : $_GET["name"];
    $type = (isset($_POST["type"])) ? $_POST["type"] : $_GET["type"];

    echo "<?xml version=\"1.0\" ?>";
    date_default_timezone_set("Asia/Taipei");

    if($type == "date")
        $dt = date("m/j/Y");
    else
        $dt = date("h:i:s A");
    
    echo "<result>";
    echo "<name>" . $name . "</name>";
    echo "<date>" . $dt . "</date>";
    echo "</result>";

?>