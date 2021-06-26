<?php
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_simple_blog_st") or end("DB ERROR");
# DB 연결
// var_dump($dbConn);
// exit;

# SQL 쿼리 불러오기
$sql = '
SELECT *
FROM article
ORDER BY id DESC
';


# SQL 쿼리 보내기
$rs = mysqli_query($dbConn, $sql);
// print_r($rs);
// exit;

#  while문으로 압축문 풀기
$rows = [];

while ($row = mysqli_fetch_assoc($rs)) {
  $rows[] = $row;
}
// print_r($rows);
// exit;

$localTime = date('m-d-Y h:i:s a', time())

?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_simple_blog_st</title>
</head>

<body>
  <h1>article DB 생성</h1>
  <div>
    <?php foreach ($rows as $row) { ?>
      번호 : <?= $row['id'] ?><br>
      작성자 : <?= $row['writerName'] ?><br>
      제목 : <?= $row['title'] ?><br>
      시간 : <?= $row['regDate'] ?><br>
  </div>
  <hr>
<?php } ?>
</body>

</html>