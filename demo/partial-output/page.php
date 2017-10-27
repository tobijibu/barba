<?php
$x_barba = $_SERVER['HTTP_X_BARBA'];
$p = isset($_GET['p']) ? $_GET['p'] : 1;
$next = $p == 2 ? 1 : 2;

if (! $x_barba) {
    header('Content-Type: text/html; charset=UTF-8');
    include('./'.$p.'.html');
    exit;
}
?>
<div id="barba-wrapper">
<div class="barba-container">
<p>ページ<?php echo $p;?></p>
<p><a href="./page.php?p=<?php echo $next;?>">ページ<?php echo $next;?>を表示</a></p>
</div>
</div>

