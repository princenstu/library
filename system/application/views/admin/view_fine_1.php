
<table border="1" cellpadding="10" align="center">
       
       <?php
       foreach($result as $value)
           {

           ?>
            <tr>
           <!--<td><?php echo $value->id;?></td>
           <td><?php echo $value->name;?></td>-->
           <td><?php echo $value->email;?></td>
           <!--<td><?php echo $value->mobile;?></td>-->
           
            <!--<td><a href="<?php echo site_url();?>/search_controller/mailUser/<?php echo $value->user_id ;?>"> Mail to this user</a>&nbsp;&nbsp;|</td>
                 <a href="<?php echo base_url()?>admin_controller/editMember/<?php echo $value->id;?>">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
           </td>-->

       </tr>

       <?php
           }
       ?>






   </table>



