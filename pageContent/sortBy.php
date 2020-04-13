<!-- Sort By -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Sort By:</h4>
    </div>	
	
	<form  method="get" name="categories" id="categories" class="w3-ul w3-hoverable w3-white">
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="sort" id="radio" value="date">
			<label class="w3-large" for="radio">date</label>
		</p>
		
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="sort" id="radio" value="category 1">
			<label class="w3-large" for="radio">category 1</label>
		</p>
		
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="sort" id="radio" value="category 2">
			<label class="w3-large" for="radio">category 2</label>
		</p>
		
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="sort" id="radio" value="category 3">
			<label class="w3-large" for="radio">category 3</label>
		</p>
		
		<p class="w3-padding-16" style="margin-left: 8px;">
			<input type="radio" name="sort" id="radio" value="category 4">
			<label class="w3-large" for="radio">category 4</label>
		</p>
		
	</form>
	
  </div>
  <hr> 
  
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

  <script>
   $(document).ready(function() { 
   $('input[name=sort]').change(function(){
		$('form').submit();
   });
   });
  </script>