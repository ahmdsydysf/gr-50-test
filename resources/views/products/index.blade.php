<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<h1>All Products</h1>
<a href="{{ url('testProduct/create') }}">Add Product</a>
<a href="{{ route('testProduct.create') }}">Add Product 2</a>

<table>
    <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
        <th>options</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>
            <a href="{{ url('testProduct/1') }}">del</a>
            <a href="{{ route('testProduct.edit' , '1') }}">edit</a>
        </td>
    </tr>
    <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
        <td>
            <a href="{{ url('delete/product/2') }}">del</a>
            <button>edit</button>
        </td>
    </tr>
    <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
        <td>
            <button>del</button>
            <button>edit</button>
        </td>
    </tr>
    <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
        <td>
            <button>del</button>
            <button>edit</button>
        </td>
    </tr>
    <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
        <td>
            <button>del</button>
            <button>edit</button>
        </td>
    </tr>
    <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
        <td>
            <button>del</button>
            <button>edit</button>
        </td>
    </tr>
</table>
{{ $myglobaladdress }}