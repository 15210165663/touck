<form action="{{url('project/info')}}" method="post" enctype="multipart/form-data" >    
   <div class="bbDd">
 	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<input type="file" name="img" />
	<input type="submit" value="上传">
</div>
</form>