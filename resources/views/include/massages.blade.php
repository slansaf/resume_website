 @if($errors->any())
        <div class="center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

@if (session('success'))
    <div class="massagess center massagess--success">
        {{session('success')}}
    </div>        
@endif