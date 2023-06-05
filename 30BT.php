<?php

// BUOI 3
//1 kiểm tra xem một số có phải là số chẵn hay không.
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


//2 tính tổng của các số từ 1 đến n.
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
//3
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
//4 kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
echo "Bài 4:" ;
function check($name, $word) {
    if (strstr($name, $word)) {
        echo ("$name chứa $word");
    } else {
        echo ("$name không chứa $word");
    }
}
$name = 'thao do';
$word = 'do';
$result = check($name, $word);
echo "<br>";  

//5 tìm giá trị lớn nhất và nhỏ nhất trong một mảng. 
echo "Bài 5:" ;
function findMinMax($array){
    $min = $array[0];
    $max = $array[0];
    foreach($array as $value){
        if($min > $value) $min = $value;
        if($max < $value) $max = $value;
    }
    return [$max,$min];
    
}
$arr = [10,9,7,23,36,71];
echo "Mảng nhập vào: ";
foreach($arr as $value)
    echo $value . " ";
echo "<br>";
echo "Giá trị lớn nhất của mảng là: " . findMinMax($arr)[0].
"<br>Giá trị nhỏ nhất của mảng là: " . findMinMax($arr)[1];
echo "<br>";

//6 Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. 
echo "Bài 6:" ;
function arrangeArr($array){
    $n = count($array);
    for($i = 0; $i < $n - 1; $i++){
        for($j = 0; $j < $n - $i - 1; $j++){
            if($array[$j] > $array[$j + 1]){
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }return $array;
}
$array = [1,8,2,9,3];
$sortedArray = arrangeArr($array);
echo 'Mảng tăng dần: ';
foreach($sortedArray as $array){
    echo $array. ' ';
}
echo '<br>';
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
$number = 10 ;
echo " Giai thừa của " . $number . " là: " . factorialcalculation( $number ) . "<br>";
//8 Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Bài 8:" ;
function checkPrime($number) {
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
             if(checkPrime($i))
              echo $i, ",";
   }
}
showprime (10,20);
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
$array = [1,2,4,8,20,15] ;
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
echo "Các số Fibonacci trong khoảng từ 0 đến 20 là: " ;
for($i = 0; $i <= 20; $i ++) {
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
   $number = 1111;
   if (armstrong($number)) {
       echo $number . " là số Armstrong.";
      } 
   else {
      echo $number . " không là số Armstrong.";
      }
echo "<br>";
//12 Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "Bài 12" ;
function insertElement($array, $element, $position) {
    $result = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($i == $position) {
            $result[] = $element;
        }
        $result[] = $array[$i];
    }return $result;
}
$numbers = [8,9,3,2,0];
$element = 4;
$position = 3;
$result = insertElement($numbers, $element, $position);
echo "Mảng sau khi chèn:";
foreach ($result as $number) {
    echo $number . " ";
}
echo "<br>" ;

//13 Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo "Bài 13: ";
function removeDuplicates($array) {
    $result = [];
    foreach ($array as $element) {
        if (!in_array($element, $result)) {
            $result[] = $element;
        }
    }return $result;
}
$numbers = [10,9,8,7,6,5,10];
$uniqueNumbers = removeDuplicates($numbers);
echo "Mảng mới: ";
foreach ($uniqueNumbers as $number) {
    echo $number . " ";
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
function daoNguoiChuoi($chuoi)
{
    $ketQuaChuoiSauKhiDaoNguoc = '';

    $doDaiChuoi = strlen($chuoi);
    for ($i = $doDaiChuoi - 1; $i >= 0; $i--) {

        $ketQuaChuoiSauKhiDaoNguoc .= $chuoi[$i];
    }

    return $ketQuaChuoiSauKhiDaoNguoc;
}
$chuoi = "  Do Thao";
$result = daoNguoiChuoi($chuoi);
echo $result;
echo "<br>" ;

//16 Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "Bài 16: ";
function countElements1($array) {
    $count = 0;
    foreach ($array as $element) {
        $count++;
    }return $count;
 }
$array = [1, 2, 3, 4, 5];
echo "Số lượng phần tử trong mảng: " .countElements1($array). '<br>';
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
checkPalindrome("Do Thi Thu Thao"); 
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

$array = array( 1,2,3,3,4,3);
$element = 3;
$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử " . $element . " trong mảng là: " . $occurrences;
echo "<br>";
//19 Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo "Bài 19:" ;
function sortarr($array)
{
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {

        for ($j = $i + 1; $j < $length; $j++) {

            if ($array[$i] < $array[$j]) {

                $temp = $array[$i];

                $array[$i] = $array[$j];

                $array[$j] = $temp;
            }
        }
    }

    return $array;
}

$array = array(1,4,3,7,8,9);
$sortedArray = sortarr($array);
echo "Mảng ban đầu: " . implode(", ", $array) . "\n";

echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: " . implode(", ", $sortedArray);


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

$array = array(1, 2, 3, 4);
$element = 5;
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
$numbers = [1,2,3,4,5,6,7];
findSecondLargest($numbers);
echo "<br>";
//22 Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "Bài 22:   ";
function findUCBC($a, $b) {
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
       findUCBC(10,100);
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
isPerfectNumber(100) ;
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
$array = [1,3,5,7,9,11];
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
if (isPrime(5)) {
   echo $number. " là số nguyên tố.";
} else {
   echo $number. " không là số nguyên tố.";
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
$number = [-2,-1,0,1,2];
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
$array = [-2,-3,0,2,3];
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
totaloddnumber(20);
echo "<br>";
//29 Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo "Bài 29: ";
function isPerfectSquare($number) {
  $sqrt = sqrt($number);
  return ($sqrt - floor($sqrt)) == 0;
}
$start = 1;
$end = 20;
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
   echo $substring. " là một chuỗi con";
  } else {
   echo $substring. " không là một chuỗi con ";
  }
}
isSubstring("Do Thi Thu Thao", "Thao");
?>

