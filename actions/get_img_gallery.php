<?php
include_once "../configure/db.php";
$data = null;
//session_start();
$result = R::getAll("SELECT * FROM photos where id_kategorii =".$_REQUEST['id']." ORDER BY id DESC");

if(empty($result) == true){
    return 0;
}
else {
    foreach ($result as $row) {
        if(isset($_SESSION['logged_user'])) :
             $data .= '
    <div class="col-md-4 col-xs-12 col-sm-6 img_block">
        <a class="photo_link img_link swipebox" id="'.$row['id']. '" href="../' . $row['location_resize'] . '">
            <img src="../'. $row['location_mini'] . '" id="img_'.$row['id'].'" title="'.$row['name_photo'].'" alt="'. $row['alt'].'" />';

            if(trim($row['hover_box_info']) != "") {
                $data .= '
            <div id="modal_box_'.$row['id']. '" class="modal_box">
              <!-- Modal content -->
              <div class="hover_box_content" style="height: 81%;">
                <p>'.$row['hover_box_info'].'</p>
              </div>
            </div> </a>';
        }
        else{ $data .= '</a>';}

      $data .= ' 
        <div class="col-md-3">
            <a href="#openModal_'.$row['id'].'" id="del_'.$row['id']. '"><img src="../templates/img/button_cancel.png"></a>

            <div id="openModal_' .$row['id'].'" class="modalDialog">
                <div>
                    <a href="#close" title="Закрыть" class="close">X</a>
                    <h2></h2>
                    <p>Ви спаравді бажаєте видалити фото?</p>
                    <form action="" method="post">
                        <input type="button" href="#close" id="delete" value="Tak" onClick="delete_request('.$row['id'].')"/>
                    </form>
                    <a href="#close" title="nodelete" class="nodelete" >Hi</a>
                </div>
            </div>
        </div>
     </div>';
        else :
            $data .= '
    <div class="col-md-4 col-xs-12 col-sm-6 img_block">
        <a class="img_link swipebox" id="'.$row['id']. '" href="../' . $row['location_resize'] . '" >
            <img src="../'. $row['location_mini'] . '" title="'.$row['name_photo'].'" alt="'. $row['alt'].'" />';

            if(trim($row['hover_box_info']) != "") {
                $data .= '
            <div id="modal_box_'.$row['id']. '" class="modal_box">
              <!-- Modal content -->
              <div class="hover_box_content">
                <p>'.$row['hover_box_info'].'</p>
              </div>
            </div>
            ';
         }
        $data .= '</a> </div> </div>';
        endif;
    }
echo $data;

}

?>