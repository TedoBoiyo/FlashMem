<!DOCTYPE html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/categories.css">

	<script src="js/setCategories.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyDhF1jxf0_Ygo2-gxRBRXDj1Ow7OscuWA8",
	    authDomain: "flashmem-8851f.firebaseapp.com",
	    databaseURL: "https://flashmem-8851f.firebaseio.com",
	    projectId: "flashmem-8851f",
	    storageBucket: "flashmem-8851f.appspot.com",
	    messagingSenderId: "79494769845"
	  };
	  firebase.initializeApp(config);
	</script>
</head>

<body>
	<div class="container">
		<div class="BrandTitle" align="left" >
			<h4><a href="index.php">FlashMem</a></h4>
		</div>
	</div>    

	<div class="row">
		<h1 id="categoryTitle"></h1>
		<hr/>
	</div>
		
	<div id="categoryContainer">
	</div>

	<div>
		<button id="backBtn" class="btn btn-primary" type="button">Back</button>
	</div>
</body>