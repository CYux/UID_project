<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Lesson 7: Nostalgic Student";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";
  $nav_bar_path = "../_includes/navigation-child-bar.php";

	/* ----------------- */

?>

<?php include ($headerpath);?>

<?php include ($nav_bar_path);?>


<!------------------ Banner ------------------>
<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

<div class="content col row align-items-center">
  <div class="col">
    <h1 id="page_title" class="title">Case study</h1>
    <div class="morecontent">      
    </div>
  </div>
  <div class="angle-right"></div>
</div>
</div>

</div>
<!------------------ End Banner ------------------>


</div>

<div id="page_content" class="page-content arrow-bottom pillars" role="main">

<div class="content_row row">
  
  <div class="col-md-3">
  <? include ("../_includes/navigation-secondary-vert.php"); ?>
  </div>  

  <div class="col-md-1"></div>

  <!------- Main Content ------->
  <div class="col-md-7">
   
   <h2 class="section-header">Lesson 7: Nostalgic Student</h2>

   <br>
   <h4 class="section-header"> Reflection and discussion </h4>

   <br>
   <ul>
      <li>
      <p>
      If you were in Mr. Small's situation, what would you do?
      </p>
      </li>
      <article>
      Explaining to the student about the situation is the best way to handle the situation. Trish was accustomed to math on monday. By changing it to history, you should be able to explain yout choice to her.
      <br>
      </article>
      <br/>

      <li>
      <p>
      What would you do if Trish is not the only student who feels that way about math?
      </p>
      </li>
      <article>
      Try teaching history for some days. If the majority of the students still want math to be taught on monday, then it is better to teach math on monday.
      <br>
      </article>
      <br/>

      <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="tnote7.php">Teacher's Note</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a class="mt-2 mt-md-0 btn btn-au-ooutline my-2 my-sm-0" href="video7.php">Back to Video</a>
  </div>
  <!------- End Main Content ------->

</div>

</div>	
<?php include ($footerpath);?>
	