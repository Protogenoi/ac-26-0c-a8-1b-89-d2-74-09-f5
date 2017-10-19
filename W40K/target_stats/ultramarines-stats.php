<?php

    if($TARGET_UNIT=='Marneus Calgar') {
        $T_MOVE=5;
        $T_WS=2;
        $T_BS=2;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=7;
        $T_ATTACKS=5;
        $T_LD=9;
        $T_SAVE=2; 
        $T_INVUL=4;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Master Tactician","Armour of Antilochus","Teleport Strike","Chapter Master");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","Ultramarines");
        $T_KEYWORDS=array("Character","Infantry","Chapter Master","Terminator","Marneus Calgar");         
        
    }
    
    if($TARGET_UNIT=='Captain in Gravis armour') {
        $T_MOVE=5;
        $T_WS=2;
        $T_BS=2;
        $T_STR=4;
        $T_TOUGHNESS=5;
        $T_WOUNDS=6;
        $T_ATTACKS=5;
        $T_LD=9;
        $T_SAVE=3; 
        $T_INVUL=4;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Rites of Battle","Iron Halo");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Character","Infantry","Mk X Gravis","Primaris","Captain");         
        
    }
    
    if($TARGET=='Chaplain') {
        $T_MOVE=6;
        $T_WS=2;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=4;
        $T_ATTACKS=3;
        $T_LD=9;
        $T_SAVE=3; 
        $T_INVUL=4;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Rosarius","Litanies of Hate","Jump Pack Assault","Spiritual Leaders");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Character","Infantry","Chaplain");         
        
    } 
    
    if($TARGET=='Techmarine') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=2;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=4;
        $T_ATTACKS=3;
        $T_LD=8;
        $T_SAVE=2; 
        $T_INVUL=0;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Blessing of the Omnissiah");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Character","Infantry","Techmarine");         
        
    }     
    
    if($TARGET_UNIT=='Primaris Lieutenants') {
        $T_MOVE=6;
        $T_WS=2;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=5;
        $T_ATTACKS=4;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL=0; 
        
        $T_ABILITIES=array("And They Shall Know No Fear","Company Heroes","Tactical Precision");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Character","Infantry","Primaris","Lieutenants");         
        
    }    
    
    if($TARGET_UNIT=='Primaris Ancient') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=5;
        $T_ATTACKS=4;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL=0;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Astartes Banner");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Character","Infantry","Primaris","Ancient");          
        
    } 
    
    if($TARGET_UNIT=='Chapter Ancient') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=4;
        $T_ATTACKS=3;
        $T_LD=9;
        $T_SAVE=2; 
        $T_INVUL=0;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Astartes Banner");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Character","Infantry","Ancient","Chapter Ancient");          
        
    }     
    
    if($TARGET_UNIT=='Chapter Champion') {
        $T_MOVE=6;
        $T_WS=2;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=4;
        $T_ATTACKS=4;
        $T_LD=9;
        $T_SAVE=2; 
        $T_INVUL=0;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Honour or Death");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Character","Infantry","Chapter Champion");          
        
    }   
    
    if($TARGET_UNIT=='Honour Guard') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=9;
        $T_SAVE=2; 
        $T_INVUL=0;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Honour Guard");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Honour Guard");          
        
    }      
    
    if($TARGET_UNIT=='Intercessor Squad') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=7;
        $T_SAVE=3; 
        $T_INVUL=0;    

        $T_ABILITIES=array("And They Shall Know No Fear","Combat Squads","Auxiliary Grenade Launcher");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Primaris","Intercessor Squad");          
        
    }  
    
    if($TARGET_UNIT=='Intercessor Sergeant') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=2;
        $T_ATTACKS=3;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL=0;   
        
        $T_ABILITIES=array("And They Shall Know No Fear","Combat Squads","Auxiliary Grenade Launcher");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Primaris","Intercessor Squad");           
        
    }   
    
    if($TARGET_UNIT=='Tactical Squad') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=7;
        $T_SAVE=3; 
        $T_INVUL=0;    
        
        $T_ABILITIES=array("And They Shall Know No Fear","Combat Squads");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Tactical Squad");           
        
    } 

    if($TARGET_UNIT=='Tactical Marine Sergeant') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=1;
        $T_ATTACKS=2;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL=0;        
        
        $T_ABILITIES=array("And They Shall Know No Fear","Combat Squads");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Tactical Squad");           
        
    } 

    if($TARGET_UNIT=='Scout Squad') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=1;
        $T_ATTACKS=1;
        $T_LD=7;
        $T_SAVE=4; 
        $T_INVUL=0;  
        
        $T_ABILITIES=array("And They Shall Know No Fear","Concealed Positions","Combat Squads","Camo Cloaks");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Scout","Scout Squad");           
        
    } 

    if($TARGET_UNIT=='Scout Sergeant') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=1;
        $T_ATTACKS=2;
        $T_LD=8;
        $T_SAVE=4; 
        $T_INVUL=0;       
        
        $T_ABILITIES=array("And They Shall Know No Fear","Concealed Positions","Combat Squads","Camo Cloaks");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Scout","Scout Squad");          
        
    }     
    
    if($TARGET_UNIT=='Inceptor Squad') {
        $T_MOVE=10;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=5;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=7;
        $T_SAVE=3; 
        $T_INVUL=0;       
        
        $T_ABILITIES=array("And They Shall Know No Fear","Crushing Charge","Meteoric Descent","Combat Squads");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Jump Pack","Mk X Gravis","Primaris","Fly","Inceptor Squad");          
        
    }    
    
    if($TARGET_UNIT=='Inceptor Sergeant') {
        $T_MOVE=10;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=5;
        $T_WOUNDS=2;
        $T_ATTACKS=3;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL=0;       
        
        $T_ABILITIES=array("And They Shall Know No Fear","Crushing Charge","Meteoric Descent","Combat Squads");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Jump Pack","Mk X Gravis","Primaris","Fly","Inceptor Squad");          
        
    }   
    
    if($TARGET_UNIT=='Hellblaster Squad') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=2;
        $T_ATTACKS=2;
        $T_LD=7;
        $T_SAVE=3; 
        $T_INVUL=0;       
        
        $T_ABILITIES=array("And They Shall Know No Fear","Combat Squads");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Primaris","Hellblaster Squad");          
        
    }     
      
    if($TARGET_UNIT=='Hellblaster Sergeant') {
        $T_MOVE=6;
        $T_WS=3;
        $T_BS=3;
        $T_STR=4;
        $T_TOUGHNESS=4;
        $T_WOUNDS=2;
        $T_ATTACKS=3;
        $T_LD=8;
        $T_SAVE=3; 
        $T_INVUL=0;       
        
        $T_ABILITIES=array("And They Shall Know No Fear","Combat Squads");
        $T_FACTION_KW=array("Imperium","Adeptus Astartes","CHAPTER");
        $T_KEYWORDS=array("Infantry","Primaris","Hellblaster Squad");          
        
    }  
