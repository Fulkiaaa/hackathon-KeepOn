<?php
    namespace models;


    class BaseModel
    {
        protected ?\App\utils\Database $db = null;


        public function __construct(
            \App\utils\Database $db,
        ) {
            $this->db = $db;
        }
    }
?>