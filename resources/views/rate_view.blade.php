<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/show.css' , ''])

  
  <title>comments</title>
</head>
<body>

  <div class="main-frame">

    <div class="frame1">

      <div class="head">التعليقات</div>

      @foreach ($comments as $comment)
      <div class="comment">
        <div class="ali">{{$comment->content}}</div>
        <div class="_4">{{$comment->created_at}}</div>
        <div class="div2a">{{$comment->content}}</div>
      </div>
      @endforeach

    </div>

    @foreach ($project as $item)
        
    <form action="{{route('comment', $item->id)}}" method="Post">


      @csrf
      <div class="field">
        <textarea required placeholder="اضف تعليقك" name="content" cols="3 " rows="10"></textarea>
      </div>

      <button>إضافه</button>
    </form>
    @endforeach

  </div>
    
</body>
</html>