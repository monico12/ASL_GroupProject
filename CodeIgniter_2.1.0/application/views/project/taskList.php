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
        ?>
         <div id="label">
                <p>Task</p>
                <p class="right">Due Date</p>
                <p class="middle">Assigned</p>
         </div>
        
        <?php
            
            echo "<ul id='tasklist'>";
            foreach($id as $row)
            { ?>
            
            <?=form_open('projectController/updateTask');    ?>      
            <li>
                <?php echo "<div id='task'>".$row->task."</div>" ?>
                <?php 
                        
                        //hidden form containing the task id
                        echo form_hidden('id', $row->id);
                    
                        echo form_submit($btnDeleteAtt, 'Update');

                        echo "<a id='deletebtn'href='/ASL_GroupProject/CodeIgniter_2.1.0/index.php/taskController/deleteTask/".$row->id."'>Delete</a> ";
                        
                        

                        echo "<div id='date'>".$row->duedate."</div>";

                        echo "<div id='assigned'>".$row->assigned."</div>";

                        
                        
                        //echo form_button($buttonData);

                ?>
            </li><?php echo form_close();
        }?>
        </ul></div>
    <?php
        
    


}

   