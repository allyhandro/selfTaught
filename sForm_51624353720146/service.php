<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel = "icon" href = "../images/icons/iRep.png">
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F51624353720146" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F51624353720146" title="oEmbed Form">
<meta property="og:title" content="iRepertoire Sample Submission Form" >
<meta property="og:url" content ="http://www.jotform.us/form/51624353720146" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>iRepertoire Sample Submission Form</title>
<link type="text/css" rel="stylesheet" href="css/styles/form.css?v3.3.8522"/>
<link href="css/calendarview.css?v3.3.8522" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="//d2g9qbzl5h49rh.cloudfront.net/css/styles/nova.css?3.3.8522" />
<link type="text/css" media="print" rel="stylesheet" href="//d2g9qbzl5h49rh.cloudfront.net/css/printForm.css?3.3.8522" />
<style type="text/css">
    .form-label-left{
        width:200px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:200px !important;
    }
    .form-all{
        width:850px;
        background: no-repeat;
        color:rgb(0, 0, 0) !important;
        font-family:'Lucida Sans Unicode', sans-serif;
        font-size:13px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: rgb(0, 0, 0);
    }
    	div#overlay {
    	display: none;
    	z-index: 1000;
		background: black;
		position: fixed;
		width: 100%;
		height: 100%;
		top: 0px;
		left: 0px;
		opacity: 0.2;
	}
	div#ErrMsg {
		display: none;
		position: fixed;
		z-index: 2000;
		margin: 0px;
		top: 20%;
		left: 25%;
		right: 25%;
		background: #e7e6e0;
		color: #646463;
		border-radius: 10px;
		padding: 10px;
		font-family: 'Helvetica', sans-serif;
	}
	div#wrapper {
		position:absolute;
		top: 0px;
		left: 0px;
		padding-left:24px;
	}
	
	.ss_name{
	  border:1px solid #cdd0d1;
        padding:4px;
        -moz-border-radius:5px 5px;
        box-shadow:0 2px 4px rgba(0,0,0, 0.05) inset;  
    }
	a:link, a:visited {
		color: #d398a2;
	}
	
	a:hover{
		color: #9a2739;
	}
	
	#secretNext{
		display: none;
	}
	
		
	.fakeNext {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f2f2f2), color-stop(1, #e0e0e0));
	background:-moz-linear-gradient(top, #f2f2f2 5%, #e0e0e0 100%);
	background:-webkit-linear-gradient(top, #f2f2f2 5%, #e0e0e0 100%);
	background:-o-linear-gradient(top, #f2f2f2 5%, #e0e0e0 100%);
	background:-ms-linear-gradient(top, #f2f2f2 5%, #e0e0e0 100%);
	background:linear-gradient(to bottom, #f2f2f2 5%, #e0e0e0 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f2f2f2', endColorstr='#e0e0e0',GradientType=0);
	background-color:#f2f2f2;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #ababab;
	display:inline-block;
	cursor:pointer;
	color:#2e2a2e;
	font-family:Verdana;
	font-size:16 px;
	padding:7px 15px;
	text-decoration:none;
	text-shadow:1px 0px 0px #ffffff;
}
.fakeNext:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e0e0e0), color-stop(1, #f2f2f2));
	background:-moz-linear-gradient(top, #e0e0e0 5%, #f2f2f2 100%);
	background:-webkit-linear-gradient(top, #e0e0e0 5%, #f2f2f2 100%);
	background:-o-linear-gradient(top, #e0e0e0 5%, #f2f2f2 100%);
	background:-ms-linear-gradient(top, #e0e0e0 5%, #f2f2f2 100%);
	background:linear-gradient(to bottom, #e0e0e0 5%, #f2f2f2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e0e0e0', endColorstr='#f2f2f2',GradientType=0);
	background-color:#e0e0e0;
}
.fakeNext:active {
	position:relative;
	top:1px;
}
</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-multiple-column .form-radio-item, .form-multiple-column .form-checkbox-item {width: 190px;}.form-label-left{font-weight: bold;}.form-label-top{font-weight: bold;}
    /* Injected CSS Code */
</style>

<script src="//d2g9qbzl5h49rh.cloudfront.net/js/prototype.js?v=3.3.8606" type="text/javascript"></script>
<script src="//d2g9qbzl5h49rh.cloudfront.net/js/vendor/json2.js?v=3.3.8606" type="text/javascript"></script>
<script src="//d2g9qbzl5h49rh.cloudfront.net/js/protoplus.js?v=3.3.8606" type="text/javascript"></script>
<script src="//d2g9qbzl5h49rh.cloudfront.net/js/protoplus-ui-form.js?v=3.3.8606" type="text/javascript"></script>
<script src="//d2g9qbzl5h49rh.cloudfront.net/js/jotform.js?v=3.3.8606" type="text/javascript"></script>
<script src="//d2g9qbzl5h49rh.cloudfront.net/js/calendarview.js?v=3.3.8606" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

<script type="text/javascript">
$.noConflict();
 var j = jQuery.noConflict();  JotForm.setConditions([{"action":[{"field":"31","visibility":"Show"}],"index":"0","link":"Any","priority":"0","terms":[{"field":"30","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"41","visibility":"Show"},{"field":"40","visibility":"Show"}],"index":"1","link":"Any","priority":"1","terms":[{"field":"36","operator":"equals","value":"My samples may be contaminated or may have come in contact with hazardous agents."}],"type":"field"}]);
   JotForm.init(function(){
      setTimeout(function() {
          $('input_6').hint('ex: myname@irepertoire.com');
       }, 20);
    if(!(!Prototype.Browser.IE9 && !Prototype.Browser.IE10 && Prototype.Browser.IE)) {
        new nicEditor({iconsPath : location.protocol + '//www.jotform.com/images/nicEditorIcons.gif?v2'}).panelInstance('input_3');
        JotForm.updateAreaFromRich(3);
    }
	JotForm.clearFieldOnHide="disable";
	JotForm.onSubmissionError="jumpToSubmit";
   });
</script>
</head>
<body>
<div id = "overlay"></div>
<div id="ErrMsg"> 
	<div id="sameStudyName" class = "warning">
	 <p>It seems that you have already submitted a study
	 by the name "<span id="usedStudyName"></span>". It's highly recommended to have
	 different study names.</p>
	 <hr>
	<button class="close" > Close</button>
	</div>
	
	<div id = "tubeError" class = "warning">
	  <p> Please make sure the number of tubes you are
	  submitting matches the number of unique sample names in the sample entry table. Each
	  unique sample name should refer to one tube. You have stated you have <strong><span
	  id="numTubes"></span></strong> tubes, but we found <strong><span
	  id="numNames"></span></strong> unique sample names in the Sample Information
	  Table.</p>
	  <hr>
	  <button class="close"> Close</button>
	</div>
	
	<div id="noSamples" class="warning"> 
	  <h1>Warning!</h1>
	  <p> We have not detected any sample names. You are attempting to submit a Service
		Submission Form without any sample information. Unless you have 40+ samples
		and have <a href='mailto:info@irepertoire.com'>contacted us</a> to let us know,
		your study <u>will not be processed.</u></p>	
		<hr>
	  <button class="close"> Close </button> 
	  <button class = "continue">  Continue Anyway </button>
	</div>

</div>
<?php
	require("../php/getUserInfo.php");
?>
<form class="jotform-form" action="//submit.jotform.us/submit.php" method="post" name="form_51624353720146" id="51624353720146" accept-charset="utf-8">
  <input type="hidden" name="formID" value="51624353720146" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_42" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h2 id="header_42" class="form-header">
              iRepertoire Service Submission Form
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_43">
        <div id="cid_43" class="form-input-wide">
          <div id="text_43" class="form-html">
            <p><span style="color:#606060;font-family:Helvetica, geneva, sans-serif;font-size:13px;">Please fill the form</span><span style="color:#606060;font-family:Helvetica, geneva, sans-serif;font-size:13px;"> out in it's entirety, including sample names and concentrations.  Also, please name your samples something that is specific to your project and not a common name such as Sample1, Pool1, etc.</span></p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5">
          Full Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input style = "opacity: 0.4" class="form-textbox" type="text" name="q5_fullName[prefix]" size="4" id="prefix_5" value = '<?php echo $prefix; ?>' readonly/>
            <label class="form-sub-label" for="prefix_5" id="sublabel_prefix" style="min-height: 13px;"> Prefix </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="10" name="q5_fullName[first]" id="first_5" value='<?php echo $first; ?>'readonly style="opacity: 0.4"/>
            <label class="form-sub-label" for="first_5" id="sublabel_first" style="min-height: 13px;" > First Name </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="15" name="q5_fullName[last]" id="last_5" value = '<?php echo $last ?>' readonly style="opacity: 0.4"/>
            <label class="form-sub-label" for="last_5" id="sublabel_last" style="min-height: 13px;" > Last Name </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input jf-required">
          <input type="email" class=" form-textbox validate[required, Email]" id="input_6" name="q6_email6" size="30" value="<?php echo $email; ?>" readonly style="opacity: 0.4"/>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_50">
        <label class="form-label form-label-left form-label-auto" id="label_50" for="input_50">
          Phone Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_50" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_50" name="q50_phoneNumber50" size="20" value="<?php echo $phone; ?>" readonly style="opacity:0.4"/>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_48">
        <label class="form-label form-label-left form-label-auto" id="label_48" for="input_48">
          Principal Investigator
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_48" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="text" name="q48_principalInvestigator[prefix]" size="4" id="prefix_48" value="Dr."readonly style="opacity:0.4"/>
            <label class="form-sub-label" for="prefix_48" id="sublabel_prefix" style="min-height: 13px;"> Prefix </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="10" name="q48_principalInvestigator[first]" id="first_48"  value="<?php echo $pi_first; ?>"readonly style="opacity:0.4" />
            <label class="form-sub-label" for="first_48" id="sublabel_first" style="min-height: 13px;"> First Name </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="15" name="q48_principalInvestigator[last]" id="last_48" value="<?php echo $pi_last; ?>"readonly style="opacity:0.4"/>
            <label class="form-sub-label" for="last_48" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_47">
        <label class="form-label form-label-left" id="label_47" for="input_47">
          Institution
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_47" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_47" name="q47_institution" size="50" value="<?php echo $inst; ?>" readonly style="opacity:0.4"/>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_13">
        <label class="form-label form-label-left" id="label_13" for="input_13">
          Purchase Order #
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_13" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_13" name="q13_purchaseOrder" size="50" value="" maxlength="25"/>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_14">
        <label class="form-label form-label-left" id="label_14" for="input_14"> Quote Number </label>
        <div id="cid_14" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_14" name="q14_quoteNumber" size="50" value="" maxlength ="15"/>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_46">
        <div id="cid_46" class="form-input-wide">
          <div id="text_46" class="form-html">
            <p><span style="font-family:Helvetica, geneva; color:#606060; font-size:13px;">The study name within your project should be unique.  If you duplicate a study name that has already been used on a previous submission, then the data will be merged into that study erroneously. To check which study names have been assigned, please log into iRweb and check the names on left-hand column.  The schema is Project Title > Study Name > Individual Sample Name > Chain Sequenced.</span></p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-left" id="label_16" for="input_16">
          Study Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_16" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_16" name="q16_studyName" size="50" value="" maxlength="10" />
            <label class="form-sub-label" for="input_16" style="min-height: 13px;"> Please limit to less than 10 characters with no spaces. </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_11">
        <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
          Service Type
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="3">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_0" name="q11_serviceType11" value="Service" />
              <label id="label_input_11_0" for="input_11_0"> Service </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_1" name="q11_serviceType11" value="Collaboration" />
              <label id="label_input_11_1" for="input_11_1"> Collaboration </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_2" name="q11_serviceType11" value="R10K" />
              <label id="label_input_11_2" for="input_11_2"> R10K </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_17">
        <label class="form-label form-label-left" id="label_17" for="input_17">
          Species
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_17" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="2">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_17_0" name="q17_species" value="Human" />
              <label id="label_input_17_0" for="input_17_0"> Human </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_17_1" name="q17_species" value="Mouse" />
              <label id="label_input_17_1" for="input_17_1"> Mouse </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_18">
        <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18">
          Sample Submission Type
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_18" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="3">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_18_0" name="q18_sampleSubmission" value="Animal Cells" />
              <label id="label_input_18_0" for="input_18_0"> Animal Cells </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_18_1" name="q18_sampleSubmission" value="RNA" />
              <label id="label_input_18_1" for="input_18_1"> RNA </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_18_2" name="q18_sampleSubmission" value="Prepared Library" />
              <label id="label_input_18_2" for="input_18_2"> Prepared Library </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_18_3" name="q18_sampleSubmission" value="Animal Tissue" />
              <label id="label_input_18_3" for="input_18_3"> Animal Tissue </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_18_4" name="q18_sampleSubmission" value="gDNA" />
              <label id="label_input_18_4" for="input_18_4"> gDNA </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_49">
        <label class="form-label form-label-left form-label-auto" id="label_49" for="input_49">
          Sequencing Platform
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_49" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="3">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_49_0" name="q49_sequencingPlatform49" value="Illumina HiSeq" />
              <label id="label_input_49_0" for="input_49_0"> Illumina HiSeq </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_49_1" name="q49_sequencingPlatform49" value="Illumina MiSeq" />
              <label id="label_input_49_1" for="input_49_1"> Illumina MiSeq </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_49_2" name="q49_sequencingPlatform49" value="Roche 454" />
              <label id="label_input_49_2" for="input_49_2"> Roche 454 </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <input type="radio" class="form-radio-other form-radio validate[required]" name="q49_sequencingPlatform49" id="other_49" value="" />
              <input type="text" class="form-radio-other-input form-textbox" name="q49_sequencingPlatform49[other]" data-otherHint="Other" size="15" id="input_49" />
              <br />
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_19">
        <label class="form-label form-label-left" id="label_19" for="input_19">
          Service Requested
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_19" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="3">
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_19_0" name="q19_serviceRequested[]" value="Nucleic Acid Extraction" />
              <label id="label_input_19_0" for="input_19_0"> Nucleic Acid Extraction </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_19_1" name="q19_serviceRequested[]" value="Library Preparation" />
              <label id="label_input_19_1" for="input_19_1"> Library Preparation </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_19_2" name="q19_serviceRequested[]" value="Sequencing" />
              <label id="label_input_19_2" for="input_19_2"> Sequencing </label>
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox validate[required]" id="input_19_3" name="q19_serviceRequested[]" value="Data Analysis" />
              <label id="label_input_19_3" for="input_19_3"> Data Analysis </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <input type="checkbox" class="form-checkbox-other form-checkbox validate[required]" name="q19_serviceRequested[other]" id="other_19" value="" />
              <input type="text" class="form-checkbox-other-input form-textbox" name="q19_serviceRequested[other]" data-otherHint="Other" size="15" id="input_19" />
              <br />
            </span>
          </div>
        </div>
      </li>

<li class="form-line jf-required" data-type="control_textbox" id="id_21">
        <label class="form-label form-label-left form-label-auto" id="label_21" for="input_21">
          How many amplifications do you need?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_21" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_21" name="q21_howMany21" size="10" value="" maxlength="10"/>
          </span>
           <label class="form-sub-label" for="input_21" style="min-height: 13px;"> If you have one patient sample and would like to see the TCR alpha and beta, then this is 2 amplifications. </label>
        </div>
      </li>
<!--      //////////////// 			not			////////////////-->
      <li class="form-line" data-type="control_textbox" id="id_33">
        <label class="form-label form-label-left form-label-auto" id="label_33" for="input_33"> How many libraries are to be pooled together in one sequencing lane? </label>
        <div id="cid_33" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_33" name="q33_howMany33" size="10" value="" maxlength="10"/>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_32">
        <label class="form-label form-label-left form-label-auto" id="label_32" for="input_32"> Which chain would you like to amplify? </label>
        <div id="cid_32" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="3">
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_32_0" name="q32_whichChain32[]" value="TCR alpha" />
              <label id="label_input_32_0" for="input_32_0"> TCR alpha </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_32_1" name="q32_whichChain32[]" value="TCR beta" />
              <label id="label_input_32_1" for="input_32_1"> TCR beta </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_32_2" name="q32_whichChain32[]" value="TCR delta" />
              <label id="label_input_32_2" for="input_32_2"> TCR delta </label>
            </span>
            <span class="form-checkbox-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_32_3" name="q32_whichChain32[]" value="BCR heavy" />
              <label id="label_input_32_3" for="input_32_3"> BCR heavy </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_32_4" name="q32_whichChain32[]" value="BCR light" />
              <label id="label_input_32_4" for="input_32_4"> BCR light </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_32_5" name="q32_whichChain32[]" value="TCR gamma" />
              <label id="label_input_32_5" for="input_32_5"> TCR gamma </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_52">
        <label class="form-label form-label-left form-label-auto" id="label_52" for="input_52">
          How many tubes are you submitting?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_52" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required, Numeric]" data-type="input-textbox" id="input_52" name="q52_howMany52" size="5" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_23">
        <div id="cid_23" class="form-input-wide">
          <div id="text_23" class="form-html">
            <p><strong><span style="font-size:small;">If you are submitting a prepared, pooled library, then please provide the following information.</span></strong></p>
            <p><span style="font-size:small;"><em>Please note that if the pooled concentration is not listed in this form and on the tube, then we cannot process the sample for sequencing.</em></span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_22">
        <label class="form-label form-label-left" id="label_22" for="input_22"> Concentration (ng/µL) </label>
        <div id="cid_22" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" maxlength = "10" id="input_22" name="q22_concentrationngl" size="10" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_24">
        <label class="form-label form-label-left" id="label_24" for="input_24"> Volume (µL) </label>
        <div id="cid_24" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_24" name="q24_volumel" size="6" value="" maxlength="6" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_25">
        <label class="form-label form-label-left" id="label_25" for="input_25"> A260/280 </label>
        <div id="cid_25" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" id="input_25" name="q25_a260280" maxlength="6" size="6" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_26">
        <label class="form-label form-label-left" id="label_26" for="input_26"> A260/230 </label>
        <div id="cid_26" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" maxlength="6" id="input_26" name="q26_a260230" size="6" value="" />
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_27">
        <div id="cid_27" class="form-input-wide">
          <div id="text_27" class="form-html">
            <p><span style="font-size:small;"><strong>Your sample will not be processed if no sample information is received. Please contact customer service (info@irepertoire.com) if you would like to submit your sample information in Excel format.</strong></span></p>
            <p><span style="font-size:small;"><strong><strong>Please provide the sample information, even if you are submitting a pooled library.  </strong><br /></strong></span></p>
            <p><span style="font-size:small;"><em>*Barcode Used - If you are not submitting a pooled library, then leave this field blank.</em></span></p>
            <p><span style="font-size:small;"><em>**Please disclose the source of the nucleic acid (NA).  Ex. PBMC, tissue, sorted cells, etc.</em></span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_matrix" id="id_29">
        <label class="form-label form-label-top" id="label_29" for="input_29"> Sample Information </label><span id="testOutput"></span>
        <div id="cid_29" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" style="width: 550px;">
            <tr>
              <th style="border:none">
                &nbsp;
              </th>
              <th class="form-matrix-column-headers form-matrix-column_0" style="width: 250px;">
                Barcode*
              </th>
              <th class="form-matrix-column-headers form-matrix-column_1" style="width: 250px;">
                Unique Sample Name
              </th>
              <th class="form-matrix-column-headers form-matrix-column_2" style="width: 250px;">
                Concentration (ng/µL)
              </th>
              <th class="form-matrix-column-headers form-matrix-column_3" style="width: 250px;">
                A260/280
              </th>
              <th class="form-matrix-column-headers form-matrix-column_4" style="width: 250px;">
                Volume (µL)
              </th>
              <th class="form-matrix-column-headers form-matrix-column_5" style="width: 250px;">
                Chain
              </th>
              <th class="form-matrix-column-headers form-matrix-column_6" style="width: 250px;">
                NA Source **
              </th>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                1
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[0][]" maxlength="3";/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[0][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[0][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[0][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[0][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[0][]" maxlength="6" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[0][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                2
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[1][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[1][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[1][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[1][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[1][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[1][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[1][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                3
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[2][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[2][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[2][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[2][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[2][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[2][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[2][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                4
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[3][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[3][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[3][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[3][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[3][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[3][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[3][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                5
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[4][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[4][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[4][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[4][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[4][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[4][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[4][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                6
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[5][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[5][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[5][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[5][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[5][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[5][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[5][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                7
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[6][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[6][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[6][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[6][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[6][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[6][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[6][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                8
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[7][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[7][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[7][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[7][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[7][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[7][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[7][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                9
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[8][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[8][]"maxlength="10" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[8][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[8][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[8][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[8][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[8][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                10
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[9][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[9][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[9][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[9][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[9][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[9][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[9][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                11
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[10][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[10][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[10][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[10][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[10][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[10][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[10][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                12
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[11][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[11][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[11][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[11][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[11][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[11][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[11][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                13
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[12][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[12][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[12][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[12][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[12][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[12][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[12][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                14
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[13][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[13][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[13][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[13][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[13][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[13][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[13][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                15
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[14][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[14][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[14][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[14][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[14][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[14][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[14][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                16
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[15][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[15][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[15][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[15][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[15][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[15][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[15][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                17
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[16][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[16][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[16][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[16][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[16][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[16][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[16][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                18
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[17][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[17][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[17][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[17][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[17][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[17][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[17][]" maxlength="6"/>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                19
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[18][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[18][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[18][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[18][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[18][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[18][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[18][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                20
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_0" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[19][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_1" class="ss_name" type="text" size="5" name="q29_sampleInformation29[19][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_2" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[19][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_3" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[19][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_4" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[19][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_5" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[19][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_6" class="form-textbox" type="text" size="5" name="q29_sampleInformation29[19][]" />
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_30">
        <label class="form-label form-label-left" id="label_30" for="input_30">
          Do you have more than 20 samples?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_30" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="2">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_30_0" name="q30_doYou" value="Yes" />
              <label id="label_input_30_0" for="input_30_0"> Yes </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_30_1" name="q30_doYou" value="No" />
              <label id="label_input_30_1" for="input_30_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" style="display:none;" data-type="control_matrix" id="id_31">
        <label class="form-label form-label-top" id="label_31" for="input_31"> Additional Sample Information </label>
        <div id="cid_31" class="form-input-wide jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" style="width: 550px;">
            <tr>
              <th style="border:none">
                &nbsp;
              </th>
              <th class="form-matrix-column-headers form-matrix-column_0" style="width: 250px;">
                Barcode*
              </th>
              <th class="form-matrix-column-headers form-matrix-column_1" style="width: 250px;">
                Unique Sample Name
              </th>
              <th class="form-matrix-column-headers form-matrix-column_2" style="width: 250px;">
                Concentration (ng/µL)
              </th>
              <th class="form-matrix-column-headers form-matrix-column_3" style="width: 250px;">
                A260/280
              </th>
              <th class="form-matrix-column-headers form-matrix-column_4" style="width: 250px;">
                Volume (µL)
              </th>
              <th class="form-matrix-column-headers form-matrix-column_5" style="width: 250px;">
                Chain
              </th>
              <th class="form-matrix-column-headers form-matrix-column_6" style="width: 250px;">
                NA Source **
              </th>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                21
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_0_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[0][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_0_1" class="ss_name" type="text" size="5" name="q31_additionalSample[0][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_0_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[0][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_0_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[0][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_0_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[0][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_0_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[0][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_0_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[0][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                22
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_1_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[1][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_1_1" class="ss_name" type="text" size="5" name="q31_additionalSample[1][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_1_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[1][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_1_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[1][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_1_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[1][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_1_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[1][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_1_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[1][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                23
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_2_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[2][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_2_1" class="ss_name" type="text" size="5" name="q31_additionalSample[2][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_2_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[2][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_2_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[2][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_2_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[2][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_2_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[2][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_2_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[2][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                24
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_3_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[3][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_3_1" class="ss_name" type="text" size="5" name="q31_additionalSample[3][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_3_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[3][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_3_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[3][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_3_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[3][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_3_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[3][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_3_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[3][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                25
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_4_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[4][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_4_1" class="ss_name" type="text" size="5" name="q31_additionalSample[4][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_4_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[4][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_4_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[4][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_4_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[4][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_4_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[4][]"maxlength="6" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_4_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[4][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                26
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_5_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[5][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_5_1" class="ss_name" type="text" size="5" name="q31_additionalSample[5][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_5_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[5][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_5_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[5][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_5_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[5][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_5_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[5][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_5_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[5][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                27
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_6_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[6][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_6_1" class="ss_name" type="text" size="5" name="q31_additionalSample[6][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_6_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[6][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_6_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[6][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_6_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[6][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_6_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[6][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_6_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[6][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                28
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_7_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[7][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_7_1" class="ss_name" type="text" size="5" name="q31_additionalSample[7][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_7_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[7][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_7_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[7][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_7_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[7][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_7_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[7][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_7_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[7][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                29
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_8_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[8][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_8_1" class="ss_name" type="text" size="5" name="q31_additionalSample[8][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_8_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[8][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_8_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[8][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_8_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[8][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_8_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[8][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_8_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[8][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                30
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_9_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[9][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_9_1" class="ss_name" type="text" size="5" name="q31_additionalSample[9][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_9_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[9][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_9_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[9][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_9_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[9][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_9_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[9][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_9_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[9][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                31
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_10_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[10][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_10_1" class="ss_name" type="text" size="5" name="q31_additionalSample[10][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_10_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[10][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_10_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[10][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_10_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[10][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_10_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[10][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_10_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[10][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                32
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_11_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[11][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_11_1" class="ss_name" type="text" size="5" name="q31_additionalSample[11][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_11_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[11][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_11_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[11][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_11_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[11][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_11_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[11][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_11_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[11][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                33
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_12_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[12][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_12_1" class="ss_name" type="text" size="5" name="q31_additionalSample[12][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_12_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[12][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_12_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[12][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_12_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[12][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_12_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[12][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_12_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[12][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                34
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_13_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[13][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_13_1" class="ss_name" type="text" size="5" name="q31_additionalSample[13][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_13_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[13][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_13_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[13][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_13_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[13][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_13_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[13][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_13_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[13][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                35
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_14_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[14][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_14_1" class="ss_name" type="text" size="5" name="q31_additionalSample[14][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_14_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[14][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_14_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[14][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_14_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[14][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_14_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[14][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_14_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[14][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                36
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_15_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[15][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_15_1" class="ss_name" type="text" size="5" name="q31_additionalSample[15][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_15_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[15][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_15_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[15][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_15_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[15][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_15_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[15][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_15_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[15][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                37
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_16_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[16][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_16_1" class="ss_name" type="text" size="5" name="q31_additionalSample[16][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_16_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[16][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_16_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[16][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_16_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[16][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_16_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[16][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_16_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[16][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                38
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_17_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[17][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_17_1" class="ss_name" type="text" size="5" name="q31_additionalSample[17][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_17_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[17][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_17_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[17][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_17_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[17][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_17_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[17][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_17_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[17][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                39
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_18_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[18][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_18_1" class="ss_name" type="text" size="5" name="q31_additionalSample[18][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_18_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[18][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_18_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[18][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_18_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[18][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_18_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[18][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_18_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[18][]" />
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                40
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_31_19_0" class="form-textbox" type="text" size="5" name="q31_additionalSample[19][]" maxlength="3"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_19_1" class="ss_name" type="text" size="5" name="q31_additionalSample[19][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_19_2" class="form-textbox" type="text" size="5" name="q31_additionalSample[19][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_19_3" class="form-textbox" type="text" size="5" name="q31_additionalSample[19][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_19_4" class="form-textbox" type="text" size="5" name="q31_additionalSample[19][]" />
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_19_5" class="form-textbox" type="text" size="5" name="q31_additionalSample[19][]" maxlength="6"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_31_19_6" class="form-textbox" type="text" size="5" name="q31_additionalSample[19][]" />
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="input_3"> Please describe what you would like iRepertoire to perform. </label>
        <div id="cid_3" class="form-input jf-required">
          <textarea id="input_3" class="form-textarea" name="q3_pleaseDescribe" cols="40" rows="6" style="min-width: 353px; min-height: 150px; background-color: white;" data-richtext="Yes"></textarea>
        </div>
      </li>
      <li id="cid_35" class="form-input-wide" data-type="control_pagebreak">
        <div class="form-pagebreak">
          <div class="form-pagebreak-back-container">
            <button type="button" class="form-pagebreak-back " id="form-pagebreak-back_35">
              Back
            </button>
          </div>
           <div class="form-pagebreak-next-container">
            <button type="button" class="fakeNext" id="fakeNext">
              Next
            </button>
            <button type="button" class="form-pagebreak-next" id="secretNext">
              Next
            </button>
          </div>
        </div>
      </li>
    </ul>
    <ul class="form-section page-section" style="display:none;">
      <li class="form-line" data-type="control_text" id="id_38">
        <div id="cid_38" class="form-input-wide">
          <div id="text_38" class="form-html">
            <p><span style="font-size:medium;font-family:verdana, geneva;">iRepertoire Sample Submission Form Continued...</span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_37">
        <div id="cid_37" class="form-input-wide">
          <div id="text_37" class="form-html">
            <p class="p1"><span class="s1">In order for iRepertoire to process shipped samples, the following declaration must be completed and included with the shipment. This certification allows us to better protect the health of personnel who come in contact with the samples during the course of packaging, transport, and processing. Biohazardous materials may include, but are not limited to: human blood, infectious agents such as viruses or bacteria, mutagens, carcinogens, teratogens, toxins or any other agent that constitutes a threat to human safety. If you use any materials that can be considered a biohazard AT ANY STAGE in the preparation of the samples, they must be disclosed below. If you have any questions regarding our hazardous materials policy, please contact us before shipping samples.</span></p>
            <p class="p3"><span class="s1">Please choose one of the following options:</span></p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_36">
        <label class="form-label form-label-left form-label-auto" id="label_36" for="input_36">
          Hazardous Materials Declaration
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_36" class="form-input jf-required">
          <div class="form-single-column">
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_36_0" name="q36_hazardousMaterials" value="My samples are not contaminated with and have not been exposed to any hazardous agents." />
              <label id="label_input_36_0" for="input_36_0"> My samples are not contaminated with and have not been exposed to any hazardous agents. </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_36_1" name="q36_hazardousMaterials" value="My samples may be contaminated or may have come in contact with hazardous agents." />
              <label id="label_input_36_1" for="input_36_1"> My samples may be contaminated or may have come in contact with hazardous agents. </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" style="display:none;" data-type="control_textarea" id="id_41">
        <label class="form-label form-label-left form-label-auto" id="label_41" for="input_41"> Exposure prior to nucleic acid isolation: </label>
        <div id="cid_41" class="form-input jf-required">
          <textarea id="input_41" class="form-textarea" name="q41_exposurePrior" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" style="display:none;" data-type="control_textarea" id="id_40">
        <label class="form-label form-label-left form-label-auto" id="label_40" for="input_40"> Exposure following nucleic acid isolation: </label>
        <div id="cid_40" class="form-input jf-required">
          <textarea id="input_40" class="form-textarea" name="q40_exposureFollowing" cols="40" rows="6"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:206px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="51624353720146" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "51624353720146-51624353720146";
  </script>
</form>
<script src="//d2g9qbzl5h49rh.cloudfront.net/js/vendor/nicEdit.js?REV=3.3.8606" type="text/javascript"></script>
<script type = "text/javascript">
j(document).ready(function (){
	////////////////////   Toggle Overlay   ///////////////////
	function toggleOverlay(){
		var overlay = document.getElementById('overlay');
		var ErrMsg = document.getElementById('ErrMsg');
		overlay.style.opacity = .8;
		if(overlay.style.display == "block"){
			j("#overlay").fadeOut(420);
			j("#ErrMsg").hide("fast");
			
		} 
		else {
			j("#overlay").fadeIn(420);
			j("#ErrMsg").show("fast");
		}
	}
	
	//////// if user clicks overlay, close overlay  ///////////
	j("#overlay").click(function(){
		toggleOverlay();
	});
	
	
	//////// close button   ///////////////////////////////////
	j(".close").click(function(){
		toggleOverlay();
	});
	
	
	/////////////////////   Check if the study name has been used  //////////////////
	//// grab user id from userInfo php file
	var user_id = '<?php echo $user_id; ?>';
		j('#input_16').keyup(function(){
			j.post('validate.php', {user_id : user_id, studyName:
			form_51624353720146.q16_studyName.value},
			function(result){
			j('#usedStudyName').html(form_51624353720146.q16_studyName.value).show();
				if (result == "match found"){
					j('#sameStudyName').show();
					j('#tubeError').hide();
					j('#noSamples').hide();
					toggleOverlay();
				}
			});
		});
	j("#fakeNext").click(function(){
		var namesArray = new Array();
		
		j(".ss_name").each(function(){
			if (this.value != ""){
				namesArray.push(this.value);
			}
		});
		
		
		namesArray = jQuery.unique(namesArray);
	
		if (namesArray.length == 0){
			toggleOverlay();
			j("#noSamples").show("fast");
			j("#tubeError").hide();
			j("#sameStudyName").hide();
			j(".continue").click(function(){
				toggleOverlay();
				j("#secretNext").trigger("click");
			});
			// return true;
		}
		else if (namesArray.length != form_51624353720146.q52_howMany52.value){
			j("#numTubes").html(form_51624353720146.q52_howMany52.value).show();
			j("#numNames").html(namesArray.length).show();
			j("#tubeError").show("fast");
			j("#sameStudyName").hide();
			j("#noSamples").hide();
			toggleOverlay();
		}
		else{
			j("#secretNext").trigger("click");
		}
	});

});
</script>
</body>
</html>