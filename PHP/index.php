<?php
	$title = 'Roku Remote Control | the best browser based remote control for Roku TV.';
	$description = 'Control your Roku TV conveniently from any device with browser. No installations!';
	$url = 'http://rokurc.com/';
	$icon = $url.'imgs/porble.png';
	
// todo: tooltps large font, image tooltip
	
	
	
?>
<!DOCTYPE html>
<html lang="en"><head>

<!-- script 
	async 
	src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9450492747422027"
    crossorigin="anonymous"
></script -->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="canonical" href="<?php echo $url; ?>">
<meta name="fragment" content="!">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $description; ?>">
<meta name="author" content="RokuRC" data-react-helmet="true">
<meta name="copyright" content="2023">
<meta name="theme-color" content="#662d91">

<meta property="og:locale" content="en_CA" data-react-helmet="true">
<meta property="og:site_name" content="Roku RC">
<meta property="og:title" content="<?php echo $title; ?>" >
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:description" content="<?php echo $description; ?>" >
<meta property="og:image" itemprop="image" content="<?php echo $icon; ?>">
<meta property="og:type" content="website" />
<meta property="og:updated_time" content="1704583614" >
<meta property="og:image:width"  content="256" >
<meta property="og:image:height" content="256" >

<meta name="twitter:card" content="summary" data-react-helmet="true">
<meta name="twitter:url" content="<?php echo $url; ?>" data-react-helmet="true">
<meta name="twitter:title" content="<?php echo $title; ?>" data-react-helmet="true">
<meta name="twitter:description" content="<?php echo $description; ?>" data-react-helmet="true">
<meta property="twitter:image" content="<?php echo $icon; ?>" data-react-helmet="true"/>
<meta name="twitter:site" content="@RokuPlayer" data-react-helmet="true">
<meta name="twitter:creator" content="@RokuPlayer" data-react-helmet="true">

<meta itemprop="description" content="<?php echo $description; ?>" data-react-helmet="true">
<meta itemprop="image" content="<?php echo $icon; ?>" data-react-helmet="true">
<meta itemprop="name" content="RokuRC" data-react-helmet="true">
<meta itemprop="url" content="<?php echo $url; ?>" data-react-helmet="true">

<title><?php echo $title; ?></title>
<link rel="shortcut icon" type="image/png" sizes="256x256" href="<?php echo $icon; ?>">

<META NAME="robots" CONTENT="nofollow">
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SB7MWDSDVF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SB7MWDSDVF');
</script>


<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "SoftwareApplication",
  "name": "Roku Remote Control",
  "alternateName": "RokuRC",
  "url": "<?php echo $url; ?>",
  "image": [{
	  "@type": "ImageObject",
	  "url": "<?php echo $icon; ?>",
	  "height": 256,
	  "width": 256
  }],
  "description": "<?php echo $description; ?>"
}
</script>




<style>

	@charset "UTF-8";

	svg:not(:root) {
	  overflow: hidden;
	}

	* {
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	}
	*:before,
	*:after {
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	}
	html {
	  font-size: 10px;
	  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	}
	body {
	  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	  font-size: 14px;
	  line-height: 1.42857143;
	  color: #333333;
	  background-color: #fff;
	  overflow:auto !important;
	  
	}

	h2 {
		margin-top: 0px;
		margin-bottom: 0px;
	}

	a {
	  text-decoration: none !important;
	}

	@-ms-viewport {
	  width: device-width;
	}

	.ret-roku-input:focused {
	  outline: none;
	}
	/* Helper Classes */
	.clickable {
	  transition: all 150ms ease;
	}
	.clickable:hover{
	  cursor: pointer;
	}
	.remote-buttons {
	  margin: 2px auto;
	  max-width: 480px;
	  min-width: 300px;
	  padding: 10px;
	  border: 1px solid #979797;
	  border-radius: 8px;
	  user-select: none;
	}
	.buttons-row {
	  display: flex;
	  margin-bottom: 12px;
	  height: 45px;
	  white-space: nowrap;
	}
	.remote-buttons-group {
	  margin: 12px 0;
	}
	.remote-button {
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  width: 31.5%;
	  max-height: 45px;
	  margin-right: 2.5%;
	  padding: 11px 0;
	  text-align: center;
	  color: #fff;
	  background-color: #662D91;
	  border-radius: 15px;
	  z-index: 10;
	}
	.remote-button:last-child {
	  margin-right: 0;
	}
	.remote-button.center {
	  margin-left: 34%;
	}
	.remote-button.double {
	  width: 48.75%;
	}
	.remote-button.double:last-child {
	  margin-right: 0;
	}
	.remote-button.clickable:hover {
	  background-color: #49247A;
	}
	.remote-button .remote-ok {
	  font-size: 15px;
	  font-weight: 600;
	}
	.remote-button .ret-icon-fill {
	  fill: #ffffff;
	}
	.standalone-btn:not(:hover) {
	  text-decoration: none;
	}

</style>

</head>

<body>

  <div id="no-ads" class="remote-buttons">

		<h1 style="display: none;">Roku Remote Control</h1> 
		<h2 style="text-align:left;float:left;color: #49247A;">Roku Remote Control</h1> 
		<div style="text-align:right;float:right;font-size:30px;"> 
			<a title="Open Info Page" href="help.php" target="_blank" class="hddn_1" > &#8505;&#65039;</a>
			&nbsp;
			<a id="cstmz" title="Customise three Channell Buttons"  href="customize.php?MyRokuTVIP=<?php echo $_GET['MyRokuTVIP']; ?>" class="hddn rtt">&#9881;&#65039;</a>
		</div> 
		<div style="clear:both;"></div>
	
	
<style>

#prgrss, #prgrss:hover {
	width: 99%;
	height: 5px;
    accent-color: #662D91;
	opacity: 1;
}

datalist {
  display: flex;
  justify-content: space-between;
  writing-mode: lr;
  width: 100%;
  margin: 0px 0px 10px 0px;
}

option {
  padding: 0;
  color: #662D91;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 16px;
  line-height: 1;
}


#lbl_app:hover {
    /* position: relative; TODO: show app icon on hover */
}

#pt_bar {
	transition: max-height 1s;
}
</style>







<div id="pt_bar" style="z-index: 0; opacity: 0; width: 100%; max-height: 0px; margin: 0; padding: 0;">
	<input id="prgrss" class="slider" type="range" min="0" max="1000" value="50" list="markers">
	<br><datalist id="markers">
		<option id="lbl_time" value="-1"  label=" ... "></option>
		<option id="lbl_app"  value="1001" label=" ... "></option>
	</datalist>
</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  

	  <div class="buttons-row">
		<div style="background-color: Gray;" class="clickable remote-button" data-action="Power">
		  <svg fill="white" width="20px" height="20px" viewBox="-2 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><path d="M7.498 17.1a7.128 7.128 0 0 1-.98-.068 7.455 7.455 0 0 1-1.795-.483 7.26 7.26 0 0 1-3.028-2.332A7.188 7.188 0 0 1 .73 12.52a7.304 7.304 0 0 1 .972-7.128 7.221 7.221 0 0 1 1.387-1.385 1.03 1.03 0 0 1 1.247 1.638 5.176 5.176 0 0 0-.993.989 5.313 5.313 0 0 0-.678 1.181 5.23 5.23 0 0 0-.348 1.292 5.22 5.22 0 0 0 .326 2.653 5.139 5.139 0 0 0 .69 1.212 5.205 5.205 0 0 0 .992.996 5.257 5.257 0 0 0 1.178.677 5.37 5.37 0 0 0 1.297.35 5.075 5.075 0 0 0 1.332.008 5.406 5.406 0 0 0 1.32-.343 5.289 5.289 0 0 0 2.211-1.682 5.18 5.18 0 0 0 1.02-2.465 5.2 5.2 0 0 0 .01-1.336 5.315 5.315 0 0 0-.343-1.318 5.195 5.195 0 0 0-.695-1.222 5.134 5.134 0 0 0-.987-.989 1.03 1.03 0 1 1 1.24-1.643 7.186 7.186 0 0 1 1.384 1.386 7.259 7.259 0 0 1 .97 1.706 7.413 7.413 0 0 1 .473 1.827 7.296 7.296 0 0 1-4.522 7.65 7.476 7.476 0 0 1-1.825.471 7.203 7.203 0 0 1-.89.056zM7.5 9.613a1.03 1.03 0 0 1-1.03-1.029V2.522a1.03 1.03 0 0 1 2.06 0v6.062a1.03 1.03 0 0 1-1.03 1.03z"/></svg>
		</div>
		<div class="clickable remote-button" data-action="VolumeMute">
		  <svg fill="white" width="20px" height="20px" viewBox="-32 -32 576 576" xmlns="http://www.w3.org/2000/svg"><path d="M215.03 71.05L126.06 160H24c-13.26 0-24 10.74-24 24v144c0 13.25 10.74 24 24 24h102.06l88.97 88.95c15.03 15.03 40.97 4.47 40.97-16.97V88.02c0-21.46-25.96-31.98-40.97-16.97zM461.64 256l45.64-45.64c6.3-6.3 6.3-16.52 0-22.82l-22.82-22.82c-6.3-6.3-16.52-6.3-22.82 0L416 210.36l-45.64-45.64c-6.3-6.3-16.52-6.3-22.82 0l-22.82 22.82c-6.3 6.3-6.3 16.52 0 22.82L370.36 256l-45.63 45.63c-6.3 6.3-6.3 16.52 0 22.82l22.82 22.82c6.3 6.3 16.52 6.3 22.82 0L416 301.64l45.64 45.64c6.3 6.3 16.52 6.3 22.82 0l22.82-22.82c6.3-6.3 6.3-16.52 0-22.82L461.64 256z"/></svg>
		</div>
		<div class="clickable remote-button" data-action="VolumeDown">
		  <svg fill="white" width="20px" height="20px" viewBox="-32 -32 576 576" xmlns="http://www.w3.org/2000/svg"><path d="M215 71l-89 89H24a24 24 0 0 0-24 24v144a24 24 0 0 0 24 24h102.06L215 441c15 15 41 4.47 41-17V88c0-21.47-26-32-41-17z"/></svg>
		</div>
		<div class="clickable remote-button" data-action="VolumeUp">
		  <svg fill="white" width="22px" height="20px" viewBox="-32 -32 576 576" xmlns="http://www.w3.org/2000/svg"><path d="M215.03 71.05L126.06 160H24c-13.26 0-24 10.74-24 24v144c0 13.25 10.74 24 24 24h102.06l88.97 88.95c15.03 15.03 40.97 4.47 40.97-16.97V88.02c0-21.46-25.96-31.98-40.97-16.97zm233.32-51.08c-11.17-7.33-26.18-4.24-33.51 6.95-7.34 11.17-4.22 26.18 6.95 33.51 66.27 43.49 105.82 116.6 105.82 195.58 0 78.98-39.55 152.09-105.82 195.58-11.17 7.32-14.29 22.34-6.95 33.5 7.04 10.71 21.93 14.56 33.51 6.95C528.27 439.58 576 351.33 576 256S528.27 72.43 448.35 19.97zM480 256c0-63.53-32.06-121.94-85.77-156.24-11.19-7.14-26.03-3.82-33.12 7.46s-3.78 26.21 7.41 33.36C408.27 165.97 432 209.11 432 256s-23.73 90.03-63.48 115.42c-11.19 7.14-14.5 22.07-7.41 33.36 6.51 10.36 21.12 15.14 33.12 7.46C447.94 377.94 480 319.54 480 256zm-141.77-76.87c-11.58-6.33-26.19-2.16-32.61 9.45-6.39 11.61-2.16 26.2 9.45 32.61C327.98 228.28 336 241.63 336 256c0 14.38-8.02 27.72-20.92 34.81-11.61 6.41-15.84 21-9.45 32.61 6.43 11.66 21.05 15.8 32.61 9.45 28.23-15.55 45.77-45 45.77-76.88s-17.54-61.32-45.78-76.86z"/></svg>
		</div>
	  </div>

    <div class="buttons-row">
      <div class="clickable remote-button double" data-action="Back">
        <svg name="arrow-back" size="14" class="ret-icon arrow-back remote-arrow-back" width="14px" height="14px" viewBox="0 0 17 14">
          <g fill="none" fill-rule="evenodd" stroke="none" class="ret-icon-fill" stroke-width="1">
            <g fill="#FFF" transform="translate(-183 -616)">
              <g transform="translate(111 553)">
                <g transform="translate(15 49)">
                  <path d="M72.115 19.39l.025.006H61.433l3.366-3.374a.876.876 0 00.255-.622.874.874 0 00-.255-.62l-.524-.524a.868.868 0 00-.618-.256.868.868 0 00-.618.255l-5.77 5.77a.867.867 0 00-.255.619c0 .235.09.456.255.62l5.77 5.77a.868.868 0 00.618.255c.234 0 .454-.09.618-.255l.524-.524a.867.867 0 00.255-.618.84.84 0 00-.255-.606l-3.404-3.392h10.732a.907.907 0 00.887-.898v-.74c0-.483-.417-.866-.9-.866z"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <div class="clickable remote-button double" data-action="Home">
        <svg name="home" size="14" class="ret-icon home remote-home" width="14px" height="14px" viewBox="0 0 16 14">
          <g fill="none" fill-rule="evenodd" stroke="none" class="ret-icon-fill" stroke-width="1">
            <g fill="#FFF" transform="translate(-323 -615)">
              <g transform="translate(111 553)">
                <g transform="translate(15 49)">
                  <g transform="translate(139.972)">
                    <path d="M59.0141643 27L64.013762 27 64.013762 23 66.0141643 23 66.0141643 27 71.0143655 27 71.0143655 21 73.0141643 21 65.0143655 13 57.0141643 21 59.0141643 21z"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
    </div>
    <div class="remote-buttons-group">
      <div class="buttons-row">
        <div class="clickable remote-button center" data-action="Up">
          <svg name="arrow_up" size="14" class="ret-icon arrow_up remote-arrow-down" width="14px" height="14px" viewBox="0 0 18 12">
            <polygon class="ret-icon-fill" transform="translate(-423.000000, -1139.000000) translate(423.000000, 1139.000000) translate(9.000000, 6.071429) scale(1, -1) rotate(90.000000) translate(-9.000000, -6.071429) " points="5.58223573 -2.92857143 3.5 -0.827134228 10.3355285 6.07142857 3.5 12.9681168 5.58223573 15.0714286 14.5 6.07142857"></polygon>
          </svg>
        </div>
      </div>
      <div class="buttons-row">
        <div class="clickable remote-button" data-action="Left">
          <svg name="arrow_left" size="14" class="ret-icon arrow_left remote-arrow-down" width="14px" height="14px" viewBox="0 0 13 18">
            <polygon class="ret-icon-fill ret-icon-stroke" transform="translate(-426.000000, -1322.000000) translate(427.000000, 1322.000000) translate(5.500000, 9.000000) scale(-1, 1) translate(-5.500000, -9.000000) " points="2.08223573 0 0 2.1014372 6.83552854 9 0 15.8966882 2.08223573 18 11 9" stroke-width="0.5" fill-rule="evenodd"></polygon>
          </svg>
        </div>
        <div class="clickable remote-button" data-action="Select">
          <span class="remote-ok">OK</span>
        </div>
        <div class="clickable remote-button" data-action="Right">
          <svg name="arrow_right" size="14" class="ret-icon arrow_right remote-arrow-down" width="14px" height="14px" viewBox="0 0 13 18">
            <polygon class="ret-icon-fill ret-icon-stroke" points="2.08223573 0 0 2.1014372 6.83552854 9 0 15.8966882 2.08223573 18 11 9" transform="translate(-360.000000, -809.000000) translate(361.000000, 809.000000)" stroke-width="0.5" fill-rule="evenodd"></polygon>
          </svg>
        </div>
      </div>
      <div class="buttons-row">
        <div class="clickable remote-button center" data-action="Down">
          <svg name="arrow_down" size="14" class="ret-icon arrow_down remote-arrow-down" width="14px" height="14px" viewBox="0 0 18 12">
            <polygon class="ret-icon-fill" transform="translate(-68.000000, -1097.000000) translate(68.000000, 1097.000000) translate(9.000000, 5.928571) rotate(90.000000) translate(-9.000000, -5.928571) " points="5.58223573 -3.07142857 3.5 -0.969991371 10.3355285 5.92857143 3.5 12.8252596 5.58223573 14.9285714 14.5 5.92857143" fill-rule="evenodd"></polygon>
          </svg>
        </div>
      </div>
    </div>
    <div class="buttons-row">
      <div class="clickable remote-button double" data-action="InstantReplay">
        <svg name="repeat" size="14" class="ret-icon repeat remote-repeat" width="14px" height="14px" viewBox="0 0 16 17">
          <g fill="none" fill-rule="evenodd" stroke="none" class="ret-icon-fill" stroke-width="1">
            <g fill="#FFF" transform="translate(-183 -830)">
              <g transform="translate(111 553)">
                <g transform="translate(15 49)">
                  <g transform="translate(0 216)">
                    <path d="M65.397 28.555c-4.136 0-7.5-3.367-7.5-7.502s3.364-7.502 7.5-7.502c.275 0 .552.016.828.047v-1.212c0-.156.096-.298.238-.358a.393.393 0 01.423.087l2.658 2.663a.385.385 0 010 .546l-2.656 2.669a.392.392 0 01-.425.084.392.392 0 01-.238-.357v-1.345a4.757 4.757 0 00-5.58 4.678 4.759 4.759 0 004.752 4.752c2.62 0 4.75-2.134 4.75-4.752 0-.213.174-.387.389-.387h1.973c.214 0 .388.174.388.387 0 4.135-3.367 7.502-7.5 7.502z"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <div class="clickable remote-button double" data-action="Info">
        <svg name="asterisc" size="14" class="ret-icon asterisc remote-start" width="14px" height="14px" viewBox="0 0 16 17">
          <g fill="none" fill-rule="evenodd" stroke="none" class="ret-icon-fill" stroke-width="1">
            <g fill="#FFF" transform="translate(-323 -830)">
              <g transform="translate(111 553)">
                <g transform="translate(15 49)">
                  <g transform="translate(139.972 216)">
                    <path d="M72.132 17.016c0 .738-.864 1.46-2.59 2.166-1.743.707-2.63 1.123-2.661 1.248-.032.173.8.55 2.496 1.13 1.68.597 2.52 1.327 2.52 2.19 0 .22-.048.448-.142.683-.267.707-.683 1.06-1.248 1.06-.33 0-.726-.134-1.19-.4-.462-.267-1.016-.66-1.66-1.178-1.145-.957-1.789-1.381-1.93-1.271-.063.047-.094.164-.094.353 0 .157.07.69.211 1.601.142.926.212 1.64.212 2.143 0 1.444-.51 2.19-1.53 2.237-1.1.016-1.649-.714-1.649-2.19 0-.251.02-.557.06-.918.039-.361.097-.77.176-1.225.173-.957.259-1.523.259-1.695 0-.22-.055-.37-.165-.448-.173-.125-.761.306-1.766 1.295-1.115 1.1-2.033 1.649-2.755 1.649-.361 0-.707-.118-1.036-.353-.346-.267-.518-.55-.518-.848 0-.644.832-1.42 2.496-2.331 1.648-.91 2.457-1.452 2.425-1.625-.015-.283-.824-.683-2.425-1.201s-2.402-1.209-2.402-2.072c0-.267.086-.589.259-.966.204-.518.542-.777 1.013-.777.627 0 1.593.55 2.896 1.649 1.224 1.004 1.915 1.452 2.072 1.342a.67.67 0 00.094-.377c0-.204-.11-.816-.33-1.837a33.535 33.535 0 01-.223-1.318 6.849 6.849 0 01-.082-.966c0-1.177.502-1.766 1.507-1.766.957 0 1.436.644 1.436 1.93 0 .44-.07 1.092-.212 1.955-.141.848-.212 1.413-.212 1.696 0 .392.094.62.283.683.188.063.855-.408 2.001-1.413 1.146-1.02 2.057-1.53 2.732-1.53.408 0 .793.18 1.154.54.345.346.518.73.518 1.155z"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
    </div>
    <div class="buttons-row">
      <div class="clickable remote-button" data-action="Rev">
        <svg name="fast-forward-left" size="14" class="ret-icon fast-forward-left remote-fast-forward-left" width="14px" height="14px" viewBox="0 0 21 15">
          <g fill="none" fill-rule="evenodd" class="ret-icon-fill" stroke-width="1">
            <g fill="#FFF" transform="translate(-158 -886)">
              <g transform="translate(111 553)">
                <g transform="translate(15 49)">
                  <g transform="translate(0 270)">
                    <path d="M51.919 20.73l-9.474-6.666a.35.35 0 00-.552.287v6.237l-9.272-6.52a.352.352 0 00-.553.287V27.68a.351.351 0 00.553.287l9.272-6.52v6.237a.351.351 0 00.552.287l9.474-6.667a.35.35 0 000-.573z" transform="matrix(-1 0 0 1 84.136 0)"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <div class="clickable remote-button" data-action="Play">
	 
	    <svg id="pause_icon" style="display: none;" size="34" class="ret-icon play remote-play" width="34px" height="34px" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M11 7H8V17H11V7Z" fill="white"></path><path d="M13 17H16V7H13V17Z" fill="white"></path></svg>
	  
        <svg id="play_icon" size="14" class="ret-icon play remote-play" width="14px" height="14px" viewBox="0 0 11 14">
          <g fill="none" fill-rule="evenodd" stroke="none" class="ret-icon-fill" stroke-width="1">
            <g fill="#FFF" transform="translate(-258 -886)">
              <g transform="translate(111 553)">
                <g transform="translate(15 49)">
                  <g transform="translate(92.55 270)">
                    <path d="M50.278 20.725L40.61 14.06a.335.335 0 00-.523.274v13.334a.334.334 0 00.523.274l9.667-6.667a.333.333 0 000-.549z"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
		
      </div>
      <div class="clickable remote-button" data-action="Fwd">
        <svg name="fast-forward-right" size="14" class="ret-icon fast-forward-right remote-fast-forward-right" width="14px" height="14px" viewBox="0 0 21 15">
          <g fill="none" fill-rule="evenodd" stroke="none" class="ret-icon-fill" stroke-width="1">
            <g fill="#FFF" transform="translate(-344 -886)">
              <g transform="translate(111 553)">
                <g transform="translate(15 49)">
                  <g transform="translate(185.1 270)">
                    <path d="M53.449 20.73l-9.474-6.666a.35.35 0 00-.553.287v6.237l-9.272-6.52a.352.352 0 00-.552.287V27.68a.351.351 0 00.552.287l9.272-6.52v6.237a.351.351 0 00.553.287l9.474-6.667a.35.35 0 000-.573z"></path>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
    </div>
	
<style>
		
	.remote-button.channel {
		background-color: transparent !important;
		border: 1px dotted red;
		background-repeat: no-repeat;
		background-size: 100% 200%;
		background-position-y: center;		
		background-position-x: 33%;
	}
	
	.remote-button.channel:hover {
		cursor: pointer;
	}	
	
	input.valueable {
		font-size: 24px;
		line-height: 30px;
		color: #333333;
		background-color: transparent !important;
		border: 1px dotted green;
		text-align: center;
		border-radius: 5px;
	}

	input:placeholder-shown {
	  font-size: 16px;
	}

	.hddn {
		display: none;
	}
	
	#no-ads .google-auto-placed {
		display: none !important;
	}
	
	#atContainer-fcc007483ac7cd6410f12ab4e9397073 {
		margin: 0 auto;
	}
	
	
	
	/* *** proxy section *** */
	#select_a_tv {
		font-size: 36px;
		margin: 0px auto 20px auto;
		padding: 0px 10px 0px 20px;
		display: block;
	}
	#app_buttons button{
		border-radius: 6px;
		background-color: white;
		padding: 3px 10px;
		margin: 3px 6px;
		font-size: 18px;
		font-weihgt: 700;
	}
	#app_buttons button:hover{
		background-color: lightgray;
		cursor: pointer;
	}
	#app_buttons button.tvinput{
		border: 1px solid #662D91;
		color: #662D91;
	}
	#app_buttons button.app{
		border: 1px solid #f44336;
		color: #f44336;
	}
	
	<?php if( isset( $_GET['MyESP32IP'] ) ){ ?>
	
	.hddn_1{ display: none !important; }
	
	<?php } else { ?>
	
	.hddn_2{ display: none !important; }

	<?php } ?>

</style>
	
	  <div class="buttons-row hddn_1">
		<div id="ch_1" class="channel remote-button" data-action="none"></div>
		<div id="ch_2" class="channel remote-button" data-action="none"></div>
		<div id="ch_3" class="channel remote-button" data-action="none"></div>
	  </div>	
	
  <div class="buttons-row">

    <input value="  " type="text" id="inpt" autocapitalize="none" autocomplete="off" autocorrect="off" spellcheck="false" 
		style="
			width: 100%; 
			font-size: 16px; 
			border: 1px solid #662D91;
			border-radius: 15px;
		" />
    </div>
	
    <img id="dvc_img"
        src="imgs/no_tv.png"
        style="
		border: 0px solid blue;
        margin: 0 auto 0 auto; filter: invert(1)  contrast(3);
        width: 100%; height: 64px; 
		object-fit: cover; object-position: -5% 44%;"
		class="hddn_1"
		onclick="window.location.replace('/set_tv_set_ip.php');"
		title="Click to change your TV IP"
    >	

	<div id="app_buttons" class="hddn_2" style="margin: 0 0 12px 0;" ></div>
	
	<select id="select_a_tv" class="hddn_2"></select>
	
  </div>
  
  <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>

  

</body>

<script src="/js/NoSleep.js"></script>

<script>

	var tv_ip = "<?php echo $_GET['MyRokuTVIP']; ?>";
	var channels = document.getElementsByClassName("channel");
	var use_form = false;

	var noSleep = new NoSleep();
		
	function do_on_channel() {
		var e = this.getAttribute("data-action");
		if ( e != "none" ) {
			do_transmit("launch", e);
		}
	}

	for (var i = 0; i < channels.length; i++) channels[i].addEventListener("click", do_on_channel);
	var elements = document.getElementsByClassName("clickable");

	var form = document.createElement("form");
	document.body.appendChild(form);
	form.method = "POST";
	form.target = "dummyframe";

	function do_on_click() {
		var e = this.getAttribute("data-action");
		do_transmit("keypress", e);
	}

	for (var i = 0; i < elements.length; i++) elements[i].addEventListener("click", do_on_click);

	var dvc_img = document.getElementById("dvc_img");
	var tester = new Image();
	var dvc_img_url = "http://" + tv_ip + ":8060/device-image.png";

	tester.onload = function() {
		if (dvc_img.src = dvc_img_url, localStorage.getItem(tv_ip)) {
			var e = JSON.parse(localStorage.getItem(tv_ip));
			for (let t in e){
				if( t.startsWith('google')) continue;
				if ( t == "current_TV") continue;
				if ( e[t] ) {
					var n = "http://" + tv_ip + ":8060/query/icon/" + e[t],
						r = document.getElementById(t);
					r.style.backgroundImage = "url('" + n + "')", r.setAttribute("data-action", e[t])
				}
			}
		} else localStorage.setItem(tv_ip, '{"ch_1":"","ch_2":"","ch_3":""}');
		document.querySelector("link[rel~='icon']").href = dvc_img_url, 
		document.querySelector(".hddn").classList.remove("hddn");
	};
	tester.onerror = tester.onabort = function() {
		dvc_img.src = "imgs/no_tv.png";
		use_form = true;
	};
	tester.src = dvc_img_url;
	setTimeout( function() {
	  if ( !tester.complete  || !tester.naturalWidth ){
		tester.src = "";
		use_form = true;
	  }}, 
	  3000
	);

	var inpt = document.getElementById("inpt");

	function do_on_input(e) {
		
		if( "insertText" == e.inputType) do_transmit("keypress", "Lit_"+encodeURIComponent(e.data));

		if( "deleteContentBackward" == e.inputType) do_transmit("keypress", "Backspace");

	}

	inpt.addEventListener("input", do_on_input);
	
	var k_codes = {
  		Space      :"Play",
		ArrowLeft  :"Left",
		ArrowRight :"Right",
		ArrowUp    :"Up",
		ArrowDown  :"Down",
		Enter      :"Select",
		Escape     :"Home",
		Minus      :"VolumeDown",
		Equal      :"VolumeUp",
		Backquote  :"VolumeMute",
		Backslash  :"Backspace",
		Period	   :"Fwd",
		Comma	   :"Rev",
		Slash	   :"Info",
		Semicolon  :"InstantReplay",
		Quote	   :"Search",		
		BracketRight: "Enter",
  		BracketLeft:  "Back"
	};

	document.addEventListener('keyup', function(e){

	  e.stopPropagation();
	  e.preventDefault();  
	  e.returnValue = false;
	  e.cancelBubble = true;

	  console.log( e.code );
	  
	  if( e.code in k_codes ){
		  var b = document.querySelectorAll('[data-action="' + k_codes[ e.code] + '"]')[0];
		  b.style.setProperty("background-color", 'rgb(139, 111, 168)', "important");
		  do_transmit("keypress", k_codes[ e.code]);
		  clearTimeout( bgt );
		  var bgt = setTimeout( ()=> {
				b.style.backgroundColor = null;
		  }, 800); 
	  }
	  
	  return false;
	  
	  
	  
	});

	document.addEventListener('keydown', function(e){
	  if( e.target.tagName == "INPUT" ) return;	
	  e.stopPropagation();
	  e.preventDefault();
	});

	var med_tckr;
	function do_transmit(k,v){
		if( use_form ){
			form.action = "http://" + tv_ip + ":8060/" + k + "/" + v;
			form.style.maxHeight = "0px";
			form.submit();				
		}else{
			fetch("http://" + tv_ip + ":8060/" + k + "/" + v, {
				method: "POST",
				body: ""
			});
		}	
		console.log("cmmnd: "+ k + "/" + v);
		
		if( v == "Power" ){
			clearTimeout( pwr_tckr );
			pwr_tckr = setTimeout(query_device_info, 3000);
		}			
		if( ["Play","Select","Left","Right","InstantReplay"].includes( v ) ){
			clearTimeout( med_tckr );
			med_tckr = setTimeout(query_media_player, 1000);
		}else{			
			clearTimeout( med_tckr );
			med_tckr = setTimeout(query_media_player, 3000);
		}
		
	}

	document.addEventListener("DOMContentLoaded", event => {
	   // we can move only if we are not in a browser's tab
	   isBrowser = matchMedia("(display-mode: browser)").matches;
	   if (!isBrowser) {
		  window.resizeTo(500, 900);
		  window.moveTo(25, 1);
	   }
	});

	document.addEventListener("visibilitychange", function () {
	  if (document.hidden) {
		state = "hidden";
		con_err("tab is hidden");
		clearTimeout( pwr_tckr );
	  } else {
		con_err("tab is visible");
		query_device_info();
		clearTimeout( pwr_tckr );
		pwr_tckr = setTimeout(query_device_info, 10000);
	  }
	});

	// to do: comment this func.
	function con_err(txt){
		console.log('\x1b[0;103m\x1b[1;91m '+ txt +' \x1b[0m');
		// console.trace();
	}
	
	
	
	
	
	
	
	//   ***** Player *****
	
	function xml2json(xml) {                                                                                                                                                     
	  var el = xml.nodeType === 9 ? xml.documentElement : xml                                                                                                               
	  var h  = {name: el.nodeName}                                                                                                                                          
	  h.content    = Array.from(el.childNodes || []).filter(e => e.nodeType === 3).map(e => e.textContent).join('').trim()                                                  
	  h.attributes = Array.from(el.attributes || []).filter(a => a).reduce((h, a) => { h[a.name] = a.value; return h }, {})                                                 
	  h.children   = Array.from(el.childNodes || []).filter(e => e.nodeType === 1).map(c => h[c.nodeName] = xml2json(c))                                                    
	  return h                                                                                                                                                              
	}  

	// test: ms_2_time(12*60*60*1000+34*60*1000+56*1000+789);
	function ms_2_time(s) {
		
	  function pad(n, z) { z = z || 2; return ('00' + n).slice(-z); }

	  var ms = s % 1000;
	  s = (s - ms) / 1000;
	  var secs = s % 60;
	  s = (s - secs) / 60;
	  var mins = s % 60;
	  var hrs = (s - mins) / 60;
	  
	  var timecode = "" + (( hrs > 0 ) ? ( hrs + ':') : ""); // conditional hrs
	  timecode = timecode + pad(mins) + ':' + pad(secs); // + '.' + pad(ms, 3);
	  return timecode;
	}

	var pwr_tckr;
	function query_device_info(){
		con_err('pwr');
		clearTimeout( pwr_tckr );
		var xmlhr = new XMLHttpRequest();
		xmlhr.open("GET", 'http://' + tv_ip + ':8060/query/device-info', true);
		xmlhr.timeout = 2000;
		xmlhr.ontimeout = (e) => { con_err('timeout'); };
		xmlhr.onreadystatechange = () => {
			if (xmlhr.status != 200) {
				do_hide();
				return;
			}
			if (xmlhr.readyState == 4) {
				j = xml2json( xmlhr.responseXML );
				
				// console.log( j );
				
				document.getElementById("cstmz").href = "customize_CORS.php?MyRokuTVIP=" + tv_ip;

				var bb = document.querySelectorAll('[data-action="Power"]')[0];

				if( j['power-mode'].content == "PowerOn" ){
					bb.style.setProperty("background-color", 'red', "important");
					clearTimeout( med_tckr );
					med_tckr = setTimeout(query_media_player, 200);
					clearTimeout( pwr_tckr );
					pwr_tckr = setTimeout(query_device_info, 10000);
				}else{
					bb.style.setProperty("background-color", 'gray', "important");
					do_hide();
					clearTimeout( pwr_tckr );
				}
			}
		};
		xmlhr.send();		
	}
	
	
	var jj = {};
	var pstn = drtn = 0;
	var appn = " ... ";
	var apid = 0;
	var state = "";

	function query_media_player(){
		clearTimeout( med_tckr );
		var xmlhr = new XMLHttpRequest();
		xmlhr.open("GET", 'http://' + tv_ip + ':8060/query/media-player', true);
		xmlhr.timeout = 2000;
		xmlhr.ontimeout = (e) => { con_err('timeout'); };
		xmlhr.onreadystatechange = () => {
			if (xmlhr.readyState == 4) {
				jj = xml2json( xmlhr.responseXML );
				
				state = jj?.attributes?.state;
				pstn = parseInt( jj?.position?.content.slice(0, -3) ) || 0;
				drtn = parseInt( jj?.duration?.content.slice(0, -3) ) || 10*60*60*1000;
				appn = jj?.plugin?.attributes?.name;
				apid = jj?.plugin?.attributes?.id;
				
				if( state == "play" ){
					do_show();					
					document.getElementById("pause_icon").style.display = "block";
					document.getElementById("play_icon").style.display = "none";
					return;
				}
				
				if( state == "pause" ){
					do_show();
					document.getElementById("play_icon").style.display = "block";
					document.getElementById("pause_icon").style.display = "none";
					return;
				}
				
				do_hide();
			}
		};
		xmlhr.send();
	}

	var prgrss = document.getElementById("prgrss");
	var markers = document.getElementById("markers");
	
	// ZZZZZZ prgrss.onchange = function(et){ et.target.value = 5; }
	
	var lbl_time = document.getElementById("lbl_time");
	var lbl_app = document.getElementById("lbl_app");
	

	// do_set_time_position(56*1000, 12*60*60*1000+34*60*1000+56*1000);
	var ticker;
	function do_set_time_position(){
		lbl_time.label = ms_2_time(pstn)+' / '+ms_2_time(drtn);
		prgrss.value = Math.round((pstn / drtn) * 1000);
		
		if( (pstn < drtn) && (state=="play") ){
			pstn = pstn + 1000;
			clearTimeout( ticker );
			ticker = setTimeout(do_set_time_position, 1000);
		}else{
			clearTimeout( ticker );
			// clearTimeout( pwr_tckr );
			// pwr_tckr = setTimeout(query_device_info, 100);

		}
	}
	
	function do_set_time_title( t ){
		lbl_app.label = t.replace('Plus', '+').replace('The ', '').replace('Channel', 'Ch.').replace('Player', 'P').trim();
	}
	
	var pt_bar = document.getElementById("pt_bar");
	function do_hide(){
		setTimeout( ()=> {
			if( !["play","pause"].includes( state ) ){
				pt_bar.style.maxHeight = "0px";
				pt_bar.style.opacity = '0';
				noSleep.disable();
			}
		}, 5000);
	}
	
	// colors detected by  https://lokeshdhakar.com/projects/color-thief/
	// if you want your app color to be included just open an isuue here https://github.com/elshnkhll/RokuRC/issuesv
	var apps = {
		"837"   : "rgb(252, 5, 5)",     // YT
		"93580" : "rgb(252, 102, 4)",   // iWebTV Player
		"84056" : "rgb(28, 100, 155)",  // The Weather Network
		"13535" : "rgb(215, 168, 51)",  // Plex
		"12"    : "rgb(229, 20, 28)",   // Netflix
		"291097": "rgb(12, 139, 156)",  // Disney+
		"252585": "rgb(251, 243, 4)",   // Pluto TV
		"31440" : "rgb(4, 92, 252)",    // Paramount+
		"34376" : "rgb(221, 64, 57)",   // ESPN
		"61322" : "rgb(4, 38, 212)",    // Max
		"13"    : "rgb(28, 148, 251)",  // Prime Video
		"2285"  : "rgb(37, 225, 133)",  // Hulu
		"86398" : "rgb(232, 248, 4)",   // SYFY
	};
	
	function do_show(){

		if( apid in apps ){
			prgrss.style.accentColor = apps[ ""+apid ];
		}else{
			prgrss.style.accentColor = "#662D91";
		}		
		
		pt_bar.style.opacity = '1';
		do_set_time_position();
		do_set_time_title(appn);
		pt_bar.style.maxHeight = "50px";
		noSleep.enable();
	}
	
	query_device_info();
	
</script>
	  


</html>
