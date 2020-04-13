<?php
function sortArraybyArray($array,$sortArray) {
	while (isSorted($sortArray)==0){
		$array = mergeArrays($array,$sortArray);
		$newArray = putInPlace($array,$sortArray,[]); 
	
		//unmerge arrays
		for ($i=0; $i<count($newArray); $i++){
			$array[$i] = $newArray[$i][0];
			$sortArray[$i] = $newArray[$i][1];
		}
		
	}
	return $array;
}

function mergeArrays($array1,$array2) {
	$newArray = [];
	for ($i=0; $i<count($array1); $i++){
		$newArray[$i] = array($array1[$i],$array2[$i]);
	}
	return $newArray;
}

function isSorted ($sortArray) {
	if (count($sortArray)==1) {
		return 1;
	} elseif ($sortArray[0] < $sortArray[1]){
		return 0;
	} else {
		return isSorted(array_slice($sortArray,1,count($sortArray)));
	}
}

function putInPlace($array,$sortArray,$newArray){
	if (count($sortArray) == 1) { //if the vec is a single num
		return $newArray;
	
	} else {
		if ($sortArray[0] < $sortArray[1]) {
			$secondA = $array[0];
			$firstA = $array[1];
			$secondS = $sortArray[0];
			$firstS = $sortArray[1];
		} else {
			$firstA = $array[0];
			$secondA = $array[1];
			$firstS = $sortArray[0];
			$secondS = $sortArray[1];
		}
				
		//update
		
		if ($newArray == null) {
			$newArray[0] = $firstA;
			$newArray[1] = $secondA;
		} else {
			$newArray[count($newArray)-1] = $firstA;
			$newArray[count($newArray)] = $secondA;
		}
		
		$array[0] = $firstA;
		$array[1] = $secondA;
		
		$sortArray[0] = $firstS;
		$sortArray[1] = $secondS;
		
		return putInPlace(array_slice($array,1,count($array)),array_slice($sortArray,1,count($sortArray)),$newArray);
	}
}
?>