<!DOCTYPE HTML>
<html>
<head>
<Meta http-equiv="Content-Type" content="Text/php; charset=utf-8">
<title></title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <style type="text/css" media="screen">
@font-face{ 
    font-family:"Cuprum"; 
    src:url("fonts/Cuprum.otf"); 
    font-weight:normal;
    }
@font-face{ 
    font-family:"Calibri"; 
    src:url("fonts/calibri.ttf"); 
    font-weight:normal;}
body{
    font-family:Calibri; 
    background:url(Naruto/gambar-naruto-shippuden-kyuubi.jpg); 
    background-attachment:fixed; 
    background-position:center;
    }
#wrapper{
    width:980px;
    margin:auto;
    }

#container{
    padding:10px;
    background:#FFFFF;
    float:left; 
    margin-top:10px; 
    margin-bottom:10px; 
    -moz-border-radius:10px; 
    -webkit-border-radius:10px; 
    -o-border-radius:10px;
    }
header{
    height:100px;
    width:938px; 
    border:#DFDFDF 5px solid; 
    float:left;
    padding:20px 0px 0px 20px; 
    font-family:Cuprum; 
    font-style:italic;
    font-size:42px; 
    font-weight:bold; 
    color:#e9faeb;
    text-shadow:#000 2px 2px; /* CSS3 */
    }

nav{
    width:958px;
    float:left;
    overflow:auto;
    background:#DFDFDF; 
    border:#AAAAAA 1px solid;
    }
nav ul{ 
    list-style:none; 
    float:left; o
    verflow:auto; 
    margin:0px; 
    padding:0px;
    }
nav ul li{ 
    display:block;
    padding:5px 10px 5px 10px;
    float:left;
    margin:0px; 
    border-right:#AAAAAA 1px solid;
    }
nav ul li .submenu{ 
    display:none;
    }
nav ul li:hover .submenu{ 
    display:block; 
    margin:0px; width:100px; 
    position:absolute; 
    margin-top:5px;
    border:#AAAAAA 1px solid; 
    background:#DFDFDF; 
    margin-left:-11px;
    }
nav ul li:hover .submenu li{ 
    display:block; 
    width:89px; 
    padding:5px; 
    float:left; 
    border:none;
    }
nav ul li:hover{ 
    background:url (rohull.jpg);
    }
nav ul li a{ 
    color:#000000; 
    text-decoration:none;
    }
nav ul li a:hover{ 
    text-decoration:underline;
    }
#wrapper #content{ 
    width:620px; 
    float:left; 
    padding:10px;
    }
#wrapper #content #single{ 
    margin:5px; 
    border:#DFDFDF 1px solid;
    padding:5px; 
    font-size:13px; 
    float:left; 
    overflow:auto;
}
#wrapper #content #single #featured-image{ 
    width:150px;
    height:150px;
-moz-
    background-size:450px 150px; /* CSS3 Mozilla Firefox */ 
    background-size:450px 150px; /* CSS3 Other Browser */ 
    background-position:center;
    float:left;
    overflow:auto; margin-right:5px;
}
#wrapper #content #single h2{ 
    margin:0px; 
    font-family:Cuprum; 
    font-size:18px; 
    padding:5px; 
    border:#DFDFDF 1px solid; 
    background:#EEEEEE; 
    margin-bottom:10px;
}
#wrapper #content #single #more a{ 
    float:right;
    overflow:auto;
    padding:2px 10px 2px 10px; 
    background:#CF6; 
    border:#FF9933 1px solid; 
    -moz-border-radius:10px; 
    -webkit-border-radius:10px; 
    -o-border-radius:10px; 
    margin-bottom:10px; 
    margin-right:10px; 
    margin-top:10px; 
    text-align:center; 
    text-decoration:none;
    color:#000000;
    }
#wrapper #content{ 
    width:620px; 
    float:left; 
    padding:10px;
    }
#wrapper #content #single #more a:hover{
    background:#BD5;
    color:#093; 
    border:#CC6600 1px solid;
    }
#wrapper #sidebar{
    width:300px; 
    float:left; 
    padding:10px;
    }
#wrapper #sidebar .widget{ 
    list-style:none;
    }
#wrapper #sidebar .widget ul{ 
    list-style:none; 
    margin-left:-40px;
    }
#wrapper #sidebar .widget li a{ 
    color:#446500; text-decoration:none;
    }
#wrapper #sidebar .widget li a:hover{ 
    text-decoration:underline;
    }
	
	#wrapper #content #single h2.video-title{
border:none;
}
#wrapper #content #single h2.video-title a{
color:#5f8f00;
text-decoration:none;
font-size:16px;
font-weight:normal;
}
#wrapper #content #single h2.video-title a:hover{
text-decoration:underline;
}
 

	
footer{
    float:left;
    background:#333333;
    width:960px;
    color:#BBBBBB;
    }
footer #column{ 
    width:300px; 
    padding:10px; 
    float:left;
    font-size:14px;
    }
footer #column h2{ 
    margin:0px; 
    margin-bottom:10px; 
    font-family:Cuprum; 
    font-size:18px; 
    color:#FFFFFF; 
    font-weight:bold;
    }
footer #column a{ 
    font-weight:bold; 
    color:#0099CC; 
    text-decoration:none;
    }
footer #column a:hover{ 
    text-decoration:underline;
    }

</head>

<body>
<body bgcolor="#red">
	<div id="wrapper">
		<div id="container">

	
				
		<header><marquee>ANIME SUBTITLE INDONESIA </marquee></header>	<!--HTML 5 -->
			            
		<nav> <!-- HTML 5 --> 
		<ul>
              <li ><a href="indra.php">HOME</a></li>
						
                    <li><a href="NARUTO.php">NARUTO KECIL</a></li>
					<li><a href="NARUTO SHIPUDENT.php">NARUTO SHIPUDENT</a></li> 
					<li><a href="DRAGON BALL.php">DRAGON BALL SUPER</a></li>
					<li><a href="LAGU.php">LAGU</a></li>
					<li><a href="SINOPSI.php">ARTIKEL</a></li>
        </ul>
		</nav>

            <div id="content"><div id="single">
			<div id="featured-image" style="background:url(Naruto/Naruto-1.jpg)">&nbsp;</div>
                <h2>Naruto Kecil Eps 122</h2>
			<div id="more"><h2 class="video-title"><a href="Film Naruto.php">Play</a></h2></div> </div>
			
			<div id="content"><div id="single">
			<div id="featured-image" style="background:url(Naruto/Naruto-1.jpg)">&nbsp;</div>
                <h2>Naruto Shippudent Eps 1</h2>
			<div id="more"><h2 class="video-title"><a href="Film Naruto Shippudent.php">Play</a></h2></div> </div>
      
            <footer> <!--HTML5 -->
						<p><p align="center">Anime Subtitle Indonesia</p></p>
				
                    <p> <font color=red>Intagram: INDRAWAHYU900 <font>
					<font color=blue> Facebook: INDRA WAHYU <font>
					 <font color=green> WhatsApp: 0822-8407-2951 <font> 
					<font color=white> Email	: indrawahyu900@gmail.com <font></p>
                
				
            </footer>
</div>
</div>
</body>
</html>