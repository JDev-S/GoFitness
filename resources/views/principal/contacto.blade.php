@extends('welcome') 

@section('contenido')

<div class="breadcrumb-wrapper">
            	<div class="container">
                	<h1>Contactános</h1>
                </div>
            </div>
            <!-- breadcrumb ends here -->
            <div id="main">
                <!-- main-content starts here -->
                <div id="main-content">
                    <section id="primary" class="content-full-width">
                        <div class="fullwidth-section full-contact dt-sc-paralax">
                            <div class="container">
                            	<div class="dt-sc-one-half column first">
                                	<h3>Contact us</h3>
                                    <div id="ajax_contact_msg"></div>
                                    <form name="frmcontact" action="php/send.php" method="post" id="contact-form">
                                    	<div class="dt-sc-one-half column first">
                                        	<input type="text" name="txtname" placeholder="Enter name..." required>
                                        </div>
                                        <div class="dt-sc-one-half column">
                                        	<input type="email" name="txtemail" placeholder="Enter email..." required>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="selection-box">
                                            <select name="cmbsubject">
                                                <option value="Ask a Question?">Ask a Question?</option>
                                                <option value="What are all benefits of Gym?">What are all benefits of Gym?</option>
                                                <option value="What are the types of Gym?">What are the types of Gym?</option>
                                            </select>
                                        </div>
                                        <textarea name="txtmessage" placeholder="Type your queries..." required></textarea>
                                        <input type="submit" name="submit" value="Submit Query">
                                    </form>
                                </div>
                                <div class="dt-sc-one-half column">
                                	<h3>We are here</h3>
                                    <div id="contact_map"> </div> 
                                    <div class="dt-sc-hr-invisible"></div>
                                    <div class="dt-sc-one-half column first">
                                    	<div class="dt-sc-contact-info type1 address"><p><i class="fa fa-rocket"></i>121 King St, Melbourne VIC <br> 3000, Australia</p></div>
                                        <div class="dt-sc-contact-info type1 time"><p><i class="fa fa-clock-o"></i>CLASSES TIMING <br>8AM - 12AM<br> Saturday - Wednesday </p></div>
                                    </div>
                                    <div class="dt-sc-one-half column">
                                    	<div class="dt-sc-contact-info type1"><p><i class="fa fa-phone"></i>+1 200 258 2145</p></div>
                                        <div class="dt-sc-hr-invisible-small"></div>
                                        <div class="dt-sc-contact-info type1"><p><i class="fa fa-globe"></i><a href="http://www.google.com" target="_blank">google.com</a></p></div>
                                        <div class="dt-sc-hr-invisible-small"></div>
                                        <div class="dt-sc-contact-info type1"><p><i class="fa fa-envelope"></i><a href="mailto:yourname@somemail.com">yourname@somemail.com</a></p></div>
                                    </div>
                                </div>
                            </div>
						</div>
                        <div class="dt-sc-hr-invisible-medium"></div>
                        <div class="fullwidth-section dt-sc-paralax">
                            <div class="container">
                            	<div class="dt-sc-one-third column first">
                                	<div class="contact-pack">
                                    	<h3 class="section-title3">Full Fitness <br><span>Package</span></h3>
                                        <p><b>Fitness Zone</b> generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </p>
                                    </div>
                                </div>
                                <div class="dt-sc-one-third column">
                                	<div class="contact-pack">
                                    	<h3 class="section-title3">Tons of <br><span>Shortcodes</span></h3>
                                        <p><b>Fitness Zone</b> generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </p>
                                    </div>
                                </div>
                                <div class="dt-sc-one-third column">
                                	<div class="contact-pack">
                                    	<h3 class="section-title3">With In-Built  <br><span>Page Builder</span></h3>
                                        <p><b>Fitness Zone</b> generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </p>
                                    </div>
                                </div>
                            </div>
						</div>
                        <div class="dt-sc-hr-invisible-large"></div>
                    </section>
				</div>
                <!-- main-content ends here -->
            </div>

@stop