<?php

       if($UNIT_WEAPON=='Combi-flamer') {
           $UNIT_WEAPON='Flamer';
       }
       if($UNIT_WEAPON=='Combi-bolter') {
           $UNIT_WEAPON='Boltgun';
       }       
       if($UNIT_WEAPON=='Combi-melta') {
           $UNIT_WEAPON='Meltagun';
       }
       if($UNIT_WEAPON=='Combi-plasma') {
           $UNIT_WEAPON='Plasma Gun';
       }    
       if($UNIT_WEAPON=='Supercharged Combi-plasma') {
           $UNIT_WEAPON='Supercharged Plasma Gun';
       }

        if($UNIT_WEAPON=='Inferno Bolt Pistol') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Pistol 1';
            $WEAPON_STR=4;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";           
        
    }
    
        if($UNIT_WEAPON=='Frag Grenade') {
            $WEAPON_RANGE=6;
            $WEAPON_TYPE='Grenade 1D6';
            $WEAPON_STR=3;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";          
        }        
        
        if($UNIT_WEAPON=='Krak Grenade') {
            $WEAPON_RANGE=6;
            $WEAPON_TYPE='Grenade 1';
            $WEAPON_STR=6;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1D3";          
        }
        
        if($UNIT_WEAPON=='Black Staff of Ahriman') {
            $WEAPON_RANGE="Melee";
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="+2";
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="3";

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
        
        if($UNIT_WEAPON=='Warp Flame Pistol') {
            $WEAPON_RANGE=6;
            $WEAPON_TYPE='Pistol 1D6';
            $WEAPON_STR=3;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="This weapon automaticaly hits its target.";       
            
        }      
        
        if($UNIT_WEAPON=='Force Stave') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="+2";
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1D3";          
        }         

        if($UNIT_WEAPON=='Power Sword') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="User";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";  
                                
    }  
        
        if($UNIT_WEAPON=='Inferno Boltgun') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR=4;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";          
        } 
        
        if($UNIT_WEAPON=='Inferno Combi-bolter') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Rapid Fire 2';
            $WEAPON_STR=4;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";          
        }         
        
        if($UNIT_WEAPON=='Warpflamer') {
            $WEAPON_RANGE=8;
            $WEAPON_TYPE='Assault 1D6';
            $WEAPON_STR=4;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="This weapon automaticaly hits its target.";       
            
        } 

        if($UNIT_WEAPON=='Soulreaper Cannon') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Heavy 4';
            $WEAPON_STR=5;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";          
        }  
        
        if($UNIT_WEAPON=='Heavy Warpflamer') {
            $WEAPON_RANGE=8;
            $WEAPON_TYPE='Assault 1D6';
            $WEAPON_STR=5;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";
            
        $WEAPON_ABILITY="This weapon automaticaly hits its target.";       
            
        }   
        
        if($UNIT_WEAPON=='Hellfyre Missile Rack') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Heavy 2';
            $WEAPON_STR=8;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1D3";
            
        }           
    
