<?php

    if($TARGET_UNIT=='Eldrad Ulthran') {
        $T_MOVE=7;
        $T_WS=2;
        $T_BS=2;
        $T_STR=3;
        $T_TOUGHNESS=4;
        $T_WOUNDS=6;
        $T_ATTACKS=2;
        $T_LD=9;
        $T_SAVE=6; 
        $T_INVUL =3;
        
        $T_ABILITIES=array("Ancient Doom","Battle Focus","Runes of the Farseer","Ghosthelm","Armour of the Last Runes","Spirit Link");
        $T_FACTION_KW=array("Aeldari","Asuryani","Warhost","Ulthwe");
        $T_KEYWORDS=array("Character","Infantry","Psyker","Eldrad Ulthran");            
        
    } 
    
    if($TARGET_UNIT=='Warlock') {
        $T_MOVE=7;
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=8;
        $T_SAVE=6; 
        $T_INVUL =4;
      
        $T_ABILITIES=array("Ancient Doom","Battle Focus","Destructor","Rune Armour");
        $T_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $T_KEYWORDS=array("Character","Infantry","Psyker","Warlock");         
        
    }     
        
    if($TARGET_UNIT=='Guardian Defenders') {
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=7;
        $T_SAVE=5; 
        $T_INVUL =0;
        
    }   
    
    if($TARGET_UNIT=='Rangers') {
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=7;
        $T_SAVE=5; 
        $T_INVUL =0;
        
    }  
    
    if($TARGET_UNIT=='Dire Avengers') {
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=8;
        $T_SAVE=4; 
        $T_INVUL =0;
        
    } 

    if($TARGET_UNIT=='Dire Avengers Exarch') {
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=8;
        $T_SAVE=4; 
        $T_INVUL =0;
        
    }    
    
    if($TARGET_UNIT=='Dark Reapers') {
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL =0;
        
    }    
    
    if($TARGET_UNIT=='Dark Reapers Exarch') {
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL =0;
        
    }    

