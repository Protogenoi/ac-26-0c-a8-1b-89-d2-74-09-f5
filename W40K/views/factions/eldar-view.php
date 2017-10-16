       
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
                        <option value="Warlock" <?php if($UNIT=='Warlock') { echo "selected"; } ?> >Warlock</option>
                        <option disabled>─────ELITES─────</option>
                        <option disabled>─────TROOPS─────</option>
                        <option value="Guardian Defenders" <?php if($UNIT=='Guardian Defenders') { echo "selected"; } ?> >Guardian Defenders</option>
                        <option value="Rangers" <?php if($UNIT=='Rangers') { echo "selected"; } ?> >Rangers</option>
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
                            if($UNIT=='Eldrad Ulthran') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Shuriken Pistol'<?php if($UNIT_WEAPON=='Shuriken Pistol') { echo "selected"; } ?> >Shuriken Pistol</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Staff of Ulthamar'<?php if($UNIT_WEAPON=='Staff of Ulthamar') { echo "selected"; } ?> >Staff of Ulthamar</option>
                        <option value='Witchblade'<?php if($UNIT_WEAPON=='Witchblade') { echo "selected"; } ?> >Witchblade</option>
                            <?php } 
                            if(strpos($UNIT,"Bezerker") !== false) {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Bolt Pistol'<?php if($UNIT_WEAPON=='Bolt Pistol') { echo "selected"; } ?> >Bolt Pistol</option>
                        <option value='Plasma Pistol' <?php if($UNIT_WEAPON=='Plasma Pistol') { echo "selected"; } ?> >Plasma Pistol</option>
                        <option value='Supercharged Plasma Pistol' <?php if($UNIT_WEAPON=='Supercharged Plasma Pistol') { echo "selected"; } ?> >Supercharged Plasma Pistol</option>
                        <option value='Frag Grenade' <?php if($UNIT_WEAPON=='Frag Grenade') { echo "selected"; } ?> >Frag Grenade</option>
                        <option value='Krak Grenade' <?php if($UNIT_WEAPON=='Krak Grenade') { echo "selected"; } ?> >Krak Grenade</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Chain Sword' <?php if($UNIT_WEAPON=='Chain Sword') { echo "selected"; } ?> >Chain Sword</option>
                        <option value='Chainaxe' <?php if($UNIT_WEAPON=='Chainaxe') { echo "selected"; } ?> >Chainaxe</option>
                        <option disabled>─────Champion Equipment─────</option>
                        <option value='Boltgun' <?php if($UNIT_WEAPON=='Boltgun') { echo "selected"; } ?> >Boltgun</option>
                        <option value='Combi-bolter'<?php if($UNIT_WEAPON=='Combi-bolter') { echo "selected"; } ?> >Combi-bolter</option> 
                        <option value='Combi-flamer'<?php if($UNIT_WEAPON=='Combi-flamer') { echo "selected"; } ?> >Combi-flamer</option>                       
                        <option value='Combi-melta'<?php if($UNIT_WEAPON=='Combi-melta') { echo "selected"; } ?> >Combi-melta</option>
                        <option value='Combi-plasma'<?php if($UNIT_WEAPON=='Combi-plasma') { echo "selected"; } ?> >Combi-plasma</option>
                        <option value='Supercharged Combi-plasma'<?php if($UNIT_WEAPON=='Supercharged Combi-plasma') { echo "selected"; } ?> >Supercharged Combi-plasma</option>
                        <option disabled>─────Melee─────</option>
                        <option value='Lighting Claw' <?php if($UNIT_WEAPON=='Lighting Claw') { echo "selected"; } ?> >Lighting Claw</option>
                        <option value='Power Axe' <?php if($UNIT_WEAPON=='Power Axe') { echo "selected"; } ?> >Power Axe</option>
                        <option value='Power Fist' <?php if($UNIT_WEAPON=='Power Fist') { echo "selected"; } ?> >Power Fist</option>
                        <option value='Power Maul' <?php if($UNIT_WEAPON=='Power Maul') { echo "selected"; } ?> >Power Maul</option>
                        <option value='Power Sword' <?php if($UNIT_WEAPON=='Power Sword') { echo "selected"; } ?> >Power Sword</option>
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
        } else if (val === "Abaddon the Despoiler") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Talon of Horus'>Talon of Horus</option><option disabled>─────Melee─────</option><option value='Talon of Horus (Melee)'>Talon of Horus (Melee)</option><option value='Drachnyen'>Drach'nyen</option>");
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
