<?php

// BUOI 3
//cau 1 kiểm tra xem một số có phải là số chẵn hay không.
echo "Bài 1:" ;
function kiemTraChan($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không phải là số chẵn.";
    }
}
kiemTraChan(4); 
kiemTraChan(7); 
echo "<br>";  


/*$number_check = 15;
$so_du = $number_check % 2;
if ($so_du == 0)
{
    echo 'Số' .$number_check. 'là số chẵn';

}
else {
    echo 'Số' .$number_check. 'không là số chẵn'."</br></br>";
}*/


//cau2 tính tổng của các số từ 1 đến n.
echo "Bài 2:" ;
function sum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
echo "<br>";
echo "Tổng các số từ 1 đến $n là: " . sum($n);
echo "<br>";

/*$n = 15;
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $sum = $sum + $i;
}
echo "Tổng của các số từ 1 đến $n là $sum" ."</br></br>";*/


//cau 3 in ra bảng cửu chương từ 1 đến 10.
echo "Bài 3:" ;
function inBangCuuChuong($n) {
    echo "Bảng cửu chương $n:" ."<br>";
    for ($i = 1; $i <= 10; $i++) {
        $ketQua = $n * $i;
        echo "$n x $i = $ketQua";
        echo "<br>";
    }
    echo "\n";
}
for ($n = 1; $n <= 10; $n++) {
    inBangCuuChuong($n);
}
echo "<br>";  
/*for ($i = 1; $i <= 10; $i++) {
    echo "Bảng cửu chương số $i: <br>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "<br>";
}*/

//cau 4 kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
echo "Bài 4:" ;
function check($name, $word) {
    if (strstr($name, $word)) {
        echo ("$name chứa $word");
    } else {
        echo ("$name không chứa $word");
    }
}
$name = 'kim anh';
$word = 'anh';
$result = check($name, $word);
echo "<br>";  
//cau 5 tìm giá trị lớn nhất và nhỏ nhất trong một mảng. 
echo "Bài 5:" ;
function findValue($array) {
    echo "Giá trị lớn nhất là: " . Max($array) . "<br>";
    echo "Giá trị nhỏ nhất là: " . Min($array) ;
}
findValue($array = [14, 7, 31, 12, 2002, 1995]);
echo "<br>";  
//6 Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. sort: sắp xếp, dùng vl foreach để lặp qua từng cặp dt của mảng.
echo "Bài 6:" ;
function sortArray($array) {
   sort($array); 
   echo " Mảng sắp xếp theo thứ tự tăng dần là : " ;
     foreach( $array as $value) {
         echo $value .  "," ;
}
}
sortArray($array = [29,12,4,27,7]);
echo "<br>" ;
//7 Viết chương trình PHP để tính giai thừa của một số nguyên dương. vl for lặp với số lần nhất định
echo "Bài 7:" ;
function factorialcalculation($number) {
       $factorial= 1;
       if ($number == 0 || $number == 1) {
           return $factorial;
       } 
       else {
           for($i = 2; $i <= $number; $i ++) {
               $factorial *= $i;
           }
           return $factorial;
       }
   }
$number = 14 ;
echo " Giai thừa của " . $number . " là: " . factorialcalculation( $number ) . "<br>";
//8 Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Bài 8:" ;
function findPrime($number) {
   for ($i = 2; $i <= sqrt($number); $i++) {
       if ($number % $i == 0){
           return false;
       }
   }
   return true;
}
   function showPrime($a, $b){
       echo " Số nguyên tố là: " ;
          for ($i = $a; $i <= $b; $i++){
             if(findPrime($i))
              echo $i, ",";
   }
}
showprime (7,14);
echo "<br>";
//9 Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "Bài 9:" ;
function totalarray($array){
   $sum = 0;
   foreach ($array as $value){
       $sum += $value;
   }
   return $sum;
}
$array = [1,11,4,12,25,10] ;
echo " Tổng của các số trong một mảng là: " . totalarray($array);
echo "<br>";
//10 Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
echo "Bài 10:" ;
function fibonacci($n) {
   if ($n < 0) {
       return - 1;
   } else if ($n == 0 || $n == 1) {
       return $n;
   } else {
       return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
   }
} 
echo "Các số Fibonacci trong khoảng từ 0 đến 14 là: " ;
for($i = 0; $i <= 14; $i ++) {
   echo (fibonacci ( $i ) . " ");}
echo " <br> ";
//11 Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
echo "Bài 11:" ;
function armstrong($number){
       $sum = 0;
       $temp = $number;
       $number1 = strlen($number);
   
       while ($temp!= 0) {
           $remainder = $temp % 10;
           $sum += pow($remainder, $number1);
           $temp = (int)($temp/ 10);
       }
       if ($number == $sum) {
           return true;
       } else {
           return false;
       }
   }
   $number = 1407;
   if (armstrong($number)) {
       echo $number . " là số Armstrong.";
      } 
   else {
      echo $number . " không là số Armstrong.";
      }
echo "<br>";
//12 Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "Bài 12" ;
function insertelement($array, $element, $position) {
   array_splice($array, $position, 0, $element);
   return $array;
}
$array = array(14,7,1,11,12);
$element = 39;
$position = 4;
$newArray = insertElement($array, $element, $position);
echo " Mảng mới sau khi chèn phần tử " . $element . " vào vị trí " . $position . " là: ";
foreach ($newArray as $value) {
   echo $value . ",";
}
echo "<br>" ;
//13 Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo "Bài 13: ";
function arrayUnique($array) {
   $array = array_unique($array);
   return $array;
}
$array = array(2,4,5,6,5);
$newArray = arrayUnique($array);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
foreach ($newArray as $value) {
   echo $value . " ";
}
echo "<br>";
//14 Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "Bài 14: ";
function findposition($arr, $element) {
   $positions = [];
   foreach ($arr as $index => $value) {
       if ($value == $element) {
           $positions[] = $index;
       }
   }
   return $positions;
}
$array = [7, 2, 14, 5, 3, 5];
$element = 5;
$positions = findposition($array, $element);
echo "Vị trí của số $element trong mảng là: " . implode(", ", $positions);
echo "<br>" ;
//15 Viết chương trình PHP để đảo ngược một chuỗi.
echo "Bài 15: " ;
function revertString($string){
   return strrev($string);
}
echo revertString("Thanh Thao") . "<br>" ;
//16 Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "Bài 16: ";
function calculateelements($array) {
   $count = count($array);
   return $count;
}
$array = [14,7,2002];
echo "Số phần tử trong mảng: " . calculateelements($array);
echo "<br>" ;
//17 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
echo "Bài 17:";
function checkPalindrome($string) {
   if ($string == strrev($string)) {
       echo "Chuỗi '$string' là chuỗi Palindrome.";
   } else {
       echo "Chuỗi '$string' không là chuỗi Palindrome.";
   }
}
checkPalindrome("27 tuổi lấy chồng"); 
echo "<br>" ;
//18 Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "Bài 18: ";
function countOccurrences($array, $element) {
  $count = 0;
  foreach ($array as $value) {
      if ($value == $element) {
          $count++;
      }
  }
  return $count;
}

$array = array( 2, 4, 2, 5);
$element = 2;
$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử " . $element . " trong mảng là: " . $occurrences;
echo "<br>";
//19 Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo "Bài 19:" ;
function arrDecrease($array) {
   rsort($array); 
   echo " Mảng sắp xếp theo thứ tự giảm dần là : " ;
     foreach( $array as $value) {
         echo $value .  "," ;
}
}
arrDecrease($array = [3,5,7,9]);
echo "<br>" ;
//20 Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
echo "Bài 20: ";
function addElement($array, $element, $position) {
  if ($position == "start") {
      array_unshift($array, $element);
  } elseif ($position == "end") {
      array_push($array, $element);
  }
  return $array;
}

$array = array(1, 2, 4, 5);
$element = 14;
$position = "end";
$newArray = addElement($array, $element, $position);
echo "Mảng mới sau khi thêm phần tử " . $element . " vào vị trí " . $position . " là: ";
foreach ($newArray as $value) {
  echo $value . " ";
}
echo "<br>";
//21 Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "Bài 21: ";
function findSecondLargest($array) {
   $max = $array[0]; 
       $secondMax = null; 
       foreach ($array as $num) {
           if ($num > $max) {
               $secondMax = $max;  
               $max = $num; 
           } elseif ($num != $max && ($secondMax === null || $num > $secondMax)) {
               $secondMax = $num;
           }
       }
       echo "Số lớn thứ hai trong mảng là: $secondMax";
   }
$numbers = [14,25,29,30,7];
findSecondLargest($numbers);
echo "<br>";
//22 Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "Bài 22:   ";
function finducbc($a, $b) {
   $ucln = $a;
   $temp = $b;
   while ($temp != 0) {
       $r = $ucln % $temp;
       $ucln = $temp;
       $temp = $r;
   }
   $bcnn = ($a * $b) / $ucln;
   echo "UCLN là : $ucln và BCNN là: $bcnn";

}
       finducbc(7,14);
echo "<br>";
//23 Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo "Bài 23: ";
function isPerfectNumber($number) {
  $sum = 0;
  for ($i = 1; $i < $number; $i++) {
      if ($number % $i == 0) {
          $sum += $i;
      }
  }
  if ($sum == $number) {
   echo "Số" .$number . " là số hoàn hảo.";
  } else {
   echo "Số" . $number . " không là số hoàn hảo.";
}
}
isPerfectNumber(14) ;
echo "<br>";
//24 Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo "Bài 24: ";
function findoddnumber($array) {
   $max= null;
   foreach ($array as $value) {
       if ($value % 2 == 1) {
           if ($max === null || $value > $max) {
               $max= $value;
           }
       }
   }
   return $max;
}
$array = [14,21,28,31,23];
$max = findoddnumber($array);
echo "Số lẻ lớn nhất trong mảng là: " . $max;
echo "<br>";
//25 Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "Bài 25: ";
function isPrime($number) {
   if ($number <= 1) {
       return false;
   }
   for ($i = 2; $i <= sqrt($number); $i++) {
       if ($number % $i == 0) {
           return false;
       }
   }
   return true;
}
if (isPrime(14)) {
   echo " là số nguyên tố.";
} else {
   echo " không là số nguyên tố.";
}
echo "<br>" ;
//26 Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo "Bài 26: ";
function findnumber($array) {
   $max = $array[0];
   foreach ($array as $value){
       if($value > 0 && $value > $max){
               $max = $value;
       }
   }
   echo "Số dương lớn nhất trong mảng là: $max";
}
$number = [1,2,14,-9];
findnumber($number);
echo "<br>";
//27 Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo "Bài 27: ";
function findnegativenumber($arr) {
   $maxNegative = null;
   foreach ($arr as $value) {
       if ($value < 0) {
           if ($maxNegative === null && $value > $maxNegative) {
               $maxNegative = $value;
           }
       }
   }
   return $maxNegative;
}
$array = [-2,-8,-14,0,3];
$maxNegative = findnegativenumber($array);
echo "Số âm lớn nhất trong mảng là: " . $maxNegative;
echo "<br>";
//28 Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
echo "Bài 28: ";
function totaloddnumber($n) {
   $sum = 0;
   for ($i = 1; $i <= $n; $i++) {
       if ($i % 2 == 1) {
           $sum += $i;
       }
   }
   echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;
}
totaloddnumber(147);
echo "<br>";
//29 Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo "Bài 29: ";
function isPerfectSquare($number) {
  $sqrt = sqrt($number);
  return ($sqrt - floor($sqrt)) == 0;
}
$start = 1;
$end = 14;
echo "Các số chính phương trong khoảng từ " . $start . " đến " . $end . " là: ";
for ($i = $start; $i <= $end; $i++) {
  if (isPerfectSquare($i)) {
      echo $i . " ";
  }
}
echo "<br>";
//30 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo "Bài 30: ";
function isSubstring($string, $substring) {
  if (strpos($string, $substring) !== false) {
   echo " là một chuỗi con";
  } else {
   echo " không là một chuỗi con ";
  }
}
isSubstring("Do Thi Thu Thao", "Thao");
?>


