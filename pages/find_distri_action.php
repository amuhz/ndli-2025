<?php
function sanitize($data) {
    return htmlspecialchars(trim($data));
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = isset($_POST['name']) ? sanitize($_POST['name']) : 'Non renseigné';
    $os = isset($_POST['os']) ? sanitize($_POST['os']) : 'Non renseigné';
    $activities = isset($_POST['acti']) ? $_POST['acti'] : [];
    $activities = array_map('sanitize', $activities);
    $pc_type = isset($_POST['pc_type']) ? sanitize($_POST['pc_type']) : 'Non renseigné';
    $skill = isset($_POST['skill']) ? sanitize($_POST['skill']) : 'Non renseigné';
    $freq = isset($_POST['freq']) ? sanitize($_POST['freq']) : 'Non renseigné';
    
} else {
    die('Veuillez remplir le formulaire avant.');
}
?>