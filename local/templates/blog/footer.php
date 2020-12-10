<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

</div>
<div class="sidebar">
<!--
<div class="sidebar_top">
    <h3>Blog Categories</h3>
<div class="sidebar_top_list">
	 <ul>
		<li><a href="#"><span class="category-name">Design</span> <span class="count">(6)</span><div class="clear"></div></a></li>
		<li><a href="#"><span class="category-name">Music</span> <span class="count">(22)</span><div class="clear"></div></a></li>
		<li><a href="#"><span class="category-name">Technology</span> <span class="count">(44)</span><div class="clear"></div></a></li>
		<li><a href="#"><span class="category-name">Nature</span> <span class="count">(32)</span><div class="clear"></div></a></li>
		<li><a href="#"><span class="category-name">Fashion</span> <span class="count">(15)</span><div class="clear"></div></a></li>
	</ul>
</div>
</div>
-->
	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"categorys", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "blog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "/blog/#SECTION_CODE_PATH#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "TEXT",
		"COMPONENT_TEMPLATE" => "categorys"
	),
	false
);?>

			<div class="popular-post">
				<h3>popular-posts</h3>
					<div class="post-grid">
						<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" title="post1" alt=""/>
						<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
							<div class="clear"> </div>
					  </div>
					    <div class="post-grid">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" title="post1" alt=""/>
							  <p>Lorem ipsum dolor sit dolor more normal consectetur of letters,<a href="#">[...]</a></p>
								<div class="clear"> </div>
						</div>
						<div class="post-grid">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" title="post1" alt=""/>
							  <p>Lorem ipsum dolor sit dolor more normal consectetur of letters sit amet,<a href="#">[...]</a></p>
								<div class="clear"> </div>
						</div>
					<div class="view-all"><a href="#">
						</a><a href="#">ViewAll</a>
					</div>
					<div class="clear"></div>
			</div>
			<div class="latest_comments">
					<h3>Latest Comments</h3>
				<div class="comments">
					<p><span>admin</span> commented on</p>
					 <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
					 <p>June 25th, 2013</p>
				</div>
				<div class="comments">
					<p><span>admin</span> commented on</p>
					 <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
					 <p>June 20th, 2013</p>
				</div>
				<div class="comments">
					<p><span>admin</span> commented on</p>
					 <h4><a href="#">Lorem ipsum dolor sit dolor more normal!</a></h4>
					 <p>June 15th, 2013</p>
				</div>
				</div>
	<div class="latest_photos">
		<h3>Latest Photos</h3>
					<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH?>/css/swipebox.css">
			<script src="<?= SITE_TEMPLATE_PATH?>/js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
			</script>
			<div class="gallery-bottom">
				<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						 <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						 <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" alt="" class="img-responsive">
						</a>
					</div>
				</div> 	
				<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" alt="" class="img-responsive">
						</a>
					</div>
				</div> 
				<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img1.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img2.jpg" alt="" class="img-responsive">
						</a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						  <a href="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
							<img src="<?= SITE_TEMPLATE_PATH?>/images/latest-post-img3.jpg" alt="" class="img-responsive">
						</a>
					</div>
				</div> 
				</div>
		</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<!--------------------- End Main Content ----------------------------------->
<div class="footer">
   	    <div class="footer_grides"> 
   	    	 <div class="wrap">  	    	
				<div class="footer_grid1">
					<h3>Popular Tweets</h3>
					<div class="tweet_data">
			<div class="tweet_img">
				<img src="<?= SITE_TEMPLATE_PATH?>/images/tweet-img1.jpg" alt=""/>
		</div>
		<div class="tweet_desc">
			 <h4>June 24th, 2013</h4>
		<p>Integer eget tortor et elit venenatis auctor morbi turpis nulla</p>
		</div>
		<div class="clear"></div>
		</div>	
		<div class="tweet_data">
			<div class="tweet_img">
				<img src="<?= SITE_TEMPLATE_PATH?>/images/tweet-img2.jpg" alt=""/>
		</div>
		<div class="tweet_desc">
			 <h4>June 04th, 2013</h4>
		<p>Integer eget tortor et elit venenatis auctor morbi turpis nulla</p>
		</div>
		<div class="clear"></div>
		</div>	
		<div class="tweet_data">
			<div class="tweet_img">
				<img src="<?= SITE_TEMPLATE_PATH?>/images/tweet-img3.jpg" alt=""/>
		</div>
		<div class="tweet_desc">
			 <h4>May 4th, 2013</h4>
		<p>Integer eget tortor et elit venenatis auctor morbi turpis nulla</p>
		</div>
		<div class="clear"></div>
		</div>	
     </div>			
				<div class="footer_grid2">
					<h3>Page Layout</h3>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"MENU_THEME" => "site",	// Тема меню
							"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						),
	false
);?>

	  <div class="grid2_bottom">
    	<h3>Newsletters Signup</h3>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>
		    <div class="signup">
			    <form>
			    	<input type="text" value="Enter your e-mail here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your e-mail here';"><input type="submit" value="Sign up">
			    </form>
		    </div>
      </div>
   </div>
		<div class="footer_grid3">
			<h3>Follow</h3>
                <div class="social_icons">
                	<div class="img_list">
					    <ul>
					     <li><img src="<?= SITE_TEMPLATE_PATH?>/images/facebook.png" alt="" /><a href="#">Facebook</a></li>
					     <li><img src="<?= SITE_TEMPLATE_PATH?>/images/google+.png" alt="" /><a href="#">Google Plus</a></li>
					     <li><img src="<?= SITE_TEMPLATE_PATH?>/images/twitter.png" alt="" /><a href="#">Twitter</a></li>
					     <li><img src="<?= SITE_TEMPLATE_PATH?>/images/linkedin.png" alt="" /><a href="#">Likedin</a></li>
					    </ul>
					</div>
                </div>
		 </div>
	 <div class="clear"></div>
  </div>
</div>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "include", Array(
	"AREA_FILE_RECURSIVE" => "Y",	// Рекурсивное подключение включаемых областей разделов
		"AREA_FILE_SHOW" => "sect",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "inc",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "standard.php",	// Шаблон области по умолчанию
	),
	false
);?>	 
  </div>
</body>
</html>