<?php
    $this->load->helper('url');
    $this->load->helper('form');
    //echo $id;
    if(isset($id))
    {
        
        ?><div id="taskpanel"><ul>
        
        <?php
            echo form_open('projectController/addTaskForm');
	    echo form_submit('newtask', 'New Task');
	    echo form_close();
        
            foreach($id as $row)
            { ?>
            
            <?=form_open('taskController/deleteTask');    ?>      
            <li><a href="">
                <?php echo $row->task ?></a>
                <?php 
                        
                        //hidden form containing the projects id
                        echo form_hidden('id', $row->id);
                        echo form_submit('delete', 'Delete');
                        //echo form_button($buttonData);

                ?>
            </li><?php echo form_close();
        }?>
        </ul></div>
    <?php
        
    


}

   