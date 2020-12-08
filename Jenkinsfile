pipeline {
 agent any
 stages {
        stage("Build") {
            steps {
                bat 'php --version'
                bat 'composer install'
                bat 'composer --version'
                bat 'cp .env.example .env'
                bat 'php artisan key:generate'
            }
        }
        stage("Unit test") {
            steps {
                bat 'php artisan test'
            }
        }
  }
}
