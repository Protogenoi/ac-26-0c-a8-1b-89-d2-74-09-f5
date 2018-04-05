       
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
                        <option value="Overlord" <?php if($UNIT=='Overlord') { echo "selected"; } ?> >Overlord</option>
                        <option value="Lord" <?php if($UNIT=='Lord') { echo "selected"; } ?> >Lord</option>
                        <option value="Cryptec" <?php if($UNIT=='Cryptec') { echo "selected"; } ?> >Cryptec</option>
                        <option disabled>─────ELITES─────</option>
                        <option value="Lychguard" <?php if($UNIT=='Lychguard') { echo "selected"; } ?> >Lychguard</option>
                        <option disabled>─────TROOPS─────</option>
                        <option value="Necron Warriors" <?php if($UNIT=='Necron Warriors') { echo "selected"; } ?> >Necron Warriors</option>
                        <option value="Immortals" <?php if($UNIT=='Immortals') { echo "selected"; } ?> >Immortals</option>
                        <option disabled>─────FAST ATTACK─────</option>
                        <option value="Canoptek Wraiths" <?php if($UNIT=='Canoptek Wraiths') { echo "selected"; } ?> >Canoptek Wraiths</option>
                        <option value="Canoptek Scarabs" <?php if($UNIT=='Canoptek Scarabs') { echo "selected"; } ?> >Canoptek Scarabs</option>
                        <option disabled>─────HEAVY SUPPORT─────</option>   
                        <option value="Annihilation Barge" <?php if($UNIT=='Annihilation Barge') { echo "selected"; } ?> >Annihilation Barge</option>
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
                            if($UNIT=='Imotekh the Stormlord') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Gauntlet of Fire'<?php if($UNIT_WEAPON=='Gauntlet of Fire') { echo "selected"; } ?> >Gauntlet of Fire</option>
                        <option value='Staff of the Destroyer'<?php if($UNIT_WEAPON=='Staff of the Destroyer') { echo "selected"; } ?> >Staff of the Destroyer</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Staff of the Destroyer (Melee)'<?php if($UNIT_WEAPON=='Staff of the Destroyer (Melee)') { echo "selected"; } ?> >Staff of the Destroyer (Melee)</option>
                            <?php } 
                            if($UNIT=='Overlord') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Staff of Light'<?php if($UNIT_WEAPON=='Staff of Light') { echo "selected"; } ?> >Staff of Light</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Staff of Light (Melee)'<?php if($UNIT_WEAPON=='Staff of Light') { echo "selected"; } ?> >Staff of Light</option>
                        <option value='Voidscythe'<?php if($UNIT_WEAPON=='Voidscythe') { echo "selected"; } ?> >Voidscythe</option>
                        <option value='Hyperphase Sword'<?php if($UNIT_WEAPON=='Hyperphase Sword') { echo "selected"; } ?> >Hyperphase Sword</option>
                        <option value='Warscythe'<?php if($UNIT_WEAPON=='Warscythe') { echo "selected"; } ?> >Warscythe</option>
                        <option value='Voidblade'<?php if($UNIT_WEAPON=='Voidblade') { echo "selected"; } ?> >Voidblade</option>
                            <?php }  
                            if($UNIT=='Lord') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Staff of Light'<?php if($UNIT_WEAPON=='Staff of Light') { echo "selected"; } ?> >Staff of Light</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Staff of Light (Melee)'<?php if($UNIT_WEAPON=='Staff of Light') { echo "selected"; } ?> >Staff of Light</option>
                        <option value='Hyperphase Sword'<?php if($UNIT_WEAPON=='Hyperphase Sword') { echo "selected"; } ?> >Hyperphase Sword</option>
                        <option value='Warscythe'<?php if($UNIT_WEAPON=='Warscythe') { echo "selected"; } ?> >Warscythe</option>
                        <option value='Voidblade'<?php if($UNIT_WEAPON=='Voidblade') { echo "selected"; } ?> >Voidblade</option>
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
                            if($UNIT=="Lychguard") {
                            ?>
                        <option disabled>─────Melee─────</option>
                        <option value='Hyperphase Sword'<?php if($UNIT_WEAPON=='Hyperphase Sword') { echo "selected"; } ?> >Hyperphase Sword</option>
                        <option value='Warscythe'<?php if($UNIT_WEAPON=='Warscythe') { echo "selected"; } ?> >Warscythe</option>
                            <?php }  
                            if($UNIT=="Canoptek Wraiths") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Particle Caster'<?php if($UNIT_WEAPON=='Particle Caster') { echo "selected"; } ?> >Particle Caster</option>
                        <option value='Transdimensional Beamer'<?php if($UNIT_WEAPON=='Transdimensional Beamer') { echo "selected"; } ?> >Transdimensional Beamer</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Whip Coils'<?php if($UNIT_WEAPON=='Whip Coils') { echo "selected"; } ?> >Whip Coils</option>
                        <option value='Vicious Claws'<?php if($UNIT_WEAPON=='Vicious Claws') { echo "selected"; } ?> >Vicious Claws</option>
                            <?php }  
                            if($UNIT=="Canoptek Scarabs") {
                            ?>
                        <option disabled>─────Melee─────</option>
                        <option value='Feeder Mandibles'<?php if($UNIT_WEAPON=='Feeder Mandibles') { echo "selected"; } ?> >Feeder Mandibles</option>
                            <?php }
                            if($UNIT=="Annihilation Barge") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Gauss Cannon'<?php if($UNIT_WEAPON=='Gauss Cannon') { echo "selected"; } ?> >Gauss Cannon</option>
                        <option value='Tesla Cannon'<?php if($UNIT_WEAPON=='Tesla Cannon') { echo "selected"; } ?> >Tesla Cannon</option>
                        <option value='Twin Tesla Destructor'<?php if($UNIT_WEAPON=='Twin Tesla Destructor') { echo "selected"; } ?> >Twin Tesla Destructor</option>
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
        } 
        
        else if (val === "Overlord") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Staff of Light'>Staff of Light</option><option disabled>─────Melee─────</option><option value='Staff of Light (Melee)'>Staff of Light</option><option value='Hyperphase Sword'>Hyperphase Sword</option><option value='Warscythe'>Warscythe</option><option value='Voidblade'>Voidblade</option>");
        }

        else if (val === "Lord") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Staff of Light'>Staff of Light</option><option disabled>─────Melee─────</option><option value='Staff of Light (Melee)'>Staff of Light</option><option value='Voidscythe'>Voidscythe</option><option value='Hyperphase Sword'>Hyperphase Sword</option><option value='Warscythe'>Warscythe</option><option value='Voidblade'>Voidblade</option>");
        }      
        
        else if (val === "Cryptec") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Staff of Light'>Staff of Light</option><option disabled>─────Melee─────</option><option value='Staff of Light (Melee)'>Staff of Light (Melee)</option>");
        } 
        
        else if (val === "Necron Warriors") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Gauss Flayer'>Gauss Flayer</option>");
        } 
        
        else if (val === "Immortals") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Gauss Blaster'>Gauss Blaster</option><option value='Tesla Carbine'>Tesla Carbine</option>");
        } 
        
        else if (val === "Lychguard") {
            $("#UNIT_WEAPON").html("<option disabled>─────Melee─────</option><option value='Hyperphase Sword'>Hyperphase Sword</option><option value='Warscythe'>Warscythe</option>");
        } 
        
        else if (val === "Canoptek Wraiths") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Particle Caster'>Particle Caster</option><option value='Transdimensional Beamer'>Transdimensional Beamer</option><option disabled>─────Melee─────</option><option value='Whip Coils'>Whip Coils</option><option value='Vicious Claws'>Vicious Claws</option>");
        }  
        
        else if (val === "Canoptek Scarabs") {
            $("#UNIT_WEAPON").html("<option value='Feeder Mandibles'>Feeder Mandibles</option>");
        } 
        
        else if (val === "Annihilation Barge") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Gauss Cannon'>Gauss Cannon</option><option value='Tesla Cannon'>Tesla Cannon</option><option value='Twin Tesla Destructor'>Twin Tesla Destructor</option>");
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
