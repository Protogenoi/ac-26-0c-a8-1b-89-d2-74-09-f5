<?php

        if($UNIT_WEAPON=='Plaguereaper') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+2';
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="3";     
            
            $WEAPON_ABILITY="Plague Weapon - You can reroll any wound rolls of 1 when attacking with a plague weapon.";
        
    }
    
        if($UNIT_WEAPON=='Bolt Pistol') {
            $WEAPON_RANGE='12';
            $WEAPON_TYPE='Pistol 1';
            $WEAPON_STR="4";
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";           
        
    }

          if($UNIT_WEAPON=='Corrupted Staff') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+2';
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1D3";     
            
            $WEAPON_ABILITY="Plague Weapon - You can reroll any wound rolls of 1 when attacking with a plague weapon.";
        
    }  
    
         if($UNIT_WEAPON=='Blight Grenade') {
            $WEAPON_RANGE=6;
            $WEAPON_TYPE='Grenade 1D6';
            $WEAPON_STR=3;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";  
            
        $WEAPON_ABILITY="Plague Weapon - You can reroll wound rolls of 1 for this weapon.";     
            
        } 
        
        if($UNIT_WEAPON=='Krak Grenade') {
            $WEAPON_RANGE=6;
            $WEAPON_TYPE='Grenade 1';
            $WEAPON_STR=6;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1D3";          
        }

        if($UNIT_WEAPON=='Plasma Pistol') {
            $WEAPON_RANGE='12';
            $WEAPON_TYPE='Pistol 1';
            $WEAPON_STR="7";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";           
        
    } 
    
        if($UNIT_WEAPON=='Supercharged Plasma Pistol') {
            $WEAPON_RANGE='12';
            $WEAPON_TYPE='Pistol 1';
            $WEAPON_STR="8";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="2";           
        
    }       
    
          if($UNIT_WEAPON=='Cursed Plague Bell') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='User';
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="2";     
            
            $WEAPON_ABILITY="Plague Weapon - You can reroll any wound rolls of 1 when attacking with a plague weapon.";
        
    } 

            if($UNIT_WEAPON=='Blight Launcher') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Assault 2';
            $WEAPON_STR=6;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1D3";          
        }
        
        if($UNIT_WEAPON=='Boltgun') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";          
        }

        if($UNIT_WEAPON=='Meltagun') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Assault 1';
            $WEAPON_STR=8;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="1D6";          
        
    } 
    
        if($UNIT_WEAPON=='Plague Belcher') {
            $WEAPON_RANGE=9;
            $WEAPON_TYPE='Assault 1D6';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";    
            
        $WEAPON_ABILITY="This weapon automaticaly hits its target.";     
            
        } 
        
        if($UNIT_WEAPON=='Plague Spewer') {
            $WEAPON_RANGE=9;
            $WEAPON_TYPE='Heavy 1D6';
            $WEAPON_STR=5;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";    
            
        $WEAPON_ABILITY="This weapon automaticaly hits its target.";     
            
        } 

        if($UNIT_WEAPON=='Plague Knife') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='User';
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";  
         
        $WEAPON_ABILITY="Plague Weapon: You can reroll wound rolls of 1 for this weapon.";    
            
        }     
        
        if($UNIT_WEAPON=='Bubotic Axe') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+1';
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";  
         
        $WEAPON_ABILITY="This weapon automaticaly hits its target.";    
            
        } 

        if($UNIT_WEAPON=='Flail of Corruption') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+2';
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="2";  
         
        $WEAPON_ABILITY="Make D3 hits each time you attack with this weapon instead of only 1. Excess damage is not lost from this weapon, instead keep allocating damage to another model in the target unit either all the damage has been allocated or the target destroyed.";    
            
        }  

         if($UNIT_WEAPON=='Great Plague Cleaver') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='x2';
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D6";  
         
        $WEAPON_ABILITY="When attacking with this weapon subtract 1 from the hit roll.";    
            
        } 

         if($UNIT_WEAPON=='Mace of Contagion') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+2';
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="3";  
         
        $WEAPON_ABILITY="When attacking with this weapon subtract 1 from the hit roll.";    
            
        } 

        if($UNIT_WEAPON=='Plague Sword') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='User';
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1"; 
            
            //Re-roll 2's misprint in book (says 1 in book)?
        $WEAPON_ABILITY="You can reroll wound rolls of 2 for this weapon.";   
            
        } 

        if($UNIT_WEAPON=='Power Fist') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="x2";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D3";  
            
       $WEAPON_ABILITY="When attacking with this weapon subtract 1 from the hit roll.";     
                    
    }  
    
        if($UNIT_WEAPON=='Plasma Gun') {
            $WEAPON_RANGE='24';
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR="7";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";           
        
    } 
    
        if($UNIT_WEAPON=='Supercharged Plasma Gun') {
            $WEAPON_RANGE='24';
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR="8";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="2";           
        
    } 

        if($UNIT_WEAPON=='Frag Grenade') {
            $WEAPON_RANGE=6;
            $WEAPON_TYPE='Grenade 1D6';
            $WEAPON_STR=3;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";          
        }     
