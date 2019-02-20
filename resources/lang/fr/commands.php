<?php

return [

    'label'                => 'Commandes',
    'deploy_webhook'       => 'Les déploiements peuvent être déclenchés grâce à l\'URL suivante',
    'webhook_help'         => 'Aide Webhook',
    'webhook_example'      => 'En envoyant une requête POST vers cette URL, vous pouvez lancer un nouveau déploiement à ' .
                              'partir de la dernière révision.',
    'webhook_fields'       => 'Champs POST optionnels',
    'webhook_reason'       => 'Motif du déploiement',
    'webhook_source'       => 'A name to use to indicate who/what triggered the deployment, for instance "CI server"',
    'webhook_branch'       => 'The branch to deploy, if blank it defaults to the branch configured in the project',
    'webhook_update'       => 'Whether a deployment should only run if the currently deployed branch matches to ' .
                              'branch to be deployed, defaults to false',
    'webhook_url'          => 'A URL to link the name to, for example the build details on your CI server',
    'webhook_commands'     => 'Liste séparée par des virgules des IDs des commandes à exécuter',
    'webhook_optional'     => 'Optional Command IDs',
    'webhook_curl'         => 'Exemple de commande cURL',
    'webhook_commit'       => 'L\'identifiant Git de la révision qui devrait être déployé ou le HEAD si non renseigné',
    'reason_example'       => urlencode('test du webhook'),
    'generate_webhook'     => 'Générer une nouvelle URL de Webhook (l\'ancienne URL ne fonctionnera plus)',
    'step'                 => 'Étape',
    'before'               => 'Avant',
    'name'                 => 'Nom',
    'run_as'               => 'Exécuter en tant que',
    'migrations'           => 'Migrations',
    'bash'                 => 'Script bash',
    'servers'              => 'Serveurs',
    'default'              => 'Serveur par défaut',
    'options'              => 'Vous pouvez utiliser les variables suivantes dans vos scripts (cliquer pour visualiser)',
    'release_id'           => 'Identifiant du déploiement',
    'release_path'         => 'Chemin complet du déploiement',
    'branch'               => 'Branche à déployer',
    'project_path'         => 'Chemin du projet',
    'after'                => 'Après',
    'configure'            => 'Configurer',
    'clone'                => 'création du nouveau déploiement',
    'install'              => 'installation des dépendances Composer',
    'activate'             => 'activation du déploiement',
    'purge'                => 'purge des anciens déploiements',
    'title'                => 'Commandes de l\'étape :step',
    'warning'              => 'La commande n\'a pas pu être enregistrée, merci de vérifier le formulaire ci-dessous.',
    'create'               => 'Ajouter une commande',
    'edit'                 => 'Éditer une commande',
    'sha'                  => 'L\'identifiant Git SHA de la révision',
    'short_sha'            => 'L\'identifiant Git court de la révision',
    'deployer_name'        => 'Nom de l\'utilisateur qui a déclenché le déploiement',
    'deployer_email'       => 'Adresse email de l\'utilisateur qui a déclenché le déploiement',
    'committer_name'       => 'Nom de l\'utilisateur qui a fait le dernier commit',
    'committer_email'      => 'Adresse email de l\'utilisateur qui a fait le dernier commit',
    'none'                 => 'Aucune commande configurée',
    'optional'             => 'Optionnel(le)',
    'example'              => 'exemple :',
    'optional_description' => 'Demander à chaque déploiement s\'il faut exécuter cette étape',
    'default_description'  => 'Inclure cette étape sauf si désactivée explicitement',
    'services'             => 'Services supportés',
    'services_description' => 'You can use the webhook with these services and the relevant details will be ' .
                              'gathered from the data they send across. The &quot;<em>update_only</em>&quot; and ' .
                              '&quot;<em>commands</em>&quot; parameters may be included in the query string, all ' .
                              'other fields are ignored.',

];
