<?php
class calendar{
  function year($year){
    if($year%4==0){
      if($year%100==0){
        if($year%400==0){
          $answer=366;
        }
        else{
          $answer=365;
        }
      }
      else{
        $answer=366;
      }
    }
    else{
      $answer=365;
    }
    print $answer."days";
    return $answer;
  }

  function month($year,$month){
    $month31=[1,3,5,7,8,10,12];
    $answer=30;
    foreach($month31 as $value){
      if($month==$value){
        $answer=31;
        break;
      }
    }
    if($month==2){
      if($this->leapYear($year)=="true"){
        $answer=29;
      }
      else{
        $answer=28;
      }
    }
    print $answer;
    return $answer;
  }

  function leapYear($year){
    if($year%4==0){
      if($year%100==0){
        if($year%400==0){
          $answer="true";
        }
        else{
          $answer="false";
        }
      }
      else{
        $answer="true";
      }
    }
    else{
      $answer="false";
    }
    print $answer;
    return $answer;
  }

  function wdotwInt($year,$month,$day){
    $h=((365*$year)+($year/4)-($year/100)+($year/400)+((306*($month+1))/10)+$day-428)%7;
    print $h;
  }

  function wdotwStr($year,$month,$day){
    $h=((365*$year)+($year/4)-($year/100)+($year/400)+((306*($month+1))/10)+$day-428)%7;
    switch ($h) {
      case 0:
        $answer="日";
        break;
      case 1:
        $answer="月";
        break;
      case 2:
        $answer="火";
        break;
      case 3:
        $answer="水";
        break;
      case 4:
        $answer="木";
        break;
      case 5:
        $answer="金";
        break;
      case 6:
        $answer="土";
        break;
      default:
        $answer=null;
        break;
    }
    print $answer;
    return $answer;
  }
}

$object = new calendar;
switch($method){
  case 0:
    $object->year(2022,8,9);
    break;
  case 1:
    $object->month(2022,8,9);
    break;
  case 2:
    $object->leapYear(2022,8,9);
    break;
  case 3:
    $object->wdotwInt(2022,8,9);
    break;
  case 4:
    $object->wdotwStr(2022,8,9);
    break;
}
?>
