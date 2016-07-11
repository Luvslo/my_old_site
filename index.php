<!DOCTYPE html>
<html>
<head>
    <title>Pseiridis - Pseiras Georgios </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="BackgroundGradient"> </div>
    <div class="BodyContent">
    
    <!---- test the header  --->
     

    <div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div><div class="BorderC"></div><div class="Border">

        <div class="Menu">
            <ul><li><a href="#" class="ActiveMenuButton"><span>Home</span></a></li>|<li>
            <a href="projects.html" class="MenuButton"><span>My Projects</span></a></li>|<li>
            <a href="downloads.html" class="MenuButton"><span>Downloads</span></a></li>|<li>
            <a href="aboutme.html" class="MenuButton"><span>About Me</span></a></li></ul>
            
        </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
        <div style="text-align: center;">
            <img src="images/welcome.png" width="697" height="175" />
        </div>
        </p>
          <font face="Helvetica Neue" size="5" color='#003300'>
        <center><h1>... To my personal web page!  </h1></center>
		</font>
        <p>
       
          
          
           <br />
      
          <font  size = '7'  face="Helvetica Neue" color='#006666' > <p> <i><center>Hello World! </i></center></font>
                  <hr style='background-color:#000000;border-width:1;color:#0066CC;height:2px;line-height:1;text-align:left;width:70%;'/>
            <font  size = '4'color='#333333'  face="Helvetica Neue">
            My name is <i>Georgios Pseirids - Pseiras</i> and I am a Computer Systems Engineer. This site serves as a means to share my projects with the rest of the world. 
            <br/>I enjoy developing my own applications in my free time and convert my ideas into a reality.
I like experimenting with different programming languages such as <i> Java, PHP, C# and more </i>.
I am currently studying android development and I have built some applications which I have tested on my phone and emulators. I am looking forward to gain deeper knowledge in that particular field!
I have also earned recently a <a href=" https://www.dropbox.com/s/m6qa7vc4csmpdcb/Pseiridis%20-%20Pseiras%20Georgios%20CV.pdf" target="_blank" style="text-decoration:none;"><font color="#0000FF"> Verified Certificate </a></font> from <i>Coursera.org </i>about android development , offered by University of Illinois at Urbana-Champaign. 
You can review my <a href=" https://www.dropbox.com/s/m6qa7vc4csmpdcb/Pseiridis%20-%20Pseiras%20Georgios%20CV.pdf" target="_blank" style="text-decoration:none;"><font color="#0000FF"> Curriculum Vitae </a></font> if you wish
   
  <br />
  <br />
   <font  size = '7'  face="Helvetica Neue" color='#006666' > <p> <i><center> Try my projects </i></center></font>
          <hr style='background-color:#000000;border-width:1;color:#0066CC;height:2px;line-height:1;text-align:left;width:70%;'/>
You can try one of my online applications by clicking at  <a href="projects.html" style="text-decoration:none;"><font color="#0000FF"> My Projects  </a></font>menu button  <br />
There are some downloadable applications available <a href="downloads.html" style="text-decoration:none;"><font color="#0000FF">  here   </a></font><br />
Please let me know if you happen to come across  any bugs or you have any suggestions for improvement! <br />
I plan to keep this site up to date every time I create something new!
<br />
  <br />


  <br />
   <font  size = '7'  face="Helvetica Neue" color='#006666' > <p> <i><center> Contact Me </i></center></font>
     <hr style='background-color:#000000;border-width:1;color:#0066CC;height:2px;line-height:1;text-align:left;width:70%;'/>
 I would like to hear your feedback. You can either leave me a comment here in the front page or send me an e-mail at
 <a href="mailto:g.pseiridis@gmail.com" style="text-decoration:none;">
   <font color="#0000FF"> g.pseiridis@gmail.com</font> 
</a> . For more information check the<a href="aboutme.html" style="text-decoration:none;">
   <font color="#666666"> About Me </font></a>tab
 </font>
  </p> 
          </h2>
           </font>
          
            <br />
            <br />
            <br />
        
           
           
           
     
            <br /><br /><br /><br />
 



              <form action="savenews.php" method="post" >
  
<div style="text-align: left;">

<b>
<h2>Leave me a comment</h2>
<br /><br />
NAME&nbsp;&nbsp;:</b> 

<span   style="margin-left: 10px;"><span>
  <input type="text" name="newsPerson"  border="2" ><br> </span></span>
<b>

TITLE&nbsp;&nbsp;:</b> <span   style="margin-left: 10px;"><span> <input type="text" name="newsTitle"  border="2" ><br></span></span>

  </div>
  
</br>
 
<div style="text-align: left;">
<b>
COMMENT*
</b> 
</br>

 <TEXTAREA NAME="newsText" ROWS=8 COLS=50 >
</TEXTAREA>
   <br />
  
   <span class="ButtonInput"  ><span> <input  type="submit"name="convert" value="Post a Comment!"></span></span>
  </form>            
            </br></br>            </br></br>

            <div class="Article">
<h1>
Comments</h1>
</div>
<?php

include('db_connect.php');
$tbl_name="News";
$sql="SELECT * FROM $tbl_name ORDER BY  News_Id  DESC";
	   $result=mysql_query($sql);
	  // Mysql_num_row is counting table row
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);// <-- borei na xreiastei :P
	  //variables
	    $newstext=array();
		$newstitle=array();
		$newsperson=array();
		$newsdate=array();
		$commentIdStart=$num_rows;
		$i=0;

           while($row = mysql_fetch_assoc($result))
	{   
	
	$i++;
	$newstext[$i] =  $row['News_Text'];
	$newstitle[$i]  =  $row['News_Title'];
	$newsperson[$i]  =  $row['News_Person'];
	$newsdate[$i]  =  $row['News_Date'];
	$newsid[$i]  =  $commentIdStart;
	$commentIdStart--;
	
	
	}//<- end fetch assoc
	
	//PART 3 
	if (empty($newsid[1])){
// if there is no post , go back
//note gia pio katw , thelw forma oxi links , den tha doulepsei etsi ;/
echo " There are no available comments yet ";
}

	
	 for ($i=1; $i<=$num_rows; $i++)
 {

echo "<blockquote>";	 
echo "<strong>";
echo "<h3>";

echo " TITLE: " .$newstitle[$i] ;
echo " </br> ";
echo "</h3>";
echo "  " .$newstext[$i] ;
echo " </br> ";
echo "</strong>";
echo " </br> ";
echo "  posted by " ."<b>" .$newsperson[$i]."</b>"." @ ".$newsdate[$i];
echo " </br> ";

echo 	"COMMENT # " . $newsid[$i];
echo " </br> ";
echo "</blockquote>";
//echo "</br>";
 }
?>


  
    
             <br />  <br />  <br />  <br />
          </div></div></div>
        <div class="Footer">
            <a href="mailto:g.pseiridis@gmail.com">Contact Me</a>
        </div>                

    </div></div>
    </div>
    <span class="BackLink"><a href="http://george-pseiridis.com/"> </a> </span>
</body>
</html>