<?php 
    require_once('base_controller.php');

    class PagesController extends BaseController{
        function __construct()
        {
            $this->folder = 'pages';
        }

        public function home(){
            $data = array(
                'name' => 'Hai',
            );
           
            
            $this->render('home');
        }

        public function error(){
            $this->render('error');
        }

        public function sale(){
            $this->render('sale');
        }

        public function Pants(){
            $this->render('Pants');
        }

    }
    
?>