
<section id="footer" class="mt-5">
    <div class="container-fluid">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="/"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="/login"><i class="fa fa-angle-double-right"></i>Login</a></li>
                    <li><a href="/register"><i class="fa fa-angle-double-right"></i>Register</a></li>
                  
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    
                    <li><a href="/"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="/self-eval"><i class="fa fa-angle-double-right"></i>Self Evaluation</a></li>
                    <li><a href="/other-eval"><i class="fa fa-angle-double-right"></i>Other Evaluation</a></li>
                    @auth
                    <li><a href="/prof/{{Auth::id()}}"><i class="fa fa-angle-double-right"></i>Profile</a></li>
                    @endauth
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Contact Info</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>email : 360degreeappraisalsystem@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Phone: 057-2522716&nbsp &nbsp&nbsp &nbsp&nbsp;</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Fax:003044412133232  &nbsp&nbsp &nbsp;</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>tel: 0301-8130376&nbsp &nbsp&nbsp  &nbsp&nbsp &nbsp&nbsp&nbsp;</a></li>
        
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
   
        </div>	
       
    </div>
</section>
