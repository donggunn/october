<?php

return [
    'cms_object' => [
        'invalid_file' => 'Nom de fichier invalide : :name. Les noms de fichiers ne peuvent contenir que des caractères alphanumériques, des tiret bas, des tirets et des points. Voir ces exemples de noms de fichiers valides : page.htm, page, subdirectory/page',
        'invalid_property' => 'L’attribut ":name" ne peut pas être défini',
        'file_already_exists' => 'Le fichier ":name" existe déjà.',
        'error_saving' => 'Erreur lors de l’enregistrement du fichier ":name".',
        'error_creating_directory' => 'Erreur lors de la création du répertoire :name',
        'invalid_file_extension' => 'Extension de fichier invalide : :invalid. Les extensions autorisées sont : :allowed.',
        'error_deleting' => 'Erreur lors de la suppression du modèle ":name".',
        'delete_success' => 'Les modèles ont été supprimés avec succès : :count.',
        'file_name_required' => 'Le nom du fichier est requis.',
        'safe_mode_enabled' => 'Le mode protégé est activé.',
    ],
    'theme' => [
        'not_found_name' => 'Le thème ":name" n’a pas été trouvé.',
        'active' => [
            'not_set' => 'Aucun thème n’est activé.',
            'not_found' => 'Le thème activé est introuvable.',
        ],
        'edit' => [
            'not_set' => 'Le thème de rédaction n’est pas activé.',
            'not_found' => 'Le thème de rédaction est introuvable.',
            'not_match' => 'L’objet actuellement ouvert n’appartient pas au thème en cours de modification. Merci de recharger la page.'
        ],
        'settings_menu' => 'Thème frontal',
        'settings_menu_description' => 'Aperçu des thèmes installés et sélection du thème actif.',
        'default_tab' => 'Propriétés',
        'name_label' => 'Nom',
        'name_create_placeholder' => 'Nom du nouveau thème',
        'author_label' => 'Auteur',
        'author_placeholder' => 'Nom de la personne ou de la compagnie',
        'description_label' => 'Description',
        'description_placeholder' => 'Description du thème',
        'homepage_label' => 'Page d’accueil',
        'homepage_placeholder' => 'Adresse URL du site Web',
        'code_label' => 'Code',
        'code_placeholder' => 'Un nom de code unique pour la distribution de ce thème',
        'dir_name_label' => 'Nom du répertoire',
        'dir_name_create_label' => 'Le répertoire de destination du thème',
        'theme_label' => 'Thème',
        'theme_title' => 'Thèmes',
        'activate_button' => 'Activer',
        'active_button' => 'Activer',
        'customize_theme' => 'Personnaliser le thème',
        'customize_button' => 'Personnaliser',
        'duplicate_button' => 'Dupliquer',
        'duplicate_title' => 'Dupliquer le thème',
        'duplicate_theme_success' => 'Duplication réalisée avec succès !',
        'manage_button' => 'Gérer',
        'manage_title' => 'Gérer le thème',
        'edit_properties_title' => 'Thème',
        'edit_properties_button' => 'Modifier les propriétés',
        'save_properties' => 'Sauvegarder les propriétés',
        'import_button' => 'Importer',
        'import_title' => 'Importer le thème',
        'import_theme_success' => 'Thème importé avec succès !',
        'import_uploaded_file' => 'Fichier archive du thème',
        'import_overwrite_label' => 'Écraser les fichiers existants',
        'import_overwrite_comment' => 'Décocher cette case pour importer uniquement les nouveaux fichiers',
        'import_folders_label' => 'Répertoires',
        'import_folders_comment' => 'Sélectionner les répertoires du thème à importer',
        'export_button' => 'Exporter',
        'export_title' => 'Exporter le thème',
        'export_folders_label' => 'Répertoire',
        'export_folders_comment' => 'Sélectionner les répertoires du thème à exporter',
        'delete_button' => 'Supprimer',
        'delete_confirm' => 'Confirmer la suppression de ce thème ? Cette action est irréversible !',
        'delete_active_theme_failed' => 'Impossible de supprimer le thème actif, merci d’activer une autre thème au préalable.',
        'delete_theme_success' => 'Thème supprimé avec succès !',
        'create_title' => 'Créer un thème',
        'create_button' => 'Créer',
        'create_new_blank_theme' => 'Créer un nouveau thème vierge',
        'create_theme_success' => 'Thème créé avec succès !',
        'create_theme_required_name' => 'Saisir un nom pour ce thème.',
        'new_directory_name_label' => 'Répertoire du thème',
        'new_directory_name_comment' => 'Indiquer un nouveau nom de répertoire pour le thème en dupliqué.',
        'dir_name_invalid' => 'Le nom doit contenir uniquement des chiffres, des symboles latins et les symboles suivants : _-',
        'dir_name_taken' => 'Le nom du répertoire indiqué existe déjà.',
        'find_more_themes' => 'Trouver davantage de thèmes sur le site du CMS October.',
        'saving' => 'Sauvegarder le thème…',
        'return' => 'Retourner à la liste des thèmes',
    ],
    'maintenance' => [
        'settings_menu' => 'Maintenance',
        'settings_menu_description' => 'Paramètres de la page de maintenance et ses options.',
        'is_enabled' => 'Activer la maintenance',
        'is_enabled_comment' => 'Si activé, les visiteurs du site Web verront la page choisie ci-dessous.'
    ],
    'page' => [
        'not_found_name' => 'La page ":name" est introuvable',
        'not_found' => [
            'label' => 'La page est introuvable',
            'help' => 'La page demandée est introuvable.',
        ],
        'custom_error' => [
            'label' => 'Erreur sur la page',
            'help' => 'Nous sommes désolés, un problème est survenu et la page ne peut être affichée.',
        ],
        'menu_label' => 'Pages',
        'unsaved_label' => 'Page(s) non sauvegardée(s)',
        'no_list_records' => 'Aucune page n’a été trouvée',
        'new' => 'Nouvelle page',
        'invalid_url' => 'Format d’adresse URL invalide. L’adresse URL doit commencer par un / et peut contenir des chiffres, des lettres et les symboles suivants : ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Confirmer la suppression des pages sélectionnées ?',
        'delete_confirm_single' => 'Confirmer la suppression de cette page ?',
        'no_layout' => '-- aucune  maquette --'
    ],
    'layout' => [
        'not_found_name' => 'La maquette ":name" est introuvable',
        'menu_label' => 'Maquettes',
        'unsaved_label' => 'Maquette(s) non sauvegardée(s)',
        'no_list_records' => 'Aucune maquette n’a été trouvée',
        'new' => 'Nouvelle maquette',
        'delete_confirm_multiple' => 'Confirmer la suppression des maquettes sélectionnées ?',
        'delete_confirm_single' => 'Confirmer la suppression de cette maquette ?'
    ],
    'partial' => [
        'not_found_name' => 'Le modèle partiel ":name" est introuvable.',
        'invalid_name' => 'Nom du modèle partiel invalide : :name.',
        'menu_label' => ' Modèles partiels',
        'unsaved_label' => 'Modèle(s) partiel(s) non sauvegardé(s)',
        'no_list_records' => 'Aucun  modèle partiel n’a été trouvé',
        'delete_confirm_multiple' => 'Confirmer la suppression des modèles partiels sélectionnés ?',
        'delete_confirm_single' => 'Confirmer la suppression de ce modèle partiel ?',
        'new' => 'Nouveau modèle partiel'
    ],
    'content' => [
        'not_found_name' => 'Le fichier de contenu ":name" est introuvable.',
        'menu_label' => 'Contenu',
        'unsaved_label' => 'Contenu non sauvegardé',
        'no_list_records' => 'Aucun fichier de contenu n’a été trouvé',
        'delete_confirm_multiple' => 'Confirmer la suppression des fichiers de contenu ou répertoires sélectionnés ?',
        'delete_confirm_single' => 'Confirmer la suppression de ce fichier de contenu ?',
        'new' => 'Nouveau fichier de contenu'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Nom du gestionnaire AJAX invalide : :name.',
        'not_found' => 'Le gestionnaire AJAX ":name" est introuvable.',
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Ajouter',
        'search' => 'Rechercher…'
    ],
    'editor' => [
        'settings' => 'Configuration',
        'title' => 'Titre',
        'new_title' => 'Nouveau titre de la page',
        'url' => 'Adresse URL',
        'filename' => 'Nom du fichier',
        'layout' => 'Maquette',
        'description' => 'Description',
        'preview' => 'Aperçu',
        'meta' => 'Meta',
        'meta_title' => 'Meta Titre',
        'meta_description' => 'Meta Description',
        'markup' => 'Balisage',
        'code' => 'Code',
        'content' => 'Contenu',
        'hidden' => 'Caché',
        'hidden_comment' => 'Les pages cachées sont seulement accessibles aux administrateurs connectés.',
        'enter_fullscreen' => 'Activer le mode plein écran',
        'exit_fullscreen' => 'Annuler le mode plein écran',
        'open_searchbox' => 'Ouvrir la boite de dialogue Rechercher',
        'close_searchbox'  => 'Fermer la boite de dialogue Rechercher',
        'open_replacebox' => 'Ouvrir la boite de dialogue Remplacer',
        'close_replacebox'  => 'Fermer la boite de dialogue Remplacer'
    ],
    'asset' => [
        'menu_label' => 'Assets',
        'unsaved_label' => 'Asset(s) non sauvegardé(s)',
        'drop_down_add_title' => 'Ajouter…',
        'drop_down_operation_title' => 'Action…',
        'upload_files' => 'Déposer des fichiers',
        'create_file' => 'Créer un fichier',
        'create_directory' => 'Créer un répertoire',
        'directory_popup_title' => 'Nouveau répertoire',
        'directory_name' => 'Nom du répertoire',
        'rename' => 'Renommer',
        'delete' => 'Supprimer',
        'move' => 'Déplacer',
        'select' => 'Sélectionner',
        'new' => 'Nouveau fichier',
        'rename_popup_title' => 'Renommer',
        'rename_new_name' => 'Nouveau nom',
        'invalid_path' => 'Le chemin doit contenir uniquement des chiffres, des lettres, des espaces et les symboles suivants : ._-/',
        'error_deleting_file' => 'Erreur lors de la suppression du fichier :name.',
        'error_deleting_dir_not_empty' => 'Erreur lors de la suppression du répertoire :name. Le répertoire n’est pas vide.',
        'error_deleting_dir' => 'Erreur lors de la suppression du répertoire :name.',
        'invalid_name' => 'Le nom doit contenir uniquement des chiffres, des lettres, des espaces et les symboles suivants : ._-',
        'original_not_found' => 'Le fichier original ou son répertoire est introuvable',
        'already_exists' => 'Un fichier ou un répertoire avec le même nom existe déjà',
        'error_renaming' => 'Erreur pour renommer le fichier ou le répertoire',
        'name_cant_be_empty' => 'Le nom ne peut être vide',
        'too_large' => 'Le fichier téléchargé est trop grand. La taille maximum autorisée est de :max_size',
        'type_not_allowed' => 'Les types de fichiers autorisés sont les suivants : :allowed_types',
        'file_not_valid' => 'Fichier invalide',
        'error_uploading_file' => 'Erreur lors du dépôt du fichier ":name" : :error',
        'move_please_select' => 'Faire une sélection',
        'move_destination' => 'Répertoire de destination',
        'move_popup_title' => 'Déplacer les assets',
        'move_button' => 'Déplacer',
        'selected_files_not_found' => 'Les fichiers sélectionnés sont introuvables',
        'select_destination_dir' => 'Veuillez sélectionner un répertoire de destination',
        'destination_not_found' => 'Le répertoire de destination est introuvable',
        'error_moving_file' => 'Erreur lors du déplacement du fichier :file',
        'error_moving_directory' => 'Erreur lors du déplacement du répertoire :dir',
        'error_deleting_directory' => 'Erreur lors de la suppression du répertoire d’origine :dir',
        'path' => 'Chemin'
    ],
    'component' => [
        'menu_label' => 'Composants',
        'unnamed' => 'Sans nom',
        'no_description' => 'Aucune description n’a été fournie',
        'alias' => 'Alias',
        'alias_description' => 'Nom unique fourni lors de l’utilisation du composant sur une page ou une maquette.',
        'validation_message' => 'Les alias du composant sont requis et ne peuvent contenir uniquement des symboles latins, des chiffres et des tirets bas. Les alias doivent commencer par un symbole latin.',
        'invalid_request' => 'Le modèle ne peut être enregistré puisque les données d’un composant sont invalides.',
        'no_records' => 'Aucun composant n’a été trouvé',
        'not_found' => 'Le composant ":name" est introuvable.',
        'method_not_found' => 'Le composant ":name" ne contient pas de méthode ":method".',
    ],
    'template' => [
        'invalid_type' => 'Type de modèle inconnu.',
        'not_found' => 'Le modèle demandé est introuvable.',
        'saved'=> 'Le modèle demandé a été sauvegardé avec succès.'
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Gérer le contenu',
        'manage_assets' => 'Gérer les assets',
        'manage_pages' => 'Gérer les pages',
        'manage_layouts' => 'Gérer les maquettes',
        'manage_partials' => 'Gérer les modèles partiels',
        'manage_themes' => 'Gérer les thèmes',
        'manage_media' => 'Gérer les médias'
    ],
    'mediafinder' => [
        'default_prompt' => 'Cliquer su le bouton %s pour trouver un média'
    ],
    'media' => [
        'invalid_path' => "Le chemin du fichier indiqué est invalide : ':path'.",
        'menu_label' => 'Média',
        'upload' => 'Déposer un fichier',
        'move' => 'Déplacer',
        'delete' => 'Supprimer',
        'add_folder' => 'Ajouter un répertoire',
        'search' => 'Rechercher',
        'display' => 'Affichage',
        'filter_everything' => 'Tout',
        'filter_images' => 'Images',
        'filter_video' => 'Vidéo',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Documents',
        'library' => 'Librairie',
        'folder_size_items' => 'Articles(s)',
        'size' => 'Taille',
        'title' => 'Titre',
        'last_modified' => 'Dernière modification',
        'public_url' => 'Adresse URL publique',
        'click_here' => 'Cliquer ici',
        'thumbnail_error' => 'Erreur durant la création de la miniature.',
        'return_to_parent' => 'Retourner au répertoire parent',
        'return_to_parent_label' => 'Monter…',
        'nothing_selected' => 'Aucun sélection.',
        'multiple_selected' => 'Plusieurs éléments sélectionnés.',
        'uploading_file_num' => 'Dépôt de :number fichier(s)…',
        'uploading_complete' => 'Dépôt des fichiers terminé',
        'uploading_error' => 'Le dépôt des fichiers a échoué',
        'type_blocked' => 'Le type de fichier utilisé est bloqué pour des raisons de sécurité.',
        'order_by' => 'Trier par',
        'folder' => 'Répertoire',
        'no_files_found' => 'Aucun fichier trouvé.',
        'delete_empty' => 'Sélectionner les articles à supprimer.',
        'delete_confirm' => 'Confirmer la suppression de ces articles ?',
        'error_renaming_file' => 'Erreur pour renommer l’article.',
        'new_folder_title' => 'Nouveau répertoire',
        'folder_name' => 'Nom du répertoire',
        'error_creating_folder' => 'Erreur durant la création du répertoire',
        'folder_or_file_exist' => 'Un répertoire ou un fichier portant ce nom existe déjà.',
        'move_empty' => 'Sélectionner les articles à déplacer.',
        'move_popup_title' => 'Déplacer des fichiers ou répertoires',
        'move_destination' => 'Répertoire de destination',
        'please_select_move_dest' => 'Sélectionner un répertoire de destination.',
        'move_dest_src_match' => 'Sélectionner un autre répertoire de destination.',
        'empty_library' => 'La librairie multimédia est vide. Pour commencer, télécharger des fichiers ou répertoires.',
        'insert' => 'Insérer',
        'crop_and_insert' => 'Copier / coller',
        'select_single_image' => 'Sélectionner une seule image.',
        'selection_not_image' => 'L’article sélectionné n’est pas une image.',
        'restore' => 'Annuler tous les changements',
        'resize' => 'Redimensionner…',
        'selection_mode_normal' => 'Normal',
        'selection_mode_fixed_ratio' => 'Rapport fixe',
        'selection_mode_fixed_size' => 'Taille fixe',
        'height' => 'Hauteur',
        'width' => 'Largeur',
        'selection_mode' => 'Mode de sélection',
        'resize_image' => 'Redimensionner l’image',
        'image_size' => 'Taille de l’image :',
        'selected_size' => 'Sélectionnée :'
    ]
];
