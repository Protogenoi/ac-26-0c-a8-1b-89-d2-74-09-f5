<?php

    if($TARGET_UNIT=='Imotekh the Stormlord') {
        $T_MOVE=5;
        $T_WS=2;
        $T_BS=2;
        $T_STR=5;
        $T_TOUGHNESS=5;
        $T_WOUNDS=6;
        $T_ATTACKS=3;
        $T_LD=10;
        $T_SAVE=2; 
        $T_INVUL =4;
        
        $T_ABILITIES=array("Living Metal","Phaeron of the Sautekh Dynasty","Lord of the Storm","Undying","My Will Be Done","Bloodswarm Necroscarabs","Grand Strategist","Phase Shifter");
        $T_FACTION_KW=array("Necrons","Sautekh");
        $T_KEYWORDS=array("Character","Infantry","Overlord","Imotekh the Stormlord");            
        
    } 
    
    if($TARGET_UNIT=='Overlord') {
        $T_MOVE=5;
        $T_WS=2;
        $T_BS=2;
        $T_STR=5;
        $T_TOUGHNESS=5;
        $T_WOUNDS=5;
        $T_ATTACKS=3;
        $T_LD=10;
        $T_SAVE=3; 
        $T_INVUL=4;
        
        $T_ABILITIES=array("Living Metal","Resurrection Orb","Phase Shifter","My Will Be Done");
        $T_FACTION_KW=array("Necrons","DYNASTY");
        $T_KEYWORDS=array("Character","Infantry","Overlord");            
        
    }  
    
    if($TARGET_UNIT=='Lord') {
        $T_MOVE=5;
        $T_WS=3;
        $T_BS=3;
        $T_STR=5;
        $T_TOUGHNESS=5;
        $T_WOUNDS=4;
        $T_ATTACKS=3;
        $T_LD=10;
        $T_SAVE=3; 
        $T_INVUL=0;
        
        $T_ABILITIES=array("Living Metal","My Lords Will","Resurrection Orb");
        $T_FACTION_KW=array("Necrons","DYNASTY");
        $T_KEYWORDS=array("Character","Infantry","Lord");            
        
    }    
    
    if($TARGET_UNIT=='Cryptec') {
        $T_MOVE=5;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=4;
        $T_ATTACKS=1;
        $T_LD=10;
        $T_SAVE=4; 
        $T_INVUL=5;
        
        $T_ABILITIES=array("Living Metal","Technomancer","Chronometron","Canoptek Cloak");
        $T_FACTION_KW=array("Necrons","DYNASTY");
        $T_KEYWORDS=array("Character","Infantry","Cryptec");            
        
    } 
    
    if($TARGET_UNIT=='Necron Warriors') {
        $T_MOVE=5;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=10;
        $T_SAVE=4; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Reanimation Protocols");
        $T_FACTION_KW=array("Necrons","DYNASTY");
        $T_KEYWORDS=array("Infantry","Warriors");            
        
    }   

    if($TARGET_UNIT=='Immortals') {
        $T_MOVE=5;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=10;
        $T_SAVE=3; 
        $T_INVUL=0;
        
        $T_ABILITIES=array("Reanimation Protocols");
        $T_FACTION_KW=array("Necrons","DYNASTY");
        $T_KEYWORDS=array("Infantry","Immortals");            
        
    }
    
    if($TARGET_UNIT=='Lychguard') {
        $T_MOVE=5;
        $T_WS=3;
        $T_BS=3;
        $T_STR=5;
        $T_TOUGHNESS=5;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=10;
        $T_SAVE=3; 
        $T_INVUL=4;
        
        $T_ABILITIES=array("Reanimation Protocols","Guardian Protocols","Dispersion Shield");
        $T_FACTION_KW=array("Necrons","DYNASTY");
        $T_KEYWORDS=array("Infantry","Lychguard");            
        
    } 
    
    if($TARGET_UNIT=='Canoptek Wraiths') {
        $T_MOVE=12;
        $T_WS=3;
        $T_BS=3;
        $T_STR=6;
        $T_TOUGHNESS=5;
        $T_WOUNDS=3;
        $T_ATTACKS=3;
        $T_LD=10;
        $T_SAVE=4; 
        $T_INVUL=3;
        
        $T_ABILITIES=array("Wraith Form");
        $T_FACTION_KW=array("Necrons","Canoptek","DYNASTY");
        $T_KEYWORDS=array("Beasts","Canoptek Wraiths");            
        
    } 

    if($TARGET_UNIT=='Canoptek Scarabs') {
        $T_MOVE=10;
        $T_WS=4;
        $T_BS=0;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=3;
        $T_ATTACKS=4;
        $T_LD=10;
        $T_SAVE=6; 
        $T_INVUL=0;
        
        $T_ABILITIES=array("-");
        $T_FACTION_KW=array("Necrons","Canoptek","DYNASTY");
        $T_KEYWORDS=array("Swarm","Fly","Canoptek Scarabs");            
        
    }  
    
    if($TARGET_UNIT=='Annihilation Barge') {
        $T_MOVE=12;
        $T_WS=6;
        $T_BS=3;
        $T_STR=5;
        $T_TOUGHNESS=6;
        $T_WOUNDS=8;
        $T_ATTACKS=3;
        $T_LD=10;
        $T_SAVE=4; 
        $T_INVUL=0;
        
        $T_ABILITIES=array("Living Metal","Explodes","Quantum Shielding");
        $T_FACTION_KW=array("Necrons","DYNASTY");
        $T_KEYWORDS=array("Vehicle","Fly","Annihilation Barge");            
        
    }      
