<header>
    <h1>Pacman</h1>
</header>

<div class="pac">
    <p>Leiðist þér? Þá getur þú spilað Pacman!</p>
    <p>Þennan tölvuleik bjuggum við til í tölvuleikjaforritun veturinn 2014.</p>
    <p>Höfundar: Anna Hafþórsdóttir, Freydís Halldórsdóttir, Einar Örn Bergsson, Jóhanna Karen Birgisdóttir.</p>
</div>

<div class="content">
   <canvas id="myCanvas" name="myCanvas" >
   Sorry, but your browser does not support the HTML5 canvas tag.
   </canvas>
    <div class="gameOver" id="gameOver">GAME OVER<p><span onclick="entityManager.restart()">Restart</span></p></div>

    <div class="info">
        <h2>Pacman</h2>
        <p>Instructions:</p>
        <p>Press A to turn left</p>
        <p>Press W to turn up</p>
        <p>Press D to turn right</p>
        <p>Press S to turn down</p>
        <p>Press M to Mute</p>
        <p>Press P to Pause</p>
    </div>
    <div class="score">
        <div id="output"></div>
        <div id="lives"></div>
    </div>
</div>

<script src="views/pacman/globals.js"></script>
<script src="views/pacman/util.js"></script>
<script src="views/pacman/keys.js"></script>
<script src="views/pacman/Tile.js"></script>
<script src="views/pacman/Timer.js"></script>
<script src="views/pacman/levels.js"></script>
<script src="views/pacman/Gameboard.js"></script>
<script src="views/pacman/Sprite.js"></script>  
<script src="views/pacman/points.js"></script>
<script src="views/pacman/Pac.js"></script>
<script src="views/pacman/Ghost.js"></script>
<script src="views/pacman/entityManager.js"></script>
<script src="views/pacman/update.js"></script>
<script src="views/pacman/render.js"></script>
<script src="views/pacman/imagesPreload.js"></script>
<script src="views/pacman/main.js"></script>
<script src="views/pacman/PACMAN.js"></script>