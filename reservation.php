<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>reservation Page Mercure Hotel</title>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link href="jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/lightbox.css">
    </head>

    <body>

        <header>
            <div class="inner_child_div">
                <div class="logo"><a href="index.html"><img src="images/mercure_logo.png" alt="mercure hotrl" /></a></div>
                <nav>
            	<ul class="hover_a hover_test">
                	<li><a href="index.html">Home</a><br /><span><a href="index.html">welcome</a></span></li>
                    <li><a href="explore.html">Explore</a><br /><span><a href="explore.html">experience</a></span></li>
                    <li><a href="location.html">Locations</a><br /><span><a href="location.html">get in touch</a></span></li>
                    <li><a href="rooms.html">Rooms</a><br /><span><a href="rooms.html">beauty</a></span></li>
                    <li><a href="meetings.html">Meetings</a><br /><span><a href="meetings.html">where ideas come</a></span></li>
                    <li><a href="dinning.html">Dining</a><br /><span><a href="dinning.html">mercure taste</a></span></li>
                    <li style="background-image:none;"><a href="rewards.html">Rewards</a><br /><span><a href="rewards.html">loyalty bonus</a></span></li>
                </ul>
            </nav>
                <div class="clr"></div>
            </div>
        </header>
        <div id="container">
            <div class="main_banner" style="height:395px;">
                <div class="pages_banner">
                    <img src="images/reservation_banner.jpg" alt="banner" />
                </div>
                <div class="booking_form">
                    <div class="inner_child_div">
                        <p class="banner_txt"><span>Choose Your Date</span><br />Reservation</p>
                        <div class="clr"></div>
                    </div>

                </div>

            </div>
            <div class="explorel_middle-text">
                <div class="inner_child_div">
                    <div class="res_option">
                        <span>1</span>
                        <p>Choose Your Date</p>
                    </div>
                    <div class="res_option">
                        <span>2</span>
                        <p>Choose Your Room</p>
                    </div>
                    <div class="res_option">
                        <span>3</span>
                        <p>Place Your Reservation</p>
                    </div>
                    <div class="res_option">
                        <span>4</span>
                        <p>Confirmation</p>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="inner_content">
                <div class="inner_child_div" style="background:#fafafa; min-height:500px;">
                    <div class="res_enq_txt">
                        <h2>Reservations Enquiry</h2>
                        <p>This reservation enquiry only to check room availability,    for booking call our reservation department on +966 11 277 3300.</p>
                    </div>
                    <form method="post" class="res_enq_form" id="res_enq_form" action="sendemail.php">
                        <label for="name">Name<span>*</span></label>
                        <input type="text" name="name" required=""/>
                        <label for="address" class="lable_margin_left">Address</label>
                        <input type="text" name="address" /><br />
                        <label for="city">City</label>
                        <input type="text" name="city" />
                        <label for="postcod" class="lable_margin_left">Postcode</label>
                        <input type="text" name="postcod" /><br />
                        <label for="country">Country</label>
                        <input type="text" name="country" />
                        <label for="phone" class="lable_margin_left" required="">Phone<span>*</span></label>
                        <input type="text" name="phone" /><br />
                        <label for="fax">Fax</label>
                        <input type="text" name="fax" />
                        <label for="email" class="lable_margin_left">Email<span>*</span></label>
                        <input type="email" name="email" required="" /><br />

                        <label for="room type">Room Type</label>
                        <select class="active_field" name="room_type">
                            <option>Superior Room</option>
                            <option>Junior Suite</option>
                            <option>Executive Suite</option>
                            <option>Family Suite</option>
                            <option>Presidential Suite</option>
                        </select><br />

                        <label for="check in date">Check-In Date<span>*</span></label>
                        <input type="text" name="check_in_date" id="check_in_date" required="" />
                        <label for="check out date" class="lable_margin_left">Check-Out Date<span>*</span></label>
                        <input type="text" name="check_out_date"  id="check_out_date"required="" /><br />

                        <label for="number of adults">Number of Adults<span>*</span></label>
                        <select name="number_of_adults" required="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>

                        </select>
                        <label  for="number of children" class="lable_margin_left" style="margin-left:93px;">
                            Number of Children<span>*</span></label>
                        <select name="number_of_childern" required="">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select><br />

                        <label for="message">Message</label>
                        <textarea name="message"></textarea>
                        <p class="p_style_5">Tick this box if you would like to receive marketing material such as the hotel 										newsletter, conference<br /> promotions and conference news. <br />
                            Privacy Policy</p>
                        <input class="res_button" type="submit" value="Submit" />
                        <div class="clear"></div>
                        <?php
                        @session_start();
                        if (!empty($_SESSION['message'])) {
                            echo "<div class='flash-success'>" . $_SESSION['message'] . "</div>";
                           
                           
                        }
                        ?>
                    </form>


                </div>
            </div>
        </div>
         <footer>
    	<div class="inner_child_div footer">
        	<div class="footer_box">
            	<h3><span>QUICK </span>LINKS</h3>
                <ul>
                	<li><a href="index.html">Home</a></li>
                	<li><a href="explore.html">Explore</a></li>
                    <li><a href="location.html">Location</a></li>
                    <li><a href="rooms.html">Rooms</a></li>
                    <li><a href="meetings.html">Meetings</a></li>
                    <li><a href="dinning.html">Dining</a></li>
                    <li><a href="rewards.html">Rewards</a></li>
                </ul>
            </div>	
            
            <div class="footer_box">
            	<h3><span>NEWS </span>LETTER</h3>
                <p>Enter your e-mail address to subscribe for our monthly newsletters.</p>
                <input type="text" name="text" />
                <input type="button" name="button" value="Subscribe" />
            </div>
            <div class="footer_box">
            	<h3><span>SOCIAL </span>FORUM</h3>
                <div class="socail_icon" style="margin-left:50px;">
                	<img src="images/facebook.png" alt="facebook" />
                </div>
                <div class="socail_icon">
                	<img src="images/twitter.png" alt="twitter" />
                </div>
                <div class="socail_icon">
                	<img src="images/google.png" alt="google plus" />
                </div>
                <div class="clr"></div>
               <div class="image-row">
                                            <div class="image-set">
                                            <div class="footer_img_gallery"><a class="example-image-link" href="images/footer_img_gallery/image_1.jpg" data-lightbox="example-set" >Click Here to View Gallery</a></div>
                                            </div>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_2.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_3.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_4.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_5.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_6.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_7.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_8.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_9.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_10.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_11.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_12.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_13.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_14.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_15.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_16.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_17.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_18.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_19.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_20.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_21.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_22.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_23.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_24.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_25.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_26.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_27.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_28.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_29.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_30.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_31.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_32.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_33.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_34.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_35.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_36.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_37.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_38.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_39.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_40.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_41.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_42.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_43.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_44.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_45.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_46.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_47.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_48.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_49.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_50.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_51.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_52.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_53.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_54.jpg" data-lightbox="example-set"></a>
                                                <a style="display:none" class="example-image-link" href="images/footer_img_gallery/image_55.jpg" data-lightbox="example-set"></a>
                                      </div>
            </div>
            <div class="clr"></div>
             <div class="bottom_footer">
             	<div class="footer_text">
                	<span>Mercure Hotels © 2014</span>
                </div>
                <div class="footer_text footer_rigth_text">
                	<span>Powered and Designed by Dtech Systems</span>
                   <a href="http://dtechsystems.co.uk/" target="new"><img src="images/d-tech.png" alt="dtech" /></a>
                </div>
                <div class="clr"></div>
             </div>
        </div>
    </footer>
    </body>
</html>

<script src="jquery-ui/js/jquery-1.10.2.js"></script>
<script src="jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<script src="js/lightbox.js"></script>
<script>
    $(function() {
        $("#check_in_date").datepicker({
        });
        $("#check_out_date").datepicker({
        });
    })

</script>
<?php
if (!empty($_SESSION['message'])) {

    unset($_SESSION['message']);
    ?>
    <script>
        $(function() {
            $(document).scrollTop($(document).height());
        })</script>    
    <?php
}
?>