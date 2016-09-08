<?php 
 class Player {
   private $name, $blood, $mana;
   
   public function __construct($new_name) {
     $this->name = $new_name;
     $this->blood = 100;
     $this->mana = 40;
   }
   
   public function get_name() {
     return $this->name;
   }
  
   public function set_name($input_name) {
     $this->name = $input_name;
   }
  
   public function get_blood() {
     return $this->blood;
   }
  
   public function get_mana() {
     return $this->mana;
   }
   
   public function attack() {
     $this->mana = $this->mana - 10;
   }
   
   public function defend() {
     $this->blood = $this->blood - 30;
   }
 }
$players = [];
echo "# ============================== #
# Welcome to the Battle Arena #
# -----------------------------------#
# Description: #
# 1 type 'new' to create a character #
# 2. type 'start' to begin the fight #
# -----------------------------------#
# Current Player: #
# - #
# * Max player 2 or 3 #
# -----------------------------------#

enter type :";
fscanf(STDIN, "%s\n", $input);
if($input=="new"){
  echo"put player name :";
  fscanf(STDIN, "%s\n", $input_namme);
  echo "
# ============================== #
# Welcome to the Battle Arena #
# -----------------------------------#
# Current Player: #
# - ".$input_namme."#
# * Max player 2 or 3 #
# -----------------------------------#";
  
  $players[] = new Player($input_namme);
  $players[0]->get_name();
  $players[0]->get_blood();
  $players[0]->get_mana();

  echo"
  put player name :";
  fscanf(STDIN, "%s\n", $put_namme);
  echo "
# ============================== #
# Welcome to the Battle Arena #
# -----------------------------------#
# Description: #
# 1. type 'start' to begin the fight #
# -----------------------------------#
# Current Player: #
# - ".$input_namme."#
# - ".$put_namme."#
# * Max player 2 or 3 #
# -----------------------------------#
  ";

  $players[] = new Player($put_namme);
  $players[1]->get_blood();
  $players[1]->get_mana();

  $players[0] = $input_namme;
  $players[1] = $put_namme;

  echo"
  write start :";
  fscanf(STDIN, "%s\n", $start);
  if($start="start"){
        echo "# ============================== #
        # Welcome to the Battle Arena #
        # -------------------------------------#
        ";
        echo "Battle Start:";
        echo"
          who will attack:";
          fscanf(STDIN, "%s\n", $attack);
        echo"
          who attacked:";
          fscanf(STDIN, "%s\n", $attacked);

        echo "# ============================== #
        # Welcome to the Battle Arena #
        # -------------------------------------#
        ";
        echo "Battle Start:";
        echo"
          who will attack: ".$attack;
        echo"
          who attacked: ".$attacked;

        if($attack==$players[0]){
          $players[0] = new Player($attack);
          $players[0]->attack();
          $players[0]->defend();
          $players[0]->get_mana();
          $players[0]->get_blood();
        }elseif ($attack==$players[1]) {
          $players[1] = new Player($attack);
          $players[1]->attack();
          $players[1]->defend();
          $players[1]->get_mana();
          $players[1]->get_blood();
        }
        echo"
        Description: 
        ".$attack.": manna = ".$players[0]->get_mana()." Blood = ".$players[0]->get_blood();
    }else{
      echo "string";
    }
  }elseif ($input=="start") {
    echo "you must be create a character";
  }else{
    echo "
    type not found
    ";
  }
 
?>