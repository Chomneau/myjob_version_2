{{--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>--}}

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({ selector:'textarea',
        plugins: "link",
        menu: 'disable',
        plugins: "lists",
        toolbar: "numlist bullist",
        //plugin:"advlist",
        browser_spellcheck: true,
    });
</script>


    <div class="step1" style="margin-top: -20px">
            <div class="row">
                <div class="col-md-6 {{ $errors->has('companyName') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" name="companyName" class="form-control" value="{{ $company->companyName }}" required autofocus id="exampleInputEmail1" placeholder="company Name">
                </div>
                <div class="col-md-6 {{ $errors->has('logo') ? ' has-error' : '' }}">
                    <label for="logo">Company Logo</label>
                    <input type="file" name="logo" class="form-control" value="{{ $company->logo }}" placeholder="logo">
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 {{ $errors->has('contactPerson') ? ' has-error' : '' }}">
                    <label for="contactPerson">Contact person</label>
                    <input type="text" name="contactPerson" class="form-control" value="{{ $company->contactPerson }}" required autofocus placeholder="Contact person">
                </div>

                <div class="col-md-6 {{ $errors->has('type') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Type</label>
                    <select name="companyType" id="" class="form-control" required>

                        @if(count($companyType))
                            @foreach($companyType as $Types)
                              <option value="{{ $Types->id }}"
                              @if($company->companyType_id  == $Types->id) selected @endif
                              >{{ $Types->name }}</option>
                            @endforeach
                        @endif

                    </select>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 {{ $errors->has('industryType') ? ' has-error' : '' }}">
                    <label for="industryType">Industry type</label>
                    <select name="industryType" id="" class="form-control" required>

                        @if(count($industryType))
                            @foreach($industryType as $industry)
                                <option value="{{ $industry->id }}"
                                        @if($company->industryType_id  == $industry->id) selected @endif
                                >{{ $industry->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{ $company->email }}" required autofocus placeholder="Email" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 {{ $errors->has('employeeSize') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Number of Employees</label>
                    <select name="employeeSize" id="" class="form-control" required>
                        @if(count($employeeSize))
                            @foreach($employeeSize as $employeeSizes)
                                <option value="{{ $employeeSizes->id }}"
                                        @if($company->employeeSize_id  == $employeeSizes->id)
                                            selected
                                        @endif
                                >{{ $employeeSizes->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="col-md-6 {{ $errors->has('location') ? ' has-error' : '' }}">
                    <label for="location">Company location</label>
                    <select name="location" id="" class="form-control" required>
                        @if(count($location))
                            @foreach($location as $locations)
                                <option value="{{ $locations->id }}"
                                        @if($company->location_id  == $locations->id)
                                        selected
                                        @endif
                                >{{ $locations->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 {{ $errors->has('employeeSize') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="number" name="phone" class="form-control" value="{{ $company->phone }}" required autofocus placeholder="Phone" required>
                </div>
                <div class="col-md-6 {{ $errors->has('website') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Website (url)</label>
                    <input type="url" name="website" class="form-control" value="{{ $company->website }}" placeholder="company website (url)">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 {{ $errors->has('facebook_url') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Facebook page link (url)</label>
                    <input type="url" name="facebook_url" class="form-control" value="{{ $company->facebook_url }}"  autofocus placeholder="https://web.facebook.com/PaysJobKH/">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 {{ $errors->has('linkedin_url') ? ' has-error' : '' }}">
                    <label for="linkedin_url">Linkedin Link (url)</label>
                    <input type="url" name="linkedin_url" class="form-control" value="{{ $company->linkedin_url }}"  autofocus placeholder="https://www.linkedin.com">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 {{ $errors->has('twitter_url') ? ' has-error' : '' }}">
                    <label for="twitter_url">Twitter Link (url)</label>
                    <input type="url" name="twitter_url" class="form-control" value="{{ $company->twitter_url }}"  autofocus placeholder="https://twitter.com">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 {{ $errors->has('location_map') ? ' has-error' : '' }}">
                    <label for="location_map">Embed a Google Map (iframe)</label>
                    <input type="text" name="location_map" class="form-control" value="{{ $company->location_map }}"  autofocus placeholder="Embed a google map url">
                            
                   
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 {{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $company->address }}" required autofocus placeholder="Company address">
                </div>
            </div>

        <div class="row">
            <div class="col-md-12 {{ $errors->has('about') ? ' has-error' : '' }}">
                <label for="exampleInputEmail1">About Company</label>
                <textarea name="about" id="" cols="15" rows="8" class="form-control" >{{ $company->about }}</textarea>
            </div>
        </div>
    </div>
{{--end step 1--}}
        <div class="step-22">

        </div>

