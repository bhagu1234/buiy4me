@include('frontend.includes.header')
  <body>
    @include('frontend.includes.nav')
      <!-- header end -->
	    <div class="product-description-review-area pb-90 pt-40">
            <div class="container">
                <div class="product-description-review text-center">
                     <h5> Trips  &nbsp;&nbsp;<a href="{{route('user.treveller')}}">Add Trip</a></h5> 
                    
                    <div class="description-review-title nav tabs" role=tablist>
                      <span data-tab-value="#recent_tab" style="width:150px;">Recent <?php echo $cur+$upc; ?></span>
                      <span  data-tab-value="#past_tab"style="width:150px;">Past {{$pastCount}}</span>
                    </div>
                    <div class="description-review-text tab-content">
                        <div class="tab-pane active show fade tabs__tab active " id="recent_tab"  role="tabpanel" data-tab-info>
                            <h3>Current</h3>
                            <div>
                            @if($cur !=0) 
                              @foreach($current as $row)
                              <div class="single-blog-replay">
                                <div class="replay-info-wrapper">
                                  <div class="replay-info">
                                    <div class="replay-name-date">
                                      <h5><a href="#">Upcoming Trip</a></h5>
                                      <span>{{$row->travel_date}}</span>
                                    </div>
                                    <div class="replay-btn">
                                      <a href="{{route('user.matched_trip',['id'=>$row->id,'from'=>'trip'])}}">check Offer</a>
                                    </div>
                                  </div>
                                  <p>{{$row->fromCountry}},{{$row->fromCity}} -> {{$row->toCountry}},{{$row->toCIty}}</p>
                                  <p>{{$row->travel_date}}</p>
                                </div>
                              </div>
                              @endforeach
                            @else
                              <p>there are no trip</p>
                            @endif
                               
                            </div>
                            <div>
                            <div class="blog-replay-wrapper pb-40">
                              <h4 class="blog-details-title2">Upcoming</h4>
                              @if($upc !=0)
                                @foreach($upcoming as $row)
                                  <div class="single-blog-replay">
                                    <div class="replay-info-wrapper">
                                      <div class="replay-info">
                                        <div class="replay-name-date">
                                          <h5><a href="#">Upcoming Trip</a></h5>
                                          <span>{{$row->travel_date}}</span>
                                        </div>
                                        <div class="replay-btn">
                                          <a href="{{route('user.matched_trip',['id'=>$row->id,'from'=>'trip'])}}">check Offer</a>
                                        </div>
                                      </div>
                                      <p>{{$row->fromCountry}},{{$row->fromCity}} -> {{$row->toCountry}},{{$row->toCIty}}</p>
                                      <p>{{$row->travel_date}}</p>
                                    </div>
                                  </div>
                                @endforeach
                              @else
                                <p>there are no trip</p>
                              @endif
                            </div>
                        </div>
                    </div>
                    <div class="description-review-text tab-content">
                        <div class="tab-pane  show fade tabs__tab " id="past_tab"  role="tabpanel" data-tab-info>
                            <h3>Past</h3>
                            <div>
                            @if($pastCount !=0)
                              @foreach($past as $row)
                                <div class="single-blog-replay">
                                  <div class="replay-info-wrapper">
                                    <div class="replay-info">
                                      <div class="replay-name-date">
                                        <h5><a href="#">Past Trip</a></h5>
                                        <span>{{$row->travel_date}}</span>
                                      </div>
                                      <!-- <div class="replay-btn">
                                        <a href="#">check Offer</a>
                                      </div> -->
                                    </div>
                                    <p>{{$row->fromCountry}},{{$row->fromCity}} -> {{$row->toCountry}},{{$row->toCIty}}</p>
                                    <p>{{$row->travel_date}}</p>
                                  </div>
                                </div>
                              @endforeach
                            @else
                              <p>there are no trip</p>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--add trip modal -->
        <!-- Modal -->
        <!-- <div class="modal fade" id="StoreTripDataMo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Trip</h5>
                </button>
              </div>
              <div class="modal-body">
                <div class="description-review-title nav tabs" role=tablist>
                    <span data-tab-value="#on_way" style="width:150px;">On Way</span>
                    <span  data-tab-value="#round_trip"style="width:150px;">Round Trip</span>
                </div>
                <div class="description-review-text tab-content">
                  <div class="tab-pane  show fade tabs__tab active " id="on_way"  role="tabpanel" data-tab-info>
                    <form class="store_trip_data" method="post">
                      @csrf
                      <input type="hidden" class="user_mobile" name="user_mobile" >
                      <input type="text" name="from_location" class="form-control from_location" placeholder="from *" required>
                      <input type="text" name="to_location"  class="form-control to_location" placeholder="to*" required>
                      <input type="date" name="travel_date"   class="form-control travel_date" placeholder="travel date" min="</?php echo date('Y-m-d'); ?>"  required><br>
                      <button type="submit">Add trip</button>
                    </form>
                  </div>
                  <div class="tab-pane  show fade tabs__tab  " id="round_trip"  role="tabpanel" data-tab-info>
                    <form  class="store_trip_data">
                      @csrf
                      <input type="text" name="from_location" class="form-control" placeholder="from *" required>
                      <input type="text" name="to_location" class="form-control" placeholder="to *" required>
                      <input type="date" name="travel_date" class="form-control" placeholder="travel dates" required><br>
                      <button type="submit">Add trip</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeTripModal" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> -->

        <!-- verify mobile numbeer ======================= -->
        <!-- <div class="modal fade" id="verifyMobileNumberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLongTitle">Verify Your Phone Number</h6>
                </button>
              </div>
              <div class="modal-body">
                  <form>
                    <label>Phone Number:</label>
                    <input type="text" id="mobile_number" class="form-control" placeholder="+91********" >
                    <div id="recaptcha-container"></div>
                    <button type="button" class="btn btn-success" onclick="phoneSendAuth();">SendCode</button>
                  </form>
                <div class="card" style="margin-top: 10px">
              <div class="card-header">
                Enter Verification code
              </div>
              <div class="card-body">
          
                <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>
                <div class="alert alert-danger" id="error" style="display: none;"></div>
                <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
                <form>
                    <input type="text" id="verificationCode" class="form-control" placeholder="Enter verification code">
                    <button type="button" class="btn btn-success" onclick="codeverify();">Verify code</button>
          
                </form>
              </div>
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeverifyMobileNumberModal" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> -->
        <!-- menu area end -->
	    @include('frontend.includes.footer')
		<!-- all js here -->
     @include('frontend.includes.footer_script')
    </body>
</html>
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
  
<script>
      
  var firebaseConfig = {
    apiKey: "AIzaSyBPdVwUIYOY0qRr9kbIMTnxKpFw_nkneYk",
    authDomain: "itdemo-push-notification.firebaseapp.com",
    databaseURL: "https://itdemo-push-notification.firebaseio.com",
    projectId: "itdemo-push-notification",
    storageBucket: "itdemo-push-notification.appspot.com",
    messagingSenderId: "257055232313",
    appId: "1:257055232313:web:3f09127acdda7298dfd8e8",
    measurementId: "G-VMJ68DFLXL"
  };
    
  firebase.initializeApp(firebaseConfig);
</script>
  
<script type="text/javascript">
  
    window.onload=function () {
      render();
    };
  
    function render() {
        window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }
  
    function phoneSendAuth() {
           
        var number = $("#mobile_number").val();
          
        firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
              
            window.confirmationResult=confirmationResult;
            coderesult=confirmationResult;
            console.log(coderesult);
  
            $("#sentSuccess").text("Message Sent Successfully.");
            $("#sentSuccess").show();
              
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
  
    }
  
    function codeverify() {
  
        var code = $("#verificationCode").val();
  
        coderesult.confirm(code).then(function (result) {
            var user=result.user;
            console.log(user);
  
            $("#successRegsiter").text("you are register Successfully.");
            $("#successRegsiter").show();
  
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
  
</script>