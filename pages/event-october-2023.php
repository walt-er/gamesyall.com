<!DOCTYPE html>
<html>

<?php

// Meta information for this page, to appear in browser and in social media previews: title, description, and preview image
// Title should up no more than 70 characters, and description no more than 160.
//
// Uses the following variables if set before "require():
//      $headTitle = "Cool Page Title - Games Y'all"; 
//      $headDescription = "A longer description of the page in question, with a bit more information than the title.";
//      $headImage = "/img/event-img/some-cool-event-image.jpg";

$headTitle = "October 2023 Meetup - Games Y'all";
$headDescription = "Games Y’all at the Museum of Human Achievement, come for a treat at our October Meetup!";
$headImage = "/img/event-img/GY-Banner-Oct-23.png"; // this is optional! only needed if the page has an image

require(__DIR__ . "/../partials/html-head.php");

?>

<body>
    <?php 
    // Include the navbar
    require(__DIR__ . "/../partials/header.php")
    ?>

    <!--BREAD CRUMS-->
  
    <div class="row" style="margin-bottom: 0px; margin-top: 0px;">
            <div class="col-4" style="justify-content: left;">
                <p>
                    <a href="/events">Past Events</a> 
                    >
                    <a href="/event-october-2023">October 27th, 2023</a>
                </p>
            </div>
        </div>
       
   <!--Content and Information-->
        <div class="row">    
     <div class="col-4"style="justify-content: left;">
                    <h1>October Meetup</h1>
                
                    <h4>October 27th, 2023 - 7-10pm</h4>
				<p>The Museum of Human Achievement <a href="httpshttps://maps.app.goo.gl/kowBdUJpcCyQPoRo7">3600 Lyons Rd, Austin, TX 78702</a> 
				<br><br>🎟 Free admission, donations are encouraged! Please RSVP, walk ups are welcome.</p>
	 		
			
				<!--RSVP Button
            <button class="button" id="RSVP'"><a href="https://withfriends.co/event/16699046/games_yall_october_meetup">RSVP</a></button>
         
				    -->   </div>
				    
			 <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Oct-23.png" alt="Games Y'all presents October Meetup at the Museum of Human Achievement">
            </div>
            

		 <div class="col-10">

<p>Games Y’all at the Museum of Human Achievement, come for a treat at our October Meetup! We'll have spooky & autumnal themed indie games, candy, and other fall delights. Costumes encouraged!<p/>

    <h5>Games Y'all</h5>
<p>Games Y’all is a monthly meetup presented by the Museum of Human Achievement for indie devs, digital artists, and games fans. We showcase indie games and digital art projects from our local community and beyond. You can come to our meetups to play games, experience digital art, and connect with the local Austin games community. 
<p/>
<br>
      <h5>The Museum of Human Achievement</h5>
<p>The Museum of Human Achievement is a multi-disciplinary art space and non-profit organization in Austin, Texas. We cultivate new work, community, and vibe by providing radically affordable arts space to support artists and audiences in the creation of new ideas.</p>
<br>
    <!--Venue details can be deleted when event has passed-->
<h5>Venue + Parking</h5>

<p>There is a large parking lot available in addition to bike racks. MoHA has public bathrooms, a bar for those 21+ (IDs checked at door), and is ADA accesible. Please contact games@themusuemofhumanachievement.com for more information on the accessibility of the space and/or for special accommodations.<p/>
<br>
<h5>Health Details</h5>

<p>This event will be indoors and outdoors. We strongly encourage that everyone be vaccinated or have recently tested negative for COVID. Do not attend if you feel ill or were recently exposed to COVID. Hand sanitizer and masks will be available. Masks are welcome!
<p/>
          </div>
        </div>
        

    <!--Games at the event_-->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
       <!--A Ghost in the Gallery card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2023/games/ghost-gallery.png" alt="A promotional image of the game A Ghost in the Gallery"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>A Ghost in the Gallery</h4>
<p>A Ghost in the Gallery is an interactive Comic for the Playdate! Explore the ART gallery like never before as you join Bop and Ghostie in the search for a missing dog over Halloween Night!
<br><br>
Dive into the Pulpy world of ART-O-Ween and meet the monsters that help them on their journey. This is a short-play experience that was designed to be Very Cute!
<br><br>
Ledbetter Games has been making Playdate games for the past couple years and designing games in their head for the past 35. Creator of the ART series on Playdate, Chek, Dog kNOwSE and the upcoming bubble.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://ledbetter-games.itch.io/ghost">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Ledbetter Games<h6> 
                     <div class="dev-social">
                  <h6>@LDBR_art</h6>
                  <a href="https://twitter.com/LDBR_art">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Halloween Party in Hell card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/October-2023/games/halloween-party.png" alt="A  promotional image for the game Halloween Party in Hell"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Halloween Party in Hell</h4>
                <p>A little ghost enters a party...with a special power!
<br><br>
Osiel has a special power - they can see the truth of how other people feel about them! Using their abilities, navigate a party and see the truth about who's a friendly face, and who's just faking it.
<br><br>
Halloween Party in Hell is a short interactive game about perception and meeting new people. Choose where you stand with various party guests, and make new friends - or enemies. The game prioritizes interactivity with a focus on "wide" over "tall" storytelling.
<br><br>
This game was made by Noa S and their partner, Rafael S! Noa is the writer, composer, and artist for the game. Rafael is the programmer and assists with graphic design elements. They like to make visual novels and interactive games about LGBT experiences.
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://nsand.itch.io/halloween-party-in-hell">Play It Here</a>
                </button>

              </div>

          <!--Dev Text-->
              <div>
                <h6>Developer: NSAND Games</h6>
                <div class="dev-social">
                  <h6>@noasdev</h6>
                  <a href="https://twitter.com/noasdev">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div> 
          
 <!--Thalassophobia card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2023/games/thalassophobia.png" alt="A promotional image of the game Thalassophobia"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Thalassophobia</h4>
<p>Thalassophobia is a horror game set in a sub in the deep ocean. It takes inspiration from games like Iron Lung and Five Nights at Freddy’s. Can you make it to the underwater base? Will you survive?
<br><br>
Thalassophobia was created by a group of 10 former alumni from Austin Community College. It began as a project for the Brackeys Game Jam 2023.2 and has grown since this to feature way more content.</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://wafflegasm.itch.io/thalassophobia">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Downhill Games<h6> 
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Don’t Get Ghosted card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/October-2023/games/ghosted.png" alt="A  promotional image for the game Don’t Get Ghosted"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Don’t Get Ghosted</h4>
                <p>Don’t Get Ghosted is Pac-Man meets dating sim. An overworked ghost, named Hans House has to juggle texting his girlfriend Boo with avoiding his boss. If he gets caught slacking off he gets fired, if he doesn’t keep up with text he gets ghosted!
                </p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://ransoml.itch.io/dont-get-ghosted">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: DIJIART</h6>
                </div>
              </div>
            </div>
          </div>  
          
<!--LOVE 3 card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2023/games/love-3.png" alt="A promotional image of the game LOVE 3"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>LOVE 3</h4>
<p>LOVE 3 is a precision platformer where you control fiveEight, a lone survivor searching for others in a mechanical, apocalyptic world. Face challenging obstacles, discover hidden secrets, and try to find hope within the hopeless as you overcome each new danger.
<br><br>
Fred Wood is an independent game developer from San Antonio, TX. When he's not shouting about games he loves or making new ones, he's often tinkering with all sorts of things under the banner of Mokuzai Studio.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://love3game.carrd.co/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Mokuzai Studio<h6> 
                 <div class="dev-social">
                  <h6>@thatsmytrunks</h6>
                  <a href="https://twitter.com/thatsmytrunks">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--Honked! a clown noir card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/October-2023/games/honked.jpeg" alt="A  promotional image for the game Honked! a clown noir"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Honked! a clown noir</h4>
                <p>Honked! is a narrative-adventure game about a mysterious world of Clowns where not all is as it seems.
You'll use gumption and a balloon pump to explore and unravel the mystery of Clownside!
<br><br>
Crimp Games is a group of friends in Austin that get together a few times a year to work together on games and try to get out of our comfort zone. This was our 4th collaboration (following Gob N' Go, Card Cowboy, and Crash Land Crystal) and our goal going into the weekend was to make a game that mixed 'clowns' and 'noir'. We'd love if folks would wishlist the game on Steam!
</p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href=" https://store.steampowered.com/app/2636670/Honked_a_clown_noir/">More Info</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Crimp Games</h6>
                <h6>@comfyfish</h6>
                  <a href="https://twitter.com/comfyfish">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>

                  <h6>@gleefulbeest</h6>
                  <a href="https://twitter.com/gleefulbeest">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
      
                  <h6>@alanabrasche</h6>
                  <a href="https://twitter.com/alanabrasche">
                    <img src="/img/Social-buttons/instagram-button-alt.png" style="width: 64px; height: auto;">
                  </a>
    
                  <h6>@tomaeusd</h6>
                  <a href="https://twitter.com/tomaeusd">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>

                  <h6>@NicLupfer</h6>
                  <a href="https://twitter.com/NicLupfer">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
          
                  <h6>@chriswade__</h6>
                  <a href="https://twitter.com/chriswade__">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
          </div>
              </div>
            </div>
          </div>  
          
<!--Crow Keeper card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/October-2023/games/crowkeeper.png" alt="A promotional image of the game Crow Keeper"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>Crow Keeper</h4>
<p>Crow Keeper is a wave defense top down shooter with light resource management and building elements. As a venerable crow you'll defend your home from the undead and collect shiny baubles to expand your domain.
<br><br>
Garbage Cats Entertainment is made up of three long term friends and shorter term indie devs. Freya is based in Austin, TX while Matt and Jess are based in Anaheim, CA. We've always loved quirky strategy and resource management games, and are excited about developing games in lesser explored areas of that design space.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://asphidel.itch.io/ld54">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Garbage Cats Entertainment<h6> 
                   <div class="dev-social">
                  <h6>@GarbageCatsEnt</h6>
                  <a href="https://twitter.com/GarbageCatsEnt">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
                    
            
 <!--El Paso, Elsewhere card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
               <img src="/img/Archived-img/October-2023/games/el-paso-sq.png" alt="A  promotional image for the game El Paso, Elsewhere"> 
              </div>  

              <!--Game Text-->
              <div>
                <h4>El Paso, Elsewhere</h4>
                <p>STAKES. GUNS. SLOW-MO. Fight werewolves and vampires in a reality-shifting motel. Dive through barricades to escape the grasp of evil puppets. Destroy the villain you loved. A new, third-person love letter to classic shooters. Neo-noir never looked so good.
<br><br>
Strange Scaffold is the development label of Xalavier Nelson Jr., who you might know from his work as a leading developer on Stranger Things VR, An Airport for Aliens Currently Run by Dogs, Hypnospace Outlaw, SkateBIRD, Can Androids Pray, or dozens of other critically-acclaimed projects. </p>
				
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1546310/El_Paso_Elsewhere/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: Strange Scaffold</h6>
                  <div class="dev-social">
                  <h6>@StrangeScaffolds</h6>
                  <a href="https://twitter.com/StrangeScaffold">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
        <!--Event Images-->
        <!--Only use this section after an event to house images from the past-->
       <div class="row">
            <div class="col-12">
                <h2 style="text-align: center;">Gallery</h2>

                <div class="flex-container-row">
                    <img src="/img/Archived-img/October-2023/photos/GY-october-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/October-2023/photos/GY-october-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/October-2023/photos/GY-october-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/October-2023/photos/GY-october-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/October-2023/photos/GY-october-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/October-2023/photos/GY-october-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
