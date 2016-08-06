<?php
	class Helper {
		public function upload($source,$destination){
			return move_uploaded_file($source, $destination);
		}
	}

?>