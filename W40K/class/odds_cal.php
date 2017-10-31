<?php

class odds_cal {
    
    public $isAlive = true;
    public $BS;    
    public $SHOTS;
    public $WEAPON_STRENGTH;
    public $WEAPON_DAMAGE;
    public $WEAPON_AP;
    public $TARGET_TOUGHNESS;
    public $TARGET_SAVE;
    public $TARGET_INVUL;
    
        function __construct($BS,$SHOTS,$WEAPON_STRENGTH,$WEAPON_DAMAGE,$WEAPON_AP,$TARGET_TOUGHNESS,$TARGET_SAVE,$TARGET_INVUL) {
        
        $this->BS = $BS;
        $this->SHOTS = $SHOTS;
        $this->STRENGTH = $WEAPON_STRENGTH;
        $this->DAMAGE = $WEAPON_DAMAGE;
        $this->AP = $WEAPON_AP;
        $this->TOUGHNESS = $TARGET_TOUGHNESS;
        $this->SAVE = $TARGET_SAVE;
        $this->INVUL = $TARGET_INVUL;
        
        if(is_numeric($this->BS)) {
            
        }
        
    }
    
    function calculate_hits() {

    if($this->BS=='6') {
        $CHANCE_TO_HIT=16.667;
        $CHANCE=1/6*$this->SHOTS;
        $SHOW_HITS =number_format($CHANCE,3);
    }       
    elseif($this->BS=='5') {
        $CHANCE_TO_HIT=16.667*2;
        $CHANCE=2/6*$this->SHOTS;
        $SHOW_HITS =number_format($CHANCE,3);
    }      
    elseif($this->BS=='4') {
        $CHANCE_TO_HIT=16.667*3;
        $CHANCE=3/6*$this->SHOTS;
        $SHOW_HITS =number_format($CHANCE,3);
    }     
    elseif($this->BS=='3') {
        $CHANCE_TO_HIT=16.667*4;
        $CHANCE=4/6*$this->SHOTS;
        $SHOW_HITS =number_format($CHANCE,3);
    }
    elseif($this->BS=='2') {
        $CHANCE_TO_HIT=16.667*5;
        $CHANCE=5/6*$this->SHOTS;
        $SHOW_HITS =number_format($CHANCE,3);
    }  
    elseif($this->BS=='1') {
        $CHANCE_TO_HIT=16.667*6;
        $CHANCE=6/6*$this->SHOTS;
        $SHOW_HITS =number_format($CHANCE,3);
    }      
    
    $this->SHOW_HITS= $SHOW_HITS;
    $this->CHANCE_TO_HIT= $CHANCE_TO_HIT;
     
    
    }
    
    function calculate_wounds() {  
        
    if($this->STRENGTH + $this->TOUGHNESS >= $this->STRENGTH) {
    //DOUBLE 2+
        $this->WOUNDS_ON=2;
        $CHANCE_TO_WOUND=16.667*5;        
        $CHANCE=5/6*$this->SHOW_HITS;
        $SHOW_WOUNDS =number_format($CHANCE,3);        
        
    }

    if($this->STRENGTH > $this->TOUGHNESS) {
        //3+
        $this->WOUNDS_ON=3;
        $CHANCE_TO_WOUND=16.667*4;
        $CHANCE=4/6*$this->SHOW_HITS;
        $SHOW_WOUNDS =number_format($CHANCE,3);           
        
    }
    if($this->STRENGTH == $this->TOUGHNESS) {
        //TO WOUND = 4+
        $this->WOUNDS_ON=4;
        $CHANCE_TO_WOUND=16.667*3;
        $CHANCE=3/6*$this->SHOW_HITS;
        $SHOW_WOUNDS =number_format($CHANCE,3);           
        
    }
    if($this->STRENGTH < $this->TOUGHNESS) {
        // 5+
        $this->WOUNDS_ON=5;
        $CHANCE_TO_WOUND=16.667*2;
        $CHANCE=2/6*$this->SHOW_HITS;
        $SHOW_WOUNDS =number_format($CHANCE,3);  
        
    }    
    if($this->STRENGTH + $this->TOUGHNESS <= $this->STRENGTH) {
    //STR HALF OR LESS THAN T
        $this->WOUNDS_ON=6;
        $CHANCE_TO_WOUND=16.667;
        $CHANCE=1/6*$this->SHOW_HITS;
        $SHOW_WOUNDS =number_format($CHANCE,3);           
        
    }
    
    if($this->DAMAGE>1) {
        $this->SHOW_WOUNDS=$this->SHOW_WOUNDS*$this->DAMAGE;
    }  
    
    $this->SHOW_WOUNDS= $SHOW_WOUNDS;
    $this->CHANCE_TO_WOUND= $CHANCE_TO_WOUND;    
    
        
}  

function calculate_unsaved() {
    
        if($this->AP == 1) {
            $this->SAVE++;
        }
        elseif($this->AP == 2) {
            $this->SAVE++;
            $this->SAVE++;
        }     
        elseif($this->AP == 3) {
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
        }        
        elseif($this->AP == 4) {
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
        }      
        elseif($this->AP == 5) {
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
        }       
        elseif($this->AP == 6) {
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
            $this->SAVE++;
        }
        
    if($this->SAVE>6) {

        $CHANGE_TO_UNSAVE=16.667*6;        
        $CHANCE=6/6*$this->SHOW_WOUNDS;
        $SHOW_UNSAVE =number_format($CHANCE,3);          
    }
    
    if($this->SAVE==6) {

        $CHANGE_TO_UNSAVE=16.667*5;       
        $CHANCE=5/6*$this->SHOW_WOUNDS;
        $SHOW_UNSAVE =number_format($CHANCE,3);        
    }      
    
    elseif($this->SAVE==5) {

        $CHANGE_TO_UNSAVE=16.667*4;       
        $CHANCE=4/6*$this->SHOW_WOUNDS;
        $SHOW_UNSAVE =number_format($CHANCE,3);
        
    }     

    elseif($this->SAVE==4) {

        $CHANGE_TO_UNSAVE=16.667*3;        
        $CHANCE=3/6*$this->SHOW_WOUNDS;
        $SHOW_UNSAVE =number_format($CHANCE,3);
        
    } 
    
    elseif($this->SAVE==3) {

        $CHANGE_TO_UNSAVE=16.667*2;        
        $CHANCE=2/6*$this->SHOW_WOUNDS;
        $SHOW_UNSAVE =number_format($CHANCE,3);        
        
    }
    
    elseif($this->SAVE==2) {

        $CHANGE_TO_UNSAVE=16.667*1;        
        $CHANCE=1/6*$this->SHOW_WOUNDS;
        $SHOW_UNSAVE =number_format($CHANCE,3);
        
    }    
    
    $this->SHOW_UNSAVE= $SHOW_UNSAVE;
    $this->CHANCE_TO_UNSAVE= $CHANGE_TO_UNSAVE;       
    
}

    function show_results() {
        
        require(__DIR__ . '/../views/odds/odds-view.php');  
        
    }

}
