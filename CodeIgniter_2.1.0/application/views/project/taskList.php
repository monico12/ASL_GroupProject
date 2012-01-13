<?php
    $this->load->helper('url');
    $this->load->helper('form');
    //echo $id;
    
    
    if(isset($id))
    {
        
        echo "<div id='desc'><h2>Description</h2>";
        foreach($desc as $r){
            echo $r->description;
        };
        
            
        ?></div><div id="taskpanel">
        
            <h2>Tasks</h2>

        
        <?php
            $btnAtt = array('class' => 'newbtn', 'name' => 'newtask');
            $btnDeleteAtt = array('class' => 'deletebutton', 'delete' => 'delete');
            
            

            echo form_open('projectController/addTaskForm');
	    echo form_submit($btnAtt, 'New Task');
	    echo form_close();
        
            echo "<ul>";
            foreach($id as $row)
            { ?>
            
            <?=form_open('taskController/deleteTask');    ?>      
            <li>
                <?php echo $row->task ?>
                <?php 
                        
                        //hidden form containing the projects id
                        echo form_hidden('id', $row->id);
                        echo $row->duedate;
                        echo form_submit($btnDeleteAtt, 'Delete');
                        //echo form_button($buttonData);

                ?>
            </li><?php echo form_close();
        }?>
        </ul></div>
    <?php
        
    


}

   