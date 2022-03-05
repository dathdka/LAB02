<?php
    require_once("helper.php");

    class User
    {
        private $userName;
        private $userEmail;
        private $userID;
        private $userStatus;
        
        public function __construct($newUser, $email)
        {
            $this->userName = $newUser;
            $this->userEmail = $email;
            $this->userId = GetNextUserID();
            $this->userStatus = 1;
        }

        public function __destruct ()
        {
            $this->userName = NULL;
            $this->userEmail = NULL;
            $this->userId = NULL;
            $this->userStatus = NULL;
        }

        public function GetUserName()
        {
            return $this->userName;
        }

        public function GetUserEmail()
        {
            return $this->userEmail;
        }

        public function GetUserID()
        {
            return $this->userID; 
        }

        public function GetUserStatus()
        {
            return $this->userStatus;
        }

        public function SetUserStatus($input)
        {
            if ($input>1 || $input<0)
                return false;
            $this->userStatus = $input;
            return true;
        }
    }
?>