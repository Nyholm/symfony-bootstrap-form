# config valid for current version and patch releases of Capistrano
lock "~> 3.10.1"
set :log_level, :info

set :application, "symfony-form"
set :repo_url, "git@github.com:Nyholm/symfony-bootstrap-form.git"
set :deploy_to, "/home/sites/io.happyr.symfony-form"

# Default value for :linked_files is []
set :linked_files, fetch(:linked_files, []).push('app/config/parameters.yml')

set :scm, :git
# set :format, :pretty
set :log_level, :info
# set :pty, true

set :linked_files, fetch(:linked_files, []).push('.env')
set :linked_dirs, fetch(:linked_dirs, []).push('var/log')

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

set :keep_releases, 5
set :file_permissions_paths, ["var"]
set :file_permissions_users, ["www-data", "ubuntu"]
set :web_path, "public"

set :composer_install_flags, '--no-dev --no-interaction --optimize-autoloader'
set :symfony_console_path, "bin/console"

# Install composer if it does not exist
SSHKit.config.command_map[:composer] = "php #{shared_path.join("composer.phar")}"

## Hooks
before "deploy:updated", "deploy:set_permissions:acl"
after "composer:install", "custom_composer:update"

namespace :deploy do
  after :updated, 'composer:install_executable'
end
