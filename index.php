<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.min.css">
  <script src="./js/footer-fixed.js"></script>
  <title>家計簿アプリ｜ホーム</title>
</head>

<body class="body" id="body">
  <header class="l-header">
    <h1 class="l-header__title"><a href="./index.php">家計簿アプリ</a></h1>
    <div class="l-header__icon">
      <a href="./index.php">
        <i class="fa-solid fa-house"></i>
      </a>
      <a href="./account.php">
        <i class="fa-solid fa-user"></i>
      </a>
      <a href="" id="logoutButton" onclick="">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
      </a>
    </div>
  </header>


  <main class="l-main">
    <!-- 操作完了コンテンツ -->
    <!-- <section class="p-section p-section__full-screen" id="doneOperateBox">
      <div class="p-message-box line-blue">
        <p id="doneText">操作が完了しました</p>
        <button class="c-button c-button--bg-blue" onclick="">OK</button>
      </div>
    </section> -->
    <!-- //操作完了コンテンツ -->

    <!-- 収支データ入力 -->
    <section class="p-section p-section__records-input">

      <form class="p-form p-form--input-record" name="recordInput" action="" method="POST">
        <input type="hidden" name="input_time" id="input_time" value="<?php echo date("Y/m/d-H:i:s"); ?>">
        <div class="p-form__flex-input">
          <p>日付</p>
          <label for="date"><input type="date" name="date" id="date" value="<?php echo date("Y-m-d"); ?>" required></label>
        </div>

        <div class="p-form__flex-input">
          <p>タイトル</p>
          <input type="text" name="title" id="title" maxlength="15" required>
        </div>

        <div class="p-form__flex-input">
          <p>金額</p>
          <input type="number" name="amount" id="amount" step="1" maxlength="7" required>
        </div>

        <div class="p-form__flex-input">
          <input id="spending" type="radio" name="type" value="0" onchange="onRadioChangeType(0);" required>
          <label for="spending">支出 </label>
          <input type="radio" name="type" id="income" value="1" onchange="onRadioChangeType(1);">
          <label for="income">収入 </label>
        </div>

        <div class="u-js__show-switch flex p-form__flex-input sp-change-order" id="spendingCategoryBox">
          <p class="long-name">支出カテゴリー</p>
          <select name="spending_category" id="spendingCategory">
            <option value="0">選択してください</option>
            <option value="1">食費</option>
            <option value="2">日用品</option>
            <option value="3">交通費</option>
          </select>
          <a class="c-button c-button--bg-gray" href="./item-edit.php">編集</a>
        </div>

        <div class="u-js__show-switch flex p-form__flex-input sp-change-order" id="incomeCategoryBox">
          <p class="long-name">収入カテゴリー</p>
          <select name="income_category" id="incomeCategory">
            <option value="0">選択してください</option>
            <option value="1">給料</option>
            <option value="2">お小遣い</option>
          </select>
          <a class="c-button c-button--bg-gray" href="./item-edit.php">編集</a>
        </div>

        <div id="paymentMethodBox" class="u-js__show-switch flex p-form__flex-input sp-change-order">
          <p class="long-name">支払い方法</p>
          <select name="payment_method" id="paymentMethod" onchange="hasChildSelect('1', creditSelectBox, qrChecked);hasChildSelect('2', qrSelectBox, creditChecked);">
            <option value="0">選択してください</option>
            <option value="1">現金</option>
            <option value="2" id="radioCredit">クレジット</option>
            <option value="3" id="radioQr">スマホ決済</option>
          </select>
          <a class="c-button c-button--bg-gray" href="./item-edit.php">編集</a>
        </div>

        <div class="u-js__show-switch flex p-form__flex-input sp-change-order" id="creditSelectBox">
          <p class="long-name">クレジットカード</p>
          <div class="p-form__item-box">
            <select name="credit">
              <option value="0">選択しない</option>
              <option value="1">カードA</option>
              <option value="2">カードB</option>
            </select>
          </div>
          <a class="c-button c-button--bg-gray" href="./item-edit.php">編集</a>
        </div>

        <div class="u-js__show-switch flex p-form__flex-input sp-change-order" id="qrSelectBox">
          <p class="long-name">スマホ決済種類</p>
          <div class="p-form__item-box">
            <select name="qr">
              <option value="0">選択しない</option>
              <option value="1">PayPay</option>
              <option value="2">d払い</option>
              <option value="3">LINE Pay</option>
            </select>
          </div>
          <a class="c-button c-button--bg-gray" href="./item-edit.php">編集</a>
        </div>

        <div>
          <textarea name="memo" id="" cols="45" rows="5" placeholder="入力収支の詳細"></textarea>
        </div>

        <input class="c-button c-button--bg-blue" type="submit" value="登録">
      </form>
    </section>
    <!-- 収支データ入力 -->

    <section class="p-section p-section__records-output">
      <h3>収支一覧</h3>

      <!-- 月検索 -->
      <form class="p-form p-form--center p-form--date-search" action="" method="POST">
        <input type="hidden" name="search">
        <label for="date-search">
          <input type="date" id="dateFrom" name="date_from" value="2022-06-01">
          〜
          <input type="date" id="dateTo" name="date_to" value="2022-06-13">
        </label>
        <input class="c-button c-button--bg-gray c-button--search" type="submit" name="date-search" value="検索">
        <input class="c-button c-button--bg-gray" type="submit" name="all-search" value="全データ表示">
      </form>
      <!-- //月検索 -->

      <div class="pc_only">

        <table class="p-table p-table--record-output" id="table">

          <!-- 貯蓄額出力行 -->
          <tr class="p-table__join-row">
            <th colspan="6">現在の貯蓄額<span class="">¥970,000</span></th>
          </tr>

          <!-- タイトル行 -->
          <tr class="p-table__head">
            <th>収支日</th>
            <th>タイトル</th>
            <th>収入</th>
            <th>支出</th>
            <th>支出詳細</th>
            <th>操作</th>
          </tr>

          <!-- 収支データ出力 -->
          <tr class="p-table__item item1">
            <td> 2022/06/11 </td>
            <td> サンプル1 <span> (食費) <i class="fa-regular fa-message" onclick=""></i> </span> </td>
            <td></td>
            <td> ¥3,000 <span> (クレジット) </span> </td>
            <td>カードB </td>
            <td>
              <form action="./record-edit.php" method="POST">
                <input type="hidden" name="record_id" value="1">
                <input type="submit" class='c-button c-button--bg-green edit fas' id="" value="&#xf304;">
              </form>
              <a class='c-button c-button--bg-red delete' id="" href='' onclick="">
                <i class="fa-regular fa-trash-can"></i>
              </a>
            </td>
          </tr>

          <tr class="p-table__item item2">
            <td>
              <input type="hidden" name="record_id" value="2">
              2022/06/11
            </td>
            <td class="">
              サンプル2 <span> (給料) <i class="fa-regular fa-message" onclick=""></i> </span>
            </td>
            <td> ¥200,000 </td>
            <td><span></span> </td>
            <td></td>
            <td>
              <form action="./record-edit.php" method="POST">
                <input type="hidden" name="record_id" value="2">
                <input type="submit" class='c-button c-button--bg-green edit fas' id="" value="&#xf304;">
              </form>
              <a class='c-button c-button--bg-red delete' id="" href='' onclick="">
                <i class="fa-regular fa-trash-can"></i>
              </a>
            </td>
          </tr>
          <!-- //収支データ出力 -->


          <!-- 合計金額行 -->
          <tr class="p-table__foot">
            <th colspan="2">合計金額 </th>
            <th class="text-blue"> +¥200,000 </th>
            <th class="text-red"> -¥3,000 </th>
            <th colspan="2" class="text-blue">合計 +¥197,000</th>
          </tr>
          <!-- //合計金額行 -->

        </table>

      </div>

      <div class="sp_only">

        <!-- 総貯蓄額 -->
        <p class="p-sp-data-box__head">現在の貯蓄額<span class="">¥970,000</span></p>
        <!-- //総貯蓄額 -->

        <ul class="p-sp-data-box__item-sum">
          <li>収入<br><span class="text-blue">¥2,000</span></li>
          <li>支出<br><span class="text-red">-¥200,000</span></li>
          <li>合計<br><span class="text-blue">-¥100,000</span></li>
        </ul>

        <!-- 収支データ出力 -->
        <div class="p-sp-data-box item1">
          <div class="u-flex-box p-sp-data-box__overview">
            <p> aaaaaa
              <span> (不明) <i class="fa-regular fa-message" onclick=""></i> </span>
            </p>
            <p class="text-red"> -¥30,000 </p>
          </div>
          <div class="p-sp-data-box__detail">
            <p>2022/06/11</p>
            <p> (不明) </p>
          </div>
          <div class="u-flex-box p-sp-data-box__button">
            <form action="./record-edit.php" method="post">
              <input type="hidden" name="record_id" value="">
              <input type="submit" class="c-button c-button--bg-green edit" id="" value="編 集">
            </form>
            <a class="c-button c-button--bg-red delete" id="" href='' onclick="">削 除</a>
          </div>
        </div>
        <!-- //収支データ出力 -->


      </div>
    </section>
  </main>

  <footer id="footer" class="l-footer">
    <p>家計簿アプリ｜2022</p>
  </footer>

  <script src="./js/radio.js"></script>
  <script src="./js/import.js"></script>
  <script src="./js/functions.js"></script>
</body>

</html>