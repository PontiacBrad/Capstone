<?php

    	Class Syllabus
	{
	        private $syllabus_name;
	        private $syllabus_semester;
	        private $syllabus_year;
	        private $syllabus_filepath;
    
	        public function set_syllabus_name($name)
		{
		        $this->syllabus_name = $name;
        	}
        
        	public function get_syllabus_name()
		{
            		return $this->syllabus_name;
        	}
    	}
?>
