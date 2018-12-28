<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'data_list';


$per_page = 5; //每一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //由用戶決定看第幾頁,從$_GET得到

$sql = sprintf("SELECT 
          `sid`, `name`, `email`, `mobile`, `address`, `birthday`
        FROM address_book
        LIMIT %s, %s", ($page - 1) * $per_page, $per_page); //知道頁數在第幾頁

$stmt = $pdo->query($sql);
//$row = $stmt->fetch(PDO::FETCH_ASSOC); //如果這個沒註解下面進行while迴圈,第一筆資料會先被讀取,就不會出現第一筆資料了。從第二筆開始~

$t_sql = "SELECT COUNT(1) FROM address_book";
$t_stmt = $pdo->query($t_sql);
$t_row = $t_stmt->fetch(PDO::FETCH_NUM);


$total = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; //索引式陣列
$total_pages = ceil($total / $per_page); //總頁數

$page = $page > $total_pages ? $total_pages : $page;
$page = $page < 1 ? 1 : $page;

?>
<?php include __DIR__ . '/__html_head.php' ?>

<?php include __DIR__ . '/__navbar.php' ?>

    <div class="container">
        <?= "$page / $total_pages" ?>
        <!--        --><? //= 'total: '.$total[0]; ?>

        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <ul class="pagination">
                        <?php if($page==1):?>
                        <li class="page-item">
                            <a class="page-link" href="javascript:alert("您已經到頂了!!")">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        <?php else: ?>
                        <li class="page-item">
                            <a class="page-link <?= $page==1 ? '': sprintf('href="%s"'), $page-1 ?>">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
    <?php endif; ?>
                        <?php for ($i = 1; $i < $total_pages; $i++): ?>
                            <li class="page-item <?= $i == $page ? "active" : ''; ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item">
                            <a class="page-link <?= $page==$total_pages ? '': sprintf('href="%s"'), $page+1 ?>">
                                <i class="fas fa-angle-double-right"></i>
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
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
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?= $row['sid'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['mobile'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= $row['birthday'] ?></td>
                </tr>
            <?php endwhile; ?>

            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <ul class="pagination">
                        <?php for ($i = 1; $i < $total_pages; $i++): ?>
                            <li class="page-item <?= $i == $page ? active : ''; ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


<?php include __DIR__ . '/__html_foot.php' ?>