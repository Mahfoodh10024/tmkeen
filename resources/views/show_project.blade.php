<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/show.css' , 'resources/js/app.js'])


  <title>Show</title>
</head>
<body>
    @foreach ($project as $pro)
        
   
  <div class="frame-48">

    <img class="frame-54" src="Mainpage/frame-181.png" />

    <div class="frame-50">
      <div class="div">صنعاء</div>
      <div class="div2">صنعاء</div>
      <img class="location" src="projects/location0.svg" />
    </div>

    <div class="d1">
      <div class="div4">{{$pro['name']}}</div>
      <div class="div3">{{$pro['description']}}</div>
    </div>


    <div class="d2">

      <div class="section">
        <div class="t">الميزانيه المطلوبه</div>
        <div class="value">RY{{$pro['budget']}}</div>
      </div>


      <div class="section">
        <div class="t">الداعمين</div>
        <div class="value">5</div>
      </div>
  
  
      <div class="section">
          <div class="t">الداعمين</div>
          <div class="value">5</div>
      </div>
  
    </div>


    <div class="frame-40">
      <a href="">
        <div class="">التعليقات</div>
      </a>

      <a href="{{route('do',$pro['name'])}}">
        <div class="">الوثائق</div>
      </a>

      <div class="">ملخص</div>
      <div class="">التنفيذ</div>
    </div>
    
    <div class="frame-56"></div>
  </div>
   @endforeach

      <div class="pages">
        @yield('content')
      </div>

</body>
</html>