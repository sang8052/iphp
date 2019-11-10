<?php


class class_exception
{
    private $Conf;
    private $Ex;
    public function  __construct()
    {
        global $Exception_Conf;
        $this->Conf=$Exception_Conf;
        $mysqli=new class_mysqli();
        $sql="select * from Exception ";
        $mysqli->sql_query($sql);
        $this->Ex=$mysqli->res_array("key_value","code","description");

    }

    public function Out($code)
    {

          switch ($this->Conf['level'])
          {
              case "Warning": $this->Echo_Warning($code);break;
              case "Notice": $this->Echo_Notice($code);break;
              case "Error": $this->Echo_Error($code);break;
          }
    }


    private function Echo_Warning($code)
    {
       Json_Result($code,"",$this->Ex[$code]);
       die();
    }

    private function Echo_Notice($code)
    {

    }

    private function Echo_Error($code)
    {

    }
}