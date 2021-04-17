<?php

    class autores extends Model{
        static $autores = [
            ['id'=>1,'author'=>'Abraham Silberschatz','nationality'=>'Israelis / American',
            'birth_year'=>'1952','fields'=>'Database Systems, Operating Systems','books__book_id' => '976','books__title' => 'Abraham Silberschatz'],
            ['id'=>2,'author'=>'Andrew S. Tanenbaum','nationality'=>'Dutch / American',
            'birth_year'=>'1944','fields'=>'Distributed computing, Operating Systems','books__book_id' => '1376','books__title' => 'Abraham Silberschatz']
        ];
     
        public static function all() { 
            
            return self::$autores; 
          }
        
          public static function find($id) {
            foreach (self::$autores as $key => $autor)
              if ($autor['id'] == $id) return $autor;
            return [];
          }
        
    }

?>