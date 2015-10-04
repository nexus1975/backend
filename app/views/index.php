<!doctype html>
<html ng-app="testApp">
    <head>
        <meta charset="utf-8">
        <title>Laravel App 2 AngularJS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!--
        <link rel="stylesheet" href="<?php echo asset('/packages/styles/bootstrap/css/bootstrap.css') ?>" />     
        //-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">    
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//mgcrea.github.io/angular-strap/styles/angular-motion.min.css">
    <link rel="stylesheet" href="//mgcrea.github.io/angular-strap/styles/bootstrap-additions.min.css">
    <link rel="stylesheet" href="//mgcrea.github.io/angular-strap/styles/libraries.min.css">
    <link rel="stylesheet" href="//mgcrea.github.io/angular-strap/styles/main.min.css">

        <link rel="stylesheet" href="<?php echo asset('/packages/styles/main.css') ?>"/>
        
        <style>
            #imageaday {
                position:fixed;
                top:0;                
                z-index:100;
                height: 40px; 
                width: 100%; 
                overflow: hidden;
            }
        </style>
        
    </head>
    <body style="padding: 0px; margin:0px;">        
        <span us-spinner></span>
                
        <!-- app header / image //-->
        <div id="imageaday" ng-controller="ImageCtrl">               
            <span style="position: absolute; width: 100%; margin-left: 5px; margin-top: 10px;">
                <span style="padding: 5px; background-color: black; color: white; font-size: 14px; vertical-align: central;">
                    <b><span class="glyphicon glyphicon-headphones"></span> Hello Laravel App 2 AngularJS</b>
                </span>
            </span>
            
            <span style="position: absolute; width: 100%; margin-top:20px; text-align: right;">
                <span ng-bind="imagedata.description" style="text-align: right; background-color: black; color: white;"></span>
            </span>            
            <span><img id="photo" alt="" src="{{imagedata.imageUrl}}" style="margin-top: -500px; width: 100%; background-color: black;" /></span>            
            
        </div>
        
        <!-- body //-->
        <div style="margin-top: 42px; padding-left: 10px; padding-right: 10px;">        
            
            <!-- menu //-->
            <div style="margin-bottom: 5px;">
                <!-- Single button -->
                <div class="btn-group" dropdown is-open="status.isopen">
                  <button type="button" class="btn btn-primary dropdown-toggle" dropdown-toggle ng-disabled="disabled">
                    Button dropdown <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
            </div>                                     
            
            <!-- view //-->
            <!--<div ng-view=""></div> -->      
            <div ui-view=""></div>       
        </div>
                            
        <!-- libraries //-->
        <script src="//code.angularjs.org/1.3.1/angular.min.js" data-semver="1.3.1"></script>
        <script src="//code.angularjs.org/1.3.1/angular-animate.min.js" data-semver="1.3.1"></script>
        <script src="//code.angularjs.org/1.3.1/angular-sanitize.min.js" data-semver="1.3.1"></script>
        <script src="//mgcrea.github.io/angular-strap/dist/angular-strap.js" data-semver="v2.1.4"></script>
        <script src="//mgcrea.github.io/angular-strap/dist/angular-strap.tpl.js" data-semver="v2.1.4"></script>
        
       
        
        <!-- 
        <script src="<?php echo asset('/packages/angular/angular.js') ?>"></script>
        //-->
        <script src="<?php echo asset('/packages/angular/angular-resource.js') ?>"></script>
        <script src="<?php echo asset('/packages/angular/angular-route.js') ?>"></script>
        <script src="<?php echo asset('/packages/angular/angular-ui-router.min.js') ?>"></script>
        <script src="<?php echo asset('/packages/angular/spin.js') ?>"></script>
        <script src="<?php echo asset('/packages/angular/angular-spinner.js') ?>"></script>        
        <script src="<?php echo asset('/packages/angular/angular-loading-spinner.js') ?>"></script>         
        
        
        <script src="<?php echo asset('/packages/angular/ui-bootstrap-tpls-0.12.0.js') ?>"></script> 
               
        <!-- 
        <script src="<?php echo asset('/packages/angular/angular-strap.min.js') ?>"></script>
        <script src="<?php echo asset('/packages/angular/angular-strap.tpl.min.js') ?>"></script>
        //-->
        
        <!-- internal / in-house libs //-->
        <script src="<?php echo asset('/packages/scripts/imageaday.js') ?>"></script>
        <!-- app scripts //-->
        <script src="<?php echo asset('/packages/scripts/objects.services.js') ?>"></script>                
        <script src="<?php echo asset('/packages/scripts/objects.controllers.js') ?>"></script>     
        <script src="<?php echo asset('/packages/scripts/app.js') ?>"></script>     
        
    </body>
</html>
