
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="OdWb4q7UgHECsgg7OHf2zmnQNbOQwrhvsvNrFLor">
        @vite(['/resources/css/register.css' ,''])

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link rel="preload" as="style" href="http://127.0.0.1:8000/build/assets/app-D6ydzGhi.css" /><link rel="modulepreload" href="http://127.0.0.1:8000/build/assets/app-Xaw6OIO1.js" /><link rel="stylesheet" href="http://127.0.0.1:8000/build/assets/app-D6ydzGhi.css" data-navigate-track="reload" /><script type="module" src="http://127.0.0.1:8000/build/assets/app-Xaw6OIO1.js" data-navigate-track="reload"></script>
        <!-- Styles -->
        <!-- Livewire Styles --><style >[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>
    </head>
    <body>
            <div class="alert alert-danger">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" >

                        @if ($error == 'The name field is required.')
                            <div>حقل الاسم فارغ</div>
                        @endif
                        @if ($error == 'The email has already been taken.')
                            <div>تم التسجيل بهذا البريد</div>
                        @endif
                        @if ($error == 'The phone field is required.')
                            <div>حقل الهاتف فارغ</div>
                        @endif
                        @if ($error == 'The city field is required.')
                            <div>حقل المدينه فارغ</div>
                        @endif
                        @if ($error == 'The password field confirmation does not match.')
                            <div>تاكيد كلمة المرور غير مطابق</div>
                        @endif
                        @if ($error == 'The email field is required.')
                            <div>حقل البريد فارغ</div>
                        @endif
                        @if ($error == 'The password field is required.')
                            <div>حقل كلمة المرور فارغ</div>
                        @endif
                        
                        </div>
                    @endforeach
                </div>
            @endif
        </div>       
    <div class="main">



        @if (session()->has('error'))
            <div class="alert ">
                {{session('error')}}
            </div>
        @endif

        <form method="POST" action="http://127.0.0.1:8000/register">
            @csrf

            <h4>إنشاء حساب</h4>

            {{-- <input type="hidden" name="_token" value="OdWb4q7UgHECsgg7OHf2zmnQNbOQwrhvsvNrFLor" autocomplete="off"> --}}
            
            <div>
                <input  placeholder="الاسم" id="name" type="text" name="name"  autofocus="autofocus" autocomplete="name">
            </div>

            <div class="mt-4">
                <input  placeholder="المدينه" id="city" type="text" name="city"  autocomplete="username">
            </div>

            <div class="mt-4">
                <input  placeholder="الهاتف" id="phone" type="text" name="phone"  autocomplete="username">
            </div>

            <div class="mt-4">
                <input  placeholder="البريد" id="email" type="email" name="email"  autocomplete="new-password">
            </div>

            <div class="mt-4">
                <input  placeholder="كلمة المرور" id="password" type="password" name="password"  >
            </div>

            <div class="mt-4">
                <input  placeholder="تاكيد كلمة المرور"id="password_confirmation" type="password" name="password_confirmation"  >
            </div>

            
            <div class="reg">
                <button type="submit" class="">تسجيل</button>

                <a class="" href="http://127.0.0.1:8000/login">
                    Already registered?
                </a>
            </div>

        </form>


    <div class="side"></div>

</div>

        <!-- Livewire Scripts -->
<script src="/livewire/livewire.js?id=951e6947"   data-csrf="OdWb4q7UgHECsgg7OHf2zmnQNbOQwrhvsvNrFLor" data-update-uri="/livewire/update" data-navigate-once="true"></script>
    </body>
</html>
