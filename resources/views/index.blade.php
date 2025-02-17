
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css' , 'resources/js/app.js'])
    
    
    <title>@yield('title')</title>
  </head>
  <body>


    <div id="dialoger" class="dialoger">

      <div id="close" class="close">X</div>

      <a href="request">
        <div>افراد</div>
      </a>
      <a href="tes">
        <div>مجموعه</div>
      </a>
      <a href="">
        <div>شركات</div>
      </a>
    </div>

      <div class="frame-2">

        <div class="div">تمكين</div>

      <div id="div3" class="frame-18">
          <div id="div3" class="div3">إضافة مشروع</div>
        </div>
      

      <a href="/">
        <div id="ho" class="frame-8">
          <div class="div2">الرئيسيه</div>
          <div class="h">
            <img src="Mainpage/hom.svg" alt="">
          </div>
        </div>
      </a>
      


      <a href="ownProject">
        <div class="frame-14">
          <div class="div4">المشاريع</div>
          <img class="diamond" src="Mainpage/diamond0.svg" alt="icon"/>
        </div>
      </a>




      <a href="/account">
        <div class="frame-16">
          <div class="div6">الحساب</div>
          <div class="h">
            <img src="Mainpage/profile0.svg" alt="">
          </div>
        </div>
      </a>


      <a href="backing">
        <div class="frame-15">
          <div class="div5">الحساب</div>
          <img class="profile" src="Mainpage/profile0.svg" />
        </div>
      </a>

        <a href="/request">
          <div class="frame-17">
            <div class="div7">الاعدادات</div>
            <img class="setting-2" src="Mainpage/setting-20.svg" />
          </div>
        </a>


      </div>


      {{-- ------------------------------------ --}}


          @yield('content')
    
        </body>
</html>