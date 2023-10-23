@extends('layouts.main')

@push ('title')
<title></title>
@endpush 

@section('main-section')
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
			<div class="maincontainer">
		    @include('layouts/left')	
			<!---right div starts-->
				<div class="right">			
					<h2>Page Manager</h2>				  
					<p> This section displays the list of pages</p>		           
					<p class="link"><a href="">Click here</a> to create <a href="">New Page</a></p>
					<!---table1 starts-->
					<form method="post" action="{{Route('searchdata')}}">
						{{csrf_field()}}
						<table class="table">
							<tr>
								<td id="search">Search</td>
							</tr>					 				 
							<tr>
								<td>Search By Page Name:
								<input type="text" style="height:20px;width:150px;"  name="find"/>
								<input type="submit" value="Search"/>
								</td>
							</tr>
						</table>
					</form>
					<!---table ends--->
					<p>Page  1 of 2, showing 5 records out of 10 total, starting on record 1 , ending on 5</p>
					<!---table2 starts--->
						<table class="table2">
						<tr>
							<th>Id</th>
							<th>Page Name</th>
							<th>Page content</th>
							<th>Status</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						@isset ($data)
						@foreach($data as $row)
						<tr>
							<td>{{$row->id}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->content}}</td>
							<td>{{$row->status}}</td>
							<td><a href="{{'delete/'.$row->id}}">delete</a></td>
							<td><a href="{{'edit/'.$row->id}}">edit</a></td>
						</tr>
						@endforeach
						<tr>
							<td colspan="6">
								{{$data->links('pagi')}}
							</td>
						</tr>
						
						@endisset
						</table>				  
					<!---table2 ends--->
				</div>
		    <!---right div ends-->
			</div>
 @endsection