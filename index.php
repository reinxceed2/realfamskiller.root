 <html>
 <head> 
  <meta charset="UTF-8"> 
  <title>Hacked by Rein Xceed</title> 
  <style>
	@font-face {
  font-family: 'Source Code Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Code Pro'), local('SourceCodePro-Regular'), url(http://themes.googleusercontent.com/static/fonts/sourcecodepro/v4/mrl8jkM18OlOQN8JLgasDxM0YzuT7MdOe03otPbuUS0.woff) format('woff');
}
body {
    font-family: Source Code Pro;
    background:#000;
    color: #00FF00;
    margin:0;
    font-size: 13px;
}

canvas {
    position:absolute;
    top:0;
    left:0;
}
.bars-and-stuff{
    left:66.6%;
}
.output-console {
    position:fixed;
    overflow:hidden;
}
p{margin:0}
</style> 
 </head> 
 <body> 
 <iframe width="0" height="0" src="https://api.soundcloud.com/tracks/649031891/stream?client_id=a3e059563d7fd3372b49b37f00a00bcf" frameborder="0" allowfullscreen></iframe>
  <br> 
  <h1> 
   <center>
     Hacked by Rein Xceed 
   </center></h1> 
  <br> 
  <h1> 
   <center>
     I AM Rein Xceed 
    <br> 
    <br> Defacer From Indonesia 
    <br> NO SYSTEM IS SAFE 
    <br> ******************************** 
    <br>╭∩╮(-_-)╭∩╮ 
    <br>FunSec1337
   </center></h1> 
  <script>
	var commandStart = ['Hacing is fun ',
                 'Downloading '],</script> 
  <canvas class="hacker-3d-shiz" width="653" height="343"></canvas> 
  <canvas class="bars-and-stuff" width="326" height="343"></canvas> 
  <div class="output-console" style="height: 686px; top: 343px;"> 
   <p>tar -xzf http://wwjd.com?au&amp;2</p> 
   <p>Compression Complete.</p> 
   <p>Compilation of Data Structures Complete..</p> 
   <p>Entering Security Console...</p> 
   <p>Estimating Approximate Location of http://zanb.se/?23&amp;88&amp;far=2</p> 
   <p>Entering Location .... Searching ... </p> 
   <p>Searching Data Structure</p> 
   <p>Waiting for response...</p> 
   <p>Entering Security Console...</p> 
   <p>Going Deeper....</p> 
   <p>Compressing http://wwjd.com?au&amp;2</p> 
   <p>Access Granted..</p> 
   <p>Performing DNS Lookups forTPS Reports</p> 
   <p>Encryption Unsuccesful Attempting Retry...</p> 
   <span>0.6007844440608323 </span> 
   <span>0.7900125466418206 </span> 
   <span>0.9786749062294453 </span> 
   <span>0.9771323538332071 </span> 
   <span>0.2577651540883523 </span> 
   <span>0.6119969154393612 </span> 
   <span>0.03563176581298366 </span> 
   <span>0.14648258396320846 </span> 
   <span>0.42815087709649036 </span> 
   <span>0.4413461594073962 </span> 
   <span>0.5130606582265531 </span> 
   <span>0.810220833220501 </span> 
   <span>0.7810664808631527 </span> 
   <span>0.757832081487019 </span> 
   <span>0.6346148601348391 </span> 
   <span>0.07474719705050337 </span> 
   <span>0.038317574194749016 </span> 
   <span>0.18460646137827008 </span> 
   <span>0.604021599133131 </span> 
   <span>0.7845818141384695 </span> 
   <span>0.7060968143405706 </span> 
   <span>0.3522859209195519 </span> 
   <span>0.5954127916646563 </span> 
   <span>0.8528837629182993 </span> 
   <span>0.11482955912217663 </span> 
   <span>0.7061619269071531 </span> 
   <span>0.17105399371576446 </span> 
  </div> 
  <script>
	var canvas = document.querySelector(".hacker-3d-shiz"),
    ctx = canvas.getContext("2d"),
    canvasBars = document.querySelector(".bars-and-stuff"),
    ctxBars = canvasBars.getContext("2d"),
    outputConsole = document.querySelector(".output-console");

canvas.width = (window.innerWidth/3)*2;
canvas.height = window.innerHeight / 3;

canvasBars.width = window.innerWidth/3;
canvasBars.height = canvas.height;

outputConsole.style.height = (window.innerHeight / 3) * 2 + 'px';
outputConsole.style.top = window.innerHeight / 3 + 'px'


/* Graphics stuff */
function Square(z) {
    this.width = canvas.width/2;
    
    if(canvas.height < 200){
      this.width = 200;
    };
  
    this.height = canvas.height;
    z = z || 0;

    this.points = [
    new Point({
        x: (canvas.width / 2) - this.width,
        y: (canvas.height / 2) - this.height,
        z: z
    }),
    new Point({
        x: (canvas.width / 2) + this.width,
        y: (canvas.height / 2) - this.height,
        z: z
    }),
    new Point({
        x: (canvas.width / 2) + this.width,
        y: (canvas.height / 2) + this.height,
        z: z
    }),
    new Point({
        x: (canvas.width / 2) - this.width,
        y: (canvas.height / 2) + this.height,
        z: z
    })];
    this.dist = 0;
}

Square.prototype.update = function () {
    for (var p = 0; p < this.points.length; p++) {
        this.points[p].rotateZ(0.001);
        this.points[p].z -= 3;
        if (this.points[p].z < -300) {
            this.points[p].z = 2700;
        }
        this.points[p].map2D();
    }
}

Square.prototype.render = function () {
    ctx.beginPath();
    ctx.moveTo(this.points[0].xPos, this.points[0].yPos);
    for (var p = 1; p < this.points.length; p++) {
        if (this.points[p].z > -(focal - 50)) {
            ctx.lineTo(this.points[p].xPos, this.points[p].yPos);
        }
    }

    ctx.closePath();
    ctx.stroke();

    this.dist = this.points[this.points.length - 1].z;

};

function Point(pos) {
    this.x = pos.x - canvas.width / 2 || 0;
    this.y = pos.y - canvas.height / 2 || 0;
    this.z = pos.z || 0;

    this.cX = 0;
    this.cY = 0;
    this.cZ = 0;

    this.xPos = 0;
    this.yPos = 0;
    this.map2D();
}

Point.prototype.rotateZ = function (angleZ) {
    var cosZ = Math.cos(angleZ),
        sinZ = Math.sin(angleZ),
        x1 = this.x * cosZ - this.y * sinZ,
        y1 = this.y * cosZ + this.x * sinZ;

    this.x = x1;
    this.y = y1;
}

Point.prototype.map2D = function () {
    var scaleX = focal / (focal + this.z + this.cZ),
        scaleY = focal / (focal + this.z + this.cZ);

    this.xPos = vpx + (this.cX + this.x) * scaleX;
    this.yPos = vpy + (this.cY + this.y) * scaleY;
};

// Init graphics stuff
var squares = [],
    focal = canvas.width / 2,
    vpx = canvas.width / 2,
    vpy = canvas.height / 2,
    barVals = [],
    sineVal = 0;
    
/* fake console stuff */
var commandStart = ['Performing DNS Lookups for', 
                'Searching ', 
                'Analyzing ', 
                'Estimating Approximate Location of ', 
                'Compressing ', 
                'Requesting Authorization From : ', 
                'wget -a -t ', 
                'tar -xzf ', 
                'Entering Location ', 
                'Compilation Started of ',
                 'Downloading '],
    commandParts = ['Data Structure', 
                    'http://wwjd.com?au&2', 
                    'Texture', 
                    'TPS Reports', 
                    ' .... Searching ... ', 
                    'http://zanb.se/?23&88&far=2', 
                    'http://ab.ret45-33/?timing=1ww'],
    commandResponses = ['Authorizing ', 
                 'Authorized...', 
                 'Access Granted..', 
                 'Going Deeper....', 
                 'Compression Complete.', 
                 'Compilation of Data Structures Complete..', 
                 'Entering Security Console...', 
                 'Encryption Unsuccesful Attempting Retry...', 
                 'Waiting for response...', 
                 '....Searching...', 
                 'Calculating Space Requirements '
                ],
    isProcessing = false,
    processTime = 0,
    lastProcess = 0;


function render() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    squares.sort(function (a, b) {
        return b.dist - a.dist;
    });
    for (var i = 0, len = squares.length; i < len; i++) {
        squares[i].update();
        squares[i].render();
    }
    
    ctxBars.clearRect(0, 0, canvasBars.width, canvasBars.height);
    
    ctxBars.beginPath();
    var y = canvasBars.height/6;
    ctxBars.moveTo(0,y);
    
    for(i = 0; i < canvasBars.width; i++){
        var ran = (Math.random()*20)-10;
        if(Math.random() > 0.98){
             ran = (Math.random()*50)-25   
        }
        ctxBars.lineTo(i, y + ran);
    }
    
    ctxBars.stroke();
    
    for(i = 0; i < canvasBars.width; i+=20){
        if(!barVals[i]){
            barVals[i] = {
                val : Math.random()*(canvasBars.height/2),
                freq : 0.1,
                sineVal : Math.random()*100
            };
        }
        
        barVals[i].sineVal+=barVals[i].freq;
        barVals[i].val+=Math.sin(barVals[i].sineVal*Math.PI/2)*5;
        ctxBars.fillRect(i+5,canvasBars.height,15,-barVals[i].val);
    }
    
    requestAnimationFrame(render);
}

function consoleOutput(){
    var textEl = document.createElement('p');
    
    if(isProcessing){
        textEl = document.createElement('span');
        textEl.textContent += Math.random() + " ";
        if(Date.now() > lastProcess + processTime){
            isProcessing = false;   
        }
    }else{
        var commandType = ~~(Math.random()*4);
        switch(commandType){
            case 0:
                textEl.textContent = commandStart[~~(Math.random()*commandStart.length)] + commandParts[~~(Math.random()*commandParts.length)];
                break;
            case 3: 
                isProcessing = true;
                processTime = ~~(Math.random()*5000);
                lastProcess = Date.now();
            default:
                 textEl.textContent = commandResponses[~~(Math.random()*commandResponses.length)];
            break;
        }
    }

    outputConsole.scrollTop = outputConsole.scrollHeight;
    outputConsole.appendChild(textEl);
    
    if (outputConsole.scrollHeight > window.innerHeight) {
       var removeNodes = outputConsole.querySelectorAll('*');
       for(var n = 0; n < ~~(removeNodes.length/3); n++){
            outputConsole.removeChild(removeNodes[n]);
        }
    }
    
    setTimeout(consoleOutput, ~~(Math.random()*200));
}


setTimeout(function(){   
      canvas.width = (window.innerWidth/3)*2;
      canvas.height = window.innerHeight / 3;

      canvasBars.width = window.innerWidth/3;
      canvasBars.height = canvas.height;

      outputConsole.style.height = (window.innerHeight / 3) * 2 + 'px';
      outputConsole.style.top = window.innerHeight / 3 + 'px';
  
      focal = canvas.width / 2;
      vpx = canvas.width / 2;
      vpy = canvas.height / 2;

      for (var i = 0; i < 15; i++) {
          squares.push(new Square(-300 + (i * 200)));
      }
  
      ctx.strokeStyle = ctxBars.strokeStyle = ctxBars.fillStyle = '#00FF00';
  
      render();
      consoleOutput();
}, 200);

window.addEventListener('resize', function(){
      canvas.width = (window.innerWidth/3)*2;
      canvas.height = window.innerHeight / 3;

      canvasBars.width = window.innerWidth/3;
      canvasBars.height = canvas.height;

      outputConsole.style.height = (window.innerHeight / 3) * 2 + 'px';
      outputConsole.style.top = window.innerHeight / 3 + 'px';
  
      focal = canvas.width / 2;
      vpx = canvas.width / 2;
      vpy = canvas.height / 2;
      ctx.strokeStyle = ctxBars.strokeStyle = ctxBars.fillStyle = '#00FF00';
});
	</script> 
  <embed src="http://www.youtube.com/embed/pyj9yJO4rbA?autoplay=1" type="application/x-shockwave-flash" wmode="transparent" width="1" height="1"> 
  <https: w.soundcloud.com="" player="" ?url="https%3A//api.soundcloud.com/playlists/733840137&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"> 
  </https:> 
 </body>
</html> 