<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/add_project.css' , 'resources/js/app.js'])


    <title>Questions</title>
</head>
<body>
    
    <div class="">
        @if ($errors->any())
            <div class="">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" >
                        @if ($error == 'These credentials do not match our records.')
                        <div class="alert alert-danger">
                            بيانات التسجيل خاطئه
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>

<div class="main">


    <form class="questionsForm" action="{{route('stand.store')}}" method="POST">

            @csrf


        <input name="project_name" value="{{session('project_name')}}" type="hidden">


        <div class="invation">
                <div class="headline"><span>*</span> الاصاله والابتكار</div>

            <div class="d1">
                <p>هل الفكره المقدمه فريده وغير موجوده</p>

                <div>
                    <input value="7" type="checkbox" name="q1" id="">
                    <input value="7" type="checkbox" name="q1" id="">
                    <input value="7" type="checkbox" name="q1" id="">
                    <input value="2" type="checkbox" name="q1" id="">
                </div>

            </div>
    
            <div class="d2">
                <p>المشروع يقدم حلا مبتكرا لمشكله قائمه</p>

                <div>
                    <input value="7" type="checkbox" name="q2" id="">
                    <input value="7" type="checkbox" name="q2" id="">
                    <input value="7" type="checkbox" name="q2" id="">
                    <input value="7" type="checkbox" name="q2" id="">
                </div>

            </div>
            
            <div class="d3">
                <p>يظهر المشروع مستوى عالي من الابداع في تصميمه وتنفيذه</p>

                <div>
                    <input value="7" type="checkbox" name="q3" id="">
                    <input value="7" type="checkbox" name="q3" id="">
                    <input value="7" type="checkbox" name="q3" id="">
                    <input value="7" type="checkbox" name="q3" id="">
                </div>

            </div>
    
            <div class="d4">
                <p>يتضمن المشروع عناصر غير تقليديه تميزه عن الاخرين</p>

                <div>
                    <input value="7" type="checkbox" name="q4" id="">
                    <input value="7" type="checkbox" name="q4" id="">
                    <input value="7" type="checkbox" name="q4" id="">
                    <input value="7" type="checkbox" name="q4" id="">    
                </div>
            </div>
            
            <div class="d5">
                <p>المشروع يعيد تعريف او تحسين مفاهيم موجوده بالفعل</p>

                <div>
                    <input value="7" type="checkbox" name="q5" id="">
                    <input value="7" type="checkbox" name="q5" id="">
                    <input value="7" type="checkbox" name="q5" id="">
                    <input value="7" type="checkbox" name="q5" id="">
                </div>

            </div>

            <div class="d5">
                <p>الفكره تحتوي على عناصر جديده تحدث تغييرا في الصناعه</p>
                
                <div>
                    <input value="7" type="checkbox" name="q6" id="">
                    <input value="7" type="checkbox" name="q6" id="">
                    <input value="7" type="checkbox" name="q6" id="">
                    <input value="7" type="checkbox" name="q6" id="">
                </div>

            </div>
        
        </div>
        {{-- ====================================================== --}}

        <div class="additional">
            <div class="headline"> <span>* </span> القيمه المضافه</div>

        <div class="d1">
            <p>يلبي المشروع احتياجات حقيقيه للمستخدمين بشكل فعال</p>

            <div>
                <input value="3.5" type="checkbox" name="q7" id="">
                <input value="3.5" type="checkbox" name="q7" id="">
                <input value="3.5" type="checkbox" name="q7" id="">
                <input value="3.5" type="checkbox" name="q7" id="">
            </div>

        </div>

        <div class="d2">
            <p>يحسن المشروع جودة حياة المستخدمين او يسهل اداء المهام</p>

            <div>
                <input value="3.5" type="checkbox" name="q8" id="">
                <input value="3.5" type="checkbox" name="q8" id="">
                <input value="3.5" type="checkbox" name="q8" id="">
                <input value="3.5" type="checkbox" name="q8" id="">
    
            </div>

        </div>
        
        <div class="d3">
            <p>المشروع يساهم في تحسين الوضع الاجتماعي او الاقتصادي للمجتمع</p>

            <div>
                <input value="3.5" type="checkbox" name="q9" id="">
                <input value="3.5" type="checkbox" name="q9" id="">
                <input value="3.5" type="checkbox" name="q9" id="">
                <input value="3.5" type="checkbox" name="q9" id="">
            </div>

        </div>

        <div class="d4">
            <p>القيمه التي يقدمها المشروع واضحه ومميزه مقارنة بالحلول الاخرى</p>

            <div>
                <input value="3.5" type="checkbox" name="q10" id="">
                <input value="3.5" type="checkbox" name="q10" id="">
                <input value="3.5" type="checkbox" name="q10" id="">
                <input value="3.5" type="checkbox" name="q10" id="">
            </div>

        </div>
        
        <div class="d5">
            <p>يوفر المشروع فوائد ملموسه ومطلوبه في السوق</p>

            <div>
                <input value="3.5" type="checkbox" name="q11" id="">
                <input value="3.5" type="checkbox" name="q11" id="">
                <input value="3.5" type="checkbox" name="q11" id="">
                <input value="3.5" type="checkbox" name="q11" id="">
            </div>

        </div>
    
    </div>
        {{-- ====================================================== --}}

        
        <div class="fisability">
            <div class="headline"> <span>*</span> جدوى التنفيذ</div>

        <div class="d1">
            <p>التكنولوجيا المستخدمه في المشروع متاحه وقابله لتنفيذ</p>

            <div>
                <input value="3.5" type="checkbox" name="q13" id="">
                <input value="3.5" type="checkbox" name="q13" id="">
                <input value="3.5" type="checkbox" name="q13" id="">
                <input value="3.5" type="checkbox" name="q13" id="">
            </div>

        </div>

        <div class="d2">
            <p>هناك موارد تقنيه كافيه لدعم تنفيذ المشروع بنجاح</p>

            <div>
                <input value="3.5" type="checkbox" name="q14" id="">
                <input value="3.5" type="checkbox" name="q14" id="">
                <input value="3.5" type="checkbox" name="q14" id="">
                <input value="3.5" type="checkbox" name="q14" id="">
            </div>

        </div>
        
        <div class="d3">
            <p>توجد خطة عمل مفصله ومحدده لتحقيق اهداف المشروع</p>

            <div>
                <input value="3.5" type="checkbox" name="q15" id="">
                <input value="3.5" type="checkbox" name="q15" id="">
                <input value="3.5" type="checkbox" name="q15" id="">
                <input value="3.5" type="checkbox" name="q15" id="">
            </div>

        </div>

        <div class="d4">
            <p>التنظيم الإداري للمشروع واضح وفعال</p>

            <div>
                <input value="3.5" type="checkbox" name="q16" id="">
                <input value="3.5" type="checkbox" name="q16" id="">
                <input value="3.5" type="checkbox" name="q16" id="">
                <input value="3.5" type="checkbox" name="q16" id="">
            </div>

        </div>
        
        <div class="d5">
            <p>تم تحديد وتقييم المخاطر المحتمله للمشروع بشكل كامل</p>

            <div>
                <input value="3.5" type="checkbox" name="q17" id="">
                <input value="3.5" type="checkbox" name="q17" id="">
                <input value="3.5" type="checkbox" name="q17" id="">
                <input value="3.5" type="checkbox" name="q17" id="">
            </div>

        </div>

        <div class="d5">
            <p>توجد استراتيجيات فعاله لتعامل مع المخاطر المحتمله</p>

            <div>
                <input value="3.5" type="checkbox" name="q18" id="">
                <input value="3.5" type="checkbox" name="q18" id="">
                <input value="3.5" type="checkbox" name="q18" id="">
                <input value="3.5" type="checkbox" name="q18" id="">
            </div>

        </div>
    
    </div>
        {{-- ====================================================== --}}


        
        <div class="environment">
            <div class="headline"><span>*</span> تاثير السوق</div>

        <div class="d1">
            <p>هناك طلب كاف على الخدمه او المنتج في السوق المستهدف</p>

            <div>
                <input value="5.25" type="checkbox" name="q19" id="">
                <input value="5.25" type="checkbox" name="q19" id="">
                <input value="5.25" type="checkbox" name="q19" id="">
                <input value="5.25" type="checkbox" name="q19" id="">
            </div>

        </div>

        <div class="d2">
            <p>السوق المستهدف كبير ويظهر نمو متسقيلا</p>

            <div>
                <input value="5.25" type="checkbox" name="q20" id="">
                <input value="5.25" type="checkbox" name="q20" id="">
                <input value="5.25" type="checkbox" name="q20" id="">
                <input value="5.25" type="checkbox" name="q20" id="">
            </div>

        </div>
        
        <div class="d3">
            <p>المشروع يمتلك ميزات واضحه تجعله يتفوق على المنافسين</p>

            <div>
                <input value="5.25" type="checkbox" name="q21" id="">
                <input value="5.25" type="checkbox" name="q21" id="">
                <input value="5.25" type="checkbox" name="q21" id="">
                <input value="5.25" type="checkbox" name="q21" id="">
            </div>

        </div>

        <div class="d4">
            <p>هناك عوامل تميز تعزز من قدرة المشروع على جذب العملاء</p>

            <div>
                <input value="5.25" type="checkbox" name="q22" id="">
                <input value="5.25" type="checkbox" name="q22" id="">
                <input value="5.25" type="checkbox" name="q22" id="">
                <input value="5.25" type="checkbox" name="q22" id="">
            </div>

        </div>
    
    </div>
            {{-- ====================================================== --}}


            
        <div class="design">
            <div class="headline"> <span>*</span> جودة التصميم</div>

            <div class="d5">
                <p>التصميم الجرافيكي والعناصر البصريه جذابه ومبتكره</p>

                <div>
                    <input value="2.625" type="checkbox" name="q23" id="">
                    <input value="2.625" type="checkbox" name="q23" id="">
                    <input value="2.625" type="checkbox" name="q23" id="">
                    <input value="2.625" type="checkbox" name="q23" id="">
                </div>
    
            </div>
    
            <div class="d5">
                <p>يعكس التصميم هوية ورسالة المشروع بشكل فعال</p>

                <div>
                    <input value="2.625" type="checkbox" name="q24" id="">
                    <input value="2.625" type="checkbox" name="q24" id="">
                    <input value="2.625" type="checkbox" name="q24" id="">
                    <input value="2.625" type="checkbox" name="q24" id="">
        
                </div>

            </div>

        <div class="d1">
            <p>تجرية المستخدم سلسه ومريحه</p>

            <div>
                <input value="2.625" type="checkbox" name="q25" id="">
                <input value="2.625" type="checkbox" name="q25" id="">
                <input value="2.625" type="checkbox" name="q25" id="">
                <input value="2.625" type="checkbox" name="q25" id="">
            </div>

        </div>

        <div class="d2">
            <p>هناك تحسينات مستمره على تجرية المستخدم بنياء على التغذيه الراجعه</p>

            <div>
                <input value="2.625" type="checkbox" name="q26" id="">
                <input value="2.625" type="checkbox" name="q26" id="">
                <input value="2.625" type="checkbox" name="q26" id="">
                <input value="2.625" type="checkbox" name="q26" id="">
            </div>

        </div>
        
    </div>
        {{-- ====================================================== --}}


        
        <div class="team">
            <div class="headline"> <span>*</span> الفريق والمهارات </div>

            <div class="d3">
                <p>يمتلك اعضاء الفريق المهارات والخبرات اللازمه لتنفيذ المشروع</p>

                <div>
                    <input value="2.625" type="checkbox" name="q27" id="">
                    <input value="2.625" type="checkbox" name="q27" id="">
                    <input value="2.625" type="checkbox" name="q27" id="">
                    <input value="2.625" type="checkbox" name="q27" id="">
                </div>
    
            </div>
    
            <div class="d4">
                <p>هناك توازن في مهارات الفريق يغطي جميع جوانب المشروع</p>

                <div>
                    <input value="2.625" type="checkbox" name="q28" id="">
                    <input value="2.625" type="checkbox" name="q28" id="">
                    <input value="2.625" type="checkbox" name="q28" id="">
                    <input value="2.625" type="checkbox" name="q28" id="">
                </div>
    
            </div>
            
            <div class="d5">
                <p>يتمتع القائد بالقدره على نوجيه الفريق وتحفيزه بفعاليه</p>

                <div>
                    <input value="2.625" type="checkbox" name="q29" id="">
                    <input value="2.625" type="checkbox" name="q29" id="">
                    <input value="2.625" type="checkbox" name="q29" id="">
                    <input value="2.625" type="checkbox" name="q29" id="">
                </div>
    
            </div>
    
            <div class="d5">
                <p>الهيكل الاداري للفرريق يدعم تحقيق اهداف المشروع</p>

                <div>
                    <input value="2.625" type="checkbox" name="q30" id="">
                    <input value="2.625" type="checkbox" name="q30" id="">
                    <input value="2.625" type="checkbox" name="q30" id="">
                    <input value="2.625" type="checkbox" name="q30" id="">
                </div>
    
            </div>
    
    </div>
        {{-- ====================================================== --}}


        
        <div class="continus">
            <div class="headline"> <span>*</span> الاستدامه والمرونه</div>

            <div class="d1">
                <p>المشروع لديه القدره على الاستمرار والنمو على المدى الطويل</p>

                <div>
                    <input value="5.25" type="checkbox" name="q31" id="">
                    <input value="5.25" type="checkbox" name="q31" id="">
                    <input value="5.25" type="checkbox" name="q31" id="">
                    <input value="5.25" type="checkbox" name="q31" id="">
                </div>
    
            </div>
    
            <div class="d2">
                <p>هناك خطط واضحه لتوسيع المشروع او تطويره مستقبلا</p>

                <div>
                    <input value="5.25" type="checkbox" name="q32" id="">
                    <input value="5.25" type="checkbox" name="q32" id="">
                    <input value="5.25" type="checkbox" name="q32" id="">
                    <input value="5.25" type="checkbox" name="q32" id="">
                </div>
    
            </div>
            
            <div class="d3">
                <p>المشروع قادر على التكيف مع التغييرات في السوق او التكنولوجيا</p>

                <div>
                    <input value="5.25" type="checkbox" name="q33" id="">
                    <input value="5.25" type="checkbox" name="q33" id="">
                    <input value="5.25" type="checkbox" name="q33" id="">
                    <input value="5.25" type="checkbox" name="q33" id="">
                </div>
    
            </div>
    
            <div class="d4">
                <p>توجد اليات فعاله لتعامل مع التحديات غير المتوفعه</p>

                <div>
                    <input value="5.25" type="checkbox" name="q34" id="">                <input value="2" type="checkbox" name="q1" id="">
                    <input value="5.25" type="checkbox" name="q34" id="">
                    <input value="5.25" type="checkbox" name="q34" id="">
                    <input value="5.25" type="checkbox" name="q34" id="">
                </div>
    
            </div>
            
    
    </div>
        {{-- ====================================================== --}}

        
        <div class="money">
            <div class="headline"> <span>*</span> الجدوى الماليه</div>

            <div class="d5">
                <p>الموارد الماليه تستخدم بكفاءه وفعاليه لتحقيق اهداف المشروع</p>

                <div>
                    <input value="3.5" type="checkbox" name="q35" id="">                <input value="2" type="checkbox" name="q1" id="">
                    <input value="3.5" type="checkbox" name="q35" id="">
                    <input value="3.5" type="checkbox" name="q35" id="">
                    <input value="3.5" type="checkbox" name="q35" id="">
                </div>

            </div>
    
            <div class="d5">
                <p>توجد ميزانيه واضحه ومحدده تغطي جميع جوانب المشروع</p>

                <div>
                    <input value="3.5" type="checkbox" name="q36" id="">
                    <input value="3.5" type="checkbox" name="q36" id="">
                    <input value="3.5" type="checkbox" name="q36" id="">
                    <input value="3.5" type="checkbox" name="36" id="">
                </div>
    
            </div>
        

        <div class="d1">
            <p>العائد المالي المتوفع من المشروع يتناسب مع التكاليف المبذوله</p>

            <div>
                <input value="3.5" type="checkbox" name="q37" id="">
                <input value="3.5" type="checkbox" name="q37" id="">
                <input value="3.5" type="checkbox" name="q37" id="">
                <input value="3.5" type="checkbox" name="q37" id="">
            </div>

        </div>

        <div class="d2">
            <p>هناك خطط لتحقيق الربحيه في الوقت المناسب</p>

            <div>
                <input value="3.5" type="checkbox" name="q38" id="">
                <input value="3.5" type="checkbox" name="q38" id="">
                <input value="3.5" type="checkbox" name="q38" id="">
                <input value="3.5" type="checkbox" name="q38" id="">
            </div>

        </div>
        
        <div class="d3">
            <p>التوقعات الماليه للمشروع دقيقه ومعتمده على بيانات موثوقه</p>

            <div>
                <input value="3.5" type="checkbox" name="q39" id="">
                <input value="3.5" type="checkbox" name="q39" id="">
                <input value="3.5" type="checkbox" name="q39" id="">
                <input value="3.5" type="checkbox" name="q39" id="">
            </div>

        </div>

        <div class="d4">
            <p>الخطه الماليه تتضمن تدفقات نقديه إيجابيه على المدى التوسط والبعيد</p>

            <div>
                <input value="3.5" type="checkbox" name="q40" id="">
                <input value="3.5" type="checkbox" name="q40" id="">
                <input value="3.5" type="checkbox" name="q40" id="">
                <input value="3.5" type="checkbox" name="q40" id="">
            </div>

        </div>
        
    
    </div>
        {{-- ====================================================== --}}


        
        <div class="technology">
            <div class="headline"> <span>*</span> التكنولوجيا والابتكار</div>

            <div class="d5">
                <p>المشروع يستفيد من اجدث التقنيات في تطويره وتنفيذه</p>

                <div>
                    <input value="5.25" type="checkbox" name="q41" id="">
                    <input value="5.25" type="checkbox" name="q41" id="">
                    <input value="5.25" type="checkbox" name="q41" id="">
                    <input value="5.25" type="checkbox" name="q41" id="">
                </div>

            </div>
    
            <div class="d5">
                <p>هناك تبني فعال للتكنولوجيا التي تعزز من كفاءة المشروع</p>

                <div>
                    <input value="5.25" type="checkbox" name="q42" id="">
                    <input value="5.25" type="checkbox" name="q42" id="">
                    <input value="5.25" type="checkbox" name="q42" id="">
                    <input value="5.25" type="checkbox" name="q42" id="">
                </div>

            </div>
    
    
            <div class="d1">
                <p>المشروع يتضمن حماية بيانات المستخدمين وامان النظام بشكل فعال</p>

                <div>
                    <input value="5.25" type="checkbox" name="q43" id="">
                    <input value="5.25" type="checkbox" name="q43" id="">
                    <input value="5.25" type="checkbox" name="q43" id="">
                    <input value="5.25" type="checkbox" name="q43" id="">
                </div>

            </div>
    
            <div class="d2">
                <p>هناك سياسات واضحه للخصوصيه تتماشى مع المعايير العالميه</p>

                <div>
                    <input value="5.25" type="checkbox" name="q44" id="">
                    <input value="5.25" type="checkbox" name="q44" id="">
                    <input value="5.25" type="checkbox" name="q44" id="">
                    <input value="5.25" type="checkbox" name="q44" id="">
                </div>

            </div>
            
    </div>
            {{-- ====================================================== --}}


            
        <div class="review">
            <div class="headline"> <span>*</span> التقييم والمراجعه</div>
            
            <div class="d3">
                <p>توجد طرق فعاله لقياس نجاح المشروع وتقييم ادائه بشكل دوري</p>

                <div>
                    <input value="5.25" type="checkbox" name="q45" id="">
                    <input value="5.25" type="checkbox" name="q45" id="">
                    <input value="5.25" type="checkbox" name="q45" id="">
                    <input value="5.25" type="checkbox" name="q45" id="">
                </div>

            </div>
    
            <div class="d4">
                <p>اليات التقييم تغطي جميع جوانب المشروع بشكل شامل</p>

                <div>
                    <input value="5.25" type="checkbox" name="q46" id="">
                    <input value="5.25" type="checkbox" name="q46" id="">
                    <input value="5.25" type="checkbox" name="q46" id="">
                    <input value="5.25" type="checkbox" name="q46" id="">
                </div>

            </div>
            
            <div class="d5">
                <p>المشروع يستقبل الملاحظات والتغذيه الراجعه لتحسينه بناء عليها</p>

                <div>
                    <input value="5.25" type="checkbox" name="q47" id="">
                    <input value="5.25" type="checkbox" name="q47" id="">
                    <input value="5.25" type="checkbox" name="q47" id="">
                    <input value="5.25" type="checkbox" name="q47" id="">
                </div>

            </div>
    
            <div class="d5">
                <p>هناك ثقافه تحسين مستمر داخل فريق المشروع</p>

                <div>
                <input value="5.25" type="checkbox" name="q48" id="">
                <input value="5.25" type="checkbox" name="q48" id="">
                <input value="5.25" type="checkbox" name="q48" id="">
                <input value="5.25" type="checkbox" name="q48" id="">
                </div>

            </div>
    
    </div>



            <input type="submit" value="إرسال">
    </form>


</div>


        <div class="tog">
            <a id="got" href="request">
                <div >السابق</div>
            </a>
            <a id="got" href="/info1">
                <div id="level1" >التالي</div>
            </a>
        </div>

</body>
</html>