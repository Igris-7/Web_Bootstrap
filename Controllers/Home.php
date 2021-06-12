<?php

    class Home extends Controllers{

        public function __construct(){
            parent::__construct();
        }

        public function home($params){
            $data['page_id'] = 1;
            $data['page_tag'] = "Home"; //información de la vista 
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente, magni aliquid esse reprehenderit quis laboriosam? Eaque, quidem odit earum rem aperiam ducimus, debitis velit, assumenda provident obcaecati inventore. Deleniti, animi.";
            $this->views->getView($this, "home", $data);
        }

    }

?>