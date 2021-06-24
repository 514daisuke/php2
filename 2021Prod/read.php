<?php
// DB接続情報
$dbn = 'mysql:dbname=gsacf_d08_05_prod;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

// SQLの実行
// $sql = 'SELECT `name`, `gender` FROM `contract_user` ;
$sql = 'SELECT * FROM user_info';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// アウトプットの情報をうまく変更する
if ($status == false) {
    // 失敗の場合
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    // 成功した場合
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["no"]}</td>";
        // $output .= "<td>{$record["day"]}</td>";
        $output .= "<td>{$record["name"]}</td>";
        $output .= "<td>{$record["brithday"]}</td>";
        $output .= "<td>{$record["recoder"]}</td>";
        $output .= "<td>{$record["memo"]}</td>";
        $output .= "</tr>";
    }
}

$jsonArray = json_encode($output);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeapp</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/wordCloud.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<body>
    <fieldset>
        <legend>利用者申し送り</legend>
        <a href="input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <!-- <th>DAY</th> -->
                    <th>利用者氏名</th>
                    <th>生年月日</th>
                    <th>記録者氏名</th>
                    <th>記録</th>
                </tr>
            </thead>
            <tbody>
                <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
                <?= $output ?>
            </tbody>
        </table>

    </fieldset>
    <section class="section">

        <!-- /* グラフの描画先 */ -->
        <div id="chartdiv" class="chartdiv"></div>
        </div>

    </section>

</body>



<style>
    .h1 {
        /*文字色*/
        color: #364e96;
        /*上下の余白*/
        padding: 0.5em 0;
        /*上線*/
        border-top: solid 3px #364e96;
        /*下線*/
        border-bottom: solid 3px #364e96;
    }


    .title {
        /*文字色*/
        color: #505050;
        /*文字周りの余白*/
        padding: 0.5em;
        /*行高*/
        display: inline-block;
        /*背景色*/
        background: #dbebf8;
        vertical-align: middle;
        /*左側の角を丸く*/
        border-radius: 25px 0px 0px 25px;
    }

    .chartdiv {
        width: 100%;
        height: 500px;
    }
</style>

<script>
    var json_data = '<?php echo json_encode($output); ?>';


    $(window).on('load', function() {
        loadText();
    });


    // テキストグラフの作成
    function loadText() {
        // テキストデータ
        var sentence = json_data;
        // 改行を半角スペースに変換
        sentence = sentence.replace(/\r?\n/g, ' ');
        // グラフ描画
        drawWorldCloud(sentence);
    }


    function drawWorldCloud(sentence) {
        // アニメーションテーマを使う
        // am4core.useTheme(am4themes_animated);

        var chart = am4core.create("chartdiv", am4plugins_wordCloud.WordCloud);
        var series = chart.series.push(new am4plugins_wordCloud.WordCloudSeries());

        series.accuracy = 4;
        series.step = 15;
        series.rotationThreshold = 0.7;
        series.maxCount = 200;
        series.minWordLength = 2; // 最少頻度
        series.labels.template.tooltipText = "{word}: {value}";
        series.fontFamily = "Courier New";
        series.maxFontSize = am4core.percent(30);

        // 文字列を渡すだけ
        series.text = sentence;

        // カラフルになる。
        // series.colors = new am4core.ColorSet();
        // series.colors.passOptions = {}; // makes it loop

        // 配置が動くようになる
        // setInterval(function() {
        //     series.dataItems.getIndex(Math.round(Math.random() * (series.dataItems.length - 1))).setValue("value", Math.round(Math.random() * 10));
        // }, 10000)
    }
</script>






</html>