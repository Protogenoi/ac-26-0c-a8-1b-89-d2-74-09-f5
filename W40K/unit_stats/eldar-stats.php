<?php
        
    if($UNIT=='Eldrad Ulthran') {
        $U_MOVE=7;
        $U_WS=2;
        $U_BS=2;
        $U_STR=3;
        $U_TOUGHNESS=4;
        $U_WOUNDS=6;
        $U_ATTACKS=2;
        $U_LD=9;
        $U_SAVE=6; 
        $U_INVUL =3;
        
        $U_ABILITIES=array("Ancient Doom","Battle Focus","Runes of the Farseer","Ghosthelm","Armour of the Last Runes","Spirit Link");
        $U_FACTION_KW=array("Aeldari","Asuryani","Warhost","Ulthwe");
        $U_KEYWORDS=array("Character","Infantry","Psyker","Eldrad Ulthran");         
        
    } 
    
    if($UNIT=='Farseer') {
        $U_MOVE=7;
        $U_WS=2;
        $U_BS=2;
        $U_STR=3;
        $U_TOUGHNESS=3;
        $U_WOUNDS=5;
        $U_ATTACKS=2;
        $U_LD=9;
        $U_SAVE=6; 
        $U_INVUL =4;
      
        $U_ABILITIES=array("Ancient Doom","Rune Armour","Ghosthelm","Runes of the Farseer");
        $U_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $U_KEYWORDS=array("Character","Infantry","Psyker","Farseer");         
        
    }     
    
    if($UNIT=='Warlock') {
        $U_MOVE=7;
        $U_WS=3;
        $U_BS=3;
        $U_STR=3;
        $U_TOUGHNESS=3;
        $U_WOUNDS=2;
        $U_ATTACKS=2;
        $U_LD=8;
        $U_SAVE=6; 
        $U_INVUL =4;
        
        $U_ABILITIES=array("Ancient Doom","Battle Focus","Destructor","Rune Armour");
        $U_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $U_KEYWORDS=array("Character","Infantry","Psyker","Warlock");          
        
    }     
        
    if($UNIT=='Guardian Defenders') {
        $U_MOVE=7;
        $U_WS=3;
        $U_BS=3;
        $U_STR=3;
        $U_TOUGHNESS=3;
        $U_WOUNDS=1;
        $U_ATTACKS=1;
        $U_LD=7;
        $U_SAVE=5; 
        $U_INVUL =0;
        
        $U_ABILITIES=array("Ancient Doom","Battle Focus","Crewed Weapons");
        $U_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $U_KEYWORDS=array("Infantry","Guardian Defenders");         
        
    }   
    
    if($UNIT=='Rangers') {
        $U_MOVE=7;
        $U_WS=3;
        $U_BS=3;
        $U_STR=3;
        $U_TOUGHNESS=3;
        $U_WOUNDS=1;
        $U_ATTACKS=1;
        $U_LD=7;
        $U_SAVE=5; 
        $U_INVUL =0;
        
        $U_ABILITIES=array("Ancient Doom","Battle Focus","Appear Unbidden","Cameleoline Cloaks");
        $U_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $U_KEYWORDS=array("Infantry","Rangers");           
        
    }  
    
    if($UNIT=='Dire Avengers') {
        $U_MOVE=7;
        $U_WS=3;
        $U_BS=3;
        $U_STR=3;
        $U_TOUGHNESS=3;
        $U_WOUNDS=1;
        $U_ATTACKS=1;
        $U_LD=8;
        $U_SAVE=4; 
        $U_INVUL =0;
        
        $U_ABILITIES=array("Ancient Doom","Battle Focus","Defence Tactics","Battle of Fortune","Shimmmershield");
        $U_FACTION_KW=array("Aeldari","Asuryani","Aspect Warrior","CRAFTWORLD");
        $U_KEYWORDS=array("Infantry","Dire Avengers");          
        
    } 

    if($UNIT=='Dire Avengers Exarch') {
        $U_MOVE=7;
        $U_WS=3;
        $U_BS=3;
        $U_STR=3;
        $U_TOUGHNESS=3;
        $U_WOUNDS=2;
        $U_ATTACKS=2;
        $U_LD=8;
        $U_SAVE=4; 
        $U_INVUL =4;
        
        $U_ABILITIES=array("Ancient Doom","Battle Focus","Defence Tactics","Battle of Fortune","Shimmmershield");
        $U_FACTION_KW=array("Aeldari","Asuryani","Aspect Warrior","CRAFTWORLD");
        $U_KEYWORDS=array("Infantry","Dire Avengers");         
        
    }    
    
    if($UNIT=='Wraithguard') {
        $U_MOVE=5;
        $U_WS=3;
        $U_BS=3;
        $U_STR=5;
        $U_TOUGHNESS=5;
        $U_WOUNDS=3;
        $U_ATTACKS=1;
        $U_LD=9;
        $U_SAVE=3; 
        $U_INVUL =0;
        
        $U_ABILITIES=array("Ancient Doom","Implaceable");
        $U_FACTION_KW=array("Aeldari","Asuryani","Spirit Host","CRAFTWORLD");
        $U_KEYWORDS=array("Infantry","Wraithguard");            
        
    }     
    
    if($UNIT=='Dark Reapers') {
        $U_MOVE=6;
        $U_WS=3;
        $U_BS=3;
        $U_STR=3;
        $U_TOUGHNESS=3;
        $U_WOUNDS=1;
        $U_ATTACKS=1;
        $U_LD=8;
        $U_SAVE=3; 
        $U_INVUL =0;
        
        $U_ABILITIES=array("Ancient Doom","Inescapable Accuracy","Crack Shot");
        $U_FACTION_KW=array("Aeldari","Asuryani","Aspect Warrior","CRAFTWORLD");
        $U_KEYWORDS=array("Infantry","Dark Reapers");         
        
    }    
    
    if($UNIT=='Dark Reapers Exarch') {
        $U_MOVE=6;
        $U_WS=3;
        $U_BS=3;
        $U_STR=3;
        $U_TOUGHNESS=3;
        $U_WOUNDS=2;
        $U_ATTACKS=2;
        $U_LD=8;
        $U_SAVE=3; 
        $U_INVUL =0;
        
        $U_ABILITIES=array("Ancient Doom","Inescapable Accuracy","Crack Shot");
        $U_FACTION_KW=array("Aeldari","Asuryani","Aspect Warrior","CRAFTWORLD");
        $U_KEYWORDS=array("Infantry","Dark Reapers");           
        
    }    
    
    if($UNIT=='War Walkers') {
        $U_MOVE=10;
        $U_WS=3;
        $U_BS=3;
        $U_STR=5;
        $U_TOUGHNESS=6;
        $U_WOUNDS=6;
        $U_ATTACKS=2;
        $U_LD=8;
        $U_SAVE=4; 
        $U_INVUL =5;
        
        $U_ABILITIES=array("Ancient Doom","Power Field","Scout Vehicle","Explodes");
        $U_FACTION_KW=array("Aeldari","Asuryani","Warhost","CRAFTWORLD");
        $U_KEYWORDS=array("Vehicles","War Walkers");           
        
    }  
    
    if($UNIT=='Wraithlord') {
        $U_MOVE=8;
        $U_WS=3;
        $U_BS=3;
        $U_STR=7;
        $U_TOUGHNESS=7;
        $U_WOUNDS=10;
        $U_ATTACKS=3;
        $U_LD=9;
        $U_SAVE=3; 
        $U_INVUL =0;
        
        $U_ABILITIES=array("Ancient Doom");
        $U_FACTION_KW=array("Aeldari","Asuryani","Spirit Host","CRAFTWORLD");
        $U_KEYWORDS=array("Monster","Wraithlord");           
        
    }  
    
    if($UNIT=='Hemlock Wraithfighter') {
        $U_MOVE="20-60";
        $U_WS=6;
        $U_BS=3;
        $U_STR=6;
        $U_TOUGHNESS=6;
        $U_WOUNDS=12;
        $U_ATTACKS=3;
        $U_LD=8;
        $U_SAVE=3; 
        $U_INVUL =0;
        
        $U_ABILITIES=array("Wings of Khaine","Mindshock Pod","Spirit Stones","Crash and Burn","Hard to Hit","Airborne");
        $U_FACTION_KW=array("Aeldari","Asuryani","Spirit Host","CRAFTWORLD");
        $U_KEYWORDS=array("Vehicle","Fly","Psyker","Wraith Construct","Hemlock Wraithfighter");           
        
    }      

