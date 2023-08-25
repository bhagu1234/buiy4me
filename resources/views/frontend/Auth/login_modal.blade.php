 <!-- Modal -->
<div class="modal fade" id="openLoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <h5 class="modal-title" id="exampleModalLongTitle">Sign in</h5>
                </button></center>
            </div>
            <div class="modal-body">
                <div id="login_form_modal">
                    <input type="hidden" name="previous_url" value="{{url()->current()}}" id="get_url_re">
                    <input type="email" name="email" id="email_login" placeholder="email">
                    <input type="password" name="password" placeholder="Create Password" id="password_login">
                    <div class="button-box">
                        <button  type="button" onclick="go_registrion_modal()">Registrion</button>
                        <button class="default-btn floatright" id="login_auth">Login</button>
                    </div>
                </div>
                <div id="registrion_form_modal">
                    @csrf
                    <input type="email" name="email" placeholder="email" class="form-group" id="email_registrion">
                    <input type="password" name="password" placeholder="Create Password" id="password_registrion">
                    <input name="first_name" placeholder="First Name" type="text" id="first_name_registrion">
                    <input name="last_name" placeholder="Last Name" type="text" id="last_name_registrion">
                    <div class="button-box">
                    <button  type="button" onclick="go_login()">login</button>
                        <button id="registrion_auth" class="default-btn floatright">Register</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeLoginModal" onclick="closeLoginModal()" >Close</button>
            </div>
        </div>
    </div>
</div>