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
    
    if($TARGET_UNIT=='Farseer') {
        $T_MOVE=7;
        $T_WS=2;
        $T_BS=2;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=5;
        $T_ATTACKS=2;
        $T_LD=9;
        $T_SAVE=6; 
        $T_INVUL =4;
      
        $T_ABILITIES=array("Ancient Doom","Rune Armour","Ghosthelm","Runes of the Farseer");
        $T_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $T_KEYWORDS=array("Character","Infantry","Psyker","Farseer");         
        
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
        $T_MOVE=7;
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=7;
        $T_SAVE=5; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Ancient Doom","Battle Focus","Crewed Weapons");
        $T_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $T_KEYWORDS=array("Infantry","Guardian Defenders");         
        
    }   
    
    if($TARGET_UNIT=='Rangers') {
        $T_MOVE=7;
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=7;
        $T_SAVE=5; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Ancient Doom","Battle Focus","Crewed Weapons");
        $T_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $T_KEYWORDS=array("Infantry","Rangers");         
        
    }  
    
    if($TARGET_UNIT=='Dire Avengers') {
        $T_MOVE=7;
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=8;
        $T_SAVE=4; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Ancient Doom","Battle Focus","Defence Tactics","Battle of Fortune","Shimmmershield");
        $T_FACTION_KW=array("Aeldari","Asuryani","Aspect Warrior","CRAFTWORLD");
        $T_KEYWORDS=array("Infantry","Dire Avengers");         
        
    } 

    if($TARGET_UNIT=='Dire Avengers Exarch') {
        $T_MOVE=7;
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=8;
        $T_SAVE=4; 
        $T_INVUL =4;
        
        $T_ABILITIES=array("Ancient Doom","Battle Focus","Defence Tactics","Battle of Fortune","Shimmmershield");
        $T_FACTION_KW=array("Aeldari","Asuryani","Aspect Warrior","CRAFTWORLD");
        $T_KEYWORDS=array("Infantry","Dire Avengers");         
        
    }  
    
    if($TARGET_UNIT=='Wraithguard') {
        $T_MOVE=5;
        $T_WS=3;
        $T_BS=3;
        $T_STR=5;
        $T_TOUGHNESS=5;
        $T_WOUNDS=3;
        $T_ATTACKS=1;
        $T_LD=9;
        $T_SAVE=3; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Ancient Doom","Implaceable");
        $T_FACTION_KW=array("Aeldari","Asuryani","Spirit Host","CRAFTWORLD");
        $T_KEYWORDS=array("Infantry","Wraithguard");            
        
    }     
    
    if($TARGET_UNIT=='Dark Reapers') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Ancient Doom","Inescapable Accuracy","Crack Shot");
        $T_FACTION_KW=array("Aeldari","Asuryani","Aspect Warrior","CRAFTWORLD");
        $T_KEYWORDS=array("Infantry","Dark Reapers");           
        
    }    
    
    if($TARGET_UNIT=='Dark Reapers Exarch') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=3;
        $T_TOUGHNESS=3;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Ancient Doom","Inescapable Accuracy","Crack Shot");
        $T_FACTION_KW=array("Aeldari","Asuryani","Aspect Warrior","CRAFTWORLD");
        $T_KEYWORDS=array("Infantry","Dark Reapers");           
        
    }

    if($TARGET_UNIT=='War Walkers') {
        $T_MOVE=10;
        $T_WS=3;
        $T_BS=3;
        $T_STR=5;
        $T_TOUGHNESS=6;
        $T_WOUNDS=6;
        $T_ATTACKS=2;
        $T_LD=8;
        $T_SAVE=4; 
        $T_INVUL =5;
        
        $T_ABILITIES=array("Ancient Doom","Power Field","Scout Vehicle","Explodes");
        $T_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $T_KEYWORDS=array("Vehicles","War Walkers");           
        
    } 
    
    if($TARGET_UNIT=='Wraithlord') {
        $T_MOVE=8;
        $T_WS=3;
        $T_BS=3;
        $T_STR=7;
        $T_TOUGHNESS=7;
        $T_WOUNDS=10;
        $T_ATTACKS=3;
        $T_LD=9;
        $T_SAVE=3; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Ancient Doom");
        $T_FACTION_KW=array("Aeldari","Asuryani","Spirit Host","CRAFTWORLD");
        $T_KEYWORDS=array("Monster","Wraithlord");           
        
    }     
    
    if($TARGET_UNIT=='Hemlock Wraithfighter') {
        $T_MOVE="20-60";
        $T_WS=6;
        $T_BS=3;
        $T_STR=6;
        $T_TOUGHNESS=6;
        $T_WOUNDS=12;
        $T_ATTACKS=3;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL =0;
        
        $T_ABILITIES=array("Wings of Khaine","Mindshock Pod","Spirit Stones","Crash and Burn","Hard to Hit","Airborne");
        $T_FACTION_KW=array("Aeldari","Asuryani","Spirit Host","CRAFTWORLD");
        $T_KEYWORDS=array("Vehicle","Fly","Psyker","Wraith Construct","Hemlock Wraithfighter");           
        
    }      