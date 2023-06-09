<?php

include('Device.php');

class SROSDevice extends Device {

    public function sros_get_config($filter) {
        $rpc_filter= '<configure xmlns="urn:nokia.com:sros:ns:yang:sr:conf">'.$filter.'</configure>';
        return $this->get_config_ns($rpc_filter);
    }

    public function sros_get_state($filter) {
        $rpc_filter= '<state xmlns="urn:nokia.com:sros:ns:yang:sr:state">'.$filter.'</state>';
        return $this->get_config_ns($rpc_filter);
    }
}

?>
