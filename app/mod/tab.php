<?php

namespace app\mod;
defined( '_MOTTO' ) or die( 'Restricted access' );

class Tab_emailcim_S
{

    static public function Res()
    {
        
        $sql="SELECT * FROM eposted WHERE emailid='".$_GET['emailid']."'";
        $parT['dataT']=\lib\db\DB::assoc_tomb($sql);
        $parT['dataszerkT']=[
            'touserid'=>['cim'=>'userid'],
            'cim'=>['cim'=>'emailcim'],
            'res'=>['cim'=>'Sttusz'],
            'datum'=>['cim'=>'Dátum']];
         return \mod\tabla\Tabla_S::Res($parT);
    }
}