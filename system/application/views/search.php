<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/dpstyles.css">
<title></title>


</head>

<body>
<div align="center" style=" margin-top:10px;">
	<div style="background-color: #FFFF99;">
	<?php echo form_open('library/search'); ?>
	<table border="0">
		<tr>
			<td> <?php $data = array('type'=>'radio','name'=> 'cat','value'=> 'books','checked'=>true,'width'=> '150px',); echo form_radio($data); echo "Books";?> </td>
			<td> <?php $data = array('type'=>'radio','name'=> 'cat','value'=> 'journals'); echo form_radio($data); echo "Journals";?> </td>
			<td> <?php $data = array('type'=>'radio','name'=> 'cat','value'=> 'e-books'); echo form_radio($data); echo "E-Books";?> </td>
			<td> <?php $data = array('type'=>'radio','name'=> 'cat','value'=> 'cds'); echo form_radio($data); echo "CDs";?> </td>
		<tr>
			<td> Search By : </td>
			<td> <?php $options=array( 'title'=>'Title', 'author'=>'Author','subject'=>'Subject','accession_no'=>'Accession No'); echo form_dropdown('searchkey',$options);?></td>
			<td> <?php echo form_input('searchvalue'); ?></td>
			<td> <?php echo form_submit('search','Search'); ?></td>
		</tr>
	</table>
	<?php echo form_close(); ?>
	</div>
	<?php
	if($this->input->post('cat') == 'books')
	{
		//print_r($values);
		
		
		
		?>
		<div style='padding:10px;'>
		
		<?php 
		foreach($values as $row)
		{ ?>
		<table class="browseResult">
		<tbody>
		<tr>
			<td class="itemMediaType">
				
					<img src="image/media_book.gif" alt="BOOK/TEXT" 
title="BOOK/TEXT" id="mediaURLImageAnyComponent">
				
				<br>BOOK/TEXT
				<br>
				
					
				
				
			</td>
			<td>
				<!--test-->
				<div class="itemBookCover">
					<!-- image content-->
					
						<img src="uploads/<?php echo $row->image; ?>" title="<?php echo $row->title; ?>" alt="<?php echo $row->image; ?>"
id="searchResultThumbnailImageAnyComponent">
					
					
	

				</div>		
				<!--end test-->
				<!--title-->
				<div class="dpBibTitle">
					<!-- please read c1063106, c1063117, c1044421, c1060576a before changing title -->
					
						
							<a id="recordDisplayLink2Component" 
href="<?php echo base_url().'index.php/library/details/'.$row->id; ?>">
								<?php echo $row->title; ?></a>
						
						
						
					
				</div>
				
				<div class="dpBibAuthor">
					
					
				</div>

				
    

				<!--ERM-->
				
    
	
	    <!--  856 fields  -->
	    
    

    
    <!-- Dialog content -->
    

				
				
					
    
    <!--start item info-->
    
    
        
        
        
         	<div class="ToggleContainer">
        	<!-- available-->
	            
            	<!--all -->
	            
	                
	            
        	</div><!--End ToggleContainer-->
	        <div style="margin: 0pt 0pt 1px 0px; display: inline;" 
class="ThresholdContainer">
	        	
	                <!--how to test for available items on the threshold link-->
	                
	        <div style="display: inline;" id="Labels"><div style="display: 
inline;" id="toggle1" class="label">
				
					<span class="bibInfoHeader"> <?php echo " ".$row->author." "; ?></span>
				
					
		</div><div style="display: inline; cursor: pointer;" id="toggle2" 
class="label">
				
					<span class="bibInfoHeader"> <?php echo "Accession # ".$row->accession_no; ?>  </span>
				
					
		</div></div><div id="Contents"><div id="toggle1Content" 
class="content">
			<!--start mark -->
			<div id="allavailitemsmax-b11813190">
				
                    <div class="loadingMessage" 
id="loadingMessage2InsertComponent">Loading...</div>
				
				
			</div><!--end mark-->
		</div><div id="toggle2Content" class="content">
			<!--start mark -->
			<div id="allitemsmax-b11813190">
				
                    <div class="loadingMessage" 
id="loadingMessage2InsertComponent_0">Loading...</div>
				
				
			</div><!--end mark-->
		</div></div></div><!--end ThresholdContainer-->
			
	        <!-- checkin info -->
	        
	
        <div style="margin: 0pt 0pt 1px 0px; display: inline;" 
class="CheckinContainer">
            
        <div style="display: inline;" id="Labels"><img alt="" 
class="toggleImage" id="toggle1" src="C_Scomputer_files/closed.gif"><div
 style="display: inline;" id="toggle1" class="label"><span 
class="bibInfoHeader"><?php echo $row->publisher; ?>
                    
                    
                </span>
            </div></div><div id="Contents"><div id="toggle1Content" 
class="content">
            	<div id="checkins-b11813190">
                        <table>
                           
                            <tbody><tr>
                                <td colspan="2">
                                    <hr style="color: rgb(204, 204, 
204);">
                                </td>
                            </tr>
				                
				                    <tr valign="top">
				                        <td class="bibInfoLabel">
                                            Location
				                        </td>
				                        <td>
				                            Science, Industry and Business Library
				                        </td>
				                    </tr>
				                
				                
					    			<tr valign="top">
						  				<td class="bibInfoLabel">
                                            Call Number:
			              				</td>
						  				<td>
			                				JSM 94-366
			              				</td>
			            			</tr>
					  			
                                 
                                    
										<tr valign="top">
											<td class="bibInfoLabel">
                                                Library Has
											</td>
											<td>
				                            	
1:4(1967)-2:3(1968/69),2:5(1968/69)-6:3(1973),6:5(1973)-6:8(1973),6:10(1973)-9:2(1976),9:6(1976)-15:2(1982),15:5(1982)-16:6(1983),16:8(1983)-27:4(1994),27:7(1994)-28:2(1995),28:4(1995)-38:6(2005)-

											</td>
										</tr>
                                    
                                
					  			
							  	
							  	
							  	
							    	<tr valign="top">
								  		<td class="bibInfoLabel">
                                            Latest Received:
					              		</td>
								  		<td>
					                		March 2008 v.41 no.3
					              		</td>
					            	</tr>
					          	
								
	                            
								<tr class="holdingsEmptyRow"><td>&nbsp;</td><td>&nbsp;</td></tr>
							
						</tbody></table>
				</div>
        	</div></div></div>
    

    	
    	
   

				
				<!-- MARC 962 Media -->
				
					
				
				<div class="actions">
					
	
	    
	        
	        
	            <span>
	                
	                
	                
	            </span>
	            
	        
	
	    
	
	    
	

					
    
        <span id="bookCartOperationAnyComponentb11813190">
            
            
				<span class="bookcartItem">
					
            	</span>
            
        </span>
    

					 
	<span class="dpBibRequestLinkt">
	    
	</span>

					
	
	<script type="text/javascript">
	function createResourceWindow( url )
	{
	    this.name = "catalog";
	    resourceWindow = top.open( url, 'ResourceWindow','resizable=yes,scrollbars=yes,width=600,height=400');
	    if( resourceWindow.opener == null )
	        {
	        resourceWindow.opener = window;
	        }
	    resourceWindow.focus();
	    return false;
	}
	</script>

					
	                	
	

	                
				</div>
				
    
    

    <!-- Dialog content -->
    

    
    
        <ul id="enrichAnyComponent_b11813190" 
class="enrichedContentList">
            
        </ul>
    

    <!-- Dialog content -->
    

    

			</td>
		</tr>
		</tbody>
		</table>
	<?php
	} ?>
	
	</div>
	<?php
	}
/*	if(!$this->session->userdata('logged_in')==true){
			//header("Location: ".$this->config->site_url()."/library/search.html");
			echo"hello";
		}
		else{*/
	if($this->input->post('cat') == 'e-books')
	{
		
		?>
		<table border="0" cellpadding="10">
		<tr style="background-color:#F5F5F5;">
			<td width="100%">
			<?php
				$i =0;
				foreach($values as $row)
				{
			?>
				<table style="border-bottom:1px solid #cccccc;">
					<tr>
						<td width="8%" valign="top"><img border="0" src="<?php echo base_url();?>system/application/views/images/ebook.jpg" width="40" height="40" align="texttop" alt="" /></td>
						<td width="52%" valign="top" style="color:#3A66A0;" align="left"><?php echo $row->ebooks; ?><br>
							<p style="color:#666666; font-size:11px;"><?php
							$data=$row->create_date;
										if(strlen($data)>11){
							$len=substr($data, 0,11);
							}
							else {
							$len=$data;
							}
							//echo $len;
							echo "Added on:".preg_replace("/(\d+)-(\d+)-(\d+)/", "$2/$3/$1", $len);
							?></p>
							
						</td>
						<td width="20%" valign="top" style="border-left:1px solid #cccccc; color:#6C6C6C; font-size:19px;">
						<?php echo "<b>".$total=$row->total_download."</b>"; ?><br />
						<p style="color:#6C6C6C; font-size:12px;">Total downloads</p>
						
						
						</td>
						<td width="20%" valign="top" align="right">
						<?php if(!$this->session->userdata('logged_in')==true){
						echo "<p style='color:#6C6C6C; font-size:12px;'>"."Please Login for Download"."</p>";
						} else{
						?>
						<a href="index.php/library/download/<?php echo $row->ebook_file; ?>" ><img border="0" src="<?php echo base_url();?>system/application/views/images/download.jpg" width="18" height="20" align="texttop" alt="" />&nbsp;<b style="color:#3A66A0;">Download</b></a>
						<?php
						}
						?>
						</td>
					</tr>
				</table>
			<?php
				}
			?>
			</td>
		</tr>
		</table>
		<?php
	}/*else{
	(!$this->session->userdata('logged_in')==true)
	
	
	}*/
	?>
	
	
</div>
</body>
</html>
