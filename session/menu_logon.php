<?php
?>

<style>
.wrapper 
{    
margin: 10px auto;    
max-width:700px;
}

body
{
font-family : Century Gothic;
font-size 8px;
font-color: black;
colour : white;
}
#ff 
{   
    
}

input 
{    
 display:inline;   
width:100%;    
border-radius:4px;    
-webkit-border-radius:4px;    
-moz-border-radius:4px;    
background-color:#f4f4f4;    
color: black;    
border:1px solid #5f5f5f;    
padding:10px;    
margin-bottom:25px;

}

  
#ff label 
{   
display:block;   
cursor:pointer;    
color:#ed7700;
font-weight:80;     
}





</style>
 
 <div class="wrapper">      
	 <div id="contact_form">    
			 <form name="form1" id="ff" method="post" action="insert.php">
<table border="1" width="100%" ><tr><th align="left">
				<label>User ID*:</label>
				<label><input type="text" placeholder="USer Name" name="userid" id="name" required autofocus></label>    
</th>
				<th>

					<label>Password*:</label>
					<label><input type="password" placeholder="Password" name="password" id="name" required autofocus></label>	
</th>
				<th>
			<label><input class="sendButton" type="submit"  value="Login"></label>
</th>
			</tr></table>				
				
				
			</form>
	</div>
</div>
