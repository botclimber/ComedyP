<?php
/**
* @example Move ficheiros
*
*
* @package  classes
* @author   Daniel Silva
* @version  1.0
* @access   protected
* @copyright Made by Danyel
*/


function moveFile($name,$tmp,$dir){

	      $extensao = strrchr($name, '.');
				$extensao = strtolower($extensao);

				if(strstr('.mp3;.jpg;.jpeg;.gif;.png', $extensao)){
    			$destino = $dir.$name;

    			if(@move_uploaded_file( $tmp, $destino) === true){
    				return array('name' => $name, 'status' => true);
    			}else{
    				return array('name' => 'not upload', 'status' => false);
    			}
	}
}
