<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("Assets/css/style.css"); ?>">
    <title>Templates</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">

            <!-- Navigation Links -->
            <div class="nav-links">
                <a href="home">Back to Page</a>
            </div>
    
        </div>

        <div class="temp">
            <h1 >Please select a template for your resume.<br>

                
                You can always change it later.</h1>
            <div class="template_box">
                <div class="template-card">
                    <a href="resume"> <img src="<?= base_url('Assets/images/resum1.png');?>" alt="Double Column Resume"></a>
                    <div class="template-title">Double Column</div>
                    <a href="resume" class="btn">Use this template</a>
                </div>
                <div class="template-card">
                    <a href="resume2"> <img src="<?= base_url('Assets/images/resum2.png');?>" alt="Modern Resume"></a>
                    <div class="template-title">Modern</div>
                    <a href="resume2" class="btn">Use this template</a>
                </div>


                <div class="template-card">
                    <a href="resume"> <img src="<?= base_url('Assets/images/resum3.png');?>" alt="Creative Resume"></a>
                    <div class="template-title">Creative</div>
                    <a href="resume" class="btn">Use this template</a>
                </div>


                <div class="template-card">
                    <a href="resume"> <img src="<?= base_url('Assets/images/resum4.png');?>" alt="Stylish Resume"></a>
                    <div class="template-title">Stylish</div>
                    <a href="resume" class="btn">Use this template</a>
                </div>


                <div class="template-card">
                    <a href="resume"> <img src="<?= base_url('Assets/images/resum3.png');?>" alt="Creative Resume"></a>
                    <div class="template-title">Creative</div>
                    <a href="resume" class="btn">Use this template</a>
                </div>
            </div>
           </div>
    
    </div>


    
</body>
</html>