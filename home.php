<?php
session_start();
if(!isset($_SESSION['email'])){
  header('location:login.php');
}
?>


<html lang="en"><head>
    <title>Bangtan</title>
      <meta charset="UTF-8">
      <meta name="description" content="Bangtan">
      <meta name="keywords" content="Bts, Army, Bangtan">
      <meta name="author" content="Akanksha">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <header>
    <h1 class="mainheading">Welcome to Bangtan world!!</h1>
    <div class="mainlist">
    <ul>
      <li><a href="home.php" class="active">HOME</a></li>
      <li><a href="shop.php">SHOP</a></li>
      <li><a href="about.php">ABOUT</a></li>
    </ul>
    </div>
    <div id="t01">
      <b>
      <div class="t01div" id="09"> 
         <p title="Fandom of BTS is ARMY"><b>Be a droplet of this Purple ocean!!<br>WE ARE ARMY..</b><br><br>  
         <abbr title="Rap Monster(Kim Namjoon)">RM</abbr>-<i>"If you want to love others, I think you should love yourself first."</i><br>
         <abbr title="Jeon Jungkook">Jungkook</abbr>-<i>"Living without passion is like being dead."</i><br>
         <abbr title="Kim Taehyung">V</abbr>-<i>"Don't be trapped in someone else's dream."</i><br>
         <abbr title="kim seokjin">Jin</abbr>-<i>"Those who want to look more youthful should live life with a young heart."</i><br>
         <abbr title="Min yoongi">Suga</abbr>-<i>"Things don't always work out well, but we should be brave and go on with our lives"</i><br>
         <abbr title="Jung Hoseok">J-Hope</abbr>-<i>"Even when this rain stops, when clouds go away, I stand here, just the same."</i><br>
         <abbr title="Park Jimin">Jimin</abbr>-<i>"Go on your path, even if you live for a day."</i></p>
      </div>
      </b>
    </div>
    </header>
    <!-- add more info before link -->
    <div style="overflow:auto">
    <section>
      <nav class="menu">
      <form action="logout.php" method="POST">
          <button type="submit" class="logout">Log Out</button>
      </form>
        <ul>
          <li><a href="https://open.spotify.com/playlist/37i9dQZF1DX08mhnhv6g9b" target="_blank">SONGS</a></li>
          <li><a href="https://www.google.com/search?q=bts&rlz=1C1RLNS_enIN832IN832&tbm=vid&source=lnms&sa=X&ved=0ahUKEwiuttT9wonsAhWs7HMBHRkeCgYQ_AUIEigE&biw=1093&bih=526&dpr=1.25" target="_blank">VIDEOS</a></li>
          <li><a href="https://www.google.com/search?q=bts&rlz=1C1RLNS_enIN832IN832&biw=1093&bih=526&source=lnms&tbm=nws&sa=X&ved=2ahUKEwiQzJP8wonsAhVgILcAHYseAGAQ_AUoAXoECB4QAw" target="_blank">NEWS</a></li>
        </ul>
        <hr>
        <div style="text-align:center;">
        <button class="armymem" onclick="document.location='https://www.usbtsarmy.com/tutorials/bts-global-official-fanclub'" title="You will get lot of benifits by taking this" id="t02" target="_blank">Army membership</button>
        <br>
        <br>
        <a id="golast" href="#C1">Go down to know about writer</a>
        </div>
        </nav>
        <br>
        <article class="main">
        <div id="t03">
        <b>
        </b><div style="background-color:rgba(186, 164, 230,0.4);">
        <br>
        <h3>BANGTAN</h3>
        <p style="font-size:23px;"><b>BTS (Korean: 방탄소년단; RR: Bangtan Sonyeondan)</b>,also known as the Bangtan Boys, is a seven-member South Korean most popular boy band around the world nowadays with no doubt, that began formation in 2010 and debuted in 2013 under Big Hit Entertainment. </p>
        <h3>BANGTAN BOYS</h3>
        <div class="details">
        <dl>
          <dt>KIM SEOKJIN</dt>
          <dd>-Vocalist,Visuals</dd>
          <dt>KIM TAEHYUNG</dt>
          <dd>-Vocalist</dd>
          <dt>PARK JIMIN</dt>
          <dd>-Vocalist</dd>
          <dt>JEON JUNGKOOK</dt>
          <dd>-Vocalist,Golden Maknae</dd>
          <dt>MIN YOONGI</dt>
          <dd>-Rapper</dd>
          <dt>KIM NAMJOON</dt>
          <dd>-Leader,Rapper</dd>
          <dt>JUNG HOSEOK</dt>
          <dd>-Rapper,Choreography</dd>
        </dl>
        <hr>
        </div>
        </div>
    </div>
    <div style="background-color:rgba(186, 164, 230,0.3);">
    <p style="padding-top:10px;font-size:30px;font-weight:bolder ;text-align:center;text-decoration:underline;">Recent Shoots</p>
    <div class="mid">
    </div>
    </div>
    <div class="midtwo">
      <p style="padding-top:20px;font-size:30px;font-weight:bolder ;text-align:center;">Recent Achievements</p>
      <img class="midimg" style="margin-left:10px" src="images/biilboard.jpg" alt="billboard">
      <img class="midimg" style="margin-left:20px" src="images/grammy.png" alt="Grammy">
      <p style="font-size:23px;padding-bottom:10px;">They became the first K-pop act to ever be nominated for a Grammy Award in November 2020, when their song "Dynamite" received a nomination for Best Pop/Duo Group Performance at the 63rd Annual Grammy Awards.</p>
    </div>

    <div id="billionlonely">       
        <p>
        <button onclick="army(1)" title="Billions are with you" id="billion">Become ARMY</button>
        <button onclick="army(0)" title="you will know the difference" id="lonely">Before being Army</button>
        </p>
        <img id="image" src="images/lonely.jpg" alt="Lonely Girl">
    
        <script>
        function army(num){
            var pic;
            if (num==1){
                  pic="images/billions.jpg"}
            else{
                  pic="images/lonely.jpg"}
            document.getElementById("image").src=pic;
         }
        </script>
      </div>
        <div class="imageflow">
        <a href="https://www.google.com/search?rlz=1C1RLNS_enIN832IN832&amp;q=Big+Hit+Entertainment+artists&amp;stick=H4sIAAAAAAAAAOOQMZJNykxXyMgsUUjNK0ktKknMzMsFshQSi0oyi0uKoziSSooVkvIri08xcunn6htUJZmYZ1eeYuTVT9c3NEwyNzMxMjctQJLMQeYUWEA5lSaVuWUGSDIVVUicojyYgWlZuWkGRebJUEnjNLOqrBIox8IgKTvF9BejrBPQxR5AF7tic_EiVvzyAFuddcHzAAAA&amp;sa=X&amp;ved=2ahUKEwiulpfIxfTrAhVnxosBHekFDHEQ4qYDMB96BAgzEBY" target="_blank">
        <img src="images/bodydynamite.webp" alt="Bangtan Sonyeondan" id="bodyimg">
        </a>
        <div id="divbody">
        <h4>You will definitely regret for not knowing them before</h4>
        <p>The BTS septet—composed of RM, Jin, Suga, J-Hope, Jimin, V, and Jungkook—co-write and co-produce much of their own output.</p>
        <p>Originally a hip hop group, their musical style has evolved to include a wide range of genres.</p> 
        <p>Their lyrics, often focused on personal and social commentary, touch on the themes of mental health, troubles of school-age youth, loss, the journey towards loving oneself, and individualism. Their work features references to literature and psychological concepts and includes an alternative universe storyline. </p>
        <p>The group has released several albums and performed on several world tours.</p>
        <p>They made a small country Korea to be known worldwide, their contribution is almost 4% of korea's economy, by their concerts and others.They are often termed as Korea's treasure and pride.</p>
        <p>These boys are known for their multiple personalities more like duality, They can be more than professional onstage.They can be cute, classy,and even big crackheads offstage regardless of their status they were always in love with army, a biggest support by their lyrical and motivational music videos.</p>
        <p>Army is the fandom thats supporting them from their initial period, not only love their music but army is the part of social activities just like Bts members.</p>
        <p>BTS recently contributed 1M dollars to "Black lives matter" and with in 24hrs Army raised the same amount, and this saga continued</p>
        <p>Since their album The Most Beautiful Moment in Life, Part 2 knocked the door of Billboard Chart in 2015, this boy group has attracted more and more fans from not only South Korea but also the world.</p>
        <p>BTS's single "DNA" (2017) broke into the Billboard Hot 100 for the first time, peaked at #67, which is the highest ranking for K-pop songs.</p>
        </div>
        </div>
        <div class="imageflow">
        <img class="imageflowimg" src="images/body.jpg" alt="Bangtan Boys" usemap="#Bangtan">
        <map name="Bangtan">
        <area shape="default" href="https://www.pinterest.ph/igeloboy/bts/" target="_blank" onclick="myfunction()">
        </map>
        <p><cite>BTS</cite><br>The seven boys changed world history in music field</p>
        <div id="imageflowbody"><p>2013 debuted abroad, a newcomer Bulletproof Boy Scouts is truly the Korea representative pinnacle as a group grew.</p>
        <p> Currently, across the Asia, North America, Europe, South America, the Middle East , from all around the world, Bulletproof Boy Scouts hot air stood as global superstar in American billboard, the UK official charts, the Japanese Oricon, iTunes, Spotify, Apple's music , including the world 's leading chart record grades, it proves tremendous music sales, music videos, It is also recording unrivaled numbers in hits and social media indexes .</p>
        <p> In addition, the stadium tour held in and around the World Concert in the market Global as an artist the face continues and, the UN speech and LOVE MYSELF campaigns had good influence and practice in it.</p>
        <p> Recently , they set a new record in winning music ceremony award like 62nd Grammy Awards 'in Korea singer 's first performances, "Billboard Music Awards" and the "American Music Awards", "Grammy to the Awards'.</p></div>
        </div>
        <script>
        function myfunction(){
            alert("This will take you to pininterest page with Bts photos");
        }
        </script>
        <noscript>Sorry, your browser does not support JavaScript!</noscript>
      </article>
    <div class="right">
     <h3 title="These are BTS social media accounts">Checkout:</h3>
       <a href="https://www.youtube.com/channel/UCLkAepWjdylmXSltofFvsYQ" target="_blank">
       <img class="imageright" src="images/youtube.png" alt="youtube">
       <br>
       <br>  
       <a href="https://www.instagram.com/bts.bighitofficial/?hl=en" target="_blank">
       <img class="imageright" src="images/instagram.jpg" alt="instagram">
       <br>
       <br>   
       <a href="https://www.facebook.com/bangtan.official/" target="_blank">
       <img class="imageright" src="images/facebook.png" alt="facebook">
       <br>
       <br>
       <a href="https://bts.ibighit.com/" target="_blank">
       <img class="imageright" src="images/btslogo.png" alt="BtsOfficial">
       <br>
       <br>
       <a href="https://twitter.com/bts_twt?lang=en" target="_blank">
       <img class="imageright" src="images/twitter.png" alt="Twitter" ></a>
    </div>
    </section>
    </div>
    <footer>
    <address id="C1">
    Written by Akanksha.<br>
    Student in GNITS<br>
    <a href="mailto:akankshagaddam1999@gmail.com">Drop me a mail for queries</a>
    </address>
    <a href="#09"><b>Go to top of the page</b></a>
    </footer>
    
    
    
    
    
    </body></html>