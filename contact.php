<!DOCTYPE html>
<html>
  <head>
    <title>اتصل بنا</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

     <!--favicons-->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="ico/favicon.png">

  </head>
  <body id="contact">
      <?php include "_/components/php/header.php"; ?>
      
      <section class="container">
            <div class="content row">
              <div class="panel">
                <h2>رأيكم يهمنا! يمكنكم التواصل معنا من خلال تعبئة هذا النموذج</h2>
              </div>
                <div class="panel-body">
            <form name="contactform" method="post" action="mailer.php" class="form-horizontal" role="form">
              <div class="form-group">
                <label for="inputName" class="col-lg-2 control-label">الاسم</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputName" name="inputName" placeholder="اكتب اسمك هنا">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">الإيميل</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="بريدك الالكتروني">
                </div>
              </div>
              <div class="form-group">
                <label for="inputSubject" class="col-lg-2 control-label">الموضوع</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="موضوع الرسالة">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword1" class="col-lg-2 control-label">الرسالة</label>
                <div class="col-lg-10">
                  <textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="نص الرسالة"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" class="btn btn-danger left">
                    إرسال
                  </button>
                </div>
              </div>
            </form>

          </div>
          </div><!-- content -->
      </section><!-- container -->
      
      <?php include "_/components/php/footer.php"; ?>
    <!-- scripts  -->
    <script src="_/js/jquery.js"></script>
    <script src="_/js/bootstrap.js"></script>
     <script src="_/js/myscripts.js"></script>

  </body>
</html>
