<?php 
    class user{
        private $table = "user";

        public $dbConnect;
        private $id;
        private $name;
        private $password;
        private $level;
        private $visible;

        public function __construct(){
            $db = new Database();
            $this->dbConnect = $db->getConnection();
        }

        public function getAll(){
            // $sql = "SELECT * FROM user";
            $sql = "SELECT * FROM $this->table";
            $getData = $this->dbConnect->prepare($sql);
            $getData->execute();
            $data = $getData->fetchAll(PDO::FETCH_ASSOC);
            return $data;            
        }

        public function getByid($id){
            $this->id = $id;
            
            // $sql = "SELECT * FROM user";
            $sql = "SELECT * FROM $this->table WHERE id = :id";
            $getData = $this->dbConnect->prepare($sql);
            $getData->bindParam(':id', $this->id);
            $getData->execute();
            $data = $getData->fetch(PDO::FETCH_ASSOC);
            return $data;            
            
            //edit 頁面
            //把 getByid data 放到form表單內
            //
        }

        public function check($input)
        {
            $this->name = $input['name'];
            $this->password = $input['password'];
            $sql = "SELECT * FROM $this->table WHERE name = :name AND 
            password = :password";
            //echo "$sql";
            $getData = $this->dbConnect->prepare($sql);
            $getData->bindParam(':name', $this->name);
            $getData->bindParam(':password', $this->password);
            $getData->execute();
            $data = $getData->fetch(PDO::FETCH_ASSOC);
            if ($data) {
                return $data;
            } else {
                return "error";
            }
        }

        

        public function addOne($input){
            $this->name = $input['name'];
            $this->password = $input['password'];
            $this->level = $input['level'];
            $this->visible = $input['visible'];

            $sql = "INSERT INTO $this->table (name,password,level,visible)
            VALUES (:name, :password,:level, :visible)";
            
            $addData = $this->dbConnect->prepare($sql);
            $addData->bindParam(':name', $this->name);
            $addData->bindParam(':password', $this->password);
            $addData->bindParam(':level', $this->level);
            $addData->bindParam(':visible', $this->visible);
            $addData->execute();
            

        }


        public function update($input){
            $this->id = $input['id'];
            $this->name = $input['name'];
            $this->password = $input['password'];
            $this->level = $input['level'];
            $this->visible = $input['visible'];            
            

            // $sql = "INSERT INTO $this->table (name,file,intro_chinese,intro_english,visible)
            // VALUES (:name, :file, :intro_chinese, :intro_english , :visible)";

            $sql = "UPDATE $this->table SET
            name = :name , password = :password , level = :level ,   
            visible = :visible 
            WHERE id = :id";
            
            // dd($this);

            $addData = $this->dbConnect->prepare($sql);
            $addData->bindParam(':name', $this->name);
            $addData->bindParam(':password', $this->password);
            $addData->bindParam(':level', $this->level);
            $addData->bindParam(':visible', $this->visible);
            $addData->bindParam(':id', $this->id);
            $addData->execute();            

        }

        public function delete($id){
            $this->id = $id;
            $sql = "DELETE FROM $this->table WHERE id = :id";
            $delData = $this->dbConnect->prepare($sql);
            $delData->bindParam(':id', $this->id);
            $delData->execute();            
        }

        



    }

?>