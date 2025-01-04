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
    <img class="frame-54" src="projects/frame-540.png" />
    <div class="frame-50">
      <div class="div">صنعاء</div>
      <div class="div2">صنعاء</div>
      <img class="location" src="projects/location0.svg" />
    </div>

    <div class="div3">{{$pro['description']}}</div>

    <div class="div4">{{$pro['name']}}</div>

    <div class="div5">الميزانيه المطلوبه</div>

    <div class="div6">الداعمين</div>

    <div class="div7">الداعمين</div>

    <div class="r-300-0000">RY{{$pro['budget']}}</div>

    <div class="_5">5</div>

    <div class="_52">5</div>

    <div class="frame-40">
      <div class="div8">الوثائق</div>
      <div class="div9">ملخص</div>
      <div class="div10">التعليقات</div>
      <div class="div11">التنفيذ</div>
    </div>
    
    <div class="frame-55"></div>
    <div class="frame-56"></div>
  </div>
   @endforeach
</body>
</html>