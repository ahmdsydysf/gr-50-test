{{-- <h1> this is All Branches Page {{ $datacount }}</h1> --}}

{{-- <h2> my branch name is {{ $data[0]->myName }} </h2> --}}

@foreach ( $data as $branchprice )

<h2> my branch is {{ $branchprice->name }} </h2>

@endforeach

{{-- @foreach ( $data1 as $branchOfprice )
<h2> my branch name is {{ $branchOfprice->price }} </h2>
@endforeach --}}

{{-- {{ $data->name }} --}}