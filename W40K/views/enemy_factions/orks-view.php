            <div class="col-xs-4">
             <div class="notice notice-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><center><strong>Enemy units:</strong></center></div>
             <div class="row">
                 
<div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="TARGET_UNIT">Target Unit:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="TARGET_UNIT" id="UNIT" style="width: 170px" required>
                        <option value="">Select...</option>
                        <option disabled>─────HQ─────</option>
                        <option value="Ghazghkull Thraka" <?php if($TARGET_UNIT=='Ghazghkull Thraka') { echo "selected"; } ?> >Ghazghkull Thraka</option>
                        <option disabled>─────ELITES─────</option>
                        <option value="Nob" <?php if($TARGET_UNIT=='Nob') { echo "selected"; } ?> >Nob</option>
                        <option value="Boss Nob" <?php if($TARGET_UNIT=='Boss Nob') { echo "selected"; } ?> >Boss Nob</option>
                        <option value="Ammo Runt" <?php if($TARGET_UNIT=='Ammo Runt') { echo "selected"; } ?> >Ammo Runt</option>                        
                        <option disabled>─────TROOPS─────</option>
                        <option value="Boyz" <?php if($TARGET_UNIT=='Boyz') { echo "selected"; } ?> >Boyz</option>
                        <option disabled>─────FAST ATTACK─────</option>
                        <option value="Deffkoptas" <?php if($TARGET_UNIT=='Deffkoptas') { echo "selected"; } ?> >Deffkoptas</option>
                        <option disabled>─────HEAVY SUPPORT─────</option>
                    </select>
                </div>     
            </div> 
             </div>
         <?php if(isset($TARGET_UNIT)) { ?>
             <br><br><br><br><br><br><br><br><br><br>
              <div class="row">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Abilities, keywords, and faction keywords.</div>
      <div class="panel-body">
          
<?php

        if($ENEMY_FACTION=='Orks') {
           
           require(__DIR__ . '/../../target_stats/orks-stats.php');

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
           <td>$T_MOVE</td>
           <td>$T_WS</td>
           <td>$T_BS</td>
           <td>$T_STR</td>
           <td>$T_TOUGHNESS</td>
           <td>$T_WOUNDS</td>
           <td>$T_ATTACKS</td>
           <td>$T_LD</td>
           <td>$T_SAVE</td>
           <td>$T_INVUL</td>
           </tr>
           </table>";
        
        echo "<strong>Abilities:</strong><ul>";
foreach($T_ABILITIES as $key) {
    echo "<li>$key</li>";
}

echo "</ul><strong>Faction Keywords:</strong><ul>";
foreach($T_FACTION_KW as $key) {
    echo "<li>$key</li>";
}
echo "</ul><strong>Keywords:</strong><ul>";
foreach($T_KEYWORDS as $key) {
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