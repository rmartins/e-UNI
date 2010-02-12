<table border="0">
  <tr>
    <td width="600" height="65" valign="bottom"><div class="header-profilename" id="header-profilename">
    <?PHP
	
	    function get_content () {
        global $USER, $CFG, $SESSION, $COURSE;
        $wwwroot = '';
        $signup = '';}

        if (empty($CFG->loginhttps)) {
            $wwwroot = $CFG->wwwroot;
        } else {
            $wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
        }
        
	
if (!isloggedin() or isguestuser()) {
echo '<a href="'.$CFG->wwwroot.'/login/index.php">'.get_string('loggedinnot').'</a>';

} else {


echo '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id.'">'.$USER->firstname.' '.$USER->lastname.' '.'</a>';
}		


?>
    </div></td>
    <td width="90" height="90" rowspan="2"><div class="header-profilepic" id="header-profilepic">
        <?PHP


echo '<a href="'.$CFG->wwwroot.'/user/view.php?id='.$USER->id.'&amp;course='.$COURSE->id.'"><img src="'.$CFG->wwwroot.'/user/pix.php?file=/'.$USER->id.'/f1.jpg" width="80px" height="80px" title="'.$USER->firstname.' '.$USER->lastname.'" alt="'.$USER->firstname.' '.$USER->lastname.'" /></a>'; 

?>
      </div></td>
  </tr>
  <tr>
    <td width="600" height="25"> <div class="header-profileoptions" id="header-profileoptions">
    
    
    

 <?PHP
				
if (!isloggedin() or isguestuser()) {
echo '<ul class="login-box"><form class="loginform" id="login" method="post" action="'.$wwwroot.'/login/index.php">';
echo '<li><label for="login_username">'.get_string('username').'</label><input class="loginform" type="text" name="username" id="login_username" value="" /></li>';
echo '<li><label for="login_password">'.get_string('password').'</label><input class="loginform" type="password" name="password" id="login_password" value="" /></li>';
echo '<li><input type="submit" class="btn btn-m" value="&nbsp;&nbsp;'.get_string('login').'&nbsp;&nbsp;" /></li>';
echo '</form></ul>';

} else {
echo '<ul>';


$countmessages = count_records('message', 'useridto', $USER->id);

$popupvar = "'/message/index.php','message',' menubar=0,location=0,scrollbars,status,resizable,width=400,height=500',0";

if ($countmessages == 1){
echo '<li><a id="top_mensagens" href="#"  onclick="return openpopup('.$popupvar.');" >'.get_string('youhave')."<b> $countmessages ".get_string('message')."</b> ".'</a>|</li>';
}
else {
echo '<li> <a id="top_mensagens" href="#" onclick="return openpopup('.$popupvar.');" >'.get_string('youhave')."<b> $countmessages ".get_string('messages')."</b> ".'</a>|</li>';
}



echo '<li><a href="'.$CFG->wwwroot.'/login/logout.php?sesskey='.sesskey().'">'.get_string('logout').'</a></li>';
echo '</ul>';

}
?>


    
    </div>
    </td>
  </tr>
</table>
