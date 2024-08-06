<html>
   <head>
      <title>  ADMINS </title>
	  <link rel ="stylesheet" type="text/css" href="Style.css">
	 </head>
	 <body>
	 <form action="" method="post">
	 <header class="text-gray-600 body-font">
	       <div class = "container"> </div>
		   <div class = "text"> 
		   <h1><center>Admin<center> </h1>
		   <br>
		   <br>
		   <form  action =".php" method="POST"name="Adminform">
			  User ID:
			 <input type ="text" name="User ID" placeholder="Enter Your ID" required>
			 <br><br>
			 Password:
			 <input type ="text" name="Password" placeholder="Enter Your Password" required>
			 <br><br>
			 
		    <br><br>
			<button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">reset</button>
		  <button class="inline-flex-auto text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">login</button>
			<br><br>
			
			
		</form>
		</div>
		</header>
		</body>
		<?php
</html>