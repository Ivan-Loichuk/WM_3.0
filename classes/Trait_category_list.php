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
            'office' => 5
        );
        private $t_category_list = array(
            0 => 'шафи-купе',
            1 => 'кухні',
            2 => 'спальні',
            3 => 'дитячі кімнати',
            4 => 'різне',
            5 => 'офісні меблі',
        );

        function getAllCategory(){
            return $this->categoty_list;
        }
        function getCategory($id){
            return $this->categoty_list[$id];
        }

        function getTranslatedCategory(){
            return $this->t_category_list;
        }

    }
