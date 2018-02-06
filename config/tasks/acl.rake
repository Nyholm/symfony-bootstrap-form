
namespace :acl do
    task :permissions do
      on roles(:all) do |host|
        execute "setfacl -R -m u:www-data:rwX -m u:#{host.user}:rwX #{release_path}/var"
        execute "setfacl -dR -m u:www-data:rwX -m u:#{host.user}:rwX #{release_path}/var"
      end
    end
end
