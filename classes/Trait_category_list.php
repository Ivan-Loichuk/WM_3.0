<?php

/**
 * Trait Trait_category_list
 * id to category name relation
 */
    class Trait_category_list {

        private $categoty_list = array(
            'cabinets' => 0,
            'kitchen' => 1,
            'bedroom' => 2,
            'children' => 3,
            'others' => 4,
            'office' => 5,
            'mattresses' => 6
        );

        function getAllCategory(){
            return $this->categoty_list;
        }
        function getCategory($id){
            return $this->categoty_list[$id];
        }
    }
