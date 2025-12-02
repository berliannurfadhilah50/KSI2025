pipeline {
    agent any

    stages {

        stage('Clone Repository') {
            steps {
                git url: 'https://github.com/berliannurfadhilah50/KSI2025.git', branch: 'main'
            }
        }

        stage('Install PHPUnit') {
            steps {
                bat 'curl -L https://phar.phpunit.de/phpunit-12.phar -o phpunit.phar'
                bat 'php phpunit.phar --version'
            }
        }

        stage('Run Unit Tests') {
            steps {
                bat 'php phpunit.phar tests'
            }
        }

    }
}
