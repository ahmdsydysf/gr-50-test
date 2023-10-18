<h1> del news </h1>

arre you sur you want to delete news with id => {{ $nw->id }}

with title :: P{{ $nw->title }}


<a href="{{ url()->previous() }}"> back </a>
<form action="{{ route('news.destroy' , $nw->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button>delete</button>
</form>