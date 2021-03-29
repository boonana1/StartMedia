<?php
  $f_attempts = file_get_contents(__DIR__.DIRECTORY_SEPARATOR."data_attempts.json");
  $f_cars = file_get_contents(__DIR__.DIRECTORY_SEPARATOR."data_cars.json");

  $attempts = json_decode($f_attempts, true);
  $cars = json_decode($f_cars, true);

  $attempts = $attempts;
  $cars = $cars;
  $arr = array();

  $arr = $cars["data"];
  $elem = 0;
  foreach ($cars["data"] as $k => $item) { 
    $num = 0;
    $sum = 0;
    foreach ($attempts["data"] as $key => $value)
      {                  
        if ($item["id"] == $value["id"])
          {
            $att[$num] = $value["result"];
            array_push($arr[$k], $value["result"]);
            $num++;
          }
        
      }      
    $sum += $att[0] + $att[1] + $att[2] + $att[3];        
    array_push($arr[$k], $sum);
    $elem++;
  }

  switch ($_GET["sort"]) {
    case "total":
      usort($arr, function($a, $b) {
        $a1 = $a[4];
        $b1 = $b[4];
        return $a1 == $b1 ? 0 : ($a1 < $b1 ? 1 : -1);
      });
      break;
      case "1":
        usort($arr, function($a, $b) {
          $a1 = $a[0];
          $b1 = $b[0];
          return $a1 == $b1 ? 0 : ($a1 < $b1 ? 1 : -1);
        });
        break;
        case "2":
          usort($arr, function($a, $b) {
            $a1 = $a[1];
            $b1 = $b[1];
            return $a1 == $b1 ? 0 : ($a1 < $b1 ? 1 : -1);
          });
          break;
          case "3":
            usort($arr, function($a, $b) {
              $a1 = $a[2];
              $b1 = $b[2];
              return $a1 == $b1 ? 0 : ($a1 < $b1 ? 1 : -1);
            });
            break;
            case "4":
              usort($arr, function($a, $b) {
                $a1 = $a[3];
                $b1 = $b[3];
                return $a1 == $b1 ? 0 : ($a1 < $b1 ? 1 : -1);
              });
              break;
    
    default:
    usort($arr, function($a, $b) {
      $a1 = $a[4];
      $b1 = $b[4];
      return $a1 == $b1 ? 0 : ($a1 < $b1 ? 1 : -1);
    });
      break;
  }
?>