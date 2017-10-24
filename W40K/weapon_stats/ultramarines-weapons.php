<?php

       if($UNIT_WEAPON=='Combi-flamer') {
           $UNIT_WEAPON='Flamer';
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
       if($UNIT_WEAPON=='Combi-grav') {
           $UNIT_WEAPON='Grav-gun';
       }
  
    
       if($UNIT_WEAPON=='Gauntlets of Ultramar') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Rapid Fire 2';
            $WEAPON_STR=4;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";  
           
       }  
       
       if($UNIT_WEAPON=='Gauntlets of Ultramar (Melee)') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='x2';
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D3";  
           
       }        
       
       if($UNIT_WEAPON=='Relic Blade') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+2';
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D3";  
           
       }      
       
       if($UNIT_WEAPON=='Storm Bolter') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Rapid Fire 2';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";  
           
       }

        if($UNIT_WEAPON=='Boltstorm Gauntlet') {    
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Pistol 3';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";  
            
        }
            
    if($UNIT_WEAPON=='Bolt Rifle') {
        $WEAPON_RANGE=30;
        $WEAPON_TYPE='Rapid Fire 1';
        $WEAPON_STR=4;
        $WEAPON_AP=1;
        $WEAPON_DAMAGE=1;
            
    }             

        if($UNIT_WEAPON=='Bolt Pistol') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Pistol 1';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
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
            
            if($UNIT_WEAPON=='Assault Bolter') {
            $WEAPON_RANGE=18;
            $WEAPON_TYPE='Assault 3';
            $WEAPON_STR=5;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";  
                
            }
            if($UNIT_WEAPON=='Plasma Exterminator') {
            $WEAPON_RANGE=18;
            $WEAPON_TYPE='Assault 1D3';
            $WEAPON_STR=7;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1"; 
          
                
            }
            if($UNIT_WEAPON=='Supercharged Plasma Exterminator') {
            $WEAPON_RANGE=18;
            $WEAPON_TYPE='Assault 1D3';
            $WEAPON_STR=8;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="2";             
                
            }            
                
    if($UNIT_WEAPON=='Master Crafted Auto Bolt Rifle') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Assault 2';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="2";     
        
    }
    if($UNIT_WEAPON=='Master Crafted Stalker Bolt Rifle') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=4;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="2";  
      
        
    }     

    if($UNIT_WEAPON=='Auto Bolt Rifle') {
        $WEAPON_STR=4;
        $WEAPON_AP=0;
        $WEAPON_DAMAGE=1;
        $WEAPON_TYPE='Assault 2';
        $WEAPON_RANGE=24;   

        
    }
    if($UNIT_WEAPON=='Stalker Bolt Rifle') {
        $WEAPON_STR=4;
        $WEAPON_AP=2;
        $WEAPON_DAMAGE=1;
        $WEAPON_TYPE='Heavy 1';
        $WEAPON_RANGE=36;
       
        
    }  

        if($UNIT_WEAPON=='Assault Plasma Incinerator') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Assault 2';
            $WEAPON_STR=6;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="1";  
         
            
        }
        
        if($UNIT_WEAPON=='Supercharged Assault Plasma Incinerator') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Assault 2';
            $WEAPON_STR=7;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="2";           
            
        }   
        
        if($UNIT_WEAPON=='Heavy Plasma Incinerator') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=8;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="1";  
         
            
        }
        
        if($UNIT_WEAPON=='Supercharged Heavy Plasma Incinerator') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=9;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="2";          
            
        }        
        
        if($UNIT_WEAPON=='Plasma Incinerator') {
            $WEAPON_RANGE=30;
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR=7;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="1";           
            
        }
        
        if($UNIT_WEAPON=='Supercharged Plasma Incinerator') {
            $WEAPON_RANGE=30;
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR=8;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="2";             
            
        }         

        if($UNIT_WEAPON=='Boltgun') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";          
        }
 
        
        if($UNIT_WEAPON=='Astartes Shotgun') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Assault 1';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";           
            
        }         
        
        if($UNIT_WEAPON=='Heavy Bolter') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 3';
            $WEAPON_STR=5;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";            
            
        }    
        
        if($UNIT_WEAPON=='Frag Missile Launcher') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 1D6';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";              
            
        }  
        
        if($UNIT_WEAPON=='Krak Missile Launcher') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=8;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1D6";            
            
        }   
        
        if($UNIT_WEAPON=='Sniper Rifle') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=4;
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";  

        
        }  
        
        if($UNIT_WEAPON=='Flamer') {
            $WEAPON_RANGE=8;
            $WEAPON_TYPE='Assault 1D6';
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
    
        if($UNIT_WEAPON=='Plasma Gun') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR=7;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";           
        
    }

        if($UNIT_WEAPON=='Supercharged Plasma Gun') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR=8;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="2";           
        
    }    

        if($UNIT_WEAPON=='Grav-gun') {
            $WEAPON_RANGE=18;
            $WEAPON_TYPE='Rapid Fire 1';
            $WEAPON_STR=5;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";          
        }
    
        if($UNIT_WEAPON=='Grav-cannon and grav-amp') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Heavy 4';
            $WEAPON_STR=5;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";             
            
        }     
        
        if($UNIT_WEAPON=='Lascannon') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=9;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D6";   
            
        }   
        
        if($UNIT_WEAPON=='Multi-melta') {
            $WEAPON_RANGE=24;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=8;
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="1D6";                
            
        } 

        if($UNIT_WEAPON=='Plasma Cannon') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1D3';
            $WEAPON_STR=7;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";                
            
        } 

        if($UNIT_WEAPON=='Supercharged Plasma Cannon') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1D3';
            $WEAPON_STR=8;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="2";             
            
        }
        
        if($UNIT_WEAPON=='Grav-Pistol') {
            $WEAPON_RANGE=12;
            $WEAPON_TYPE='Pistol 1';
            $WEAPON_STR=5;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";       
            
            $WEAPON_ABILITY="If the target has a 3+ save or better, this weapon does 1D3 damage.";
            
        }        
        
        if($UNIT_WEAPON=='Power Fist') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='x2';
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D3";       
            
            $WEAPON_ABILITY="When attacking subtract 1 from hit rolls.";  
            
        }  
        
        if($UNIT_WEAPON=='Crozius Arcanum') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='+1';
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="2";        
            
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
    
        if($UNIT_WEAPON=='Plasma Cutter') {
            $WEAPON_RANGE='12';
            $WEAPON_TYPE='Assault 1';
            $WEAPON_STR="7";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";           
        
    }    
    
        if($UNIT_WEAPON=='Supercharged Plasma Cutter') {
            $WEAPON_RANGE='12';
            $WEAPON_TYPE='Assault 1';
            $WEAPON_STR="8";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="2";           
        
    }    
    
        if($UNIT_WEAPON=='Power Axe') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="+1";
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";  
                    
    }  
    
        if($UNIT_WEAPON=='Servo Arm') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="x2";
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="3";  
            
            $WEAPON_ABILITY="Each servo arm can only be used to one attack each time the bearer fights. When attacking with this weapon subtract 1 from the hit roll.";
                    
    }     
    
        if($UNIT_WEAPON=='Power Sword') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="User";
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";  
                                
    }

        if($UNIT_WEAPON=='Champions Blade') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="User";
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1";  
            
            $WEAPON_ABILITY="Each time the bearer fights it may make 1 additional attack with this weapon.";
                                
    }    
    
        if($UNIT_WEAPON=='Chainfist') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR="x2";
            $WEAPON_AP=4;
            $WEAPON_DAMAGE="2";  
            
       $WEAPON_ABILITY="When attacking with this weapon subtract 1 from the hit roll.";     
                    
    }
    
        if($UNIT_WEAPON=='Assault Cannon') {
            $WEAPON_RANGE='24';
            $WEAPON_TYPE='Heavy 6';
            $WEAPON_STR="6";
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";           
        
    }  
    
        if($UNIT_WEAPON=='Frag Cyclone Missile Launcher') {
            $WEAPON_RANGE='36';
            $WEAPON_TYPE='Heavy 2D3';
            $WEAPON_STR="4";
            $WEAPON_AP=0;
            $WEAPON_DAMAGE="1";           
        
    } 
    
        if($UNIT_WEAPON=='Krak Cyclone Missile Launcher') {
            $WEAPON_RANGE='36';
            $WEAPON_TYPE='Heavy 2';
            $WEAPON_STR="8";
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1D6";           
        
    } 
    
        if($UNIT_WEAPON=='Heavy Flamer') {
            $WEAPON_RANGE=8;
            $WEAPON_TYPE='Heavy 1D6';
            $WEAPON_STR=5;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";    
            
        $WEAPON_ABILITY="This weapon automaticaly hits its target.";     
            
        }     
        
        if($UNIT_WEAPON=='Twin Lascannon') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 2';
            $WEAPON_STR=9;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1D6";      
            
        } 

        if($UNIT_WEAPON=='Heavy Plasma Cannon') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1D3';
            $WEAPON_STR=7;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="1";      
            
        }

        if($UNIT_WEAPON=='Supercharged Heavy Plasma Cannon') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 1D3';
            $WEAPON_STR=8;
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="2";      
            
        } 
        
        if($UNIT_WEAPON=='Dreadnought Close Combat Weapon') {
            $WEAPON_RANGE='Melee';
            $WEAPON_TYPE='Melee';
            $WEAPON_STR='x2';
            $WEAPON_AP=3;
            $WEAPON_DAMAGE="3";      
            
        }  
        
        if($UNIT_WEAPON=='Hunter Killer Missile') {
            $WEAPON_RANGE=48;
            $WEAPON_TYPE='Heavy 1';
            $WEAPON_STR=8;
            $WEAPON_AP=2;
            $WEAPON_DAMAGE="1D6";      
            
        }       
        
        if($UNIT_WEAPON=='Twin Heavy Bolter') {
            $WEAPON_RANGE=36;
            $WEAPON_TYPE='Heavy 6';
            $WEAPON_STR=5;
            $WEAPON_AP=1;
            $WEAPON_DAMAGE="1";      
            
        }        