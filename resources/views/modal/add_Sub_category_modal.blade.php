<h4 class="modal-title">Add Sub Category</h4>
</br>
@foreach($save as $s)
<form class="form-group" action="{{url('/add_sub_category')}}" enctype="multipart/form-data" method="post" >
    {{csrf_field()}}

    <input type="text" class="form-control loguname" name="sub_category_name" placeholder="Add Sub Category Name" required>
    <input type="text"   name="category_id" value="{{$s->id}}"  hidden required>
    </br>
    <select class="form-control loguname" name="sub_category_type">
        <option value="">Select a type</option>
        <option value="income">Income</option>
        <option value="expense">Expense</option>
    </select>
    <input name="date"  id="texted"  hidden  required>
    </br>
    <button class="btn btn-default btn-sm" type="submit" name="Reg">Save</button>
</form>
@endforeach
{{--date picker--}}
<p hidden id="demo2"></p>
<p  hidden id="demo22"></p>
<script>
    $( function() {
        var d = new Date();
        var n = d.toLocaleString([],{year: 'numeric', month: 'short',day: 'numeric'});
        var nn = d.toLocaleString([],{hour: 'numeric',minute:'numeric', hour12: true });
        document.getElementById("demo2").innerHTML = n;
        document.getElementById("demo22").innerHTML = nn;

        var a = $('#demo2').html();
        var b = $('#demo22').html();
        var c= ', ';
        var text = a + c +b ;
        $('#texted').val(text);
    } );

</script>

{{--<script>--}}
    {{--$( function() {--}}
        {{--var d = new Date();--}}
        {{--var n = d.toLocaleString([],{year: 'numeric', month: 'short',day: 'numeric'});--}}
        {{--var nn = d.toLocaleString([],{hour: 'numeric',minute:'numeric', hour12: true });--}}
        {{--//document.getElementById("demo2").innerHTML = n;--}}
        {{--//document.getElementById("demo22").innerHTML = nn;--}}
        {{--$('#demo2').html(n);--}}
        {{--$('#demo22').html(nn);--}}

        {{--var a = $('#demo2').html();--}}
        {{--var b = $('#demo22').html();--}}
        {{--var c= ', ';--}}
        {{--var text = n + ', ' + nn ;--}}
        {{--$('#texted').val(n + ', ' + nn);--}}
    {{--} );--}}

{{--</script>--}}
