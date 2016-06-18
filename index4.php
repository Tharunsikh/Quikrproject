<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Ad History based Recommendation</title>

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
    				<p class="navbar-brand">Quikr</p>
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
           				<div class="carousel-inner" id="carousel-inner">
                            <div class="item active">
								<div class="col-sm-4 col-lg-4 col-md-4">
									<div class="thumbnail">
										<img src="" alt="" >
										<div class="caption">
											<h4 class="pull-right mobileAdPrice" >$24.99</h4>
                                            <br>
					      					<h4><a href="#" class="mobileAdTitle">First Product</a>
											</h4>
											<p>See more snippets like this online store item at.</p>
										</div>
										<div class="ratings">
											<p class="pull-left mobileAdViews" >Views : </p>
											<p>
												<button id="rec" class="pull-right recButton">More</button>
											</p>
										</div>
								   </div>
							    </div>
    					     </div>
                             
							<div class="item">
								<div class="col-sm-4 col-lg-4 col-md-4">
									<div class="thumbnail">
										<img src="" alt="">
										<div class="caption">
											<h4 class="pull-right">$24.99</h4>
                                            <br>
											<h4><a href="#">Second Product</a>
											</h4>
											<p>See more snippets like this online store item at.</p>
										</div>
										<div class="ratings">
											<p class="pull-right">Views : </p>
											<p>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-4 col-lg-4 col-md-4">
									<div class="thumbnail">
										<img src="" alt="">
										<div class="caption">
											<h4 class="pull-right">$24.99</h4>
                                            <br>
											<h4><a href="#">Third Product</a>
											</h4>
											<p>See more snippets like this online store item at.</p>
										</div>
										<div class="ratings">
											<p class="pull-right">Views : </p>
											<p>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
								</div>
							</div>
                            
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
            <div class="row">
            <!--
            Add the reccommendations by JS Code
            !-->
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                	   <img src="" alt="">
                	   <div class="caption">
                	       <h4 class="pull-right"> </h4>
                	       <h4><a href="#">recommended product1</a>
                	       </h4>
                	       <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        </div>
                	    <div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>

                	<div class="col-sm-4 col-lg-4 col-md-4">
                		<div class="thumbnail">
                			<img src="" alt="">
                			<div class="caption">
                				<h4 class="pull-right"> </h4>
                				<h4><a href="#">recommended product2</a>
                				</h4>
                				<p>This is a short description. </p>
                			</div>
                			<div class="ratings">
                				<p class="pull-right">12 reviews</p>
                				<p>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star-empty"></span>
                				</p>
                			</div>
                		</div>
                	</div>

                	<div class="col-sm-4 col-lg-4 col-md-4">
                		<div class="thumbnail">
                			<img src="" alt="">
                			<div class="caption">
                				<h4 class="pull-right"></h4>
                				<h4><a href="#">Recommended product 3</a>
                				</h4>
                				<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                			</div>
                			<div class="ratings">
                				<p class="pull-right">31 reviews</p>
                				<p>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star-empty"></span>
                				</p>
                			</div>
                		</div>
                	</div>

                	<div class="col-sm-4 col-lg-4 col-md-4">
                		<div class="thumbnail">
                			<img src="" alt="">
                			<div class="caption">
                				<h4 class="pull-right"></h4>
                				<h4><a href="#">Fourth Product</a>
                				</h4>
                				<p>This is a shortest deBALLS Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                			</div>
                			<div class="ratings">
                				<p class="pull-right">6 reviews</p>
                				<p>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star-empty"></span>
                					<span class="glyphicon glyphicon-star-empty"></span>
                				</p>
                			</div>
                		</div>
                	</div>

                	<div class="col-sm-4 col-lg-4 col-md-4">
                		<div class="thumbnail">
                			<img src="" alt="">
                			<div class="caption">
                				<h4 class="pull-right"></h4>
                				<h4><a href="#">Fifth Product</a>
                				</h4>
                				<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                			</div>
                			<div class="ratings">
                				<p class="pull-right">18 reviews</p>
                				<p>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star"></span>
                					<span class="glyphicon glyphicon-star-empty"></span>
                				</p>
                			</div>
                		</div>
                	</div>



                </div>

            </div>

        </div>

    </div>
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

<script>

function ad(id,price,description,title,views,image,glo_category){
    this.id=id;
    this.price=price;
    this.description=description;
    this.title=title;
    this.views=views;
    this.image=image;
    this.glo_category=glo_category;

}

    // Function in ad class : to render
ad.prototype.renderAsTopAd=function(){
    // rendering...
    itemRoot =$(".carousel-inner");
    item = itemRoot[0].children[0];
    itemClone = item.cloneNode(true);   //cloning topadtemplate
    itemClone.children[0].children[0].children[0].attributes[0].value=this.image;
    itemClone.children[0].children[0].children[1].children[0].innerHTML = "Rs " + this.price;
    itemClone.children[0].children[0].children[1].children[2].innerHTML = this.title;
    itemClone.children[0].children[0].children[1].children[3].innerHTML = this.description;
    this.views = 20;
    //moreButton = this.glo_category;
    //itemClone.children[0].children[0].children[2].children[1].innerHTML = this.views;
    itemRoot[0].appendChild(itemClone);
    item.remove();
    //in that clone you will set all params
    //you will append this in carousel-inner
    //$('.AdRecommendedButton').attr("data-catid",this.cgid);
}

// Initial page load hides.
$("#bought_and_sold").hide();
$(".contents").hide();
// Set Button Listeners
$("#boughtButton").click(boughtButtonClickedHandler);
$("#soldButton").click(soldButtonClickedHandler);
// Define Button Listeners

function boughtButtonClickedHandler(){
    $(".contents").show();
    getAd(new ad,function(x){});
}

function soldButtonClickedHandler(){
    getAd(new ad,function(x){});
    $(".contents").show();
}

// Handler for form button.
function usernameSubmitHandler(){
    $("#bought_and_sold").show();
    $(".contents").hide();
}
function getAd(advertisement,callback){
    $.ajax({
        url: "boughtAd.php",    // url of page from which content is reqd
        type:'get',             // request is a get or post 
        dataType:'text',        // expected response type is text
        success:function(data){     // what to do when request succeeds. 'data' is the response data (for get)
            ads = jQuery.parseJSON(data);
            ads.forEach(function(adv){
                v = jQuery.parseJSON(JSON.stringify(adv));
                (new ad(v.id,v.price,v.description,v.title,v.views,v.image,v.glo_category)).renderAsTopAd();
                $(".recButton")[0].attributes[0].value=v.glo_category;
                alert($(".recButton")[0].attributes[0].value);
            });      
        }
    });
}

$("#Mobile Phones").click(function(){
    alert("specific listener alli ide");
});

$('.AdRecommendedButton').click(function(event){
    $(event.target).attr('data-catid');


});

</script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!--<script src='js/common.js'></script>!-->

</html>
