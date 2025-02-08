<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/showReq.css'])


    <title>Requests</title>
</head>
<body>

    <div class="frame-78">
        
        <div class="frame-89">
          <div class="div">المراجعه</div>
          <div class="div2">المقبوله</div>
          <div class="div3">الرفوضه</div>
          <div class="div4">المحذوفه</div>
        </div>



        <div class="forms">

          @foreach ($request as $item)
          <a href="{{route('requestinfo' , $item->project_name)}}">
            <div class="frame-90">
  
              <div class="info">
                <div class="cloud-games">{{$item->project_name}}</div>
                <div class="ali">{{$item->name}} | بواسطة</div>
              </div>
  

              <div class="right">

                <a href="{{route('stand.show' , $item->project_name)}}">
                  <div class="frame-93">
                    <div class="">نسبة استيفاء الشروط</div>
                    <div class="">33%</div>
                  </div>
                </a>

                <form method="POST" action="{{route('requestAccept' , $item->project_name)}}">
                  @csrf

                  <button>قبول</button>
                </form>

                <form method="POST" action="{{route('requestDecline' , $item->project_name)}}">
                  @csrf

                  <button class="bt">رفض</button>
                </form>

              </div>

  
            </div>
          </a>
          @endforeach
        </div>



        <div class="frame-92">
          طلبات رفع المشاريع
        </div>
        
      </div>
</body>
</html>