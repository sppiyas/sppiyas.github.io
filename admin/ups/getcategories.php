<?php
$cats = ExecuteQuery ("SELECT topic_name, topic_id FROM Topic");
$categories = array();
$count = 0;
while($row = mysql_fetch_array($cats)){
	$categories[$count] = $row['topic_id'];
	$catnames[$count] = $row['topic_name'];
	$count++;
}
$subcategories = array();

for ($i=0; $i < $count; $i++) { 
	$subcategories[$categories[$i]] = array();
}

for ($i=0; $i < $count; $i++) { 
	$catid = $categories[$i];
	$subcats = ExecuteQuery ("SELECT subtopic_name FROM subtopic WHERE topic_id=$catid");
	if (!empty($subcats)){
		while($row = mysql_fetch_array($subcats)){
			extract($row);
			array_push($subcategories[$categories[$i]], $subtopic_name);
		}
	}
}

?>