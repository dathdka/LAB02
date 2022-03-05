<?php
    class person 
    {
        private $name;
        private $nationalID;

        public function __construct($name, $nationalID)
        {
            $this->name = $name;
            $this->nationalID = $nationalID;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getNationalID()
        {
            return $this->nationalID;
        }

            
        public function setName($newName)
        {
            $this->name = strtoupper($newName);
        }
    }
?>