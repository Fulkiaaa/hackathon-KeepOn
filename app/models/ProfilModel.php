<?php
    namespace models;


    class ProfilModel extends BaseModel
    {
        public function createUser(
            Array $data,
        ) {
            return $this->db->insert('utilisateurs', $data);
        }

        public function createProfil(
            Array $data,
        ) {
            return $this->db->insert('profils', $data);
        }

        public function testEmail(
            String $email,
        ) {
            return count($this->db->select(
                'utilisateurs',
                whereQuery: 'UTI_Email = "'.$email.'"',
                limit: [0, 1],
            )) === 0;
        }

        public function selectUserById(
            Int $id,
        ) {
            return $this->db->select('utilisateurs', whereQuery: "UTI_ID = $id");
        }

        public function selectUserByEmail(
            String $email,
        ) {
            return $this->db->select('utilisateurs', whereQuery: "UTI_Email = '$email'");
        }
    }
?>