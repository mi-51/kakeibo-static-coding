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
  <title>家計簿アプリ｜項目編集</title>
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
    <h2 class="c-text c-text__subtitle">【支出カテゴリー編集】</h2>
    <section class="p-section p-section__message">
      <div class="p-message-box p-message-box--success">
        <p>
          ＯＯＯＯさん、家計簿アプリへようこそ！<br>
          まずは支出カテゴリーを登録しましょう。<br>
          支出のカテゴリーが登録できたら、【他のカテゴリーを編集】から他の項目も登録してみましょう！<br>
          <span>※このメッセージは画面を更新・他ページへ遷移すると消えます</span>
        </p>
      </div>
    </section>

    <section class="p-section p-section__category-table">
      <div>
        <table class="p-table p-table--category">
          <tr class="p-table__head">
            <th>項目</th>
            <th>操作</th>
          </tr>

          <tr class="p-table__item">
            <td>食費</td>
            <td>
              <button class='c-button c-button--bg-green edit'><i class="fa-solid fa-pen"></i></button>
              <a class='c-button c-button--bg-red delete' id="" href=''><i class="fa-regular fa-trash-can"></i></a>
            </td>
          </tr>

          <tr class="p-table__item">
            <td>日用品費</td>
            <td>
              <button class='c-button c-button--bg-green edit'><i class="fa-solid fa-pen"></i></button>
              <a class='c-button c-button--bg-red delete' id="" href=''><i class="fa-regular fa-trash-can"></i></a>
            </td>
          </tr>

          <tr class="p-table__item">
            <td>交通費</td>
            <td>
              <button class='c-button c-button--bg-green edit'><i class="fa-solid fa-pen"></i></button>
              <a class='c-button c-button--bg-red delete' id="" href=''><i class="fa-regular fa-trash-can"></i></a>
            </td>
          </tr>

        </table>
      </div>
    </section>

    <section class="p-section p-section__category-edit">

      <form class="p-form p-form--cat-add" id="itemAddElement" action="" method="POST">
        <h2 class="c-text c-text__subtitle">【カテゴリーを追加】</h2>
        <input type="hidden" name="editItem" value="">
        <div class="p-form__vertical-input">
          <p>項目名<span>※スペースのみ不可</span></p>
          <input type="text" class="item-operate-name" id="name" name="name" value="" pattern="\S|\S.*?\S" required>
        </div>
        
        <input class="c-button c-button--bg-blue" type="submit" name="add" value="追加">
      </form>

      <form class="p-form p-form--cat-edit" id="itemEditElement" action="" method="POST">
        <h2 class="c-text c-text__subtitle">【カテゴリーを更新】</h2>
        <input type="hidden" name="id" id="updateId" value="">
        <input type="hidden" name="editItem" value="">
        <div class="p-form__vertical-input">
          <p>項目名<span>※スペースのみ不可</span></p>
          <input type="text" id="updateName" class="item-operate-name" name="name" pattern="\S|\S.*?\S" required>
        </div>
        <input class="c-button c-button--bg-blue" type="submit" value="更新">
        <a class="c-button c-button--bg-gray" href="">キャンセル</a>
      </form>

    </section>

    <section class="p-section">
      <h2 class="c-text c-text__subtitle">【他のカテゴリーを編集】</h2>
      <div class="p-section__other-catbutton">
        <a class="c-button c-button--bg-lightblue" href="./item-edit.php">支出カテゴリー</a>
        <a class="c-button c-button--bg-lightblue" href="./item-edit.php">収入カテゴリー</a>
        <a class="c-button c-button--bg-lightblue" href="./item-edit.php">支払い方法</a>
        <a class="c-button c-button--bg-lightblue" href="./item-edit.php">クレジットカード</a>
        <a class="c-button c-button--bg-lightblue" href="./item-edit.php">スマホ決済</a>
      </div>
    </section>

    <section class="p-section p-section__back-home">
      <a href="./index.php" class="c-button c-button--bg-gray">ホームに戻る</a>
    </section>
  </main>

  <footer id="footer" class="l-footer">
    <p>家計簿アプリ｜2022</p>
  </footer>

  <script src="./js/import.js"></script>
  <script src="./js/functions.js"></script>
</body>

</html>