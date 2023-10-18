<h1> edit news </h1>
<form action="{{ route('news.update' , ['news' => $nw->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" value="{{ $nw->title }}" name="title" placeholder="enter title">
    @error('title')
    {{ $message }}
    @enderror
    <textarea name="description" id="" cols="30" rows="10">

        {{ $nw->description }}
    </textarea>
    @error('description')
    {{ $message }}
    @enderror
    <button>update</button>
    <a href="{{ url()->previous() }}">back</a>
</form>