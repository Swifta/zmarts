<?php defined('SYSPATH') OR die('No direct access allowed.');
class Auditor_Controller extends Layout_Controller
{
    //const ALLOW_PRODUCTION = TRUE;
    public function __construct()
    {
            parent::__construct();
            $this->auditor = new Auditor_Model();
                //constants ends here
                if(LANGUAGE == "french" ){
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/french_style.css',PATH.'themes/'.THEME_NAME.'/css/fr_multi_style.css'));
		}else if(LANGUAGE == "spanish"){
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/spanish_style.css',PATH.'themes/'.THEME_NAME.'/css/sp_multi_style.css'));
		}
		else{
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/style.css',PATH.'themes/'.THEME_NAME.'/css/multi_style.css'));
		}
    }

    public function get_merchant_audit(){
        $ret = "";
        if($this->input->post("merchant_id")){
            $details = $this->auditor->fetchUserLog(strip_tags(addslashes($this->input->post("merchant_id"))));
            $ret.= "<div style='width:100%;'>";
            $ret.="<p><strong>Store Name : </strong> ".
                    $this->auditor->getStorename(strip_tags(addslashes($this->input->post("merchant_id"))))."</p>";
            $ret.= "<table class='list_table fl clr mt5'><thead><td><strong>Date/Time</strong></td><td>".
                    "<strong>Administrator</strong></td><td><strong>Activity</strong></td>".
                    "<td><strong>Ip Address</strong></td><td><strong>More</strong></td></thead><tbody>";
            foreach ($details as $single){
                $title = "No additional information available";
                if(!empty($single->more_info)){
                    $title = $single->more_info;
                }
                $more_info = "<a style='color:blue;' class='tooltips' ".
                        " title='".str_replace("'", "-", $title)."' onclick=\"swal('".
                        str_replace("'", "-", $title)."'); return false;\">know-more</a>";
                $ip = "<span style='color:red'>Unknown</span>";
                if($single->ip!=""){
                    $ip = "<span style='color:green'>".$single->ip."</span>";
                }
                $ret.= "<tr>";
                $ret.= "<td>".date("d-m-Y H:i:s", $single->timing)."</td>";
                $ret.= "<td>".$single->email."</td>";
                $ret.= "<td>".$single->event."</td>";
                $ret.= "<td>".$ip."</td>";
                $ret.= "<td>".$more_info."</td>";
                $ret.= "</tr>";
            }
            $ret.= "</tbody></table></div>";
        }
        echo $ret;
        die;
    }
}
