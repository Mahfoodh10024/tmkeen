<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with PageView</title>

    @vite(['resources/css/tester.css' , 'resources/js/tester.js'])


</head>
<body>
    <div class="form-container">

        <form action="{{route('request.store')}}" method="POST">
            @csrf

                    <!-- الصفحة الأولى -->
        <div class="form-page active" id="page1">
            <div class="label-contrrol"><label  class="title-label">البيانات الشخصية</label></div>
            <br>
            <div class="form-group-one">

                <div class="label-ontrrol" ><label  class="title-label"> الاسم *</label></div>
                <div class="form-group">
                    <input class="name1" name="name" type="text" id="name" required>
                </div>

                <div class="label-ontrrol" ><label  class="title-label"> رقم الهوية  *</label></div>
                <div class="form-group">
                    <input type="text" name="user_id_card" id="id-number" required>
                </div>
            </div> 

            <div class="form-group-two">

                <div class="label-ontrrol" ><label  class="title-label">المستوى التعليمي *</label></div>
                <div class="form-group">
                    <input name="education" type="text" id="education" required>
                </div>
    
                <div class="label-ontrrol" ><label  class="title-label">جهة الدراسة *</label></div>
                <div class="form-group">
                    <input name="education_place"  type="text" id="university" required>
                </div>
    
                <div class="label-ontrrol" ><label  class="title-label">االتخصص*</label></div>
                <div class="form-group">
                    <input name="Specialty" type="text" id="specialization" required>
                </div>
            </div> 
            
        </div>

        <!-- الصفحة الثانية -->
        <div class="form-page" id="page2">
            
            <div class="label-contrrol"><label  class="title-label">بيانات المشروع</label></div>
            <br>

            <div class="label-ontrrol" > <label  class="title-label">عنوان الابتكار أو المشروع *</label></div>
            <br>
            <div class="form-group">
            <input name="project_name" type="text" id="projectTitle" placeholder="أدخل عنوان المشروع" required>
            
            <div class="label-ontrrol" ><label  class="title-label">نوع المشروع *</label></div>
            <br>
                <div class="form-group">
                    <select name="state" id="governorate">
                        <option value="تقني">تقني</option>
                        <option value="تجاري">تجاري</option>
                        <option value="مالي">مالي</option>
                    </select>
            </div>

            <br>
            <div class="label-ontrrol" ><label  class="title-label">اهداف المشروع *</label></div>
            <br>
                <div class="form-group">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>


            <br>
            <div class="label-ontrrol" ><label  class="title-label">الميزانيه المتوقعه *</label></div>
            <br>
                <div class="form-group">
                <input name="budget" type="text" id="projectTitle" placeholder="أدخل عنوان المشروع" required>
            </div>

                <div class="label-ontrrol" ><label  class="title-label">قيود المشروع *</label></div>
                <br>
                <div class="form-group">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>

                <br>
                <div class="label-contrrol"><label class="title-label">هل تستطيع تنفيذ فكرتك *</label></div>
                <div class="idea">
                    <label><input type="radio" name="workable" value="نعم" > نعم</label>
                    <label><input type="radio" name="workable" value="مساعدة"> نعم، لكن أحتاج إلى مساعدة</label>
                    <label><input type="radio" name="workable" value="لا"> لا</label>
                </div>

                <br>
                <div class="label-contrrol"><label  class="title-label">هل لديك نموذج أولي *</label></div>
                <div class="idea">
                    <label><input id="yes" type="radio" name="current_model" value="مكتمل" > نعم، وهو مكتمل</label>
                    <label><input type="radio" name="current_model" value="غير مكتمل"> نعم، لكنه غير مكتمل تماما وبحاجة للتحسين</label>
                    <label><input type="radio" name="current_model" value="تحت الدراسة"> نعم، لكنه لا يزال دراسة وتصاميم</label>
                    <label><input id="no" type="radio" name="current_model" value="لا"> لا</label>
                </div>

                <div id="files" class="files">
                    <input type="file" name="" id="">
                </div>

                <br>
                <div class="label-contrrol"><label class="title-label">هل تستطيع تنفيذ فكرتك *</label></div>
                <div class="idea">
                    <label><input type="radio" name="workable" value="نعم" > نعم</label>
                    <label><input type="radio" name="workable" value="مساعدة"> نعم، لكن أحتاج إلى مساعدة</label>
                    <label><input type="radio" name="workable" value="لا"> لا</label>
                </div>

            </div>

        
        </div>

        <!-- الصفحة الثالثة -->
        <div class="form-page" id="page3">
            <h2>المجموعة الثالثة</h2>
            <input name="t1" type="text" placeholder="الإدخال 5">
            <input name="t2" type="text" placeholder="الإدخال 6">
            <input name="t3" type="text" placeholder="الإدخال 2">
            <input name="t4" type="text" placeholder="الإدخال 2">
        </div>

        <div class="form-page" id="page3">
            <h2>المجموعة الرابعه</h2>
            <input name="t5" type="text" placeholder="الإدخال 5">
            <input name="t6" type="text" placeholder="الإدخال 6">
            <input name="t7" type="text" placeholder="الإدخال 2">
            <input name="t8" type="text" placeholder="الإدخال 2">
        </div>


        <button>رفع</button>
        </form>


    </div>

    <div class="navigation-buttons">
        <button id="prevBtn" disabled>السابق</button>
        <button id="nextBtn">التالي</button>
    </div>

    <script src="t.js"></script>
</body>
</html>