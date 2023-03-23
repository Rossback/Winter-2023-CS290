<?php
    if(isset($_POST['Link']))
    {
    $data=$_POST['Link'];
    $fp = fopen("data.txt", "a");
    fwrite($fp, '<a href="');
    fwrite($fp, $data);
    fwrite($fp, '" target="_blank">');
    fclose($fp);
    }
    if(isset($_POST['Song']))
    {
    $data=$_POST['Song'];
    $fp = fopen("data.txt", "a");
    fwrite($fp, $data);
    fwrite($fp, "</a><br>");
    fclose($fp);
    }
    if(isset($_POST['Artist']))
    {
    $data=$_POST['Artist'];
    $fp = fopen("data.txt", "a");
    fwrite($fp, "Artist: ");
    fwrite($fp, $data);
    fwrite($fp, "<br>");
    fclose($fp);
    }
    if(isset($_POST['Mapper']))
    {
    $data=$_POST['Mapper'];
    $fp = fopen("data.txt", "a");
    fwrite($fp, "Mapper: ");
    fwrite($fp, $data);
    fwrite($fp, "<br><br>");
    fclose($fp);
    }

    header("Location: http://www.chrepo.com:2580");
?>