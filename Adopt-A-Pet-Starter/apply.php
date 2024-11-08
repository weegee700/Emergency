<?php
$petsJson = file_get_contents('data/pets.json');
 $pets = json_decode($petsJson, true);


foreach ($pets as $pet){
  if($pet['id'] == $_GET['pet_Id']){
    $name= $pet['name'];
    $type= $pet['type'];
    $breed= $pet['breed'];
    $ageMonths= $pet['ageMonths'];
    $gender= $pet['gender'];
    $description= $pet['description'];
    $price= $pet['price'];
  }//End::if
}//END ::foreach
echo "This pet's name is $name, they are a $breed $type, they are $ageMonths months old, they are  $gender. $description They cost $price dollars";
?>

