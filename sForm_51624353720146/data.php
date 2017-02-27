<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel = "icon" href = "../images/icons/iRep.png">
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F52075859881974" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=http%3A%2F%2Fwww.jotform.com%2Fform%2F52075859881974" title="oEmbed Form">
<meta property="og:title" content="iRepertoire Sample Submission Form" >
<meta property="og:url" content ="http://www.jotformpro.com/form/52075859881974" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>iRepertoire Sample Submission Form</title>
<link type="text/css" rel="stylesheet" href="css/styles/form.css?v3.3.8683"/>
<link href="css/calendarview.css?v3.3.8683" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="//d2g9qbzl5h49rh.cloudfront.net/css/styles/nova.css?3.3.8683" />
<link type="text/css" media="print" rel="stylesheet" href="//d2g9qbzl5h49rh.cloudfront.net/css/printForm.css?3.3.8683" />
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
        color:#000000 !important;
        font-family:'Verdana';
        font-size:14px;
    }
    
    .dBarcode, .dPkit{
    	border:1px solid #cdd0d1;
        padding-top:3px;
        padding-bottom: 3px;
        padding-left: 4px;
        padding-right: 4px;
        -moz-border-radius:4px 4px;
        box-shadow:0 2px 4px rgba(0,0,0, 0.05) inset;  
    }
    
    .form-matrix-values{
    	position: relative;
    }
    
    .form-matrix-values span{
    	display: none;
    	z-index:900;
    	width:150px;
    	left: 120px;
    	top: -8px;
    	position: absolute;
    	font-size:10px;
    	padding: 3px;
    	color: #fff6f7;
    	background: #c54a4a;
    	border:4px solid #c54a4a;
    	-webkit-box-shadow:0px 2px 4px rgba(102, 102, 102, 0.5);
    	-webkit-border-radius:6px 6px;
    	-moz-box-shadow:0px 2px 4px rgba(102, 102, 102, 0.5);
    	-moz-border-radius:6px 6px;
		box-shadow:0px 2px 4px rgba(102, 102, 102, 0.5);
		border-radius:6px 6px; 	
    }
    
	div#overlay {
    	display: none;
    	z-index: 1500;
		background: black;
		position: fixed;
		width: 100%;
		height: 100%;
		top: 0px;
		left: 0px;
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
	
	.fakeBttn {
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
.fakeBttn:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e0e0e0), color-stop(1, #f2f2f2));
	background:-moz-linear-gradient(top, #e0e0e0 5%, #f2f2f2 100%);
	background:-webkit-linear-gradient(top, #e0e0e0 5%, #f2f2f2 100%);
	background:-o-linear-gradient(top, #e0e0e0 5%, #f2f2f2 100%);
	background:-ms-linear-gradient(top, #e0e0e0 5%, #f2f2f2 100%);
	background:linear-gradient(to bottom, #e0e0e0 5%, #f2f2f2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e0e0e0', endColorstr='#f2f2f2',GradientType=0);
	background-color:#e0e0e0;
}
.fakeBttn:active {
	position:relative;
	top:1px;
}

div#troubleWithTable{
	display: none;
	color: #cf2d2d;
	font-size: 16px;
	font-family: Helvetica, sans-serif;
}

.form-submit-button{
	display: none;
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
 var j = jQuery.noConflict();
 JotForm.setConditions([{"action":[{"field":"33","visibility":"Show"}],"id":"1438037864840","index":0,"link":"Any","priority":"0","terms":[{"field":"30","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"43","visibility":"Show"}],"id":"1393878943587","index":1,"link":"Any","priority":"2","terms":[{"field":"42","operator":"equals","value":"Yes"}],"type":"field"},{"action":[{"field":"42","visibility":"Show"}],"id":"1393878989520","index":2,"link":"Any","priority":"3","terms":[{"field":"30","operator":"equals","value":"Yes"}],"type":"field"},{"type":"require","link":"Any","terms":[{"field":"29","operator":"isEmpty","value":""}],"action":[{"field":"2","visibility":"Disable"}],"id":1439934233770,"priority":3,"index":3}]);
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
<?php
	require("../php/getUserInfo.php");
?>
<div id="overlay"></div>
<div id="ErrMsg">
 <div id = "troubleWithTable"> 
  		Please check the Sample Information Table for mistakes. 
 </div>
</div>
<form class="jotform-form" action="//submit.jotformpro.com/submit.php" method="post" name="form_52075859881974" id="52075859881974" accept-charset="utf-8">
  <input type="hidden" name="formID" value="52075859881974" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_34" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httal htvam">
            <h2 id="header_34" class="form-header">
              iRepertoire Data Submission Form
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_37">
        <div id="cid_37" class="form-input-wide">
          <div id="text_37" class="form-html">
            <p><span style="font-family:Helvetica, geneva;font-size:14px;">Please fill out only one form per sequencing lane.  For Roche 454 submissions, there should be one data submission form per submitted file.  For Illumina submissions, there should be one data submission form per two files (read 1 and read 2).</span></p>
            <p class="font_8" style="margin:0px;padding:0px;border:0px;vertical-align:baseline;font-size:13px;font-family:Helvetica, geneva, sans-serif;color:#606060;background-position:0px 0px;"><span style="font-size:13px;color:#000000;">Please only submit raw data.  Data that has been manipulated in any way, including de-multiplexing, will not be processed without incuring data handling fees.</span></p>
            <p class="font_8" style="margin:0px;padding:0px;border:0px;vertical-align:baseline;font-size:13px;font-family:Helvetica, geneva, sans-serif;color:#606060;background-position:0px 0px;"><span style="font-size:13px;color:#000000;"><br /></span></p>
            <p class="font_8" style="margin:0px;padding:0px;border:0px;vertical-align:baseline;font-size:13px;font-family:Helvetica, geneva, sans-serif;color:#606060;background-position:0px 0px;"><span style="font-size:13px;color:#000000;">When submitting data via hard drive or USB, please name the hard drive or USB with a name that specific to your lab.  It is best to not use something generic such as "My Passport", for example.  Also, label the hard drive or USB with a sticker that identifies the drive as your own so that we know where to return the hard drive or USB.</span></p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_41">
        <label class="form-label form-label-left" id="label_41" for="input_41">
          Institution
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_41" class="form-input jf-required">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_41" name="q41_institution" size="46" value="<?php echo $inst; ?>" readonly style="opacity:0.4"/>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_5">
        <label class="form-label form-label-left" id="label_5" for="input_5">
          Full Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="text" name="q5_fullName5[prefix]" size="4" id="prefix_5" value="<?php echo $prefix; ?>" readonly style="opacity:0.4"/>
            <label class="form-sub-label" for="prefix_5" id="sublabel_prefix" style="min-height: 13px;"> Prefix </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="10" name="q5_fullName5[first]" id="first_5" value="<?php echo $first; ?>" readonly style="opacity:0.4"/>
            <label class="form-sub-label" for="first_5" id="sublabel_first" style="min-height: 13px;"> First Name </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="15" name="q5_fullName5[last]" id="last_5" value="<?php echo $last; ?>" readonly style="opacity:0.4"/>
            <label class="form-sub-label" for="last_5" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_6">
        <label class="form-label form-label-left" id="label_6" for="input_6">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input jf-required">
          <input type="email" class=" form-textbox validate[required, Email]" id="input_6" name="q6_email6" size="30" value="<?php echo $email; ?>" readonly style="opacity:0.4"/>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_44">
        <label class="form-label form-label-left form-label-auto" id="label_44" for="input_44">
          Principal Investigator
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_44" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox" type="text" name="q44_principalInvestigator44[prefix]" size="4" id="prefix_44" value="Dr." readonly style="opacity:0.4"/>
            <label class="form-sub-label" for="prefix_44" id="sublabel_prefix" style="min-height: 13px;"> Prefix </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="10" name="q44_principalInvestigator44[first]" id="first_44" value="<?php echo $pi_first;?>" readonly style="opacity:0.4"/>
            <label class="form-sub-label" for="first_44" id="sublabel_first" style="min-height: 13px;"> First Name </label>
          </span>
          <span class="form-sub-label-container" style="vertical-align: top">
            <input class="form-textbox validate[required]" type="text" size="15" name="q44_principalInvestigator44[last]" id="last_44" value="<?php echo $pi_last; ?>" readonly style="opacity:0.4"/>
            <label class="form-sub-label" for="last_44" id="sublabel_last" style="min-height: 13px;"> Last Name </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_40">
        <div id="cid_40" class="form-input-wide">
          <div id="text_40" class="form-html">
            <p><span style="font-family:Helvetica, geneva;font-size:small;">The study name within your project should be unique.  If you duplicate a study name that has already been used on a previous submission, then the data will be merged into that study erroneously. To check which study names have been assigned, please log into iRweb and check the names on left-hand column.  The schema is Project Title > Study Name > Individual Sample Name > Chain Sequenced.</span></p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_16">
        <label class="form-label form-label-left form-label-auto" id="label_16" for="input_16">
          Study Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_16" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_16" name="q16_studyName" size="50" value="" maxlength="10"/>
            <label class="form-sub-label" for="input_16" style="min-height: 13px;"> Please limit to less than 10 characters, and no spaces. </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_11">
        <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
          Submission Method
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_11" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="3">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_0" name="q11_submissionMethod" value="Shipping a hard drive" />
              <label id="label_input_11_0" for="input_11_0"> Shipping a hard drive </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_1" name="q11_submissionMethod" value="FTP" />
              <label id="label_input_11_1" for="input_11_1"> FTP </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_2" name="q11_submissionMethod" value="Dropbox" />
              <label id="label_input_11_2" for="input_11_2"> Dropbox </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_11_3" name="q11_submissionMethod" value="Basespace" />
              <label id="label_input_11_3" for="input_11_3"> Basespace </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <input type="radio" class="form-radio-other form-radio validate[required]" name="q11_submissionMethod" id="other_11" value="" />
              <input type="text" class="form-radio-other-input form-textbox" name="q11_submissionMethod[other]" data-otherHint="Other" size="15" id="input_11" />
              <br />
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_35">
        <label class="form-label form-label-left form-label-auto" id="label_35" for="input_35">
          File Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_35" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_35" name="q35_fileName" size="50" value="" maxlength="100"/>
            <label class="form-sub-label" for="input_35" style="min-height: 13px;"> Illumina Read 1 or Roche 454 single-end read file name </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_38">
        <label class="form-label form-label-left" id="label_38" for="input_38">  </label>
        <div id="cid_38" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align: top">
            <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_38" name="q38_input38" size="50" value="" maxlength="100"/>
            <label class="form-sub-label" for="input_38" style="min-height: 13px;"> Illumina Read 2 file name </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_20">
        <label class="form-label form-label-left form-label-auto" id="label_20" for="input_20">
          Sequencing Platform
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_20" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="3">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_20_0" name="q20_sequencingPlatform" value="Illumina HiSeq" />
              <label id="label_input_20_0" for="input_20_0"> Illumina HiSeq </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_20_1" name="q20_sequencingPlatform" value="Illumina MiSeq" />
              <label id="label_input_20_1" for="input_20_1"> Illumina MiSeq </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_20_2" name="q20_sequencingPlatform" value="Roche 454" />
              <label id="label_input_20_2" for="input_20_2"> Roche 454 </label>
            </span>
            <span class="form-radio-item" style="clear:left;">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_20_3" name="q20_sequencingPlatform" value="Ion Torrent" />
              <label id="label_input_20_3" for="input_20_3"> Ion Torrent </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_32">
        <label class="form-label form-label-left form-label-auto" id="label_32" for="input_32">
          Was your starting template RNA or gDNA?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_32" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="2">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_32_0" name="q32_wasYour" value="RNA" />
              <label id="label_input_32_0" for="input_32_0"> RNA </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_32_1" name="q32_wasYour" value="gDNA" />
              <label id="label_input_32_1" for="input_32_1"> gDNA </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_27">
        <div id="cid_27" class="form-input-wide">
          <div id="text_27" class="form-html">
          <p><span style="font-size:small;"><strong> Please provide the sample information for your sequenced data.  </strong></span></p>
            <p><em style="font-size:small;">*Please list the primer kit used for amplification.  Options are follows. Please list the primer kit exactly as it is written below. The quickest method is copy and paste.</em></p>
            <p><span style="font-family:Helvetica, geneva;"><em style="font-size:small;"><span style="text-decoration:underline;"><strong>Human</strong></span>: HTAIvc, HTBIvc, HTBIvj, HTDGIvc, HBHIvc, HBKLIvc, HTAI-M, HTBI-M, HTDGI-M, HBHI-M, HBKLI-M, HTAR, HTBR, HBHR, or HBKLR</em></span></p>
            <p><span style="font-family:Helvetica, geneva;"><span style="font-size:small;"><em><span style="text-decoration:underline;"><strong>Mouse</strong></span></em>: <em>MTAIvc, </em></span><em style="font-size:small;">MTBIvc, MTBIvj, MTDGIvc, MBHIvc, MBKLIvc, MTAI-M, MTBI-M, MTDGI-M, MBHI-M, MBKLI-M, MTAR, MTBR, MBHR, or MBKLR</em></span></p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_matrix" id="id_29">
        <label class="form-label form-label-left" id="label_29" for="input_29">
          Sample Information
          <span class="form-required">
            *
          </span>
        </label><span id = "testOutput"></span>
        <div id="cid_29" class="form-input jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" style="width: 550px;">
            <tr>
              <th style="border:none">
                &nbsp;
              </th>
              <th class="form-matrix-column-headers form-matrix-column_0" style="width: 350px;">
                Barcode ID #
              </th>
              <th class="form-matrix-column-headers form-matrix-column_1" style="width: 350px;">
                Sample Name
              </th>
              <th class="form-matrix-column-headers form-matrix-column_2" style="width: 350px;">
                Primer Kit Used*
              </th>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                1
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[0][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[0][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_0_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[0][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                2
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[1][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[1][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_1_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[1][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                3
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[2][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[2][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_2_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[2][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                4
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[3][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[3][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_3_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[3][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                5
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[4][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[4][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_4_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[4][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                6
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[5][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[5][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_5_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[5][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                7
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[6][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[6][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_6_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[6][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                8
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[7][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[7][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_7_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[7][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                9
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[8][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[8][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_8_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[8][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                10
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[9][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[9][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_9_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[9][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                11
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[10][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[10][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_10_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[10][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                12
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[11][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[11][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_11_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[11][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                13
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[12][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[12][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_12_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[12][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                14
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[13][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[13][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_13_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[13][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                15
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[14][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[14][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_14_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[14][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                16
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[14][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[15][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_15_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[15][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                17
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[16][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[16][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_16_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[16][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                18
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[17][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[17][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_17_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[17][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                19
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[18][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[18][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_18_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[18][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                20
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[19][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_1" class="form-textbox validate[required]" type="text" size="5" name="q29_sampleInformation[19][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_29_19_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q29_sampleInformation[19][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
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
      <li class="form-line" style="display:none;" data-type="control_matrix" id="id_33">
        <label class="form-label form-label-left" id="label_33" for="input_33"> Additional Sample Information </label>
        <div id="cid_33" class="form-input jf-required">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" style="width: 550px;">
            <tr>
              <th style="border:none">
                &nbsp;
              </th>
              <th class="form-matrix-column-headers form-matrix-column_0" style="width: 250px;">
                Barcode ID #
              </th>
              <th class="form-matrix-column-headers form-matrix-column_1" style="width: 250px;">
                Sample Name
              </th>
              <th class="form-matrix-column-headers form-matrix-column_2" style="width: 250px;">
                Primer Kit Used*
              </th>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                21
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_0_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[0][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_0_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[0][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_0_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[0][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                22
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_1_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[1][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_1_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[1][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_1_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[1][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                23
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_2_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[2][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_2_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[2][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_3_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[3][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                24
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_3_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[3][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_3_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[3][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_3_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[3][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                25
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_4_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[4][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_4_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[4][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_4_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[4][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                26
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_5_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[5][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_5_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[5][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_5_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[5][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                27
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_6_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[6][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_6_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[6][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_6_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[6][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                28
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_7_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[7][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_7_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[7][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_7_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[7][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                29
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_8_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[8][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_8_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[8][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_8_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[8][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                30
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_9_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[9][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_9_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[9][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_9_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[9][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                31
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_10_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[10][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_10_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[10][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_10_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[10][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                32
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_11_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[11][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_11_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[11][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_11_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[11][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                33
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_12_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[12][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_12_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[12][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_13_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[13][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                34
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_13_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[13][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_13_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[13][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_13_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[13][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                35
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_14_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[14][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_14_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[14][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_14_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[14][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                36
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_15_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[15][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_15_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[15][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_15_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[15][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                37
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_16_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[16][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_16_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[16][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_16_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[16][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                38
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_17_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[17][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_17_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[17][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_17_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[17][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                39
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_18_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[18][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_18_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[18][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_18_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[18][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                40
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_33_19_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[19][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_19_1" class="form-textbox" type="text" size="5" name="q33_additionalSample[19][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_33_19_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q33_additionalSample[19][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line jf-required" style="display:none;" data-type="control_radio" id="id_42">
        <label class="form-label form-label-left" id="label_42" for="input_42">
          Do you have more than 40 samples?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_42" class="form-input jf-required">
          <div class="form-multiple-column" data-columnCount="2">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_42_0" name="q42_doYou42" value="Yes" />
              <label id="label_input_42_0" for="input_42_0"> Yes </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio validate[required]" id="input_42_1" name="q42_doYou42" value="No" />
              <label id="label_input_42_1" for="input_42_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" style="display:none;" data-type="control_matrix" id="id_43">
        <label class="form-label form-label-left" id="label_43" for="input_43"> Additional Sample Information </label>
        <div id="cid_43" class="form-input jf-required">
          <table  id= "sampleTable" summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" style="width: 550px;">
            <tr>
              <th style="border:none">
                &nbsp;
              </th>
              <th class="form-matrix-column-headers form-matrix-column_0" style="width: 250px;">
                Barcode ID #
              </th>
              <th class="form-matrix-column-headers form-matrix-column_1" style="width: 250px;">
                Sample Name
              </th>
              <th class="form-matrix-column-headers form-matrix-column_2" style="width: 250px;">
                Primer Kit Used*
              </th>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                41
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_0_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[0][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_0_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[0][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_0_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[0][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                42
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_1_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[1][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_1_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[1][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_1_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[1][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                43
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_2_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[2][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_2_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[2][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_2_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[2][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                44
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_3_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[3][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_3_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[3][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_3_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[3][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                45
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_4_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[4][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_4_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[4][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_4_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[4][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                46
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_5_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[5][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_5_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[5][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_5_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[5][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                47
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_6_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[6][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_6_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[6][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_6_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[6][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                48
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_7_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[7][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_7_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[7][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_7_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[7][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                49
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_8_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[8][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_8_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[8][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_8_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[8][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                50
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_9_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[9][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_9_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[9][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_9_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[9][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                51
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_10_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[10][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_10_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[10][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_10_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[10][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                52
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_11_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[11][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_11_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[11][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_11_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[11][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                53
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_12_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[12][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_12_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[12][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_12_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[12][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                54
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_13_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[13][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_13_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[13][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_13_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[13][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                55
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_14_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[14][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_14_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[14][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_14_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[14][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                56
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_15_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[15][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_15_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[15][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_15_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[15][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                57
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_16_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[16][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_16_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[16][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_16_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[16][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                58
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_17_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[17][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_17_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[17][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_17_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[17][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                59
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_18_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[18][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_18_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[18][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_18_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[18][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                60
              </th>
              <td align="center" class="form-matrix-values">
                <input id="input_43_19_0" class = "dBarcode" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[19][]" maxlength="3"/> <span class="barcodeErr">This field must be numeric.</span>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_19_1" class="form-textbox" type="text" size="5" name="q43_additionalSample43[19][]" maxlength="10"/>
              </td>
              <td align="center" class="form-matrix-values">
                <input id="input_43_19_2" class = "dPkit" style="font-size: 14px;" type="text" size="5" name="q43_additionalSample43[19][]" maxlength="8"/> <span class="primerErr">Please use one of the primers listed above.</span>
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_3">
        <label class="form-label form-label-left" id="label_3" for="input_3"> General Comments </label>
        <div id="cid_3" class="form-input jf-required">
          <textarea id="input_3" class="form-textarea" name="q3_generalComments3" cols="40" rows="6" style="min-width: 353px; min-height: 150px; background-color: white;" data-richtext="Yes"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:206px" class="form-buttons-wrapper">
            <button id="fakeBttn" type="button" class="fakeBttn">
              Submit
            </button>
            <button id="secretBttn" type="submit" class="form-submit-button">
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
  <input type="hidden" id="simple_spc" name="simple_spc" value="52075859881974" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "52075859881974-52075859881974";
  </script>
</form>
<script src="//d2g9qbzl5h49rh.cloudfront.net/js/vendor/nicEdit.js?REV=3.3.8683" type="text/javascript"></script>
<script type = "text/javascript"</script>
j(document).ready(function(){
	
	///////////// validate function - return the number of errors in the table
	function validate(){
	var visibleCount = 0;
	j('.barcodeErr').each(function(){
		if (j(this).is(':visible')){
			visibleCount++;
		}
	});
	
	j('.primerErr').each(function(){
		if (j(this).is(':visible')){
			visibleCount++;
		}
	});
	
	return visibleCount; 
	}

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

	///////////Barcode keyup - show error if non numeric //////////////////	
	j(".dBarcode").keyup(function(){
		if (!(j.isNumeric(this.value))){
			j(this).next(".barcodeErr").show("fast");
		}
		else{
			j(this).next(".barcodeErr").hide("fast");
		}
	});
	
	/////////Barcode blur - maintain error message if non numeric ////////
	j(".dBarcode").blur(function(){		
		if (this.value == ""){
			j(this).next(".barcodeErr").hide();
		}
		else if (!(j.isNumeric(this.value))){
			j(this).next(".barcodeErr").show();
		}
		else{
	 		j(this).next(".barcodeErr").hide();
		}
	});
	
	////////////////////   Check if the primer kit is valid     //////////////////////
	j(".dPkit").keyup(function(){	if(!(this.value.match("HTAIvc|HTBIvc|HTBIvj|HTDGIvc|HBHIvc|HBKLIvc|HTAI-M|HTBI-M|HTDGI-M|HBHI-M|HBKLI-M|HTAR|HTBR|HBHR|HBKLR|MTAIvc|MTBIvc|MTBIvj|MTDGIvc|MBHIvc|MBKLIvc|MTAI-M|MTBI-M|MTDGI-M|MBHI-M|MBKLI-M|MTAR|MTBR|MBHR|MBKLR"))){
			j(this).next(".primerErr").show("fast");
		}
		else{
			j(this).next(".primerErr").hide("fast");
		}
	});	

////////////////////    hide error message if not in focus     //////////////////////
	j(".dPkit").blur(function(){	
		if(this.value == ""){
			j(this).next(".primerErr").hide("fast");
		}
	});


	j("#fakeBttn").click(function(){
		var count = validate();
		if (count == 0){
			j("#secretBttn").trigger("click");
			j("#troubleWithTable").hide("fast");
		}
		else{
			toggleOverlay();
			j("#troubleWithTable").show("fast");
		}	
	});
	
	j("#overlay").click(function(){
		toggleOverlay();
	});
});
</script>

</body>
</html>