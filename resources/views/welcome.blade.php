<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css' , 'resources/js/app.js'])



</head>
<body>

  <div><h1>My projects</h1></div>

    <div class="frame-40">
        <div class="div9">الجميع</div>
        <div class="div13">الرئيسيه</div>
    </div>  

    <div class="projects">
        @foreach ($projects as $pro)
    
        @if ($pro->project_status	== 'reviewing')
        <a href="{{route('ownProject.show',$pro->id)}}">
          <div class="frame-50">
            <img class="frame-182" src="Mainpage/frame-181.png" />
            <div class="frame-21">
              <div class="info">
        
                <div class="inf">      
                  <div class="">{{$pro->name}}</div>
                  <div class="">بواسطة| نجم علي</div>
                  <div class="">{{$pro->created_at}}</div></div>
                  <div>مراجعه</div>
                <div class="">{{$pro->budget}} :التمويل الحالي</div>
        
        
              </div>
        
              <div class="div16">
                {{$pro->description}}
              </div>
            </div>
            
          </div>
        </a>
        @endif

        @if ($pro->project_status	== 'accept')
        <a href="{{route('ownProject.show',$pro->id)}}">
          <div class="frame-50">
            <img class="frame-182" src="Mainpage/frame-181.png" />
            <div class="frame-21">
              <div class="info">
        
                <div class="inf">      
                <div class="">{{$pro->name}}</div>
                <div class="">بواسطة| نجم علي</div>
                <div class="">{{$pro->created_at}}</div></div>
                <div>قبول</div>
                <div class="">{{$pro->budget}} :التمويل الحالي</div>
      
              </div>
        
        
              <div class="div16">
                {{$pro->description}}
              </div>
            </div>
            
          </div>
        </a>
        @endif
    
        @endforeach
      </div>
    
</body>
</html>