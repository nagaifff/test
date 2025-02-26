<?php
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>レスポンシブウェブ - 2列</title>
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .column {
        flex: 1;
        padding: 10px;
        box-sizing: border-box;
    }

    /* モバイル用のスタイル */
    @media only screen and (max-width: 600px) {
        .column {
            flex: 100%;
        }
    }
</style>
</head>
<body>

<div class="container">
    <div class="column" style="background-color:#aaa;">
        <h2>列1</h2>
        <p>この列は左側に表示されます。</p>
    </div>
    <div class="column" style="background-color:#bbb;">
        <h2>列2</h2>
        <p>この列は右側に表示されます。</p>
    </div>
</div>

</body>
</html>
?>
