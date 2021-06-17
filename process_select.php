<?php
$conn = mysqli_connect(// connect database
  'localhost:3306',
  'root',
  'Wpdnls1020!',
  'db_201611297');
if(!$conn){
  echo "DB not connected";
}
else {
}

$where = "where udata.uid = userinf.uid AND udata.i_id = uitem.i_id "; // where

if($_POST['job'] != "0"){//occupation is exist
  $where .= "AND userinf.uoccupation= '".$_POST['job']."' " ;
}

if($_POST['genre'] != "0"){//genre is exist
  $where .= "AND uitem." .$_POST['genre']. " = 1";
}

$order = "";
if($_POST['sorting'] != "0"){//sort is exist
  $order .= "order by ".$_POST['sorting']." desc;";
}

$sql = "
    SELECT udata.i_id, uitem.i_title, avg(udata.rate), count(*)vote, uitem.unknown, uitem.Action, uitem.adventure, uitem.animation, uitem.childrens, uitem.comedy, uitem.crime, uitem.documentary, uitem.drama, uitem.fantasy, uitem.filmnoir, uitem.horror, uitem.musical, uitem.mystery, uitem.romance, uitem.scifi, uitem.thriller, uitem.war, uitem.western
    from udata, userinf, uitem
    ".$where."
    group by udata.i_id
    having avg(udata.rate) >= ".$_POST['score_min']." AND avg(udata.rate) <= ".$_POST['score_max']." "
    .$order;


function mysqli_field_name($result, $field_offset)//get fied name for genre
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}

$result = mysqli_query($conn, $sql);
if($result == false){
  echo '저장하는 과정에서 문제가 생겼습니다.';
  error_log(mysqli_error($conn));
} else {
  echo "결과 출력 <br />";

  while($row = mysqli_fetch_row($result)) {
    //echo $genre;
    echo '영화 ID : '.$row[0].' /';
    echo '영화 제목 : '.$row[1].' /';
    echo '평균평점 : '.$row[2].' /';
    echo 'Vote수 : '.$row[3].' /';
    echo '장르 : ';
    for($i = 4; $i <= 22; $i= $i+1){
      if($row[$i] == 1){
        echo mysqli_field_name($result,$i).' ';
      }
    }
    echo "<br />";
  }
  echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>
