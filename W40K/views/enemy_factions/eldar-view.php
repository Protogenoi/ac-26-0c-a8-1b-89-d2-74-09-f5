            <div class="col-xs-4">
             <div class="notice notice-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><center><strong>Enemy units:</strong></center></div>
             <div class="row">
                 
<div class="form-group">
                <label class="col-sm-4 control-label" style="text-align:left;" for="TARGET_UNIT">Target Unit:</label>
                <div class="col-sm-6">
                    <select class="form-control" name="TARGET_UNIT" id="UNIT" style="width: 170px" required>
                        <option value="">Select...</option>
                        <option disabled>─────HQ─────</option>
                        <option value="Eldrad Ulthran" <?php if($TARGET_UNIT=='Eldrad Ulthran') { echo "selected"; } ?> >Eldrad Ulthran</option>
                        <option value="Farseer" <?php if($TARGET_UNIT=='Farseer') { echo "selected"; } ?> >Farseer</option>
                        <option value="Warlock" <?php if($TARGET_UNIT=='Warlock') { echo "selected"; } ?> >Warlock</option>
                        <option disabled>─────ELITES─────</option>
                        <option value="Wraithguard" <?php if($TARGET_UNIT=='Wraithguard') { echo "selected"; } ?> >Wraithguard</option>
                        <option disabled>─────TROOPS─────</option>
                        <option value="Guardian Defenders" <?php if($TARGET_UNIT=='Guardian Defenders') { echo "selected"; } ?> >Guardian Defenders</option>
                        <option value="Rangers" <?php if($TARGET_UNIT=='Rangers') { echo "selected"; } ?> >Rangers</option>
                        <option value="Dire Avengers" <?php if($TARGET_UNIT=='Dire Avengers') { echo "selected"; } ?> >Dire Avengers</option>
                        <option value="Dire Avengers Exarch" <?php if($TARGET_UNIT=='Dire Avengers Exarch') { echo "selected"; } ?> >Dire Avengers Exarch</option>
                        <option disabled>─────FAST ATTACK─────</option>
                        <option disabled>─────HEAVY SUPPORT─────</option>
                        <option value="Dark Reapers" <?php if($TARGET_UNIT=='Dark Reapers') { echo "selected"; } ?> >Dark Reapers</option>
                        <option value="Dark Reapers Exarch" <?php if($TARGET_UNIT=='Dark Reapers Exarch') { echo "selected"; } ?> >Dark Reapers Exarch</option>
                        <option value="War Walkers" <?php if($TARGET_UNIT=='War Walkers') { echo "selected"; } ?> >War Walkers</option>                        
                        <option value="Wraithlord" <?php if($TARGET_UNIT=='Wraithlord') { echo "selected"; } ?> >Wraithlord</option> 
                        <option disabled>─────FLYER─────</option>
                        <option value="Hemlock Wraithfighter" <?php if($TARGET_UNIT=='Hemlock Wraithfighter') { echo "selected"; } ?> >Hemlock Wraithfighter</option>
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

        if($ENEMY_FACTION=='Eldar') {
           
           require(__DIR__ . '/../../target_stats/eldar-stats.php');

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