<div id="testimonialspage">
	<div class="container sect_cont">
		<div class="row-fluid" id="testimonials_introductn">
			<div class="span12">
				<h1 class="reviews">CometChat Reviews</h1>
				<h2>You're in good company</h2>
				<p>But don't just take our word for it. Checkout these CometChat reviews to see the love we receive.</p>
			</div>
		</div>
		<div class="customer_testimonials">
			<?php 

            if (!empty($testimonials[0]) && !empty($testimonials[1])) {
				$tm1 = strlen($testimonials[0]['testimonial']);
				$tm2 = strlen($testimonials[1]['testimonial']);
                $span1 = intval(12*(($tm1)/($tm1+$tm2)));
				if ($span1 < 4) { $span1 = 4; }
				if ($span1 > 8) { $span1 = 8; }
                $span2 = 12-$span1;
            } else {
                $span1 = 12;
                $span2 = 12;
            }

            if (!empty($testimonials[3]) && !empty($testimonials[4])) {
   				$tm4 = strlen($testimonials[3]['testimonial']);
				$tm5 = strlen($testimonials[4]['testimonial']);
                $span4 = intval(12*(($tm4)/($tm4+$tm5)));
				if ($span4 < 4) { $span4 = 4; }
				if ($span4 > 8) { $span4 = 8; }
                $span5 = 12-$span4;
            } else {
                $span4 = 12;
                $span5 = 12;
            }

            if (!empty($testimonials[0])) {
                $tm = $testimonials[0];
            ?>
            <div class="row-fluid largeout">
                <div class="firstbox testibox span<?php echo $span1;?>" id="first_testi" style="float:left;height:100%;">
                    <div class="quote-date"><?php echo 'On '.date("jS \of\ F Y...", strtotime($tm['date'])); ?></div>
                    <p><?php echo $tm['testimonial']; ?></p>
                    <div class="author row-fluid">
                        <div class="author-info span12">
                            <div class="name">
                                <?php echo $tm['author']; ?>
                            </div>
                            <div class="handle">
                                <?php echo $tm['company']; ?>
                            </div>
                        </div>
                        <div class="sprite"></div>
                    </div>
                </div>
            <?php } 

            if (!empty($testimonials[1])) {
                $tm = $testimonials[1];
            ?>

                <div class="secondbox testibox span<?php echo $span2;?>" id="second_testi" style="float:left;height:100%;">
                    <div class="quote-date"><?php echo 'On '.date("jS \of\ F Y...", strtotime($tm['date'])); ?></div>
                    <p><?php echo $tm['testimonial']; ?></p>
                    <div class="author row-fluid">
                        <div class="author-info span12">
                            <div class="name">
                                <?php echo $tm['author']; ?>
                            </div>
                            <div class="handle">
                                <?php echo $tm['company']; ?>
                            </div>
                        </div>
                        <div class="sprite"></div>
                    </div>
                </div>
            </div>
            <?php } 

            if (!empty($testimonials[2])) {
                $tm = $testimonials[2];
            ?>

            <div class="row-fluid" id="third_testi">
                <div class="span12 testibox">
                    <div class="quote-date"><?php echo 'On '.date("jS \of\ F Y...", strtotime($tm['date'])); ?></div>
                    <p><?php echo $tm['testimonial']; ?></p>
                    <div class="author row-fluid">
                        <div class="author-info span12">
                            <div class="name">
                                <?php echo $tm['author']; ?>
                            </div>
                            <div class="handle">
                                <?php echo $tm['company']; ?>
                            </div>
                        </div>
                        <div class="sprite"></div>
                    </div>
                </div>
            </div>

            <?php } 

            if (!empty($testimonials[3])) {
                $tm = $testimonials[3];
            ?>

            <div class="row-fluid">
                <div class="fourthbox testibox span<?php echo $span4;?>" id="fourth_testi" style="float:left;height:100%;">
                    <div class="quote-date"><?php echo 'On '.date("jS \of\ F Y...", strtotime($tm['date'])); ?></div>
                    <p><?php echo $tm['testimonial']; ?></p>
                    <div class="author row-fluid">
                        <div class="author-info span12">
                            <div class="name">
                                <?php echo $tm['author']; ?>
                            </div>
                            <div class="handle">
                                <?php echo $tm['company']; ?>
                            </div>
                        </div>
                        <div class="sprite"></div>
                    </div>
                </div>

            <?php } 

            if (!empty($testimonials[4])) {
                $tm = $testimonials[4];
            ?>

                <div class="fifthbox testibox span<?php echo $span5;?>" id="fifth_testi" style="float:left;height:100%;">
                    <div class="quote-date"><?php echo 'On '.date("jS \of\ F Y...", strtotime($tm['date'])); ?></div>
                    <p><?php echo $tm['testimonial']; ?></p>
                    <div class="author row-fluid">
                        <div class="author-info span12">
                            <div class="name">
                                <?php echo $tm['author']; ?>
                            </div>
                            <div class="handle">
                                <?php echo $tm['company']; ?>
                            </div>
                        </div>
                        <div class="sprite"></div>
                    </div>
                </div>
            </div>

            <?php } ?>
		</div>
		<div id="pagi">
			<div class="container" data-pageno="<?php echo $pageno; ?>" data-noofpages="<?php echo $noofpages; ?>">
			<?php if($pageno > 1){ ?>
				<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/"><<</a> ';?>
				<?php if(($pageno - 1)==1){?>
				<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/">Prev</a>'; ?>
				<?php }else{ ?>
				<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/page/'.($pageno - 1).'">Prev</a>'; ?>
				<?php } ?>
				<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/page/'.($pageno - 1).'">...</a>'; ?>
			<?php } ?>
			
			<?php if(($pageno + 30) <= $noofpages){ ?>
				<?php for($i = $pageno; $i < ($pageno + 30); $i++){
						if($i == $pageno){	
				 ?>
				 	<?php echo '<a href="" class="active blue_link">'.$i.'</a>' ?>
			 	<?php }else{
					if ($i == 2){?>
					<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/page/'.$i.'">'.$i.'</a>' ?>
					<?php }else{?>
					<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/page/'.$i.'">'.$i.'</a>' ?>
				<?php }}} ?>
			<?php }else{ ?>
				<?php for($i = ($noofpages - 29); $i < ($noofpages+1); $i++){
						if($i == $pageno){	
				 ?>
				 	<?php echo '<a href="#" class="active blue_link">'.$i.'</a>' ?>
			 	<?php }else{ ?>
					<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/page/'.$i.'">'.$i.'</a>' ?>
				<?php }} ?>
			<?php } ?>
			<?php if($pageno < $noofpages){ ?>
				<?php if(($pageno + 30) <= $noofpages){ ?>
					<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/page/'.($pageno + 30).'">...</a>'; ?>
				<?php } ?>
				<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/page/'.($pageno + 1).'">Next</a>'; ?>
				<?php echo '<a class="blue_link" href="'.BASE_URL.'reviews/page/'.$noofpages.'">>></a>'; ?>
			<?php } ?>
			</div>
		</div>
	</div>
</div>
