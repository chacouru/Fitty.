<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>新規登録 | fitty.</title>
        <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/login.css" />
</head>

<body>
    <div class="login_container">
        <h1>新規会員登録</h1>
        <form action="register.php" method="POST">
            <div class="form_group">
                <label for="name">お名前</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form_group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form_group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form_group">
                <label for="confirm_password">パスワード（確認）</label>
                <input type="password" id="confirm_password" name="confirm_password" required />
            </div>
            <button type="submit">登録する</button>
        </form>
        <p><a href="./login.php">▶ すでにアカウントをお持ちの方はこちら</a></p>
    </div>
    <nav class="header_nav"> 
      <a href="./mypage.php" class="icon-user" title="マイページ">👤</a> 
      <a href="./cart.php" class="icon-cart" title="カート">🛒</a> 
      <a href="./search.php" class="icon-search" title="検索">🔍</a> 
      <a href="./contact.php" class="icon-contact" title="お問い合わせ">✉️</a> 
    </nav>
  </header>
  <div class="backdrop" id="menuBackdrop"></div>
  <div class="menu_overlay" id="globalMenu" role="navigation" aria-hidden="true">
    <nav>
      <a href="#" role="menuitem" class="bland brand1">ブランドA</a>
      <a href="#" role="menuitem" class="bland brand2">ブランドB</a>
      <a href="#" role="menuitem" class="bland brand3">ブランドC</a>
      <a href="#" role="menuitem" class="bland brand4">ブランドD</a>
    </nav>
  </div>
  <div class="header_space"></div>
  <!-- headerここまで -->
    <main>
        <div class="login_container">
            <h1>新規会員登録</h1>
            <form action="register.php" method="POST">
                <div class="form_group">
                    <label for="name">お名前</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form_group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form_group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form_group">
                    <label for="confirm_password">パスワード（確認）</label>
                    <input type="password" id="confirm_password" name="confirm_password" required />
                </div>
                <button type="submit">登録する</button>
            </form>
            <p><a href="./login.php">▶ すでにアカウントをお持ちの方はこちら</a></p>
        </div>
    </main>

    <!-- footer -->
  <footer class="footer">
    <div class="footer_container">
      <div class="footer_logo">
        <h2><a href="./index.php">fitty.</a></h2>
      </div>
      <div class="footer_links">
        <a href="./overview.php">会社概要</a>
        <a href="./terms.php">利用規約</a>
        <a href="./privacy.php">プライバシーポリシー</a>
      </div>
      <div class="footer_sns">
        <a href="#" aria-label="Twitter"><img src="icons/twitter.svg" alt="Twitter"></a>
        <a href="#" aria-label="Instagram"><img src="icons/instagram.svg" alt="Instagram"></a>
        <a href="#" aria-label="Facebook"><img src="icons/facebook.svg" alt="Facebook"></a>
      </div>
      <div class="footer_copy">
        <small>&copy; 2025 fitty. All rights reserved.</small>
      </div>
    </div>
  </footer>
  <!-- footer -->
     <script src="../JavaScript/hamburger.js"></script>
</body>

</html>
