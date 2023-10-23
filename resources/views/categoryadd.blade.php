@extends('layouts.main')
@push ('title')
<title></title>
@endpush 
@section('main-section')
<div class="maincontainer">
 	@include('layouts.left')
	<div class="right">			
		<h2>Category Manager</h2>						 
		<div class="add">
			<div class="addpage"> Add category</div> 
			<form method="post" action="{{url(isset($findrec) ? 'edit-cdata/'.$findrec[0]->id : '/add-category' )}}">
				{{csrf_field()}}
				<table class="table3" border="1px solid" >												
					<tr>						 
					<td> Category Name :</td>
					<td>
						<input type="text" name="catname"  value="{{isset($findrec[0]->name)? $findrec[0]->name : '' }}" >
					</td>
					</tr>									 										
				</table>	
				<input type="submit" value="save" class="save" name="save"/>
			</form>
		</div>	
	</div>
</div>
 @endsection