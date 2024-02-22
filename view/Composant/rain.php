<link href="view/css/rain.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
   function randRange(maxNum, minNum) {
      return (Math.floor(Math.random(10) * (maxNum - minNum + 1)) + minNum);
   }
</script>
<script>
      function createRain() {
         var nbDrop = 900;
         for (i = 0; i < nbDrop; i++) {
            var dropLeft = randRange(0, 2500);
            var dropTop = randRange(-2000, 1500);
            $('#rain').append('<div class="drop" id="drop'+ i +'></div>');
            $('#drop' + i).css('left', dropLeft);
            $('#drop' + i).css('top', dropTop); 
         }
      }
</script>