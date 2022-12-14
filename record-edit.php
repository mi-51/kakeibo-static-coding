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
  <title>家計簿アプリ｜レコード編集</title>
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
    <!-- 収支データ編集 -->
    <section class="p-section p-section__records-input">
      <h2 class="c-text c-text__subtitle">【レコード編集】</h2>

      <form class="p-form p-form--input-record" name="recordInput" action="" method="POST">
        <input type="hidden" name="record_id" value="">
        <input type="hidden" name="input_time" id="input_time" value="">
        <div class="p-form__flex-input">
          <p>日付</p>
          <label for="date"><input type="date" name="date" id="date" value="2022-06-13" required></label>
        </div>

        <div class="p-form__flex-input">
          <p>タイトル</p>
          <input type="text" name="title" id="title" maxlength="15" required>
        </div>

        <div class="p-form__flex-input">
          <p>金額</p>
          <input type="number" name="amount" id="amount" step="1" maxlength="7" required>
        </div>

        <div class="p-form__flex-input type">
          <input id="spending" type="radio" name="type" value="0" onchange="onRadioChangeType(0);" required>
          <label for="spending">支出</label>
          <input type="radio" name="type" id="income" value="1" onchange="onRadioChangeType(1);">
          <label for="income">収入</label>
        </div>

        <div class="u-js__show-switch flex p-form__flex-input sp-change-order" id="spendingCategoryBox">
          <p class="long-name">支出カテゴリー</p>
          <select name="spending_category" id="spendingCategory">
            <option value="0">選択してください</option>
            <option value="1">食費</option>
            <option value="2">日用品</option>
            <option value="3">交通費</option>
          </select>
        </div>

        <div class="u-js__show-switch flex p-form__flex-input sp-change-order" id="incomeCategoryBox">
          <p class="long-name">収入カテゴリー</p>
          <select name="income_category" id="incomeCategory">
            <option value="0">選択してください</option>
            <option value="1">給料</option>
            <option value="2">お小遣い</option>
          </select>
        </div>

        <div id="paymentMethodBox" class="u-js__show-switch flex p-form__flex-input sp-change-order">
          <p class="long-name">支払い方法</p>
          <select name="payment_method" id="paymentMethod" onchange="hasChildSelect('2', creditSelectBox, qrChecked);hasChildSelect('3', qrSelectBox, creditChecked);">
            <option value="0">選択してください</option>
            <option value="1">現金</option>
            <option value="2" id="radioCredit">クレジット</option>
            <option value="3" id="radioQr">スマホ決済</option>
          </select>
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
        </div>

        <div class="u-js__show-switch flex p-form__flex-input sp-change-order" id="qrSelectBox">
          <p class="long-name">スマホ決済種類</p>
          <div class="p-form__item-box">
            <select name="qr">
              <option value="0">選択しない</option>
              <option value="1">PayPay</option>
              <option value="2">d払い</option>
              <option value="3">LINEPay</option>
            </select>
          </div>
        </div>

        <div>
          <textarea name="memo" id="" cols="45" rows="5" placeholder="入力収支の詳細"></textarea>
        </div>

        <input class="c-button c-button--bg-blue" type="submit" value="更新">
      </form>
    </section>
    <!-- 収支データ編集 -->

    <section class="p-section p-section__back-home">
      <a href="./index.php" class="c-button c-button--bg-gray">ホームに戻る</a>
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