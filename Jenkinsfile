pipeline {
    agent any
    stages {
        stage('Install') {
            steps {
                sh 'rm -rf ./app/cache/*'
                sh 'composer install'
            }
        }
    }
    post {
        success {
          script {
             if (env.BRANCH_NAME == 'master') {
                 sh 'bundle install --path vendor/bundle'
                 sh 'bundle exec cap staging deploy'
                 sh 'sleep 5'
                 sh 'wget https://symfony-form.happyr.io/'
             }
           }
        }
    }
}
