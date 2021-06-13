<?php 
    class Story{
        private $table = "stories";

        public $dbConnect;
        private $id;
        private $name;
        private $file;
        private $intro_chinese;
        private $intro_english;
        private $visible;

        public function __construct(){
            $db = new Database();
            $this->dbConnect = $db->getConnection();
        }

        public function getAll(){
            // $sql = "SELECT * FROM stories";
            $sql = "SELECT * FROM $this->table";
            $getData = $this->dbConnect->prepare($sql);
            $getData->execute();
            $data = $getData->fetchAll(PDO::FETCH_ASSOC);
            return $data;            
        }

        public function addOne($input){
            $this->name = $input['name'];
            $this->file = $input['file'];
            $this->intro_chinese = $input['intro_chinese'];
            $this->intro_english = $input['intro_english'];
            $this->visible = $input['visible'];

            $sql = "INSERT INTO $this->table (name,file,intro_chinese,intro_english,visible)
            VALUES (:name, :file, :intro_chinese, :intro_english , :visible)";
            
            $addData = $this->dbConnect->prepare($sql);
            $addData->bindParam(':name', $this->name);
            $addData->bindParam(':file', $this->file);
            $addData->bindParam(':intro_chinese', $this->intro_chinese);
            $addData->bindParam(':intro_english', $this->intro_english);
            $addData->bindParam(':visible', $this->visible);
            $addData->execute();
            

        }
        



    }

?>