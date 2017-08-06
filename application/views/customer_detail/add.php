<?php
//echo "<pre>";
//print_r($customer_address);
//exit;
if (isset($customer_id) && ($customer_id == "" || $customer_id == 0))
    $action = base_url() . "customer_detail/add";
else
    $action = base_url() . "customer_detail/add/" . $customer_id;
echo $this->session->flashdata('errormessage');
echo form_open_multipart($action, array("id" => "customer_info_creation_form", "name" => "customer_info_creation_form", "class" => "form-horizontal", "method" => "post"));
?>
<h1>Customer Info</h1>
<fieldset>
    <div class="row box">
        <div class="col-md-3 pull-right">
            <?php
            if (!isset($customer_profile)) {
                $namevalue = set_value('CUSTOMER_TYPE');
            } else {
                $value = set_value('CUSTOMER_TYPE');
                if (empty($value)) {
                    $namevalue = isset($customer_profile['CUSTOMER_TYPE']) ? $customer_profile['CUSTOMER_TYPE'] : "";
                } else {
                    $namevalue = $value;
                }
            }
            $CUSTOMER_TYPE_values = array(
                '1' => 'Individual',
                '2' => 'Company',
            );
            $name_value = $namevalue;
            $js = 'id="CUSTOMER_TYPE" class="form-control required"';
            echo form_dropdown('CUSTOMER_TYPE', $CUSTOMER_TYPE_values, $name_value, $js);
            echo form_error("CUSTOMER_TYPE");
            ?>
        </div>
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Customer Information</h3>
                </div>
                <div class="col-md-5" style="padding:0px;">
                    <div class="box box-primary col-md-offset-5" style="border-radius:0px;height:130px;box-shadow:none;border:0px;">
                        <div class="box-body box-profile" style="border:0px;">
                            <div class="profile-img-container img-circle">
                                <input type="file" name="customer_pic" />
                                <?php
                                $img_path = base_url() . "assets/default-user.png";
                                if (isset($customer_profile['CUSTOMER_PIC_PATH']) && $customer_profile['CUSTOMER_PIC_PATH'] != "") {
                                    $img_path = base_url() . "uploads/profilepics/" . $customer_profile['CUSTOMER_PIC_PATH'];
                                }
                                ?>
                                <img class="profile-user-img img-responsive img-circle" src="<?php echo $img_path; ?>" alt="User profile picture">
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="col-md-12 col-md-offset-1">
                        <div class="form-group">
                            <label for="CUSTOMER_IDNO" class="col-md-4 control-label">ID NO</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('CUSTOMER_IDNO');
                                } else {
                                    $value = set_value('CUSTOMER_IDNO');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['CUSTOMER_IDNO']) ? $customer_profile['CUSTOMER_IDNO'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $CUSTOMER_IDNO = array(
                                    'name' => 'CUSTOMER_IDNO',
                                    'id' => 'CUSTOMER_IDNO',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control required"
                                );

                                echo form_input($CUSTOMER_IDNO);
                                echo form_error("CUSTOMER_IDNO");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="CUSTOMER_NAME" class="col-md-4 control-label">NAME</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('CUSTOMER_NAME');
                                } else {
                                    $value = set_value('CUSTOMER_NAME');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['CUSTOMER_NAME']) ? $customer_profile['CUSTOMER_NAME'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $CUSTOMER_NAME = array(
                                    'name' => 'CUSTOMER_NAME',
                                    'id' => 'CUSTOMER_NAME',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control required"
                                );

                                echo form_input($CUSTOMER_NAME);
                                echo form_error("CUSTOMER_NAME");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="DOB" class="col-md-4 control-label">DOB</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('DOB');
                                } else {
                                    $value = set_value('DOB');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['DOB']) ? date("Y-m-d", strtotime($customer_profile['DOB'])) : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $DOB = array(
                                    'name' => 'DOB',
                                    'id' => 'DOB',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control date-picker dob-class"
                                );

                                echo form_input($DOB);
                                echo form_error("DOB");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="AGE" class="col-md-4 control-label">AGE</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('AGE');
                                } else {
                                    $value = set_value('AGE');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['AGE']) ? $customer_profile['AGE'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $AGE = array(
                                    'name' => 'AGE',
                                    'id' => 'AGE',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    'readonly' => true,
                                    "class" => "form-control"
                                );

                                echo form_input($AGE);
                                echo form_error("AGE");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GENDER" class="col-md-4 control-label">GENDER</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GENDER');
                                } else {
                                    $value = set_value('GENDER');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GENDER']) ? $customer_profile['GENDER'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GENDER_values = array(
                                    '' => "Select",
                                    '1' => 'Male',
                                    '2' => 'Female',
                                );
                                $js = 'id="GENDER" class="form-control"';
                                echo form_dropdown('GENDER', $GENDER_values, $namevalue, $js);
                                echo form_error("GENDER");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="EMAIL_ID" class="col-md-4 control-label">EMAIL ID</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('EMAIL_ID');
                                } else {
                                    $value = set_value('EMAIL_ID');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['EMAIL_ID']) ? $customer_profile['EMAIL_ID'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $EMAIL_ID = array(
                                    'name' => 'EMAIL_ID',
                                    'id' => 'EMAIL_ID',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($EMAIL_ID);
                                echo form_error("EMAIL_ID");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body col-md-6 col-md-offset-1" style="border-left:1px solid #00c0ef;padding-left:30px;">

                    <div class="form-group">
                        <label for="FILE_NO" class="col-md-4 control-label">FILE NO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('FILE_NO');
                            } else {
                                $value = set_value('FILE_NO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['FILE_NO']) ? $customer_profile['FILE_NO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $FILE_NO = array(
                                'name' => 'FILE_NO',
                                'id' => 'FILE_NO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($FILE_NO);
                            echo form_error("FILE_NO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="OLDIC_NO" class="col-md-4 control-label">OLD IC NO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('OLDIC_NO');
                            } else {
                                $value = set_value('OLDIC_NO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['OLDIC_NO']) ? $customer_profile['OLDIC_NO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $OLDIC_NO = array(
                                'name' => 'OLDIC_NO',
                                'id' => 'OLDIC_NO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($OLDIC_NO);
                            echo form_error("OLDIC_NO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NON_ICNO" class="col-md-4 control-label">NON IC NO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('NON_ICNO');
                            } else {
                                $value = set_value('NON_ICNO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['NON_ICNO']) ? $customer_profile['NON_ICNO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $NON_ICNO = array(
                                'name' => 'NON_ICNO',
                                'id' => 'NON_ICNO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($NON_ICNO);
                            echo form_error("NON_ICNO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="APPLICATION_DATE" class="col-md-4 control-label">APPLICATION DATE</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('APPLICATION_DATE');
                            } else {
                                $value = set_value('APPLICATION_DATE');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['APPLICATION_DATE']) ? date("Y-m-d", strtotime($customer_profile['APPLICATION_DATE'])) : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $APPLICATION_DATE = array(
                                'name' => 'APPLICATION_DATE',
                                'id' => 'APPLICATION_DATE',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control required date-picker"
                            );

                            echo form_input($APPLICATION_DATE);
                            echo form_error("APPLICATION_DATE");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="AGENT_ID" class="col-md-4 control-label">AGENT ID</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('AGENT_ID');
                            } else {
                                $value = set_value('AGENT_ID');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['AGENT_ID']) ? $customer_profile['AGENT_ID'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $agent_optins = array("" => "Select");
                            foreach ($all_masters_agent_info as $masters_agent_info) {
                                $agent_optins[$masters_agent_info['AGENT_ID']] = $masters_agent_info['AGENT_NAME'];
                            }
                            $js = 'id="AGENT_ID" class="form-control required"';
                            echo form_dropdown('AGENT_ID', $agent_optins, $namevalue, $js);
                            echo form_error("AGENT_ID");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="VEHICLE_NO" class="col-md-4 control-label">VEHICLE NO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('VEHICLE_NO');
                            } else {
                                $value = set_value('VEHICLE_NO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['VEHICLE_NO']) ? $customer_profile['VEHICLE_NO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $VEHICLE_NO = array(
                                'name' => 'VEHICLE_NO',
                                'id' => 'VEHICLE_NO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($VEHICLE_NO);
                            echo form_error("VEHICLE_NO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="RELATED_TO_EMP" class="col-md-4 control-label">RELATED TO EMP</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('RELATED_TO_EMP');
                            } else {
                                $value = set_value('RELATED_TO_EMP');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['RELATED_TO_EMP']) ? $customer_profile['RELATED_TO_EMP'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $RELATED_TO_EMP = array(
                                'name' => 'RELATED_TO_EMP',
                                'id' => 'RELATED_TO_EMP',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($RELATED_TO_EMP);
                            echo form_error("RELATED_TO_EMP");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ADVERTISEMENT_ID" class="col-md-4 control-label">ADVERTISEMENT</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('ADVERTISEMENT_ID');
                            } else {
                                $value = set_value('ADVERTISEMENT_ID');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['ADVERTISEMENT_ID']) ? $customer_profile['ADVERTISEMENT_ID'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $adv_options = array("" => "Select");
                            foreach ($all_masters_advertisements as $masters_advertisement) {
                                $adv_options[$masters_advertisement['ADVERTISEMENT_ID']] = $masters_advertisement['ADVERTISEMENT_NAME'];
                            }
                            $js = 'id="ADVERTISEMENT_ID" class="form-control"';
                            echo form_dropdown('ADVERTISEMENT_ID', $adv_options, $namevalue, $js);
                            echo form_error("ADVERTISEMENT_ID");
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="HOUSESTATUS_ID" class="col-md-4 control-label">HOUSE STATUS</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('HOUSESTATUS_ID');
                            } else {
                                $value = set_value('HOUSESTATUS_ID');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['HOUSESTATUS_ID']) ? $customer_profile['HOUSESTATUS_ID'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $HOUSESTATUS_ID_values = array(
                                '' => "Select",
                                '1' => 'Own',
                                '2' => 'Rented',
                            );
                            $js = 'id="HOUSESTATUS_ID" class="form-control"';
                            echo form_dropdown('HOUSESTATUS_ID', $HOUSESTATUS_ID_values, $namevalue, $js);
                            echo form_error("HOUSESTATUS_ID");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="MARTIAL_STATUS" class="col-md-4 control-label">MARTIAL STATUS</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('MARTIAL_STATUS');
                            } else {
                                $value = set_value('MARTIAL_STATUS');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['MARTIAL_STATUS']) ? $customer_profile['MARTIAL_STATUS'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $MARTIAL_STATUS_values = array(
                                '' => "Select",
                                '1' => 'Unmarried',
                                '2' => 'Married',
                                '3' => 'Divorced',
                                '4' => 'Widowed',
                            );
                            $js = 'id="MARTIAL_STATUS" class="form-control"';
                            echo form_dropdown('MARTIAL_STATUS', $MARTIAL_STATUS_values, $namevalue, $js);
                            echo form_error("MARTIAL_STATUS");
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="APPLIED_BRANCH_ID" class="col-md-4 control-label">APPLIED BRANCH</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('APPLIED_BRANCH_ID');
                            } else {
                                $value = set_value('APPLIED_BRANCH_ID');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['APPLIED_BRANCH_ID']) ? $customer_profile['APPLIED_BRANCH_ID'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $APPLIED_BRANCH_ID = array(
                                'name' => 'APPLIED_BRANCH_ID',
                                'id' => 'APPLIED_BRANCH_ID',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control required"
                            );

                            echo form_input($APPLIED_BRANCH_ID);
                            echo form_error("APPLIED_BRANCH_ID");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>

<h1>Customer Additional Information</h1>
<fieldset>
    <div class="row box" style="padding-bottom:10px;">
        <div class="col-md-6" style="padding-right:0px;">
            <div class="box box-info" style="padding-right:0px;">
                <div class="box-header with-border">
                    <h3 class="box-title">Working Information</h3>
                </div>
                <div class="col-md-12" style="padding-right:0px;border-right: 1px solid #00c0ef;">
                    <div class="form-group">
                        <label for="COMPANY_ID" class="col-md-4 control-label">COMPANY</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('COMPANY_ID');
                            } else {
                                $value = set_value('COMPANY_ID');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['COMPANY_ID']) ? $customer_profile['COMPANY_ID'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $options = array("" => "Select");
                            foreach ($all_administration_comp_profile as $administration_comp_profile) {
                                $options[$administration_comp_profile['BRANCH_ID']] = $administration_comp_profile['BRANCH_NAME'];
                            }
                            $js = 'id="COMPANY_ID" class="form-control"';
                            echo form_dropdown('COMPANY_ID', $options, $namevalue, $js);
                            echo form_error("COMPANY_ID");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="OCCUPATION_DEPT_NAME" class="col-md-4 control-label">OCCUPATION DEPT NAME</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('OCCUPATION_DEPT_NAME');
                            } else {
                                $value = set_value('OCCUPATION_DEPT_NAME');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['OCCUPATION_DEPT_NAME']) ? $customer_profile['OCCUPATION_DEPT_NAME'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $OCCUPATION_DEPT_NAME = array(
                                'name' => 'OCCUPATION_DEPT_NAME',
                                'id' => 'OCCUPATION_DEPT_NAME',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control required"
                            );

                            echo form_input($OCCUPATION_DEPT_NAME);
                            echo form_error("OCCUPATION_DEPT_NAME");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="RACE_ID" class="col-md-4 control-label">RACE ID</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('RACE_ID');
                            } else {
                                $value = set_value('RACE_ID');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['RACE_ID']) ? $customer_profile['RACE_ID'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $options = array("" => "Select");
                            foreach ($all_masters_race as $masters_race) {
                                $options[$masters_race['RACE_ID']] = $masters_race['RACE_NAME'];
                            }
                            $js = 'id="RACE_ID" class="form-control required"';
                            echo form_dropdown('RACE_ID', $options, $namevalue, $js);
                            echo form_error("RACE_ID");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="PRESENT_SALARY" class="col-md-4 control-label">PRESENT SALARY</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('PRESENT_SALARY');
                            } else {
                                $value = set_value('PRESENT_SALARY');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['PRESENT_SALARY']) ? $customer_profile['PRESENT_SALARY'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $PRESENT_SALARY = array(
                                'name' => 'PRESENT_SALARY',
                                'id' => 'PRESENT_SALARY',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($PRESENT_SALARY);
                            echo form_error("PRESENT_SALARY");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="JOBSECTOR_ID" class="col-md-4 control-label">JOBSECTOR ID</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('JOBSECTOR_ID');
                            } else {
                                $value = set_value('JOBSECTOR_ID');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['JOBSECTOR_ID']) ? $customer_profile['JOBSECTOR_ID'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $JOBSECTOR_ID = array(
                                'name' => 'JOBSECTOR_ID',
                                'id' => 'JOBSECTOR_ID',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control required"
                            );

                            echo form_input($JOBSECTOR_ID);
                            echo form_error("JOBSECTOR_ID");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="YEARS_OR_SERVICE_YEARS" class="col-md-4 control-label">YEARS OR SERVICE YEARS</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('YEARS_OR_SERVICE_YEARS');
                            } else {
                                $value = set_value('YEARS_OR_SERVICE_YEARS');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['YEARS_OR_SERVICE_YEARS']) ? $customer_profile['YEARS_OR_SERVICE_YEARS'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $YEARS_OR_SERVICE_YEARS = array(
                                'name' => 'YEARS_OR_SERVICE_YEARS',
                                'id' => 'YEARS_OR_SERVICE_YEARS',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($YEARS_OR_SERVICE_YEARS);
                            echo form_error("YEARS_OR_SERVICE_YEARS");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="YEARS_OR_SERVICE_MONTHS" class="col-md-4 control-label">YEARS OR SERVICE MONTHS</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('YEARS_OR_SERVICE_MONTHS');
                            } else {
                                $value = set_value('YEARS_OR_SERVICE_MONTHS');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['YEARS_OR_SERVICE_MONTHS']) ? $customer_profile['YEARS_OR_SERVICE_MONTHS'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $YEARS_OR_SERVICE_MONTHS = array(
                                'name' => 'YEARS_OR_SERVICE_MONTHS',
                                'id' => 'YEARS_OR_SERVICE_MONTHS',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($YEARS_OR_SERVICE_MONTHS);
                            echo form_error("YEARS_OR_SERVICE_MONTHS");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="CREDIT_LIMIT" class="col-md-4 control-label">CREDIT LIMIT</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('CREDIT_LIMIT');
                            } else {
                                $value = set_value('CREDIT_LIMIT');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['CREDIT_LIMIT']) ? $customer_profile['CREDIT_LIMIT'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $CREDIT_LIMIT = array(
                                'name' => 'CREDIT_LIMIT',
                                'id' => 'CREDIT_LIMIT',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($CREDIT_LIMIT);
                            echo form_error("CREDIT_LIMIT");
                            ?>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding-left:0px;">
            <div class="box box-info" style="padding-left:0px;">
                <div class="box-header with-border">
                    <h3 class="box-title">Customer Account Information</h3>
                </div>
                <div class="col-md-12" style="padding-left:30px;">
                    <div class="form-group">
                        <label for="BANK_ID" class="col-md-4 control-label">BANK ID</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('BANK_ID');
                            } else {
                                $value = set_value('BANK_ID');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['BANK_ID']) ? $customer_profile['BANK_ID'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $options = array("" => "Select");
                            foreach ($all_masters_cust_bank as $masters_cust_bank) {
                                $options[$masters_race['BANK_ID']] = $masters_race['BANK_NAME'];
                            }
                            $js = 'id="BANK_ID" class="form-control"';
                            echo form_dropdown('BANK_ID', $options, $namevalue, $js);
                            echo form_error("BANK_ID");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="BANK_ACCOUNTNO" class="col-md-4 control-label">BANK ACCOUNTNO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('BANK_ACCOUNTNO');
                            } else {
                                $value = set_value('BANK_ACCOUNTNO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['BANK_ACCOUNTNO']) ? $customer_profile['BANK_ACCOUNTNO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $BANK_ACCOUNTNO = array(
                                'name' => 'BANK_ACCOUNTNO',
                                'id' => 'BANK_ACCOUNTNO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($BANK_ACCOUNTNO);
                            echo form_error("BANK_ACCOUNTNO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="BANK_ATM_CARD_NO" class="col-md-4 control-label">BANK ATM CARD NO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('BANK_ATM_CARD_NO');
                            } else {
                                $value = set_value('BANK_ATM_CARD_NO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['BANK_ATM_CARD_NO']) ? $customer_profile['BANK_ATM_CARD_NO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $BANK_ATM_CARD_NO = array(
                                'name' => 'BANK_ATM_CARD_NO',
                                'id' => 'BANK_ATM_CARD_NO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($BANK_ATM_CARD_NO);
                            echo form_error("BANK_ATM_CARD_NO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="BANK_ATM_CARD_PIN_NO" class="col-md-4 control-label">BANK ATM CARD PIN NO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('BANK_ATM_CARD_PIN_NO');
                            } else {
                                $value = set_value('BANK_ATM_CARD_PIN_NO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['BANK_ATM_CARD_PIN_NO']) ? $customer_profile['BANK_ATM_CARD_PIN_NO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $BANK_ATM_CARD_PIN_NO = array(
                                'name' => 'BANK_ATM_CARD_PIN_NO',
                                'id' => 'BANK_ATM_CARD_PIN_NO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($BANK_ATM_CARD_PIN_NO);
                            echo form_error("BANK_ATM_CARD_PIN_NO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="BANK_ATM_CARD_VALIDITY" class="col-md-4 control-label">BANK ATM CARD VALIDITY</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('BANK_ATM_CARD_VALIDITY');
                            } else {
                                $value = set_value('BANK_ATM_CARD_VALIDITY');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['BANK_ATM_CARD_VALIDITY']) ? date("Y-m-d", strtotime($customer_profile['BANK_ATM_CARD_VALIDITY'])) : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $BANK_ATM_CARD_VALIDITY = array(
                                'name' => 'BANK_ATM_CARD_VALIDITY',
                                'id' => 'BANK_ATM_CARD_VALIDITY',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($BANK_ATM_CARD_VALIDITY);
                            echo form_error("BANK_ATM_CARD_VALIDITY");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<h1>Spouse Info</h1>
<fieldset>
    <div class="row box">
        <div class="col-md-12">
            <div class="col-md-6" style="padding:0px;">
                <div class="box box-info" style="padding-right:0px;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Spouse Information</h3>
                    </div>
                    <div class="col-md-12" style="padding:0px;">
                        <div class="col-md-5"></div>
                        <div class="box box-primary col-md-6" style="border-radius:0px;height:130px;box-shadow:none;border:0px;border-right:1px solid #00c0ef;margin-bottom:0px;">
                            <div class="box-body box-profile" style="border:0px;">
                                <div class="profile-img-container img-circle" style="margin:0 40%;">
                                    <input type="file" name="spouse_pic_name"/>
                                    <?php
                                    $img_path = base_url() . "assets/default-user.png";
                                    if (isset($customer_profile['SPOUSE_PIC_PATH']) && $customer_profile['SPOUSE_PIC_PATH'] != "") {
                                        $img_path = base_url() . "uploads/profilepics/" . $customer_profile['SPOUSE_PIC_PATH'];
                                    }
                                    ?>
                                    <img class="profile-user-img img-responsive img-circle" src="<?php echo $img_path; ?>" alt="User profile picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="border-right:1px solid #00c0ef;">
                        <div class="form-group">
                            <label for="SPOUSE_IDNO" class="col-md-4 control-label">ID NO</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_IDNO');
                                } else {
                                    $value = set_value('SPOUSE_IDNO');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_IDNO']) ? $customer_profile['SPOUSE_IDNO'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_IDNO = array(
                                    'name' => 'SPOUSE_IDNO',
                                    'id' => 'SPOUSE_IDNO',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_IDNO);
                                echo form_error("SPOUSE_IDNO");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_NAME" class="col-md-4 control-label">NAME</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_NAME');
                                } else {
                                    $value = set_value('SPOUSE_NAME');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_NAME']) ? $customer_profile['SPOUSE_NAME'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_NAME = array(
                                    'name' => 'SPOUSE_NAME',
                                    'id' => 'SPOUSE_NAME',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_NAME);
                                echo form_error("SPOUSE_NAME");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_FATHERS_NAME" class="col-md-4 control-label"> FATHERS NAME</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_FATHERS_NAME');
                                } else {
                                    $value = set_value('SPOUSE_FATHERS_NAME');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_FATHERS_NAME']) ? $customer_profile['SPOUSE_FATHERS_NAME'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_FATHERS_NAME = array(
                                    'name' => 'SPOUSE_FATHERS_NAME',
                                    'id' => 'SPOUSE_FATHERS_NAME',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_FATHERS_NAME);
                                echo form_error("SPOUSE_FATHERS_NAME");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_MOTHERS_NAME" class="col-md-4 control-label"> MOTHERS NAME</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_MOTHERS_NAME');
                                } else {
                                    $value = set_value('SPOUSE_MOTHERS_NAME');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_MOTHERS_NAME']) ? $customer_profile['SPOUSE_MOTHERS_NAME'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_MOTHERS_NAME = array(
                                    'name' => 'SPOUSE_MOTHERS_NAME',
                                    'id' => 'SPOUSE_MOTHERS_NAME',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_MOTHERS_NAME);
                                echo form_error("SPOUSE_MOTHERS_NAME");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_EMAILID" class="col-md-4 control-label">EMAIL ID</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_EMAILID');
                                } else {
                                    $value = set_value('SPOUSE_EMAILID');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_EMAILID']) ? $customer_profile['SPOUSE_EMAILID'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_EMAILID = array(
                                    'name' => 'SPOUSE_EMAILID',
                                    'id' => 'SPOUSE_EMAILID',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_EMAILID);
                                echo form_error("SPOUSE_EMAILID");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_HOME_PHONE" class="col-md-4 control-label">HOME PHONE</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_HOME_PHONE');
                                } else {
                                    $value = set_value('SPOUSE_HOME_PHONE');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_HOME_PHONE']) ? $customer_profile['SPOUSE_HOME_PHONE'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_HOME_PHONE = array(
                                    'name' => 'SPOUSE_HOME_PHONE',
                                    'id' => 'SPOUSE_HOME_PHONE',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_HOME_PHONE);
                                echo form_error("SPOUSE_HOME_PHONE");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_HAND_PHONE" class="col-md-4 control-label"> HAND PHONE</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_HAND_PHONE');
                                } else {
                                    $value = set_value('SPOUSE_HAND_PHONE');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_HAND_PHONE']) ? $customer_profile['SPOUSE_HAND_PHONE'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_HAND_PHONE = array(
                                    'name' => 'SPOUSE_HAND_PHONE',
                                    'id' => 'SPOUSE_HAND_PHONE',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_HAND_PHONE);
                                echo form_error("SPOUSE_HAND_PHONE");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_ADDRESS" class="col-md-4 control-label"> ADDRESS</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_ADDRESS');
                                } else {
                                    $value = set_value('SPOUSE_ADDRESS');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_ADDRESS']) ? $customer_profile['SPOUSE_ADDRESS'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_ADDRESS = array(
                                    'name' => 'SPOUSE_ADDRESS',
                                    'id' => 'SPOUSE_ADDRESS',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_textarea($SPOUSE_ADDRESS);
                                echo form_error("SPOUSE_ADDRESS");
                                ?>
                            </div>
                        </div>
                        <div class="form-group" style="visibility:hidden;">
                            <label for="SPOUSE_OFFICE_ADDRESS" class="col-md-4 control-label"> OFFICE ADDRESS</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_OFFICE_ADDRESS');
                                } else {
                                    $value = set_value('SPOUSE_OFFICE_ADDRESS');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_OFFICE_ADDRESS']) ? $customer_profile['SPOUSE_OFFICE_ADDRESS'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_OFFICE_ADDRESS = array(
                                    'name' => 'SPOUSE_OFFICE_ADDRESS',
                                    'id' => 'SPOUSE_OFFICE_ADDRESS',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_textarea($SPOUSE_OFFICE_ADDRESS);
                                echo form_error("SPOUSE_OFFICE_ADDRESS");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-left:0px;">							 	
                <div class="box box-info" style="padding-left:0px;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Other Information</h3>
                    </div>
                    <div class="col-md-11 col-md-offset-1" style="padding-left:10px;">
                        <div class="form-group">
                            <label for="SPOUSE_DOB" class="col-md-4 control-label">DOB</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_DOB');
                                } else {
                                    $value = set_value('SPOUSE_DOB');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_DOB']) ? date("Y-m-d", strtotime($customer_profile['SPOUSE_DOB'])) : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_DOB = array(
                                    'name' => 'SPOUSE_DOB',
                                    'id' => 'SPOUSE_DOB',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control date-picker dob-class"
                                );

                                echo form_input($SPOUSE_DOB);
                                echo form_error("SPOUSE_DOB");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_AGE" class="col-md-4 control-label">AGE</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_OFFICE_ADDRESS');
                                } else {
                                    $value = set_value('SPOUSE_OFFICE_ADDRESS');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_OFFICE_ADDRESS']) ? $customer_profile['SPOUSE_OFFICE_ADDRESS'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_AGE = array(
                                    'name' => 'SPOUSE_AGE',
                                    'id' => 'SPOUSE_AGE',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    'readonly' => true,
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_AGE);
                                echo form_error("SPOUSE_AGE");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_NO_OF_CHILDREN" class="col-md-4 control-label">NO OF CHILDREN</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_NO_OF_CHILDREN');
                                } else {
                                    $value = set_value('SPOUSE_NO_OF_CHILDREN');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_NO_OF_CHILDREN']) ? $customer_profile['SPOUSE_NO_OF_CHILDREN'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_NO_OF_CHILDREN = array(
                                    'name' => 'SPOUSE_NO_OF_CHILDREN',
                                    'id' => 'SPOUSE_NO_OF_CHILDREN',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($SPOUSE_NO_OF_CHILDREN);
                                echo form_error("SPOUSE_NO_OF_CHILDREN");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_GENDER" class="col-md-4 control-label"> GENDER</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_GENDER');
                                } else {
                                    $value = set_value('SPOUSE_GENDER');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_GENDER']) ? $customer_profile['SPOUSE_GENDER'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $SPOUSE_GENDER_values = array(
                                    '' => "Select",
                                    '1' => 'Male',
                                    '2' => 'Female',
                                );
                                $js = 'id="SPOUSE_GENDER" class="form-control"';
                                echo form_dropdown('SPOUSE_GENDER', $SPOUSE_GENDER_values, $namevalue, $js);
                                echo form_error("SPOUSE_GENDER");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="SPOUSE_RACE_ID" class="col-md-4 control-label"> RACE ID</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('SPOUSE_RACE_ID');
                                } else {
                                    $value = set_value('SPOUSE_RACE_ID');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['SPOUSE_RACE_ID']) ? $customer_profile['SPOUSE_RACE_ID'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $options = array("" => "Select");
                                foreach ($all_masters_race as $masters_race) {
                                    $options[$masters_race['RACE_ID']] = $masters_race['RACE_NAME'];
                                }
                                $js = 'id="SPOUSE_RACE_ID" class="form-control"';
                                echo form_dropdown('SPOUSE_RACE_ID', $options, $namevalue, $js);
                                echo form_error("SPOUSE_RACE_ID");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-left:0px;">
                <div class="box box-info" style="padding-bottom: 0px;border-top: 1px solid #ccc;padding-top: 0px;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Working Information</h3>
                    </div>
                </div>
                <div class="col-md-11 col-md-offset-1" style="padding-left:10px;">
                    <div class="form-group">
                        <label for="SPOUSE_COMPANY_NAME" class="col-md-4 control-label"> COMPANY NAME</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('SPOUSE_COMPANY_NAME');
                            } else {
                                $value = set_value('SPOUSE_COMPANY_NAME');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['SPOUSE_COMPANY_NAME']) ? $customer_profile['SPOUSE_COMPANY_NAME'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $SPOUSE_COMPANY_NAMEoptions = array("" => "Select");
                            foreach ($all_masters_cust_comp_info as $masters_cust_comp_info) {
                                $SPOUSE_COMPANY_NAMEoptions[$masters_cust_comp_info['COMPANY_ID']] = $masters_cust_comp_info['COMPANY_NAME'];
                            }
                            $js = 'id="SPOUSE_COMPANY_NAME" class="form-control"';
                            echo form_dropdown('SPOUSE_COMPANY_NAME', $SPOUSE_COMPANY_NAMEoptions, $namevalue, $js);
                            echo form_error("SPOUSE_COMPANY_NAME");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SPOUSE_OCCUPATION_DEPT" class="col-md-4 control-label"> OCCUPATION DEPT</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('SPOUSE_OCCUPATION_DEPT');
                            } else {
                                $value = set_value('SPOUSE_OCCUPATION_DEPT');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['SPOUSE_OCCUPATION_DEPT']) ? $customer_profile['SPOUSE_OCCUPATION_DEPT'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $SPOUSE_OCCUPATION_DEPT = array(
                                'name' => 'SPOUSE_OCCUPATION_DEPT',
                                'id' => 'SPOUSE_OCCUPATION_DEPT',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($SPOUSE_OCCUPATION_DEPT);
                            echo form_error("SPOUSE_OCCUPATION_DEPT");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SPOUSE_YEARS_OF_SERVICE_YEAR" class="col-md-4 control-label"> YEARS OF SERVICE YEAR</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('SPOUSE_YEARS_OF_SERVICE_YEAR');
                            } else {
                                $value = set_value('SPOUSE_YEARS_OF_SERVICE_YEAR');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['SPOUSE_YEARS_OF_SERVICE_YEAR']) ? $customer_profile['SPOUSE_YEARS_OF_SERVICE_YEAR'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $SPOUSE_YEARS_OF_SERVICE_YEAR = array(
                                'name' => 'SPOUSE_YEARS_OF_SERVICE_YEAR',
                                'id' => 'SPOUSE_YEARS_OF_SERVICE_YEAR',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($SPOUSE_YEARS_OF_SERVICE_YEAR);
                            echo form_error("SPOUSE_YEARS_OF_SERVICE_YEAR");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SPOUSE_YEARS_OF_SERVICE_MONTH" class="col-md-4 control-label"> YEARS OF SERVICE MONTH</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('SPOUSE_YEARS_OF_SERVICE_MONTH');
                            } else {
                                $value = set_value('SPOUSE_YEARS_OF_SERVICE_MONTH');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['SPOUSE_YEARS_OF_SERVICE_MONTH']) ? $customer_profile['SPOUSE_YEARS_OF_SERVICE_MONTH'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $SPOUSE_YEARS_OF_SERVICE_MONTH = array(
                                'name' => 'SPOUSE_YEARS_OF_SERVICE_MONTH',
                                'id' => 'SPOUSE_YEARS_OF_SERVICE_MONTH',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($SPOUSE_YEARS_OF_SERVICE_MONTH);
                            echo form_error("SPOUSE_YEARS_OF_SERVICE_MONTH");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SPOUSE_SALARY" class="col-md-4 control-label"> SALARY</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('SPOUSE_SALARY');
                            } else {
                                $value = set_value('SPOUSE_SALARY');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['SPOUSE_SALARY']) ? $customer_profile['SPOUSE_SALARY'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $SPOUSE_SALARY = array(
                                'name' => 'SPOUSE_SALARY',
                                'id' => 'SPOUSE_SALARY',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($SPOUSE_SALARY);
                            echo form_error("SPOUSE_SALARY");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SPOUSE_OFFICE_PHONE1" class="col-md-4 control-label"> OFFICE PHONE1</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('SPOUSE_OFFICE_PHONE1');
                            } else {
                                $value = set_value('SPOUSE_OFFICE_PHONE1');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['SPOUSE_OFFICE_PHONE1']) ? $customer_profile['SPOUSE_OFFICE_PHONE1'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $SPOUSE_OFFICE_PHONE1 = array(
                                'name' => 'SPOUSE_OFFICE_PHONE1',
                                'id' => 'SPOUSE_OFFICE_PHONE1',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($SPOUSE_OFFICE_PHONE1);
                            echo form_error("SPOUSE_OFFICE_PHONE1");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SPOUSE_OFFICE_PHONE2" class="col-md-4 control-label"> OFFICE PHONE2</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('SPOUSE_OFFICE_PHONE2');
                            } else {
                                $value = set_value('SPOUSE_OFFICE_PHONE2');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['SPOUSE_OFFICE_PHONE2']) ? $customer_profile['SPOUSE_OFFICE_PHONE2'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $SPOUSE_OFFICE_PHONE2 = array(
                                'name' => 'SPOUSE_OFFICE_PHONE2',
                                'id' => 'SPOUSE_OFFICE_PHONE2',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($SPOUSE_OFFICE_PHONE2);
                            echo form_error("SPOUSE_OFFICE_PHONE2");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SPOUSE_OFFICE_ADDRESS" class="col-md-4 control-label"> OFFICE ADDRESS</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('SPOUSE_OFFICE_ADDRESS');
                            } else {
                                $value = set_value('SPOUSE_OFFICE_ADDRESS');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['SPOUSE_OFFICE_ADDRESS']) ? $customer_profile['SPOUSE_OFFICE_ADDRESS'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $SPOUSE_OFFICE_ADDRESS = array(
                                'name' => 'SPOUSE_OFFICE_ADDRESS',
                                'id' => 'SPOUSE_OFFICE_ADDRESS',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_textarea($SPOUSE_OFFICE_ADDRESS);
                            echo form_error("SPOUSE_OFFICE_ADDRESS");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<h1>Gurantor Info</h1>
<fieldset>
    <div class="row box">
        <div class="col-md-12">
            <div class="col-md-6" style="padding:0px;">
                <div class="box box-info" style="padding-right:0px;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Gurantor Information</h3>
                    </div>
                    <div class="col-md-12" style="padding:0px;">
                        <div class="col-md-5"></div>
                        <div class="box box-primary col-md-6" style="border-radius:0px;height:130px;box-shadow:none;border:0px;border-right:1px solid #00c0ef;margin-bottom:0px;">
                            <div class="box-body box-profile" style="border:0px;">
                                <div class="profile-img-container img-circle" style="margin:0 40%;">
                                    <input type="file" name="gurant_pic"/>
                                    <?php
                                    $img_path = base_url() . "assets/default-user.png";
                                    if (isset($customer_profile['GUARANTER_PIC_PATH']) && $customer_profile['GUARANTER_PIC_PATH'] != "") {
                                        $img_path = base_url() . "uploads/profilepics/" . $customer_profile['GUARANTER_PIC_PATH'];
                                    }
                                    ?>
                                    <img class="profile-user-img img-responsive img-circle" src="<?php echo $img_path; ?>" alt="User profile picture">
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-md-12" style="border-right:1px solid #00c0ef;">

                        <div class="form-group">
                            <label for="GUARANTER_IDNO" class="col-md-4 control-label"> ID NO</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_IDNO');
                                } else {
                                    $value = set_value('GUARANTER_IDNO');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_IDNO']) ? $customer_profile['GUARANTER_IDNO'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_IDNO = array(
                                    'name' => 'GUARANTER_IDNO',
                                    'id' => 'GUARANTER_IDNO',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_IDNO);
                                echo form_error("GUARANTER_IDNO");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_NAME" class="col-md-4 control-label"> NAME</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_NAME');
                                } else {
                                    $value = set_value('GUARANTER_NAME');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_NAME']) ? $customer_profile['GUARANTER_NAME'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_NAME = array(
                                    'name' => 'GUARANTER_NAME',
                                    'id' => 'GUARANTER_NAME',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_NAME);
                                echo form_error("GUARANTER_NAME");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_FATHERS_NAME" class="col-md-4 control-label"> FATHERS NAME</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_FATHERS_NAME');
                                } else {
                                    $value = set_value('GUARANTER_FATHERS_NAME');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_FATHERS_NAME']) ? $customer_profile['GUARANTER_FATHERS_NAME'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_FATHERS_NAME = array(
                                    'name' => 'GUARANTER_FATHERS_NAME',
                                    'id' => 'GUARANTER_FATHERS_NAME',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_FATHERS_NAME);
                                echo form_error("GUARANTER_FATHERS_NAME");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_MOTHERS_NAME" class="col-md-4 control-label"> MOTHERS NAME</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_MOTHERS_NAME');
                                } else {
                                    $value = set_value('GUARANTER_MOTHERS_NAME');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_MOTHERS_NAME']) ? $customer_profile['GUARANTER_MOTHERS_NAME'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_MOTHERS_NAME = array(
                                    'name' => 'GUARANTER_MOTHERS_NAME',
                                    'id' => 'GUARANTER_MOTHERS_NAME',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_MOTHERS_NAME);
                                echo form_error("GUARANTER_MOTHERS_NAME");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_EMAILID" class="col-md-4 control-label"> EMAILID</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_EMAILID');
                                } else {
                                    $value = set_value('GUARANTER_EMAILID');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_EMAILID']) ? $customer_profile['GUARANTER_EMAILID'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_EMAILID = array(
                                    'name' => 'GUARANTER_EMAILID',
                                    'id' => 'GUARANTER_EMAILID',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_EMAILID);
                                echo form_error("GUARANTER_EMAILID");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_HOME_PHONE" class="col-md-4 control-label"> HOME PHONE</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_HOME_PHONE');
                                } else {
                                    $value = set_value('GUARANTER_HOME_PHONE');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_HOME_PHONE']) ? $customer_profile['GUARANTER_HOME_PHONE'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_HOME_PHONE = array(
                                    'name' => 'GUARANTER_HOME_PHONE',
                                    'id' => 'GUARANTER_HOME_PHONE',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_HOME_PHONE);
                                echo form_error("GUARANTER_HOME_PHONE");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_HAND_PHONE" class="col-md-4 control-label"> HAND PHONE</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_HAND_PHONE');
                                } else {
                                    $value = set_value('GUARANTER_HAND_PHONE');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_HAND_PHONE']) ? $customer_profile['GUARANTER_HAND_PHONE'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_HAND_PHONE = array(
                                    'name' => 'GUARANTER_HAND_PHONE',
                                    'id' => 'GUARANTER_HAND_PHONE',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_HAND_PHONE);
                                echo form_error("GUARANTER_HAND_PHONE");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_ADDRESS" class="col-md-4 control-label"> ADDRESS</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_ADDRESS');
                                } else {
                                    $value = set_value('GUARANTER_ADDRESS');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_ADDRESS']) ? $customer_profile['GUARANTER_ADDRESS'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_ADDRESS = array(
                                    'name' => 'GUARANTER_ADDRESS',
                                    'id' => 'GUARANTER_ADDRESS',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_textarea($GUARANTER_ADDRESS);
                                echo form_error("GUARANTER_ADDRESS");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-left:0px;">							 	
                <div class="box box-info" style="padding-left:0px;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Other Information</h3>
                    </div>
                    <div class="col-md-11 col-md-offset-1" style="padding-left:10px;">
                        <div class="form-group">
                            <label for="GUARANTER_DOB" class="col-md-4 control-label"> DOB</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_DOB');
                                } else {
                                    $value = set_value('GUARANTER_DOB');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_DOB']) ? date("Y-m-d", strtotime($customer_profile['GUARANTER_DOB'])) : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_DOB = array(
                                    'name' => 'GUARANTER_DOB',
                                    'id' => 'GUARANTER_DOB',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control date-picker  dob-class"
                                );

                                echo form_input($GUARANTER_DOB);
                                echo form_error("GUARANTER_DOB");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_AGE" class="col-md-4 control-label"> AGE</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_AGE');
                                } else {
                                    $value = set_value('GUARANTER_AGE');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_AGE']) ? $customer_profile['GUARANTER_AGE'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_AGE = array(
                                    'name' => 'GUARANTER_AGE',
                                    'id' => 'GUARANTER_AGE',
                                    'value' => $namevalue,
                                    'readonly' => true,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_AGE);
                                echo form_error("GUARANTER_AGE");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_NO_OF_CHILDREN" class="col-md-4 control-label"> NO OF CHILDREN</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_NO_OF_CHILDREN');
                                } else {
                                    $value = set_value('GUARANTER_NO_OF_CHILDREN');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_NO_OF_CHILDREN']) ? $customer_profile['GUARANTER_NO_OF_CHILDREN'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_NO_OF_CHILDREN = array(
                                    'name' => 'GUARANTER_NO_OF_CHILDREN',
                                    'id' => 'GUARANTER_NO_OF_CHILDREN',
                                    'value' => $namevalue,
                                    'maxlength' => '50',
                                    "class" => "form-control"
                                );

                                echo form_input($GUARANTER_NO_OF_CHILDREN);
                                echo form_error("GUARANTER_NO_OF_CHILDREN");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_GENDER" class="col-md-4 control-label"> GENDER</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_GENDER');
                                } else {
                                    $value = set_value('GUARANTER_GENDER');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_GENDER']) ? $customer_profile['GUARANTER_GENDER'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $GUARANTER_GENDER_values = array(
                                    '' => "Select",
                                    '1' => 'Male',
                                    '2' => 'Female',
                                );
                                $js = 'id="GUARANTER_GENDER" class="form-control"';
                                echo form_dropdown('GUARANTER_GENDER', $GUARANTER_GENDER_values, $namevalue, $js);
                                echo form_error("GUARANTER_GENDER");
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="GUARANTER_RACE_ID" class="col-md-4 control-label"> RACE</label>
                            <div class="col-md-8">
                                <?php
                                if (!isset($customer_profile)) {
                                    $namevalue = set_value('GUARANTER_RACE_ID');
                                } else {
                                    $value = set_value('GUARANTER_RACE_ID');
                                    if (empty($value)) {
                                        $namevalue = isset($customer_profile['GUARANTER_RACE_ID']) ? $customer_profile['GUARANTER_RACE_ID'] : "";
                                    } else {
                                        $namevalue = $value;
                                    }
                                }
                                $options = array("" => "Select");
                                foreach ($all_masters_race as $masters_race) {
                                    $options[$masters_race['RACE_ID']] = $masters_race['RACE_NAME'];
                                }
                                $js = 'id="GUARANTER_RACE_ID" class="form-control"';
                                echo form_dropdown('GUARANTER_RACE_ID', $options, $namevalue, $js);
                                echo form_error("GUARANTER_RACE_ID");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-left:0px;">
                <div class="box box-info" style="padding-bottom: 0px;border-top: 1px solid #ccc;padding-top: 0px;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Working Information</h3>
                    </div>
                </div>
                <div class="col-md-11 col-md-offset-1" style="padding-left:10px;">
                    <div class="form-group">
                        <label for="GUARANTER_COMPANY_NAME" class="col-md-4 control-label"> COMPANY NAME</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('GUARANTER_COMPANY_NAME');
                            } else {
                                $value = set_value('GUARANTER_COMPANY_NAME');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['GUARANTER_COMPANY_NAME']) ? $customer_profile['GUARANTER_COMPANY_NAME'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $options = array("" => "Select");
                            foreach ($all_masters_cust_comp_info as $masters_cust_comp_info) {
                                $options[$masters_cust_comp_info['COMPANY_ID']] = $masters_cust_comp_info['COMPANY_NAME'];
                            }
                            $js = 'id="GUARANTER_COMPANY_NAME" class="form-control"';
                            echo form_dropdown('GUARANTER_COMPANY_NAME', $options, $namevalue, $js);
                            echo form_error("GUARANTER_COMPANY_NAME");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="GUARANTER_OCCUPATION_DEPT" class="col-md-4 control-label"> OCCUPATION DEPT</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('GUARANTER_OCCUPATION_DEPT');
                            } else {
                                $value = set_value('GUARANTER_OCCUPATION_DEPT');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['GUARANTER_OCCUPATION_DEPT']) ? $customer_profile['GUARANTER_OCCUPATION_DEPT'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $GUARANTER_OCCUPATION_DEPT = array(
                                'name' => 'GUARANTER_OCCUPATION_DEPT',
                                'id' => 'GUARANTER_OCCUPATION_DEPT',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($GUARANTER_OCCUPATION_DEPT);
                            echo form_error("GUARANTER_OCCUPATION_DEPT");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="GUARANTER_YEARS_OF_SERVICE_YEAR" class="col-md-4 control-label"> YEARS OF SERVICE YEAR</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('GUARANTER_YEARS_OF_SERVICE_YEAR');
                            } else {
                                $value = set_value('GUARANTER_YEARS_OF_SERVICE_YEAR');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['GUARANTER_YEARS_OF_SERVICE_YEAR']) ? $customer_profile['GUARANTER_YEARS_OF_SERVICE_YEAR'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $GUARANTER_YEARS_OF_SERVICE_YEAR = array(
                                'name' => 'GUARANTER_YEARS_OF_SERVICE_YEAR',
                                'id' => 'GUARANTER_YEARS_OF_SERVICE_YEAR',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($GUARANTER_YEARS_OF_SERVICE_YEAR);
                            echo form_error("GUARANTER_YEARS_OF_SERVICE_YEAR");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="GUARANTER_YEARS_OF_SERVICE_MONTH" class="col-md-4 control-label"> YEARS OF SERVICE MONTH</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('GUARANTER_YEARS_OF_SERVICE_MONTH');
                            } else {
                                $value = set_value('GUARANTER_YEARS_OF_SERVICE_MONTH');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['GUARANTER_YEARS_OF_SERVICE_MONTH']) ? $customer_profile['GUARANTER_YEARS_OF_SERVICE_MONTH'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $GUARANTER_YEARS_OF_SERVICE_MONTH = array(
                                'name' => 'GUARANTER_YEARS_OF_SERVICE_MONTH',
                                'id' => 'GUARANTER_YEARS_OF_SERVICE_MONTH',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($GUARANTER_YEARS_OF_SERVICE_MONTH);
                            echo form_error("GUARANTER_YEARS_OF_SERVICE_MONTH");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="GUARANTER_SALARY" class="col-md-4 control-label"> SALARY</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('GUARANTER_SALARY');
                            } else {
                                $value = set_value('GUARANTER_SALARY');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['GUARANTER_SALARY']) ? $customer_profile['GUARANTER_SALARY'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $GUARANTER_SALARY = array(
                                'name' => 'GUARANTER_SALARY',
                                'id' => 'GUARANTER_SALARY',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($GUARANTER_SALARY);
                            echo form_error("GUARANTER_SALARY");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="GUARANTER_OFFICE_PHONE1" class="col-md-4 control-label"> OFFICE PHONE</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('GUARANTER_OFFICE_PHONE1');
                            } else {
                                $value = set_value('GUARANTER_OFFICE_PHONE1');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['GUARANTER_OFFICE_PHONE1']) ? $customer_profile['GUARANTER_OFFICE_PHONE1'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $GUARANTER_OFFICE_PHONE1 = array(
                                'name' => 'GUARANTER_OFFICE_PHONE1',
                                'id' => 'GUARANTER_OFFICE_PHONE1',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($GUARANTER_OFFICE_PHONE1);
                            echo form_error("GUARANTER_OFFICE_PHONE1");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="GUARANTER_OFFICE_PHONE2" class="col-md-4 control-label"> OFFICE Alt PHONE</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('GUARANTER_OFFICE_PHONE2');
                            } else {
                                $value = set_value('GUARANTER_OFFICE_PHONE2');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['GUARANTER_OFFICE_PHONE2']) ? $customer_profile['GUARANTER_OFFICE_PHONE2'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $GUARANTER_OFFICE_PHONE2 = array(
                                'name' => 'GUARANTER_OFFICE_PHONE2',
                                'id' => 'GUARANTER_OFFICE_PHONE2',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_input($GUARANTER_OFFICE_PHONE2);
                            echo form_error("GUARANTER_OFFICE_PHONE2");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="GUARANTER_OFFICE_ADDRESS" class="col-md-4 control-label"> OFFICE ADDRESS</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('GUARANTER_OFFICE_ADDRESS');
                            } else {
                                $value = set_value('GUARANTER_OFFICE_ADDRESS');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['GUARANTER_OFFICE_ADDRESS']) ? $customer_profile['GUARANTER_OFFICE_ADDRESS'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $GUARANTER_OFFICE_ADDRESS = array(
                                'name' => 'GUARANTER_OFFICE_ADDRESS',
                                'id' => 'GUARANTER_OFFICE_ADDRESS',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_textarea($GUARANTER_OFFICE_ADDRESS);
                            echo form_error("GUARANTER_OFFICE_ADDRESS");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<h1>Verification Info</h1>
<fieldset>
    <div class="row box">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Verification Information</h3>
                </div>
                <div class="col-md-6" style="padding-left:30px;">
                    <div class="form-group">
                        <label for="CUSTOMER_POPUP_NOTES" class="col-md-4 control-label">CUSTOMER POPUP NOTES</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('CUSTOMER_POPUP_NOTES');
                            } else {
                                $value = set_value('CUSTOMER_POPUP_NOTES');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['CUSTOMER_POPUP_NOTES']) ? $customer_profile['CUSTOMER_POPUP_NOTES'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $CUSTOMER_POPUP_NOTES = array(
                                'name' => 'CUSTOMER_POPUP_NOTES',
                                'id' => 'CUSTOMER_POPUP_NOTES',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_textarea($CUSTOMER_POPUP_NOTES);
                            echo form_error("CUSTOMER_POPUP_NOTES");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="VERIFICATION_HR_INFO" class="col-md-4 control-label"> HR INFO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('VERIFICATION_HR_INFO');
                            } else {
                                $value = set_value('VERIFICATION_HR_INFO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['VERIFICATION_HR_INFO']) ? $customer_profile['VERIFICATION_HR_INFO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $VERIFICATION_HR_INFO = array(
                                'name' => 'VERIFICATION_HR_INFO',
                                'id' => 'VERIFICATION_HR_INFO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_textarea($VERIFICATION_HR_INFO);
                            echo form_error("VERIFICATION_HR_INFO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="VERIFICATION_SPOUSE_INFO" class="col-md-4 control-label"> SPOUSE INFO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('VERIFICATION_SPOUSE_INFO');
                            } else {
                                $value = set_value('VERIFICATION_SPOUSE_INFO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['VERIFICATION_SPOUSE_INFO']) ? $customer_profile['VERIFICATION_SPOUSE_INFO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $VERIFICATION_SPOUSE_INFO = array(
                                'name' => 'VERIFICATION_SPOUSE_INFO',
                                'id' => 'VERIFICATION_SPOUSE_INFO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_textarea($VERIFICATION_SPOUSE_INFO);
                            echo form_error("VERIFICATION_SPOUSE_INFO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="VERIFICATION_REFERENCE_INFO" class="col-md-4 control-label"> REFERENCE INFO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('VERIFICATION_REFERENCE_INFO');
                            } else {
                                $value = set_value('VERIFICATION_REFERENCE_INFO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['VERIFICATION_REFERENCE_INFO']) ? $customer_profile['VERIFICATION_REFERENCE_INFO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $VERIFICATION_REFERENCE_INFO = array(
                                'name' => 'VERIFICATION_REFERENCE_INFO',
                                'id' => 'VERIFICATION_REFERENCE_INFO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_textarea($VERIFICATION_REFERENCE_INFO);
                            echo form_error("VERIFICATION_REFERENCE_INFO");
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding-left:30px;">
                    <div class="form-group">
                        <label for="VERIFICATION_OTHER_INFO" class="col-md-4 control-label"> OTHER INFO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('VERIFICATION_OTHER_INFO');
                            } else {
                                $value = set_value('VERIFICATION_OTHER_INFO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['VERIFICATION_OTHER_INFO']) ? $customer_profile['VERIFICATION_OTHER_INFO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $VERIFICATION_OTHER_INFO = array(
                                'name' => 'VERIFICATION_OTHER_INFO',
                                'id' => 'VERIFICATION_OTHER_INFO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_textarea($VERIFICATION_OTHER_INFO);
                            echo form_error("VERIFICATION_OTHER_INFO");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="VERIFICATION_CTOS_INFO" class="col-md-4 control-label"> CTOS INFO</label>
                        <div class="col-md-8">
                            <?php
                            if (!isset($customer_profile)) {
                                $namevalue = set_value('VERIFICATION_CTOS_INFO');
                            } else {
                                $value = set_value('VERIFICATION_CTOS_INFO');
                                if (empty($value)) {
                                    $namevalue = isset($customer_profile['VERIFICATION_CTOS_INFO']) ? $customer_profile['VERIFICATION_CTOS_INFO'] : "";
                                } else {
                                    $namevalue = $value;
                                }
                            }
                            $VERIFICATION_CTOS_INFO = array(
                                'name' => 'VERIFICATION_CTOS_INFO',
                                'id' => 'VERIFICATION_CTOS_INFO',
                                'value' => $namevalue,
                                'maxlength' => '50',
                                "class" => "form-control"
                            );

                            echo form_textarea($VERIFICATION_CTOS_INFO);
                            echo form_error("VERIFICATION_CTOS_INFO");
                            ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="VERIFICATION_COMPLETED" class="col-md-4 control-label"> COMPLETED</label>
                        <div class="col-md-8">
                            <input type="checkbox" name="VERIFICATION_COMPLETED" value="1"  id="VERIFICATION_COMPLETED" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<h1>Contact us</h1>
<fieldset>
    <div class="row box">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title" style="padding-right:10px;">Contact Information</h3>
                    <button type="button" class="btn btn-primary btn-xs addMore">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div class="nav-tabs-custom">
                    <?php
                    $address_count = count($customer_address);
                    if ($address_count > 0) {
                        ?>
                        <ul class="nav nav-tabs custom-tabs" id="contactUl">
                            <?php for ($i = 1; $i <= $address_count; $i++) { ?>
                                <li class="<?php echo ($i == $address_count) ? "active" : ""; ?>" id="contact_li_<?php echo $i; ?>" data-tab-id="<?php echo $i; ?>"><a href="#contact_<?php echo $i; ?>" data-toggle="tab" aria-expanded="true">Contact <?php echo $i; ?>
                                        <?php if ($i != 1) { ?>
                                            <button type="button" onclick="closes(this.id, 'contact');" class="pull-right btn-box-tool" id="<?php echo $i; ?>"><i class="fa fa-times"></i></button>
                                        <?php } ?>
                                    </a></li>
                            <?php } ?>
                        </ul>
                        <?php
                        for ($i = 1; $i <= $address_count; $i++) {
                            ?>
                            <div class="tab-content <?php echo ($i == $address_count) ? "contactContent" : ""; ?> contact-tab" style="padding:0px;">
                                <div class="tab-pane <?php echo ($i == $address_count) ? "active" : ""; ?>" id="contact_<?php echo $i; ?>" style="margin:10px;">
                                    <div class="col-md-6" style="padding-left:30px;">
                                        <div class="form-group">
                                            <label for="CUSTOMER_POPUP_NOTES" class="col-md-4 control-label">Address</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_address)) {
                                                    $namevalue = set_value('CONTACT_Address');
                                                } else {
                                                    $value = set_value('CONTACT_Address');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_address[$i - 1]['ACTUAL_ADDRESS']) ? $customer_address[$i - 1]['ACTUAL_ADDRESS'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $CONTACT_Address = array(
                                                    'name' => 'CONTACT_Address[]',
                                                    'id' => 'CONTACT_Address',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_textarea($CONTACT_Address);
                                                echo form_error("CONTACT_Address");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="CONTACT_City" class="col-md-4 control-label"> City</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_address)) {
                                                    $namevalue = set_value('CONTACT_City');
                                                } else {
                                                    $value = set_value('CONTACT_City');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_address[$i - 1]['CITY']) ? $customer_address[$i - 1]['CITY'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $CONTACT_City = array(
                                                    'name' => 'CONTACT_City[]',
                                                    'id' => 'CONTACT_City',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($CONTACT_City);
                                                echo form_error("CONTACT_City");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="CONTACT_State" class="col-md-4 control-label"> State</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_address)) {
                                                    $namevalue = set_value('CONTACT_State');
                                                } else {
                                                    $value = set_value('CONTACT_State');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_address[$i - 1]['STATE_ID']) ? $customer_address[$i - 1]['STATE_ID'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $CONTACT_State = array(
                                                    'name' => 'CONTACT_State[]',
                                                    'id' => 'CONTACT_State',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($CONTACT_State);
                                                echo form_error("CONTACT_State");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="CONTACT_code" class="col-md-4 control-label"> Post code</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_address)) {
                                                    $namevalue = set_value('CONTACT_code');
                                                } else {
                                                    $value = set_value('CONTACT_code');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_address[$i - 1]['POSTCODE']) ? $customer_address[$i - 1]['POSTCODE'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $CONTACT_code = array(
                                                    'name' => 'CONTACT_code[]',
                                                    'id' => 'CONTACT_code',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($CONTACT_code);
                                                echo form_error("CONTACT_code");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-left:30px;">
                                        <div class="form-group">
                                            <label for="CONTACT_phone1" class="col-md-4 control-label"> Phone</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_address)) {
                                                    $namevalue = set_value('CONTACT_phone1');
                                                } else {
                                                    $value = set_value('CONTACT_phone1');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_address[$i - 1]['PHONE1']) ? $customer_address[$i - 1]['PHONE1'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $CONTACT_phone1 = array(
                                                    'name' => 'CONTACT_phone1[]',
                                                    'id' => 'CONTACT_phone1',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($CONTACT_phone1);
                                                echo form_error("CONTACT_phone1");
                                                ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone2" class="col-md-4 control-label"> Alt Phone</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_address)) {
                                                    $namevalue = set_value('CONTACT_alt_phone');
                                                } else {
                                                    $value = set_value('CONTACT_alt_phone');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_address[$i - 1]['PHONE2']) ? $customer_address[$i - 1]['PHONE2'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $CONTACT_alt_phone = array(
                                                    'name' => 'CONTACT_alt_phone[]',
                                                    'id' => 'CONTACT_alt_phone',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($CONTACT_alt_phone);
                                                echo form_error("CONTACT_alt_phone");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fax" class="col-md-4 control-label"> Fax</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_address)) {
                                                    $namevalue = set_value('CONTACT_fax');
                                                } else {
                                                    $value = set_value('CONTACT_fax');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_address[$i - 1]['FAX']) ? $customer_address[$i - 1]['FAX'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $CONTACT_fax = array(
                                                    'name' => 'CONTACT_fax[]',
                                                    'id' => 'CONTACT_fax',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($CONTACT_fax);
                                                echo form_error("CONTACT_fax");
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <ul class="nav nav-tabs" id="contactUl">
                            <li class="active"><a href="#contact_1" data-toggle="tab" aria-expanded="true">Contact 1</a></li>
                        </ul>
                        <div class="tab-content contactContent" style="padding:0px;">
                            <div class="tab-pane active" id="contact_1" style="margin:10px;">
                                <div class="col-md-6" style="padding-left:30px;">
                                    <div class="form-group">
                                        <label for="CUSTOMER_POPUP_NOTES" class="col-md-4 control-label">Address</label>
                                        <div class="col-md-8">
                                            <?php
                                            $CONTACT_Address = array(
                                                'name' => 'CONTACT_Address[]',
                                                'id' => 'CONTACT_Address',
                                                'value' => set_value('CONTACT_Address'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_textarea($CONTACT_Address);
                                            echo form_error("CONTACT_Address");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="CONTACT_City" class="col-md-4 control-label"> City</label>
                                        <div class="col-md-8">
                                            <?php
                                            $CONTACT_City = array(
                                                'name' => 'CONTACT_City[]',
                                                'id' => 'CONTACT_City',
                                                'value' => set_value('CONTACT_City'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($CONTACT_City);
                                            echo form_error("CONTACT_City");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="CONTACT_State" class="col-md-4 control-label"> State</label>
                                        <div class="col-md-8">
                                            <?php
                                            $CONTACT_State = array(
                                                'name' => 'CONTACT_State[]',
                                                'id' => 'CONTACT_State',
                                                'value' => set_value('CONTACT_State'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($CONTACT_State);
                                            echo form_error("CONTACT_State");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="CONTACT_code" class="col-md-4 control-label"> Post code</label>
                                        <div class="col-md-8">
                                            <?php
                                            $CONTACT_code = array(
                                                'name' => 'CONTACT_code[]',
                                                'id' => 'CONTACT_code',
                                                'value' => set_value('CONTACT_code'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($CONTACT_code);
                                            echo form_error("CONTACT_code");
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left:30px;">
                                    <div class="form-group">
                                        <label for="CONTACT_phone1" class="col-md-4 control-label"> Phone</label>
                                        <div class="col-md-8">
                                            <?php
                                            $CONTACT_phone1 = array(
                                                'name' => 'CONTACT_phone1[]',
                                                'id' => 'CONTACT_phone1',
                                                'value' => set_value('CONTACT_phone1'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($CONTACT_phone1);
                                            echo form_error("CONTACT_phone1");
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone2" class="col-md-4 control-label"> Alt Phone</label>
                                        <div class="col-md-8">
                                            <?php
                                            $CONTACT_alt_phone = array(
                                                'name' => 'CONTACT_alt_phone[]',
                                                'id' => 'CONTACT_alt_phone',
                                                'value' => set_value('CONTACT_alt_phone'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($CONTACT_alt_phone);
                                            echo form_error("CONTACT_alt_phone");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fax" class="col-md-4 control-label"> Fax</label>
                                        <div class="col-md-8">
                                            <?php
                                            $CONTACT_fax = array(
                                                'name' => 'CONTACT_fax[]',
                                                'id' => 'CONTACT_fax',
                                                'value' => set_value('CONTACT_fax'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($CONTACT_fax);
                                            echo form_error("CONTACT_fax");
                                            ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<h1>References</h1>
<fieldset>
    <div class="row box">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title" style="padding-right:10px;">Reference Information</h3>
                    <button type="button" class="btn btn-primary btn-xs addMoreReference">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div class="nav-tabs-custom">
                    <?php
                    $reference_count = count($customer_reference);
                    if ($reference_count > 0) {
                        ?>
                        <ul class="nav nav-tabs custom-tabs" id="referenceUl">
                            <?php for ($i = 1; $i <= $reference_count; $i++) { ?>
                                <li class="<?php echo ($i == $reference_count) ? "active" : ""; ?>" id="reference_li_<?php echo $i; ?>" data-tab-id="<?php echo $i; ?>"><a href="#reference_<?php echo $i; ?>" data-toggle="tab" aria-expanded="true">Reference <?php echo $i; ?>
                                        <?php if ($i != 1) { ?>
                                            <button type="button" onclick="closes(this.id, 'reference');" class="pull-right btn-box-tool" id="<?php echo $i; ?>"><i class="fa fa-times"></i></button>
                                        <?php } ?>
                                    </a></li>
                            <?php } ?>    
                        </ul>
                        <?php
                        for ($i = 1; $i <= $reference_count; $i++) {
                            ?>
                            <div class="tab-content <?php echo ($i == $reference_count) ? "referenceContent" : ""; ?> reference-tab" style="padding:0px;">
                                <div class="tab-pane <?php echo ($i == $reference_count) ? "active" : ""; ?>" id="reference_<?php echo $i; ?>" style="margin:10px;">
                                    <div class="col-md-6" style="padding-left:30px;">
                                        <div class="form-group">
                                            <label for="REFERENCE_NAME" class="col-md-4 control-label">REFERENCE NAME</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERENCE_NAME');
                                                } else {
                                                    $value = set_value('REFERENCE_NAME');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['REFERENCE_NAME']) ? $customer_reference[$i - 1]['REFERENCE_NAME'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERENCE_NAME = array(
                                                    'name' => 'REFERENCE_NAME[]',
                                                    'id' => 'REFERENCE_NAME',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control required"
                                                );

                                                echo form_input($REFERENCE_NAME);
                                                echo form_error("REFERENCE_NAME");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="REFERENCE_IDNO" class="col-md-4 control-label">REFERENCE IDNO</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERENCE_IDNO');
                                                } else {
                                                    $value = set_value('REFERENCE_IDNO');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['REFERENCE_IDNO']) ? $customer_reference[$i - 1]['REFERENCE_IDNO'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERENCE_IDNO = array(
                                                    'name' => 'REFERENCE_IDNO[]',
                                                    'id' => 'REFERENCE_IDNO',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control required"
                                                );

                                                echo form_input($REFERENCE_IDNO);
                                                echo form_error("REFERENCE_IDNO");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="REFERENCE_RELATION" class="col-md-4 control-label">REFERENCE RELATION</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERENCE_RELATION');
                                                } else {
                                                    $value = set_value('REFERENCE_RELATION');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['REFERENCE_RELATION']) ? $customer_reference[$i - 1]['REFERENCE_RELATION'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERENCE_RELATION = array(
                                                    'name' => 'REFERENCE_RELATION[]',
                                                    'id' => 'REFERENCE_RELATION',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($REFERENCE_RELATION);
                                                echo form_error("REFERENCE_RELATION");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="REFERECE_ADDRESS_KEY" class="col-md-4 control-label">ADDRESS KEY</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERECE_ADDRESS_KEY');
                                                } else {
                                                    $value = set_value('REFERECE_ADDRESS_KEY');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['ADDRESS_KEY']) ? $customer_reference[$i - 1]['ADDRESS_KEY'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERECE_ADDRESS_KEY = array(
                                                    'name' => 'REFERECE_ADDRESS_KEY[]',
                                                    'id' => 'REFERECE_ADDRESS_KEY',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($REFERECE_ADDRESS_KEY);
                                                echo form_error("REFERECE_ADDRESS_KEY");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="REFERECE_ACTUAL_ADDRESS" class="col-md-4 control-label">ACTUAL ADDRESS</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERECE_ACTUAL_ADDRESS');
                                                } else {
                                                    $value = set_value('REFERECE_ACTUAL_ADDRESS');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['ACTUAL_ADDRESS']) ? $customer_reference[$i - 1]['ACTUAL_ADDRESS'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERECE_ACTUAL_ADDRESS = array(
                                                    'name' => 'REFERECE_ACTUAL_ADDRESS[]',
                                                    'id' => 'REFERECE_ACTUAL_ADDRESS',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_textarea($REFERECE_ACTUAL_ADDRESS);
                                                echo form_error("REFERECE_ACTUAL_ADDRESS");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="REFERECE_CITY" class="col-md-4 control-label">CITY</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERECE_CITY');
                                                } else {
                                                    $value = set_value('REFERECE_CITY');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['CITY']) ? $customer_reference[$i - 1]['CITY'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERECE_CITY = array(
                                                    'name' => 'REFERECE_CITY[]',
                                                    'id' => 'REFERECE_CITY',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($REFERECE_CITY);
                                                echo form_error("REFERECE_CITY");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-left:30px;">
                                        <div class="form-group">
                                            <label for="REFERECE_STATE_ID" class="col-md-4 control-label">STATE ID</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERECE_STATE_ID');
                                                } else {
                                                    $value = set_value('REFERECE_STATE_ID');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['STATE_ID']) ? $customer_reference[$i - 1]['STATE_ID'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERECE_STATE_ID = array(
                                                    'name' => 'REFERECE_STATE_ID[]',
                                                    'id' => 'REFERECE_STATE_ID',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($REFERECE_STATE_ID);
                                                echo form_error("REFERECE_STATE_ID");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="REFERECE_POSTCODE" class="col-md-4 control-label">POSTCODE</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERECE_POSTCODE');
                                                } else {
                                                    $value = set_value('REFERECE_POSTCODE');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['POSTCODE']) ? $customer_reference[$i - 1]['POSTCODE'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERECE_POSTCODE = array(
                                                    'name' => 'REFERECE_POSTCODE[]',
                                                    'id' => 'REFERECE_POSTCODE',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($REFERECE_POSTCODE);
                                                echo form_error("REFERECE_POSTCODE");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="REFERECE_PHONE1" class="col-md-4 control-label">PHONE1</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERECE_PHONE1');
                                                } else {
                                                    $value = set_value('REFERECE_PHONE1');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['PHONE1']) ? $customer_reference[$i - 1]['PHONE1'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERECE_PHONE1 = array(
                                                    'name' => 'REFERECE_PHONE1[]',
                                                    'id' => 'REFERECE_PHONE1',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($REFERECE_PHONE1);
                                                echo form_error("REFERECE_PHONE1");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="PHONE2" class="col-md-4 control-label">PHONE2</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERECE_PHONE2');
                                                } else {
                                                    $value = set_value('REFERECE_PHONE2');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['PHONE2']) ? $customer_reference[$i - 1]['PHONE2'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERECE_PHONE2 = array(
                                                    'name' => 'REFERECE_PHONE2[]',
                                                    'id' => 'REFERECE_PHONE2',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($REFERECE_PHONE2);
                                                echo form_error("REFERECE_PHONE2");
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="FAX" class="col-md-4 control-label">FAX</label>
                                            <div class="col-md-8">
                                                <?php
                                                if (!isset($customer_reference)) {
                                                    $namevalue = set_value('REFERECE_FAX');
                                                } else {
                                                    $value = set_value('REFERECE_FAX');
                                                    if (empty($value)) {
                                                        $namevalue = isset($customer_reference[$i - 1]['FAX']) ? $customer_reference[$i - 1]['FAX'] : "";
                                                    } else {
                                                        $namevalue = $value;
                                                    }
                                                }
                                                $REFERECE_FAX = array(
                                                    'name' => 'REFERECE_FAX[]',
                                                    'id' => 'REFERECE_FAX',
                                                    'value' => $namevalue,
                                                    'maxlength' => '50',
                                                    "class" => "form-control"
                                                );

                                                echo form_input($REFERECE_FAX);
                                                echo form_error("REFERECE_FAX");
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                    } else {
                        ?>
                        <ul class="nav nav-tabs" id="referenceUl">
                            <li class="active"><a href="#reference_1" data-toggle="tab" aria-expanded="true">Reference 1</a></li>
                        </ul>
                        <div class="tab-content referenceContent" style="padding:0px;">
                            <div class="tab-pane active" id="reference_1" style="margin:10px;">
                                <div class="col-md-6" style="padding-left:30px;">
                                    <div class="form-group">
                                        <label for="REFERENCE_NAME" class="col-md-4 control-label">REFERENCE NAME</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERENCE_NAME = array(
                                                'name' => 'REFERENCE_NAME[]',
                                                'id' => 'REFERENCE_NAME',
                                                'value' => set_value('REFERENCE_NAME'),
                                                'maxlength' => '50',
                                                "class" => "form-control required"
                                            );

                                            echo form_input($REFERENCE_NAME);
                                            echo form_error("REFERENCE_NAME");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="REFERENCE_IDNO" class="col-md-4 control-label">REFERENCE IDNO</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERENCE_IDNO = array(
                                                'name' => 'REFERENCE_IDNO[]',
                                                'id' => 'REFERENCE_IDNO',
                                                'value' => set_value('REFERENCE_IDNO'),
                                                'maxlength' => '50',
                                                "class" => "form-control required"
                                            );

                                            echo form_input($REFERENCE_IDNO);
                                            echo form_error("REFERENCE_IDNO");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="REFERENCE_RELATION" class="col-md-4 control-label">REFERENCE RELATION</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERENCE_RELATION = array(
                                                'name' => 'REFERENCE_RELATION[]',
                                                'id' => 'REFERENCE_RELATION',
                                                'value' => set_value('REFERENCE_RELATION'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($REFERENCE_RELATION);
                                            echo form_error("REFERENCE_RELATION");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="REFERECE_ADDRESS_KEY" class="col-md-4 control-label">ADDRESS KEY</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERECE_ADDRESS_KEY = array(
                                                'name' => 'REFERECE_ADDRESS_KEY[]',
                                                'id' => 'REFERECE_ADDRESS_KEY',
                                                'value' => set_value('REFERECE_ADDRESS_KEY'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($REFERECE_ADDRESS_KEY);
                                            echo form_error("REFERECE_ADDRESS_KEY");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="REFERECE_ACTUAL_ADDRESS" class="col-md-4 control-label">ACTUAL ADDRESS</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERECE_ACTUAL_ADDRESS = array(
                                                'name' => 'REFERECE_ACTUAL_ADDRESS[]',
                                                'id' => 'REFERECE_ACTUAL_ADDRESS',
                                                'value' => set_value('REFERECE_ACTUAL_ADDRESS'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_textarea($REFERECE_ACTUAL_ADDRESS);
                                            echo form_error("REFERECE_ACTUAL_ADDRESS");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="REFERECE_CITY" class="col-md-4 control-label">CITY</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERECE_CITY = array(
                                                'name' => 'REFERECE_CITY[]',
                                                'id' => 'REFERECE_CITY',
                                                'value' => set_value('REFERECE_CITY'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($REFERECE_CITY);
                                            echo form_error("REFERECE_CITY");
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left:30px;">
                                    <div class="form-group">
                                        <label for="REFERECE_STATE_ID" class="col-md-4 control-label">STATE ID</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERECE_STATE_ID = array(
                                                'name' => 'REFERECE_STATE_ID[]',
                                                'id' => 'REFERECE_STATE_ID',
                                                'value' => set_value('REFERECE_STATE_ID'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($REFERECE_STATE_ID);
                                            echo form_error("REFERECE_STATE_ID");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="REFERECE_POSTCODE" class="col-md-4 control-label">POSTCODE</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERECE_POSTCODE = array(
                                                'name' => 'REFERECE_POSTCODE[]',
                                                'id' => 'REFERECE_POSTCODE',
                                                'value' => set_value('REFERECE_POSTCODE'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($REFERECE_POSTCODE);
                                            echo form_error("REFERECE_POSTCODE");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="REFERECE_PHONE1" class="col-md-4 control-label">PHONE1</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERECE_PHONE1 = array(
                                                'name' => 'REFERECE_PHONE1[]',
                                                'id' => 'REFERECE_PHONE1',
                                                'value' => set_value('REFERECE_PHONE1'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($REFERECE_PHONE1);
                                            echo form_error("REFERECE_PHONE1");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="PHONE2" class="col-md-4 control-label">PHONE2</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERECE_PHONE2 = array(
                                                'name' => 'REFERECE_PHONE2[]',
                                                'id' => 'REFERECE_PHONE2',
                                                'value' => set_value('REFERECE_PHONE2'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($REFERECE_PHONE2);
                                            echo form_error("REFERECE_PHONE2");
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="FAX" class="col-md-4 control-label">FAX</label>
                                        <div class="col-md-8">
                                            <?php
                                            $REFERECE_FAX = array(
                                                'name' => 'REFERECE_FAX[]',
                                                'id' => 'REFERECE_FAX',
                                                'value' => set_value('REFERECE_FAX'),
                                                'maxlength' => '50',
                                                "class" => "form-control"
                                            );

                                            echo form_input($REFERECE_FAX);
                                            echo form_error("REFERECE_FAX");
                                            ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<h1>Docs</h1>
<fieldset>
    <div class="row box">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title" style="padding-right:10px;">Upload Docs</h3>
                    <button type="button" class="btn btn-primary btn-xs addMoreDocs">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div class="reference col-md-12">
                    <input type="hidden" id="length_hidden" value="1"> 
                    <div class="col-md-4" style="padding-left:30px;">

                        <div class="form-group">
                            <label for="CUSTOMER_DOC_TYPE" class="col-md-4 control-label">Doc Name</label>

                            <div class="col-md-6">
                                <?php
                                $doc_TYPE_values = array(
                                    '' => "Select",
                                    '1' => 'AAdhar',
                                    '2' => 'Pan',
                                );
                                $name_value = set_value("CUSTOMER_DOC_TYPE");
                                $js = 'id="CUSTOMER_DOC_TYPE" class="form-control"';
                                echo form_dropdown('CUSTOMER_DOC_TYPE', $doc_TYPE_values, $name_value, $js);
                                echo form_error("CUSTOMER_DOC_TYPE");
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-left:30px;">
                        <div class="form-group">
                            <label for="CUSTOMER_TYPE" class="col-md-2 control-label">Upload</label>
                            <div class="col-md-8">
                                <input type="file" name="userFiles[]" style="position:relative;opacity:1;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<?php echo form_close(); ?>
<script type="text/javascript">
    function closes(id, type) {
        if (type == "contact") {
            $("#contact_li_" + id).remove();
            $("#contact_" + id).remove();
            $("#contact_li_" + (id - 1)).addClass("active");
            $("#contact_" + (id - 1)).addClass("active");
        }

        if (type == "reference") {
            $("#reference_li_" + id).remove();
            $("#reference_" + id).remove();
            $("#reference_li_" + (id - 1)).addClass("active");
            $("#reference_" + (id - 1)).addClass("active");
        }
    }
</script>