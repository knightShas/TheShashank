<footer class="my-5 py-3">
        <div class="container-flex">
            <h6 style="text-align:center;">Made with <span style="color:red;"><i class="heart fa fa-heart" aria-hidden="true"></i></span> and lots ☕  By - <span class="shashank">Shashank</span> </h6>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script>
        //The getColorCode() will give the code every time.
        function getColorCode() {

            var ranColor1 = '#'+Math.floor(Math.random()*16777215).toString(16);
            var ranColor2 = '#'+Math.floor(Math.random()*16777215).toString(16);
            var page = window.location.href;
            var pageCheck = page.slice(25);
            if(pageCheck == 'weather.php'){

                var col = "white";
                document.getElementById("body_color").style.background = col;
            }
            else{  

                if(ranColor1 == ranColor2){
                    ranColor2 = '#'+Math.floor(Math.random()*16777215).toString(16);
                }
                else{
                    var col = "linear-gradient(to left,"+ ranColor1 +","+ ranColor2 +")";
                    document.getElementById("body_color").style.background = col;
                }
            }
            
        }
    </script>
  </body>
</html>