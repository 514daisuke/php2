<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeapp</title>
</head>

<body>
    <form action="create.php" method="post">
        <fieldset>
            <legend>KakeH@shi</legend>
            <a href="read.php">一覧画面</a>
            <!-- <div>
                name: <input type="name" name="name">
            </div>
            <div>
                gender: <input type="text" name="gender">
            </div>
            <div>
                memo: <input type="text" name="memo">
            </div>
            <div>
                <button>submit</button>
            </div> -->

            <!DOCTYPE html>
            <html lang="ja">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>介護用申し送りノート</title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
                <script src="https://www.amcharts.com/lib/4/core.js"></script>
                <script src="https://www.amcharts.com/lib/4/charts.js"></script>
                <script src="https://www.amcharts.com/lib/4/plugins/wordCloud.js"></script>
                <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
            </head>

            <body>
                <header>
                    <div>
                        <!-- <img src="img/title.png" class=""><img src="img/sample.png" class=""> -->
                    </div>
                    </div>
                </header>
                <main>
                    <div class="wrap-tab">
                        <ul id="js-tab" class="list-tab">
                            <!-- <li>申し送り登録</li>
                            <li>記録</li> -->
                        </ul>
                        <div class="wrap-tab-content">
                            <div class="tab-content active">
                                <div id="">
                                    <!-- <a href="#kiroku">記録者情報</a> -->
                                </div>
                                <h1 id="kiroku">申し送り</h1>
                                <table class="">
                                    <tr>
                                        <td>
                                            <!-- No.をkeyに設定 -->
                                            <label for="number">No：</label>
                                            <input type="number" name="no" min="1" max="100">
                                        </td>
                                        <td>
                                            <label for="day">日付：</label>
                                            <input type="date" name="day" value="2021-06-26">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name">利用者氏名</label>
                                        </td>
                                        <td id="tdName">
                                            <input type="name" name="name" id="name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="brithday">生年月日</label>
                                        </td>
                                        <td>
                                            <input type="date" name="brithday" value="1960-01-01">
                                        </td>
                                        <!-- 年齢は後から自動計算予定 -->
                                        <!-- <td>
                                            <span id="age"></span>歳
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="repName">介護記録者氏名</label>
                                        </td>
                                        <td>
                                            <input type="name" name="recoder">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="memo">記録</label>
                                        </td>
                                        <td>
                                            <textarea type="text" name=" memo" rows="3" cols="62"></textarea>
                                        </td>
                                    </tr>
                                </table>
                                <!-- 以下実装テスト中 -->
                                <!-- <h2 id="">項目</h2>
                                <table class="">
                                    <tr>
                                        <td>
                                            種類
                                        </td>
                                        <td colspan="2">
                                            <label><input type="checkbox" name="hospital" value="通院"> 通院</label><br>
                                            <label><input type="checkbox" name="hospital" value="入院"> 入院</label><br>

                                        </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td>
                                            申し送り
                                        </td>
                                        <td colspan="3">
                                            <textarea name="naiyou1" id="naiyou1" rows="3" cols="62"></textarea>
                                        </td>
                                    </tr>
                                </table> -->
                                <!-- <div>
                                    <div>
                                        <h3>データの削除</h3>
                                        <div class="dataTab">
                                            削除No.: <input type="text" id="keyClear" placeholder="" size=10"><br>
                                            <input type="button" value="1件だけ削除" onClick="remove()">
                                            <input type="button" value="全件削除" onClick="cle()">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div>
                                    <h3>介護記録</h3>
                                    <div>
                                        申請No.<input id="keyK2" type="text" size=8 placeholder="申請No.">
                                        <button id="dataMiru2" class="btn">選択</button>
                                    </div>
                                    <label>項目:
                                        <select id="koumoku">
                                            <option>--選択--</option>
                                            <option value="通院">通院</option>
                                            <option value="入院">入院</option>
                                        </select>
                                    </label>
                                </div>
                                <div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- 更新ボタンは後から実装予定 -->
                        <!-- <button id="reload" class="btn">Reload</button> -->
                        <button id="save" class="btn">Save</button>
                    </div>
                </main>
                <!-- <footer>グループホームDegitalノート</footer> -->
        </fieldset>
    </form>

</body>





</html>