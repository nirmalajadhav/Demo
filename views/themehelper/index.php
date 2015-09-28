<html><head>
			<title>
				CometChat Theme-Helper
			</title>
			<link href="<?php echo BASE_URL; ?>public/css/finaltheme.css" rel="stylesheet" type="text/css">
			<script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/jquery-1.7.2.js"></script>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>public/js/finaljq.js"></script>
			<?php if(isset($canonicalvariable)) { ?>
    			<link rel="canonical" href="<?php echo $canonicalvariable; ?>"/>
    		<?php } ?>
    		
	</head>
	
			
	<body>
			<div class="main">
			<div class="margin1"><b>Theme Variable Reference</b></div>
					<div class="vartitle">
					Update colors, font family and font sizes of your theme using the variables listed below.
					</div>
			
					<div class="vartitle">
					Click on the <b>variable name</b> to see which element it affects. 
					</div>
				<div class="varcontainer">
				
					<div class="var">
						<div class="variables" x="328" y="24" x1="229" y1="24" ht="266" wt="193" arr="12" det="Color of tab border will change.">tab_border</div>
						<div class="variables" x="470" y="135" x1="450" y1="126" ht="15" wt="46" arr="1" det="Font color of this text will change.">tab_color</div>
						<div class="variables" x="293" y="86" x1="234" y1="75" ht="18" wt="115" arr="2" det="Font color of this text will change.">tab_color_self</div>
						<div class="variables" x="290" y="219" x1="229" y1="70" ht="219" wt="194" arr="1" det="Background color of Tab will change.">tab_background</div>
						<div class="variables" x="345" y="127" x1="262" y1="120" ht="16" wt="152" arr="2" det="Changes color of the links in the chatbox.">tab_link_color</div>
						<div class="variables" x="290" y="40" x1="268" y1="32" ht="13" wt="45" arr="1" det="Font color of this text will change.">tab_sub_color</div>
						<div class="variables" x="383" y="44" x1="229" y1="24" ht="47" wt="193" bleft="0" btop="35" bleft1="0" btop1="35" arr="2" det="Background color of this area will change.">tab_sub_background</div>
						<div class="variables" x="290" y="40" x1="268" y1="32" ht="13" wt="45" arr="1" det="Font size of this text will change.">tab_font_size_small</div>
						
					</div>
					<div class="var">
						
						
						<div class="variables" x="325" y="10" x1="229" y1="1" ht="14" wt="193" arr="1" det="Changes the color where the tab title gradient starts.">tab_title_gradient_start</div>
						<div class="variables" x="330" y="18" x1="229" y1="15" ht="10" wt="192" arr="2" det="Changes the color where the tab title gradient ends.">tab_title_gradient_end</div>
						
						<div class="variables" x="255" y="17" x1="233" y1="8" ht="14" wt="48" arr="1" det="Font color of this text will change.">tab_title_color</div>
						<div class="variables" x="325" y="1" x1="229" y1="1" ht="24" wt="193" arr="2" det="Color of tab title border will change .">tab_title_border</div>
						<div class="variables" x="511" y="83" x1="422" y1="71" ht="23" wt="166" arr="2" det="Selected color will appear if gradient is disabled or not supported.">tab_title_background</div>
						<div class="variables" x="506" y="112" x1="422" y1="100" ht="23" wt="166" arr="2" det="Tab title background color will change, when hovered.">tab_title_background_light</div>
						<div class="variables" x="260" y="15" x1="233" y1="8" ht="14" wt="48" arr="2" det="Shadow color of this text will change.">tab_title_text_background</div>
						<div class="variables" x="255" y="18" x1="233" y1="8" ht="14" wt="48" arr="1" det="Font size of this text will change.">tab_title_font_size</div>
						<div class="variables" x="255" y="14" x1="233" y1="8" ht="14" wt="48" arr="2" det="Font family of this text will change.">tab_title_font_family</div>
						
					</div>
					<div class="var">
						
					
						<div class="variables" x="301" y="263" x1="229" y1="263" ht="0" wt="194" arr="1" det="Color of the upper border will change.">tab_border_light</div>
						<div class="variables" x="301" y="264" x1="229" y1="264" ht="0" wt="194" arr="2" det="Color of the lower border will change.">tab_border_lighter</div>
						<div class="variables" x="470" y="132" x1="450" y1="126" ht="15" wt="46" arr="2" det="Font family of this text will change.">tab_font_family</div>
						<div class="variables" x="470" y="135" x1="450" y1="126" ht="15" wt="46" arr="1" det="Font size of this text will change.">tab_font_size</div>
						<div class="variables" x="530" y="228" x1="444" y1="170" ht="114" wt="187" arr="2" det="Background color of tooltip will change.">tooltip_background</div>
						<div class="variables" x="170" y="268" x1="122" y1="258" ht="23" wt="100" arr="2" det="Font color of this text will change.">tooltip_color</div>
						<div class="variables" x="170" y="273" x1="122" y1="258" ht="23" wt="100" arr="1" det="Font family of this text will change.">tooltip_font_family</div>
						<div class="variables" x="170" y="270" x1="122" y1="258" ht="23" wt="100" arr="2" det="Font size of this text will change.">tooltip_font_size</div>
						<div class="variables" x="470" y="210" x1="444" y1="206" ht="6" wt="187" arr="12" det="Color of Tooltip Seperator will change.">tooltip_break</div>
						
						
					</div>
					<div class="var">
						
						<div class="variables" x="82" y="305" x1="51" y1="295" ht="16" wt="65" arr="1" det="Font color of this text will change.">bar_color</div>
						<div class="variables" x="254" y="296" x1="1" y1="290" ht="11" wt="632" bleft="0" btop="35" bleft1="0" btop1="35" arr="1" det="Changes the color where the bar gradient starts.">bar_gradient_start</div>
						<div class="variables" x="263" y="305" x1="1" y1="302" ht="12" wt="632" arr="2" det="Changes the color where the bar gradient ends.">bar_gradient_end</div>
						<div class="variables" x="254" y="291" x1="1" y1="290" ht="24" wt="632" arr="12" det="Color of this border will change.">bar_border</div>
						<div class="variables" x="18" y="296" x1="22" y1="289" ht="25" wt="9" arr="1" det="Color of this border will change.">bar_border_light</div>
						<div class="variables" x="82" y="305" x1="51" y1="295" ht="16" wt="65" arr="1" det="Font family of this text will change.">bar_font_family</div>
						<div class="variables selected" x="82" y="301" x1="51" y1="295" ht="16" wt="65" arr="2" det="Font size of this text will change.">bar_font_size</div>
						<div class="variables" x="100" y="304" x1="51" y1="295" ht="16" wt="65" arr="1" det="Shadow color of this text will change.">bar_text_background</div>
						<div class="variables" x="242" y="300" x1="1" y1="290" ht="24" wt="632" arr="2" det="Selected color will appear if gradient is disabled or not supported.">bar_background</div>
					</div>
					
				</div>
				<div class="imagecontainer">
					
				

				<div class="image">
						<div class="arrow" style="opacity: 0; left: 18px; top: 256px;">
							
							
							<img src="<?php echo BASE_URL; ?>public/img/arrow.png" alt="Error" width="20" height="40" id="arr">
							<div class="details" style="display: none;">Color of this border will change.</div>
							
						</div>
						
						<div class="selectionbox" style="left: 51px; top: 295px; height: 16px; width: 65px; display: block;"></div>
						
						<img src="<?php echo BASE_URL; ?>public/img/snippedtab.png" alt="Error" width="632" height="314" id="snip">
						
						<div class="arrow1" style="opacity: 1; left: 82px; top: 299px;">
							
							
							<img src="<?php echo BASE_URL; ?>public/img/arrowtop.png" alt="Error" width="20" height="40" id="arr">
							<div class="details" style="display: block;">Font size of this text will change.</div>
							
						</div>
				</div>
				
				</div>	
			</div>
	
</body></html>