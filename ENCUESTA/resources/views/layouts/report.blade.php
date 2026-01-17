<!DOCTYPE html>
<html>
<head>
  @yield('title')
	<link type="text/css"  href="css/bootstrap.min.css" rel="stylesheet">
	<style>

        .description{
            font-size:1.1em;
            text-align: justify;
		}

		#s1{
			height:1.1em;
			border-width:0px 1px 1px 1px;
			border-style:solid;
			border-color:black;
		}

		#s2{
			height:1.1em;
			border-width:0px 1px 1px 1px;
			border-style:solid;
			border-color:black;
			background:#c4bd97;
		}

		#s3{
			font-weight: bold;
			font-size:0.8em;
		}

		#s4{
			font-weight: bold;
			font-size:0.8em;
			background:#c4bd97;
		}

		#s5{
			margin:0em;
			padding:0em;
		}

		#s6{
			padding:0em 0em 0.3em 0em;
			margin:0em;
			border-bottom:1px solid black;
			border-left:1px solid black;
			height:1em;
		}

		#s7{
			padding:0em 0em 0.3em 0em;
			margin:0em;
			border-bottom:1px solid black;
			border-left:1px solid black;
			border-right:1px solid black;
			height:1em;
		}

		#s8{
			padding:0em 0em 0.5em 0em;
			margin: 0em 0em 0em 0em;
			border:1px solid black;
			height:1em;
		}

		#s9{
			border-bottom: dotted 2px black;
			height:1.5em;
		}


		#s10{
			font-weight:bold;
			margin-left:1em;
			font-size:0.8em;
		}

		#s11{
			border:1px solid black;
			width:100%;
			font-weight:bold;
			background:#948a54;
			color:#ffffff;
			font-size:0.8em;
		}

		#s12{
			border:1px solid black;
			width:100%;
			font-weight:bold;
			background:#c4bd97;
			color:#000000;
			font-size:0.8em;
		}

		#s13{
			font-weight:bold;
			margin-left:1em;
			font-size:0.8em;
		}


		#s14{
			font-size:0.9em;
			font-style:italic;
		}

		#s15{
			font-weight:bold;
			margin-left:0.5em;
			font-size:0.6em;
		}


		#s16{
			width:100%;
			border: 1px solid black;
			font-size:0.7em;
		}

		#s17{
			border:1px solid black;
			width:100%;
			background:#c4bd97;
			color:#000000;
			font-size:0.7em;
		}

		#s18{
			font-size:0.8em;
			margin-top:1.5em;
			font-style: italic;
		}

		#s19{
			height:0.7em;
			width:100%;
			clear:left;
		}
	</style>
  @yield('style')
</head>
<body>
  @yield('contet')
</body>
</html>
