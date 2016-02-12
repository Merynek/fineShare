<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width" />
        <title>Title of the document</title>
        <!-- JQUERY -->
        <script src="JS/jquery.min.js"></script>
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="Bootstrap/css/bootstrap-theme.min.css"/>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <!-- STYLE -->
        <link rel="stylesheet" href="CSS/header.css"/>
        <link rel="stylesheet" href="CSS/content.css"/>
		<link rel="stylesheet" href="CSS/footer.css"/>
		<link rel="stylesheet" href="CSS/progress.css"/>
		<!-- SCRIPTS -->
		<script src="JS/Scripts.js"></script>
    </head>
</div>
    <body>
		<?php 
			echo("adasdsa");	
		?>
		<div class="loader">
			<div class="cssload-preloader cssload-loading centered">
				<span class="cssload-slice"></span>
				<span class="cssload-slice"></span>
				<span class="cssload-slice"></span>
				<span class="cssload-slice"></span>
				<span class="cssload-slice"></span>
				<span class="cssload-slice"></span>
			</div>
		</div>
        <header>
            <div class="upHeaderBackground">
                <div class="upHeader">
                    <nav class="navbar navbar-inverse mainMenu">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>                        
								</button>
								<span class="navbar-brand">
									<div class="logo">Fineshare.cz</div>
								</span>
							</div>
							<div class="collapse navbar-collapse menu" id="myNavbar">
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="#">Úvod</a>
									</li>
									<li>
										<a href="#">Podmínky užívání</a>
									</li>
									<li>
										<a href="#">FAQ</a>
									</li>
									<li>
										<a href="#">Kontakty</a>
									</li>
									<li>
										<a href="#"><span class="glyphicon glyphicon-user"></span>Přihlásit</a>
									</li>
									<li>
										<a href="#">Registrovat</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
                </div>
            </div>
            <div class="headerBackground"></div>
        </header>
        <div class="content">
            <div class="searchUploadComponent">
                <ul>
                    <li id="All" class="active">Vše</li>
                    <li id="Video">Video</li>
                    <li id="Audio">Audio</li>
                    <li id="Picture">Obrázky</li>
                    <li id="Document">Dokumenty</li>
                    <li id="Image">Image</li>
                    <li id="Zip">Zabalené</li>
                </ul>
                <div class="searchUpload">
					<div class="search"> 	
						<div class="input-group">
							<input type="text" id="serchInput" class="form-control searchTextBox" placeholder="Zadejte co hledáte...">
							<span class="input-group-btn">
								<button class="myButton" id="searchButton">
									<span class="glyphicon glyphicon-search"></span>
									<div class="buttonLine"></div>
									<div class="buttonTextSearch">Hledat</div>
								</button> 
							</span>
						</div>  	            
					</div>	
					<div class="upload">	
						<button class="myButton">
							<span class="glyphicon glyphicon-open"></span>
							<div class="buttonLine"></div>
							<div class="buttonText">Nahrát soubor</div>
						</button>  
					</div>	
                </div>
            </div>
            <div class="filter">
                <ul>
                    <li><button>01</button></li>
                    <li><button>02</button></li>
                    <li><button>03</button></li>
                    <li><button>04</button></li>
                    <li><button>05</button></li>
                    <li><button>...</button></li>
                    <li><button>132</button></li>
                    <li><button>></button></li>
                </ul>
				<div class="sortFilter">
					<div class="form-group">
						<select class="form-control" id="sel1">
							<option>Nejnovější</option>
							<option>Nejoblibenější</option>
							<option>Největší</option>
							<option>Nejmenší</option>
						</select>
					</div>
				</div>
                <div class="contentLine"></div>
            </div>
            <ul class="list">
				<li class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
					<ul class="item">
						<li><img src="Images/film.jpg" class="img-rounded img-responsive"></li>
						<li><p>HarryPotter_kamen.avi</p></li>
						<li><div class="like">+1</div>
							<div class="visited"><span class="glyphicon glyphicon-film"></span>989MB</div>
						</li>
					</ul>
                </li>
                <li class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
					<ul class="item">
						<li><img src="Images/film2.jpg" class="img-rounded img-responsive"></li>
						<li><p>HarryPotter_kamen.avi</p></li>
						<li><div class="like">+16</div>
							<div class="visited"><span class="glyphicon glyphicon-film"></span>989MB</div>
						</li>
					</ul>
                </li>
                <li class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
					<ul class="item">
						<li><img src="Images/film.jpg" class="img-rounded img-responsive"></li>
						<li><p>HarryPotter_kamen.avi</p></li>
						<li><div class="like">+45</div>
							<div class="visited"><span class="glyphicon glyphicon-film"></span>989MB</div>
						</li>
					</ul>
                </li>
                <li class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
					<ul class="item">
						<li><img src="Images/film2.jpg" class="img-rounded img-responsive"></li>
						<li><p>HarryPotter_kamen.avi</p></li>
						<li><div class="like">+3</div>
							<div class="visited"><span class="glyphicon glyphicon-film"></span>1.35GB</div>
						</li>
					</ul>
                </li>
                <li class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
					<ul class="item">
						<li><img src="Images/film.jpg" class="img-rounded img-responsive"></li>
						<li><p>HarryPotter_kamen.avi</p></li>
						<li><div class="like">+8</div>
							<div class="visited"><span class="glyphicon glyphicon-film"></span>989MB</div>
						</li>
					</ul>
                </li>
                <li class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
					<ul class="item">
						<li><img src="Images/film2.jpg" class="img-rounded img-responsive"></li>
						<li><p>HarryPotter_kamen.avi</p></li>
						<li><div class="like">+7</div>
							<div class="visited"><span class="glyphicon glyphicon-film"></span>1.35GB</div>
						</li>
					</ul>
                </li>
                <li class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
					<ul class="item">
						<li><img src="Images/film.jpg" class="img-rounded img-responsive"></li>
						<li><p>HarryPotter_kameasdasddasdasdasdasdasdasdasdasdasdasdasxxc.avi</p></li>
						<li><div class="like">+27</div>
							<div class="visited"><span class="glyphicon glyphicon-film"></span>989MB</div>
						</li>
					</ul>
                </li>
            </ul>
			<div class="filter">
                <ul>
                    <li><button>01</button></li>
                    <li><button>02</button></li>
                    <li><button>03</button></li>
                    <li><button>04</button></li>
                    <li><button>05</button></li>
                    <li><button>...</button></li>
                    <li><button>132</button></li>
                    <li><button>></button></li>
                </ul>
				<div class="buttonUpScroll">
					<span>Nahoru</span>
					<button class="buttonUpScroll"><span class="glyphicon glyphicon-chevron-up"></span></button>
				</div>
            </div>
        </div>
		<footer>
			<div class="upFooterBackGround">
				<div class="upFooter">
					<ul>
						<li><a>Registrovat</a></li>
						<li><a>FAQ</a></li>
						<li><a>Právní náležitosti</a></li>
						<li><a>Podmínky užívání</a></li>
						<li><a>Nahlásit soubor</a></li>
						<li><a>Kontakt</a></li>
						<li><a>Logo</a></li>
					</ul>
				</div>
			</div>
			<div class="downFooterBackGround">
				<div class="downFooter">
					<span>Provozovatelem serveru je Mediasun Group s.r.o. Všechna práva vyhrazena</span>
				</div>
			</div>
		</footer>
    </body>
</html>