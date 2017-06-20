@if(session('Error'))
    <div class="callout alert">
        {{ session('Error') }}
    </div>
@endif

@if(session('Success'))
    <div class="callout success">
        {{ session('Success') }}
    </div>
@endif

@if(session('Info'))
    <div class="callout info">
        {{ session('Info') }}
    </div>
@endif