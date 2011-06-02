<?php include "./inc/template.php"; 
head(
  $title = 'Dev Derby | Mozilla Developer Network',
  $pageid = 'devderby',
  $bodyclass = 'section-demos devderby',
  $headerclass = 'compact',
  $extra_headers = '
  <link rel="stylesheet" type="text/css" href="./css/devderby.css"/>
  '
); ?>


<section id="content">
<div class="wrap">

  <header id="page-head">
    <nav id="nav-derby">
      <ul>
        <li><em>Home</em></li>
        <li><a href="#upcoming">Challenges</a></li>
        <li><a href="demo-derby-rules.php">Rules</a></li>
        <li><a href="#tab-judging">Judging</a></li>
        <li><a href="#challenge-prizes">Prizes</a></li>
        <li><a href="#resources">Resources</a></li>
      </ul>
    </nav>
  </header>

  <section id="content-main" class="full" role="main">
    <header id="derby-head">
      <h1>Dev Derby</h1>
      <h2>Show us what you can do with CSS animations</h2>
      <p class="info">Join the Dev Derby now and submit your demo to win an Android phone or other prizes.</p>
      <p class="submit"><a href="demo-submit.php"><b>Submit</b> Your Demo</a></p>
    </header>

  <div class="main">
    <section id="upcoming">
      <header>
        <h1>Upcoming Challenges for 2011</h1>
      </header>
      <ol>
        <li class="first">
          <h2 class="title">CSS3 Animations</h2>
          <h3 class="date">June</h3>
          <h4 class="tagline">Make the Web move</h4>
          <h5 class="current"><span><b>Current</b> Derby</span></h5>
          <p class="desc">CSS3 Animations let you change property values over time, to animate the appearance or position of elements, with no or minimal JavaScript, and with greater control than transitions.</p>
        </li>
        <li class="second">
          <h2 class="title">HTML5 &lt;video&gt;</h2>
          <h3 class="date">July</h3>
          <h4 class="tagline">Lights, camera, action!</h4>
          <p class="desc">The HTML5 &lt;video&gt; element lets you embed and control video media directly in web pages, without resorting to plug-ins.</p>
        </li>
        <li class="third">
          <h2 class="title">Touch</h2>
          <h3 class="date">August</h3>
          <h4 class="tagline">Touch and go</h4>
          <p class="desc">Touch events let you track the movements of a user's fingers on a touch screen.</p>
        </li>
      </ol>
    </section>
    
    <section id="current-challenge" class="tabbed">
      <ul class="index">
        <li class="current"><a href="#tab-challenge">Current Challenge</a></li>
        <li><a href="#tab-submissions">Submissions</a></li>
        <li><a href="#tab-rules">Rules</a></li>
        <li><a href="#tab-judging">Judging</a></li>
      </ul>
      
      <section id="tab-challenge" class="block">
        <header>
          <h1 class="title">CSS3 Animations</h1>
          <h2 class="date">June</h2>
        </header>
        <p class="tagline">Show us what CSS can really do! Make the Web move with CSS3 Animations.</p>
        <p>CSS3 Animations are a new feature of modern browsers like Firefox, which add even more flexibility and control to the style and experience of the Web.  CSS3 Animations let you change property values over time with no or minimal JavaScript, and with greater control than CSS Transitions. Go beyond static properties to animate the appearance and positions of HTML elements. You can achieve these effects without Flash or Silverlight, to make creative dynamic interfaces and engaging animations with CSS3.</p>
        <p><a href="demo-submit.php">Submit your CSS3 Animations demo</a> for the June Dev Derby today!</p>
      </section>
    
      <section id="tab-submissions" class="block">
      <!-- If no submissions...
        <p class="none">Developers must be busy tinkering with their demos. No submissions yet. Be the first!</p>
        <p class="demo-submit"><a href="demo-submit.php" class="button">Submit Your Demo</a></p>
      -->
      
    <!-- NOTES:
         First item in each row needs the class "row-first". It's a strictly presentational class that only serves to 
         clear the floats of the row above, but it's necessary to preserve the layout.
    -->
        <ul class="gallery">
          <li class="demo row-first">
            <h2 class="demo-title">
              <a href="demo-detail.php" title="See more about &ldquo;The Incredible Machine&rdquo; by Neil Gauldin">
                <img src="./img/fpo55.png" alt="" width="180" height="135"> The Incredible Machine
              </a>
            </h2>
            <p class="byline vcard"><a href="demo-gallery-author.php" class="url fn" title="See more demos by Neil Gauldin">Neil Gauldin</a></p>
            <div class="extra">
              <ul class="stats">
                <li class="views" title="This demo has been viewed 20,000 times">20,000</li>
                <li class="likes" title="3,000 people liked this demo">3,000</li>
                <li class="comments"><a href="demo-detail.php#comments" title="There are 100 comments for this demo">100</a></li>
              </ul>
              <p class="desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <p class="launch"><a href="#" class="button" title="Launch &ldquo;The Incredible Machine&rdquo;">Launch</a></p>
            </div>
          </li>
          <li class="demo">
            <h2 class="demo-title">
              <a href="demo-detail.php" title="See more about &ldquo;Fantastic Voyage&rdquo; by Alejandra Divens">
                <img src="./img/fpo55.png" alt="" width="180" height="135"> Fantastic Voyage
              </a>
            </h2>
            <p class="byline vcard"><a href="demo-gallery-author.php" class="url fn" title="See more demos by Alejandra Divens">Alejandra Divens</a></p>
            <div class="extra">
              <ul class="stats">
                <li class="views" title="This demo has been viewed 1,234 times">1,234</li>
                <li class="likes" title="151 people liked this demo">151</li>
                <li class="comments"><a href="demo-detail.php#comments" title="There are 100 comments for this demo">3</a></li>
              </ul>
              <p class="desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p class="launch"><a href="#" class="button" title="Launch &ldquo;Fantastic Voyage&rdquo;">Launch</a></p>
            </div>
          </li>
          <li class="demo">
            <h2 class="demo-title">
              <a href="demo-detail.php" title="See more about &ldquo;It's a Mad Mad Mad Mad Mad Mad World&rdquo; by Darryl McConnaughy">
                <img src="./img/fpo55.png" alt="" width="180" height="135"> It&#8217;s a Mad Mad Mad Mad Mad Mad World
              </a>
            </h2>
            <p class="byline vcard"><a href="demo-gallery-author.php" class="url fn" title="See more demos by Darryl McConnaughy">Darryl McConnaughy</a></p>
            <div class="extra">
              <ul class="stats">
                <li class="views" title="This demo hasn't been viewed by anyone yet">0</li>
                <li class="likes" title="Nobody has liked this demo yet">0</li>
                <li class="comments"><a href="demo-detail.php#comments" title="There are no comments yet for this demo">0</a></li>
              </ul>
              <p class="desc">Morbi in sem quis dui placerat ornare.</p>
              <p class="launch"><a href="#" class="button" title="Launch &ldquo;It's a Mad Mad Mad Mad Mad Mad World&rdquo;">Launch</a></p>
            </div>
          </li>
          
          <li class="demo row-first">
            <h2 class="demo-title">
              <a href="demo-detail.php" title="See more about &ldquo;Twenty Years to Midnight&rdquo; by Thaddeus Venture">
                <img src="./img/fpo55.png" alt="" width="180" height="135"> Twenty Years to Midnight
              </a>
            </h2>
            <p class="byline vcard"><a href="demo-gallery-author.php" class="url fn" title="See more demos by Thaddeus Venture">Thaddeus Venture</a></p>
            <div class="extra">
              <ul class="stats">
                <li class="views" title="This demo has been viewed 1,234 times">1,234</li>
                <li class="likes" title="151 people liked this demo">151</li>
                <li class="comments"><a href="demo-detail.php#comments" title="There are 3 comments for this demo">3</a></li>
              </ul>
              <p class="desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <p class="launch"><a href="#" class="button" title="Launch &ldquo;Twenty Years to Midnight&rdquo;">Launch</a></p>
            </div>
          </li>
          <li class="demo">
            <h2 class="demo-title">
              <a href="demo-detail.php" title="See more about &ldquo;Bloodeye&rdquo; by Jefferson Twilight">
                <img src="./img/fpo55.png" alt="" width="180" height="135"> Bloodeye
              </a>
            </h2>
            <p class="byline vcard"><a href="demo-gallery-author.php" class="url fn" title="See more demos by Jefferson Twilight">Jefferson Twilight</a></p>
            <div class="extra">
              <ul class="stats">
                <li class="views" title="This demo has been viewed 55 times">55</li>
                <li class="likes" title="7 people liked this demo">7</li>
                <li class="comments"><a href="demo-detail.php#comments" title="There are no comments yet for this demo">0</a></li>
              </ul>
              <p class="desc">Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
              <p class="launch"><a href="#" class="button" title="Launch &ldquo;Bloodeye&rdquo;">Launch</a></p>
            </div>
          </li>
    
        </ul><!-- /.gallery -->

      </section><!-- /#tab-submissions -->
      
      <section id="tab-rules" class="block">
        <p>A summary of the rules can be found below.  For a complete look at the terms of the contest please see the <a href="demo-derby-rules.php">Dev Derby Contest Official Rules</a>.</p>
        <ul>
          <li>Almost anyone can enter (<a href="demo-derby-rules.php">see the rules</a> for exceptions).</li>
          <li>There will be a new contest every month.</li>
          <li>Your entry must meet certain criteria; <a href="demo-derby-rules.php">see the rules</a> for the overall criteria and the Current Challenge section for any special criteria for each contest.</li>
          <li>Each contest runs from the first day of the month to the last day of the month (based on <strong>US Pacific time</strong>).</li>
          <li>Entries will be judged by a panel of qualified reviewers, who may or may not take into account how many &ldquo;likes&rdquo; your entry receives.</li>
          <li>The winners of each month's contest will be announced by the <strong>20th of the following month</strong>.</li>
          <li>You can't win more than once in the same calendar year.</li>
          <li>Please read the <a href="demo-derby-rules.php">Dev Derby Contest Official Rules</a> before submitting your entry.</li>
        </ul>
      </section>
    
      <section id="tab-judging" class="block">
        <p>Entries will be reviewed by the Mozilla team and a panel of expert judges. We will rate the demos on a 1&ndash;5 scale across 4 dimensions:</p>
        <ul>
          <li><strong>Technology</strong> &ndash; Does the demo showcase the power of open Web technologies?</li>
          <li><strong>Originality</strong> &ndash; How innovative and unique is the demo?</li>
          <li><strong>Aesthetics</strong> &ndash; How good is the visual design and interaction experience?</li>
          <li><strong>Practicality</strong> &ndash; How useful is this demo in enhancing the Web today?</li>
        </ul>
        <p>The overall score will be the average of all 4 components (technology, orginality, aesthetics, and practicality). In the event of a tie, the judges will re-evaluate the tied entries to determine the winner.</p>
        <p>The judges may also take into account how many &ldquo;likes&rdquo; the entries have received from the community. So make sure to share your demo with others and encourage them to visit Dev Derby to &ldquo;vote.&rdquo;</p>
      </section>
    
    </section><!-- /#current-challenge -->
  </div><!-- /.main -->
      
  <div class="sub">
    <section id="prev-winner">
      <h1>Previous Winner</h1>
      <h2 class="title"><a href="demo-detail.php">The Call of Cthulhu</a></h2>
      <h3 class="author"><img src="./img/blank.gif" alt="" width="70" height="70"> Art Vandelay</h3>
      <p class="desc">Some brief description of the demo and the challenge that it won.</p>
      <p class="launch"><a href="demo-detail.php">See the Demo</a></p>
    </section><!-- /#prev-winner -->
      
    <section id="challenge-prizes">
      <h1>Prizes</h1>
      <img src="./img/devderby/prize-androids.png" alt="" width="135" height="150" class="prize"/>
      <ol>
        <li class="first">
          <h3>Android mobile device</h3>
          <p>Winner gets an Android mobile device from <a rel="external" href="http://www.motorola.com/Consumers/US-EN/Consumer-Product-and-Services/Mobile-Phones/">Motorola</a> or <a rel="external" href="http://www.google.com/url?q=http%3A%2F%2Fwww.samsung.com%2Fus%2Fmobile%2Fcell-phones&sa=D&sntz=1&usg=AFQjCNHM0Afc6Zf3_wxLQyMwN9vBE658Tw">Samsung</a>.</p>
        </li>
        <li class="second">
          <h3>Rickshaw laptop bag</h3>
          <p>Runner-up gets a hand-crafted laptop messenger bag from <a rel="external" href="http://www.rickshawbags.com/bags/laptop-messenger-bag/standard/standard-commuter-laptop-bag-black.html">Rickshaw</a>.</p>
        </li>
        <li class="third">
          <h3>MDN t-shirt</h3>
          <p>3rd place gets a limited edition MDN t-shirt to show off their geek cred.</p>
        </li>
      </ol>
    </section><!-- /#challenge-prizes -->
  </div><!-- /.sub -->
    
    
    <section id="resources">
      <h3>Resources</h3>
      <ul>
        <li class="res-docs"><a href="http://developer.mozilla.org/docs/">Docs</a></li>
        <li class="res-demos"><a href="http://developer.mozilla.org/demos/">Demos</a></li>
        <li class="res-articles"><a href="http://hacks.mozilla.org">Articles</a></li>
      </ul>
    </section>
    
  </section><!-- /#content-main -->

</div>
</section>

<script type="text/javascript" src="./js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript">
// <![CDATA[
  function derbyTabs() {
  	$("#current-challenge .block").addClass("hidden");  
    // determine the current tab's corresponding block by extracting the id from the href
  	var currentblock = $("#current-challenge .index li.current a").attr("href").replace( /.*?#(.*)/g, "$1" );
  	// make that block visible
  	$("#"+currentblock).removeClass("hidden");
  	tabSwitch();
  }
  
  function tabSwitch() {
  	$("#current-challenge .index li a").click(function(){
      $("#current-challenge .index li").removeClass("current");
      $(this).parents("li").addClass("current");
      derbyTabs();
      return false;
  	});
  }
  
  $(document).ready(function(){
    derbyTabs();
    $("body").addClass("hasJS");

    $("#upcoming li").hover(
      function(){
        $(this).children(".desc").fadeIn('fast');
      },
      function(){
        $(this).children(".desc").fadeOut('fast');
      }
    );
  });
    
	$(".gallery").ready(function(){
		$(".gallery").addClass("js");
    $(".gallery .demo").hoverIntent({
      interval: 250,
      over: function() {
        var content = $(this).html(),
            demo = $(this), 
            offs = $(this).offset();
        $("#content").prepend('<div class="demo demohover"><div class="in">'+content+'<\/div><\/div>');
        $("div.demohover").css({ left: offs.left, top: offs.top }).fadeIn(200).mouseleave(function() {
          $(this).fadeOut(200, function(){ 
            $(this).remove(); 
          });
        });
      }, 
      out: function() { /* do nothing */ }
    });
	});

// ]]>
</script>

<?php foot(); ?>
