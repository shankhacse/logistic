<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shift_model extends CI_Model{
	
	
    public function getSiftDate($satrt_time){
      date_default_timezone_set('Asia/Kolkata');
        $shiftCode = "";
        $shiftDate = NULL;
        $timeHr = date("H",strtotime($satrt_time));

        if($timeHr>=1 AND $timeHr<6){
           // $shiftCode = "C";
           $shiftDate = date("Y-m-d",strtotime($satrt_time." -1 day"));
        }
        if($timeHr>=6 AND $timeHr<14){
           // $shiftCode = "A";
           $shiftDate = date("Y-m-d",strtotime($satrt_time));
        }
        elseif($timeHr>= 14 && $timeHr<20){
          //  $shiftCode = "B";
          $shiftDate = date("Y-m-d",strtotime($satrt_time));
        }
        elseif($timeHr>= 20){
          //  $shiftCode = "C";
          $shiftDate = date("Y-m-d",strtotime($satrt_time));
        }
        return $shiftDate;
    }
	
    
	
}