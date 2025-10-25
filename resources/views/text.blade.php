<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test FilePond</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap pour le style de base -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FilePond CSS -->
    <link href="https://unpkg.com/filepond@4.32.9/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview@4.6.11/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <style>
        /* Wrapper global */
.filepond--root {
    /* background-color: green !important;   couleur du fond */
    border: 2px dashed #FF4C4C !important; /* bordure */
    border-radius: 0 !important;
    padding: 20px !important;
}

.filepond--panel {
    background-color: #181d38 !important;  /* couleur de fond réelle */
    border-radius: 0 !important;
}
/* Texte Glisser-déposer */
.filepond--drop-label {
    color: #FF4C4C !important;
    font-weight: bold !important;
    font-size: 1.1rem !important;
}

/* Zone fichier ajouté */
.filepond--file {
    background-color: #FFF5F5 !important;
    border-radius: 10px !important;
    padding: 5px 10px !important;
    margin-top: 10px !important;
}

/* Image preview */
.filepond--image-preview {
    border-radius: 10px !important;
    box-shadow: 0 0 5px rgba(0,0,0,0.2) !important;
}

/* Masquer Powered by PQINA */
.filepond--credits {
    display: none !important;
}

    </style>

</head>
<body class="p-5">

    <h3>Test FilePond Drag & Drop</h3>
    <form>
        <input type="file" class="filepond" accept="image/*" name="file" />
    </form>

    <!-- jQuery (optionnel si tu veux l’utiliser) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- FilePond JS -->
    <script src="https://unpkg.com/filepond@4.32.9/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview@4.6.11/dist/filepond-plugin-image-preview.js"></script>

    <script>
        // Enregistrer le plugin
        FilePond.registerPlugin(FilePondPluginImagePreview);

        // Transformer tous les inputs avec la classe "filepond"
        FilePond.create(document.querySelector('.filepond'), {
            allowMultiple: false,           // true si plusieurs fichiers
            maxFiles: 1,
            acceptedFileTypes: ['image/*'], // seulement images
            labelIdle: 'Glisser-déposer ou <span class="filepond--label-action"> Parcourir </span>'
        });
    </script>

</body>
</html>
