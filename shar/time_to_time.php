<?php

/**
 * A COMP2021 Project in HKUST
 * Author:
 *      Chan Nok Hin 20349103 nhchanaa@connect.ust.hk
 *      Cheng Ho Kei 12219689 hkchengad@connect.ust.hk
 *      Sze Ka Yau ⁠⁠⁠20348496 kyszeaa@connect.ust.hk
 */

class time_to_time{

    static function toTime($time){
        static $timeArray = array('9', '9', '10', '10', '11', '11',
                                    '12', '12', '13', '13', '14', '14',
                                    '15', '15', '16', '16');
        return $timeArray[$time-1];
    }

}