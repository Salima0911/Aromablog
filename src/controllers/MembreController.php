<?php
require '../models/User.php';

if (empty($_SESSION['user']) && !isset($_SESSION['user'])) {
    header('location: /login');
}

$updated = false;
$errors = [];
if (isset($_POST['update'])) {
    if (!empty($_POST['csrf_token'])) {
        if (hash_equals($_SESSION['user']['csrf_token'], $_POST['csrf_token'])) {
            // Le token est valide, procéder avec la soumission
            extract($_POST);
            if (!empty($name) && !empty($email)) {
                // die(var_dump($_FILES['picture']['name']));
                // header('location: /membre');
                // Répertoire de base pour les uploads
                if (!empty($_FILES['picture']['name']) && $_SESSION['user']['picture'] !== $_FILES['picture']['name']) {
                    $hash = md5($_SESSION['user']['name'] . $_SESSION['user']['email']);
                    $folderNameUser = base_convert($hash, 16, 10);
                    $baseDir = $_SERVER['DOCUMENT_ROOT'] . "/assets/images/";

                    // Créer un sous-dossier pour l'utilisateur
                    $userDir = $baseDir . $folderNameUser . '/';
                    $pathImagesUser = '/assets/images/' . $folderNameUser . '/';
                    // Si le dossier n'existe pas, le créer
                    if (!is_dir($userDir)) {
                        mkdir($userDir, 0777, true);  // true permet de créer tous les dossiers nécessaires
                    }

                    // Nom complet du fichier à sauvegarder (avec chemin utilisateur)
                    $targetFile = $userDir . basename($_FILES["picture"]["name"]);

                    // Vérifier si le fichier est une image réelle
                    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    $check = getimagesize($_FILES["picture"]["tmp_name"]);

                    if (
                        $check !== false
                    ) {
                        // Vérifier si le fichier existe déjà
                        if (file_exists($targetFile)) {
                            $errors[] =  "Désolé, le fichier existe déjà.";
                        }
                        // Limiter la taille du fichier (ici 2MB max)
                        elseif ($_FILES["picture"]["size"] > 2 * 1024 * 1024) {
                            $errors[] =  "Désolé, le fichier est trop volumineux (maximum 2MB).";
                        }
                        // Limiter le type de fichier accepté (JPEG, PNG, GIF)
                        elseif ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                            $errors[] = "Désolé, seuls les formats JPG, JPEG, PNG et GIF sont acceptés.";
                        } else {
                            // Déplacer l'image vers le répertoire de l'utilisateur
                            if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFile)) {
                                $_SESSION['user']['picture'] = $targetFile;
                                //"L'image " . htmlspecialchars(basename($_FILES["picture"]["name"])) . " a été uploadée avec succès.";
                            } else {
                                $errors[] = "Désolé, une erreur est survenue lors de l'upload.";
                            }
                        }
                    } else {
                        $errors[] = "Le fichier n'est pas une image.";
                    }
                    // var_dump($_POST);
                }
                if (empty($errors)) {
                    // Si tout est ok, on peut continuer avec la mise à jour du profil
                    if (isset($_FILES['picture']) && !empty($_FILES['picture']['name'])) {
                        // die('here files');
                        $updated = $updateUser($id, $name, $email, $password, $pathImagesUser . $_FILES['picture']['name']);
                        $_SESSION['user']['picture'] = !empty($_FILES) ? $pathImagesUser . $_FILES['picture']['name'] :  $_SESSION['user']['picture'];
                    } else {
                        // die('here');
                        $updated = $updateUser($id, $name, $email);
                    }
                    $_SESSION['user']['name'] = $name;
                    $_SESSION['user']['email'] = $email;
                    $_SESSION['user']['password'] = !empty($password) ? password_hash($password, PASSWORD_BCRYPT) : $_SESSION['user']['mdp'];
                }
            } else {
                // Le token est invalide
                die("CSRF token validation failed.");
            }
        }
    }
}


require '../public/views/membre.view.php';
