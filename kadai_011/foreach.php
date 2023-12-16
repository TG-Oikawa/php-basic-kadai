<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編 課題foreach文を使って連想配列の値とキーを出力しよう</title>
</head>

<body>
    <p>
        <?php
        $personaldata = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];

        foreach ($personaldata as $key => $value) {
            echo "{$key}  : {$value}<br>";
        }    
        ?>
    </p>
</body>
</html>
