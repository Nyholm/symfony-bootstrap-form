namespace :custom_composer do
  task :update do
    on roles(:all) do
        invoke "composer:run", :update
    end
  end
end