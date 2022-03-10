<?php

$name=$_POST['name'];
$guardian=$_POST['guardian'];

$occupation=$_POST['occupation'];
$address=$_POST['address'];
$tel=$_POST['tel'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$emailcandidate=$_POST['emailcandidate'];
$natinality=$_POST['natinality'];
$relegion=$_POST['relegion'];
$caste=$_POST['caste'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$state=$_POST['state'];
$mothertongue=$_POST['mothertongue'];
$languages=$_POST['languages'];
$qualification=$_POST['qualification'];
$pass=$_POST['pass'];
$board=$_POST['board'];
$percentage10=$_POST['percentage10'];
$percentage12=$_POST['percentage12'];
$bloodgroup=$_POST['bloodgroup'];
$acc=$_POST['acc'];
$ecc=$_POST['ecc'];




$headers = "From:\r";
$headers .= "$email\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
                                           
$to = "admissions@msrchm.edu";
$subject= "Admission Form";
$body = 				"<table width=\"100%\" border=\"0\">
						 <tr>
						 <td height=\"37\" colspan=\"2\" align=\"left\"  style=\"font-size:13px; font-weight:bold; color:#ec8a18; text-transform:uppercase;\"><strong>Admission Form</strong></td>
						  </tr>
						  <tr>
						  <td align=\"right\" ><strong> Name :</strong></td>
						  <td  align=\"left\">$name</td>
                            </tr>
                            <tr>
                              <td align=\"right\" ><strong>Guardian :</strong></td>
                              <td align=\"left\">$guardian</td>
                            </tr>
                            <tr>
                              <td align=\"right\" ><strong>Occupation :</strong></td>
                              <td align=\"left\">$occupation</td>
                            </tr>
                            <tr>
                              <td align=\"right\" ><strong>Address :</strong></td>
                              <td align=\"left\">$address</td>
                            </tr>
                            <tr>
                              <td align=\"right\" ><strong>Phone :</strong></td>
                              <td align=\"left\">$tel</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Mobile :</strong></td>
                              <td align=\"left\">$mobile</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Email :</strong></td>
                              <td align=\"left\">$email</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Email Candidate :</strong></td>
                              <td align=\"left\">$emailcandidate</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Nationality :</strong></td>
                              <td align=\"left\">$natinality</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Religion :</strong></td>
                              <td align=\"left\">$relegion</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Caste:</strong></td>
                              <td align=\"left\">$caste</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Sex :</strong></td>
                              <td align=\"left\">$sex</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Age :</strong></td>
                              <td align=\"left\">$age</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>DOB :</strong></td>
                              <td align=\"left\">$dob</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>State :</strong></td>
                              <td align=\"left\">$state</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Mother tongue :</strong></td>
                              <td align=\"left\">$mothertongue</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Language :</strong></td>
                              <td align=\"left\">$languages</td>
                            </tr>
							<tr>
                              <td align=\"right\" ><strong>Qualification :</strong></td>
                              <td align=\"left\">$qualification</td>
                            </tr>
								<tr>
                              <td align=\"right\" ><strong>Pass :</strong></td>
                              <td align=\"left\">$pass</td>
                            </tr>
								<tr>
                              <td align=\"right\" ><strong>Board :</strong></td>
                              <td align=\"left\">$board</td>
                            </tr>
								<tr>
                              <td align=\"right\" ><strong>10 Percentage :</strong></td>
                              <td align=\"left\">$percentage10</td>
                            </tr>
								<tr>
                              <td align=\"right\" ><strong>12 Percentage :</strong></td>
                              <td align=\"left\">$percentage12</td>
                            </tr>
								<tr>
                              <td align=\"right\" ><strong>Blood group :</strong></td>
                              <td align=\"left\">$bloodgroup</td>
                            </tr>
								<tr>
                              <td align=\"right\" ><strong>ACC :</strong></td>
                              <td align=\"left\">$acc</td>
                            </tr>
							
								<tr>
                              <td align=\"right\" ><strong>ECC :</strong></td>
                              <td align=\"left\">$ecc</td>
                            </tr>
							
							
							
							
                          </table>";
                         
                        mail($to, $subject, $body, $headers);
                       
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>M.S.Ramaiah College of Hotel Management- food &amp; Beverage service</title>
<meta name="description" content="M.S.Ramaiah College of Hotel Management">
<meta name="keywords" content="M.S.Ramaiah College of Hotel Management" >
<link rel="shortcut icon" href="">
<link href="common/styles/MSStyle.css" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="common/scripts/Menuscript.js"></script> 
<script language="JavaScript">
/*implements combo box-links to pages -url locations*/
function SelectLink(){
     if (document.Links.max.options[document.Links.max.selectedIndex].value != "none"){ 
          	 newwindow=window.open("")
             newwindow.location=document.Links.max.options [document.Links.max.selectedIndex].value;
		 }        
}
</script> </head>

<body class="Msrchm">
<div id="Mswrapper"><!--main wrapper-->
<div id="Wrapper1"><!--top wrapper-->
<div id="header"><!--header-->
 <div class="logo">
   <a href="index.html"><img src="common/images/logo.jpg" width="212" height="83" alt="MSRCHM Logo"></a>
 </div>
 <div class="Msmenu">
   <div class="topmenu">
     <div class="tnav">
     <ul>
     <li class="Thm1"><a href="index.html"></a></li>
     <li class="Tlc1"><a href="location.html"></a></li>
     </ul>
     </div>
   </div>
   
  <div id="menu"><!--menu-->
   <div class="navi1" id="chromemenu">
   <ul>
   <li class="sm1"><a href="aboutus.html"></a></li>
   <li class="sm2"><a href="course.html"></a></li>
   <li class="sm3"><a href="admission.html" rel="dropmenu1"></a></li>
   <li class="sm4"><a href="faculty.html" rel="dropmenu2"></a></li>
   <li class="sm5"><a href="facility.html" rel="dropmenu3"></a></li>
   <li class="sm6"><a href="placement.html"></a></li>
   <li class="sm7"><a href="testimonial.html"></a></li>
  </ul>
  </div>
     <div id="dropmenu1" class="dropmenudiv" >
       <a class="dr1" href="eligibility.html"></a>
       <a class="dr2" href="feestructure.html"></a>
       <a class="dr3" href="admissionprocedure.html"></a>
     </div>
     <div id="dropmenu2" class="dropmenudiv2" >
       <a class="dr4" href="fAndbproduction.html"></a>
       <a class="dr5" href="fAndbservice.html"></a>
       <a class="dr6" href="accommodation.html"></a>
       <a class="dr7" href="management.html"></a>
       <a class="dr8" href="languages.html"></a>
       <a class="dr9" href="computerlab.html"></a>
       <a class="dr10" href="library.html"></a>
       <a class="dr11" href="placementAndresearch.html"></a>
     </div>
     <div id="dropmenu3" class="dropmenudiv3" >
       <a class="dr12" href="classrooms.html"></a>
       <a class="dr13" href="foodproduction.html"></a>
       <a class="dr14" href="bakery.html"></a>
       <a class="dr15" href="f_fandbservice.html"></a>
       <a class="dr16" href="f_accommodation.html"></a>
       <a class="dr17" href="computerroom.html"></a>
       <a class="dr18" href="seminarroom.html"></a>
       <a class="dr19" href="readingroom.html"></a>
       <a class="dr20" href="sportscomplex.html"></a>
       <a class="dr21" href="hostel.html"></a>
     </div>
 </div> <!--menu-->
  <script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
<!--menu-->
   </div>
 </div><!--header-->
<div id="MainContainer"><!--Main container-->
<div class="Subbanner"><img src="common/images/Subbanner/banner13.jpg" width="905" height="266" alt="M.S.Ramaiah College of Hotel Management"></div>
  <div class="container2">
  <div class="sidebar">
    <div class="gallery">
     <div class="institution">
     <form name="Links" >
     <select name="max" onChange="SelectLink()">
     <option selected value="http://www.msrit.edu">M S Ramaiah Institute of Technology</option>
     <option value="http://www.msrmc.ac.in">M.S.Ramaiah Medical College</option>
     <option value="http://www.msrmc.ac.in">M.S. Ramaiah Medical Teaching Hospital</option>
     <option value="http://www.msrit.edu/node/256">M.S. Ramaiah Institute of Oncology</option>
     <option value="#">M.S. Ramaiah Institute of Cardiology</option>
     <option value="#">M.S. Ramaiah Institute of Nephro-Urology</option>
     <option value="http://www.msriner.com">M.S. Ramaiah School of Nursing</option>
     <option value="http://www.msriner.com">M.S. Ramaiah College of Nursing</option>
     <option value="http://www.msrcp.edu.in">M.S. Ramaiah College of Pharmacy</option>
     <option value="#">M.S. Ramaiah College of Arts, Science and Commerce</option>
     <option value="#">M.S. Ramaiah First Grade College</option>
     <option value="http://www.msrim.org">M.S. Ramaiah Institute of Management</option>
     <option value="http://www.msrcl.org">M.S. Ramaiah College of Law </option>
     <option value="#">M.S. Ramaiah School of Advanced Studies</option>
     </select>
     </form>
     </div>
    <a href="picturegallery.html"><div class="pgallery"></div></a>
   </div>
   <div class="Oapp"></div>
  </div>
  <div class="rightcontainer">
     <h2>APPLICATION FOR ADMISSION TO THE BHM PROGRAMME</h2>
     <table border="0" cellspacing="0" cellpadding="0" class="app">
   <tr height="40">
    <td width="587"  ><strong>Thank you for your valuable feedback We will get back to you.</strong>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>

     </div>
  </div>
<div class="container3">
   <div class="Addbox">
   M.S.Ramaiah College of Hotel Management,  M.S.Ramaiah Nagar, MSRIT Post, Bangalore, Karntaka, India 560054  |  Tele. 080 23601829  |  Tele Fax 080 23601815
   </div> 
 </div>
</div><!--Main container-->
</div><!--top wrapper-->
<div id="Wrapper2"><!--bottom wrapper-->
<div class="fmenu">
   <ul>
  <li><a href="aboutus.html">About Us</a>  |</li>
  <li><a href="course.html">Course</a>  |</li>
  <li><a href="admission.html">Admission</a>  |</li>
  <li><a href="faculty.html">Faculty</a>  |</li>
  <li><a href="facility.html">Facility</a>  |</li>
  <li><a href="placement.html">Placement</a>  |</li>
  <li><a href="testimonial.html">Testimonials</a>  |</li>
  <li><a href="location.html">Location &amp; Contact</a>  |</li>
  <li><a href="picturegallery.html">Gallery</a>  |</li>
  <li><a href="news.html">News &amp; Events</a>  |</li>
  <li><a href="announcements.html">Announcements</a>  |</li>
  <li><a href="sitemap.html">Sitemap</a></li>
  </ul>
  <p>Copyright 2011 M.S.Ramaiah College of Hotel Management. All Rights Reserved. Designed and Developed by Tao Infotech. </p>
  </div>
  <div class="Flogo"><img src="common/images/b_logo.jpg" width="86" height="33" alt="MSRCHM logo"></div>
</div><!--bottom wrapper-->
</div><!--Main wrapper ends-->
</body>
</html>
