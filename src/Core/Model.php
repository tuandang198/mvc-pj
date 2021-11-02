<?php
    namespace MVC\Core;
    class Model
    {
        public function getProperties($object)
        {
            return get_object_vars($object);
        }
    }
?>