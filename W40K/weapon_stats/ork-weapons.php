<?php

if($UNIT_WEAPON=='Kombi-weapon with Rokkit Launcha') {
    $UNIT_WEAPON='Rokkit Launcha';
}
if($UNIT_WEAPON=='Kombi-weapon with Skorcha') {
    $UNIT_WEAPON='Skorcha';
}

        if($UNIT_WEAPON=='Twin Big Shoota') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Assault 6';
            $WEAPON_STR=5;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
        
    }
    
        if($UNIT_WEAPON=='Kustom Klaw') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='x2';
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="3"; 
        
    }    

        if($UNIT_WEAPON=='Stickbomb') {
            $WEAPON_RANGE=6;
            $WEAPON_TYPE='Grenade 1D6';
            $WEAPON_STR=3;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
        
    }  
    
        if($UNIT_WEAPON=='Shoota') {
            $WEAPON_RANGE=18;
            $WEAPON_TYPE='Assault 2';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
        
    }  
    
        if($UNIT_WEAPON=='Sluga') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Pistol 1';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
        
    }   
    
        if($UNIT_WEAPON=='Choppa') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='User';
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
        
        $WEAPON_ABILITY="Each time the bearer fights, it can make 1 additional attack with this weapon.";    
            
    }    
    
        if($UNIT_WEAPON=='Big Shoota') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Assault 3';
            $WEAPON_STR=5;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
        
    }
    
        if($UNIT_WEAPON=='Rokkit Launcha') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Assault 1';
            $WEAPON_STR=8;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="3"; 
        
    }

        if($UNIT_WEAPON=='Kustom Shoota') {
            $WEAPON_RANGE=18;
            $WEAPON_TYPE='Assault 4';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
        
    } 
    
        if($UNIT_WEAPON=='Skorcha') {
            $WEAPON_RANGE=8;
            $WEAPON_TYPE='Assault 1D6';
            $WEAPON_STR=5;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1"; 
            
            $WEAPON_ABILITY='This weapon automatically hits its target.';
        
    }     
    
        if($UNIT_WEAPON=='Big Choppa') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+2';
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="2"; 
        
    }  

        if($UNIT_WEAPON=='Power Klaw') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='x2';
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D3"; 
        
    }      

        if($UNIT_WEAPON=='Killsaw') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='x2';
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="2"; 
            
        $WEAPON_ABILITY='When attacking with this weapon, you must subtract 1 from the hit roll.';    
        
    }  
    
        if($UNIT_WEAPON=='Power Stabba') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='User';
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1"; 
                    
    }    
    
        if($UNIT_WEAPON=='Kopta Rokkits') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Assault 2';
            $WEAPON_STR=8;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="3"; 
        
    }   
    
        if($UNIT_WEAPON=='Kustom Mega-blasta') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Assault 1';
            $WEAPON_STR=8;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D3"; 
            
        $WEAPON_ABILITY="On a hit roll of 1, the bearer suffers a mortal wound.";    
        
    }   
    
        if($UNIT_WEAPON=='Spinnin’ Blades') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+1';
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
            
        $WEAPON_ABILITY="Make D3 hit rolls for each attack made with this weapon, instead of 1."   ; 
                    
    }  

        if($UNIT_WEAPON=='Bigbomm') {
            $WEAPON_RANGE=14;
            $WEAPON_TYPE='Bomb';
            $WEAPON_STR='+1';
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1D6"; 
            
        $WEAPON_ABILITY="Each bigbomm can only be used once per battle.";    
        //Bigbomm: A Deffkopta equipped with a bigbomm can drop it as it flies over enemy units in its Movement phase. 
        //After the Deffkopta has moved, pick one enemy unit that it flew over. 
        //Then, roll a D6 for each model in the enemy unit (up to a maximum of 5 dice). 
        //For each roll of 5+, the target unit suffers 1 mortal wound. 
        //It can only do this once per battle.
                    
    }   
    
        if($UNIT_WEAPON=='Attack Squig') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='4';
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1"; 
            
        $WEAPON_ABILITY="Each time a model with an attack squig fights, it can make 2 additional attacks with this weapon."; 
                    
    }    