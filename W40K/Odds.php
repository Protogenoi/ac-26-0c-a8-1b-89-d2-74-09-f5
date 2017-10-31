<?php
if (isset($fferror)) {
    if ($fferror == '1') {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
}

$ACTION = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

$BS = filter_input(INPUT_POST, 'BS', FILTER_SANITIZE_SPECIAL_CHARS);
$SHOTS = filter_input(INPUT_POST, 'SHOTS', FILTER_SANITIZE_SPECIAL_CHARS);
$WEAPON_STRENGTH = filter_input(INPUT_POST, 'WEAPON_STRENGTH', FILTER_SANITIZE_SPECIAL_CHARS);
$WEAPON_DAMAGE = filter_input(INPUT_POST, 'WEAPON_DAMAGE', FILTER_SANITIZE_SPECIAL_CHARS);
$WEAPON_AP = filter_input(INPUT_POST, 'WEAPON_AP', FILTER_SANITIZE_SPECIAL_CHARS);
$TARGET_TOUGHNESS = filter_input(INPUT_POST, 'TARGET_TOUGHNESS', FILTER_SANITIZE_SPECIAL_CHARS);
$TARGET_SAVE = filter_input(INPUT_POST, 'TARGET_SAVE', FILTER_SANITIZE_SPECIAL_CHARS);
$TARGET_INVUL = filter_input(INPUT_POST, 'TARGET_INVUL', FILTER_SANITIZE_SPECIAL_CHARS);

if(isset($ACTION) && $ACTION==1) {
    
    include('../W40K/class/odds_cal.php');
    
    $odds_cal = new odds_cal($BS,$SHOTS,$WEAPON_STRENGTH,$WEAPON_DAMAGE,$WEAPON_AP,$TARGET_TOUGHNESS,$TARGET_SAVE,$TARGET_INVUL);
    $odds_cal->calculate_hits();
    $odds_cal->calculate_wounds();
    $odds_cal->calculate_unsaved();
    
    $odds_cal->show_results();
}
?>
<!DOCTYPE html>
<!-- 
 Copyright (C) ADL CRM - All Rights Reserved
 Unauthorised copying of this file, via any medium is strictly prohibited
 Proprietary and confidential
 Written by Michael Owen <michael@adl-crm.uk>, 2017
-->
<html lang="en">
    <title>Odds</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/Notices.css" type="text/css" />
    <link href="/img/favicon.ico" rel="icon" type="/image/x-icon" />
    <script type="text/javascript" language="javascript" src="/js/jquery/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery-ui-1.11.4/external/jquery/jquery.js"></script>
    <script src="/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        
<div class="col-md-12">
    <div class="row">
                
        <form method="POST" action="Odds.php?action=1">
            
            <div class="form-group">
                <label class="col-sm-1 control-label" style="text-align:left;" for="BS">BS:</label>
                <div class="col-sm-1">
                    <input type="text" name="BS" class="form-control" value="<?php if(isset($BS)) { echo $BS; } ?>" >
                </div>     
            </div>            
            
            <div class="form-group">
                <label class="col-sm-1 control-label" style="text-align:left;" for="SHOTS">Shots:</label>
                <div class="col-sm-1">
                    <input type="text" name="SHOTS" class="form-control" value="<?php if(isset($SHOTS)) { echo $SHOTS; } ?>" >
                </div>     
            </div>
            
            <div class="form-group">
                <label class="col-sm-1 control-label" style="text-align:left;" for="WEAPON_STRENGTH">STR:</label>
                <div class="col-sm-1">
                    <input type="text" name="WEAPON_STRENGTH" class="form-control" value="<?php if(isset($WEAPON_STRENGTH)) { echo $WEAPON_STRENGTH; } ?>" >
                </div>     
            </div> 
            
            <div class="form-group">
                <label class="col-sm-1 control-label" style="text-align:left;" for="WEAPON_DAMAGE">DMH:</label>
                <div class="col-sm-1">
                    <input type="text" name="WEAPON_DAMAGE" class="form-control" value="<?php if(isset($WEAPON_DAMAGE)) { echo $WEAPON_DAMAGE; } ?>" >
                </div>     
            </div>              
            
            <div class="form-group">
                <label class="col-sm-1 control-label" style="text-align:left;" for="WEAPON_AP">AP:</label>
                <div class="col-sm-1">
                    <input type="text" name="WEAPON_AP" class="form-control" value="<?php if(isset($WEAPON_AP)) { echo $WEAPON_AP; } ?>" >
                </div>     
            </div>
            
            <div class="form-group">
                <label class="col-sm-1 control-label" style="text-align:left;" for="TARGET_TOUGHNESS">T:</label>
                <div class="col-sm-1">
                    <input type="text" name="TARGET_TOUGHNESS" class="form-control" value="<?php if(isset($TARGET_TOUGHNESS)) { echo $TARGET_TOUGHNESS; } ?>" >
                </div>     
            </div> 
            
            <div class="form-group">
                <label class="col-sm-1 control-label" style="text-align:left;" for="TARGET_SAVE">Sv:</label>
                <div class="col-sm-1">
                    <input type="text" name="TARGET_SAVE" class="form-control" value="<?php if(isset($TARGET_SAVE)) { echo $TARGET_SAVE; } ?>" >
                </div>     
            </div> 

            <div class="form-group">
                <label class="col-sm-1 control-label" style="text-align:left;" for="TARGET_INVUL">Inv:</label>
                <div class="col-sm-1">
                    <input type="text" name="TARGET_INVUL" class="form-control" value="<?php if(isset($TARGET_INVUL)) { echo $TARGET_INVUL; } ?>" >
                </div>     
            </div>            
            

            
            <div class="form-group">                
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-success "><span class="glyphicon glyphicon-ok"></span> Go!</button>
                </div>
            </div>            
            
        </form>
            </div>

    </div>
 </div>  

</body>
</html>
