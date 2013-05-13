<form action="<?php echo site_url(); ?>/search_controller/searchMember" method="post" >
    <table>
        <tr>
            <td><input type="text" name="user_id"></td>
            <td><input type="submit" name="btn" value="Search"></td>
        </tr>
    </table>
</form>
<table border="1" cellpadding="10" align="center">
       <tr>
           <td>user_id</td>
           <td>Book_id</td>
           <td>Booking_date</td>
           <td>Fine</td>
           <td>Option</td>


       </tr>
       <?php
       foreach($result as $value)
           {

           ?>
            <tr>
           <td><?php echo $value->user_id;?></td>
           <td><?php echo $value->book_id;?></td>
           <td><?php echo $value->booking_date;?></td>
           <td><?php echo $value->fine;?></td>
           
            <td><a href="<?php echo site_url();?>/search_controller/mailUser/<?php echo $value->user_id ;?>"> Mail to this user</a>&nbsp;&nbsp;|</td>
                 <!--<a href="<?php echo base_url()?>admin_controller/editMember/<?php echo $value->id;?>">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;
           </td>-->

       </tr>

       <?php
           }
       ?>
   </table>



