<?php

require 'models/modeluser.php';

switch ($action) {
                    case 'login':
                        $erreur =""; //present dans le formlogin.php
                        $login ="";
                        login(); //crrer la fonction dans le fichier controlleur

                        break;
                    
                    case 'deconnect';

                        deconnect();

                        
                        break;
                    
                    default:

                        break;
                }

