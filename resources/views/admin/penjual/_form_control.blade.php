@csrf
<div class="mb-3">
    <label for="name"> Nama Penjual </label>
    <input type="text" value="{{ old('name') ?? $penjual->name }}" name="name" class="form-control" id="name">
    @error('name')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="email"> Email Penjual </label>
    <input type="email" name="email" value="{{ old('email') ?? $penjual->email }}" class="form-control" id="email" aria-describedby="emailHelp">
    @error('email')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    <label for="telepon"> No Telepon </label>
    <input name="no_telp" type="text" class="form-control" value="{{ old('no_telp') ?? $penjual->no_telp }}" id="telepon">
    @error('no_telp')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
</div>
