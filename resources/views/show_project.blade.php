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
    {{-- @foreach ($more as $moree) --}}
        
        
  <div class="frame-48">

    <img class="frame-54" src="\projects\frame-540.png" />

    <div class="frame-50">
      <div class="div"></div>
      <div class="div2"></div>
      <img class="location" src="\projects\location0.svg" />
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
        <div class="value">{{$backers}}</div>
      </div>
  
  
      <div class="section">
          <div class="t">الدعم</div>
          <div class="value">RY {{$amount}}</div>
      </div>

    </div>

    


    <form class="data" action="{{route('bee')}}" method="POST">
      @csrf
      <input name="name" value="{{$pro->user->name}}" type="hidden">
      <input name="id" value="{{$pro->id}}" type="hidden">

      <button class="sub">دعم هذا المشروع</button>
    </form>
    


    <div class="frame-40">
      <a href="{{route('ratee' , $pro->id)}}">
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
  {{-- @endforeach --}}

        @yield('content')
</body>
</html>