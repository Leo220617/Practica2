<?php

    class editorial extends Model{
        static $editorial = [
            ['id'=>1,'name'=>'John Wiley & Sons','country' => '	United States','founded'=>'1807',
            'genere'=>'Academic'],
            ['id'=>2,'name'=>'Pearson Education','country' => 'United Kingdom','founded'=>'1844',
            'genere'=>'Education']
        ];
     
        public static function all() { 
            
            return self::$editorial; 
          }
        
          public static function find($id) {
            foreach (self::$editorial as $key => $edit)
              if ($edit['id'] == $id) return $edit;
            return [];
          }
        
    }

?>