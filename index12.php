<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Cross-Vertical Ad Recommendation</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/shop-homepage.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    	<!-- Top Navigation Bar -->
    	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    		<div class="container">
    			<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    					<span class="sr-only">Toggle navigation</span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<p class="navbar-brand">QuikrThon</p>
    			</div>

    		</div>
    		<!-- /.container -->
    	</nav>

    	<!-- Page Content -->
    	<div class="container">
    		<div class="row">
    			<!--  Left Column.. Create a form with post.. !-->
    			<div class="col-md-3">
    				<form onsubmit="usernameSubmitHandler();return false;">
                    <!-- <p class="lead">"username"</p>
                    !-->
                    <input class="lead" type="text" placeholder="Username"/>
                    <input class="lead" type="submit" value="Go"/>
                </form>
                <div class="list-group" id="bought_and_sold">
                <!--
                <a href="#" class="list-group-item">Bought</a>
                <a href="#" class="list-group-item">Sold</a>
                !-->
                <button class="list-group-item" id="boughtButton">Bought</button>
                <button class="list-group-item" id="soldButton">Sold</button>
            </div>
        </div>

        <!-- Carousel and Reccomendations !-->
        <div class="col-md-9 contents">
        	<div class="row carousel-holder">
        		<div class="col-md-12">
        			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        				<ol class="carousel-indicators">
        					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
        					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
        				</ol>
        				<div class="carousel-inner" id="carousel-inner"></div>
        				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        					<span class="glyphicon glyphicon-chevron-left"></span>
        				</a>
        				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        					<span class="glyphicon glyphicon-chevron-right"></span>
        				</a>
        			</div>
        		</div>
        	</div>
        	<div class="row recommendations" id="recommendations">
                
            </div>
        </div>
    <!--
    </div>

</div>
!-->
<!-- /.container : FOOTER-->

<div class="container">

	<hr>

	<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Proof of Concept: Tharun, Amogh and Anuj</p>
			</div>
		</div>
	</footer>

</div>
<!-- /.container : FOOTER-->
</body>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Page Load Settings and Button Clicks and Constants !-->
<script>

// The string echo'ed by the following .php files are JSON encoded advertisements
mainAds = "boughtAd.php";                           // Main Ads for Top Carousel
mobileRecommendations = "boughtAd.php";             // Recommendations for Mobile Phone Ads
bookRecommendations = ".php";                       // Recommendations for Education Ads
musicRecommendations = ".php";                      // Recommendations for Music Ads

adItemDOM = "adItemDOM.html";                       // Advertisement HTML, dynamically added

// Location for Ads: in carousel or under recommendations
adLocationCarousel = "carousel";
adLocationRecommendations = "recommendations";

// DOM div ids
idCarouselInner = "#carousel-inner";
idRecommendations = "#recommendations";

// On Page lead
$("#bought_and_sold").hide();
$(".contents").hide();
$(".soldButton").hide();

// Set Button Handlers
$("#boughtButton").click(function(){
	getAd(new ad,mainAds,adLocationCarousel,function(x){});
	$(".contents").show();
});
$("#soldButton").click(function(){
	getAd(new ad,mainAds,adLocationCarousel,function(x){});
	$(".contents").show();
});

// Handler for form button.
function usernameSubmitHandler(){
    input = $(".lead")[0];
    if (input.value.length == 0){
	   $("#bought_and_sold").show();
	   $(".contents").hide();
    }
}
</script>

<script>
// Class Definition and Constructor: ad
function ad(id,price,description,title,views,image,glo_category){
	this.id=id;
	this.price=price;
	this.description=description;
	this.title=title;
	this.views=views;
	this.image=image;
	this.glo_category=glo_category;
}

/// <summary>
/// To Get and Display an Ad
/// <param name="advertisement">Empty ad object</param>
/// <param name="mainAds">Source to read the ad JSON from</param>
/// <param name="adLocation">Where to display the ad</param>
/// <param name="callback">callback</param>
/// </summary>
function getAd(advertisement,mainAds,adLocation,callback){
	$.ajax({
        url: mainAds,           // Require content from mainAds
        type:'get',
        dataType:'text',
        success:function(data){
        ads = jQuery.parseJSON(data);   // Parse 'data' (a string containing JSON array)
        ads.forEach(function(adv){      // for each 'adv' in ads
        	v = jQuery.parseJSON(JSON.stringify(adv));
            // Construct ad object using JSON parsed into v
        	adObject = new ad(v.id,v.price,v.description,v.title,v.views,v.image,v.glo_category);
        	RenderAd(adObject,adItemDOM,adLocation);   // Display the ad
        });      
    }
});
}

/// <summary>
/// To Display an ad in appropriate location
/// <param name="adObject">Constructed ad object passed from getAd</param>
/// <param name="adItemTemplateDOM">Source of HTML for dynamic addition</param>
/// <param name="adLocation">Where to display the ad</param>
/// </summary>
function RenderAd(adObject,adItemTemplateDOM,adLocation){
	$.ajax({
		url : adItemTemplateDOM,  // Require content from adItemTemplateDOM
		type:'get',
		dataType:'text',
		success : function(adTemplate){
			AppendHTML(adTemplate,adLocation);   // Append HTML skeleton as child to appropriate HTML mode
			SetProperties(adObject,adLocation);  // Set the properties in the skeleton
            
            //console.log("Carousel Inner Modified. It's children are: \n");
            //console.log(carouselInner.html()+'\n\n\n');
            //console.log("---------------------");
        }
    });
}

/// <summary>
/// Append HTML to div according to location required
/// <param name="adTemplate">ad DOM without innerHTML</param>
/// <param name="adLocation">Where to display the ad</param>
/// </summary>
function AppendHTML(adTemplate,adLocation){
	htmlTextParsed = $.parseHTML(adTemplate);
    parentElement = null;
	// get parentElement according to location where ad is required to be rendered
    if(adLocation == adLocationCarousel){
        htmlText = htmlTextParsed[0].outerHTML;
        parentElement = $(idCarouselInner);
    }
    else if(adLocation == adLocationRecommendations){
        htmlText = htmlTextParsed[0].innerHTML;
        parentElement = $(idRecommendations);
    }
    currentState = parentElement.html();
    newState = currentState + htmlText;
    parentElement.html(newState);      // append from template into existing HTML
}

/// <summary>
/// Set innerHTML in the dynamically added content
/// <param name="adObject">Constructed ad object passed from getAd</param>
/// <param name="adLocation">Where to display the ad</param>
/// </summary>
function SetProperties(adObject,adLocation){
    
    if(adLocation==adLocationCarousel){
        carouselInner = $(idCarouselInner);           // select carousel div as JQ object
    }
    else if(adLocation == adLocationRecommendations){
        carouselInner = $(idRecommendations);           // select carousel div as JQ object
    }
    carouselChildren = carouselInner.children();    // select all children of carousel div (select all item) as a JQ array
    // is either item or col..
    itemCount = carouselChildren.length;
    item = carouselChildren[itemCount-1];
    col = null;
    if(adLocation==adLocationCarousel){
        if(itemCount!=1){
            // select a particular child as a JS object $item
            $(item).attr("class","item");				// convert JS object to JQ object and set attribute
            $(item).attr("id","");						// convert JS object to JQ object and set attribute
        }
        itemChildren = $(item).children();
        col = itemChildren[0];
    }
	// set all properties
    else if(adLocation==adLocationRecommendations){
        col = item;
    }
	//console.log($(col).html());
    colChildren = $(col).children();
	thumbnail = colChildren[0];
	//console.log($(thumbnail).html());

    thumbnailChildren = $(thumbnail).children();

    caption = thumbnailChildren[1];
    captionChildren = $(caption).children();
    
    price = captionChildren[0];
    $(price).html("Rs " + adObject.price);
    //console.log("Price set as : "+ $(price).html());

    title = captionChildren[2];
    $(title).html(adObject.title);
    //console.log("Title set as : "+$(title).html());

    description = captionChildren[3];
    $(description).html(adObject.description);
    //console.log("Description set as : " +$(description).html());

    image = thumbnailChildren[0];
    $(image).attr("src",adObject.image);
    ratings = thumbnailChildren[2];
    //console.log("Ratings : \n" + $(ratings).html());

    ratingsChildren = $(ratings).children();
    views = ratingsChildren[0];
    button = ratingsChildren[1];
    // set button ID
    if(adLocation==adLocationRecommendations){
        $(button).hide();
    }
    $(button).attr("id",adObject.glo_category);
    console.log($(button).attr("id"));
    //console.log($(button).html());
}

$(idCarouselInner).on("click", ".recButton", function(){
    //alert(this.id);
    // Ad recommended products to HTML DOM from a skeleton
    responseUrl = null; 
    switch(this.id){
        // Case label is the value of the 'Category' key from JSON
        case "Mobile Phones":
            responseUrl = mobileRecommendations; 
            break;
        case "Books":
            responseUrl = bookRecommendations;
            break;
        case "Music":
            responseUrl = musicRecommendations;
            break;
   }
   getAd(new ad,responseUrl,adLocationRecommendations,function(x){});
});

// LONG and PROBABLY USELESS
function SetPropertiesJS(){
    carouselInner = $(idCarouselInner);
    carouselChildren = carouselInner.children();
    childrenCount = carouselChildren.length;
    if(childrenCount==1){
    }else{
        carouselChildren.each(function(i){
            //console.log("Loop: i = "+i+"\n");
            if(i==(childrenCount-1)){
                // $this[0] returns a JavaScript object

                // JQuery Version
                $element = $($(this)[0]);
                $element.attr("class","item");
                $element.attr("id","");

                // JavaScript Version
                //$(this)[0].attributes[0].value = "item";
                //$(this)[0].attributes[1].value="";
            }
        }); // end each
    }
}
</script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!--<script src='js/common.js'></script>!-->
</html>