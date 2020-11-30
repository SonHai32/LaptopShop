<?php 
class BaseController{
    protected $folder;

    function render($file, $data = array()){
        $view_file = 'Views/' . $this->folder . '/' . $file . '.html';
        if(is_file($view_file)){
            extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            require_once('Views/layouts/application.php');
        }else{
            header('Location: index.php?controller=pages&action=error');
        }
    }

}
?>