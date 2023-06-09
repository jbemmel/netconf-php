<?php
    include('netconf/SROSDevice.php');
    //creating a new device and establishing NETCONF session
    $d = new SROSDevice("192.168.121.102", "admin", "admin");
    $d->connect();
    echo "connected to device";
    //getting reply from server 
    try
    {
    $inven = $d->sros_get_config("<port/>");
    echo "sros_get_config:" . $inven->to_string();
    }
    catch(Exception $e)
    {
    echo 'exception', $e->getMessage(), "\n";
    }
    //closing device
    $d->close();
    echo "device closed";
    ?>