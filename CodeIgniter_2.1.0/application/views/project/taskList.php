<?php
    $this->load->helper('url');
    $this->load->helper('form');
    echo $id;
    if(isset($id))
    {
        
        ?><ul>
        
        <?php
            foreach($id->result() as $row)
            { ?>
            
            <?=form_open('projectController/deleteTask');    ?>      
            <li><a href="">
                <?php echo $row->task ?></a>
                <?php 
                        
                        //hidden form containing the projects id
                        //echo form_hidden('id', $row->id);
                        //echo form_submit('delete', 'Delete');
                        //echo form_button($buttonData);



                ?>
            </li><?php echo form_close();
        }?>
        </ul>
    <?php
        
    


}

   