       
            <div class="col-xs-4">
              <div class="notice notice-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><center><strong>Your units:</strong></center></div>
          
<div class="row">

<div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="UNIT">Unit:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="UNIT" id="UNIT" style="width: 170px" required>
                        <option value="">Select...</option>
                        <option disabled>─────HQ─────</option>
                        <option value="Ahriman" <?php if($UNIT=='Ahriman') { echo "selected"; } ?> >Ahriman</option>
                        <option value="Exhalted Sorcerer" <?php if($UNIT=='Exhalted Sorcerer') { echo "selected"; } ?> >Exhalted Sorcerer</option>
                        <option disabled>─────ELITES─────</option>
                        <option value="Scarab Occult Terminators" <?php if($UNIT=='Scarab Occult Terminators') { echo "selected"; } ?> >Scarab Occult Terminators</option>
                        <option value="Scarab Occult Sorcerer" <?php if($UNIT=='Scarab Occult Sorcerer') { echo "selected"; } ?> >Scarab Occult Sorcerer</option>
                        <option disabled>─────TROOPS─────</option>
                        <option value="Rubric Marines" <?php if($UNIT=='Rubric Marines') { echo "selected"; } ?> >Rubric Marines</option>
                        <option value="Aspiring Sorcerer" <?php if($UNIT=='Aspiring Sorcerer') { echo "selected"; } ?> >Aspiring Sorcerer</option>
                        <option disabled>─────FAST ATTACK─────</option>
                        <option disabled>─────HEAVY SUPPORT─────</option> 
                        <option disabled>─────FLYER─────</option>
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
                            if($UNIT=='Ahriman') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Inferno Bolt Pistol'<?php if($UNIT_WEAPON=='Inferno Bolt Pistol') { echo "selected"; } ?> >Inferno Bolt Pistol</option>
                        <option disabled>─────Grenades─────</option>
                        <option value='Frag Grenade'<?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value='Krak Grenade'<?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Black Staff of Ahriman'<?php if($UNIT_WEAPON=='Black Staff of Ahriman') { echo "selected"; } ?> >Black Staff of Ahriman</option>
                            <?php } 
                            if($UNIT=="Exhalted Sorcerer") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Inferno Bolt Pistol'<?php if($UNIT_WEAPON=='Inferno Bolt Pistol') { echo "selected"; } ?> >Inferno Bolt Pistol</option>
                        <option value='Plasma Pistol' <?php if($UNIT_WEAPON=='Plasma Pistol') { echo "selected"; } ?> >Plasma Pistol</option>
                        <option value='Supercharged Plasma Pistol' <?php if($UNIT_WEAPON=='Supercharged Plasma Pistol') { echo "selected"; } ?> >Supercharged Plasma Pistol</option>
                        <option value='Warp Flame Pistol' <?php if($UNIT_WEAPON=='Warp Flame Pistol') { echo "selected"; } ?> >Warp Flame Pistol</option>
                        <option disabled>─────Grenades─────</option>
                        <option value='Frag Grenade'<?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value='Krak Grenade'<?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Power Sword' <?php if($UNIT_WEAPON=='Power Sword') { echo "selected"; } ?> >Power Sword</option>                        
                        <option value='Force Stave' <?php if($UNIT_WEAPON=='Force Stave') { echo "selected"; } ?> >Force Stave</option>
                            <?php }
                            if($UNIT == "Scarab Occult Terminators") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Inferno Combi-bolter'<?php if($UNIT_WEAPON=='Inferno Combi-bolter') { echo "selected"; } ?> >Inferno Combi-bolter</option>
                        <option value='Heavy Warpflamer' <?php if($UNIT_WEAPON=='Heavy Warpflamer') { echo "selected"; } ?> >Heavy Warpflamer</option>
                        <option value='Soulreaper Cannon' <?php if($UNIT_WEAPON=='Soulreaper Cannon') { echo "selected"; } ?> >Soulreaper Cannon</option>
                        <option value='Hellfyre Missile Rack' <?php if($UNIT_WEAPON=='Hellfyre Missile Rack') { echo "selected"; } ?> >Hellfyre Missile Rack</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Power Sword' <?php if($UNIT_WEAPON=='Power Sword') { echo "selected"; } ?> >Power Sword</option>                      
                            <?php } 
                            if($UNIT == "Scarab Occult Sorcerer") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Inferno Combi-bolter'<?php if($UNIT_WEAPON=='Inferno Combi-bolter') { echo "selected"; } ?> >Inferno Combi-bolter</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Force Stave' <?php if($UNIT_WEAPON=='Force Stave') { echo "selected"; } ?> >Force Stave</option>                      
                            <?php } 
                            if($UNIT=="Rubric Marines") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Inferno Boltgun' <?php if($UNIT_WEAPON=='Inferno Boltgun') { echo "selected"; } ?> >Inferno Boltgun</option>
                        <option value='Warpflamer' <?php if($UNIT_WEAPON=='Warpflamer') { echo "selected"; } ?> >Warpflamer</option>
                        <option value='Soulreaper Cannon' <?php if($UNIT_WEAPON=='Soulreaper Cannon') { echo "selected"; } ?> >Soulreaper Cannon</option>
                            <?php }     
                            if($UNIT=="Aspiring Sorcerer") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Inferno Bolt Pistol'<?php if($UNIT_WEAPON=='Inferno Bolt Pistol') { echo "selected"; } ?> >Inferno Bolt Pistol</option>
                        <option value='Plasma Pistol' <?php if($UNIT_WEAPON=='Plasma Pistol') { echo "selected"; } ?> >Plasma Pistol</option>
                        <option value='Supercharged Plasma Pistol' <?php if($UNIT_WEAPON=='Supercharged Plasma Pistol') { echo "selected"; } ?> >Supercharged Plasma Pistol</option>
                        <option value='Warp Flame Pistol' <?php if($UNIT_WEAPON=='Warp Flame Pistol') { echo "selected"; } ?> >Warp Flame Pistol</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Force Stave' <?php if($UNIT_WEAPON=='Force Stave') { echo "selected"; } ?> >Force Stave</option>
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
        if (val === "Ahriman") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Inferno Bolt Pistol'>Inferno Bolt Pistol</option><option disabled>─────Grenades─────</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option><option disabled>─────Melee─────</option><option value='Black Staff of Ahriman'>Black Staff of Ahriman</option>");
        } else if (val === "Exhalted Sorcerer") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Inferno Bolt Pistol'>Inferno Bolt Pistol</option><option value='Plasma Pistol'>Plasma Pistol</option><option value='Supercharged Plasma Pistol'>Supercharged Plasma Pistol</option><option value='Warp Flame Pistol'>Warp Flame Pistol</option><option disabled>─────Grenades─────</option><option value='Frag Grenade'>Frag Grenade</option><option value='Krak Grenade'>Krak Grenade</option><option disabled>─────Melee─────</option><option value='Power Sword'>Power Sword</option><option value='Force Stave'>Force Stave</option>");
        } else if (val === "Scarab Occult Terminators") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Inferno Combi-bolter'>Inferno Combi-bolter</option><option value='Heavy Warpflamer'>Heavy Warpflamer</option><option value='Soulreaper Cannon'>Soulreaper Cannon</option><option value='Hellfyre Missile Rack'>Hellfyre Missile Rack</option><option disabled>─────Melee─────</option><option value='Power Sword'>Power Sword</option>");
        } else if (val === "Scarab Occult Sorcerer") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Inferno Combi-bolter'>Inferno Combi-bolter</option><option disabled>─────Melee─────</option><option value='Force Stave'>Force Stave</option>");
        }else if (val === "Rubric Marines") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Inferno Boltgun'>Inferno Boltgun</option><option value='Warpflamer'>Warpflamer</option><option value='Soulreaper Cannon'>Soulreaper Cannon</option>");
        } else if (val === "Aspiring Sorcerer") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Inferno Bolt Pistol'>Inferno Bolt Pistol</option><option value='Plasma Pistol'>Plasma Pistol</option><option value='Supercharged Plasma Pistol'>Supercharged Plasma Pistol</option><option value='Warp Flame Pistol'>Warp Flame Pistol</option><option disabled>─────Melee─────</option><option value='Force Stave'>Force Stave</option>");
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

        if($FACTION=='Thousand Sons') {
           
           require(__DIR__ . '/../../unit_stats/thousand_sons-stats.php');

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