<? require("../_includes/config.php"); ?>


  <link rel="stylesheet" href="../_css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case 4: Disrespectful Students";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";
  $nav_bar_path = "../_includes/navigation-child-bar.php";
  $life_nav_path = "../_includes/life-inc-nav.php";

	/* ----------------- */

?>

<?php include ($headerpath);?>

<?php include ($nav_bar_path);?>



<!------------------ Banner ------------------>
<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

<div class="content col row align-items-center">
  <div class="col">
    <h1 id="page_title" class="title">Life case</h1>
    <div class="morecontent">      
    </div>
  </div>
  <div class="angle-right"></div>
</div>
</div>

</div>
<!------------------ End Banner ------------------>


<div id="page_content" class="page-content arrow-bottom pillars" role="main">

<div class="content_row row">
  <div class="col-md-3">
  <? include ($life_nav_path); ?>
  </div>

  <div class="col-md-1"></div>

  <!------- Main Content ------->
  <div class="col-md-7 ">
   <h2 class="section-header">Case 4: Disrespectful Students</h2>

   <br>
   <h4 class="section-header"> Reflection and discussion </h4>

   <br>
   <ul>
      <li>
      <p>In such a situation, what would you do?
      </p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans1" id="Radio1-ans1">
        <label class="form-check-label" for="Radio1-ans1">
        Ignore Kim and her behaviour.
         </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans2" id="Radio1-ans2">
          <label class="form-check-label" for="Radio1-ans2">
          Scold Kim for being late and disturbing the class.
        </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio1" type="radio" value="ans3" id="Radio1-ans3">
          <label class="form-check-label" for="Radio1-ans3">
          After the class, talk with Kim and enquire why she is crying and try to help her out.
        </label>
        </div>
      </p>
      <br/>


      <li>
      <p>CLearly it states that Kim is disturbed, What would you do to help her?</p>
      </li>
      <p>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans1" id="Radio2-ans1">
        <label class="form-check-label" for="Radio2-ans1">
        Once you have talked to Kim, if the reason she stated is personal, talk to her parents.
         </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans2" id="Radio2-ans2">
          <label class="form-check-label" for="Radio2-ans2">
          Ignore about Kim, as she is crying because of personal reasons.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Radio2" type="radio" value="ans3" id="Radio2-ans3">
          <label class="form-check-label" for="Radio2-ans3">
          Do not ask Kim why she is crying and tell her not to cry again in the class.
          </label>
        </div>
      </p>
      <br/>
      </ul>

      <br/>

      <a class="mt-2 mt-md-0 btn btn-au-bdark my-2 my-sm-0" href="answer4.php">Check Answer</a>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a class="mt-2 mt-md-0 btn btn-au-ooutline my-2 my-sm-0" href="video4.php">Back to Video</a>
  
    </div>
  <!------- End Main Content ------->
</div>

</div>	
<?php include ($footerpath);?>
	
