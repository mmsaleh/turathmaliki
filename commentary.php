<!DOCTYPE html>
<html>
<head>
  <title>شرح متن ابن عاشر</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="_/css/bootstrap.css" rel="stylesheet">
  <link href="_/css/mystyles.css" rel="stylesheet">
  <link  href="_/css/styles.css" />

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
    <body id="commentary">
      <?php include "_/components/php/header.php"; ?>
      
      <section class="container">
        <div class="help left">
          <!-- Button trigger modal -->
          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#help">
            <h6>المساعدة</h6>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">دليل الموقع</h4>
                </div>
                <div class="modal-body">
                 <h4>أهلاً بك في موقع التراث المالكي!</h4>
                       <p>ابحث عن هذه الرموز وانقر عليها لإظهار المحتوى الإضافي</p>
                  <div class="media">
                        <img class="media-object pull-left" src="images/mapicon.png" alt="map">
                    <div class="media-body">
                        <p class="media-heading">الخرائط المفاهيمية</p>
                     </div>
                  </div>
                  <div class="media">
                        <img class="media-object pull-left" src="images/img.png" alt="images">
                    <div class="media-body">
                        <p class="media-heading">الصور التوضيحية</p>
                     </div>
                  </div>
                  <div class="media">
                        <img class="media-object pull-left" src="images/speaker.png" alt="audio">
                    <div class="media-body">
                        <p class="media-heading">الصوتيات</p>
                     </div>
                  </div>
                <div class="media">
                        <a href="" class="hastip media-object pull-left" title="توضيح معنى أو مقارنة بين نسخ المتن المختلفة أو ملاحظة بشكل عام" >الكلمات التي تحتها خط متقطع</a>
                    <div class="media-body">
                        <p class="media-heading">عند توجه الفأرة نحوها ستظهر ملاحظات المحقق</p>
                     </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content row">
          <section class="col col-md-8 col-md-offset-2 col col-xs-12" >
            <div class="chapter" id="introduction">
              <section id="preface">
                <?php include "_/components/php/preface-cm.php"; ?>
              </section>
              <section id="intro-1">
                <?php include "_/components/php/intro-1-cm.php"; ?>  
              </section>
              <section id="intro-2">
                <?php include "_/components/php/intro-2-cm.php"; ?>
              </section>
              <section id="intro-3">
                <?php include "_/components/php/intro-3-cm.php"; ?>
              </section>
            </div>
            <div class="chapter" id="chapter1">
              <section id="section-1-1">
                <?php include "_/components/php/ch1-section-1-cm.php"; ?>
              </section>
              <section id="section-1-2">
                <?php include "_/components/php/ch1-section-2-cm.php"; ?>  
              </section>
              <section id="section-1-3">
                <?php include "_/components/php/ch1-section-3-cm.php"; ?>
              </section>
              <section id="section-1-4">
                <?php include "_/components/php/ch1-section-4-cm.php"; ?>
              </section>
              <section id="section-1-5">
                <?php include "_/components/php/ch1-section-5-cm.php"; ?>
              </section>
              <section id="section-1-6">
                <?php include "_/components/php/ch1-section-6-cm.php"; ?>
              </section>
              <section id="section-1-7">
                <?php include "_/components/php/ch1-section-7-cm.php"; ?>
              </section>
              <section id="section-1-8">
                <?php include "_/components/php/ch1-section-8-cm.php"; ?>
              </section>
              <section id="section-1-9">
                <?php include "_/components/php/ch1-section-9-cm.php"; ?>
              </section>
              <section id="section-1-10">
                <?php include "_/components/php/ch1-section-10-cm.php"; ?>
              </section>
            </div>
            <div class="chapter" id="chapter2">
              <section id="section-2-1">
                <?php include "_/components/php/ch2-section-1-cm.php"; ?>
              </section>
              <section id="section-2-2">
                <?php include "_/components/php/ch2-section-2-cm.php"; ?>  
              </section>
              <section id="section-2-3">
                <?php include "_/components/php/ch2-section-3-cm.php"; ?>
              </section>
              <section id="section-2-4">
                <?php include "_/components/php/ch2-section-4-cm.php"; ?>
              </section>
              <section id="section-2-5">
                <?php include "_/components/php/ch2-section-5-cm.php"; ?>
              </section>
              <section id="section-2-6">
                <?php include "_/components/php/ch2-section-6-cm.php"; ?>
              </section>
              <section id="section-2-7">
                <?php include "_/components/php/ch2-section-7-cm.php"; ?>
              </section>
              <section id="section-2-8">
                <?php include "_/components/php/ch2-section-8-cm.php"; ?>
              </section>
            </div>
            <div class="chapter" id="chapter3">
              <section id="section-3-1">
                <?php include "_/components/php/ch3-section-1-cm.php"; ?>
              </section>
              <section id="section-3-2">
                <?php include "_/components/php/ch3-section-2-cm.php"; ?>  
              </section>
            </div>
            <div class="chapter" id="chapter4">
              <section id="section-4">
                <?php include "_/components/php/ch4-cm.php"; ?>
              </section>
            </div>
            <div class="chapter" id="chapter5">
              <section id="section-5">
                <?php include "_/components/php/ch5-cm.php"; ?>
              </section>
            </div>
            <div class="chapter" id="chapter6">
              <section id="section-6">
                <?php include "_/components/php/ch6-cm.php"; ?>
              </section>
            </div>
          </section><!-- main -->

        </div><!-- content -->
      </section><!-- container --> 
      
      <?php include "_/components/php/footer.php"; ?>
      <!-- scripts  -->
      <script src="_/js/jquery.js"></script>
      <script src="_/js/bootstrap.js"></script>
      <script src="_/js/myscripts.js"></script>
      <script src="_/js/tooltipsy.min.js"></script>
      <script src="_/audiojs/audio.min.js"></script>

      <!-- tooltipsy script-->
      <script>
      $('.hastip').tooltipsy({
        offset: [0, -1],
        show: function (e, $el) {
          $el.css({
            'left': parseInt($el[0].style.left.replace(/[a-z]/g, '')) - 50 + 'px',
            'opacity': '0.0',
            'display': 'block'
          }).animate({
            'left': parseInt($el[0].style.left.replace(/[a-z]/g, '')) + 50 + 'px',
            'opacity': '1.0'
          }, 300);
        },
        hide: function (e, $el) {
          $el.slideUp(400);
        },
        css: {
          'padding': '10px',
          'max-width': '400px',
          'color': '#fff',
          'background-color': 'rgba(0,0,0,0.7)',
          'border': '1px solid #deca7e',
          '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
          '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
          'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
          'text-shadow': 'none'
        }
      });
    </script><!-- end tooltip-->
    <!--audiojs script -->
    <script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });
</script>
  </body>
  </html>
