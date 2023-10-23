@extends('layouts.main')
@push('title')
<title>Product add</title>
@endpush 
@section('main-section')
	<div class="maincontainer">
		@include('layouts/left')	
		<div class="right">			
			<h2>Product Manager</h2>				  
			<p> This section displays the list of products</p>		           
			<p class="link"><a href="">Click here</a> to create <a href="">New product</a></p>
			<form method="post" action="{{Route('record')}}">
				{{csrf_field()}}
				<table class="table">
					<tr>
						<td id="search">Search</td>
					</tr>					 				 
					<tr>
						<td>Search By product name:
						<input type="text" style="height:20px;width:150px;"  name="record"/>
						<input type="submit" value="Search"/>
						</td>
					</tr>
				</table>
			</form>
			<p>Page 1 of 2, showing  2 records out of 4 total, starting on record 1 , ending on 2</p>
			<table class="table2">
				<tr>
					<th>Id</th>
					<th>Category ID</th>
					<th>Product Name</th>
					<th>Product Description</th>
					<th>Product Price</th>
					<th>Product Image</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
				@isset($data)
				@foreach($data as $row)

				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->cid}}</td>
					<td>{{$row->pname}}</td>
					<td>{{$row->desc}}</td>
					<td>{{$row->price}}</td>
					<td>
						@if($row->image)
						<img src="{{asset($row->image)}}" alt="" height="40" width="50"/>
						@endif
					</td>
					<td><a href="{{'del-pro/'.$row->id}}" >delete</a></td>
					<td><a href="{{'edit-pro/'.$row->id}}" >edit</a></td>
				</tr>
				@endforeach
				<tr>
					<td colspan="8">{{$data->Links('pagi')}}</td>
				</tr>
			</table>
			<style>
				.links{
					height:50px;
				}
				.pagnation{
					list-style:none;
					margin-top:60px;
				}
				.pagination li{ 
					float: left;
					list-style: none;
					padding:5px;
					border:1px solid #ccc;
					position:relative;
					top:0px;
					left:246px;
				}
			</style>
			@endisset			  
		</div>
	</div>
@endsection
   