pipeline {
 environment {
    PATH = "$PATH:/usr/bin/docker-compose"
 }
 agent any
 stages {
    stage('Build') {
        inviroment {
            DB_PORT=3306
            DB_DATABASE=homestead
            DB_HOST=127.0.0.1
            DB_PASSWORD=secret  
            DB_USERNAME=homestead
    }
    steps {
        sh 'php --version'
        sh 'cp .env.example .env'
        sh 'cp composer.json composer-phar'
        sh 'php composer.phar install'
        sh 'echo DB_HOST=${DB_HOST} >> .env'
        sh 'echo DB_DATABASE=${DB_DATABASE} >> .env'
        sh 'echo  DB_PORT=${DB_PORT} >> .env'
        sh 'echo  DB_PASSWORD=${DB_PASSWORD} >> .env'
        sh 'echo  DB_USERNAME=${DB_USERNAME} >> .env'
        sh 'php artisan key:generate'
        sh 'php artisan migrate'  
    }
 }
 stage('Test') {
    steps {
        sh 'php artisan test'
    }
}
    stage('Deploy') {
        steps {
            sh 'Succes'
        }
    }
 }
}

 