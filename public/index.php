<?php
// DB 연결
$dbConn = mysqli_connect("127.0.0.1", "sbsst", "sbs123414", "php_simple_blog_st") or die("DB ERROR");
//var_dump($dbConn);
//exit;


// DB에게 할 말을 적는다.
$sql = "
SELECT *
FROM article
ORDER BY id DESC
";

// DB에게 요청하고 응답을 받는다.
$rs = mysqli_query($dbConn, $sql);
//print_r($rs);
//exit;

$rows = [];

while ($row = mysqli_fetch_assoc($rs)) {
    $rows[] = $row;
}
?>
<meta charset="UTF-8">

<?php foreach ($rows as $row) { ?>
    <div>
        번호 : <?= $row['id'] ?><br>
        제목 : <?= $row['title'] ?><br>
    </div>
    <hr>
<?php } ?>