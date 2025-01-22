<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/request.css'])
    <title>    {{$response->project_name}}    </title>

    <style>
        .man-women{
            margin-left: 1100px
        }
    </style>

</head>
<body>

    <div class="form-container">
        

        <div class="label-contrrol"><label  class="title-label">البيانات الشخصية *</label></div>
        <div class="form-group-one">
            <div class="form-group">
                <label for="name">الاسم *</label>
                {{$response->name}}

            </div>

            <div class="form-group">
                <label for="id-number">رقم الهوية *</label>
                {{$response->user_id_card}}

            </div>
        </div>



        <div class="label-contrrol">
                <label  class="title-label">الجنس *</label>
        </div>
        <div class="man-women">
            {{$response->gender}}
        </div>



        <div class="label-contrrol" >
                <label class="title-label">الفئة العمرية *</label>
        </div>
        <div>
            {{$response->age}}
        </div>



<div class="label-contrrol"><label class="title-label">العنوان *</label></div><div class="form-group-two">
            <div class="form-group">
                <label for="governorate" >المحافظة *</label>
                {{$response->state}}

            </div>
            <div class="form-group">
            <label for="city">المديرية *</label>
            {{$response->city}}

        </div>
            <div class="form-group">
                <label for="district">الحي *</label>
                {{$response->neighborhood}}
            </div>
        </div>


    <div class="form-group-one">  
            <div class="form-group">
                <label for="email">البريد الإلكتروني *</label>
                {{$response->email}}
            </div>

            <div class="form-group">
                <label for="phone">رقم الهاتف *</label>
                {{$response->phone}}
            </div>
        </div>  



    <div class="label-contrrol"><label class="title-label">المستوى التعليمي *</label></div>
      <div>
       <div class="form-group-two">
            <div class="form-group">
                <label for="education">المستوى التعليمي *</label>
                {{$response->education}}

            </div>
            <div class="form-group">
                <label for="university">جهة الدراسة *</label>
                {{$response->education_place}}
            </div>

            <div class="form-group">
                <label for="specialization">التخصص *</label>
                {{$response->Specialty}}
            </div>
        </div> 
    </div> 



    <div class="label-contrrol"><label class="title-label">العمل *</label></div>
    <div>
    <div class="form-group-one">
        <div class="form-group">
            <label for="workplace">جهة العمل *</label>
            {{$response->work}}

        </div>
        <div class="form-group">
                <label for="job">الوظيفة *</label>
                {{$response->job}}
        </div>
    </div>  
    </div>


  <div class="label-ontrrol" ><label  class="title-label">عنوان الابتكار أو المشروع *</label></div>
 <div class="form-group">
    {{$response->project_name}}
</div>




<div class="label-contrrol">
  <label  class="title-label">هل لديك نموذج أولي *</label>
</div>
<div>

    {{$response->current_model}}
</div>


<div class="label-contrrol">
  <label class="title-label">هل تستطيع تنفيذ فكرتك *</label>
</div>
<div>
    {{$response->workable}}
</div>
<!-- </div> -->
<!-- </div> -->
<!-- ////////////////////////////////////////////////////////////////////////// -->
<div class="label-contrrol">
<label class="title-label" for="summary">ملخص الابتكار أو المشروع *</label>
</div>
<div class="form-group">
    {{$response->project_summary}}

</div>

<!-- ///////////////////////////////////////////////////////////// -->
<div class="label-contrrol">
<label class="title-label" for="challenges">أهم المعوقات التي واجهتك (إن وجدت)</label>
</div>
<div class="form-group">
    {{$response->obstacles}}

</div>

<div class="label-contrrol">
<label class="title-label">كيف يمكن أن تصف ابتكارك أو مشروعك *</label>
</div>
<div class="form-group">
    {{$response->project_description}}

</div>

<div class="label-contrrol">
<label for="distinctiveness" class="title-label">ما يميز مشروعك/فكرتك عن ما يماثلها (إن وجدت)*</label>
</div>

<div class="form-group">
    {{$response->project_distinction}}

</div>


<div>
<label class="title-label" for="improvements">أشياء بحاجة لها لتحسين عملك وأدائك *</label>
</div>
<div class="form-group">
    {{$response->evaluation_things}}

</div>


<div class="label-contrrol">
<label class="title-label">هل لديك ابتكار/اختراع؟ *</label>
</div>
<p>إذا كنت تريد التسجيل بطلب براءة اختراع يمكنك الإجابة عن التالي:</p>

<div class="form-group">
<div>
    {{$response->is_innovation}}
</div>


</div>

<div class="label-contrrol">
<label class="title-label" for="attachments">هل لديك أي وثائق أو صور أو فيديو توضح فكرتك أو مشروعك</label>
</div>
<div class="form-group">
    {{$response->project_support}}

</div>


<div class="label-contrrol">
<label class="title-label" for="fileUpload">تحميل الملفات</label>
</div>
<div class="form-group">
    no files
</div>

<div class="label-contrrol">    
<label class="title-label">الموافقة على الشروط العامة أعلاه *</label>
</div>

<div class="form-group">
<div>

    @if ($response->policies == 'on')
        Agree
    @endif

</div>
</div>

    </div>
</body>
</html>