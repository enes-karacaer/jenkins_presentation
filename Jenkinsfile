pipeline {
 agent any
 stages {
        stage("Build") {
            steps {
                sh 'php --version'
                sh 'composer install'
                sh 'composer --version'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }
        stage("Unit Test") {
            steps {
                sh 'php artisan test'
            }
        }

/*
        stage('Selenium Test') {
            steps {
                sh 'php artisan dusk'
            }
        }
        */
  }
}
