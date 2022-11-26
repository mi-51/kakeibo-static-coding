<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.min.css">
  <script src="../js/footer-fixed.js"></script>
  <title>家計簿アプリ｜新規ユーザー登録</title>
</head>

<body>
  <header class="l-header--join">
    <h1 class="l-header__title l-header__title--join">会員登録</h1>
  </header>

  <main class="l-main">
    <section class="p-section p-section__message p-section__message--join">
      <div class="p-message-box p-message-box--error">
        <p>すでに登録されているユーザー名です。<br>
          パスワードが一致しません。<br>
          ユーザー名とパスワードは異なる文字列を入力してください。</p>
      </div>
    </section>

    <section class="p-section p-section__join-input">
      <form class="p-form p-form--join" action="" method="post">
        <div class="p-form__vertical-input">
          <p>ニックネーム<span class="c-text--red">※必須</span><span>※12文字以内</span></p>
          <input type="text" name="nickname" maxlength="12" autocomplete="off" id="nickname" value="" required>
        </div>
        <div class="p-form__vertical-input">
          <p>ユーザー名<span class="c-text--red">※必須</span><span>※半角英数字6〜12文字</span></p>
          <input type="text" name="username" autocomplete="off" id="username" minlength="6" maxlength="12" pattern="^[0-9a-zA-Z]+$" value="" required>
        </div>
        <div class="p-form__vertical-input">
          <p>パスワード<span class="c-text--red">※必須</span><span>※半角英数字6〜12文字</span></p>
          <input type="password" name="password" autocomplete="off" id="password" minlength="6" maxlength="12" pattern="^[0-9a-zA-Z]+$" value="" required>
        </div>
        <div class="p-form__vertical-input">
          <p>確認パスワード<span class="c-text--red">※必須</span></p>
          <input type="password" autocomplete="off" name="password_confirm" minlength="6" maxlength="12" id="passwordConfirm" pattern="^[0-9a-zA-Z]+$" value="" required>
        </div>
        <div class="p-form__vertical-input">
          <p>貯蓄額<span>(任意・変更可)</span></p>
          <label><input type="number" autocomplete="off" name="initial_savings" id="initial_savings" value=""> 円</label>
        </div>
        <input class="c-button c-button--bg-blue" type="submit" value="確認画面へ">
      </form>
      <p>ユーザー登録がお済みの方</p>
      <a class="c-button c-button--bg-blue" href="../login.php">ログイン画面へ</a>
    </section>
  </main>

  <footer id="footer" class="l-footer">
    <p>家計簿アプリ｜2022</p>
  </footer>

</body>

</html>