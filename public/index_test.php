<?php
// DB 연결
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_simple_blog_st") or die("DB ERROR");
// var_dump($dbConn);
// exit;

$sql = "
SELECT *
FROM article
ORDER BY id DESC
";

$rs = mysqli_query($dbConn, $sql);
// print_r($rs);
// exit;

// while 문으로 변경
$rows = [];

while ($row = mysqli_fetch_assoc($rs)) {
  $rows[] = $row;
}
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
  <h1>article DB</h1>
  <?php foreach ($rows as $row) { ?>
    <div>
      번호 : <?= $row['id'] ?><br>
      제목 : <?= $row['title'] ?><br>
      시간 : <?= $row['regDate'] ?><br>
    </div>
    <hr>
  <?php } ?>
</body>

</html>