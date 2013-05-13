<?php if(isset($error))echo $error;?>
<!--<ul>
<?php //foreach($upload_data as $item => $value):?>
<li><?php // echo $item;?>: <?php // echo $value;?></li>
<?php //endforeach; ?>
</ul>-->
<?php echo form_open_multipart('library/add_books'); ?>
<table border="0">
	<tr><th>Add Book Details</th><th><?php $data=array('name' => 'check','value' =>1); echo form_checkbox($data);echo "Tik here for entry same book"; ?></th></tr>
	<tr>
		<td> Author        																																</td> 
		<td> <?php $data=array('name' => 'author','value' => $this->validation->author,'size'=> '50'); echo form_input($data);?>						</td>
		<td style="width:200px;"> <?php echo $this->validation->author_error; ?>																		</td>
	</tr>
	<tr>
		<td> Subject      																																</td> 
		<td> <?php $data=array('name' => 'subject','value' => $this->validation->subject,'size'=> '50'); echo form_input($data);?>						</td>
		<td> <?php echo $this->validation->subject_error; ?>																							</td>
	</tr>
	<tr>
		<td> Title      																																</td> 
		<td> <?php $data=array('name' => 'title','value' => $this->validation->title,'size'=> '50'); echo form_input($data);?>							</td>
		<td> <?php echo $this->validation->title_error; ?>																								</td>
	</tr>
	<tr>
		<td> Accession No.      																														</td> 
		<td> <?php $data=array('name' => 'accession_no','value' => $this->validation->accession_no,'size'=> '30'); echo form_input($data);?>			</td>
		<td> <?php echo $this->validation->accession_no_error; ?>																						</td>
	</tr>
	<tr>
		<td> Book Image      																															</td> 
		<td> <?php // $data=array('name' => 'image'); echo form_upload($data);?>  	<input type="file" name="userfile" size="20" />						</td>
	</tr>
	<tr>
		<td> Location      																																</td> 
		<td> <?php $data=array('name' => 'location','value' => $this->validation->location); echo form_input($data);?>  								</td>
		<td> <?php echo $this->validation->location_error; ?>																							</td>
	</tr>
	<tr>
		<td> Categories      																															</td> 
		<td> <?php $data=array('books'=>'Books','journals'=>'Journals','e-books'=>'E-Books','cds'=>'CDs'); echo form_dropdown('category',$data);?>  	</td>
	</tr>
	<tr>
		<td> Facilities      																															</td> 
		<td> <?php $data=array('reading'=>'Reading','lending'=>'Lending','rent'=>'Rent'); echo form_dropdown('facility',$data);?>   					</td>
	</tr>
	<tr>
		<td> Publisher      																															</td> 
		<td> <?php $data=array('name' => 'publisher','value' => $this->validation->publisher,'size'=> '50'); echo form_input($data);?>					</td>
		<td> <?php echo $this->validation->publisher_error; ?>																							</td>
	</tr>
	<tr>
		<td> Keyword      																																</td> 
		<td> <?php $data=array('name' => 'keyword','value' => $this->validation->keyword); echo form_input($data);?>  									</td>
		<td> <?php echo $this->validation->keyword_error; ?>																							</td>
	</tr>
	<tr>
		<td> ISBN      																																	</td> 
		<td> <?php $data=array('name' => 'isbn','value' => $this->validation->isbn); echo form_input($data);?>  										</td>
		<td> <?php echo $this->validation->isbn_error; ?>																								</td>
	</tr>
	<tr>
		<td> Call No.      																																</td> 
		<td> <?php $data=array('name' => 'call_no','value' => $this->validation->call_no); echo form_input($data);?>  									</td>
		<td> <?php echo $this->validation->call_no_error; ?>																							</td>
	</tr>
	<tr>
		<td> Edition      																																</td> 
		<td> <?php $data=array('name' => 'edition','value' => $this->validation->edition,'size'=> '30'); echo form_input($data);?>						</td>
		<td> <?php echo $this->validation->edition_error; ?>																							</td>
	</tr>
	<tr>
		<td> Description      																															</td> 
		<td> <?php $data=array('name' => 'description','value' => $this->validation->description,'size'=> '50'); echo form_input($data);?>				</td>
		<td> <?php echo $this->validation->description_error; ?>																						</td>
	</tr>
	<tr>
		<td> Price      																																</td> 
		<td> <?php $data=array('name' => 'price','value' => $this->validation->price); echo form_input($data);?>  										</td>
		<td> <?php echo $this->validation->price_error; ?>																								</td>
	</tr>
	<tr>
		<td>              																																</td> 
		<td> <?php echo form_submit('submit','Submit');?> <?php echo anchor('library/add_books', 'Reset'); ?>											</td>
	</tr>
	
</table>
<?php echo form_close(); ?>