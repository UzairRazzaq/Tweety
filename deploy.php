<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'tweety');

// Project repository
set('repository', 'git@bitbucket.org:uzairrazzaq/tweety.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('142.93.0.65')
    ->user('deployer')
    ->identityFile('C:/Deployer/ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/test');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

// before('deploy:symlink', 'artisan:migrate');

