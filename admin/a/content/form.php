
<?php if ($page=='staff_reg'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW STAFF</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
    </div>

    <div class="container-back-div sb-container">
        <div class="inner-div">

            <div class="alert">Kindly fill the form below to <span>ADD NEW STAFF</span></div>

            <div class="title">FULL NAME: <span>*</span></div>
            <input  id="reg_fullname" type="text" class="text_field" placeholder="FULL NAME" title="FULL NAME" />

            <div class="title">EMAIL ADDRESS: <span>*</span></div>
            <input id="reg_email" type="email" class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" />

            <div class="title">PHONE NUMBER: <span>*</span><div id="mobile_info" style="float:right;font-size:12px;display:none;color:#f00"><span>Mobile not accepted!</span></div></div>
            <input id="reg_mobile" type="tel" class="text_field" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER"  />      

            <div class="title">HOME ADDRESS: <span>*</span></div>
            <input id="reg_address" type="text" class="text_field" placeholder="HOME ADDRESS" title="HOME ADDRESS"  />

            <div class="title">SELECT ROLE: <span>*</span></div>
            <select id="reg_role_id" class="text_field selectinput" title="SELECT ROLE">
                <option value="" selected="selected">SELECT ROLE</option>
                    <script>_get_select_role('reg_role_id');</script>
            </select>
        
            <div class="title">SELECT STATUS: <span>*</span></div>
            <select id="reg_status_id" class="text_field selectinput" title="SELECT STATUS">
                <option value="" selected="selected">SELECT STATUS</option>
                <script>_get_select_status('reg_status_id','1,2');</script>
            </select> 
            <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_staff('');"> <i class="bi-check"></i> SUBMIT </button>
        
     
        
        </div>
    </div> 
</div>
<?php } ?>






<?php if ($page=='my_profile'){?>
    <?php include 'staff-profile.php';?>
<?php } ?>


<?php if ($page=='staff_profile'){?>
<div class="overlay-off-div">
    <div class="user-profile-div animated fadeInUp" >
        <div class="top-panel-div">
            <i class="bi-person"></i> ADMINISTRATIVE PROFILE</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
        <div class="profile-content-div sb-container">

    
            <div class="bg-img">
                
                <div class="mini-profile">
                    <label>
                        <div class="img-div" id="current_user_passport1">
                            <img src="" alt=""/>                                
                        </div> 
                    </label>

                    <div class="text-div">
                        <div class="name" id="staff_login_fullname"></div>
                        <div class="text">
                            STATUS: <strong id="staff_status_name"> </strong> | LAST LOGIN DATE: <strong id="last_login_time"> </strong>
                        </div>                 
                    </div>
                </div>
            </div>

            <div class="user-in">
                <div class="title">BASIC INFORMATION</div>
                       
                <div class="profile-segment-div col-3">
                    <div class="segment-title">FULLNAME:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_fullname" type="text" class="text_field text_field2" placeholder="FULLNAME" title="FULLNAME"/>
                    </div>
                </div>

                <div class="profile-segment-div col-4">
                    <div class="segment-title">EMAIL:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_email" type="text" class="text_field text_field2" placeholder="EMAIL" title="EMAIL"/>
                    </div>
                </div>

                <div class="profile-segment-div col-3">
                    <div class="segment-title">HOME ADDRESS:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_address" type="text" class="text_field text_field2" placeholder="HOME ADDRESS" title="HOME ADDRESS"/>
                    </div>
                </div>

                <div class="profile-segment-div col-4"><div id="mobile_info" style="float:right;font-size:12px;display:none;color:#f00"><span>Mobile not accepted!</span></div>
                    <div class="segment-title">PHONE NUMBER:</div>
                    <div class="text-field-div no-border">
                        <input id="updt_mobile" type="text" class="text_field text_field2" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                    </div>
                </div>
            </div>
            

            <div class="user-in">
                <div class="title">ACCOUNT INFORMATION</div>
                
                <div class="profile-segment-div col-5">
                    <div class="segment-title">STAFF ID:</div>
                    <div class="text-field-div">
                        <input id="s_staff_id" type="text" class="text_field" readonly="readonly" placeholder="STAFF ID" title="STAFF ID"/>
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>

                <div class="profile-segment-div col-6">
                    <div class="segment-title">DATE OF REGISTRATION:</div>
                    <div class="text-field-div">
                        <input id="s_created_time" type="text" readonly="readonly" class="text_field" placeholder="Date Of Registration" title="Date Of Registration"/>
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>

                <div class="profile-segment-div col-7">
                    <div class="segment-title">LAST LOGIN DATE:</div>
                    <div class="text-field-div">
                        <input id="s_last_login" type="text" class="text_field" readonly="readonly" placeholder="Last Login Date" title="Last Login Date" />
                        <span>&nbsp;<i class="bi-lock"></i></span>
                    </div>
                </div>
            </div>   

            <div class="user-in user-in-bottom">
                <div class="title">ADMINISTRATIVE INFORMATION</div>
                <div class="profile-segment-div col-6">
                    <div class="segment-title">STAFF ROLE:</div>
                    <div class="text-field-div no-border">
                        <select class="text_field text_field2" id="updt_role_id" style="background:#fff;">                                       
                        <option value="">SELECT ROLE </option>
                            <script>_get_select_role('updt_role_id');</script>
                      </select>
                    </div>
                </div> 


                <div class="profile-segment-div col-7">
                    <div class="segment-title">STAFF STATUS:</div>
                    <div class="text-field-div no-border">
                        <select class="text_field text_field2" readonly="readonly" id="updt_status_id" style="background:#fff;" >                       
                        <option value="">SELECT STATUS </option>
                        <script> _get_select_status('updt_status_id','1,2');</script>
                     </select>
                    </div>
                </div>
                <button class="btn" type="button" id="update_btn" onclick="_update_staff_profile('<?php echo $ids?>');"> UPDATE PROFILE <i class="bi-check"></i></button>     
            </div> 
        </div>
                
    </div> 
</div>
<script>_get_staff_profile('<?php echo $ids?>');</script>
<?php } ?>



<?php if ($page=='add_and_update_subject'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">
                    <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW SUBJECT</span>          
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Subject Pix <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Upload Subject Image">
                    <div class="img-in">
                        <div id=""><img id="subject-pix" src="<?php echo $website_url?>/admin/a/all-images/images/sample.jpg" alt="exam-pix"/></div>
                        <input type="file" id="thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="subj_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW SUBJECT</span></div>

                <div class="title">SUBJECT NAME: <span>*</span></div>
                <input id="subject_name" type="text"  class="text_field" placeholder="SUBJECT NAME" title="SUBJECT NAME"/>
                
                <div class="title">SUBJECT URL: <span>*</span></div>
                <input id="urls" type="text"  class="text_field" placeholder="SUBJECT URL" title="SUBJECT URL"/>          

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field selectinput" title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                </select>
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_subject('');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<?php } ?>


<?php if ($page=='update_subject'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">              
                <span id="panel-title"><i class="bi-pencil-square"></i> UPDATE SUBJECT</span>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Subject Pix <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Upload Exam Pix">
                    <div class="img-in">
                        <div id="view_pix"><img id="subject-pix" src="<?php echo $website_url?>/admin/a/all-images/images/sample.jpg" alt="exam-pix"/></div>
                        <input type="file" id="thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="subj_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>UPDATE SUBJECT</span></div>

                <div class="title">SUBJECT NAME: <span>*</span></div>
                <input id="updt_subject_name" type="text"  class="text_field" placeholder="SUBJECT NAME" title="SUBJECT NAME"/>
                
                <div class="title">SUBJECT URL: <span>*</span></div>
                <input id="updt_urls" type="text"  class="text_field" placeholder="SUBJECT URL" title="SUBJECT URL"/>          

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="updt_status_id" class="text_field selectinput" title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT STATUS</option>
                    <script>_get_select_status('updt_status_id','1,2');</script>
                </select>
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_update_subject('<?php echo $ids?>');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<script>_fetch_each_subject('<?php echo $ids?>');</script>
<?php } ?>



<?php if ($page=='add_classes'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">
                    <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW CLASS</span>          
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Class Pix <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Upload Exam Pix">
                    <div class="img-in">
                        <div id=""><img id="subject-pix" src="<?php echo $website_url?>/admin/a/all-images/images/sample.jpg" alt="exam-pix"/></div>
                        <input type="file" id="thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="subj_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW CLASS</span></div>

                <div class="title">CLASS NAME: <span>*</span></div>
                <input id="class_name" type="text"  class="text_field" placeholder="CLASS NAME" title="CLASS NAME"/>
                
                <div class="title">CLASS URL: <span>*</span></div>
                <input id="urls" type="text"  class="text_field" placeholder="CLASS URL" title="CLASS URL"/>          

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field selectinput" title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                </select>
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_classes('');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<?php } ?>



<?php if ($page=='update_classes'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">              
                <span id="panel-title"><i class="bi-pencil-square"></i> UPDATE CLASS</span>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Class Pix <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Upload Exam Pix">
                    <div class="img-in">
                        <div id="view_pix"><img id="subject-pix" src="<?php echo $website_url?>/admin/a/all-images/images/sample.jpg" alt="exam-pix"/></div>
                        <input type="file" id="thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="subj_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">
                <div class="alert">Kindly fill the form below to <span>UPDATE CLASS</span></div>

                <div class="title">CLASS NAME: <span>*</span></div>
                <input id="updt_class_name" type="text"  class="text_field" placeholder="CLASS NAME" title="CLASS NAME"/>
                
                <div class="title">SUBJECT URL: <span>*</span></div>
                <input id="updt_urls" type="text"  class="text_field" placeholder="CLASS URL" title="CLASS URL"/>          

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="updt_status_id" class="text_field selectinput" title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT STATUS</option>
                    <script>_get_select_status('updt_status_id','1,2');</script>
                </select>
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_update_classes('<?php echo $ids?>');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<script>_fetch_each_class('<?php echo $ids?>');</script>
<?php } ?>


<?php if ($page=='dept_reg'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">
                <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW DEPARTMENT</span>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Department Pix <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Upload Exam Pix">
                    <div class="img-in">
                        <div id="view_exam"><img id="subject-pix" src="<?php echo $website_url?>/admin/a/all-images/images/sample.jpg" alt="Exam pix" /></div>
                        <input type="file" id="thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="subj_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span>ADD NEW DEPARTMENT</span></div>

                <div class="title">DEPARTMENT NAME: <span>*</span></div>
                <input id="department_name" type="text" class="text_field" placeholder="DEPARTMENT NAME" title="DEPARTMENT NAME" />
                
                <div class="title">DEPARTMENT URL: <span>*</span></div>
                <input id="urls" type="text"  class="text_field" placeholder="DEPARTMENT URL" title="DEPARTMENT URL"/>
                
                <div class="title">SEO KEYWORDS: <span>*</span></div>
                <textarea id="seo_keywords" class="text_field textarea" rows="2" maxlength="160" title="SEO KEYWORDS" placeholder="SEO KEYWORDS"></textarea>

                <div class="title">SEO DESCRIPTION: <span>*</span></div>
                <textarea id="seo_description" class="text_field textarea" rows="2" maxlength="160" title="SEO DESCRIPTION" placeholder="SEO DESCRIPTION"></textarea>
            
                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field selectinput" title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                </select> 
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_department('');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<?php } ?>


<?php if ($page=='update_dept'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div center-form-div animated fadeInUp">
        <div class="fly-title-div">
            <div class="in">
                <span id="panel-title"><i class="bi-pencil-square"></i> UPADTE DEPARTMENT</span>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="img-back-div">
            <legend >Click to Upload Department Pix <i class="bi-upload" ></i></legend>
            <label>
                <div class="img-div" title="Click To Upload Exam Pix">
                    <div class="img-in">
                        <div id="view_pix"><img id="subject-pix" src="<?php echo $website_url?>/admin/a/all-images/images/sample.jpg" alt="Exam pix" /></div>
                        <input type="file" id="thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="subj_pix.UpdatePreview(this);"/>
                    </div>
                </div>
            </label>
        </div>
           
        <div class="container-back-div container-back-div2  sb-container" >
            <div class="inner-div">

                <div class="alert">Kindly fill the form below to <span> UPADTE DEPARTMENT </span></div>

                <div class="title">DEPARTMENT NAME: <span>*</span></div>
                <input id="updt_department_name" type="text" class="text_field" placeholder="DEPARTMENT NAME" title="DEPARTMENT NAME" />
                
                <div class="title">DEPARTMENT URL: <span>*</span></div>
                <input id="updt_urls" type="text"  class="text_field" placeholder="DEPARTMENT URL" title="DEPARTMENT URL"/>
                
                <div class="title">SEO KEYWORDS: <span>*</span></div>
                <textarea id="updt_seo_keywords" class="text_field textarea" rows="2" maxlength="160" title="SEO KEYWORDS" placeholder="SEO KEYWORDS"></textarea>

                <div class="title">SEO DESCRIPTION: <span>*</span></div>
                <textarea id="updt_seo_description" class="text_field textarea" rows="2" maxlength="160" title="SEO DESCRIPTION" placeholder="SEO DESCRIPTION"></textarea>
            
                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="updt_status_id" class="text_field selectinput" title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT STATUS</option>
                    <script>_get_select_status('updt_status_id','1,2');</script>
                </select> 
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_update_department('<?php echo $ids?>');"> <i class="bi-check"></i> SUBMIT </button>
            </div>
        </div> 
    </div>
</div>
<script>_fetch_each_department('<?php echo $ids?>');</script>
<?php } ?>



<?php if ($page=='add_class_dept'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> ADD A NEW CLASS</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
        <div class="inner-div" id="status_id">

            <div class="alert" id="search_keywords">Kindly check the checkboxes to add a new class under <span id="department1_name">XXX</span> Department</div>

            <div class="title">SELECT CLASS: <span>*</span></div>
                <div class="subject-info-div">
                    <div class="div-in" id="fetch_classes_checkbox">
                        <label for="">
                            <!-- <div class="radio-in-div">
                                <div class="radio"><input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY"><div class="border"></div></div>
                                <span>JUPEB</span>
                            </div> -->
                        </label>                       
                    </div>                  
                </div>
            <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_class_dept('<?php echo $ids?>');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<script> _get_fetch_all_classes('fetch_classes_checkbox');</script>
<script>_get_fetch_form_class_dept('<?php echo $ids?>');</script>
<?php } ?>



<?php if ($page=='add_subject_class'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> ADD A NEW SUBJECT</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
        <div class="inner-div" id="status_id">

            <div class="alert" id="search_keywords">Kindly check the checkboxes to add a new subject under <span id="class1_name">XXX</span> Class</div>

            <div class="title">SELECT CLASS: <span>*</span></div>
                <div class="subject-info-div">
                    <div class="div-in" id="fetch_subject_checkbox">
                        <label for="">
                            <!-- <div class="radio-in-div">
                                <div class="radio"><input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY"><div class="border"></div></div>
                                <span>JUPEB</span>
                            </div> -->
                        </label>                       
                    </div>                  
                </div>
            <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_subject_class('<?php echo $ids?>','<?php echo $other_ids?>');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<script> _get_fetch_all_subject('fetch_subject_checkbox');</script>
<script>_get_fetch_form_subject_class('<?php echo $ids?>','<?php echo $other_ids?>');</script>
<?php } ?>
     



<?php if ($page=='select_class_form'){?>
	<div class="caption-div animated zoomIn">
        <div  class="title-div"><button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button></div>
        <div class="div-in animated fadeInRight">
            <div class="alert alert-success"> Hi, You are about to view <strong><span>Tutorial</span></strong> videos. <br/> Kindly select <strong>department</strong> & <strong>Class</strong> to Continue.</div>

            <div class="title">SELECT DEPARTMENT: <span>*</span></div>
            <select id="department_id" onchange="_get_class('department_id','class_id');" class="text_field selectinput" title="SELECT DEPARTMENT">
                <option value="" selected="selected">SELECT DEPARTMENT</option>
                <script>_get_select_department('department_id');</script>
            </select> 

            <div class="title">SELECT CLASS: <span>*</span></div>
            <select id="class_id" class="text_field selectinput" title="SELECT DEPARTMENT FIRST">
                <option value="" selected="selected">SELECT DEPARTMENT FIRST</option>           
            </select>
            <button class="btn" type="button" id="submit_btn"  title="Proceed"  onclick="_fetch_department_class_subject('<?php echo $ids?>','<?php echo $other_ids?>');" ><i class="bi-check"></i> PROCEED </button>
        </div>
    </div>
<?php } ?>



<?php if ($page=='video_reg'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW VIDEO</span>
            <div class="close" title="Close" onclick="_alert_close2();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
        <div class="inner-div">
            <div class="alert alert-success">
                <p>Kindly fill the form below to add a new tutorial:</p>
                <div class="alert-list-div">
                    <div class="alert-list">
                        <div>DEPARMTMENT:</div>
                        <div><span id="tut_department_name">xxxx</span></div>
                    </div>
                    <div class="alert-list">
                        <div>CLASS:</div>
                        <div><span id="tut_class_name">xxxx</span></div>
                    </div>
                    <div class="alert-list">
                        <div>SUBJECT:</div>
                        <div><span id="tut_subject_name">xxxx</span></div>
                    </div>
                </div>
            </div>               

            <div class="title">SELECT TERM: <span>*</span></div>
            <select id="term_id" class="text_field selectinput" title="SELECT TERM">
                <option value="" selected="selected">SELECT TERM</option>
                <script>_get_select_term('term_id');</script>
            </select> 

            <div class="title">SELECT WEEK: <span>*</span></div>
            <select id="week_id" class="text_field selectinput" title="SELECT WEEK">
                <option value="" selected="selected">SELECT WEEK</option>
                <script>_get_select_week('week_id');</script>
            </select> 

            <div class="title">SELECT VIDEO SERIES: <span>*</span></div>
            <select id="series_id" class="text_field selectinput" title="VIDEO SERIES">
                <option value="" selected="selected">VIDEO SERIES</option>
                <script>_get_select_series('series_id');</script>
            </select> 

            <div class="title">TOPIC: <span>*</span></div>
            <input id="topic" type="text"  class="text_field" placeholder="TOPIC" title="TOPIC"/>

            <div class="title">URL: <span>*</span></div>
            <input id="urls" type="text"  class="text_field" placeholder="URL" title="URL"/>

            <div class="title">SEO KEYWORDS: <span>*</span></div>
            <textarea id="seo_keywords" class="text_field textarea" rows="2" maxlength="160" title="SEO KEYWORDS" placeholder="SEO KEYWORDS"></textarea>

            <div class="title">SEO DESCRIPTION: <span>*</span></div>
            <textarea id="seo_description" class="text_field textarea" rows="2" maxlength="160" title="SEO DESCRIPTION" placeholder="SEO DESCRIPTION"></textarea>

            <div class="title">CLASS SUMMARY: <span>*</span></div>
            <script src="js/TextEditor.js" referrerpolicy="origin"></script>
            <script>tinymce.init({selector:'#summary',  // change this value according to your HTML
            plugins: "link, image, table"
            });</script>
            <textarea style="width: 100%;" rows="20" id="summary" title="CLASS SUMMARY" placeholder="CLASS SUMMARY"></textarea>
            <br clear="all"/>
            
            <div class="video-img-back-div">
                <legends>Click to Upload Video Image <i class="bi-upload"></i></legends>
                <label>
                    <div class="img-div bottom-image-div" title="Click To Upload Tutorial Video Image">
                        <img id="subject-pix" src="<?php echo $website_url?>/admin/a/all-images/body-pix/default.png" alt="Default Image">
                        <input type="file" id="thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="subj_pix.UpdatePreview(this);" />
                    </div>
                </label> 
            </div>


            <div class="video-img-back-div">
                <legend style="cursor:pointer;">Click to Upload Video <i class="bi-upload"></i></legend>
                    <label>
                        <div class="img-div video-div" title="Click To Upload Tutorial Video">
                            <div id="view_sub_topic_video" class="video-container">
                                <video src="" id="videoDisplay" name="sub_video" controls="controls" loop="" class="video-slide"></video>
                                <div id="video-background" class="background-image">
                                    <img src="<?php echo $website_url?>/admin/a/all-images/body-pix/default.png" alt="Default Image">
                                </div>
                            </div>
                            <input name="sub_video" id="video" onchange="showVideo(this)" type="file" style="display:none;">
                        </div>
                    </label> 
                    <script>     
                        var videoDisplay = document.getElementById('videoDisplay');
                        var videoInput = document.getElementById('video');
                        var legendElement = document.querySelector('legend');
                        
                        // Add click event listener to the legend element
                        legendElement.addEventListener('click', function () {
                            videoInput.click();
                        });
                    
                        videoInput.addEventListener('change', function () {
                            showVideo(this);
                        });
                    
                        function showVideo(input) {
                            var videoDisplay = document.getElementById('videoDisplay');
                            var videoBackground = document.getElementById('video-background');
                    
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    videoDisplay.src = e.target.result;
                                    videoBackground.style.display = 'none'; // Hide the default background image
                                    videoDisplay.style.display = 'block'; // Show the video
                                };
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
            </div>

            <div class="title">VIDEO DURATION: <span>*</span> (HH:MM:SS)</div>
            <input id="duration" type="text" class="text_field" placeholder="00:00:00" title="VIDEO DURATION"/>              
            
            <div class="pdf-back-div">
                <div class="title">CLASS MATERIAL (PDF): <span>*</span></div>
                <legend id="pdf_legend" style="cursor:pointer;">Click to Upload PDF <i class="bi-upload"></i></legend>
                <div class="div-in" id="pdf_upload_area">
                    <label>
                        <div id="pdf_display" class="pdf-container background-display">
                            <embed id="pdfFile" src="" type="application/pdf" width="100%" height="350px" style="display: none;">                          
                            <div id="pdf-background" class="background-text" style="cursor:pointer;">
                                <img src="<?php echo $website_url?>/admin/a/all-images/body-pix/default.png" alt="Default Image">
                            </div>
                        </div>
                        <input type="file" id="material" onchange="showPdf(this)" name="pdf_file" accept=".pdf" style="display: none;">
                    </label>
                </div>
                <div id="file-list">
                    <!-- PDF will be displayed here -->
                </div>
            </div>


            <script>
                var pdfDisplay = document.getElementById('pdf_display');
                var pdfInput = document.getElementById('material');
                var fileList = document.getElementById('file-list');
                var legendElement = document.getElementById('pdf_legend');
                var pdfEmbed = document.getElementById('pdfFile');

                function showPdf(input) {
                    if (input.files && input.files[0]) {
                        var file = URL.createObjectURL(input.files[0]);
                        pdfDisplay.classList.add('embed-display');
                        pdfDisplay.classList.remove('background-display');
                        pdfEmbed.style.display = 'block'; // Display the PDF embed
                        pdfEmbed.src = file;
                        pdfDisplay.querySelector('.background-text').style.display = 'none';

                        // Show file size
                        var fileSize = input.files[0].size;
                        var sizeInMB = (fileSize / (1024 * 1024)).toFixed(2); // Convert to MB with two decimal places
                        fileList.innerHTML = 'File size: ' + sizeInMB + ' MB';
                    }
                }   


                // Trigger file input click on the legend click
                legendElement.addEventListener('click', function() {
                    pdfInput.click();
                });

                // Drag and drop functionality
                pdfDisplay.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    pdfDisplay.classList.add('drag-over');
                });

                pdfDisplay.addEventListener('dragleave', function() {
                    pdfDisplay.classList.remove('drag-over');
                });

                pdfDisplay.addEventListener('drop', function(e) {
                    e.preventDefault();
                    pdfDisplay.classList.remove('drag-over');
                    var file = e.dataTransfer.files[0];
                    pdfInput.files = e.dataTransfer.files;
                    showPdf(pdfInput);
                });


            </script>

            <div class="title">SELECT STATUS: <span>*</span></div>
            <select id="reg_status_id" class="text_field select_input" title="SELECT STATUS">
                <option value="" selected="selected"> SELECT STATUS</option>
                <script>_get_select_status('reg_status_id','1,2');</script>
            </select> 

            <div class="alert alert-success" id="progress-alert">
                <span>UPLOADING IN PROGRESS...</span><br>
                Please DO NOT close this panel as the process takes some time.
                <div class="ajax-progress">0%</div>
            </div> 

            <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_tutorial_video('<?php echo $ids?>','<?php echo $other_ids?>','<?php echo $other_ids1?>');"> <i class="bi-check"></i> SUBMIT </button>
        </div>
    </div> 
</div>
<script>_get_fetch_department_class_subject_form('<?php echo $ids?>','<?php echo $other_ids?>')</script>
<script>_get_fetch_subject_form('<?php echo $other_ids1?>')</script>
<?php } ?>








<?php if ($page=='update_video'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-plus-square"></i> UPDATE VIDEO</span>
            <div class="close" title="Close" onclick="_alert_close2();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
        <div class="inner-div">
            <div class="alert alert-success">
                <p>Kindly fill the form below to update tutorial:</p>
                <div class="alert-list-div">
                    <div class="alert-list">
                        <div>DEPARMTMENT:</div>
                        <div><span id="tut_department_name">xxxx</span></div>
                    </div>
                    <div class="alert-list">
                        <div>CLASS:</div>
                        <div><span id="tut_class_name">xxxx</span></div>
                    </div>
                    <div class="alert-list">
                        <div>SUBJECT:</div>
                        <div><span id="update_subject_name">xxxx</span></div>
                    </div>
                </div>
            </div>  

            <div class="title">SUBJECT: <span>*</span></div>
            <select id="subject_id" class="text_field selectinput" title="SUBJECT">
                <option value="" selected="selected"></option>
                <script>_fetch_select_subject('subject_id');</script>
            </select> 

            <div class="title">SELECT TERM: <span>*</span></div>
            <select id="term_id" class="text_field selectinput" title="SELECT TERM">
                <option value="" selected="selected">SELECT TERM</option>
                <script>_get_select_term('term_id');</script>
            </select> 

            <div class="title">SELECT WEEK: <span>*</span></div>
            <select id="week_id" class="text_field selectinput" title="SELECT WEEK">
                <option value="" selected="selected">SELECT WEEK</option>
                <script>_get_select_week('week_id');</script>
            </select> 

            <div class="title">SELECT VIDEO SERIES: <span>*</span></div>
            <select id="series_id" class="text_field selectinput" title="VIDEO SERIES">
                <option value="" selected="selected">VIDEO SERIES</option>
                <script>_get_select_series('series_id');</script>
            </select> 

            <div class="title">TOPIC: <span>*</span></div>
            <input id="topic" type="text"  class="text_field" placeholder="TOPIC" title="TOPIC"/>

            <div class="title">URL: <span>*</span></div>
            <input id="urls" type="text"  class="text_field" placeholder="URL" title="URL"/>

            <div class="title">SEO KEYWORDS: <span>*</span></div>
            <textarea id="seo_keywords" class="text_field textarea" rows="2" maxlength="160" title="SEO KEYWORDS" placeholder="SEO KEYWORDS"></textarea>

            <div class="title">SEO DESCRIPTION: <span>*</span></div>
            <textarea id="seo_description" class="text_field textarea" rows="2" maxlength="160" title="SEO DESCRIPTION" placeholder="SEO DESCRIPTION"></textarea>

            <div class="title">CLASS SUMMARY: <span>*</span></div>
            <script src="js/TextEditor.js" referrerpolicy="origin"></script>
            <script>tinymce.init({selector:'#summary',  // change this value according to your HTML
            plugins: "link, image, table"
            });</script>
            <textarea style="width: 100%;" rows="20" id="summary" title="CLASS SUMMARY" placeholder="CLASS SUMMARY"></textarea>
            <br clear="all"/>
            
            
            <div class="video-img-back-div">
                <legends>Click to Upload Video Image <i class="bi-upload"></i></legends>
                <label>
                    <div class="bottom-image-div" title="Click to upload tutorial Video Image">
                        <div id="view_tutorial_pix"><img id="subject-pix" src="<?php echo $website_url?>/admin/a/all-images/body-pix/default.png" alt="Default Image"></div>
                        <input type="file" id="thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="subj_pix.UpdatePreview(this);" />
                    </div>
                </label> 
            </div>


            <div class="video-img-back-div">
                <legend style="cursor:pointer;">Click to Upload Video <i class="bi-upload"></i></legend>
                    <label>
                        <div class="img-div video-div" title="Click to upload tutorial Video">
                            <div id="view_sub_topic_video" class="video-container">
                                <video src="" id="videoDisplay" name="sub_video" controls="controls" loop="" class="video-slide"></video>
                                <div id="video-background" class="background-image">
                                    <img src="<?php echo $website_url?>/admin/a/all-images/body-pix/default.png" alt="Default Image">
                                </div>
                            </div>
                            <input name="sub_video" id="video" onchange="showVideo(this)" type="file" style="display:none;">
                        </div>
                    </label> 
                    <script>     
                        var videoDisplay = document.getElementById('videoDisplay');
                        var videoInput = document.getElementById('video');
                        var legendElement = document.querySelector('legend');
                        
                        // Add click event listener to the legend element
                        legendElement.addEventListener('click', function () {
                            videoInput.click();
                        });
                    
                        videoInput.addEventListener('change', function () {
                            showVideo(this);
                        });
                    
                        function showVideo(input) {
                            var videoDisplay = document.getElementById('videoDisplay');
                            var videoBackground = document.getElementById('video-background');
                    
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    videoDisplay.src = e.target.result;
                                    videoBackground.style.display = 'none'; // Hide the default background image
                                    videoDisplay.style.display = 'block'; // Show the video
                                };
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
            </div>

            <div class="title">VIDEO DURATION: <span>*</span> (HH:MM:SS)</div>
            <input id="duration" type="text" class="text_field" placeholder="00:00:00" title="VIDEO DURATION"/>              
            
            <div class="pdf-back-div">
                <div class="title">CLASS MATERIAL (PDF): <span>*</span></div>
                <legend id="pdf_legend" style="cursor:pointer;">Click to Upload PDF <i class="bi-upload"></i></legend>
                <div class="div-in" id="pdf_upload_area">
                    <label>
                        <div id="pdf_display" class="pdf-container background-display">
                            <embed id="pdfFile" src="" type="application/pdf" width="100%" height="350px" style="display: none;">                          
                            <div id="pdf-background" class="background-text" style="cursor:pointer;">
                                <img src="<?php echo $website_url?>/admin/a/all-images/body-pix/default.png" alt="Default Image">
                            </div>
                        </div>
                        <input type="file" id="material" onchange="showPdf(this)" name="pdf_file" accept=".pdf" style="display: none;">
                    </label>
                </div>
                <div id="file-list">
                    <!-- PDF will be displayed here -->
                </div>
            </div>


            <script>
                var pdfDisplay = document.getElementById('pdf_display');
                var pdfInput = document.getElementById('material');
                var fileList = document.getElementById('file-list');
                var legendElement = document.getElementById('pdf_legend');
                var pdfEmbed = document.getElementById('pdfFile');

                function showPdf(input) {
                    if (input.files && input.files[0]) {
                        var file = URL.createObjectURL(input.files[0]);
                        pdfDisplay.classList.add('embed-display');
                        pdfDisplay.classList.remove('background-display');
                        pdfEmbed.style.display = 'block'; // Display the PDF embed
                        pdfEmbed.src = file;
                        pdfDisplay.querySelector('.background-text').style.display = 'none';

                        // Show file size
                        var fileSize = input.files[0].size;
                        var sizeInMB = (fileSize / (1024 * 1024)).toFixed(2); // Convert to MB with two decimal places
                        fileList.innerHTML = 'File size: ' + sizeInMB + ' MB';
                    }
                }   


                // Trigger file input click on the legend click
                legendElement.addEventListener('click', function() {
                    pdfInput.click();
                });

                // Drag and drop functionality
                pdfDisplay.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    pdfDisplay.classList.add('drag-over');
                });

                pdfDisplay.addEventListener('dragleave', function() {
                    pdfDisplay.classList.remove('drag-over');
                });

                pdfDisplay.addEventListener('drop', function(e) {
                    e.preventDefault();
                    pdfDisplay.classList.remove('drag-over');
                    var file = e.dataTransfer.files[0];
                    pdfInput.files = e.dataTransfer.files;
                    showPdf(pdfInput);
                });


            </script>

            <div class="title">SELECT STATUS: <span>*</span></div>
            <select id="updt_status_id" class="text_field select_input" title="SELECT STATUS">
                <option value="" selected="selected"> SELECT STATUS</option>
                <script>_get_select_status('updt_status_id','1,2');</script>
            </select> 

            <div class="alert alert-success" id="progress-alert">
                <span>UPLOADING IN PROGRESS...</span><br>
                    Please DO NOT close this panel as the process takes some time.
                <div class="ajax-progress">0%</div>
            </div> 

            <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_update_tutorial_video('<?php echo $ids?>','<?php echo $other_ids?>','<?php echo $other_ids2?>');"> <i class="bi-check"></i> SUBMIT </button>

        </div>
    </div> 
</div>
<script>_get_fetch_each_video_tutorial('<?php echo $other_ids2?>')</script>
<script>_get_fetch_department_class_subject_form('<?php echo $ids?>','<?php echo $other_ids?>')</script>
<script>_get_fetch_subject_form('<?php echo $other_ids1?>')</script>
<?php } ?>








<?php if ($page=='alert-read'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi-bell"></i> Notification Details</span>
            <div class="close" title="Close" onclick="_alert_close2();">X</div>
        </div>
    </div>

    <div class="container-back-div sb-container">
        <div class="inner-div">
            <div class="alert alert-success">
                <div class="alert-list-div">
                    <div class="alert-list">
                        <div>User ID:</div>
                        <div><span id="read_user_id">xxxx</span></div>
                    </div>
                    <div class="alert-list">
                        <div>Action Performed By:</div>
                        <div><span id="user_name">xxxx</span></div>
                    </div>
                    <div class="alert-list">
                        <div>IP Address Used:</div>
                        <div><span id="ip_address">xxxx</span></div>
                    </div>
                    <div class="alert-list">
                        <div>Computer Used:</div>
                        <div><span id="system_name">xxxx</span></div>
                    </div>
                </div>
            </div>


            <div class="alert alert-success">
                <div class="alert-list-div">
                    <div class="alert-list">
                        <div>Alert ID:</div>
                        <div><span id="alert_id">xxxx</span></div>
                    </div>
                    <div class="alert-list">
                        <div>Date:</div>
                        <div><span id="created_time">xxxx</span></div>
                    </div>
                </div>
            </div>

            <div class="title">Alert Details:</div>
            <div class="alert alert-success" id="alert_detail">xxxx</div>

            <button class="action-btn" onclick="_alert_close2();"> <i class="bi-check"></i> OK </button>
        </div>
    </div> 
</div>
<script>_fetch_read_alert('<?php echo $ids?>');</script>
<?php } ?>




<?php if ($page=='faqs_reg'){ ?>

<div class="overlay-off-div">
    <div class="slide-form-div animated fadeInRight">
        <div class="fly-title-div">
            <div class="in">
                    <span id="panel-title"><i class="bi-plus-square"></i> ADD NEW FAQ</span>               
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>


        <div class="container-back-div sb-container">
            <div class="inner-div">

            <div class="alert">Kindly fill the form below to <span>ADD NEW FAQ</span></div>

            <div class="title">FAQ CATEGORY: <span>*</span></div>
            <select id="cat_id" class="text_field select_field" title="SELECT FAQ's CATEGORY">
                <option value=""> SELECT FAQ CATEGORY</option>
                <script>_get_cat('cat_id');</script>
            </select>

            <div class="title">FAQ QUESTION: <span>*</span></div>
            <input id="faq_question" type="text" class="text_field" placeholder="Type Question Here" title="Question" title="FULL NAME"/>
                        
            <div class="title">FAQ ANSWER: <span>*</span></div>
                <script src="js/TextEditor.js" referrerpolicy="origin"></script>
                <script>tinymce.init({selector:'#faq_answer',  // change this value according to your HTML
                plugins: "link, image, table"
                });</script>
                <textarea style="width:100%;" rows="20" id="faq_answer" title="Type Answer Here" placeholder="Type Answer Here"></textarea>

            <div class="title">SELECT STATUS: <span>*</span></div>
            <select id="reg_status_id" class="text_field select_field" title="SELECT STATUS">
                    <option value="" selected="selected">SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
            </select> 

            <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_or_register_faq('<?php echo $ids?>');"> <i class="bi-check"></i> SUBMIT </button>
               
            </div>
        </div> 
    </div>
</div>
<?php } ?>



<!-- <?php //if ($page=='blog_form'){ ?>
    <div class="slide-form-div animated fadeInRight">
        <div class="fly-title-div">
            <div class="in">
                    <span id="panel-title"><i class="bi-pencil-square"></i> ADD NEW BLOG</span>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="container-back-div sb-container">
            <div class="inner-div">
                <div class="alert">Kindly fill the form below to add new Blog</div>

                <div class="title">BLOG CATEGORY: <span>*</span></div>
                <select id="blog_cat_id" class="text_field selectinput"  title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT BLOG CATEGORY</option>
                  
                </select> 

                <div class="title">BLOG TITLE: <span>*</span></div>
                <input  id="blog_title" type="text" class="text_field" placeholder="BLOG TITLE" title="TOURISM ATTRACTION TITLE" />
                
                <div class="title">CLICK TO UPLOAD BLOG PICTURE: <span>*</span></div>
                <div class="image-back-div">
                    <label>
                        <div class="pix-div" title="CLICK TO UPLOAD BLOG PICTURE">
                            <img id="blog-pix" src="<?php// echo $website_url?>/admin/a/all-images/body-pix/default.png" alt="Blog Picture"/>
                            <input type="file" id="blog_pix" style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG,.webp,.WEBP,.SVG,.svg,.AVIF,.avif,.BMP,.bmp" onchange="blog_pix.UpdatePreview(this);" />
                        </div>
                    </label> 
                </div>

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field selectinput"  title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                </select> 
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_and_update_tourism_products_NoCat('<?php echo $page?>','<?php echo $ids?>');"> <i class="bi-check"></i>  <?php if($ids==''){?> SUBMIT  <?php }else{?>  UPDATE <?php }?> </button>
            </div>
        </div> 
    </div>
<?php// } ?>


<?php //if ($page=='update_blog_form'){ ?>
    <div class="slide-form-div animated fadeInRight">
        <div class="fly-title-div">
            <div class="in">
                    <span id="panel-title"><i class="bi-pencil-square"></i> UPDATE BLOG</span>
                <div class="close" title="Close" onclick="_alert_close();">X</div>
            </div>
        </div>

        <div class="container-back-div sb-container">
            <div class="inner-div">
                <div class="alert">Kindly fill the form below to upadte Blog</div>

                <div class="title">BLOG CATEGORY: <span>*</span></div>
                <select id="blog_cat_id" class="text_field selectinput"  title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT BLOG CATEGORY</option>
                </select> 

                <div class="title">BLOG TITLE: <span>*</span></div>
                <input  id="blog_title" type="text" class="text_field" placeholder="BLOG TITLE" title="TOURISM ATTRACTION TITLE" />
                
                <div class="title">CLICK TO UPLOAD BLOG PICTURE: <span>*</span></div>
                <div class="image-back-div">
                    <label>
                        <div class="pix-div" title="CLICK TO UPLOAD BLOG PICTURE">
                            <img id="blog-pix" src="<?php// echo $website_url?>/admin/a/all-images/body-pix/default.png" alt="Blog Picture"/>
                            <input type="file" id="blog_pix" style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG,.webp,.WEBP,.SVG,.svg,.AVIF,.avif,.BMP,.bmp" onchange="blog_pix.UpdatePreview(this);" />
                        </div>
                    </label> 
                </div>

                <div class="title">SELECT STATUS: <span>*</span></div>
                <select id="reg_status_id" class="text_field selectinput"  title="SELECT STATUS">
                    <option value="" selected="selected"> SELECT STATUS</option>
                    <script>_get_select_status('reg_status_id','1,2');</script>
                </select> 
                <button class="action-btn" type="button" title="SUBMIT" id="submit_btn" onclick="_add_and_update_tourism_products_NoCat('<?php echo $page?>','<?php echo $ids?>');"> <i class="bi-check"></i>  <?php if($ids==''){?> SUBMIT  <?php }else{?>  UPDATE <?php }?> </button>
            </div>
        </div> 
    </div>
<?php //} ?>




<?php //if ($page=='blog_seo_page_details'){?>
    
    <div class="page-creation-panel">
        <div class="title-div">
            <div class="div-in"><i class="bi-newspaper"></i> <span id="page_title_info"></span>  DETAILS <button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button></div>
        </div>
        
        <div class="blog-div page-side-div">
            <div class="img-div" id="page_details_pix"><img src="<?php //echo $website_url?>/admin/a/all-images/body-pix/blog1.jpg" alt="Tourism Products"></div>
            <div class="text-div">
                <h2 id="page_details_title">7 Excellent Tips To Pass Waec In One Sitting</h2>
                <div class="text-in">
                    <div class="text">UPDATED ON: <span id="page_details_date">24 Feb 2024</span> </div>
                    <div class="text"><span id="views_count">0</span> VIEWS</div>
                </div>
                <br>
            </div>
        </div>


        <div class="page-content-div">

            <div class="menu-div">
                <li class="active-li" id="page_content" onclick="_get_page_content('blog_page_content_details','page_content')">PAGE CONTENT </li>
                <li id="page_pictures" onclick="_get_page_content('blog_page_pix','page_pictures')" class="">UPLOAD PICTURES</li>
            </div>
           
            <div class="page-form-back-div sb-container" >
                <div id="get_details">

                    <div class="page-form-div" >
                        <div class="page-title">SEO CONTENT</div>
                        <div class="form-div">
                            <div class="form-input-div">
                                <div class="title"> BLOG CATEGORY: <span>*</span></div>
                                <select id="cat_id" class="text_field selectinput" title="SELECT BLOG CATEGORY">
                                    <option value=""> SELECT BLOG CATEGORY</option>
                                    <script>_get_cat('cat_id');</script>
                                </select>
                                
                                <div class="title">BLOG TITLE <span><em>(Not more than 60 words)</em></span></div>
                                <input id="blog_title" type="text" maxlength="60" class="text_field" placeholder="BLOG TITLE" title="BLOG TITLE">

                                <div class="title">BLOG SUMMARY <span><em>(Not more than 167 words)</em></span></div>
                                <textarea id="blog_summary" class="text_field" maxlength="167" placeholder="BLOG SUMMARY" title="BLOG SUMMARY"></textarea>

                                <div class="title">TOURISM ATTRACTION URL <span>*</span></div>
                                  <input id="blog_url" type="text" class="text_field" placeholder="e.g blog-url" title="BLOG URL">
                            
                                <div class="title">SEO KEYWORDS <span>*</span></div>
                                <textarea id="seo_keywords" class="text_field" placeholder="SEO Keywords" title="SEO KEYWORDS"></textarea>
                        
                            </div>

                            <label>
                                <div class="pix-div" id="seo_pix"><img id="tourism_products_pics" src="<?php// echo $website_url?>/admin/a/all-images/body-pix/blog1.jpg" alt="Tourism Picture"  /></div>
                                <input type="file" id="view_seo_pix" style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG,.webp,.WEBP" onchange="publish_pix.UpdatePreview(this);"/>
                            </label>        
                    
                        </div>
                    </div>
            
                    <div class="page-form-div">
                        <div class="page-title">FULL PAGE CONTENT</div>
                        <div class="form-div">
                            <script src="js/TextEditor.js" referrerpolicy="origin"></script>
                            <script>
                                tinymce.init({selector:'#blog_detail', 
                                plugins: "link, image, table"});
                            </script>
                            <textarea style="width: 100%;" rows="25" id="blog_detail" title="TYPE FULL PAGE CONTENT HERE" placeholder="TYPE FULL PAGE CONTENT HERE"></textarea>
                        </div>
                        <button class="btn" id="submit_btn" onclick="_update_tourism_products_seo_page_content('<?php //echo $page?>','<?php //echo $ids?>');"><i class="bi-save-fill"></i> SAVE</button><br clear="all"><br clear="all">
                    </div>
                </div>

            </div>
        
        </div>
    </div
<?php //}?>  -->



<?php// if ($page=='blog_page_content_details'){?>
    <!-- <div //id="get_details">
        <div class="page-form-div" >
            <div class="page-title">SEO CONTENT</div>
            <div class="form-div">
                <div class="form-input-div">
                    <div class="title"> BLOG CATEGORY: <span>*</span></div>
                    <select id="cat_id" class="text_field selectinput" title="SELECT BLOG CATEGORY">
                        <option value=""> SELECT BLOG CATEGORY</option>
                        <script>_get_cat('cat_id');</script>
                    </select>
                    
                    <div class="title">BLOG TITLE <span><em>(Not more than 60 words)</em></span></div>
                    <input id="blog_title" type="text" maxlength="60" class="text_field" placeholder="BLOG TITLE" title="BLOG TITLE">

                    <div class="title">BLOG SUMMARY <span><em>(Not more than 167 words)</em></span></div>
                    <textarea id="blog_summary" class="text_field" maxlength="167" placeholder="BLOG SUMMARY" title="BLOG SUMMARY"></textarea>

                    <div class="title">TOURISM ATTRACTION URL <span>*</span></div>
                        <input id="blog_url" type="text" class="text_field" placeholder="e.g blog-url" title="BLOG URL">
                
                    <div class="title">SEO KEYWORDS <span>*</span></div>
                    <textarea id="seo_keywords" class="text_field" placeholder="SEO Keywords" title="SEO KEYWORDS"></textarea>
            
                </div>

                <label>
                    <div class="pix-div" id="seo_pix"><img id="tourism_products_pics" src="<?php// echo $website_url?>/admin/a/all-images/body-pix/blog1.jpg" alt="Tourism Picture"  /></div>
                    <input type="file" id="view_seo_pix" style="display:none" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG,.webp,.WEBP" onchange="publish_pix.UpdatePreview(this);"/>
                </label>        
        
            </div>


            <div class="page-form-div">
                <div class="page-title">FULL PAGE CONTENT</div>
                <div class="form-div">
                <textarea style="width: 100%;" rows="25" id="tourism_products_detail" title="TYPE FULL PAGE CONTENT HERE" placeholder="TYPE FULL PAGE CONTENT HERE"></textarea>
                    <script src="js/TextEditor.js" referrerpolicy="origin"></script>
                    <script>
                        tinymce.init({selector:'#tourism_products_detail', 
                        plugins: "link, image, table"});
                    </script>
                </div>
                <button class="btn" id="submit_btn" onclick="_update_tourism_products_seo_page_content('<?php// echo $page?>','<?php echo $ids?>');"><i class="bi-save-fill"></i> SAVE</button><br clear="all"><br clear="all">
            </div>
        </div>
    </div>
<?php //}?> -->


<!-- <?php //if ($page=='blog_page_pix'){ ?>
    <div id="get_details">
        <div class="page-form-div">
            <div class="page-title">UPLOAD MORE PICTURES</div>
                <div class="form-div">
                    <div id="pix-preview-div"></div>
                    <label>
                        <div class="picture-div">
                            <div class="more-pix-div"><img src="<?php //echo $website_url?>/admin/a/all-images/body-pix/default1.png"></div>
                            <input type="file" id="more_page_pix" name="more_page_pix[]" accept=".jpg,.png,.jpeg,.PNG,.JPG,.JPEG,.webp,.WEBP,.SVG,.svg,.AVIF,.avif,.BMP,.bmp" multiple  onchange="_preview_more_page_pix('<?php echo $page?>','tourism_attraction_other_pix_api','<?php echo $ids?>');" style="display:none;"/>
                        </div>
                    </label>
                </div>
        </div>
    </div>
<?php //}?>  -->




<?php if ($page=='user_details'){ ?>
<div class="overlay-off-div">
    <div class="user-profile-div user animated fadeInUp">
        <div class="top-panel-div">
            <i class="bi-person"></i> USER DETAILS</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>

        <div class="profile-content-div sb-container">

            <div class="bg-img">
                <div class="mini-profile">
                    <label>
                        <div class="img-div" id="current_user_pass">
                        <img src="<?php echo $website_url?>/admin/a/all-images/images/avatar.jpg" alt="Profile Picture">                                
                        </div> 
                    </label>

                    <div class="text-div">
                        <div class="name" id="user_login_fullname"></div>
                        <div class="text">
                            STATUS: <strong id="user_status_name"> </strong> | LAST LOGIN DATE: <strong id="user_last_login"> </strong>
                        </div>               
                    </div>
                </div>
            </div>

            <div class="button-div">
                <button class="btn-history active-btn" id="next-all" onclick="_get_detail('user_profile_details','<?php echo $ids?>','<?php echo $ids?>', 'all')"><i class="bi-person"></i> PROFILE</button>
                <button class="btn-history" id="next-trans" onclick="_get_detail('transaction_history_detail','<?php echo $ids?>', 'trans')"><i class="bi-credit-card"></i> TRANSACTION HISTORY</button>
                <button class="btn-history" id="next-wallet" onclick="_get_detail('wallet_history_details','<?php echo $ids?>', 'wallet')"><i class="bi-credit-card"></i> WALLET HISTORY</button>
            </div>

            <br clear="all"/>
            <br clear="all"/>
            <div class="details-div">
                <h4>TOTAL WALLET BALANCE</h4>
                <div class="wallet-details-div">
                    <div class="inner-div">
                        <div class="amount">₦ <span id="amount_received">0.00</span> 
                            <p>TOTAL AMOUNT RECIEVED</p>
                        </div>
                    </div>

                    <div class="inner-div">
                        <div class="amount">₦ <span id="amount_withdraw">0.00</span> 
                            <p>TOTAL AMOUNT SPENT</p>
                        </div>
                    </div>
                    
                    <div class="inner-div no-border">
                        <div class="amount">₦ <span id="wallet_balance">0.00</span> 
                            <p>AVAILABLE BALANCE</p>
                        </div>
                    </div>
                </div>
                <br clear="all" /> 

                     
                <div class="search-details" id="get_detail"> 
              
                        <div class="title" style="text-align:left; padding-left:20px;font-size:12px;"><i class="bi-person"></i> USER PROFILE  </div>
                                      
                        <div class="user-in">
                            <div class="title">BASIC INFORMATION</div>
                    
                            <div class="profile-segment-div col-3">
                                <div class="segment-title">FULLNAME:</div>
                                <div class="text-field-div no-border">
                                    <input id="updt_fullname" type="text" class="text_field text_field2" placeholder="FULLNAME" title="FULLNAME"/>
                                </div>
                            </div>


                            <div class="profile-segment-div col-8">
                                <div class="segment-title">EMAIL:</div>
                                <div class="text-field-div no-border">
                                    <input id="updt_email" type="text" class="text_field text_field2" placeholder="EMAIL" title="EMAIL"/>
                                </div>
                            </div>

                            <div class="profile-segment-div col-3"><div id="mobile_info" style="float:right;font-size:12px;display:none;color:#f00"><span>Mobile not accepted!</span></div>
                                <div class="segment-title">PHONE NUMBER:</div>
                                <div class="text-field-div no-border">
                                    <input id="updt_mobile" type="text" class="text_field text_field2" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                                </div>
                            </div>


                            <div class="profile-segment-div col-7">
                                <div class="segment-title">STAFF STATUS:</div>
                                <div class="text-field-div no-border">
                                    <select class="text_field text_field2" readonly="readonly" id="updt_status_id" style="background:#fff;" >                       
                                        <option value="" >SELECT STATUS </option>
                                        <script> _get_select_status('updt_status_id','1,2');</script>
                                    </select>
                                </div>
                            </div>
                            <br clear="all" /> 
                            <br clear="all" /> 
                            <button class="upt-btn" type="button" id="update_btn" onclick="_update_user_profile('<?php echo $ids?>');"> UPDATE PROFILE <i class="bi-check"></i></button>
                        </div>         
                </div>
            </div>
        </div>  
        
    </div> 
</div>
<?php } ?>


<?php if($page=='user_profile_details'){?>

    <div class="search-details" id="get_detail"> 
              
              <div class="title" style="text-align:left; padding-left:20px;font-size:12px;"><i class="bi-person"></i> USER PROFILE  </div>
                            
              <div class="user-in">
                  <div class="title">BASIC INFORMATION</div>
          
                  <div class="profile-segment-div col-3">
                      <div class="segment-title">FULLNAME:</div>
                      <div class="text-field-div no-border">
                          <input id="updt_fullname" type="text" class="text_field text_field2" placeholder="FULLNAME" title="FULLNAME"/>
                      </div>
                  </div>


                  <div class="profile-segment-div col-8">
                      <div class="segment-title">EMAIL:</div>
                      <div class="text-field-div no-border">
                          <input id="updt_email" type="text" class="text_field text_field2" placeholder="EMAIL" title="EMAIL"/>
                      </div>
                  </div>

                  <div class="profile-segment-div col-3"><div id="mobile_info" style="float:right;font-size:12px;display:none;color:#f00"><span>Mobile not accepted!</span></div>
                      <div class="segment-title">PHONE NUMBER:</div>
                      <div class="text-field-div no-border">
                          <input id="updt_mobile" type="text" class="text_field text_field2" onkeypress="isNumber_Check()" placeholder="PHONE NUMBER" title="PHONE NUMBER"/>
                      </div>
                  </div>


                  <div class="profile-segment-div col-7">
                      <div class="segment-title">STAFF STATUS:</div>
                      <div class="text-field-div no-border">
                          <select class="text_field text_field2" readonly="readonly" id="updt_status_id" style="background:#fff;" >                       
                              <option value="" >SELECT STATUS </option>
                              <script> _get_select_status('updt_status_id','1,2');</script>
                          </select>
                      </div>
                  </div>
                  <br clear="all" /> 
                  <br clear="all" /> 
                  <button class="upt-btn" type="button" id="update_btn" onclick="_update_user_profile('<?php echo $ids?>');"> UPDATE PROFILE <i class="fa fa-check"></i></button>

              </div>   
   
      </div>
<?php }?>



<?php if($page=='transaction_history_detail'){?>
    <div class="search-details" id="get_detail">
        <div class="title" style="text-align:left; padding-left:20px;font-size:12px;"><i class="bi-person"></i> USER TRANSACTION HISTORY  </div>  
            <div class="fetch-div" id="view">
                <div class="table-div animated fadeIn" id="search-content">
                    <div class="div-in">
                        <div class="container-title title2"><i class="bi bi-credit-card"></i>  TRANSACTIONS </div>
                        <div class="input-search-div">
                            <div class="custom_search">Custom Search: <span>*</span></div>
                            <input id="datepicker-from" type="date" class="text_field srchtxt" placeholder="Select Date From" title="Select Date From" />
                            <input id="datepicker-to" type="date" class="text_field srchtxt" placeholder="Select Date To" title="Select Date To"/>
                            <button type="button" class="btn" onclick=" _fetch_custom_report('<?php echo $page?>','<?php echo $ids?>','custom_search','')"><i class="bi-check"></i>Apply</button>
                        </div>

                        <table class="table" cellspacing="0" style="width:100%" id="fetch_all_transaction_history">
                            <script>_get_user_transaction('<?php echo $page?>','<?php echo $ids?>','','','','');</script> 
                            <tr class="tb-col">
                                <td>SN</td>
                                <td>DATE</td>
                                <td>TRANSACTION ID</td>
                                <td>TRANSACTION TYPE</td>
                                <td>TRANSACTION METHOD</td>
                                <td>AMOUNT</td>
                                <td>STATUS</td>
                                <td>ACTION</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2023-08-03 12:25:27</td>
                                <td>TRANS00012384883</td>
                                <td>CREDIT</td>
                                <td>CREDIT/DEBIT CARD</td>
                                <td><span>₦</span> 2,000.00</td>
                                <td><div class="status-div SUCCESS">SUCCESS</div></td>
                                <td><button class="btn"><i class="bi bi-eye"></i> DETAILS</button></td>
                            </tr> 

                        </table>
                        <div class="bottom-count-div">
                            <div class="text">
                                <span id="trans_count">0</span> of <span id="trans_total_count">0</span>
                            </div>
                            <button class="top-btn bottom-btn" type="button" ><i class="bi bi-eye"></i> View More</button>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
<?php }?>




<?php if ($page=='transaction_details'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
            <span id="panel-title"><i class="bi bi-credit-card"></i> TRANSACTIONS</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">

            <div id="View_transaction_details"> 
                <div class="alert alert-success">
                    <span>TRANSACTION DETAILS</span>
                    <div class="trans-statistics">Transaction ID: <div class="value" id="transaction_id">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Transaction Type: <div class="value" id="transaction_type">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Transaction Method: <div class="value" id="transaction_method">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Amount: <div class="value" id="amount"> Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Date: <div class="value" id="date">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Status: <div class="value" id="status">Xxxx</div><br clear="all" /></div>
                </div>

                <div class="alert alert-success">
                    <span>EXAM SUBSCRIPTION DETAILS</span>
                    <div class="trans-statistics">Exam Name: <div class="value" id="view_abbreviation">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Subject Name: <div class="value" id="view_subject_name">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Topic Name: <div class="value" id="view_topic_name">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Sub-Topic Name: <div class="value" id="view_sub_topic_name">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Start Date: <div class="value" id="view_start_date"> Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Due Date: <div class="value" id="view_due_date">Xxxx</div><br clear="all" /></div>
                    <div class="trans-statistics">Status: <div class="value" id="view_subcription_status_name">Xxxx</div><br clear="all" /></div>
                </div> 
                       
            </div>
        </div>
    </div> 
</div>
<?php } ?>


<?php if($page=='wallet_history_details'){?>
    <div class="search-details" id="get_detail">
    <div class="title" style="text-align:left; padding-left:20px;font-size:12px;"><i class="bi-person"></i> USER WALLET HISTORY  </div>  
        <div class="fetch-div" id="view">
            <div class="table-div animated fadeIn" id="search-content">
                <div class="div-in">
                    <div class="container-title title2"><i class="bi bi-credit-card"></i>  WALLET HISTORY </div>
                    <div class="input-search-div">
                        <div class="custom_search">Custom Search: <span>*</span></div>
                        <input id="datepicker-from" type="date" class="text_field srchtxt" placeholder="Select Date From" title="Select Date From" />
                        <input id="datepicker-to" type="date" class="text_field srchtxt" placeholder="Select Date To" title="Select Date To"/>
                        <button type="button" class="btn" onclick=" _fetch_custom_report('<?php echo $page?>','<?php echo $ids?>','custom_search','')"><i class="bi-check"></i>Apply</button>
                    </div>
                    <table class="table" cellspacing="0" style="width:100%" id="fetch_all_wallet_history">
                     <script>_get_user_wallet_history_details('<?php echo $page?>','<?php echo $ids?>','','','','');</script>
                            <tr class="tb-col">
                                <td>SN</td>
                                <td>DATE</td>
                                <td>TRANSACTION ID</td>
                                <td>BALANCE BEFORE</td>
                                <td>AMOUNT LOADED</td>
                                <td>BALANCE AFTER</td>
                                <td>TRANSACTION TYPE</td>
                                <td>STATUS</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2023-08-03 12:25:27</td>
                                <td>TRANS00012384883</td>
                                <td><span>₦</span> 1,000.00</td>
                                <td><span>₦</span> 3,000.00</td>
                                <td><span>₦</span> 4,000.00</td>
                                <td>CREDIT</td>
                                <td><div class="status-div SUCCESS">SUCCESS</div></td>
                            </tr>

                     </table>
                    <div class="bottom-count-div">
                        <div class="text">
                            <span id="current_count">0</span> of <span id="total_count">0</span>
                        </div>
                        <button class="top-btn bottom-btn"  type="button" ><i class="bi bi-eye"></i> View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<?php }?>













<?php if ($page=='cbt_page_details'){?>
    <div class="cbt-creation-panel">
        <div class="side-bar">
            <div class="div-in">
                <div class="details-back-div">
                    <div class="video-div">      
                        <div id="view_sub_topic_video" class="video-container">
                            <video src="<?php echo $website_url?>/admin/a/all-images/body-pix/video-slide.mp4" id="videoDisplay" name="sub_video" controls="controls" loop="" class="video-slide"></video>
                        </div>
                        <input name="sub_video" id="video" onchange="showVideo(this)" type="file" style="display:none;">


                        <script>     
                            var videoDisplay = document.getElementById('videoDisplay');
                            var videoInput = document.getElementById('video');
                            var legendElement = document.querySelector('legend');
                            
                            // Add click event listener to the legend element
                            legendElement.addEventListener('click', function () {
                                videoInput.click();
                            });
                        
                            videoInput.addEventListener('change', function () {
                                showVideo(this);
                            });
                        
                            function showVideo(input) {
                                var videoDisplay = document.getElementById('videoDisplay');
                                var videoBackground = document.getElementById('video-background');
                        
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        videoDisplay.src = e.target.result;
                                        videoBackground.style.display = 'none'; // Hide the default background image
                                        videoDisplay.style.display = 'block'; // Show the video
                                    };
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                    </div>

                    <div class="text-div">
                        <div class="list-back-div">
                            <div class="list-div">
                                <div><i class="bi-buildings"></i> Department:</div>
                                <div><span>Junior</span></div>
                            </div>

                            <div class="list-div">
                                <div><i class="bi-book"></i> Class:</div>
                                <div><span>Jss 1</span></div>
                            </div>

                            <div class="list-div">
                                <div><i class="bi-book"></i> Subject:</div>
                                <div><span>Mathematics</span></div>
                            </div>

                            <div class="list-div">
                                <div><i class="bi-book"></i> Week:</div>
                                <div><span>Week 1</span></div>
                            </div>

                            <div class="list-div">
                                <div><i class="bi-book"></i> Topic:</div>
                                <div><span>HCM</span></div>
                            </div>

                            <div class="list-div no-border">
                                <div><i class="bi-clock"></i> Class Duration:</div>
                                <div><span>00:01:04</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="title-div">
            <div class="div-in">
                <div class="left-div">
                    <ul>
                        <li class="active-li" id="main_page_contents" onclick="_get_page_contents('question_bank_details','main_page_contents','')">Question Bank </li>
                        <li id="quiz_question_page" onclick="_get_page_contents('quiz_question','quiz_question_page','')">Quiz Question</li>
                        <li id="" onclick="_get_page_contents()">Load Question Manually</li>
                        <li id="" onclick="_get_page_contents()">Load Question Automatically</li>
                    </ul>
                </div>

                <div class="btn-div">
                    <button class="close-btn" onclick="_alert_close()"><i class="bi-x-lg"></i></button>
                </div>             
            </div>
        </div>

        <div class="main-page-content sb-container">
            <div class="div-in">
                <div id="get_page_details">

                    <div class="page-back-div">
                        <div class="top-div">
                            <div class="check-div">
                                <label for="">
                                    <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                    <span>All Questions</span>
                                </label>      
                            </div>

                            <div class="btn-div">
                                <button class="activate-btn"><i class="bi-check2-circle"></i> Activate</button>
                                <button class="activate-btn delete-btn"><i class="bi-trash"></i> Delete</button>
                            </div> 
                        </div>
                        
                        <div class="main-pg-div">
                            <div class="question-div">
                                <div class="top-div">
                                    <div class="check-div">
                                        <label for="">
                                            <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                            <span>Question 1</span>
                                        </label>      
                                    </div>

                                    <div class="btn-div">
                                        <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                                    </div> 
                                </div>

                                <div class="question-list-back-div">
                                    <div class="question-list">
                                        <p>_______ is an electronics Computer</p>  
                                    </div>

                                    <div class="question-list">
                                        <p><span>A</span> Computer</p>  
                                    </div>
                                    <div class="question-list">
                                        <p><span>B</span> Computer</p>  
                                    </div>
                                    <div class="question-list answer">
                                        <p><span>C</span> Computer</p>  
                                    </div>
                                        
                                    <div class="question-list">
                                        <p><span>D</span> Chair</p>  
                                    </div>                
                                </div>
                            </div>

                            <div class="question-div">
                                <div class="top-div">
                                    <div class="check-div">
                                        <label for="">
                                            <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                            <span>Question 2</span>
                                        </label>      
                                    </div>

                                    <div class="btn-div">
                                        <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                                    </div> 
                                </div>

                                <div class="question-list-back-div">
                                    <div class="question-list">
                                        <p>What is the name of anything?</p>  
                                    </div>

                                    <div class="question-list answer">
                                        <p><span>A</span> Noun</p>  
                                    </div>
                                    <div class="question-list">
                                        <p><span>B</span> Pronoun</p>  
                                    </div>
                                    <div class="question-list">
                                        <p><span>C</span> Verb</p>  
                                    </div>
                                        
                                    <div class="question-list">
                                        <p><span>D</span> Adverb</p>  
                                    </div>                
                                </div>
                            </div>

                            <div class="question-div">
                                <div class="top-div">
                                    <div class="check-div">
                                        <label for="">
                                            <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                            <span>Question 3</span>
                                        </label>      
                                    </div>

                                    <div class="btn-div">
                                        <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                                    </div> 
                                </div>

                                <div class="question-list-back-div">
                                    <div class="question-list">
                                        <p>______ is an action words?</p>  
                                    </div>

                                    <div class="question-list">
                                        <p><span>A</span> Noun</p>  
                                    </div>
                                    <div class="question-list">
                                        <p><span>B</span> Pronoun</p>  
                                    </div>
                                    <div class="question-list answer">
                                        <p><span>C</span> Verb</p>  
                                    </div>
                                        
                                    <div class="question-list">
                                        <p><span>D</span> Adverb</p>  
                                    </div>                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div
<?php }?>

<?php if ($page=='question_bank_details'){ ?>
    <div id="get_page_details">
        <div class="page-back-div">
            <div class="top-div">
                <div class="check-div">
                    <label for="">
                        <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                        <span>All Questions</span>
                    </label>      
                </div>

                <div class="btn-div">
                    <button class="activate-btn"><i class="bi-check2-circle"></i> Activate</button>
                    <button class="activate-btn delete-btn"><i class="bi-trash"></i> Delete</button>
                </div> 
            </div>
            
            <div class="main-pg-div">
                <div class="question-div">
                    <div class="top-div">
                        <div class="check-div">
                            <label for="">
                                <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                <span>Question 1</span>
                            </label>      
                        </div>

                        <div class="btn-div">
                            <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                        </div> 
                    </div>

                    <div class="question-list-back-div">
                        <div class="question-list">
                            <p>_______ is an electronics Computer</p>  
                        </div>

                        <div class="question-list">
                            <p><span>A</span> Computer</p>  
                        </div>
                        <div class="question-list">
                            <p><span>B</span> Computer</p>  
                        </div>
                        <div class="question-list answer">
                            <p><span>C</span> Computer</p>  
                        </div>
                            
                        <div class="question-list">
                            <p><span>D</span> Chair</p>  
                        </div>                
                    </div>
                </div>

                <div class="question-div">
                    <div class="top-div">
                        <div class="check-div">
                            <label for="">
                                <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                <span>Question 2</span>
                            </label>      
                        </div>

                        <div class="btn-div">
                            <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                        </div> 
                    </div>

                    <div class="question-list-back-div">
                        <div class="question-list">
                            <p>What is the name of anything?</p>  
                        </div>

                        <div class="question-list answer">
                            <p><span>A</span> Noun</p>  
                        </div>
                        <div class="question-list">
                            <p><span>B</span> Pronoun</p>  
                        </div>
                        <div class="question-list">
                            <p><span>C</span> Verb</p>  
                        </div>
                            
                        <div class="question-list">
                            <p><span>D</span> Adverb</p>  
                        </div>                
                    </div>
                </div>

                <div class="question-div">
                    <div class="top-div">
                        <div class="check-div">
                            <label for="">
                                <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                <span>Question 3</span>
                            </label>      
                        </div>

                        <div class="btn-div">
                            <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                        </div> 
                    </div>

                    <div class="question-list-back-div">
                        <div class="question-list">
                            <p>______ is an action words?</p>  
                        </div>

                        <div class="question-list">
                            <p><span>A</span> Noun</p>  
                        </div>
                        <div class="question-list">
                            <p><span>B</span> Pronoun</p>  
                        </div>
                        <div class="question-list answer">
                            <p><span>C</span> Verb</p>  
                        </div>
                            
                        <div class="question-list">
                            <p><span>D</span> Adverb</p>  
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($page=='quiz_question'){ ?>
    <div id="get_page_details">
        <div class="page-back-div">       
            <div class="main-pg-div">
                <div class="question-div">
                    <div class="top-div">
                        <div class="check-div">
                            <label for="">
                                <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                <span>Question 1</span>
                            </label>      
                        </div>

                        <div class="btn-div">
                            <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                        </div> 
                    </div>

                    <div class="question-list-back-div">
                        <div class="question-list">
                            <p>_______ is an electronics Computer</p>  
                        </div>

                        <div class="question-list">
                            <p><span>A</span> Computer</p>  
                        </div>
                        <div class="question-list">
                            <p><span>B</span> Computer</p>  
                        </div>
                        <div class="question-list answer">
                            <p><span>C</span> Computer</p>  
                        </div>
                            
                        <div class="question-list">
                            <p><span>D</span> Chair</p>  
                        </div>                
                    </div>
                </div>

                <div class="question-div">
                    <div class="top-div">
                        <div class="check-div">
                            <label for="">
                                <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                <span>Question 2</span>
                            </label>      
                        </div>

                        <div class="btn-div">
                            <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                        </div> 
                    </div>

                    <div class="question-list-back-div">
                        <div class="question-list">
                            <p>What is the name of anything?</p>  
                        </div>

                        <div class="question-list answer">
                            <p><span>A</span> Noun</p>  
                        </div>
                        <div class="question-list">
                            <p><span>B</span> Pronoun</p>  
                        </div>
                        <div class="question-list">
                            <p><span>C</span> Verb</p>  
                        </div>
                            
                        <div class="question-list">
                            <p><span>D</span> Adverb</p>  
                        </div>                
                    </div>
                </div>

                <div class="question-div">
                    <div class="top-div">
                        <div class="check-div">
                            <label for="">
                                <input type="checkbox" class="child" name="class_id[]" data-value="GEOGRAPHY">
                                <span>Question 3</span>
                            </label>      
                        </div>

                        <div class="btn-div">
                            <button class="btn"><i class="bi-pencil-square"></i> Edit</button>
                        </div> 
                    </div>

                    <div class="question-list-back-div">
                        <div class="question-list">
                            <p>______ is an action words?</p>  
                        </div>

                        <div class="question-list">
                            <p><span>A</span> Noun</p>  
                        </div>
                        <div class="question-list">
                            <p><span>B</span> Pronoun</p>  
                        </div>
                        <div class="question-list answer">
                            <p><span>C</span> Verb</p>  
                        </div>
                            
                        <div class="question-list">
                            <p><span>D</span> Adverb</p>  
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div>     
<?php }?>





















































































<?php if ($page=='app_settings'){ ?>
<div class="slide-form-div animated fadeInRight">
    <div class="fly-title-div">
        <div class="in">
        <span id="back_icon" style="display:none; cursor:pointer;" ><i class="bi-arrow-left" style="cursor:pointer;" onclick="_prev_page('account_settings_id');" ></i> &nbsp;&nbsp;</span>
        <span id="panel-title"><span id="header_icon"> <i class="bi-gear"></i> </span id="app_text"> APP SETTINGS</span>
            <div class="close" title="Close" onclick="_alert_close();">X</div>
        </div>
     </div>

    <div class="container-back-div sb-container" >
         <div class="inner-div">
            <div class="setting_detail" id="account_settings_id">   

                <div class="settings-div"  onclick="_next_page('account_detail','back_icon','account');">
                    <div class="div-in">
                        <div class="icon-div">
                           <i class="bi-bank" ></i> 
                        </div>
                        <div class="text-div">
                            <h4 id="account">ACCOUNT DETAILS</h4>
                            <span>Manage your account information</span>
                            <i class="bi-chevron-right"></i>
                        </div>
                    </div>
                </div>

                <div class="settings-div" onclick="_next_page('channge_password','back_icon','password');">
                    <div class="div-in">
                        <div class="icon-div">
                       <i class="bi-lock"></i>
                        </div>
                        <div class="text-div">
                            <h4 id="password">CHANGE PASSWORD</h4>
                            <span>Manage and change password</span>
                            <i class="bi-chevron-right"></i>
                        </div>
                    </div>
                </div>

            </div>


            <div class="setting_detail" id="account_detail">     
                <div class="alert alert-success"><span>SMTP DETAILS</span>
                    <div class="title"> SENDER NAME:</div>
                    <input id="sender_name" type="text" class="text_field" placeholder="SENDER NAME" title="SENDER NAME"/>
                    <div class="title"> SMTP HOST:</div>
                    <input id="smtp_host" type="text" class="text_field" placeholder="SMTP HOST" title="SMTP HOST"/>
                    <div class="title"> SMTP USERNAME:</div>
                    <input id="smtp_username" type="text" class="text_field" placeholder="SMTP USERNAME" title="SMTP USERNAME"/>
                    <div class="title"> SMTP PASSWORD:</div>
                    <input id="smtp_password" type="text" class="text_field" placeholder=" SMTP PASSWORD" title=" SMTP PASSWORD"/>
                    <div class="title"> SMTP PORT:</div>
                    <input id="smtp_port" type="text" class="text_field" placeholder="SMTP PORT" title="SMTP PORT"/>
                    <div class="title"> SUPPORT EMAIL:</div>
                    <input id="support_email" type="text" class="text_field" placeholder="SUPPORT EMAIL" title="SUPPORT EMAIL"/>
                    <div class="title"> SUBSCRIPTION AMOUNT:</div>
                    <input id="subcription_amount" type="text" class="text_field" placeholder="SUBSCRIPTION AMOUNT" title="SUBSCRIPTION AMOUNT"/>
                    <div class="title">PAYSTACK PAYMENT KEY:</div>
                    <input id="paystack_payment_key" type="text" class="text_field" placeholder="PAYSTACK PAYMENT KEY" title="PAYSTACK PAYMENT KEY"/>
                </div>
                <button class="action-btn" type="button" title="SUBMIT" id="update_btn" onclick="_update_backend_settings();"> <i class="bi-check"></i> UPDATE ACCOUNT </button>
            </div>

            <div class="setting_detail" id="channge_password">   
                <div class="alert">Fill all fields to change your <span>PASSWORD</span>  </div>
                <div class="title">OLD PASSWORD: <span>*</span></div>
                <input type="password" id="old_password" class="text_field" placeholder="ENTER OLD PASSWORD" title="ENTER YOUR OLD PASSWORD">

                <div class="title">CREATE NEW PASSWORD: <span>*</span><span id="message">Password Not Matched!</span></div>
                <input type="password" id="new_password" class="text_field"  placeholder="CREATE NEW PASSWORD" title="CREATE NEW PASSWORD">

                <div class="title" style="float:left;">COMFIRM NEW PASSWORD:<span >*</span>  <div id='message' style="float:right;margin-left:10px;"></div></div>
                <input type="password" id="confirm_password" onkeyup=" _check_password_match();" class="text_field" placeholder="COMFIRM NEW PASSWORD" title="COMFIRM NEW PASSWORD">
            
                <div class="pswd_info" style="color:#8c8d8d" >At least 8 charaters required including upper & lower cases and special characters and numbers.</div>
                <button class="action-btn" id="submit_btn" type="button" onclick="_update_user_password();" title="CHANGE PASSWORD"> CHANGE PASSWORD</button>
                
            </div>

        </div>
    </div> 
</div>
<script>_fetch_settings();</script>
<?php } ?>


<?php if ($page=='access_key_validation_info'){?>
	<div class="caption-div caption-success-div animated zoomIn">
        <div class="div-in animated fadeInRight">
			<div class="img"><img src="<?php echo $website_url?>/admin/all-images/images/warning.gif"/></div>
            <h2>INVALID ACCESS TOKEN</h2>
            Please LogIn Again
            <button class="btn" onclick="_logout();"><i class="bi-check"></i> Okay, Log-In </bu