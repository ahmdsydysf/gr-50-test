<h1> edit news </h1>
<img src="{{ asset('images/category/' . $category->cat_img) }}" alt="" srcset="">
<form action="{{ route('category.update' , ['category' => $category->id]) }}" method="post"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $category->name }}" placeholder="enter name">
    @error('name')
    {{ $message }}
    @enderror

    <input type="text" name="cat_code" value="{{ $category->cat_code }}" placeholder="enter cat_code">
    @error('cat_code')
    {{ $message }}
    @enderror

    <input type="file" name="cat_img" id="">

    <input type="radio" name="status" @checked($category->status == 'actv') value="actv" id=""> active
    <input type="radio" name="status" @checked($category->status == 'inactv') value="inactv" id=""> not active
    {{-- <input type="radio" name="status" {{ $category->status == 'inactv' ? 'checked' : '' }} value="inactv" id="">
    not active --}}

    <textarea name="cat_desc" id="" cols="30" rows="10">{{ $category->cat_desc }}</textarea>
    @error('cat_desc')
    {{ $message }}
    @enderror

    <button>update</button>
    <a href="{{ url()->previous() }}">back</a>
</form>