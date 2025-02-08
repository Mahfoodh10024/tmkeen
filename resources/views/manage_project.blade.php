<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المشروع</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    @vite(['resources/css/manage.css'])


</head>
<body>
    
    @foreach ($project as $item)
        

    <header>
        <h1>إدارة المشروع</h1>
        <p>مرحبًا بك في لوحة تحكم إدارة المشروع!</p>
    </header>

    <main>
        <section class="project-info">
            <h2><i class="fas fa-project-diagram"></i> معلومات المشروع</h2>
            <div class="info-box">
                <p><strong>اسم المشروع:</strong> {{$item->name}}</p>
                <p><strong>حالة المشروع:</strong> <span class="status accent-transparent">{{$item->project_status}}</span></p>
                <p><strong>تاريخ البدء:</strong> 2023-10-01</p>
                <p><strong>تاريخ الانتهاء:</strong> 2024-03-01</p>
            </div>
        </section>

        <section class="supporters">
            <h2><i class="fas fa-handshake"></i> الداعمين</h2>
            <div class="info-box">
                <ul>
                    @foreach ($item->backs as $name)
                    <li><i class="fas fa-building"></i> {{$name->backer_name}} <label class="opacity-5">نسبة الدعم</label> <label>{{( $name->backing_amount / $item->budget) * 100}} %</label> </p></li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="support">
            <h2><i class="fas fa-donate"></i> الدعم</h2>
            <div class="info-box">
                <div class="progress-bar">
                    <div class="progress" style="width: 60%;"></div>
                </div>

                <p><strong>المبلغ المطلوب:</strong> RY {{$item->budget}}</p>
                <p><strong>المبلغ المحصل:</strong>RY {{$amount}}</p>
                <p><strong>المبلغ المتبقي:</strong>RY {{$item->budget - $amount}}</p>

            </div>
        </section>
    </main>
    @endforeach

    <footer>
        <p>© 2023 إدارة المشروع. جميع الحقوق محفوظة.</p>
    </footer>
</body>
</html>