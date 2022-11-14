
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Phoenix ログインページ</title>

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

<section class="vh-300" style="background-color:#080808;">
  <form action="login_check.php" method="post">
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center bg-transparent bg-opacity-10">
           


            <h3 class="mb-5">ログイン</h3>

            <div class="form-outline mb-4">
            <label class="form-label" for="typeEmailX-2">メールアドレス</label>
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="メールアドレス" name="email" />
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="typePasswordX-2">パスワード</label>
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="パスワード" name="password"/>
           
            </div>

            
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<footer class=" text-center text-white" style="background-color:#080808;">
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
