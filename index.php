<!DOCTYPE html>
<html>
<head>
  <title>DBProject_201611297_ - html</title>
  <meta charset="utf-8">
  <script src = "colors.js"></script>
</head>
<body>
  <h1><a href="index.php">DBProject_201611297</a></h1>
  <!--
  <input id="night_day" type="button" value="night" onclick="
    nightDayHandler(this);
  ">
  -->

  <form action = "process_select.php" method="POST">
    <p>장르 :
      <select name="genre">
        <option value="0">장르를 선택하시오.</option>
        <option value="unknown">unknown</option>
        <option value="Action">Action</option>
        <option value="adventure">adventure</option>
        <option value="animation">animation</option>
        <option value="childrens">childrens</option>
        <option value="comedy">comedy</option>
        <option value="crime">crime</option>
        <option value="documentary">documentary</option>
        <option value="drama">drama</option>
        <option value="fantasy">fantasy</option>
        <option value="filmnoir">filmnoir</option>
        <option value="horror">horror</option>
        <option value="musical">musical</option>
        <option value="mystery">mystery</option>
        <option value="romance">romance</option>
        <option value="scifi">scifi</option>
        <option value="thriller">thriller</option>
        <option value="war">war</option>
        <option value="western">western</option>
      </select>
    </p>
    <p>사용자의 직업 :
      <select name="job">
        <option value="0">직업을 선택하시오.</option>
        <option value="administrator">administrator</option>
        <option value="artist">artist</option>
        <option value="doctor">doctor</option>
        <option value="educator">educator</option>
        <option value="engineer">engineer</option>
        <option value="entertainment">entertainment</option>
        <option value="executive">executive</option>
        <option value="healthcare">healthcare</option>
        <option value="homemaker">homemaker</option>
        <option value="lawyer">lawyer</option>
        <option value="librarian">librarian</option>
        <option value="marketing">marketing</option>
        <option value="none">none</option>
        <option value="other">other</option>
        <option value="programmer">programmer</option>
        <option value="retired">retired</option>
        <option value="salesman">salesman</option>
        <option value="scientist">scientist</option>
        <option value="student">student</option>
        <option value="technician">technician</option>
        <option value="writer">writer</option>
      </select>
    <p>평점 :  MIN
      <select name="score_min">
        <option value="0">최소</option>
        <option value="1">1</option>
        <option value="1.5">1.5</option>
        <option value="2">2</option>
        <option value="2.5">2.5</option>
        <option value="3">3</option>
        <option value="3.5">3.5</option>
        <option value="4">4</option>
        <option value="4.5">4.5</option>
        <option value="5">5</option>
      </select>
       MAX
       <select name="score_max">
         <option value="5">최대</option>
         <option value="1">1</option>
         <option value="1.5">1.5</option>
         <option value="2">2</option>
         <option value="2.5">2.5</option>
         <option value="3">3</option>
         <option value="3.5">3.5</option>
         <option value="4">4</option>
         <option value="4.5">4.5</option>
         <option value="5">5</option>
       </select>
     </p>
    <p>sorting by :
      <select name="sorting">
        <option value="0">정렬</option>
        <option value="count(*)">투표수</option>
        <option value="i_title">영화제목</option>
        <option value="avg(udata.rate)">평균평점</option>
      </select>
    </p>
    <input type="submit" name="" value="search movie">
  </form>



</body>
</html>
