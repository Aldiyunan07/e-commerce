@csrf
<div class="mb-4">
    <label for="name"> Nama Penjual </label>
    <input type="text" autocomplete="off" value="{{ old('name') ?? $penjual->name }}" name="name" class="form-control @error('email') is-invalid @enderror" id="name" required>
    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-4">
    <label for="email"> Email Penjual </label>
    <input type="email" name="email" autocomplete="off" value="{{ old('email') ?? $penjual->email }}" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" required>
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-4">
    <label for="telepon"> No Telepon </label>
    <input name="whatsapp" autocomplete="off" type="telp" class="form-control @error('whatsapp') is-invalid @enderror" value="{{ old('whatsapp') ?? $penjual->whatsapp }}" id="telepon" required>
    @error('no_telp')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
