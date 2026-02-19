<?php
                $name = isset($_GET["name"])?$_GET["name"]:null;
                $password = isset($_GET["password"])?$_GET["password"]:null;
                if ($name == "sabrina viana mariano" && $password == "26/10/2025") {
                    header('Location:../html/saas.html');
                    }
                    else {
                        $acess = "refused";
                        header('Location:../html/failed.html');
                };
            ?>