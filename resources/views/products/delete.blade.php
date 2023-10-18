<h1> delete product </h1>

{{ $id }}

<form action="{{ route('testProduct.destroy' , ['testProduct'=>$id]) }}" method="post">
    @csrf
    @method('DELETE')

    <button>delete</button>
</form>