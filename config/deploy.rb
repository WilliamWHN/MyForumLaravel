# ./config/deploy.rb

lock '3.15.0'
set :application, 'My_Forum'
set :repo_url, 'git@github.com:WilliamWHN/MyForumLaravel.git'
# Default branch is :master
set :branch, ENV["branch"] || "master"
# Default deploy_to directory is /var/www/laravel-capistrano
set :deploy_to, '/home/cld2_12/cld2-12.mycpnv.ch'
set :use_sudo, false
# set :laravel_dotenv_file, 'cld2-12.mycpnv.ch/secrets/.env'
# Default value for keep_releases is 5
set :keep_releases, 5
SSHKit.config.command_map[:composer] = "php -d allow_url_fopen=true #{shared_path.join('composer')}"
append :linked_dirs,
    'storage/app',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs'

namespace :composer do
    desc "Running Composer Install"
    task :install do
        on roles(:composer) do
            within release_path do
                execute :composer, "install --no-dev --prefer-dist --no-interaction --optimize-autoloader"
            end
        end
    end
end
task :set_php_version do
  on roles(:all) do
    execute "ls /home/cld2_12/.data/cld2-12.mycpnv.ch_php* 2>/dev/null | sed -E 's/.+(php[[:digit:]]+)$/\\1/' >/tmp/.php-cli-version"
  end
end
# Copy .env in the current release
task :copy_dotenv do
   on roles(:all) do
     execute :cp, "#{shared_path}/.env #{release_path}/.env"
   end
end
before 'composer:run', 'set_php_version'
namespace :deploy do
    after :updated, "composer:install"
    after :updated, 'copy_dotenv'
end
after  'copy_dotenv', 'laravel:migrate'

Rake::Task['laravel:optimize'].clear_actions rescue nil
Rake::Task['deploy:set_permissions:acl'].clear_actions rescue nil

