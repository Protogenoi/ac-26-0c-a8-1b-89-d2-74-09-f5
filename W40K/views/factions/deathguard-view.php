       
            <div class="col-xs-4">
              <div class="notice notice-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><center><strong>Your units:</strong></center></div>
          
<div class="row">

<div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="UNIT">Unit:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="UNIT" id="UNIT" style="width: 170px" required>
                        <option value="">Select...</option>
                        <option disabled>─────HQ─────</option>
                        <option value="Lord of Contagion" <?php if($UNIT=='Lord of Contagion') { echo "selected"; } ?> >Lord of Contagion</option>
                        <option value="Malignant Plaguecaster" <?php if($UNIT=='Malignant Plaguecaster') { echo "selected"; } ?> >Malignant Plaguecaster</option>
                        <option disabled>─────ELITES─────</option>
                        <option value="Noxious Blightbringer" <?php if($UNIT=='Noxious Blightbringer') { echo "selected"; } ?> >Noxious Blightbringer</option>
                        <option disabled>─────TROOPS─────</option>
                        <option value="Plague Marines" <?php if($UNIT=='Plague Marines') { echo "selected"; } ?> >Plague Marines</option>
                        <option value="Plague Champion" <?php if($UNIT=='Plague Champion') { echo "selected"; } ?> >Plague Champion</option>
                        <option value="Pox walkers" <?php if($UNIT=='Pox walkers') { echo "selected"; } ?> >Pox walkers</option>
                        <option disabled>─────FAST ATTACK─────</option>
                        <option value="Foetid Bloat-Drone" <?php if($UNIT=='Foetid Bloat-Drone') { echo "selected"; } ?> >Foetid Bloat-Drone</option>
                        <option disabled>─────HEAVY SUPPORT─────</option>                      
                        </select>
                </div>     
            </div>  
            
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="MODELS_TO_FIRE">Models firing:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="MODELS_TO_FIRE" id="MODELS_TO_FIRE" style="width: 170px" required>
                        <option value="">Select...</option>
                            <?php for ($SQUAD_SIZE_COUNT = 10; $SQUAD_SIZE_COUNT > 0; $SQUAD_SIZE_COUNT = $SQUAD_SIZE_COUNT - 1) {
                                                            if($SQUAD_SIZE_COUNT> 11) {
                                                               break; 
                                                    } 
                                                            ?>
                        <option value="<?php if(isset($SQUAD_SIZE_COUNT)) { echo $SQUAD_SIZE_COUNT; } ?>" <?php if($MODELS_TO_FIRE==$SQUAD_SIZE_COUNT) { echo "selected"; } ?> ><?php if(isset($SQUAD_SIZE_COUNT)) { echo $SQUAD_SIZE_COUNT; } ?></option>

                        <?php } ?>
                    </select>
                </div>     
            </div>
         
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="UNIT_WEAPON">Weapon:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="UNIT_WEAPON" id="UNIT_WEAPON" style="width: 170px" required>
                        <?php if(isset($UNIT_WEAPON)) {
                            if($UNIT=='Captain in Gravis armour') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value="Boltstorm Gauntlet" <?php if($UNIT_WEAPON=='Boltstorm Gauntlet') { echo "selected"; } ?> >Boltstorm Gauntlet</option>
                            <?php } if($UNIT=='Primaris Lieutenants') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value="Bolt Pistol" <?php if($UNIT_WEAPON=='Bolt Pistol') { echo "selected"; } ?> >Bolt Pistol</option>
                        <option value='Master Crafted Auto Bolt Rifle' <?php if($UNIT_WEAPON=='Master Crafted Auto Bolt Rifle') { echo "selected"; } ?> >Master Crafted Auto Bolt Rifle</option>
                        <option value='Master Crafted Stalker Bolt Rifle' <?php if($UNIT_WEAPON=='Master Crafted Stalker Bolt Rifle') { echo "selected"; } ?> >Master Crafted Stalker Bolt Rifle</option>
                        <option value='Bolt Pistol' <?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value='Krak Grenade' <?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>                                
                        <?php    } if($UNIT=='Primaris Ancient') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value="Bolt Rifle" <?php if($UNIT_WEAPON=='Bolt Rifle') { echo "selected"; } ?> >Bolt Rifle</option>
                        <option value="Bolt Pistol" <?php if($UNIT_WEAPON=='Bolt Pistol') { echo "selected"; } ?> >Bolt Pistol</option>
                        <option value="Frag Grenade" <?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value="Krak Grenade" <?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>                          
                        <?php  }  if($UNIT=='Intercessor Squad') {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value="Auto Bolt Rifle" <?php if($UNIT_WEAPON=='Auto Bolt Rifle') { echo "selected"; } ?> >Auto Bolt Rifle</option>
                        <option value="Stalker Bolt Rifle" <?php if($UNIT_WEAPON=='Stalker Bolt Rifle') { echo "selected"; } ?> >Stalker Bolt Rifle</option>
                        <option value="Bolt Rifle" <?php if($UNIT_WEAPON=='Bolt Rifle') { echo "selected"; } ?> >Bolt Rifle</option>
                        <option value="Bolt Pistol" <?php if($UNIT_WEAPON=='Bolt Pistol') { echo "selected"; } ?> >Bolt Pistol</option>
                        <option value="Frag Grenade" <?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value="Krak Grenade" <?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>                        
                            <?php }
                            if($UNIT=='Scout Squad') {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Boltgun' <?php if($UNIT_WEAPON=='Boltgun') { echo "selected"; } ?> >Boltgun</option>
                        <option value='Bolt Pistol' <?php if($UNIT_WEAPON=='Bolt Pistol') { echo "selected"; } ?> >Bolt Pistol</option>
                        <option value='Frag Grenade' <?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value='Krak Grenade' <?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>
                        <option value='Astartes Shotgun' <?php if($UNIT_WEAPON=='Astartes Shotgun') { echo "selected"; } ?> >Astartes Shotgun</option>
                        <option value='Heavy Bolter' <?php if($UNIT_WEAPON=='Heavy Bolter') { echo "selected"; } ?> >Heavy Bolter</option>
                        <option value='Frag Missile Launcher' <?php if($UNIT_WEAPON=='Frag Missile Launcher') { echo "selected"; } ?> >Frag Missile Launcher</option>
                        <option value='Krak Missile Launcher' <?php if($UNIT_WEAPON=='Krak Missile Launcher') { echo "selected"; } ?> >Krak Missile Launcher</option>
                        <option value='Sniper Rifle' <?php if($UNIT_WEAPON=='Sniper Rifle') { echo "selected"; } ?> >Sniper Rifle</option>
                        <option disabled>─────Sergeant Equipment─────</option>
                        <option value='Combi-flamer'<?php if($UNIT_WEAPON=='Combi-flamer') { echo "selected"; } ?> >Combi-flamer</option>                       
                        <option value='Combi-melta'<?php if($UNIT_WEAPON=='Combi-melta') { echo "selected"; } ?> >Combi-melta</option>
                        <option value='Combi-plasma'<?php if($UNIT_WEAPON=='Combi-plasma') { echo "selected"; } ?> >Combi-plasma</option>
                        <option value='Supercharged Combi-plasma'<?php if($UNIT_WEAPON=='Supercharged Combi-plasma') { echo "selected"; } ?> >Supercharged Combi-plasma</option>                        
                        <option value='Storm Bolter'<?php if($UNIT_WEAPON=='Storm Bolter') { echo "selected"; } ?> >Storm Bolter</option>                         
                            <?php }                             
                            if($UNIT=='Tactical Squad') {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Boltgun'<?php if($UNIT_WEAPON=='Boltgun') { echo "selected"; } ?> >Boltgun</option>
                        <option value='Bolt Pistol'<?php if($UNIT_WEAPON=='Bolt Pistol') { echo "selected"; } ?> >Bolt Pistol</option>
                        <option value='Frag Grenade'<?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value='Krak Grenade'<?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>
                        <option disabled>─────Heavy Weapons─────</option>
                        <option value='Grav-cannon and grav-amp'<?php if($UNIT_WEAPON=='Grav-cannon and grav-amp') { echo "selected"; } ?> >Grav-cannon and grav-amp</option>
                        <option value='Heavy Bolter'<?php if($UNIT_WEAPON=='Heavy Bolter') { echo "selected"; } ?> >Heavy Bolter</option>
                        <option value='Lascannon'<?php if($UNIT_WEAPON=='Lascannon') { echo "selected"; } ?> >Lascannon</option>
                        <option value='Frag Missile Launcher'<?php if($UNIT_WEAPON=='Frag Missile Launcher') { echo "selected"; } ?> >Frag Missile Launcher</option>
                        <option value='Krak Missile Launcher'<?php if($UNIT_WEAPON=='Krak Missile Launcher') { echo "selected"; } ?> >Krak Missile Launcher</option>
                        <option value='Multi-melta'<?php if($UNIT_WEAPON=='Multi-melta') { echo "selected"; } ?> >Multi-melta</option>
                        <option value='Plasma Cannon'<?php if($UNIT_WEAPON=='Plasma Cannon') { echo "selected"; } ?> >Plasma Cannon</option>
                        <option value='Supercharged Plasma Cannon'<?php if($UNIT_WEAPON=='Supercharged Plasma Cannon') { echo "selected"; } ?> >Supercharged Plasma Cannon</option>
                        <option disabled>─────Special Weapons─────</option>
                        <option value='Flamer'<?php if($UNIT_WEAPON=='Flamer') { echo "selected"; } ?> >Flamer</option>
                        <option value='Grav-gun'<?php if($UNIT_WEAPON=='Grav-gun') { echo "selected"; } ?> >Grav-gun</option>
                        <option value='Meltagun'<?php if($UNIT_WEAPON=='Meltagun') { echo "selected"; } ?> >Meltagun</option>
                        <option value='Plasma Gun'<?php if($UNIT_WEAPON=='Plasma Gun') { echo "selected"; } ?> >Plasma Gun</option>
                        <option value='Supercharged Plasma Gun'<?php if($UNIT_WEAPON=='Supercharged Plasma Gun') { echo "selected"; } ?> >Supercharged Plasma Gun</option>
                        <option disabled>─────Sergeant Equipment─────</option>
                        <option value='Combi-flamer'<?php if($UNIT_WEAPON=='Combi-flamer') { echo "selected"; } ?> >Combi-flamer</option>                       
                        <option value='Combi-melta'<?php if($UNIT_WEAPON=='Combi-melta') { echo "selected"; } ?> >Combi-melta</option>
                        <option value='Combi-plasma'<?php if($UNIT_WEAPON=='Combi-plasma') { echo "selected"; } ?> >Combi-plasma</option>
                        <option value='Supercharged Combi-plasma'<?php if($UNIT_WEAPON=='Supercharged Combi-plasma') { echo "selected"; } ?> >Supercharged Combi-plasma</option>
                        <option value='Storm Bolter'<?php if($UNIT_WEAPON=='Storm Bolter') { echo "selected"; } ?> >Storm Bolter</option>                        
                            <?php }
                            if(strpos($UNIT,"Crusader Squad") !== false) { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Astartes Shotgun' <?php if($UNIT_WEAPON=='Astartes Shotgun') { echo "selected"; } ?> >Astartes Shotgun</option>
                        <option value='Boltgun'<?php if($UNIT_WEAPON=='Boltgun') { echo "selected"; } ?> >Boltgun</option>
                        <option value='Bolt Pistol'<?php if($UNIT_WEAPON=='Bolt Pistol') { echo "selected"; } ?> >Bolt Pistol</option>
                        <option value='Frag Grenade'<?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value='Krak Grenade'<?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>
                        <option disabled>─────Heavy Weapons─────</option>
                        <option value='Grav-cannon and grav-amp'<?php if($UNIT_WEAPON=='Grav-cannon and grav-amp') { echo "selected"; } ?> >Grav-cannon and grav-amp</option>
                        <option value='Heavy Bolter'<?php if($UNIT_WEAPON=='Heavy Bolter') { echo "selected"; } ?> >Heavy Bolter</option>
                        <option value='Lascannon'<?php if($UNIT_WEAPON=='Lascannon') { echo "selected"; } ?> >Lascannon</option>
                        <option value='Frag Missile Launcher'<?php if($UNIT_WEAPON=='Frag Missile Launcher') { echo "selected"; } ?> >Frag Missile Launcher</option>
                        <option value='Krak Missile Launcher'<?php if($UNIT_WEAPON=='Krak Missile Launcher') { echo "selected"; } ?> >Krak Missile Launcher</option>
                        <option value='Multi-melta'<?php if($UNIT_WEAPON=='Multi-melta') { echo "selected"; } ?> >Multi-melta</option>
                        <option value='Plasma Cannon'<?php if($UNIT_WEAPON=='Plasma Cannon') { echo "selected"; } ?> >Plasma Cannon</option>
                        <option value='Supercharged Plasma Cannon'<?php if($UNIT_WEAPON=='Supercharged Plasma Cannon') { echo "selected"; } ?> >Supercharged Plasma Cannon</option>
                        <option disabled>─────Special Weapons─────</option>
                        <option value='Flamer'<?php if($UNIT_WEAPON=='Flamer') { echo "selected"; } ?> >Flamer</option>
                        <option value='Grav-gun'<?php if($UNIT_WEAPON=='Grav-gun') { echo "selected"; } ?> >Grav-gun</option>
                        <option value='Meltagun'<?php if($UNIT_WEAPON=='Meltagun') { echo "selected"; } ?> >Meltagun</option>
                        <option value='Plasma Gun'<?php if($UNIT_WEAPON=='Plasma Gun') { echo "selected"; } ?> >Plasma Gun</option>
                        <option value='Supercharged Plasma Gun'<?php if($UNIT_WEAPON=='Supercharged Plasma Gun') { echo "selected"; } ?> >Supercharged Plasma Gun</option>
                        <option disabled>─────Sergeant Equipment─────</option>
                        <option value='Combi-flamer'<?php if($UNIT_WEAPON=='Combi-flamer') { echo "selected"; } ?> >Combi-flamer</option>                       
                        <option value='Combi-melta'<?php if($UNIT_WEAPON=='Combi-melta') { echo "selected"; } ?> >Combi-melta</option>
                        <option value='Combi-plasma'<?php if($UNIT_WEAPON=='Combi-plasma') { echo "selected"; } ?> >Combi-plasma</option>
                        <option value='Supercharged Combi-plasma'<?php if($UNIT_WEAPON=='Supercharged Combi-plasma') { echo "selected"; } ?> >Supercharged Combi-plasma</option>
                        <option value='Storm Bolter'<?php if($UNIT_WEAPON=='Storm Bolter') { echo "selected"; } ?> >Storm Bolter</option>                         
                            <?php }
                        if($UNIT=="Inceptor Squad") { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Assualt Bolter'<?php if($UNIT_WEAPON=='Assualt Bolter') { echo "selected"; } ?> >Assualt Bolter</option>
                        <option value='Plasma Exterminator'<?php if($UNIT_WEAPON=='Plasma Exterminator') { echo "selected"; } ?> >Plasma Exterminator</option>
                        <option value='Supercharged Plasma Exterminator'<?php if($UNIT_WEAPON=='Supercharged Plasma Exterminator') { echo "selected"; } ?> >Supercharged Plasma Exterminator</option>
                        <?php } if($UNIT=='Hellblaster Squad') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Bolt Pistol'<?php if($UNIT_WEAPON=='Bolt Pistol') { echo "selected"; } ?> >Bolt Pistol</option>
                        <option value='Frag Grenade'<?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value='Krak Grenade'<?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option> 
                        <option value='Plasma Incinerator'<?php if($UNIT_WEAPON=='Plasma Incinerator') { echo "selected"; } ?> >Plasma Incinerator</option>
                        <option value='Supercharged Plasma Incinerator'<?php if($UNIT_WEAPON=='Supercharged Plasma Incinerator') { echo "selected"; } ?> >Supercharged Plasma Incinerator</option>
                        <option value='Assualt Plasma Incinerator'<?php if($UNIT_WEAPON=='Assualt Plasma Incinerator') { echo "selected"; } ?> >Assualt Plasma Incinerator</option>
                        <option value='Supercharged Assualt Plasma Incinerator'<?php if($UNIT_WEAPON=='Supercharged Assualt Plasma Incinerator') { echo "selected"; } ?> >Supercharged Assualt Plasma Incinerator</option>
                        <option value='Heavy Plasma Incinerator'<?php if($UNIT_WEAPON=='Heavy Plasma Incinerator') { echo "selected"; } ?> >Heavy Plasma Incinerator</option>
                        <option value='Supercharged Heavy Plasma Incinerator'<?php if($UNIT_WEAPON=='Supercharged Heavy Plasma Incinerator') { echo "selected"; } ?> >Supercharged Heavy Plasma Incinerator</option>                        
                            <?php }
                        } else { ?>
                        <option value=''>Select...</option>
                            <?php } ?>
                    </select>
                </div>     
            </div>

        <script>
$(document).ready(function () {
    $("#UNIT").change(function () {
        var val = $(this).val();  
        if (val === "Intercessor Squad") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Auto Bolt Rifle'>Auto Bolt Rifle</option><option value='Stalker Bolt Rifle'>Stalker Bolt Rifle</option><option value='Bolt Rifle'>Bolt Rifle</option><option value='Bolt Pistol'>Bolt Pistol</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option>");
        } else if (val === "Tactical Squad") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Boltgun'>Boltgun</option><option value='Bolt Pistol'>Bolt Pistol</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option><option disabled>─────Heavy Weapons─────</option><option value='Grav-cannon and grav-amp'>Grav-cannon and grav-amp</option><option value='Heavy Bolter'>Heavy Bolter</option><option value='Lascannon'>Lascannon</option><option value='Frag Missile Launcher'>Frag Missile Launcher</option><option value='Krak Missile Launcher'>Krak Missile Launcher</option><option value='Multi-melta'>Multi-melta</option><option value='Plasma Cannon'>Plasma Cannon</option><option disabled>─────Special Weapons─────</option><option value='Flamer'>Flamer</option><option value='Grav-gun'>Grav-gun</option><option value='Meltagun'>Meltagun</option><option value='Plasma Gun'>Plasma Gun</option><option value='Supercharged Plasma Gun'>Supercharged Plasma Gun</option><option value='Supercharged Plasma Cannon'>Supercharged Plasma Cannon</option><option disabled>─────Sergeant Equipment─────</option><option value='Combi-flamer'>Combi-flamer</option><option value='Combi-melta'>Combi-melta</option><option value='Combi-plasma'>Combi-plasma</option><option value='Supercharged Combi-plasma'>Supercharged Combi-plasma</option><option value='Storm Bolter'>Storm Bolter</option>");
        } else if (val === "Scout Squad") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Boltgun'>Boltgun</option><option value='Bolt Pistol'>Bolt Pistol</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option><option value='Astartes Shotgun'>Astartes Shotgun</option><option value='Heavy Bolter'>Heavy Bolter</option><option value='Frag Missile Launcher'>Frag Missile Launcher</option><option value='Krak Missile Launcher'>Krak Missile Launcher</option><option value='Sniper Rifle'>Sniper Rifle</option><option disabled>─────Sergeant Equipment─────</option><option value='Combi-flamer'>Combi-flamer</option><option value='Combi-melta'>Combi-melta</option><option value='Combi-plasma'>Combi-plasma</option><option value='Supercharged Combi-plasma'>Supercharged Combi-plasma</option><option value='Storm Bolter'>Storm Bolter</option>");
        } else if ( val === "Crusader Squad") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Astartes Shotgun'>Astartes Shotgun</option><option value='Boltgun'>Boltgun</option><option value='Bolt Pistol'>Bolt Pistol</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option><option disabled>─────Heavy Weapons─────</option><option value='Grav-cannon and grav-amp'>Grav-cannon and grav-amp</option><option value='Heavy Bolter'>Heavy Bolter</option><option value='Lascannon'>Lascannon</option><option value='Frag Missile Launcher'>Frag Missile Launcher</option><option value='Krak Missile Launcher'>Krak Missile Launcher</option><option value='Multi-melta'>Multi-melta</option><option value='Plasma Cannon'>Plasma Cannon</option><option disabled>─────Special Weapons─────</option><option value='Flamer'>Flamer</option><option value='Grav-gun'>Grav-gun</option><option value='Meltagun'>Meltagun</option><option value='Plasma Gun'>Plasma Gun</option><option value='Supercharged Plasma Gun'>Supercharged Plasma Gun</option><option value='Supercharged Plasma Cannon'>Supercharged Plasma Cannon</option><option disabled>─────Sergeant Equipment─────</option><option value='Combi-flamer'>Combi-flamer</option><option value='Combi-melta'>Combi-melta</option><option value='Combi-plasma'>Combi-plasma</option><option value='Supercharged Combi-plasma'>Supercharged Combi-plasma</option><option value='Storm Bolter'>Storm Bolter</option>");
        } else if (val === "Primaris Lieutenants") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Master Crafted Auto Bolt Rifle'>Master Crafted Auto Bolt Rifle</option><option value='Master Crafted Stalker Bolt Rifle'>Master Crafted Stalker Bolt Rifle</option><option value='Bolt Pistol'>Bolt Pistol</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option>");
        } else if (val === "Captain in Gravis armour") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Boltstorm Gauntlet'>Boltstorm Gauntlet</option>");
        } if (val === "Primaris Ancient") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Bolt Rifle'>Bolt Rifle</option><option value='Bolt Pistol'>Bolt Pistol</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option>");
        } if (val === "Inceptor Squad") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Assualt Bolter'>Assualt Bolter</option><option value='Plasma Exterminator'>Plasma Exterminator</option><option value='Supercharged Plasma Exterminator'>Supercharged Plasma Exterminator</option>");
        } if (val === "Hellblaster Squad") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Bolt Pistol'>Bolt Pistol</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option><option value='Plasma Incinerator'>Plasma Incinerator</option><option value='Supercharged Plasma Incinerator'>Supercharged Plasma Incinerator</option><option value='Assualt Plasma Incinerator'>Assualt Plasma Incinerator</option><option value='Supercharged Assualt Plasma Incinerator'>Supercharged Assualt Plasma Incinerator</option><option value='Heavy Plasma Incinerator'>Heavy Plasma Incinerator</option><option value='Supercharged Heavy Plasma Incinerator'>Supercharged Heavy Plasma Incinerator</option>");
        }
    });
});        
</script>
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="MOVEMENT">Movement:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="MOVEMENT" id="MOVEMENT" style="width: 170px" required>
                        <option value="Stationary" <?php if($MOVEMENT=='Stationary') { echo "selected"; } ?> >Stationary</option>
                        <option value="Moved" <?php if($MOVEMENT=='Moved') { echo "selected"; } ?> >Moved</option>
                        <option value="Advanced" <?php if($MOVEMENT=='Advanced') { echo "selected"; } ?> >Advanced</option>
                        <option value="Charged" <?php if($MOVEMENT=='Charged') { echo "selected"; } ?> >Charged</option>
                    </select>
                </div>     
            </div>   

            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="RANGE_BONUS">Range Bonus:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="RANGE_BONUS" id="RANGE_BONUS" style="width: 170px" required>
                        <option value="0">0</option>
                        <?php if(isset($RANGE_BONUS) && $RANGE_BONUS==0) { ?>
                        <option value="0" selected>0</option>
                        <?php } ?>
                            <?php for ($RANGE_BONUS_COUNT = 10; $RANGE_BONUS_COUNT > 0; $RANGE_BONUS_COUNT = $RANGE_BONUS_COUNT - 1) {
                                                            if($RANGE_BONUS_COUNT> 11) {
                                                               break; 
                                                    } 
                                                            ?>
                        <option value="<?php if(isset($RANGE_BONUS_COUNT)) { echo $RANGE_BONUS_COUNT; } ?>" <?php if($RANGE_BONUS==$RANGE_BONUS_COUNT) { echo "selected"; } ?> ><?php if(isset($RANGE_BONUS_COUNT)) { echo $RANGE_BONUS_COUNT; } ?></option>

                        <?php } ?>
                        
                    </select>
                </div>     
            </div> 
</div>

            
       
        </div>
