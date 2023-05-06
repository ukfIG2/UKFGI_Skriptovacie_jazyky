
<?php
    class Menu{
        public $menu;

        function __construct($menu){
            $this->menu = $menu;
        }
        function get_menu(){
            return $this->menu;
        }
    }
    $Header_menu = new Menu(array("HOME"=>"index.php",
                                  "ABOUT"=>"about.php",
                                  "SERVICES"=>"services.php",
                                  "WEB"=>"index.php",
                                  "ELEMENTS"=>"index.php",
                                  "CONTACT"=>"contact.php",
                        ));

    function print_menu($menu){
        $menu_items = $menu->get_menu();
        foreach($menu_items as $page=>$url){
            echo '<li class="nav-item"><a class="nav-link" href="'.$url.'">'.$page.'</a></li>';
        }
    }
    
?>