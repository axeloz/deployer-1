<?php

namespace REBELinBLUE\Deployer\Http\Validators;

/**
 * Class for validating git repository URLs.
 */
class RepositoryValidator
{
    /**
     * Validate that the repository URL looks valid.
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @param  mixed  $parameters
     * @return bool
     */
    public function validate($attribute, $value, $parameters)
    {
        if (preg_match('/^(ssh|git|https?):\/\//', $value)) { // Plain old git repo
            return true;
        }

        if (preg_match('/^(.*)@(.*):(.*)\/(.*)\.git/', $value)) { // Gitlab
            return true;
        }

        /*
        TODO: improve these regexs, using the following stolen from PHPCI (sorry Dan!)
        'ssh': /git\@github\.com\:([a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-]+)\.git/,
        'git': /git\:\/\/github.com\/([a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-]+)\.git/,
        'http': /https\:\/\/github\.com\/([a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-]+)(\.git)?/
        */
        if (preg_match('/^[a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-\.]+$/', $value)) { // Github
            return true;
        }

        /*
        'ssh': /git\@bitbucket\.org\:([a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-]+)\.git/,
        'http': /https\:\/\/[a-zA-Z0-9_\-]+\@bitbucket.org\/([a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-]+)\.git/,
        'anon': /https\:\/\/bitbucket.org\/([a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-]+)(\.git)?/
        */
        if (preg_match('/^[a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-\.]+$/', $value)) { // Bitbucket
            return true;
        }

        return false;
    }
}