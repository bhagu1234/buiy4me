 <!-- Modal -->
<div class="modal fade" id="openLoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <h5 class="modal-title" id="exampleModalLongTitle">Sign in</h5>
                </button></center>
            </div>
            <div class="modal-body">
                <form action="{{route('login.user')}}" method="post" id="login_form_modal">
                    @csrf
                    <input type="hidden" name="previous_url" value="{{url()->current()}}">
                    <input type="email" name="email" placeholder="email">
                    <input type="password" name="password" placeholder="Password">
                    <div class="button-box">
                        <button  type="button" onclick="go_registrion_modal()">Registrion</button>
                        <button type="submit" class="default-btn floatright">Login</button>
                    </div>
                </form>
                <form action="{{route('register.user')}}" method="post" id="registrion_form_modal">
                    @csrf
                    <input type="email" name="email" placeholder="email" class="form-group">
                    <input type="password" name="password" placeholder="Password">
                    <input name="first_name" placeholder="first name" type="text">
                    <input name="last_name" placeholder="last name" type="text">
                    <div class="button-box">
                    <button  type="button" onclick="go_login()">login</button>
                        <button type="submit" class="default-btn floatright">Register</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeLoginModal" onclick="closeLoginModal()" >Close</button>
            </div>
        </div>
    </div>
</div>