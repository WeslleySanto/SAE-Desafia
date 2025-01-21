<form action={{$action}} method="post">
    @csrf
    @isset($update) 
        @method('PUT')
    @endisset
    <div class="form-group">
        <label for="name" class="">Nome</label>
        <input type="text" class="form-control" name="name" id="name"
            @isset($name) value="{{$name}}" @endisset
        >
    </div>

    <button class="btn btn-primary">{{$botao}}</button>
</form>