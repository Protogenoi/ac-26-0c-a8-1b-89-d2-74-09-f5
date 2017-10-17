       
            <div class="col-xs-4">
              <div class="notice notice-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><center><strong>Your units:</strong></center></div>
          
<div class="row">

<div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="UNIT">Unit:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="UNIT" id="UNIT" style="width: 170px" required>
                        <option value="">Select...</option>
                        <option disabled>─────HQ─────</option>
                        <option value="Imotekh the Stormlord" <?php if($UNIT=='Imotekh the Stormlord') { echo "selected"; } ?> >Imotekh the Stormlord</option>
                        <option value="Cryptec" <?php if($UNIT=='Cryptec') { echo "selected"; } ?> >Cryptec</option>
                        <option disabled>─────ELITES─────</option>
                        <option disabled>─────TROOPS─────</option>
                        <option value="Necron Warriors" <?php if($UNIT=='Necron Warriors') { echo "selected"; } ?> >Necron Warriors</option>
                        <option value="Immortals" <?php if($UNIT=='Immortals') { echo "selected"; } ?> >Immortals</option>
                        <option value="Dire Avengers" <?php if($UNIT=='Dire Avengers') { echo "selected"; } ?> >Dire Avengers</option>
                        <option value="Dire Avengers Exarch" <?php if($UNIT=='Dire Avengers Exarch') { echo "selected"; } ?> >Dire Avengers Exarch</option>
                        <option disabled>─────FAST ATTACK─────</option>
                        <option disabled>─────HEAVY SUPPORT─────</option>
                        <option value="Dark Reapers" <?php if($UNIT=='Dark Reapers') { echo "selected"; } ?> >Dark Reapers</option>
                        <option value="Dark Reapers Exarch" <?php if($UNIT=='Dark Reapers Exarch') { echo "selected"; } ?> >Dark Reapers Exarch</option>                    
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
                            if($UNIT=='Imotekh the Stormlord') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Gauntlet of Fire'<?php if($UNIT_WEAPON=='Gauntlet of Fire') { echo "selected"; } ?> >Gauntlet of Fire</option>
                        <option value='Staff of the Destroyer'<?php if($UNIT_WEAPON=='Staff of the Destroyer') { echo "selected"; } ?> >Staff of the Destroyer</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Staff of the Destroyer (Melee)'<?php if($UNIT_WEAPON=='Staff of the Destroyer (Melee)') { echo "selected"; } ?> >Staff of the Destroyer (Melee)</option>
                            <?php } 
                            if($UNIT=="Cryptec") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Staff of Light'<?php if($UNIT_WEAPON=='Staff of Light') { echo "selected"; } ?> >Staff of Light</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Staff of Light (Melee)' <?php if($UNIT_WEAPON=='Staff of Light (Melee)') { echo "selected"; } ?> >Staff of Light (Melee)</option>
                            <?php }   
                            if($UNIT=="Necron Warriors") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Gauss Flayer'<?php if($UNIT_WEAPON=='Gauss Flayer') { echo "selected"; } ?> >Gauss Flayer</option>
                            <?php }  
                            if($UNIT=="Immortals") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Gauss Blaster'<?php if($UNIT_WEAPON=='Gauss Blaster') { echo "selected"; } ?> >Gauss Blaster</option>
                        <option value='Tesla Carbine'<?php if($UNIT_WEAPON=='Tesla Carbine') { echo "selected"; } ?> >Tesla Carbine</option>
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
        if (val === "Imotekh the Stormlord") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Gauntlet of Fire'>Gauntlet of Fire</option><option value='Staff of the Destroyer'>Staff of the Destroyer</option><option disabled>─────Melee─────</option><option value='Staff of the Destroyer (Melee)'>Staff of the Destroyer (Melee)</option>");
        } else if (val === "Cryptec") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Staff of Light'>Staff of Light</option><option disabled>─────Melee─────</option><option value='Staff of Light (Melee)'>Staff of Light (Melee)</option>");
        } else if (val === "Necron Warriors") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Gauss Flayer'>Gauss Flayer</option>");
        } else if (val === "Immortals") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Gauss Blaster'>Gauss Blaster</option><option value='Tesla Carbine'>Tesla Carbine</option>");
        } else if (val === "Dire Avengers") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option> <option value='Avenger Shuriken Catapult'>Avenger Shuriken Catapult</option><option value='Shuriken Pistol'>Shuriken Pistol</option><option disabled>─────Grenades─────</option><option value='Sunburst Grenade'>Sunburst Grenade</option><option disabled>─────Melee─────</option><option value='Diresword'>Diresword</option><option value='Power Glaive'>Power Glaive</option>");
        } else if (val === "Dire Avengers Exarch") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option> <option value='Avenger Shuriken Catapult'>Avenger Shuriken Catapult</option><option value='Shuriken Pistol'>Shuriken Pistol</option><option disabled>─────Grenades─────</option><option value='Sunburst Grenade'>Sunburst Grenade</option><option disabled>─────Melee─────</option><option value='Diresword'>Diresword</option><option value='Power Glaive'>Power Glaive</option>");
        } else if (val === "Dark Reapers") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Aeldari Sunburst Missile Launcher'>Aeldari Sunburst Missile Launcher</option><option value='Aeldari Starshot Missile Launcher'>Aeldari Starshot Missile Launcher</option><option value='Reaper Starshot Missile Launcher'>Reaper Starswarm Starshot Launcher</option><option value='Reaper Starswarm Missile Launcher'>Reaper Starswarm Missile Launcher</option><option value='Shuriken Cannon'>Shuriken Cannon</option><option value='Tempest Launcher'>Tempest Launcher</option>");
        } else if (val === "Dark Reapers Exarch") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Aeldari Sunburst Missile Launcher'>Aeldari Sunburst Missile Launcher</option><option value='Aeldari Starshot Missile Launcher'>Aeldari Starshot Missile Launcher</option><option value='Reaper Starshot Missile Launcher'>Reaper Starswarm Starshot Launcher</option><option value='Reaper Starswarm Missile Launcher'>Reaper Starswarm Missile Launcher</option><option value='Shuriken Cannon'>Shuriken Cannon</option><option value='Tempest Launcher'>Tempest Launcher</option>");
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

        if($FACTION=='Necrons') {
           
           require(__DIR__ . '/../../unit_stats/necron-stats.php');

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
