<?php

	$latestCourse = array("JQuery", "Node", "PHP", "Ruby on Rails");
	$popularCourse = array("Javascript", "HTML & CSS", "HTML5 & CSS3", "Perl");
	$upcomingCourse = array("Ruby", "Python", "Go", "Dart");

	$latestContainer = array();
	$upcomingContainer = array();
	$popularContainer =array();
	$count = 0;
	$imgSrc = "";

	foreach ($latestCourse as $course) {
		$count++;
		if(file_exists("./img/course" . $count . '.jpg')){
			$imgSrc = "./img/course" . $count . '.jpg';
		}else if(file_exists("./img/course" . $count . '.png')){
			$imgSrc = "./img/course" . $count . '.png';
		}
		array_push($latestContainer, 
			array("title"    => "Course for ".$course,
				   "desc"    => "Hi there! This is an introductary course for the " . $course . ". Anyone willing to learn concept of JQuery can take this course.",
				   "img-src" => $imgSrc,
				   "course-link" => "./course/latest/" . $count,
				   "author-link" => "./author/amberish"));
	}

	foreach ($popularCourse as $course) {
		$count++;
		if(file_exists("./img/course" . $count . '.jpg')){
			$imgSrc = "./img/course" . $count . '.jpg';
		}else if(file_exists("./img/course" . $count . '.png')){
			$imgSrc = "./img/course" . $count . '.png';
		}
		array_push($popularContainer, 
			array("title"    => "Course for ".$course,
				   "desc"    => "Hi there! This is an introductary course for the " . $course . ". Anyone willing to learn concept of JQuery can take this course.",
				   "img-src" => $imgSrc,
				   "course-link" => "./course/popular/" . $count,
				   "author-link" => "./author/amberish"));
	}

	foreach ($upcomingCourse as $course) {
		$count++;
		if(file_exists("./img/course" . $count . '.jpg')){
			$imgSrc = "./img/course" . $count . '.jpg';
		}else if(file_exists("./img/course" . $count . '.png')){
			$imgSrc = "./img/course" . $count . '.png';
		}
		array_push($upcomingContainer, 
			array("title"    => "Course for ".$course,
				   "desc"    => "Hi there! This is an introductary course for the " . $course . ". Anyone willing to learn concept of JQuery can take this course.",
				   "img-src" => $imgSrc,
				   "course-link" => "./course/upcoming/" . $count,
				   "author-link" => "./author/amberish"));
	}

?>