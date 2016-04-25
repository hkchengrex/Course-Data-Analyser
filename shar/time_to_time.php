<?php

class time_to_time{

    static function toTime($time){
        static $timeArray = array('9', '9', '10', '10', '11', '11',
                                    '12', '12', '13', '13', '14', '14',
                                    '15', '15', '16', '16');
        return $timeArray[$time-1];
    }

}