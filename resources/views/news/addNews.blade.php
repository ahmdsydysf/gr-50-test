<form action="{{ route('news.store') }}" method="post">
    @csrf

    <input type="text" name="title" placeholder="enter title">
    @error('title')
    {{ $message }}
    @enderror
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    @error('description')
    {{ $message }}
    @enderror
    <button>add</button>
</form>