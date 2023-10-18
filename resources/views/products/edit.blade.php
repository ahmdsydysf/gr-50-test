<h1> edit new product </h1>

<form action="{{ route('testProduct.update' , $id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="productname" value="ahmed sayed">
    <input type="text" name="productprice" value="100">
    <input type="text" name="productcategory" value="product">

    <button>add</button>
</form>