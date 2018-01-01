<?php

class Example
{
    public $mobile = '01765061564';
    protected  $district = 'Laxmipur';
    private  $division = 'Noakhali';

    public function four(){
        echo 'In Four';

    }
    protected function five(){
        echo 'In Five';
    }
    private function six(){
        echo 'In Six';
    }
    public function createOddEvenSeries($data){
//        echo '<pre>';
//        print_r($data);
      $starting_number = $data['starting_number'];
      $ending_number = $data['ending_number'];
      $choice = $data['choice'];
      $res='';


      for($i=$starting_number; $i<$ending_number; $i++){
          if($choice == 'odd'){
              if($i%2 !=0){
                  $res .=$i;
              }
          }elseif($choice == 'even'){
              if($i%2 ==0){
                  $res .=$i;
              }
          }
        }

        return $res;
    }

}