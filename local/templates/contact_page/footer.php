<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
			 </div>
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
				<img src="images/tweet-img1.jpg" alt=""/>
		</div>
		<div class="tweet_desc">
			 <h4>June 24th, 2013</h4>
		<p>Integer eget tortor et elit venenatis auctor morbi turpis nulla</p>
		</div>
		<div class="clear"></div>
		</div>	
		<div class="tweet_data">
			<div class="tweet_img">
				<img src="images/tweet-img2.jpg" alt=""/>
		</div>
		<div class="tweet_desc">
			 <h4>June 04th, 2013</h4>
		<p>Integer eget tortor et elit venenatis auctor morbi turpis nulla</p>
		</div>
		<div class="clear"></div>
		</div>	
		<div class="tweet_data">
			<div class="tweet_img">
				<img src="images/tweet-img3.jpg" alt=""/>
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
					     <li><img src="images/facebook.png" alt=""><a href="#">Facebook</a></li>
					     <li><img src="images/google+.png" alt=""><a href="#">Google Plus</a></li>
					     <li><img src="images/twitter.png" alt=""><a href="#">Twitter</a></li>
					     <li><img src="images/linkedin.png" alt=""><a href="#">Likedin</a></li>
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

