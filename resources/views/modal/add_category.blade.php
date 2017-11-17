<div class="form-group" >
    <label > Photo</label >
    <input class="form-control" type = "file" name ="photo"   >
</div >
<div class="form-group" >
    <label > Heading </label >
    <input class="form-control"type = "text" name = "heading" value ="<?php echo $e->heading ?>" >
</div >

<div class="form-group" >
    <label > Content</label >
    <textarea id="summernote200" class="form-control"  rows="3" name ="content" ><?php echo $e->content ?></textarea>
</div >

<div class="form-group" >
    <label > date </label >
    <input name="date" type="text" id="datepicker" class="form-control input-md regfield" required>
</div >
<input class="btn btn-success" type = "submit" value ="Save">
</form >