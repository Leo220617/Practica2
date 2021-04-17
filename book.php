<?php

    class book extends Model{
        static $books = [
            ['id'=>'1','title'=>'Operating System Concepts','edition'=>'9th',
            'copyright'=>'2012','language'=>'ENGLISH','pages' => '976','author' => 'Abraham Silberschatz', 'authorid' => 1,'publisher' => 'John Wiley & Sons', 'publisherid' => '1'],
            ['id'=>'2','title'=>'Database System Concepts','edition'=>'6th',
            'copyright'=>'2010','language'=>'ENGLISH','pages' => '1376','author' => 'Abraham Silberschatz', 'authorid' => 1,'publisher' => 'John Wiley & Sons', 'publisherid' => '1'],
            ['id'=>'3','title'=>'Computer Networks','edition'=>'5th',
            'copyright'=>'2010','language'=>'ENGLISH','pages' => '960','author' => 'Andrew S. Tanenbaum', 'authorid' => 2,'publisher' => 'Pearson Education', 'publisherid' => '1'],
            ['id'=>'4','title'=>'Modern Operating Systems','edition'=>'4th',
            'copyright'=>'2014','language'=>'ENGLISH','pages' => '1136','author' => 'Andrew S. Tanenbaum', 'authorid' => 2,'publisher' => 'Pearson Education', 'publisherid' => '1']
        ];

        public static function all() { 
            return self::$books; 
          }
        
          public static function find($id) {
            foreach (self::$books as $key => $book)
              if ($book['id'] == $id) return $book;
            return [];
          }
        
    }

?>