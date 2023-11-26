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

$headTitle = "November 2022 Meetup - Games Y'all";
$headDescription = "It’s the East Austin Studio Tour and we’re reclaiming the camp of Texas rituals and rites of passage by playing some games, y’all!";
$headImage = "/img/event-img/GY-Banner-Nov.png"; // this is optional! only needed if the page has an image

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
                    <a href="/event-november-2022">November 12-13 + 19-20, 2022</a>
                </p>
            </div>
        </div>
  

       <!--Content and infomration-->
        <div class="row">
                 
            <div class="col-8">
                <!--Add your event image here-->
                <img src="/img/event-img/GY-Banner-Nov.png" alt="Games Y'all presents Queer Indie Games Showcase'">
            </div>
            
             <div class="col-10">
                    <h1>Queer Indie Games Showcase</h1>
                    <h2>November 12-13 + 19-20, 2022</h2>
              
				<p>The Museum of Human Achievement, <a href="https://goo.gl/maps/B9JgLYYeKq9nKLue7">3600 Lyons Road, Austin, TX 78702</a> </p>
	
				<p>Free admission, donations appreciated! Sign up for our newsletter for more info!
            </div>

            
             <div class="col-10">
                    <h5>Queer Indie Games Showcase</h5>
		<p>It’s the East Austin Studio Tour and we’re reclaiming the camp of Texas rituals and rites of passage by playing some games, y’all! Part computer club, part Homecoming, all gay - we’re putting on a showcase of queer indie and experimental video games.
<br><br>
Come click around, and don’t miss MoHA + Future Front’s state fair inspired vendor booths and Texas-y drag performances on your way into the gallery. To hear more about MoHA’s EAST programming, join the MoHA newsletter<a href="https://themuseumofhumanachievement.us6.list-manage.com/subscribe?u=1ba73ce2c03995467869283dc&id=73df994ba8">here</a>.
</p>
	<br>
<!--Venue details can be deleted when event has passed-->    
                  

                <!--If this is a upcoming event, uncomment the button element below
            		<br>
                    <button class="button" id="Email List"><a href="https://themuseumofhumanachievement.us6.list-manage.com/subscribe?u=1ba73ce2c03995467869283dc&id=73df994ba8">Join Email List</a></button> -->
                
                             </div> 
        </div>

       <!--Games at the event -->
        <div>
          <h2 style="text-align: center;">Games This Month</h2>
          
          
 <!--Heartbreak High card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2022/games/heartbreak-high.png" alt="- A promotional image for Heartbreak High featuring an ensemble of character drawings from the “break up simulator”. There is a line drawing of the high school in the background.">
                </div>  

              <!--Game Text -->
              <div>
                <h4>Heartbreak High</h4>
                <p>
                  Imagine you're the most popular kid in school. So popular, in fact, that you're dating every single person in your class. The only problem? You've decided to break up with all of them, one by one. HEARTBREAK HIGH is an arcade-style spin on visual novels and dating simulators that asks you to break up with all of your high school sweethearts instead of woo them. A single play-through can be completed in one 20-40 minute sitting, with each break-up featuring a unique branching story path and lovable (or unlovable?) characters for you to crush beneath your feet over and over again.
 <br><br>
				Alec Robbins is a cartoonist, writer, comedian, and game developer living in Los Angeles. His works include the Ignatz-award winning comic Mr. Boop and the sexy sci-fi caper CRIMEHOT.
				 </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://alecrobbins.itch.io/heartbreakhigh">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Alec Robbins</h6>


                <div class="dev-social">	
                  <h6>@alecrobbins</h6>
                  <a href="https://twitter.com/alecrobbins">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
         
                </div>
              </div>
            </div>
          </div>          
          
          
 <!--Honeysuckle card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2022/games/honeysuckle.png" alt="- A promotional image for Honeysuckle which shows a 1990s Windows Computer Desktop with the game Honesuckle running on “screen”. This screen features a young child standing behind a fence and a text box below with the caption “My pony ran out of strawberry scent”."> 
              </div>  

              <!--Game Text -->
              <div>
                <h4>Honesuckle</h4>
                <p>
                  Honeysuckle is a short autobiographical game about backyard friendships and growing up amid change. It is inspired by point-and-click CD-ROM games such as Theresa Duncan's Smarty and Zero Zero. (Hint: Play through a second time to see different dialog unfold.)
<br><br>
				Rachel Simone Weil is an electronic artist and historian whose work reimagines nostalgia for 20th-century computing.

 
                </p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://partytimehexcellent.itch.io/honeysuckle">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Rachel Weil<h6> 
                <div class="dev-social">
                  <h6>@partytimehxlnt</h6>
                  <a href="https://twitter.com/partytimehxlnt">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>        
        
          
<!--Small Talk card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2022/games/small-talk.png" alt="- A promotional image for Small Talk which features the text “Small Talk” in large red font with the Ls forming the legs of a humanlike bird holding a cup. There is small blue text below that reads “By Pale Room”.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Small Talk</h4>
                <p>
                
             Small Talk is an interactive narrative game that takes place at a party at the end of the world. It features surreal characters in a hybrid 2D/3D environment. The game touches on themes of connection, loss, loneliness, dread and others in a variety of vignettes.
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="http://paleroom.games/smalltalk">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developers: Gabrielle Genevieve, Christopher Chappelear, Emily Meo</h6>
                <h6> Publisher: Pale Room</h6>

                <div class="dev-social">	
                  <h6>@elloradatura</h6>
                  <a href="https://twitter.com/elloradatura">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@chrischaps</h6>
                  <a href="https://twitter.com/chrischaps">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@emilyemeo</h6>
                  <a href="https://twitter.com/emilyemeo">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>  
          
          <!--Second Puberty card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2022/games/second-puberty.jpeg" alt="- A promotional image for Second Puberty which features 7 still shots from the game showing several surrealist humanoid characters. Text reads “Squinky and the Squinkettes present: Second Puberty”.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>Second Puberty</h4>
                <p>
                  Squinky and the Squinkettes present: SECOND PUBERTY is an album/collection of seven short games, created over the course of two years, about various feelings surrounding medically transitioning in my thirties and dealing with isolation during a pandemic.
<br><br>
					D. Squinkifer is a queer game designer and regular ordinary human. They are the co-founders of Soft Chaos, a worker-owned cooperative that creates critically-engaged, intimate, vulnerable, and unique interactive experiences. Their work includes experimental video games, tabletop games, larps, art installations, and interactive performances.

 					</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://squinky.itch.io/second-puberty">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Squinky and the Squinkettes<br><br>
                Publisher: Soft Chaos
                </h6>


                <div class="dev-social">	
                  <h6>@squinkifer</h6>
                  <a href="https://twitter.com/@squinkifer">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>   
          
<!--They Dream of Shapeless Bodies card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2022/games/shapeless-bodies.png" alt="- A promotional image for They Dream of Shapeless Bodies which shows an abstract interior scene from the game. There is a stage with a giant suspended ring light in the background and a sub floor  with several tables and chairs. There are hybrid humanoid figures standing and sitting throughout the scene.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>They Dream of Shapeless Bodies</h4>
                <p>
                  Having been in long periods of isolation since the beginning of last year, I began to interrogate my relationship to my body, gender and sexuality. “They Dream of Shapeless Bodies” is the time capsule of that journey. In it, I invite the player to witness the discomfort of my introspection in three different soliloquies. Each conversation features an environment that attempts to illustrate the unease, ecstasy and strife of my self actualization as a black trans person. In this game, you cannot win or lose. You CAN touch but you cannot destroy.
<br><br>
Temitope Olujobi is a Queer Nigerian-American Architect turned Game Designer using their design practice to visualize speculative environments, featuring powerful quixotic visions of resistance that depict a world without hierarchies. They began their indulgence into 3D digital art in the Second Life modification community, making freakishly delightful virtual dwellings for the residents. 
                </p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://ttolujobi.itch.io/they-dream-of-shapeless-bodies">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Temitope Olujobi</h6>

                <div class="dev-social">	
                  <h6>@thezhato</h6>
                  <a href="https://twitter.com/thezhato">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>             
                    
<!--I Was a Teenage Exocolonist card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2022/games/teenage-exocolonist.jpeg" alt="- A promotional image for I Was a Teenage Exocolonist which features 2-D drawings of various characters from the game on a purple background with the game title written in white text.">
              </div>  

              <!--Game Text -->
              <div>
                <h4>I Was a Teenage Exocolonist</h4>
                <p>
                  Spend your teenage years on an alien planet in this narrative RPG with card-based battles. Explore, grow up, and fall in love. The choices you make and skills you master over ten years will determine the course of your life and the survival of your colony.
<br>
The Choices You Make, Make You.
 					</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/1148760/I_Was_a_Teenage_Exocolonist/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Northway Games<br><br>
                Publisher: Finji
                </h6>


                <div class="dev-social">	
                  <h6>@northwaygames</h6>
                  <a href="https://twitter.com/northwaygames">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  <h6>@FinjiCo</h6>
                  <a href="https://twitter.com/FinjiCo">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                  
                  
                  
                </div>
              </div>
            </div>
          </div>   
          
<!--Boss Game card-->
          <div class="row" style="background-color: #9BE9FF; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2022/games/boss-game.jpeg" alt="- A promotional image for Boss Game: The Final Boss is my Heart which shows Sophie the sword priestess and Anna the fire witch">
              </div>  

              <!--Game Text -->
              <div>
                <h4>BOSSGAME: The Final Boss is my Heart</h4>
                <p>
                  LESBIAN DEVIL-HUNTING ACTION!! Mammon City can be a rough place to live. Devils are everywhere, and the only decent job in town is hunting them down. Take charge of Sophie, sword priestess and generally anxious mess, and Anna, fire witch and localized disaster, as they fight, flirt, and try to pay the rent. Hunt horrifying devils, confront your corrupt employer, uncover the horrible secrets behind Mammon City, and prove that evil doesn't stand a chance against the power of girlfriends.
<br><br>
BOSSGAME: The Final Boss Is My Heart is a lesbian romance boss rush! Sophie and Anna are broke and trying to pay rent by hunting devils. Fight colorful bosses, flirt with your girlfriend, and uncover the mysteries of Mammon City in this lightning-fast action game!
</p>
                <button class="button"  style="margin: 10px; background-color: #F2D335;">
                  <a href="https://store.steampowered.com/app/2075160/BOSSGAME_The_Final_Boss_Is_My_Heart/">Play It Here</a>
                </button>

              </div>

              <!--Dev Text-->
              <div>
                <h6>Developer: Lilycore Games</h6>

                <div class="dev-social">	
                  <h6>@ItsMeLilyV</h6>
                  <a href="https://twitter.com/ItsMeLilyV">
                    <img src="/img/Social-buttons/twitter-button.png" style="width: 64px; height: auto;">
                  </a>
                </div>
              </div>
            </div>
          </div>             
                    
<!--Dream Daddy card-->
          <div class="row" style="background-color: #F2D335; border-radius: 10px; margin-bottom: 25px;">
            <div class="game-card-long">
              <div>
                <img src="/img/Archived-img/November-2022/games/dream-daddy.jpeg" alt="- A promotional image for Dream Daddy which features an assortment of portraits of eligble Daddy's available to date in-game">
              </div>  

 <!--Game Text -->
              <div>
                <h4>Dream Daddy: A Dad Dating Simulator</h4>
                <p>
               Dream Daddy is a game where you play as a Dad and your goal is to meet and romance other hot Dads. You and your daughter have just moved into the sleepy seaside town of Maple Bay only to discover that everyone in your neighborhood is a single, dateable Dad! Will you go out with Teacher Dad? Goth Dad? Bad Dad? Or any of the other cool Dads in this game? With minigames, sidequests, and a variety of paths and endings, Dream Daddy: A Dad Dating Simulator is this year's most anticipated Dad-based game.
 					</p>
                <button class="button"  style="margin: 10px; background-color: #9BE9FF;">
                  <a href="https://store.steampowered.com/app/654880/Dream_Daddy_A_Dad_Dating_Simulator/">Play It Here</a>
                </button>

              </div>

<!--Dev Text-->
              <div>
                <h6>Developer: Game Grumps</h6>


                <div class="dev-social">	
                  <h6>@GameGrumps</h6>
                  <a href="https://twitter.com/GameGrumps">
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
                    <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-1.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-2.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-3.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-4.png" style="width: 375px; height: 375px;">
                    <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-5.png" style="width: 375px; height: 375px;"> 
                    <img src="/img/Archived-img/November-2022/photos/nov-gy-photo-6.png" style="width: 375px; height: 375px;">
                </div>
            </div>
        </div>

    <?php 
    // Include the Community links and footer
    require(__DIR__ . "/../partials/footer.php")
    ?>
</body>

</html>
