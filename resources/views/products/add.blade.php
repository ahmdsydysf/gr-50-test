<h1> add new product </h1>
@isset($msg)
{{ $msg }}
@endisset
<form action="{{ route('testProduct.store') }}" method="post">
    @csrf
    <input type="text" name="productname">
    <input type="text" name="productprice">
    <input type="text" name="productcategory">

    <button>add</button>
</form>