@if($errors->count())
    <div class="callout callout-warning">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
@endif