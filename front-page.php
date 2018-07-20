<?php get_header(); ?>

<?php
  $gold_id = 19;
  $silver_id = 19;
  $real_id = 19;
  $merch_id = 19;
 ?>
<!-- section header -->

<!-- section-slider -------------------------------------------->

<section id="section-slider">
  <div class="separator"></div>

  <div class="main-screen">
		<!-- <div class="right-top">
		  <h1>Invest in gold. Secure your future!</h1>
		</div> -->

    <ul class="slideshow">
      <li class="slider-image active"></li>
      <li class="slider-image"></li>
      <li class="slider-image"></li>
      <li class="slider-image"></li>
    </ul>
  </div>

</section>

<!-- section-main-categories -------------------------------------------->
<section id="main-categories">
  <div class="separator">
  </div>

  <div class="category-container">
    <div>
      <h2>Main Categories.</h2>
    </div>

    <div class="categories">
      <div class="category flex1">
        <a href="<?php echo get_term_link( $gold_id ,'product_cat') ?>"><img class="picturecategory" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-categories/Global-index-gold.png" alt="">
        <h3>Gold Coins & Bars</h3></a>
      </div>
      <div class="category flex1">
        <a href="<?php echo get_term_link( $silver_id ,'product_cat') ?>"><img class="picturecategory" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-categories/global-index-silver.png" alt="">
        <h3>Silver Coins & Bars</h3></a>
      </div>
      <div class="category flex1">
        <a href="<?php echo get_term_link( $real_id ,'product_cat') ?>"><img class="picturecategory" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-categories/global-index-real-estate.png" alt="">
        <h3>Real Estate</h3></a>
      </div>
      <div class="category flex1">
        <a href="<?php echo get_term_link( $merch_id ,'product_cat') ?>"><img class="picturecategory" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-categories/global-index-leather.png" alt="">
        <h3>Leather</h3></a>
      </div>
      <div class="category flex1">
        <a href="<?php echo get_term_link( $merch_id ,'product_cat') ?>"><img class="picturecategory" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-categories/global-index-main-card.png" alt="">
        <h3>Gold Cards</h3></a>
      </div>
      <div class="category flex1">
        <a href="<?php echo get_term_link( $merch_id ,'product_cat') ?>"><img class="picturecategory" src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-categories/global-index-main-tshirt.png" alt="">
        <h3>Merchandise</h3></a>
      </div>
    </div>
	</div>
</section>

<!-- section-helpyou -------------------------------------------->

<section id="section-helpyou">
	  <div class="container">
      <h2>How we help you.</h2>

	    <div class="helpyous flex-row">
	      <div class="helpyou flex1">
	        <img class="pichelpyou" src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpyou/global-index-icon-1.png" alt="">
	        <a href="<?php echo get_permalink(get_page_by_path( 'black-magic-removal' )); ?>"><h3>Profitable</h3><h4>Build your future with long term asset</h4></a>
	      </div>
	      <div class="helpyou flex1">
	        <img class="pichelpyou" src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpyou/global-index-icon-2.png" alt="">
	        <a href="<?php echo get_permalink(get_page_by_path( 'love-psychic-reading' )); ?>"><h3>Secure</h3><h4>Our platform is a reliable and secure platform for your savings portfolio.</h4></a>
	      </div>
	      <div class="helpyou flex1">
	        <img class="pichelpyou" src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpyou/global-index-icon-3.png" alt="">
	        <a href="<?php echo get_permalink(get_page_by_path( 'business-problem' )); ?>"><h3>Afilliate Incentives</h3><h4>Earn gold or silver for your referrals, starting wit your first one!</h4></a>
	      </div>

	    </div>
	  </div>
</section>

<!-- section-rich -------------------------------------------->
<section id="section-rich">

	  <div class="rich-container">

			<div class="section-rich">
				<h1>How the rich are investing.</h1>
			</div>

	    <div class="riches flex-row">

        <!-- rich one ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/1-Thomas-Kaplan.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Thomas Kaplan</h3>
							<p>(over $2 billion invested in gold)</p>
							<p>“People view gold as emotional, but when they demythologize it, when they look at it for what it is and the opportunity it represents, they’re going to say, ‘We really should own some of that.’ The question will then change to ‘Where do we get the gold?'”</p>
					</div>
				</div>
        <!-- rich 2 ----->
          <div class="rich1 flex-row">
            <div class="c1 flex1">
              <img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/2-John-Paulson.jpg" alt="">
            </div>
            <div class="c2 flex4">
              <h3>John Paulson</h3>
              <p>(over $4.6 billion invested in gold)</p>
              <p>“I view gold as a currency, not a commodity. It’s importance as a currency will continue to increase as the major central banks around the world continue to print money.”</p>
          </div>
        </div>
        <!-- rich 3 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/3-David-Einhorn.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>David Einhorn</h3>
							<p>($560 million net worth)</p>
							<p>“Gold is the money of choice and we would like to have a meaningful amount of our assets denominated in gold. It’s the biggest position in the fund”… “It’s the one kind of money Bernanke can’t print more of.”</p>
					</div>
				</div>
        <!-- rich 4 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/4-Jim-Rogers.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Jim Rogers</h3>
							<p>(net worth $300 million)</p>
							<p>"Gold will be the great investment over the next decade.”</p>
					</div>
				</div>
        <!-- rich 5 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/5-George-Muthoot.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>M.G. George Muthoot</h3>
							<p>(net worth $1.1 billion)</p>
							<p>“If this business was as easy as it sounds, all my branch managers would be setting up their own gold loan companies.”</p>
					</div>
				</div>
        <!-- rich 6 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/6-George-Soros.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>George Soros</h3>
							<p>(net worth of $22 billion)</p>
							<p>“The U.S. dollar is very weak. Investors are moving to real assets.”</p>
					</div>
				</div>
        <!-- rich 7 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/7-Eike-Batista.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Eike Batista</h3>
							<p>(net worth of $30 billion)</p>
							<p>“There is a massive shifting of wealth to new economic powers.”</p>
					</div>
				</div>
        <!-- rich 8 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/8-Carl-Icahn.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Carl Icahn</h3>
							<p>(net worth of $12.5 billion)</p>
							<p>“The system is not working properly.”</p>
					</div>
				</div>
        <!-- rich 9 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/9-Paul-Tudor-Jones.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Paul Tudor Jones</h3>
							<p>(net worth of $3.3 billion)</p>
							<p>“I have never been a gold bug, it is just an asset that, like everything else in life, has its time and place. And that time is now.”</p>
					</div>
				</div>
        <!-- rich 10 ----->
        <div class="rich1 flex-row">
          <div class="c1 flex1">
            <img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/12-Eric-Mindich.jpg" alt="">
          </div>
          <div class="c2 flex4">
            <h3>Eric Mindich</h3>
            <p>(over $800 million invested in gold)</p>
            <p>“Gold is poised to complete its 11th consecutive annual gain, the longest winning streak in at least nine decades, on the brink of a bear market.”</p>
          </div>
				</div>
        <!-- rich 11 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/11-Marc-Stern.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Marc Stern</h3>
							<p>(holds $550 million of Bessemer Trust in gold)</p>
							<p>“At the core of the sharp downturn is an absence of confidence. Rising debt levels in Europe and the U.S., uncertainty about policymakers’ willingness to restore fiscal order, and increasingly cautious corporate sentiment that is consistent with slowing global growth are the chief culprits.”</p>
					</div>
				</div>
        <!-- rich 12 ----->
					<div class="rich1 flex-row">
            <div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/10-Michael-Avery.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Michael Avery</h3>
							<p>(holds $3.3 billion of Waddell & Reed fund in gold)</p>
							<p>“In 5,000 years of human history, gold has been the currency of choice, the store of value, when humans have called into question their governments’ efforts to solve problems by running printing presses and injecting money into the economy.”</p>
					</div>
				</div>
        <!-- rich 13 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/13-Mikhail-Prokhorov.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Mikhail Prokhorov</h3>
							<p>(over $6 billion invested in gold)</p>
							<p>“We’re looking now at what the world financial system is going to do with all this money that was printed during the financial crisis, if there’s continued inflation, we’ll see a global trend for raw materials and gold is not an exception. I’m optimistic that the gold price will stay at the same price or higher.”</p>
					</div>
				</div>
        <!-- rich 14 ----->
					<div class="rich1 flex-row">
						<div class="c1 flex1">
							<img class="picture-rich" src="<?php echo get_stylesheet_directory_uri(); ?>/images/picture-rich/14-Carlos-Slim.jpg" alt="">
						</div>
						<div class="c2 flex4">
							<h3>Carlos Slim</h3>
							<p>(world’s richest man net worth $55 billion)</p>
							<p>“With the same things that were done in 2000 and 2001, when it was temporarily solved with big expenditures and very aggressive monetary and fiscal policy, aside from lowering taxes, we should be directing more money to the real economy, not to the financial economy. The volatility of the markets is so great that more is won or lost in a single day than in five years of accumulated interest. And that’s not a good thing.”</p>
					</div>
				</div>

			</div>
		</div>
</section>

<!-- section-testimonial -------------------------------------------->

<section id="section-testimonial">
	  <div class="container">
      <h3>“Global Index has helped me in my wealth growing journy. I started investing in Gold at first, and then moved on to real estate. All in all I have made a lot of money be-cause of them and I am very grateful to their staff for their help.”</h3>
      <h4 class="autor">John Smith, Scarborough</h4>
	  </div>
</section>

<!-- section-signup -------------------------------------------->

<section id="section-signup">
	  <div class="container">

      <div class="signup-top">
        <h3>Sign up to the Global Index Newsletter.Stay up to date on all deals, investing news, and much more!</h3>
      </div>

      <div class="forms">
        <?php echo do_shortcode( '[contact-form-7 id="191" title="Contact form 1"]' ); ?>
      </div>

      <div class="signup-down">
        <p>Disclaimer: Global Index Incorporation recommends that you carefully evaluate and research the risks and rewards as-sociated with savings portfolio in physical precious metals before you make a purchase. Data quoted on website rep-resents past performance and does not guarantee future results. Global Index Incorporation account executives are not licensed as investment advisors and, accordingly, do not make any recommendations regarding clients personal invest-ment portfolios. Global Index Assets account executives are only authorized to sell Global Index Assets precious metal products.
        </p>
        <p>Disclosure: If you are on this website you have been sent or referred here by an affiliate, agent or partner who is pro-moting Global Index Incorporation. All affiliates, agents and partners are compensated for referrals. These affiliates, agents and partners are independent from Global Index Assets and are not authorized to give a purchase price for precious metals sold through Global Index Assets. For more information please review our Risk Disclosures and Privacy Policy.
        </p>

      </div>

	  </div>
</section>

<?php get_footer(); ?>
