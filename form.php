<h2 id="txt1"></h2><h3 id="txt2"></h3><br><hr><div style="margin:10px 200px;font-size:1.4em;"><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myfm">	<label for="userName">Name:</label><br>	<input type="text" name="userName" id="userName" required><br><br>	<label for="email">Email:</label><br>	<input type="email" name="email" id="email" required><br><br>	<input type="submit" value="submit"></form></div><script>var txt1 = document.getElementById("txt1");var txt2 = document.getElementById("txt2");var input = document.myfm.userName;var mail = document.myfm.email;input.addEventListener('keyup', function() { txt1.innerHTML = this.value; });mail.addEventListener('keyup', function() { txt2.innerHTML  = this.value; });console.log(document.myfm.userName.value);</script>