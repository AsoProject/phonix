
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Phoenix -新規登録ページ</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome core css -->

    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
  </head>

  
  <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Phoenix</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active  text-light" aria-current="page" href="#">ホーム</a>
        <a class="nav-link  text-light" href="login.php">ログイン</a>
        <a class="nav-link  text-light" href="signup.php">新規登録</a>
      </div>
    </div>
  </div>
  </nav>



  <section class="vh-80" style="background-color:#080808; padding-top: 25px;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-1 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">新規登録</h2>

              <form action="signup_check.php" method="post">

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">名前</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" />
                </div>
                
                <div class="form-outline mb-4">
                <label class="form-label" for="gender">性別：</label>
                <br>
                <br>
                <input type="radio" name="gender" value="male"/>男性
                <input type="radio" name="gender" value="female"/>女性
                
                  </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">メールアドレス</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">パスワード</label>
                <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                 </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">パスワード再入力</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="password2" />
                </div>

        
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-lg">新規登録</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">既にアカウントを持っていますか❓ <a href="login.php"
                    class="fw-bold text-body"><u>こちらにログイン</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>










  <footer class=" text-center text-white" style="background-color:#080808;padding-top:25px;">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    Contact US
    <!-- Section: Social media -->
    <section class="mb-4">
      
      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ></a>

      
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Phoenix
  </div>
  <!-- Copyright -->
</footer>
  </body>
</html>
