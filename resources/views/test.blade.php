<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Select2 Demo</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <style>
        body { font-family: Arial; padding: 20px; }
        .select2-container--default .select2-selection--single {
            height: 38px; 
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<h3>Choisir une formation</h3>

<select class="search-select" style="width: 300px;">
    <option></option> <!-- placeholder -->
    <optgroup label="Digital">
        <option value="1">Développement Web</option>
        <option value="2">Marketing Digital</option>
    </optgroup>
    <optgroup label="Langues">
        <option value="3">Anglais</option>
        <option value="4">Français</option>
    </optgroup>
</select>

<script>
$(document).ready(function() {
    $('.search-select').select2({
        placeholder: "--- Sélectionnez la formation ---",
        allowClear: true,
        width: '100%'
    });
});
</script>

</body>
</html>
