<?php

    trait Image{
        public $img_url;

        public function getImage(){
            return 'https://image.tmdb.org/t/p/w500' . $this->img_url;
        }

        public function setImage($imageUrl){
            $this->img_url = $imageUrl;
        }

    }

?>