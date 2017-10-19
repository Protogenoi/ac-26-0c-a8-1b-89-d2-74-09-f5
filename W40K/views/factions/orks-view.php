       
            <div class="col-xs-4">
              <div class="notice notice-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><center><strong>Your units:</strong></center></div>
          
<div class="row">

<div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="UNIT">Unit:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="UNIT" id="UNIT" style="width: 170px" required>
                        <option value="">Select...</option>
                        <option disabled>─────HQ─────</option>
                        <option value="Ghazghkull Thraka" <?php if($UNIT=='Ghazghkull Thraka') { echo "selected"; } ?> >Ghazghkull Thraka</option>
                        <option value="Warboss" <?php if($UNIT=='Warboss') { echo "selected"; } ?> >Warboss</option>
                        <option disabled>─────ELITES─────</option>
                        <option value="Nob" <?php if($UNIT=='Nob') { echo "selected"; } ?> >Nob</option>
                        <option value="Boss Nob" <?php if($UNIT=='Boss Nob') { echo "selected"; } ?> >Boss Nob</option>
                        <option disabled value="Ammo Runt" <?php if($UNIT=='Ammo Runt') { echo "selected"; } ?> >Ammo Runt</option>                        
                        <option disabled>─────TROOPS─────</option>
                        <option value="Boyz" <?php if($UNIT=='Boyz') { echo "selected"; } ?> >Boyz</option>
                        <option disabled>─────FAST ATTACK─────</option>
                        <option value="Deffkoptas" <?php if($UNIT=='Deffkoptas') { echo "selected"; } ?> >Deffkoptas</option>
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
                            if($UNIT=='Ghazghkull Thraka') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Twin Big Shoota'<?php if($UNIT_WEAPON=='Twin Big Shoota') { echo "selected"; } ?> >Twin Big Shoota</option>
                        <option disabled>─────Grenade─────</option>
                        <option value='Stickbomb'<?php if($UNIT_WEAPON=='Stickbomb') { echo "selected"; } ?> >Stickbomb</option>                        
                        <option disabled>─────Melee─────</option>
                        <option value='Kustom Klaw'<?php if($UNIT_WEAPON=='Kustom Klaw') { echo "selected"; } ?> >Kustom Klaw</option>
                            <?php } 
                            if($UNIT=='Warboss') { ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Kustom Shoota'<?php if($UNIT_WEAPON=='Kustom Shoota') { echo "selected"; } ?> >Kustom Shoota</option>
                        <option disabled>─────Grenade─────</option>
                        <option value='Stickbomb'<?php if($UNIT_WEAPON=='Stickbomb') { echo "selected"; } ?> >Stickbomb</option>                        
                        <option disabled>─────Melee─────</option>
                        <option value='Attack Squig' <?php if($UNIT_WEAPON=='Attack Squig') { echo "selected"; } ?> >Attack Squig</option>
                        <option value='Big Choppa' <?php if($UNIT_WEAPON=='Big Choppa') { echo "selected"; } ?> >Big Choppa</option>
                       <option disabled>─────Shooty Weapons─────</option>
                        <option value='Kustom Shoota'<?php if($UNIT_WEAPON=='Kustom Shoota') { echo "selected"; } ?> >Kustom Shoota</option>
                        <option value='Kombi-weapon with Rokkit Launcha'<?php if($UNIT_WEAPON=='Kombi-weapon with Rokkit Launcha') { echo "selected"; } ?> >Kombi-weapon with Rokkit Launcha</option>
                        <option value='Kombi-weapon with Skorcha'<?php if($UNIT_WEAPON=='Kombi-weapon with Skorcha') { echo "selected"; } ?> >Kombi-weapon with Skorcha</option>
                        <option disabled>─────Choppy Weapons─────</option>
                        <option value='Big Choppa' <?php if($UNIT_WEAPON=='Big Choppa') { echo "selected"; } ?> >Big Choppa</option>
                        <option value='Power Klaw' <?php if($UNIT_WEAPON=='Power Klaw') { echo "selected"; } ?> >Power Klaw</option>                        
                            <?php } 
                            if($UNIT=="Boyz") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Shoota'<?php if($UNIT_WEAPON=='Shoota') { echo "selected"; } ?> >Shoota</option>
                        <option value='Sluga'<?php if($UNIT_WEAPON=='Sluga') { echo "selected"; } ?> >Sluga</option>
                        <option disabled>─────Grenade─────</option>
                        <option value='Stickbomb'<?php if($UNIT_WEAPON=='Stickbomb') { echo "selected"; } ?> >Stickbomb</option>                        
                        <option disabled>─────Melee─────</option>
                        <option value='Choppa' <?php if($UNIT_WEAPON=='Choppa') { echo "selected"; } ?> >Choppa</option>
                        <option disabled>─────Eavy Weapons─────</option>
                        <option value='Big Shoota'<?php if($UNIT_WEAPON=='Big Shoota') { echo "selected"; } ?> >Big Shoota</option>
                        <option value='Rokkit Launcha'<?php if($UNIT_WEAPON=='Rokkit Launcha') { echo "selected"; } ?> >Rokkit Launcha</option>
                        <option disabled>─────Boss Nob─────</option>
                        <option disabled>─────Shooty Weapons─────</option>
                        <option value='Kustom Shoota'<?php if($UNIT_WEAPON=='Kustom Shoota') { echo "selected"; } ?> >Kustom Shoota</option>
                        <option value='Kombi-weapon with Rokkit Launcha'<?php if($UNIT_WEAPON=='Kombi-weapon with Rokkit Launcha') { echo "selected"; } ?> >Kombi-weapon with Rokkit Launcha</option>
                        <option value='Kombi-weapon with Skorcha'<?php if($UNIT_WEAPON=='Kombi-weapon with Skorcha') { echo "selected"; } ?> >Kombi-weapon with Skorcha</option>
                        <option disabled>─────Choppy Weapons─────</option>
                        <option value='Big Choppa' <?php if($UNIT_WEAPON=='Big Choppa') { echo "selected"; } ?> >Big Choppa</option>
                        <option value='Power Klaw' <?php if($UNIT_WEAPON=='Power Klaw') { echo "selected"; } ?> >Power Klaw</option>                        
                            <?php }   
                            if($UNIT=="Nob") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Sluga'<?php if($UNIT_WEAPON=='Sluga') { echo "selected"; } ?> >Sluga</option>
                        <option disabled>─────Grenade─────</option>
                        <option value='Stickbomb'<?php if($UNIT_WEAPON=='Stickbomb') { echo "selected"; } ?> >Stickbomb</option>                        
                        <option disabled>─────Melee─────</option>
                        <option value='Choppa' <?php if($UNIT_WEAPON=='Choppa') { echo "selected"; } ?> >Choppa</option>
                        <option value='Killsaw' <?php if($UNIT_WEAPON=='Killsaw') { echo "selected"; } ?> >Killsaw</option> 
                        <option value='Power Stabba' <?php if($UNIT_WEAPON=='Power Stabba') { echo "selected"; } ?> >Power Stabba</option> 
                         <option disabled>─────Shooty Weapons─────</option>
                        <option value='Kustom Shoota'<?php if($UNIT_WEAPON=='Kustom Shoota') { echo "selected"; } ?> >Kustom Shoota</option>
                        <option value='Kombi-weapon with Rokkit Launcha'<?php if($UNIT_WEAPON=='Kombi-weapon with Rokkit Launcha') { echo "selected"; } ?> >Kombi-weapon with Rokkit Launcha</option>
                        <option value='Kombi-weapon with Skorcha'<?php if($UNIT_WEAPON=='Kombi-weapon with Skorcha') { echo "selected"; } ?> >Kombi-weapon with Skorcha</option>
                        <option disabled>─────Choppy Weapons─────</option>
                        <option value='Big Choppa' <?php if($UNIT_WEAPON=='Big Choppa') { echo "selected"; } ?> >Big Choppa</option>
                        <option value='Power Klaw' <?php if($UNIT_WEAPON=='Power Klaw') { echo "selected"; } ?> >Power Klaw</option>                        
                            <?php }    
                            if($UNIT=="Boss Nob") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Sluga'<?php if($UNIT_WEAPON=='Sluga') { echo "selected"; } ?> >Sluga</option>
                        <option disabled>─────Grenade─────</option>
                        <option value='Stickbomb'<?php if($UNIT_WEAPON=='Stickbomb') { echo "selected"; } ?> >Stickbomb</option>                        
                        <option disabled>─────Melee─────</option>
                        <option value='Choppa' <?php if($UNIT_WEAPON=='Choppa') { echo "selected"; } ?> >Choppa</option>
                        <option value='Killsaw' <?php if($UNIT_WEAPON=='Killsaw') { echo "selected"; } ?> >Killsaw</option> 
                        <option value='Power Stabba' <?php if($UNIT_WEAPON=='Power Stabba') { echo "selected"; } ?> >Power Stabba</option> 
                         <option disabled>─────Shooty Weapons─────</option>
                        <option value='Kustom Shoota'<?php if($UNIT_WEAPON=='Kustom Shoota') { echo "selected"; } ?> >Kustom Shoota</option>
                        <option value='Kombi-weapon with Rokkit Launcha'<?php if($UNIT_WEAPON=='Kombi-weapon with Rokkit Launcha') { echo "selected"; } ?> >Kombi-weapon with Rokkit Launcha</option>
                        <option value='Kombi-weapon with Skorcha'<?php if($UNIT_WEAPON=='Kombi-weapon with Skorcha') { echo "selected"; } ?> >Kombi-weapon with Skorcha</option>
                        <option disabled>─────Choppy Weapons─────</option>
                        <option value='Big Choppa' <?php if($UNIT_WEAPON=='Big Choppa') { echo "selected"; } ?> >Big Choppa</option>
                        <option value='Power Klaw' <?php if($UNIT_WEAPON=='Power Klaw') { echo "selected"; } ?> >Power Klaw</option>                        
                            <?php }   
                            if($UNIT=="Deffkoptas") {
                            ?>
                        <option disabled>─────Wargear─────</option>
                        <option value='Kopta Rokkits'<?php if($UNIT_WEAPON=='Kopta Rokkits') { echo "selected"; } ?> >Kopta Rokkits</option>
                        <option value='Kustom Mega-blasta'<?php if($UNIT_WEAPON=='Kustom Mega-blasta') { echo "selected"; } ?> >Kustom Mega-blasta</option>                        
                        <option value='Twin Big Shoota'<?php if($UNIT_WEAPON=='Twin Big Shoota') { echo "selected"; } ?> >Twin Big Shoota</option>                        
                        <option disabled>─────Melee─────</option>                        
                        <option value='Killsaw'<?php if($UNIT_WEAPON=='Killsaw') { echo "selected"; } ?> >Killsaw</option>                        
                        <option value='Spinnin’ Blades'<?php if($UNIT_WEAPON=='Spinnin’ Blades') { echo "selected"; } ?> >Spinnin’ Blades</option>                        
                        <option value='Bigbomm'<?php if($UNIT_WEAPON=='Bigbomm') { echo "selected"; } ?> >Bigbomm</option>                                              
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
        if (val === "Ghazghkull Thraka") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Twin Big Shoota'>Twin Big Shoota</option><option disabled>─────Melee─────</option><option value='Stickbomb'>Stickbomb</option><option disabled>─────Melee─────</option><option value='Kustom Klaw'>Kustom Klaw</option>");
        } else if (val === "Warboss") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Kustom Shoota'>Kustom Shoota</option><option disabled>─────Grenade─────</option><option value='Stickbomb'>Stickbomb</option><option disabled>─────Melee─────</option><option value='Attack Squig'>Attack Squig</option><option value='Big Choppa'>Big Choppa</option><option disabled>─────Shooty Weapons─────</option><option value='Kustom Shoota'>Kustom Shoota</option><option value='Kombi-weapon with Rokkit Launcha'>Kombi-weapon with Rokkit Launcha</option><option value='Kombi-weapon with Skorcha'>Kombi-weapon with Skorcha</option><option disabled>─────Choppy Weapons─────</option><option value='Big Choppa'>Big Choppa</option><option value='Power Klaw'>Power Klaw</option>");
        } else if (val === "Boyz") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Shoota'>Shoota</option><option value='Sluga'>Sluga</option><option disabled>─────Grenade─────</option><option value='Stickbomb'>Stickbomb</option><option disabled>─────Melee─────</option><option value='Choppa'>Choppa</option><option disabled>─────Eavy Weapons─────</option><option value='Big Shoota'>Big Shoota</option><option value='Rokkit Launcha'>Rokkit Launcha</option><option disabled>─────Boss Nob─────</option><option disabled>─────Nobz Wargear─────</option><option value='Kustom Shoota'>Kustom Shoota</option><option value='Kombi-weapon with Rokkit Launcha'>Kombi-weapon with Rokkit Launcha</option><option value='Kombi-weapon with Skorcha'>Kombi-weapon with Skorcha</option><option disabled>─────Melee─────</option><option value='Big Choppa'>Big Choppa</option><option value='Power Klaw'>Power Klaw</option>");
        } else if (val === "Nob") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Sluga'>Sluga</option><option disabled>─────Grenade─────</option><option value='Stickbomb'>Stickbomb</option><option disabled>─────Melee─────</option><option value='Choppa'>Choppa</option><option value='Killsaw'>Killsaw</option><option value='Power Stabba'>Power Stabba</option><option disabled>─────Shooty Weapons─────</option><option value='Kustom Shoota'>Kustom Shoota</option><option value='Kombi-weapon with Rokkit Launcha'>Kombi-weapon with Rokkit Launcha</option><option value='Kombi-weapon with Skorcha'>Kombi-weapon with Skorcha</option><option disabled>─────Choppy Weapons─────</option><option value='Big Choppa'>Big Choppa</option><option value='Power Klaw'>Power Klaw</option>");
        } else if (val === "Boss Nob") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Sluga'>Sluga</option><option disabled>─────Grenade─────</option><option value='Stickbomb'>Stickbomb</option><option disabled>─────Melee─────</option><option value='Choppa'>Choppa</option><option value='Killsaw'>Killsaw</option><option value='Power Stabba'>Power Stabba</option><option disabled>─────Shooty Weapons─────</option><option value='Kustom Shoota'>Kustom Shoota</option><option value='Kombi-weapon with Rokkit Launcha'>Kombi-weapon with Rokkit Launcha</option><option value='Kombi-weapon with Skorcha'>Kombi-weapon with Skorcha</option><option disabled>─────Choppy Weapons─────</option><option value='Big Choppa'>Big Choppa</option><option value='Power Klaw'>Power Klaw</option>");
        } else if (val === "Deffkoptas") {
            $("#UNIT_WEAPON").html("<option disabled>─────Wargear─────</option><option value='Kopta Rokkits'>Kopta Rokkits</option><option value='Kustom Mega-blasta'>Kustom Mega-blasta</option><option value='Twin Big Shoota'>Twin Big Shoota</option><option disabled>─────Melee─────</option><option value='Killsaw'>Killsaw</option><option value='Spinnin’ Blades'>Spinnin’ Blades</option><option value='Bigbomm'>Bigbomm</option>");
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

        if($FACTION=='Orks') {
           
           require(__DIR__ . '/../../unit_stats/orks-stats.php');

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
