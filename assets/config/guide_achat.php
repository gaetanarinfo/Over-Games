<?php
$html = file_get_contents('https://www.gamekult.com/guide-achat.html'); //get the html returned from the following url

$pokemon_doc = new DOMDocument();

$pokemon_list = array();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//ul[@class="g2-row g2__list--16 g2__list--8--v-sm--mw g2__vr--24 g2__vr--16--v-sm--mw"]');

	if($pokemon_row->length > 0){
		foreach($pokemon_row as $row){
   
            $name0 = $pokemon_xpath->query('//h2', $row)->item(0)->nodeValue;  
            $name1 = $pokemon_xpath->query('//h2', $row)->item(1)->nodeValue;
            $name2 = $pokemon_xpath->query('//h2', $row)->item(2)->nodeValue;
            $name3 = $pokemon_xpath->query('//h2', $row)->item(3)->nodeValue;
            $name4 = $pokemon_xpath->query('//h2', $row)->item(4)->nodeValue;
            $name5 = $pokemon_xpath->query('//h2', $row)->item(5)->nodeValue;
            $name6 = $pokemon_xpath->query('//h2', $row)->item(6)->nodeValue;
            $name7 = $pokemon_xpath->query('//h2', $row)->item(7)->nodeValue;
            $name8 = $pokemon_xpath->query('//h2', $row)->item(8)->nodeValue;
            $name9 = $pokemon_xpath->query('//h2', $row)->item(9)->nodeValue;
            $name10 = $pokemon_xpath->query('//h2', $row)->item(10)->nodeValue;  
            $name11 = $pokemon_xpath->query('//h2', $row)->item(11)->nodeValue;  
            $name12 = $pokemon_xpath->query('//h2', $row)->item(12)->nodeValue;  
            $name13 = $pokemon_xpath->query('//h2', $row)->item(13)->nodeValue;  
            $name14 = $pokemon_xpath->query('//h2', $row)->item(14)->nodeValue;  
            $name15 = $pokemon_xpath->query('//h2', $row)->item(15)->nodeValue;  
            $name16 = $pokemon_xpath->query('//h2', $row)->item(16)->nodeValue;  
            $name17 = $pokemon_xpath->query('//h2', $row)->item(17)->nodeValue;  
            $name18 = $pokemon_xpath->query('//h2', $row)->item(18)->nodeValue;  
            $name19 = $pokemon_xpath->query('//h2', $row)->item(19)->nodeValue;  
            $name20 = $pokemon_xpath->query('//h2', $row)->item(20)->nodeValue;  
            $name21 = $pokemon_xpath->query('//h2', $row)->item(21)->nodeValue; 
            $name22 = $pokemon_xpath->query('//h2', $row)->item(22)->nodeValue; 
            $name23 = $pokemon_xpath->query('//h2', $row)->item(23)->nodeValue; 
            $name24 = $pokemon_xpath->query('//h2', $row)->item(24)->nodeValue; 

            $content0 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(0)->nodeValue;  
            $content1 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(1)->nodeValue;
            $content2 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(2)->nodeValue;
            $content3 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(3)->nodeValue;
            $content4 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(4)->nodeValue;
            $content5 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(5)->nodeValue;
            $content6 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(6)->nodeValue;
            $content7 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(7)->nodeValue;
            $content8 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(8)->nodeValue;
            $content9 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(9)->nodeValue;
            $content10 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(10)->nodeValue;  
            $content11 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(11)->nodeValue;  
            $content12 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(12)->nodeValue;  
            $content13 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(13)->nodeValue;  
            $content14 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(14)->nodeValue;  
            $content15 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(15)->nodeValue;  
            $content16 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(16)->nodeValue;  
            $content17 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(17)->nodeValue;  
            $content18 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(18)->nodeValue;  
            $content19 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(19)->nodeValue;  
            $content20 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(20)->nodeValue;  
            $content21 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(21)->nodeValue; 
            $content22 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(22)->nodeValue; 
            $content23 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(23)->nodeValue; 
            $content24 = $pokemon_xpath->query('//p[@class="g2__para--in-list-item g2__body-lg g2__font-tundora g2__vr--4 g2__vr--2--v-sm--mw has--mw"]', $row)->item(24)->nodeValue; 

            $cat0 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(0)->nodeValue;  
            $cat1 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(1)->nodeValue;
            $cat2 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(2)->nodeValue;
            $cat3 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(3)->nodeValue;
            $cat4 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(4)->nodeValue;
            $cat5 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(5)->nodeValue;
            $cat6 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(6)->nodeValue;
            $cat7 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(7)->nodeValue;
            $cat8 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(8)->nodeValue;
            $cat9 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(9)->nodeValue;
            $cat10 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(10)->nodeValue;  
            $cat11 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(11)->nodeValue;  
            $cat12 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(12)->nodeValue;  
            $cat13 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(13)->nodeValue;  
            $cat14 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(14)->nodeValue;  
            $cat15 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(15)->nodeValue;  
            $cat16 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(16)->nodeValue;  
            $cat17 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(17)->nodeValue;  
            $cat18 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(18)->nodeValue;  
            $cat19 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(19)->nodeValue;  
            $cat20 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(20)->nodeValue;  
            $cat21 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(21)->nodeValue; 
            $cat22 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(22)->nodeValue; 
            $cat23 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(23)->nodeValue; 
            $cat24 = $pokemon_xpath->query('//span[@class="g2__a-cat is--inln g2__body-xs g2__font-uppercase g2__font-boulder "]', $row)->item(24)->nodeValue; 

            $dates0 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(0)->nodeValue;  
            $dates1 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(1)->nodeValue;
            $dates2 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(2)->nodeValue;
            $dates3 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(3)->nodeValue;
            $dates4 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(4)->nodeValue;
            $dates5 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(5)->nodeValue;
            $dates6 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(6)->nodeValue;
            $dates7 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(7)->nodeValue;
            $dates8 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(8)->nodeValue;
            $dates9 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(9)->nodeValue;
            $dates10 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(10)->nodeValue;  
            $dates11 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(11)->nodeValue;  
            $dates12 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(12)->nodeValue;  
            $dates13 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(13)->nodeValue;  
            $dates14 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(14)->nodeValue;  
            $dates15 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(15)->nodeValue;  
            $dates16 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(16)->nodeValue;  
            $dates17 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(17)->nodeValue;  
            $dates18 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(18)->nodeValue;  
            $dates19 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(19)->nodeValue;  
            $dates20 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(20)->nodeValue;  
            $dates21 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(21)->nodeValue; 
            $dates22 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(22)->nodeValue; 
            $dates23 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(23)->nodeValue; 
            $dates24 = $pokemon_xpath->query('//time[@class="g2__a-dt g2__body-xs g2__font-boulder is--align-right g2__vr--8"]', $row)->item(24)->nodeValue; 

		    $pokemon_list[] = array('title' => 
            $name0, 
            $name1, 
            $name2, 
            $name3, 
            $name4, 
            $name5, 
            $name6, 
            $name7, 
            $name8, 
            $name9, 
            $name10, 
            $name11, 
            $name12, 
            $name13, 
            $name14, 
            $name15, 
            $name16, 
            $name17, 
            $name18, 
            $name19, 
            $name20,
            $name21, 
            $name22, 
            $name23, 
            $name24,
            'content' =>
            $content0, 
            $content1, 
            $content2, 
            $content3, 
            $content4, 
            $content5, 
            $content6, 
            $content7, 
            $content8, 
            $content9, 
            $content10, 
            $content11, 
            $content12, 
            $content13, 
            $content14, 
            $content15, 
            $content16, 
            $content17, 
            $content18, 
            $content19, 
            $content20,
            $content21, 
            $content22, 
            $content23, 
            $content24,
            $cat0, 
            $cat1, 
            $cat2, 
            $cat3, 
            $cat4, 
            $cat5, 
            $cat6, 
            $cat7, 
            $cat8, 
            $cat9, 
            $cat10, 
            $cat11, 
            $cat12, 
            $cat13, 
            $cat14, 
            $cat15, 
            $cat16, 
            $cat17, 
            $cat18, 
            $cat19, 
            $cat20,
            $cat21, 
            $cat22, 
            $cat23, 
            $cat24,
            $cat0, 
            $dates1, 
            $dates2, 
            $dates3, 
            $dates4, 
            $dates5, 
            $dates6, 
            $dates7, 
            $dates8, 
            $dates9, 
            $dates10, 
            $dates11, 
            $dates12, 
            $dates13, 
            $dates14, 
            $dates15, 
            $dates16, 
            $dates17, 
            $dates18, 
            $dates19, 
            $dates20,
            $dates21, 
            $dates22, 
            $dates23, 
            $dates24);
		}
	}
}
?>