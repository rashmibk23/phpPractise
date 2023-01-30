<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="navbar">
            <div class="logo">
                <img src="./images/logo.png" alt="logo">
                <div class="logo-heading">
                    <h2>Vueform</h2>
                    <small>BUILDER</small>
                </div>
            </div>
            <ul class="nav-link">
                <li><a href="#">About</a></li>
                <li class="link-style">Save Template</li>
                <li class="link-style">Load Template</li>
                <li class="license-style">Get a license</li>
                <span class="material-symbols-outlined">
                    dark_mode
                </span>
            </ul>
        </div>
        
        <div class="content-grid">
            <div class="left-container">

                <!-- Tabs -->
                <div class="leftcontainer-tab">
                    <button class="leftTabBtn btn" onclick="openLtabContent(event, 'Elements')" id="defaultOpen1">Elements</button>
                    <button class="leftTabBtn btn" onclick="openLtabContent(event, 'Tree')">Tree</button>
                </div>

                <!-- Tab content -->
                <!-- Elements tab content -->
                <div id="Elements" class="leftTabContent">
                    <div class="section1-container">
                        <div class="left-container-top">
                            <div class="search-field">
                                <span class="material-symbols-outlined">
                                    search
                                </span>
                                <input type="text" placeholder="Search elements">
                            </div>

                            <!-- Tabs (Inside Element tab) -->
                            <div class="elements-tab">
                                <button class="tabBtn fields-btn" onclick="openFieldcontent(event, 'Fields')" id="defaultOpen2">Fields</button>
                                <button class="tabBtn static-btn" onclick="openFieldcontent(event, 'Static')">Static</button>
                                <button class="tabBtn structure-btn" onclick="openFieldcontent(event, 'Structure')">Structure</button>
                            </div>
                        </div>
                        

                        <!-- Tab Contents -->

                        <!-- 1st Tab content (Field) -->
                        <div  id="Fields" class="elementsTabcontent">
                            <div class="card-container">
                            <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    text_fields
                                </span>
                                <div class="card-text">
                                    <h4>Text input</h4>
                                    <small><p>Single line text input</p></small>
                                </div>
                            </div>
                            <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    pin
                                </span>
                                <div class="card-text">
                                    <h4>Number input</h4>
                                    <small><p>Input field that only allows numbers</p></small>
                                </div>
                            </div>
                            <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    alternate_email
                                </span>
                                <div class="card-text">
                                    <h4>Email address</h4>
                                    <small><p>Text field that excepts an email</p></small>
                                </div>
                            </div>
                            <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    call
                                </span>
                                <div class="card-text">
                                    <h4>Phone number</h4>
                                    <small><p>Text field that excepts a phone number</p></small>
                                </div>
                            </div>
                            <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    lock
                                </span>
                                <div class="card-text">
                                    <h4>Password</h4>
                                    <small><p>Text field that excepts a password</p></small>
                                </div>
                            </div>
                            <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    link
                                </span>
                                <div class="card-text">
                                    <h4>URL</h4>
                                    <small><p>Text field that excepts an url</p></small>
                                </div>
                            </div>
                            </div>
                            
                        </div>

                        <!-- 2nd Tab content (Static) -->
                        <div id="Static" class="elementsTabcontent">
                            <div class="card-container">
                                <div class="card">
                                    <span class="material-symbols-outlined img-box">
                                        done
                                    </span>
                                    <div class="card-text">
                                        <h4>Submit button</h4>
                                        <small><p>Button that triggers submit</p></small>
                                    </div>
                                </div>
                                <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    cached
                                </span>
                                    <div class="card-text">
                                        <h4>Reset button</h4>
                                        <small><p>Button that triggers reset</p></small>
                                    </div>
                                </div>
                                <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    star
                                </span>
                                    <div class="card-text">
                                        <h4>Primary button</h4>
                                        <small><p>Button with primary color</p></small>
                                    </div>
                                </div>
                            </div>
                            

                        </div>

                        <!-- 3rd Tab conent (Structure) -->
                        <div id="Structure" class="elementsTabcontent">
                            <div class="card-container">
                                <div class="card">
                                    <span class="material-symbols-outlined img-box">
                                        tab
                                    </span>
                                    <div class="card-text">
                                        <h4>Tabs</h4>
                                        <small><p>Break forms into tabs</p></small>
                                    </div>
                                </div>
                                <div class="card">
                                    <span class="material-symbols-outlined img-box">
                                        insert_page_break
                                    </span>
                                    <div class="card-text">
                                        <h4>Steps</h4>
                                        <small><p>Break forms into steps</p></small>
                                    </div>
                                </div>
                                <div class="card">
                                    <span class="material-symbols-outlined img-box">
                                        check_box_outline_blank
                                    </span>
                                    <div class="card-text">
                                        <h4>Container</h4>
                                        <small><p>A container to group elements</p></small>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Tab content -->
                <!-- Tree tab content -->
                
                <div id="Tree" class="leftTabContent">
                    <div class="section1-container">
                        <div class="left-container-top">
                            <div class="search-field">
                                <span class="material-symbols-outlined">
                                    search
                                </span>
                                <input type="text" placeholder="Search tree">
                            </div>
                        </div>
                        
                        <div class="card-container">
                            <div class="card">
                                <span class="material-symbols-outlined img-box">
                                    article
                                </span>
                                <div class="card-text">
                                    <h4>MyForm</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                
                   
            </div>

            <!-- center-container -->
            <div class="middle-container">
                <p>middle container</p>
            </div>

            <!-- right-container -->
            <div class="right-container">
                <!-- Right container Tabs -->
               <div class="rightcontainer-tab">
                    <button class="rightTabBtn btn" onclick="openRtabContent(event, 'Settings')" id="defaultOpen3">Settings</button>
                    <button class="rightTabBtn btn" onclick="openRtabContent(event, 'Theme')">Theme</button>
                    <button class="rightTabBtn btn" onclick="openRtabContent(event, 'Export')">Export</button>
               </div>

                <!-- Right container Tab Contents -->
                <!-- Settings tab content -->
               <div id="Settings" class="rightTabContent">
                    <div>
                        <div class="rc-tab-content">
                            <div class="rc-form-header">
                                <h4>Properties</h4>
                                <span class="material-symbols-outlined">
                                    remove
                                </span>
                            </div>
                            <div class="rc-form-text">
                                <div class="rc-form-row">
                                    <small><label for="">Name</label></small>
                                    <input type="text" name="name" placeholder="My form">
                                </div>
                                <div class="rc-form-row">
                                    <div class="form-row-icon">
                                        <small><label for="">Preview width</label></small>
                                        <span class="material-symbols-outlined">
                                            info
                                        </span>
                                    </div>
                                    <div  class="rc-form-row">
                                        <input type="checkbox">
                                        <small><label for="">Full</label></small>
                                    </div>
                                    <input type="number" name="preview" style: width="10%">
                                </div>
                                <div class="rc-form-row">
                                    <div class="form-row-icon">
                                        <small><label for="">Nesting</label></small>
                                        <span class="material-symbols-outlined">
                                            info
                                        </span>
                                    </div>
                                    
                                </div>  
                            </div>

                            <div class="rc-form-header">
                                <h4>Submission</h4>
                                <span class="material-symbols-outlined">
                                    remove
                                </span>
                            </div>
                        </div>
                    </div>
               </div>

               <div id="Theme" class="rightTabContent">
                    <h3>Theme content</h3>
               </div>

               <div id="Export" class="rightTabContent">
                    <h3>Export content</h3>
               </div>
            </div>
        </div>
    </div>


    <script src="index.js"></script>
</body>
</html>