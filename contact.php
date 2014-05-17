<!DOCTYPE html>
<html>
<head>
  <title>اتصل بنا</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="_/css/bootstrap.css" rel="stylesheet">
  <link href="_/css/mystyles.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


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
        <div class="content row card">
          <section class="sidebar col col-lg-4 panel">
            <h3>من نحن</h3>
            <div>
              <div>
                <h4 class="lead text-danger">الإشراف الأكاديمي</h4>
                <p class="lead">الدكتور وليد شاويش</p>
                <p>أستاذ الفقه وأصوله في جامعة العلوم الإسلامية العالمية - الأردن</p>

                <a href="https://www.facebook.com/walid.shawish.7"><i class="fa fa-facebook fa-border fa-2x text-danger"></i></a>
                <a href="jo.linkedin.com/pub/walid-shawish2/32/252/aa6"><i class="fa fa-linkedin fa-border fa-2x text-danger"></i></a>
                <a href="https://plus.google.com/u/0/113139196011109194341/about"><i class="fa fa-google-plus fa-border fa-2x text-danger"></i></a>
                <a href="https://twitter.com/WalidShawish"><i class="fa fa-twitter fa-border fa-2x text-danger"></i></a>

              </div>
              <div>
                <h4 class="lead text-danger">تصميم وتطوير</h4>
                <p class="lead">ميادة صالح</p>
                
                <a href="https://www.google.com/+mayadasaleh"><i class="fa fa-google-plus fa-border fa-2x text-danger"></i></a>
                <a href="https://twitter.com/MayadaSaleh"><i class="fa fa-twitter fa-border fa-2x text-danger"></i></a>

              </div>
            </div>
          </section><!-- sidebar -->
          <div class="main col col-lg-8">
            <h3>رأيكم يهمنا! يمكنكم التواصل معنا من خلال تعبئة هذا النموذج</h3>
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
