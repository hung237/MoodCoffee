<?php
    namespace App\Components;

    class Recusive{
        private $data;
        private $htmlSelect = "";
        private $htmlSelectMenu = "";
        function __construct($data){
            $this->data=$data;
        }
        function categoryRecusive($parent_id,$id = 0, $text = ""){
            foreach($this->data as $value){
                if($value['parent_id'] == $id){
                    if(!empty($parent_id) && $parent_id == $value['id']){
                        $this->htmlSelect.="<option selected value='".$value['id']."'>".$text.$value['name']."</option>";
                        $this->categoryRecusive($parent_id, $value['id'], $text."---");
                    }
                    else{
                        $this->htmlSelect.="<option value='".$value['id']."'>".$text.$value['name']."</option>";
                        $this->categoryRecusive($parent_id, $value['id'], $text."---");
                    }
                }
            }
            return $this->htmlSelect;
        }
        function categoryRecusiveMenu($parent_id,$id = 0, $text = ""){
            foreach($this->data as $value){
                if($value['parent_id'] == $id){
                    if(!empty($parent_id) && $parent_id == $value['id']){
                        $this->htmlSelectMenu.='<li><a class="dropdown-item" href="/kind/'.$value['id'].'">'.$text.$value['name'].'</a></li>';
                        $this->categoryRecusiveMenu($parent_id, $value['id'], $text."---");
                    }
                    else{
                        $this->htmlSelectMenu.='<li><a class="dropdown-item" href="/kind/'.$value['id'].'">'.$text.$value['name'].'</a></li>';
                        $this->categoryRecusiveMenu($parent_id, $value['id'], $text."---");
                    }
                }
            }
            return $this->htmlSelectMenu;
        }
    }