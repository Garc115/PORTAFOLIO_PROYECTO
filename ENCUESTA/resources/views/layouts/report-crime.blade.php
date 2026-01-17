<!DOCTYPE html>
<html>
<head>
  @yield('title')
	<style>

        html {
            margin:20px;
            font: Arial, sans-serif;
        }

        table{
            border-collapse: collapse;
        }
/*
        tr, td{

            border: dotted 1px gray;
        }
*/
        #logo_cnsp{
            margin-top:0.5em;
            margin-left: 1.5em;
            width:210px;
        }

        #receipt_signature_stamp{
            font-weight: bold;
            text-align: center;
            vertical-align: text-bottom;
            padding-top: 10em;
            padding-bottom: 1em;
        }

        #brown_right_arrow{
                width: 40px;
                padding: 0em 1.2em 0em 1.2em;
         }

         #wind_rose_hd{
            position:absolute;
            top: 60px;
            left : 680px;
            width: 8em;
            z-index: 1;
         }

        #intervention_map{

            z-index: -1;
         }

         .watermark{
            position:absolute;
            top:4.6em;
            left:-2.2em;
            color:gray;
            font-size:12em;
            font-weight: bold;
            transform: rotate(52deg);
            width:13em;
            opacity:0.5
         }

         .map{
            padding:1em 1.2em 1em 1.2em;
         }

        .title{
            clear:left;
            padding-top: 0.1 em;
            text-align: center;
            font-weight:bold;
            font-size:0.7em;
        }

        .subtitle{
            text-align: center;
            font-weight:bold;
            background:#948a54;
            color:#ffffff;
            font-size:0.7em;
        }

        .title_annex{
            padding-bottom: 1 em;
            padding-top: 1 em;
            text-align: center;
            font-weight:bold;
            font-size:0.7em;
        }

        .indications_annex{
            font-weight:bold;
            font-size:0.6em;
            text-align: left;
            padding-left: 0.5 em;
        }

        .section{
            text-align: left;
			font-weight:bold;
			margin-left:1em;
			font-size:0.8em;
		}

        .title_divider{
			height:0.8em;
			width:100%;
			clear:left;
		}

        .page_block{
            border:solid black;
            border-width: 1px 2px 2px 2px;
        }

        .section_divider{
			height:3em;
			width:100%;
			clear:left;
		}

        .part{
			border-top:1px solid black;
			width: auto;
			font-weight:bold;
			background:#948a54;
			color:#ffffff;
			font-size:0.8em;
            padding-left: 0.5em;
		}

        .subpart{
			border-top:1px solid black;
			width: auto;
			font-weight:bold;
			background:#c4bd97;
			color:#000000;
			font-size:0.8em;
            padding-left: 0.5em;
		}

        .container{
			width:100%;
			border-top:1px solid black;
            border-left:0px;
            border-right:0px;
            border-spacing: 0;
			font-size:0.6em;
		}

        .page_counter{
			width:100%;
            border-left:0px;
            border-right:0px;
            border-spacing: 0;
			font-size:0.5em;
		}

        .separator{
           height: 0.2em;
        }

        .separator--width{
           width: 1.2em;
           border-left: 1px;
           border-right: 1px;
        }

        .footer{
            text-align: right;
            padding-right: 1em;
			font-size:0.6em;
			margin-top:1em;
			font-style: italic;
		}

        .st1{
            width:100%;
            border: 1px solid black;
            font-size:0.8em;
            border-collapse: collapse;
        }

        .title_s1{
            text-align: center;
            padding: 0.5em 0 0.2em;
            font-weight:bold;
            font-size:0.8em;
        }

        .section_s1{
            font-weight:bold;
            padding: 0.3em;
            border-bottom:1px solid black;
        }

		.empty_box{
            width: 1.2em;
			height:1em;
			border-width:1px 0px 1px 1px;
			border-style:solid;
			border-color: white;
            text-align: center;
		}

        .open_box{
            width: 1.2em;
			height:1em;
			border-width:0px 1px 1px 1px;
			border-style:solid;
			border-color:black;
            text-align: center;
		}

        .close_box{
            width: 1.2em;
			height:1em;
			border-width:1px 1px 1px 1px;
			border-style:solid;
			border-color:black;
            text-align: center;
		}

        .container--subpart{
            background:#c4bd97;
		}

        .empty_box--subpart{
            border-color: #c4bd97;
		}

        .line_left_t{
            border-left: solid 1px black;
        }

        .line_right_t{
            border-right: solid 1px black;

        }

        .line_top_t{
            border-top: solid 1px black;

        }

        .line_bottom_t{
            border-bottom: solid 1px black;

        }

        .line_answer{
            text-align: center;
            height:1em;
            font-size:1.2em;
			border-bottom: dotted 2px black;
		}

        .label_boxes{
            text-align: right;
        }

        .footer_boxes{
            text-align: center;
        }

        .label_geocode{
            text-align: center;
            font-weight: bold;
            font-size:1.1em;
        }

        .indications{
            font-size:0.78em;
            text-align: justify;
            font-style: italic;
            vertical-align: top;
            padding-left: 0.5em;
            padding-right: 1em;
        }

        .description{
            text-align: justify;
            height:1em;
            font-size:1.1em;
			/*border-bottom: dotted 2px black;*/
		}

        .symbol{
            font-family: DejaVu Sans, sans-serif;
        }

		.s1{
			height:1.1em;
            width: 1em;
			border-width:0px 1px 1px 1px;
			border-style:solid;
			border-color:black;
            text-align: center;
            font-size:0.8em;
		}

		.s2{
			height:1.1em;
            width: 1em;
			border-width:0px 1px 1px 1px;
			border-style:solid;
			border-color:black;
			background:#c4bd97;
            text-align: center;
            font-size:0.8em;
		}

		.s3{
            height:1.1em;
            width: 1em;
			font-weight: bold;
			font-size:0.8em;
            text-align: center;
		}
		.s4{
            height:1.1em;
            width: 1em;
			font-weight: bold;
			font-size:0.8em;
			background:#c4bd97;
            text-align: center;
		}

		.s5{
            text-align: center;

			margin:0em;
			padding:0em;
		}

		.s6{
            text-align: center;
			padding:0em 0em 0.3em 0em;
			margin:0em;
			border-bottom:1px solid black;
			border-left:1px solid black;
			height:1em;
		}

		.s7{
            text-align: center;
			padding:0em 0em 0.3em 0em;
			margin:0em;
			border-bottom:1px solid black;
			border-left:1px solid black;
			border-right:1px solid black;
			height:1em;
		}

		.s8{
			padding:0em 0em 0.5em 0em;
			margin: 0em 0em 0em 0em;
			border:1px solid black;
			height:1em;
		}

		.s9{
			border-bottom: dotted 2px black;
			height:1.5em;
		}

		.s13{
			font-weight:bold;
			margin-left:1em;
			font-size:0.8em;
		}


		.s14{
			font-size:0.9em;
			font-style:italic;
		}

		.s15{
			font-weight:bold;
			margin-left:0.5em;
			font-size:0.6em;
		}

		.s17{
			border:1px solid black;
			width:100%;
			background:#c4bd97;
			color:#000000;
			font-size:0.7em;
		}

		.s18{
			font-size:0.8em;
			margin-top:1.5em;
			font-style: italic;
		}

	</style>
  @yield('style')
</head>
<body>
  @yield('contet')
</body>
</html>
