<!DOCTYPE html>
<html>
  <head>
    <title>الصوتيات</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
	 #wrapper { width: 400px; margin: 40px auto; }
      ol { padding: 0px; margin: 0px; list-style: decimal-leading-zero inside; color: #ccc; width: 460px; border-top: 1px solid #ccc; font-size: 0.9em; }
      ol li { position: relative; margin: 0px; padding: 9px 2px 10px; border-bottom: 1px solid #ccc; cursor: pointer; }
      ol li a { display: block; text-indent: -3.3ex; padding: 0px 0px 0px 20px; }
      li.playing { color: #aaa; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.3); }
      li.playing a { color: #000; }
      li.playing:before { content: '♬'; width: 14px; height: 14px; padding: 3px; line-height: 14px; margin: 0px; position: absolute; left: -24px; top: 9px; color: #000; font-size: 13px; text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.2); }
      
      #shortcuts { position: fixed; bottom: 0px; width: 100%; color: #666; font-size: 0.9em; margin: 60px 0px 0px; padding: 20px 20px 15px; background: #f3f3f3; background: rgba(240, 240, 240, 0.7); }
      #shortcuts div { width: 460px; margin: 0px auto; }
      #shortcuts h1 { margin: 0px 0px 6px; }
      #shortcuts p { margin: 0px 0px 18px; }
      #shortcuts em { font-style: normal; background: #d3d3d3; padding: 3px 9px; position: relative; left: -3px;
        -webkit-border-radius: 4px; -moz-border-radius: 4px; -o-border-radius: 4px; border-radius: 4px;
        -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); -moz-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); -o-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); }

      @media screen and (max-device-width: 480px) {
       
        #shortcuts { display: none; }
      }
    </style>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">
      
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 <!-- scripts  -->
    <script src="_/js/jquery.js"></script>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/audiojs/audio.min.js"></script>
     <script src="_/js/myscripts.js"></script>
     <!--favicons-->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="ico/favicon.png">
    
    <script>
      $(function() { 
        // Setup the player to autoplay the next track
        var a = audiojs.createAll({
          trackEnded: function() {
            var next = $('ol li.playing').next();
            if (!next.length) next = $('ol li').first();
            next.addClass('playing').siblings().removeClass('playing');
            audio.load($('a', next).attr('data-src'));
            audio.play();
          }
        });
        
        // Load in the first track
        var audio = a[0];
            first = $('ol a').attr('data-src');
        $('ol li').first().addClass('playing');
        audio.load(first);

        // Load in a track on click
        $('ol li').click(function(e) {
          e.preventDefault();
          $(this).addClass('playing').siblings().removeClass('playing');
          audio.load($('a', this).attr('data-src'));
          audio.play();
        });
        // Keyboard shortcuts
        $(document).keydown(function(e) {
          var unicode = e.charCode ? e.charCode : e.keyCode;
             // right arrow
          if (unicode == 39) {
            var next = $('li.playing').next();
            if (!next.length) next = $('ol li').first();
            next.click();
            // back arrow
          } else if (unicode == 37) {
            var prev = $('li.playing').prev();
            if (!prev.length) prev = $('ol li').last();
            prev.click();
            // spacebar
          } else if (unicode == 32) {
            audio.playPause();
          }
        })
      });
    </script>
  </head>
  <body id="audio">
      <?php include "_/components/php/header.php"; ?>
      
      <section class="container">
            <div class="content row">
                <section class="main col col-lg-8">
       <div id="wrapper">
	   <h2>صوتيات الكتاب</h2>
      <audio preload></audio>
      <h3>المقدمة</h3>
      <ol>
        <li><a href="#" data-src="http://dl.dropboxusercontent.com/u/34752542/%D8%AE%D8%B7%D8%A8%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A7%D8%A8.mp3">المقدمة</a></li>
        <li><a href="#" data-src="http://dl.dropboxusercontent.com/u/34752542/%D8%AE%D8%B7%D8%A8%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A7%D8%A8.mp3">خطبة الكتاب</a></li>
        <li><a href="#" data-src="http://dl.dropboxusercontent.com/u/34752542/%D9%85%D9%82%D8%AF%D9%85%D8%A9%20%D9%84%D9%83%D8%AA%D8%A7%D8%A8%20%D8%A7%D9%84%D8%A7%D8%B9%D8%AA%D9%82%D8%A7%D8%AF.mp3">مقدمة لكتاب الاعتقاد معينة لقارئها على المراد</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/04-islands-is-the-limit.mp3">كتاب أم القواعد وما انطوت عليها من العقائد</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/05-one-more-chance-for-a-heart-to-skip-a-beat.mp3">مقدمة من الأصول معينة في فروعها على الوصول</a></li>
      
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">كتاب الطهارة</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/07-everyday-shelter.mp3">فصل في فرائض الوضوء</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/08-basic-hypnosis.mp3">سنن الوضوء</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/09-infinite-victory.mp3">نواقض الوضوء</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/10-the-curious-incident-of-big-poppa-in-the-nighttime.mp3">فرائض الغسل</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/11-mo-stars-mo-problems.mp3">سنن الغسل</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">موجب الغسل</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">فصل في التيمم</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">فروض التيمم</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">سنن النيمم</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">كتاب الصلاة</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/07-everyday-shelter.mp3">سنن الصلاة</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/08-basic-hypnosis.mp3">مندوبات الصلاة</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/09-infinite-victory.mp3">فرض العين وفرض الكفايةy</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/10-the-curious-incident-of-big-poppa-in-the-nighttime.mp3">سجود السهو</a></li>
        <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/11-mo-stars-mo-problems.mp3">صلاة الجمعة</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">شروط الإمام</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">كتاب الزكاة</a></li>
          <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">فصل في زكاة الفطر</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">كتاب الصيام</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">كتاب الحج</a></li>
         <li><a href="#" data-src="http://kolber.github.io/audiojs/demos/mp3/06-suicidal-fantasy.mp3">كتاب مبادئ التصوف وهوادي التعرف</a></li>
        </ol>
    </div>
    <div id="shortcuts">
      <div>
        <h3>:اختصارات لوحة المفاتيح</h3>
        <p><em>&rarr;</em>التالي</p>
        <p><em>&larr;</em>السابق</p>
        <p><em>Space</em>إيقاف \ تشغيل</p>
      </div>
    </div>
        </section><!-- main -->
        <section class="col col-lg-4">
		</section> <!-- sidebar -->		
        </div><!-- content -->
      </section><!-- container -->  
      
      <?php include "_/components/php/footer.php"; ?>
    

  </body>
</html>
