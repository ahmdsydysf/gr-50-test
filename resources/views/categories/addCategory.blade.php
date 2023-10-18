<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" value="{{ old('name') }}" placeholder="enter name">
    @error('name')
    {{ $message }}
    @enderror

    <input type="text" name="cat_code" value="{{ old('cat_code') }}" placeholder="enter cat_code">
    @error('cat_code')
    {{ $message }}
    @enderror

    <input type="file" name="cat_img" id="">

    <input type="radio" name="status" value="actv" id=""> active
    <input type="radio" name="status" value="inactv" id=""> not active

    <textarea name="cat_desc" id="" cols="30" rows="10"></textarea>
    @error('cat_desc')
    {{ $message }}
    @enderror
    <button>add</button>
</form>