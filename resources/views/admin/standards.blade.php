<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/standards.css'])



</head>
<body>

<div class="frame-79">

    @foreach ($stands as $item)

    <div class="frame-98">
      <div class="cloud-games">{{$item->project_name}}</div>
      <div class="ali">بواسطة | Ali</div>
    </div>


    <div class="result">

        <div class="frame">
            <div class="div">
                <p class="head"><span>*</span> القيمه المضافه</p>

                <div>{{$item->question1 + $item->question2 + $item->question3 + $item->question4 + $item->question5 + $item->question6 / 100 * 48}}%</div>
            </div>
        </div>
      
        <div class="frame">
            <div class="div2">
              <span>
                <p class="head"> <span>*</span> جدوى التنفيذ</p>

              </span>
            </div>
        </div>
      
          <div class="frame">
            <div class="div2">
              <span>
                <p class="head"> <span>*</span> تاثير السوق</p>

              </span>
            </div>
          </div>
          
          <div class="frame">
            <div class="div2">
              <span>
                <p class="head"> <span>*</span> جودة التصميم</p>

              </span>
            </div>
          </div>
      
          <div class="frame">
            <div class="div3">
              <span>
                <p class="head"> <span>*</span> الاستدمه والمرونه</p>

              </span>
            </div>
          </div>
      
          <div class="frame">
            <div class="div2">
              <span>
                <p class="head"> <span>*</span> الابتكار التقني</p>

              </span>
            </div>
          </div>
      
          <div class="frame">
            <div class="div2">
              <span>
                <p class="head"> <span>*</span> التقييم والقياس</p>
                
              </span>
            </div>
          </div>

    </div>

    
@endforeach

</div>
  
</body>
</html>