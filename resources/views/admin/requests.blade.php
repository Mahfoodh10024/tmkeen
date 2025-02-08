<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/request.css' , 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <div class="form-container">

        <a href="{{route('request.show' , '2')}}">
            <div>Show</div>
        </a>

        <header class="header">
            <h1>استمارة طلب تسجيل ابتكار/اختراع</h1>
        </header>

        <form method="POST" action="{{route('request.store')}}">

            @csrf

        <div class="label-contrrol">
                <label  class="title-label">البيانات الشخصية *</label>
        </div>
        <div class="form-group-one">
            <div class="form-group">
                <label for="name">الاسم *</label>
                <input class="name1" name="name" type="text" id="name" required>
            </div>
            <div class="form-group">
                <label for="id-number">رقم الهوية *</label>
                <input type="text" name="user_id_card" id="id-number" required>
            </div>
        </div>

        <div class="label-contrrol">
                <label  class="title-label">الجنس *</label>
        </div>
        <div class="man-women">
                    <label><input type="radio" name="gender" value="ذكر"> ذكر</label>
                    <label><input type="radio" name="gender" value="أنثى"> أنثى</label>
        </div>
        <div class="label-contrrol" >
                <label class="title-label">الفئة العمرية *</label>
        </div>
        <div>
                <label><input type="radio" name="age" value="أقل من 15 سنة"> أقل من 15 سنة</label>
                <label><input type="radio" name="age" value="أكبر من 15 وأقل من 35 سنة"> أكبر من 15 وأقل من 35 سنة</label>
                <label><input type="radio" name="age" value="أكبر من 35 سنة"> أكبر من 35 سنة</label>
        </div>

<!-- //////////////////////////////////////////////////////////////////////// -->
<div class="label-contrrol">
 <label class="title-label">العنوان *</label>
</div>
<div class="form-group-two">
            <div class="form-group">
                <label for="governorate" >المحافظة *</label>
                <select name="state" id="governorate">
                    <option value="صنعاء">صنعاء</option>
                    <option value="عدن">عدن</option>
                    <option value="تعز">تعز</option>
                    <option value="صنعاء">صنعاء</option>
                    <option value="عدن">عدن</option>
                    <option value="تعز">تعز</option>
                </select>
            </div>
            <div class="form-group">
            <label for="city">المديرية *</label>
            <input name="city" type="text" id="city" required>
        </div>
            <div class="form-group">
                <label for="district">الحي *</label>
                <input name="neighborhood" type="text" id="district" required>
            </div>
        </div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////                -->

<div class="form-group-one">  
            <div class="form-group">
                <label for="email">البريد الإلكتروني *</label>
                <input name="email" type="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="phone">رقم الهاتف *</label>
                <input name="phone" type="tel" id="phone" required>
            </div>
       <!-- </div> -->
    </div>        

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////         -->
          
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////         -->
      <div class="label-contrrol">
         <label class="title-label">المستوى التعليمي *</label>
        </div>
      <div>
       <div class="form-group-two">
            <div class="form-group">

                <label for="education">المستوى التعليمي *</label>
                <input name="education" type="text" id="education" required>
            </div>

            <div class="form-group">
                <label for="university">جهة الدراسة *</label>
                <input name="education_place"  type="text" id="university" required>
            </div>

            <div class="form-group">
                <label for="specialization">التخصص *</label>
                <input name="Specialty" type="text" id="specialization" required>
            </div>
        </div> 
    <!-- </div> -->

</div> 
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
           <div class="label-contrrol">
                <label class="title-label">العمل *</label>
            </div>
                <div>
     <div class="form-group-one">
        <div class="form-group">
            <label for="workplace">جهة العمل *</label>
            <input name="workplace" type="text" id="workplace" required>
        </div>
           <div class="form-group">
                <label for="job">الوظيفة *</label>
                <input name="job" type="text" id="job" required>
           </div>
     </div>  
    </div>
           <!-- </div> -->
<!-- //////////////////////////////////////////////////////////////////////////
  -->
  <div class="label-ontrrol" >
    <label  class="title-label">عنوان الابتكار أو المشروع *</label>
</div>
 <div class="form-group">
  <input name="project_name" type="text" id="projectTitle" placeholder="أدخل عنوان المشروع" required>
</div>

<div class="label-ontrrol" >
    <label  class="title-label">الميزانيه المتوقعه *</label>
</div>
 <div class="form-group">
  <input name="budget" type="text" id="projectTitle" placeholder="أدخل عنوان المشروع" required>
</div>

<div class="label-ontrrol" >
    <label  class="title-label">نوع المشروع *</label>
</div>
 <div class="form-group">
  <input name="type" type="text" id="projectTitle" placeholder="أدخل عنوان المشروع" required>
</div>

<!-- //////////////////////////////////////// -->
<div class="label-contrrol">
  <label  class="title-label">هل لديك نموذج أولي *</label>
</div>
  <div>
      <label><input type="radio" name="current_model" value="مكتمل" > نعم، وهو مكتمل</label>
      <label><input type="radio" name="current_model" value="غير مكتمل"> نعم، لكنه غير مكتمل تماما وبحاجة للتحسين</label>
      <label><input type="radio" name="current_model" value="تحت الدراسة"> نعم، لكنه لا يزال دراسة وتصاميم</label>
      <label><input type="radio" name="current_model" value="لا"> لا</label>
<!-- </div> -->
</div>
<!-- ///////////////////////////////////////////////////// -->
<div class="label-contrrol">
  <label class="title-label">هل تستطيع تنفيذ فكرتك *</label>
</div>
  <div>
      <label><input type="radio" name="workable" value="نعم" > نعم</label>
      <label><input type="radio" name="workable" value="مساعدة"> نعم، لكن أحتاج إلى مساعدة</label>
      <label><input type="radio" name="workable" value="لا"> لا</label>
  </div>
<!-- </div> -->
<!-- </div> -->
<!-- ////////////////////////////////////////////////////////////////////////// -->
<div class="label-contrrol">
<label class="title-label" for="summary">ملخص الابتكار أو المشروع *</label>
</div>
<div class="form-group">
  <textarea id="summary" name="project_summary" rows="4" placeholder="أدخل ملخص المشروع" required></textarea>
</div>

<!-- ///////////////////////////////////////////////////////////// -->
<div class="label-contrrol">
<label class="title-label" for="challenges">أهم المعوقات التي واجهتك (إن وجدت)</label>
</div>
<div class="form-group">
  <textarea id="challenges" name="obstacles" rows="4" placeholder="أدخل المعوقات (إن وجدت)"></textarea>
</div>
<!-- </div> -->

<!-- ///////////////////////////////////////////////////////////////////// -->
<div class="label-contrrol">
<label class="title-label">كيف يمكن أن تصف ابتكارك أو مشروعك *</label>
</div>
<div class="form-group">
  <div>
      <label><input type="radio" name="project_description" value="اختراع" required> اختراع: لم يسبق لأحد القيام به</label>
      <label><input type="radio" name="project_description" value="تحسين"> ابتكار؛ تحسين أو تعديل أو تطوير لنماذج سابقة</label>
      <label><input type="radio" name="project_description" value="استنساخ"> استنساخ؛ تقليد لنماذج تم عملها سابقاً</label>
      <label><input type="radio" name="project_description" value="أخرى"> أخرى</label>
  </div>
<!-- </div> -->
</div>

<!-- ///////////////////////////////////////////////////////////////////////// -->
<div class="label-contrrol">
<label for="distinctiveness" class="title-label">ما يميز مشروعك/فكرتك عن ما يماثلها (إن وجدت)*</label>
</div>
<div class="form-group">
  <textarea name="project_distinction" id="distinctiveness"  rows="4" placeholder="أدخل ما يميز فكرتك"></textarea>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////// -->
<div>
<label class="title-label" for="improvements">أشياء بحاجة لها لتحسين عملك وأدائك *</label>
</div>
<div class="form-group">
<textarea name="evaluation_things" id="improvements" rows="4" placeholder="أدخل الأشياء التي تحتاجها للتحسين" required></textarea>
</div>
<!-- </div> -->
<!-- ////////////////////////////////////////////////////// -->

<div class="label-contrrol">
<label class="title-label">هل لديك ابتكار/اختراع؟ *</label>
</div>
<label>إذا كنت تريد التسجيل بطلب براءة اختراع يمكنك الإجابة عن التالي:</label>
<br>
<br>

<div class="form-group">
<div>
<label><input type="radio" name="is_innovation" value="نعم اختراع أصيل" > نعم لدي ابتكار / اختراع، يتميز بالأصالة والسبق ولم يقم به أحد من قبل</label>
<label><input type="radio" name="is_innovation" value="نعم لكن لست متأكد"> نعم، ولكني لست متأكد إن كانت هناك نماذج أو دراسات سابقة للعمل الذي قمت به</label>
</div>
<!-- </div> -->
</div>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<div class="label-contrrol">
<label class="title-label" for="attachments">هل لديك أي وثائق أو صور أو فيديو توضح فكرتك أو مشروعك</label>
</div>
<div class="form-group">
<textarea id="attachments" name="project_support" rows="4" placeholder="قم بإدخال تفاصيل أو ارفع الملفات ذات الصلة هنا"></textarea>
</div>
<!-- </div> -->

<!-- ///////////////////////////////////////////////////////////////// -->
{{-- <div class="label-contrrol">
<label class="title-label" for="fileUpload">تحميل الملفات</label>
</div>
<div class="form-group">
<input type="file" id="fileUpload" multiple>
<!-- <p>Click or drag files to this area to upload.<br> You can upload up to 20 files.</p> -->
</div>
<!-- </div>  --> --}}

<!-- //////////////////////////////////////////////////// -->
<div class="label-contrrol">    
<label class="title-label">الموافقة على الشروط العامة أعلاه *</label>
</div>
<div class="form-group">
<div>
<label><input name="policies" type="checkbox" id="agreement" required> موافق</label>
</div>
</div>
<!-- </div> -->

<!-- ///////////////////////////////////////////////////////////// -->
<button type="submit">إرسال</button>

</form>
<a href="addproject">التالي</a>

</div>
</body>
</html>