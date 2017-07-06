<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Joe Woods — Portfolio</title>
  <meta property="og:title" content="Joe Woods — Portfolio" />
  <meta property="og:url" content="http://joewoodsworks.com/" />
  <meta property="og:description"
  	content=" " />
  <meta property="og:site_name" content="joewoodsworks.com" />
  <meta charset="utf-8">
  <script src="/libraries/angular.min.js"></script>
  <script src="/libraries/angular-sanitize.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,700|Lato:400,400italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <style type="text/css">
  body{
  	background: #fff;
  	color: #000;
  	text-align: center;
  	margin: 0 auto;
  	font-family: "Lato", "Helvetica Neue", Arial, Sans-serif;
  	font-size: 14px;
  }
  .hed {
  	max-width: 900px;
  	text-align: left;
  	/* margin-left: -50px;
  	margin-bottom: -75px;
  	margin-top: -15px; */
    font-size: 2.5em;
    font-family: "Raleway", "Helvetica Neue", Arial, sans-serif;
  }
  .links {
    float: right;
    font-size: 0.5em;
    text-decoration: none;
    margin-top: 17px;
  }
  .links a:link, .links a:visited, .links a:hover, .links a:active {
      color: #9604f2;
  }
  #wrapper{
  	max-width: 900px;
  	text-align: center;
  	margin: 0 auto;
  	padding-top: 20px;
  }
  .floodle{
  	background: #fff;
  	color: #020202;
  	width: 240px;
  	height: 551px;
  	margin: 15px;
  	padding: 15px;
  	display: inline;
  	float: left;
  	text-align: left;
  }
  .img{
  	width: 240px;
  	/* height: 240px; not necessary when captured at 1030 x 880. should be 240 x 223. */
  	background: #fff;
  }
  #footy{
  	width: 900px;
  	float: none;
  	display: inline-block;
  	margin-bottom: 30px;
  	padding-top: 15px;
  }
  .flootle p{
  	line-height: 18px;
  }
  h2 {
  	font-size: 1.5em; /* honestly, it makes me sad that I even have to worry about this, but yeah */
    font-family: "Raleway", "Helvetica Neue", Arial, sans-serif;
    color: #9604f2;
  }
  h3 {
    text-align: right;
    margin: 0;
    color: #aaa;
    font-weight: normal;
    margin-top: -23px;
  }
  a {
  	text-decoration: none;
  	color: #000;
  }
  .gottagofast {
  	float: right;
  	margin: 0;
  	margin-top: 78px;
  	margin-bottom: -20px;
  	font-size: 1.25em;
  }
  .gottagofast > a {
  	color: #fff;
  }

  @media (max-width: 988px) {
  	#footy, #hed {
  		width: 100%;
  	}
  	#wrapper{
  		width: 600px;
  	}
  }
  @media (max-width: 688px) {
  	#wrapper {
  		width: 300px;
  	}
  	.gottagofast {
  		margin: 0;
      margin-top: -18px;
      z-index: 2;
      position: relative;
      margin-bottom: -10px;
  	}
  	#footy {
  		float: right;
  	}
  	#hed > img {
      margin-bottom: -45px;
  	}
    .links {
      margin-top: 0px;
    }
  }

  </style>

</head>
<body>
<div id="wrapper" ng-app="portfolio" ng-controller="pages">
  <div class="hed">Joe Woods<span class="links"><a href="/resume/">resume »</a> <a href="https://github.com/tjwds" style="padding-left: 5px;">github »</a><a href="http://twitter.com/tjwds" style="padding-left: 7px;">twitter »</a></span></div>
  <div class="floodle" ng-repeat="x in sites">
    <a href="{{ x.pageurl }}">
    <img src="{{ x.image }}" class="img" title="Image of {{ x.pagename }}" />
    <h2 class="pagename" ng-bind-html="x.pagename"></h2>
    <!--<h3 class="datepub">{{ x.datepub }}</h3>-->
    <p class="sitedesc" ng-bind-html="x.sitedesc"></p></a>
  </div>
</div>
  <script>
    var app = angular.module("portfolio", ["ngSanitize"]);
    app.controller("pages", function($scope, $sce) {
      $scope.sites = [
        {   pagename: 'failbetter.com',
            image: "img/portfolioscreen_19.png",
            pageurl: "http://failbetter.com",
            sitedesc: "Currently managing editor, shepherding a new era for the journal in content management, design, and promotion.  Migrated 15 years of content to Drupal 8.  Editorial, programming, and design duties."
        },
        {   pagename: 'McKinley Dixon&lsquo;s website',
            image: "img/portfolioscreen_18.png",
            pageurl: "http://mckinleydixon.com",
            sitedesc: "Designed to showcase Richmond-based rapper McKinley Dixon's work, this simple, single-service site is built on Bootstrap."
        },
        {   pagename: "thejoewoods.com",
            image: "img/portfolioscreen_17.png",
            pageurl: "http://thejoewoods.com",
            sitedesc: "Personal website to scream into the void about what I&lsquo;m working on.  Redesigned to fit the theme I'm going for here in October 2015.  Forgive the &ldquo;the&rdquo;—I started the blog in 2011 and it&lsquo;s too late to go back now.  Powered by Tumblr."
        },
        {   pagename: "This Portfolio",
            image: "img/portfolioscreen_15.png",
            pageurl: "http://joewoodsworks.com",
            sitedesc: "Yes, the one you&lsquo;re currently on.  But this seems like a good time to tell you that this is hand-crafted responsive design in pure CSS and that the content is rendered via AngularJS.  Designed to fit a theme also reflected by my resume, which is linked above."
        },
        {   pagename: "AdFem",
            image: "img/portfolioscreen_16.png",
            pageurl: "http://ad-fem.com",
            sitedesc: "Online journal for art and theory which published one issue; I was an editor, the developer, and the designer. I helped to evaluate submissions and convert media to standard formats. Powered by WordPress."
        },
        {   pagename: "Totally Called It",
            image: "img/portfolioscreen_14.png",
            pageurl: "http://joewoodsworks.com/tci21may/",
            sitedesc: "Totally Called It was a commissioned project, created to officially timestamp your predictions for any event.  Developed and co-designed by me, powered by Drupal.  Work in PHP, SQL, JS/jQuery, and the like. Features a great deal of workarounds for the jQuery UI framework. Site now very defunct."
        },
        {   pagename: "Front Porch Commons",
            image: "img/portfolioscreen_13.png",
            pageurl: "http://frontporchcommons.org",
            sitedesc: "A commission for the Community of Literary Magazines and Presses, <i>Front Porch Commons</i> was a literary journal which published commentary and opinions from members of the independent literary publishing community.  Emma Komlos-Hrobsky served as the associate editor; I designed and coded developed the journal on top of Wordpress."
        },
        {   pagename: "Digital presentation of <i>Myron Helfgott:  An Inventory of My Thoughts</i>",
            image: "img/portfolioscreen_12.png",
            pageurl: "http://blackbird.vcu.edu/v14n1/gallery/helfgott_m/index.html",
            sitedesc: "A suite of materials from Helfgott&lsquo;s 2015 gallery exhibition, this representation of the work attempts to be as accessible as possible to users.  Hand-written dynamic presentation for all browsers, designed to feel slightly like a magazine while still respecting and reimagining Blackbird&lsquo;s original design from 2001."
        },
        {   pagename: "Code and design consultation for the portfolio of M Hill",
            image: "img/portfolioscreen_10.png",
            pageurl: "http://mhill.space/",
            sitedesc: "Collaboration for design conceit (though M did all of the work in creating the images). jQuery and CSS based responsive design."
        },
        {   pagename: "VCU Parking Finder",
            image: "img/portfolioscreen_01.png",
            pageurl: "http://thejoewoods.com/park",
            sitedesc: "A simple, single-service page which integrates Google Maps (and the abuse of their display options [sorry]) into a flexible, portable page.  Parking in Richmond has been a problem for a long time, and I feel fully confident in saying that I&lsquo;ve dramatically changed the way that people find a spot for their car here—just try finding a spot on Parkwood from 9–5.  This page is in no way affiliated with Virginia Commonwealth University."
        },
        {   pagename: "Code and co-design for Joshua Poteat&lsquo;s &ldquo;Department of Aerial Photography&rdquo;",
            image: "img/portfolioscreen_03.png",
            pageurl: "http://www.blackbird.vcu.edu/v13n2/poetry/poteat_j/department.shtml",
            sitedesc: "An interactive poem, grounded in physical space, which I presented for digital space."
        },
        {   pagename: "CSS fixes for the VCU Department of English website",
            image: "img/portfolioscreen_09.png",
            pageurl: "https://english.vcu.edu/",
            sitedesc: "For some reason, WordPress does really weird things with text spacing, which freaks certain versions of Google Chrome out.  I was asked to diagnose and fix this issue; I also put my hands on a few more small design decisions as well."
        },
        {   pagename: "&ldquo;Agnosticism&rdquo; at <i>failbetter</i>",
            image: "img/portfolioscreen_08.png",
            pageurl: "http://failbetter.com/51/WoodsAgnosticism.php",
            sitedesc: "A procedurally generated, infinite poem published in <i>failbetter</i> in 2014."
        },
        {   pagename: "Interface design for online presentation of prints and poems by David Freed and Charles Wright",
            image: "img/portfolioscreen_04.png",
            pageurl: "http://blackbird.vcu.edu/v13n2/gallery/freed_wright/intro.shtml",
            sitedesc: "With the collaboration of <i>Blackbird</i> staff, this suite of materials is my attempt to create harmony between the storied design conceit of the <i>Blackbird</i> journal and the physical work presented.  A large part of the interactivity of these materials are situational jQuery solutions, but other libraries are implemented here as well. Digitization project done in partnership with Patrick Scott Vickers."
        },
        {   pagename: "Select interface design for George Ferrandi&lsquo;s &ldquo;The Prosthetics of Joy&rdquo;",
            image: "img/portfolioscreen_05.png",
            pageurl: "http://www.blackbird.vcu.edu/v13n1/gallery/ferrandi_g/intro.shtml",
            sitedesc: "More development for <i>Blackbird</i> within the framework set forth by the journal; this time to represent the work of George Ferrandi.  This one required a bit of tweaking of open source javascript utilities in order to achieve our desired effects and create a satisfying representation of the work."
        },
        {   pagename: "weneedsadsongs.com",
            image: "img/portfolioscreen_06.png",
            pageurl: "http://weneedsadsongs.com",
            sitedesc: "Minimalistic website to showcase a solo music project, c. 2012."
        },
        {   pagename: "&ldquo;We Need Sad Songs&rdquo; Bandcamp design",
            image: "img/portfolioscreen_07.png",
            pageurl: "http://marketing.bandcamp.com/",
            sitedesc: "An attempt to work within the system Bandcamp provides to make my music&lsquo;s visual presentation as good as possible.  Just a side note:  &ldquo;We Need Sad Songs&rdquo; was a Bandcamp Staff Pick in 2012."
        }
      ]
      for (var i = 0; i < $scope.sites.length; i++) {
          for (var j = 0; j < $scope.sites[i].length; j++) {
            $scope.sites[i][j] = $sce.trustAsHtml($scope.sites[i][j]);
          }
      }
    });
  console.log("           /$$                                                         /$$                     \n          | $$                                                        |__/                     \n  /$$$$$$ | $$  /$$$$$$   /$$$$$$   /$$$$$$$  /$$$$$$         /$$$$$$  /$$ /$$    /$$ /$$$$$$  \n /$$__  $$| $$ /$$__  $$ |____  $$ /$$_____/ /$$__  $$       /$$__  $$| $$|  $$  /$$//$$__  $$ \n| $$  \\\ $$| $$| $$$$$$$$  /$$$$$$$|  $$$$$$ | $$$$$$$$      | $$  \\\ $$| $$ \\\  $$/$$/| $$$$$$$$ \n| $$  | $$| $$| $$_____/ /$$__  $$ \\\____  $$| $$_____/      | $$  | $$| $$  \\\  $$$/ | $$_____/ \n| $$$$$$$/| $$|  $$$$$$$|  $$$$$$$ /$$$$$$$/|  $$$$$$$      |  $$$$$$$| $$   \\\  $/  |  $$$$$$$ \n| $$____/ |__/ \\\_______/ \\\_______/|_______/  \\\_______/       \\\____  $$|__/    \\\_/    \\\_______/ \n| $$                                                         \\\/$$  \\\ $$                         \n|__/                                                         \\\______/                          \n\n\n                                                                   /$$      \n                                                                  | $$      \n /$$$$$$/$$$$   /$$$$$$         /$$$$$$              /$$  /$$$$$$ | $$$$$$$ \n| $$_  $$_  $$ /$$__  $$       |____  $$            |__/ /$$__  $$| $$__  $$\n| $$ \\\ $$ \\\ $$| $$$$$$$$        /$$$$$$$             /$$| $$  \\\ $$| $$  \\\ $$\n| $$ | $$ | $$| $$_____/       /$$__  $$            | $$| $$  | $$| $$  | $$\n| $$ | $$ | $$|  $$$$$$$      |  $$$$$$$            | $$|  $$$$$$/| $$$$$$$/\n|__/ |__/ |__/ \\\_______/       \\\_______/            | $$ \\\______/ |_______/ \n                                               /$$  | $$                    \n                                              |  $$$$$$/                    \n                                               \\\______/                     \n");
  </script>
  <?php include_once("analyticstracking.php") ?>
</body>
</html>
