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
  <title>家計簿アプリ｜ログイン</title>
</head>

<body id="body" class="body">
  <header class="l-header--join">
    <h1 class="l-header__title l-header__title--join">家計簿アプリ ログイン</h1>
  </header>

  <main class="l-main">
    <section class="p-section p-section__login">
      <form class="p-form p-form--login" action="" method="POST">
        <div class="p-form__vertical-input">
          <p>ユーザー名<span>※半角英数字6〜12文字</span></p>
          <input type="text" name="username" autocomplete="off" minlength="6" maxlength="12" pattern="[0-9a-zA-Z]+$" value="" required>
        </div>
        <div class="p-form__vertical-input">
          <p>パスワード<span>※半角英数字6〜12文字</span></p>
          <input type="password" name="password" autocomplete="off" minlength="6" maxlength="12" pattern="[0-9a-zA-Z]+$" required>
        </div>
        <input class="c-button c-button--bg-blue" type="submit" name="to_login" value="ログイン">
        <input class="c-button c-button--bg-blue" type="submit" name="to_setting" value="初期設定へ">
      </form>

      <p>ユーザー登録がお済みでない方</p>
      <a class="c-button c-button--bg-blue" href="./join/index.php">新規ユーザー登録</a>

    </section>
  </main>

  <footer id="footer" class="l-footer">
    <p>家計簿アプリ｜2022</p>
  </footer>

</body>

</html>