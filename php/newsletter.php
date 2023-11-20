<?php
    echo '
    <div class="newsletter">
        <div class="container">
            <form class="form-signup">
                <h2>Email Newsletter Sign-Up</h2>
                <div class="sign-up-inputs-group">
                    <div class="sign-up-input">
                        <div class="form-group">
                            <label for="form-name" class="required">Your Name <span class="required-input">*</span></label>
                            <br>
                            <input id="form-name" name="name" type="text">
                        </div>
                    </div>
                    <div class="sign-up-input">
                        <div class="form-group">
                            <label for="form-email" class="required">
                                Your Email <span class="required-input">*</span>
                            </label>
                            <br>
                            <input id="form-email" name="name" type="text">
                        </div>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="media">
                        <span class="media-left checkbox-left">
                            <span class="checkbox">
                                <input type="checkbox">
                                <span id="checkbox-bfr" class="mdi-"></span>
                            </span>  
                        </span>         
                        <span class="media-body">
                            Please tick this box if you wish to receive marketing information from us.
                            Please see our
                            <a id="privacy-link" href="#" onclick="homepageLink()">Privacy Policy</a>
                            for more information on how we keep your data safe.
                        </span>    
                    </label>            
                </div>
                <button class="btn" name="submit" id="newsletter-btn-primary"> Subscribe </button>
            </form>
        </div>
    </div>
'?>