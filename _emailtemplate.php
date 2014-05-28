<?php

$html = '<div style = "width:960px; min-height:500px; text-align:center">
<img src = "http://'.$baseUrl.'/images/mercure_logo.png" />
<h2 style = "margin:20px 0; color:#D09D3B; font-family:candara; font-size:40px; font-style:italic; border-bottom:1px solid #EADCC4; height:50px;">
Reservations Enquiry
</h2>
<div style = "margin:0 auto; text-align:left; width:775px;">
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Name</label>
<span style = "margin-right:55px; color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['name'].'</span>
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Address</label>
<span style = "color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['address'].'</span>
<br />
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">City</label>
<span style = "margin-right:55px; color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['city'].'</span>
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Postcode</label>
<span style = "color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['postcod'].'</span>
<br />
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Country</label>
<span style = "margin-right:55px; color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['country'].'</span>
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Phone</label>
<span style = "color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['phone'].'</span>
<br />
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Fax</label>
<span style = "margin-right:55px; color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['fax'].'</span>
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Email</label>
<span style = "color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['email'].'</span>
<br />
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Room Type</label>
<span style = "color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['room_type'].'</span>
<br />
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">check in date</label>
<span style = "margin-right:55px; color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['check_in_date'].'</span>
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">check out date</label>
<span style = "color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['check_out_date'].'</span>
<br />
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Number of Adults</label>
<span style = "margin-right:55px; color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['number_of_adults'].'</span>
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Number of Children</label>
<span style = "color:#5F0735; border:1px solid #D09D3B; width:200px; display:inline-block;">'.$_POST['number_of_childern'].'</span>
<br />
<label style = "display:inline-block; width:150px; color:#ba7f0d; margin-bottom:10px;">Message</label>
<span style = "color:#5F0735; border:1px solid #D09D3B; width:615px; height:200px; display:inline-block;">'.$_POST['message'].'</span>
<div>
</div>
</div>
</div>';
?>