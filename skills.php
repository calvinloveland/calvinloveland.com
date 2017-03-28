$skillsFile = fopen("skills.csv");
$skills = array();
while(!feof($skillsFile)){
    $line = fgets($skillsFile);
    $values = explode(",",$line);
    array_push($skills,array("name"=>$values[0],"type"=>$values[1]));
}
print_r($skills);
$type = $_GET["type"];
if(empty($type) || $type == "all")
{
    foreach ($skills as &$element) {
        echo($element[0]+$element[1])
    }
}
		
