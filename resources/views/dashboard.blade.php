@extends('master')
@section('content')
<div>
	<a href="product/add">
		<button type="button" class="btn btn-primary">Add Product</button>
	</a>
	
</div>
<div class="container">
    <h1>Product Details</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection