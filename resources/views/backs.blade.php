<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دعم المشاريع</title>

    @vite(['resources/css/backing.css'])


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

    <div class="support-container">
        <h1>طلب دعم للمشروع</h1>

        <form id="support-form" action="{{route('backing.store')}}" method="POST">

            @csrf

            <div class="form-group">
                <label for="amount">مبلغ الدعم:</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            
            <div class="form-group">
                <label for="support-type">نوع الدعم:</label>
                <select id="support-type" name="support-type" required>
                    <option value="مالي">مالي</option>
                    <option value="تقني">تقني</option>
                    <option value="لوجستي">لوجستي</option>
                    <option value="تدريب">تدريب</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">وصف الدعم:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>

            <input type="hidden" name="project_owner" value="{{$backs->name}}">
            <input type="hidden" name="project_id" value="{{$backs->id}}">

            <button type="submit">تقديم الطلب</button>
        </form>

        {{-- @foreach ($request as $item)
            <div>{{$item->id}}</div>
        @endforeach --}}
    </div>
</body>
</html>