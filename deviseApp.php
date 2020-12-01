<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kam-webagentur</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!-- Google fonts-->
    <link href="./css/Montserrat.css" rel="stylesheet" type="text/css" />
    <link href="./css/DroidSerif.css" rel="stylesheet"
        type="text/css" />
    <link href="./css/Roboto.css" rel="stylesheet" type="text/css" />
    <link href="./css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/form.css" rel="stylesheet" />


    <!-- Bootstrap core JS-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

        <!-- Font Awesome icons (free version)-->
        <script src="js/all.js" crossorigin="anonymous"></script>
    <script src="./js/translate.js"></script>
    <script src="./js/personaliser.js"></script>
    
    
    <script src="https://unpkg.com/web-vitals@0.2.4/dist/web-vitals.es5.umd.min.js"></script>

 
    <style>
        .masthead{
            background-image:url("../assets/img/2-min.png") !important;
        }
    </style>

<!-- sideBar-->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="css/app.css">
<script>
addEventListener('DOMContentLoaded', function() {
  webVitals.getCLS(console.log);
  webVitals.getFID(console.log);
  webVitals.getLCP(console.log);
});
</script>
</head>


<script>
    
    function next(x){
            var y=x-1;
            var test=false;
            console.log("this is :"+y);
            
            

            if($("#next"+y).parent().children('div').children('div').hasClass('selected')){
                if(($("#next"+y).parent().children('div').children('div').hasClass('Q4Autre') && $('.Q4Autre').hasClass('selected')) ||
                  ($("#next"+y).parent().children('div').children('div').hasClass('Q5Autre') && $('.Q5Autre').hasClass('selected'))){ 
                    if($("#next"+y).parent().children('div').children('div').children('input[type=text]').val()==""){
                        test=false;
                        console.log("meeeeeeeeeeeeeeeee1");
                    }else{
                        test=true;
                        console.log("meeeeeeeeeeeeeeeee2");
                    }
                }else {
                    test=true;
                    console.log("meeeeeeeeeeeeeeeee3");
                }
            }else{
                if($("#next"+y).parent().children('div').hasClass('input')){
                    if($("#next"+y).parent().children('div').children('input[type=text]').val()!=""){
                        test=true;
                        console.log("meeeeeeeeeeeeeeeee7");
                    }else{
                        test=false;
                        console.log("meeeeeeeeeeeeeeeee8");
                    }
                }else{
                    test=false;
                    console.log("meeeeeeeeeeeeeeeee6");
                }          
            }
            if(test==true && x!=13){
                $('.fieldset'+y).addClass('d-none');
                $('.fieldset'+x).removeClass('d-none');
                $('#step'+x).addClass('active');
            }else   
                {

                    swal ( "Error" ,  "Diese Frage ist erforderlich!" ,  "error" );
                } 

    }  

    function previous(x){
        var y=x+1;
        $('.fieldset'+y).addClass('d-none');
        $('.fieldset'+x).removeClass('d-none');    
        
    }
   
    
  
</script>
<?php
    if(isset($_POST['submitButton']))
    {
        include('actionApp.php');
      echo "<script>window.location.replace('done.php')</script>";
    }
?>

<body  onload="load('de')"  >
<form action="deviseApp.php" method="POST" name="form1" id="myForm" >
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="card b-0">
                    <h1 class="heading">Anfrage für app</h1><br/>
                    <ul id="progressbar" class="text-center">
                        <li class="active step0" id="step1" onclick="enable('1')"><span class="number">1</span></li>
                        <li class="step0" id="step2" onclick="enable('2')"><span class="number">2</span></li>
                        <li class="step0" id="step3" onclick="enable('3')"><span class="number">3</span></li>
                        <li class="step0" id="step4" onclick="enable('4')"><span class="number">4</span></li>
                        <li class="step0" id="step5" onclick="enable('5')"><span class="number">5</span></li>
                        <li class="step0" id="step6" onclick="enable('6')"><span class="number">6</span></li>
                        <li class="step0" id="step7" onclick="enable('7')"><span class="number">7</span></li>
                       
                    </ul>

                    <fieldset class="fieldset1">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="appQ1" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="1-2">
                             
                                <div class="card-block text-center radio " id="div1">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="appQ1R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="appQ1" id="div1r1"  placeholder="" value="appQ1R1" class="form-control" hidden  >
                                </div>

                                <div class="card-block text-center radio" id="div2">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="appQ1R2"   class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="appQ1" id="div2r2" placeholder="" value="appQ1R2" class="form-control" hidden> 
                                </div>

                            </div>
                         <button type="button" id="next1" class="btn-block btn-primary mt-3 mb-1 " onclick="next(2)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>     
                        </div>
                    </fieldset>



                    <fieldset class="fieldset2 d-none">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="appQ2" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="3-4">
                             
                                <div class="card-block text-center radio " id="div3">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="ja" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="appQ2" id="div1r1"  placeholder="" value="ja" class="form-control" hidden  >
                                </div>

                                <div class="card-block text-center radio" id="div4">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="nein"   class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="appQ2" id="div2r2" placeholder="" value="nein" class="form-control" hidden> 
                                </div>

                            </div>
                         <button type="button" id="next2" class="btn-block btn-primary mt-3 mb-1 " onclick="next(3)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>  
                         <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(1)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>   
                        </div>
                    </fieldset>

                  


                    <fieldset class="fieldset3 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="appQ3" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios checkboxes" id="5-7">
                              
                                <div class="card-block text-center radio " id="div5">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="appQ3R1" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ3R1"   placeholder="" value="appQ3R1" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div6">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="appQ3R2" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ3R2"   placeholder="" value="appQ3R2" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div7">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="appQ3R3" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ3R3"   placeholder="" value="appQ3R3" class="form-control" hidden >
                                </div>
                            
                            </div> 
                            <button type="button" id="next3" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(4)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(2)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset>




                    
                        
                  
                    <fieldset class="fieldset4 d-none">
                        <div class="form-card">
                            <h5 id="name-label" data-tag="appQ4" class="sub-heading"></h5>
                            <div class="row px-1 radio-group radios" id="8-11">
                                
                                <div class="card-block text-center radio" id="div8">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="appQ4R1" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="appQ4"   placeholder="" value="appQ4R1" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div9">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="appQ4R2" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="appQ4"   placeholder="" value="appQ4R2" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio" id="div10">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="appQ4R3" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="appQ4"   placeholder="" value="appQ4R3" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio Q4Autre" id="div11" onclick="enableInput('Q4')">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="appQ4R4" class="form-check-label sub-desc" ></label>
                                    <input type="radio" name="appQ4"   placeholder="" value="appQ4R4" class="form-control"  hidden>
                                </div>
                                <div class="form-group input autre"><input type="text" id="Q4" name="appQ4text" placeholder="" class="form-control inputAutre"></div> 
                            </div> 

                            <button type="button" id="next4" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(5)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(3)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset>



                    <fieldset class="fieldset5 d-none">
                        <div class="form-card">
                        <h5 id="name-label" data-tag="appQ5" class="sub-heading"></h5>

                        <div class="row px-1 radio-group radios checkboxes" id="12-17">
                                 <div class="card-block text-center radio " id="div12">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="appQ5R1" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ5R1"   placeholder="" value="appQ5R1" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div13">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="appQ5R2" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ5R2"   placeholder="" value="appQ5R2" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div14">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="appQ5R3" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ5R3"   placeholder="" value="appQ5R3" class="form-control" hidden >
                                </div>
                                <div class="card-block text-center radio " id="div15">
                                    <div class="image-icon"> <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png"> </div>
                                    <label data-tag="appQ5R4" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ5R4"   placeholder="" value="appQ5R4" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio" id="div16">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png"> </div>
                                    <label data-tag="appQ5R5" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ5R5"   placeholder="" value="appQ5R3" class="form-control"  hidden>
                                </div>
                                <div class="card-block text-center radio Q5Autre" id="div17"  onclick="enableInput('Q5')">
                                    <div class="image-icon"> <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png"> </div>
                                    <label data-tag="appQ5R6" class="form-check-label sub-desc" ></label>
                                    <input type="checkbox" name="appQ5R6" placeholder="" value="appQ5R6" class="form-control" hidden >
                                </div>
                                <div class="form-group input autre"><input type="text" id="Q5" name="appQ5text" placeholder="" class="form-control inputAutre"></div> 
                            </div> 

                            <button type="button" id="next5" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(6)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(4)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset> 



                    <fieldset class="fieldset6 d-none">
                    <div class="form-card">
                            <h5 id="name-label" data-tag="appQ6" class="sub-heading"></h5>
                            <div class="form-group input"><input type="text"  name="appQ6" placeholder="" class="form-control"> 
                            </div> 
                            <button type="button" id="next6" class="btn-block btn-primary mt-3 mb-1 next" onclick="next(7)">Nächster<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(5)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset>
              
                  
                   
                    <fieldset class="fieldset7 d-none" >
                        <div class="form-card">
                            <h5 class="sub-heading mb-4" data-tag="globalQ12"></h5>
                            <div class="form-group input"> <label class="form-control-label" data-tag="name"></label>
                             <input type="text"  name="name" placeholder="" class="form-control" required  > </div>
                            <div class="form-group input"> <label class="form-control-label" data-tag="vorname"></label> 
                            <input type="text"  name="vorname" placeholder="" class="form-control" required > </div>
                            <div class="form-group input"> <label class="form-control-label" data-tag="NomCompagnie"></label> 
                             <input type="text"  name="unternehmens" placeholder="" class="form-control" required > </div>
                            <div class="form-group input"> <label class="form-control-label" data-tag="adresse"></label> 
                            <input type="text" name="adresse" placeholder="" class="form-control" required > </div>
                            <div class="form-group input"> <label class="form-control-label"  data-tag="telefon"></label> 
                            <input type="tel"  name="Telefon" placeholder="+49-123-123-123" pattern="(?:(?:\+)49|0)-[0-9]{3}-[0-9]{3}-[0-9]{3}" title="Ungültige Nummer" class="form-control" required > </div>
                            <div class="form-group input"> <label class="form-control-label" data-tag="email"></label> 
                            <input type="email"  name="Email" placeholder="" class="form-control" required > </div>
                            <button type="submit" id="next7" name="submitButton" class="btn-block btn-primary mt-3 mb-1 next mt-4" >Senden<i class="fas fa-long-arrow-alt-right right"></i></button>
                            <button type="button" class="btn-block btn-secondary mt-3 mb-1 prev" onclick="previous(6)"><i class="fas fa-long-arrow-alt-left left"></i>BISHERIGE</button>
                        </div>
                    </fieldset>
                    <fieldset class="fieldset13 d-none"  id="fieldset13">
                            <div class="form-card">
                                <h5 class="sub-heading mb-4">Success!</h5>
                                <p class="message" data-tag="QUESTION13"></p>
                                <div class="check"> <img class="fit-image check-img" src="https://i.imgur.com/QH6Zd6Y.gif"> </div>
                            </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
   
</form>
    <script>
        $(document).ready(function(){
            $('#myForm input[type="text"]').blur(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                } else{
                    $(this).removeClass("error");
                }
            });
        });

        function disableAll() {
            for (let allfieldset = 1; allfieldset < 14; allfieldset++) {
                $(".fieldset"+allfieldset).addClass("d-none");
            }
        }
        function enable(x){
             
            if($('#step'+x).hasClass('active')){
                disableAll(); 
                $('.fieldset'+x).removeClass('d-none');
            }
            
        
        }
        function enableInput(a){
            console.log(a);
            $("#"+a).parent().removeClass('autre');   
        }






        $('.card-block').click(function() {     
            
            console.log(this.id);
            var myid="#"+this.id;
            
            var id=$(myid).parent().attr('id');
            console.log(id);

            if(!$(".Q4Autre").hasClass('selected')){
                $("#Q4").val('');
            }
            if(!$("#Q4").parent().hasClass('autre') && $(".Q4Autre").hasClass('selected') && this.id!="div32"){
                $("#Q4").parent().addClass('autre');
            }
            console.log(myid);

            if(!$(".Q5Autre").hasClass('selected')){
                $("#Q5").val('');
            }
            if($(".Q5Autre").hasClass('selected') && this.id=="div17"){
                $("#Q5").parent().addClass('autre');   
            }
                

            
            if(!$(myid).parent().hasClass('checkboxes')){
                    if(id.indexOf('-')>1){
                        for (let i=parseInt(id.substring(0,id.indexOf('-')));i<=parseInt(id[id.indexOf('-')+1]+id[id.indexOf('-')+2]);i++){
                            console.log(i);
                            $("#div"+i.toString()).children("input").removeAttr('checked', false);
                            $("#div"+i.toString()).removeClass('selected');
                        }
                    }
                    else{
                            for (let i=parseInt(id.substring(0,id.indexOf('-')));i<=parseInt(id.substring(id.indexOf('-')+1,id.length));i++){
                                console.log(i);
                                $("#div"+i.toString()).children("input").removeAttr('checked', false);
                                $("#div"+i.toString()).removeClass('selected');
                            }
                            
                    }
                    $(myid).children("input").attr('checked', true);
                    $(myid).addClass('selected');       
            }else {
                if($(myid).hasClass('selected')){
                    $(myid).children("input").removeAttr('checked', false);
                    $(myid).removeClass('selected');
                }else
                {
                    $(myid).children("input").attr('checked', true);
                    $(myid).addClass('selected');  
                }
            }
            
            //console.log($(myid).children("input"));
            
          
        }); 
        
          




    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>    