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
            <div class="col-md-9" id="contents" hidden="true">

            	<div class="row carousel-holder">

            		<div class="col-md-12">
            			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            				<ol class="carousel-indicators">
            					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
            					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
            				</ol>
            				<div class="carousel-inner" id="carousel-inner">

                            	<!--
                            	Following divs (item active, item, item) must be added by JS code.
                            	JS	- to read JSON encoded by a php file.
									- decode it
									- read object members
									- construct html tag from object member
									- render

									!-->

									<div class="item active " id="topad">
										<div class="col-sm-4 col-lg-4 col-md-4">
											<div class="thumbnail">
												<img src="http://placehold.it/320x150" alt="" id="mobileAdImage">
												<div class="caption">
													<h4 class="pull-right mobileAdPrice" >$24.99</h4>
													<h4><a href="#" class="mobileAdTitle">First Product</a>
													</h4>
													<p id="mobileAdDescription">See more snippets like this online store item at.</p>
												</div>
												<div class="ratings">
													<p class="pull-right mobileAdViews" >Views : </p>
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
												<img src="http://placehold.it/320x150" alt="" id="musicClassAdImage">
												<div class="caption">
													<h4 class="pull-right" id="musicClassAdPrice">$24.99</h4>
													<h4><a href="#" id="musicClassAdTitle">Second Product</a>
													</h4>
													<p id="musicClassAdDescription">See more snippets like this online store item at.</p>
												</div>
												<div class="ratings">
													<p class="pull-right" id="#musicClassAdViews">Views : </p>
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
												<img src="http://placehold.it/320x150" alt="" id="educationAdImage">
												<div class="caption">
													<h4 class="pull-right" id="educationAdPrice">$24.99</h4>
													<h4><a href="#" id="educationAdTitle">Third Product</a>
													</h4>
													<p id="educationAdDescription">See more snippets like this online store item at.</p>
												</div>
												<div class="ratings">
													<p class="pull-right" id="educationAdViews">Views : </p>
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
                			<img src="http://placehold.it/320x150" alt="">
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
                			<img src="http://placehold.it/320x150" alt="">
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
                			<img src="http://placehold.it/320x150" alt="">
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
                			<img src="http://placehold.it/320x150" alt="">
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
                			<img src="http://placehold.it/320x150" alt="">
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script>	// Test understanding of AJAX
        // define a function called testAjax, which blah..blah..blah another function called 'handleData'
        function testAjax_getdata(handleData){   
            // Define, or Create an AJAX object
            $.ajax({
                url: "echoer-name.php",    // url of page from which content is reqd
                type:'get',             // request is a get or post 
                dataType:'text',        // expected response type is text
                //data:{ name : "MisterX" },  // not too sure what or why
                
                success:function(data){     // what to do when request succeeds. 'data' is the response data (for get)
                    // 'data' now contains whatever is echo'd by the 'url'
                    handleData(data);       // call a function to play with the 'data' (from function param)
                }
            });
        }

        testAjax_getdata(function(output){  // 'output' is a keyword
            // 'output' is the data returned. Use it.
            //document.write(output);
        });
    </script>

    <script>
    	var topadTemplate=$("#topad");

    	function ad(id,price,description,title,views,imageLink){
    		this.id=id;
    		this.price=price;
    		this.description=description;
    		this.title=title;
    		this.views=views;
    		this.imageLink=imageLink;

		}

		ad.prototype.renderAsTopAd=function(){
			$("#mobileAdPrice",clone).html(this.price);
    		$("#mobileAdTitle").html(this.title);
    		$("#mobileAdDescription").html(this.description);
		}





    	function getMobileAd(mobileAdvertisement,callback){
    		$.ajax({
            url: "boughtAd.php",    // url of page from which content is reqd
            type:'get',             // request is a get or post 
            dataType:'text',        // expected response type is text
            success:function(data){     // what to do when request succeeds. 'data' is the response data (for get)
            var adObjects=[];
            ads = jQuery.parseJSON(data);
            ads.forEach(function(v){
            	var x=new ad(v.id,v.price,v.description,v.title,v.views,v.imageLink);
            	adObjects.push(x);

            })

	// //mobileAdvertisement.views = mobileAd.views;
 //           		callback(mobileAdvertisement);
}
});
    	}

    	function renderMobileAd(mobileAdvertisement){
    		
    	//$("#mobileAdImage").attr("src","");
    	//$("#mobileAdViews").html(mobileAdvertisement.views+" Views");
    }

    function getMusicClassAd(musicClassAdvertisement){
    	$.ajax({
    		url:"boughtAd.php",
    		type:'get',
    		dataType:'text',
    		success:function(data){
    			musicClassAd = jQuery.parseJSON(data);
    			musicClassAdvertisement.id = musicClassAd.id;
    			musicClassAdvertisement.price = musicClassAd.price;
    			musicClassAdvertisement.description = musicClassAd.description;
    			musicClassAdvertisement.title = musicClassAd.title;
    			musicClassAdvertisement.views = musicClassAd.views;
    			musicClassAdvertisement.imageLink = musicClassAd.image;
    			ad = musicClassAdvertisement;
    		}
    	});
    }

    function renderMusicClassAd(musicClassAdvertisement){
    	$("#musicClassAdPrice").html(musicClassAdvertisement.price);
    	$("#musicClassAdTitle").html(musicClassAdvertisement.title);
    	$("#musicClassAdDescription").html(musicClassAdvertisement.description);
    	$("#musicClassAdImage").attr("src","http:\/\/teja2.kuikr.com\/i5\/20160616\/Guitar-lessons-are-available-Private-and-group-lessons-both-ak_L1546033459-1466054555.jpeg");
    	$("#musicClassAdViews").html(musicClassAdvertisement.views+" Views");
    }

    function getEducationAd(educationAdvertisement){
    	$.ajax({
    		url:"boughtAd.php",
    		type:'get',
    		dataType:'text',
    		success:function(data){
    			educationAd = jQuery.parseJSON(data);
    			/*educationAdvertisement.id = educationAd.propertyName[].name[]...etc;
            	educationAdvertisement.price = educationAd.;
            	educationAdvertisement.description = educationAd..;
            	educationAdvertisement.title = educationAd..;*/
            	return educationAdvertisement;
            }
        });
    }

    function renderEducationAd(educationAdvertisement){
    	$("#educationAdPrice").html(educationAdvertisement.price);
    	$("#educationAdTitle").html(educationAdvertisement.title);
    	$("#educationAdDescription").html(educationAdvertisement.description);
    	$("#educationAdImage").attr("src","");
    	$("#educationAdViews").html(educationAdvertisement.views+" Views");
    }
    
    //function Advertisement(){

    //}		// Define a class for Ad

    function displayAds(){
    	function Advertisement(){}
    	var mobileAdvertisement = new Advertisement();
    	var musicClassAdvertisement = new Advertisement();
    	var educationAdvertisement = new Advertisement();
    	getMobileAd(mobileAdvertisement,function(x){
    		if(x==null){
    			alert('egt fails');
    		}
    		alert(x.id);
    		renderMobileAd(getMobileAd(mobileAdvertisement));
    		renderMusicClassAd(getMusicClassAd(musicClassAdvertisement));
    		renderEducationAd(getEducationAd(educationAdvertisement));

    	});
    	
    }
</script>

    <script> // Initial Page Load Settings and Input Button Listeners
    	// Initial page load hides.
    	$("#bought_and_sold").hide();

        // Set Button Listeners
        $("#boughtButton").click(boughtButtonClickedHandler);
        $("#soldButton").click(soldButtonClickedHandler);
        
        // Define Button Listeners
        function boughtButtonClickedHandler(){
        	displayAds();
        	$("#contents").show();
        }
        function soldButtonClickedHandler(){
        	// code to read json ready in a php file

        	$("#contents").show();
        }

        // Handler for form button.
        function usernameSubmitHandler(){
        	$("#bought_and_sold").show();
        	$("#contents").hide();
        }
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--<script src='js/common.js'></script>!-->
</body>

</html>
