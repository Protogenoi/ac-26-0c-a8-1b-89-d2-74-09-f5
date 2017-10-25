<?php

        if($UNIT_WEAPON=='Shuriken Pistol') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Pistol 1';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="Each time you make a wound roll 6+ for this weapon, that hit is resolved with an AP of -3 instead of 0.";    
        
    }
    
            if($UNIT_WEAPON=='Staff of Ulthamar') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="2+";
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1D3";
                    
    }
    
            if($UNIT_WEAPON=='Witchblade') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="User";
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1D3";
            
        $WEAPON_ABILITY="This weapon always wounds on a 2+.";    
            
                    
    }  
    
        if($UNIT_WEAPON=='Singing Spear') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Assault 1';
            $WEAPON_STR=9;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1D3";
            
        $WEAPON_ABILITY="This weapon always wounds on a 2+.";    
        
    }    
    
            if($UNIT_WEAPON=='Singing Spear (Melee)') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="User";
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1D3";
            
        $WEAPON_ABILITY="This weapon always wounds on a 2+.";    
            
                    
    }  
    
        if($UNIT_WEAPON=='Shuriken Cannon') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Assault 3';
            $WEAPON_STR=6;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="Each time you make a wound roll 6+ for this weapon, that hit is resolved with an AP of -3 instead of 0.";    
        
    }     
    
        if($UNIT_WEAPON=='Shuriken Catapult') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Assault 2';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="Each time you make a wound roll 6+ for this weapon, that hit is resolved with an AP of -3 instead of 0.";    
        
    }    
    
        if($UNIT_WEAPON=='Sunburst Grenade') {
            $WEAPON_RANGE=6;
            $WEAPON_TYPE='Grenade 1D6';
            $WEAPON_STR=4;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";
                    
    }     
    
        if($UNIT_WEAPON=='Ranger Long Rifle') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="This weapon may target a CHARACTER even if it is not the closest enemy unit. Each time you roll a wound roll of 6+ for this weapon, it inflicts a mortal wound in addition to any other damage.";    
        
    }      

        if($UNIT_WEAPON=='Avenger Shuriken Catapult') {
            $WEAPON_RANGE=18;
            $WEAPON_TYPE='Assault 2';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="Each time you roll a wound roll of 6+ for this weapon, it inflicts a mortal wound in addition to any other damage.";    
        
    }   
    
        if($UNIT_WEAPON=='Diresword') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='User';
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";
                    
    }      
    
        if($UNIT_WEAPON=='Power Glaive') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+1';
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="This weapon always wounds on a 2+.";    
        
    }    
    
        if($UNIT_WEAPON=='Aeldari Sunburst Missile Launcher') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 1D6';
            $WEAPON_STR=4;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";
                    
    }  
    
        if($UNIT_WEAPON=='Aeldari Starshot Missile Launcher') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=8;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1D6";
                    
    }  
    
        if($UNIT_WEAPON=='Reaper Starshot Missile Launcher') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=8;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="3";
                    
    } 
    
        if($UNIT_WEAPON=='Reaper Starswarm Missile Launcher') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 2';
            $WEAPON_STR=5;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="2";
                    
    }  
    
        if($UNIT_WEAPON=='Tempest Launcher') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 2D6';
            $WEAPON_STR=4;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";
            
            $WEAPON_ABILITY="This weapon can target units that are not visible to the bearer.";
                    
    }   
    
        if($UNIT_WEAPON=='D-Scythe') {
            $WEAPON_RANGE=8;
            $WEAPON_TYPE='Assault 1D3';
            $WEAPON_STR=10;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="1";
            
            $WEAPON_ABILITY="When a unit fires its D-scythes, roll once for the number of attacks and use this for all D-scythes fired by the unit in this phase. This weapon automatically hits its target.";
                    
    }  
    
        if($UNIT_WEAPON=='Wraithcannon') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Assault 1';
            $WEAPON_STR=10;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="1D6";
                    
    } 

        if($UNIT_WEAPON=='Wraith Fists') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='User';
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1D3";
                    
    }
    
        if($UNIT_WEAPON=='Bright Lance') {
        $WEAPON_RANGE=36;
        $WEAPON_TYPE='Heavy 1';
        $WEAPON_STR='8';
        $WEAPON_AP=4;
        $WEAPON_DAMAGE="1D6";
                    
    }
    
        if($UNIT_WEAPON=='Starcannon') {
        $WEAPON_RANGE=36;
        $WEAPON_TYPE='Heavy 2';
        $WEAPON_STR='6';
        $WEAPON_AP=3;
        $WEAPON_DAMAGE="3";
                    
    }    
    
        if($UNIT_WEAPON=='Scatter Laser') {
        $WEAPON_RANGE=36;
        $WEAPON_TYPE='Heavy 4';
        $WEAPON_STR='6';
        $WEAPON_AP=0;
        $WEAPON_DAMAGE="1";
                    
    }    
    
        if($UNIT_WEAPON=='Wraithbone Fists') {
        $WEAPON_RANGE='Melee';
        $WEAPON_TYPE='Melee';
        $WEAPON_STR='User';
        $WEAPON_AP=3;
        $WEAPON_DAMAGE="3";
                    
    }      
    
        if($UNIT_WEAPON=='Flamer') {
            $WEAPON_RANGE=8;
            $WEAPON_TYPE='Assault 1D6';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";              
            
        }     
    