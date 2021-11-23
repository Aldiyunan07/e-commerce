@csrf
<div class="row mb-4">
    <div class="col-lg-4 col-sm-6">
        <!-- Form -->
        <div class="mb-4">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-3">
            <label for="exampleInputIconLeft">Icon Left</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>  
                </span>
                <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search" aria-label="Search">
            </div>
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-3">
            <label for="exampleInputIconRight">Icon Right</label>
            <div class="input-group">
                <input type="text" class="form-control" id="exampleInputIconRight" placeholder="Search" aria-label="Search">
                <span class="input-group-text" id="basic-addon2">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>  
                </span>
            </div>
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-3">
            <label for="exampleInputIconPassword">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="exampleInputIconPassword" placeholder="Password" aria-label="Password">
                <span class="input-group-text" id="basic-addon3">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                </span>
            </div>
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control is-valid" id="firstName" value="Mark" required="">
            <div class="valid-feedback">
                Looks good!
            </div>                
        </div>
        <!-- End of Form -->
    </div>
    <div class="col-lg-4 col-sm-6">

        <!-- Form -->
        <div class="my-4">
            <label for="textarea">Example textarea</label>
            <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="4"></textarea>
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-4">
            <label for="usernameValidate">Username</label>
            <input type="text" class="form-control is-invalid" id="usernameValidate" required="">
            <div class="invalid-feedback">
                Please choose a username.
            </div>               
        </div>
        <!-- End of Form -->
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="mb-3">
            <label for="birthday">Birthday</label>
            <div class="input-group">
                <span class="input-group-text">
                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </span>
                <input data-datepicker="" class="form-control datepicker-input" id="birthday" type="text" placeholder="dd/mm/yyyy" required="">                                               
            </div>
        </div>
        <!-- Form -->
        <div class="mb-3">
            <label for="disabledTextInput">Name</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled="">
        </div>
        <div class="mb-3">
            <label for="disabledSelect">Disabled select menu</label>
            <select id="disabledSelect" class="form-control" disabled="">
            <option>Disabled select</option>
            </select>
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-4">
            <label class="my-1 me-2" for="country">Country</label>
            <select class="form-select" id="country" aria-label="Default select example">
                <option selected="">Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <!-- End of Form -->
    </div>
</div>