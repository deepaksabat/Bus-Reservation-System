<div class="form-group text-right">
    <?php if($this->permission->method('agent', 'create')->access()): ?>
    <button type="button" class="btn btn-primary btn-md" data-target="#add0" data-toggle="modal"><i class="fa fa-user-plus" aria-hidden="true"></i> <?php echo display('add_agent') ?></button>
    <?php endif; ?> 
</div>


<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail">

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>
                                <?php echo display('serial') ?>
                            </th>
                            <th>
                                <?php echo display('name') ?>
                            </th>
                            <th>
                                <?php echo display('agent_company_name') ?>
                            </th>
                            <th>
                                <?php echo display('agent_phone') ?>
                            </th>
                            <th>
                                <?php echo display('agent_email') ?>
                            </th>
                            <th>
                                <?php echo display('agent_picture') ?>
                            </th>
                            <th>
                                <?php echo display('action') ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($agen)) { ?>
                            <?php $sl = 1; ?>
                                <?php foreach ($agen as $query) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $sl; ?>
                                        </td>
                                        <td>
                                            <?php echo $query->agent_first_name.' '.$query->agent_second_name; ?>
                                        </td>
                                        <td>
                                            <?php echo $query->agent_company_name; ?>
                                        </td>
                                        <td>
                                            <?php echo $query->agent_phone; ?>
                                        </td>
                                        <td>
                                            <?php echo $query->agent_email; ?>
                                        </td>
                                        <td>
                                            <?php echo "<img src='" . base_url().$query->agent_picture."' width=60px; height=60px; class=img-thumbnail>";?>
                                        </td>

                                        <td> 
                                            <?php if($this->permission->method('agent','read')->access()): ?>
                                            <a href="<?php echo base_url("agent/agent_controller/agent_details/$query->agent_id") ?>" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                            <?php endif; ?>

                                            <?php if($this->permission->method('agent','update')->access()): ?>
                                            <a href="<?php echo base_url("agent/agent_controller/agent_update/$query->agent_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                            <?php endif; ?>

                                            <?php if($this->permission->method('agent','delete')->access()): ?>
                                            <a href="<?php echo base_url("agent/agent_controller/agent_delete/$query->agent_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-times" aria-hidden="true"></i>
                                            </a> 
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php $sl++; ?>
                                        <?php } ?>
                                            <?php } ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>

<div id="add0" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color:green; color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><strong><i class="fa fa-user-plus" aria-hidden="true"></i>
Add Agent</strong></center>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel">

                            <div class="panel-body">

                                <?= form_open_multipart('agent/agent_controller/create_agent') ?>
                                    <div class="form-group row">
                                        <div for="agent_first_name" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_first_name') ?> *
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="agent_first_name" class="form-control" type="text" placeholder="<?php echo display('agent_first_name') ?>" id="agent_first_name">
                                        </div>
                                        <div for="agent_second_name" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_second_name') ?> *</div>
                                        <div class="col-sm-4">
                                            <input name="agent_second_name" class="form-control" type="text" placeholder="<?php echo display('agent_second_name') ?>" id="agent_second_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div for="agent_phone" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_phone') ?> *</div>
                                        <div class="col-sm-4">
                                            <input name="agent_phone" class="form-control" type="text" placeholder="<?php echo display('agent_phone') ?>" id="agent_phone">
                                        </div>
                                        <div for="agent_mobile" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_mobile') ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="agent_mobile" class="form-control" type="text" placeholder="<?php echo display('agent_mobile') ?>" id="agent_mobile">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div for="agent_company_name" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_company_name') ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="agent_company_name" class="form-control" type="text" placeholder="<?php echo display('agent_company_name') ?>" id="agent_company_name">
                                        </div>
                                        <div for="agent_document_id" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_document_id') ?> </div>
                                        <div class="col-sm-4">
                                            <input name="agent_document_id" class="form-control" type="text" placeholder="<?php echo display('agent_document_id') ?>" id="agent_document_id">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div for="agent_pic_document" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_pic_document') ?> </div>
                                        <div class="col-sm-4">
                                            <input name="agent_pic_document" class="form-control" type="file" placeholder="<?php echo display('agent_pic_document') ?>" id="agent_pic_document">
                                        </div>
                                        <div for="agent_picture" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_picture') ?></div>
                                        <div class="col-sm-4">
                                            <input name="agent_picture" class="form-control" type="file" placeholder="<?php echo display('agent_picture') ?>" id="agent_picture">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div for="agent_email" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_email') ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="agent_email" class="form-control" type="email" placeholder="<?php echo display('agent_email') ?>" id="agent_email">
                                        </div>
                                        <div for="agent_address_line_1" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_address_line_1') ?> </div>
                                        <div class="col-sm-4">
                                            <textarea name="agent_address_line_1" class="form-control" placeholder="<?php echo display('agent_address_line_1') ?>" id="agent_address_line_1"></textarea>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div for="agent_address_line_2" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_address_line_2') ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <textarea name="agent_address_line_2" class="form-control" placeholder="<?php echo display('agent_address_line_2') ?>" id="agent_address_line_2"></textarea>
                                        </div>
                                        <div for="agent_country" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_country') ?></div>
                                        <div class="col-sm-4">
                                            <select name="agent_country" class="form-control" style="width: 100%">
                                                <option value="">Select Country</option>

                                                <option value="Afganistan" rel="">Afghanistan</option>
                                                <option value="Albania" rel="">Albania</option>
                                                <option value="Algeria" rel="">Algeria</option>
                                                <option value="American Samoa" rel="">American Samoa</option>
                                                <option value="Andorra" rel="">Andorra</option>
                                                <option value="Angola" rel="">Angola</option>
                                                <option value="Anguilla" rel="">Anguilla</option>
                                                <option value="Antigua &amp; Barbuda" rel="">Antigua &amp; Barbuda</option>
                                                <option value="Argentina" rel="">Argentina</option>
                                                <option value="Armenia" rel="">Armenia</option>
                                                <option value="Aruba" rel="">Aruba</option>
                                                <option value="Australia" rel="">Australia</option>
                                                <option value="Austria" rel="">Austria</option>
                                                <option value="Azerbaijan" rel="">Azerbaijan</option>
                                                <option value="Bahamas" rel="">Bahamas</option>
                                                <option value="Bahrain" rel="">Bahrain</option>
                                                <option value="Bangladesh" rel="">Bangladesh</option>
                                                <option value="Barbados" rel="">Barbados</option>
                                                <option value="Belarus" rel="">Belarus</option>
                                                <option value="Belgium" rel="">Belgium</option>
                                                <option value="Belize" rel="">Belize</option>
                                                <option value="Benin" rel="">Benin</option>
                                                <option value="Bermuda" rel="">Bermuda</option>
                                                <option value="Bhutan" rel="">Bhutan</option>
                                                <option value="Bolivia" rel="">Bolivia</option>
                                                <option value="Bonaire" rel="">Bonaire</option>
                                                <option value="Bosnia &amp; Herzegovina" rel="">Bosnia &amp; Herzegovina</option>
                                                <option value="Botswana" rel="">Botswana</option>
                                                <option value="Brazil" rel="">Brazil</option>
                                                <option value="British Indian Ocean Ter" rel="">British Indian Ocean Ter</option>
                                                <option value="Brunei" rel="">Brunei</option>
                                                <option value="Bulgaria" rel="">Bulgaria</option>
                                                <option value="Burkina Faso" rel="">Burkina Faso</option>
                                                <option value="Burundi" rel="">Burundi</option>
                                                <option value="Cambodia" rel="">Cambodia</option>
                                                <option value="Cameroon" rel="">Cameroon</option>
                                                <option value="Canada" rel="">Canada</option>
                                                <option value="Canary Islands" rel="">Canary Islands</option>
                                                <option value="Cape Verde" rel="">Cape Verde</option>
                                                <option value="Cayman Islands" rel="">Cayman Islands</option>
                                                <option value="Central African Republic" rel="">Central African Republic</option>
                                                <option value="Chad" rel="">Chad</option>
                                                <option value="Channel Islands" rel="">Channel Islands</option>
                                                <option value="Chile" rel="">Chile</option>
                                                <option value="China" rel="">China</option>
                                                <option value="Christmas Island" rel="">Christmas Island</option>
                                                <option value="Cocos Island" rel="">Cocos Island</option>
                                                <option value="Colombia" rel="">Colombia</option>
                                                <option value="Comoros" rel="">Comoros</option>
                                                <option value="Congo" rel="">Congo</option>
                                                <option value="Cook Islands" rel="">Cook Islands</option>
                                                <option value="Costa Rica" rel="">Costa Rica</option>
                                                <option value="Cote DIvoire" rel="">Cote D'Ivoire</option>
                                                <option value="Croatia" rel="">Croatia</option>
                                                <option value="Cuba" rel="" Cuba</option>
                                                    <option value="Curaco" rel="">Curacao</option>
                                                    <option value="Cyprus" rel="">Cyprus</option>
                                                    <option value="Czech Republic" rel="">Czech Republic</option>
                                                    <option value="Denmark" rel="">Denmark</option>
                                                    <option value="Djibouti" rel="">Djibouti</option>
                                                    <option value="Dominica" rel="">Dominica</option>
                                                    <option value="Dominican Republic" rel="">Dominican Republic</option>
                                                    <option value="East Timor" rel="">East Timor</option>
                                                    <option value="Ecuador" rel="">Ecuador</option>
                                                    <option value="Egypt" rel="">Egypt</option>
                                                    <option value="El Salvador" rel="">El Salvador</option>
                                                    <option value="Equatorial Guinea" rel="">Equatorial Guinea</option>
                                                    <option value="Eritrea" rel="">Eritrea</option>
                                                    <option value="Estonia" rel="">Estonia</option>
                                                    <option value="Ethiopia" rel="">Ethiopia</option>
                                                    <option value="Falkland Islands" rel="">Falkland Islands</option>
                                                    <option value="Faroe Islands" rel="">Faroe Islands</option>
                                                    <option value="Fiji" rel="">Fiji</option>
                                                    <option value="Finland" rel="">Finland</option>
                                                    <option value="France" rel="">France</option>
                                                    <option value="French Guiana" rel="">French Guiana</option>
                                                    <option value="French Polynesia" rel="">French Polynesia</option>
                                                    <option value="French Southern Ter">French Southern Ter</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany" rel="">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Great Britain">Great Britain</option>
                                                    <option value="Greece" rel="">Greece</option>
                                                    <option value="Greenland" rel="">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong" rel="">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India" rel="">India</option>
                                                    <option value="Indonesia" rel="">Indonesia</option>
                                                    <option value="Iran"> rel=""Iran</option>
                                                    <option value="Iraq" rel="">Iraq</option>
                                                    <option value="Ireland" rel="">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy" rel="">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan" rel="">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya" rel="">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea North" rel="">Korea North</option>
                                                    <option value="Korea Sout" rel="">Korea South</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Midway Islands">Midway Islands</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Nambia">Nambia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                    <option value="Nevis">Nevis</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau Island">Palau Island</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Phillipines" rel="">Philippines</option>
                                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar" rel="">Qatar</option>
                                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                    <option value="Republic of Serbia" rel="">Republic of Serbia</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia" rel="">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="St Barthelemy">St Barthelemy</option>
                                                    <option value="St Eustatius">St Eustatius</option>
                                                    <option value="St Helena">St Helena</option>
                                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                    <option value="St Lucia">St Lucia</option>
                                                    <option value="St Maarten">St Maarten</option>
                                                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                    <option value="Saipan">Saipan</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="Samoa American">Samoa American</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore" rel="">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa" rel="">South Africa</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka" rel="">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden" rel="">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tahiti">Tahiti</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand" rel="">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Erimates" rel="">United Arab Emirates</option>
                                                    <option value="United Kingdom" rel="">United Kingdom</option>
                                                    <option value="United States of America" rel="">United States of America</option>
                                                    <option value="Uraguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City State" rel="">Vatican City State</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                    <option value="Wake Island">Wake Island</option>
                                                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                    <option value="Yemen" rel="">Yemen</option>
                                                    <option value="Zaire">Zaire</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div for="agent_address_city" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_address_city') ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="agent_address_city" class="form-control" type="text" placeholder="<?php echo display('agent_address_city') ?>" id="agent_address_city">

                                        </div>
                                        <div for="agent_address_zip_code" class="col-sm-2 col-form-div">
                                            <?php echo display('agent_address_zip_code') ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="agent_address_zip_code" class="form-control" type="text" placeholder="<?php echo display('agent_address_zip_code') ?>" id="agent_address_zip_code">
                                        </div>

                                    </div>

                                    <div class="form-group text-right">
                                        <button type="reset" class="btn btn-primary w-md m-b-5">
                                            <?php echo display('reset') ?>
                                        </button>
                                        <button type="submit" class="btn btn-success w-md m-b-5">
                                            <?php echo display('add') ?>
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="modal-footer">

        </div>

    </div>

</div>
<style type="text/css">
    .cascade {
        display: none;
        width: 100%;
        height: 35px
    }
</style>

<script type="text/javascript">
    $(document).ready(function() {
        var $cat = $('select[name=agent_country]'),
            $items = $('select[name=agent_address_city]'),
            $zip = $('select[name=agent_address_zip_code]');
        $cat.change(function() {
            var $this = $(this).find(':selected'),
                rel = $this.attr('rel'),
                $set = $items.find('option.' + rel);

            if ($set.size() < 0) {
                $items.hide();
                return;
            }

            $items.show().find('option').hide();

            $set.show().first().prop('selected', true);
        });

        $items.change(function() {
            var $this = $(this).find(':selected'),
                rel = $this.attr('rel'),
                $set = $zip.find('option.' + rel);

            if ($set.size() < 0) {
                $zip.hide();
                return;
            }

            $zip.show().find('option').hide();

            $set.show().first().prop('selected', true);
        });

    });
</script>