 <!-- Modal -->
<div class="modal fade" id="openLoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <h5 class="modal-title" id="exampleModalLongTitle">Sign in</h5>
                </button></center>
            </div>
            <div class="modal-body">
                <form action="{{route('login.user')}}" method="post">
                    @csrf
                    <input type="hidden" name="previous_url" value="{{url()->current()}}">
                    <input type="email" name="email" placeholder="email">
                    <input type="password" name="password" placeholder="Password">
                    <div class="button-box">
                        <!-- <div class="login-toggle-btn">
                            <input type="checkbox">
                            <label>Remember me</label>
                        </div> -->
                        <button type="submit" class="default-btn floatright">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeTripModal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>