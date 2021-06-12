<?php
    // Es para comunicar el controlador con el modelo
    class Controllers{

        public function __construct(){
            //variable creada e instanciada
            $this->views = new Views(); 
            $this->loadModel();
        }

        //Para cargar los modelos
        public function loadModel(){
            $model = get_class($this)."Model"; //HomeModel
            $routClass = "Models/".$model.".php"; //fijarse mayusculas en Linux
            if(file_exists($routClass)){
                require_once($routClass);
                $this->model = new $model();
            }
        }

    }

?>