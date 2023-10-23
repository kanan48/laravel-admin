@extends('layouts.main')
@section('main-section')
<div class="maincontainer">
@include('layouts/left')
<div class="right">			
	<h2>Product Manager</h2>		    					 
	<div class="add">
		<div class="addpage"> Add Product</div> 	
		<form method="post" enctype="multipart/form-data" action="{{url(isset($findrec) ? 'pro-display/'.$findrec[0]->id : '/add-product' )}}">
			{{csrf_field()}}
			<input type="hidden" name="edited" value=""/>
			<table class="table3" border="1px solid" >	
				@if((request()->routeIs('product_add')))
			<tr>						 
				<td> Select Category*</td>
				<td>
					<select name="cid" >
						<option>&lt;select category &gt;</option>						
						@foreach ($categories as $rows )
							<option value="{{$rows->id}}">{{$rows->name}}</option>
						@endforeach
					</select>
				</td>
			</tr>
			@endif									 											
			<tr>						 
				<td> Product Name*</td>
				<td><input type="text" name="pname"   value="{{isset($findrec[0]->pname)? $findrec[0]->pname : '' }}"/></td>
			</tr>									 
			<tr>						 
				<td> Product Discription*</td>
				<td><input type="text" name="pdesc"   value="{{isset($findrec[0]->desc)? $findrec[0]->desc : '' }}" ></td>
			</tr>									 
			<tr>						 
				<td> Product Price*</td>
				<td><input type="text" name="pprice"   value="{{isset($findrec[0]->price)? $findrec[0]->price: '' }}"></td>
			</tr>				
			@if((request()->routeIs('product_add')))					 
			<tr>						 
				<td> Product Image*</td>
				<td><input type="file" name="pimage" ></td>
			</tr>	
			@endif								 
			<tr>
				<td>
					<input type="submit" value="save" class="save" name="save"/>
					<input type="submit" value="cancel" class="cancel"/>
				</td>
			</tr>
			</table>
		</form>
		</div>
	</div>
</div>
@endsection