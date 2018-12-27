<?php
require __DIR__.'/__connect_db.php';
$page_name = 'data_list';

$sql = "SELECT `sid`, `name`, `email`, `mobile`, `address`, `birthday` FROM `address_book`";

$stmt = $pdo->query($sql);

//$row = $stmt->fetch(PDO::FETCH_ASSOC); //如果這個沒註解下面進行while迴圈,第一筆資料會先被讀取,就不會出現了




?>
<?php include __DIR__ . '/__html_head.php' ?>

<?php include __DIR__ . '/__navbar.php' ?>

    <div class="container">

        <table class="table table-striped">
            <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">address</th>
                <th scope="col">birthday</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = $stmt->fetch(PDO::FETCH_NUM)):?>
            <tr>
                <td><?= $row[0]?></td>
                <td><?= $row[1]?></td>
                <td><?= $row[2]?></td>
                <td><?= $row[3]?></td>
                <td><?= $row[4]?></td>
                <td><?= $row[5]?></td>
            </tr>
            <?php endwhile; ?>

            </tbody>
        </table></div>


<?php include __DIR__ . '/__html_foot.php' ?>