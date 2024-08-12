@extends('layouts.app')

@section('title', 'Tactick - Statistics')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="iq-edit-list">
                        <ul class="iq-edit-profile row nav nav-pills">
                            <li class="col-md-3 p-0">
                                <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                                    Personal Information
                                </a>
                            </li>
                            <li class="col-md-3 p-0">
                                <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                    Change Password
                                </a>
                            </li>

                            <li class="col-md-3 p-0">
                                <a class="nav-link" data-bs-toggle="pill" href="#manage-contact">
                                    Manage Contact
                                </a>
                            </li>
                            <li class="col-md-3 p-0">
                                <a class="nav-link" data-bs-toggle="pill" href="#privacy">
                                    Privacy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="iq-edit-list-data">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-12">
                                            <div class="profile-img-edit">
                                                <img class="profile-pic" src="../assets/images/user/11.png"
                                                    alt="profile-pic">
                                                <div class="p-image">
                                                    <i class="ri-pencil-line upload-button text-white"></i>
                                                    <input class="file-upload" type="file" accept="image/*" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row align-items-center">
                                        <div class="form-group col-sm-6">
                                            <label for="fname" class="form-label">First Name:</label>
                                            <input type="text" class="form-control" id="fname" placeholder="Jhon">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="lname" class="form-label">Last Name:</label>
                                            <input type="text" class="form-control" id="lname" placeholder="doe">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="uname" class="form-label">User Name:</label>
                                            <input type="text" class="form-control" id="uname" placeholder="jhon.doe">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="cname" class="form-label">City:</label>
                                            <input type="text" class="form-control" id="cname" placeholder="Atlanta">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="form-label d-block">Gender:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio10" value="option1">
                                                <label class="form-check-label" for="inlineRadio10"> Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio11" value="option1">
                                                <label class="form-check-label" for="inlineRadio11">Female</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="dob" class="form-label">Date Of Birth:</label>
                                            <input class="form-control" id="dob" placeholder="1984-01-24">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="form-label">Marital Status:</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Single</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Divorced</option>
                                                <option>Separated </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="form-label">Age:</label>
                                            <select class="form-select" aria-label="Default select example 2">
                                                <option>46-62</option>
                                                <option>63 > </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="form-label">Country:</label>
                                            <select class="form-select" aria-label="Default select example 3">
                                                <option>Caneda</option>
                                                <option>Noida</option>
                                                <option selected="">USA</option>
                                                <option>India</option>
                                                <option>Africa</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="form-label">State:</label>
                                            <select class="form-select" aria-label="Default select example 4">
                                                <option>California</option>
                                                <option>Florida</option>
                                                <option selected="">Georgia</option>
                                                <option>Connecticut</option>
                                                <option>Louisiana</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label class="form-label">Address:</label>
                                            <textarea class="form-control" name="address" rows="5"
                                                style="line-height: 22px;">
                                                37 Cardinal Lane
                                                Petersburg, VA 23803
                                                United States of America
                                                Zip Code: 85001
                                                </textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button type="reset" class="btn bg-soft-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Change Password</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="cpass" class="form-label">Current Password:</label>
                                        <a href="#" class="float-end">Forgot Password</a>
                                        <input type="Password" class="form-control" id="cpass" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="npass" class="form-label">New Password:</label>
                                        <input type="Password" class="form-control" id="npass" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="vpass" class="form-label">Verify Password:</label>
                                        <input type="Password" class="form-control" id="vpass" value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button type="reset" class="btn bg-soft-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Manage Contact</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="cno" class="form-label">Contact Number:</label>
                                        <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="text" class="form-control" id="email" value="Bnijone@demo.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="url" class="form-label">Url:</label>
                                        <input type="text" class="form-control" id="url"
                                            value="https://getbootstrap.com">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button type="reset" class="btn bg-soft-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Privacy Setting</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="emailnotification">Email Notification:</label>
                                        <div class="col-md-9 form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckChecked11" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked11">Checked
                                                switch checkbox input</label>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                                        <div class="col-md-9 form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckChecked12" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked12">Checked
                                                switch checkbox input</label>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="npass">When To Email</label>
                                        <div class="col-md-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault12">
                                                <label class="form-check-label" for="flexCheckDefault12">
                                                    You have new notifications.
                                                </label>
                                            </div>
                                            <div class="form-check d-block">
                                                <input class="form-check-input" type="checkbox" value="" id="email02">
                                                <label class="form-check-label" for="email02">You're sent a direct
                                                    message</label>
                                            </div>
                                            <div class="form-check d-block">
                                                <input type="checkbox" class="form-check-input" id="email03" checked="">
                                                <label class="form-check-label" for="email03">Someone adds you as a
                                                    connection</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                        <div class="col-md-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="email04">
                                                <label class="form-check-label" for="email04">
                                                    Upon new order.
                                                </label>
                                            </div>
                                            <div class="form-check d-block">
                                                <input class="form-check-input" type="checkbox" value="" id="email05">
                                                <label class="form-check-label" for="email05">New membership
                                                    approval</label>
                                            </div>
                                            <div class="form-check d-block">
                                                <input type="checkbox" class="form-check-input" id="email06" checked="">
                                                <label class="form-check-label" for="email06">Member
                                                    registration</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button type="reset" class="btn bg-soft-danger">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="privacy" role="tabpanel">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Privacy</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="acc-privacy">
                                    <div class="data-privacy">
                                        <h4 class="mb-2">Account Privacy</h4>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="acc-private">
                                            <label class="form-check-label privacy-status mb-2"
                                                for="acc-private">Private Account</label>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book</p>
                                    </div>
                                    <hr>
                                    <div class="data-privacy">
                                        <h4 class="mb-2">Activity Status</h4>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="activety" checked="">
                                            <label class="form-check-label privacy-status mb-2" for="activety">Show
                                                Activity Status</label>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English.</p>
                                    </div>
                                    <hr>
                                    <div class="data-privacy">
                                        <h4 class="mb-2"> Story Sharing </h4>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="story" checked="">
                                            <label class="form-check-label privacy-status mb-2" for="story">Allow
                                                Sharing</label>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English.</p>
                                    </div>
                                    <hr>
                                    <div class="data-privacy">
                                        <h4 class="mb-2"> Photo Of You </h4>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="automatically" name="customRadio0"
                                                class="form-check-input" checked="">
                                            <label class="form-check-label" for="automatically"> Add
                                                Automatically</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" id="manualy" name="customRadio0"
                                                class="form-check-input">
                                            <label class="form-check-label" for="manualy"> Add Manualy</label>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English.</p>
                                    </div>
                                    <hr>
                                    <div class="data-privacy">
                                        <h4 class="mb-2"> Your Profile </h4>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="public" name="customRadio1" class="form-check-input"
                                                checked="">
                                            <label class="form-check-label" for="public"> Public </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="friend" name="customRadio1"
                                                class="form-check-input">
                                            <label class="form-check-label" for="friend"> Friend </label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="spfriend" name="customRadio1"
                                                class="form-check-input">
                                            <label class="form-check-label" for="spfriend"> Specific Friend </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" id="onlyme" name="customRadio1"
                                                class="form-check-input">
                                            <label class="form-check-label" for="onlyme"> Only Me </label>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English.</p>
                                    </div>
                                    <hr>
                                    <div class="data-privacy">
                                        <h4 class="mb-2"> Login Notification </h4>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="enable" name="customRadio2"
                                                class="form-check-input">
                                            <label class="form-check-label" for="enable"> Enable </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input type="radio" id="disable" name="customRadio2"
                                                class="form-check-input" checked="">
                                            <label class="form-check-label" for="disable"> Disable </label>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English.</p>
                                    </div>
                                    <hr>
                                    <div class="data-privacy">
                                        <h4 class="mb-2">Privacy Help</h4>
                                        <a href="#"><i class="ri-customer-service-2-line me-2"></i>Support</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection