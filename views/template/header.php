<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Berlatih-Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo CSS_DIR; ?>bootstrap.css" rel="stylesheet">
        <link href="<?php echo CSS_DIR; ?>bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo CSS_DIR; ?>default.css" rel="stylesheet">
    </head>
    <body class="demo">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">berlatih|demo</a>
                    <div class="nav-collapse">
                        <!--ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                </ul>
                            </li>
                        </ul-->
                        <a class="btn btn-danger pull-right" href="<?php echo URL?>dashboard/logout">Logout &rarr;</a>

                    </div><!--/.nav-collapse -->

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">
                                Dashboard
                            </li>
                            <li>
                                <a href="<?php echo URL;?>dashboard"><i class="icon-home"></i> Dashboard</a>
                            </li>
                          
                            <li class="nav-header">
                                Users
                            </li>
                            <li>
                                <a href="profile.htm"><i class="icon-user"></i>My Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo URL;?>dashboard/user_setting"><i class="icon-cog"></i> Settings (Owner only)</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="<?php echo URL;?>dashboard/help"><i class="icon-info-sign"></i> Help</a>
                            </li>
                          
                        </ul>
                    </div>
                </div>
                <div class="span9">

