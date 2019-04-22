<?php
    /**
     * 获取主机IPv4
     */
    function get_ipv4(){
        if (isset($_ENV["HOSTNAME"])){
            $MachineName = $_ENV["HOSTNAME"];
        } else if(isset($_ENV["COMPUTERNAME"])){
            $MachineName = $_ENV["COMPUTERNAME"];
        }else{
            $MachineName = "";
        }
        return gethostbyname($MachineName);
    }
  echo get_ipv4();
?>
