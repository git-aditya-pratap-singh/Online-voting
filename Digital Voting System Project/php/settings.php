<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Settings</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">

	<!-- import fontawesome icon -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../img/logom.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/settings.css">
</head>
<body>

	<section class="model-container">
		<div class="item1">
			<div class="item1-element">
				<div class="notify">Setting Date & Time</div>
				<form action="" method="post">
					<span>Start Date/Time :-</span>
			        <input type="datetime-local" name="" class="form-control" required>

			        <span>End Date/Time :-</span>
			        <input type="datetime-local" name="" class="form-control" required><br>

			        <button type="submit" name="btn" class="btn btn-primary btn" style="float:right;"><i class="fa fa-sign-out"></i>   Submit</button><br>
                </form>

			    <hr style="background-color:#111;"> 

                <div class="del_msg">
                	<span>Delete/Edit Notification</span>
                </div>
                <div class="model-form">
                	<form action="" method="post">
                	    <input type="search" name="search" class="" placeholder="Search here Your Title..." required="required">
                	    <button type="submit" name="btn_search" class="btn btn-primary btn"  onclick="clickMe()">Search</button>
                    </form>
                </div>
				
				
			</div>

		</div>
		<div class="item2">
			<div class="item2-element">
				<div class="notify">Notification</div>
				<div class="logo"></div>
				
				<form action="" method="post" class="title-form">

					<input type="text" name="title" class="form-control" placeholder="Enter Your Title..." required="required"><br>

					<textarea class="form-control" name="title_msg" placeholder="Enter Your Message...." required="required"  cols="30" rows="8" style="resize: none;"></textarea><br>

					<input type="file" name="image" class="form-control"><br>

					<button type="submit" name="btn" class="btn btn-primary btn" style="float:right;"><i class="fa fa-sign-out"></i>   Submit</button>
				</form>
			</div>
		</div>
		
	</section>


	<!----------Notifiication delete and edit section ---------------->

	<section class="model-search" id="search-section">

		<div class="notify">Notification<i class="fa fa-times" onclick="document.getElementById('search-section').style.display='none'"></i></div>
				<div class="logo1"></div>
				
				<form action="" method="post" class="title-form">

					<input type="text" name="title" class="form-control" placeholder="Enter Your Title..." required="required"><br>

					<textarea class="form-control" name="title_msg" placeholder="Enter Your Message...." required="required"  cols="30" rows="8" style="resize: none;"></textarea><br>

					<input type="file" name="image" class="form-control"><br>

					<div class="search-button">

					    <button type="submit" name="btn" class="btn btn-primary btn"><i class="fa fa-pencil-square-o"></i>   Edit</button>

					    <button type="submit" name="btn" class="btn btn-danger btn"><i class="fa fa-trash"></i>   Delete</button>

				    </div>
				</form>
			</div>
	</section>

	<script type="text/javascript">
		var data = document.getElementById("search-section");
		function clickMe(){
            data.style.display="block";
		}
	</script>

</body>
</html>