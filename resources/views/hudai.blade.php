


@foreach($save as $g)
<form class="form-group" action="{{url('/edit_category')}}" enctype="multipart/form-data" method="post" >
{{csrf_field()}}
<input type="text" class="form-control loguname" name="category_name" value="{{$g->category_name}}" required>
<input name="category_id"  type="text" value="{{$g->id}}"   required>
</br>
<button class="btn btn-default btn-sm" type="submit" name="Reg">Save</button>
</form>
@endforeach
