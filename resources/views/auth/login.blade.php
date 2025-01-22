
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="jpKzDBlRShRiSdapem5wg7hrNgV72FfUnEDy6Nd9">
        @vite(['/resources/css/logi.css' ,''])

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link rel="preload" as="style" href="http://127.0.0.1:8000/build/assets/app-B3q3GrOu.css" /><link rel="modulepreload" href="http://127.0.0.1:8000/build/assets/app-2eusNbXp.js" /><link rel="stylesheet" href="http://127.0.0.1:8000/build/assets/app-B3q3GrOu.css" data-navigate-track="reload" /><script type="module" src="http://127.0.0.1:8000/build/assets/app-2eusNbXp.js" data-navigate-track="reload"></script>
        <!-- Styles -->
        <!-- Livewire Styles --><style >[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>
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

        @if (session()->has('error'))
            <div class="alert ">
                {{session('error')}}
            </div>
        @endif

<div class="main">
        <div class="form">
            <form method="POST" action="http://127.0.0.1:8000/login">

                <h4>تسجيل الدخول</h4>

                @csrf


                {{-- <input type="hidden" name="_token" value="jpKzDBlRShRiSdapem5wg7hrNgV72FfUnEDy6Nd9" autocomplete="off"> --}}
                <div>
                    {{-- <label class="block font-medium text-sm text-gray-700" for="email">Email</label> --}}
                    <input  class="" id="email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="username" placeholder="البريد الالكتروني">
                </div>
    
                <div class="mt-4">
                    {{-- <label class="block font-medium text-sm text-gray-700" for="password">كلمة المرور</label> --}}
                    <input  class="" id="password" type="password" name="password" required="required" autocomplete="current-password" placeholder="كلمة المرور">
                </div>
    
                <div class="remember">
                        <a class="" href="http://127.0.0.1:8000/forgot-password">نسيت كلمة السر؟</a><br>
                        <input type="checkbox" class="" id="remember_me" name="remember">
                        <span class="">تذكرني</span>
                </div>
    
                <div class="sub">
                    <button type="submit" class="">تسجيل</button>
                    <a class="" href="http://127.0.0.1:8000/register">ليس لدي حساب</a>                    
                </div>
            </form>
        </div>
        </div>

</div>

        <!-- Livewire Scripts -->
<script src="/livewire/livewire.js?id=951e6947"   data-csrf="jpKzDBlRShRiSdapem5wg7hrNgV72FfUnEDy6Nd9" data-update-uri="/livewire/update" data-navigate-once="true"></script>
    </body>
</html>
