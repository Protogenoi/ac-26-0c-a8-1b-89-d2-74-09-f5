       
            <div class="col-xs-4">
              <div class="notice notice-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><center><strong>Your units:</strong></center></div>
          
<div class="row">

<div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="UNIT">Unit:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="UNIT" id="UNIT" style="width: 170px" required>
                        <option value="">Select...</option>
                        <option disabled>─────HQ─────</option>
                        <option value="Eldrad Ulthran" <?php if($UNIT=='Eldrad Ulthran') { echo "selected"; } ?> >Eldrad Ulthran</option>
                        <option value="Farseer" <?php if($UNIT=='Farseer') { echo "selected"; } ?> >Farseer</option>
                        <option value="Warlock" <?php if($UNIT=='Warlock') { echo "selected"; } ?> >Warlock</option>
                        <option disabled>─────ELITES─────</option>
                        <option value="Wraithguard" <?php if($UNIT=='Wraithguard') { echo "selected"; } ?> >Wraithguard</option>
                        <option disabled>─────TROOPS─────</option>
                        <option value="Guardian Defenders" <?php if($UNIT=='Guardian Defenders') { echo "selected"; } ?> >Guardian Defenders</option>
                        <option value="Rangers" <?php if($UNIT=='Rangers') { echo "selected"; } ?> >Rangers</option>
                        <option value="Dire Avengers" <?php if($UNIT=='Dire Avengers') { echo "selected"; } ?> >Dire Avengers</option>
                        <option value="Dire Avengers Exarch" <?php if($UNIT=='Dire Avengers Exarch') { echo "selected"; } ?> >Dire Avengers Exarch</option>
                        <option disabled>─────FAST ATTACK─────</option>
                        <option disabled>─────HEAVY SUPPORT─────</option>
                        <option value="Dark Reapers" <?php if($UNIT=='Dark Reapers') { echo "selected"; } ?> >Dark Reapers</option>
                        <option value="Dark Reapers Exarch" <?php if($UNIT=='Dark Reapers Exarch') { echo "selected"; } ?> >Dark Reapers Exarch</option>                    
                        <option value="War Walkers" <?php if($UNIT=='War Walkers') { echo "selected"; } ?> >War Walkers</option>                    
                        <option value="Wraithlord" <?php if($UNIT=='Wraithlord') { echo "selected"; } ?> >Wraithlord</option>                    
                    </select>
                </div>     
            </div>  
            
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="MODELS_TO_FIRE">Guns firing:</label>
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
                            if($UNIT=='Eldrad Ulthran') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Shuriken Pistol'<?php if($UNIT_WEAPON=='Shuriken Pistol') { echo "selected"; } ?> >Shuriken Pistol</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Staff of Ulthamar'<?php if($UNIT_WEAPON=='Staff of Ulthamar') { echo "selected"; } ?> >Staff of Ulthamar</option>
                        <option value='Witchblade'<?php if($UNIT_WEAPON=='Witchblade') { echo "selected"; } ?> >Witchblade</option>
                            <?php } 
                            if($UNIT=="Farseer") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Shuriken Pistol' <?php if($UNIT_WEAPON=='Shuriken Pistol') { echo "selected"; } ?> >Shuriken Pistol</option>
                        <option value='Singing Spear'<?php if($UNIT_WEAPON=='Singing Spear') { echo "selected"; } ?> >Singing Spear</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Witchblade'<?php if($UNIT_WEAPON=='Witchblade') { echo "selected"; } ?> >Witchblade</option>                        
                        <option value='Singing Spear (Melee)' <?php if($UNIT_WEAPON=='Singing Spear (Melee)') { echo "selected"; } ?> >Singing Spear (Melee)</option>
                            <?php }      
                            if($UNIT=="Warlock") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Singing Spear'<?php if($UNIT_WEAPON=='Singing Spear') { echo "selected"; } ?> >Singing Spear</option>
                        <option value='Shuriken Pistol' <?php if($UNIT_WEAPON=='Shuriken Pistol') { echo "selected"; } ?> >Shuriken Pistol</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Singing Spear (Melee)' <?php if($UNIT_WEAPON=='Singing Spear (Melee)') { echo "selected"; } ?> >Singing Spear (Melee)</option>
                        <option value='Witchblade'<?php if($UNIT_WEAPON=='Witchblade') { echo "selected"; } ?> >Witchblade</option>
                            <?php }   
                             if($UNIT=="Wraithguard") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='D-Scythe'<?php if($UNIT_WEAPON=='D-Scythe') { echo "selected"; } ?> >D-Scythe</option>
                        <option value='Wraithcannon' <?php if($UNIT_WEAPON=='Wraithcannon') { echo "selected"; } ?> >Wraithcannon</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Wraith Fists' <?php if($UNIT_WEAPON=='Wraith Fists') { echo "selected"; } ?> >Wraith Fists</option>
                            <?php }  
                            if($UNIT=="Guardian Defenders") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Shuriken Cannon'<?php if($UNIT_WEAPON=='Shuriken Cannon') { echo "selected"; } ?> >Shuriken Cannon</option>
                        <option value='Shuriken Catapult'<?php if($UNIT_WEAPON=='Shuriken Catapult') { echo "selected"; } ?> >Shuriken Catapult</option>
                        <option disabled>─────Grenades─────</option>
                        <option value='Sunburst Grenade' <?php if($UNIT_WEAPON=='Sunburst Grenade') { echo "selected"; } ?> >Sunburst Grenade</option>
                            <?php }  
                            if($UNIT=="Rangers") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Avenger Shuriken Pistol'<?php if($UNIT_WEAPON=='Avenger Shuriken Pistol') { echo "selected"; } ?> >Avenger Shuriken Pistol</option>
                        <option value='Ranger Long Rifle'<?php if($UNIT_WEAPON=='Ranger Long Rifle') { echo "selected"; } ?> >Ranger Long Rifle</option>
                            <?php } 
                            if(strpos($UNIT,"Dire Avengers") !== false) {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Avenger Shuriken Catapult'<?php if($UNIT_WEAPON=='Avenger Shuriken Catapult') { echo "selected"; } ?> >Avenger Shuriken Catapult</option>
                        <option value='Shuriken Pistol' <?php if($UNIT_WEAPON=='Shuriken Pistol') { echo "selected"; } ?> >Shuriken Pistol</option>
                        <option disabled>─────Grenades─────</option>
                        <option value='Sunburst Grenade' <?php if($UNIT_WEAPON=='Sunburst Grenade') { echo "selected"; } ?> >Sunburst Grenade</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Diresword' <?php if($UNIT_WEAPON=='Diresword') { echo "selected"; } ?> >Diresword</option>
                        <option value='Power Glaive' <?php if($UNIT_WEAPON=='Power Glaive') { echo "selected"; } ?> >Power Glaive</option>                        
                            <?php }   
                            if(strpos($UNIT,"Dark Reapers") !== false) {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Aeldari Sunburst Missile Launcher'<?php if($UNIT_WEAPON=='Aeldari Sunburst Missile Launcher') { echo "selected"; } ?> >Aeldari Sunburst Missile Launcher</option>
                        <option value='Aeldari Starshot Missile Launcher'<?php if($UNIT_WEAPON=='Aeldari Starshot Missile Launcher') { echo "selected"; } ?> >Aeldari Starshot Missile Launcher</option>
                        <option value='Reaper Starshot Missile Launcher'<?php if($UNIT_WEAPON=='Reaper Starshot Missile Launcher') { echo "selected"; } ?> >Reaper Starswarm Starshot Launcher</option>
                        <option value='Reaper Starswarm Missile Launcher'<?php if($UNIT_WEAPON=='Reaper Starswarm Missile Launcher') { echo "selected"; } ?> >Reaper Starswarm Missile Launcher</option>
                        <option value='Shuriken Cannon'<?php if($UNIT_WEAPON=='Shuriken Cannon') { echo "selected"; } ?> >Shuriken Cannon</option>
                        <option value='Tempest Launcher'<?php if($UNIT_WEAPON=='Tempest Launcher') { echo "selected"; } ?> >Tempest Launcher</option>                     
                            <?php } 
                            if($UNIT=="War Walkers") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Shuriken Cannon'<?php if($UNIT_WEAPON=='Shuriken Cannon') { echo "selected"; } ?> >Shuriken Cannon</option>
                        <option disabled>─────Heavy Weapons─────</option>
                        <option value='Aeldari Sunburst Missile Launcher'<?php if($UNIT_WEAPON=='Aeldari Sunburst Missile Launcher') { echo "selected"; } ?> >Aeldari Sunburst Missile Launcher</option>
                        <option value='Aeldari Starshot Missile Launcher'<?php if($UNIT_WEAPON=='Aeldari Starshot Missile Launcher') { echo "selected"; } ?> >Aeldari Starshot Missile Launcher</option>
                        <option value='Bright Lance'<?php if($UNIT_WEAPON=='Bright Lance') { echo "selected"; } ?> >Bright Lance</option>
                        <option value='Scatter Laser'<?php if($UNIT_WEAPON=='Scatter Laser') { echo "selected"; } ?> >Scatter Laser</option>
                        <option value='Shuriken Cannon'<?php if($UNIT_WEAPON=='Shuriken Cannon') { echo "selected"; } ?> >Shuriken Cannon</option>
                        <option value='Starcannon'<?php if($UNIT_WEAPON=='Starcannon') { echo "selected"; } ?> >Starcannon</option>
                            <?php }  
                            if($UNIT=="Wraithlord") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Flamer'<?php if($UNIT_WEAPON=='Flamer') { echo "selected"; } ?> >Flamer</option>
                        <option value='Shuriken Catapult'<?php if($UNIT_WEAPON=='Shuriken Catapult') { echo "selected"; } ?> >Shuriken Catapult</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Ghostglaive'<?php if($UNIT_WEAPON=='Ghostglaive') { echo "selected"; } ?> >Ghostglaive</option>
                        <option value='Wraithbone Fists'<?php if($UNIT_WEAPON=='Wraithbone Fists') { echo "selected"; } ?> >Wraithbone Fists</option>
                        <option disabled>─────Heavy Weapons─────</option>
                        <option value='Aeldari Sunburst Missile Launcher'<?php if($UNIT_WEAPON=='Aeldari Sunburst Missile Launcher') { echo "selected"; } ?> >Aeldari Sunburst Missile Launcher</option>
                        <option value='Aeldari Starshot Missile Launcher'<?php if($UNIT_WEAPON=='Aeldari Starshot Missile Launcher') { echo "selected"; } ?> >Aeldari Starshot Missile Launcher</option>
                        <option value='Bright Lance'<?php if($UNIT_WEAPON=='Bright Lance') { echo "selected"; } ?> >Bright Lance</option>
                        <option value='Scatter Laser'<?php if($UNIT_WEAPON=='Scatter Laser') { echo "selected"; } ?> >Scatter Laser</option>
                        <option value='Shuriken Cannon'<?php if($UNIT_WEAPON=='Shuriken Cannon') { echo "selected"; } ?> >Shuriken Cannon</option>
                        <option value='Starcannon'<?php if($UNIT_WEAPON=='Starcannon') { echo "selected"; } ?> >Starcannon</option>
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
        if (val === "Eldrad Ulthran") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Shuriken Pistol'>Shuriken Pistol</option><option disabled>─────Melee─────</option><option value='Staff of Ulthamar'>Staff of Ulthamar</option><option value='Witchblade'>Witchblade</option>");
        } else if (val === "Farseer") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Shuriken Pistol'>Shuriken Pistol</option><option value='Singing Spear'>Singing Spear</option><option disabled>─────Melee─────</option><option value='Witchblade'>Witchblade</option><option value='Singing Spear (Melee)'>Singing Spear (Melee)</option>");
        } else if (val === "Warlock") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Singing Spear'>Singing Spear</option><option value='Shuriken Pistol'>Shuriken Pistol</option><option disabled>─────Melee─────</option><option value='Singing Spear (Melee)'>Singing Spear (Melee)</option><option value='Witchblade'>Witchblade</option>");
        } else if (val === "Wraithguard") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='D-Scythe'>D-Scythe</option><option value='Wraithcannon'>Wraithcannon</option><option disabled>─────Melee─────</option><option value='Wraith Fists'>Wraith Fists</option>");
        }else if (val === "Guardian Defenders") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Shuriken Cannon'>Shuriken Cannon</option><option value='Shuriken Catapult'>Shuriken Catapult</option><option disabled>─────Grenades─────</option><option value='Sunburst Grenade'>Sunburst Grenade</option>");
        } else if (val === "Rangers") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Shuriken Pistol'>Shuriken Pistol</option><option value='Ranger Long Rifle'>Ranger Long Rifle</option>");
        } else if (val === "Dire Avengers") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option> <option value='Avenger Shuriken Catapult'>Avenger Shuriken Catapult</option><option value='Shuriken Pistol'>Shuriken Pistol</option><option disabled>─────Grenades─────</option><option value='Sunburst Grenade'>Sunburst Grenade</option><option disabled>─────Melee─────</option><option value='Diresword'>Diresword</option><option value='Power Glaive'>Power Glaive</option>");
        } else if (val === "Dire Avengers Exarch") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option> <option value='Avenger Shuriken Catapult'>Avenger Shuriken Catapult</option><option value='Shuriken Pistol'>Shuriken Pistol</option><option disabled>─────Grenades─────</option><option value='Sunburst Grenade'>Sunburst Grenade</option><option disabled>─────Melee─────</option><option value='Diresword'>Diresword</option><option value='Power Glaive'>Power Glaive</option>");
        } else if (val === "Dark Reapers") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Aeldari Sunburst Missile Launcher'>Aeldari Sunburst Missile Launcher</option><option value='Aeldari Starshot Missile Launcher'>Aeldari Starshot Missile Launcher</option><option value='Reaper Starshot Missile Launcher'>Reaper Starswarm Starshot Launcher</option><option value='Reaper Starswarm Missile Launcher'>Reaper Starswarm Missile Launcher</option><option value='Shuriken Cannon'>Shuriken Cannon</option><option value='Tempest Launcher'>Tempest Launcher</option>");
        } else if (val === "Dark Reapers Exarch") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Aeldari Sunburst Missile Launcher'>Aeldari Sunburst Missile Launcher</option><option value='Aeldari Starshot Missile Launcher'>Aeldari Starshot Missile Launcher</option><option value='Reaper Starshot Missile Launcher'>Reaper Starswarm Starshot Launcher</option><option value='Reaper Starswarm Missile Launcher'>Reaper Starswarm Missile Launcher</option><option value='Shuriken Cannon'>Shuriken Cannon</option><option value='Tempest Launcher'>Tempest Launcher</option>");
        } else if (val === "War Walkers") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Shuriken Cannon'>Shuriken Cannon</option><option disabled>─────Heavy Weapons─────</option><option value='Aeldari Sunburst Missile Launcher'>Aeldari Sunburst Missile Launcher</option><option value='Aeldari Starshot Missile Launcher'>Aeldari Starshot Missile Launcher</option><option value='Bright Lance'>Bright Lance</option><option value='Scatter Laser'>Scatter Laser</option><option value='Shuriken Cannon'>Shuriken Cannon</option><option value='Starcannon'>Starcannon</option>");
        } else if (val === "Wraithlord") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Flamer'>Flamer</option><option value='Shuriken Catapult'>Shuriken Catapult</option><option disabled>─────Melee─────</option><option value='Ghostglaive'>Ghostglaive</option><option value='Wraithbone Fists'>Wraithbone Fists</option><option disabled>─────Heavy Weapons─────</option><option value='Aeldari Sunburst Missile Launcher'>Aeldari Sunburst Missile Launcher</option><option value='Aeldari Starshot Missile Launcher'>Aeldari Starshot Missile Launcher</option><option value='Bright Lance'>Bright Lance</option><option value='Scatter Laser'>Scatter Laser</option><option value='Shuriken Cannon'>Shuriken Cannon</option><option value='Starcannon'>Starcannon</option>");
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
              <?php if(isset($UNIT)) { ?>
              <br><br><br>
              <div class="row">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Abilities, keywords, and faction keywords.</div>
      <div class="panel-body">
          
<?php

        if($FACTION=='Eldar') {
           
           require(__DIR__ . '/../../unit_stats/eldar-stats.php');

       }
       
       echo "<table class='table table-condensed'>
           <tr>
           <th colspan='10'>Unit Stats</th>
           </tr>
           <tr>
           <th>M</th>
           <th>WS</th>
           <th>BS</th>
           <th>S</th>
           <th>T</th>
           <th>W</th>
           <th>A</th>
           <th>Ld</th>
           <th>Save</th>
           <th>Invul</th>
           </tr>
           <tr>
           <td>$U_MOVE</td>
           <td>$U_WS</td>
           <td>$U_BS</td>
           <td>$U_STR</td>
           <td>$U_TOUGHNESS</td>
           <td>$U_WOUNDS</td>
           <td>$U_ATTACKS</td>
           <td>$U_LD</td>
           <td>$U_SAVE</td>
           <td>$U_INVUL</td>
           </tr>
           </table>";       
        
        echo "<strong>Abilities</strong>:<ul>";
foreach($U_ABILITIES as $key) {
    echo "<li>$key</li>";
}

echo "</ul><strong>Faction Keywords:</strong><ul>";
foreach($U_FACTION_KW as $key) {
    echo "<li>$key</li>";
}
echo "</ul><strong>Keywords:</strong><ul>";
foreach($U_KEYWORDS as $key) {
    echo "<li>$key</li>";
}
echo "</ul>";
?>
      
      </div>
    </div>
  </div>
              </div>
              <?php } ?>
            
       
        </div>
