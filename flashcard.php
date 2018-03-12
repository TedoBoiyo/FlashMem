<!DOCTYPE html>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/flashcard.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
        <script type = "text/javascript" src="js/flashcardFlip.js"></script>
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
            <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="content">
                            <div class="main">
                                <div align="left" >
                                    <h4><a onclick="window.history.go(-1); return false">Back to categories</a></h4>
                                </div>
                                <div>
                                    <h3 class="name">Question</h3>
                                    <hr>
                                </div>
                                <div id="question">
                                </div>
                            </div>
                            <div class="footer">
                                <button id="prevBtn" class ="btn btn-simple" align="left" onclick="prev()">
                                    <p >Prev</p>
                                </button>
                                <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                    <p class="text-center">Flip</p>
                                </button>
                                <button id="nextBtn" class ="btn btn-simple" align="right" onclick="next()">
                                    <p>Next</p>
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="content">
                            <div class="main">
                                <div align="left" >
                                    <h4><a href="categories.php">Back to categories</a></h4>
                                </div>
                                <div>
                                    <h3 class="name">Answer</h3>
                                    <hr>
                                </div>
                                <div id="answer">
                                </div>
                            </div>
                        </div>

                        <div class="footer">
                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <p class="text-center">Back</p>
                            </button>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div>
    </body>
</html>
