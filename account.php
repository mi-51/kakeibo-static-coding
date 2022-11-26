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
  <title>家計簿アプリ｜アカウント管理</title>
</head>

<body id="body" class="body">
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

    <!-- <section class="p-section p-section__full-screen">
      <form class="p-form p-form--account-edit" action="" method="POST">
        <input type="hidden" name="column_value" value="nickname">
        <div class="p-form__vertical-input">
          <p>現在のニックネーム</p>
          <p>山田</p>
          <input type="password" name="now_password" required>
        </div>
        <div class="p-form__vertical-input">
          <p>新しいニックネーム※12文字以内</p>
          <input type="" name="modify_value" required>
        </div>
        <div class="p-form__center">
          <a class="c-button" href="./account.php">キャンセル</a>
          <input class="c-button c-button--bg-blue" type="submit" name="modify" value="変更する">
        </div>
      </form>
    </section> -->

    
    <section class="p-section">
      <h2 class="c-text c-text__subtitle">【アカウント管理】</h2>
        <form class="p-form p-form--account" action="" method="POST">
          <div class="info">
            <p>ニックネーム</p>
            <input type="hidden" name="nickname" id="nickname" value="山田">
            <p>山田</p>
            <input class="c-button c-button--bg-blue" type="submit" name="modify_nickname" value="変更">
          </div>
          <div class="info">
            <p>ユーザー名</p>
            <input type="hidden" name="username" id="username" value="yamada">
            <p>yamada</p>
            <input class="c-button c-button--bg-blue" type="submit" name="modify_username" value="変更">
          </div>
          <div class="info">
            <p>パスワード</p>
            <input type="hidden" name="password" id="password">
            <p>セキュリティ上非表示</p>
            <input class="c-button c-button--bg-blue" type="submit" name="modify_password" value="変更">
          </div>
          <div class="info">
            <p>初期貯蓄額</p>
            <input type="hidden" name="initial_savings" id="initialSavings" value="1000000">
            <p>1,000,000円</p>
            <input class="c-button c-button--bg-blue" type="submit" name="modify_initial_savings" value="変更">
          </div>
        </form>
    </section>


    <section class="p-section p-section__back-home">
      <a class="c-button c-button--bg-gray" href="./index.php">ホームへ戻る</a>
    </section>
  </main>

  <footer id="footer" class="l-footer">
    <p>家計簿アプリ｜2022</p>
  </footer>

  <script src="./js/footer-fixed.js"></script>
  <script src="./js/import.js"></script>
  <script src="./js/functions.js"></script>
</body>

</html>