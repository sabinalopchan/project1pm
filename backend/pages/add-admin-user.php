Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore

@sabinalopchan
dpdahal
/
project1pm
1
00
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
project1pm/backend/pages/add-admin-users.php
@dpdahal
dpdahal users
Latest commit c88703e 23 hours ago
History
1 contributor
74 lines (70 sloc)  3.24 KB

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <i class="fa fa-plus"></i> Add Admin User</h1>
                <hr>
            </div>
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" id="full_name"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email"
                               class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option disabled selected>--- Select Gender ---</option>
                            <option value="male">Male</option>
                            <option value="female">Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Profile Picture</label>
                        <input type="file" name="image" id="image"
                               class="btn btn-default">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">
                            <i class="fa fa-plus"></i> Add Record
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Loading complete
