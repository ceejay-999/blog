    <div class="flash-error">
        <b>There are some errors in you submission:</b>
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>