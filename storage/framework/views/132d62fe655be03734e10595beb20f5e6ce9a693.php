<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        var BASE_URL = "<?php echo e(url('/')); ?>";
        var language = "en-US";
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='csrf-token' content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <title>Aadhaar Service</title>
</head>

<body>

    <!-- button start -->
    <div class="auto-launcher row">
        <button class="chat-btn ">
            <img class="chat-send" src="bot.png" alt="">
        </button>
    </div>

    <!-- button end -->
    <div id="autobot-body" class="container">


        <!-- welcome screem -->


        <div class="welcome-screen row flex justify-content-evenly">
            <div class="modal modal-width" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div> -->
                        <div class="modal-body text-center">
                            <p class="my-3">Please choose your preferred language</p>
                            <div id="google_translate_element">
                                <div class="skiptranslate goog-te-gadget" dir="ltr">
                                    <div id=":0.targetLanguage">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn mx-1 px-3 rounded-pill btn-custom-col2 go-btn english" data-bs-dismiss="modal" data-lang="en-US">GO</button>
                            
                        </div>
                        <!-- <div class="modal-footer">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-12 close ms-0 me-auto">
                <button class="btn btn-wel-close inv">
                    <img src="./close.png" alt="">
                </button>
            </div>
            <div class="col-12 hello text-center">
                <Span>Hello</Span><br><span>I'm Autobot</span>
            </div>
            <div class="col-12 text-center mx-auto">
                <div class="circle-outer mx-auto">
                    <div class="circle-inner">
                        <img src="bot.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 hello text-center">
                <span>How can I help</span><br>
                <span>you?</span>
            </div>
            <div class="col-12 text-center">
                <button class="btn hvr btn-lg border rounded-pill hello-2 px-5 proceed">Lets Proceed!</button>
            </div>

            <div class="beta-version text-white text-center mx-auto my-auto">
                <span>
                    Beta Version 0.1
                </span>
            </div>
        </div>


        <!-- welcome screen end -->



        <div class="chatbot row">
            <div class="bot-header col-12">
                <div class="bot-hi">
                    <div class="bot-id">
                        <img src="bot.png" alt="">
                    </div>
                    <div class="hi-text ms-3">
                        Hi there!
                    </div>
                    <div class="hi-emo ps-1">
                        <img src="hi.png" alt="">
                    </div>
                </div>
                <div class="down-arrow me-3">
                    <button>
                        <img src="d-arrow.png" alt="">
                    </button>
                </div>
            </div>
            <div class="msg-body">
                <div class="auto-generated">Hi, I'm Autobot.</div>
                <div class="auto-generated">Before we begin, please choose one of the topics.
                    <br>What would you like to explore?
                </div>



                

                
                <div class="main-list">
                    


                    <div class="system-msg-2 update-list-menu">
                        
                        <p class="u-names">Update Name</p>
                        <p class="u-fname">Update Father-name</p>
                        <p class="u-dob">Update Date-of-birth</p>
                        <p class="u-gen">Update Gender</p>
                        <p class="u-add">Update Address</p>
                    </div>

                    <div class="system-msg m-address" id="modal-address">
                        <form action="">
                            <label for="" class="text-center">Address Updation</label>
                            <hr>
                            <label for="">Current Address</label>
                            <input type="text" value='' disabled>
                            <label for="">New Address</label>
                            <input type="text" name="new-name">
                            <label for="">Choose Your document</label>
                            <select name="document-name" id="">
                                <option value="">Choose Your document</option>
                                <option value="Pan-card">Pan card</option>
                                <option value="Driving-licence">Driving Licence</option>
                                <option value="Passport">Passport</option>
                            </select>
                            <label for="">Upload Document</label>
                            <input type="file" name="image">
                            <button type="submit" class="btn btn-cus-1 mt-2 text-white">Reset</button>
                            <button type="submit" class="btn btn-cus-2 mt-2 text-white updateQueryname">Submit</button>
                            <button id="rzp-button1" class="btn btn-outline-dark"><i class="fas fa-money-bill"></i>Pay Rs.50</button>
                        </form>
                    </div>
                    <div class="system-msg m-dob" id="modal-dob">
                        <form action="">
                            <label for="" class="text-center">D.O.B Updation</label>
                            <hr>
                            <label for="">Current D.O.B</label>
                            <input type="text" value='' disabled>
                            <label for="">New D.O.B</label>
                            <input type="text" name="new-name">
                            <select name="document-name" id="">
                                <option value="">Choose Your document</option>
                                <option value="Pan-card">Pan card</option>
                                <option value="Driving-licence">Driving Licence</option>
                                <option value="Passport">Passport</option>
                            </select>
                            <label for="">Upload Document</label>
                            <input type="file" name="image">
                            <button type="button" class="btn btn-cus-1 mt-2 text-white">Reset</button>
                            <button type="submit" class="btn btn-cus-2 mt-2 text-white updateQueryname">Submit</button>
                            <button id="rzp-button1" class="btn btn-outline-dark"><i class="fas fa-money-bill"></i>Pay Rs.50</button>
                        </form>
                    </div>
                    <div class="system-msg m-fname" id="modal-fname">
                        <form action="">
                            <label for="" class="text-center">Fathers Name Updation</label>
                            <hr>
                            <label for="">Current Fathers Name</label>
                            <input type="text" value='' disabled>
                            <label for="">New Fathers Name</label>
                            <input type="text" name="new-name">
                            <select name="document-name" id="">
                                <option value="">Choose Your document</option>
                                <option value="Pan-card">Pan card</option>
                                <option value="Driving-licence">Driving Licence</option>
                                <option value="Passport">Passport</option>
                            </select>
                            <label for="">Upload Document</label>
                            <input type="file" name="image">
                            <button type="button" class="btn btn-cus-1 mt-2 text-white">Reset</button>
                            <button type="submit" class="btn btn-cus-2 mt-2 text-white updateQueryname">Submit</button>
                            <button id="rzp-button1" class="btn btn-outline-dark"><i class="fas fa-money-bill"></i>Pay Rs.50</button>
                        </form>
                    </div>
                    <div class="system-msg m-gender" id="modal-gender">
                        <form action="">
                            <label for="" class="text-center">Gender Updation</label>
                            <hr>
                            <label for="">Current Gender</label>
                            <input type="text" value="<?php echo e(Session::get('date_of_birth')); ?>" disabled>
                            <label for="">New Gender</label>
                            <input type="text" name="new-name">
                            <select name="document-name" id="">
                                <option value="">Choose Your document</option>
                                <option value="Pan-card">Pan card</option>
                                <option value="Driving-licence">Driving Licence</option>
                                <option value="Passport">Passport</option>
                            </select>
                            <label for="">Upload Document</label>
                            <input type="file" name="image">
                            <button type="button" class="btn btn-cus-1 mt-2 text-white">Reset</button>
                            <button type="submit" class="btn btn-cus-2 mt-2 text-white updateQueryname">Submit</button>
                            <button id="rzp-button1" class="btn btn-outline-dark"><i class="fas fa-money-bill"></i>Pay Rs.50</button>
                        </form>
                    </div>
                    <div class="system-msg m-name" id="modal-name">
                        <form action="<?php echo e(url('/updateQueryForm')); ?>" method="post" id="form-name" enctype="multipart/form-data">
                            <label for="" class="text-center">Name Updation</label>
                            <hr>
                            <label for="">Current Name:</label>
                            <input type="text" value='<?php echo e(Session::get('name')); ?>' name="current-name" disabled>
                            <label for="">Enter new name:</label>
                            <input type="text" name="new-name">
                            <select name="document-name" id="">
                                <option value="">Choose Your document:</option>
                                <option value="PC">Pan card</option>
                                <option value="Driving-licence">Driving Licence</option>
                                <option value="Passport">Passport</option>
                            </select>
                            <label for="">Enter your Document number</label>
                            <input type="text" name="document-number">
                            <label for="">Upload Document:</label>
                            <input type="file" name="image">
                            <button type="button" class="btn btn-cus-1 mt-2 text-white">Reset</button>
                            <button type="submit" class="btn btn-cus-2 mt-2 text-white updateQueryname">Submit</button>
                        </form>
                        <button id="rzp-button1" class="btn btn-outline-dark"><i class="fas fa-money-bill"></i>Pay Rs.50</button>
                    </div>
                </div>
                



                <!-- first menu -->
                <!-- <hr class="hr-menu"> -->
                <div class="first-menu col-12 my-3">
                    <ul id="menu-list">
                        <li class="bg-1">
                            <a href="<?php echo e(url('/updateAadhaar/updateMenu')); ?>" class="service" data-text="Update-Aadhaar">
                                
                                <span>
                                    <span style="text-align: left; ">Update Aadhar</span>
                                    <ol class="ps-0 mt-2" style="text-align: left;">
                                        <li class="w-100 mb-1 px-2" style="border-radius: 3px !important;">Update
                                            Address</li>
                                        <li class="w-100 mb-1 px-2" style="border-radius: 3px !important;">Update
                                            Date-Of-Birth</li>
                                        <li class="w-100 mb-1 px-2" style="border-radius: 3px !important;">Update
                                            Father-Name</li>
                                        <li class="w-100 mb-1 px-2" style="border-radius: 3px !important;">Update
                                            Gender</li>
                                        <li class="w-100 mb-1 px-2" style="border-radius: 3px !important;">Update Name
                                        </li>
                                    </ol>
                                </span>
                            </a>
                        </li>
                        <li class="bg-2">
                            <a href="<?php echo e(url('/getAadhaar')); ?>" class="service" data-text="Get-Aadhaar">
                                
                                <span>
                                    <span style="text-align: left; ">Get Aadhar</span>
                                    <ol class="ps-0 mt-2" style="text-align: left; ">
                                        <li class="w-90 mb-1  ms-1 ps-2" style="border-radius: 3px !important;">Check
                                            status</li>
                                        <li class="w-90 mb-1 ms-1  ps-2" style="border-radius: 3px !important;">Locate
                                            an enrolment center</li>
                                        <li class="w-90 mb-1  ms-1 ps-2" style="border-radius: 3px !important;">
                                            Download Aadhaar</li>
                                        <li class="w-90 mb-1  ms-1 ps-2" style="border-radius: 3px !important;">
                                            Retrieve EID/UID</li>
                                    </ol>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- <hr class="hr-menu"> -->
                </div>

                

    <!-- append user messege here -->

    
    </div>
    <div class="msg-input px-1 mx-0">
        <form action="<?php echo e(url('/getInputQuery')); ?>" method="post" id="queryForm" class="w-100">
            <div class="input-group d-flex flex-nowrap justify-content-between align-items-center">

                <!-- language icon -->

                <!-- <div class="languages me-1">
                            <button type="button" class="lang-btn">
                                <img src="language.png" alt="">
                            </button>
                        </div> -->




                <input type="text" placeholder="Enter your query here..." name="input_query" id="form-input" class="ms-2">
                <input type="hidden" name="query_type" value="" id="input-type" class="ms-2">
                
                <button id="talk" type="button">
                    <img src="<?php echo e(asset('/mic.png')); ?>" alt="" class="img-fluid mic" style="width:25px; height:25px">
                </button>
                <div class="formQuery-btn">
                    <button id="formTypedQuerySubmit" class="chat-btnx" type="submit">
                        <img class="chat-send" src="bot.png" alt="">
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="tool-bar col-12 d-flex flex-nowrap justify-content-between align-items-center align-content-center">
        <!-- <div class="powered">
                    <span style="font-size: 0.65rem">Powered-By: Ray-Of-Identity </span>
                </div> -->

        <div class="beta-version">
            <span style="font-size: 0.65rem">
                Powered-By: Ray-Of-Identity
            </span>
        </div>
    </div>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
    
    
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: "en,hi,sa,ml,bn,ur,pa,mr,te,ta,gu,kn,or,as"
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="<?php echo e(asset('/s2t.js')); ?>"></script>
    
</body>

</html>
<?php /**PATH /Users/chiraggupta/Sites/localhost/chirag/ray-of-identity-1/resources/views/main/main-page.blade.php ENDPATH**/ ?>